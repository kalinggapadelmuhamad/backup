<?php
$mahasiswa = array( 
        "Mahasiswa1" => array (   
            "nama" => 'Ani',
            "nim" => '14-523-001',    
            "jurusan" => 'Psikologi'
            ),

        "Mahasiswa2" => array (
           "nama" => 'Budi',
           "nim" => '14-523-002',
           "jurusan" => 'Pendidikan Dokter'
        ),

        "Mahasiswa3" => array (
           "nama" => 'Cindy',
           "nim" => '14-523-003',
          "jurusan" => 'Teknik Informatika'
  
     )
    );

// menampilkan key dan value
foreach($mahasiswa as $key => $mhs){
   echo $key ." : "."<br>";
   echo $mhs['nama'] . "<br>";
   echo $mhs['nim'] . "<br>";
   echo $mhs['jurusan'] . "<br><br>";

}
echo "--------------------------------------------";

$keys = array_keys($mahasiswa);
for($i = 0; $i < count($mahasiswa); $i++) {
	echo "<br>";
    foreach($mahasiswa[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

}


?>