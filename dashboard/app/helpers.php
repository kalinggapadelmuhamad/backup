<?php

session_start();
date_default_timezone_set("Asia/Jakarta");

require_once 'app/config.php';
require_once 'app/models/profile/showprofile.php';
require_once 'app/models/profile/updateprofile.php';
require_once 'app/models/kategori/showkategori.php';
require_once 'app/models/kategori/addKategori.php';
require_once 'app/models/kategori/updateKategori.php';
require_once 'app/models/kategori/hapusKategori.php';
require_once 'app/models/user/showuser.php';
require_once 'app/models/user/adduser.php';
require_once 'app/models/user/hapususer.php';
require_once 'app/models/user/updateUser.php';
