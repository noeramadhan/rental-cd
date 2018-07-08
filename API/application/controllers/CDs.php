<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class CDs extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_cd'));
    }

    public function cd_put(){
    	$data = array(
            'nama' => $this->put('nama'),
            'genre' => $this->put('genre'),
            'sutradara' => $this->put('sutradara'),
            'produksi' => $this->put('produksi'),
            'tanggal_rilis' => $this->put('tanggal_rilis'),
            'tahun' => $this->put('tahun'),
            'negara' => $this->put('negara'),
            'durasi' => $this->put('durasi'),
            'rating' => $this->put('rating'),
            'sinopsis' => $this->put('sinopsis'),
            'stok' => $this->put('stok'),
            'status' => $this->put('status')
        );
    	$cd = $this->m_cd->create($data);
    	$this->response($cd,200);
    }

    public function cd_get(){
        $id = $this->get('id');
    	$cd = $this->m_cd->read($id);
    	$this->response($cd,200);
    }

    public function cd_post(){
    	$id = $this->post('id');
        $data = array(
            'nama' => $this->post('nama'),
            'genre' => $this->post('genre'),
            'sutradara' => $this->post('sutradara'),
            'produksi' => $this->post('produksi'),
            'tanggal_rilis' => $this->post('tanggal_rilis'),
            'tahun' => $this->post('tahun'),
            'negara' => $this->post('negara'),
            'durasi' => $this->post('durasi'),
            'rating' => $this->post('rating'),
            'sinopsis' => $this->post('sinopsis'),
            'stok' => $this->post('stok'),
            'status' => $this->post('status')
        );
    	$cd = $this->m_cd->update($id,$data);
    	$this->response($data, 200);
    }

    public function cd_delete(){
    	$id = $this->delete('id');
    	$cd = $this->m_cd->delete($id);
    	$this->response($cd, 200);
    }
    
    public function search_get(){
        $key = $this->get('key');
        $val = $this->get('value');
        $cd = $this->m_cd->search($key,$val);
    }
}