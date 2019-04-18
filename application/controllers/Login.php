<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('landing/login');
    }

    public function signup() {
        redirect('register');
    }

    public function signin() {
        $user = $this->User_Model->getUserByEmail();
        if($user != null) {
            $this->session->set_userdata('user', $user[0]);
            redirect('home');
        } else {
            redirect('login');
        }
    }

    public function signout() {
        session_destroy();
        redirect('login');
    }
}