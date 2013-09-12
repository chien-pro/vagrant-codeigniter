<?php
class Account extends CI_Model 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('hash');
	}

	public function login($mail, $pass) 
	{
		$this->db->select();
		$this->db->from('account');
		$this->db->where("mail", $mail);
		$this->db->where('pass', myHash($mail, $pass));
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
    	}
	}

	public function insert($data)
	{
		$this->db->insert('account', $data);
		return true;
	}

	function checkMail($mail)
	{
		$this->db->select();
		$this->db->where('mail', $mail);
		$query = $this->db->get('account');
		if ($query->num_rows()) {
			return false;
		} else {
			return true;
		}

	}
}