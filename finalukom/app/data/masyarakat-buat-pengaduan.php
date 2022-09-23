<?php 

include '../../conn/conn.php';

if (isset($_POST['submit'])) {
 	
 	$tanggal = date('Y-m-d');
 	$nik	 = $_POST['nik'];
 	$isi	 = $_POST['isi'];
 	$foto    = $_FILES['foto']['name'];
 	$tmp     = $_FILES['foto']['tmp_name'];

 	$sql = "INSERT INTO pengaduan VALUES ('','$tanggal','$nik','$isi','$foto','0')";
 	$exe = $conn->query($sql);

 	move_uploaded_file($tmp, "../../gambar/pengaduan/$foto");

 	echo "<script>
 			alert('Berhasil Membuat Laporan');
 			document.location.href='../../dashboard-masyarakat/?halaman=masyarakat-buat-laporan';
  		  </script>";
 } 

?>