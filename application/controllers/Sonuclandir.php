<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sonuclandir extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Testler_Model");
    }

    public function sonuclandir()
    {;
        $data = json_decode($this->input->post('Answ'));
        $sonuc = 0;
        foreach ($data as $soru) {
            $sonuc = $sonuc + $this->Testler_Model->puan_getir(array('soru_id' => $soru->question,'id' => $soru->answer))->puan;
        }
        $test_no = $this->Testler_Model->aktif_test();
        $data = array(
            "toplam" => $sonuc,
            "soru_sayisi" => count($data),
            'puan' => $sonuc / count($data),
            'user_id' => $this->session->userdata("uid"),
            "test_id" => $test_no->id
        );
        $this->Testler_Model->sonuclandir($data);
    }
}