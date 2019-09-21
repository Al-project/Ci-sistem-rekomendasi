<?php
	$this->load->view('header_v');
?>



<!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">

 	<?PHP
		if($this->uri->segment(3) == 'error_password')
		{
	?>
            <div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Password dan konformasi password tidak sama
	</div>
	
	<?PHP
		}
		else if($this->uri->segment(3) == 'error_username')
		{
	?>
    
    <div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Username sudah digunakan
	</div>
    
    <?PHP
		}
	?>
	
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Buat Akun Disini </h2>
        </div>
        <div class="col-lg-8">
		  <form method="post" role="form" action="<?PHP echo site_url(); ?>sign_up/register" id="form_sign_up">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                 <label for="username" class="visible-lg visible-md">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="password" class="visible-lg visible-md">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="konfirmasi_password" class="visible-lg visible-md">Konfirmasi Password</label>
                  <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password">
                </div>
              </div>
              
            </div>
          </form>
		  
		  <div class="panel-footer">
        	<button type="submit" form="form_sign_up" class="btn btn-danger btn-block">
            	Lanjut
            </button>
			<button type="reset" value="reset" form="form_sign_up" class="btn btn-danger btn-block">
            	Cancel
            </button>
        </div>
        </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
  
  <?php
	$this->load->view('footer_v');
?>

