<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
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

  <!-- gijo CSS -->
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

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
            <a class="nav-link " href="kelola_wisata.php">Kelola Wisata</a>
        </li>
        <li class="nav-item active">
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
            <h1 class="display-4">Tambah Data Berita</h1>
            <p class="lead">Administrator → Tambah Data Berita</p>
        </div>
    </div>
   <!-- akhir hero -->

 
  <?php
  // cek tombol submit
  if( isset($_POST["submit"]) ) {
      // cek insert
      if( tambahberita($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href='kelola_berita.php';
            </script>
        ";
      } else {
      echo mysqli_error($conn);
      echo "<br>";
      echo var_dump(mysqli_affected_rows($conn));

        // echo "
        // <script>
        //     alert('data gagal ditambahkan!');
        //     document.location.href='kelola_berita.php';
        // </script>
        // ";
      }
  }

  ?>
   <!-- form -->
    <section class="tambahberita mb-5 pb-5 mt-5 pt-5">
    <div class="container" style="font-family: 'Manrope', sans-serif;">
    <div class="row justify-content-center">
       <div class="col-md-3">
        <img src="img/logo/news.jpg" style="width: 130%; margin-top: -10px;">
      </div>
      <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_user" value="<?= $_SESSION["id_admin"]; ?>">
        <div class="form-group row justify-content-center">
            <label for="judul" class="col-sm-3 col-form-label">Judul Berita</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="judul" id="judul" required autocomplete="off">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="isi" class="col-sm-3 col-form-label">Isi</label>
            <div class="col-sm-7">
                <textarea name="isi" id="isi" class="form-control" required autocomplete="off"></textarea>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
            <div class="col-sm-7">
                <input type="file" class="form-control-file" name="gambar" id="gambar" required autocomplete="off">
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="keterangan_gambar" class="col-sm-3 col-form-label">Ket. Gambar</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="keterangan_gambar" id="keterangan_gambar" required autocomplete="off">
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="tgl_posting" class="col-sm-3 col-form-label">Tanggal Posting</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="tgl_posting" id="tgl_posting" required autocomplete="off">
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="sumber" class="col-sm-3 col-form-label">Sumber</label>
            <div class="col-sm-7">
                <textarea name="sumber" id="sumber" class="form-control" required autocomplete="off"></textarea>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <button type="submit" name="submit" class="btn btn-primary" style="width: 25%;">Simpan</button>
                 <a href="kelola_berita.php" class="btn btn-danger" style="width: 25%;">Batal</a>
            </div>
        </div>
        </form>
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

    <!-- gijo JS -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    <script type="text/javascript">
      $('#tgl_posting').datepicker({
            format: 'dd/mm/yyyy',
            uiLibrary: 'bootstrap4'
        });
    </script>

  </body>
</html>