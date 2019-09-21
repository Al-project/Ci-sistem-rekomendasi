<?php
	$this->load->view('header_admin');
?>    

	<div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Panel
                        <small>Eksekusi Data</small>
                    </h1>


<div class="row">
    <div class="col-lg-12"><br />
       
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('tulis_akhir/tambah_aksi'); ?>">Laporan Detail </a></li>
			<li><a href="<?php echo base_url('chart/index'); ?>">Lihat_grafik</a></li>
        </ol>
		
		
            
      
        <?php
        if(!empty($message)){
            echo "$message";
        }
        ?>

    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
	
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title"> Data Jarak </h2>
        </div>
        <div class="col-lg-8">
		  <form action="<?=base_url('Tulis_akhir/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap">Hobi:</label>
				  <input type="text" name="hobi" class="form-control" placeholder="Hobi Pengguna">
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap"> Nama Pengguna:</label>
				  <input type="text" name="nama_pengguna" class="form-control" placeholder="Nama Lengkap Anda">
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap"> Jarak :</label>
				  <input type="text" name="jarak" class="form-control">
                </div>
              </div>
			  
             
            <div class="form-group mt-3">
			  <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i> Simpan</button>		||
			  <button type="Reset" name="reset" class="btn btn-primary"><i class="glyphicon glyphicon-trash"></i>Hapus</button>
	
			
            </div>
          </form>
        </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
  
  </section>