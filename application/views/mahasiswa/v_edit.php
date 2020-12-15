<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	
</head>
<body class="bd">
	<form method="post" action="<?php echo site_url('Mahasiswa/update') ?>" >
		<div class="container">
			<input type="hidden" name="ID" 
			id="ID" value="<?php echo $tbl_mahasiswa->ID ?>">
			<div class="form-group">
				<label>Nim</label>
				<input type="text" readonly name="t_nim" class="form-control" 
				value="<?php echo $tbl_mahasiswa->NIM ?>">
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="t_nama" class="form-control" 
				value="<?php echo $tbl_mahasiswa->nama ?>">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<!-- <input type="text" name="t_alamat" class="form-control" 
				value="<?php echo $tbl_mahasiswa->alamat ?>"> -->
				<textarea class="form-text" name="t_alamat"><?php echo $tbl_mahasiswa->alamat ?></textarea>
			</div>
			<input type="submit" onclick="confirmation()" name="submit" value="simpan" class="btn btn-primary">
		</div>
	</form>
</body>
</html>