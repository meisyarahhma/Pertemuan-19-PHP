<?php
include 'connect.php';

session_start();
if(!isset($_SESSION['login'])){
    header('location: login.php');
}

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `pendaftaran` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Delete successfull";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>