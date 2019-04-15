<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    // Get user data by email
    function getUserByEmail() {
        $email = $this->get('email');
        
        $this->db->where('email', $email);
        $result = $this->db->get('user')->result();
    
        return $result;
    }

    // Get user data by user_id
    function getUserById() {
        $user_id = $this->get('user_id');

        $this->db->where('user_id', $user_id);
        $result = $this->db->get('user')->result();

        return $result;
    }

    // Create new user
    function createUser() {
        $data = array(
            'first_name'   => $this->post('first_name'),
            'last_name'    => $this->post('last_name'),
            'phone'        => $this->post('phone'),
            'email'        => $this->post('email'),
            'password'     => $this->post('password')
        );

        $insert = $this->db->insert('user', $data);
    }

    // Update user by user_id
    function updateUser() {
        $user_id = $this->put('user_id');

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
        $user_id = $this->delete('user_id');

        $this->db->where('user_id', $user_id);
        $delete = $this->db->delete('user');
    }
}
