<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_bio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('bio_m'));
	}

	public function index()
	{
	    $data['kode'] = $this->bio_m->kode();
		$data['user'] = $this->bio_m->get_all();
		$this->load->view('v_biodata', $data);
	}

	public function tambah_aksi()
	{
		$data = array(
			'kode_hobi' => $this->input->post('kode_hobi'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'status_kegiatan' => $this->input->post('status_kegiatan'),
			'umur' => $this->input->post('umur'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'email' => $this->input->post('email'),
		);
		if (!empty($_FILES['photo']['name'])) {
			$upload = $this->_do_upload();
			$data['photo'] = $upload;
		}
		$this->bio_m->insert($data);
		redirect('index_hoby', $data); /* nanti di ganti sama beranda 2 */
	}

	private function _do_upload()
	{
		$config['upload_path'] 		= 'assets/gambar/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			redirect('sign_bio');
		}
		return $this->upload->data('file_name');
	}
}