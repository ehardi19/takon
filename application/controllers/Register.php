<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Register extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('landing/register');
    }

    public function regist() {
        $user = $this->User_Model->createUser();
        if($user != null) {
            redirect('login');
        } else {
            redirect('register');
        }
    }
}