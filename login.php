<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>LOGIN</title>
</head>
<body class="bg-login" >
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		  <div class="container">	
		  <img src="logo.png" alt="Logo" style="width:40px;">
		  <a class="navbar-brand" href="https://www.instagram.com/azamfuadii/">CONE TOUR</a>
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
		        <a class="nav-link" href="tabel.php">ACTIVITIES</a>
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
		<nav class="navbar-dark bg-dark fixed-bottom"><p class="copyright">COPYRIGHT 2019©</p></nav>

		<div class="container " align="center">
			<div class="container2 container2-head">
			<h3 class="text-center  ">LOGIN CUSTOMER</h3>
			 <?php
                    if(isset($_GET['pesan']))
                    {
                        if($_GET['pesan']=="gagal")
                        {
                            echo "Login gagal! username dan password salah!";
                        }
                        else if($_GET['pesan']=="logout")
                        {
                            echo "Anda telah berhasil logout";
                        }
                        else if ($_GET['pesan']=="belum_login")
                        {
                            echo "Anda harus login untuk mengakses halaman edit";
                        }
                        else if ($_GET['pesan']=="khusus_admin")
                        {
                            echo "Halaman khusus admin";
                        }
                        if ($_GET['pesan']=="khusus_user")
                        {
                            echo "Halaman khusus user";
                        }
                    }
                ?>
			<hr></hr>
				<form method="POST" action="cekloginuser.php">
				  <div class="form-group">
				    <label for="inputusername">USERNAME</label>
				    <input type="text" class="form-control" id="username" name="username" placeholder="Input Username">
				  </div>
				  <div class="form-group">
				    <label for="inputpassword">PASSWORD</label>
				    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-primary">LOGIN</button> <br>
				  <a href="form.php">DAFTAR</a>
				</form>
			</div>
		</div>



</body>
</html>