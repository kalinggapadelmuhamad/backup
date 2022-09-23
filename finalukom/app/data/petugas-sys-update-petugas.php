<?php 
include '../../conn/conn.php';
if (isset($_POST['submit'])) {

	$id 		= $_POST['id'];
	$nama		= $_POST['nama'];
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$jk			= $_POST['jk'];
	$telp		= $_POST['telp'];

	$sql = "UPDATE petugas SET nama_petugas = '$nama',username = '$username',password='$password',jk='$jk',telp='$telp' WHERE id_petugas = '$id'";
	$exe = $conn->query($sql);

	echo "<script>
 			alert('Data Berhasil Di Update');
 			document.location.href='../../dashboard-admin/'
  		  </script>";

  	session_start();
  	session_destroy();


} 

?>