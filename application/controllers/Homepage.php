<?php 
    class Homepage extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->load->helper('url');
            $this->load->library('session');
            if($this->session->has_userdata('username'))
            {
                $this->load->view('homepage');
            }
            else
            {
                redirect('login');
            }
        }

        public function logout()
        {
            $this->load->helper('url');
            $this->load->library('session');
            $this->session->unset_userdata(array('username', 'email', 'image_path'));
            redirect('login');
        }
    }
?>