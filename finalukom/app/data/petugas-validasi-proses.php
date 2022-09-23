<?php 
session_start();
include '../../conn/conn.php';

if(isset($_POST['submit'])) {

 	if ($_SESSION['level'] == 'Petugas') {
 		
 		$id 	 	= $_POST['idpengaduan'];
 		$tanggal 	= date('Y-m-d');
 		$tang    	= $_POST['tanggapan'];
 		$id_petugas = $_SESSION['id'];

 		$sql1 = "INSERT INTO tanggapan VALUES ('','$id','$tanggal','$tang','$id_petugas')";
 		$exe1 = $conn->query($sql1);

 		$sql = "UPDATE pengaduan SET status = 'selesai' WHERE id_pengaduan = '$id'";
 		$exe = $conn->query($sql);

 		if($exe) {
 			echo "<script>
 					alert('Laporan Berhasil Di Proses');
 					document.location.href='../../dashboard-admin/?halaman=petugas-laporan-selesai'
  				  </script>";
 		}
 	}else{
 		 	echo "<script>
 					alert('Akses Di Larang');
 					document.location.href='../../dashboard-admin/?halaman=petugas-laporan-proses'
  				  </script>";
 	}

 } ?>