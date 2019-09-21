
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kon_m extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function tampil_hobi(){
$this->db->select('id, nama_pengguna, kategori, COUNT(kategori) as total');
 $this->db->group_by('kategori'); 
 $this->db->group_by('nama_pengguna'); 
 $this->db->order_by('total', 'desc'); 
 $hasil = $this->db->get('prediksi');
return $hasil;
}

}
?>