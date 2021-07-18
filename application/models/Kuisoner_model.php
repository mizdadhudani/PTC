<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisoner_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // listing all user
    public function list_admin($kondisi){
        $this->db->select('tb_penduduk.nama,tb_penduduk.nomorhp,tb_penduduk.tempat_isolasi,tb_penduduk.RT,tb_penduduk.kecamatan,tb_penduduk.kota,tb_penduduk.pedukuhan,tb_penduduk.kelurahan,tb_penduduk.provinsi,tb_penduduk.alamat_ktp,tb_penduduk.nik,tb_qusoner.tanggal',);
         $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik') ;
        $this->db->from('tb_penduduk');
       ;
        if ($kondisi=='sehat') {
            $this->db->where('tb_qusoner.score', 0);
        }
        else if ($kondisi=='ringan'){
            $this->db->where('tb_qusoner.score', 1);
        }
        else if ($kondisi=='sedang'){
            $this->db->where('tb_qusoner.score', 2);
        }
        else if ($kondisi=='berat'){
            $this->db->where('tb_qusoner.score', 3);
        }
        $this->db->where('tb_qusoner.data', 'terupdate');
        $this->db->limit(12);
        $this->db->order_by('tb_qusoner.tanggal', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function list(){
        $this->db->select('*');
        $this->db->from('tb_qusoner');
        $query = $this->db->get();
        return $query->result();
    }
    public function detail_user($nik)
    {
        $this->db->select('*');
        $this->db->from('tb_qusoner');
        $this->db->where('nik', $nik);
        $this->db->where('link', $this->session->userdata('nomorhp'));
        $query = $this->db->get();
        return $query->row();
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
        $this->db->order_by('tanggal','DESC');
        $this->db->limit(1);
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
        // $this->db->insert('tb_qusonerperjam', $data);
    }

    // Edit
    public function edit($data)
    {
        $this->db->where('nik', $data['nik']);
        $this->db->update('tb_qusoner',$data);
    }
    public function edit_hari($data)
    {
        $this->db->where('nik', $data['nik']);
        $this->db->order_by('tanggal','DESC');
        $this->db->limit(1);
        $this->db->update('tb_qusoner',$data);
    }
    //delete
    public function delete($data)
    {
        $this->db->where('nik', $data['nik']);
        $this->db->delete('tb_qusoner', $data);
    }
    public function score($nik){
         $this->db->select ('* ');
        $this->db->from ('tb_penduduk');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik') ;
        $this->db->where('tb_penduduk.nik', $nik );
        $this->db->limit(14);
        $this->db->order_by('tb_qusoner.tanggal DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function jumlah(){
        $this->db->select ('* ');
        $this->db->from ('tb_penduduk');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik') ;
        $this->db->where('status', 'belum');
        $this->db->where('tb_qusoner.data', 'terupdate');
        $query = $this->db->get();
        return $query->num_rows();
    }
}

