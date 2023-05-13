<?php 
include 'connect.php';
session_start();
if(!isset($_SESSION['login'])){
    header('location: login.php');
}
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>DAFTAR PENGGUNA</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body>
        <div class="container ">
            <div class="justify-content-space-between">
                <a class="btn btn-primary my-2" href="../T19-PHP/form.php" role="button">Add User</a>
                <a class="btn btn-danger " href="logout.php" role="button">Logout</a>
            </div>  
            <h2>Daftar Pengguna</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="Select * from `pendaftaran`";
                        $result=mysqli_query($conn, $sql);
                        if($result)
                        { 
                            while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $profile=$row['foto'];
                            $name=$row['name'];
                            $email=$row['email'];
                            $telp=$row['telp'];
                            $address=$row['address'];
                            $role=$row['role'];
                            echo '
                            <tr>
                                <th scope="row">'.$id.'</th>
                                <td>
                                    <p class="lead">
                                        <a class="btn btn-primary" href="view.php?viewid='.$id.'" role="button">View</a>
                                        <a class="btn btn-warning" href="update.php?updateid='.$id.'" role="button">Update</a>
                                        <a class="btn btn-danger"href="delete.php?deleteid='.$id.'" role="button">Delete</a>
                                    </p>
                                </td>
                                <td><img src=profiles/'.$profile.' style=width:50px></td>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$telp.'</td>
                                <td>'.$address.'</td>
                                <td>'.$role.'</td>
                            </tr>
                            ';
                            }
                        }  
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
  