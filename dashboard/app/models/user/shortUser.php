<?php

$sqlShortUser   = "SELECT * FROM user WHERE idUser = '$dataUser->idUser'";
$exeShortuser   = $conn->query($sqlShortUser);
$dataShortuser  = $exeShortuser->fetch_object();
