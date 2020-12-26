<?php
include "../../header.php";
include "../../lib/koneksi.php";
?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Tambah Karyawan</h4>
                  <div class="card-header-action">
                    <a href="main_nilai_karyawan.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_simpan_nilai_karyawan.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label>nama karyawan :</label>
                          <select class="form-control" name="id_karyawan">
                            <?php 
                              $kuerikaryawan = mysqli_query($koneksi,"SELECT * FROM tbl_karyawan");
                              while ($kar=mysqli_fetch_array($kuerikaryawan)) {
                              ?>
                              <option value="<?php echo $kar['id_karyawan'];?>"><?php echo $kar['nama_karyawan'];?></option><?php } ?>
                          </select><br>
                    <!-- <?php 
                      $kuerinamakriteria = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria WHERE id_kriteria = '1'");
                      while ($namkri=mysqli_fetch_array($kuerinamakriteria)) {?>
                        <label><?php echo $namkri['nama_kriteria'];?></option><?php } ?></label>
                          <select class="form-control" name="kriteria1">
                            <?php 
                              $kuerikriteria = mysqli_query($koneksi,"SELECT * FROM tbl_sub_kriteria WHERE id_kriteria = '1'");
                              while ($kri=mysqli_fetch_array($kuerikriteria)) {
                              ?>
                              <option value="<?php echo $kri['id_bobot_kriteria'];?>"><?php echo $kri['nama_sub_kriteria'];?></option><?php } ?>
                          </select><br>

                    <?php 
                      $kuerinamakriteria = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria WHERE id_kriteria = '2'");
                      while ($namkri=mysqli_fetch_array($kuerinamakriteria)) {?>
                        <label><?php echo $namkri['nama_kriteria'];?></option><?php } ?></label>
                          <select class="form-control" name="kriteria1">
                            <?php 
                              $kuerikriteria = mysqli_query($koneksi,"SELECT * FROM tbl_sub_kriteria WHERE id_kriteria = '2'");
                              while ($kri=mysqli_fetch_array($kuerikriteria)) {
                              ?>
                              <option value="<?php echo $kri['id_bobot_kriteria'];?>"><?php echo $kri['nama_sub_kriteria'];?></option><?php } ?>
                          </select><br>

                    <?php 
                      $kuerinamakriteria = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria WHERE id_kriteria = '3'");
                      while ($namkri=mysqli_fetch_array($kuerinamakriteria)) {?>
                        <label><?php echo $namkri['nama_kriteria'];?></option><?php } ?></label>
                          <select class="form-control" name="kriteria1">
                            <?php 
                              $kuerikriteria = mysqli_query($koneksi,"SELECT * FROM tbl_sub_kriteria WHERE id_kriteria = '3'");
                              while ($kri=mysqli_fetch_array($kuerikriteria)) {
                              ?>
                              <option value="<?php echo $kri['id_bobot_kriteria'];?>"><?php echo $kri['nama_sub_kriteria'];?></option><?php } ?>
                          </select><br>

                    <?php 
                      $kuerinamakriteria = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria WHERE id_kriteria = '4'");
                      while ($namkri=mysqli_fetch_array($kuerinamakriteria)) {?>
                        <label><?php echo $namkri['nama_kriteria'];?></option><?php } ?></label>
                          <select class="form-control" name="kriteria1">
                            <?php 
                              $kuerikriteria = mysqli_query($koneksi,"SELECT * FROM tbl_sub_kriteria WHERE id_kriteria = '4'");
                              while ($kri=mysqli_fetch_array($kuerikriteria)) {
                              ?>
                              <option value="<?php echo $kri['id_bobot_kriteria'];?>"><?php echo $kri['nama_sub_kriteria'];?></option><?php } ?>
                          </select><br> -->
                      <?php
                        for ($i= 1; $i <= 4; $i++)
                          {
                               
                      $kuerinamakriteria = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria WHERE id_kriteria = '$i'");
                      while ($namkri=mysqli_fetch_array($kuerinamakriteria)) {?>
                        
                        <input value="<?php echo $namkri['nama_kriteria'];?>" name="kriteria<?php echo $i ?>">
                        <label><?php echo $namkri['nama_kriteria'];?><?php } ?></a></label>

                          <select class="form-control" name="nilaikriteria<?php echo $i ?>">
                            <?php 
                              $kuerikriteria = mysqli_query($koneksi,"SELECT * FROM tbl_sub_kriteria WHERE id_kriteria = '$i'");
                              while ($kri=mysqli_fetch_array($kuerikriteria)) {
                              ?>
                              <option value="<?php echo $kri['id_sub_kriteria'];?>"><?php echo $kri['nama_sub_kriteria'];?></option><?php } ?>
                          </select><br><?php } ?>
                              
                      </div>
                      
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Tambah</button>
                    </div>
                  </form> 
            
              </div>
            </div>
            
          </div>
  
        </section>
      </div>


<?php
include "../../footer.php";
?>

