<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cd extends CI_Controller {

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
	var $API ="";
	function __construct() {
		parent::__construct();
		$this->API = "http://localhost:8000/rental-cd/API/index.php/";
	}

	public function index(){
		$data['datacd'] = json_decode($this->curl->simple_get($this->API.'cds'));
		$data['title'] = "Data CD";
		$this->load->view('home',$data);
	}
	

	public function detail(){
		$id = 1;
		
		$cd = json_decode($this->curl->simple_get($this->API.'cds/'.$id));
		$data['detailcd'] = $cd[0];
		$data['title'] = "Detail CD";

		$this->load->view('detail',$data);

	}
	public function search(){
		$rawData = $mobile->searchData();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'Film tidak ditemukan!');		
		} else {
			$statusCode = 200;
		}
		$this->load->view('search');
		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'search') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}

		
	}
}
