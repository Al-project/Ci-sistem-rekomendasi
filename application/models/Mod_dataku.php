<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_dataku extends CI_Model {
    function getAll_kat()
    {
        $this->db->order_by('data_kategori.id desc');
        return $this->db->get('kategorii');
    }

    function total_dataset()
    {
        $sql="SELECT count(*) as total from datasetku where keaktifan=1";

        //tp
        $sql_Count=$this->db->query($sql);
        $Count=$sql_Count->row_array();
        $hasil=$Count['total'];

        return $hasil;
    }

    function getAll_list()
    {
        $this->db->order_by('datasetku.id desc');
        return $this->db->get('datasetku');
    }

    function cekjenis($jenis)
    {
        $this->db->where("judul",$judul);
        return $this->db->get("datasetku");
    }

    function insert_list($tabel,$data)
    {
        $insert = $this->db->insert($tabel,$data);
        return $insert;
    }

    function insert_stem($tabel,$data)
    {
        $insert = $this->db->insert($tabel,$data);
        return $insert;
    }
}
?>