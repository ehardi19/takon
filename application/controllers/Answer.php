<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Answer extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('answer/header');
        $this->load->view('answer/answer');
    }
}