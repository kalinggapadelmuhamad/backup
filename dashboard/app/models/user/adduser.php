<?php

if (isset($_POST['user-add'])) {

    $fullname       = $_POST['namaUser'];
    $emailUser      = $_POST['emailUser'];
    $phoneUser      = $_POST['phoneUser'];
    $alamatUser     = $_POST['alamatUser'];
    $jkUser         = $_POST['jkUser'];
    $levelUser      = $_POST['levelUser'];
    $usernameUser   = $_POST['usernameUser'];
    $passwordPlain  = $_POST['passwordUser'];
    $passwordHash   = password_hash($passwordPlain, PASSWORD_DEFAULT);

    //filter username
    $sqlcekusername     = "SELECT * FROM user WHERE usernameUser = '$usernameUser'";
    $execekusername     = $conn->query($sqlcekusername);
    $cekusernamerows    = $execekusername->num_rows;

    if ($cekusernamerows < 1) {
        echo 'belom ada';

        $sqlAdduser = "INSERT INTO user VALUES(
                                '',
                                '$fullname',
                                '$emailUser',
                                '$phoneUser',
                                '$usernameUser',
                                '$passwordHash',
                                '$passwordPlain',
                                '$jkUser',
                                '$alamatUser',
                                '$levelUser'
                                )";

        $exeadduser = $conn->query($sqlAdduser);

        if ($exeadduser) {

            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Di Tambah',
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
                        text: 'Data Gagal Di Tambah',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = '?page=User';
                        }
                    })
                </script>";
        }
    } else {
        echo 'ada';

        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: 'Data Sudah Ada',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location = '?page=User';
                    }
                })
            </script>";
    }
}
