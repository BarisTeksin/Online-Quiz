<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!cookie_kontrol()){
            redirect(base_url());
        }
        $this->load->model("Dashboard_Model");
        $this->load->model("Testler_Model");
    }

    public function index()
    {
        $test_no = $this->Testler_Model->aktif_test();
        $where = array(
            "user_id" => $this->session->userdata("uid"),
            "testler.id" => $test_no->id
        );
        $data = array(
            "Test_Sayisi" => $this->Dashboard_Model->Test_Sayisi($this->session->userdata("uid")),
            "Son_Bes" => $this->Dashboard_Model->Son_Bes_Sonuc($this->session->userdata("uid")),
        );
        if($this->Testler_Model->aktif_test_sorgula($where)->num_rows() == 0){
            $data["Uyari"] = "Aktif testiniz mevcut";
        }
        $this->load->view('dashboard/homepage',$data);
    }

}