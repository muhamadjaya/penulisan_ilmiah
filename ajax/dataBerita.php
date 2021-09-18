<?php
require '../functions.php';
$keyword = $_GET["keyword-berita"];
$query = "SELECT * FROM tb_berita
                WHERE 
                judul LIKE '%$keyword%'";
$databerita = query($query);

?>

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