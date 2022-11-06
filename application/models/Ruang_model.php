<?php

class Ruang_model extends CI_Model {

    public function create($data){
        $query = $this->db->insert('ruang', $data);
        return $query;
    }

    public function update($data){
        $this->db->where(array('id' => $data['id']));
        $query = $this->db->update('ruang', array('nama_ruang' => $data['nama_ruang']));
        return $query;
    }

}