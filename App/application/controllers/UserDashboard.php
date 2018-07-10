<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDashboard extends CI_Controller {

	public function transaksi(){
		$this->load->view('user-dashboard/transaksi');
	}
	public function peminjaman(){
		$this->load->view('user-dashboard/peminjaman');
	}
	public function pengembalian(){
		$this->load->view('user-dashboard/pengembalian');
	}
	public function setting(){
		$this->load->view('user-dashboard/setting');
	}
	public function detailTransaksi(){
		$this->load->view('user-dashboard/detail-transaksi');
	}
}