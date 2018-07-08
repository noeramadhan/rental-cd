<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Customer extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_customer'));
    }

    public function customer_put(){
    	$username = $this->put('username');
        $password = $this->put('password');
        $name = $this->put('name');
    	$customer = $this->m_customer->create(array($username, $password, $name));
    	$this->response($customer,200);
    }

    public function customer_get(){
    	$username = $this->get('username');
    	$customer = $this->m_customer->read($username);
    	$this->response($customer,200);
    }

    public function customer_post(){
    	$username = $this->post('username');
        $password = $this->post('password');
        $name = $this->post('name');
    	$customer = $this->m_customer->update($username,array($username,$password, $name));
    	$this->response($data, 200);
    }

    public function customer_delete(){
    	$username = $this->delete('username');
    	$customer = $this->m_customer->delete($username);
    	$this->response($customer, 200);
    }

    public function login_get(){
        $username = $this->get('username');
        $password = $this->get('password');
        $customer = $this->m_customer->login($username,$password);
        $this->response($customer,200);
    }
}