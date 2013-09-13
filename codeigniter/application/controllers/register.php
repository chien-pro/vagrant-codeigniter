<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller 
{
	public function __constructs() 
	{
		parent::__constructs();
		$this->load->library(array('form_validation', 'session'));
		$this->load->database();
		$this->load->helper('hash');
		$this->load->model('account');
	}

	public function index() 
	{
		$this->load->helper(array('url','form'));
		$this->load->view('account');
		
	}

	public function check_register()
	{
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('name', 'ユーザ:', 'required|xss_clean');
		$this->form_validation->set_rules('pass', 'パスワード:', 'required|xss_clean|min_length[6]');
		$this->form_validation->set_rules('mail', 'Mail', 'required|xss_clean|valid_email|callback_mail_check');
		
		
		if ($this->form_validation->run() === true) {
			$data = array (
				'name' 	=> $this->input->post('name'),
				'mail' 	=> $this->input->post('mail'),
				'pass'	=> myHash($this->input->post('mail'), $this->input->post('pass'))
			);
			
			$this->account->insert($data);
			echo "登録が成功しました。もう一度ログインしてください。";
			$temp = $this->account->getAccount($data['mail']);
			print_r($temp);
			$temp2 = array (
							'mail' 			=> $temp['mail'],
							'pass'			=> $temp['pass'],
							'id' 			=> $temp['id'],
							'name'			=> $temp['name'],
			);
			print_r($data);
			$this->load->library('session');
			$this->session->set_userdata($temp2);
			redirect('home');
		} else {
			$this->load->view('account');
		}
		
	}

	public function mail_check($str)
	{
		$this->load->model('account');
		return $this->account->checkMail($str);
	}
}