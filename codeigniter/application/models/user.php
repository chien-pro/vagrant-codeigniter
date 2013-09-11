<?php
class User extends CI_Model 
{
	public function __construct() 
	{
		parent:: __construct();
		$this->load->database();
	}

	public function listall() 
	{
		$query = $this->db->get("user");
		return $query->result_array();
	}
}