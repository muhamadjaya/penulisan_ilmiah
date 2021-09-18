<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil data di url
$id = $_GET["id_wisata"];

// query data wisata berdasarkan id_wisata
$alam = query("SELECT * FROM tb_wisata WHERE id_wisata = '$id'")[0];
// var_dump($alam["deskripsi_wisata"]);

// edit map
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
          height: 380px; 
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
        <li class="nav-item active">
            <a class="nav-link " href="kelola_wisata.php">Kelola Wisata</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="kelola_berita.php">Kelola Berita</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="kelola_admin.php">Kelola Admin</a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
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
            <h1 class="display-4">Ubah Data Wisata</h1>
            <p class="lead">Administrator → Ubah Data Wisata</p>
        </div>
    </div>
   <!-- akhir hero -->

 
  <?php
  // cek tombol submit apakah berhasil diubah
  if( isset($_POST["submit"]) ) {
      // cek insert
      if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href='kelola_wisata.php';
            </script>
        ";
      } else {
        echo mysqli_error($conn);
        // echo "
        // <script>
        //     alert('data gagal diubah!');
        //     document.location.href='kelola_wisata.php';
        // </script>
        // ";
      }
  }

  ?>
      <!-- form -->
      <section class="wisataalamm mb-5 pb-5 mt-5 pt-5">
    <div class="container" style="font-family: 'Manrope', sans-serif;">
    
    <div class="row ">
      <div class="col-md-6">
        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_wisata" value="<?= $alam["id_wisata"]; ?>"> 
        <input type="hidden" name="gambarLama" value="<?= $alam["gambar"]; ?>">
        <input type="hidden" name="id_user" value="<?= $_SESSION["id_admin"]; ?>">
        <div class="form-group row justify-content-center">
            <label for="nama_wisata" class="col-sm-3 col-form-label">Nama Wisata</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="nama_wisata" id="nama_wisata" required value="<?= $alam["nama_wisata"]; ?>">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-8">
                <textarea name="deskripsi" id="deskripsi" class="form-control" required><?= $alam["deskripsi"]; ?></textarea>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="deskripsi2" class="col-sm-3 col-form-label">Deskripsi2</label>
            <div class="col-sm-8">
                <textarea name="deskripsi2" id="deskripsi2" class="form-control" required><?= $alam["deskripsi2"]; ?></textarea>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
            <div class="col-sm-8">
              <select class="form-control" name="kategori" id="kategori">
                <?php
                    if ($alam["kategori"]=="alam") {
                      $select="selected";
                    $kalam="alam";
                    $kpantai="pantai";
                    $kreligi="religi"; 
                     echo "<option $select value=".$kalam.">Alam</option><option value=".$kpantai.">Pantai</option><option value=".$kreligi.">Religi</option>";
                    }elseif($alam["kategori"]=="pantai"){
                      $select="selected";
                    $kalam="alam";
                    $kpantai="pantai";
                    $kreligi="religi"; 
                      echo "<option value=".$kalam.">Alam</option><option $select value=".$kpantai.">Pantai</option><option value=".$kreligi.">Religi</option>";
                    } else {
                      $select="selected";
                    $kalam="alam";
                    $kpantai="pantai";
                    $kreligi="religi"; 
                      echo "<option value=".$kalam.">Alam</option><option value=".$kpantai.">Pantai</option><option $select value=".$kreligi.">Religi</option>";
                    }                 
                ?>
              </select>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-8">
                <textarea name="alamat" id="alamat" class="form-control" required><?= $alam["alamat"]; ?></textarea>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="latitude" class="col-sm-3 col-form-label">Latitude</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="latitude" id="latitude" value="<?= $alam["latitude"]; ?>">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="longitude" class="col-sm-3 col-form-label">Longitude</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="longitude" id="longitude" value="<?= $alam["longitude"]; ?>">
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
            <div class="col-sm-8">
                <img src="img/wisata/<?= $alam["gambar"]; ?>" width="150"> <br>
                <input type="file" class="form-control-file" name="gambar" id="gambar">
            </div>
        </div>  

        <div class="form-group row justify-content-center">
            <label for="keterangan_gambar" class="col-sm-3 col-form-label">Ket. Gambar</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="keterangan_gambar" id="keterangan_gambar" required value="<?= $alam["keterangan_gambar"]; ?>">
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="video" class="col-sm-3 col-form-label">Video</label>
            <div class="col-sm-8">
                <textarea name="video" id="video" class="form-control"><?= $alam["video"]; ?></textarea>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="keterangan_video" class="col-sm-3 col-form-label">Ket. Video</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="keterangan_video" id="keterangan_video" required value="<?= $alam["keterangan_video"]; ?>">
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
            <div class="col-sm-8">
                <textarea name="keterangan" id="keterangan" class="form-control"><?= $alam["keterangan"]; ?></textarea>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-8">
                <button type="submit" name="submit" class="btn btn-primary" style="width: 25%;">Ubah</button>
                <a href="kelola_wisata.php" class="btn btn-danger" style="width: 25%;">Batal</a>
                <!-- <button type="reset" name="reset" class="btn btn-danger">Batal</button> -->
            </div>
        </div>
        </form>
      </div>

      <div class="col-md-6">
         <div id="mapid"></div>
      </div>

    </div>
    </div>
    </section>
   <!-- akhir form -->


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

      var marker = L.marker([-6.3251885, 106.0764884]).addTo(mymap);
      marker.bindPopup("<b>Kabupaten Pandeglang").openPopup();

      var theMarker = {};
        mymap.on('click',function(e){
          lat = e.latlng.lat;
          lon = e.latlng.lng;

          console.log("You clicked the mymap at LAT: "+ lat+" and LONG: "+lon );
              //Clear existing marker, 

              if (theMarker != undefined) {
                    mymap.removeLayer(theMarker);
              };

          //Add a marker to show where you clicked.
           theMarker = L.marker([lat,lon]).addTo(mymap);  
          document.getElementById('latitude').value = lat;
          document.getElementById('longitude').value = lon;
      });
    </script>

  </body>
</html>