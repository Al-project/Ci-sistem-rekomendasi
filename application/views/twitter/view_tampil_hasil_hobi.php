<?php
	$this->load->view('header_admin');
?>    

	<div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Panel
                        <small>Eksekusi Data</small>
                    </h1>


<div class="rows">    
				<div class="col-sm-12">
					
					<h2 class="tekstit"><center>Perhitungan Hobi Dari Setiap Pengguna</center></h2>
					
					<hr>
				</div>
		</div>
		
		<div class="rows">  
			<div class="col-sm-12">
		<table class="table table-striped">
		 <thead>
		  <tr>
			<th>No</th>
			<th>Nama Pengguna</th>
			<th>Hobi</th>
			<th>Jumlah</th>
		  </tr>
		</thead>
		
	
		
		<?php 
			$no = 1;
foreach($data->result_array() as $row):
 $kategori = $row['kategori'];
  $nama_pengguna = $row['nama_pengguna'];
$total = $row['total'];
?>
<tbody>
	<td><?php echo $no++ ?></td>
		<td><?php echo htmlentities($nama_pengguna, ENT_QUOTES, 'UTF-8');?></td>
		<td><?php echo htmlentities($kategori, ENT_QUOTES, 'UTF-8');?></td>
		<td><?php echo htmlentities($total, ENT_QUOTES, 'UTF-8');?></td>
		<td>
		
		</tbody>
		<?php endforeach; ?>
		</table>
		<center>
		<nav aria-label="Page navigation">
		<?php
		echo $this->pagination->create_links();
		?>
		</nav>
		</center>
			</div>
		</div>
	
