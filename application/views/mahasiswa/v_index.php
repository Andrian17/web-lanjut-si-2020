<div class="card bg-transparent border border-danger">
	<div class="card-header text-light border-danger">
		Featured
	</div>
	<div class="card-body border-danger">
		<table class="table table-bordered text-light" id="">
			<tr>
				<td>Nomor</td>
				<td>NIM</td>
				<td>Nama</td>
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

						<?php if ( $this->session->userdata('hakPengguna') == 'admin' ) : ?>

							<a href="<?php echo site_url('Mahasiswa/edit/'.$key->ID); ?>" class="btn btn-primary">Edit</a>
							<a onclick="return confirm('Yakin Akan Menghapus?')" 
							href="<?= site_url('Mahasiswa/delete/'.$key->ID) ?>" class="btn btn-danger">Delete</a>
							<?php elseif ( $this->session->userdata('hakPengguna') == 'operator' ) : ?>
								<a href="<?php echo site_url('Mahasiswa/edit/'.$key->ID); ?>" class="btn btn-primary">Edit</a>

							<?php endif; ?>
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>













<!-- <div class="card">
	<div class="card-header">
		Data Mahasiswa
	</div>
	<div class="card-body">

		
	</div>
</div> -->


