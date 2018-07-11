<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Pengembalian extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_pengembalian'));
    }
    
    public function pengembalian_put(){
        $data = array(
            'id_transaksi' => $this->put('transaksi'),
            'id_customer' => $this->put('customer'),
            'id_cd' => $this->put('cd'),
            'tanggal_kembali' => $this->put('tanggal_kembali')
        );
        $transaction = $this->m_transaction->pengembalian_create($data);
        $this->response($transaction, 200);
    }

    public function pengembalian_get(){
        $id = $this->get('id');
        $transaction = $this->m_transaction->pengembalian_read($id);
        $this->response($transaction, 200);
    }

    public function pengembalian_post(){
        $id = $this->post('id');
        $data = array(
            'id_transaksi' => $this->put('transaksi'),
            'id_customer' => $this->put('customer'),
            'id_cd' => $this->put('cd'),
            'tanggal_kembali' => $this->put('tanggal_kembali')
        );
        $transaction = $this->m_transaction->pengembalian_update($id,$data);
        $this->response($transaction, 200);
    }

    public function pengembalian_delete(){
        $id = $this->delete('id');
        $transaction = $this->m_transaction->pengembalian_delete($id);
        $this->response($transaction, 200);
    }
}