<?php
	$this->load->view('header_admin');
?>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Panel
                        <small>Kriteria</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href=<?= base_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Kriteria</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box box-primary">
                                <div class="box-header">Bobot Kriteria
                                    <button type="button" class="btn btn-danger btn-sm pull-right" id="cancelUpdate">
                                        <i class="fa fa-times"></i>
                                    </button></div>
                                <div class="box-body">
                                    <form id="formBobotKriteria" action="<?= base_url('kriteria/simpan_bobot') ?>" method="post">
                                        <table class="table table-bordered table-condensed">
                                            <thead>
                                                <tr>
                                                    <td>ID</td>
                                                    <td>Kriteria</td>
                                                    <td>Bobot</td>
                                                </tr>
                                            </thead>
                                            <tbody id="bobotKriteria">

                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-success" id="updateBobotKriteria">Update &nbsp; <i class="glyphicon glyphicon-chevron-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box box-info">
                                <div class="box-header">Kriteria</div>
                                <div class="box-body" id="daftarKriteria">

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
                $('#daftarKriteria').load('<?= base_url('kriteria/lihat_bobot_kriteria') ?>');
                $.ajax({
                    url: '<?= base_url('kriteria/json_kriteria') ?>',
                    type: 'post',
                    dataType: 'json',
                    cache: false,
                    success: function (response) {
                        $.each(response, function (i, item) {
										if (item.bobot == 0) {
                                var select = "<select class='form-control' name='bobotkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";
                            } else if (item.bobot == 1) {
                                var select = "<select class='form-control' name='bobotkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";
                            } else if (item.bobot == 2) {
                                var select = "<select class='form-control' name='bobotkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";
                            } else if (item.bobot == 3) {
                               var select = "<select class='form-control' name='bobotkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";
                            } else if (item.bobot == 4) {
                               var select = "<select class='form-control' name='bobotkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";
                            } else if (item.bobot == 5) {
                               var select = "<select class='form-control' name='bobotkriteria[]'><option value='0' selected='selected'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option></select>";
                            }
                            $('#bobotKriteria').append("<tr>\n\
                                                                        <td>" + item.id_kriteria + "<input value='" + item.id_kriteria + "' type='hidden' class='form-control' name='id_kriteria[]' readonly></td>\n\
                                                                        <td>" + item.nama_kriteria + "</td>\n\
                                                                        <td>" + select + "</td>\n\
                                                                    </tr>");
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
                    }
                });
                $('#updateBobotKriteria').click(function () {
                    var data = $('#formBobotKriteria').serialize();
                    $.ajax({
                        url: '<?= base_url('kriteria/simpan_bobot') ?>',
                        data: data,
                        dataType: 'json',
                        cache: false,
                        type: 'post',
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
                            $('#daftarKriteria').load('<?= base_url('kriteria/lihat_bobot_kriteria') ?>');
                        }

                    });
                });
            });
        </script>
    </body>
</html>
