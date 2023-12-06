<?php 
if ($_POST) {
  $nama = $_POST["nama"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $role = $_POST["role"];

  if (empty($username) || empty($password) || empty($role)) {
    echo "<script>alert('masih ada data yang belum di isi');location.href:'register.php';</script>";
  }else {
    include "koneksi.php";
    $check_username_query = "select * from user where username = '$username'";
    $check_username_result = mysqli_query($conn, $check_username_query);
    if (mysqli_num_rows($check_username_result) > 0) {
      echo "<script>alert('Username sudah ada, silakan pilih username lain');location.href='register.php';</script>";
    }else{
      $insert = mysqli_query($conn,"insert into user (nama, username, password, role) value ('".$nama."', '".$username."','".$password."', '".$role."')");
      
      if ($insert) {
        echo"<script>alert('Sukses melakukan registrasi');location.href='login.php'</script>";
      }else {
        echo"<script>alert('Gagal melakukan registrasi');location.href='register.php'</script>";
      }
    }   
  }
}

?>