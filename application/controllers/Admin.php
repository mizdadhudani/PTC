<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {

        function __construct(){

        parent::__construct();

        $this->load->model('penduduk_model');

        $this->load->helper('url');

        }
        public function index(){
            $data = array(  

                            'isi'=>'admin/home',
                            'title'=>'Admin PTC'

                          );

            

            $this->load->view('admin/part/include', $data);
        }
}