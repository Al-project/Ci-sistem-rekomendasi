	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Form_bio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('form_m'));
	}

	public function index()
	{
	    $data['kode'] = $this->form_m->kode();
		$data['user'] = $this->form_m->get_all();
		$this->load->view('form/v_data', $data);
	}

	public function tambah_aksi()
	{
		$data = array(
			'kode_hobi' => $this->input->post('kode_hobi'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'status_kegiatan' => $this->input->post('status_kegiatan'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'hobi' => $this->input->post('hobi'),
			'email' => $this->input->post('email'),
		);
		
		$this->form_m->insert($data);
		redirect('index_hoby', $data); /* nanti di ganti sama beranda 2 */
	}

	
}