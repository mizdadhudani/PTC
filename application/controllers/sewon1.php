<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {

        function __construct(){

        parent::__construct();

        $this->load->model('penduduk_model');
        $this->load->model('kuisoner_model');
        $this->load->model('kesehatan_model');
        $this->load->model('kontak_model');
        $this->load->model('pemeriksaan_model');
        $this->load->model('wilayah_model');

        $this->load->helper('url');

        }
        public function index(){