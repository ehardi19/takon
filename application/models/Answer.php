<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Answer extends CI_Model {

    // Get all answers
    function getAllAnswer() {
        $result = $this->db->get('answer')->result();

        return $result;
    }
    
    // Get answer by answer_id
    function getAnswerById() {
        $answer_id = $this->get('answer_id');
        $this->db->where('answer_id', $answer_id);
        $result = $this->db->get('answer')->result();
    
        return $result;
    }

    // Get all answers by user_id
    function getAnswerByUser() {
        $user_id = $this->get('user_id');
        $this->db->where('user_id', $user_id);
        $result = $this->db->get('answer')->result();
    
        return $result;
    }
    


    // Create a new answer
    function createAnswer() {
        $data = array(
            'question_id'  => $this->post('question_id'),
            'answer'       => $this->post('answer_id'),
            'timestamp'    => $this->post('timestamp'),
            'user_id'      => $this->post('user_id')
        );

        $insert = $this->db->insert('answer', $data);
    }

    // Update answer by answer_id
    function updateAnswer() {
        $answer_id = $this->put('answer_id');
        $data = array(
            'question_id'  => $this->put('question_id'),
            'answer'       => $this->put('answer_id'),
            'timestamp'    => $this->put('timestamp'),
            'user_id'      => $this->put('user_id')
        );

        $this->db->where('answer_id', $answer_id);
        $update = $this->db->update('answer', $data);
    }
    function deleteAnswer() {
        $answer_id = $this->delete('answer_id');

        $this->db->where('answer_id', $answer_id);
        $delete = $this->db->delete('answer');
    }
}
