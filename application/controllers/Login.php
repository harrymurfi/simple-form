<?php 
    class Login extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            //echo 'this is login controller<br>';
            $this->load->helper('url');
            $this->load->library('session');
            $this->session->unset_userdata('username');
            if($this->session->has_userdata('username'))
            {
                redirect('homepage');
            }
            else
            {
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'Name', 'trim|required|callback_username_check'); 
                $this->form_validation->set_rules('password', 'Password', 'trim|required||callback_username_check');
                if (!$this->form_validation->run()) 
                { 
                    $this->load->view('login'); 
                } 
                else 
                { 
                    $this->session->set_userdata('username', $this->input->post('username'));
                    $this->session->set_userdata('email', $this->input->post('email'));
                    redirect('homepage');
                }
            }
        }

        public function username_check($str)
        {
                if ($str == 'coralis')
                {
                    return TRUE;
                }
                else
                {
                    $this->form_validation->set_message('username_check', 'Invalid user.');
                    return FALSE;
                }
        }
    }
?>