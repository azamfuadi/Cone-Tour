<?php
session_start();

if(empty($_SESSION['status']))
{
	header("location:tabel.php");
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
$id_user=$_SESSION ['id'];
require "fungsi.php";
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
					<li class="nav-item">
						<a class="nav-link" href="preview.php">PREVIEW</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tabel.php">ACTIVITIES</a>
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
		
		<br>
		<div class="container">
			<h2 class="alert alert-success text-center mt-5">YOUR TOUR SCHEDULE </h2>

			<?php
			$query = "SELECT * FROM pemesanan as p 
					  JOIN user as u 
					  ON p.id_user=u.id_user 
					  AND p.id_user='$id_user'
					  JOIN destinasi AS d ON p.id_dest=d.id_dest";
			$hasil_mysql = mysqli_query($conn,$query);
			while($baris = mysqli_fetch_assoc($hasil_mysql))
				{ ?>
					<div class="row mt-3">
						
						<div class="col-md-5 mt-3">

							<img class="shadow"src=image/<?=$baris["gambar"]?> style="height:300px">
						</div>
						
						<div class="col-md-4">
							<?php $baris["id_dest"]?>
							<p><br><i><b>Keberangkatan : <br><h2><?php echo $baris["tgl"]." ( ".$baris["jum_hari"]." Hari )"?></h2>
							NAMA DESTINASI</h4><h2><?php echo $baris["nama_dest"]?></h2></p>
							
							<p>BANYAK TRAVELLER <br><?php echo $baris["banyak"]?></p>
							
							<p>TOTAL HARGA <br><?php echo $baris["total"]?></b></i></p>

						</div>
						<div class="col-md-1"></div>
						<div class="col-md-1" style="margin-top: 100px">

							<a href="hapusjadwal.php?id_pesan=<?=$baris["id_pesan"];?>" 
								class="mt-3 baten btn btn-danger ">BATAL
							</a></td>
						</div>

					</div>
					<?php 
				} ?>
			</div>
<nav class="navbar-dark bg-dark paddingJadwal"><center><p class="copyright">COPYRIGHT 2019©</p></center></nav>
			<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		</body>
		</html>