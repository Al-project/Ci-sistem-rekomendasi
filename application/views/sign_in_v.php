<?php
	$this->load->view('header_v');
?>




<!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
	
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Silahkan Masuk Akun Anda</h2>
        </div>
        <div class="col-lg-8">
		  <form method="post" role="form" action="<?PHP echo site_url(); ?>sign_in/login" id="form_login">
            <div class="row">
              <div class="col-12">
                <div class="form-group" align="center">
                  <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="nama_lengkap">Password Anda:</label>
				  <input type="password" class="form-control" name="password" placeholder="Password"></td>
                </div>
              </div>
			  <div class="form-group mt-3">
			
			<button type="submit" form="form_login" class="btn btn-primary btn-block">
			<i class="glyphicon glyphicon-log-in"></i> Login
			</button>
			
            </div>
			   
            </div>
          </form>
        </div>
    </div>
  </section>
  
  <!-- ================ contact section end ================= -->
  
  
   <?php
	$this->load->view('footer_v');
?>
 

