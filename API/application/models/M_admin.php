<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model{
    private $table = "admin";
    
    public function create($data){
    	if(isset($data)){
    		return $this->db->insert($this->table,$data);
    	}
    	return "ERROR";
    }
    public function read($username){
    	if(isset($username)){
    		$data = $this->db->where('username',$username)->get($this->table);
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
}