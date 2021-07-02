<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Wilayah extends CI_Controller {



	// Load model

	public function __construct()

	{

		parent::__construct();

		$this->load->model('wilayah_model');

	}



	// halaman utama website

	public function index()

	{

	switch ($this->input->post('jenis')) {

		//ambil data kota / kabupaten

		case 'kota':

		$id_provinces = $this->input->post('id_provinces');

		if($id_provinces == ''){

		     exit;

		}else{

		     $getcity = $this->wilayah_model->kabupaten($id_provinces);
		     $output='';
		     foreach ($getcity as $data) {

		     	$output .='<option value="'.$data->id.'"';
		     	if($data->id=='3402'){
		     		$output .= ' selected >';
		     	}
		     	else {
		     		$output .='>';
		     	}

		     	$output .= $data->name.'</option>';
		     	
		     }
		     echo $output;

		      exit;  

		}

		break;



		//ambil data kecamatan

		case 'kecamatan':

		$id_regencies = $this->input->post('id_regencies');

		if($id_regencies == ''){

		     exit;

		}else{

		     $getcity = $this->wilayah_model->kecamatan($id_regencies);

		     foreach ($getcity as $data) {

		     	echo '<option value="'.$data->id.'">'.$data->name.'</option>';

		     }  

		     exit;    

		}

		break;

		



		//ambil data kelurahan

		case 'kelurahan':

		$id_district = $this->input->post('id_district');

		if($id_district == ''){

		     exit;

		}else{

		     $getcity = $this->wilayah_model->kelurahan($id_district);

		     foreach ($getcity as $data) {

		     	echo '<option value="'.$data->id.'">'.$data->name.'</option>';

		     }  

		     exit;    

		}

		break;

		

	}

	}



}