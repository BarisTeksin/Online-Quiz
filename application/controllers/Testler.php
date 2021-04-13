<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testler extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!cookie_kontrol()){
            redirect(base_url());
        }
        $this->load->model("Testler_Model");
    }


    public function index()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('Testler/index');
        $config['total_rows'] = $this->Testler_Model->Test_Sayisi(array("user_id" => $this->session->userdata("uid")));
        $config['uri_segment'] = 3;
        $config['per_page'] = 20;
        $config['num_links'] = $config['total_rows'] / $config['per_page'];
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $where = array(
            "user_id" => $this->session->userdata("uid"),
        );
        $test_no = $this->Testler_Model->aktif_test();
        $where = array(
            "user_id" => $this->session->userdata("uid"),
            "testler.id" => $test_no->id
        );
        $ViewData = new stdClass();
        if($this->Testler_Model->aktif_test_sorgula($where)->num_rows() == 0){
            $ViewData->test_no = $test_no->id;
        }else{
            $ViewData->test_no = 0;
        }
        

        $ViewData->results = $this->Testler_Model->sonuc_listele($config['per_page'],$page,array("user_id" => $this->session->userdata("uid")));
        $ViewData->links = $this->pagination->create_links();
        

        $this->load->view("dashboard/list_sonuclar",$ViewData);
    }

    public function sinav()
    {
        $sinav_no = $this->uri->segment(3);
        $where = array(
            "user_id" => $this->session->userdata("uid"),
            "testler.id" => $sinav_no
        );
        if($this->Testler_Model->aktif_test_sorgula($where)->num_rows() == 0){
            $where = array(
                "status" => 1,
                "sorular.test_id" => $sinav_no
            );
            $veriler = $this->Testler_Model->sorulari_getir($where);
            $Test_Data = array();
            #$Test_Data[$data->soru_id]["Resim"] = $data->resim;
            foreach($veriler as $data){
                $Test_Data["Sorular"][$data->soru_id]["Resim"] = $data->resim;
                $Test_Data["Sorular"][$data->soru_id]["Soru"] = $data->soru;
                $Test_Data["Sorular"][$data->soru_id]["Soru_No"] = $data->soru_id;
                $Test_Data["Sorular"][$data->soru_id]["Cevaplar"][] = array("Cevap" => $data->secenek, "Secenek_No" => $data->id);
            }
            #header('Content-Type: application/json');   
            $this->load->view("dashboard/quiz",$Test_Data);

        }else{
            $this->session->set_flashdata("error","Testi daha önce çözdünüz");
            redirect(base_url("Testler"));
        }
    }

    public function sonuclandir()
    {
        if(isset($_POST)){
            $data = $_POST;
            $send_data = array();
            foreach ($data as $soru) {
                
            }
        }
    }

}