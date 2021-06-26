<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Modulpenduduk extends CI_Model{
    private $table = "tb_penduduk";
    public $nik;
    public $id;
    public $nama;
    public $nomorhp;
    public $penduduk;
    public $alamat;
    public $usia;
    public $mulai_isolasi;
    public $status_dlm_keluarga;
    public $jeniskelamin;
    public $hamil;
    public $status;
    public $tempat_isolasi;
    public $link;
    public $harisatu;
    public $haridua;

     function penduduk($nomorhp){
        $this->db->where("nomorhp = '$nomorhp'");
        $query=$this->db->get("tb_penduduk");
        return $query->row_array();
    }
     function penduduknik($nik){
        $this->db->where("nik =",$nik);
        $query=$this->db->get("tb_penduduk");
        return $query->row();
    }
    function tambahnik($nomorhp){
    $post = $this->input->post();
    $this->id='';
    $this->link=$nomorhp;
    $this->nik = '';
    $this->nama = '';
    $this->nomorhp =$nomorhp;
    $this->penduduk = 'Panggungharjo';
    $this->alamat = '';
    $this->usia = '';
    $this->hamil = '';
    $this->mulai_isolasi = '';
    $this->status_dlm_keluarga = '';
    $this->harisatu = '';
    $this->haridua = '';
    $this->status = '';
    $this->tempat_isolasi = '';
    $this->jeniskelamin = 'Laki-Laki';
    $this->db->insert($this->table,$this);
    }
    function getdataid($nomorhp){
     return $this->db->get_where("tb_penduduk", ["nomorhp" => $nomorhp])->row();

    }
    function ubahdatadiri($nik){
     return $this->db->get_where("tb_penduduk", ["nik" => $nik])->row();

    }
    function getstatus($nomorhp) {
        $post = $this->input->post();
        $this->db->select ('* ');
        $this->db->from ('tb_penduduk ');
        //$this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik');
        $this->db->where('tb_penduduk.status', $nomorhp);
        $query = $this->db->get();
        return $query->row();

    }
    function ubahsehat($nik) {
        $post = $this->input->post();
        $this->db->select ('* ');
        $this->db->from ('tb_penduduk ');
        //$this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik');
        $this->db->where('tb_penduduk.nik', $nik);
        $query = $this->db->update('tb_penduduk', array('status' => 'sehat'));

    }

    function updatedataalamatnik() {
        $post = $this->input->post();
        $this->link = $post["link"];
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->nomorhp = $post["nomorhp"];
        $this->alamat = $post["alamat"];
        $this->usia = $post["usia"];
        $this->hamil = $post["hamil"];
        $this->mulai_isolasi = $post["mulai_isolasi"];
        $this->status_dlm_keluarga = $post["status_dlm_keluarga"];
        $this->status = $post["status"];
        $this->tempat_isolasi = $post["tempat_isolasi"];
        $this->penduduk = $post["penduduk"];
        $this->harisatu='';
        $this->haridua='';
        $this->db->where('id=',$this->id = $post["id"]);
        $this->db->update("tb_penduduk",$this);
    }


    function getdataidnik($nomorhp){
     return $this->db->get_where("tb_penduduk", ["nik" => $this->input->post('nik')])->row();

    }
    function datadetailpenduduk($nik){
        $this->db->select ('* ');
        $this->db->from ('tb_penduduk');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik') ;
        $this->db->where('tb_penduduk.nik', $nik);
        $query = $this->db->get();
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
    function tambahlistbaru(){
        $post = $this->input->post();
        $this->id='';
        $this->link = $post["link"];
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->nomorhp = $post["nomorhp"];
        $this->alamat = $post["alamat"];
        $this->usia = $post["usia"];
        $this->hamil = $post["hamil"];
        $this->mulai_isolasi = $post["mulai_isolasi"];
        $this->status_dlm_keluarga = $post["status_dlm_keluarga"];
        $this->status = $post["status"];
        $this->tempat_isolasi = $post["tempat_isolasi"];
        $this->penduduk = $post["penduduk"];
        $this->harisatu='';
        $this->haridua='';
       $this->db->insert($this->table,$this);
    }
    function databarupenduduk() {
        $post = $this->input->post();
        $this->link = $post["link"];
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->nomorhp = $post["nomorhp"];
        $this->alamat = $post["alamat"];
        $this->usia = $post["usia"];
        $this->hamil = $post["hamil"];
        $this->mulai_isolasi = $post["mulai_isolasi"];
        $this->status_dlm_keluarga = $post["status_dlm_keluarga"];
        $this->penduduk = $post["penduduk"];
        $this->status = $post["status"];
        $this->tempat_isolasi = $post["tempat_isolasi"];
        $this->harisatu=$post['harisatu'];
        $this->haridua=$post['haridua'];
        $this->db->where('id=',$this->id = $post["id"]);
        $this->db->update("tb_penduduk",$this);
    }
    function updatehari($nik) {
        $post = $this->input->post();
        $this->link = $post["linkpenduduk"];
        $this->nama = $post["namapenduduk"];
        $this->nik = $post["nikpenduduk"];
        $this->jeniskelamin = $post["jeniskelaminpenduduk"];
        $this->nomorhp = $post["nomorhppenduduk"];
        $this->alamat = $post["alamatpenduduk"];
        $this->usia = $post["usia"];
        $this->hamil = $post["hamil"];
        $this->mulai_isolasi = $post["mulai_isolasi"];
        $this->status_dlm_keluarga = $post["status_dlm_keluarga"];
        $this->penduduk = $post["pendudukpenduduk"];
        $this->status = $post["status"];
        $this->tempat_isolasi = $post["tempat_isolasi"];
        if ($post['harisatu']==14){
                $this->harisatu=$post['harisatu']+1;
        } else {
            $this->harisatu=0;
        }
        if ($post['haridua']==14){
                $this->haridua=$post['haridua']+1;
        } else {
            $this->haridua=0;
        }        
        $this->db->where('id=',$this->id = $post["idpenduduk"]);
        $this->db->update("tb_penduduk",$this);
    }
    function tambahhari($nik) {
        $post = $this->input->post();
        $this->link = $post["linkpenduduk"];
        $this->nama = $post["namapenduduk"];
        $this->nik = $post["nikpenduduk"];
        $this->jeniskelamin = $post["jeniskelaminpenduduk"];
        $this->nomorhp = $post["nomorhppenduduk"];
        $this->alamat = $post["alamatpenduduk"];
        $this->usia = $post["usia"];
        $this->hamil = $post["hamil"];
        $this->mulai_isolasi = $post["mulai_isolasi"];
        $this->status_dlm_keluarga = $post["status_dlm_keluarga"];
        $this->penduduk = $post["pendudukpenduduk"];
        $this->status = $post["status"];
        $this->tempat_isolasi = $post["tempat_isolasi"];
        $this->harisatu=$post['harisatu'];
        $this->haridua=$post['haridua'];
        $this->db->where('id=',$this->id = $post["idpenduduk"]);
        $this->db->update("tb_penduduk",$this);
    }
    function databarupenduduknik() {
        $post = $this->input->post();
        $this->link = $post["nomorhp"];
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->nomorhp = $post["nomorhp"];
        $this->alamat = $post["alamat"];
        $this->usia = $post["usia"];
        $this->hamil = $post["hamil"];
        $this->mulai_isolasi = $post["mulai_isolasi"];
        $this->status_dlm_keluarga = $post["status_dlm_keluarga"];
        $this->penduduk = $post["penduduk"];
        $this->status = $post["status"];
        $this->tempat_isolasi = $post["tempat_isolasi"];
        $this->harisatu=$post['harisatu'];
        $this->haridua=$post['haridua'];
        $this->db->where('id=',$this->id = $post["id"]);
        $this->db->update("tb_penduduk",$this);
    }
    function datalengkap() {
        $this->db->select ('* ');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapscore() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->where ('nik!="" ');
        //$this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        //$this->db->where("score >=1");
        //$this->db->order_by("score", "DESC");
        //$this->db->group_by('tb_qusoner.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapodp() {
        $this->db->distinct();
        // $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =3");
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
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score=2");
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
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =1");
        //$this->db->order_by("score", "DESC");
       $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapkerr() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =0");
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
    function datalengkapodpharian() {
        $this->db->distinct();
        // $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score >=6");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tanggal =",date("Y-m-d"));
        //$this->db->where("ksebelas =1 ");
        //$this->db->where("ksebelas =1 OR ktigabelas =1 OR kempatbelas =1");
        //$this->db->where("ktigabelas =1");
        //$this->db->where("kempatbelas =1");
        //$this->db->order_by("score", "DESC");
        //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapodpjharian() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score=5");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tanggal =",date("Y-m-d"));
        //$this->db->where("kempatbelas =0 OR ktigabelas =0");
        //$this->db->where("ksepuluh =1");
        //$this->db->order_by("score", "DESC");
        //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datadouble() {

        //$this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        // $this->db->where("nik");
        $this->db->group_by('tb_penduduk.nik');
        // $this->db->where("tb_penduduk.nik !=''");
        // $this->db->where("tb_penduduk.nik IS NOT NULL");
        //$this->db->where("tanggal =",date("Y-m-d"));
        //$this->db->where('score=1');
        $this->db->where("(ktujuh=1 OR kdelapan=1 OR ksepuluh=1 OR ksebelas=1 OR kduabelas=1) AND score=1");
        //$this->db->order_by("nik");
        //$this->db->having(count('id'>1);
        //$this->db->group_by('nik');
        //$this->db->where(count('nik')==1);
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapkertharian() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =4");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tanggal =",date("Y-m-d"));
        //$this->db->order_by("score", "DESC");
       //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapkerrharian() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =3");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tanggal =",date("Y-m-d"));
        //$this->db->order_by("score", "DESC");
        //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapgejalaharian() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =2");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tanggal =",date("Y-m-d"));
        //$this->db->order_by("score", "DESC");
        //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapsehatharian() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =1");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tanggal =",date("Y-m-d"));
        //$this->db->order_by("score", "DESC");
        //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function getdatalist($nomorhp) {
        $post = $this->input->post();
        $this->db->select ('* ');
        $this->db->from ('tb_penduduk ');
        //$this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik');
        $this->db->where('link=',$this->link = $nomorhp);
        $query = $this->db->get();
        return $query->result_array();

    }
public function deletependuduk($nik) {
    return $this->db->delete("tb_penduduk",array("nik"=>$nik));
}
public function deletedemo($nomorkk) {
    return $this->db->delete("demo",array("nomorkk"=>$nomorkk));
}
public function dataaplikasi() {
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('demo ');
        // $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("total >=56");
        // $this->db->where("tb_penduduk.nik !=''");
        // $this->db->where("tb_penduduk.nik IS NOT NULL");
        // $this->db->where("tanggal =",date("Y-m-d"));
        $this->db->order_by("total", "ASC");
        $this->db->group_by('nomorkk');
        $query = $this->db->get();
        return $query->result_array();
}
    function datalengkapodptanggal() {
        $post = $this->input->post();
        $this->db->distinct();
        // $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score >=6");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tanggal =",$post['tanggal']);
        //$this->db->where("ksebelas =1 ");
        //$this->db->where("ksebelas =1 OR ktigabelas =1 OR kempatbelas =1");
        //$this->db->where("ktigabelas =1");
        //$this->db->where("kempatbelas =1");
        //$this->db->order_by("score", "DESC");
        //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapodpjtanggal() {
        $post = $this->input->post();
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score=5");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tanggal =",$post['tanggal']);
        //$this->db->where("kempatbelas =0 OR ktigabelas =0");
        //$this->db->where("ksepuluh =1");
        //$this->db->order_by("score", "DESC");
        //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }

    function datalengkapkerttanggal() {
        $post = $this->input->post();
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =4");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tanggal =",$post['tanggal']);
        //$this->db->order_by("score", "DESC");
       //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapkerrtanggal() {
        $post = $this->input->post();
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =3");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tanggal =",$post['tanggal']);
        //$this->db->order_by("score", "DESC");
        //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapgejalatanggal() {
        $post = $this->input->post();
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =2");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tanggal =",$post['tanggal']);
        //$this->db->order_by("score", "DESC");
        //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapsehattanggal() {
        $post = $this->input->post();
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->where("score =1");
        $this->db->where("tb_penduduk.nik !=''");
        $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->where("tanggal =",$post['tanggal']);
        //$this->db->order_by("score", "DESC");
        //$this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }


    function datalengkapodpalamat() {
        $post = $this->input->post();
        $alamat=$post['alamat'];
        $rt=$post['rt'];
        $this->db->distinct();
        // $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->like("score",'6');
        // $this->db->where("score >=6");
        // $this->db->where("tb_penduduk.nik !=''");
        // $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->like("tb_penduduk.alamat",$alamat);
        if ($rt!='' || $rt!=' ' || $rt!=NULL){
            $this->db->like("tb_penduduk.alamat",$rt);
        }
        // $this->db->where("tanggal =",date("Y-m-d"));
        //$this->db->where("ksebelas =1 ");
        //$this->db->where("ksebelas =1 OR ktigabelas =1 OR kempatbelas =1");
        //$this->db->where("ktigabelas =1");
        //$this->db->where("kempatbelas =1");
        // $this->db->order_by("alamat", "ASC");
        $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapodpjalamat() {
        $post = $this->input->post();
        $alamat=$post['alamat'];
        $rt=$post['rt'];
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->like("score",'5');
        // $this->db->where("tb_penduduk.nik !=''");
        // $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->like("tb_penduduk.alamat",$alamat);
                if ($rt!='' || $rt!=' ' || $rt!=NULL){
            $this->db->like("tb_penduduk.alamat",$rt);
        }
        // $this->db->order_by("alamat", "ASC");
        //$this->db->where("kempatbelas =0 OR ktigabelas =0");
        //$this->db->where("ksepuluh =1");
        //$this->db->order_by("score", "DESC");
        $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapkertalamat() {
        $post = $this->input->post();
        $alamat=$post['alamat'];
        $rt=$post['rt'];
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->like("score",'4');
        // $this->db->order_by("alamat", "ASC");
        // $this->db->where("tb_penduduk.nik !=''");
        // $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->like("tb_penduduk.alamat",$alamat);
                if ($rt!='' || $rt!=' ' || $rt!=NULL){
            $this->db->like("tb_penduduk.alamat",$rt);
        }
        //$this->db->order_by("score", "DESC");
       $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapkerralamat() {
        $post = $this->input->post();
        $alamat=$post['alamat'];
        $rt=$post['rt'];
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->like("score",'3');
        // $this->db->order_by("alamat", "ASC");
        // $this->db->where("tb_penduduk.nik !=''");
        // $this->db->where("tb_penduduk.nik IS NOT NULL");
        // $this->db->where("tb_penduduk.nik !=''");
        $this->db->like("tb_penduduk.alamat",$alamat);
                if ($rt!='' || $rt!=' ' || $rt!=NULL){
            $this->db->like("tb_penduduk.alamat",$rt);
        }
        //$this->db->order_by("score", "DESC");
        $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapgejalaalamat() {
        $post = $this->input->post();
        $alamat=$post['alamat'];
        $rt=$post['rt'];
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
       $this->db->like("score",'2');
       // $this->db->order_by("alamat", "ASC");
        // $this->db->where("tb_penduduk.nik !=''");
        // $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->like("tb_penduduk.alamat",$alamat);
                if ($rt!='' || $rt!=' ' || $rt!=NULL){
            $this->db->like("tb_penduduk.alamat",$rt);
        }
        //$this->db->order_by("score", "DESC");
        $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }
    function datalengkapsehatalamat() {
        $post = $this->input->post();
        $alamat=$post['alamat'];
        $rt=$post['rt'];
        $this->db->distinct();
        $this->db->select ('*');
        $this->db->from ('tb_penduduk ');
        $this->db->join ('tb_qusoner','tb_penduduk.nik = tb_qusoner.nik'); 
        $this->db->like("score",'1');
        // $this->db->order_by("alamat", "ASC");
        // $this->db->where("score =1");
        // $this->db->where("tb_penduduk.nik !=''");
        // $this->db->where("tb_penduduk.nik IS NOT NULL");
        $this->db->like("tb_penduduk.alamat",$alamat);
                if ($rt!='' || $rt!=' ' || $rt!=NULL){
            $this->db->like("tb_penduduk.alamat",$rt);
        }
        //$this->db->order_by("score", "DESC");
        $this->db->group_by('tb_penduduk.nik');
        $query = $this->db->get();
        return $query->result_array();

    }

}
