<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Question_model', 'questions');
    }
}
