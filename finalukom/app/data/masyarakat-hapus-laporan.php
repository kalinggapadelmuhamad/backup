<?php 

include '../../conn/conn.php'; 
if (isset($_GET['id'])) {
	$id_pengaduan = $_GET['id'];
	$status = $_GET['status'];

	if ($status == 'proses' || $status == 'selesai') {
		
		echo "<script>
 				alert('Gagal Laporan Sedang Di Periksa');
 				document.location.href='../../dashboard-masyarakat/?halaman=masyarakat-buat-laporan'
  		  	  </script>";
	}else{

		$sql = "DELETE FROM pengaduan WHERE id_pengaduan = '$id_pengaduan'";
		$exe = $conn->query($sql);
		

		echo "<script>
 				alert('Berhasil Hapus Data');
 				document.location.href='../../dashboard-masyarakat/?halaman=masyarakat-buat-laporan'
  		  	  </script>";

	}
}



?>