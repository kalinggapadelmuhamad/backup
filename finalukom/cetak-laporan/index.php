<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <title>Aplikasi Pengaduan Masyarakat</title>
  </head>
  <body>
<?php 

session_start();
include '../conn/conn.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  if ($_SESSION['level'] == 'Admin') {
      $sql = "SELECT * FROM generate WHERE id_pengaduan = '$id'";
      $exe = $conn->query($sql);
      $data = $exe->fetch_array();

      include '../app/view/view-generate.php';
  }else{

      echo "<script>
              alert('Akses Di Larang');
              document.location.href='../../dashboard-admin/?halaman=laporan-selesai'
            </script>";

  }

  


} ?>
 
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://www.jsdelivr.com/package/npm/sweetalert2"></script>
  </body>
</html>