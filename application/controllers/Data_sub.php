<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_sub extends CI_Controller {

 function __construct()
 {
 parent::__construct();
 $this->load->model('mform_sub', '', TRUE);
 $this->load->helper(array('form', 'url'));
 }

 public function index()
 {
  $data['title'] = "Form Data Subkriteria"; 
    $data['sub'] = $this->mform_sub->satukriteria();   
 
   $this->load->view('form/v_lihat_sub',$data);
  
 } 
 }
?>