<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>POS - Kategori Master</title>
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/package/dist/sweetalert2.min.css">
    <script src="assets/vendor/package/dist/sweetalert2.all.min.js"></script>
</head>

<body id="page-top">
    <?php require_once 'app/helpers.php'; ?>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <!-- dataKategoriTales Example -->
            <div class="card shadow mt-5">
                <div class="card-header text-center py-3">
                    <h1 class="h4 mt-5 text-gray-800">Data User</h1>
                    <p class="mt-0 text-gray-800"><?= date('Y-m-d H:i:s'); ?></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="" width="" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($dataUser = $exeUser->fetch_object()) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $dataUser->fullnameUser ?></td>
                                        <td><?= $dataUser->emailUser ?></td>
                                        <td><?= $dataUser->phoneUser ?></td>
                                        <td><?= $dataUser->addresUser ?></td>
                                        <td><?= $dataUser->jkUser ?></td>
                                        <td><?= $dataUser->usernameUser ?></td>
                                        <td><?= $dataUser->passplainUser ?></td>
                                        <td><?= $dataUser->levelUser ?></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
    <script>
        $(document).ready(function() {
            window.print();
        })
        window.onafterprint = function() {
            history.go(-1);
        };
    </script>
</body>

</html>