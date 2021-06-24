<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {

			function __construct(){

		parent::__construct();

		$this->load->model('modulpenduduk');
		$this->load->model('kuisoner');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('modulpenduduk');
		$this->load->model('kuisoner');
		    if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        }
	}

	public function index(){
		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
				$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'datapenduduk',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'datao'=>$this->modulpenduduk->datalengkapodp(),
					  'dataj'=>$this->modulpenduduk->datalengkapodpj(),
					  'datat'=>$this->modulpenduduk->datalengkapkert(),
					  'datar'=>$this->modulpenduduk->datalengkapkerr(),
					  // 'datag'=>$this->modulpenduduk->datalengkapgejala(),
					  // 'datas'=>$this->modulpenduduk->datalengkapsehat(),
					  'datasemua'=>$this->modulpenduduk->datalengkapscore(),

					  //'dataku'=>$this->kuisoner->getdataid($id),

					  );

		
		$this->load->view('part/admin/include', $dataku);
	}
}
    public function datasehat(){
        if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
                $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'datasehat',

                        //'postku'=> $this->tampilan->postku(),

                        // 'rows'=> $this->rows->sliderku(),

                        // 'logo'=>$this->inti->logo(),

                      'datas'=>$this->modulpenduduk->datalengkapsehat(),
                      'datasemua'=>$this->modulpenduduk->datalengkapscore(),

                      //'dataku'=>$this->kuisoner->getdataid($id),

                      );

        
        $this->load->view('part/admin/include', $dataku);
    }
}
public function printdata(){
		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
				$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'printdata',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'datao'=>$this->modulpenduduk->datalengkapodp(),
					  'dataj'=>$this->modulpenduduk->datalengkapodpj(),
					  'datat'=>$this->modulpenduduk->datalengkapkert(),
					  'datar'=>$this->modulpenduduk->datalengkapkerr(),
					  'datag'=>$this->modulpenduduk->datalengkapgejala(),
					  'datas'=>$this->modulpenduduk->datalengkapsehat(),
					  'datasemua'=>$this->modulpenduduk->datalengkapscore(),

					  //'dataku'=>$this->kuisoner->getdataid($id),

					  );

		
		$this->load->view('part/content', $dataku);
	}	
}
public function cekdata(){
        if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
                $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'alamat',

                        //'postku'=> $this->tampilan->postku(),

                        // 'rows'=> $this->rows->sliderku(),

                        // 'logo'=>$this->inti->logo(),

                      'datao'=>$this->modulpenduduk->datalengkapodpalamat(),
                      'dataj'=>$this->modulpenduduk->datalengkapodpjalamat(),
                      'datat'=>$this->modulpenduduk->datalengkapkertalamat(),
                      'datar'=>$this->modulpenduduk->datalengkapkerralamat(),
                      'datag'=>$this->modulpenduduk->datalengkapgejalaalamat(),
                      'datas'=>$this->modulpenduduk->datalengkapsehatalamat(),
                      //'datasemua'=>$this->modulpenduduk->datalengkapscore(),

                      //'dataku'=>$this->kuisoner->getdataid($id),

                      );

        
        $this->load->view('part/content', $dataku);
    }   
}
public function printdataharian(){
		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
				$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'printdataharian',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'datao'=>$this->modulpenduduk->datalengkapodpharian(),
					  'dataj'=>$this->modulpenduduk->datalengkapodpjharian(),
					  'datat'=>$this->modulpenduduk->datalengkapkertharian(),
					  'datar'=>$this->modulpenduduk->datalengkapkerrharian(),
					  'datag'=>$this->modulpenduduk->datalengkapgejalaharian(),
					  'datas'=>$this->modulpenduduk->datalengkapsehatharian(),
					  //'datasemua'=>$this->modulpenduduk->datalengkapscoreharian(),

					  //'dataku'=>$this->kuisoner->getdataid($id),

					  );

		
		$this->load->view('part/content', $dataku);
	}	
}
public function printhariantanggal(){
        if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
                $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'printanggal',

                        //'postku'=> $this->tampilan->postku(),

                        // 'rows'=> $this->rows->sliderku(),

                        // 'logo'=>$this->inti->logo(),

                      'datao'=>$this->modulpenduduk->datalengkapodptanggal(),
                      'dataj'=>$this->modulpenduduk->datalengkapodpjtanggal(),
                      'datat'=>$this->modulpenduduk->datalengkapkerttanggal(),
                      'datar'=>$this->modulpenduduk->datalengkapkerrtanggal(),
                      'datag'=>$this->modulpenduduk->datalengkapgejalatanggal(),
                      'datas'=>$this->modulpenduduk->datalengkapsehattanggal(),
                      //'datasemua'=>$this->modulpenduduk->datalengkapscoreharian(),

                      //'dataku'=>$this->kuisoner->getdataid($id),

                      );

        
        $this->load->view('part/content', $dataku);
    }   
}
public function cekdatadouble(){
		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
				$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'datadouble',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'datad'=>$this->modulpenduduk->datadouble(),
					  //'datasemua'=>$this->modulpenduduk->datalengkapscoreharian(),

					  //'dataku'=>$this->kuisoner->getdataid($id),

					  );

		
		$this->load->view('part/content', $dataku);
	}	
}
public function customsearch(){
        if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
                $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'custom',

                        //'postku'=> $this->tampilan->postku(),

                        // 'rows'=> $this->rows->sliderku(),

                        // 'logo'=>$this->inti->logo(),

                      //'datad'=>$this->modulpenduduk->datadouble(),
                      //'datasemua'=>$this->modulpenduduk->datalengkapscoreharian(),

                      //'dataku'=>$this->kuisoner->getdataid($id),

                      );

        
        $this->load->view('part/content', $dataku);
    }   
}
public function detailpenduduk($nik=null){
		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
			$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'detailpenduduk',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),

					  'datapenduduk'=>$this->modulpenduduk->datadetailpenduduk($nik),
					  'datascore'=>$this->modulpenduduk->datadetailpendudukscore($nik),
					  );
			// if($this->input->post('nik') != NULL ){
			// 		$user=$this->input->post('nik');
			// 		$cek=$this->modulpenduduk->cekdata($nik);
			// 		redirect(base_url('admin/detailpenduduk/').$user);

			// }
		
		$this->load->view('part/admin/include', $dataku);
	}
}

public function cekdatatanggal($nik) {
		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
			$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'datakuisoner',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),
					  	'datapenduduk'=>$this->modulpenduduk->datadetailpenduduk($nik),
					  'cekdata'=>$this->modulpenduduk->cekdata($nik),
					  );
			// if($this->input->post('nik') != NULL ){
			// 		$user=$this->input->post('nik');
			// 		$cek=$this->modulpenduduk->cekdata($nik);
			// 		redirect(base_url('admin/detailpenduduk/').$user);

			// }
		
		$this->load->view('part/admin/include', $dataku);
	}	
}
public function gantiscore($nik) {
		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
			$ganti=$this->kuisoner->gantiscore($nik);
			redirect(base_url('admin'));
	}	
}
public function deletedata($nik) {
		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
			$deletekuisoner=$this->kuisoner->deletekuisoner($nik);
			$deletependuduk=$this->modulpenduduk->deletependuduk($nik);
			redirect(base_url('admin'));
	}	
}
public function aplikasiku() {
		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
			$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'aplikasi',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),
					  // 	'datapenduduk'=>$this->modulpenduduk->datadetailpenduduk($nik),
					  // 'cekdata'=>$this->modulpenduduk->cekdata($nik),
					  );
			// if($this->input->post('nik') != NULL ){
			// 		$user=$this->input->post('nik');
			// 		$cek=$this->modulpenduduk->cekdata($nik);
			// 		redirect(base_url('admin/detailpenduduk/').$user);

			// }
		
		$this->load->view('part/content', $dataku);
	}	
}
public function aplikasilist() {
		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
			$dataku = array(	'title' => 'Welcome to MyBlog' ,

					  	'isi'=>'listaplikasi',

					  	//'postku'=> $this->tampilan->postku(),

					  	// 'rows'=> $this->rows->sliderku(),

					  	// 'logo'=>$this->inti->logo(),
					  // 	'datapenduduk'=>$this->modulpenduduk->datadetailpenduduk($nik),
					  'data'=>$this->modulpenduduk->dataaplikasi(),
					  );
			// if($this->input->post('nik') != NULL ){
			// 		$user=$this->input->post('nik');
			// 		$cek=$this->modulpenduduk->cekdata($nik);
			// 		redirect(base_url('admin/detailpenduduk/').$user);

			// }
		
		$this->load->view('part/content', $dataku);
	}	
}
    public function upload()

    {
    	    		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] = realpath('excel');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('admin/aplikasiku');

        } else {

            $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel5();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();

            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                            	   // $this->time=$row['A'];
                                //     $this->score=$row['B'];
                                //     $this->informasi=$row['C'];
                                //     $this->nomorkk=$row['D'];
                                //     $this->nomorhp=$row['E'];
                                //     $this->nama=$row['F'];
                                //     $this->umur=$row['G'];
                                //     $this->alamat=$row['H'];
                                //     $this->rt=$row['I'];
                                //     $this->pendidikan=$row['J'];
                                //     $this->skorpendidikan=$row['K'];
                                //     $this->pekerjaan=$row['L'];
                                //     $this->skorpekerjaan=$row['M'];
                                //     $this->penghasilan=$row['N'];
                                //     $this->skorpenghasilan=$row['O'];
                                //     $this->jenispendapatan=$row['P'];
                                //     $this->skorjenispendapatan=$row['Q'];
                                //     $this->jumlahtanggungan=$row['R'];
                                //     $this->skortanggungan=$row['S'];
                                //     $this->tabungan=$row['T'];
                                //     $this->saldo=$row['U'];
                                //     $this->skorsaldo=$row['V'];
                                //     $this->jaminan=$row['W'];
                                //     $this->jenisjaminan=$row['X'];
                                //     $this->skorjaminan=$row['Y'];
                                //     $this->statusrumah=$row['Z'];
                                //     $this->skorrumah=$row['AA'];
                                //     $this->motor=$row['AB'];
                                //     $this->skormotor=$row['AC'];
                                //     $this->prabotanrumah=$row['AD'];
                                //     $this->skorprabotan=$row['AE'];
                                //     $this->peralatanelektronik=$row['AF'];
                                //     $this->skorelektronik=$row['AG'];
                                //     $this->emas=$row['AH'];
                                //     $this->skoremas=$row['AI'];
                                //     $this->hp=$row['AJ'];
                                //     $this->skorhp=$row['AK'];
                                //     $this->hewan=$row['AL'];
                                //     $this->ternak=$row['AM'];
                                //     $this->makan=$row['AN'];
                                //     $this->skormakan= $row['AO'];
                                //     $this->rokok= $row['AP'];
                                //     $this->skorrokok=$row['AQ'];
                                //     $this->bayi=$row['AR'];
                                //     $this->skorbayi=$row['AS'];
                                //     $this->hamil=$row['AT'];
                                //     $this->skorhamil=$row['AU'];
                                //     $this->lansia=$row['AV'];
                                //     $this->skorlansia=$row['AW'];
                                //     $this->difabel=$row['AX'];
                                //     $this->skordifabel=$row['AY'];
                                //     $this->email=$row['AZ'];
                                //     $this->total=$row['BA'];
                                array_push($data, array(
                                    'time' => $row['A'],
                                    'score'      => $row['B'],
                                    'informasi'      => $row['C'],
                                    'nomorkk'      => $row['D'],
                                    'nomorhp'      => $row['E'],
                                    'nama'      => $row['F'],
                                    'umur'      => $row['G'],
                                    'alamat'      => $row['H'],
                                    'rt'      => $row['I'],
                                    'pendidikan'      => $row['J'],
                                    'skorpendidikan'      => $row['K'],
                                    'pekerjaan'      => $row['L'],
                                    'skorpekerjaan'      => $row['M'],
                                    'penghasilan'      => $row['N'],
                                    'skorpenghasilan'      => $row['O'],
                                    'jenispendapatan'      => $row['P'],
                                    'skorjenispendapatan'      => $row['Q'],
                                    'jumlahtanggungan'      => $row['R'],
                                    'skortanggungan'      => $row['S'],
                                    'tabungan'      => $row['T'],
                                    'saldo'      => $row['U'],
                                    'skorsaldo'      => $row['V'],
                                    'jaminan'      => $row['W'],
                                    'jenisjaminan'      => $row['X'],
                                    'skorjaminan'      => $row['Y'],
                                    'statusrumah'      => $row['Z'],
                                    'skorrumah' => $row['AA'],
                                    'motor'      => $row['AB'],
                                    'skormotor'      => $row['AC'],
                                    'prabotanrumah'      => $row['AD'],
                                    'skorprabotan'      => $row['AE'],
                                    'peralatanelektronik'      => $row['AF'],
                                    'skorelektronik'      => $row['AG'],
                                    'emas'      => $row['AH'],
                                    'skoremas'      => $row['AI'],
                                    'hp'      => $row['AJ'],
                                    'skorhp'      => $row['AK'],
                                    'hewan'      => $row['AL'],
                                    'ternak'      => $row['AM'],
                                    'makan'      => $row['AN'],
                                    'skormakan'      => $row['AO'],
                                    'rokok'      => $row['AP'],
                                    'skorrokok'      => $row['AQ'],
                                    'bayi'      => $row['AR'],
                                    'skorbayi'      => $row['AS'],
                                    'hamil'      => $row['AT'],
                                    'skorhamil'      => $row['AU'],
                                    'lansia'      => $row['AV'],
                                    'skorlansia'      => $row['AW'],
                                    'difabel'      => $row['AX'],
                                    'skordifabel'      => $row['AY'],
                                    'email'      => $row['AZ'],
                                    'total'      => $row['BA'],

                                ));
                    // $this->db->select ('* ');
                    // $this->db->from ('demo');
                    // $this->db->where('nomorkk=', $this->nomorkk=$row['D']);
                    // $query = $this->db->get()->row();
                    // if (!empty($query)){
                    //     $this->db->update('demo',$this);
                    // }
                    //     else{
                    //         $this->db->insert_batch('demo',$data);
                    //     }
        			     
                    }
                    
                $numrow++;
            }
            $this->db->empty_table('demo');
            $this->db->insert_batch('demo', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('admin/aplikasilist');

        }
    }
}
public function deletedemo($nomorkk=null){
		if($this->session->userdata('masuk') != 'true'){
            redirect('login/index');
        } else {
			$deletekuisoner=$this->modulpenduduk->deletedemo($nomorkk);
			redirect(base_url('admin/aplikasilist'));
	}	
}

}
