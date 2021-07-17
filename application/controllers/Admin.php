<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {

        function __construct(){

        parent::__construct();

        $this->load->model('penduduk_model');
        $this->load->model('kuisoner_model');

        $this->load->helper('url');

        }
        public function index(){
            $data = array(  

                            'isi'=>'admin/home',
                            'title'=>'Admin PTC',
                            'sehat'=>$this->kuisoner_model->list_admin('sehat'),
                            'ringan'=>$this->kuisoner_model->list_admin('ringan'),
                            'sedang'=>$this->kuisoner_model->list_admin('sedang'),
                            'berat'=>$this->kuisoner_model->list_admin('berat'),
                            'semua'=>$this->kuisoner_model->jumlah()

                          );

            

            $this->load->view('admin/part/include', $data);
        }
        public function ringan(){

        }
        public function sedang(){

        }
        public function berat(){

        }

        public function detailpenduduk($nik=null){
            $dataku = array(    
                                'title' => 'Welcome to MyBlog' ,
                                'isi'=>'admin/detailpenduduk',
                                'datapenduduk'=>$this->penduduk_model->datadetailpenduduk($nik),
                                'datascore'=>$this->penduduk_model->datadetailpendudukscore($nik),
                      );
        
        $this->load->view('admin/part/include', $dataku);

    }

        public function cekdatatanggal($nik) {
            $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/datakuisoner',

                        //'postku'=> $this->tampilan->postku(),

                        // 'rows'=> $this->rows->sliderku(),

                        // 'logo'=>$this->inti->logo(),
                        'datapenduduk'=>$this->penduduk_model->datadetailpenduduk($nik),
                        'cekdata'=>$this->penduduk_model->cekdata($nik),
                      );
            // if($this->input->post('nik') != NULL ){
            //      $user=$this->input->post('nik');
            //      $cek=$this->modulpenduduk->cekdata($nik);
            //      redirect(base_url('admin/detailpenduduk/').$user);

            // }
        
        $this->load->view('admin/part/include', $dataku);
    }

    public function printdetail($nik){
                $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/printdetail',

                    'datapenduduk'=>$this->penduduk_model->datadetailpenduduk($nik),
                    'cekdata'=>$this->penduduk_model->cekdata($nik),

                      );

        
        $this->load->view('admin/part/content', $dataku);
    }   

}