<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all user
	public function list(){
		$this->db->select('*');
		$this->db->from('tb_penduduk');
		$query = $this->db->get();
		return $query->result();
	}
	public function list_user($nomorhp){
		$this->db->select('*');
		$this->db->from('tb_penduduk');
		$this->db->where('link', $nomorhp);
		$query = $this->db->get();
		return $query->result();
	}
	public function detail($nomorhp)
	{
		$this->db->select('*');
		$this->db->from('tb_penduduk');
		$this->db->where('nomorhp', $nomorhp);
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
	public function nik($nik)
	{
		$this->db->select('*');
		$this->db->from('tb_penduduk');
		$this->db->where('nik', $nik);
		$query = $this->db->get();
		return $query->row();
	}
		// Detail all user
	// tambah
	public function tambah($data)
	{
		$this->db->insert('tb_penduduk', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('tb_penduduk',$data);
	}
	public function sehat($nik)
	{	
		$this->db->select('*');
		$this->db->from('tb_penduduk');
		$this->db->where('nik', $nik);
        $query = $this->db->update('tb_penduduk', array('status' => 'sehat'));
	}
	public function edit_nik($data)
	{
		$this->db->where('nik', $data['nik']);
		$this->db->update('tb_penduduk',$data);
	}
	//delete
	public function delete($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->delete('tb_penduduk', $data);
	}
	public function delete_nik($data)
	{
		$this->db->where('nik', $data['nik']);
		$this->db->delete('tb_penduduk', $data);
	}
	
}

