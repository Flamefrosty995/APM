<?php

$id = $_GET['id'];
if (empty($id)) {
    header('location:masyarakat.php');
}
include 'koneksi.php';
$sql = "SELECT * FROM pengaduan WHERE id_pengaduan='$id'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
echo "<h2>Report Details</h2>";
?>
<div class="card shadow">
    <div class="card-header">
        <a href="?url=lihat-pengaduan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-5">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text">Back</span>
        </a>
    </div>
    <div class="card-body">
        <form method="post" action="./proses-pengaduan.php">

            <div class="form-group">
                <label style="font-size: 1rem">Report Date</label>
                <input type="text" name="tgl_pengaduan" class="form-control" value="<?= $data['tgl_pengaduan'];  ?>" readonly>
            </div>
            <div class="form-group">
                <label style="font-size: 1rem">Report Content</label>
                <textarea name="isi_laporan" class="form-control" readonly><?= $data['isi_laporan']; ?></textarea>
            </div>
        </form>
    </div>
</div>