<a class="btn  btn-sm btn-info shadow-sm mb-1" data-toggle="modal" data-target="#editKategorimodal<?= $dataKategori->idKategori ?>"><i class="fas fa-edit"></i></a>
<div class="modal fade" id="editKategorimodal<?= $dataKategori->idKategori ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Edit Kategori</h6>
            </div>
            <form method="POST" action="">
                <?php require 'app/models/kategori/shortKat.php' ?>
                <div class="modal-body text-left">
                    <input type="hidden" value="<?= $dataShortkat->idKategori ?>" name="idKategori">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Kategori</label>
                        <input type="hidden" name="namaKategoriOld" class="form-control" id="formGroupExampleInput" value="<?= $dataShortkat->kategoriProduk ?>" required>
                        <input type="text" name="namaKategoriNew" class="form-control" id="formGroupExampleInput" value="<?= $dataShortkat->kategoriProduk ?>" required>
                    </div>
                    <div class=" form-group">
                        <label for="formGroupExampleInput2">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="deskKat"><?= $dataShortkat->deskKategori ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="kategori-update">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>