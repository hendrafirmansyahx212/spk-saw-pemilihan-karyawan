<?php
include "../../header.php";
include "../../lib/koneksi.php";

$id_kriteria = $_GET['id_kriteria'];
$sql =  "SELECT * FROM tbl_kriteria WHERE id_kriteria = '$id_kriteria'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Tambah Sub Kriteria</h4>
                  <div class="card-header-action">
                    <a href="<?php echo $baseUrl; ?>pages/sub_kriteria/main_sub_kriteria.php?id_kriteria=<?= $data['id_kriteria']; ?>" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_simpan_sub_kriteria.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <input
                        <input type="hidden" class="form-control" required="" name="id_kriteria" value="<?php echo $data['id_kriteria']; ?> "><br>
                        <label>nama Sub kriteria :</label>
                        <input
                        <input type="text" class="form-control" required="" name="nama_sub_kriteria"><br>
                        <label>bobot Sub kriteria :</label>
                        <input type="text" class="form-control" required="" name="bobot_sub_kriteria"><br>
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

