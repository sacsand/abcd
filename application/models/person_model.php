<?php
class Person_model extends CI_Model {
    
     public function __construct()
    {
            $this->load->database();
            $this->load->helper('date');
    }
    
    
    function add_person(){
        
        
         $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
             'password' => $this->input->post('password'),
             'date_of_birth'=> $this->input->post('bdate')
             

          );

          $this->db->insert('person', $data);
          return  $this->db->insert_id();
    }
    
}