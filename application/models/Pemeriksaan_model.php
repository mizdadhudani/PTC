<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// tambah
	public function tambah($data)
	{
		$this->db->insert('tb_status', $data);
	}
	
	


}

