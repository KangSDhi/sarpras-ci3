<?php

class Barang_model extends CI_Model {

	public function create($data){
		$query = $this->db->insert('barang', $data);
		return $query;
	}

}
