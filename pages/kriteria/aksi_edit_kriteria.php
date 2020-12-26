<?php 
include "../../lib/koneksi.php";

$id_kriteria = $_POST['id_kriteria'];
$nama_kriteria =$_POST['nama_kriteria'];
$bobot_kriteria= $_POST['bobot_kriteria'];
$tipe_kriteria= $_POST['tipe_kriteria'];

 

    $sql = "UPDATE tbl_kriteria SET nama_kriteria='$nama_kriteria', bobot_kriteria ='$bobot_kriteria', tipe_kriteria='$tipe_kriteria'WHERE id_kriteria='$id_kriteria'";
    $result = mysqli_query($koneksi, $sql);


    if ($result) {
        echo "
        <script>
            alert('Data berhasil diedit');
            window.location='main_kriteria.php';
        </script>";
    } else {
        header("location:form_edit_kriteria.php?id_kriteria=$id_kriteria");
    }
       
?>