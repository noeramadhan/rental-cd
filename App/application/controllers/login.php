<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('/v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/admin"));

		}else{
			echo "Username dan password salah !";
		}
	}function edit_cd(){
		$this->load->view('admin/CD');	

	}
	function edit_user(){
		$this->load->view('admin/ubah_user');	
		
	}
	function edit_peminjaman(){
		$this->load->view('admin/ubah_peminjaman');	
		
	}
	function edit_customer(){
		$this->load->view('admin/customer.php');	
		
	}
	function edit_negara(){
		$this->load->view('admin/negara.php');	
		
	}
	function edit_pemain(){
		$this->load->view('admin/pemain.php');	
		
	}
	function edit_transaksi(){
		$this->load->view('admin/transaksi.php');	
		
	}
	function edit_genre(){
		$this->load->view('admin/genre.php');	
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}


}