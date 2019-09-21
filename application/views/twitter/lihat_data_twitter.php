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
					
					<h2 class="tekstit"><center>Klasifikasi pengguna</center></h2>
					
					<hr>
				</div>
		</div>
		
		<div class="rows">  
			<div class="col-sm-12">
		<table class="table table-striped">
		 <thead>
		  <tr>
			<th>No</th>
			<th>Kode Pengguna</th>
			<th>Nama Pengguna</th>
			<th>Username Twitter</th>
			<th>Action</th>
		  </tr>
		</thead>
				<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tbody>
		<td><?php echo $no++ ?></td>
		<td><?php echo $u->kode_hobi ?></td>
		<td><?php echo $u->nama_lengkap ?></td>
		<td><?php echo $u->nama_twitter ?></td>
		
		<td>
			<?php echo anchor('klasifikasi/index/'.$u->nama_lengkap,'Kelola'); ?>
		</td>
		</tbody>
		<?php } ?>
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
	