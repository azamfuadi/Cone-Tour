<?php 
//require function
require 'fungsi.php';

//ambil file get
$id_pesan = $_GET["id_pesan"];

//query delete
$query="DELETE from pemesanan where id_pesan = '$id_pesan'";
mysqli_query($conn, $query);
header("location:jadwal.php");
exit;
 ?>