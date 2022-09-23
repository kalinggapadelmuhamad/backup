<?php 
session_start();
include '../../conn/conn.php';

if(isset($_GET['id'])) {

 	if ($_SESSION['level'] == 'Petugas') {
 		
 		$id = $_GET['id'];

 		$sql = "UPDATE pengaduan SET status = 'proses' WHERE id_pengaduan = '$id'";
 		$exe = $conn->query($sql);

 		if($exe) {
 			echo "<script>
 					alert('Laporan Berhasil Di Proses');
 					document.location.href='../../dashboard-admin/?halaman=petugas-laporan-baru'
  				  </script>";
 		}
 	}else{
 		 	echo "<script>
 					alert('Akses Di Larang');
 					document.location.href='../../dashboard-admin/?halaman=petugas-laporan-baru'
  				  </script>";
 	}

 } ?>