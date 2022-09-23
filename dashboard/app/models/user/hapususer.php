<?php

if (isset($_GET['hapususer'])) {

    $iduser  = $_GET['id'];

    $sqlDeluser  = "DELETE FROM user WHERE idUser = '$iduser'";
    $exeDeluser  = $conn->query($sqlDeluser);

    if ($exeDeluser) {

        echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Di Hapus',
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
                        text: 'Data Gagal Di Hapus',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = '?page=User';
                        }
                    })
                </script>";
    }
}
