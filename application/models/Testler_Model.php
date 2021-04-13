<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testler_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $tablo_sonuclar = "sonuclar";
    public $tablo_sorular = "sorular";
    public $tablo_testler = "testler";

    public function Test_Sayisi($where)
    {
        return $this->db->where($where)->count_all_results($this->tablo_sonuclar);
    }

    public function sonuc_listele($limit,$count,$where)
    {
        return $this->db->limit($limit, $count)->where($where)->order_by("tarih","DESC")->get($this->tablo_sonuclar)->result();
    }

    public function aktif_test()
    {
        return $this->db->limit(1)->order_by("id","DESC")->where(array("status" => 1))->get($this->tablo_testler)->row();
    }

    public function aktif_test_sorgula($where)
    {
        return $this->db->select("testler.id")->from($this->tablo_sonuclar)->join("testler","testler.id = sonuclar.test_id")->where($where)->get();
    }

    public function sorulari_getir($where)
    {
        return $this->db->select("cevaplar.soru_id,cevaplar.id,secenek,soru,resim")->from($this->tablo_sorular)->join("cevaplar","sorular.id = cevaplar.soru_id")->where($where)->get()->result();
    }

    public function sonuclandir($data)
    {
        return $this->db->insert($this->tablo_sonuclar,$data);
    }

    public function puan_getir($where)
    {
        return $this->db->where($where)->get("cevaplar")->row();
    }
}