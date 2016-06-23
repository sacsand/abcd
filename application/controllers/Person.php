<?php

class Person extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('person_model');
        $this->load->model('soldier_model');
        $this->load->model('civilian_model');
        $this->load->model('gov_model');
        $this->load->model('spy_model');
                $this->load->model('militaryOfficer_model');

        $this->load->helper('url_helper');
        $this->load->library('form_validation');
    }

    public function index() {

		
        //$data['news'] = $this->news_model->get_news();
        $data['title'] = 'Add people';

        $this->load->view('templates/header', $data);
        $this->load->view('gate/person_register', $data);
        $this->load->view('templates/footer');
    }

    public function add() {


        $data['title'] = 'add people';

        $this->form_validation->set_rules('first_name', 'firstname', 'required');

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('gate/person_register');
            $this->load->view('templates/footer');
        } else {
            $person_id = $this->person_model->add_person();
           

           

            $type = $this->input->post('type');
            if ($type == "soldier") {
                $this->soldier_model->add_soldier($person_id);
                $this->militaryOfficer_model->add_officer($person_id);
                
            } else if ($type == "gov") {
               $this->civilian_model->add_civilian($person_id);
                $this->gov_model->add_gov($person_id);
            } else if ($type == "non_gov") {
                $this->civilian_model->add_civilian($person_id);
                
            } else if ($type == "spy") {
                $this->spy_model->add_spy($person_id);
            } else {
                $this->militaryOfficer_model->add_officer($person_id);
            }
        }
    }

}
