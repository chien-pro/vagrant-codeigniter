<?php

class Home extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper(array('hash', 'url', 'form'));
		$this->load->library('session');
		$this->load->model('subject');
	}

	public function index() 
	{
		$data["all_subject"] = $this->subject->getSubject($this->session->userdata['id'], 3);
		$this->load->view('home', $data);
	}

	public function insert_subj()
	{
		$account_id = $this->session->userdata('id');
		$data = array (
				'content' 	=> $_POST['content'],
				'time'		=> date('Y-m-d H:i:s'),
				'account_id'=> $account_id,
				);
		$this->subject->insertSubject($data);
		$result = $this->subject->getSubject($account_id, 3);		
		foreach ($result as $row) {
			echo "----------- <br>";
			echo "Content:".$row['content']."<br>";
			echo "Time   :".$row['time']."<br>";
		}
	}	

	public function view_more()
	{
		$account_id = $this->session->userdata('id');
		$num 	= $_POST['num'];
		$result = $this->subject->getSubject($account_id, $num);	
		if($result != null) {
			foreach ($result as $row) {
			echo "----------- <br>";
			echo "Content:".$row['content']."<br>";
			echo "Time   :".$row['time']."<br>";
			}
		} else {};
	}	
}