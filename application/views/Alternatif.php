<?php
	$this->load->view('header_admin');
?>    

	<div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Panel
                        <small>Alternatif</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?= base_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Alternatif</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row" id="tambahAlternatif">
                        <div class="col-lg-6">
                            <div class="box box-primary">
                                <div class="box-header">Tambah Alternatif</div>
                                <div class="box-body">
                                    <form class="form-horizontal" id="formTambah">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kode Uji</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kode_uji" name="kode_uji" placeholder="Kode Uji">                                                
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nama Pengguna</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Pengguna">                                                
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Jenis Hobi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="jenis_hobi" name="jenis_hobi" placeholder="Jenis Hobi">                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Status</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="status_kegiatan" name="status_kegiatan" placeholder="Status Pengguna">                                                
                                            </div>
                                        </div>
                                       
                                    </form>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-primary" id="simpanAlternatif">Save &nbsp; <i class='glyphicon glyphicon-circle-arrow-right'></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="editAlternatif" hidden>
                        <div class="col-lg-6">
                            <div class="box box-primary">
                                <div class="box-header">Edit Alternatif
                                    <button type="button" class="btn btn-danger btn-sm pull-right" id="cancelUpdate">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <div class="box-body">
                                    <form class="form-horizontal" id="formUpdate">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Kode Uji</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="uji_edit" name="kode_uji" placeholder="Kode Uji Pengguna" readonly>                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Nama Lengkap</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_edit" name="nama_lengkap" placeholder="Nama Pengguna">                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Hobi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="hobi_edit" name="jenis_hobi" placeholder="Hobi Pengguna">                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Status Kegiatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="status_edit" name="status_kegiatan" placeholder="Status">                                                
                                            </div>
                                        </div>
                                         </form>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-success" id="updateAlternatif">Update &nbsp; <i class='glyphicon glyphicon-refresh'></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box box-primary">
                                <div class="box-header">Daftar Alternatif</div>
                                <div class="box-body" id="daftarAlternatif">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            
        </div>
        <script src="<?= base_url('assetss/assets/js/jquery-2.2.4.js') ?>"></script>
        <script src="<?= base_url('assetss/assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assetss/assets/js/app.min.js') ?>"></script>
        <script type="text/javascript" language="javascript" src="<?= base_url('assetss/assets/js/jquery.toast.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                //Mencegah User Melakukan Submit Form dengan Menekan tombol enter
                $(window).keydown(function (event) {
                    if (event.keyCode == 13) {
                        event.preventDefault();
                        return false;
                    }
                });
                //Reload Data Table
                $('#daftarAlternatif').load('<?= base_url('alternatif/lihat_alternatif') ?>');
                //Jika Tombol Close Update Ditekan
                $('#cancelUpdate').click(function () {
                    console.log('test');
                    $('#editAlternatif').fadeOut(1000, function () {
                        $('#tambahAlternatif').fadeIn();
                    });
                });
                //Tombol Simpan Alternatif
                $('#simpanAlternatif').click(function () {
                    var data = $('#formTambah').serialize();
                    $.ajax({
                        url: '<?= base_url('alternatif/tambah_alternatif') ?>',
                        data: data,
                        type: 'post',
                        dataType: 'json',
                        cache: false,
                        success: function (response) {
                            $.toast({
                                heading: 'Information',
                                text: response.message,
                                position: 'bottom-right',
                                stack: false,
                                showHideTransition: 'slide',
                                icon: response.status
                            });
                        },
                        failed: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status);
                            alert(thrownError);
                            alert(xhr.responseText);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status);
                            alert(thrownError);
                            alert(xhr.responseText);
                        },
                        complete: function () {
                            //Mengosongkan isi Field Form
                            $('#tambahAlternatif').fadeOut(1000, function () {
                                $('#kode_uji').val("");
                                $('#nama_lengkap').val("");
                                $('#jenis_hobi').val("");
                                $('#status_kegiatan').val("");
                               
                                $('#tambahAlternatif').fadeIn(1000);
                            });
                            //Reload Data Table
                            //Load Table
                            $('#daftarAlternatif').load('<?= base_url('alternatif/lihat_alternatif') ?>');
                        }
                    });
                });
                //Tombol Update Alternatif
                $('#updateAlternatif').click(function () {
                    var data = $('#formUpdate').serialize();
                    $.ajax({
                        url: '<?= base_url('alternatif/edit_alternatif') ?>',
                        data: data,
                        type: 'post',
                        cache: false,
                        dataType: 'json',
                        success: function (response) {
                            $.toast({
                                heading: 'Information',
                                text: response.message,
                                position: 'bottom-right',
                                stack: false,
                                showHideTransition: 'slide',
                                icon: response.status
                            });
                        },
                        failed: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status);
                            alert(thrownError);
                            alert(xhr.responseText);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status);
                            alert(thrownError);
                            alert(xhr.responseText);
                        },
                        complete: function () {
                            $('#editAlternatif').fadeOut(1000, function () {
                                //Isi value input data dari variabel DOM
                                $('#uji_edit').val("");
                                $('#nama_edit').val("");
                                $('#hobi_edit').val("");
                                $('#status_edit').val("");
                              
                                //Tampilkan panel Edit Alternatif
                                $('#tambahAlternatif').fadeIn(1000);
                            });
                            //Reload Data Table
                            $('#listAlternatif').fadeOut(1000, function () {
                                //Load Table
                                $('#daftarAlternatif').load('<?= base_url('alternatif/lihat_alternatif') ?>', function () {
                                    //Jika Sudah Terload, Tampilkan Tabel
                                    $('#listAlternatif').fadeIn(1000);
                                });
                            });
                        }
                    });
                });
            });
            //Jika tombol edit ditable diklik
            $(document).on('click', '.editAlternatif', function () {
                //Ambil data DOM dan simpan di variabel
                var kode_uji = $(this).attr('data-kode_uji');
                var nama_lengkap = $(this).attr('data-nama_lengkap');
                var jenis_hobi = $(this).attr('data-jenis_hobi');
                var status_kegiatan = $(this).attr('data-status_kegiatan');
                
                //Hide Panel TambahALternatif
                $('#tambahAlternatif').fadeOut(1000, function () {
                    //Hide Panel Edit Alternatif
                    $('#editAlternatif').fadeOut(1000, function () {
                        //Isi value input data dari variabel DOM
                        $('#uji_edit').val(kode_uji);
                        $('#nama_edit').val(nama_lengkap);
                        $('#hobi_edit').val(jenis_hobi);
                        $('#status_edit').val(status_kegiatan);
                       
                        //Tampilkan panel Edit Alternatif
                        $('#editAlternatif').fadeIn(1000);
                    });
                });
            });
            $(document).on('click', '.hapusAlternatif', function () {
                var kode_uji = $(this).attr('data-kode_uji');
                $.ajax({
                    url: '<?= base_url('alternatif/hapus_alternatif') ?>',
                    data: 'kode_uji=' + kode_uji,
                    type: 'post',
                    dataType: 'json',
                    cache: false,
                    success: function (response) {
                        $.toast({
                            heading: 'Information',
                            text: response.message,
                            position: 'bottom-right',
                            stack: false,
                            showHideTransition: 'slide',
                            icon: response.status
                        });
                    },
                    failed: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                        alert(xhr.responseText);
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                        alert(xhr.responseText);
                    },
                    complete: function () {
                        //Reload Data Table
                        $('#listAlternatif').fadeOut(1000, function () {
                            //Load Table
                            $('#daftarAlternatif').load('<?= base_url('alternatif/lihat_alternatif') ?>', function () {
                                //Jika Sudah Terload, Tampilkan Tabel
                                $('#listAlternatif').fadeIn(1000);
                            });
                        });
                    }
                });
            });
        </script>
    </body>
</html>
