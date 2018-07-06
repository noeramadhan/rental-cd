<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Customer extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        
        $this->load->model(array('m_customers'));
    }

    // create customer
    public function customer_put(){
    	$data = array();
    	$customer = $this->m_customer->create($data);
    	$this->response($customer,200);
    }

    // view all or one customers
    public function customer_get(){
    	$id = $this->get('id');
    	$customer = $this->m_customer->read($id);
    	$this->response($customer,200);
    }

    // update customer
    public function customer_post(){
    	$id = $this->post('id');
    	$data = array();
    	$customer = $this->m_customer->update($id,$data);
    	$this->response($data, 200);
    }

    // delete all or one customer
    public function customer_delete(){
    	$id = $this->delete('id');
    	$customer = $this->m_customer->delete($id);
    	$this->response($customer, 200);
    }
}