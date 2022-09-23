<?php 

 //Mengambil Koneksi database.
 include '../config/config.php';

 if (isset($_POST['daftar'])) {
     
    //Menampung semua data yang di perlukan
  	$nPasien 	 = $_POST['nPasien'];
  	$nRekammedis = $_POST['nRekammedis'];
  	$poli		 = $_POST['poli'];
  	$tPeriksa	 = $_POST['tPeriksa'];
  	$jPembayaran = $_POST['jPembayaran'];
    
    //Membuat Perintah INSERT Data
    $query 	= "INSERT INTO tbrawatjalan VALUES ('','$nPasien','$nRekammedis','$poli','$tPeriksa','$jPembayaran')";

    //Eksekusi Perintah INSERT Data
  	$exec = $conn->query($query);
    
    //Cek Perintah Eksekusi Data.
  	if ($exec) {
  		header('location: ../../index.php?key=success');
  	} else {
  		header('location: ../../index.php?key=error');
  	}


  } else {

  	//mengembalikan user ke index jika tidak menerima request darfar
  	header('location: ../../index.php');

  }

?>