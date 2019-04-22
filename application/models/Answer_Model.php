<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Answer_Model extends CI_Model {
    
    // Retrieve all answers
    function getAllAnswer(){
        $query = "SELECT answer, answer_id, question_id, user_id, timestamp, full_name FROM answer NATURAL JOIN user ORDER BY timestamp DESC";

        $result = $this->db->query($query)->result_array();

        return $result;
    }

    // Create Answer
    function createAnswer() {
        $data = array(
            'question_id'        => $this->input->post('question_id'),
            'answer'        => $this->input->post('answer'),
            'user_id'     => $_POST['user_id']
        );

        $this->db->insert('answer', $data);
    }

    // Edit answer by answer_id
    function editAnswer() {
        $data = array(
            'answer'        => $this->input->post('answer'),
        );
        $answer_id = $this->input->post('answer_id');

        $this->db->update('answer', $data, array('answer_id' => $answer_id));
    }

    function deleteAnswer() {
        $answer_id = $this->input->post('answer_id');

        $this->db->delete('answer', array('answer_id' => $answer_id)); 
    }
}
