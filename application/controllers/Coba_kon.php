

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba_kon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('kon_m'));
	}

	public function index()
	{
	$b['data'] = $this->kon_m->tampil_hobi();

	$this->load->view('twitter/view_tampil_hasil_hobi',$b);

	}
	}
	?>