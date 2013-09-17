<?php
class Subject extends CI_Model 
{

  public function __construct() 
  {
    parent::__construct();
    $this->load->database();
  }

  public function getSubject($account_id, $offset, $start)
  {
    $this->db->select();
    $this->db->from('subject');
    $this->db->where("account_id", $account_id);
    $this->db->order_by("time desc");
    $this->db->limit($offset, $start);

    $query = $this->db->get();

    if ($query->num_rows()) {
      return $query->result_array();
    } else {
      return false;
    	}
  }

  public function insertSubject($data)
  {
    $this->db->insert("subject", $data);
    $query = $this->db->get('subject');
    return true;
  }
}