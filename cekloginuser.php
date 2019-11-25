<?php
//awalan menggunakan session
session_start();
//    session_start();

//buka file function.php
require 'fungsi.php';

$username = $_POST ['username'];
$password = $_POST ['password'];

//ambil data username dan password yg di inputkan

$data = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$password'") or die (mysqli_error($conn));
//medapat id dari user dan password
$line="SELECT id_user FROM user WHERE username='$username' and password='$password'";
$result = mysqli_query($conn, $line);
$row = mysqli_fetch_assoc($result);
$id=$row['id_user'];
    //data ditemukan, 1 username dan 1 password di dapat
$cek = mysqli_num_rows($data);
$id_user=$cek['id_user'];
    //cek jika data yg ditemukan 1, 1 username dan 1 password
if($cek == 1)
{
 $_SESSION ['username'] = $username;
 $_SESSION ['id'] =  $id;
 $_SESSION ['status'] = "user";
 header("location:tabel.php");
}
else 
{
    header("location:login.php?pesan=gagal");
}
?>