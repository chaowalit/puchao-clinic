<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'libraries/ci_controller_lib.php';

class message extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        //$this->load->library('googlemaps');
    }
    
    public function index()
    {   
        
    }
	public function add_message(){
        $this->load->library('recaptcha');
        //Call to recaptcha to get the data validation set within the class. 
        $this->recaptcha->recaptcha_check_answer();

        if ($this->recaptcha->getIsValid()) {
            echo "yes";
        }else{
            echo "no";
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */