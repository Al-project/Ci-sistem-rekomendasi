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
<label><h2><b>Data SubKriteria</b></h2></label>
<table>
  <tr>
  <br>
    <th>No.</th>
    <th>Id Data</th>
    <th>Nama Cabang</th>
	<th>Bobot</th> 
	<th>Hasil Perhitungan Bobot Cabang</th> 	
	<th>Hasil Keseluruhan</th>  
</br>   	
  </tr>
  <?php 
  $no=1; 
  foreach ($sub as $row) { ?>
  <tr>
  <td><?php echo $no++;?></td>
  <td><?php echo $row->id_kriteria;?></td>
  <td><?php echo $row->nama_subkriteria;?></td>
  <td><?php echo $row->bobot;?></td>
  <td><?php echo $row->hasil_bobot;?></td>
  <td><?php echo $row->bobot_global;?></td>
  </tr>
    <?php } ?>
    
</table>

