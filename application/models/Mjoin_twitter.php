<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mjoin_twitter extends CI_Model {
 
public function duatable() {
 $this->db->select('*');
 $this->db->from('tabel_twitter');
 $this->db->join('tabel_pengguna_akurasi','tabel_pengguna_akurasi.kode_hobi=tabel_twitter.kode_hobi');
 $query = $this->db->get();
 return $query->result();
}

}