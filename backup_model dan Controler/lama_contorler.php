public function submitdatabaru($nomorhp=null) {
			$nik=$this->input->post('nik');
			$cek = $this->modulpenduduk->getdataidnik($nomorhp);
			$link=$this->input->post('link');
			$idk=$this->input->post('idk');

		 	if ($cek->nik==$nik ){
				redirect(base_url('page/sudahada/'));	
			echo "Nik Sudah ada";
			}else {
			$tambahnik=$this->kuisoner->barunik();
			$tambahdata= $this->modulpenduduk->databarupenduduknik();
		 	redirect('page/listdata/'.$link);
			}
	// echo $link=$this->input->post('idk');
	// echo $link=$this->input->post('nik');
		 
	}

public function submitlistbaru($nomorhp=null) {
			$nik=$this->input->post('nik');
			$link=$this->input->post('link');
			$cek = $this->modulpenduduk->getdataidnik($nomorhp);
			if ($cek->nik==$nik ){
				//data sudah ada		
			echo "Link Sudah ada";
			redirect(base_url('page/sudahada/'));	
			}else {
				//insert
			$tambahdata= $this->modulpenduduk->tambahlistbaru($nomorhp);
			$tambahkusioner= $this->kuisoner->tambahlist();
			}

		 	redirect('page/listdata/'.$link);
		 
	}

public function gantialamat($nomorhp=null){
	// $nik=$datap->nik;
	// $dataq=$this->kuisoner->getdataidn($nomorhp);
		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'gantialamat',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'data'=>$this->modulpenduduk->getdataid($nomorhp),
					  'datak'=>$this->kuisoner->getdataidn($nomorhp)
					  );

		
		$this->load->view('part/content', $dataku);
}
public function gantidata($nik=null){
	$datap=$this->modulpenduduk->ubahdatadiri($nik);
	//$nik=$datap->nik;
	$dataq=$this->kuisoner->getdataidk($nik);
		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'ubahdatadiri',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'data'=>$datap,
					  'datak'=>$dataq,
					  'kecamatan'=>$this->dinamik_alamat_model->fetch_kecamatan()
					  );

		
		$this->load->view('part/content', $dataku);
}
public function isidata($nik){
	$cek = $this->modulpenduduk->penduduknik($nik);
		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'isidata',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  //'data'=>$this->modulpenduduk->penduduk($nik),
					  // 'dataku'=>$this->kuisoner->penduduk($nik),
					  'dataku'=>$this->kuisoner->penduduk($nik),
					  'datas'=>$this->kuisoner->penduduktanggal($nik),
					  'datap'=>$this->modulpenduduk->datadetailhari($nik)
					  //'dataku'=>$this->kuisoner->getdataid($id),

					  );
if ($cek->penduduk=='' || $cek->alamat=='' || $cek->usia=='' || $cek->mulai_isolasi==''|| $cek->status_dlm_keluarga==''|| $cek->jeniskelamin==''|| $cek->desa==''|| $cek->kecamatan==''|| $cek->status==''|| $cek->tempat_isolasi==''){
	redirect("page/gantidata/".$nik);
}else {
		
		$this->load->view('part/content', $dataku);
	}
}

public function laporanharian($nik=null) {
		$nik=$this->input->post('nik');
		// $ksepuluh=$this->input->post('ksepuluh');
		// $ksebelas=$this->input->post('ksebelas');
		$id=$this->input->post('id');
		$cek = $this->kuisoner->penduduktanggal($nik);
		$tanggal=$cek;
		if (!empty($cek)){
			echo "tanggal sama";
			$update=$this->kuisoner->update($nik);
			$update=$this->modulpenduduk->tambahhari($nik);

		}else {
			echo "tanggal tidak sama";
			$tambah=$this->kuisoner->tambah($nik);
			$update=$this->modulpenduduk->updatehari($nik);
			//update tanggal
			//$tambah=$this->kuisoner->tambah($nik);
			
		 }
		// if($ksepuluh>0 || $ksebelas>0){
		// 	redirect("page/laporanlanjutan/".$nik);
		// 	echo $ksepuluh, $ksebelas;
		// } else {
			echo 'data tidak ada';redirect("page/hasillaporan/".$nik);
		// }
		//redirect("page/hasillaporan/".$nik);
	}
public function submitlaporanlanjutan($nik=null){
		$nik=$this->input->post('nik');
		$id=$this->input->post('id');
		$ktigabelas=$this->input->post('ktigabelas');
		$kempatbelas=$this->input->post('kempatbelas');
		$cek = $this->kuisoner->penduduktanggal($nik);
		if($ktigabelas>0 || $kempatbelas>0){
		$this->kuisoner->updatelanjutan($nik);
		redirect("page/hasillaporan/".$nik);
			//echo $ksepuluh, $ksebelas;
		} else{ 

		redirect("page/hasillaporan/".$nik);
		}

		
}
public function laporanlanjutan($nik=null) {
		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'isiformlanjutan',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  //'data'=>$this->modulpenduduk->penduduk($nik),
					  'dataku'=>$this->kuisoner->penduduktanggal($nik),
					  //'dataku'=>$this->kuisoner->getdataid($id),

					  );

		
		$this->load->view('part/content', $dataku);
}
public function hasillaporan($nik=null){
		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'hasillaporan',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'data'=>$this->kuisoner->penduduktanggal($nik),

					  'datapenduduk'=>$this->modulpenduduk->datadetailpenduduk($nik),
					  'datascore'=>$this->modulpenduduk->datadetailpendudukscore($nik),
					  


					  );
	
		$this->load->view('part/user/include', $dataku);
}
public function listdata($nomorhp=null) {
		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'listdata',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'data'=>$this->modulpenduduk->getdatalist($nomorhp),
					  'datalist'=>$this->modulpenduduk->getdataid($nomorhp),
					  'status'=>$this->modulpenduduk->getstatus($nomorhp)
					  


					  );
	
		$this->load->view('part/content', $dataku);
}
public function tambahlistbaru($nomorhp=null) {
		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'tambahlistbaru',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'data'=>$this->modulpenduduk->getdataid($nomorhp),
					  'kecamatan'=>$this->dinamik_alamat_model->fetch_kecamatan()
					  


					  );
	
		$this->load->view('part/content', $dataku);
}
public function sudahada() {
		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'sudahada',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  //'data'=>$this->modulpenduduk->getdataid($nomorhp),

					  


					  );
	
		$this->load->view('part/content', $dataku);
}
public function footer() {
		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'footer',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  //'data'=>$this->modulpenduduk->getdataid($nomorhp),

					  


					  );
	
		$this->load->view('part/content', $dataku);
}
public function sehat($nik=null){
	// $cek = $this->modulpenduduk->penduduknik($nik);
	// $data =>$this->modulpenduduk->datadetailhari($nik);
	// $nik=$datap->nik;
	// $link=$datap->link;
	// $dataq=$this->kuisoner->getdataidk($nik);
	$datap=$this->modulpenduduk->ubahdatadiri($nik);
	$status = 'sehat';
	$ubahstatus = $this->modulpenduduk->ubahsehat($nik);


	$dataku = array(
				'isi'=>'sehat',
				'dataku'=>$this->kuisoner->penduduk($nik),
				'data' => $datap,
				'datas'=>$this->kuisoner->penduduktanggal($nik)
				// 'datap'=>$this->modulpenduduk->datadetailhari($nik)
				);
		$this->load->view('part/content', $dataku);
		//  redirect('page/sehat/'.$nik);
}

public function gantistatus($nik=null){
	$datap=$this->modulpenduduk->ubahdatadiri($nik);
	//$nik=$datap->nik;
	$dataq=$this->kuisoner->getdataidk($nik);
		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'gantistatus',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'data'=>$datap,
					  'datak'=>$dataq
					  );

		
		$this->load->view('part/content', $dataku);

}

public function submitalamatbaru($nomorhp=null) {
			$nik=$this->input->post('nik');
			$cek = $this->modulpenduduk->getdataidnik($nomorhp);
			$link=$this->input->post('link');
			$idk=$this->input->post('idk');

			//$tambahnik=$this->kuisoner->barunik();
			$tambahdata= $this->modulpenduduk->updatedataalamatnik();
		 	redirect('page/listdata/'.$link);
	// echo $link=$this->input->post('idk');
	// echo $link=$this->input->post('nik');
		 
	}

		// function dinamik_alamat()
	 // {
	 //  $data['kecamatan'] = $this->dinamik_alamat_model->fetch_kecamatan();
	 //  $this->load->view('databaru', $data);
	 // }

	public function fetch_desa()
	 {
	  if($this->input->post('id_kecamatan'))
	  {
	   echo $this->dinamik_alamat_model->fetch_desa($this->input->post('id_kecamatan'));
	  }
	 }

	 public function fetch_dukuh()
	 {
	  if($this->input->post('id_desa'))
	  {
	   echo $this->dinamik_alamat_model->fetch_dukuh($this->input->post('id_desa'));
	  }
	 }