<?php

class Trip_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('date');
        $this->load->helper('form');
    }

    public function set_message_hut()
    {
        $this->load->helper('url');

        //  $slug = url_title($this->input->post('title'), 'dash', TRUE);

          $data = array(
            'german_content' => $this->input->post('message'),
            'inserted_date_time' => date('Y-m-d H:i:s', now()),

          );

        return $this->db->insert('message', $data);
    }

    public function update_trip($tag, $value = null)
    {
        if ($tag == 'leave_time') {
            $trip_id = $this->input->post('trip_id');
            $this->db->set('leave_time', date('Y-m-d H:i:s', now()));
            $this->db->where('trip_ID', $trip_id);
            $this->db->update('trip');
        }
        if ($tag = 'reach_time') {
            $this->db->set('reach_time', date('Y-m-d H:i:s', now()));
            $this->db->where('password', $value);
            $this->db->update('trip');
        }
    }

    public function get_trip_data($message_id, $from, $to)
    {
        $this->db->select('*');
        $this->db->where('message_ID', $message_id);
        $this->db->where('m_from', $from);
        $this->db->where('m_to', $to);
        $this->db->from('trip');
        $query = $this->db->get();
        $row = $query->row();//crreate object of the result

        return $row;
    }

    public function password_validation($message_id, $from, $to, $input)
    {
        $this->db->select('*');
        $this->db->where('message_ID', $message_id);
        $this->db->where('m_from', $from);
        $this->db->where('m_to', $to);
        $this->db->from('trip');
        $query = $this->db->get();
        $row = $query->row();//crreate object of the result

        if ($input == $row->password) {
            return true;
        } else {
            return false;
        }
    }

    public function check($message_id, $from, $to)
    {
        $input_password = $this->input->post('password');
        $row = $this->get_trip_data($message_id, $from, $to);
        $password = $row->password;
        if ($password == $input_password) {
            return true;
        } else {
            return false;
        }
    }

    public function going_on($trip_id)
    {
        $this->db->select('*');
        $this->db->where('trip_ID', $trip_id);
        $this->db->from('goingon');
        $query = $this->db->get();
        $row = $query->result_array();
        return $row;
    }
}
