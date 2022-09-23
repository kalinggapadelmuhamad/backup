<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"> Suplier</h1>
        <a href="printkategori.php" class=" btn btn-sm btn-danger shadow-sm mt-2"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- dataKategoriTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?php require_once "app/views/admin/suplier/addsuplier.php"; ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Kategori</th>
                            <th>Kategori Produk</th>
                            <th>Deskripsi Kategori</th>
                            <th>Tanggal Input</th>
                            <th>Tanggal Update</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($dataKategori = $exeKategori->fetch_object()) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $dataKategori->idKategori ?></td>
                                <td><?= $dataKategori->kategoriProduk ?></td>
                                <td><?= $dataKategori->deskKategori ?></td>
                                <td><?= $dataKategori->tglInput ?></td>
                                <td><?= $dataKategori->tglUpdate ?></td>
                                <td>
                                    <?php require "app/views/admin/suplier/editsuplier.php"; ?>
                                    <a href="?page=Kategori&hapussuplier&id=<?= $dataKategori->idKategori ?>" class="btn btn-sm btn-warning mb-1"><i class="fas fa-trash-alt"></i></a>
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