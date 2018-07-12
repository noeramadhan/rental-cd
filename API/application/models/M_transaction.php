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
    		return $this->db->where('id',$id)->update($this->transaction,$data);
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

    public function search($username){
        if(isset($username)){
            return $this->db->where('id_customer',$username)->get($this->transaction)->result();
        }
        return "Username Not Set";
    }

    public function kembali($id,$status){
        // return $this->db->query("UPDATE 'transaksi' SET 'status' = $status WHERE 'id' = $id")->result_array();
        return $this->db->where('id',$id)->update($this->transaction,$data);
    }

    public function peminjaman_create($data){
        if(isset($data)){
            return $this->db->insert($this->peminjaman,$data);
        }
        return "ERROR";
    }
    public function peminjaman_read($id){
        if(isset($id)){
            $this->db->where('id',$id)->get($this->peminjaman);
        }else{
            $data = $this->db->get($this->peminjaman);
        }
        return $data->result();
    }
    public function peminjaman_update($id,$data){
        if(isset($id) && isset($data)){
            return $this->db->update($this->peminjaman,$data);
        }
        return "ERROR";
    }
    public function peminjaman_delete($id){
        if(isset($id)){
            return $this->db->where('id',$id)->delete($this->peminjaman);
        }else{
            return $this->db->delete($this->peminjaman);
        }
        return "ERROR";
    }

    public function pengembalian_create($data){
        if(isset($data)){
            return $this->db->insert($this->pengembalian,$data);
        }
        return "ERROR";
    }
    public function pengembalian_read($id){
        if(isset($id)){
            $this->db->where('id',$id)->get($this->pengembalian);
        }else{
            $data = $this->db->get($this->pengembalian);
        }
        return $data->result();
    }
    public function pengembalian_update($id,$data){
        if(isset($id) && isset($data)){
            return $this->db->update($this->pengembalian,$data);
        }
        return "ERROR";
    }
    public function pengembalian_delete($id){
        if(isset($id)){
            return $this->db->where('id',$id)->delete($this->pengembalian);
        }else{
            return $this->db->delete($this->pengembalian);
        }
        return "ERROR";
    }
}