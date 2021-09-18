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
          
          <li class="nav-item">
            <a class="nav-link" href="kontak.php">Peta</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="petawisata.php">Kontak<span class="sr-only">(current)</span></a>
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
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center text-white font-weight-bold pt-5">
            <br> <br>
            <style background></style>
            <h1 class="display-4">Kontak</h1>
            <p class="lead">Beranda → Kontak</p>
        </div>
    </div>
   <!-- akhir hero -->


   <!-- contact -->
    <section class="peta mb-5">
    <div class="container">
    <div class="row mt-3">
      <div class="col-md-12">
      <br> <br>
        <h1>Hubungi Kami</h1>
        <p>Hubungi kami sekarang untuk mengetahui info lebih jauh agar bisa membantu kamu dalam tempat wisata dan liburan di Kabupaten Pandeglang.</p>
      </div>
    </div>

    <div class="row ">
      <div class="col-lg-4">
      <form>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" >
            </div>
           <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="text" class="form-control" id="email" >
            </div>
            <div class="form-group">
                <label for="telp">Nomor Telepon</label>
                <input type="text" class="form-control" id="telp" >
            </div>
            <div class="form-group">
                <label for="pesan">Apa Pesanmu?</label>
                <textarea name="pesan" id="pesan" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Kirim Pesan!</button>
            </div>
        </form>
      </div>    
      
      <div class="col-lg-8">
        <h3>Tanya bagaimana cara kami membantu anda:</h3>
        <br>
        <p><b>Bagaimana cara memakai fitur Website SIG Wisata Pandeglang</b></p>
        <p>Anda bisa menjelajahi Peta Wisata untuk menikmati fitur Website SIG Wisata Pandeglang.</p>
        <br>
        <p><b>Jika anda merupakan pengelola tempat pariwisata</b></p>
        <p>Jika tempat anda tidak terdaftar di Database kami, anda dapat mencantumkannya kedalam pesan.</p>
        <br>
        <p><b>Mengalami kesalahan dan bug</b></p>
        <p>Anda dapat menghubungi kami dengan mengisi form di sebelah kiri anda, lalu akan kami balas secepatnya.</p>
    </div>
    </div>

    </div>
    </section>
   <!-- akhir contact -->


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