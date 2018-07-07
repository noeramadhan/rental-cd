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
    
    public function update($username,$data){
    	if(isset($username) && isset($data)){
    		return $this->db->where('username',$username)->update($this->table,$data);
    	}
    	return "ERROR";
    }
    
    public function delete($username){
    	if(isset($username)){
    		return $this->db->where('username',$username)->delete($this->table);
    	}
    	return "ERROR";
    }
    
    public function login($username,$password){
        if(isset($username)){
            if(isset($password)){
                $data = $this->db->where('username',$username)->get($this->table)->result();
                if($data != NULL){
                    if($data[0]->password==$password){
                        return "GOOD";
                    }
                    return "Wrong Password";
                }
                return "Wrong Username";
            }
            return "Password Not Set";
        }
        return "Username Not Set";
    }
}