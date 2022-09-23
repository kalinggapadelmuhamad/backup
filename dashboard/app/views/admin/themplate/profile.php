<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Profile</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body px-5 py-5">
                    <center>
                        <?php
                        if ($dataProfile->jkUser == "Laki-Laki") { ?>
                            <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg" width="180">
                        <?php } else { ?>
                            <img class="img-profile rounded-circle" src="assets/img/undraw_profile_1.svg" width="180">
                        <?php } ?>
                    </center>
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-cog"></i> User Settings</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-row">
                            <input type="hidden" value="<?= $dataProfile->idUser ?>" name="idUser">
                            <div class="form-group col-md-6">
                                <label for="inputFullname">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputFullname" name="fullnameUser" value="<?= $dataProfile->fullnameUser ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="emailUser" value="<?= $dataProfile->emailUser ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPhone">Phone</label>
                                <input type="text" class="form-control" id="inputPhone" name="phoneUser" value="<?= $dataProfile->phoneUser ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputUsername">Username</label>
                                <input type="text" class="form-control" id="inputUsername" name="usernameUser" value="<?= $dataProfile->usernameUser ?>" readonly>
                            </div>
                            <div class=" form-group col-md-3">
                                <label for="passwordProfile">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="passwordUser" id="passwordProfile" value="<?= $dataProfile->passplainUser ?>" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="togglePasswordProfile"><i class="fas fa-eye"></i></i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="addresUser">Addres</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="addresUser" id="addresUser" required><?= $dataProfile->addresUser ?></textarea>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputJk">Jenis Kelamin</label>
                                <select name="jkUser" class="form-control" id="inputJk" required>
                                    <?php

                                    if ($dataProfile->jkUser == "Laki-Laki") { ?>
                                        <option value="Laki-Laki" selected>Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    <?php } else { ?>
                                        <option value="Laki-Laki">Laki - Laki</option>
                                        <option value="Perempuan" selected>Perempuan</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputLevel">Level</label>
                                <input type="text" class="form-control" id="inputLevel" value="Admin" readonly>
                            </div>
                        </div>
                        <button type="submit" class="btn  btn-sm btn-success btn-shadow-sm" name="profile-settings">Save Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>