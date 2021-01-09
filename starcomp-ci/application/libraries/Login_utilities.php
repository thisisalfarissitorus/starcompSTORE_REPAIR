<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_utilities
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        //load data model user
        $this->CI->load->model('Users_model');
	}
	// fungsi login
	public function login($username, $password)
	{
		$check = $this->CI->Users_model->login($username, $password); 
		//jika ada data user maka create session login
		if($check){
			$id_user	= $check->id_user;
			$username	= $check->username;
			$hak_akses = $check->hak_akses;
			// create session
			$this->CI->session->set_userdata('id_user', $id_user);
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('hak_akses', $hak_akses);
			//redirect ke halaman admin
			redirect(site_url('Dashboard'),'refresh');

			//kalau tidak ada data/ usernam/password salah
		}else{
			$this->CI->session->set_flashdata('warning', 'Username atau Password Anda Salah');
			redirect(site_url('login'),'refresh');
		}

	}
	// fungsi cek login
	public function cek_login()
	{
		//menerima apakah session sudah tersedi atau belum, jika belum alihkan k halaman login
		if ($this->CI->session->userdata('username')== "") {
			$this->CI->session->set_flashdata('warning', 'Anda Belum Login');
			redirect(site_url('login'),'refresh');
		}
	}
	public function logout()
	{
		//membuang smua session yang telah diset pada saat login
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('hak_akses');
		//setelah session dibuang, maka redirect ke halamn login
		$this->CI->session->set_flashdata('sukses', 'Anda Telah Logout');
		redirect(site_url('login'),'refresh');
	}

	

}

