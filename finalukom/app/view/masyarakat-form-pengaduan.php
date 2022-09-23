<form class="form-control" method="POST" action="../app/data/masyarakat-buat-pengaduan.php" enctype="multipart/form-data">
	<input class="form-control" type="hidden" name="nik" required="" value="<?= $_SESSION['nik'] ?>">
	<table class="table">
			<td><label>Laporan</label></td>
			<td>:</td>
			<td><textarea class="form-control" name="isi" required=""></textarea></td>
		</tr>
		<tr>
			<td><label>Foto</label></td>
			<td>:</td>
			<td><input class="form-control" type="file" name="foto" required=""></td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
	<button type="reset" name="reset"  class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></button>
</form>