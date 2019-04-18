<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Search extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('search/header');
        $this->load->view('search/search');
    }
}