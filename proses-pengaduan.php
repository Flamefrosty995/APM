<?php
session_start();
include 'koneksi.php';

$sqli = "SELECT * FROM pengaduan ORDER BY id_pengaduan DESC";
$query = mysqli_query($koneksi, $sqli);
$data = mysqli_fetch_assoc($query);

$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik           = $_SESSION['NIK'];
$isi_laporan   = $_POST['isi_laporan'];
$id            = $_POST['id'];

if ($_POST['action'] == 'edit') {
    // Logika untuk mengedit pengaduan
    $sqle = "UPDATE pengaduan SET tgl_pengaduan='$tgl_pengaduan', isi_laporan='$isi_laporan' WHERE id_pengaduan='$id'";

    if (mysqli_query($koneksi, $sqle)) {
        echo "<script>alert('Pengaduan Berhasil Diedit');</script>";
        echo "<script>location.href='masyarakat.php?url=lihat-pengaduan';</script>";
    } else {
        echo "gagal: " . mysqli_error($koneksi);
        echo "<script>alert('Pengaduan Gagal Diedit'); window.location.assign('masyarakat.php?url=tulis-pengaduan');</script>";
    }
} elseif ($_POST['action'] == 'delete') {
    // Logika untuk menghapus pengaduan
    $sqld = "DELETE FROM pengaduan WHERE id_pengaduan='$id'";

    if (mysqli_query($koneksi, $sqld)) {
        echo "<script>alert('Pengaduan Berhasil Dihapus');</script>";
        echo "<script>location.href='masyarakat.php?url=lihat-pengaduan';</script>";
    } else {
        echo "gagal: " . mysqli_error($koneksi);
        echo "<script>alert('Pengaduan Gagal Dihapus'); window.location.assign('masyarakat.php?url=tulis-pengaduan');</script>";
    }
} elseif ($_POST['action'] == 'save') {
    $sql = "INSERT INTO pengaduan(tgl_pengaduan,nik,isi_laporan) VALUES('$tgl_pengaduan','$nik','$isi_laporan')";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Pengaduan Berhasil Disimpan');</script>";
        echo "<script>location.href='masyarakat.php?url=tulis-pengaduan';</script>";
    } else {
        echo "gagal: " . mysqli_error($koneksi);
        echo "<script>alert('Pengaduan Gagal Disimpan'); window.location.assign(masyarakat.php?url=tulis-pengaduan);</script>";
    }
}


// 
