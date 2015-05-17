<?php


class ci_controller_lib extends CI_Controller {
    //put your code here
    private $CI;
    //--------------------------------
    
    public $username;
    public $password;
    
    //-------------------------------
    
    public $controller;
    public $method;
    
    function __construct($id = null)
    {
        parent::__construct($id);
        $this->CI =& get_instance();
        //$this->CI->load->model('m_api');	
        //$this->__login();
        
        $this->getControllerAndMethod();
    }
    
    public function getControllerAndMethod(){
        $this->controller = $this->router->class;
        $this->method = $this->router->method;
    }
    
    public function __login()
    {
        $data_login = $this->session->userdata('data_account');
        if($data_login){
            
            $this->username = $data_login['username'];
            $this->password = $data_login['password'];
            
        }else{
//            $message = "No Data Profile Account Please contact the system administrator";
//            echo "<script type='text/javascript'>alert('$message');</script>";
//            $this->session->unset_userdata('data_account');
//            redirect('auth_login','refresh');
//            exit;
        }
    }
    
}
