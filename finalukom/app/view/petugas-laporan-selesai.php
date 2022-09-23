<h5 class="text-uppercase mb-3">LAPORAN | <span class="btn btn-success btn-sm text-white">selesai</span></h5>
<div class="table-responsive">
<table class="table table-striped table-hover table-responsive">
	<tr>
		<td>No</td>
		<td>Nik</td>
		<td>Nama</td>
		<td>Tanggal Pengaduan</td>
		<td>Isi Laporan</td>
		<td>Foto</td>
		<td>Tanggapan</td>
		<td>Tanggal Tanggapan</td>
		<td>Nama Petugas</td>
		<td>status</td>
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "CALL `laporanselesai`();";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['nik']?></td>
			<td><?= $data['nama']?></td>
			<td><?= $data['tgl_pengaduan']?></td>
			<td><textarea class="form-control" readonly=""><?= $data['isi_laporan']?></textarea></td>
			<td><img src="../gambar/pengaduan/<?= $data['foto']?>" class="img-fluid" width="50"></td>
			<td><textarea class="form-control" readonly=""><?= $data['tanggapan']?></textarea></td>
			<td><?= $data['tgl_tanggapan']?></td>
			<td><?= $data['nama_petugas']?></td>
			<td><?= $data['status']?></td>
			<td>
				<a href="../cetak-laporan/?id=<?= $data['id_pengaduan'] ?>" class="btn btn-success btn-md"><i class="fas fa-print"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
<div class="table-responsive">