<?php 

 //Buat Koneski ke DB
 $conn = new mysqli(
 	'localhost',
 	'root',
 	'',
 	'rumahsakit'
 ); 

 //Cek Koneksi erro atau tidak 
 if (!$conn) {
 	echo "Koneksi error";
 }

?>