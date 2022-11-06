<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function create($id_ruang)
    {
        // print_r($id_ruang);
        $data['id_ruang'] = $id_ruang;
        $data['data_ruang'] = $this->db->get_where('ruang', array('id' => $id_ruang))->first_row();
        // print_r($data['data_ruang']);
        $data['ruang'] = $this->db->get('ruang')->result();
        $this->load->view('admin/ruang/tambah_barang', $data);
    }

    public function store()
    {
        var_dump($this->input->post());
    }


    public function edit()
    {
        echo "Edit Barang";
    }
}
