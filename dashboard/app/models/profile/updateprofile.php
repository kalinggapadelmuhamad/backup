<?php

if (isset($_POST['profile-settings'])) {

    $idUser         = $_POST['idUser'];
    $fullnameUser   = $_POST['fullnameUser'];
    $emailUser      = $_POST['emailUser'];
    $phoneUser      = $_POST['phoneUser'];
    $passplainUser  = $_POST['passwordUser'];
    $passhashUser   = password_hash($passplainUser, PASSWORD_DEFAULT);
    $jkUser         = $_POST['jkUser'];
    $addresUser     = $_POST['addresUser'];

    $sqlUpdateProfile    = "UPDATE user SET 
                                    fullnameUser    = '$fullnameUser',
                                    emailUser       = '$emailUser',
                                    phoneUser       = '$phoneUser',
                                    passhashUser    = '$passhashUser',
                                    passplainUser   = '$passplainUser',
                                    jkUser          = '$jkUser',
                                    addresUser      = '$addresUser'
                                    WHERE idUser    = '$idUser'";

    $exeupdateProfile    = $conn->query($sqlUpdateProfile);
    if ($exeupdateProfile) {
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Data Berhasil Di Update',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = '?page=Setting';
                    }
                })
            </script>";
    } else {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: 'Data Gagal Di Update',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = '?page=Setting';
                    }
                })
            </script>";
    }
}
