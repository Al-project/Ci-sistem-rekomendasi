<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tulis_akhir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('tulis_m'));
	}

	public function index(){
	
		
		$data['user'] = $this->tulis_m->get_all();
		$this->load->view('v_tulis', $data);
		
	}

	public function tambah_aksi()
	{
		$data = array(
			
			'hobi' => $this->input->post('hobi'),
			'nama_pengguna' => $this->input->post('nama_pengguna'),
			'jarak' => $this->input->post('jarak'),
			
		);
		
		$this->tulis_m->insert($data);
		redirect('v_akhir', $data); /* nanti di ganti sama beranda 2 */
	}
	}
?>
	
