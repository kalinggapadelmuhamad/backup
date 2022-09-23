<button class="btn  btn-sm btn-success shadow-sm " data-toggle="modal" data-target="#addsupliermodal"><i class="fas fa-plus-square"></i> Suplier</button>
<div class="modal fade" id="addsupliermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Tambah Suplier</h6>
            </div>
            <form method="POST" action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Kategori</label>
                        <input type="text" name="namaKategori" class="form-control" id="formGroupExampleInput" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Deskripsi</label>
                        <textarea name="deskKategori" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="kategori-add">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>