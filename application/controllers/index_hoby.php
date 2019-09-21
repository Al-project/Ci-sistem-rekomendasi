<?php
    class Index_hoby extends CI_Controller{
	
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $this->load->view("daftarhobi/index");
        }
    }
?>