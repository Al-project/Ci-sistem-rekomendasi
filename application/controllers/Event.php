<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Event extends CI_Controller{
       
        public function index(){
            $this->load->view("event_v");
        }
    }
?>