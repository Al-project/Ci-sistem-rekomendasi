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
		  <form action="<?=base_url('Akhir_Data/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                 <label for="Hobie">Kode Hobi</label>
				<input type="text" class="form-control" name="kode_hobi" placeholder="Kode Pendaftaran Pengguna" value="<?php echo $kode; ?>" readonly="readonly">
                </div>
              </div>
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
                  <label for="nama_lengkap"> Vektor X:</label>
				  <input type="text" name="vektor_x" class="form-control">
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap"> Vektor V:</label>
				  <input type="text" name="vektor_v" class="form-control">
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
  <section class="contact-section section_padding">
    <div class="container">
	
<div class="rows">    
		<div class="col-sm-12">
			
			<h2 class="tekstit"><center>Hasil Jarak</center></h2>
			<hr>
		</div>
	</div>
	
	<div class="rows">    
		<div class="col-sm-12">
		<table class="table table-striped">
		 <th colspan="6"><br>
		  </br></th>
	
		<tr>
			<th>No</th>
			<th>Kode Hobi</th>
			<th>Hobi</th>
			<th>Nama</th>
			<th>Vektor X</th>
			<th>Vektor V</th>
			<th>Jarak</th>
		</tr>
		<?php 
		$no = 1;
		// foreach($cobaan as $u){
		for($i = 0; $i < count($cobaan); $i++) {
			if($i == count($cobaan) - 1) {
				$cobaan[$i]->jarak = sqrt(pow($cobaan[$i]->vektor_x - $cobaan[1]->vektor_x,2) + pow($cobaan[$i]->vektor_v - $cobaan[0]->vektor_v,2));
			} else {			
				$cobaan[$i]->jarak = sqrt(pow($cobaan[$i]->vektor_x - $cobaan[$i+1]->vektor_x,2) + pow($cobaan[$i]->vektor_v - $cobaan[$i+1]->vektor_v,2));
			}
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $cobaan[$i]->kode_hobi ?></td>
			<td><?php echo $cobaan[$i]->hobi ?></td>
			<td><?php echo $cobaan[$i]->nama_pengguna ?></td>
			<td><?php echo $cobaan[$i]->vektor_x ?></td>
			<td><?php echo $cobaan[$i]->vektor_v ?></td>
			<td><?php echo $cobaan[$i]->jarak ?></td>
		</tr>
			 
		
		<?php } ?>
	</table>
	 </div>
  </section>