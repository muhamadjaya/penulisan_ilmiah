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
    

    <title>SIG Persebaran Lokasi Wisata di Kabupaten Pandeglang</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm " 
    style="background-color: #ffffff" >
    <div class="container">
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
          
          <li class="nav-item active">
            <a class="nav-link " href="petawisata.php">Peta<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="berita.php">Berita</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- akhir navbar -->

      <!-- hero -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center text-white font-weight-bold pt-5">
            <br> <br>
            <style background></style>
            <h1 class="display-4">Registrasi</h1>
            <p class="lead">Beranda → Registrasi</p>
        </div>
    </div>
   <!-- akhir hero -->

 
  <?php
  // cek tombol submit
  if( isset($_POST["submit"]) ) {
      // cek insert
      if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href='wisata_alam.php';
            </script>
        ";
      } else {
      echo mysqli_error($conn);
      echo "<br>";
      echo var_dump(mysqli_affected_rows($conn));

        // echo "
        // <script>
        //     alert('data gagal ditambahkan!');
        //     document.location.href='wisata_alam.php';
        // </script>
        // ";
      }
  }

  ?>
   <!-- form -->
    <section class="registrasi mb-5">
    <div class="container">
    <div class="row mt-3 mb-5 text-center">
      <div class="col-md-12">
      <br> <br>
        <h1>Registrasi Admin</h1>
      </div>
    </div>
    <div class="row ">
      <div class="col-md-10">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group row justify-content-center">
            <label for="nama_admin" class="col-sm-2 col-form-label">Nama Admin</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nama_admin" id="nama_admin" required>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="telepon" id="telepon" required>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="email" id="email" required>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="username" id="username" required>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <label for="password2" class="col-sm-2 col-form-label">Konfirmasi Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password2" id="password2" required>
            </div>
        </div>
        <fieldset class="form-group row justify-content-center">
            <legend class="col-form-label col-sm-2 float-sm-left pt-0">Status</legend>
            <div class="col-sm-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="Aktif" checked>
                    <label class="form-check-label" for="gridRadios1">
                    Aktif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="Tidak Aktif">
                    <label class="form-check-label" for="gridRadios2">
                    Tidak Aktif
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="form-group row justify-content-center">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-6">
                <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <button type="submit" name="register" class="btn btn-primary">Register</button>
                <button type="reset" name="reset" class="btn btn-danger">Batal</button>
            </div>
        </div>
        </form>
      </div>
    </div>
    </div>
    </section>
   <!-- akhir form -->


   <!-- footer -->
    <footer class="text-white" style="background-color:#1501e5">
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