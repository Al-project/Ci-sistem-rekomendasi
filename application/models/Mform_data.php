<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mform_data extends CI_Model {
 
public function satutable() {
 $this->db->select('*');
 $this->db->from('tabel_data_form');
 $query = $this->db->get();
 return $query->result();
}
}
?>