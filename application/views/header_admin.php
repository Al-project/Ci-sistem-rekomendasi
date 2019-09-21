
<html>
    <head>
        
        <title>Wilayah Admin</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?= base_url('assetss/assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= base_url('assetss/assets/css/AdminLTE.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assetss/assets/skins/_all-skins.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/assetss/css/jquery.toast.css') ?>">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>AD</b>MIN</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Halaman ADMIN</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?= base_url('dashboard') ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>
						
						
						
                       <li class="treeview">
                            <a>
                                <i class="fa fa-gear"></i> <span>Data Pengguna</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: none;">
                                <li><a href="<?= base_url('Twitter_data') ?>"><i class="fa fa-pencil fa-fw"></i> List Pengguna </a></li>
                                <li><a href="<?= base_url('Coba_kon') ?>"><i class="fa fa-pencil fa-fw"></i> List Hasil Hobi </a></li>
								<li><a href="<?= base_url('Join_twitter') ?>"><i class="fa fa-pencil fa-fw"></i> List Keseluruhan Twitter </a></li>
								<li><a href="<?= base_url('Data_form') ?>"><i class="fa fa-pencil fa-fw"></i> List Tanpa Twitter </a></li>
                            </ul>
                        </li>
						
						
						<li class="treeview">
                            <a>
                                <i class="fa fa-database fa-fw"></i> <span>Master</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: none;">
                                <li><a href="<?= base_url('kategori') ?>"><i class="fa fa-circle-o"></i> Kategori </a></li>
                                <li><a href="<?= base_url('klasifikasi') ?>"><i class="fa fa-circle-o"></i> Klasifikasi </a></li>
								 <li><a href="<?= base_url('dataset') ?>"><i class="fa fa-circle-o"></i> Dataset </a></li>
								 <li><a href="<?= base_url('Tulis_akhir') ?>"><i class="fa fa-circle-o"></i> Data Jarak </a></li>
                            </ul>
                        </li>
						
						<li class="treeview">
                            <a>
                                <i class="fa fa-folder"></i> <span> Modul Laporan </span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: none;">
                                <li><a href="<?= base_url('klasifikasi/laporan') ?>"><i class="fa fa-circle-o"></i>Histori Klasifikasi</a></li>
                                <li><a href="<?= base_url('kategori/all_temp') ?>"><i class="fa fa-circle-o"></i>List Store</a></li>
								 <li><a href="<?= base_url('klasifikasi/akurasi') ?>"><i class="fa fa-circle-o"></i>Detail Akurasi</a></li>
                            </ul>
                        </li>
						
                        <li class="treeview">
                            <a>
                                <i class="fa fa-crosshairs"></i> <span>Data Kelas Utama</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: none;">
                                <li><a href="<?= base_url('kriteria') ?>"><i class="fa fa-circle-o"></i> Data utama</a></li>
                                <li><a href="<?= base_url('kriteria/bobot_kriteria') ?>"><i class="fa fa-circle-o"></i> Bobot Kelas Utama</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a>
                                <i class="fa fa-refresh"></i> <span>Data Kelas Utama</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: none;">
                                <li><a href="<?= base_url('subkriteria') ?>"><i class="fa fa-circle-o"></i> Data Cabang</a></li>
                                <li><a href="<?= base_url('subkriteria/bobot_subkriteria') ?>"><i class="fa fa-circle-o"></i> Bobot Cabang</a></li>
								<li><a href="<?= base_url('Data_sub') ?>"><i class="fa fa-circle-o"></i> Data Seluruh Cabang </a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a>
                                <i class="fa fa-mortar-board"></i> <span>Pembobotan Data Pengguna</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: block;">
                                <li><a href="<?= base_url('alternatif') ?>"><i class="fa fa-circle-o"></i> Data Pengguna</a></li>
                                <li><a href="<?= base_url('alternatif/evaluasi') ?>"><i class="fa fa-circle-o"></i>Nilai Pengguna</a></li>
                                <li><a href="<?= base_url('alternatif/calculate') ?>"><i class="fa fa-circle-o"></i> Hasil Jarak Keseluruhan</a></li>
                            </ul>
                        </li>
						
						<li class="treeview">
                            <a>
                                <i class="fa fa-database fa-fw"></i> <span>Hasil Rekomendasi</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: none;">
								 <li><a href="<?= base_url('Tulis_akhir') ?>"><i class="fa fa-circle-o"></i> Data Jarak </a></li>
                            </ul>
                        </li>
						
                    </ul>
                </section>
            </aside>
