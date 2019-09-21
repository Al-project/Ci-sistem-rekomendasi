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
            <li><a href="<?php echo base_url('klasifikasi'); ?>">Klasifikasi</a></li>
			 <li><a href="<?php echo base_url('klasifikasii'); ?>">Klasifikasi 2</a></li>
            <li class="active">Klasifikasi</li>
			
        </ol>

        <?php
            echo validation_errors();
            //buat message 
            if(!empty($message)) {
            echo $message;
            }
        ?>

    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="panel panel-default">

            <div class="panel-heading">
                Create Users
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            <?php
                //validasi error upload
                if(!empty($error)) {
                    echo $error;
                }
            ?>
            
            <?php echo form_open_multipart('klasifikasi/klasifikasi', array('class' => 'form-horizontal')) ?>
			
			<div class="form-group">
                    <p class="col-sm-2 text-left">Nama Pengguna</p>

                    <div class="col-sm-10">
                       <input type="text" name="nama_pengguna" class="form-control" placeholder="Nama Lengkap Anda">
                </div>
				</div>
			
                <div class="form-group">
                    <p class="col-sm-2 text-left">Cuitan Pertama</p>

                    <div class="col-sm-10">
                        <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Masukan Jenis Dalam Bahasa Indonesia" value="<?php echo set_value('Jenis'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Cuitan Lainnya</p>

                    <div class="col-sm-10">
                        <textarea type="text" name="cuitan" id="cuitan" class="form-control" rows="14" value="<?php echo set_value('Cuitan'); ?>"> </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-3 text-left">
                        Hasil Yang Diharapkan</p>
                    <select name="kategori-harap" id="kategori-harap">
                        <option value="- Pilih Kategori -">- Pilih Kategori -</option>
                        <?php
                            foreach ($kategori as $baris) {
                     
                                echo "<option value='".$baris->kategori."'>".$baris->kategori."</option>";
                               
                            }
                             
                        ?>
                        </select> 
                        <?php echo "Jika Tidak Memilih Kategori (- Pilih Kategori-) Secara Default Prediksi sistem bernilai benar"; ?>

                        
                </div>

                <div class="form-group">

                    
                </div>

                <div class="col-sm-6">
                        <div class="btn-group pull-right">
                            <input type="submit" name="klasifikasi" value="Klasifikasi" class="btn btn-success btn-sm">
                        </div>
                </div>

                </br>
                <br>
            </form>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>



<!-- jQuery -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Datepicker -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/js/bootstrap-datepicker.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Datepicker -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/js/tinymce/tinymce.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>
<!-- For Costum textarea like word-->
<script type="text/javascript">
    function pilih(form){
        if (form.kategori-harap.value=="- Pilih Kategori -") {
            alert("Anda tidak memilih kategori yang diharapkan maka secara otomatis sistem akan mendeklarasikan bahwa <strong> prediksi bernilai benar</strong>, hal ini akan berpengaruh pada akurasi");
            return(false);
        }
        return(true);
    }
</script>
