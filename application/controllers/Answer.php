<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Answer extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['question'] = $this->Question_Model->getAllQuestion();
        $data['answer'] = $this->Answer_Model->getAllAnswer();

        $this->load->view('answer/header');
        $this->load->view('answer/answer', $data);
    }

    public function createAnswer() {
        $answer = $this->Answer_Model->createAnswer();

        if ($answer != null) {
            redirect('home');
        }
    }
}