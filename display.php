<?php 
    include 'connect.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>DAFTAR PENGGUNA</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <button class="btn btn-primary my-2">
                <a href="../T19-PHP/form.php" class="text-light">Add User</a>
            </button>
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
                                    <button class="btn btn-primary">
                                        <a href="view.php?viewid='.$id.'" class="text-light">View</a>
                                    </button>
                                    <button class="btn btn-warning">
                                        <a href="update.php?updateid='.$id.'" class="text-dark">Update</a>
                                    </button>
                                    <button class="btn btn-danger">
                                        <a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a>
                                    </button>
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
  