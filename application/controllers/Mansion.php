<?php


class Mansion extends CI_Controller {

      public function __construct()
       {
             parent::__construct();
             $this->load->helper('form');
             $this->load->model('message_model');
             $this->load->model('trip_model');
             $this->load->model('translate_model');
             $this->load->helper('url_helper');
             $this->load->library('form_validation');
       }


       public function index()
      {
            $data['messages']=$this->message_model->get_message_all('significant');
            $data['messages_stored']=$this->message_model->get_message_all(True);
            $data['title'] = 'Mansion';
            $this->load->view('templates/header', $data);
            $this->load->view('mansion/home', $data);
            $this->load->view('templates/footer');
      }

      public function view($id = NULL)
      {
            $data['messages']=$this->message_model->get_message_all($id);


            if (empty($data['messages']))
            {
                    show_404();
            }

            $data['title'] = 'Spy';
            $this->load->view('templates/header', $data);
            $this->load->view('spy/store', $data);
            $this->load->view('templates/footer');

      }

      public function store()
      {
            $this->message_model->store();

            redirect('spy') ;


      }





}
