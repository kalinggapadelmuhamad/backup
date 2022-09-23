<?php 
session_start();
include '../../conn/conn.php';

if (isset($_POST['submit'])) {
 	
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	$sql  = "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'";
 	$exe  = $conn->query($sql);
 	$cek  = $exe->num_rows;
 	$data = $exe->fetch_array();

 	$getLevel = $data['level'];
 	$getId    = $data['id_petugas'];
 	$getNama  = $data['nama_petugas'];
 	$getTlp   = $data['telp'];
 	$getJk	  = $data['jk'];
 	$getfoto  = $data['foto'];


 	if($cek == 1 && $getLevel == 'Admin') {

 		$_SESSION['level']    = $getLevel;
 		$_SESSION['username'] = $username;
 		$_SESSION['password'] = $password;
 		$_SESSION['id']		  = $getId;
 		$_SESSION['nama']     = $getNama;
 		$_SESSION['telp']     = $getTlp;
 		$_SESSION['jk']       = $getJk;
 		$_SESSION['foto']     = $getfoto;
  		header('location: ../../dashboard-admin/?halaman=petugas-profile');

 	}else if($cek == 1 && $getLevel == 'Petugas') {

 		$_SESSION['level']    = $getLevel;
 		$_SESSION['username'] = $username;
 		$_SESSION['password'] = $password;
 		$_SESSION['id']		  = $getId;
 		$_SESSION['nama']     = $getNama;
 		$_SESSION['telp']     = $getTlp;
 		$_SESSION['jk']       = $getJk;
 		$_SESSION['foto']     = $getfoto;
 		header('location: ../../dashboard-admin/?halaman=petugas-profile');

 	}else{
 
 		header('location: ../../dashboard-admin/login.php');

 	}


 } 

?>