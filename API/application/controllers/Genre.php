<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Genre extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_genre'));
    }

    public function genre_put(){
    	$id = $this->put('id');
    	$name = $this->put('name');
    	$genre = $this->m_genre->create(array($id,$name));
    	$this->response($genre,200);
    }

    public function genre_get(){
    	$id = $this->get('id');
    	$genre = $this->m_genre->read($id);
    	$this->response($genre,200);
    }

    public function genre_post(){
    	$id = $this->post('id');
    	$name = $this->post('name');
    	$genre = $this->m_genre->update($id,array($id,$name));
    	$this->response($genre,200);
    }

    public function genre_delete(){
    	$id = $this->delete('id');
    	$genre = $this->m_genre->delete($id);
    	$this->response($genre,200);
    }
    
}