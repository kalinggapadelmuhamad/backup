<?php

if (isset($_POST['kategori-add'])) {


    $katProduk  = $_POST['namaKategori'];
    $deskKat    = $_POST['deskKategori'];
    $tglInput = date('Y-m-d H:i:s');

    //filter
    $sqlFilterKat       = "SELECT kategoriProduk  FROM kategori WHERE kategoriProduk = '$katProduk'";
    $exeFilterKat       = $conn->query($sqlFilterKat);
    $cekFilterKatrows   = $exeFilterKat->num_rows;

    if ($cekFilterKatrows < 1) {

        $sqkAddKat      = "INSERT INTO kategori VALUES('','$katProduk','$deskKat','$tglInput',DEFAULT)";
        $exeAddKat      = $conn->query($sqkAddKat);

        if ($exeAddKat) {
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Di Tambah',
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
                        text: 'Data Gagal Di Tambah',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = '?page=Kategori';
                        }
                    })
                </script>";
        }
    } else {
        echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Data Sudah Ada',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = '?page=Kategori';
                        }
                    })
                </script>";
    }
}
