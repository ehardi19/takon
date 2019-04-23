<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Search extends CI_Controller{

    public $keyword;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $keyword = $this->input->post('keyword');
        $data['result'] = $this->Question_Model->searchQuestion($keyword);

        $this->load->view('search/header.php');
        $this->load->view('search/search.php', $data);
    }
}