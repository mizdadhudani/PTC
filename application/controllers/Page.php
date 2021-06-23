<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Page extends CI_Controller {

		function __construct(){

		parent::__construct();

		$this->load->model('modulpenduduk');
		$this->load->model('kuisoner');

		$this->load->helper('url');

	}

public function index(){



		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'landing',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  	

					  );

		

		$this->load->view('part/content', $dataku);

}


	public function about()

	

	{



		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'index',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  	

					  );

		

		$this->load->view('about', $dataku);

}

public function submitdata($nomorhp=null) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nomorhp', 'nomorhp', array('required', 'min_length[10]'));
		                if ($this->form_validation->run() == FALSE)
                {
                        redirect('');
                }
                else
                {
		$nomorhp=$this->input->post('nomorhp');
		$cek = $this->modulpenduduk->penduduk($nomorhp);
		if (!empty($cek)){
			$data=$cek;
			if ($data['nik']=='' || $data['link']=='' || $data['nama']=='' || $data['nomorhp']=='0' ){
			redirect("page/databaru/".$nomorhp);
	
			} else {
				//List Data Baru 
			redirect('page/listdata/'.$cek['link']);
		}
		}else {
			$baru = $this->kuisoner->baru($nomorhp);
			$tambah=$this->modulpenduduk->tambahnik($nomorhp);
			redirect("page/databaru/".$nomorhp);
		}
	}
}

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
public function databaru($nomorhp=null){
		$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'databaru',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'data'=>$this->modulpenduduk->getdataid($nomorhp),
					  'datak'=>$this->kuisoner->getdataidn($nomorhp)
					  );

		
		$this->load->view('part/content', $dataku);
}
// public function gantialamat($nomorhp=null){
// 	$datap=$this->modulpenduduk->getdataid($nomorhp);
// 	$nik=$datap->nik;
// 	$dataq=$this->kuisoner->getdataidk($nik);
// 		$dataku = array(	'title' => 'Welcome to MyBlog' ,

// 					  	'isi'=>'gantialamat',

// 					  	//'postku'=> $this->tampilan->postku(),

// 					  	// 'rows'=> $this->rows->sliderku(),

// 					  	// 'logo'=>$this->inti->logo(),

// 					  'data'=>$datap,
// 					  'datak'=>$dataq
// 					  );

		
// 		$this->load->view('part/content', $dataku);
// }
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
					  'datak'=>$dataq
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
					  'dataku'=>$this->kuisoner->penduduk($nik),
					  'datas'=>$this->kuisoner->penduduktanggal($nik),
					  'datap'=>$this->modulpenduduk->datadetailhari($nik)
					  //'dataku'=>$this->kuisoner->getdataid($id),

					  );
if ($cek->alamat=='' || $cek->alamat==null || $cek->alamat==' ' || $cek->penduduk=='Panggungharjo'){
	redirect("page/gantidata/".$nik);
}else {
		
		$this->load->view('part/content', $dataku);
	}
}

public function laporanharian($nik=null) {
		$nik=$this->input->post('nik');
		$ksepuluh=$this->input->post('ksepuluh');
		$ksebelas=$this->input->post('ksebelas');
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
		if($ksepuluh>0 || $ksebelas>0){
			redirect("page/laporanlanjutan/".$nik);
			echo $ksepuluh, $ksebelas;
		} else {
			echo 'data tidak ada';redirect("page/hasillaporan/".$nik);
		}
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
					  'datalist'=>$this->modulpenduduk->getdataid($nomorhp)
					  


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
} 

