<?php 
class User extends Controller {
	function __construct() {
		parent::controller();
	}

	function index() {
		$this->load->helper('form');
		$this->load->view('user');
	}
}