
<div class="card bg-transparent">
	<div class="card-header">
		Data Mahasiswa
	</div>
	<div class="card-body">

		<table class="table table-bordered clr">
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
						<a href="<?php echo site_url('Mahasiswa/edit/'.$key->ID); ?>" class="btn btn-primary">Edit</a>
						<a onclick="return confirm('Yakin Akan Menghapus?')" 
						href="<?= site_url('Mahasiswa/delete/'.$key->ID) ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php } ?>


		</table>

	</div>
</div>


