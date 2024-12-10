<?php

$nik        = $_POST['NIK'];
$nama       = $_POST['Nama'];
$username   = $_POST['Username'];
$password   = $_POST['Password'];
$telp       = $_POST['Telp'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
include 'koneksi.php';

$check_nik = "SELECT * FROM masyarakat WHERE nik = '$nik'";
$result = mysqli_query($koneksi, $check_nik);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('NIK sudah terdaftar. Gunakan NIK lain.'); window.location.assign('register.php');</script>";
    exit();
}

$sql = "INSERT INTO masyarakat(nik, nama, username, password, telepon) VALUES('$nik','$nama','$username','$hashed_password','$telp')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Anda Berhasil Mendaftar.'); window.location.assign('index.php');</script>";
} else {
    echo "<script>alert('Anda Gagal Mendaftar.'); window.location.assign('register.php');</script>";
}
