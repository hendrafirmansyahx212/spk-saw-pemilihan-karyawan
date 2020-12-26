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
                    <h3>Total Admin = <font color="blue ">

                    <?php
                      $sql="SELECT count(id_user) AS total FROM tbl_user WHERE level='O'";
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
                  <h4>Admin</h4>
                  <div class="card-header-action">
                    <a href="form_tambah_operator.php" class="btn btn-info">Tambah Data <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                      <?php
                            $sql = "SELECT * FROM tbl_user WHERE level='O'";
                            $q = mysqli_query($koneksi, $sql);
                      ?>
                      <?php
                            while($data = mysqli_fetch_array($q)){
                      ?>
                      <tr>
                        <td><a href="#"><?php echo $data['id_user']; ?></a></td>
                        <td class="font-weight-600"><?php echo $data['username']; ?></td>
                        <td class="font-weight-600"><?php echo $data['password']; ?></td>
                        <td><div class="badge badge-info">Operator</div></td>
                        <td>
                          <a href="form_edit_operator.php?id_user=<?= $data['id_user']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?php echo $baseUrl; ?>pages/user/aksi_hapus_operator.php?id_user=<?php echo $data['id_user']; ?>" onclick="return confirm('Hapus Data ini?')" class="btn btn-danger">Hapus</a>
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