<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('login');
    }

    public function signup() {
        redirect('register');
    }

    public function signin() {
        if($this->User->getUserByEmail()) {
            redirect('home');
        } else {
            redirect('login');
        }
    }
}