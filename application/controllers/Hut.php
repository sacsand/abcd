<?php

class Hut extends CI_Controller {

       public function __construct()
        {
              parent::__construct();
              $this->load->helper('form');
              $this->load->model('message_model');
              $this->load->model('trip_model');
              $this->load->helper('url_helper');
              $this->load->library('form_validation');
        }

       public function index()
        {
              //$data['news'] = $this->news_model->get_news();
              $data['title'] = 'Hut GUI';

              $this->load->view('templates/header', $data);
              $this->load->view('hut/hut', $data);
              $this->load->view('templates/footer');


        }

        public function view($page = 'home')
        {
            if ( ! file_exists(APPPATH.'views/hut/'.$page.'.php'))
              {
                      // Whoops, we don't have a page for that!
                      show_404();
              }

              $data['title'] = ucfirst($page); // Capitalize the first letter

              $this->load->view('templates/header', $data);
              $this->load->view('hut/'.$page, $data);
              $this->load->view('templates/footer', $data);
        }



        public function create()
        {
            $data['title'] = 'Hut';

            $this->form_validation->set_rules('message', 'Message', 'required');

              if ($this->form_validation->run() === FALSE)
              {
                  $this->load->view('templates/header', $data);
                  $this->load->view('hut/hut');
                  $this->load->view('templates/footer');

              }
              else{
              $message_id=$this->message_model->set_message_hut();

              $message_details=$this->message_model->get_message_by_id($message_id);

              $trip_details = $this->trip_model->get_trip_data($message_id,1,2);

              $data['trip_id'] = $trip_details->trip_ID;
              $data['password'] = $trip_details->password;
              $data['message_id'] = $message_id;
              $data['german_content'] = $message_details->german_content;
              $data['users'] =$this->trip_model->going_on($trip_details->trip_ID);


              $this->load->view('templates/header', $data);
              $this->load->view('hut/send', $data);
              $this->load->view('templates/footer');


             }

        }

        public function update()
        {
              $data['title'] = 'Update Item';

              $this->trip_model->update_trip('leave_time');


              $this->load->view('templates/header', $data);
              $this->load->view('hut/success', $data);
              $this->load->view('templates/footer');




        }


}
