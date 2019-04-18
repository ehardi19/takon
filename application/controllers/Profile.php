<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Profile extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('profile/header');
        $this->load->view('profile/profile');
    }
}