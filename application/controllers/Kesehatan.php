<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Kesehatan extends CI_Controller {

		function __construct(){

		parent::__construct();

		$this->load->model('penduduk_model');
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
				      				// 'tgl_gejala'				=>$i->post('tgl_gejala'),
				      				'hamil'						=>$i->post('hamil'),
				      				'diabetes'					=>$i->post('diabetes'),
				      				'jantung'					=>$i->post('jantung'),
				      				'hipertensi'				=>$i->post('hipertensi'),
				      				'kanker'					=>$i->post('kanker'),
				      				'imunologi'					=>$i->post('imunologi'),
				      				'ginjal'					=>$i->post('ginjal'),
				      				'hati'						=>$i->post('hati'),
				      				'paru'						=>$i->post('paru'),
				      				'sakit_lain'				=>$i->post('sakit_lain'),
				      				'alergi_obat'				=>$i->post('alergi_obat'),
				      				'nama_obat'					=>$i->post('nama_obat'),
				      				'terakhir_berobat'			=>$i->post('terakhir_berobat'),
				      				'kondisi'					=>$i->post('kondisi'),
				      );
				      $this->kesehatan_model->tambah($data);
				      redirect(base_url('pemeriksaan'));

			  	}

				$data = array(	
								'title' 	=> 'Data Diri - Bantul Tangguh' ,
							  	'isi'		=>'user/v_riwayat_kesehatan',
							  	'cek'		=> $cek,
							  );
				
				$this->load->view('user/part_kuis/include', $data);
			
			
		}

		

}