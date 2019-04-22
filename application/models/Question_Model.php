<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question_Model extends CI_Model {
    
    // Retrieve all questions
    function getAllQuestion(){
        $this->db->select('*');
        $this->db->from('question');
        $this->db->order_by("timestamp", "DESC");
        $query = $this->db->get();

        return $query->result();
    }

    // Create questtion
    function createAnswer() {
        $data = array(
            'question_id'        => $this->input->post('question_id'),
            'answer'        => $this->input->post('answer'),
            'user_id'     => $this->input->post('id')
        );

        $this->db->insert('answer', $data);
    }

    // Edit question by question_id
    function editQuestion() {
        $data = array(
            'question'        => $this->input->post('question'),
        );
        $question_id = $this->input->post('question_id');

        $this->db->update('answer', $data, array('question_id' => $question_id));
    }
}
