<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_transaction extends CI_Model{
    private $transaction = "transaksi";
    private $transaction_cd = "transaksi_cd";
    private $peminjaman = "peminjaman";
    private $pengembalian = "pengembalian";
    
    public function create($data){
    	if(isset($data)){
    		return $this->db->insert($this->transaction,$data);
    	}
    	return "ERROR";
    }
    
    public function read($id){
    	if(isset($id)){
    		$this->db->where('id',$id)->get($this->transaction);
    	}else{
    		$data = $this->db->get($this->transaction);
    	}
    	return $data->result();
    }

    public function update($id,$data){
    	if(isset($id) && isset($data)){
    		return $this->db->update($this->transaction,$data);
    	}
    	return "ERROR";
    }

    public function delete($id){
    	if(isset($id)){
    		return $this->db->where('id',$id)->delete($this->transaction);
    	}else{
    		return $this->db->delete($this->transaction);
    	}
    	return "ERROR";
    }

    public function search($username){}

    public function peminjaman_create($data){}
    public function peminjaman_read($id){}
    public function peminjaman_update($id,$data){}
    public function peminjaman_delete($id){}

    public function pengembalian_create($data){}
    public function pengembalian read($id){}
    public function pengembalian_update($id,$data){}
    public function pengembalian_delete($id){}
}