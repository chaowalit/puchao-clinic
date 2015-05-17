<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'libraries/ci_controller_lib.php';

class health_issues extends CI_Controller {
    //put your code here
    public function index()
    {   
        $data['page_active'] = '3';
        $this->load->view('th/health_issues', $data);
    }
}
