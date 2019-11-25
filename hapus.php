<?php 
//require function
require 'fungsi.php';

//ambil file get
$id_dest = $_GET["id_dest"];

//query delete
$query="DELETE from destinasi where id_dest = '$id_dest'";
mysqli_query($conn, $query);
header("location:tabel.php");
exit;
 ?>