<h5 class="text-uppercase mb-3">Data | Masyarakat</h5>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<tr>
		<td>No</td>
		<td>Nik</td>
		<td>Nama</td>
		<td>Username</td>
		<td>Password</td>
		<td>No Telp</td>
		<td>Jenis Kelamin</td>
		<td>Foto</td>
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "CALL `masyarakat`();";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['nik']?></td>
			<td><?= $data['nama']?></td>
			<td><?= $data['username']?></td>
			<td><input class="form-control" type="password" value="<?= $data['password']?>" readonly=""></td>
			<td><?= $data['telp']?></td>
			<td><?= $data['jk']?></td>
			<td><img src="../gambar/profile/<?= $data['foto']?>" class="img-fluid" width="30"></td>
			<td>
				<a href="../app/data/petugas-delete-masyarakat.php?id=<?= $data['nik'] ?>" class="btn btn-danger btn-md"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
<div class="table-responsive">