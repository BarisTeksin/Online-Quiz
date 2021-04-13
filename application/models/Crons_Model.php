<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crons_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
    public $tablo_adi = "users";

    public function gunluk_azalt()
    {
        return $this->db->set("days_left","`days_left` - 1", FALSE)->where(array("days_left >" => 0, "status" => 1))->update($this->tablo_adi);
    }

    public function hesabi_pasiflestir()
    {
        return $this->db->set("status",2)->where(array("days_left" => 0, "status" => 1))->update($this->tablo_adi);
    }
}