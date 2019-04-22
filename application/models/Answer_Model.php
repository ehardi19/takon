<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Answer_Model extends CI_Model {
    
    // Retrieve all answers
    function getAllAnswer(){
        $this->db->select('*');
        $this->db->from('answer');
        $this->db->order_by("timestamp", "DESC");
        $query = $this->db->get();

        return $query->result();
    }

    // Retrieve all answers by question_id
    function getAllAnswerByQuestionId($question_id){
        $this->db->select('*');
        $this->db->from('answer');
        $this->db->where('name', $question_id);        
        $this->db->order_by("timestamp", "DESC");
        $query = $this->db->get();

        return $query->result();
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
