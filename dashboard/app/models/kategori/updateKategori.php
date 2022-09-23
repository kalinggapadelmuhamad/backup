<?php

if (isset($_POST['kategori-update'])) {

    $idKat          = $_POST['idKategori'];
    $katProdukOld   = $_POST['namaKategoriOld'];
    $katProdukNew   = $_POST['namaKategoriNew'];
    $deskKat        = $_POST['deskKat'];
    $tglUpdt        = date('Y-m-d H:i:s');

    //filter
    if ($katProdukNew == $katProdukOld) {

        $sqlUpdateKategori    = "UPDATE kategori SET 
                                    kategoriProduk      = '$katProdukNew',
                                    deskKategori        = '$deskKat',
                                    tglUpdate           = '$tglUpdt'
                                    WHERE idKategori    = '$idKat'";

        $exeUpdateKategori    = $conn->query($sqlUpdateKategori);

        if ($exeUpdateKategori) {

            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Di Update',
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
                        text: 'Data Gagal Di Update',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location = '?page=Kategori';
                        }
                    })
                </script>";
        }
    } else {

        $sqlFilterKatupdate         = "SELECT kategoriProduk  FROM kategori WHERE kategoriProduk = '$katProdukNew'";
        $exeFilterKatupdate         = $conn->query($sqlFilterKatupdate);
        $cekFilterKatrowsupdate     = $exeFilterKatupdate->num_rows;

        var_dump($cekFilterKatrowsupdate);

        if ($cekFilterKatrowsupdate < 1) {

            $sqlUpdateKategori    = "UPDATE kategori SET 
                                    kategoriProduk      = '$katProdukNew',
                                    deskKategori        = '$deskKat',
                                    tglUpdate           = '$tglUpdt'
                                    WHERE idKategori    = '$idKat'";

            $exeUpdateKategori    = $conn->query($sqlUpdateKategori);

            if ($exeUpdateKategori) {

                echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Data Berhasil Di Update',
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
                            text: 'Data Gagal Di Update',
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
}
