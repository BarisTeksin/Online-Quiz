<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rakip_Analizi_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $tablo_urunler = "rakip_analizi_urunleri";
    public $tablo_sonuclar = "rakip_analizi";
    public $tablo_gorevler = "rakip_analizi_gorevler";

    public function urun_sayisi($where)
    {
        return $this->db->where($where)->count_all_results($this->tablo_urunler);
    }

    public function urun_listele($limit,$count,$where)
    {
        return $this->db->limit($limit, $count)->where($where)->get($this->tablo_urunler)->result();
    }

    public function urun_getir($where)
    {
        return $this->db->where($where)->get($this->tablo_urunler)->result();
    }

    public function urun_getir_num($where)
    {
        return $this->db->where($where)->get($this->tablo_urunler)->num_rows();
    }

    public function DurumDegistir($id,$durum)
    {
        return $this->db->set("status",$durum)->where(array("id" => $id))->update($this->tablo_urunler);
    }

    public function delete($where)
    {
        return $this->db->where($where)->delete($this->tablo_urunler);
    }

    // Ürünleri listeleme bitti.
    // Sonuçları listeleme başladı.

    public function gorev_sayisi($where)
    {
        return $this->db->where($where)->count_all_results($this->tablo_gorevler);
    }

    public function gorev_listele($limit,$count,$where)
    {
        return $this->db->limit($limit, $count)->where($where)->get($this->tablo_gorevler)->result();
    }

    public function gorev_getir($where)
    {
        return $this->db->where($where)->get($this->tablo_gorevler)->result();
    }

    public function gorev_getir_num($where)
    {
        return $this->db->where($where)->get($this->tablo_gorevler)->num_rows();
    }

    /*public function gorev_DurumDegistir($id,$durum)
    {
        return $this->db->set("status",$durum)->where(array("id" => $id))->update($this->tablo_gorevler);
    }*/

    public function gorev_delete($where)
    {
        return $this->db->where($where)->delete($this->tablo_gorevler);
    }

}