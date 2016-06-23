<?php

class Gov_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function add_gov($person_ID) {



        $data = array(
            'person_ID' => $person_ID,
            'civilian_ID' => $this->input->post('civilian_id'),
            'gov_ID' => $this->input->post('govk_id')
        );

        $this->db->insert('government', $data);
    }

}
