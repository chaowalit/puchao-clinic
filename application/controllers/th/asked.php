<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'libraries/ci_controller_lib.php';

class asked extends CI_Controller {
    //put your code here
    public function index()
    {   
        $data['page_active'] = '5';
        $this->load->view('th/asked', $data);
    }
}
