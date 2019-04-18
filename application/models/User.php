<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    // Check if email is exist
    function isExist($email) {
        $this->db->where("email", $email);
        $result = $this->db->get('user')->result_array();
        
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    // Get user data by email
    function getUserByEmail() {
        $data = array(
            "email" => $this->input->post('email'),
            "password" => md5($this->input->post('password'))
        );

        $this->db->where($data);
        $result = $this->db->get('user');

        return $result->result_array();

    }

    // Get user data by user_id
    function getUserById() {
        $user_id = $this->input->post('user_id');

        $this->db->where('user_id', $user_id);
        $result = $this->db->get('user')->result();

        return $result->result_array();
    }

    // Create new user
    function createUser() {
        $data = array(
            'full_name'    => $this->input->post('full_name'),
            'phone'        => $this->input->post('phone'),
            'email'        => $this->input->post('email'),
            'password'     => md5($this->input->post('password'))
        );

        if ($this->isExist($data['email'])) {
            return false;
        } else {
            $this->db->insert('user', $data);
            return true;
        }
    }

    // Update user by user_id
    function updateUser() {
        $user_id = $this->input->post('user_id');

        $data = array(
            'first_name'   => $this->put('first_name'),
            'last_name'    => $this->put('last_name'),
            'phone'        => $this->put('phone'),
            'email'        => $this->put('email'),
            'password'     => $this->put('password')
        );

        $this->db->where('user_id', $user_id);
        $update = $this->db->update('user', $data);
    }

    // Delte user by user_id
    function index_delete() {
        $user_id = $this->input->post('user_id');

        $this->db->where('user_id', $user_id);
        $this->db->delete('user');
    }
}
