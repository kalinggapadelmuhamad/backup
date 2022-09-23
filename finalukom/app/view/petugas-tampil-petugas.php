<h5 class="text-uppercase mb-3">Data | Petugas</h5>
<a href="?halaman=petugas-data-petugas&menu=tambah-petugas" class="btn btn-primary btn-md mb-3"><i class="fas fa-user-plus"></i></a>
<div class="table-responsive">
<table class="table table-striped">
	<tr>
		<td>No</td>
		<td>Nama Petugas</td>
		<td>Username</td>
		<td>Password</td>
		<td>No Telp</td>
		<td>Jenis Kelamin</td>
		<td>Foto</td>
		<td>Level</td>
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "CALL `petugas`();";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['nama_petugas']?></td>
			<td><?= $data['username']?></td>
			<td><input class="form-control" type="password" value="<?= $data['password']?>" readonly=""></td>
			<td><?= $data['telp']?></td>
			<td><?= $data['jk']?></td>
			<td><img src="../gambar/profile/<?= $data['foto']?>" class="img-fluid" width="30"></td>
			<td><?= $data['level']?></td>
			<td>
				<a href="../app/data/petugas-delete-petugas.php?id=<?= $data['id_petugas'] ?>" class="btn btn-danger btn-md"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
</div>

<?php 
	
	if (isset($_GET['menu'])) {

	$menu = $_GET['menu'];

	if ($menu == 'tambah-petugas') {
		include '../app/view/petugas-add-petugas.php';
	}
} 

?>