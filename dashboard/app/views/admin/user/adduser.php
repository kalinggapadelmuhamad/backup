<button class="btn  btn-sm btn-success shadow-sm " data-toggle="modal" data-target="#addusermodal"><i class="fas fa-plus-square"></i> Pengguna</button>
<div class="modal fade" id="addusermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h6>
            </div>
            <form method="POST" action="">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Nama Lengkap</label>
                            <input type="text" class="form-control" id="inputName" name="namaUser" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="emailUser" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPhone">Phone</label>
                            <input type="number" class="form-control" id="inputPhone" name="phoneUser" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAlamat">Alamat</label>
                            <input type="text" class="form-control" id="inputAlamat" name="alamatUser" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputJk">Jenis Kelamin</label>
                            <select name="jkUser" class="form-control" id="inputJk">
                                <option value="Laki-Laki" selected>Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="levelUser">Level</label>
                            <select name="levelUser" class="form-control" id="levelUser">
                                <option value="Admin" selected>Admin</option>
                                <option value="Kasir">Kasir</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputUsername">Username</label>
                            <input type="text" class="form-control" id="inputUsername" name="usernameUser" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="passwordUser" id="passwordProfile" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="togglePasswordProfile"><i class="fas fa-eye"></i></span>
                                </div>
                            </div>
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