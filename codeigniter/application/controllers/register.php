<?php
class Register extends CI_Controller 
{
	function __constructs() 
	{
		parent::__constructs();
	}

	function index() 
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('account');
	}

	function check_register() {
		$data = array 
		(
			'name' 	=> $this->input->post('name'),
			'mail' 	=> $this->input->post('mail'),
			'pass'	=> $this->input->post('pass')
		);
		$this->load->model('account');
		
		if($this->account->insert($data)) 
		{
			$this->load->view('home');
		}
		else 
		{
			$this->load->view('register');
		}
		
	}
}