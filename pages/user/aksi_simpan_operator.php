<?php

include "../../lib/koneksi.php";

$username =$_POST['username'];
$password= $_POST['password'];

if ($username == " " && $password == " ") {
	echo "<script> alert('Form tidak boleh kosong!'); window.location='form_tambah_admin.php'; </script>";
}else if ($username == "  " && $password == "  ") {
	echo "<script> alert('Form tidak boleh kosong!'); window.location='form_tambah_admin.php'; </script>";
}else if ($username == "   " && $password == "   ") {
	echo "<script> alert('Form tidak boleh kosong!'); window.location='form_tambah_admin.php'; </script>";
}
else {
	$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_user(username,password,level) VALUES  ('$username','$password','O')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Ditambahkan'); window.location='main_operator.php';</script>";
            } else {
                echo "<script> alert('Data Gagal Ditambahkan'); window.location='form_tambah_operator.php'; </script>";
            }
    }

?>