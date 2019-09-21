<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php echo base_url() ?>assets_form/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets_form/datatables/css/dataTables.bootstrap.css" rel="stylesheet">
	
	<script type="text/javascript">
    function cekform(){
      if(!$("#username").val()){
        alert('Username Anda kosong');
        $("#username").focus();
        return false;
      } if (!$("#nama_panggilan").val()){
        alert('Nama Panggilan Anda kosong');
        $("#email").focus();
        return false;
      } if (!$("#email").val()){
        alert('Email Anda kosong');
        $("#email").focus();
        return false;
      } if (!$("#password").val()){
        alert('Password Anda kosong');
        $("#password").focus();
        return false;
      } if (!$("#ttl").val()){
        alert('Tanggal lahir Anda kosong');
        $("#ttl").focus();
        return false; 
      } if (!$("#alamat").val()){
        alert('Alamat Anda kosong');
        $("#alamat").focus();
        return false; 
      } if (!$("#gender").val()){
        alert('Jenis Kelamin kosong');
        $("#gender").focus();
        return false; 
      } if (!$("#nama_sosmed").val()){
        alert('Nama Sosial Media kosong');
        $("#nama_sosmed").focus();
        return false; 
      } 
    }
  </script>

  </head>
<body>
 <div class="col-md-4 col-md-offset-4 form-login">


<div class="outter-form-login">
            <div class="logo-login">
                <em class="glyphicon glyphicon-user"></em>
</div>
 <?php if(isset($_SESSION['success'])){ ?>
<div class="alert alert-success"> <?php echo $_SESSION['success']; ?> </div>
<?php } ?>
<?php echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
<form action="<?php echo base_url('web/daftar'); ?>" method="post">

 <h3 class="text-center title-login">Form Pendataran</h3>
  <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
  
<div class="form-group">
<tr>
<td width="20%"><label for="Username">Username Anda?</label></td>
<td colspan="3"><input name="username" id="username" type="text" class="form" placeholder="Isikan Username"></td>
</tr>
</div>

<div class="form-group">
<td width="20%"><label for="Nama Panggilan">Nama Panggilan Anda?</label></td>
<td colspan="3"><input name="nama_panggilan" id="nama_panggilan" type="text" class="form" placeholder="Isikan Nama Panggilan"></td>
</div>


<div class="form-group">
<td width="20%"><label for="Email">Email Anda?</label></td>
<td colspan="3"><input name="email" id="email" type="text" class="form" placeholder="Isikan Email"></td>
</div>

<div class="form-group">
<td width="20%"><label for="Password">Password Anda?</label></td>
<td colspan="3"><input name="password" id="password" type="password" class="form" placeholder="Isikan Password"></td>
</div>

<div class="form-group">
<td valign="top"><label for="Tanggal lahir">Tanggal Lahir Anda?</label></td>
<td colspan="3"><input name="ttl" id="ttl" type="date" class="form" placeholder="Isikan Tanggal Lahir"></td>
</div>

<div class="form-group">
<td valign="top"><label for="alamat">Alamat</label></td>
<td colspan="3"><textarea name="alamat" id="alamat" class="form" cols="50" rows="8"></textarea></td>
 </div>
 
<div class="form-group">
<td valign="top"><label for="Jenis Kelamin">Jenis Kelamin Anda?</label></td>
<td colspan="3"><input name="gender" id="gender" type="text" class="form" placeholder="Isikan Jenis Kelamin"></td>
</div>

<div class="form-group">
<td valign="top"><label for="Nama Sosial">Sosial Media Anda?</label></td>
<td colspan="3"><input name="nama_sosmed" id="nama_sosmed" type="text" class="form" placeholder="Isikan Sosial Media"></td>
</div>


 </div>
  <button class="submit" type="submit" name="daftar">Daftar</button>
				 
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