<div class="container text-dark mt-4">

	<form action="<?php echo site_url('Mahasiswa/proses_tambah') ?>" method="post">
		<div class="container text-dark">
			<div class="col-md-6">
				<div class="form-group">
					<label>Nim</label>
					<input type="text" name="t_nim" class="form-control" required >
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="t_nama" class="form-control" required >
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="t_alamat" class="form-control" required >
				</div>
				<input type="submit" name="submit" value="simpan" class="btn btn-primary">
				<a href="<?php echo site_url('Mahasiswa/index') ?>" class="btn btn-warning">Batal</a>
			</div>
		</div>
	</form>
</div>