<?php
class Subject extends CI_Model 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function getSubject($account_id)
	{
		$this->db->select();
		$this->db->from('subject');
		$this->db->where("account_id", $account_id);
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
    	}
	}
}
?>