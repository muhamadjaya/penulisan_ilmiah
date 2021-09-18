<?php
require 'functions.php';
$wisataalam = query("SELECT * FROM tb_wisata");

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

        <!-- leaflet CSS & JS -->
         <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
         integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
         crossorigin=""/>
         <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
         integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
         crossorigin=""></script>

         <style>
           #mapid { 
              width: 100%;  
              height: 500px;
            }
         </style>
    

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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kategori
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            ` <a class="dropdown-item" href="wisata_alam.php">Wisata Alam</a>
              <a class="dropdown-item" href="wisata_pantai.php">Wisata Pantai</a>
              <a class="dropdown-item" href="wisata_religi.php">Wisata Religi</a>
            </div>
          </li>
          
          <li class="nav-item active">
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

      <!-- hero -->
    <div class="jumbotron jumbotron-fluid" style="height: 350px">
        <div class="container text-center text-white font-weight-bold pt-5" style="font-family: 'Manrope', sans-serif;">
            <br>
            <style background></style>
            <h1 class="display-4">Peta Wisata</h1>
            <p class="lead">Beranda → Peta Wisata</p>
        </div>
    </div>
   <!-- akhir hero -->


   <!-- peta -->
    <!-- <section class="peta mb-5">
    <div class="container text-center" style="font-family: 'Manrope', sans-serif;">
    <div class="row">
      <div class="col-md-12">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d57337.0196445878!2d106.0293844650362!3d-6.306644681485571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1swisata%20di%20dekat%20Pandeglang%2C%20Kabupaten%20Pandeglang%2C%20Banten!5e1!3m2!1sid!2sid!4v1622880018263!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
        </div>
      </div>
    </div>
    </div>
    </section> -->
   <!-- akhir peta -->

    <!-- leaflet map -->
    <section class="peta mt-5 mb-5">
      <div class="container text-center" style="font-family: 'Manrope', sans-serif;">
         <div id='mapid'>   
         </div>
      </div>
    </section>
   <!-- akhir leaflet map -->


   <!-- footer -->
    <footer class="text-white bg-secondary" style="font-family: 'Manrope', sans-serif;">
      <div class="container" style="font-family: 'Manrope', sans-serif;">
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

     <script>
      var mymap = L.map('mapid').setView([-6.3251885, 106.0764884], 9);
      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiamF5YW11aGFtYWQ5OSIsImEiOiJja3B0Nmh5MnAwejB4MndtdXFudGJlOW1pIn0.OCi7urJJMAsdI084T1lq5A'
      }).addTo(mymap);

      var marker = L.marker([-6.309489622335966, 106.10648725444891]).addTo(mymap); 
      marker.bindPopup("<b>Selamat Datang di Kabupaten Pandeglang!</b><br />Alun-Alun Pandeglang").openPopup();

      L.circle([-6.309489622335966, 106.10648725444891], 2000, {
      color: 'yellow',
      fillColor: '#fafa03',
      fillOpacity: 0.5
     }).addTo(mymap).bindPopup("Jl. Raya Labuan, Pandeglang, Kec. Pandeglang, Kabupaten Pandeglang, Banten 42211");

      

      <?php foreach( $wisataalam as $row ) : ?>
        <?php
        $latitude=$row["latitude"];
        $longitude=$row["longitude"];
        $LINK="https://www.google.co.id/maps/dir/-6.309500286054545, 106.10651944112158/$latitude,$longitude";
        $detail="<a href='$LINK' target='_blank'>Rute</a>";
        ?>
        var marker = L.marker([<?= $row["latitude"]; ?>,<?= $row["longitude"]; ?>]).addTo(mymap); 
      marker.bindPopup("<b><?= $row["nama_wisata"]; ?></b><br><?= $row["alamat"]; ?><br><?php echo $detail ?>");//.openPopup();
      <?php endforeach; ?>
        
    </script>
  </body>
</html>