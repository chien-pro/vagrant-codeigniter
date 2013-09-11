<?php
class Account extends CI_Model 
	{
	function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	function login($mail, $pass) 
	{
		$this->db->select();
		$this->db->from('account');
		$this->db->where("mail", $mail);
		$this->db->where('pass', $pass);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1) return true;
		else return false;

	}

	function insert($data)
	{
		$this->db->insert('account', $data);
		return true;
	}
}