<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if( isset($_POST["register"]) ) {

        if( registrasi($_POST) > 0 ) {
            echo "<script>
                    alert('user baru berhasil ditambahkan!');
                    document.location.href='kelola_admin.php';              
                  </script>";
        } else {
            echo mysqli_error($conn);
        }
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
            <a class="nav-link " href="kelola_wisata.php">Kelola Wisata</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="kelola_berita.php">Kelola Berita</a>
        </li>
        <li class="nav-item active">
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
            <h1 class="display-4">Tambah Data Admin</h1>
            <p class="lead">Administrator → Tambah Data Admin</p>
        </div>
    </div>
   <!-- akhir hero -->

 
   <!-- form -->
    <section class="tambahadmin mt-5 pt-4">
    <div class="container" style="font-family: 'Manrope', sans-serif;">
    <div class="row justify-content-center">
      <div class="col-md-3">
        <img src="img/logo/user.jpg" style="width: 130%; margin-top: -50px;">
      </div>
      <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group row justify-content-center">
            <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nama" id="nama" required autocomplete="off">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="telepon" class="col-sm-3 col-form-label">Telepon</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="telepon" id="telepon" required autocomplete="off">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="username" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="username" id="username" required autocomplete="off">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password" id="password" required autocomplete="off">
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="password2" class="col-sm-3 col-form-label">Konfirmasi Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password2" id="password2" required autocomplete="off">
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <button type="submit" name="register" class="btn btn-primary" style="width: 25%;">Simpan</button>
                 <a href="kelola_admin.php" class="btn btn-danger" style="width: 25%;">Batal</a>
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

  </body>
</html>