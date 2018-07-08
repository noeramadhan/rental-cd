<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Pemain extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(array('m_pemain'));
    }

    public function pemain_put(){}
    public function pemain_read(){}
    public function pemain_update(){}
    public function pemain_delete(){}
        
}