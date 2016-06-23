<?php


class Spy extends CI_Controller
{
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
        $data['messages'] = $this->message_model->get_message_all(false);
        $data['messages_stored'] = $this->message_model->get_message_all(true);
        $data['title'] = 'Traslate';
        $this->load->view('templates/header', $data);
        $this->load->view('spy/home', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = null)
    {
        $data['messages'] = $this->message_model->get_message_all($id);

        if (empty($data['messages'])) {
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

        redirect('spy');
    }

    public function getid($id)
    {
        $mid = $this->uri->segment(3);
        $data['id'] = $mid;
        $data['title'] = 'Traslate';
        $data['messages'] = $this->message_model->get_message_all($mid);
        $this->load->view('templates/header', $data);
        $this->load->view('spy/check', $data);
        $this->load->view('templates/footer');
    }

    public function check()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        $message_id = $this->input->post('message_id');
        $password = $this->input->post('password');
        $row = $this->translate_model->checks($message_id, 2, 3);

        if ($row == true) {
            $this->trip_model->update_trip('reach_time', $password);
            $data['messages'] = $this->message_model->get_message_all($message_id);
            $data['title'] = 'Traslate';
            $this->load->view('templates/header', $data);
            $this->load->view('spy/view', $data);
            $this->load->view('templates/footer');
        } else {
            $data['messages'] = $this->message_model->get_message_all($message_id);
            $data['title'] = 'Traslate';
            $this->load->view('templates/header', $data);
            $this->load->view('spy/check', $data);
            $this->load->view('templates/footer');
        }
    }
}
