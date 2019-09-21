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
            <li><a href="<?php echo base_url('klasifikasi/akurasi'); ?>">Laporan Detail Akurasi</a></li>
			<li><a href="<?php echo base_url('Kode_otomatis/index'); ?>">Input Data Hasil</a></li>
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
          <h2 class="contact-title">Isi Data Mu </h2>
        </div>
        <div class="col-lg-8">
		  <form action="<?=base_url('Kode_otomatis/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
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
				  <input type="text" name="nama_pengguna" class="form-control" placeholder="Nama Lengkap Anda">
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap"> Jenis Hobi Pengguna:</label>
				  <input type="text" name="jenis_hobi" class="form-control" placeholder="Nama Lengkap Anda">
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap"> Hasil Akurasi:</label>
				  <input type="text" name="akurasi" class="form-control" placeholder="Nama Lengkap Anda">
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap"> Hasil Presisi:</label>
				  <input type="text" name="presisi" class="form-control" placeholder="Nama Lengkap Anda">
                </div>
              </div>
			  
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap"> Hasil Recall:</label>
				  <input type="text" name="recall" class="form-control" placeholder="Nama Lengkap Anda">
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
  
 

<!-- jQuery -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#dataTables-example').DataTable({
            responsive:true;
        });
    });
</script>

<script type="text/javascript">
    $(function(){
        $(".restore").click(function(){
            var kategori=$(this).attr("kategori");
            
            $.ajax({
                url:"<?php echo site_url('kategori/restore');?>",
                type:"POST",
                data:"kategori="+kategori,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('kategori/index/create-success');?>";
                }
            });
        });
    });
</script>