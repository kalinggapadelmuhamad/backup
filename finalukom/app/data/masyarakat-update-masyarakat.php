<?php 
include '../../conn/conn.php';
if (isset($_POST['submit'])) {

	$id 		= $_POST['id'];
	$nama		= $_POST['nama'];
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$jk			= $_POST['jk'];
	$telp		= $_POST['telp'];

	$sql = "UPDATE masyarakat SET nama = '$nama',username = '$username',password='$password',jk='$jk',telp='$telp' WHERE nik = '$id'";
	$exe = $conn->query($sql);

	echo "<script>
 			alert('Data Berhasil Di Update');
 			document.location.href='../../dashboard-masyarakat/'
  		  </script>";

  	session_start();
  	session_destroy();


} 

?>