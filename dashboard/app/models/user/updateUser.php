<?php

if (isset($_POST['user-update'])) {

    $idUser         = $_POST['idUser'];
    $fullnameUser   = $_POST['namaUser'];
    $emailUser      = $_POST['emailUser'];
    $phoneUser      = $_POST['phoneUser'];
    $alamatUser     = $_POST['alamatUser'];
    $jkUser         = $_POST['jkUser'];
    $levelUser      = $_POST['levelUser'];

    if (empty($_POST['passwordUserNew'])) {
        $passwordUser    = $_POST['passwordUserOld'];
        $passHashUser    = password_hash($passwordUser, PASSWORD_DEFAULT);
    } else {
        $passwordUser    = $_POST['passwordUserNew'];
        $passHashUser    = password_hash($passwordUser, PASSWORD_DEFAULT);
    }

    //filter
    $sqlUpdateUser   = "UPDATE user SET
                                fullnameUser            = '$fullnameUser',
                                emailUser               = '$emailUser',
                                phoneUser               = '$phoneUser',
                                passhashUser            = '$passHashUser',
                                passplainUser           = '$passwordUser',
                                jkUser                  = '$jkUser',
                                addresUser              = '$alamatUser',
                                levelUser               = '$levelUser'
                                WHERE idUser            = '$idUser'";

    $exeUpdateUser    = $conn->query($sqlUpdateUser);

    if ($exeUpdateUser) {

        echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Di Update',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = '?page=User';
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
                            document.location = '?page=User';
                        }
                    })
                </script>";
    }
}
