<?php

include "../../lib/koneksi.php";

$nama_karyawan =$_POST['nama_karyawan'];
$devisi_karyawan= $_POST['devisi_karyawan'];
$telp_karyawan= $_POST['telp_karyawan'];
$alamat_karyawan= $_POST['alamat_karyawan'];

$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_karyawan(nama_karyawan,devisi_karyawan,telp_karyawan,alamat_karyawan) VALUES  ('$nama_karyawan','$devisi_karyawan','$telp_karyawan','$alamat_karyawan')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Ditambahkan'); window.location='main_karyawan.php';</script>";
            } else {
                echo "<script> alert('Data Gagal Ditambahkan'); window.location='form_tambah_karyawan.php'; </script>";
            }


?>