<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {

	function __construct(){

		parent::__construct();

		$this->load->model('modulpenduduk');
		$this->load->model('lapor_model');

		$this->load->helper('url');

	}
	public function index()
	{
		

		$datakuu = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'landing',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  	

					  );

		

		$this->load->view('part/content', $datakuu);

	}

	public function isidataa($nik){
	$cek = $this->modulpenduduk->penduduknik($nik);
		$datakuu = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'isidataa',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  //'data'=>$this->modulpenduduk->penduduk($nik),
					  'datakuu'=>$this->lapor_model->pendudukk($nik),
					  'datass'=>$this->lapor_model->penduduktanggall($nik),
					  'datapp'=>$this->modulpenduduk->datadetailhari($nik)
					  //'dataku'=>$this->kuisoner->getdataid($id),

					  );
if ($cek->alamat=='' || $cek->alamat==null || $cek->alamat==' ' || $cek->penduduk=='Panggungharjo'){
	redirect("page/gantidata/".$nik);
}else {
		
		$this->load->view('part/content', $datakuu);
	}
}

	public function laporanhariann($nik=null) {
		$nik=$this->input->post('nik');
		$id=$this->input->post('id');
		$cek = $this->lapor_model->penduduktanggall($nik);
		$tanggal=$cek;
		if (!empty($cek)){
			echo "tanggal sama";
			$update=$this->lapor_model->update($nik);
			$update=$this->modulpenduduk->tambahhari($nik);

		}else {
			echo "tanggal tidak samsa";
			$tambahh=$this->lapor_model->tambahh($nik);
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

}

/* End of file lapor.php */
/* Location: ./application/controllers/lapor.php */