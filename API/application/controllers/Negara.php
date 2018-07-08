<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Negara extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_negara'));
    }

    public function negara_put(){}
    public function negara_read(){}
    public function negara_update(){}
    public function negara_delete(){}
    
}