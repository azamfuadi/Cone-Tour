<?php
//awalan menggunakan session
// session_start();

// //cek apakah sudah login atau belum
// if (empty($_SESSION['username']))
// {
//   header ("location:login.php?pesan=belum_login");
// }

//buka file function
require 'fungsi.php';

//ketika tombol submit di klik
if ( isset($_POST["submit"]) ) 
{

  if( tambah($_POST) > 0 )
  {
    echo "<script>alert('Tambah Data Berhasil'); document.location.href = 'form.php';</script>";
    
  } 
  else
  {
    "<script>alert( 'Tambah Data Gagal'); document.location.href = 'form.php';</script>";
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
	
	<title>WEB FORM</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" id="mainNav">
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
		      <li class="nav-item active">
		        <a class="nav-link" href="login.php">LOGIN<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="tabel.php">TABLE</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="preview.php">PREVIEW</a>
		      </li>
		    </ul>
		  </div>
		  </div>
	</nav>
	<nav class="navbar-dark bg-dark fixed-bottom"><p class="">COPYRIGHT 2019©</p></nav>
		

	<div class="container">
		<h2 class="alert alert-dark text-center mt-5 bg-light"> FORM PENDAFTARAN </h2>
	
		<form method="post" action="">
			<div class="form-group">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						<label class="data">USERNAME</label>	
					</div>
					<div class="col-md-7">
						<input type="text" name="username" class="form-control" placeholder="Masukkan Username"></input> 		
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						<label class="data">PASSWORD</label>	
					</div>
					<div class="col-md-7">
						<input type="text" name="password" class="form-control" placeholder="Masukkan Password"></input> 		
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						<label class="data">NAMA LENGKAP</label>	
					</div>
					<div class="col-md-7">
						<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap"></input> 		
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						<label class="data">TTL</label>	
					</div>
					<div class="col-md-4">
						<input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat Lahir"></input> 		
					</div>
					<div class="col-md-3">
						<input type="date" name="tgl_lahir" class="form-control" placeholder=""></input> 		
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						<label class="data" >ALAMAT</label>	
					</div>
					<div class="col-md-7">
						<textarea class="form-control" name="alamat"></textarea>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						<label class="data">JENIS KELAMIN</label>
					</div>
					<div class="col-md-2">
						<div class="form-check-inline">
							<input type="radio" class="form-check-input" name="jk" value="Laki-Laki">
							<FONT COLOR="white"><FONT FAMILY="lato black" >Laki-Laki</input>
						</div>	
					</div>
						<div class="form-check-inline">
							<input type="radio" class="form-check-input" name="jk" value="Perempuan">Perempuan</input>

						</div>	
				</div>
			</div>

			<center>
			<button type="submit" name="submit" value="ok" class="btn btn-primary">SIMPAN</button>
			<button type="reset" class="btn btn-danger">RESET</button>
			</center>

		</form>
	</div>

	<div class="jumbotron2">
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
</body>
</html>