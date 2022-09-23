<a class="btn  btn-sm btn-info shadow-sm mb-1" data-toggle="modal" data-target="#editUsermodal<?= $dataUser->idUser ?>"><i class="fas fa-edit"></i></a>
<div class="modal fade" id="editUsermodal<?= $dataUser->idUser ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Edit User</h6>
            </div>
            <form method="POST" action="">
                <?php require 'app/models/user/shortUser.php'; ?>
                <div class="modal-body text-left">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Nama Lengkap</label>
                            <input type="hidden" value="<?= $dataShortuser->idUser; ?>" name="idUser">
                            <input type="text" class="form-control" id="inputName" name="namaUser" required value="<?= $dataShortuser->fullnameUser; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="emailUser" required value="<?= $dataShortuser->emailUser; ?>">
                        </div>
                    </div>
                    <div class=" form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPhone">Phone</label>
                            <input type="number" class="form-control" id="inputPhone" name="phoneUser" required value="<?= $dataShortuser->phoneUser; ?>">
                        </div>
                        <div class=" form-group col-md-6">
                            <label for="inputAlamat">Alamat</label>
                            <input type="text" class="form-control" id="inputAlamat" name="alamatUser" required value="<?= $dataShortuser->addresUser; ?>">
                        </div>
                    </div>
                    <div class=" form-row">
                        <div class="form-group col-md-6">
                            <label for="inputJk">Jenis Kelamin</label>
                            <select name="jkUser" class="form-control" id="inputJk">
                                <?php
                                if ($dataShortuser->jkUser == "Laki-Laki") { ?>
                                    <option value="Laki-Laki" selected>Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                <?php } else { ?>
                                    <option value="Laki-Laki">Laki - Laki</option>
                                    <option value="Perempuan" selected>Perempuan</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="levelUser">Level</label>
                            <select name="levelUser" class="form-control" id="levelUser">
                                <?php
                                if ($dataShortuser->levelUser == "Admin") { ?>
                                    <option value="Admin" selected>Admin</option>
                                    <option value="Kasir">Kasir</option>
                                <?php } else { ?>
                                    <option value="Admin">Admin</option>
                                    <option value="Kasir" selected>Kasir</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>New Password</label>
                            <div class="input-group">
                                <input type="hidden" class="form-control" name="passwordUserOld" id="passwordProfile" value="<?= $dataShortuser->passplainUser; ?>">
                                <input type="password" class="form-control" name="passwordUserNew" id="passwordProfile">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="togglePasswordProfile"><i class="fas fa-eye"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="user-update">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>