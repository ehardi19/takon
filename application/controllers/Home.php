<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['question'] = $this->Question_Model->getAllQuestion();
        $data['answer'] = $this->Answer_Model->getAllAnswer();

        $this->load->view('home/header');
        $this->load->view('home/home',$data);
    }
}