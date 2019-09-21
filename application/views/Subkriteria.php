<?php
	$this->load->view('header_admin');
?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Panel
                        <small>SubKriteria</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href=<?= base_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">SubKriteria</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row" id="tambahSubkriteria">
                        <div class="col-lg-6">
                            <div class="box box-primary">
                                <div class="box-header">Tambah SubKriteria</div>
                                <div class="box-body">
                                    <form class="form-horizontal" id="formTambah">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kriteria</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id='tambah_id' name="id_kriteria">
                                                    <?php
                                                    foreach ($data_kriteria->result() as $row) {
                                                        echo "<option value='" . $row->id_kriteria . "'>" . $row->id_kriteria . " - " . $row->nama_kriteria . "</option>";
                                                    }
                                                    ?>
                                                </select>                                             
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Kriteria</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nama_subkriteria" placeholder="Nama SubKriteria" id='tambah_nama'>                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-primary" id="simpanSubkriteria">Simpan &nbsp; <i class="glyphicon glyphicon-chevron-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="updateSubkriteria" hidden>
                        <div class="col-lg-6">
                            <div class="box box-primary">
                                <div class="box-header">Update SubKriteria
                                    <button type="button" class="btn btn-danger btn-sm pull-right" id="cancelUpdate">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <div class="box-body">
                                    <form class="form-horizontal" id="formUpdate">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">ID Subkriteria</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="id_subkriteria" name="id_subkriteria" placeholder="Nama SubKriteria" readonly>                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kriteria</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="id_kriteria" id="id_kriteria">
                                                    <?php
                                                    foreach ($data_kriteria->result() as $row) {
                                                        echo "<option value='" . $row->id_kriteria . "'>" . $row->id_kriteria . " - " . $row->nama_kriteria . "</option>";
                                                    }
                                                    ?>
                                                </select>                                             
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Subkriteria</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nama_subkriteria" name="nama_subkriteria" placeholder="Nama SubKriteria">                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-success" id="editSubkriteria">Update &nbsp; <i class="glyphicon glyphicon-refresh"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box box-info">
                                <div class="box-header">SubKriteria</div>
                                <div class="box-body" id="daftarSubkriteria">
                                    Info WP
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
                $('#daftarSubkriteria').load('<?= base_url('subkriteria/lihat_subkriteria') ?>');
                $('#simpanSubkriteria').click(function () {
                    var data = $('#formTambah').serialize();
                    $.ajax({
                        url: '<?= base_url('subkriteria/tambah_subkriteria') ?>',
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
                            $('#tambahSubkriteria').fadeOut(1000, function () {
                                $('#tambah_nama').val('');
                                $('#daftarSubkriteria').load('<?= base_url('subkriteria/lihat_subkriteria') ?>');
                                $('#tambahSubkriteria').fadeIn(1000);
                            });
                        }
                    });
                });
                $('#editSubkriteria').click(function () {
                    var data = $('#formUpdate').serialize();
                    $.ajax({
                        url: '<?=base_url('subkriteria/edit_subkriteria')?>',
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
                            $('#updateSubkriteria').fadeOut(1000, function () {
                                $('#tambah_nama').val('');
                                $('#daftarSubkriteria').load('<?= base_url('subkriteria/lihat_subkriteria') ?>');
                                $('#tambahSubkriteria').fadeIn(1000);
                            });
                        }

                    });
                });
                $('#cancelUpdate').click(function () {
                    $('#updateSubkriteria').fadeOut(1000, function () {
                        $('#tambahSubkriteria').fadeIn(1000);
                    });
                });
            });
            $(document).on('click', '.editSubkriteria', function () {
                var id_subkriteria = $(this).attr('data-id_subkriteria');
                var id_kriteria = $(this).attr('data-id_kriteria');
                var nama = $(this).attr('data-nama');
                console.log(id_subkriteria + " " + id_kriteria + " " + nama);
                $('#tambahSubkriteria').fadeOut(1000, function () {
                    $('#updateSubkriteria').fadeOut(1000, function () {
                        $('#id_subkriteria').val(id_subkriteria);
                        $('#id_kriteria').val(id_kriteria);
                        $('#nama_subkriteria').val(nama);
                        $('#updateSubkriteria').fadeIn(1000);
                    });
                });
            });
            $(document).on('click', '.hapusSubkriteria', function () {
                var id_subkriteria = $(this).attr('data-id_subkriteria');
                $.ajax({
                    url: '<?= base_url('subkriteria/hapus_subkriteria') ?>',
                    data: 'id_subkriteria=' + id_subkriteria,
                    type: 'post',
                    dataType: 'json',
                    cache: 'false',
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
                        $('#listSubkriteria').fadeOut(1000, function () {
                            $('#daftarSubkriteria').load('<?= base_url('subkriteria/lihat_subkriteria') ?>');
                            $('#listSubkriteria').fadeIn(1000);
                        });
                    }
                });
            });
        </script>
    </body>
</html>
