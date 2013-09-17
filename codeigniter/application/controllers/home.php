<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{
  const NUM = 10;
  public function __construct() 
  {
    parent::__construct();
    $this->no_cache();

    $this->load->database();
    $this->load->helper(array('hash', 'url', 'form'));
    $this->load->model('subject');

    if ($this->session->userdata('id') == "") {
      redirect(base_url()."login");
      exit();
    }
  }

  public function index() 
  {
    $data["all_subject"] = $this->subject->getSubject($this->session->userdata['id'], self::NUM, 0);
    $this->load->view('home', $data);
  }

  public function insert_subj()
  {
    $account_id = $this->session->userdata('id');
    $data = array (
      'content' 	=> $this->input->post('content'),
      'time'		  => date('Y-m-d H:i:s'),
      'account_id'=> $account_id,
      );
    $this->subject->insertSubject($data);
    $result = $this->subject->getSubject($account_id, self::NUM, 0);
    foreach ($result as $row) {
      echo "...................................................................................<br>";
      echo "<div class = 'user'>".$this->session->userdata['name']."</div>";
      echo "<div class='time'>".$row['time']."</div><br>";
      echo "<div class = 'content'>".$row['content']."</div>";
    }
  }	

  public function view_more()
  {
    $account_id = $this->session->userdata('id');
    $start 	= $this->input->post('start');
    $result = $this->subject->getSubject($account_id, self::NUM, $start);
    if($result != null) {
      foreach ($result as $row) {
      echo "...................................................................................<br>";
      echo "<div class = 'user'>".$this->session->userdata['name']."</div>";
      echo "<div class='time'>".$row['time']."</div><br>";
      echo "<div class = 'content'>".$row['content']."</div>";
      }
    }
  }	

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }

  protected function no_cache()
  {
    $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
    $this->output->set_header("Cache-Control: post-check=0, pre-check=0", false);
    $this->output->set_header("Pragma: no-cache"); 
  }
}