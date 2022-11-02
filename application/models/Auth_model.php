<?php

class Auth_model extends CI_Model {

    public $email;
    public $password;
    public $nama;

    public function auth_login($email, $password){
        $query = $this->db->get_where('admin', array('email' => $email, 'password' => $password));
        if($query->num_rows() > 0){
            return $query->row();
        }
        return null;
    }

}