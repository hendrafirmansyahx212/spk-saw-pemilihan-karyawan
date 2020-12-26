<?php

include "../../lib/koneksi.php";
$id_kriteria = $_POST['id_kriteria'];
$nama_sub_kriteria =$_POST['nama_sub_kriteria'];
$bobot_sub_kriteria= $_POST['bobot_sub_kriteria'];

//validasi nilai seluruh bobot sub kriteria tidak lebih dari bobot kriteria

//mengambil nilai bobot kriteria
$sql="SELECT bobot_kriteria as totall FROM tbl_kriteria WHERE id_kriteria='$id_kriteria'";
$result=mysqli_query($koneksi,$sql);
$values=mysqli_fetch_assoc($result);
$bobot_kriteria=$values['totall'];


//menghitung jumlah seluruh bobot sub kriteria yang sudah tersimpan didatabase
//$sql="SELECT SUM(bobot_sub_kriteria) AS total FROM tbl_sub_kriteria WHERE id_kriteria='$id_kriteria'";
//$result=mysqli_query($koneksi,$sql);
//$values=mysqli_fetch_assoc($result);
//$total_sub_kriteria=$values['total'];


//total seluruh bobot sub kriteria (ditambah data baru)
//$total = $bobot_sub_kriteria + $total_sub_kriteria;

if ($bobot_sub_kriteria <= $bobot_kriteria) {
	$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_sub_kriteria(id_kriteria,nama_sub_kriteria,bobot_sub_kriteria) VALUES  ('$id_kriteria','$nama_sub_kriteria','$bobot_sub_kriteria')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Ditambahkan'); window.location='main_sub_kriteria.php?id_kriteria=$id_kriteria';</script>";
            } else {
                echo "<script> alert('Data Gagal Ditambahkan'); window.location='form_tambah_sub_kriteria.php?id_kriteria=$id_kriteria'; </script>";
            }

} else {
	echo "<script> alert('bobot sub kriteria tidak boleh melebihi bobot kriteria!'); window.location='form_tambah_sub_kriteria.php?id_kriteria=$id_kriteria'; </script>";
}



?>