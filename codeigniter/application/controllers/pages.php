<?php
class Pages extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function view($page = 'login') 
    {
        if ( ! file_exists('application/views/pages/'.$page))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
echo "Hello";
        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

}