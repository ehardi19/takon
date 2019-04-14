<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Profile extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('profile');
    }
}