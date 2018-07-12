<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{


	var $API ="";

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->API = "http://localhost/rental-cd/API/index.php/";
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
	}
	function edit_cd(){

		 if(isset($_POST['submit'])){
		  $id = $this->input->post('id');
          $data = array(
          		'id' => $id,
				'nama'      =>  $this->input->post('nama'),
				'genre'     =>  $this->input->post('genre'),
				'sutradara'      =>  $this->input->post('sutradara'),
				'produksi'      =>  $this->input->post('produksi'),
				'tanggal_rilis'      =>  $this->input->post('tanggal_rilis'),
				'tahun'      =>  $this->input->post('tahun'),
				'negara'      =>  $this->input->post('negara'),
				'durasi'      =>  $this->input->post('durasi'),
				'rating'      =>  $this->input->post('rating'),
				'sinopsis'      =>  $this->input->post('sinopsis'),
				'stok'      =>  $this->input->post('stok'),
				'status'     =>  $this->input->post('status')
			);
          	var_dump($data);
            $update =  $this->curl->simple_post($this->API.'cds', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            var_dump($update);
            if($update)
            {
                $this->session->set_flashdata('hasil','Ubah Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Ubah Data Gagal');
            }
         redirect('login/lihat_data');
        }else{
            $params = array('id'    =>  $this->uri->segment(3));
            $data['title'] = "Ubah Data";
            $produk = json_decode($this->curl->simple_get($this->API.'cds',$params));
            $data['datacd'] = $produk[0];
            $this->load->view('admin/CD',$data);
        }
    }
	
	function edit_user(){
		$this->load->view('admin/ubah_user');	

	}
	function tambah_cd(){
		if(isset($_POST['submit'])){
			$data = array(
				'nama'      =>  $this->input->post('nama'),
				'genre'     =>  $this->input->post('genre'),
				'sutradara'      =>  $this->input->post('sutradara'),
				'produksi'      =>  $this->input->post('produksi'),
				'tanggal_rilis'      =>  $this->input->post('tanggal_rilis'),
				'tahun'      =>  $this->input->post('tahun'),
				'negara'      =>  $this->input->post('negara'),
				'durasi'      =>  $this->input->post('durasi'),
				'rating'      =>  $this->input->post('rating'),
				'sinopsis'      =>  $this->input->post('sinopsis'),
				'stok'      =>  $this->input->post('stok'),
				'status'     =>  $this->input->post('status')
			);


			$insert =  $this->curl->simple_put($this->API.'cds', $data, array(CURLOPT_BUFFERSIZE => 10));
			            
			if($insert)
			{
				$this->session->set_flashdata('hasil','Tambah Data Berhasil');
			}else
			{
				$this->session->set_flashdata('hasil','Tambah Data Gagal');
			}
			 redirect('login/lihat_data');
		}else{
			$data['title'] = "Tambah Data";
			$this->load->view('admin/tambah_cd',$data);
		}	

	}function hapus_cd(){
		$id = $this->uri->segment(3);
		 if(empty($id)){
             redirect('login/lihat_data');
        }else{
        	var_dump($id);
            $delete =  $this->curl->simple_delete($this->API.'cds', array('id'=>$id)); 
            var_dump($delete);
            if($delete)
            {
                $this->session->set_flashdata('hasil','Hapus Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Hapus Data Gagal');
            }
          redirect('login/lihat_data');
        }

	}
	function tambah_user(){
		$this->load->view('admin/tambah_user');	

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
	function lihat_data(){
		$data['datacd'] = json_decode($this->curl->simple_get($this->API.'cds'));
		$data['datatrans'] = json_decode($this->curl->simple_get($this->API.'transactions'));
		$data['datacus'] = json_decode($this->curl->simple_get($this->API.'customers'));
	//	var_dump($data['datacus']);
		$data['title'] = "Data cd";
        //var_dump($data);
		 $this->load->view('admin/lihat_data.php',$data);	

	}
	



}