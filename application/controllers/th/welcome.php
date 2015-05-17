<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'libraries/ci_controller_lib.php';

class welcome extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
    }
    
    public function index()
    {   
        $config['center'] = '13.646293, 100.578208';
        $config['zoom'] = 14;
        $config['map_height'] = '300px';
        $this->googlemaps->initialize($config);

        $marker = array();
        $marker['position'] = '13.646293, 100.578208';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        $data['page_active'] = '1';
        $this->load->view('th/welcome_message', $data);
    }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */