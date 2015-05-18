<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'libraries/ci_controller_lib.php';

class login extends ci_controller_lib{
    //put your code here
    function __construct()
    {
        parent::__construct();
        //$this->load->model('m_login');
    }
    public function index(){
        
        $data['page_active'] = 'no';
        $this->load->view('admin/login_view', $data);
    }
    public function logout(){
        
        $data['page_active'] = 'no';
        $this->load->view('admin/login_view', $data);
    }
    public function dashboard(){
        
        $data['page'] = 1;
        $this->load->view('admin/dashboard', $data);
    }
    public function patient(){
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where('active', 1);
        $this->db->order_by('udate', 'desc');
        $query = $this -> db -> get();
        $result = $query->result();
        
        $data['patient_data'] = $result;
        $data['page'] = 2;
        $this->load->view('admin/patient', $data);
    }
    public function add_patient($patient_id = ''){
        if($patient_id == ''){
            $data['header'] = 'เพิ่มรายชื่อผู้ป่วย';
            $data['title'] = 'ฟอร์มการเพิ่มรายชื่อผู้ป่วย';
        }else{
            $data['header'] = 'แก้ไขรายชื่อผู้ป่วย';
            $data['title'] = 'ฟอร์มการแก้ไขรายชื่อผู้ป่วย';
            
            $this->db->select('*');
            $this->db->from('patient');
            $this->db->where('id', $patient_id);
            $this->db->where('active', 1);
            $this->db->order_by('udate', 'desc');
            $query = $this -> db -> get();
            $result = $query->result_array();
            
            $data['edit_patient'] = $result;
        }
        $data['page'] = 2;
        $this->load->view('admin/form_patient', $data);
    }
    public function save_patient(){
        $data = array(
            "patient_number" => $this->input->post('patient_number'),
            "patient_name" => $this->input->post('patient_name'),
            "identification" => $this->input->post('identification'),
            "birthday" => $this->input->post('birthday'),
            "age" => $this->input->post('age'),
            "blood_group" => $this->input->post('blood_group'),
            "ethnicity" => $this->input->post('ethnicity'),
            "nationality" => $this->input->post('nationality'),
            "religion" => $this->input->post('religion'),
            "status" => $this->input->post('status'),
            "career" => $this->input->post('career'),
            "medical_history_food" => $this->input->post('medical_history_food'),
            "congenital_disease" => $this->input->post('congenital_disease'),
            "address" => $this->input->post('address'),
            "patient_tel" => $this->input->post('patient_tel'),
            "emergency_contect" => $this->input->post('emergency_contect'),
            "relationships_with_patients" => $this->input->post('relationships_with_patients'),
            "relationships_tel" => $this->input->post('relationships_tel'),
            "cdate" => date("Y-m-d H:i:s"),
            "udate" => date("Y-m-d H:i:s")
            
        );
        
        $this->session->set_flashdata('result', 'success');
        if($this->input->post('patient_id')){
            $this->db->where('id', $this->input->post('patient_id'));
            $this->db->update('patient', $data); 
            
            redirect('admin/login/add_patient/'.$this->input->post('patient_id'), 'refresh');
        }else{
            $this->db->insert('patient', $data);
            
            redirect('admin/login/add_patient', 'refresh');
        }
        
        //$this->session->set_flashdata('result', 'success');
        
    }
    public function del_patient($patient_id){
        $this->db->where('id', $patient_id);
        $this->db->delete('patient'); 
        
        $this->session->set_flashdata('result', 'success');
        redirect('admin/login/patient', 'refresh');
    }
    public function medical_records($patient_id){
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where('id', $patient_id);
        $this->db->where('active', 1);
        $this->db->order_by('udate', 'desc');
        $query = $this -> db -> get();
        $result = $query->result_array();
        
        $data['patient_data'] = $result;
        
        $data['patient_id'] = $patient_id;
        $data['page'] = 2;
        $this->load->view('admin/medical_records', $data);
    }
}
