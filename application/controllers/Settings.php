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

    public function editEmail() {
        $this->User_Model->editEmail();
        unset($_SESSION['user']['email']);
        $_SESSION['user']['email'] = $this->input->post('email');
        redirect('settings');
    }

    public function editPhone() {
        $this->User_Model->editPhone();
        unset($_SESSION['user']['phone']);
        $_SESSION['user']['phone'] = $this->input->post('phone');
        redirect('settings');
    }

    public function editPassword() {
        $this->User_Model->editPassword();
        redirect('settings');
    }
}