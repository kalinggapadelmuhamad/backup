<?php
	
	//Fungsi untuk menghitung Total Nilai.
	function totalNilai($nilaiMtk, $nilaiBindo, $nilaiBing){
		
		//Proses Hitung total nilai 
		$totalNilai = $nilaiMtk + $nilaiBindo + $nilaiBing;
		return $totalNilai; 
	}
	
	
	//	Array berisi data domisili.
	$domisili = ['Jakarta','Depok','Bogor'];
	
	
	//Mengurutkan array $domisili sesuai abjad A-Z.
	rsort($domisili);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Formulir Data Siswa</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	
	<body>

		<!-- Container -->
		<div class="container">
		<h3 class="mt-2 bg-primary text-white px-2 py-2">Formulir Data Siswa</h3>
		<!-- Form untuk memasukkan data siswa. -->
		<table style="width:100%">
		<form action="index.php" method="post" id="formSiswa">
			<tr>
				<!-- Masukan data nama. -->
				<td><label for="nama">Nama:</label></td>
				<td><input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required=""></td>
			</tr>
			<tr>
				<!-- Masukan data nomor induk. -->
				<td><label for="nomorInduk">Nomor Induk:</label></td>
				<td><input type="number" id="nomorInduk" class="form-control" name="nomorInduk" placeholder="Masukan NIK" required=""></td>
			</tr>
			<tr>
				<!-- Masukan data jenis kelamin. -->
				<td><label for="jenisKelamin">Jenis Kelamin:</label></td>
				<td><input type="radio" id="lakiLaki" name="jenisKelamin" value="L">
				<label for="lakilaki">Laki-laki</label><br>
				<input type="radio" id="perempuan" name="jenisKelamin" value="P">
				<label for="perempuan">Perempuan</label><br></td>
			</tr>
			<tr>
				<!-- Masukan data domisili. -->
				<td><label for="domisili">Domisili:</label></td>
				<td>
					<select name="domisili" class="form-control">
					<?php 
						
						//Purlangan Dropdown dengan array 
					    for ($i=0; $i < count($domisili); $i++) { 
					    	
					    	echo "<option value='{$domisili[$i]}'>{$domisili[$i]}</option>";
					    
					    }
					
					?>
					</select>
				</td>
			</tr>
			<tr>
				<!-- Masukan data nilai Matematika. -->
				<td><label for="matematika">Nilai Matematika:</label></td>
				<td><input class="form-control" type="number" id="matematika" name="matematika" placeholder="75" required=""></td>
			</tr>
			<tr>
				<!-- Masukan data nilai Bahasa Indonesia. -->
				<td><label for="bahasaIndonesia">Nilai Bahasa Indonesia:</label></td>
				<td><input class="form-control" type="number" id="bahasaIndonesia" name="bahasaIndonesia" placeholder="75" required=""></td>
			</tr>
			<tr>
				<!-- Masukan data nilai Bahasa Inggris. -->
				<td><label for="bahasaIndonesia">Nilai Bahasa Inggris:</label></td>
				<td><input class="form-control" type="number" id="bahasaInggris" name="bahasaInggris" placeholder="75" required=""></td>
			</tr>
			<tr>
				<!-- Tombol Kirim/Submit -->
				<td><button class="btn btn-large btn-primary" type="submit" form="formSiswa" value="Kirim" name="Kirim">Kirim</button></td>
				<td></td>
			</tr>
		</form>
		</table>
		
		<?php
			$berkas = "data/data.json"; // Variabel berisi nama berkas di mana data dibaca dan ditulis.
			$dataSiswa = array(); // Variabel array kosong untuk menampung data siswa dari berkas.
			
			//	Mengambil data dari berkas dan mengkonversi data tersebut menjadi array PHP.
			//	Variabel $dataJson berisi data dari berkas dalam bentuk array Json.
			$dataJson = file_get_contents($berkas);

			//	Variabel $dataSiswa berisi data pada $dataJson yang sudah dikonversi menjadi array PHP.;
			$dataSiswa = json_decode($dataJson, true);
			
			if(isset($_POST['Kirim'])){
				$nilai = array(); // Variabel array kosong untuk menampung data nilai yang dimasukkan dari form.
				
				//	Memasukkan data nilai ke dalam array $nilai.
				array_push($nilai, $_POST['matematika'], $_POST['bahasaIndonesia'], $_POST['bahasaInggris']);
				

				//	Memasukkan data siswa dari form ke dalam array $databaru.
				$dataBaru = array(
					'nama' => $_POST['nama'],
					'nomorInduk' => $_POST['nomorInduk'],
					'jenisKelamin' => $_POST['jenisKelamin'],
					'domisili' => $_POST['domisili'],
					'nilai' => $nilai,
				);
				
				array_push($dataSiswa,$dataBaru); // Menambahkan data baru ke dalam data yang sudah ada dalam berkas. 
				
				//	Mengkonversi kembali data siswa dari array PHP menjadi array Json dan menyimpannya ke dalam berkas.
				$dataJson = json_encode($dataSiswa, JSON_PRETTY_PRINT);
				file_put_contents($berkas, $dataJson);
			}
		?>

		<p><br><br>
		
		<!-- Tabel untuk menampilkan data siswa. -->
		<table style="width:100%" border="1" class="mb-5">
			<tr class="bg-primary text-white">
				<!-- Header tabel data siswa. -->
				<th>Nama</th>
				<th>Nomor Induk</th>
				<th>Jenis Kelamin</th>
				<th>Domisili</th>
				<th>Matematika</th>
				<th>Bahasa Indonesia</th>
				<th>Bahasa Inggris</th>
				<th>Total Nilai</th>
			</tr>
			
			<?php
				//	Perulangan untuk menampilkan data siswa.
				//	Variabel $i adalah index data siswa pada array $dataSiswa.
				for ($i=0; $i < count($dataSiswa); $i++){
					
					//	Memindahkan data dari dalam array $dataSiswa ke variabel baru.
					//	$nama adalah data nama siswa.
					//	$nomorInduk adalah data nomor induk siswa.
					//	$jenisKelamin adalah data jenis kelamin siswa.
					//	$nilai adalah data berisi nilai dalam bentuk array berisikan nilai Matematika, Bahasa Indonesia, Bahasa Inggris.
					$nama = $dataSiswa[$i]['nama']; // Contoh isi variabel: "John Doe".
					$nomorInduk = $dataSiswa[$i]['nomorInduk']; // Contoh isi variabel: "12345".
					$jenisKelamin = $dataSiswa[$i]['jenisKelamin']; // Isi variabel: "L" atau "P".
					$domisili = $dataSiswa[$i]['domisili']; // Contoh isi variabel: "Jakarta".
					$nilai = $dataSiswa[$i]['nilai']; // Contoh isi variabel: ["6", "7", "8"]

					// Penyesuaian jenis kelamin 
					if ($jenisKelamin === "L") {
						$jenisKelamin = "Laki-laki";
					} else {
						$jenisKelamin = "Perempuan";
					}
					
					//	Baris untuk menampilkan data siswa.
					echo "<tr>
							<td>".$nama."</td> <!-- Data nama. -->
							<td>".$nomorInduk."</td> <!-- Data nomor induk. -->
							<td>".$jenisKelamin."</td> <!-- Data jenis kelamin. -->
							<td>".$domisili."</td> <!-- Data domisili. -->
							<td>".$nilai[0]."</td> <!-- Data nilai Matematika. -->
							<td>".$nilai[1]."</td> <!-- Data nilai Bahasa Indonesia. -->
							<td>".$nilai[2]."</td> <!-- Data nilai Bahasa Inggris. -->
							<td>".totalNilai($nilai[0], $nilai[1], $nilai[2])."</td> <!-- Data total nilai, dengan memanggil fungsi totalNilai(). -->
						</tr>";
				}
			?>
			
		</table>		
	</body>
</html>