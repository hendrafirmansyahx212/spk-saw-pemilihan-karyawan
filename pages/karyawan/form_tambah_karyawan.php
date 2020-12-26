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
                    <a href="main_karyawan.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_simpan_karyawan.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label>nama karyawan :</label>
                        <input type="text" class="form-control" required="" name="nama_karyawan"><br>
                        <label>devisi karyawan :</label>
                        <input type="text" class="form-control" required="" name="devisi_karyawan"><br>
                        <label>telpon karyawan :</label>
                        <input type="text" class="form-control" required="" name="telp_karyawan"><br>
                        <label>alamat karyawan :</label>
                        <input type="text" class="form-control" required="" name="alamat_karyawan">
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

