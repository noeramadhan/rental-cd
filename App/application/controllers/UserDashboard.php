<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDashboard extends CI_Controller {

	var $API="";

	public function __construct(){
		parent::__construct();
		$this->API = "http://localhost/rental-cd/Api/index.php/";
	}

	public function index(){
		redirect('userdashboard/transaksi');
	}

	public function login(){
		$this->load->view('user-dashboard/login');
	}

	public function transaksi(){
		$username = "smith";
		$user = json_decode($this->curl->simple_get($this->API.'customers/'.$username));
		$data['user'] = $user[0];
		$data['transaksi'] = json_decode($this->curl->simple_get($this->API.'transactions/customer/'.$username));
		$this->load->view('user-dashboard/transaksi',$data);
	}
	// public function peminjaman(){
	// 	$username = "smith";
	// 	$user = json_decode($this->curl->simple_get($this->API.'customers/'.$username));
	// 	$data['user'] = $user[0];
	// 	$this->load->view('user-dashboard/peminjaman',$data);
	// }
	// public function pengembalian(){
	// 	$username = "smith";
	// 	$user = json_decode($this->curl->simple_get($this->API.'customers/'.$username));
	// 	$data['user'] = $user[0];
	// 	$this->load->view('user-dashboard/pengembalian',$data);
	// }
	public function setting(){
		if (isset($_POST['submit'])) {
			$username = $this->input->post('username');
			$data = array(
				'username' => $username,
				'password' => $this->input->post('newpassword'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'photo' => "http://localhost/rental-cd/app/assets/tle/dist/img/photo1.png"
			);
			// $this->input->post('photo')
			$user =  $this->curl->simple_post($this->API.'customers/'.$username, $data); 
            if($user){
            	// var_dump($data);
            	// var_dump($user);
                // $this->session->set_flashdata('hasil','Tambah Data Berhasil');
            }else{
            	// var_dump($data);
            	// var_dump($user);
               // $this->session->set_flashdata('hasil','Tambah Data Gagal');
            }
			redirect('userdashboard/setting');
		}else{
			$username = "smith";
			$user = json_decode($this->curl->simple_get($this->API.'customers/'.$username));
			$data['user'] = $user[0];
			$this->load->view('user-dashboard/setting',$data);
		}
		
	}
	public function detailTransaksi(){
		$username = "smith";
		$user = json_decode($this->curl->simple_get($this->API.'customers/'.$username));
		$data['user'] = $user[0];
		$this->load->view('user-dashboard/detail-transaksi',$data);
	}

	public function kembalikan(){
		$id = $this->uri->segment(3);
		$data = array(
			'id' => $id,
			'id_customer' => "smith",
			'status' => 1
		);
		var_dump($data);
		$cd = json_decode($this->curl->simple_post($this->API.'transactions/kembali/',$data));
		var_dump($cd);
		redirect('userdashboard/transaksi');
	}
}
