<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$dataadmin = query("SELECT * FROM tb_user");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $dataadmin = cariadmin($_POST["keyword"]);
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">


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
            <h1 class="display-4">Kelola Admin</h1>
            <p class="lead">Administrator → Kelola Admin</p>
        </div>
    </div>
   <!-- akhir hero -->


   <!-- kelola admin -->
    <section class="kelolaadmin mb-5">
    <div class="container" style="font-family: 'Manrope', sans-serif;">

    <div class="row">
      <div class="col-md-12">
        <br> <br>
        <!-- cari data -->
        <!-- <form action="" method="post" class="form-inline">
          <div class="form-group mr-2">
            <input type="text" name="keyword" size="37" autofocus placeholder="Masukkan Data Yang Ingin Dicari" autocomplete="off">
          </div>
          <button type="submit" name="cari" class="btn btn-primary">Cari</button>
          <a href="tambah_admin.php" class="btn btn-primary ml-auto">Tambah Data Admin</a>
        </form> -->
        <!-- akhir cari data -->
        <a href="tambah_admin.php" class="btn btn-primary ml-auto">Tambah Data Admin</a>
        <br><br>

        <table class="table table-bordered table-hover table-responsive-md" id="example">
          <thead class="thead-dark text-center">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col" style="width: 145px;">Telepon</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col" style="width: 166px;">Aksi</th>
            </tr>
          </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach( $dataadmin as $row ) : ?>
            
            <tr>
                <th class="text-center" scope="row">
                    <?= $i; ?>
                </th>
                <td>
                    <?= $row["nama"]; ?>
                </td>
                <td>
                    <?= $row["telepon"]; ?>
                </td>
                <td>
                    <?= $row["username"]; ?>
                </td>
                <td>
                    <?= substr($row["password"], 0, 50); ?>
                </td>
                <td>
                    <a href="ubah_admin.php?id_user=<?= $row["id_user"]; ?>" class="btn btn-warning">Ubah</a>
                    <a href="hapus_admin.php?id_user=<?= $row["id_user"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data ini?');">Hapus</a>
                </td>
            </tr>
            
            <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </div>
    </div>
    </section>
   <!-- akhir kelola admin -->


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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>

  </body>
</html>