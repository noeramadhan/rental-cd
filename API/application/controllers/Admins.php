<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Admins extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_admin'));
    }

    public function admin_put(){
    	$username = $this->put('username');
        $password = $this->put('password');
        $name = $this->put('name');
    	$admin = $this->m_admin->create(array($username, $password, $name));
    	$this->response($admin,200);
    }

    public function admin_get(){
    	$username = $this->get('username');
    	$admin = $this->m_admin->read($username);
    	$this->response($admin,200);
    }

    public function admin_post(){
    	$username = $this->post('username');
        $password = $this->post('password');
        $name = $this->post('name');
    	$admin = $this->m_admin->update($username,array($username,$password, $name));
    	$this->response($data, 200);
    }

    public function admin_delete(){
    	$username = $this->delete('username');
    	$admin = $this->m_admin->delete($username);
    	$this->response($admin, 200);
    }
    
    public function login_get(){
        $username = $this->get('username');
        $password = $this->get('password');
        $admin = $this->m_admin->login($username,$password);
        $this->response($admin,200);
    }
}