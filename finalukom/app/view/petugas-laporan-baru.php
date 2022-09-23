<h5 class="text-uppercase mb-3">LAPORAN | <span class="btn btn-danger btn-sm">baru</span></h5>
<div class="table-responsive">
<table class="table table-striped table-hover text-center">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Nik</td>
		<td>Isi Laporan</td>
		<td>Foto</td>
		<td>Status</td>
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "CALL `laporanbaru`();";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<style type="text/css">
		</style>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['nama']?></td>
			<td><?= $data['nik']?></td>
			<td><textarea class="form-control" readonly=""><?= $data['isi_laporan']?></textarea></td>
			<td><img  src="../gambar/pengaduan/<?= $data['foto']?>" class="img-fluid" width="50"></td>
			<td><?= $data['status']?></td>
			<td>
				<a href="../app/data/petugas-proses-laporan-baru.php?id=<?= $data['id_pengaduan'] ?>" class="btn btn-danger btn-md"><i class="fas fa-chevron-circle-right"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
<div class="table-responsive">