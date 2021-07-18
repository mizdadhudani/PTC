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
			  		 $count = count($_FILES['gambar']['name']);
		    		
				      for($x=0;$x<$count;$x++){
				    
				        if(!empty($_FILES['gambar']['name'][$x]))
				        {
				    	  
				           $_FILES['file']['name'] = $_FILES['gambar']['name'][$x];
				           $_FILES['file']['type'] = $_FILES['gambar']['type'][$x];
				           $_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$x];
				           $_FILES['file']['error'] = $_FILES['gambar']['error'][$x];
				           $_FILES['file']['size'] = $_FILES['gambar']['size'][$x];

						  	$config1['upload_path']		= './assets/upload/image/';
							$config1['allowed_types']	= 'jpg|png|jpeg|';
							$config1['file_name']		= $_FILES['gambar']['name'][$x];

							$this->load->library('upload', $config1);

							if ($this->upload->do_upload('file'))
							{
								$upload_gambarf= array('upload_data' => $this->upload->data());

								$config1['image_library'] 	= 'gd2';
								$config1['source_image'] 	= './assets/upload/image/'.$upload_gambarf['upload_data']['file_name'];
								//lokasi folder thumbnail
								$config1['new_image']		= './assets/upload/image/thumbs/'.$upload_gambarf['upload_data']['file_name'];
								$config1['create_thumb'] 	= TRUE;
								$config1['maintain_ratio'] 	= TRUE;
								$config1['width']         	= 450;//pixel
								$config1['height']       	= 235;//pixel
								$config1['thumb_marker']	= '';
					         	

								$this->load->library('image_lib', $config1);
								$this->image_lib->initialize($config1);
								$this->image_lib->resize();
								$this->image_lib->clear($config1);
								$this->image_lib->clear();
								// end create thumbnail
					          
					            $filename = $upload_gambarf['upload_data']['file_name'];
					   			if ($x==0) {
					   				$surat_ag=$filename;
					   			}
					   			elseif ($x==1){
					   				$surat_pcr=$filename;
					   			}
					   			else {
					   				$surat_lain=$filename;
					   			}
				            
				        	}
				        	else{
				        		if ($x==0) {
					   				$surat_ag='tidak ada';
					   			}
					   			elseif ($x==1){
					   				$surat_pcr='tidak ada';
					   			}
					   			else {
					   				$surat_lain='tidak ada';
					   			}
				        	}

				        }
				      
				   
				      } //end for
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
				      				'surat_ag'					=>$surat_ag,
				      				'surat_pcr'					=>$surat_pcr,
				      				'surat_lain'				=>$surat_lain,
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