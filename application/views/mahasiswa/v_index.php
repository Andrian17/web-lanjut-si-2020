<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>

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


	<h2>Data Mahasiswa</h2>
	<p>Nama	:	<?php echo $nama; ?></p>
	<p>Umur	:	<?php echo $umur; ?></p>
	<p>Nim	:	<?php echo $nim; ?></p>
	<p>Jurusan	:	<?php echo $jurusan; ?></p>

	<div class="container">
		<table class="table table-bordered">
		<tr>
			<td>Nama</td>
			<td>Nim</td>
			<td>Jurusan</td>
		</tr>
		<tr>
			<td>Andrian</td>
			<td>1901050024</td>
			<td>D3 Sistem Informasi</td>
		</tr>
	</table>
	</div>

	

	


	
</body>
</html>