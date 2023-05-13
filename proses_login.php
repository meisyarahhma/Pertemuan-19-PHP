<?php 
// $login=0;
// $invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
	include 'connect.php';

    session_start();
    if(!isset($_SESSION['login'])){
        header('location: login.php');
    }

	if (isset($_POST["login"])) {
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    
	$sql= "SELECT * FROM `pendaftaran` WHERE email = '$email' and password='$password'";
    $result = mysqli_query($conn,$sql);

    // cek email
    if($result){
		$num=mysqli_num_rows($result);
        //cek password
        if ($num > 0){
            // $login=1;
            // echo "Login berhasil";
            session_start();
            $_SESSION['login']= true;
            header('location: display.php');
        } else{
            // $invalid=1;
			// echo "Login gagal";
            die(mysqli_error($conn));
            // header('location: login.php');
		}
        
    } 

    $error = true;
}
}

?>