<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $tablo = "users";

    public function login($where)
    {
        return $this->db->where($where)->get($this->tablo);
    }
}