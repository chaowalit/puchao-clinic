<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'libraries/ci_controller_lib.php';

class service extends CI_Controller {
    //put your code here
    public function index()
    {   
        $data['page_active'] = '2';
        $this->load->view('th/service', $data);
    }
}
