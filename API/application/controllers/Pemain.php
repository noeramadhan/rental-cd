<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Pemain extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_pemain'));
    }

    public function pemain_put(){
    	$id = $this->put('id');
    	$name = $this->put('name');
    	$pemain = $this->m_pemain->create(array($id,$name));
    	$this->response($pemain,200);
    }

    public function pemain_get(){
    	$id = $this->get('id');
    	$pemain = $this->m_pemain->read($id);
    	$this->response($pemain,200);
    }

    public function pemain_post(){
    	$id = $this->post('id');
    	$name = $this->post('name');
    	$pemain = $this->m_pemain->update($id,array($id,$name));
    	$this->response($pemain,200);
    }

    public function pemain_delete(){
    	$id = $this->delete('id');
    	$pemain = $this->m_pemain->delete($id);
    	$this->response($pemain,200);
    }

    public function attatch_put(){
        $id = $this->put('id');
        $cd = $this->put('cd');
        $pemain = $this->m_pemain->attatch($id,$cd);
        $this->response($pemain,200);
    }

    public function detatch_delete(){
        $id = $this->delete('id');
        $cd = $this->delete('cd');
        $pemain = $this->m_pemain->detatch($id,$cd);
        $this->response($pemain,200);
    }
        
}