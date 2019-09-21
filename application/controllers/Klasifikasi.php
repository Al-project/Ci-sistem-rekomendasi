<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';
class Klasifikasi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_klasifikasi');
    }

    public function index()
    {
        $data['kategori']=$this->Mod_klasifikasi->getAll_kat()->result();
        
        
        if($this->uri->segment(3)=="create-success") {
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Disimpan...!</p></div>";    
           $this->load->view('klasifikasi/klasifikasi_index',$data); 
        }
        else if($this->uri->segment(3)=="update-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Update...!</p></div>"; 
            $this->load->view('klasifikasi/klasifikasi_index',$data); 
        }
        else if($this->uri->segment(3)=="delete-success"){
            $data['message'] = "<div class='alert alert-block alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><strong><i class='icon-ok'></i>Data</strong> Berhasil Dihapus...!</p></div>"; 
			$this->load->view('klasifikasi/klasifikasi_index',$data); 
        }
        else{
            $data['message'] = "";
           $this->load->view('klasifikasi/klasifikasi_index',$data); 
        }
        
    }

    public function klasifikasi()
    {
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();

        $stopwordFactory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
        $stopWord = $stopwordFactory->createStopWordRemover();

        if (isset($_POST['klasifikasi'])) {

            $this->_set_rules();
            if ($this->form_validation->run()==true) {
                $jenis=$this->input->post('jenis');
                $cuitan=$this->input->post('cuitan');
                $prediksi=$this->input->post('kategori');
				$nama_pengguna=$this->input->post('nama_pengguna');
                $fakta=$this->input->post('kategori-harap');

                $cek_jenis=$this->Mod_klasifikasi->cek_jenis($jenis);
                if($cek_jenis->num_rows() > 0){
                    $data['message'] = "<div class='alert alert-block alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <p><strong><i class='icon-ok'></i>Cuitan Anda</strong> Sudah Diklasifikasikan!</p></div>"; 
                    $data['kategori']=$this->Mod_klasifikasi->getAll_kat()->result();
                   $this->load->view('klasifikasi/klasifikasi_index',$data); 
                }
                else{
            $remover=$stopWord->remove($jenis." ".$cuitan);
            $output=$stemmer->stem($remover);

            $separate=explode(" ", $output);

            ////
        $count_olahraga="SELECT count(*) as total FROM list WHERE kategori='olahraga' AND keaktifan='1'";
        $count_prediksi_olahraga="SELECT count(*) as total2 FROM list_prediksi WHERE kategori='olahraga' AND keaktifan='1'";
        //
        $olahragaCount=$this->db->query($count_olahraga);
        $countOlahraga = $olahragaCount->row_array();
        $pars_ola=$countOlahraga['total'];
        //
        $olahragaCount2=$this->db->query($count_prediksi_olahraga);
        $countOlahraga2 = $olahragaCount2->row_array();
        $pars_olah2=$countOlahraga2['total2'];
        //
        $hasilOlahraga=$pars_ola+$pars_olah2;

        /////
        $count_musikan="SELECT count(*) as total FROM list WHERE kategori='musikan' AND keaktifan='1'";
        $count_prediksi_musikan="SELECT count(*) as total2 FROM list_prediksi WHERE kategori='musikan' AND keaktifan='1'";
        //
        $musikanCount=$this->db->query($count_musikan);
        $countMusikan = $musikanCount->row_array();
        $pars_musikan= $countMusikan['total'];
        //
        $musikanCount2=$this->db->query($count_prediksi_musikan);
        $countMusikan2 = $musikanCount2->row_array();
        $pars_musikan2=$countMusikan2['total2'];
        //
        $hasilMusikan=$pars_musikan+$pars_musikan2;


        ///
        $count_total="SELECT count(*) as total FROM list where keaktifan='1'";
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

        ///p(olahraga)
        $pOlahraga=$hasilOlahraga/$hasilTotal;
        ///p(musikan)
        $pMusikan=$hasilMusikan/$hasilTotal;
        

        $sql="SELECT count(*) as total FROM stem where keaktifan='1'";
        $sql_klasifikasi="SELECT count(*) as total_klasifikasi from klasifikasi where keaktifan='1'";
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


        $bodyOlahraga=log($pOlahraga);
        foreach ($separate as $value) {
            $sql = "SELECT count as total FROM stem where stem='$value' and kategori='Olahraga' AND keaktifan='1'"; 
            $sql_kl = "SELECT count as total_kl from klasifikasi where stem='$value' and kategori='Olahraga' and keaktifan='1'";
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
            $bodyOlahraga*=log(($hasilCount+1)/($hasilOlahraga+$hasilstem)); 
        }

        ////
        $bodyMusikan=log($pMusikan);
        foreach ($separate as $value) {
            $sql = "SELECT count as total FROM stem where stem='$value' and kategori='Musikan' AND keaktifan='1'"; 
            $sql_kl = "SELECT count as total_kl from klasifikasi where stem='$value' and kategori='Musikan' and keaktifan='1'";
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
            $bodyMusikan*=log(($hasilCount+1)/($hasilOlahraga+$hasilstem)); 
        }

        if($bodyOlahraga>=$bodyMusikan){
        $data['kode_hobi']='Olahraga';
        }
        elseif ($bodyMusikan>=$bodyOlahraga) {
           $data['kode_hobi']='Musikan';
        }
        
        $pars=$data['kode_hobi'];
        
        if ($fakta=="- Pilih Kategori -") {
            $fakta=$pars;
        }
        else{
            $fakta=$this->input->post('kategori-harap');

        }

        if($pars=="Olahraga" && $fakta=="Olahraga"){ 

            $save_hasil= array('nama_pengguna' => $nama_pengguna,
								'jenis' => $jenis,
                                'keaktifan'=>1,
                               'kategori' =>$fakta,
                                'tp' => 1,
                                'fp'=>0,
                                'tn'=>0,
                                'fn'=>0);
            $this->Mod_klasifikasi->insert_prediksi('prediksi',$save_hasil);

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
            
			$this->load->view('klasifikasi/klasifikasi_detail',$data); 
        }
        else if($pars=="Musikan" && $fakta=="Olahraga"){
            $save_hasil= array('nama_pengguna' => $nama_pengguna,
								'jenis' => $jenis,
                               'keaktifan' =>1,
                               'kategori' =>$fakta,
                                'tp' => 0,
                                'fp'=>1,
                                'tn'=>0,
                                'fn'=>0);
            $this->Mod_klasifikasi->insert_prediksi('prediksi',$save_hasil);

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
            $this->Mod_klasifikasi->insert_list_prediksi('list_prediksi',$list_predik);
            ///insert to klasifikasi tabel
            foreach ($separate as $value) {
                $sql = "SELECT count(*) as total FROM klasifikasi where stem='$value' and kategori='$fakta'";
                $query=$this->db->query($sql);
                $count = $query->result_array();
                   
                foreach ($count as $key) {
                        
                   if ($key['total'] > 0) {
                        $save_count = "UPDATE klasifikasi set count = count + 1 where stem = '$value'";
                        $save_s=$this->db->query($save_count);
                    } else {
                         $save_klasifikasi = array('stem' => $value,
                                        'count'=>1,
                                        'kategori'=>$fakta,
                                        'keaktifan'=>1,
                                        'prediksi'=>$pars,
                                        'fakta'=>$fakta );
                        $this->Mod_klasifikasi->insert_klasifikasi('klasifikasi',$save_klasifikasi);
                    }
                }
             }

            
          
			$this->load->view('klasifikasi/klasifikasi_detail',$data); 
        }
        else if($pars=="Musikan" && $fakta=="Musikan"){
            $save_hasil= array('nama_pengguna' => $nama_pengguna,
								'jenis' => $jenis,
                               'keaktifan' =>1,
                               'kategori' =>$fakta,
                                'tp' => 0,
                                'fp'=>0,
                                'tn'=>1,
                                'fn'=>0);
            $this->Mod_klasifikasi->insert_prediksi('prediksi',$save_hasil);

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
            
			$this->load->view('klasifikasi/klasifikasi_detail',$data); 
        }
        else if($pars=="Musikan" && $fakta=="Olahraga"){
            $save_hasil= array('nama_pengguna' => $nama_pengguna,
			'jenis' => $jenis,
                               'keaktifan' =>1,
                               'kategori' =>$fakta,
                                'tp' => 0,
                                'fp'=>0,
                                'tn'=>0,
                                'fn'=>1);
            $this->Mod_klasifikasi->insert_prediksi('prediksi',$save_hasil);

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
            $this->Mod_klasifikasi->insert_list_prediksi('list_prediksi',$list_predik);
            ///insert to tabel klasifikasi
            foreach ($separate as $value) {
                $sql = "SELECT count(*) as total FROM klasifikasi where stem='$value' and kategori='$fakta'";
                $query=$this->db->query($sql);
                $count = $query->result_array();
                   
                foreach ($count as $key) {
                        
                   if ($key['total'] > 0) {
                        $save_count = "UPDATE klasifikasi set count = count + 1 where stem = '$value'";
                        $save_s=$this->db->query($save_count);
                    } else {
                         $save_klasifikasi = array('stem' => $value,
                                        'count'=>1,
                                        'kategori'=>$fakta,
                                        'keaktifan'=>1,
                                        'prediksi'=>$pars,
                                        'fakta'=>$fakta );
                        $this->Mod_klasifikasi->insert_klasifikasi('klasifikasi',$save_klasifikasi);
                    }
                }
             }
            
			 $this->load->view('klasifikasi/klasifikasi_detail',$data); 
         }

      }
            
        
            
    }
         else{
             $data['message']="";
             $data['kategori']=$this->Mod_klasifikasi->getAll_kat()->result();
             $data['kode_hobi']="";
             $data['akurasi']=""; 
             
			 $this->load->view('klasifikasi/klasifikasi_index',$data); 
          }
       }

    }

	public function laporan(){
		$data['list']=$this->Mod_klasifikasi->get_All_prediksi();
		
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
        
      
		$this->load->view('laporan/akurasi',$data); 
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