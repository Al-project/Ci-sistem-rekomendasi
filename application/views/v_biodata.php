<?php
	$this->load->view('header_v');
?>



<!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
	
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Isi Biodata Mu</h2>
        </div>
        <div class="col-lg-8">
		  <form action="<?=base_url('sign_bio/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
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
			<label for="status_kegiatan">Kegiatan Anda : </label>
			<select class="form-control"  name="status_kegiatan" id="status_kegiatan">
         <option value="Pelajar">Pelajar</option>
    <option value="Mahasiswa">Mahasiswa</option>
    <option value="Pekerja">Pekerja</option>
      </select>
	  </div>
	  </div>
	  
	
			<div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap"> Umur Anda:</label>
				  <input type="text" name="umur" class="form-control" placeholder="Umur Anda">
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
                  <label for="email"> Email Anda:</label>
				 <input type="text" class="form-control" name="email" placeholder="Email or Username">
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="photo_anda"> Upload Photo Profile Anda:</label>
				 <input type="file" name="photo">
                </div>
              </div>
              
            </div>
            <div class="form-group mt-3">
			  <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>	||
			  
			  <input type="Reset" name="reset"  class="btn btn-primary" value="Hapus"/>
	
			
            </div>
			
          </form>
		  
        </div>
    </div>
	
  </section>
  
  <!-- ================ contact section end ================= -->
  
  <?php
	$this->load->view('footer_v');
?>



