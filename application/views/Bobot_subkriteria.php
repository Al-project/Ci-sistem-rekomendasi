<?php
	$this->load->view('header_admin');
?>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Panel
                        <small>Bobot SubKriteria</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href=<?= base_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Bobot SubKriteria</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row" id="pilihKriteria">
                        <div class="col-lg-6">
                            <div class="box box-primary">
                                <div class="box-header">Pilih Kriteria</div>
                                <div class="box-body">
                                    <form class="form-horizontal" id="formPilihKriteria">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kriteria</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="pilihanKriteria">
                                                    <?php
                                                    foreach ($data_kriteria->result() as $row) {
                                                        echo "<option value='" . $row->id_kriteria . "'>" . $row->id_kriteria . " - " . $row->nama_kriteria . "</option>";
                                                    }
                                                    ?>
                                                </select>                                             
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-primary" id="btnPilihKriteria">Pilih &nbsp; <i class='glyphicon glyphicon-chevron-down'></i></button>
                                    <button type="button" class="btn btn-danger" id="resetPilihKriteria" disabled>Reset &nbsp; <i class='glyphicon glyphicon-repeat'></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id='formPilihan' hidden>
                        <div class="col-lg-12">
                            <div class="box box-primary">
                                <div class="box-header">Bobot Subkriteria</div>
                                <div class="box-body">
                                    <form id="formBobotKriteria">
                                        <table class="table table-bordered table-condensed">
                                            <thead>
                                                <tr>
                                                    <td>ID</td>
                                                    <td>Golongan Kriteria</td>
                                                    <td>Subkriteria</td>
                                                    <td>Bobot</td>
                                                </tr>
                                            </thead>
                                            <tbody id="bobotSubkriteria">

                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-success" id="updateBobotKriteria">Update &nbsp; <i class='glyphicon glyphicon-circle-arrow-right'></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id='panelBobotSubKriteria' hidden>
                        <div class="col-lg-12">
                            <div class="box box-info">
                                <div class="box-header">Bobot SubKriteria</div>
                                <div class="box-body">
                                    <table class="table table-bordered table-condensed">
                                        <thead>
                                            <tr>
                                                <td style='width:10px'>ID</td>
                                                <td>Golongan Kriteria</td>
                                                <td>Subkriteria</td>
                                                <td style='width:50px'>Bobot</td>
                                                <td style='width:100px'>Hasil Bobot</td>
                                                <td style='width:100px'>Bobot Global</td>
                                            </tr>
                                        </thead>
                                        <tbody id="hasil_bobot_subkriteria">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
               
            </footer>
        </div>
        <script src="<?= base_url('assetss/assets/js/jquery-2.2.4.js') ?>"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
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
                $('#resetPilihKriteria').click(function () {
                    $('#btnPilihKriteria').removeAttr('disabled');
                    $('#pilihanKriteria').removeAttr('disabled');
                    $('#resetPilihKriteria').attr('disabled', 'true');
                    $('#panelBobotSubKriteria').fadeOut(1000);
                    $('#formPilihan').fadeOut(1000);
                    //TODO Perbaiki Tombol Reset (DEBUG)
                    //Update
                    //View Bobot
                });
                $('#btnPilihKriteria').click(function () {
                    $('#resetPilihKriteria').removeAttr('disabled');
                    $('#btnPilihKriteria').attr('disabled', 'true');
                    $('#pilihanKriteria').attr('disabled', 'true');
                    var id_kriteria = $('#pilihanKriteria').val();
                    $('#formPilihan').fadeOut(1000, function () {
                        $('#bobotSubkriteria').empty();
                        $.ajax({
                            url: '<?= base_url('subkriteria/lihat_bobot_subkriteria') ?>',
                            data: 'id_kriteria=' + id_kriteria,
                            type: 'post',
                            dataType: 'json',
                            cache: 'false',
                            success: function (response) {
                                if (response.length > 0) {
                                    $.each(response, function (i, item) {
									if (item.bobot == 0) {
									var select = "<select class='form-control' name='bobotsubkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";

									} else if (item.bobot == 1) {
									var select = "<select class='form-control' name='bobotsubkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";
 
									} else if (item.bobot == 2) {
									var select = "<select class='form-control' name='bobotsubkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";
 
									} else if (item.bobot == 3) {
									var select = "<select class='form-control' name='bobotsubkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";
 
									} else if (item.bobot == 4) {
									var select = "<select class='form-control' name='bobotsubkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";
 
									} else if (item.bobot == 5) {
									var select = "<select class='form-control' name='bobotsubkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";
 
                                    }
                                        $('#bobotSubkriteria').append("<tr>\n\
                                                                        <td>" + item.id_subkriteria + "<input value='" + item.id_subkriteria + "' type='hidden' class='form-control' name='id_subkriteria[]' readonly></td>\n\
                                                                        <td>" + item.nama_kriteria + "</td>\n\
                                                                        <td>" + item.nama_subkriteria + "</td>\n\
                                                                        <td>" + select + "</td>\n\
                                                                    </tr>");
                                    });
                                } else {
                                    $('#bobotSubkriteria').append("<tr><td colspan='4'><center>Tidak Ada Data SubKriteria Dengan Kriteria Ini</center></td></tr>");
                                }
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
                                $('#formPilihan').fadeIn(1000);
                                $('#panelBobotSubKriteria').fadeOut(1000, function () {
                                    $('#hasil_bobot_subkriteria').empty();
                                    view_bobot(id_kriteria);
                                    $('#panelBobotSubKriteria').fadeIn(1000);
                                });
                            }
                        });
                    });
                });
                $('#updateBobotKriteria').click(function () {
                    var data = $('#formBobotKriteria').serialize();
                    var id_kriteria = $('#pilihanKriteria').val();
                    console.log(data+"&id_kriteria="+id_kriteria);
                    $.ajax({
                        url: '<?= base_url('subkriteria/simpan_bobot_subkriteria') ?>',
                        data: data +"&id_kriteria="+id_kriteria,
                        type: 'post',
                        dataType: 'json',
                        cache: 'false',
                        success: function (response) {
                            console.log(response);
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
                            $('#panelBobotSubKriteria').fadeOut(1000, function () {
                                $('#hasil_bobot_subkriteria').empty();
                                view_bobot(id_kriteria);
                                $('#panelBobotSubKriteria').fadeIn(1000);
                            });
                        }
                    });
                });
            });
            function view_bobot(id_kriteria) {
                $.ajax({
                    url: '<?= base_url('subkriteria/lihat_bobot_subkriteria') ?>',
                    data: 'id_kriteria=' + id_kriteria,
                    dataType: 'json',
                    type: 'post',
                    cache: false,
                    success: function (response) {
                        if (response.length > 0) {
                            $.each(response, function (i, item) {
                                $('#hasil_bobot_subkriteria').append("<tr>\n\
                                                                        <td>" + item.id_subkriteria + "</td>\n\
                                                                        <td>" + item.nama_kriteria + "</td>\n\
                                                                        <td>" + item.nama_subkriteria + "</td>\n\
                                                                        <td>" + item.bobot + "</td>\n\
                                                                        <td>" + item.hasil_bobot + "</td>\n\
                                                                        <td>" + item.bobot_global + "</td>\n\
                                                                    </tr>");
                            });
                        } else {
                            $('#hasil_bobot_subkriteria').append("<tr><td colspan='4'><center>Tidak Ada Data SubKriteria Dengan Kriteria Ini</center></td></tr>");
                        }
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
                    }
                });
            }
        </script>
    </body>
</html>
