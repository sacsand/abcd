<?php

class MilitaryOfficer_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function add_officer($person_ID) {



        $data = array(
            'person_ID' => $person_ID,
            'rank' => $this->input->post('rank'),
            'military_ID' => $this->input->post('military_id')
            
            
        );

        $this->db->insert('militaryofficer', $data);
    }

}
