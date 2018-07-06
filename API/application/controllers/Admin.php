<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Admin extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        
        $this->load->model(array('m_admin'));
    }

    // create admin
    public function admin_put(){
    	$data = array();
    	$admin = $this->m_admin->create($data);
    	$this->response($admin,200);
    }

    // view all or one admins
    public function admin_get(){
    	$username = $this->get('username');
    	$admin = $this->m_admin->read($username);
    	$this->response($admin,200);
    }

    public function login_get(){
        echo "LOGIN";
    }

    // update admin
    public function admin_post(){
    	$id = $this->post('id');
    	$data = array();
    	$admin = $this->m_admin->update($id,$data);
    	$this->response($data, 200);
    }

    // delete all or one admin
    public function admin_delete(){
    	$id = $this->delete('id');
    	$admin = $this->m_admin->delete($id);
    	$this->response($admin, 200);
    }
}