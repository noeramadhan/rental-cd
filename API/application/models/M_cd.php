<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_cd extends CI_Model{
    private $cd = "cd";
    private $genre = "genre";
    private $negara = "negara";
    private $cd_pemain = "cd_pemain";
    private $pemain = "pemain";
    
    public function create($data){
    	if(isset($data)){
    		return $this->db->insert($this->cd,$data);
    	}
    	return "ERROR";
    }

    public function read($id){
        if(isset($id)){
            $data = $this->db->where('id',$id)->get($this->cd);
        }else{
            $data = $this->db->get($this->cd);
        }
        return $data->result();
    }

    public function update($id,$data){
    	if(isset($id) && isset($data)){
    		return $this->db->update($this->cd,$data);
    	}
    	return "ERROR";
    }

    public function delete($id){
        if(isset($id)){
            return $this->db->where('id',$id)->delete($this->table);
        }
        return "ERROR";
    }
    
    public function search($key,$val){
        if(isset($key)){
            if(isset($val)){
                return $this->db->where($key,$val)->get($this->table)->result();
            }
            return "Value Not Set";
        }
        return "Key Not Set";
    }
}