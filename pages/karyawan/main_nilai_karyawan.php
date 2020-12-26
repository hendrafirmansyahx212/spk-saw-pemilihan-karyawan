<?php 
include "../../header.php";
include "../../lib/koneksi.php";
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Karyawan</h4>
                  <div class="card-header-action">
                    <a href="form_tambah_nilai_karyawan.php" class="btn btn-info">Tambah Data <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID</th>
                        <th>nama karyawan</th>
                        <th>Kriteria 1</th>
                        <th>Kriteria 2</th>
                        <th>Kriteria 3</th>
                        <th>Kriteria 4</th>
                        <th>Aksi</th>
                      </tr>
                      <?php
                            $sql = "SELECT n.id_nilai,u.id_karyawan, u.nama_karyawan, n.id_sub_kriteria1,n.id_sub_kriteria2,n.id_sub_kriteria3,n.id_sub_kriteria4,k.id_sub_kriteria, k.nama_sub_kriteria FROM tbl_karyawan u, tbl_perhitungan n, tbl_sub_kriteria k WHERE u.id_karyawan = n.id_karyawan AND k.id_sub_kriteria = n.id_sub_kriteria3";
                            $q = mysqli_query($koneksi, $sql);
                      ?>
                      <?php
                            while($data = mysqli_fetch_array($q)){
                      ?>
                      <tr>
                        <td><a href="#"><?php echo $data['id_nilai']; ?></a></td>
                        <td class="font-weight-600"><?php echo $data['nama_karyawan']; ?></td>
                        <td class="font-weight-600"><?php echo $data['id_sub_kriteria1']; ?></div></td>
                        <td class="font-weight-600"><?php echo $data['id_sub_kriteria2']; ?></td>
                        <td class="font-weight-600"><?php echo $data['id_sub_kriteria3']; ?></td>
                        <td class="font-weight-600"><?php echo $data['id_sub_kriteria4']; ?></td>
                        <td>
                          <a href="form_edit_karyawan.php?id_karyawan=<?= $data['id_karyawan']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?php echo $baseUrl; ?>pages/karyawan/aksi_hapus_karyawan.php?id_karyawan=<?php echo $data['id_karyawan']; ?>" onclick="return confirm('Hapus Data ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                      <?php
                        }
                      ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
<?php
include "../../footer.php";
?>