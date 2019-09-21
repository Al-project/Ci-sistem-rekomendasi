<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php echo base_url() ?>assets_form/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets_form/datatables/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets1/css/style.css" rel="stylesheet">

	

  </head>
<body>
<div class="col-md-4 col-md-offset-4 form-login">
<div class="outter-form-login">
<div class="logo-login">
<em class="glyphicon glyphicon-user"></em>
</div>

<form action="<?php echo base_url('web/aksi_login'); ?>" method="post">
 <h3 class="text-center title-login">Form Login</h3>
 
<div class="visible-lg visible-md">
 <label for="username">Username</label>
 <input class="form-control" name="username" id="username" type="text" placeholder="Username">
</div>

 <div class="visible-lg visible-md">
 <label for="password">Password</label>
 <input class="form-control" name="password" id="password" type="password" placeholder="Password">
 </div>
 </div>
 <input class="btn btn-primary btn-block" type="submit" name="login" value="Login">
				 
<div class="text-center forget">
 <p><a href="<?php echo base_url().'web/pendaftaran' ?>">Daftar Akun </a></p>
</div>

 </form>
        </div>
    </div>

	 <script src="<?php echo base_url() ?>assets_form/jquery/jquery-3.1.1.min.js"></script>
	  <script src="<?php echo base_url() ?>assets_form/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>