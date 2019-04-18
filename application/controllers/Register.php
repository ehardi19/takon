<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Register extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('register');
    }

    public function regist() {
        if($this->User->createUser()) {
            redirect('login');
        } else {
            redirect('register');
        }
    }
}