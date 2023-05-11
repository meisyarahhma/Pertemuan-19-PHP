<?php
$host     ='localhost:3306';
$username = 'root';
$passwort = '';

$conn = mysqli_connect ($host, $username, $passwort);
// if (!$conn) {
//     die('Koneksi gagal: ' . mysqli_connect_error());
// }
// echo 'Koneksi berhasil';
$db = mysqli_select_db($conn, 'form_db');