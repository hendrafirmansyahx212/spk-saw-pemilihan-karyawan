<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"><font color="blue">SPK SAW</font></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"><font color="blue">SW</font></a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>dashboard.php"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">SPK</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Karyawan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/karyawan/main_karyawan.php"><i class="fas fa-user-edit"></i> <span>Data Karyawan</span></a></li>
                  <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/karyawan/main_nilai_karyawan.php"><i class="fas fa-user-edit"></i> <span>nilai Karyawan</span></a></li>
                </ul>
              </li>
              
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/kriteria/main_kriteria.php"><i class="fas fa-th-large"></i> <span>Kriteria</span></a></li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/sub_kriteria/list_sub_kriteria.php"><i class="fas fa-th"></i> <span>Sub Kriteria</span></a></li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/perhitungan/main_perhitungan.php"><i class="fas fa-pencil-ruler"></i> <span>Perhitungan</span></a></li>
              <li class="menu-header">Users</li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/user/main_admin.php"><i class="fas fa-id-card"></i> <span>Admin</span></a></li>
              <li><a class="nav-link" href="<?php echo $baseUrl; ?>pages/user/main_operator.php"><i class="fas fa-id-card"></i> <span>Operator</span></a></li>
              <li class="menu-header">Operasi</li>
              <li><a class="nav-link" href="blank.html"><i class="fas fa-cloud-download-alt"></i> <span>Unduh Data</span></a></li>
              <li><a class="nav-link" href="logout.php"><i class="fas fa-angle-double-right"></i> <span>Log Out</span></a></li>
              
              
              

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>
        </aside>
      </div>