<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_klasifikasi extends CI_Model{

	function insert_klasifikasi($tabel,$data){
        $insert=$this->db->insert($tabel,$data);
        return $insert;
    }

    function insert_prediksi($tabel,$data){
        $insert=$this->db->insert($tabel,$data);
        return $insert;
    }

    function insert_list_prediksi($tabel,$data){
        $insert=$this->db->insert($tabel,$data);
        return $insert;
    }

    function cek_jenis($jenis){
        $this->db->where('jenis',$jenis);
        return $this->db->get("prediksi");
    }

    function getAll_kat()
    {
        $this->db->order_by('kategorii.id desc');
        return $this->db->get('kategorii');
    }

	function get_All_prediksi(){
		$this->db->order_by('prediksi.kategori asc');
		return $this->db->get('prediksi');
	}
}

?>