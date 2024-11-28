<?php

if (isset($_GET['url'])) {
    switch ($_GET['url']) {
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            break;

        case 'lihat-pengaduan':
            include 'lihat-pengaduan.php';
            break;

        case 'detail-pengaduan':
            include 'detail-pengaduan.php';
            break;

        case 'edit-pengaduan':
            include 'edit-pengaduan.php';
            break;

        default:
            echo 'Halaman Tidak Ditemukan';
            break;
    }
} else {
    echo "Welcome To E-Report Application<br>";
    echo "You are Logged in as : " . $_SESSION['nama'];
}
?>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>