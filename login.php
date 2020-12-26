<?php 
include 'lib/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM tbl_user where username='$username' AND password='$password'";
$q=mysqli_query($koneksi, $sql);

$data=mysqli_fetch_array($q);

$jumlah = mysqli_num_rows($q);

if ($jumlah==1) {
	session_start();
	$_SESSION['username'] = $data['username'];
	$_SESSION['level'] = $data['level'];
	header('location:dashboard.php');
}else if ($username == ' ' && $password == ' ') {
	echo "
        <script>
            alert('karakter spasi tidak diperbolehkan!');
            window.location ='index.php';
        </script>";
}else if ($username == '  ' && $password == '  ') {
	echo "
        <script>
            alert('karakter spasi tidak diperbolehkan!');
            window.location ='index.php';
        </script>";
}
else{
	echo "
        <script>
            alert('username atau password salah!');
            window.location ='index.php';
        </script>";
}
?>