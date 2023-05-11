<?php
include 'connect.php';
$id=$_GET['updateid'];
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

if(isset($_POST['submit_btn'])){
  $name = $_POST['user_name'];
  if ($_POST['user_role']){
      $role = "admin";
  } else {
      $role = "user";
  }
  $password = $_POST['user_password'];
  $email = $_POST['user_email'];
  $telp = $_POST['user_telepon'];
  $address = $_POST['alamat_lengkap'];

  $profile = $_FILES['user_foto']['name'];
  $profile_temp = $_FILES['user_foto']['tmp_name'];
  $profile_location = '../profiles/'.$profile;

  $sql="update `pendaftaran` 
  set id='$id',name='$name',role='$role', password='$password', email='$email', telp='$telp', address='$address', foto='$profile'
  where id=$id";
  $result = $conn -> query($sql);
  if($result){
    // echo "update successfull";
    header('location: display.php');
  } else{
    die(mysqli_error($conn));
  }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>UPDATE DATA</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body>
        <div class="container my-2">
            <h2>Update Data</h2>
            <form method="post" enctype="multipart/form-data" >
                Nama</br>
                <input class="form-control" type="text" id="username" name="user_name" placeholder="Nama Pengguna"
                value=<?php echo $name?>>
                
                <div class="row">
                    <div class="form-group col-md-6"> <br>
                        <label for="userrole">Role</label>
                        <select class="form-control" id="userrole" name="user_role"
                         value="<?php echo $role?>">
                            <option value="pilih">-Pilih Role Pengguna-</option>
                            <option value="admin" name="admin">Admin</option>
                            <option value="user" name="user" >User</option>
                        </select> 
                    </div> 
                    <div class="form-group col-md-6"> <br>
                        <label for="userpassword">Password</label>
                        <input type="password" class="form-control" id="userpassword" name="user_password"  placeholder="Masukkan password"
                        value=<?php echo $password?>>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6"> <br>
                        <label for="useremail">Email</label>
                        <input type="text" class="form-control" id="useremail" name="user_email" placeholder="name@example.com"
                        value=<?php echo $email?>>
                    </div> 
                    <div class="form-group col-md-6"><br>
                        <label for="usertelepon">Telp</label>
                        <input type="text" class="form-control" id="usertelepon" name="user_telepon" placeholder="Masukkan nomor telepon anda"
                        value=<?php echo $telp?>>
                    </div>
                </div> <br>

                <div class="mb-3">
                    <label for="alamatlengkap" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="alamatlengkap" name="alamat_lengkap" rows="3"
                    value=<?php echo $address?>></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="userfoto">Unggah Foto</label> 
                    <input class="form-control" id="userfoto" name="user_foto" type="file" 
                    value=<?php echo $profile?>>
                </div>
                </br>
                <button type="submit" name="submit_btn" class="btn btn-primary">Update</button>
            </form>
        </div>
    </body>
</html>