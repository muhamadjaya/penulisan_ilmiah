<?php
require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM tb_wisata
          WHERE kategori='alam' AND
          nama_wisata LIKE '%$keyword%'";
$wisataalam = query($query);

?>

<div class="row row-cols-1 row-cols-md-3">
          
<?php foreach( $wisataalam as $row ) : ?>
<div class="col mb-4">
<div class="card">
  <img src="img/wisata/<?= $row["gambar"]; ?>" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?= $row["nama_wisata"]; ?></h5>
    <p class="card-text text-justify"><?= substr($row["deskripsi"], 0, 100); ?> ...</p>
    <a href="detail_wisata_alam.php?id_wisata=<?= $row["id_wisata"]; ?>" class="btn btn-primary">Selengkapnya</a>
  </div>
</div>
</div>
<?php endforeach; ?>

</div>