<?php

class Alternatif extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_alternatif');
        $this->load->model('model_kriteria');
        $this->load->model('model_subkriteria');
        $this->load->library('table');
    }

    function index() {
        $this->load->view('alternatif');
    }

    function tambah_alternatif() {
        if ($_POST) {
            $data = array(
                'kode_uji' => html_escape($this->input->post('kode_uji')),
                'nama_lengkap' => html_escape($this->input->post('nama_lengkap')),
                'jenis_hobi' => html_escape($this->input->post('jenis_hobi')),
                'status_kegiatan' => html_escape($this->input->post('status_kegiatan')),
            );
            echo $this->model_alternatif->tambah_alternatif($data);
        } else {
            redirect(base_url('dashboard'));
        }
    }

    function edit_alternatif() {
        if ($_POST) {
            $data = array(
                'kode_uji' => html_escape($this->input->post('kode_uji')),
                'nama_lengkap' => html_escape($this->input->post('nama_lengkap')),
                'jenis_hobi' => html_escape($this->input->post('jenis_hobi')),
                'status_kegiatan' => html_escape($this->input->post('status_kegiatan'))
                
            );
            echo $this->model_alternatif->edit_alternatif($data);
        } else {
            redirect(base_url('dashboard'));
        }
    }

    function hapus_alternatif() {
        if ($_POST) {
            $data = array(
                'kode_uji' => $this->input->post('kode_uji')
            );
            echo $this->model_alternatif->hapus_alternatif($data);
        } else {
            redirect(base_url('dashboard'));
        }
    }

    function lihat_alternatif() {
        $data['alternatif'] = $this->model_alternatif->lihat_alternatif();
        $this->load->view('view/table_alternatif', $data);
    }
    
    function evaluasi(){
        $data['data_kriteria'] = $this->model_kriteria->lihat_kriteria();
        $this->load->view('evaluasi_alternatif',$data);
    }

    function test_sort() {
        $data = array();
        for ($x = 0; $x <= 10; $x++) {
            $data[$x]['nilai'] = rand(1, 100);
            $data[$x]['nama_lengkap'] = $x;
        }
        //sort($data['nilai']);
        usort($data, function($a, $b) {
            return $a['nilai'] <= $b['nilai'];
        });

        echo "<pre>";
        print_r($data);
        echo "</pre>";

        //SORT DESC
        usort($data_subkriteria, function($a, $b) {
            if ($a['id_subkriteria'] == $b['id_subkriteria'])
                return 0;
            return $a['id_subkriteria'] < $b['id_subkriteria'] ? 1 : -1;
        });
    }

    function daftar_evaluasi() {
        //$id = 1;
        $id = $this->input->post('id_kriteria');
        $data_subkriteria = $this->db->select('*')->from('tbl_subkriteria')->where('id_kriteria', $id)->get()->result_array();
        $data_pengguna = $this->db->select('*')->from('tbl_alternatif')->get()->result();
        
        
        
        $data_nilai = array();
        $x = 0;
        foreach ($data_pengguna as $row) {
            $data_nilai[$x]['nama'] = $row->nama_lengkap;
            $data_nilai[$x]['kode_uji'] = $row->kode_uji;
            $y = 0;
            $this->db->select('*')->from('tbl_evaluasi')->join('tbl_subkriteria', 'tbl_evaluasi.id_subkriteria=tbl_subkriteria.id_subkriteria')->where('tbl_evaluasi.kode_uji', $row->kode_uji)->where('tbl_subkriteria.id_kriteria', $id);
            $nilai = $this->db->get()->result();
            foreach($nilai as $baris){
                $data_nilai[$x]['nilai_pengguna'][$y]['id_subkriteria']=$baris->id_subkriteria;
                $data_nilai[$x]['nilai_pengguna'][$y]['nilai']=$baris->nilai;
                $y++;
            }
            $x++;
        }
        //echo "<pre>";
        //print_r($data_nilai);
        //echo "</pre>";
        echo json_encode(array('data_kriteria'=>$data_subkriteria,'data_nilai'=>$data_nilai));
    }

    function data_edit(){
        if($_POST){
            $data = array(
                'kode_uji'=>$this->input->post('kode_uji'),
                'id_kriteria'=>$this->input->post('id_kriteria')
            );
            
            //TODO
            $arr = $this->model_alternatif->data_edit($data)->result();
            echo json_encode($arr);
        }else{
            redirect(base_url('dashboard'));
        }
    }
    
    function simpan_edit(){
        if($_POST){
            $data = array(
                'id_evaluasi'=>$this->input->post('id_evaluasi'),
                'nilai'=>$this->input->post('nilai_evaluasi')
            );
            echo $this->model_alternatif->simpan_edit($data);   
        }else{
            redirect(base_url('dashboard'));
        }
    }
    
    function calculate(){
        $this->load->view('Calculate');
    }
    function table_calculate(){
        $data['vektor'] = $this->model_alternatif->data_calc();
        $this->load->view('view/table_vektor',$data);
    }
}
