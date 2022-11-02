<?php

class Ruangan extends CI_Controller {


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

        // print_r($data['data_tahun_pembelian']->result());
        

        // print_r($data['data_barang']);
        // var_dump("a");
        // print_r("a");



        $this->load->view('admin/ruang/index', $data);


    }
}