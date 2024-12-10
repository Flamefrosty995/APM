<?php

$nik        = $_POST['NIK'];
$password   = $_POST['password'];


include 'koneksi.php';
$sql = "SELECT *  FROM masyarakat WHERE nik='$nik'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
var_dump($data);

if (password_verify($password, $data['password'])) {
    if ($data['nik'] === $nik) {
        session_start();
        $_SESSION['NIK']        = $nik;
        $_SESSION['nama']       = $data['nama'];
        $_SESSION['username']   = $data['username'];

        header("Location:masyarakat.php");
    } else {
        echo "<script>alert('Maaf Anda Gagal Login'); window.location.assign('index.php');</script>";
    }
} else {
    echo "<script>alert('Maaf Anda Gagal Login'); window.location.assign('index.php');</script>";
}
