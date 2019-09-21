<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode_otomatis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('akurasi_m'));
	}

	public function index()
	{
	    $data['kode'] = $this->akurasi_m->kode();
		$data['user'] = $this->akurasi_m->get_all();
	
	
	  $this->load->view('twitter/v_input_hasil',$data);
	}

	public function tambah_aksi()
	{
		$data = array(
			'kode_hobi' => $this->input->post('kode_hobi'),
			'nama_pengguna' => $this->input->post('nama_pengguna'),
			'jenis_hobi' => $this->input->post('jenis_hobi'),
			'akurasi' => $this->input->post('akurasi'),
			'presisi' => $this->input->post('presisi'),
			'recall' => $this->input->post('recall'),
		);
		$this->akurasi_m->insert($data);
		redirect('Kode_otomatis', $data); /* nanti di ganti sama beranda 2 */
	}

}

?>