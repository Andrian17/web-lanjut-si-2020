
<table id="tabel-data" class="table table-bordered text-light" >
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

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
