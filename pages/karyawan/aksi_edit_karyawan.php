<?php 
include "../../lib/koneksi.php";

$id_karyawan=$_POST['id_karyawan'];
$nama_karyawan =$_POST['nama_karyawan'];
$devisi_karyawan= $_POST['devisi_karyawan'];
$telp_karyawan= $_POST['telp_karyawan'];
$alamat_karyawan= $_POST['alamat_karyawan'];

 

    $sql = "UPDATE tbl_karyawan SET nama_karyawan='$nama_karyawan', devisi_karyawan ='$devisi_karyawan', telp_karyawan='$telp_karyawan',alamat_karyawan='$alamat_karyawan'  WHERE id_karyawan='$id_karyawan'";
    $result = mysqli_query($koneksi, $sql);


    if ($result) {
        echo "
        <script>
            alert('Data berhasil diedit');
            window.location='main_karyawan.php';
        </script>";
    } else {
        header("location:form_edit_karyawan.php?id_karyawan=$id_karyawan");
    }
       
?>