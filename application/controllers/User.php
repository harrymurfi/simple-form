<?php 
    class User extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            echo 'this is user controller';
        }
    }
?>