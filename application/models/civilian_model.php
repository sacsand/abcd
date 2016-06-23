<?php
class Civilian_model extends CI_Model {

   public function __construct()
    {
          $this->load->database();
    }
    
     function add_civilian($person_ID){
        
        
        
         $data = array(
            'person_ID' => $person_ID,
            'civilian_ID' => $this->input->post('civilian_id')
        
             

          );

          $this->db->insert('civilian', $data);
    }
    
}

