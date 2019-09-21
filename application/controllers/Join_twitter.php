<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join_twitter extends CI_Controller {

 function __construct()
 {
 parent::__construct();
 $this->load->model('mjoin_twitter', '', TRUE);
 $this->load->helper(array('form', 'url'));
 }

 public function index()
 {
  $data['title'] = "Join CodeIgniter"; 

    // query memanggil function duatable di model
    $data['join2'] = $this->mjoin_twitter->duatable();   
 
   $this->load->view('twitter/v_lihat_join_twitter',$data);
  
 } 
  
}