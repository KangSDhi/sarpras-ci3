<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('login/index.php');
    }

    public function postlogin() {
        $this->load->model('Auth_model');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = $this->Auth_model->auth_login($email, $password);
        
        if ($data != null) {
            $session_data['email'] = $email;
            $session_data['nama'] = $data->nama;
            $this->session->set_userdata($session_data);
            $this->session->set_flashdata('success', 'Anda Login Sebagai '.$session_data['nama']);
            redirect('dashboard');
        }else{
            $this->session->set_flashdata('error', 'cek email dan password!');
            redirect('login_admin');
        }
    }
}