<h5 class="text-uppercase mb-3">Detail Tiket</h5>
<table class="table table-striped table-hover">
	<tr>
		<td>No</td>
		<td>Id Pemesanan</td>
		<td>Tanggal Pemesanan</td>		
		<td>User</td>		
		<td>Pertandingan</td>
		<td>Venue</td>
		<td>Waktu Main</td>
		<td>Jenis Tiket</td>
		<td>Qty</td>
		<td>Harga</td>
		<td>Total Bayar</td>
		<td>Status Pemesanan</td>			
		<td>Status Tiket</td>
	
		<td>Action</td>
	</tr>
	<?php 

	$idUser = $_SESSION['idUser'];
	$sql  = "SELECT * FROM pemesanan a, tiket b , pertandingan c, user d WHERE a.idUser = '$idUser'AND d.idUser = '$idUser' AND a.idTiket = b.idTiket AND b.idPertandingan = c.idPertandingan AND a.statusTiket = 'Belum' ORDER BY tglPemesanan ASC;";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['idPemesanan']?></td>
			<td><?= $data['tglPemesanan']?></td>
			<td><?= $data['namaUser']?></td>
			<td><?= $data['tim1']?> VS <?= $data['tim2']?></td>
			<td><?= $data['venue']?></td>
			<td><?= $data['waktuTanding']?> - <?= $data['tanggalTanding']?></td>
			<td><?= $data['jenisKelas']?></td>
			<td><?= $data['qty']?></td>
			<td><?= $data['hargaTiket']?></td>
			<td><?= $data['hargaTiket']*$data['qty']?></td>
			<td>
				<?php
					if($data['statusPemesanan'] == 'Selesai'){ ?>
						<p class="btn btn-success btn-md" style="color:white">Selesai</p>	
					<?php }else{ ?>
						<p class="btn btn-warning btn-md" style="color:white">Diproses</p>	
					<?php } ?>
			</td>
			<td><?= $data['statusTiket']?></td>
			<td>
				<?php
					if($data['statusPemesanan'] == 'Selesai'){ ?>
						<a href="cetak.php?id=<?= $data['idPemesanan'] ?>&idU=<?= $data['idUser'] ?>" class="btn btn-danger btn-md" style="color:white">></a>	
					<?php }else{ ?>
						<a href="?halaman=user-Tiket&menu=upload&id=<?= $data['idPemesanan'] ?>" class="btn btn-warning btn-md" style="color:white">+</a>	
					<?php } ?>
			</td>
		</tr>
	
<?php }	?>
</table>
<div class="table-responsive">

<?php 
	
	if (isset($_GET['menu'])) {

	$menu = $_GET['menu'];

	if ($menu == 'upload') {
		include '../app/view/user/user-upload-pembayaran.php';
	}
} 

?>