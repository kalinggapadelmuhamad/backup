<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Pengguna</h1>
        <a href="printuser.php" class=" btn btn-sm btn-danger shadow-sm mt-2"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?php require_once "app/views/admin/user/adduser.php"; ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
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
                                <td><?= $dataUser->levelUser ?></td>
                                <td>
                                    <?php require "app/views/admin/user/edituser.php"; ?>
                                    <a href="?page=User&hapususer&id=<?= $dataUser->idUser ?>" class="btn btn-sm btn-warning mb-1"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->