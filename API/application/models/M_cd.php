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
    public function read($id,$keyword){
        if(isset($keyword)){
            if($keyword=='genre'){
                return $this->db->select('*')->from('cd')->join('genre','genre.id=cd.id')->join('negara','negara.id=cd.id')->where('genre.id',$id)->get()->result();
            }else if($keyword=='negara'){
                return $this->db->select('*')->from('cd')->join('genre','genre.id=cd.id')->join('negara','negara.id=cd.id')->where('negara.id',$id)->get()->result();
            }else if($keyword=='tahun'){
                return $this->db->select('*')->from('cd')->join('genre','genre.id=cd.id')->join('negara','negara.id=cd.id')->where('tahun',$id)->get()->result();
            }
        }else if(isset($id)){
            return $this->db->where('id',$id)->get($this->cd)->result();
        }
        return $this->db->get($this->cd)->result();
    }
    public function update($id,$data){
    	if(isset($id) && isset($data)){
    		return $this->db->update($this->cd,$data);
    	}
    	return "ERROR";
    }
    public function delete($id){
    	if(isset($id)){
    		return $this->db->where('id',$id)->delete($this->cd);
    	}else{
    		return $this->db->delete($this->cd);
    	}
    	return "ERROR";
    }
}