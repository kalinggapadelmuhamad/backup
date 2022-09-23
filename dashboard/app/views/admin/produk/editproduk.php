<a class="btn  btn-sm btn-info shadow-sm mb-1" data-toggle="modal" data-target="#editKategorimodal" data-id="ssss"><i class="fas fa-edit"></i></a>
<div class="modal fade" id="editKategorimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Edit Produk</h6>
            </div>
            <form method="POST" action="">
                <div class="modal-body text-left">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="kodeBarang">Kode Produk</label>
                            <input type="text" class="form-control" id="kodeBarang" name="kodeBarang" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="kategoriBarang">Kategori Produk</label>
                            <select name="kategoriBarang" class="form-control" id="kategoriBarang">
                                <option value="Kategori 1" selected>Kategori 1</option>
                                <option value="Kategori 2">Kategori 2</option>
                                <option value="Kategori 3">Kategori 3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="namaProduk">Nama Produk</label>
                            <input type="text" class="form-control" id="namaProduk" name="namaProduk" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="hargaAwal">Harga Awal</label>
                            <input type="number" class="form-control" id="hargaAwal" name="hargaAwal" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="hargaJual">Harga Jual</label>
                            <input type="number" class="form-control" id="hargaJual" name="hargaJual" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="stokBarang">Stok Produk</label>
                            <input type="number" class="form-control" id="stokBarang" name="stok" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="stokMin">Stok Minimum</label>
                            <input type="number" class="form-control" id="stokMin" name="stokMin" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="user-add">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>