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
				redirect(base_url('admin'),'refresh');
			}
			elseif ($check->level=='sewon1') {
				redirect(base_url('sewon1'),'refresh');
			}
			elseif ($check->level=='sewon2') {
				// code...
			}
			elseif ($check->level=='shelter') {
				// code...
			}
			else
			{
				redirect(base_url(),'refresh');
			}
			// redirect ke halaman admin
		}
		else
		{
			//kalau tidak ada, maka suruh login lagi

			$this->CI->session->set_flashdata('warning', 'User atau Password salah');	
			redirect(base_url('login'), 'refresh');
		}
	}

	public function cek_login()
	{
		// memeriksa apakah session sudah atau belum
		if($this->CI->session->userdata('id_user') == "" and $this->CI->session->userdata('id_user')!='admin') {
			
			
			redirect(base_url('login'), 'refresh');
		} 
	}

	public function cek_login_user()
	{
		// memeriksa apakah session sudah atau belum
		if($this->CI->session->userdata('nomorhp') == "" ) {
			
			
			redirect(base_url(), 'refresh');
		} 
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
	public function logout_user()
	{
		
		// membuang semua session yang telah diset pada saat login
			$this->CI->session->unset_userdata('nomorhp');
	
		redirect(base_url(), 'refresh');
	}

	

}

