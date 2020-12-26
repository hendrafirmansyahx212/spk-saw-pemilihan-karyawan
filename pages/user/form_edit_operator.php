<?php
include "../../header.php";
include "../../lib/koneksi.php";

$id_user = $_GET['id_user'];

$sql =  "SELECT * FROM tbl_user WHERE id_user = '$id_user'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$username = $data['username'];
$password = $data['password'];

?>



      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Admin</h4>
                  <div class="card-header-action">
                    <a href="main_operator.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit_operator.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                      <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
                        <label>username :</label>
                        <input type="text" class="form-control" required="" name="username" value="<?php echo $data['username'] ?>"><br>
                        <label>password :</label>
                        <input type="text" class="form-control" required="" name="password" value="<?php echo $data['password'] ?>">
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

