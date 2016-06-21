<?php
class Message_model extends CI_Model {

   public function __construct()
   {
          $this->load->database();
          $this->load->helper('date');
   }

    public function set_message_hut()
    {
          $this->load->helper('url');


          $data = array(
            'german_content' => $this->input->post('message'),
            'inserted_date_time' => date('Y-m-d H:i:s',now()),

          );

          $this->db->insert('message', $data);
          return  $this->db->insert_id();
    }

    public function get_message_all($id=False)
    {
      if($id===False){

          $this->db->select('*');
          $this->db->where('stored_type',NULL);
          $this->db->from('message');
          $query = $this->db->get();
          return $query->result_array();
      }

      if($id===True){

          $this->db->select('*');
          $this->db->where('stored_type IS NOT NULL');
          $this->db->from('message');
          $query = $this->db->get();
          return $query->result_array();
      }

      if($id==='english'){

          $this->db->select('*');
          $this->db->where('english_content',NULL);
          $this->db->from('message');
          $query = $this->db->get();
          return $query->result_array();
        }
      if($id==='significant'){

          $this->db->select('*');
          $this->db->where('stored_type','significant');
          $this->db->from('message');
          $query = $this->db->get();
          return $query->result_array();
        }
          $this->db->select('*');
          $this->db->where('message_ID', $id);
          $this->db->from('message');
          $query = $this->db->get();
          return $query->row_array();


    }


    public function get_message_by_id($id)
    {
          $this->db->select('*');
          $this->db->where('message_ID', $id);
          $this->db->from('message');
          $query = $this->db->get();
          $row = $query->row();//crreate object of the result

          return $row;
    }

    public function get_last_message()
    {
          $this->db->select('*');
          $this->db->order_by('message_ID',"desc");
          $this->db->limit(1);
          $this->db->from('message');
          $query = $this->db->get();
          $row =$query->row();
          return $row;
    }

    public function store()
    {
        $id=$this->input->post('message_id');
        $type=$this->input->post('stype');

        $this->db->set('stored_type', $type);
        $this->db->set('stored_date_time',date('Y-m-d H:i:s',now()));
        $this->db->where('message_ID', $id);
        $this->db->update('message');

    }







}

?>
