<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Transaction extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        
        $this->load->model(array('m_transaction'));
    }

    // create transaction
    public function transaction_put(){
    	$data = array();
    	$transaction = $this->m_transaction->create($data);
    	$this->response($transaction,200);
    }

    // view all or one transactions
    public function transaction_get(){
    	$id = $this->get('id');
    	$transaction = $this->m_transaction->read($id);
    	$this->response($transaction,200);
    }

    // update transaction
    public function transaction_post(){
    	$id = $this->post('id');
    	$data = array();
    	$transaction = $this->m_transaction->update($id,$data);
    	$this->response($data, 200);
    }

    // delete all or one transaction
    public function transaction_delete(){
    	$id = $this->delete('id');
    	$transaction = $this->m_transaction->delete($id);
    	$this->response($transaction, 200);
    }
}