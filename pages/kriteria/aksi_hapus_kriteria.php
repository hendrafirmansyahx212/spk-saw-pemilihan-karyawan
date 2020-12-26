<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {

    include "../../lib/koneksi.php";
    
//kesalahan disini
    $id_kriteria = $_GET['id_kriteria'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbl_kriteria WHERE id_kriteria = '$id_kriteria'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location='main_kriteria.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location ='main_kriteria.php';
        </script>";
    }
}
