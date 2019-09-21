<?php
	$this->load->view('header_v');
?>



<!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
	
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Isi Data Mu </h2>
        </div>
        <div class="col-lg-8">
		  <form action="<?=base_url('Create_data_twitter/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                 <label for="Hobie">Kode Pendaftaran Pengguna</label>
				<input type="text" class="form-control" name="kode_hobi" placeholder="Kode Pendaftaran Pengguna" value="<?php echo $kode; ?>" readonly="readonly">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap">Nama Lengkap Anda:</label>
				  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap Anda">
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap"> Username Twitter Anda:</label>
				  <input type="text" name="nama_twitter" class="form-control" placeholder="Gunakan || @">
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap"> Umur Anda:</label>
				  <input type="text" name="umur" class="form-control" placeholder="Umur Anda">
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
			  
             
            <div class="form-group mt-3">
			  <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i> Simpan</button>		||
			  <button type="Reset" name="reset" class="btn btn-primary"><i class="glyphicon glyphicon-trash"></i>Hapus</button>
	
			
            </div>
          </form>
        </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
  
  <?php
	$this->load->view('footer_v');
?>

