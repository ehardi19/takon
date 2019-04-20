<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Answer_Model extends CI_Model {
    
    // Get All Questions
    function getAllAnswer(){
        $this->db->select('*');
        $this->db->from('answer');
        $this->db->order_by("timestamp", "DESC");
        $query = $this->db->get();

        return $query->result();
    }

    // Create Answer
    function createAnswer() {
        $data = array(
            'question_id'        => $this->input->post('question_id'),
            'answer'        => $this->input->post('answer'),
            'user_id'     => md5($this->input->post('user_id'))
        );

        $this->db->insert('answer', $data);
    }
}
