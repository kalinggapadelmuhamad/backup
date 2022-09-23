<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    if ($page == "Home") {
        require_once "app/views/admin/themplate/home.php";
    } elseif ($page == "Kategori") {
        require_once "app/views/admin/kategori/kategori.php";
    } elseif ($page == "Produk") {
        require_once "app/views/admin/produk/produk.php";
    } elseif ($page == "User") {
        require_once "app/views/admin/user/user.php";
    } elseif ($page == "Kasir") {
        require_once "app/views/admin/kasir/kasir.php";
    } elseif ($page == "Penjualan") {
        require_once "app/views/admin/report/penjualan.php";
    } elseif ($page == "Setting") {
        require_once "app/views/admin/themplate/profile.php";
    } elseif ($page == "Supplier") {
        require_once "app/views/admin/suplier/suplier.php";
    } else {
        header("location: ?page=Home");
        ob_end_flush();
    }
} else {
    header("location: ?page=Home");
    ob_end_flush();
}
