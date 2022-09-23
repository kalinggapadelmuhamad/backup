<?php

$idKat          = $dataKategori->idKategori;
$sqlShortkat    = "SELECT * FROM kategori WHERE idKategori = '$idKat' ";
$exeShortkat    = $conn->query($sqlShortkat);
$dataShortkat   = $exeShortkat->fetch_object();
