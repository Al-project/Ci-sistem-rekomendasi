<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
* 
*/
class Datakate extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('Mod_datakate');
	}

    public function all_temp()
    {
        $data['list']=$this->Mod_datakate->getAll_temp()->result();
       
			$this->load->view('laporan/restore_2',$data);
    }

	public function index()
	{
		$data['kategori']=$this->Mod_datakate->getall()->result();

		if($this->uri->segment(3)=="create-success"){
			$data['message']="<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Disimpan...!</p></div>";    
         
				$this->load->view('kategori/kategori_datakate', $data);
		}
		else if($this->uri->segment(3)=="update-success"){
			$data['message']="<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Update...!</p></div>";    
            	$this->load->view('kategori/kategori_datakate', $data); ///nanti diganti kategori/kategori_data
		}
		else if($this->uri->segment(3)=="delete-success"){
			$data['message']="<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Hapus...!</p></div>";    
            	$this->load->view('kategori/kategori_datakate', $data); ///nanti diganti kategori/kategori_data
		}
		else{
			$data['message'] = "";
            	$this->load->view('kategori/kategori_datakate', $data);
	}
}
	public function insert(){
		if(isset($_POST['save'])){
           
			$this->_set_rules();
             
			if($this->form_validation->run()==true){

				$kategori = $this->input->post('kategori');
				$cek=$this->Mod_datakate->cek_kategori($kategori);
				if($cek->num_rows()>0){
				$data['message'] = "<div class='alert alert-block alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <p><strong><i class='icon-ok'></i>KATEGORI</strong> Sudah Di Inputkan...!</p></div>"; 
                    $data['kategori']= $this->Mod_datakate->getall()->result();
                    	$this->load->view('kategori/kategori_datakate', $data); 
                }
                else{
                	$save = array('kategori' => $this->input->post('kategori'),
                                  'keaktifan' => 1 );
                	$this->Mod_datakate->insert_kategori("data_kategori",$save);
                	redirect('datakate/index/create-success');
                }
			}
            else{
            $data['message']="";
            $data['kategori']= $this->Mod_datakate->getall()->result();
            	$this->load->view('kategori/kategori_datakate', $data);
            }
		}

	}

	public function delete(){
        $kategori = $this->input->post('kode');

        $data_temp = array('kategori' =>$kategori ,
        			'keaktifan' => 1 );

        $this->Mod_datakate->hapus_kategori($data_temp);
        $data = array('kategori' =>$kategori ,
        			'keaktifan' => 0 );
        $this->Mod_datakate->update_list($kategori,$data);
        $this->Mod_datakate->update_stem($kategori,$data);
        ///$this->Mod_datakate->update_kategori($kategori,$data);
        $this->Mod_datakate->update_list_prediksii($kategori,$data);
        $this->Mod_datakate->update_klasifikasi($kategori,$data);
        $this->Mod_datakate->update_prediksii($kategori,$data);
        // echo "berhasil"; die();
        $this->Mod_datakate->delete_kategori($kategori);
        redirect('datakate/index/delete-success');
	}

    public function restore(){
        $kategori = $this->input->post('kategori');

        $this->Mod_datakate->hapus_temp($kategori);
        $data = array('kategori' =>$kategori ,
                    'keaktifan' => 1 );
        $this->Mod_datakate->update_list($kategori,$data);
        $this->Mod_datakate->update_stem($kategori,$data);
        ///$this->Mod_datakate->update_kategori($kategori,$data);
        $this->Mod_datakate->update_list_prediksii($kategori,$data);
        $this->Mod_datakate->update_klasifikasi($kategori,$data);
        $this->Mod_datakate->update_prediksii($kategori,$data);
        // echo "berhasil"; die();
        $this->Mod_datakate->insert_kategori("kategori",$data);

        if($this->uri->segment(3)=="create-success"){
            $data['message']="<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Disimpan...!</p></div>";    
            	$this->load->view('kategori/kategori_datakate', $data); ///nanti diganti kategori/kategori_data
        }
        else{
            $data['message'] = "";
            	$this->load->view('kategori/kategori_datakate', $data);
        }

    }

	public function _set_rules()
    {
        $this->form_validation->set_rules('kategori','Datakate','required|max_length[50]');
        $this->form_validation->set_message('required', '{field} kosong, silahkan diisi');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a>","</div>");
    }
}
?>