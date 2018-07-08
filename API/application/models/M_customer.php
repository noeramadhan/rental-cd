<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_customer extends CI_Model{
    private $table = "customer";
    
    public function create($data){
    	if(isset($data)){
    		return $this->db->insert($this->table,$data);
    	}
    	return "ERROR";
    }
    public function read($username){
    	if(isset($username)){
    		$this->db->where('username',$username)->get($this->table);
    	}else{
    		$data = $this->db->get($this->table);
    	}
    	return $data->result();
    }
    public function update($username,$data){
    	if(isset($username) && isset($data)){
    		return $this->db->update($this->table,$data);
    	}
    	return "ERROR";
    }
    public function delete($username){
    	if(isset($username)){
    		return $this->db->where('username',$username)->delete($this->table);
    	}else{
    		return $this->db->delete($this->table);
    	}
    	return "ERROR";
    }
    public function login($username,$password){
        
    }
}