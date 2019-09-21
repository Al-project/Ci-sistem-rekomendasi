<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_data extends CI_Model {
    function getAll_kat()
    {
        $this->db->order_by('kategorii.id desc');
        return $this->db->get('kategorii');
    }

    function total_dataset()
    {
        $sql="SELECT count(*) as total from list where keaktifan=1";

        //tp
        $sql_Count=$this->db->query($sql);
        $Count=$sql_Count->row_array();
        $hasil=$Count['total'];

        return $hasil;
    }

    function getAll_list()
    {
        $this->db->order_by('list.id desc');
        return $this->db->get('list');
    }

    function cekjenis($jenis)
    {
        $this->db->where("jenis",$jenis);
        return $this->db->get("list");
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