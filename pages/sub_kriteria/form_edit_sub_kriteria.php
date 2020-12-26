<?php
include "../../header.php";
include "../../lib/koneksi.php";

$id_kriteria = $_GET['id_kriteria'];
$id_sub_kriteria = $_GET['id_sub_kriteria'];

$sql =  "SELECT * FROM tbl_sub_kriteria WHERE id_sub_kriteria = '$id_sub_kriteria'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$nama_sub_kriteria =$data['nama_sub_kriteria'];
$bobot_sub_kriteria= $data['bobot_sub_kriteria'];

?>



      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Krieria</h4>
                  <div class="card-header-action">
                    <a href="main_sub_kriteria.php?id_kriteria=<?php echo $data['id_kriteria']; ?>" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit_sub_kriteria.php?id_kriteria=<?php echo $data['id_kriteria']; ?>" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                      <input type="hidden" name="id_kriteria" value="<?php echo $data['id_kriteria']; ?>">
                      <input type="hidden" name="id_sub_kriteria" value="<?php echo $data['id_sub_kriteria']; ?>">
                        <label>nama sub kriteria :</label>
                        <input type="text" class="form-control" required="" name="nama_sub_kriteria" value="<?php echo $data['nama_sub_kriteria'] ?>"><br>
                        <label>bobot sub kriteria :</label>
                        <input type="text" class="form-control" required="" name="bobot_sub_kriteria" value="<?php echo $data['bobot_sub_kriteria'] ?>"><br>
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

