<?php
session_start();

require "fungsi.php";
if(empty($_SESSION['username']))
{
	header ("location:login.php?pesan=belum_login");
}
elseif ($_SESSION['status']!="user") {
	header("location:login.php?pesan=khusus_user");
}
//ambil file yang di GET
$id_dest = $_GET["id_dest"];
$id_user = $_SESSION['id'];
//read data spesifik yg akan di update
$dest = query("SELECT * FROM destinasi WHERE id_dest = '$id_dest'");

if ( isset($_POST["pesan"]) ) 
{
	if( pesan($_POST) > 0 )
	{
		
		header("location: jadwal.php");
		exit;
	} 
	else
	{
		echo $id_dest." - ".$id_user."helo."."<script>alert( 'Update Data Gagal'); document.location.href = 'tabel.php';</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>WEB TABLE</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar bg-dark  fixed-top" id="mainNav">
		<div class="container">	
			<img src="logo.png" alt="Logo" style="width:40px;">
			<a class="navbar-brand" href="">CONE TOUR</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="home.php">HOME</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="login.php">LOGIN<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="tabel.php">ACTIVITIES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="preview.php">PREVIEW</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<br>
	<div class="container">
		<h2 class="alert alert-dark text-center mt-5">OUR ACTIVITIES </h2>
		<?php foreach( $dest as $destinasi ) : ?>
			<div class="row mt-3">
				<div class="col-md-2"></div>
				<div class="col-md-4 mt-3">

					<img src=image/<?=$destinasi["gambar"]?> style="height:200px">
				</div>
				<div class="col-md-3">
					<br>
					<p>NAMA DESTINASI : <i><b><?= $destinasi["nama_dest"]?></b></i></p>
					<p>TANGGAL: 		<i><b><?=$destinasi["tgl"]?></b></i></p>
					<p>HARGA Perorang : <i><b><?=$destinasi["harga"]?></b></i></p>
					<p>JUMLAH HARI : 	<i><b><?=$destinasi["jum_hari"]?></b></i></p>
					<p>INFO : 			<i><b><?= $destinasi["info"]?></b></i></p>
				</div>
			</div>
			<form method="post" action="">
				<input type="hidden" name="id_user" value="<?=$id_user?>">
				<input type="hidden" name="id_dest" value="<?=$id_dest?>">
				<center><h4> Jumlah Booking :<input type="number" name="banyak" placeholder="Masukkan jumlah traveler" class="form-control form-banyak">
					<button type="submit" name="pesan" value="ok" class="btn btn-primary mt-3">Pesan</button>
				</center>
			</form>

		<?php endforeach; ?>
	</div>




	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<nav class="navbar-dark bg-dark fixed-bottom"><p class="copyright">COPYRIGHT 2019©</p></nav>
</body>
</html>