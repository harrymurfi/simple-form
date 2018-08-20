<?php 
    class Registration extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->library('session');

            $this->form_validation->set_rules('username', 'Name', 'trim|required'); 
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            $config['upload_path']   = './uploads/'; 
            $config['allowed_types'] = 'jpg';
            $config['file_name']    = $this->input->post('username');
            $config['max_size']      = 2048000; 
            $config['max_width']     = 1024; 
            $config['max_height']    = 768;
            if (!$this->form_validation->run()) 
            {
                $this->load->view('registration');
            }
            else 
            {
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('photo'))
                {
                    $this->load->view('registration_form');
                }
                else
                {
                  // validation and upload success
                    $this->session->set_userdata('username', $this->input->post('username'));
                    $this->session->set_userdata('email', $this->input->post('email'));
                    $this->load->view('homepage');
                }
            }
        }
    }
?>