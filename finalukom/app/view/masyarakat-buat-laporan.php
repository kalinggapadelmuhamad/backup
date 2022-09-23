<h5 class="text-uppercase mb-3">Buat | <span class="btn btn-danger btn-sm">laporan</span></h5>
<a href="?halaman=masyarakat-buat-laporan&menu=tambah-laporan" class="btn btn-primary btn-md mb-3"><i class="fas fa-plus-square"></i></a>
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
	$nik = $_SESSION['nik'];
	$sql  = "SELECT * FROM pengaduanmas WHERE nik = '$nik'";
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
				<a href="../app/data/masyarakat-hapus-laporan.php?id=<?= $data['id_pengaduan'] ?>&status=<?= $data['status'] ?>" class="btn btn-danger btn-md"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
</div>

<?php if (isset($_GET['menu'])) {
	$menu = $_GET['menu'];

	if ($menu == 'tambah-laporan') {
		include '../app/view/masyarakat-form-pengaduan.php';
	}
} ?>