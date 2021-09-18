$(document).ready(function() {

	// hilangkan tombol cari
	$('#tombol-cari').hide();

	// event ketika keyboard ditulis
	$('#keyword').on('keyup', function() {
		$('#konten').load('ajax/dataWisataAlam.php?keyword=' + $('#keyword').val());
	});

	$('#keyword-pantai').on('keyup', function() {
		$('#konten-pantai').load('ajax/dataWisataPantai.php?keyword-pantai=' + $('#keyword-pantai').val());
	});

	$('#keyword-religi').on('keyup', function() {
		$('#konten-religi').load('ajax/dataWisataReligi.php?keyword-religi=' + $('#keyword-religi').val());
	});

	$('#keyword-berita').on('keyup', function() {
		$('#konten-berita').load('ajax/dataBerita.php?keyword-berita=' + $('#keyword-berita').val());
	});

});