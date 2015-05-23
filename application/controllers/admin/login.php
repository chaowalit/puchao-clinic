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
        //---- data history medical -----//
        $this->db->select('*');
        $this->db->from('medical_records');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('active', 1);
        $this->db->order_by('date_medical_records', 'desc');

        $query = $this -> db -> get();
        $result = $query->result_array();
        
        if(is_array($result)){
            $data['medical_records_data'] = $result;
        }else{
            $data['medical_records_data'] = array();
        }
        
        //---- end data history medical -----//

        $data['patient_id'] = $patient_id;
        $data['page'] = 2;
        $this->load->view('admin/medical_records', $data);
    }
    public function save_medical_records(){
        $temp = $this->input->post('service_use');
        $service_use = "";
        if($temp){
            foreach($temp as $key => $val){
                $service_use = $service_use.$val.',';
            }
        }
        $data = array(
            "patient_id" => $this->input->post('patient_id'),
            "date_medical_records" => date("Y-m-d H:i:s"),
            "symptom_main" => $this->input->post('symptom_main'),
            "joint_symptoms" => $this->input->post('joint_symptoms'),
            "tongue" => $this->input->post('tongue'),
            "pulse" => $this->input->post('pulse'),
            "diagnose" => $this->input->post('diagnose'),
            "treatment_principles" => $this->input->post('treatment_principles'),
            "blood_pressure" => $this->input->post('blood_pressure'),
            "pulse_beats" => $this->input->post('pulse_beats'),
            "weight" => $this->input->post('weight'),
            "height" => $this->input->post('height'),
            "pain_level" => $this->input->post('pain_level'),
            "cramp_level" => $this->input->post('cramp_level'),
            "motion_level" => $this->input->post('motion_level'),
            "service_use" => $service_use,
            "acupuncture_points" => $this->input->post('acupuncture_points'),
            
            "the_next_appointments" => ($this->input->post('the_next_appointments'))? 
                date("Y-m-d H:i:s", strtotime($this->input->post('the_next_appointments').' '.
                $this->input->post('time_1').':'.$this->input->post('time_2').':'.$this->input->post('time_3') )): "",

            "doctors_who_examine" => $this->input->post('doctors_who_examine'),
            "cdate" => date("Y-m-d H:i:s"),
            "udate" => date("Y-m-d H:i:s")
        );
        $this->db->insert('medical_records', $data);
        
        redirect('admin/login/medical_records/'.$this->input->post('patient_id'), 'refresh');
    }
}
