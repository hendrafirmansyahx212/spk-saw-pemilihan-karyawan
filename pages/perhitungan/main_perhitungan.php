<?php 
include "../../header.php";
include "../../lib/koneksi.php";
?>

      <!-- Main Content -->

      <div class="main-content">
        <section class="section">
          <div class="row">

            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Penilaian</h4>
                  <div class="card-header-action">
                    <a href="form_tambah_karyawan.php" class="btn btn-info">Hitung! <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    
                    <table class="table table-striped">
                           
                           
                                       
                      <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <?php 
                        
                        $sql = "SELECT nama_kriteria FROM tbl_kriteria";
                        $q = mysqli_query($koneksi, $sql);

                        while($row=mysqli_fetch_assoc($q)){
                          $list[] = $row;
                        }
                        ?>
                        
                      
                      <?php foreach($list as $data ){ ?>
                        <th><?php echo $data['nama_kriteria'] ?></th>
                      <?php } ?>
                      <th>Aksi</th>
                      </tr>
                      
                      <?php
                            $sql2 = "SELECT u.id_karyawan, u.nama_karyawan, k.id_kriteria, k.nama_kriteria ,n.bobot_sub_kriteria FROM tbl_karyawan u, tbl_perhitungan n, tbl_kriteria k WHERE u.id_karyawan = n.id_karyawan AND k.id_kriteria = n.id_kriteria";
                            $q2 = mysqli_query($koneksi, $sql2);
                      ?>
                      <?php
                         while($roww=mysqli_fetch_assoc($q2)){
                          $listt[] = $roww;
                        }
                        ?>
                        <?php foreach($listt as $dataa ){ ?>
                      <tr>
                        
                        
                        <td><a href="#"><?php echo $dataa['id_karyawan']; ?></a></td>
                        <td class="font-weight-600"><?php echo $dataa['nama_karyawan']; ?>
                        
                        
                      
                      
                        
                        <td class="font-weight-600"><?php echo $dataa['bobot_sub_kriteria']; ?></td>
                        

                       
                      
                        <td>
                          <a href="form_edit_karyawan.php?id_karyawan=<?= $data['id_karyawan']; ?>" class="btn btn-primary">Edit</a>
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
?>
<?php
include "../../footer.php";
?>