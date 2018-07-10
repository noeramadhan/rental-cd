<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Negara extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_negara'));
    }

    public function negara_put(){
    	$id = $this->put('id');
    	$name = $this->put('name');
    	$negara = $this->m_negara->create(array($id,$name));
    	$this->response($negara,200);
    }

    public function negara_get(){
    	$id = $this->get('id');
    	$negara = $this->m_negara->read($id);
    	$this->response($negara,200);
    }

    public function negara_post(){
    	$id = $this->post('id');
    	$name = $this->post('name');
    	$negara = $this->m_negara->update($id,array($id,$name));
    	$this->response($negara,200);
    }

    public function negara_delete(){
    	$id = $this->delete('id');
    	$negara = $this->m_negara->delete($id);
    	$this->response($negara,200);
    }
    
}