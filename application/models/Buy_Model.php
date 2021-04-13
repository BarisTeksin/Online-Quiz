<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buy_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $tablo_adi = "odeme_kayitlari";

    public function key_sorgula_sayi($where)
    {
        return $this->db->where($where)->get($this->tablo_adi)->num_rows();
    }

    public function key_ekle($data)
    {
        return $this->db->insert($this->tablo_adi,$data);
    }

    public function hak_ekle($data,$where)
    {
        return $this->db->set($data)->where($where)->update("users");
    }

    public function sonuc_yaz($data,$where)
    {
        return $this->db->set($data)->where($where)->update($this->tablo_adi);
    }

    public function key_user($where)
    {
        return $this->db->where($where)->get($this->tablo_adi)->result()[0];
    }

}