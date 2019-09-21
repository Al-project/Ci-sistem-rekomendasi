<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->helper('url');
		$this->load->model('M_login');
		// if ($this->session->userdata('username')=="") {
		// 	redirect('login');
		// }
	
		//  else if(!$this->session->userdata('level') =="admin"){
		//  	redirect(base_url("menu/guru"));
		//  }
	}

	function login(){
	 	$this->load->view('v_login');
	}
	function aksi_login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//var_dump($username);die;
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_login->cek_login("cruduser",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' 		=> $username,
				'status' 	=> "login",
				'level'		=> "user"
				);
 
			$this->session->set_userdata('user',$data_session);
 
			redirect(base_url("Display_person"));
 
		}else{
			?>
			<script>
				alert("Username dan password salah !");
			</script>
		<?php
			//echo "Username dan password salah !";
			$this->load->view('v_login');
		}
	}

	function logout(){
		$this->session->unset_userdata('user')["nama"];
		$this->session->unset_userdata('user')["level"];
		$this->session->unset_userdata('user')["level"];
		//$this->session->sess_destroy('user');
		redirect(base_url('web/index'));
	}

	public function index(){		
		$data['judul'] = "Home";
		//$data['event'] = $this->M_user->tampil_event()->result();
		
	
		$this->load->view('v_header',$data);
		
	}

	
	
	

///==============================================================registrasi================//
	public function pendaftaran(){		
		
		$this->load->view('v_registrasi',$data);
	}

	public function display_person(){
		//var_dump($this->session->userdata('level')); die;
		if($this->session->userdata('user')["status"] == "login" && $this->session->userdata('user')["level"]=="user"){
			$where = array(
					'username' => $this->session->userdata('user')["nama"]);
		
			$data['record'] = $this->M_login->cek_login("cruduser",$where)->row_array();

			$this->load->view('v_display_person',$data);
			

		}
		else{

			$this->load->view('v_login');
		}		
			
	}

	function daftar(){
		if(isset($_POST['daftar'])){
			
			//var_dump($nama);
			$usr = str_replace(' ', '', $this->input->post('nama'));
			$username = strtolower($usr.strval(rand(10,100)));
			$kode = rand(1000,9999);
			if($this->input->post('password')!==$this->input->post('password1')){
				echo "<script>
						alert('password tdk sesuai');
						document.location.href = 'pendaftaran';
					</script>";

					//redirect('web/pendaftaran');
			}
			else{

				$data = array(
		    'username'		=> $username,
			'nama_panggilan' => $this->input->post('nama_panggilan'),
			'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'ttl' => $this->input->post('ttl'),
			'alamat' => $this->input->post('alamat'),
			'gender' => $this->input->post('gender'),
			'nama_sosmed' => $this->input->post('nama_sosmed'));
				

				
				//var_dump($data);die;
				$this->db->insert('pendaftaran',$data);
				//var_dump(mysqli_affected_rows($this->db->insert('cruduser',$data))); die;
				//view_display($username,$this->input->post('password'));
				echo "<script>
						alert('Berhasil Mendaftar');
					</script>";

				$user_name = $username;
				$password = $this->input->post('password');
				$where = array(
					'username' => $user_name,
					'password' => md5($password)
					);
				$cek = $this->M_login->cek_login("pendaftaran",$where)->num_rows();
				if($cek > 0){
		 
					$data_session = array(
						'nama' 		=> $username,
						'status' 	=> "login",
						'level'		=> "user"
						);
 
				$this->session->set_userdata('user',$data_session);
		 
					redirect(base_url("Display_person"));
		 
				}else{
					echo "<script>
						alert('password/username salah');
						document.location.href = 'pendaftaran';
					</script>";
				}	
			}
			//redirect('web/pendaftaran');
		}else{
			// $data['judul'] = 'daftar';
			// // $this->template->load('admin/v_header','admin/v_tambah_news','admin/v_footer',$data);
			// $this->load->view('v_header',$data);
			// $this->load->view('v_registrasi',$data);
			// $this->load->view('v_footer',$data);
			echo "Data tak masuk";
		}
	}
}