<?php
require 'functions.php';
$databerita = query("SELECT * FROM tb_berita ORDER BY id_berita DESC");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $databerita = cariberita($_POST["keyword"]);
}

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
            <a class="nav-link " href="petawisata.php">Peta Wisata<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
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
            <h1 class="display-4">Berita</h1>
            <p class="lead">Beranda → Berita</p>
        </div>
    </div>
   <!-- akhir hero -->


   <!-- berita -->
    <section class="berita mb-5">
    <div class="container" style="font-family: 'Manrope', sans-serif;">
        <div class="row">
          <div class="col-md-12">
            <br><br>
            <!-- cari data -->
            <form action="" method="post" class="form-inline">
              <div class="form-group mr-2">
                <input type="text" name="keyword" size="37" autofocus placeholder="  Cari Berita" autocomplete="off" id="keyword-berita">
              </div>
              <button type="submit" name="cari" class="btn btn-primary" id="tombol-cari">Cari</button>
            </form>
            <!-- akhir cari data -->
            <br>

            <!-- konten -->
            <div id="konten-berita">
            <?php foreach( $databerita as $row ) : ?>
             <div class="card mb-3" style="max-width: 100%;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="img/berita/<?= $row["gambar"]; ?>" style="max-width: 100%;">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><a href="detail_berita.php?id_berita=<?= $row["id_berita"]; ?>" style="text-decoration: none;"><?= $row["judul"]; ?></a></h5>
                    <p class="card-text text-justify"><?= substr($row["isi"], 0, 200); ?><a href="detail_berita.php?id_berita=<?= $row["id_berita"]; ?>" class="text-primary"><b> ... Selengkapnya →</b></a></p></p>
                    <p class="card-text">
                      <small class="text-muted">
                         <?php 
                            $tanggal = substr($row["tgl_posting"],8,2);
                            $bulan   = substr($row["tgl_posting"],5,2);
                            $tahun   = substr($row["tgl_posting"],0,4);
                            $gabung = 'Diposting pada tanggal '.$tanggal.'/'.$bulan.'/'.$tahun;
                            echo "$gabung";
                        ?>
                      </small>
                    </p>
                  </div>
                </div>
              </div>
            </div> 
            <?php endforeach; ?>
            </div>
            <!-- akhir konten -->

          </div>
        </div>
      </div>
      </section>
    <!-- akhir berita -->


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

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>