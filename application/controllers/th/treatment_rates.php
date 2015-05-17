<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'libraries/ci_controller_lib.php';

class treatment_rates extends CI_Controller {
    //put your code here
    function __construct()
    {
        parent::__construct();
        
    }
    public function index(){
        
        $data['page_active'] = "4";
        $this->load->view('th/treatment_rates', $data);
    }
}
