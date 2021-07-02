<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Wilayah_model extends CI_Model {





	public function provinsi()

	{

			$this->db->select('*');

			$this->db->from('provinces');

			$this->db->order_by('name', 'ASC');

			$query = $this->db->get();

			return $query->result();

	}

	public function kabupaten($id_provinces)

	{

			$this->db->select('*');

			$this->db->from('regencies');

			$this->db->where('province_id',$id_provinces);

			$this->db->order_by('name', 'ASC');

			$query = $this->db->get();

			return $query->result();

	}

	public function kecamatan($id_regencies)

	{

			$this->db->select('*');

			$this->db->from('districts');

			$this->db->order_by('name', 'ASC');

			$this->db->where('regency_id',$id_regencies);

			$query = $this->db->get();

			return $query->result();

	}

	public function kelurahan($id_district)

	{

			$this->db->select('*');

			$this->db->from('villages');

			$this->db->order_by('name', 'ASC');

			$this->db->where('district_id',$id_district);

			$query = $this->db->get();

			return $query->result();

	}	



	public function provinsi_detail($id_provinces)

	{

			$this->db->select('name');

			$this->db->from('provinces');

			$this->db->where('id',$id_provinces);

			$this->db->order_by('name', 'ASC');

			$query = $this->db->get();

			return $query->row();

	}

	public function kabupaten_detail($id_regencies)

	{

			$this->db->select('name');

			$this->db->from('regencies');

			$this->db->where('id',$id_regencies);

			$this->db->order_by('name', 'ASC');

			$query = $this->db->get();

			return $query->row();

	}

	public function kecamatan_detail($id_district)

	{

			$this->db->select('name');

			$this->db->from('districts');

			$this->db->order_by('name', 'ASC');

			$this->db->where('id',$id_district);

			$query = $this->db->get();

			return $query->row();

	}

	public function kelurahan_detail($id_villages)

	{

			$this->db->select('name');

			$this->db->from('villages');

			$this->db->order_by('name', 'ASC');

			$this->db->where('id',$id_villages);

			$query = $this->db->get();

			return $query->row();

	}



}



