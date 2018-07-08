<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_transaction extends CI_Model{
    private $table = "transaksi";
    
    public function create($data){
    	if(isset($data)){
    		return $this->db->insert($this->table,$data);
    	}
    	return "ERROR";
    }
    public function read($id){
    	if(isset($id)){
    		$this->db->where('id',$id)->get($this->table);
    	}else{
    		$data = $this->db->get($this->table);
    	}
    	return $data->result();
    }
    public function update($id,$data){
    	if(isset($id) && isset($data)){
    		return $this->db->update($this->table,$data);
    	}
    	return "ERROR";
    }
    public function delete($id){
    	if(isset($id)){
    		return $this->db->where('id',$id)->delete($this->table);
    	}else{
    		return $this->db->delete($this->table);
    	}
    	return "ERROR";
    }
    public function search($username){

    }
    public function peminjaman_create($data){

    }
    public function peminjaman_read($id){

    }
    public function peminjaman_update($id,$data){

    }
    public function peminjaman_delete($id){

    }
    public function pengembalian_create($data){

    }
    public function pengembalian read($id){

    }
    public function pengembalian_update($id,$data){

    }
    public function pengembalian_delete($id){
        
    }
}