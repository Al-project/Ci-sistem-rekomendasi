<?php
	$this->load->view('header_v');
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
                        <a href="#" class="btn_1">Cari Lah Teman Mu<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about part start-->
    <section class="about_part">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 offset-xl-1 col-xl-4">
                    <div class="about_img">
						<img src="<?php echo base_url(); ?>assets/img/logo1.png" height="171px" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="about_text">
                        
                        <h2>Selamat Datang<br>
                        Kenali Hobi Dan Teman Mu <br></h2>
						<h3> Disini </h3>
                        <p>Golek Konco Adalah Suatu Sistem Berbasis Web Yang Berfungsi Sebagai Pencarian Teman Berdasarkan Dengan Kategori Hobi Yang Sama</p>
                        <p>Sistem Ini Akan Mencari Teman Sesuai Dengan Aktivitas Twitter Pengguna</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part start-->

    <!-- upcoming_event part start-->
    <section class="upcoming_event section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h4>Usage Information</h4>
                        <h2>Informasi Penggunaan Sistem</h2>
                    </div>
                </div>
            </div>
            <div class="row">
			
                <div class="col-md-6 col-xl-6">
                    <div class="upcoming_event_1">
						<img src="<?php echo base_url(); ?>assets/img/Step1.png" width="239px" height="229px" alt="#">
                        <div class="upcoming_event_text">
                            <div class="date">
                                <h3>Langkah<span>pertama</span> </h3>
                            </div>
                            <div class="time">
                                <ul class="list-unstyle">
                                    <li> <span class="ti-time"></span> 12:00 AM - 12:30 AM</li>
                                    
                                </ul>
                            </div>
                            <p> Jika pengguna belum memiliki akun aplikasi, silahkan daftarkan diri anda untuk mendapatkan akun dengan cara masuk kedalam regoster
							Jika sudah memiliki akun pengguna hanya perlu login kedalam sistem							</p>
                            
                        </div>
                    </div>
                </div>
				
				 <div class="col-md-6 col-xl-6">
                    <div class="upcoming_event_1">
						<img src="<?php echo base_url(); ?>assets/img/Step2.png" width="239px" height="229px" alt="#">
                        <div class="upcoming_event_text">
                            <div class="date">
                                <h3>Langkah<span>Kedua</span> </h3>
                            </div>
                            <div class="time">
                                <ul class="list-unstyle">
                                    <li> <span class="ti-time"></span> 12:00 AM - 12:30 AM</li>
                                    
                                </ul>
                            </div>
                            <p>Isikan Biodata Diri Anda , Agar Sistem Dapat Mengelola Informasi Yang Di Miliki Oleh Pengguna</p>
                            
                        </div>
                    </div>
                </div>
				
				 <div class="col-md-6 col-xl-6">
                    <div class="upcoming_event_1">
						<img src="<?php echo base_url(); ?>assets/img/Step3.png" width="239px" height="229px" alt="#">
                        <div class="upcoming_event_text">
                            <div class="date">
                                <h3>Langkah<span>Ketiga</span> </h3>
                            </div>
                            <div class="time">
                                <ul class="list-unstyle">
                                    <li> <span class="ti-time"></span> 12:00 AM - 12:30 AM</li>
                                    
                                </ul>
                            </div>
                            <p>Mendapatkan Teman Berdasarkan Dari Hasil Pengelolaan Data Pada Sistem </p>
                            
                        </div>
                    </div>
                </div>
				
                <div class="col-md-6 col-xl-6">
                    <div class="upcoming_event_1">
						<img src="<?php echo base_url(); ?>assets/img/Stepakhir.png" width="239px" height="229px" alt="#">
                        <div class="upcoming_event_text">
                            <div class="date">
                                <h3>Langkah<span>Keempat</span> </h3>
                            </div>
                            <div class="time">
                                <ul class="list-unstyle">
                                    <li> <span class="ti-time"></span> 12:00 AM - 12:30 AM</li>
                                    
                                </ul>
                            </div>
                            <p>Pengguna Dapat Menikmati Menu Yang Terdapat Pada Sistem </p>
                            
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <?php
	$this->load->view('footer_v');
?>