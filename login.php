<?php
session_start();

if ( isset($_SESSION["login"]) ) {
  header("Location: kelola_wisata.php");
  exit;
}

require 'functions.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"]; 

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");


    // cek username
    if( mysqli_num_rows($result) === 1 ) {

        // echo "<script> alert('data ditemukan') </script>";

        // cek password
        $row = mysqli_fetch_assoc($result);

        // $verify = password_hash($password, PASSWORD_DEFAULT);
        // $hash = $row["password"];
        // // $hasil = password_verify($verify, $hash);

        // var_dump($verify);
        // var_dump($hash);
        // // var_dump($hasil);
        // if(password_verify($_POST["password"], $hash)) {
        //     echo "pass benar";
        // } else {
        //     echo "pass salah";
        // }


        // if(password_verify($verify, $hash)) {
        //     echo "<script> alert('data ditemukan') </script>";
        //     header('Location: index.php');
        //     exit;
        // }

        

            if( password_verify($password, $row["password"]) ) {
                // set session
                $_SESSION["login"] = true;
                $_SESSION["id_admin"] = $row["id_user"];
                
                header("Location: kelola_wisata.php");
                exit;
            }
    } 

    $error = true;
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
    <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm " 
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
    </nav> -->
    <!-- akhir navbar -->

      <!-- hero -->
    <!-- <div class="jumbotron jumbotron-fluid">
        <div class="container text-center text-white font-weight-bold pt-5">
            <br> <br>
            <style background></style>
            <h1 class="display-4">Login Admin</h1>
            <p class="lead">Beranda → Login Admin</p>
        </div>
    </div> -->
   <!-- akhir hero -->


   <!-- form -->
    <section class="login mt-5 pt-5" style="min-height: 521px;">
    <div class="container" style="font-family: 'Manrope', sans-serif;">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <img src="img/logo/regist.jpg" style="width: 110%; margin-top: -10px;">
      </div>
      <div class="col-md-4">
        <form action="" method="post">
        <div class="form-group">
          <h2>Selamat Datang!</h1><br>
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" required autocomplete="off">
        </div>

        <div class="form-group">
          <?php if( isset($error) ) : ?>
              <p style="color: red; font-style: italic">username / password salah</p>
          <?php endif; ?>
        </div>

        <button type="submit" name="login" class="btn btn-primary" style="width: 100%;">Login</button>
          
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