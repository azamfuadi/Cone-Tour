<?php
//awalan menggunakan session
session_start();

// //cek apakah sudah login atau belum
if (empty($_SESSION['username']))
{
  header ("location:login.php?pesan=belum_login");
}
if ($_SESSION['status']=="user")
{
  header ("location:login.php?pesan=khusus_admin");
}

//buka file function
require 'fungsi.php';

//ambil file yang di GET
$id_dest = $_GET["id_dest"];
//read data spesifik yg akan di update
$dest = query("SELECT * FROM destinasi WHERE id_dest = '$id_dest'");

//ketika tombol update di klik
if ( isset($_POST["update"]) ) 
{

  if( update($_POST) > 0 )
  {
    echo "<script>alert('Update Data Berhasil'); document.location.href = tabel.php';</script>";
       header("location: tabel.php");
       exit;
  } 
  else
  {
    echo "<script>alert( 'Update Data Gagal'); document.location.href = 'tabel.php';</script>";
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

  <div class="container " style="margin-top: 100px;">
    <h2 class="alert alert-dark text-center mt-5 bg-light"> Update Data Tour </h2>
    <?php foreach( $dest as $destinasi ) : ?>
      <center><img src="image/<?=$destinasi["gambar"];?>" width="300" class="rounded mb-5 mt-5"></center>

    <form method="post" action="">
     
      <input type="hidden" name="id_dest" value="<?=$destinasi["id_dest"];?>    ">
      <div class="form-group">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <label class="data">Nama Destinasi</label>  
          </div>
          <div class="col-md-7">
            <input type="text" name="nama_dest" class="form-control" value="<?=$destinasi["nama_dest"];?>"></input>    
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
            <input type="file" name="gambar" value="<?=$destinasi["gambar"];?>" ></input>    
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
            <input type="date" name="tgl"  value="<?=$destinasi["tgl"]?>" class="form-control"></input>
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
            <input type="text" name="jum_hari"  value="<?=$destinasi["jum_hari"]?>" class="form-control"></input>    
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
            <input type="text" name="harga" value="<?=$destinasi["harga"]?>" class="form-control"></input>    
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
            <input type="textarea" class="form-control" name="info" value="<?=$destinasi["info"]?>"></textarea>
          </div>
        </div>
      </div>

      <center>
        <button type="submit" name="update" value="ok" class="btn btn-primary">UPDATE</button>
      </center>
    <?php endforeach; ?>

  </form>
</div>
<div class="mb-5"></div>



<nav class="navbar-dark bg-dark fixed-bottom mt-5"><p class="copyright">COPYRIGHT 2019©</p></nav>
<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

</body>
</html>
