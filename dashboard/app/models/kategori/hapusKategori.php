<?php

if (isset($_GET['hapuskategori'])) {

    $idKat  = $_GET['id'];

    $sqlDelKat  = "DELETE FROM kategori WHERE idKategori = '$idKat'";
    $exeDelKat  = $conn->query($sqlDelKat);

    if ($exeDelKat) {

        echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Di Hapus',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = '?page=Kategori';
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
                            document.location = '?page=Kategori';
                        }
                    })
                </script>";
    }
}
