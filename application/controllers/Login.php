<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()

	{
		parent::__construct();

	}
 	public function index()
  	{

    if ($this->session->userdata('id_user') == "") {
  	//validasi
  	$this->form_validation->set_rules('username', 'username', 'required',
  		array('required' => '%s harus diisi'));

  	$this->form_validation->set_rules('password', 'Password', 'required',
  		array('required' => '%s harus diisi'));

  	if($this->form_validation->run())
  	{
  		$username = $this->input->post('username', TRUE);
  		$password = $this->input->post('password', TRUE);
  		// proses ke simple login
  		$this->simple_login->login($username,$password);
  	}

  	//end validasi
    $data = array('title' => 'Login Admin',);
    $this->load->view('admin/login', $data, FALSE);
    } 
    else 
    {
      if ($this->session->userdata('akses_level') == "admin"){
      redirect(base_url('admin'));
      }
      elseif ($this->session->userdata('akses_level') == "sewon1") {
      redirect(base_url('sewon1'));
      }
      elseif ($this->session->userdata('akses_level') == "sewon2") {
        // code...
      }
      elseif ($this->session->userdata('akses_level') == "shelter") {
        // code...
      }
      else
      {
       redirect(base_url());
      }
    }
  }
  
}
