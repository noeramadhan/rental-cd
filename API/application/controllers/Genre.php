<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Genre extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_genre'));
    }

    public function genre_put(){}
    public function genre_read(){}
    public function genre_update(){}
    public function genre_delete(){}
    
}