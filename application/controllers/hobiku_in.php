<?PHP
	class Hobiku_In extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			
			//Model
			
			$this->load->model('hobi_m');
		}
		
		public function index(){
			
			$data['tampil'] = $this->hobi_m->tampil();
			
			$this->load->view('daftarhobi/daftarkan_hoby_v', $data);
		}
		
		public function inputhobi(){

			
			$nama_pengguna = $this->input->post('nama_pengguna');
			$hobi = $this->input->post('hobi');
			$umur = $this->input->post('umur');
			$status = $this->input->post('status');
			
		if ($umur >=5 && $umur<=11) {
		$d = "Kanak-kanak";
		}
		else if ($umur >=12 && $umur<=20){
		$d = "Remaja";
		}
		
		else if ($umur >=21 && $umur<=45){
		$d ="Dewasa";
		}
		
		else {
		$d ="Manula";
		}
			
		$this->hobi_m->inputhobi(array(
			
			'nama_pengguna'		=> $nama_pengguna,
			'hobi'		=> $hobi,
			'umur'		=> $umur,
			'batasan' => $d,
			'status'		=> $status
		));
		redirect("index_daftar_hobi.php");
			
		}
		
		public function logout()
		{
			$this->session->unset_userdata('kode_hobi');
			
			$this->session->sess_destroy();
			
			redirect(site_url());
		}
		
	}






	