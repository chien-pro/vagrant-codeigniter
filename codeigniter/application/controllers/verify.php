<?php
class Verify extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->database();
		
	}

	function index() 
	{
		$this->load->Model("User");
		echo "verify_login";
		$this->load->library('form_validation');
		if($this->form_validation->run() == false) 
		{
			$this->load->view('login');
		};
	}

	function check_login() 
	{
		$this->load->Model("account");
		$mail = $this->input->post('mail');
		$pass = $this->input->post('pass');
		$result = $this->account->login($mail, $pass);

		if($result) 
		{
			$this->load->view('home');
		}
		else 
		{
			echo "Invalid email or password, try again !";
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->view('login');
		}
	}

}
