<form class="form-control" method="POST" action="../app/data/petugas-tambah-petugas.php" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td><label>Nama Petugas</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nama" required=""></td>
		</tr>
		<tr>
			<td><label>Username</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="username" required=""></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td>:</td>
			<td><input class="form-control" type="password" name="password" required=""></td>
		</tr>
		<tr>
			<td><label>No Telephone</label></td>
			<td>:</td>
			<td><input class="form-control" type="number" name="telp" required=""></td>
		</tr>
		<tr>
			<td><label>Jenis Kelamnin</label></td>
			<td>:</td>
			<td>
				<select class="form-control" name="jk">
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>Foto</label></td>
			<td>:</td>
			<td><input class="form-control" type="file" name="foto" required=""></td>
		</tr>
		<tr>
			<td><label>Level</label></td>
			<td>:</td>
			<td>
				<select class="form-control" name="level">
					<option value="admin">Administrator</option>
					<option value="petugas">Petugas</option>
				</select>
			</td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
	<button type="reset" name="reset"  class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></button>
</form>