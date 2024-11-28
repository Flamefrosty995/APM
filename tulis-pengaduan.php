<h2>Tulis Pengaduan</h2>
<div class="card shadow">

    <div class="card-header">

        <a href="masyarakat.php" class="btn btn-primary btn-icon-split">
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
                <input type="text" name="tgl_pengaduan" class="form-control" value="<?= date('Y-m-d'); ?>" readonly>
            </div>
            <div class="form-group">
                <label style="font-size: 1rem">Report Content</label>
                <textarea name="isi_laporan" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="action" value="save" class="btn btn-success">Save </button>
            </div>
        </form>
    </div>
</div>