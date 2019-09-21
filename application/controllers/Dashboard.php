<?php
class Dashboard extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('model_kriteria');
        $this->load->model('model_subkriteria');
        $this->load->model('model_alternatif');
		 $this->load->model(array('Mod_data','Mod_kategori','Mod_klasifikasi'));
    }

    public function index(){
        $data['kriteria']=$this->model_kriteria->count_kriteria();
        $data['subkriteria']=$this->model_subkriteria->count_subkriteria();
        $data['alternatif']=$this->model_alternatif->count_alternatif();
		 $data['akurasi']=$this->_akurasi();  
        $data['dataset'] = $this->Mod_data->total_dataset();
        $data['restore']=$this->Mod_kategori->total_temp();
        $this->load->view('Dashboard',$data);
    }
	
	function _akurasi(){
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

        return number_format($hasil_akurasi,2)."%";

    }
        
    
}
