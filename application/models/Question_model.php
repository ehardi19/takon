<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question_model extends CI_Model {
    
    public $question;
    public $time;
    public $userId;

    public function getAll() {
        return $this->db->get('questions')->result();
    }

    public function getAllByUserId($id) {
        $this->db->where('UserID', $id);
        return $this->db->get('questions')->result();
    }

    public function insert($data) {
        $this->question = $data['question'];
        $this->userId = $data['user_id'];
        $this->time = now();
    }

    public function update($id, $data) {
        $this->db->where('UserID', $id);
        $this->db->set('question', $data['question']);

        return $this->db->update('questions');
    }

    public function delete($question) {
        $this->db->where('QuestionID', $question['question_id']);
        return $this->db->delete('questions');
    }

}
