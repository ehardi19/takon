<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    public $answers = NULL;

    public function index() {
        $data['question'] = $this->Question_Model->getAllQuestion();
        $answer = $this->Answer_Model->getAllAnswer();
        unset($_SESSION['answer']);
        $_SESSION['answer'] = $answer;

        $this->load->view('home/header');
        $this->load->view('home/home',$data);
    }

    public function createQuestion() {
        $this->Question_Model->createQuestion();

        redirect("answer");
    }
}