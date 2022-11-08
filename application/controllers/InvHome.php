<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InvHome extends CI_Controller
{
	public function index($id)
	{
		$data['data'] = $this->db->query("
		select barang.id as id, ruang_id, kode_inventaris, nama_barang, bahan, tahun_pembelian, jumlah, rusak, status, nama_ruang from barang inner join ruang r on barang.ruang_id = r.id where ruang_id = $id
		")->result();
		$data['id'] = $id;

		$data['ruang'] = $this->db->get_where('ruang', array('id' => $id))->first_row();

		$this->load->view('home/invdata', $data);
	}

	public function excel($id)
	{

		$data['ruang'] = $this->db->get_where('ruang', array('id' => $id))->first_row();

		header("Content-type=appalication/vnd.ms-excel");
        header("content-disposition:attachment;filename=".$data['ruang']->nama_ruang.".xls");
		$data['data'] = $this->db->query("
		select barang.id as id, ruang_id, kode_inventaris, nama_barang, bahan, tahun_pembelian, jumlah, rusak, status, nama_ruang from barang inner join ruang r on barang.ruang_id = r.id where ruang_id = $id
		")->result();

		$this->load->view('home/laporanbarang', $data);
	}
}
