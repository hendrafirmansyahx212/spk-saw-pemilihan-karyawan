<?php 
include "../../header.php";
include "../../lib/koneksi.php";
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h3>Total Kriteria = <font color="blue ">

                    <?php
                      $sql="SELECT count(id_kriteria) AS total FROM tbl_kriteria";
                      $result=mysqli_query($koneksi,$sql);
                      $values=mysqli_fetch_assoc($result);
                      $num_rows=$values['total'];
                      echo $num_rows;   
                    ?></font></h3>

                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Kriteria</h4>
                  <div class="card-header-action">
                    <a href="form_tambah_kriteria.php" class="btn btn-info">Tambah Data <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID</th>
                        <th>nama</th>
                        <th>bobot</th>
                        <th>tipe</th>
                        <th>Aksi</th>
                      </tr>
                      <?php
                            $sql = "SELECT * FROM tbl_kriteria";
                            $q = mysqli_query($koneksi, $sql);
                      ?>
                      <?php
                            while($data = mysqli_fetch_array($q)){
                      ?>
                      <tr>
                        <td><a href="#"><?php echo $data['id_kriteria']; ?></a></td>
                        <td class="font-weight-600"><?php echo $data['nama_kriteria']; ?></td>
                        <td><div class="badge badge-warning"><?php echo $data['bobot_kriteria']; ?></div></td>
                        <td class="font-weight-600"><?php echo $data['tipe_kriteria']; ?></td>
                        <td>
                          <a href="form_edit_kriteria.php?id_kriteria=<?= $data['id_kriteria']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?php echo $baseUrl; ?>pages/kriteria/aksi_hapus_kriteria.php?id_kriteria=<?php echo $data['id_kriteria']; ?>" onclick="return confirm('Hapus Data ini?')" class="btn btn-danger">Hapus</a>
                          <a href="<?php echo $baseUrl; ?>pages/sub_kriteria/main_sub_kriteria.php?id_kriteria=<?= $data['id_kriteria']; ?>" class="btn btn-success">sub Kriteria</a>
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