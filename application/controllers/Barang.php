<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
	}

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
		// var_dump($this->input->post());
		$data['ruang_id'] = $this->input->post('id_ruang');
		$data['kode_inventaris'] = $this->input->post('kode_inventaris');
		$data['nama_barang'] = $this->input->post('nama_barang');
		$data['bahan'] = $this->input->post('bahan');
		$data['tahun_pembelian'] = $this->input->post('tahun_pembelian');
		$data['jumlah'] = $this->input->post('jumlah');
		$data['rusak'] = $this->input->post('rusak');
		$data['status'] = $this->input->post('status');

		$create = $this->Barang_model->create($data);
		if ($create != 1) {
			echo "Error";
			exit;
		}

		redirect('ruangan/' . $data['ruang_id']);
	}


	public function edit($id_ruang, $id_barang)
	{
		// print_r("Id Ruang ".$id_ruang." & Id Barang ".$id_barang);
		$data['data_ruang'] = $this->db->get_where('ruang', array('id' => $id_ruang))->first_row();
		$data['ruang'] = $this->db->get('ruang')->result();
		$data['data_barang'] = $this->db->select('*')
			->from('barang')
			->where('ruang_id', $id_ruang)
			->where('id', $id_barang)
			->get()
			->first_row();
		$this->load->view('admin/ruang/edit_barang', $data);
	}

	public function update()
	{
		$data['ruang_id'] = $this->input->post('id_ruang');
		$data['kode_inventaris'] = $this->input->post('kode_inventaris');
		$data['nama_barang'] = $this->input->post('nama_barang');
		$data['bahan'] = $this->input->post('bahan');
		$data['tahun_pembelian'] = $this->input->post('tahun_pembelian');
		$data['jumlah'] = $this->input->post('jumlah');
		$data['rusak'] = $this->input->post('rusak');
		$data['status'] = $this->input->post('status');

		$this->db->where(array('id' => $this->input->post('id_barang')));
		$query = $this->db->update('barang', $data);

		if ($query != 1) {
			echo "Error";
			exit;
		}

		redirect('ruangan/' . $data['ruang_id']);
	}

	public function delete($id_ruang, $id_barang)
	{
		$this->db->where('id', $id_barang);
		$this->db->delete('barang');
		redirect('ruangan/'. $id_ruang);
	}
}
