<?php
include "../../header.php";
include "../../lib/koneksi.php";

$id_kriteria = $_GET['id_kriteria'];

$sql =  "SELECT * FROM tbl_kriteria WHERE id_kriteria = '$id_kriteria'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$nama_kriteria =$data['nama_kriteria'];
$bobot_kriteria= $data['bobot_kriteria'];
$tipe_kriteria= $data['tipe_kriteria'];

?>



      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Kriteria</h4>
                  <div class="card-header-action">
                    <a href="main_kriteria.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit_kriteria.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                      <input type="hidden" name="id_kriteria" value="<?php echo $data['id_kriteria']; ?>">
                        <label>nama kriteria :</label>
                        <input type="text" class="form-control" required="" name="nama_kriteria" value="<?php echo $data['nama_kriteria'] ?>"><br>
                        <label>bobot kriteria :</label>
                        <input type="text" class="form-control" required="" name="bobot_kriteria" value="<?php echo $data['bobot_kriteria'] ?>"><br>
                        <label>tipe kriteria :</label>
                        <input type="text" class="form-control" required="" name="tipe_kriteria" value="<?php echo $data['tipe_kriteria'] ?>">
                      </div>
                      
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Simpan</button>
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

