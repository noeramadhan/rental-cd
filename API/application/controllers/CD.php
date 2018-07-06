<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class CD extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        
        $this->load->model(array('m_cd'));
    }

    // create cd
    public function cd_put(){
    	$data = array();
    	$cd = $this->m_cd->create($data);
    	$this->response($cd,200);
    }

    // view all or one cds
    public function cd_get(){
    	$id = $this->get('id');
    	$cd = $this->m_cd->read($id);
    	$this->response($cd,200);
    }

    // update cd
    public function cd_post(){
    	$id = $this->post('id');
    	$data = array();
    	$cd = $this->m_cd->update($id,$data);
    	$this->response($data, 200);
    }

    // delete all or one cd
    public function cd_delete(){
    	$id = $this->delete('id');
    	$cd = $this->m_cd->delete($id);
    	$this->response($cd, 200);
    }
}