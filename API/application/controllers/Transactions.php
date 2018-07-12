<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Transactions extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_transaction'));
    }

    public function transaction_put(){
    	$data = array(
            'id_customer' => $this->put('customer'),
            'tanggal_pinjam' => $this->put('tangal_pinjam'),
            'tanggal_kembali' => $this->put('tanggal_kembali'),
            'status' => $this->put('status')
        );
    	$transaction = $this->m_transaction->create($data);
    	$this->response($transaction,200);
    }

    public function transaction_get(){
    	$id = $this->get('id');
    	$transaction = $this->m_transaction->read($id);
    	$this->response($transaction,200);
    }

    public function transaction_post(){
    	$id = $this->post('id');
        $data = array(
            'id_customer' => $this->post('customer'),
            'tanggal_pinjam' => $this->post('tangal_pinjam'),
            'tanggal_kembali' => $this->post('tanggal_kembali'),
            'status' => $this->post('status')
        );
    	$transaction = $this->m_transaction->update($id,$data);
    	$this->response($data, 200);
    }

    public function transaction_delete(){
    	$id = $this->delete('id');
    	$transaction = $this->m_transaction->delete($id);
    	$this->response($transaction, 200);
    }

    public function customer_get(){
        $username = $this->get('username');
        $transaction = $this->m_transaction->search($username);
        $this->response($transaction, 200);
    }
    
    public function kembali_post(){
        $id = $this->post('id');
        $data = array(
            'id' => $id,
            'id_customer' => $this->post('id_customer'),
            'status' => $this->post('status')
        );
        $transaction = $this->m_transaction->kembali($id,$data);
        $this->respone($transaction,200);
    }
    
}