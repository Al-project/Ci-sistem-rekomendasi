<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_data_twitter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('twitter_m'));
	}

	public function index()
	{
	    $data['kode'] = $this->twitter_m->kode();
		$data['user'] = $this->twitter_m->get_all();
		$this->load->view('twitter/v_twitter', $data);
	}

	public function tambah_aksi()
	{
		$data = array(
			'kode_hobi' => $this->input->post('kode_hobi'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'nama_twitter' => $this->input->post('nama_twitter'),
			'umur' => $this->input->post('umur'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'status_kegiatan' => $this->input->post('status_kegiatan'),
		);
		$this->twitter_m->insert($data);
		redirect('index_twitter', $data); /* nanti di ganti sama beranda 2 */
	}

}

?>