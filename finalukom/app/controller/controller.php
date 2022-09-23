<?php 

if (isset($_GET['halaman'])) {

 	$halaman = $_GET['halaman'];

 	if ($halaman == 'petugas-data-petugas') {
 		include '../app/view/petugas-tampil-petugas.php';
 	}else if ($halaman == 'petugas-laporan-baru') {
 		include '../app/view/petugas-laporan-baru.php';
 	}else if ($halaman == 'petugas-laporan-proses') {
 		include '../app/view/petugas-laporan-proses.php';
 	}else if ($halaman == 'petugas-laporan-selesai') {
 		include '../app/view/petugas-laporan-selesai.php';
 	}else if ($halaman == 'petugas-profile') {
 		include '../app/view/petugas-profile.php';
 	}else if ($halaman == 'petugas-data-masyarakat') {
 		include '../app/view/petugas-tampil-masyarakat.php';
 	}else if ($halaman == 'masyarakat-profile') {
 		include '../app/view/masyarakat-profile.php';
 	}else if ($halaman == 'masyarakat-buat-laporan') {
 		include '../app/view/masyarakat-buat-laporan.php';
 	}else if ($halaman == 'masyarakat-laporan-selesai') {
 		include '../app/view/masyarakat-laporan-selesai.php';
 	}else{

 	}

 }

?>