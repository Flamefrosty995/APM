          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Reports Data</h6>
            </div>
            <div class="card-body" style="font-size : 1rem;">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Report Date</th>
                      <th>nik</th>
                      <th>Report Content</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Report Date</th>
                      <th>nik</th>
                      <th>Report Content</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    session_start();
                    include 'koneksi.php';
                    $sql = "SELECT * FROM pengaduan ORDER BY id_pengaduan DESC";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['tgl_pengaduan']; ?></td>
                        <td><?= $data['nik']; ?></td>
                        <td><?= $data['isi_laporan']; ?></td>
                        <td>
                          <!-- tombol -->
                          <a href="?url=detail-pengaduan&id=<?= $data['id_pengaduan'] ?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-5">
                              <i class='bx bxs-info-square'></i>
                            </span>
                            <span class="text">Details</span>
                          </a>
                          <?php
                          if ($data['nik'] == $_SESSION['NIK']) {
                            echo "
                            <a href=\"?url=edit-pengaduan&id=$data[id_pengaduan]\" class=\"btn btn-info btn-icon-split\">
                            <span class=\"icon text-white-5\">
                            <i class='bx bx-edit-alt'></i>
                            </span>
                            <span class=\"text\">Edit</span>
                            </a>
                            ";
                          }
                          ?>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>