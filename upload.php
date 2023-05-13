<?php
include 'connect.php';

session_start();
if(!isset($_SESSION['login'])){
    header('location: login.php');
}

if(isset($_POST['submit_btn'])){
  $name = $_POST['user_name'];
  if ($_POST['user_role']){
      $role = "user";
  } else {
      $role = "admin";
  }
  $password = $_POST['user_password'];
  $email = $_POST['user_email'];
  $telp = $_POST['user_telepon'];
  $address = $_POST['alamat_lengkap'];

  $profile = $_FILES['user_foto']['name'];
  $profile_temp = $_FILES['user_foto']['tmp_name'];
  $profile_location = '../profiles/'.$profile;

  $sql="insert into `pendaftaran` (name, role, password, email, telp, address, foto)
  values('$name','$role','$password','$email','$telp','$address','$profile')";
  $result = $conn -> query($sql);
  if($result){
    // echo "sukses upload";
    header('location: display.php');
  } else{
    die(mysqli_error($conn));
  }
}
?>