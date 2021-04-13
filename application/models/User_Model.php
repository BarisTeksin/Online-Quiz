<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $tablo_users = "users";
    public $tablo_cookie = "cookie";

    public function kullanici_sorgula($where)
    {
        return $this->db->where($where)->get($this->tablo_users);
    }

    public function insert_user($data)
    {
        return $this->db->insert($this->tablo_users,$data);
    }
    public function cookie_save($data)
    {
        return $this->db->insert($this->tablo_cookie,$data);
    }
    public function cookie_sorgula($where)
    {
        return $this->db->where($where)->get($this->tablo_cookie)->num_rows();
    }

    public function get_notification_with_limit($id,$limit_sayisi)
    {
        return $this->db->where(array("uid" => $id))->order_by("id","DESC")->limit($limit_sayisi)->get("notification")->result();
    }

    public function insert_api($id,$number,$username,$password,$shop_url)
    {
        return $this->db->set("shop_number",$number)->set("shop_username",$username)->set("shop_password",$password)->set("shop_url","$shop_url")->where(array("id" => $id))->update($this->tablo_users);
    }

}
