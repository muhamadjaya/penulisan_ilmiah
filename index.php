<?php
require 'functions.php';
$wisataalam = query("SELECT * FROM tb_wisata WHERE kategori='alam' ORDER BY id_wisata ASC LIMIT 3");

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
          <li class="nav-item active">
            <a class="nav-link " href="index.php">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kategori
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="wisata_alam.php">Wisata Alam</a>
              <a class="dropdown-item" href="wisata_pantai.php">Wisata Pantai</a>
              <a class="dropdown-item" href="wisata_religi.php">Wisata Religi</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="petawisata.php">Peta Wisata</a>
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

   <!-- jumbotron -->
   <!-- <div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <br> <br>
    <h1 class="display-4">Selamat Datang di Sistem Informasi Geografis</h1>
    <p class="lead">Persebaran Lokasi Wisata di Kabupaten Pandeglang</p>
  </div>
</div> -->
   <!-- akhir jumbotron -->

   <!-- wisata home -->
  <section class="wisatahome">
  <div class="container" style="font-family: 'Manrope', sans-serif;">
  <div class="row mt-5 pt-5">
    <div class="col-md-6 pt-5">
      <br> <br> <br>
      <h5 class="text-primary font-weight-bold">SELAMAT DATANG DI SIG WISATA PANDEGLANG</h5>
      <h1>Keindahan alam yang di akui Dunia yang bisa kamu liat di Kabupaten Pandeglang!</h1>
      <p class="text-justify">Keindahan alam yang dimiliki Kabupaten Pandeglang menjadikannya sebagai wilayah yang masuk rekomendasi untuk dikunjungi saat liburan. Memiliki Pantai, Gunung, Tempat Bersejarah dan Wahana Atraksi yang ada di Kabupaten Pandeglang yang siap kalian kunjungi kapan saja.
      </p>
    </div>
    <div class="col-md-6">
      <img src="img/logo/tourism.jpg" class="img-thumbnail border-0">
    </div>
  </div>
</div>
  </section> 
   <!-- akhir wisata home -->

   <!-- peta -->
    <section class="peta">
    <div class="container text-center" style="font-family: 'Manrope', sans-serif;">
    <div class="row mt-2 pt-2">
      <div class="col-md-12 mb-3">
      <br> <br>
        <h1>Peta Kabupaten Pandeglang</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="embed-responsive embed-responsive-21by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m10!1m3!1d63450.76521612256!2d106.029384!3d-6.306645!2m1!3f0!3m2!1i1024!2i768!4f13.1!2m1!1swisata%20di%20dekat%20Pandeglang%2C%20Kabupaten%20Pandeglang%2C%20Banten!5e0!3m2!1sid!2sid!4v1623251740626!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
    </div>
    </section>
   <!-- akhir peta -->

   <!-- list -->
    <section class="listwisata mb-5">
    <div class="container" style="font-family: 'Manrope', sans-serif;">
    <div class="row mt-4 pt-5">
      <div class="col mt-4 pt-5 mb-3 text-center">
        <h1 >  List Wisata</h1>
      </div>
    </div>
    <?php foreach( $wisataalam as $row ) : ?>
    <div class="row">
      <div class="col-md-6">
      <img src="img/wisata/<?= $row["gambar"]; ?>" class="img-thumbnail">      
      </div>
      <div class="col-md-6 text-justify" method="post">
        <h5><a href="detail_list_wisata.php?id_wisata=<?= $row["id_wisata"]; ?>" style="text-decoration: none;"><?= $row["nama_wisata"]; ?></a></h5>
        <p><?= substr($row["deskripsi"], 0, 700); ?><a href="detail_list_wisata.php?id_wisata=<?= $row["id_wisata"]; ?>" class="text-primary" style="text-decoration: none;"><b> ... Selengkapnya →</b></a></p>
      </div>
    </div><br>
    <?php endforeach; ?>

    </section>
   <!-- akhir list -->

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