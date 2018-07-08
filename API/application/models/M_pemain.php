<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pemain extends CI_Model{
    private $table = "pemain";
    
    public function create($data){
    	if(isset($data)){
    		return $this->db->insert($this->table,$data);
    	}
    	return "ERROR";
    }

    public function read($id){
    	if(isset($id)){
    		$data = $this->db->where('id',$id)->get($this->table);
    	}else{
    		$data = $this->db->get($this->table);
    	}
    	return $data->result();
    }

    public function update($id,$data){
    	if(isset($id) && isset($data)){
    		return $this->db->where('id',$id)->update($this->table,$data);
    	}
    	return "ERROR";
    }

    public function delete($id){
    	if(isset($id)){
    		return $this->db->where('id',$id)->delete($this->table);
    	}
    	return "ERROR";
    }
    
    public function attatch($id,$cd){
        if(isset($id)){
            if(isset($cd)){
                return $this->db->insert($this->table,array($cd,$id));
            }
            return "CD Not Set";
        }
        return "Username Not Set";
    }
    public function detatch($id,$cd){
        if(isset($id)){
            if(isset($cd)){
                return $this->db->whrere('id_cd',$cd)->where('id_pemain',$id)->delete($this->table);
            }
            return "CD Not Set";
        }
        return "Username Not Set";
    }
}