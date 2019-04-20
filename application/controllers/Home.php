<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = $this->Question_Model->getAllQuestion();

        $this->load->view('home/header');
        $this->load->view('home/home',['data' => $data]);
    }
}