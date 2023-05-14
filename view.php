<?php
include 'connect.php';

session_start();
if(!isset($_SESSION['login'])){
    header('location: login.php');
}

$id=$_GET['viewid'];
$sql="select*  from `pendaftaran` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$profile=$row['foto'];
$name=$row['name'];
$email=$row['email'];
$password = $row['password'];
$address = $row['address'];
$telp=$row['telp'];
$role=$row['role'];
echo " 
<center>
    <table>
        <h1>Data ID $id </h1>
        <tr rowspan=14><img src='profiles/$profile' style='width:140px' /tr> 
        <tr>
            <td>Nama lengkap</td>
            <th>:</th>
            <td>$name</td>                       
        </tr>
        <tr>
            <td>Email</td>
            <th>:</th>
            <td>$email</td>
        </tr>
        <tr>
            <td>Alamat lengkap</td>
            <th>:</th>
            <td>$address</td>
        </tr>
        <tr>
            <td>No telepon</td>
            <th>:</th>
            <td>$telp</td>
        </tr>
        <tr>
            <td>Role</td>
            <th>:</th>
            <td>$role</td>
        </tr>
    </table>
</center>

";
?>
