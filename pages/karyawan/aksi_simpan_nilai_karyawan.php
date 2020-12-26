<?php

include "../../lib/koneksi.php";

$id_karyawan =$_POST['id_karyawan'];
$kriteria1=$_POST['kriteria1'];
$kriteria2=$_POST['kriteria2'];
$kriteria3=$_POST['kriteria3'];
$kriteria4=$_POST['kriteria4'];
$nilaikriteria1=$_POST['nilaikriteria1'];
$nilaikriteria2=$_POST['nilaikriteria2'];
$nilaikriteria3=$_POST['nilaikriteria3'];
$nilaikriteria4=$_POST['nilaikriteria4'];

$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_perhitungan(id_karyawan,id_kriteria1,id_kriteria2,id_kriteria3,id_kriteria4,id_sub_kriteria1,id_sub_kriteria2,id_sub_kriteria3,id_sub_kriteria4) VALUES  ('$id_karyawan','$kriteria1','$kriteria2','$kriteria3','$kriteria4','$nilaikriteria1','$nilaikriteria2','$nilaikriteria3','$nilaikriteria4')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Ditambahkan'); window.location='main_nilai_karyawan.php';</script>";
            } else {
                echo "<script> alert('Data Gagal Ditambahkan'); window.location='form_tambah_nilai_karyawan.php'; </script>";
            }


?>