<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mform_sub extends CI_Model {

 
public function satukriteria() {
 $this->db->select('*');
 $this->db->from('tbl_subkriteria');
 $query = $this->db->get();
 return $query->result();
}
}
?>