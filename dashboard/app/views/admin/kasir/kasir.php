<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kasir</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-md-2">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <label for="kodeBarang">Input Kode Barang</label>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="kodeBarang" name="kodeBarang" autofocus required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-md-10">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-cart-arrow-down"></i> Chart</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>Total</th>
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
                                        <td>
                                            <?php require_once "app/views/admin/produk/editproduk.php"; ?>
                                            <a href="" class="btn btn-sm btn-warning mb-1"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn  btn-sm btn-info btn-shadow-sm" name="profile-settings">Print</button>
                        <button type="submit" class="btn  btn-sm btn-success btn-shadow-sm" name="profile-settings">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>