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

	function datadetailpenduduk($nik){
        $this->db->select ('* ');
        $this->db->from ('tb_penduduk');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik') ;
        $this->db->where('tb_penduduk.nik', $nik);
        $query = $this->db->get();
        return $query->row();
    }

    function datadetailpendudukscore($nik){
        $this->db->select ('* ');
        $this->db->from ('tb_penduduk');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik') ;
        $this->db->where('tb_penduduk.nik', $nik );
        $this->db->limit(14);
        $this->db->order_by('tb_qusoner.id DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    function cekdata($nik){
        $post = $this->input->post();
        $tanggal=$post['tanggal'];
        $this->db->select ('* ');
        $this->db->from ('tb_penduduk');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik') ;
        $this->db->where('tb_penduduk.nik', $nik);
        $this->db->where('tb_qusoner.tanggal',$tanggal);
        $query = $this->db->get();
        return $query->row();
    
    }

    function datalengkapodp() {
        $this->db->distinct();
        // $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->where('status !=', 'sehat');
            $this->db->where('status !=', 'Meninggal Dunia');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        // $this->db->join ('kecamatan','tb_qusoner.id = kecamatan.id_kecamatan'); 
        $this->db->where("score =3");
        $this->db->where('tb_qusoner.data', 'terupdate');
        //$this->db->where("ksebelas =1 ");
        //$this->db->where("ksebelas =1 OR ktigabelas =1 OR kempatbelas =1");
        //$this->db->where("ktigabelas =1");
        //$this->db->where("kempatbelas =1");
        //$this->db->order_by("score", "DESC");
        $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapodpj() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->where('status !=', 'sehat');
            $this->db->where('status !=', 'Meninggal Dunia');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score=2");
        $this->db->where('tb_qusoner.data', 'terupdate');
        //$this->db->where("kempatbelas =0 OR ktigabelas =0");
        //$this->db->where("ksepuluh =1");
        //$this->db->order_by("score", "DESC");
        $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapkert() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
            $this->db->where('status !=', 'sehat');
            $this->db->where('status !=', 'Meninggal Dunia');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =1");
        $this->db->where('tb_qusoner.data', 'terupdate');
        //$this->db->order_by("score", "DESC");
       $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapkerr() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
            $this->db->where('status !=', 'sehat');
            $this->db->where('status !=', 'Meninggal Dunia');
        $this->db->where('tb_penduduk.nama !=', null);
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =0");
        $this->db->where('tb_qusoner.data', 'terupdate');
        //$this->db->order_by("score", "DESC");
        $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapgejala() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =2");
        //$this->db->order_by("score", "DESC");
        $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapsehat() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =1");
        //$this->db->order_by("score", "DESC");
        $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }

    function datalengkapscore() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik');
        $this->db->where('tb_qusoner.data', 'terupdate');
        //$this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        //$this->db->where("score >=1");
        //$this->db->group_by('tb_qusoner.nik');
        $this->db->group_by('tb_penduduk.nik');
        $this->db->order_by("score", "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }

    function ubahdatadiri($nik){
     return $this->db->get_where("tb_penduduk", ["nik" => $nik])->row();

    }

     function getdataidnik($nomorhp){
     return $this->db->get_where("tb_penduduk", ["nik" => $this->input->post('nik')])->row();

    }

    function updatedataalamatnik() {
    	$post = $this->input->post();
        $this->link = $post["link"];
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->usia = $post["usia"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->status_dlm_keluarga = $post["status_dlm_keluarga"];
        $this->RT = $post["RT"];
        $this->nomorhp = $post["nomorhp"];
        $this->alamat_ktp = $post["alamat_ktp"];
        $this->status = $post["status"];
        $this->tempat_isolasi = $post["tempat_isolasi"];

        $this->db->where('id=',$this->id = $post["id"]);
        $this->db->update("tb_penduduk",$this);
    }

     function penduduknik($nik){
        $this->db->where("nik =",$nik);
        $query=$this->db->get("tb_penduduk");
        return $query->row();
    }

    function datadetailhari($nik){
        $this->db->select ('* ');
        $this->db->from ('tb_penduduk');
        //$this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik') ;
        $this->db->where('tb_penduduk.nik', $nik);
        $query = $this->db->get();
        return $query->row();
    }

    function datalengkappenduduk() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');

        $query = $this->db->get();
        return $query->result_array();
    }

    function databeratshelter() {
            $this->db->distinct();
            $this->db->select ('*');
            $this->db->from ('tb_penduduk ');
            $this->db->where('status !=', 'sehat');
            $this->db->where('status !=', 'Meninggal Dunia');
            $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
            $this->db->where("score =3");
            $this->db->where('tb_penduduk.tempat_isolasi','Shelter SMKN 2 Sewon');
            $this->db->where('tb_qusoner.data', 'terupdate');
            $this->db->group_by('tb_penduduk.nik');
            $query = $this->db->get();
            return $query->result_array();

    }
        function datasedangshelter() {
            $this->db->distinct();
            $this->db->select ('*');
            $this->db->from ('tb_penduduk ');
            $this->db->where('status !=', 'sehat');
            $this->db->where('status !=', 'Meninggal Dunia');
            $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
            $this->db->where("score =2");
            $this->db->where('tb_penduduk.tempat_isolasi','Shelter SMKN 2 Sewon');
            $this->db->where('tb_qusoner.data', 'terupdate');
            $this->db->group_by('tb_penduduk.nik');
            $query = $this->db->get();
            return $query->result_array();

    }

        function dataringanshelter() {
            $this->db->distinct();
            $this->db->select ('*');
            $this->db->from ('tb_penduduk ');
            $this->db->where('status !=', 'sehat');
            $this->db->where('status !=', 'Meninggal Dunia');
            $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
            $this->db->where("score =1");
            $this->db->where('tb_penduduk.tempat_isolasi','Shelter SMKN 2 Sewon');
            $this->db->where('tb_qusoner.data', 'terupdate');
            $this->db->group_by('tb_penduduk.nik');
            $query = $this->db->get();
            return $query->result_array();

    }

        function dataotgshelter() {
            $this->db->distinct();
            $this->db->select ('*');
            $this->db->from ('tb_penduduk ');
            $this->db->where('status !=', 'sehat');
            $this->db->where('status !=', 'Meninggal Dunia');
            $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
            $this->db->where("score =0");
            $this->db->where('tb_penduduk.tempat_isolasi','Shelter SMKN 2 Sewon');
            $this->db->where('tb_qusoner.data', 'terupdate');
            $this->db->group_by('tb_penduduk.nik');
            $query = $this->db->get();
            return $query->result_array();

    }

    function datalengkapshelter() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik');
        $this->db->where('tb_penduduk.tempat_isolasi','Shelter SMKN 2 Sewon');
        $this->db->where('status !=', 'sehat');
        $this->db->where('status !=', 'Meninggal Dunia');
        $this->db->where('tb_qusoner.data', 'terupdate');
        $this->db->group_by('tb_penduduk.nik');
        $this->db->order_by("score", "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }

    function ubahsehat($nik) {
        $post = $this->input->post();
        $this->db->select ('* ');
        $this->db->from ('tb_penduduk ');
        $this->db->where('tb_penduduk.nik', $nik);
        $query = $this->db->update('tb_penduduk', array('status' => 'sehat'));

    }

    function getdataid($nomorhp){
     return $this->db->get_where("tb_penduduk",["nomorhp" => $nomorhp])->row();

    }

    function tambahlistbaru(){
        $post = $this->input->post();
        $this->id='';
        $this->link = $post["link"];
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->usia = $post["usia"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->status_dlm_keluarga = $post["status_dlm_keluarga"];
        $this->RT = $post["RT"];
        $this->nomorhp = $post["nomorhp"];
        $this->alamat_ktp = $post["alamat_ktp"];
        $this->status = $post["status"];
        $this->tempat_isolasi = $post["tempat_isolasi"];
        
       $this->db->insert($this->table,$this);
    }
	
}

