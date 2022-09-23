<?php 
include '../../conn/conn.php';
if (isset($_POST['submit'])) {
	
	$nik 		= $_POST['nik'];
	$nama 		= $_POST['nama'];
	$username	= $_POST['username'];
	$password	= $_POST['password'];	
	$telp		= $_POST['telp'];
	$jk			= $_POST['jk'];
	$foto		= $_FILES['foto']['name'];
	$tmpname	= $_FILES['foto']['tmp_name'];

	$sql = "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp','$jk','$foto')";
	$exe = $conn->query($sql);

	if ($exe) {

		move_uploaded_file($tmpname, "../../gambar/profile/$foto");
		
		echo "<script>
 					alert('Berhasil Tambah Data');
 					document.location.href='../../dashboard-masyarakat/login.php'
  				 </script>";

	}

} ?>