<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Transaction extends REST_Controller {

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
            'id_customer' => $this->put('customer'),
            'tanggal_pinjam' => $this->put('tangal_pinjam'),
            'tanggal_kembali' => $this->put('tanggal_kembali'),
            'status' => $this->put('status')
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

    public function peminjaman_put(){
        $data = array(
            'id_transaksi' => $this->put('transaksi'),
            'id_customer' => $this->put('customer'),
            'id_cd' => $this->put('cd'),
            'tanggal_pinjam' => $this->put('tanggal_pinjam')
        );
        $transaction = $this->m_transaction->peminjaman_create($data);
        $this->response($transaction, 200);
    }

    public function peminjaman_get(){
        $id = $this->get('id');
        $transaction = $this->m_transaction->peminjaman_read($id);
        $this->response($transaction, 200);
    }

    public function peminjaman_post(){
        $id = $this->post('id');
        $data = array(
            'id_transaksi' => $this->put('transaksi'),
            'id_customer' => $this->put('customer'),
            'id_cd' => $this->put('cd'),
            'tanggal_pinjam' => $this->put('tanggal_pinjam')
        );
        $transaction = $this->m_transaction->peminjaman_update($id,$data);
        $this->response($transaction, 200);
    }

    public function peminjaman_delete(){
        $id = $this->delete('id');
        $transaction = $this->m_transaction->peminjaman_delete($id);
        $this->response($transaction, 200);
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