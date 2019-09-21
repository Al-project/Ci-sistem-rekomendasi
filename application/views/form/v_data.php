<?php
	$this->load->view('header_v');
?>



<!-- ================ form tidak punya twitter section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
	
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Isikan Form Mu</h2>
        </div>
        <div class="col-lg-8">
		  <form action="<?=base_url('form_bio/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
		  <link href="<?php echo base_url(); ?>assets/css/atas.css">
	 
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                 <label for="Hobie">Kode Pendaftaran Hobi</label>
				<input type="text" class="form-control" name="kode_hobi" placeholder="Kode Pendaftaran Hobi" value="<?php echo $kode; ?>" readonly="readonly">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap">Nama Lengkap Anda:</label>
				  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap Anda">
                </div>
              </div>
			  
		<div class="form-group">
			<label for="jenis_kelamin">Jenis Kelamin Anda:</label>
			<select class="form-control"  name="jenis_kelamin" id="jenis_kelamin">
        <option value="Perempuan">Perempuan</option>
        <option value="Laki-Laki">Laki-Laki</option>
      </select>
	  </div>
	  </div>
	
	<div class="form-group">
			<label for="status_kegiatan">Jenis Kelamin Anda:</label>
			<select class="form-control"  name="status_kegiatan" id="status_kegiatan">
       <option value="Pilih">Pilih Kegiatan Anda:</option>
		<option value="Pelajar">Pelajar</option>
		<option value="Mahasiswa">Mahasiswa</option>
		<option value="Pekerja">Pekerja</option>
      </select>
	  </div>
	  </div>
	
		
		<div class="col-sm-6">
        <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir Anda:</label>
		<input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir Anda">
        </div>
        </div>
			  
		<div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap">Hobi Anda:</label>
				  <input type="text" name="hobi" class="form-control" placeholder="Hobi Anda">
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="email"> Email Anda:</label>
				 <input type="text" class="form-control" name="email" placeholder="Email or Username">
                </div>
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
  
  <!-- ================ form tidak punya section end ================= -->
  
  <?php
	$this->load->view('footer_v');
?>



