<?php 
session_start();
include '../../conn/conn.php';

if (isset($_POST['submit'])) {
 	
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	$sql  = "SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password'";
 	$exe  = $conn->query($sql);
 	$cek  = $exe->num_rows;
 	$data = $exe->fetch_array();

 	$getNik    = $data['nik'];
 	$getNama  = $data['nama'];
 	$getTlp   = $data['telp'];
 	$getJk	  = $data['jk'];
 	$getfoto  = $data['foto'];


 	if($cek == 1) {

 		$_SESSION['username'] = $username;
 		$_SESSION['password'] = $password;
 		$_SESSION['nik']	  = $getNik;
 		$_SESSION['nama']     = $getNama;
 		$_SESSION['telp']     = $getTlp;
 		$_SESSION['jk']       = $getJk;
 		$_SESSION['foto']     = $getfoto;
  		header('location: ../../dashboard-masyarakat/?halaman=masyarakat-profile');

 	}else{
 
 		header('location: ../../dashboard-masyarakat/login.php');

 	}


 } 

?>