<?php
session_start(); 
include '../../conn/conn.php';
if (isset($_POST['submit'])) {

	if ($_SESSION['level'] == 'Admin') {

		$nama 	  = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$telp     = $_POST['telp'];
		$jk       = $_POST['jk'];
		$foto     = $_FILES['foto']['name'];
		$level    = $_POST['level'];
		$tmpname  = $_FILES['foto']['tmp_name'];

		$sql = "INSERT INTO petugas VALUES ('','$nama','$username','$password','$telp','$jk','$foto','$level')";
		$exe = $conn->query($sql);
		move_uploaded_file($tmpname, "../../gambar/profile/$foto");

		 echo "<script>
 					alert('Berhasil Tambah Data');
 					document.location.href='../../dashboard-admin/?halaman=petugas-data-petugas'
  				 </script>";

	}else{

		 echo "<script>
 					alert('Akses Di Larang');
 					document.location.href='../../dashboard-admin/?halaman=petugas&menu=tambah-petugas-data-petugas'
  				 </script>";
	}
 	
 } 

?>