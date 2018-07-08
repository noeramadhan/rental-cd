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
            $data = $this->db->where('id',$id)->get($this->table);
        }else{
            $data = $this->db->get($this->table);
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
        
    }

    public function negara_create(){}
    public function negara_read(){}
    public function negara_update(){}
    public function negara_delete(){}

    public function genre_create(){}
    public function genre_read(){}
    public function genre_update(){}
    public function genre_delete(){}

    public function pemain_create(){}
    public function pemain_read(){}
    public function pemain_update(){}
    public function pemain_delete(){}
    public function pemain_attatch(){}
    public function pemain_detatch(){}
}