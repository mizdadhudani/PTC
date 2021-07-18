<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Puskesmas_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // listing all user
    public function list_sewon1($kondisi){
        $this->db->select('tb_penduduk.nama,tb_penduduk.nomorhp,tb_penduduk.created_at,tb_penduduk.RT,tb_penduduk.kecamatan,tb_penduduk.kota,tb_penduduk.pedukuhan,tb_penduduk.kelurahan,tb_penduduk.provinsi,tb_penduduk.alamat_ktp,tb_penduduk.nik,tb_qusoner.tanggal,tb_puskesmas.tindak_lanjut');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik');
        $this->db->join ('tb_puskesmas','tb_penduduk.nik = tb_puskesmas.nik');
        $this->db->from('tb_penduduk');
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
        $this->db->where("(tb_penduduk.kelurahan = 'PENDOWOHARJO' OR tb_penduduk.kelurahan = 'PANGGUNGHARJO')");
        $this->db->order_by('tb_qusoner.tanggal', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('tb_puskesmas', $data);
        // $this->db->insert('tb_qusonerperjam', $data);
    }

}