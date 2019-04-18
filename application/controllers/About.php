<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class About extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('about/header');
        $this->load->view('about/about');
    }
}