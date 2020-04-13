<?php
    class Python extends CI_Controller{
        
        public function index()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('python');
            $this->load->view('templates/footer');
        }
    }
?>