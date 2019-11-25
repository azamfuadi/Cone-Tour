<?php
session_start();

if(empty($_SESSION['status']))
{
	header("location:aktivitas.php");
	$status='nothing';
}
else if ($_SESSION['status']=="admin")
{
	$status='admin';		
}	
else if ($_SESSION['status']=="user")
{
	$status='user';
}

require "fungsi.php";
$dataDest = query("SELECT * FROM destinasi");
if( isset($_POST["cari"]) )
{
    //ambil inputan keyword yg dicari
	$keyword = $_POST["keyword_cari"];
   //data yg ditampilkan data yg dicari
	$dataDest = cari($keyword);
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
			<a class="navbar-brand" href="home.php">CONE TOUR</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="home.php">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="tabel.php">ACTIVITIES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="preview.php">PREVIEW</a>
					</li>
					
					<li class="nav-item">
						<?php if($status=="user")
						{?>
							<a class="nav-link " href="jadwal.php">PEMESANAN</a>
							<?php if($status=="kosong")
							{?>
								<li class="nav-item ">
									<a class="nav-link" href="login.php">LOGIN
										<span class="sr-only">(current)</span></a>
									</li>
								<?php } ?>

							<?php } ?>
						</li>
						<li class="nav-item">
							<?php if(isset($_SESSION['status']))
							{?>
								<a class="nav-link btn-danger" href="logout.php">LOGOUT</a>
							<?php } ?>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<h2 class="alert alert-dark text-center mt-5">OUR ACTIVITIES </h2><br>
			<?php
			if($status=="admin")
				{?>
					<center><a href="tambah.php" class=" btn btn-primary"><b>+</b> TAMBAH TOUR</a></center><br>
				<?php } ?>

				<form method="post" action="">
					<div class="input-group search">

						<input type="text" class="form-control" placeholder="Masukkan Nama Destinasi" name="keyword_cari" aria-label="Recipient's username" aria-describedby="button-addon2" autofocus autocomplete="off">
						<div class="input-group-append">
							<button class="btn btn-success" type="submit" name="cari">Cari</button>
						</div>

					</div>
				</form>
				<hr class="style14">
				<?php   $i = 1; ?>
				<?php   foreach( $dataDest as $baris ) : ?>
						<div class="row mt-3">
							<div class="col-md-5 mt-3">
								<img class="shadow"src=image/<?=$baris["gambar"]?> style="height:300px">
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-3">
								<?php $baris["id_dest"]?>
								<br><h4>NAMA DESTINASI</h4><i><b><?php echo $baris["nama_dest"]?></b></i></p>
								<p>TANGGAL <br><i><b><?php echo $baris["tgl"]?></b></i></p>
								<p>HARGA <br><i><b><?php echo $baris["harga"]?></b></i></p>
								<p>JUMLAH HARI<br><i><b><?=$baris["jum_hari"]?></b></i></p>
								<p>INFO <br><i><b><?php echo $baris["info"]?></b></i></p>
							</div>
							<div class="col-md-2" style="margin-top: 100px">
								<?php 
								if($status=="admin"){?>
									<a href="update.php?id_dest=<?=$baris["id_dest"];?>" class="btn baten btn-warning"> Edit</a>
									<a href="hapus.php?id_dest=<?=$baris["id_dest"];?>" class="mt-3 baten btn btn-danger ">Hapus</a></td>
									<?php 
								} else if ($status="user") 
								{ ?>
									<a href="pesan.php?id_dest=<?=$baris["id_dest"];?>" class="btn baten btn-primary"> Pesan</a>
									<?php 
								} ?>
							</div>

						</div>
						<hr class="style14">
					 <?php  $i++; endforeach; ?>
				</div>
				
				<nav class="navbar-dark bg-dark paddingTabel"><center><p class="copyright">COPYRIGHT 2019©</p></center></nav>
				<br>
				<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
			</body>
			</html>