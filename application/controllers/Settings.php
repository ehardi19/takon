<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Settings extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('settings/header');
        $this->load->view('settings/settings');
    }

    public function edit() {
        $user = $this->User_Model->editUser();
        if ($user != null) {
            echo "Succcess";
        }
    }
}