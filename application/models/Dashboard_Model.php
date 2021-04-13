<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $tablo_sonuclar = "sonuclar";
    public $tablo_users = "users";

    public function Test_Sayisi($where)
    {
        return $this->db->where($where)->get($this->tablo_sonuclar)->num_rows();
    }

    public function Son_Bes_Sonuc($where)
    {
        return $this->db->where($where)->order_by("id","DESC")->limit(5)->get($this->tablo_sonuclar)->result();
    }

    public function Son_Bes_Ort($where)
    {
        return $this->db->select_avg('puan')->where($where)->order_by("id","DESC")->limit(5)->get($this->tablo_sonuclar)->row()->puan;
    }
}
