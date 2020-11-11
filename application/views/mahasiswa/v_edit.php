<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
	<form action="<?php echo site_url('Mahasiswa/update') ?>" method="post">
		<div class="container">
			<input type="hidden" name="ID" class="form-control" >
			<div class="form-group">
				<label>Nim</label>
				<input type="text" name="t_nim" class="form-control" >
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="t_nama" class="form-control" >
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="t_alamat" class="form-control" >
			</div>
			<input type="submit" name="submit" value="simpan" class="btn btn-primary">
		</div>
	</form>
</body>
</html>