<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urun_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public $tablo_adi = "products";

    public function urun_getir($where)
    {
        return $this->db->where($where)->get($this->tablo_adi);
    }

    public function urun_sayisi($where)
    {
        return $this->db->where($where)->count_all_results($this->tablo_adi);
    }

    public function urun_listele($limit,$count,$where)
    {
        return $this->db->limit($limit, $count)->where($where)->get($this->tablo_adi)->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->tablo_adi,$data);
    }

    public function delete($where)
    {
        return $this->db->where($where)->delete($this->tablo_adi);
    }

    public function fiyat_update($data,$where)
    {
        return $this->db->set($data)->where($where)->update($this->tablo_adi);
    }

    public function DurumDegistir($id,$durum)
    {
        return $this->db->set("status",$durum)->where(array("id" => $id))->update($this->tablo_adi);
    }

    public function change_log_with_limit($where)
    {
        return $this->db->where($where)->order_by("id","DESC")->limit(5)->get("change_log")->result();
    }

    public function change_log($id)
    {
        return $this->db->where(array("uid" => $id))->get("change_log");
    }

    public function change_log_genel()
    {
        return $this->db->get("change_log")->num_rows();
    }

    public function change_log_gunluk($id)
    {
        return $this->db->where(array("uid" => $id))->like("date",date("Y-m-d"))->get("change_log")->num_rows();
    }

    public function log_sayisi($where)
    {
        return $this->db->where($where)->count_all_results("change_log");
    }

    public function log_listele($limit,$count,$where)
    {
        return $this->db->limit($limit, $count)->where($where)->get("change_log")->result();
    }

    public function DeleteLog($where)
    {
        return $this->db->set("status",0)->where($where)->update("change_log");
    }

}