<?php 
include "../../lib/koneksi.php";

    $username =$_POST['username'];
    $password =$_POST['password'];
    $id_user=$_POST['id_user'];
 

    $sql = "UPDATE tbl_user SET username='$username', password ='$password' WHERE id_user='$id_user'";
    $result = mysqli_query($koneksi, $sql);


    if ($result) {
        echo "
        <script>
            alert('Data berhasil diedit');
            window.location='main_admin.php';
        </script>";
    } else {
        header("location:form_edit_admin.php?id_user=$id_user");
    }
       
?>