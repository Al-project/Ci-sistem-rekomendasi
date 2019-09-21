<?php
	$this->load->view('daftarhobi/header_v');
?>
	
	<!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-content-center">
                <div class="col-lg-7 col-xl-5">
                    <div class="banner_text">
                        <h1><span> Golek &</span><br> 
                    Konconan</h1>
                        <p>Selamat mencari teman sesuai dengan hobi anda</p>
                        <a class="btn_1">Cari Lah Teman Mu<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!-- upcoming_event part start-->
    <section class="upcoming_event section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h4>Silahkan Isi Salah Satu Saja</h4>
                        <h2>Isi Terlebih Dahulu Agar Anda Mendapatkan Teman</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="upcoming_event_1">
                       <img src="<?php echo base_url(); ?>assets/img/team.jpeg" width="245px" height="420px" alt="#">
                        <div class="upcoming_event_text">
                            <div class="date">
                                 <h3>Mari<h1><font color="red">Diisi</h1> </font></h3>
                            </div>
                            <div class="time">
                                <ul class="list-unstyle">
                                    <li> <span></span></li>
                                    <li> <span></span></li>
                                </ul>

                            </div>
							<br>
                            <p> Terkhusus anda yang mempunyai akun twitter , klik disini </p>
                     
							<a  class="btn_2" href="<?PHP echo site_url(); ?>Create_data_twitter"> Yuk Isi </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-xl-6">
                    <div class="upcoming_event_1">
                      
						 <img src="<?php echo base_url(); ?>assets/img/team.jpg" width="339px" height="420px" alt="#">
                        <div class="upcoming_event_text">
                            <div class="date">
                                <h3>Mari<h1><font color="red">Diisi</h1> </font></h3>
                            </div>
                            <div class="time">
                                <ul class="list-unstyle">
                                    <li> <span></span></li>
                                    <li> <span></span></li>
                                </ul>

                            </div>
							<br>
                            <p> Bagi anda yang tidak mempunyai akun twitter, klik disini </p>
                           <a  class="btn_2" href="<?PHP echo site_url(); ?>Form_bio"> Yuk Isi </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->


    <?php
	$this->load->view('footer_v');
?>