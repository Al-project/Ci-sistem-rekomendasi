<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';
class Klasifikasii extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_dataklasifikasi');
    }

    public function index()
    {
        $data['kategori']=$this->Mod_dataklasifikasi->getAll_kat()->result();
        
        
        if($this->uri->segment(3)=="create-success") {
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Disimpan...!</p></div>";    
            $this->load->view('klasifikasi/klasifikasi_data',$data); 
        }
        else if($this->uri->segment(3)=="update-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Update...!</p></div>"; 
            $this->load->view('klasifikasi/klasifikasi_data',$data);
        }
        else if($this->uri->segment(3)=="delete-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Dihapus...!</p></div>"; 
            $this->load->view('klasifikasi/klasifikasi_data',$data);
        }
        else{
            $data['message'] = "";
            $this->load->view('klasifikasi/klasifikasi_data',$data);
        }
        
    }

    public function klasifikasi()
    {
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();

        $stopwordFactory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
        $stopWord = $stopwordFactory->createStopWordRemover();

        if (isset($_POST['tblklasifikasi'])) {

            $this->_set_rules();
            if ($this->form_validation->run()==true) {
                $jenis=$this->input->post('jenis');
                $cuitan=$this->input->post('cuitan');
				$nama_pengguna=$this->input->post('nama_pengguna');
                $prediksi=$this->input->post('kategori');
                $fakta=$this->input->post('kategori-harap');

                $cek_jenis=$this->Mod_dataklasifikasi->cek_jenis($jenis);
                if($cek_jenis->num_rows() > 0){
                    $data['message'] = "<div class='alert alert-block alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <p><strong><i class='icon-ok'></i>jenis Buku</strong> Sudah Diklasifikasikan!</p></div>"; 
                    $data['kategori']=$this->Mod_dataklasifikasi->getAll_kat()->result();
                    $this->load->view('klasifikasi/klasifikasi_data',$data); 
                }
                else{
            $remover=$stopWord->remove($jenis." ".$cuitan);
            $output=$stemmer->stem($remover);

            $separate=explode(" ", $output);

            ////
        $count_travelling="SELECT count(*) as total FROM datasetku WHERE kategori='travelling' AND keaktifan='1'";
        $count_prediksi_travelling="SELECT count(*) as total2 FROM list_prediksi WHERE kategori='travelling' AND keaktifan='1'";
        //
        $travellingCount=$this->db->query($count_travelling);
        $countTravelling = $travellingCount->row_array();
        $pars_travel=$countTravelling['total'];
        //
        $travellingCount2=$this->db->query($count_prediksi_travelling);
        $countTravelling2 = $travellingCount2->row_array();
        $pars_travel2=$countTravelling2['total2'];
        //
        $hasilTravelling=$pars_travel+$pars_travel2;

        /////
        $count_menonton="SELECT count(*) as total FROM datasetku WHERE kategori='menonton' AND keaktifan='1'";
        $count_prediksi_menonton="SELECT count(*) as total2 FROM list_prediksi WHERE kategori='menonton' AND keaktifan='1'";
        //
        $menontonCount=$this->db->query($count_menonton);
        $countMenonton = $menontonCount->row_array();
        $pars_menonton = $countMenonton['total'];
        //
        $menontonCount2=$this->db->query($count_prediksi_menonton);
        $countMenonton2 = $menontonCount2->row_array();
        $pars_menonton2=$countMenonton2['total2'];
        //
        $hasilMenonton=$pars_menonton+$pars_menonton2;

        
        ///
        $count_total="SELECT count(*) as total FROM datasetku where keaktifan='1'";
        $count_prediksi_total="SELECT count(*) as total2 FROM list_prediksi where keaktifan='1'";
        //
        $totalCount=$this->db->query($count_total);
        $countTotal = $totalCount->row_array();
        $pars_total = $countTotal['total'];
        //
        $totalCount2=$this->db->query($count_prediksi_total);
        $countTotal2 = $totalCount2->row_array();
        $pars_total2 = $countTotal2['total2'];
        //
        $hasilTotal=$pars_total+$pars_total2;

        ///p(travelling)
        $pTravelling=$hasilTravelling/$hasilTotal;
        ///p(menonton)
        $pMenonton=$hasilMenonton/$hasilTotal;
        
        $sql="SELECT count(*) as total FROM stem where keaktifan='1'";
        $sql_klasifikasi="SELECT count(*) as total_klasifikasi from klasifikasii where keaktifan='1'";
        ///stem
        $totalstem=$this->db->query($sql);
        $countstem = $totalstem->row_array();
        ///klasifikasi
        $total_stem_kl=$this->db->query($sql_klasifikasi);
        $count_klasifikasi=$total_stem_kl->row_array();
        ///
        $hasilstem_stem=$countstem['total'];
        $hasilstem_kl=$count_klasifikasi['total_klasifikasi'];

        $hasilstem=$hasilstem_stem+$hasilstem_kl;


        $bodyTravelling=log($pTravelling);
        foreach ($separate as $value) {
            $sql = "SELECT count as total FROM stem where stem='$value' and kategori='Travelling' AND keaktifan='1'"; 
            $sql_kl = "SELECT count as total_kl from klasifikasii where stem='$value' and kategori='Travelling' and keaktifan='1'";
            ///
            $wordCount=$this->db->query($sql);
            $Countword=$wordCount->row_array();
            ///
            $word_kl=$this->db->query($sql_kl);
            $count_kl=$word_kl->row_array();
            ///
            $hasil_kl=$count_kl['total_kl'];
            $hasil_st=$Countword['total'];
            $hasilCount=$hasil_kl+$hasil_st;
            $bodyTravelling*=log(($hasilCount+1)/($hasilTravelling+$hasilstem)); 
        }

        ////
        $bodyMenonton=log($pMenonton);
        foreach ($separate as $value) {
            $sql = "SELECT count as total FROM stem where stem='$value' and kategori='Menonton' AND keaktifan='1'"; 
            $sql_kl = "SELECT count as total_kl from klasifikasii where stem='$value' and kategori='Menonton' and keaktifan='1'";
            ///
            $wordCount=$this->db->query($sql);
            $Countword=$wordCount->row_array();
            ///
            $word_kl=$this->db->query($sql_kl);
            $count_kl=$word_kl->row_array();
            ///
            $hasil_kl=$count_kl['total_kl'];
            $hasil_st=$Countword['total'];
            $hasilCount=$hasil_kl+$hasil_st;
            $bodyMenonton*=log(($hasilCount+1)/($hasilTravelling+$hasilstem)); 
        }

        if($bodyTravelling>=$bodyMenonton){
        $data['kategori_hobi']='Travelling';
        }
        elseif ($bodyMenonton>=$bodyTravelling) {
           $data['kategori_hobi']='Menonton';
        }
        
        $pars=$data['kategori_hobi'];
        
        if ($fakta=="- Pilih Kategori -") {
            $fakta=$pars;
        }
        else{
            $fakta=$this->input->post('kategori-harap');

        }

        if($pars=="Travelling" && $fakta=="Travelling"){ 

            $save_hasil= array('nama_pengguna' => $nama_pengguna,
			                   'jenis' => $jenis,
                                'keaktifan'=>1,
                               'kategori' =>$fakta,
                                'tp' => 1,
                                'fp'=>0,
                                'tn'=>0,
                                'fn'=>0);
            $this->Mod_dataklasifikasi->insert_prediksi('prediksi',$save_hasil);

            $sql_tp="SELECT count(tp) as total_tp from prediksi where tp=1 and keaktifan=1";
            $sql_fp="SELECT count(fp) as total_fp from prediksi where fp=1 and keaktifan=1";
            $sql_tn="SELECT count(tn) as total_tn from prediksi where tn=1 and keaktifan=1";
            $sql_fn="SELECT count(fn) as total_fn from prediksi where fn=1 and keaktifan=1";
            
            ///tp
            $tpCount=$this->db->query($sql_tp);
            $Counttp=$tpCount->row_array();
            ///fp
            $fpCount=$this->db->query($sql_fp);
            $Countfp=$fpCount->row_array();
            ///tn
            $tnCount=$this->db->query($sql_tn);
            $Counttn=$tnCount->row_array();
            ///fn
            $fnCount=$this->db->query($sql_fn);
            $Countfn=$fnCount->row_array();
            ///
            $hasil_tp=$Counttp['total_tp'];
            $hasil_fp=$Countfp['total_fp'];
            $hasil_tn=$Counttn['total_tn'];
            $hasil_fn=$Countfn['total_fn'];
            ///akurasi
            $akurasi=($hasil_tp+$hasil_tn)/($hasil_tp+$hasil_tn+$hasil_fp+$hasil_fn)*100;
            $data['akurasi']=number_format($akurasi,2)."%";
            
            ///presisi
            $presisi=($hasil_tp/($hasil_tp+$hasil_fn))*100;
            $data['presisi']=number_format($presisi,2)."%";
            
            ///recall
            $recall=($hasil_tp/($hasil_tp+$hasil_fp))*100;
            $data['recall']=number_format($recall,2)."%";
           
			$this->load->view('klasifikasi/detail_klasifikasi',$data);
        }
        else if($pars=="Travelling" && $fakta=="Menonton"){
            $save_hasil= array('nama_pengguna' => $nama_pengguna,
			                   'jenis' => $jenis,
                               'keaktifan' =>1,
                               'kategori' =>$fakta,
                                'tp' => 0,
                                'fp'=>1,
                                'tn'=>0,
                                'fn'=>0);
            $this->Mod_dataklasifikasi->insert_prediksi('prediksi',$save_hasil);

            $sql_tp="SELECT count(tp) as total_tp from prediksi where tp=1 and keaktifan=1";
            $sql_fp="SELECT count(fp) as total_fp from prediksi where fp=1 and keaktifan=1";
            $sql_tn="SELECT count(tn) as total_tn from prediksi where tn=1 and keaktifan=1";
            $sql_fn="SELECT count(fn) as total_fn from prediksi where fn=1 and keaktifan=1";
            
            ///tp
            $tpCount=$this->db->query($sql_tp);
            $Counttp=$tpCount->row_array();
            ///fp
            $fpCount=$this->db->query($sql_fp);
            $Countfp=$fpCount->row_array();
            ///tn
            $tnCount=$this->db->query($sql_tn);
            $Counttn=$tnCount->row_array();
            ///fn
            $fnCount=$this->db->query($sql_fn);
            $Countfn=$fnCount->row_array();
            ///
            $hasil_tp=$Counttp['total_tp'];
            $hasil_fp=$Countfp['total_fp'];
            $hasil_tn=$Counttn['total_tn'];
            $hasil_fn=$Countfn['total_fn'];
            ///akurasi
            $akurasi=($hasil_tp+$hasil_tn)/($hasil_tp+$hasil_tn+$hasil_fp+$hasil_fn)*100;
            $data['akurasi']=number_format($akurasi,2)."%";
            
            ///presisi
            $presisi=($hasil_tp/($hasil_tp+$hasil_fn))*100;
            $data['presisi']=number_format($presisi,2)."%";
            
            ///recall
            $recall=($hasil_tp/($hasil_tp+$hasil_fp))*100;
            $data['recall']=number_format($recall,2)."%";

            ///insert into list_prediksi tabel
            $list_predik = array('jenis' =>$jenis ,
                                 'kategori'=>$fakta,
                                 'keaktifan'=> 1);
            $this->Mod_dataklasifikasi->insert_list_prediksi('list_prediksi',$list_predik);
            ///insert to klasifikasi tabel
            foreach ($separate as $value) {
                $sql = "SELECT count(*) as total FROM klasifikasii where stem='$value' and kategori='$fakta'";
                $query=$this->db->query($sql);
                $count = $query->result_array();
                   
                foreach ($count as $key) {
                        
                   if ($key['total'] > 0) {
                        $save_count = "UPDATE klasifikasii set count = count + 1 where stem = '$value'";
                        $save_s=$this->db->query($save_count);
                    } else {
                         $save_klasifikasi = array('stem' => $value,
                                        'count'=>1,
                                        'kategori'=>$fakta,
                                        'keaktifan'=>1,
                                        'prediksi'=>$pars,
                                        'fakta'=>$fakta );
                        $this->Mod_dataklasifikasi->insert_klasifikasi('klasifikasii',$save_klasifikasi);
                    }
                }
             }

            
           
			$this->load->view('klasifikasi/detail_klasifikasi',$data);
        }
		
        else if($pars=="Menonton" && $fakta=="Menonton"){
            $save_hasil= array('nama_pengguna' => $nama_pengguna,
			                   'jenis' => $jenis,
                               'keaktifan' =>1,
                               'kategori' =>$fakta,
                                'tp' => 1,
                                'fp'=>0,
                                'tn'=>0,
                                'fn'=>0);
            $this->Mod_dataklasifikasi->insert_prediksi('prediksi',$save_hasil);

            $sql_tp="SELECT count(tp) as total_tp from prediksi where tp=1 and keaktifan=1";
            $sql_fp="SELECT count(fp) as total_fp from prediksi where fp=1 and keaktifan=1";
            $sql_tn="SELECT count(tn) as total_tn from prediksi where tn=1 and keaktifan=1";
            $sql_fn="SELECT count(fn) as total_fn from prediksi where fn=1 and keaktifan=1";
            
            ///tp
            $tpCount=$this->db->query($sql_tp);
            $Counttp=$tpCount->row_array();
            ///fp
            $fpCount=$this->db->query($sql_fp);
            $Countfp=$fpCount->row_array();
            ///tn
            $tnCount=$this->db->query($sql_tn);
            $Counttn=$tnCount->row_array();
            ///fn
            $fnCount=$this->db->query($sql_fn);
            $Countfn=$fnCount->row_array();
            ///
            $hasil_tp=$Counttp['total_tp'];
            $hasil_fp=$Countfp['total_fp'];
            $hasil_tn=$Counttn['total_tn'];
            $hasil_fn=$Countfn['total_fn'];
            ///akurasi
            $akurasi=($hasil_tp+$hasil_tn)/($hasil_tp+$hasil_tn+$hasil_fp+$hasil_fn)*100;
            $data['akurasi']=number_format($akurasi,2)."%";
            
            ///presisi
            $presisi=($hasil_tp/($hasil_tp+$hasil_fn))*100;
            $data['presisi']=number_format($presisi,2)."%";
            
            ///recall
            $recall=($hasil_tp/($hasil_tp+$hasil_fp))*100;
            $data['recall']=number_format($recall,2)."%";
        
			$this->load->view('klasifikasi/detail_klasifikasi',$data);
        }
		
        else if($pars=="Menonton" && $fakta=="Travelling"){
            $save_hasil= array('nama_pengguna' => $nama_pengguna,
							   'jenis' => $jenis,
                               'keaktifan' =>1,
                               'kategori' =>$fakta,
                                'tp' => 0,
                                'fp'=>1,
                                'tn'=>0,
                                'fn'=>0);
            $this->Mod_dataklasifikasi->insert_prediksi('prediksi',$save_hasil);

            $sql_tp="SELECT count(tp) as total_tp from prediksi where tp=1 and keaktifan=1";
            $sql_fp="SELECT count(fp) as total_fp from prediksi where fp=1 and keaktifan=1";
            $sql_tn="SELECT count(tn) as total_tn from prediksi where tn=1 and keaktifan=1";
            $sql_fn="SELECT count(fn) as total_fn from prediksi where fn=1 and keaktifan=1";
            
            ///tp
            $tpCount=$this->db->query($sql_tp);
            $Counttp=$tpCount->row_array();
            ///fp
            $fpCount=$this->db->query($sql_fp);
            $Countfp=$fpCount->row_array();
            ///tn
            $tnCount=$this->db->query($sql_tn);
            $Counttn=$tnCount->row_array();
            ///fn
            $fnCount=$this->db->query($sql_fn);
            $Countfn=$fnCount->row_array();
            ///
            $hasil_tp=$Counttp['total_tp'];
            $hasil_fp=$Countfp['total_fp'];
            $hasil_tn=$Counttn['total_tn'];
            $hasil_fn=$Countfn['total_fn'];
            ///akurasi
            $akurasi=($hasil_tp+$hasil_tn)/($hasil_tp+$hasil_tn+$hasil_fp+$hasil_fn)*100;
            $data['akurasi']=number_format($akurasi,2)."%";
            
            ///presisi
            $presisi=($hasil_tp/($hasil_tp+$hasil_fn))*100;
            $data['presisi']=number_format($presisi,2)."%";
            
            ///recall
            $recall=($hasil_tp/($hasil_tp+$hasil_fp))*100;
            $data['recall']=number_format($recall,2)."%";

            ///insert into datasetku_prediksi tabel
            $list_predik = array('jenis' =>$jenis ,
                                 'kategori'=>$fakta,
                                 'keaktifan'=> 1);
            $this->Mod_dataklasifikasi->insert_list_prediksi('list_prediksi',$list_predik);
            ///insert to tabel klasifikasi
            foreach ($separate as $value) {
                $sql = "SELECT count(*) as total FROM klasifikasii where stem='$value' and kategori='$fakta'";
                $query=$this->db->query($sql);
                $count = $query->result_array();
                   
                foreach ($count as $key) {
                        
                   if ($key['total'] > 0) {
                        $save_count = "UPDATE klasifikasii set count = count + 1 where stem = '$value'";
                        $save_s=$this->db->query($save_count);
                    } else {
                         $save_klasifikasi = array('stem' => $value,
                                        'count'=>1,
                                        'kategori'=>$fakta,
                                        'keaktifan'=>1,
                                        'prediksi'=>$pars,
                                        'fakta'=>$fakta );
                        $this->Mod_dataklasifikasi->insert_klasifikasi('klasifikasii',$save_klasifikasi);
                    }
                }
             }
            
			 $this->load->view('klasifikasi/detail_klasifikasi',$data);
         }

      }
            
        
            
    }
         else{
             $data['message']="";
             $data['kategori']=$this->Mod_dataklasifikasi->getAll_kat()->result();
             $data['kategori_hobi']="";
             $data['akurasi']=""; 
            
$this->load->view('klasifikasi/klasifikasi_data',$data);			 
          }
       }

    }

	public function laporan(){
		$data['datasetku']=$this->Mod_dataklasifikasi->get_All_prediksi();
	
		$this->load->view('laporan/laporan_klasifikasi',$data);		
	}

    function akurasi(){
        $sql_tp="SELECT count(tp) as total from prediksi where tp=1 and keaktifan=1";
        $sql_fp="SELECT count(fp) as total from prediksi where fp=1 and keaktifan=1";
        $sql_tn="SELECT count(tn) as total from prediksi where tn=1 and keaktifan=1";
        $sql_fn="SELECT count(fn) as total from prediksi where fn=1 and keaktifan=1";

        //tp
        $tpCount=$this->db->query($sql_tp);
        $Counttp=$tpCount->row_array();
        $hasiltp=$Counttp['total'];
        //fp
        $fpCount=$this->db->query($sql_fp);
        $Countfp=$fpCount->row_array();
        $hasilfp=$Countfp['total'];
        //tn
        $tnCount=$this->db->query($sql_tn);
        $Counttn=$tnCount->row_array();
        $hasiltn=$Counttn['total'];
        //fn
        $fnCount=$this->db->query($sql_fn);
        $Countfn=$fnCount->row_array();
        $hasilfn=$Countfn['total'];

        //akurasi
        $hasil_akurasi=($hasiltp+$hasiltn)/($hasiltp+$hasiltn+$hasilfp+$hasilfn)*100;

        //presisi
        $positif_presisi = $hasiltp/($hasiltp+$hasilfn)*100;
        $negatif_presisi = $hasiltn/($hasiltn+$hasilfp)*100;
        //recall
        $positif_recall = $hasiltp/($hasiltp+$hasilfp)*100;
        $negatif_recall = $hasiltn/($hasiltn+$hasilfn)*100;

        $total_presisi = (($positif_presisi+$negatif_presisi)/2);
        $total_recall = (($positif_recall+$negatif_recall)/2);

        $data['akurasi']=number_format($hasil_akurasi,2)."%";
        $data['P_presisi']=number_format($positif_presisi,2)."%";
        $data['N_presisi']=number_format($negatif_presisi,2)."%";
        $data['P_recall']=number_format($positif_recall,2)."%";
        $data['N_recall']=number_format($negatif_recall,2)."%";
        $data['T_presisi']=number_format($total_presisi,2)."%";
        $data['T_recall']=number_format($total_recall,2)."%";
        

		$this->load->view('laporan/akurasii',$data);		
    }

	public function _set_rules(){
        //$this->form_validation->set_rules('kategori-harap','Hasil yang Diharapkan','required|trim');
        $this->form_validation->set_rules('jenis','Jenis','required|trim');
        $this->form_validation->set_rules('cuitan','Cuitan','required|trim');
        $this->form_validation->set_message('required', '{field} kosong, silahkan diisi');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a>","</div>");
    }

}

?>