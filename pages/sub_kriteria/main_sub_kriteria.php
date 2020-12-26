<?php 
include "../../header.php";
include "../../lib/koneksi.php";

$id_kriteria = $_GET['id_kriteria'];

?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <font color="red"><h3><b>Id Kriteria</b></font><br> = 
                    <?php
                      $sql = "SELECT * FROM tbl_kriteria WHERE id_kriteria='$id_kriteria'";
                      $q = mysqli_query($koneksi, $sql);
                      ?>
                      <?php
                        while($data = mysqli_fetch_array($q)){
                      ?>
                       <?php echo $data['id_kriteria']; ?>

                      <?php
                        }
                      ?></h3> 

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <font color="blue"><h3><b>Total Sub Kriteria</b></font><br> = 

                    <?php 
                            $sql="SELECT count(id_kriteria) AS total FROM tbl_sub_kriteria WHERE id_kriteria='$id_kriteria' ";
                            $result=mysqli_query($koneksi,$sql);
                            $values=mysqli_fetch_assoc($result);
                            $num_rows=$values['total'];
                            echo $num_rows;   
                          ?></h4>

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
                      </tr>
                      <?php
                            $sql = "SELECT * FROM tbl_kriteria where id_kriteria='$id_kriteria'";
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

        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Sub Kriteria</h4>
                  <div class="card-header-action">
                    <?php 
                    $sql =  "SELECT * FROM tbl_kriteria WHERE id_kriteria = '$id_kriteria'";
                    $result = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_array($result);
                    ?>
                    <a href="<?php echo $baseUrl; ?>pages/sub_kriteria/form_tambah_sub_kriteria.php?id_kriteria=<?= $data['id_kriteria']; ?>" class="btn btn-info">Tambah Data <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID Sub Kriteria</th>
                        <th>Nama Sub Kriteria</th>
                        <th>Bobot Sub Kriteria</th>
                        <th>Aksi</th>
                      </tr>
                      <?php
                            $sql = "SELECT * FROM tbl_sub_kriteria WHERE id_kriteria='$id_kriteria'";
                            $q = mysqli_query($koneksi, $sql);
                      ?>
                      <?php
                            while($data = mysqli_fetch_array($q)){
                      ?>
                      <tr>
                        <td><a href="#"><?php echo $data['id_sub_kriteria']; ?></a></td>
                        <td class="font-weight-600"><?php echo $data['nama_sub_kriteria']; ?></td>
                        <td><div class="badge badge-warning"><?php echo $data['bobot_sub_kriteria']; ?></div></td>
                        <td>
                          <a href="form_edit_sub_kriteria.php?id_sub_kriteria=<?= $data['id_sub_kriteria']; ?>&id_kriteria=<?= $data['id_kriteria']; ?>" class="btn btn-primary">Edit</a>
                          <a href="aksi_hapus_sub_kriteria.php?id_sub_kriteria=<?php echo $data['id_sub_kriteria']; ?>&id_kriteria=<?= $data['id_kriteria']; ?>" onclick="return confirm('Hapus Data ini?')" class="btn btn-danger">Hapus</a>
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
        </section>      
<?php
include "../../footer.php";
?>