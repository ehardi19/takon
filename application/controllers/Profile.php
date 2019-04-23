<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Profile extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['user_question'] = $this->Question_Model->getAllQuestion();
        $this->load->view('profile/header');
        $this->load->view('profile/profile', $data);
    }
}