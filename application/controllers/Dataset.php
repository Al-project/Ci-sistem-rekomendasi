<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';
class Dataset extends CI_Controller{
public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_data');
        $this->load->dbforge();
    }


    public function index()
    {
        $data['kategori'] = $this->Mod_data->getAll_kat()->result();
        $data['jenis'] = $this->Mod_data->getAll_list()->result();
        if($this->uri->segment(3)=="create-success") {
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Disimpan...!</p></div>";    
           
			$this->load->view('dataset/data_set',$data);
        }
        else if($this->uri->segment(3)=="update-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Update...!</p></div>"; 
           
			$this->load->view('dataset/data_set',$data);
        }
        else if($this->uri->segment(3)=="delete-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Dihapus...!</p></div>"; 
            
			$this->load->view('dataset/data_set',$data);
        }
        else{
           
			$this->load->view('dataset/data_set',$data);
        }

       
    }
/*
    public function input(){
    	$this->template->load('layoutbackend','dataset/data_input');
    }
*/
    public function insert()
    {
        ///Library Sastrawi
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();

        $stopwordFactory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
        $stopWord = $stopwordFactory->createStopWordRemover();
        ///end
        if (isset($_POST['save'])) {
           $this->_set_rules();
           if ($this->form_validation->run()==true) {
               $jenis=$this->input->post('jenis');
               $kategori=$this->input->post('kategori');
               $cuitan=$this->input->post('cuitan');

               $cek=$this->Mod_data->cekjenis($jenis);
               if ($cek->num_rows() > 0) {
                   $data['message'] = "<div class='alert alert-block alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <p><strong><i class='icon-ok'></i>jenis</strong> Sudah Digunakan...!</p></div>"; 
                    $data['kategori'] = $_POST['kategori'];
                   
					$this->load->view('dataset/data_set',$data);
               }
               else{
                $save_list = array('jenis' =>$jenis ,
                              'kategori' => $kategori,
                              'keaktifan'=> 1 );
                $this->Mod_data->insert_list("list",$save_list);

                ///Stemming Sstrawi
                $remover = $stopWord->remove($jenis." ".$cuitan);
                $output =  $stemmer->stem($remover);

                $separate = explode(" ", $output);
                foreach ($separate as $value) {
                   
                    $sql = "SELECT count(*) as total FROM stem where stem='$value' and kategori='$kategori'";
                    $query=$this->db->query($sql);
                    $count = $query->result_array();
                    
                    foreach ($count as $key) {
                        
                    if ($key['total'] > 0) {
                        $save_count = "UPDATE stem set count = count + 1 where stem = '$value'";
                        $save_s=$this->db->query($save_count);
                       
                    } else {
                         $save_stem = array('stem' => $value,
                                        'count'=>1,'kategori'=>$kategori,
                                        'keaktifan'=>1 );
                        $this->Mod_data->insert_stem('stem',$save_stem);
                    }
                }
/*
                }
                for ($i=0; $i < count($separate) ; $i++) { 
                    $ceknya = array('stem' => $separate[$i],
                                    'kategori'=>$kategori );

                    $cek=$this->Mod_data->cek_stem('stem',$ceknya);
                    $save_count = "UPDATE stem SET count=count+1 WHERE stem='$separate[$i]'";
                        $query=$this->db->query($save_count);
                        return $query;
/*
                    if($cek->num_rows==0){
                        $save_stem = array('stem' =>$separate[$i] ,
                                            'count'=> 'count'+1,
                                            'kategori'=>$kategori );
                        $this->Mod_data->insert_stem('stem',$save_stem);
                    }
                    else{
                        $save_count = "UPDATE stem SET count=count+1 WHERE stem='$separate[$i]'";
                        $query=$this->db->query($save_count);
                        return $query;
                    }
*/
                }
                redirect('dataset/index/create-success');
               }
           }
           else{
                $data['message'] = "";
                $data['kategori'] = $_POST['kategori'];
              
				$this->load->view('dataset/data_set',$data);
            }
        } 
    }

    public function _set_rules(){
        $this->form_validation->set_rules('kategori','Kategori','required|trim');
        $this->form_validation->set_rules('jenis','Jenis','required|trim');
        $this->form_validation->set_rules('cuitan','Cuitan','required|trim');
        $this->form_validation->set_message('required', '{field} kosong, silahkan diisi');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a>","</div>");
    }

    public function get_kategori()
    {
        //cek apakah ada tombol btnKirim
        if(isset($_POST['add'])){
            //kita urai masing-masing variabel post
            $this->_set_rules();
            if($this->input->post('kategori')=="- Pilih Kategori -"){
                $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Silahkan Pilih Kategori Buku </p></div>"; 
            $data['jenis'] = $this->Mod_data->getAll_list()->result();
            $data['kategori'] = $this->Mod_data->getAll_kat()->result();

           
			$this->load->view('dataset/data_set',$data);
            }
            else{ 
            $data['kategori'] = $_POST['kategori'];
            
			$this->load->view('dataset/data_input',$data);
            }      
           
        }
        else{
               
				$this->load->view('dataset/data_set',$data);
            } 
        
    }
}
?>