<?php
	$this->load->view('header_admin');
?>    

	<div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Panel
                        <small>Eksekusi Data</small>
                    </h1>


<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<label><h2><b>Data Keluruhan Hasil Klasifikasi Menggunakan Twitter</b></h2></label>
<table>
  <tr>
  <br>
    <th>No.</th>
    <th>Kode Hobi</th>
    <th>Nama Pengguna</th>
	<th>Jenis Kelamin</th> 	
	<th>Jenis Hobi</th>  
	<th>Umur</th>  
	<th>Status Kegiatan</th> 
	<th>Akurasi</th>
	<th>Presisi</th>
	<th>Recall</th> 
</br>   	
  </tr>
  <?php 
  $no=1; 
  foreach ($join2 as $row) { ?>
  <tr>
  <td><?php echo $no++;?></td>
  <td><?php echo $row->kode_hobi;?></td>
  <td><?php echo $row->nama_lengkap;?></td>
  <td><?php echo $row->jenis_kelamin;?></td>
  <td><?php echo $row->jenis_hobi;?></td>
  <td><?php echo $row->umur;?></td>
  <td><?php echo $row->status_kegiatan;?></td>
  <td><?php echo $row->akurasi;?></td>
  <td><?php echo $row->presisi;?></td>
  <td><?php echo $row->recall;?></td>
  </tr>
    <?php } ?>
    
</table>

