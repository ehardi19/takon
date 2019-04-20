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
}
