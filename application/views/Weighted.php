
<?php
	$this->load->view('header_admin');
?>


            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Info
                        <small>Weighted Product</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href=<?= base_url('Dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Weighted Product</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box box-info">
                                <div class="box-header">Weighted Product</div>
                                <div class="box-body">
                                    <p>
 Menurut Sianturi Ingot Seen “Metode Weighted Product (WP) merupakan salah satu metode yang digunakan untuk menyelesaikan masalah. 
 <br>Metode Weighted Product (WP) menggunakan perkalian untuk menghubungkan nilai atribut (kriteria), 
 dimana nilai setiap atribut harus dipangkatkan dulu dengan bobot atribut (kriteria) yang bersangkutan. 
                                    </p>
                                    <p>
 Menurut Putra Jaya “Metode Weighted Product memerlukan proses normalisasi karena metode ini mengaluhkan hasil penilaian setiap atribut. 
 Hasil perkalian tersebut belum bermakna jika belum dibandingkan (dibagi) dengan nilai standar. 
 Bobot untuk atribut manfaat berfungsi sebagai pangkat positif dalam proses perkalian, sementara bobot biaya berfungsi sebagai pangkat negatif. 
 Metode Weighted Product menggunakan perkalian sebagai untung menghubungkan rating atribut, dimana rating setiap atribut harus dipangkatkan dulu dengan bobot yang bersangkutan. 
 Proses ini sama halnya dengan proses normalisasi 
                                    </p>
 Dengan i= 1 , 2, ...m dan j= 1, 2, ...n. 
                                    <br>
 Keterangan: 
 Π = product 
 Si = skor / nilai dari setiap alternatif 
 Xij = nilai alternatif ke- i terhadap atribut ke- j 
 wj = bobot dari setiap atribut 
                                    <br>
 Dimana(1) adalah pangkat bernilai positif untuk atribut keuntungan dan bernilai negatif untuk atribut biaya. 
 Untuk perangkingan / mencari alternatif yang terbaik dilakukan dengan rumus berikut:
 Penentuan nilai bobot W 
                                    <pre>
 Wj = Wj/SUM(Wj)
                                    </pre>
 Penentuan nilai Vektor S 
                                    <pre>
 S = (Wij^W)+(Winj^Wn)
                                    </pre>
 Penentuan nilai Vektor V 
                                    <pre>
 Vjn = Si/SUM(Si)
                                    </pre>
                                    <pre>
 Dimana : 
 V 	= Preferensi alternatif dianalogikan sebagai vektor V 
 W	= Bobot kriteria / subkriteria 
 j 	= Kriteria 
 i 	= Alternatif 
 n 	= Banyaknya kriteria 
 S 	= Preferensi alternatif dianalogikan sebagai vektor S
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2017 <a href="http://github.com/AdPNugroho">STMIK STIKOM Balikpapan</a>.</strong> 
            </footer>
        </div>
        <script src="<?= base_url('assetss/js/jquery-2.2.4.js') ?>"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="<?= base_url('assetss/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assetss/js/app.min.js') ?>"></script>
    </body>
</html>
