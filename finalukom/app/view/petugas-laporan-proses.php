<h5 class="text-uppercase mb-3">LAPORAN | <span class="btn btn-warning btn-sm text-white">proses</span></h5>
<div class="table-responsive">
<table class="table table-striped table-hover">
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
	$sql  = "CALL `laporanproses`();";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['nama']?></td>
			<td><?= $data['nik']?></td>
			<td><textarea class="form-control" readonly=""><?= $data['isi_laporan']?></textarea></td>
			<td><img src="../gambar/pengaduan/<?= $data['foto']?>" class="img-fluid" width="60"></td>
			<td><?= $data['status']?></td>
			<td>
				<a href="?halaman=petugas-laporan-proses&id=<?= $data['id_pengaduan'] ?>" class="btn btn-warning btn-md text-white"><i class="fas fa-check-circle"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
</div>

<?php 

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	include '../conn/conn.php';

	$sql = "SELECT * FROM laporanprosess WHERE id_pengaduan = '$id'";
 	$exe =  $conn->query($sql);
 	$data = $exe->fetch_array();
 	include '../app/view/petugas-form-tanggapi.php';
 } ?>