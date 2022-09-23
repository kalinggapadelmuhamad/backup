<form class="form-control" method="POST" action="../app/data/petugas-validasi-proses.php" enctype="multipart/form-data">
	<table class="table">
		<input type="hidden" name="idpengaduan" value="<?= $data['id_pengaduan'];  ?>">
		<tr>
			<td><label>Nama Pelapor</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nama" required="" value="<?= $data['nama'] ?>" readonly=""></td>
		</tr>
		<tr>
			<td><label>Nik Pelapor</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nik" required="" value="<?= $data['nik'] ?>" readonly=""></td>
		</tr>
		<tr>
			<td><label>Isi Laporan</label></td>
			<td>:</td>
			<td><textarea class="form-control" name="password" required="" readonly=""><?= $data['isi_laporan'] ?></textarea></td>
		</tr>
		<tr>
			<td><label>Foto</label></td>
			<td>:</td>
			<td><img src="../gambar/pengaduan/<?= $data['foto'] ?>" class="img-fluid" width="100"></td>
		</tr>
		<tr>
			<td><label>Tanggapan</label></td>
			<td>:</td>
			<td><textarea class="form-control" name="tanggapan" required=""></textarea></td>
		</tr>
	</table>
	<button type="submit" name="submit" value="Tanggapi" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
	<button type="reset" name="reset"  class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></button>
</form>