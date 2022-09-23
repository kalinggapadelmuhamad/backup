<?php 
session_start();
include '../../conn/conn.php';

if(isset($_GET['id'])) {

 	if ($_SESSION['level'] == 'Admin') {
 		
 		$id = $_GET['id'];

 		$sql = "DELETE FROM masyarakat WHERE nik = '$id'";
 		$exe = $conn->query($sql);

 		if($exe) {
 			echo "<script>
 					alert('Data Berhasil Di Hapus');
 					document.location.href='../../dashboard-admin/?halaman=petugas-data-masyarakat'
  				  </script>";
 		}
 	}else{
 		 	echo "<script>
 					alert('Akses Di Larang');
 					document.location.href='../../dashboard-admin/?halaman=petugas-data-masyarakat'
  				  </script>";
 	}

 } ?>