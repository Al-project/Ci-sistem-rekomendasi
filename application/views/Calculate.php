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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box box-primary">
                                <div class="box-header">Hasil Perhitungan WeightedProduct</div>
                                <div class="box-body" id="daftarAlternatif">

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
        <script src="<?= base_url('assetss/js/jquery-2.2.4.js') ?>"></script>
        <script src="<?= base_url('assetss/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assetss/js/app.min.js') ?>"></script>
        <script type="text/javascript" language="javascript" src="<?= base_url('assetss/js/jquery.toast.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#daftarAlternatif').load('<?=base_url('alternatif/table_calculate')?>');
            });
        </script>
    </body>
</html>
