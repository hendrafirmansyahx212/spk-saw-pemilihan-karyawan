<?php
include "../../header.php";
include "../../lib/koneksi.php";

$id_karyawan = $_GET['id_karyawan'];

$sql =  "SELECT * FROM tbl_karyawan WHERE id_karyawan = '$id_karyawan'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$nama_karyawan =$data['nama_karyawan'];
$devisi_karyawan= $data['devisi_karyawan'];
$telp_karyawan= $data['telp_karyawan'];
$alamat_karyawan= $data['alamat_karyawan'];

?>



      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Karyawan</h4>
                  <div class="card-header-action">
                    <a href="main_karyawan.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit_karyawan.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                      <input type="hidden" name="id_karyawan" value="<?php echo $data['id_karyawan']; ?>">
                        <label>nama karyawan :</label>
                        <input type="text" class="form-control" required="" name="nama_karyawan" value="<?php echo $data['nama_karyawan'] ?>"><br>
                        <label>devisi karyawan :</label>
                        <input type="text" class="form-control" required="" name="devisi_karyawan" value="<?php echo $data['devisi_karyawan'] ?>"><br>
                        <label>telpon karyawan :</label>
                        <input type="text" class="form-control" required="" name="telp_karyawan" value="<?php echo $data['telp_karyawan'] ?>"><br>
                        <label>alamat karyawan :</label>
                        <input type="text" class="form-control" required="" name="alamat_karyawan" value="<?php echo $data['alamat_karyawan'] ?>">
                      </div>
                      
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Edit</button>
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

