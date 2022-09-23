<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Halaman | masyarakat</title>
  </head>
  <body>
    <?php include '../app/view/masyarakat-navbar.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <div class="side-bar">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?halaman=masyarakat-profile"><i class="fas fa-tachometer-alt"></i> Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fas fa-table"></i> Data</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="?halaman=petugas">Data Petugas</a></li>
                  <li><a class="dropdown-item" href="?halaman=masyarakat">Data Masyarakat</a></li>
                </ul>
              </li> -->
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fas fa-chart-bar"></i> Laporan</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="?halaman=laporan-baru">Laporan Baru</a></li>
                  <li><a class="dropdown-item" href="?halaman=laporan-proses">Laporan Di Proses</a></li>
                  <li><a class="dropdown-item" href="?halaman=laporan-selesai">Laporan Selesai</a></li>
                </ul>
              </li>

              <?php include '../app/view/masyarakat-accordion.php'; ?>


            </ul>
          </div>
        </div>

        <div class="col-md-10">
          <div class="main-bar">
                <?php include '../app/controller/controller.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://kit.fontawesome.com/0b9574c8b5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>