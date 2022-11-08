<?php

class Ruangan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ruang_model');
    }


    public function index(){
        $data['ruang'] = $this->db->get('ruang')->result();
        $this->load->view('admin/ruangan', $data);
    }

    public function ruang($id){
        
        $this->load->model('Search_model');

        $tahun_pembelian = $this->input->get('tahun_pembelian');

        $data['data_barang'] = $this->Search_model->ambil_data($tahun_pembelian, $id);

        $data['data_ruang'] = $this->db->get_where('ruang', array('id' => $id))->first_row();
        $data['ruang'] = $this->db->get('ruang')->result();

        $data['data_tahun_pembelian'] = $this->db
            ->select('tahun_pembelian')
            ->from('barang')
            ->group_by('tahun_pembelian')
            ->get()
            ->result();

        $this->load->view('admin/ruang/index', $data);
    }

    public function create(){
        $data['ruang'] = $this->db->get('ruang')->result();
        $this->load->view('admin/tambah_ruangan', $data);
    }

    public function store(){
        $data['nama_ruang'] = strtoupper($this->input->post('ruangan'));
        $create = $this->Ruang_model->create($data);
        if ($create != 1) {
            echo "Error";
            exit;
        }

        redirect('ruangan');
    }

    public function edit($id){
        $data['data_ruang'] = $this->db->get_where('ruang', array('id' => $id))->first_row();
        $data['ruang'] = $this->db->get('ruang')->result();
        // print_r($data['data_ruang']);
        $this->load->view('admin/edit_ruangan', $data);
    }

    public function update()
    {
        $data['id'] = $this->input->post('id');
        $data['nama_ruang'] = $this->input->post('ruangan');
        $update = $this->Ruang_model->update($data);
        if ($update != 1) {
            echo "Error";
            exit;
        }
        redirect('ruangan');
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('ruang');
        redirect('ruangan');
    }


}
