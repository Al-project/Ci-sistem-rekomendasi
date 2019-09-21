<?php 

class M_user extends CI_Model{
	function tampil_news(){
		return $this->db->get('news');
	}

	function tampil_event(){
		return $this->db->get('event');
	}
	
	function news(){
		return $this->db->get('news');
	}

	public function edit_new($id){

		return $this->db->get_where('news',array('id'=>$id));
	}

	function get_berita_by_kode($kode){
		
		$hsl=$this->db->query("SELECT * FROM news WHERE id='$kode'");
		return $hsl;
	}
	
	function tampil_pengumuman(){
		return $this->db->get('pengumuman');
	}

	function tampil_event1(){
		return $this->db->get('event1');
	}
	
	function pengumuman(){
		return $this->db->get('pengumuman');
	}

	public function edit_pengumuman($id){

		return $this->db->get_where('pengumuman',array('id'=>$id));
	}

	function get_pengumuman_by_kode($kode){
		
		$hsl=$this->db->query("SELECT * FROM pengumuman WHERE id='$kode'");
		return $hsl;
	}



	///============================
	public function contact(){
		return $this->db->get('contact');
	}
	//============================
	public function pendaftaran(){
		return $this->db->get('pendaftaran');
	}
}


 ?>