<?php 
include "../../lib/koneksi.php";

$id_kriteria = $_POST['id_kriteria'];
$id_sub_kriteria = $_POST['id_sub_kriteria'];
$nama_sub_kriteria =$_POST['nama_sub_kriteria'];
$bobot_sub_kriteria= $_POST['bobot_sub_kriteria'];

$sql="SELECT bobot_kriteria as totall FROM tbl_kriteria WHERE id_kriteria='$id_kriteria'";
$result=mysqli_query($koneksi,$sql);
$values=mysqli_fetch_assoc($result);
$bobot_kriteria=$values['totall'];

if ($bobot_sub_kriteria <= $bobot_kriteria) {
    $sql = "UPDATE tbl_sub_kriteria SET nama_sub_kriteria='$nama_sub_kriteria', bobot_sub_kriteria ='$bobot_sub_kriteria' WHERE id_sub_kriteria='$id_sub_kriteria'";
    $result = mysqli_query($koneksi, $sql);


    if ($result) {
        echo "
        <script>
            alert('Data berhasil diedit');
            window.location='main_sub_kriteria.php?id_kriteria=$id_kriteria';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal diedit');
            window.location='form_edit_sub_kriteria.php?id_sub_kriteria=$id_sub_kriteria&id_kriteria=$id_kriteria';
        </script>";
    }
} else {
    echo "
        <script>
            alert('bobot sub kriteria tidak boleh melebihi bobot kriteria!');
            window.location='form_edit_sub_kriteria.php?id_sub_kriteria=$id_sub_kriteria&id_kriteria=$id_kriteria';
        </script>";
}


       
?>