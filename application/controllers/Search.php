<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Search extends CI_Controller{

    public $keyword;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        unset($_SESSION['keyword']);
        $_SESSION['keyword'] = $this->input->post('keyword');
        $data['result'] = $this->Question_Model->searchQuestion($_SESSION['keyword']);

        $this->load->view('search/header.php');
        $this->load->view('search/search.php', $data);
    }
}