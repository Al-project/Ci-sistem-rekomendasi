
<?php 
 
class Twitter_data extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Model_twitter');
                $this->load->helper('url');
	}
 
	function index(){
		$data['user'] = $this->Model_twitter->tampil_data()->result();
		
		$this->load->view('twitter/lihat_data_twitter',$data);
	}
	
	
		function catetnama($nama_pengguna){
		$where = array('nama_pengguna' => $nama_pengguna);
		$data['user'] = $this->Model_twitter->edit_data($where,'tabel_twitter')->result();
		
		$this->load->view('klasifikasi/klasifikasi_index',$data);
	}
	
	
}