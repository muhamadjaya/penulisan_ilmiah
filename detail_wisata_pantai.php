<?php
require 'functions.php';

$id = $_GET["id_wisata"];
$wisataalam = query("SELECT * FROM tb_wisata WHERE id_wisata = $id")[0];


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>SIG Persebaran Lokasi Wisata di Kabupaten Pandeglang</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm " 
    style="background-color: #ffffff" >
    <div class="container" style="font-family: 'Manrope', sans-serif;">
      <a class="navbar-brand" href="#">
      <img src="img/logo/map.png" width="40" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-2 mb-2 h5" id="navbarNavDropdown">
        <ul class="navbar-nav ">
        <li class="nav-item">
            <a class="nav-link " href="index.php">Beranda</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kategori
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            ` <a class="dropdown-item" href="wisata_alam.php">Wisata Alam</a>
              <a class="dropdown-item" href="wisata_pantai.php">Wisata Pantai</a>
              <a class="dropdown-item" href="wisata_religi.php">Wisata Religi</a>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link " href="petawisata.php">Peta Wisata<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="berita.php">Berita</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- akhir navbar -->


   <!-- detail wisata pantai -->
    <section class="detaillistwisata mb-5">
    <div class="container" style="font-family: 'Manrope', sans-serif;">
      
      <div class="row mt-5">
        <div class="col-md-12">
          <br><br>
          <div class="embed-responsive embed-responsive-21by9">
            <?= $wisataalam["keterangan"]; ?>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-12">
          <h2><?= $wisataalam["nama_wisata"]; ?></h4>
        </div>
      </div>

      <div class="row"> 
        <div class="col-md-12">
          <h5><?= $wisataalam["alamat"]; ?></h5>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-md-8">
          <p class="text-justify" style="text-indent: 0.4in;"><?= $wisataalam["deskripsi"]; ?></p>
        </div>
        <div class="col-md-4">
          <img src="img/wisata/<?= $wisataalam["gambar"]; ?>" class="img-thumbnail">
          <br>
          <p class="text-center font-italic text-muted"><?= $wisataalam["keterangan_gambar"]; ?></p>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-md-12 text-justify">
          <p><?= $wisataalam["deskripsi2"]; ?></p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-7">
          <br><br> 
          <div class="embed-responsive embed-responsive-21by9">
            <?= $wisataalam["video"]; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <p class="text-center font-italic text-muted"><?= $wisataalam["keterangan_video"]; ?></p>
        </div>
      </div>

   
    </div>
    </section>
   <!-- akhir detail wisata pantai -->


   <!-- footer -->
    <footer class="text-white bg-secondary" style="font-family: 'Manrope', sans-serif;">
      <div class="container">
        <div class="row pt-3">
          <di class="col text-center">
            <p>copyright 2021.</p>
          </di>
        </div>
      </div>
    </footer>
   <!-- akhir footer -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>