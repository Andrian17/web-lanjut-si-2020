<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/Css1.css">
	<link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
	/>
</head>

<body class="bgbody">
	<div class="jumbotron jumbotron-fluid bg-transparent">
		<div class="container">

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<a class="navbar-brand" href="<?php echo site_url('C_login/index') ?>">Andrian</a>
					<button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
					aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ml-auto ">
						<a class="nav-item nav-link active" href="<?php echo site_url('Mahasiswa') ?>">Home <span class="sr-only ">(current)</span></a>
						<a class="nav-item nav-link" href="<?php echo site_url('Mahasiswa/tambah') ?>">Tambah Data </a>
						<a class="nav-item nav-link" href="<?php echo site_url('C_login/logout') ?>">Logout</a>
						<a href="<?php echo $this->session->userdata('namaPengguna'); ?>" class="nav-item nav-link">Session</a>

						<a class="nav-item nav-link" href="#" tabindex="-1">About</a>
						<a class="nav-item btn btn-primary tombol" href="<?php echo site_url('Mahasiswa/dTable'); ?>" tabindex="-1">Join US</a>

					</div>
				</div>
			</div>
		</nav>

		<div class="alert alert-primary" role="alert" align="center">
			Andrian/1901050024
		</div>