<?php
//awalan menggunakan session
  
session_start();

//buka file function.php
require 'fungsi.php';

$username = $_POST ['username'];
$password = $_POST ['password'];

//ambil data username dan password yg di inputkan
$data = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' and password='$password'") or die (mysqli_error($conn));
    //data ditemukan, 1 username dan 1 password di dapat
    $cek = mysqli_num_rows($data);
    //cek jika data yg ditemukan 1, 1 username dan 1 password
    if($cek == 1)
    {
        $_SESSION ['username'] = $username;
        $_SESSION ['status'] = "admin";
        header("location:tabel.php");
    }
    else 
    {
        header("location:loginadmin.php?pesan=gagal");
    }
?>