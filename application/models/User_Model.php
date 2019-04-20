<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

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

    // Retrieve user data by email
    function getUserByEmail() {
        $data = array(
            "email" => $this->input->post('email'),
            "password" => md5($this->input->post('password'))
        );

        $this->db->where($data);
        $result = $this->db->get('user');

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

    // edit user by user_id
    function editUser() {
        $data = array(
            'phone'        => $this->input->post('phone'),
            'email'        => $this->input->post('email'),
            'password'     => md5($this->input->post('password'))
        );
        $user_id = $_SESSION['user']['user_id'];

        $this->db->update('user', $data, $user_id);
    }
}
