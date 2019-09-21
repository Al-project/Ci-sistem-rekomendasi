<?PHP
	class Admin_In extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			
			//Model
			
			$this->load->model('admin_m');
		}
		
		public function index()
		{
			$this->load->view('admin_in_v');
		}
		
		public function login()
		{			
			$this->admin_m->set_username($this->input->post('username'));
			$this->admin_m->set_password($this->input->post('password'));
			
			$query = $this->admin_m->view_by_username_password();
			
			if($query->num_rows())
			{
				$row = $query->row();
				
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('status', $row->status);
				$this->session->set_userdata('sesi', 'login');
				
				redirect(site_url().'dashboard');
			}
			else
				redirect(site_url().'admin_in');
		}
		
		public function logout()
		{
			$this->session->unset_userdata('username');
			
			$this->session->sess_destroy();
			
			redirect(site_url());
		}
	}