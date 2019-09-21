<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Twitter_m extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_all()
  {
    return $this->db->get('tabel_twitter')->result();
  }

  public function insert($data)
  {
    $this->db->insert('tabel_twitter', $data);
  }
  
  
  
          public function kode(){
		   $this->db->select('RIGHT(tabel_twitter.kode_hobi,6) as kode_hobi', FALSE);
		  $this->db->order_by('kode_hobi','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tabel_twitter');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->kode_hobi) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			 $kode_max = str_pad($kode, 6, "0", STR_PAD_LEFT);   
			  $kodetampil = "TW".$kode_max;  //format kode
			  return $kodetampil;  
			  
		 }
		  
		 
		




}
?>