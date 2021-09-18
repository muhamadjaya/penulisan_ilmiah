<?php
require '../functions.php';
$keyword = $_GET["keyword-religi"];
$query = "SELECT * FROM tb_wisata
          WHERE kategori='religi' AND
          nama_wisata LIKE '%$keyword%'";
$wisatareligi = query($query);

?>

<div class="row row-cols-1 row-cols-md-3">
          
  <?php foreach( $wisatareligi as $row ) : ?>
  <div class="col mb-4">
    <div class="card">
      <img src="img/wisata/<?= $row["gambar"]; ?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><?= $row["nama_wisata"]; ?></h5>
        <p class="card-text text-justify"><?= substr($row["deskripsi"], 0, 100); ?> ...</p>
        <a href="detail_wisata_religi.php?id_wisata=<?= $row["id_wisata"]; ?>" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  
</div>