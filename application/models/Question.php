<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Model {

    // Get all questions
    function getAllQuestion() {
        $result = $this->db->get('question')->result();

        return $result;
    }

    // Get question by id
    function getQuestionById() {
        $question_id = $this->get('question_id');

        $this->db->where('question_id', $question_id);
        $result = $this->db->get('question')->result();
        
        return $result;
    }

    // Get all questions by user_id
    function getQuestionByUser() {
        $user_id = $this->get('user_id');

        $this->db->where('user_id', $user_id);
        $result = $this->db->get('question')->result();
        
        return $result;
    }

    // Create new question
    function createQuestion() {
        $data = array(
            'question'     => $this->post('question'),
            'timestamp'    => $this->post('timestamp'),
            'user_id'      => $this->post('user_id')
        );

        $insert = $this->db->insert('question', $data);
    }

    // Update question by question_id
    function updateQuestion() {
        $question_id = $this->put('question_id');

        $data = array(
            'question'     => $this->put('question'),
            'timestamp'    => $this->put('timestamp'),
        );$this->db->where('question_id', $question_id);
        
        $update = $this->db->update('question', $data);
    }
    
    // Delelte question by question_id
    function deleteQuestion() {
        $id = $this->delete('question_id');
        
        $this->db->where('question_id', $id);
        $delete = $this->db->delete('question');
    }
}
