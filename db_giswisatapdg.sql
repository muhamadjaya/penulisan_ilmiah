-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Jul 2021 pada 13.35
-- Versi Server: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_giswisatapdg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(5) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `isi` text NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` text NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `isi`, `tgl_posting`, `gambar`, `id_user`) VALUES
(9, 'Wisata Taman Nasional Ujung Kulon tutup hingga 30 Mei 2021', 'Wisata Taman Nasional Ujung Kulon tutup hingga 30 Mei 2021.\r\nHal itu diketahui berdasarkan Surat Edaran (SE) dari Balai Taman Nasional Ujung Kulon (BTNUK) Nomor : SE.04/T.12/TU/P3/5/2021 tertanggal 17 Mei 2021 bahwa kunjungan ke seluruh objek wisata yang ada di Kawasan Taman Nasional tersebut ditutup sementara.\r\n\r\nHumas Balai Taman Nasional Ujung Kulon, Andri Firmansyah dalam keterangannya di Tangerang, Senin, mengatakan keputusan penutupan objek wisata alam berbasis konservasi itu merupakan tindaklanjut dari instruksi Gubernur Banten, Wahidin Halim tertanggal 15 Mei 2021 dan Surat Edaran Bupati Pandeglang, Irna Narulita yang meminta agar seluruh objek wisata dilakukan penutupan sementara waktu.\r\n\r\n\"Per hari ini (Senin 17 Mei) resmi ditutup, kita mengikuti instruksi Gubernur dan SE Bupati tertanggal 16 Mei kemarin,\" kata Andri.\r\n\r\nIa menegaskan pihaknya akan mengikuti setiap kebijakan serta intruksi yang diambil oleh pemerintah terkait upaya dalam memutus mata rantai penyebaran COVID-19 di objek wisata.\r\n\r\n\"Kalau dicabut sebelum tanggal 30  Mei, ya kita akan ikuti. Kalau sampai tanggal 30 Mei, kita juga tetap mengikuti. Jadi apapun dan seperti apa hasilnya, kita tetap akan mengikuti apa yang sudah ditetapkan oleh pemerintah,\" ujarnya.\r\n\r\nAkan tetapi, pihaknya meminta agar Pemprov Banten dan Pemkab Pandeglang segera mencari solusi dan alternatif lain untuk masyarakat yang terkena imbas langsung dari ditutupnya sementara objek wisata, terutama untuk para pengelola wisata yang ada.\r\n\r\n\"Semoga penutupan tempat wisata di Banten ini memberi hasil baik terhadap pencegahan penyebaran COVID-19. Pemprov Banten dan Pemkab Pandeglang pun harus mencari alternatif untuk mendorong pertumbuhan ekonomi bagi masyarakat yang ada di setiap objek wisata, terutama para pelaku wisata,\" katanya.', '2021-06-08', '60bf9f1a4a26c.jpg', 0),
(10, 'Wabub Pandeglang Tanto Minta Tanjung Lesung Masuk ', 'Wakil Bupati Pandeglang Tanto Warsono Arban minta Tanjung Lesung jadi program skala prioritas nasional Kawasan Ekonomi Khusus (KEK) kembali. Sebab Tanjung Lesung dihapus dari prioritas KEK.\r\n\r\nHal itu disampaikan Tanto, lantaran KEK Tanjung Lesung keluar dari 10 program skala prioritas nasional.\r\n\r\nAspirasi tersebut diungkapkan saat Komisi X DPR RI melakukan kunjungan kerja ke Tanjung Lesung, Jumat 4 Juni 2021.\r\n\r\nâ€œDalam pertemuan ini kami telah menyampaikan aspirasi dan kendala dari berbagai pihak kepada para wakil rakyat, mudah-mudahan ada tanggapan dan langkah konkrit atas aspirasi yang disampaikan, terkait kondisi KEK Tanjung Lesung,â€ kata Tanto Sabtu kemarin.\r\n\r\nMenurut Tanto, saat ini KEK Tanjung Lesung sudah keluar dari 10 besar program prioritas nasional.\r\n\r\nMaka pihaknya berharap dari pertemuan ini ada dukungan dan motivasi dari anggota DPR RI.\r\n\r\nâ€œSemoga para wakil rakyat di DPR RI ini dapat mendorong KEK Tanjung Lesung supaya masuk lagi dalam program prioritas nasional. Karena ini untuk memajukan pariwisata di Pandeglang,â€ katanya.\r\n\r\nSementara, anggota Komisi X DPR RI, Hetifah Sjaifudian mengungkapkan, pihaknya telah mendengar aspirasi dan keluhan dari berbagai pihak termasuk dari Wakil Bupati Pandeglang, terkait pengembangan destinasi wisata Tanjung Lesung. Kata dia, hal itu tentu menjadi catatan di Komisinya.\r\n\r\nâ€œDestinasi wisata Tanjung Lesung memmag memiliki potensi besar dalam mendongkrak peningkatan ekonomi masyarakat dan pendapatan daerah, maka dari itu perlu dikembangkan, maka kami akan medorongnya supaya jadi program skala prioritas nasional,â€ ujarnya.', '2021-06-08', '60bfa0dd96c3e.jpg', 0),
(11, 'Pembangunan Wisata Tanjung Lesung Pandeglang Perlu', 'Anggota Komisi X DPR RI Bramantyo Suwondo menilai dukungan dan perhatian masyarakat akan menjadi kunci political will pemerintah pusat untuk membangun destinasi wisata Tanjung Lesung.\r\n\r\nMenurut Bramantyo, dengan adanya dukungan tersebut berarti adanya kesiapan dari masyarakat untuk mengantisipasi permasalahan sosial karena ada pembangunan destinasi wisata Tanjung Lesung.\r\n\r\nâ€œKalau ada dukungan dan perhatian masyarakat sekitar bagi wisata Tanjung Lesung ini bisa jadi dorongan bagi pemda untuk ke pemerintah pusat sebagai sebuah perhatian yang besar,â€ jelas Bramantyo saat mengikuti Kunjungan Kerja Spesifik Komisi X DPR RI meninjau Kawasan Wisata Tanjung Lesung, di Pandeglang, Banten, Jumat (4/6/2021).\r\n\r\nKarena itu, Bramantyo mendorong agar ada pelibatan warga setempat untuk dipekerjakan jika investor hadir untuk mengelola pariwisata.\r\n\r\nBaca juga: Komisi X Dukung KEK Wisata Tanjung Lesung Dapatkan Perhatian Khusus dari Pemerintah\r\n\r\nâ€œAgar jangan sampai masyarakatnya tertinggal dari pembangunan tersebut. Karena ini juga permasalahannya tidak hanya lingkungan, tapi juga permasalahan sosial yang akan besar lagi kalau tidak tertangani,â€ ujar politisi Partai Demokrat tersebut.\r\n\r\nUntuk memperkuat hal itu, Anggota Komisi X DPR RI Illiza Saâ€™aduddin Djamal menambahkan perlu adanya kajian strategis yang melibatkan antar-kementerian/lembaga serta beberapa komisi di DPR RI dalam pembangunan kawasan wisata Tanjung Lesung.\r\n\r\nâ€œArtinya, ini tinggal komitmen political will pemerintah pusat sesuai dengan kajian strategis nya. Apalagi (Tanjung Lesung) ini bisa mengurangi kepadatan Jakarta dengan aksesibilitas tol dibangun. Sehingga masyarakat sudah punya pilihan (destinasi wisata), jadi meskipun jauh tapi kalau jalannya bagus saya kira masyarakat bisa bersyukur,â€ ujar Illiza.', '2021-06-09', '60bfa242750cf.jpg', 0),
(12, 'Objek Wisata di Kabupaten Pandeglang masih Terus D', 'REFERENSI BERITA - Situasi dan kondisi objek wisata di Kabupaten Pandeglang tampaknya tidak jauh berbeda dengan objek wisata di Kabupaten Serang, tepatnya di kawasan Pantai Anyer pada Minggu, 16 Mei 2021.\r\n\r\nPada pukul 11.00 antrian kendaraan menuju Pantai Anyer yang makin panjang, dan kondisi tak jauh berbeda juga terjadi di jalan menuju sejumlah objek wisata di Kabupaten Pandeglang.\r\n\r\nSalah satunya jalan menuju Pantai Carita. Di kawasan ini antrian kendaraan memang tidak sepadat satu hari sebelumnya. Namun kemacetan tak terhindarkan.\r\n\r\nBaca Juga: BPK Perwakilan Banten: Pemkab Pandeglang Hamburkan Miliaran Duit Rakyat\r\n\r\n\"Ini mungkin karena adanya surat edaran dari gubernur. Atau mungkin masayarakat sadar dan takut melihat kerumunan yang terjadi kemarin. Mungkin juga takut ada corona. Pengunjung tak sepadat hari kemarin,\" ungkap salah seorang petugas parkir di kawasan Pantai Carita.\r\n\r\nKondisi serupa juga terjadi di objek wisata pemandian air alam, Cihunjuran, Kecamatan Mandalawangi dan Cikoromoy. Pagi hari kolam renang ini tampak masih lengang.\r\n\r\nTampak petugas dari Polri, Satpol PP dan TNI berjaga untuk menghalau para pengunjung.\r\n\r\nKepala Satpol PP Kabupaten Pandeglang, Entus Bakti mengatakan, Surat Edaran Gubernur Banten tentang penutupan seluruh objek wisata, sebagai upaya mencegah penyebaran Covid-19, direspn positif Pemkab Pandeglang.\r\n\r\n\"Tadi malam kami berkoordinasi dengan semua pihak untuk menindaklanjuti surat edaran itu. Pagi sekali, kami langsung bergerak ke seluruh objek wisata untuk menutupnya,\" terang Entus Bakti.\r\n\r\nMenurut Entus, pihaknya juga langsung memerintahkan seluruh anggota Satpol PP di masing-masing kecataman untuk langsung bergerak ke lapangan.\r\n\r\n\"Alhamdulillah semua MP (Mantri Polisi) di kecamatan sudah menjalankan instruksi. Mereka langsung bergerak, menutup objek wisata yang ada di daerahnya masing-masing. Hasilnya nanti kita evaluasi,\" terangnya.', '2021-06-11', '60c313a25de09.jpg', 0),
(13, 'sqsqsqw', 'qwsqwsqw', '2021-12-31', '60c3141a2b4dd.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `telepon`) VALUES
(1, 'andi', 'andi', '$2y$10$JDs2.wVnxavmU2RenPol4eZW3VBpOFtfSC6n.PxKiI2aG6YFhiYNu', '087741155889'),
(2, 'budi', 'budi', '$2y$10$rrblZAtPqRaWfRNtH.w4qOoLM7EcGSnuGg/ACEqaMu4a3BL2.8C7G', '087876151046'),
(3, 'ali', 'ali', '$2y$10$Qqu9HXgXp3nYz.Jf/EmaaedCcYKg/35ufUumniTbtQQF8dRpGP6KG', '087741188445');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(5) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `latitude` float(12,6) NOT NULL,
  `longitude` float(12,6) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama_wisata`, `deskripsi`, `kategori`, `alamat`, `latitude`, `longitude`, `gambar`, `keterangan`, `id_user`) VALUES
(3, 'Curug Cinoyong', 'Pemandangan air terjun yang jatuh dari ketinggian memang sayang untuk dilewatkan. Di Pandeglang Anda bisa mengunjungi curug Cinoyong yang terbilang tinggi. Dikelilingi sawah dan memiliki debit yang deras akan sanggup menghempas penat Anda. Curug Cinoyong juga sangat cocok sebagai tempat berburu swafoto dengan latar air terjun yang megah.', 'alam', ' Jl. Cinoyong, Kec. Carita, Kab. Pandeglang, Banten.', -6.255370, 105.903450, '60b0fd38bad17.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.054376242598!2d105.89831516446671!3d-6.256567395471318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e422ec893719aa7%3A0xe780e98b8e8e260f!2sCurug%20Cinoyong!5e0!3m2!1sid!2sid!4v1622861636591!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 0),
(4, 'Taman Nasional Ujung Kulon', 'Taman nasional ujung kulon ini memiliki gelar sebagai natural world heritage site yang mana memiliki tiga ekosistem yaitu daratan, laut dan pantai. Sementara wilayah daratan terdiri dari Gunung Honje, Semenanjung Kulon dan adanya dua pulau kecil. Area laut sendiri meliputi terumbu karang dan padang lamun. Kawasan ini tak kalah menarik juga dari segi pantainya. Pengunjung bisa menikmati hutan pantai dan mangrove dengan pemandangan begitu indah.\r\n\r\nLokasi Taman Nasional Ujung Kulon berada di Kemacatan Sumur dan Cimanggu. Tempat wisata yang terbilang cocok sebagai tempat rekreasi untuk keluarga.', 'alam', ' Kec. Sumur dan Kec. Cimanggu, Kab. Pandeglang, Banten.', -6.784730, 105.375221, '60b0fe234117c.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.878030836024!2d105.37292011446989!3d-6.784694395095957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42233395979ea1%3A0x8df3a34e43b4c872!2sTaman%20Nasional%20Ujung%20Kulon!5e0!3m2!1sid!2sid!4v1622861758825!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 0),
(5, 'Curug Leuwi Bumi', 'Selain pantai, wisata alam curug di Pandeglang juga tak kalah menarik untuk dikunjungi. Anda bisa menjadikan Curug Leuwi Bumi sebagai tujuan. Curug ini memang bukan cagar lama, tetapi air terjun maupun hutannya masih sangat terjaga. Curug Leuwi Bumi memang tidak tinggi, bahkan cenderung seperti sungai tetapi pemandangan yang dihadirkan begitu menawan.\r\n\r\nAir yang mengalir ini begitu bersih dan juga berasal dari sumber yang beragam. Sehingga alirannya cukup deras, dengan bebatuan yang tersebar di sekitarnya. Anda bisa menikmati suara deburan air lengkap dengan alamnya yang masih begitu asri. Ditambah dengan udaranya yang sejuk, pasti akan membuat Anda tidak ingin segera pulang.', 'alam', ' Jl. Ramea, Kec. Mandalawangi, Kab. Pandeglang, Banten.', -6.246249, 105.948196, '60b0fed1a81d4.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1306400438243!2d105.94548131446666!3d-6.246509995478538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e422f3d05729043%3A0x6a47a2740c5e46e1!2sWisata%20Leuwi%20Bumi!5e0!3m2!1sid!2sid!4v1622861817838!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 0),
(6, 'Pantai Batu Hideung', 'Pantai Batu Hideung sendiri dibagi menjadi dua bagian, yakni Pantai Hideung Besar dan juga Pantai Hideung Kecil. Jarak antara keduanya tidak jauh, hanya sekitar 2 km. Sehingga Anda bisa menjelajahi keduanya ketika sedang ada di Pandeglang. Karena keduanya sama sama memiliki pesona yang tidak bisa ditawar.\r\n\r\nPantai satu ini memiliki keunikan pada bebatuan yang menonjol pada tepi pantainya. Selain itu juga sangat cocok sebagai tempat untuk berburu sunrise ataupun sunset. Pasir putih lengkap dengan air jernihnya juga sangat sayang untuk dilewatkan. Pemandangan semakin mempesona saat para nelayan sedang bersiap untuk ke laut.', 'pantai', ' Jl. Tanjungjaya, Kec. Panimbang, Kab. Pandeglang, Banten.', -6.533560, 105.624649, '60b10061b7b5e.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15855.602185855412!2d105.61615312214272!3d-6.534243224379747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e43b51223baec27%3A0xd44e7d5a0ed5de42!2sPantai%20Batu%20Hideung%20Pandeglang%20Banten!5e0!3m2!1sid!2sid!4v1622861980680!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 0),
(7, 'Pantai Tanjung Lesung', 'Kali ini masih dari pantai yang ada di Pandeglang. Tak akan asing mendengar nama Pantai Tanjung Lesung. Sebab, pantai ini memiliki pasir yang puth dan juga ombak kecil. Luasnya sekitar 150 hektare dengan bentuk melengkung mirip lumpang penumbuk padi. Ada beberapa bagian dari Tempat Wisata di Pandeglang yang ditumbuhi oleh pepohonan hijau dan terlihat sebagai perpaduan panorama yang indah. Pantai Tanjung Lesung ini berada di Tanjung Jata, Kecamata Panimbang. Wisatawan bisa melakukan beberapa aktivitas seperti memancing, duduk santai atau menaiki banana boat.', 'pantai', ' Jl. Tanjung Jaya, Kec. Panimbang, Kab. Pandeglang, Banten.', -6.498030, 105.644119, '60b1010e5ed01.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1849242506314!2d105.6418919144681!3d-6.498257795299322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e43c9d4f7945155%3A0x769cccb6b76e064d!2sPantai%20Tanjung%20Lesung!5e0!3m2!1sid!2sid!4v1622862010213!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 0),
(8, 'Pantai Carita', 'Kembali ke tempat wisata pantai di Pandeglang. Kali ini adalah Pantai Carita yang diketahui merupakan tempat terbaik untuk bisa menikmati panorama indah. Letaknya ada di pesisir barat dan berhadapan langsung dengan selat sunda. Hal inilah yang menyebabkan tepi pantai carita ini tergolong landai dan deru ombak yang tidak terlalu besar.\r\n\r\nLokasi pantai carita berada di Desa Sukanagara, Kecamatan Carita. Ketika berada di gerbang pantai, setiap alat transportasi akan dikenakan biaya tiket masuk seperti bus Rp. 400.000 hingga Rp. 700.000 dan kendaraan pribadi beroda empat wajib membayar sekitar Rp. 150.000 per unit.', 'pantai', ' Jl. Sukanagara, Kec. Carita, Kab. Pandeglang, Banten.', -6.305370, 105.841019, '60b101ff47524.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15862.713417966987!2d105.83247522212129!3d-6.305922226978478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e422dae1efccfe9%3A0xb3a862fb459744e4!2sPantai%20Carita!5e0!3m2!1sid!2sid!4v1622862047856!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 0),
(9, 'Batu Qur\'an', 'Terletak di Kabupaten Pandeglang, tepatnya di kaki Gunung Karang, Batu Qurâ€™an merupakan salah satu destinasi wisata religi di Banten. Batu Qurâ€™an merupakan sebuah tempat ziarah yang memiliki sejarah yang unik. Penamaan Batu Qur\'an ini berasal dari adanya batu besar yang bertuliskan Al-Qur\'an di tempat tersebut. Jika diperhatikan dengan seksama, tak ada tulisan yang terpangpang di sisi batu. Masyarakat mempercayai bahwa hanya orang-orang yang memiliki ilmu yang tinggilah yang bisa melihat tulisan Al-Qurâ€™an di batu tersebut. Uniknya, cerita yang berkembang di masyarakat adalah batu ini menghalangi keluarnya air yang terus mengalir dari dalam tanah. Tak hanya itu, masyarakat juga meyakini bahwa lokasi batu ini dulunya adalah pijakan kaki seorang Syekh kenamaan bernama Syekh Maulana Mansyuruddin yang hendak pergi berhaji ke Baitullah, Mekkah. Hanya dengan menginjakkan kaki di lokasi tersebut, konon katanya Syekh Maulana bisa langsung sampai ke Mekkah. Daya tarik lokasi ini bukan hanya terletak pada batunya, namun juga kejernihan air yang mengalir di sekitarnya. Air ini biasanya dipakai pengunjung untuk sekedar berendam ataupun mandi.', 'religi', ' Jl. Pariwisata Cikoromoy, Kadubungbang, Kec. Cimanuk, Kabupaten Pandeglang, Banten 42271', -6.326586, 106.022484, '60b1117e54f82.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5180051384787!2d106.02025991446712!3d-6.326852295421276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e423be7b47454af%3A0xd3df89aeee9e1685!2sBatu%20Qur&#39;an!5e0!3m2!1sid!2sid!4v1622862076990!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 0),
(10, 'balong', 'banyak airrr', 'alam', 'desa balong', -6.053712, 106.627838, '60c318c7c1d11.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31740.55176533132!2d106.62784027761232!3d-6.053712042870953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a040eb8825747%3A0x1d0f8f3cd35e3b15!2sPangkalan%2C%20Kec.%20Teluknaga%2C%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1623398560884!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 1),
(11, 'Puncak', 'puncak gunung', 'alam', 'gunung tinggi', -6.533560, 105.947678, '60c31919856f5.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31740.55176533132!2d106.62784027761232!3d-6.053712042870953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a040eb8825747%3A0x1d0f8f3cd35e3b15!2sPangkalan%2C%20Kec.%20Teluknaga%2C%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1623398675339!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
