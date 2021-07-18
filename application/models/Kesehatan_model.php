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
	//data riwayat kesehatan
	public function detail($nik)
	{
		$this->db->select('*');
		$this->db->from('tb_kesehatan');
		$this->db->where('nik', $nik);
		$this->db->where('link', $this->session->userdata('nomorhp'));
		$query = $this->db->get();
		return $query->row();
	}
	public function update($data)
    {
        $this->db->where('nik', $data['nik']);
        $this->db->order_by('id','DESC');
        $this->db->limit(1);
        $this->db->update('tb_kesehatan',$data);
    }


}

