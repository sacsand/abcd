<?php
class Soldier_model extends CI_Model {

   public function __construct()
    {
          $this->load->database();
    }
    
    function add_soldier($person_ID){
        
        echo $this->input->post('military_id');
        
         $data = array(
            'person_ID' => $person_ID,
            'military_ID' => $this->input->post('military_id')
        
             

          );

          $this->db->insert('soldier', $data);
    }
    
}