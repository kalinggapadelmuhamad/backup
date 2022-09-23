<h5 class="text-uppercase">Hi Wellcome <?= $_SESSION['nama'] ?></h5>
<div class="container mt-3">
<?php if (isset($_GET['menu'])) {
	$menu = $_GET['menu'];

	if ($menu == 'edit') { ?>

		<form method="POST" action="../app/data/masyarakat-update-masyarakat.php">
			<center>
			<img width="100" src="../gambar/profile/<?= $_SESSION['foto'] ?>">
			</center>
			<table class="table center mt-2">
				<input type="hidden" name="id" value="<?= $_SESSION['nik'] ?>">
				<tr>
					<td>Nama</td>
					<td><input class="form-control" type="text" name="nama" value="<?= $_SESSION['nama'] ?>"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input class="form-control" type="text" name="username" value="<?= $_SESSION['username'] ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input class="form-control" type="password" name="password" value="<?= $_SESSION['password'] ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<select name="jk" class="form-control">
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>No Hp</td>
					<td><input class="form-control" type="number" name="telp" value="<?= $_SESSION['telp'] ?>"></td>
				</tr>
			</table>
				<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
				<a href="?halaman=masyarakat-profile" class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></a>
			</div>
		</form>

		
<?php	}
}else{ ?>

	<center>
	<img class="img-rounded" width="100" src="../gambar/profile/<?= $_SESSION['foto'] ?>">
	</center>
	<table class="table center mt-4">
		<tr>
			<td>Nama</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $_SESSION['nama'] ?>"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $_SESSION['username'] ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input class="form-control" type="password" name="" readonly="" value="<?= $_SESSION['password'] ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $_SESSION['jk'] ?>"></td>
		</tr>
		<tr>
			<td>No Hp</td>
			<td><input class="form-control" type="text" name="" readonly="" value="<?= $_SESSION['telp'] ?>"></td>
		</tr>
	</table>
	<a href="?halaman=masyarakat-profile&menu=edit" class="btn btn-primary btn-md"><i class="fas fa-user-edit"></i></a>



<?php } ?>