<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_m extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_all()
  {
    return $this->db->get('grid')->result();
  }

 
 public function insert($data)
  {
    $this->db->insert('grid', $data);
  }
  
  
  
        
}
?>