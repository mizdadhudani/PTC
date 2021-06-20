<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

		function __construct(){
		parent::__construct();
		$this->load->library('session');		
		$this->load->model('loginm');
		$this->load->helper('url');
		$this->load->helper('form');

		

	}
public function index() {
	$this->load->view('login');
}
public function login($id=null) {
	$user=$this->input->post('username');
	$pass=$this->input->post('password');

	$login = $this->loginm->login($user,$pass);

	if (!empty($login)) {
		$data=$login;
		$this->session->set_userdata('masuk','true');
		redirect(base_url('admin'));
	} else {

		echo "username salah";
	}
}
public function getdata($id=null){
	$oke=$this->loginm->getdata($id);
}
public function logout() {
$this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
}
}