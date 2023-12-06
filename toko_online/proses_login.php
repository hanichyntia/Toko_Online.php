<?php 
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];

$login=mysqli_query($conn, "select * from user where username='$username' and password='$password'");
$cek=mysqli_num_rows($login);
if ($cek>0) {
  $data =mysqli_fetch_assoc($login);
  if ($data['role']=="admin") {
    $_SESSION['username'];
    $_SESSION['role']= "admin";
    header("location: admin/halaman_admin.php");
  }elseif ($data['role']=="pelanggan") {
    $_SESSION['username']=$username;
    $_SESSION['role']="pelanggan";

    $user_id = $data['id_user'];
    $_SESSION['id_user'] = $user_id;
    header("location:pelanggan/halaman_pelanggan.php");
  } 
  else {
    header("location:index.php?pesan=gagal");
  }
}else {
  echo "<script>alert('username dan password tidak benar');location.href='login.php';</script>";
}
?>