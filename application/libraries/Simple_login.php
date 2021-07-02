<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        // load data model user
        $this->CI->load->model('user_model');
	}

	
	public function login($username,$password)
	{
		$check = $this->CI->user_model->login($username, $password);
		// jika ada data user, maka create session login
		if($check) {
		

			$id_user		= $check->id_user;
			$akses_level	= $check->level;
			//create session
			$this->CI->session->set_userdata('id_user', $id_user);
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('akses_level', $akses_level);
			if ($check->level=='admin'){
				redirect(base_url('admin/dashboard'),'refresh');
			}
			else
			{
				redirect(base_url('home'),'refresh');
			}
			// redirect ke halaman admin
		}
		else
		{
			//kalau tidak ada, maka suruh login lagi

			$this->CI->session->set_flashdata('warning', 'No Handphone atau Password salah');	
			redirect(base_url('login'), 'refresh');
		}
	}

	public function cek_login()
	{
		// memeriksa apakah session sudah atau belum
		if($this->CI->session->userdata('username') == "" ) {
			$this->CI->session->set_flashdata('warning', 'Anda belum login');
			
			redirect(base_url('login'), 'refresh');
		} 
		// else if($this->CI->session->userdata('akses_level') != "Admin" ) {

		// 	$this->CI->session->set_flashdata('warning', 'Anda Bukan Admin');	
		// 	redirect(base_url('login'), 'refresh');
		// }
	}

	//fungsi logout
	public function logout()
	{
		
		// membuang semua session yang telah diset pada saat login
			$this->CI->session->unset_userdata('id_user');
			$this->CI->session->unset_userdata('username');
			$this->CI->session->unset_userdata('akses_level');
		// setelah session dibuang, maka redirect ke login

		$this->CI->session->set_flashdata('sukses', 'anda berhasil logout');	
		redirect(base_url('login'), 'refresh');
	}

	

}

