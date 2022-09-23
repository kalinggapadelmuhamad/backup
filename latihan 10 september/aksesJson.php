<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Pencatatan Usia Penduduk Desa XYZ</h3>
	<form method="post">
		<table width="100%" border="0">  
			<tr>  
				<td width="150">Nama</td>  
				<td><input type="text" name="nama" required></td>  
			</tr>

			<tr>  
				<td width="150">Tahun Lahir</td>  
				<td><input type="number" name="tLahir" required></td>  
			</tr>

			<tr>  
				<td width="150">Tahun Sekarang</td>  
				<td><input type="number" name="tSekarang" required></td>  
			</tr>

			<tr>
				<td><button type="submit" value="simpan" name="simpan">Simpan</td>
				</tr> 
			</table>

		</form>

	<?php

	//fungsi menghitung usia berdasarkan pengurangan tahun sekarang-tahun lahir
	function hitUsia($tahunLahir, $tahunSekarang){
		return $tahunSekarang-$tahunLahir;
	}

	$data = "tesData.json"; //membuat variabel menyimpan file json untuk r & w
	$identitas = array(); //array kosong untuk menyimpan identitas

	//        ---Mengambil data dari berkas dan mengkonversi data tersebut menjadi array PHP---

	//Variabel $dataJson berisi data dari file dalam bentuk array Json.
	$dataJson = file_get_contents($data); 

	//Variabel $identitas berisi data pada $dataJson yang sudah dikonversi menjadi array PHP
	$identitas= json_decode($dataJson, true); 
	if(isset($_POST['simpan'])){

	//Variabel array kosong untuk menampung data usia yang dimasukkan dari form
	$usia = array();

	//Memasukkan hasil perhitungan usia ke dalam array $usia
	array_push($usia, $_POST['tLahir'], $_POST['tSekarang']);

	//Memasukkan nama dan perhitungan usia dari form ke dalam array $databaru.
	$dataBaru = array(
		'nama' => $_POST['nama'],
		'usia' => $usia

	);

	//Memasukkan data baru dari form ke dalam array identitas
		array_push($identitas,$dataBaru); 

		$dataJson = json_encode($identitas, JSON_PRETTY_PRINT);
		file_put_contents($data, $dataJson);
	}
	?>

	<br><br>

	<table border="1" style="width: 50%">
		<tr>
			<!-- Tabel Identitas -->
			<th>Nama</th>
			<th>Usia</th>
		</tr>

		<?php

		//	perulangan untuk menampilkan nama dan usia
		for ($i=0; $i < count($identitas); $i++){

		//	Memindahkan data dari array $identitas ke variabel baru.
			$nama = $identitas[$i]['nama']; 
			$usia = $identitas[$i]['usia']; 

		//	Menampilkan output identitas
			echo "<tr>
			<td>".$nama."</td>
			<td>".hitUsia($usia[0], $usia[1])."</td>
			</tr>";


		}
		?>
	</table>  

</body>
</html>


