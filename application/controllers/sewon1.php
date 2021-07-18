<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Sewon1 extends CI_Controller {

        function __construct(){

        parent::__construct();

        $this->load->model('penduduk_model');
        $this->load->model('kuisoner_model');
        $this->load->model('kesehatan_model');
        $this->load->model('kontak_model');
        $this->load->model('pemeriksaan_model');
        $this->load->model('wilayah_model');
        $this->load->model('puskesmas_model');

        $this->load->helper('url');

        }
        public function index(){
                $data = array(  

                            'isi'=>'sewon1/home',
                            'title'=>'Admin PUSKESMAS SEWON 1',
                            'sehat'=>$this->puskesmas_model->list_sewon1('sehat'),
                            'ringan'=>$this->puskesmas_model->list_sewon1('ringan'),
                            'sedang'=>$this->puskesmas_model->list_sewon1('sedang'),
                            'berat'=>$this->puskesmas_model->list_sewon1('berat')
                            
                          );
                $this->load->view('sewon1/part/include', $data);
        }

}