<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Data extends CI_Controller {

		function __construct(){

		parent::__construct();

		$this->load->model('penduduk_model');
		$this->load->model('kuisoner_model');
		$this->load->model('wilayah_model');

		$this->load->helper('url');

		}

		public function index(){
			
			$valid=$this->form_validation;
		  	$valid->set_rules('nomorhp', 'nomorhp', 'required',
		  		array('required' => '%s harus diisi'));

		  	if($valid->run())
		  	{	
		  		$i=$this->input;
				$nomorhp=$i->post('nomorhp');
				$cek = $this->penduduk_model->detail($nomorhp);
				//cek data databse lama
				if (!empty($cek))
				{
					$this->session->set_userdata('id', $cek->id);
					$this->session->set_userdata('nomorhp', $cek->nomorhp);
					if ($cek->nik=='' || $cek->link=='' || $cek->nama=='' || $cek->nomorhp=='0' ){
						
					redirect("data/baru/");
			
					} 
					else 
					{
						redirect('data/list/');
					}
				}
				else 
				{
					$this->session->set_userdata('nomorhp', $nomorhp);
					$data=array(
								'link'		=>$nomorhp,
								'nomorhp'	=>$nomorhp,
								
					);
					$this->penduduk_model->tambah($data);
					redirect("data/baru/");
				}
			}


			$data = array(	

						  	'isi'=>'user/landing',
						  	'title'=>'Login - Bantul Tangguh'

						  );

			

			$this->load->view('user/part_kuis/content', $data);

		}
		public function baru(){
			if ($cek->nik='' || $cek->link=='' || $cek->nama=='' || $cek->nomorhp=='0' )
			{
				redirect(base_url('data/list'));
			}
			else
			{
				
				$nomorhp=$this->session->userdata('nomorhp');
				$wilayah=$this->wilayah_model->provinsi();
				$valid=$this->form_validation;
				$i=$this->input;
				$penduduk=$this->penduduk_model->detail($nomorhp);
				$valid->set_rules('nik','NIK', 'required|is_unique[penduduk.nik]', 
				array(	'required' => '%s harus diisi',
						'is_unique'	=> '%s sudah terdaftar'));
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
					   				$data_ktp=$filename;
					   			}
					   			else{
					   				$data_surat=$filename;
					   			}
				            
				        	}
				        	else{
				        		if ($x==0) {
					   				$data_ktp='tidak ada ktp';
					   			}
					   			else{
					   				$data_surat='tidak ada surat';
					   			}
				        	}

				        }
				      
				   
				      } //end for
				      $kecamatan=$this->wilayah_model->kecamatan_detail($i->post('kecamatan'));
				      $kota=$this->wilayah_model->kabupaten_detail($i->post('kota'));
				      $kelurahan=$this->wilayah_model->kelurahan_detail($i->post('kelurahan'));
				      $provinsi=$this->wilayah_model->provinsi_detail($i->post('provinsi'));
				      $data= array(
				      				'id'						=>$penduduk->id,
				      				'nik'						=>$i->post('nik'),
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
				      				'kota'						=>$kota->name,
				      				'kecamatan'					=>$kecamatan->name,
				      				'gambar_ktp'				=>$data_ktp,
				      				'gambar_surat'				=>$data_surat
				      				

				      );
				      $this->penduduk_model->edit($data);
				      redirect(base_url('data/list'));

			  	}

				$data = array(	
								'title' 	=> 'Data Diri - Bantul Tangguh' ,
							  	'isi'		=>'user/baru',
							  	'penduduk'	=>$penduduk,
							  	'wilayah'	=>$wilayah,
							  );
				
				$this->load->view('user/part_kuis/include', $data);
			
			}
		}

		public function list() {
		$this->simple_login->cek_login_user(); 
		$nomorhp=$this->session->userdata('nomorhp');
		$list=$this->penduduk_model->list_user($nomorhp);
		$data = array(	

						'title' 	=>'Data Diri - Bantul Tangguh' ,
					  	'isi'		=>'user/list',
					  	'list'		=>$list
					  );
	
		$this->load->view('user/part_kuis/content', $data);
		}
		public function tambah(){
			$this->simple_login->cek_login_user(); 
			$nomorhp=$this->session->userdata('nomorhp');
			$wilayah=$this->wilayah_model->provinsi();
			$valid=$this->form_validation;
			$i=$this->input;
			$penduduk=$this->penduduk_model->detail($nomorhp);
			$valid->set_rules('nik','NIK', 'required|is_unique[penduduk.nik]', 
			array(	'required' => '%s harus diisi',
					'is_unique'	=> '%s sudah terdaftar'));
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
				   				$data_ktp=$filename;
				   			}
				   			else{
				   				$data_surat=$filename;
				   			}
			            
			        	}
			        	else{
			        		if ($x==0) {
				   				$data_ktp='tidak ada ktp';
				   			}
				   			else{
				   				$data_surat='tidak ada surat';
				   			}
			        	}

			        }
			         
			   
			      } //end for
			      $kecamatan=$this->wilayah_model->kecamatan_detail($i->post('kecamatan'));
				  $kota=$this->wilayah_model->kabupaten_detail($i->post('kota'));
				  $kelurahan=$this->wilayah_model->kelurahan_detail($i->post('kelurahan'));
				  $provinsi=$this->wilayah_model->provinsi_detail($i->post('provinsi'));
			      $data= array(
			      				
			      				'nomorhp'					=>$i->post('nomorhp'),
			      				'link'						=>$nomorhp,
			      				'nik'						=>$i->post('nik'),
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
				      			'kota'						=>$kota->name,
				      			'kecamatan'					=>$kecamatan->name,
			      				'gambar_ktp'				=>$data_ktp,
			      				'gambar_surat'				=>$data_surat
			      				

			      );
			      $this->penduduk_model->tambah($data);
			      redirect(base_url('data/list'));

		}
		$pelapor=$this->penduduk_model->detail($nomorhp);
		$data = array(	
						'title' 	=> 'Data Diri - Bantul Tangguh' ,
					  	'isi'		=>'user/tambah',
					  	'pelapor'	=>$pelapor,
					  	'wilayah'	=>$wilayah,
					  );
		
		$this->load->view('user/part_kuis/content', $data);
		}
		public function kuisoner($nik=null){
			$this->simple_login->cek_login_user(); 
			$cek=$this->penduduk_model->detail_nik($nik);
			if(!empty($nik) and !empty($cek))
			{
				$valid=$this->form_validation;
				$i=$this->input;
				$nomorhp=$this->session->userdata('nomorhp');
				$valid->set_rules('ksatu','Kuisoner Harus di Isi', 'required', 
						array(	'required' => '%s harus diisi',
								));
				
				if($valid->run())
		  		{
					$gejalarendah=$i->post('ksatu')+$i->post('kdua')+$i->post('ktiga')+$i->post('kempat')+$i->post('klima')+$i->post('kenam')+$i->post('ktujuh')+$i->post('kdelapan')+$i->post('ksembilan')+$i->post('ksepuluh');
						$gejalasedang=$i->post('ksebelas');
						$gejalatinggi=$i->post('kduabelas');
						$saturasi=$i->post('ketujuhbelas');
						$score=0;
						if ( ($saturasi<=92 && $saturasi>=1)||($gejalatinggi>0 && $gejalasedang>0 && $saturasi==0) || ($gejalatinggi>0 && $gejalasedang>0 && $gejalarendah>0 && $saturasi==0)||($gejalatinggi>0 && $gejalasedang>0 && $saturasi<=92 && $saturasi>=1) || ($gejalatinggi>0 && $gejalasedang>0 && $gejalarendah>0 && $saturasi<=92 && $saturasi>=1))
						{
	    				$score = '3'; 
	    				}
						else if (($saturasi>=93 && $saturasi<95)||($gejalasedang>0 && $saturasi==0)||($gejalarendah>0 && $gejalasedang>0 && $saturasi==0)||($gejalasedang>0 && $saturasi>=93 && $saturasi<95)||($gejalarendah>0 && $gejalasedang>0 && $saturasi>=93 && $saturasi<95))
	    				{
	    				$score = '2'; 
	    				}
						else if (
	    				($saturasi>=95) || ($gejalarendah>0 && $saturasi==0)||($gejalarendah>0 && $saturasi>=95))
	    				{ 
	    				$score = '1';  
	    				} 
	    				elseif (($gejalarendah==0 && $gejalatinggi==0 && $gejalasedang==0 && $saturasi>=95) || ($gejalarendah==0 && $gejalatinggi==0 && $gejalasedang==0 && $saturasi==0))
	     				{
	        			$score = '0';
	    				}
	    				$kuisoner=$this->kuisoner_model->tanggal($nik);
				      $data= array(

				      				'nik'						=>$nik,
				      				'link'						=>$nomorhp,
				      				'ksatu'						=>$i->post('ksatu'),
				      				'kdua'						=>$i->post('kdua'),
				      				'ktiga'						=>$i->post('ktiga'),
				      				'kempat'					=>$i->post('kempat'),
				      				'klima'						=>$i->post('klima'),
				      				'kenam'						=>$i->post('kenam'),
				      				'ktujuh'					=>$i->post('ktujuh'),
				      				'kdelapan'					=>$i->post('kdelapan'),
				      				'ksembilan'					=>$i->post('ksembilan'),
				      				'ksepuluh'					=>$i->post('ksepuluh'),
				      				'ksebelas'					=>$i->post('ksebelas'),
				      				'kduabelas'					=>$i->post('kduabelas'),
				      				'ktigabelas'				=>$i->post('ktigabelas'),
				      				'kempatbelas'				=>$i->post('kempatbelas'),
				      				'klimabelas'				=>$i->post('klimabelas'),
				      				'kenambelas'				=>$i->post('kenambelas'),
				      				'ktujuhbelas'				=>$i->post('ktujuhbelas'),
				      				'tanggal'					=>date("y-m-d"),
				      				'time'						=>date("h:i"),
				      				'score'						=>$score,
				      				'data'						=>'terupdate'
				      				
				      				

				      );
				     
				      if(!empty($kuisoner->tanggal==date("Y-m-d")))
				      {

				      	$this->kuisoner_model->edit_hari($data);

									      	
				      }
				      else{
				      	
				      	 $lama=array(
				      				'nik'		=>$nik,
				      				'data'		=>''
				      	);
				      	$this->kuisoner_model->edit_hari($lama);
				      	$this->kuisoner_model->tambah($data);
				      	
				      }
				      redirect(base_url('data/hasil'));
				 }

				$data = array(	

							  	'isi'=>'user/kuisoner',
							  	'title'=>'Login - Bantul Tangguh',
							  	'nik'	=>$nik

							  );

				

				$this->load->view('user/part_kuis/content', $data);
			}
			else{
				redirect(base_url('data/list'));
			}
		}
		public function hasil ($nik=null){
			$cek=$this->penduduk_model->detail_nik($nik);

			if(!empty($nik) and !empty($cek))
			{
				$kuisoner=$this->kuisoner_model->tanggal($nik);
				$score=$this->kuisoner_model->score($nik);
				$data = array(	

							  	'isi'=>'user/hasil',
							  	'title'=>'Hasil Laporan Harian',
							  	'penduduk'	=>$cek,
							  	'kuisoner'	=>$kuisoner,
							  	'score'		=>$score,
							  	'tanggal'		=>$score,

							  );

				

				$this->load->view('user/part/include', $data);
			}
			else{
				redirect(base_url('data/list'));
			}
		}
		public function logout(){

			$this->simple_login->logout_user();
		}
		public function about()
		{



			$dataku = array(	'title' => 'Welcome to MyBlog' ,

						  	'isi'=>'index',

						  );
			$this->load->view('about', $dataku);

		}



} 

