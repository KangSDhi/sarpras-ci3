<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('home/index');
	}

	public function invkelas()
	{
		$this->load->view('home/invkelas');
	}

	public function invupj()
	{
		$this->load->view('home/invupj');
	}

	public function invkantor()
	{
		$this->load->view('home/invkantor');
	}

	public function tentangkami()
	{
		$this->load->view('home/tentangkami');
	}

	public function invkelastkj()
	{
		$data['kelas'] = $this->db->query("
		SELECT * from ruang where nama_ruang like 'X% TKJ'
		")->result();
		$this->load->view('home/invkelastkj', $data);
	}

	public function invkelastkr()
	{
		$data['kelas'] = $this->db->query("
		SELECT * from ruang where nama_ruang like 'X% TKR'
		")->result();
		$this->load->view('home/invkelastkj', $data);
	}
}
