		<div class="container">
			<div class="alert alert-primary" role="alert" align="center">
				Andrian/1901050024
			</div>

			<div class="card border-danger bg-secondary" >
				<div class="card-body">
					<table id="myTable" class=" mt-3 table table-bordered bg-primary text-dark" style="width: 100%">
						<thead>
							<tr>
								<th>Nomor</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no =  1; ?>
							<?php foreach ($tbl_mahasiswa as $key) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $key->NIM ?></td>
									<td><?= $key->nama ?></td>
									<td><?= $key->alamat ?></td>
									<td>

										<?php if ( $this->session->userdata('hakPengguna') == 'admin' ) : ?>

											<a href="<?php echo site_url('Mahasiswa/edit/'.$key->ID); ?>" class="btn btn-info">Edit</a>
											<a onclick="return confirm('Yakin Akan Menghapus?')" 
											href="<?= site_url('Mahasiswa/delete/'.$key->ID) ?>" class="btn btn-danger">Delete</a>


											<?php elseif ( $this->session->userdata('hakPengguna') == 'operator' ) : ?>
												<a href="<?php echo site_url('Mahasiswa/edit/'.$key->ID); ?>" class="btn btn-info">Edit</a>

											<?php endif; ?>
										</td>
									</tr>
								<?php } ?>
							</tbody>
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


