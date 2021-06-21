ci <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor_model extends CI_Model {

	private $table = "tb_lapor";

    public $nik;

    public $id;

    public $keluhan;

    public $suhu;

    public $spo2;

    public $status_pasien;

    public $status_test;

    public $tgl_isolasi;

    public $lokasi;

    function pendudukk($nik){

        $tanggalsekarang=date("Y-m-d");

        $this->db->where("nik = '$nik' ");

        $query=$this->db->get("tb_lapor");

        return $query->row();

    }

     function penduduktanggall($nik){

        $tanggalsekarang=date("Y-m-d");

        $this->db->where("nik = '$nik' ");

        $this->db->where("tgl_isolasi = '$tanggalsekarang'");

        $query=$this->db->get("tb_lapor");

        return $query->row();

    }

    function baru(){

        $post = $this->input->post();

        $this->id = '';

        $this->link=$post['nomorhp'];

        $this->nik = '';

        $this->keluhan = '';

        $this->suhu = '';

        $this->spo2 = '';

        $this->status_pasien = '';

        $this->status_test = '';

        $this->tgl_isolasi = date("Y-m-d");

        $this->lokasi = '';

        $this->db->insert($this->table,$this);

    }

    function tambahh(){

        $post = $this->input->post();

        $this->id = '';

        $this->link=$post['link'];

        $this->nik = $post["nik"];

        $this->keluhan = $post["keluhan"];

        $this->suhu = $post["suhu"];

        $this->spo2 = $post["spo2"];

        $this->status_pasien = $post["status_pasien"];

        $this->status_test = $post["status_test"];

        $this->tgl_isolasi = $post["tgl_isolasi"];

        $this->lokasi = $post["lokasi"];

        $this->db->insert($this->table,$this);

    }

     function getdataidd($nik){

     return $this->db->get_where("tb_lapor", ["nik" => $nik])->row();



    }

    function getdataidkk($nik){

     return $this->db->get_where("tb_lapor", ["nik" => $nik])->row();



    }
    function getdataidnn($nomorhp){

     return $this->db->get_where("tb_lapor", ["link" => $nomorhp])->row();

     }

	

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */