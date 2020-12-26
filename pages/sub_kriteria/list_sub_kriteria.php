<?php 
include "../../header.php";
include "../../lib/koneksi.php";

//$id_kriteria = $_GET['id_kriteria'];

?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Kriteria</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/kriteria/main_kriteria.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Bobot</th>
                        <th>Tipe</th>
                        <th>Jumah Sub Kriteria</th>
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
                          <?php 
                            $total=  $data['id_kriteria'];
                            
                            $sql="SELECT count(id_kriteria) AS total FROM tbl_sub_kriteria WHERE id_kriteria='$total' ";
                            $result=mysqli_query($koneksi,$sql);
                            $values=mysqli_fetch_assoc($result);
                            $num_rows=$values['total'];
                            echo $num_rows;   
                          ?>
                        </td>
                        <td>
                        <a href="<?php echo $baseUrl; ?>pages/sub_kriteria/main_sub_kriteria.php?id_kriteria=<?= $data['id_kriteria']; ?>" class="btn btn-success">lihat</a>
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
          </div>

        
        </section>      
<?php
include "../../footer.php";
?>