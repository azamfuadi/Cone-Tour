<?php 
session_start();
if(empty($_SESSION['username']))
{$nama='';}
else
{$nama=$_SESSION['username'];}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>HOME WEB</title>
</head>
<body id="Main_Page">
	<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" id="mainNav">
		<div class="container">	
			<img src="logo.png" alt="Logo" style="width:40px;">
			<a class="navbar-brand" href="">CONE TOUR</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="home.php">HOME</a>
					</li>
					<?php if(empty($_SESSION['status']))
					{?>
					<li class="nav-item ">
						<a class="nav-link" href="login.php">LOGIN</a>
					</li>
				<?php } ?>
					<li class="nav-item">
						<a class="nav-link" href="tabel.php">ACTIVITIES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="preview.php">PREVIEW</a>
					</li>
					
					<li class="nav-item ">
						<a class="nav-link" href="loginadmin.php">ADMIN</a>
					</li>
					<?php 
					if(isset($_SESSION['status']))
					{?>
					<li class="nav-item ">
						<a class="nav-link btn btn-danger" href="logout.php">LOGOUT</a>
					</li>
				<?php } ?>	
				</ul>
			</div>
		</div>
	</nav>

	<div class="jumbotron">
		<div class="container  " style="margin-top: 220px;">
			<h1 class="display-4 ">Hello and Welcome!<br><?="Dear ".$nama ?></h1>

			<h4><i><span class="badge badge-secondary lead"> WE PROVIDE YOU ANY ACTIVITIES TO BOOST YOUR MOOD DURING HOLIDAY</span></i></h4> <br><br>
			<a href="preview.php" class="btn btn-warning boten">
				SEE  MORE
			</a>
			<hr class="my-4">
			<button type="button" class="btn btn-warning boten" data-toggle="modal" data-target="#myModal">
				LOGIN
			</button>


		</div>
	</div>

	<!-- The Modal -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header bg-light  ">

					<h2>LOGIN CUSTOMER</h2>

					<button type="button" class="close" data-dismiss="modal">×</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body bg-warning">
					<div class="container" align="center">    
						<form method="post" action="cekloginuser.php">
							<div class="form-group">
								<label for="inputusername">USERNAME</label>
								<input type="text" name="username" class="form-control" id="username" placeholder="Input Username">
							</div>
							<div class="form-group">
								<label for="inputpassword">PASSWORD</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary">LOGIN</button> <br>
							<a href="form.php">DAFTAR</a>
						</form>
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer bg-light">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	<!-- The Modal -->
	<nav class="navbar-dark bg-dark padding "><CENTER><p class=" copyright">COPYRIGHT 2019©</CENTER></nav>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
</body>
</html>
