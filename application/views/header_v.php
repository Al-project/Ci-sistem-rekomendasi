<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> Golek || Konco</title>
   
	<link  rel="icon" href="<?php echo base_url(); ?>assets/img/logoku.jpg">
    <!-- Bootstrap CSS -->
   
	 <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- animate CSS -->
   
	 <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <!-- owl carousel CSS -->
    
	 <link href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <!-- themify CSS -->
	 <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">
    <!-- flaticon CSS -->
    
	 <link href="<?php echo base_url(); ?>assets/css/flaticon.css" rel="stylesheet">
    <!-- font awesome CSS -->
    
	 <link href="<?php echo base_url(); ?>assets/css/magnific-popup.css" rel="stylesheet">
    <!-- swiper CSS -->
	 <link href="<?php echo base_url(); ?>assets/css/swiper.min.css" rel="stylesheet">
    <!-- style CSS -->
	 <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!--::header part start::-->
    <header class="header_area">
        <div class="sub_header">
            <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-4 col-xl-6">
                      <div id="logo">
                         
						  
                      </div>
                  </div>
				  

                  <div class="col-md-8 col-xl-6">
				 
                      <div class="sub_header_social_icon float-right">
					  
						 <?php
                        	if($this->session->userdata('username') == "")
							{
						?>
						
					    <a class="register_icon" href="<?PHP echo site_url(); ?>sign_in"><i class="ti-arrow-left"></i>LOGIN</a>
						<a class="register_icon" href="<?PHP echo site_url(); ?>sign_up"><i class="ti-arrow-right"></i>REGISTER</a>
						
						 <?php
							}
							else
							{
						?>
                      </div>
					
						<?PHP
                        	}
						?>
					  
                    </div>
					
                </div>
				
            </div>
        </div>
		

        <div class="main_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    
									<li<?PHP if($this->uri->segment(1) == '') echo ' class="nav-item active"'; ?>>
										<a class="nav-link active" href="<?php echo site_url(); ?>beranda">
										Beranda
										</a>
                                    </li>
									</ul>
									</div>
									
									<ul class="navbar-nav mr-auto">
									<?php
									if($this->session->userdata('sesi') === 'login'):
									?>
                                    
									
									<li<?php if($this->uri->segment(1) == 'travel') echo ' class="nav-item"'; ?>>
									<a class="nav-link active" href="<?PHP echo site_url(); ?>listteman">
									Daftar Teman
									</a>
									</li> 
									
									<li<?php if($this->uri->segment(1) == 'travel') echo ' class="nav-item"'; ?>>
									<a class="nav-link active" href="<?PHP echo site_url(); ?>listteman">
									Event
									</a>
									</li> 
									
									
									<li<?php if($this->uri->segment(1) == 'travel') echo ' class="nav-item"'; ?>>
									<a class="nav-link active" href="<?PHP echo site_url(); ?>sign_in/logout">
									Keluar
									</a>
									</li> 
									
									
									<?php
									endif;
							?>
									
									</ul>							
						
                               <div class="header_social_icon d-none d-lg-block">
                                    <ul>
                                        <li>
										<img src="<?php echo base_url(); ?>assets/img/fb.png" height="30px" width="30px" alt=""> </li>
                                       <li>
										<img src="<?php echo base_url(); ?>assets/img/twitter.jpg" height="25px" width="25px" alt=""> </li>
                                        <li>
										<img src="<?php echo base_url(); ?>assets/img/instagram.jpg" height="30px" width="30px" alt=""> </li>
                                        <li>
										<a href="<?PHP echo site_url(); ?>admin_in"><img src="<?php echo base_url(); ?>assets/img/admin.jpg" height="30px" width="40px" alt="">
										</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="header_social_icon d-block d-lg-none">
                            <ul>
                                <li><a href="#"><i size="30px" class="ti-facebook"></i></a></li>
                                <li>
                                    <a href="#"> <i class="ti-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="#"><i class="ti-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    </header>
 
