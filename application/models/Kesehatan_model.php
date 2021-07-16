<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesehatan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// tambah
	public function tambah($data)
	{
		$this->db->insert('tb_kesehatan', $data);
	}
	
	public function detail($nomorhp)
	{
		$this->db->select('*');
		$this->db->from('tb_kesehatan');
		$this->db->where('link', $nomorhp);
		$query = $this->db->get();
		return $query->row();
	}

	public function nik($nik)
	{
		$this->db->select('*');
		$this->db->from('tb_penduduk');
		$this->db->where('nik', $nik);
		$query = $this->db->get();
		return $query->row();
	}

	public function detail_nik($nik)
	{
		$this->db->select('*');
		$this->db->from('tb_penduduk');
		$this->db->where('nik', $nik);
		$this->db->where('link', $this->session->userdata('nomorhp'));
		$query = $this->db->get();
		return $query->row();
	}

}

