<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_form extends CI_Controller {

 function __construct()
 {
 parent::__construct();
 $this->load->model('mform_data', '', TRUE);
 $this->load->helper(array('form', 'url'));
 }

 public function index()
 {
  $data['title'] = "Form Data"; 
    $data['isian'] = $this->mform_data->satutable();   
 
   $this->load->view('form/v_lihat_form_data',$data);
  
 } 
 }
?>