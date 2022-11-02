<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('email') == null) {
            redirect('login_admin');
        }
    }

    public function index()
    {
        $data['ruang'] = $this->db->get('ruang')->result();
        // print_r($ruang);
        $this->load->view('admin/dashboard', $data);
    }
}