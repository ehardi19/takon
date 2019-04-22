<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question_Model extends CI_Model {
    
    // Retrieve all questions
    function getAllQuestion(){
        $query = "SELECT question, question_id, user_id, timestamp, full_name FROM question NATURAL JOIN user ORDER BY timestamp DESC";

        $result = $this->db->query($query)->result();

        return $result;
    }

    // Create questtion
    function createQuestion() {
        $data = array(
            'question'        => $this->input->post('question'),
            'user_id'     => $this->input->post('user_id')
        );

        $this->db->insert('question', $data);
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
