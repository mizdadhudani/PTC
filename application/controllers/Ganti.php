<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Ganti extends CI_Controller {

		function __construct(){

		parent::__construct();

		$this->load->model('penduduk_model');
		$this->load->model('kuisoner_model');
		$this->load->model('wilayah_model');

		$this->load->helper('url');

		}
	public function data($nik=null){
		
		$cek=$this->penduduk_model->detail_nik($nik);
		if(!empty($nik) and !empty($cek))
		{
			$nomorhp=$this->session->userdata('nomorhp');
			$wilayah=$this->wilayah_model->provinsi();
			$valid=$this->form_validation;
			$i=$this->input;
			$penduduk=$this->penduduk_model->detail_nik($nik);
			
				$valid->set_rules('nama', 'Nama ', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('usia', 'Usia', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('mulai_isolasi', 'Mulai Isolasi', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('status_dlm_keluarga', 'Status dalam Keluarga', 'required',
			  		array('required' => '%s harus diisi'));
				if(!empty($i->post('jeniskelamin')=='Perempuan')){
				$valid->set_rules('hamil', 'Apakah Hamil', 'required',
			  		array('required' => '%s harus diisi'));
				}
				$valid->set_rules('kota', 'Kota', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('kelurahan', 'Kelurahan', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('pedukuhan', 'pedukuhan', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('kecamatan', 'kecamatan', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('alamat', 'RT', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('tempat_isolasi', 'Tempat Isolasi', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('status', 'Status', 'required',
			  		array('required' => '%s harus diisi'));

			  	if($valid->run())
			  	{
			  		
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
							$config1['overwrite'] = TRUE;

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
								$config1['overwrite'] = TRUE;
					         	

								$this->load->library('image_lib', $config1);
								$this->image_lib->initialize($config1);
								$this->image_lib->resize();
								$this->image_lib->clear($config1);
								$this->image_lib->clear();
								// end create thumbnail
					          
					            $filename = $upload_gambarf['upload_data']['file_name'];
					   			if ($x==0) {
					   				$data_ktp=$filename;
					   			}
					   			else{
					   				$data_surat=$filename;
					   			}
				            
				        	}
				        	else{
				        		if ($x==0) {
					   				$data_ktp=$penduduk->gambar_ktp;
					   			}
					   			else{
					   				$data_surat=$penduduk->gambar_surat;
					   			}
				        	}

				        }
				      
				   
				      } //end for
				      $kecamatan=$this->wilayah_model->kecamatan_detail($i->post('kecamatan'));
				      $kota=$this->wilayah_model->kabupaten_detail($i->post('kota'));
				      $kelurahan=$this->wilayah_model->kelurahan_detail($i->post('kelurahan'));
				      $pedukuhan=$this->wilayah_model->pedukuhan_detail($i->post('pedukuhan'));
				      $provinsi=$this->wilayah_model->provinsi_detail($i->post('provinsi'));
				      if ($nik!=$i->post('nik')) {
				      		$cek=$this->penduduk_model->detail_nik($i->post('nik'));
				      		if (empty($cek)) {
				      			$nik_baru=$i->post('nik_baru');
				      		}
				      		else{

				      			redirect(base_url('ganti/data/').$nik);
				      		}
				      }
				      else{
				      	$nik_baru=$nik;
				      }
				      $data= array(
				      				'id'						=>$penduduk->id,
				      				'nik'						=>$nik_baru,
				      				'nama'						=>$i->post('nama'),
				      				'usia'						=>$i->post('usia'),
				      				'mulai_isolasi'				=>$i->post('mulai_isolasi'),
				      				'status_dlm_keluarga'		=>$i->post('status_dlm_keluarga'),
				      				'jeniskelamin'				=>$i->post('jeniskelamin'),
				      				'hamil'						=>$i->post('hamil'),
				      				'status'					=>$i->post('status'),
				      				'alamat'					=>$i->post('alamat'),
				      				'tempat_isolasi'			=>$i->post('tempat_isolasi'),
				      				'provinsi'					=>$provinsi->name,
				      				'kelurahan'					=>$kelurahan->name,
				      				'pedukuhan'					=>$pedukuhan->name,
				      				'kota'						=>$kota->name,
				      				'kecamatan'					=>$kecamatan->name,
				      				'gambar_ktp'				=>$data_ktp,
				      				'gambar_surat'				=>$data_surat
				      				

				      );
				      $this->penduduk_model->edit($data);
				      redirect(base_url('data/list'));

			  	}
			$data = array(	

							  	'isi'			=>'user/edit',
							  	'title'			=>'Login - Bantul Tangguh',
							  	'wilayah'		=>$wilayah,
							  	'penduduk'		=>$penduduk,	

							  );

				

			$this->load->view('user/part_kuis/include', $data);
		}
		else{
			redirect(base_url('data/list'));
		}
	}

		public function status($nik=null){
		
		$cek=$this->penduduk_model->detail_nik($nik);
		if(!empty($nik) and !empty($cek))
		{
			$nomorhp=$this->session->userdata('nomorhp');
			$wilayah=$this->wilayah_model->provinsi();
			$valid=$this->form_validation;
			$i=$this->input;
			$penduduk=$this->penduduk_model->detail_nik($nik);
			
				$valid->set_rules('nama', 'Nama ', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('usia', 'Usia', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('mulai_isolasi', 'Mulai Isolasi', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('status_dlm_keluarga', 'Status dalam Keluarga', 'required',
			  		array('required' => '%s harus diisi'));
				if(!empty($i->post('jeniskelamin')=='Perempuan')){
				$valid->set_rules('hamil', 'Apakah Hamil', 'required',
			  		array('required' => '%s harus diisi'));
				}
				$valid->set_rules('kota', 'Kota', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('kelurahan', 'Kelurahan', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('pedukuhan', 'pedukuhan', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('kecamatan', 'kecamatan', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('alamat', 'RT', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('tempat_isolasi', 'Tempat Isolasi', 'required',
			  		array('required' => '%s harus diisi'));
				$valid->set_rules('status', 'Status', 'required',
			  		array('required' => '%s harus diisi'));

			  	if($valid->run())
			  	{
			  		
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
							$config1['overwrite'] = TRUE;

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
								$config1['overwrite'] = TRUE;
					         	

								$this->load->library('image_lib', $config1);
								$this->image_lib->initialize($config1);
								$this->image_lib->resize();
								$this->image_lib->clear($config1);
								$this->image_lib->clear();
								// end create thumbnail
					          
					            $filename = $upload_gambarf['upload_data']['file_name'];
					   			if ($x==0) {
					   				$data_ktp=$filename;
					   			}
					   			else{
					   				$data_surat=$filename;
					   			}
				            
				        	}
				        	else{
				        		if ($x==0) {
					   				$data_ktp=$penduduk->gambar_ktp;
					   			}
					   			else{
					   				$data_surat=$penduduk->gambar_surat;
					   			}
				        	}

				        }
				      
				   
				      } //end for
				      $kecamatan=$this->wilayah_model->kecamatan_detail($i->post('kecamatan'));
				      $kota=$this->wilayah_model->kabupaten_detail($i->post('kota'));
				      $kelurahan=$this->wilayah_model->kelurahan_detail($i->post('kelurahan'));
				      $pedukuhan=$this->wilayah_model->pedukuhan_detail($i->post('pedukuhan'));
				      $provinsi=$this->wilayah_model->provinsi_detail($i->post('provinsi'));
				      if ($nik!=$i->post('nik')) {
				      		$cek=$this->penduduk_model->detail_nik($i->post('nik'));
				      		if (empty($cek)) {
				      			$nik_baru=$i->post('nik_baru');
				      		}
				      		else{

				      			redirect(base_url('ganti/data/').$nik);
				      		}
				      }
				      else{
				      	$nik_baru=$nik;
				      }
				      $data= array(
				      				'id'						=>$penduduk->id,
				      				'nik'						=>$nik_baru,
				      				'nama'						=>$i->post('nama'),
				      				'usia'						=>$i->post('usia'),
				      				'mulai_isolasi'				=>$i->post('mulai_isolasi'),
				      				'status_dlm_keluarga'		=>$i->post('status_dlm_keluarga'),
				      				'jeniskelamin'				=>$i->post('jeniskelamin'),
				      				'hamil'						=>$i->post('hamil'),
				      				'status'					=>$i->post('status'),
				      				'alamat'					=>$i->post('alamat'),
				      				'tempat_isolasi'			=>$i->post('tempat_isolasi'),
				      				'provinsi'					=>$provinsi->name,
				      				'kelurahan'					=>$kelurahan->name,
				      				'pedukuhan'					=>$pedukuhan->name,
				      				'kota'						=>$kota->name,
				      				'kecamatan'					=>$kecamatan->name,
				      				'gambar_ktp'				=>$data_ktp,
				      				'gambar_surat'				=>$data_surat
				      				

				      );
				      $this->penduduk_model->edit($data);
				      redirect(base_url('data/list'));

			  	}
			$data = array(	

							  	'isi'			=>'user/status',
							  	'title'			=>'Login - Bantul Tangguh',
							  	'wilayah'		=>$wilayah,
							  	'penduduk'		=>$penduduk,	

							  );

				

			$this->load->view('user/part_kuis/include', $data);
		}
		else{
			redirect(base_url('data/list'));
		}
	}

}