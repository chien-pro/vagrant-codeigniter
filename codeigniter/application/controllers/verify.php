<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verify extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    public function index() 
    {
        $this->load->Model("User");
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } 
    }

    public function check_login() 
    {
        $this->load->library('recaptcha');
        $this->form_validation->set_rules('pass', 'パスワード:', 'required|xss_clean|min_length[6]');
        $this->form_validation->set_rules('mail', 'メール：', 'required|xss_clean|valid_email');

        //$this->recaptcha->checkRecaptcha();

        if ($this->form_validation->run()) {

            $this->load->model("account");
            $mail = $this->input->post('mail');
            $pass = $this->input->post('pass');
            $result = $this->account->login($mail, $pass);

            if ($result) {
                $this->session->set_userdata($result);
                redirect('home');
            } else {
                echo "Invalid email or password, try again !";
                $this->load->view('login');
            }
        } else {
            $this->load->view('login');
        }
    }
}
