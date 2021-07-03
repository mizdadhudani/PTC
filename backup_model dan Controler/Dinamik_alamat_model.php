<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinamik_alamat_model extends CI_Model {
	
	function fetch_kecamatan()
	 {
	  $this->db->order_by("nama_kecamatan", "ASC");
	  $query = $this->db->get("kecamatan");
	  return $query->result();
	 }

	 function fetch_desa($id_kecamatan)
	 {
	  $this->db->where('id_kecamatan', $id_kecamatan);
	  $this->db->order_by('nama_desa', 'ASC');
	  $query = $this->db->get('desa');
	  $output = '<option value="">Pilih Desa</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->id_desa.'">'.$row->nama_desa.'</option>';
	  }
	  return $output;
	 }

	 function fetch_dukuh($id_desa)
	 {
	  $this->db->where('id_desa', $id_desa);
	  $this->db->order_by('nama_dukuh', 'ASC');
	  $query = $this->db->get('dukuh');
	  $output = '<option value="">Pilih Padukuhan</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->id_dukuh.'">'.$row->nama_dukuh.'</option>';
	  }
	  return $output;
	 }
	

}

/* End of file Dinamik_alamat_model.php */
/* Location: ./application/models/Dinamik_alamat_model.php */