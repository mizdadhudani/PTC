<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Kontak extends CI_Controller {

		function __construct(){

		parent::__construct();

		$this->load->model('penduduk_model');
		$this->load->model('pemeriksaan_model');
		$this->load->model('kontak_model');
		$this->load->model('puskesmas_model');

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
				$puskesmas = array(
									'nik'						=> $nik,
									'link'						=> $nomorhp
				);
  				$this->puskesmas_model->tambah($puskesmas);
				      $data= array(
				      				'nik'						=>$nik,
				      				'link'						=>$nomorhp,
				      				'riwayat_perjalanan'		=>$i->post('riwayat_perjalanan'),
				      				'tempat_rp'					=>$i->post('tempat_rp'),
				      				'tgl_rp'					=>$i->post('tgl_rp'),
				      				'tiba_rp'					=>$i->post('tiba_rp'),
				      				'hewan'						=>$i->post('hewan'),
				      				'nama_hewan'				=>$i->post('nama_hewan'),
				      				'ke_suspect'				=>$i->post('ke_suspect'),
				      				'nama_ke'					=>$i->post('nama_ke'),
				      				'tgl_ke'					=>$i->post('tgl_ke'),
				      				'bentuk_kontak'				=>$i->post('bentuk_kontak'),
				      				'ke1'						=>$i->post('ke1'),
				      				'ke2'						=>$i->post('ke2'),
				      				'ke3'						=>$i->post('ke3'),
				      				'ke4'						=>$i->post('ke4'),
				      				'ke5'						=>$i->post('ke5'),
				      				'keramaian'					=>$i->post('keramaian'),
				      				'tempat_kunjungan'			=>$i->post('tempat_kunjungan'),
				      				'mulai_kunjungan'			=>$i->post('mulai_kunjungan'),
				      				'selesai_kunjungan'			=>$i->post('selesai_kunjungan'),
				      				'kegiatan_dihadiri'			=>$i->post('kegiatan_dihadiri'),
				      				'aktivitas'					=>$i->post('aktivitas')
				      );
				      $this->kontak_model->tambah($data);
				      redirect(base_url('data/kuisoner/').$nik);

			  	}

				$data = array(	
								'title' 	=> 'Data Diri - Bantul Tangguh' ,
							  	'isi'		=>'user/v_kontak',
							  	'cek'		=> $cek,
							  );
				
				$this->load->view('user/part_kuis/include', $data);
			
			
		}

		

}