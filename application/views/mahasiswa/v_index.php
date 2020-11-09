<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Tugas</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Tambah Data</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Andrian</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="alert alert-primary" role="alert" align="center">
			Andrian/1901050024
		</div>


		<div class="card">
			<div class="card-header">
				Data Mahasiswa
			</div>
			<div class="card-body">

				<table class="table table-bordered">
					<tr>
						<td>Nomor</td>
						<td>Nama</td>
						<td>Nim</td>
						<td>Alamat</td>
						<td>Aksi</td>
					</tr>
					<?php $no =  1; ?>
					<?php foreach ($tbl_mahasiswa as $key) { ?>

						<tr>
						<td><?= $no++ ?></td>
						<td><?= $key->NIM ?></td>
						<td><?= $key->nama ?></td>
						<td><?= $key->alamat ?></td>
						<td>
							<button type="button" class="btn btn-warning">Edit</button> 
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
						
					<?php } ?>
					
					
				</table>

			</div>
			<div class="card-footer text-muted">
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="https://www.instagram.com/andriancimen/" target="_blank"><img src="<?php echo base_url('assets/img/instagram.PNG') ?>" width="30px"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.instagram.com/andriancimen/" target="_blank"><img src="<?php echo base_url('assets/img/facebook.PNG') ?>" width="30px"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.instagram.com/andriancimen/" target="_blank"><img src="<?php echo base_url('assets/img/twitter.PNG') ?>" width="30px"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	
</body>
</html>