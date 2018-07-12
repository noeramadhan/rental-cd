<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Peminjaman extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_peminjaman'));
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

}