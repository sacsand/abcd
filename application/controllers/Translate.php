<?php


class Translate extends CI_Controller {

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
              $last_message=$this->message_model->get_last_message();
              $data['message_id'] =$last_message->message_ID;
              $data['title'] = 'Traslate';
              $data['messages'] = $this->message_model->get_message_all();
              $this->load->view('templates/header', $data);
              $this->load->view('translate/select', $data);
              $this->load->view('templates/footer');
      }

      public function check()
     {

               $this->load->helper('url');
               $this->load->helper('form');
               $message_id=$this->input->post('message_id');
               $password=$this->input->post('password');
               $row=$this->translate_model->checks($message_id,1,2);


           if($row == true){

               $this->trip_model->update_trip('reach_time',$password);
               $data['messages'] = $this->message_model->get_message_all($message_id);
               $data['title'] = 'Traslate';

               $this->load->view('templates/header', $data);
               $this->load->view('translate/trans', $data);
               $this->load->view('templates/footer');

             }else{

               $data['messages'] = $this->message_model->get_message_all($message_id);
               $data['title'] = 'Traslate';
               $this->load->view('templates/header', $data);
               $this->load->view('translate/check', $data);
               $this->load->view('templates/footer');
           }

     }

     public function trans(){


              $this->load->helper('form');
              $message_id=$this->input->post('message_id');


              //update englisg content
              $this->translate_model->trans_english();

              //get updated message
              $data['messages'] = $this->message_model->get_message_all($message_id);

              //get newly created trip details
              $trip=$this->trip_model->get_trip_data($message_id,2,3);

              $data['users'] =$this->trip_model->going_on($trip->trip_ID);
              $data['password'] = $trip->password;
              $data['trip_id'] = $trip->trip_ID;
              $data['message_id'] =$message_id;
              $data['title'] = 'Traslate';

              $this->load->view('templates/header', $data);
              $this->load->view('translate/send', $data);
              $this->load->view('templates/footer');

     }

     public function getid($id)
    {
             $mid=$this->uri->segment(3);
             $data['id'] =$mid;
             $data['title'] = 'Traslate';
             $data['messages'] = $this->message_model->get_message_all($mid);
             $this->load->view('templates/header', $data);
             $this->load->view('translate/check', $data);
             $this->load->view('templates/footer');

    }

    public function update()
    {
            $data['title'] = 'Update Item';

            $this->trip_model->update_trip('leave_time');

            $this->load->view('templates/header', $data);
            $this->load->view('translate/success', $data);
            $this->load->view('templates/footer');




    }



}
