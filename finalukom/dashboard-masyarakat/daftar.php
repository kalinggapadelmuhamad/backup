<!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Halaman Daftar | Masyarakat</title>
</head>
<body>
  <div class="container">
    <div class="row content">
      <div class="col-md-6">
        <img src="../gambar/profile/default.png" class="img-fluid">
      </div>
      <div class="col-md-6">
         <form method="POST" enctype="multipart/form-data" action="../app/data/add-masyarakat.php">
              <h3>Daftar Masyarakat</h3>
              <div class="form-group">
                <label>NIK</label>
                <input type="number" name="nik" required="" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required="" class="form-control">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required="" class="form-control">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required="" class="form-control">
              </div>
              <div class="form-group">
                <label>No Handphone</label>
                <input type="number" name="telp" required="" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jk">
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" required="" class="form-control">
              </div>
              <input class="btn btn-success btn-md mt-2" type="submit" name="submit" value="Daftar">
          </form>
      </div>
    </div>
  </div>
    <script src="https://kit.fontawesome.com/0b9574c8b5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>