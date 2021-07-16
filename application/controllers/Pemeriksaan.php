<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pemeriksaan extends CI_Controller {

		function __construct(){

		parent::__construct();

		$this->load->model('penduduk_model');
		$this->load->model('pemeriksaan_model');
		$this->load->model('kesehatan_model');

		$this->load->helper('url');

		}

		public function index($nik=null) {
			$this->simple_login->cek_login_user();
			$nomorhp=$this->session->userdata('nomorhp');
			$cek=$this->penduduk_model->detail($nomorhp);
			$nik=$this->input->post('nik');				
			if($cek->nik==$nik)
			{
				$valid=$this->form_validation;
				$i=$this->input;
				      $data= array(
				      				'nik'						=>$nik,
				      				'link'						=>$nomorhp,
				      				'tes_ag'					=>$i->post('tes_ag'),
				      				'tgl_ag'					=>$i->post('tgl_ag'),
				      				'tmpt_ag'					=>$i->post('tmpt_ag'),
				      				'hasil_ag'					=>$i->post('hasil_ag'),
				      				'tes_pcr'					=>$i->post('tes_pcr'),
				      				'tgl_pcr'					=>$i->post('tgl_pcr'),
				      				'tmpt_pcr'					=>$i->post('tmpt_pcr'),
				      				'hasil_pcr'					=>$i->post('hasil_pcr'),
				      				'tes_lain'					=>$i->post('tes_lain'),
				      				'tgl_lain'					=>$i->post('tgl_lain'),
				      				'tmpt_lain'					=>$i->post('tmpt_lain'),
				      				'hasil_lain'				=>$i->post('hasil_lain'),
				      				'surat_ag'					=>$i->post('surat_ag'),
				      				'surat_pcr'					=>$i->post('surat_pcr'),
				      				'surat_lain'				=>$i->post('surat_lain'),
				      );
				      $this->pemeriksaan_model->tambah($data);
				      redirect(base_url('kontak'));

			  	}

				$data = array(	
								'title' 	=> 'Data Diri - Bantul Tangguh' ,
							  	'isi'		=>'user/v_pemeriksaan',
							  	'cek'		=> $cek,
							  );
				
				$this->load->view('user/part_kuis/include', $data);
			
			
		}

		

}