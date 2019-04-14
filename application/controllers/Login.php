<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('login');
    }

    public function signup() {
        redirect('register');
    }

    public function signin() {        
        redirect('home');
    }
}