<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {

    public function ambil_data($tahun_pembelian = null, $id_ruang){
        $this->db->select('*');
        $this->db->from('ruang');
        $this->db->join('barang', 'ruang.id = barang.ruang_id');
        $this->db->where('ruang.id', $id_ruang);
        if(!empty($tahun_pembelian)){
            $this->db->where('tahun_pembelian', $tahun_pembelian);
        }
        return $this->db->get()->result();
    }

}