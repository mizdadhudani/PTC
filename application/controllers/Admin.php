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
}