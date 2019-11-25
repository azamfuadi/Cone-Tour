<?php
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
			        <a class="nav-link" href="login.php">LOGIN</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="tabel.php">ACTIVITIES<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="preview.php">PREVIEW</a>
			      </li>
			      <li class="nav-item ">
							<a class="nav-link" href="loginadmin.php">ADMIN</a>
				  </li>
			    </ul>
		  </div>
		</div>
	</nav>
	
	<br>
	<div class="container" >
		<h2 class="alert alert-dark text-center mt-5">OUR ACTIVITIES </h2>
		<hr class="style14">
		<?php
		$query = "SELECT * FROM destinasi";
		$hasil_mysql = mysqli_query($conn,$query);
		while($baris = mysqli_fetch_assoc($hasil_mysql))
			{ ?>
				<div class="row mt-3">
					<div class="col-md-2"></div>
					<div class="col-md-5 mt-3">

						<img src=image/<?=$baris["gambar"]?> style="height:300px">
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-3">
					<h4>NAMA DESTINASI</h4><i><b><?php echo $baris["nama_dest"]?></b></i></p>
					<p>TANGGAL <br><i><b><?php echo $baris["tgl"]?></b></i></p>
					<p>HARGA <br><i><b><?php echo $baris["harga"]?></b></i></p>
					<p>JUMLAH HARI<br><i><b><?=$baris["jum_hari"]?></b></i></p>
					<p>INFO <br><i><b><?php echo $baris["info"]?></b></i></p>

				</div>
			
			</div>

			<hr class="style14">
		<?php } ?>
	</div>

	<nav class="navbar-dark bg-dark futer-aktivitas">
		<br><center><h5 class="copyright">COPYRIGHT 2019©</h5></center></nav>

	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
</body>
</html>