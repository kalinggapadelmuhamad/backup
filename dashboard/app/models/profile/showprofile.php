
<?php

$idUser = 1;
$sqlProfile    = "SELECT * FROM user WHERE idUser = '$idUser'";
$exeProfile    = $conn->query($sqlProfile);
$dataProfile   = $exeProfile->fetch_object();
