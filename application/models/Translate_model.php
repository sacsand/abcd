<?php
class Translate_model extends CI_Model {

   public function __construct()
   {
          $this->load->database();
          $this->load->helper('date');
          $this->load->helper('form');
   }

   public function get_trip_data($message_id,$from,$to)
   {
       $this->db->select('*');
       $this->db->where('message_ID',$message_id);
       $this->db->where('m_from', $from);
       $this->db->where('m_to', $to);
       $this->db->from('trip');
       $query = $this->db->get();
       $row = $query->row_array();//crreate object of the result
       return $row;
   }

   public function checks($message_id,$from,$to)
   {
       $this->load->helper('form');
      // $message_id=$this->input->post('message_id');
       $input_password=$this->input->post('password');

       $row=$this->get_trip_data($message_id,$from,$to);
       $password=$row['password'];
       if($password==$input_password){
         return true;
       }else{
         return false;
       }
   }

   public function trans_english()
   {
       $message_english=$this->input->post('message_g');
       $message_id=$this->input->post('message_id');

       $this->db->set('english_content',$message_english);
       $this->db->where('message_ID', $message_id);
       $this->db->update('message');


   }

}

?>
