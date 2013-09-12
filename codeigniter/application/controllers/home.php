<?php 
class Home extends CI_Controller
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->library(array('session'));//,'jquery'));
		$this->load->helper(array('url','form'));
	}

	public function index()
	{
		//$this->load->helper(array('url','form'));
		$this->load->view('home');
	}
}