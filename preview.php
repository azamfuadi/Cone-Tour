<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!--meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"-->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		<title>PREVIEW</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="mainNav">
			<div class="container">	
				<img src="logo.png" alt="Logo" style="width:40px;">
				<a class="navbar-brand" href="">CONE TOUR</a>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav navbar-right">
						<li class="nav-item">
							<a class="nav-link" href="home.php">HOME</a>
						</li>
						<?php if(empty($_SESSION['status']))
						{?>
						<li class="nav-item ">
							<a class="nav-link" href="login.php">LOGIN<span class="sr-only">(current)</span></a>
						</li>
						<?php } ?>
						<li class="nav-item">
							<a class="nav-link" href="tabel.php">ACTIVITIES</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="preview.php">PREVIEW</a>
						</li>
						<li class="nav-item ">
						<a class="nav-link" href="loginadmin.php">ADMIN</a>
					</li>
					</ul>
				</div>
			</div>
		</nav>
<div class="karosel">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="slider/slider1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block data-slider">
						<h1 class="text-white" >Experience Different Activities</h1>
						<p class="text-black">Berbagai kegiatan menarik untuk mengisi liburan</p>
					</div>
				</div>

				<div class="item">
					<img src="slider/slider2.jpg" class="d-block w-100" alt="...">
					<div  class=" carousel-caption d-none d-md-block data-slider">
						<h1 class="text-white" >Experience Different Places</h1>
						<p class="text-black">Bertempat di berbagai negara dari berbagai bernua</p>
					</div>
				</div>

				<div class="item">
					<img src="slider/slider3.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block data-slider2">
						<div class="container ">
							<span class="badge" style="background-color: #03b1fc;padding-bottom: 10px;" ><h1>Hello and Welcome!</h1></span>
							
							<p class="lead ">WE PROVIDE YOU ANY ACTIVITIES TO BOOST<br>s YOUR MOOD DURING YOUR HOLIDAY <br> 	
							
							<p class="lead ">LOGIN NOW TO KNOW MORE !</p>
							<a class="btn btn-primary btn-lg" href="login.php" role="button">LOGIN</a>
						</p>
					</div>
					<h1 class="text-white">Experience Different People</h1>
					<p class="text-black">Berinteraksi dengan orang-orang dari berbagai tempat di satu kegigatan yang sama</p>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

</div>
	<nav class="navbar-dark bg-dark paddingPreview"><center><p class="copyright">COPYRIGHT 2019©</p></center></nav>
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</body>
</html>