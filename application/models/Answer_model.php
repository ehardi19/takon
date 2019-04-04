<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Answer_model extends CI_Model {
    
    public $questionId;
    public $answer;
    public $time;
    public $userId;

    // CREATE
    public function insert($data) {
        $this->questionId = $data['question_id'];
        $this->userId = $data['user_id'];
        $this->answer = $data['answer'];
        $this->time = now();
        $this->db->update('answers', $this);
    }

    // READ
    public function getAllByQuestionId($id) {
        $this->db->where('QuestionID', $id);
        
        return $this->db->get('answers')->result();
    }

    // UPDATE
    public function update($id, $data) {
        $this->db->where('AnswerID', $id);
        
        $this->questionId = $data['question_id'];
        $this->userId = $data['user_id'];
        $this->answer = $data['answer'];
        $this->time = now();

        $this->db->set('QuestionID',  $this->questionId);
        $this->db->set('Answer', $this->answer);
        $this->db->set('Time', $this->time);
        $this->db->set('UserID',  $this->userId);


        return $this->db->update('questions');
    }

    //DELETE
    public function delete($id) {
        $this->db->where('AnswerID', $id);
        
        return $this->db->delete('answers');
    }
}
