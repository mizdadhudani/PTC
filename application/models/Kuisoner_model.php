<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisoner_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // listing all user
    public function list(){
        $this->db->select('*');
        $this->db->from('tb_qusoner');
        $query = $this->db->get();
        return $query->result();
    }
    public function detail($nik)
    {
        $this->db->select('*');
        $this->db->from('tb_qusoner');
        $this->db->where('nik', $nik);
        $query = $this->db->get();
        return $query->row();
    }
    public function tanggal($nik)
    {
        $this->db->select('*');
        $this->db->from('tb_qusoner');
        $this->db->where('nik', $nik);
        $query = $this->db->get();
        return $query->row();
    }

        // Detail all user
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('tb_qusoner');
        $this->db->where(array( 'no_tlpn' => $username,
                                'password' => SHA1($password)));
        $this->db->order_by('nik', 'desc');
        $query = $this->db->get();
        return $query->row();
    }
    // tambah
    public function tambah($data)
    {
        $this->db->insert('tb_qusoner', $data);
    }

    // Edit
    public function edit($data)
    {
        $this->db->where('nik', $data['nik']);
        $this->db->update('tb_qusoner',$data);
    }
    //delete
    public function delete($data)
    {
        $this->db->where('nik', $data['nik']);
        $this->db->delete('tb_qusoner', $data);
    }
}

