<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Login_Model");
    }

    public function index()
    {
        if(!cookie_kontrol()){
            $this->load->view('dashboard/login');
        }else{
            redirect(base_url("dashboard"));
        }
    }

    public function login()
    {
        $username = $this->input->post("username",TRUE);
        $password = md5($this->input->post("password",TRUE));
        echo $password;
        echo $username;
        if(isset($username) and isset($password)){
            $result = $this->Login_Model->login(array("username" => $username,"password" => $password));
            echo $result->num_rows();
            if($result->num_rows() > 0){
                $this->session->set_userdata("uid",$result->row()->id);
                $this->session->set_userdata("name",$result->row()->name);
                $this->session->set_userdata("phone",$result->row()->phone);
                $this->session->set_userdata("profil",$result->row()->profile);
                redirect(base_url("dashboard"));
            }else{
                $this->session->set_flashdata("error","Yanlış kullanıcı adı veya şifre");
            }
        }
    }
    public function Logout()
    {
        $this->session->unset_userdata("uid");
        $this->session->unset_userdata("name");
        $this->session->unset_userdata("phone");
        $this->session->unset_userdata("profil");
    }
}