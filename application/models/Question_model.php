<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question_model extends CI_Model {
    
    public $question;
    public $time;
    public $userId;

    // CREATE
    public function insert($data) {
        $this->question = $data['question'];
        $this->userId = $data['user_id'];
        $this->time = now();
        
        $this->db->update('question', $this);
    }

    // READ
    public function getAll() {
        return $this->db->get('questions')->result();
    }

    public function getAllByUserId($id) {
        $this->db->where('UserID', $id);
        
        return $this->db->get('questions')->result();
    }

    // UPDATE
    public function update($id, $data) {
        $this->db->where('QuestionID', $id);

        $this->question = $data['question'];
        $this->userId = $data['user_id'];
        $this->time = now();
        
        $this->db->set('question', $this->question);
        $this->db->set('question', $this->userId);
        $this->db->set('question', $this->time);

        return $this->db->update('questions');
    }

    public function delete($id) {
        $this->db->where('QuestionID', $id);
        
        return $this->db->delete('questions');
    }

}
