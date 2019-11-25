<?php
//awalan menggunakan session
session_start();

// //cek apakah sudah login atau belum
if (empty($_SESSION['username']))
{
  header ("location:login.php?pesan=belum_login");
}
else if ($_SESSION['status']!="admin")
{
  header ("location:login.php?pesan=khusus_admin");
}

//buka file function
require 'fungsi.php';

//ketika tombol submit di klik
if ( isset($_POST["submit"]) ) 
{

  if( destinasi($_POST) > 0 )
  {
    echo "<script>alert('Tambah Data Berhasil'); document.location.href = 'tabel.php';</script>";
    
  } 
  else
  {
    "<script>alert( 'Tambah Data Gagal'); document.location.href = 'admin.php';</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>LOGIN</title>
</head>
<body class="bg-dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container"> 
      <img src="logo.png" alt="Logo" style="width:40px;">
      <a class="navbar-brand" href="https://www.instagram.com/azamfuadii/">CONE TOUR</a>
      <center><h5>Hello,<?=$_SESSION['username']?> </h5></center>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tabel.php">TABLE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="preview.php">PREVIEW</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link btn btn-danger" href="logout.php">Logout<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container " style="margin-top: 100px;">
    <h2 class="alert alert-dark text-center mt-5 bg-light"> Tambah Data Tour </h2>

    <form method="post" action="">
      <div class="form-group">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <label class="data">Nama Destinasi</label>  
          </div>
          <div class="col-md-7">
            <input type="text" name="nama_dest" class="form-control" placeholder="Masukkan Destinasi"></input>    
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <label class="data">Pilih Gambar</label>  
          </div>
          <div class="col-md-7">
            <input type="file" name="gambar" class="form-control"></input>    
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <label class="data">Tanggal</label>  
          </div>
          <div class="col-md-7">
            <input type="date" name="tgl" class="form-control" placeholder=""></input>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <label class="data">Jumlah Hari</label>  
          </div>
          <div class="col-md-7">
            <input type="text" name="jum_hari" class="form-control" placeholder="Masukkan Jumlah Hari Tour"></input>    
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <label class="data">Harga</label>  
          </div>
          <div class="col-md-7">
            <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga"></input>    
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <label class="data" >Informasi</label> 
          </div>
          <div class="col-md-7">
            <textarea class="form-control" name="info" placeholder="Masukkan Informasi Tentang Destinasi"></textarea>
          </div>
        </div>
      </div>



      <center>
        <button type="submit" name="submit" value="ok" class="btn btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-danger">RESET</button>
      </center>

    </form>
  </div>



  <nav class="navbar-dark bg-dark mt-5"><center><p class="copyright">COPYRIGHT 2019©</p></center></nav>

  <div class="container" align="center">

  </div>



</body>
</html>