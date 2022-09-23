<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h4 mb-0 text-gray-800">Produk</h3>
        <a href="#" class=" btn btn-sm btn-danger shadow-sm mt-2"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?php require_once "app/views/admin/produk/addproduk.php"; ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga Awal</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Stok Min</th>
                            <th>Tanggal Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>BRG001</td>
                            <td>System Architect</td>
                            <td>System Architect</td>
                            <td>System Architect</td>
                            <td>System Architect</td>
                            <td>System Architect</td>
                            <td>System Architect</td>
                            <td>System Architect</td>
                            <td>
                                <?php require_once "app/views/admin/produk/editproduk.php"; ?>
                                <a href="" class="btn btn-sm btn-warning mb-1"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->