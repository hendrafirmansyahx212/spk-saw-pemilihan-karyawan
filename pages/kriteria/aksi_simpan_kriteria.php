<?php

include "../../lib/koneksi.php";

$nama_kriteria =$_POST['nama_kriteria'];
$bobot_kriteria= $_POST['bobot_kriteria'];
$tipe_kriteria= $_POST['tipe_kriteria'];

$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kriteria(nama_kriteria,bobot_kriteria,tipe_kriteria) VALUES  ('$nama_kriteria','$bobot_kriteria','$tipe_kriteria')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Ditambahkan'); window.location='main_kriteria.php';</script>";
            } else {
                echo "<script> alert('Data Gagal Ditambahkan'); window.location='form_tambah_kriteria.php'; </script>";
            }


?>