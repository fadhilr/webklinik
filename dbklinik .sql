-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 09:21 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `ahli`
--

CREATE TABLE `ahli` (
  `idAhli` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `namaAhli` varchar(50) NOT NULL,
  `noHp` varchar(50) NOT NULL,
  `jenisKelamin` varchar(50) NOT NULL,
  `fotoAhli` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahli`
--

INSERT INTO `ahli` (`idAhli`, `username`, `password`, `namaAhli`, `noHp`, `jenisKelamin`, `fotoAhli`, `status`) VALUES
(1, 'ahli', '1234', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_afeksi`
--

CREATE TABLE `data_afeksi` (
  `idData` int(20) NOT NULL,
  `kemampuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_afeksi`
--

INSERT INTO `data_afeksi` (`idData`, `kemampuan`) VALUES
(1, 'Mengisi wadah dengan air; dari botol ke gelas'),
(2, 'Mengisi wadah dengan air; dari gelas ke botol'),
(3, 'Memakai baju sendiri(kemeja bawahan/celana dan rompi) dengan cepat, tepat, dan rapi'),
(4, 'Memakai baju sendiri(kemeja bawahan/celana dan rompi) dengan tepat'),
(5, 'Hanya bisa memakai 1 macam pakaian sendiri (kemeja saja, bawahan/celana saja)'),
(6, 'melepas pakaian dan menaruhnya di gantungan hanger dengan cepat, tepat, dan rapi'),
(7, 'melepas pakaian dan menaruhnya di gantungan hanger lama dan tidak rapi'),
(8, 'melipat baju / celana dengan rapi'),
(9, 'meronce dan menghitung 15 manik-manik dengan tali sepatu'),
(10, 'meronce dan menghitung 12 manik-manik dengan tali sepatu dengan cepat dan tepat'),
(11, 'meronce dan menghitung 10 manik-manik dengan tali sepatu tapi tidak dapat menghitung'),
(12, 'Bermain temu kelereng; menemukan 8 kelereng dengan cepat'),
(13, 'Bermain temu kelereng; menemukan 8 kelereng dengan kurang cepat'),
(14, 'Bermain temu kelereng; tidak bisa menemukan 8 kelereng dengan cepat'),
(15, 'hasil');

-- --------------------------------------------------------

--
-- Table structure for table `data_akademik`
--

CREATE TABLE `data_akademik` (
  `idData` int(20) NOT NULL,
  `kemampuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_akademik`
--

INSERT INTO `data_akademik` (`idData`, `kemampuan`) VALUES
(1, 'Menyebut urutan huruf abjad A-Z; dengan urut'),
(2, 'Menyebut urutan huruf abjad A-Z; dengan acak'),
(3, 'Memasangkan urutan abjad A-Z; meniru menyusun urutan abjaz A-Z'),
(4, 'Memasangkan urutan abjad A-Z : menyusun urutan abjad A-Z sendiri'),
(5, 'Menyebut urutan bilangan 1-30; dengan urut'),
(6, 'Menyebut urutan bilangan 1-30; dengan acak'),
(7, 'Membilang dengan benda (1-15/20)'),
(8, 'Mengenali warna primer (merah, kuning, dan biru)'),
(9, 'mengenali warna sekunder (hijau, ungu, jingga)'),
(10, 'Bermain dengan 3 pola dengan benar; dengan 3 pola dengan benar'),
(11, 'Bermain dengan 3 pola dengan benar; dengan 4 pola dengan benar'),
(12, 'membaca gambar; menyebutkan kata bergambar'),
(13, 'membaca gambar; menyebutkan kata gambar'),
(14, 'membaca gambar; menyebutkan kata'),
(15, 'memegang pensil dengan benar'),
(16, 'berjalan maju dan mundur; jalan samping kanan/kiri'),
(17, 'berjalan maju dan mundur; melihat keatas dan kebawah'),
(18, 'Mengikuti perintah; jongkok'),
(19, 'Mengikuti perintah; duduk'),
(20, 'Mengikuti perintah; berdiri'),
(21, 'Mengikuti perintah; sujud'),
(22, 'hasil');

-- --------------------------------------------------------

--
-- Table structure for table `data_kognisi`
--

CREATE TABLE `data_kognisi` (
  `idData` int(20) NOT NULL,
  `kemampuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kognisi`
--

INSERT INTO `data_kognisi` (`idData`, `kemampuan`) VALUES
(1, 'Menyusun kepingan puzzle; menyusun 4-5 keping'),
(2, 'Menyusun kepingan puzzle; menyusun 4-6 keping'),
(3, 'Menyusun kepingan puzzle; menyusun diatas 6 keping'),
(4, 'mewarnai gambar;  proses pewarnaan'),
(5, 'mewarnai gambar;  memenuhi gambar/selesai'),
(6, 'mewarnai gambar;  rapi dan bersih'),
(7, 'melipat kertas; lipatan dasar (lurus dan miring)'),
(8, 'melipat kertas; 3 lipatan menjadi bentuk'),
(9, 'melipat kertas; 5-6 lipatan menjadi bentuk'),
(10, 'melipat kertas; menempel'),
(11, 'Membedakan dan membuat konsep banyak sedikit'),
(12, 'Merasakan kasar, halus, lembek, basah, kering, berat, ringan'),
(13, 'Menyusun balok atau kubus; Menyusun 8-10 balok/kubus'),
(14, 'Menyusun balok atau kubus; Menyusun 10-16 balok/kubus'),
(15, 'hasil');

-- --------------------------------------------------------

--
-- Table structure for table `data_psikomotor`
--

CREATE TABLE `data_psikomotor` (
  `idData` int(20) NOT NULL,
  `kemampuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_psikomotor`
--

INSERT INTO `data_psikomotor` (`idData`, `kemampuan`) VALUES
(1, 'Bermain memegang bola sesuai instruksi; dengan tangan kiri'),
(2, 'Bermain memegang bola sesuai instruksi; dengan tangan kanan'),
(3, 'Bermain memegang bola sesuai instruksi; bergantian dengan tangan kanan dan kiri'),
(4, 'Menendang bola; dengan kaki kiri'),
(5, 'Menendang bola; dengan kaki kanan'),
(6, 'Menendang bola; bergantian dengan kaki kanan dan kiri'),
(7, 'Memasukkan bola ke dalam keranjang basket; 3 bola dengan tepat'),
(8, 'Memasukkan bola ke dalam keranjang basket; 5 bola dengan tepat'),
(9, 'Memasukkan bola ke dalam keranjang basket; 7 bola dengan tepat'),
(10, 'Berjalan di atas papan titian dengan membawa beban dengan seimbang'),
(11, 'Melompat kedalam dan keluar simpai'),
(12, 'Naik turun tanggan pelangi'),
(13, 'bermain luncuran'),
(14, 'melempar benda tepat sasaran'),
(15, 'meloncat dengan rintangan'),
(16, 'Melompat dari ketinggian +-30 cm'),
(17, 'naik sepeda roda 2'),
(18, 'hasil');

-- --------------------------------------------------------

--
-- Table structure for table `data_sosial`
--

CREATE TABLE `data_sosial` (
  `idData` int(20) NOT NULL,
  `kemampuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sosial`
--

INSERT INTO `data_sosial` (`idData`, `kemampuan`) VALUES
(1, 'Mau diajak bicara'),
(2, 'Berani (mau bersalaman)'),
(3, 'Bisa menyebut nama diri; lengkap'),
(4, 'Bisa menyebut nama diri; nama ibu'),
(5, 'Bisa menyebut nama diri; nama ayah'),
(6, 'Menjawab jika ditanya'),
(7, 'Menunjukkan bagian tubuh(minimal 5)'),
(8, 'Menyebutkan bagian tubuh'),
(9, 'Menyebutkan fungsi bagian tubuh (minimal 5)'),
(10, 'Mau bermain bersama teman'),
(11, 'Menirukan gerakan ekspresi (senyum, sedih, nangis, marah, sakit peru/gigi)'),
(12, 'hasil');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_adhd`
--

CREATE TABLE `gejala_adhd` (
  `idGejala` int(20) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala_adhd`
--

INSERT INTO `gejala_adhd` (`idGejala`, `gejala`) VALUES
(1, 'Sering gagal dalam memberikan perhatian penuh atau membuat kesalahan dalam tugas-tugas sekolah, pekerjaan dan aktifitas lainnya.'),
(2, 'Mengalami kesulitan dalam mempertahankan perhatian terhadap tugas atau kegiatan bermain'),
(3, '     Tidak memperhatikan ketika orang lain berbicara'),
(4, '       Sering tidak dapat mengakui perintah dan gagal dalam menyelesaikan tugas-tugas sekolah'),
(5, '       Memiliki kesulitan dalam mengatur tugas dan aktifitas'),
(6, '       Tidak menyukai, menghindari, bahkan terkadang menolak untuk mengerjakan tugas di sekolah dan tugas di rumah'),
(7, '       Sering kehilangan perlengkapan untuk belajar dan juga bermain'),
(8, '       Mudah terusik oleh stimulus yang ada di sekelilingnya'),
(9, '       Sering terlupa dalam mengerjakan aktifitas harian'),
(10, '      Menunujukkan kegelisahan dengan menggerakkan tangan dan kaki saat duduk'),
(11, '      Sering meninggalkan kursi di kelas atau di segala situasi yang membutuhkan waktu yang lama'),
(12, '      Sering berlari bahkan memanjat pada situasi yang tidak tepat'),
(13, '      Memiliki kesulitan bermain di aktivitas bermain yang membutuhkan ketenangan'),
(14, '      Sering bertindak spontan atau terlihat bergerak tanpa kendali'),
(15, '      Sering berbicara yang tidak terkendali'),
(16, '      Sering menjawab langsung suatu pertanyaan sebelum pertanyaan tersebut selesai diungkapkan secara keseluruhan'),
(17, '       Mengalami kesulitan pada saat menunggu giliran'),
(18, '      Sering menginterupsi saat mengikuti percakapaan'),
(19, 'Hasil');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_autis`
--

CREATE TABLE `gejala_autis` (
  `idGejala` int(20) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala_autis`
--

INSERT INTO `gejala_autis` (`idGejala`, `gejala`) VALUES
(1, 'Kesulitan mengenal dan merespon dengan emosi isyarat social'),
(2, 'Tidak bisa menunjukkan perbedaan ekspresi wajah secara jelas dan tegas'),
(3, 'Kurang memiliki perasaan dan empati'),
(4, 'Ekspresi emosi yang kaku'),
(5, 'Sering menunjukkan perilaku yang meledak-ledak'),
(6, 'Menunjukkan perilaku yang bersifat stereotif'),
(7, 'Sulit untuk diajak komunikasi secara verbal'),
(8, 'Cenderung menyendiri dan asyik dengan dunianya sendiri'),
(9, 'Sering mengabaikan situasi disekelilingnya atau justru terlalu responsive'),
(10, 'hasil');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_ds`
--

CREATE TABLE `gejala_ds` (
  `idGejala` int(20) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala_ds`
--

INSERT INTO `gejala_ds` (`idGejala`, `gejala`) VALUES
(1, 'Menyebutkan dengan benar; tahun'),
(2, 'Menyebutkan dengan benar; Musim'),
(3, 'Menyebutkan dengan benar; Tanggal'),
(4, 'Menyebutkan dengan benar; Hari'),
(5, 'Menyebutkan dengan benar; Bulan'),
(6, 'Menyebutkan dengan benar; Sekarang'),
(7, 'Menyebutkan dengan benar; Dimana sekarang kita berada Negara'),
(8, 'Menyebutkan dengan benar; Provinsi'),
(9, 'Menyebutkan dengan benar; Kabupaten/kota'),
(10, 'Menyebutkan dengan benar; Kecamatan'),
(11, 'Menyebutkan dengan benar; Kelurahan'),
(12, 'Sebutkan 3 nama obyek(missal: kursi, meja, kertas) kemudian tanyakan kepada klien menjawab; kursi'),
(13, 'Sebutkan 3 nama obyek(missal: kursi, meja, kertas) kemudian tanyakan kepada klien menjawab Meja'),
(14, 'Sebutkan 3 nama obyek(missal: kursi, meja, kertas) kemudian tanyakan kepada klien menjawab Kertas'),
(15, 'Meminta klien berhitung mulai dari 100 kemudian kurangi 7 sampai 5 tingkat; 93'),
(16, 'Meminta klien berhitung mulai dari 100 kemudian kurangi 7 sampai 5 tingkat; 86'),
(17, 'Meminta klien berhitung mulai dari 100 kemudian kurangi 7 sampai 5 tingkat; 79'),
(18, 'Meminta klien berhitung mulai dari 100 kemudian kurangi 7 sampai 5 tingkat; 72'),
(19, 'Meminta klien berhitung mulai dari 100 kemudian kurangi 7 sampai 5 tingkat; 65'),
(20, 'Meminta klien mengulangi ketiga bilangan pertanyaan sebelumnya; 93'),
(21, 'Meminta klien mengulangi ketiga bilangan pertanyaan sebelumnya; 86'),
(22, 'Meminta klien mengulangi ketiga bilangan pertanyaan sebelumnya; 79'),
(23, 'Meminta klien mengulangi ketiga bilangan pertanyaan sebelumnya; 72'),
(24, 'Meminta klien mengulangi ketiga bilangan pertanyaan sebelumnya; 65'),
(25, 'Menanyakan kepada klien tentang benda(sambil menunjukkan benda tersebut); bola sepak'),
(26, 'Menanyakan kepada klien tentang benda(sambil menunjukkan benda tersebut); Hula hoop'),
(27, 'Meminta klien untuk mengulangi kata: “tidak ada, dan, jika, atau, tetapi”'),
(28, 'Meminta klien untuk mengikuti perintah 3 langkah; ambil secarik kertas dengan tangan kanan anda'),
(29, 'Meminta klien untuk mengikuti perintah 3 langkah; Lipat menjadi dua'),
(30, 'Meminta klien untuk mengikuti perintah 3 langkah; Dan taruh di lantai'),
(31, 'Minta klien membaca dan mengikuti perintah ini(perlihatkan bahan-bahan tertulis):”tutup mata anda”'),
(32, 'Minta klien untuk menulis satu kalimat'),
(33, 'Menyalin gambar poligon'),
(34, 'hasil');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_rm`
--

CREATE TABLE `gejala_rm` (
  `idGejala` int(20) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala_rm`
--

INSERT INTO `gejala_rm` (`idGejala`, `gejala`) VALUES
(1, 'Memiliki IQ dibawah rata-rata (WISC)'),
(2, 'Cenderung under achiever'),
(3, 'Tidak patuh'),
(4, 'Sering terlibat perkelahian'),
(5, 'Sering melakukan perusakan'),
(6, 'Sering mengucapkan kata-kata kotor dan tidak senonoh'),
(7, 'Sering memerintah'),
(8, 'Cenderung berlaku sehendaknya'),
(9, 'Merasa rendah diri'),
(10, 'Pemalu'),
(11, 'Depresi'),
(12, 'Kesedihan yang mendalam'),
(13, 'Menarik diri dari pergaulan'),
(14, 'Pasif dalam bergaul'),
(15, 'Kaku dalam bergaul'),
(16, 'Cepat terlihat bingung'),
(17, 'Perhatian terbatas'),
(18, 'Senang melamun'),
(19, 'Senang berkhayal'),
(20, 'Senang bergaul dengan yang lebih muda'),
(21, 'Terlibat dalam aktifitas geng'),
(22, 'Pernah terbukti melakukan pencurian'),
(23, 'Suka membolos'),
(24, 'Sering begadang'),
(25, 'hasil');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_sl`
--

CREATE TABLE `gejala_sl` (
  `idGejala` int(20) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala_sl`
--

INSERT INTO `gejala_sl` (`idGejala`, `gejala`) VALUES
(1, 'Daya tangkap terhadap pelajaran lambat'),
(2, 'Sering terlambat (lama) dalam menyelesaikan tugas-tugas akademik'),
(3, 'Rata-rata prestasi belajar terlalu rendah'),
(4, 'Pernah tidak naik kelas'),
(5, 'Perkembangan kemampuan membaca terlambat'),
(6, 'Kemampuan memahami isi bacaan rendah'),
(7, 'Kalau membaca sering ditemukan banyak kesalahan'),
(8, 'Sering terlambat selesai dalam menyalin tulisan'),
(9, 'Sering salah menulis huruf b dengan p, p dengan q, v dengan u, 2 dengan 5, 6 dengan 9 dst'),
(10, 'Hasil tulisannya jelek dan hampir tidak bisa dibaca'),
(11, 'Tulisannya salah, terbalik atau huruf hilang'),
(12, 'Sulit menulis lurus pada kertas bergaris'),
(13, 'Sulit membedakan tanda baca hitung +,-,X, :,<,>,='),
(14, 'Sulit mengoperasikan hitungan/bilangan'),
(15, 'Sering salah membilang dengan urut'),
(16, 'Sering salah membedakan angka 9 dengan 6, 17 dengan 71, 2 dengan 5, 3 dengan 8 dsb'),
(17, 'Sulit membedakan bangun geometri'),
(18, 'Bicara terbatah batah'),
(19, 'Sering salah dalam menyebutkan kata kerja untuk keinginan tertentu'),
(20, 'Bahasanya sulit dimengerti oleh orang lain'),
(21, 'Lambat dalam merespons pertanyaan atau menjawab bila sedang berkomunikasi'),
(22, 'Pelo dan bicaranya kadang sangat pelan'),
(23, 'hasil');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_tunalaras`
--

CREATE TABLE `gejala_tunalaras` (
  `idGejala` int(20) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala_tunalaras`
--

INSERT INTO `gejala_tunalaras` (`idGejala`, `gejala`) VALUES
(1, 'Dapat bekerjasama dalam tugas'),
(2, 'Dapat menyelesaikan tugas'),
(3, 'Dapat memberikan bantuan'),
(4, 'Dapat mengikuti perintah'),
(5, 'Dapat bekerjasama dalam bermain'),
(6, 'Mampu melakukan percakapan efektif'),
(7, 'Mampu menunjukkan afeksi'),
(8, 'Mampu tersenyum dan tertawa'),
(9, 'Melanggar aturan'),
(10, 'Tidak mengikuti perintah'),
(11, 'Tidak mampu menyelesaikan tugas'),
(12, 'Menganggu teman'),
(13, 'Suka memerintah'),
(14, 'Suka mengejek teman/menggoda'),
(15, 'Suka mengancam'),
(16, 'Suka menolak'),
(17, 'Suka menghina'),
(18, 'Suka berteriak/memekik/bersorak'),
(19, 'Mengganggu teman secara fisik'),
(20, 'Suka bertengkar'),
(21, 'Suka mencuri barang teman'),
(22, 'Suka menyendiri'),
(23, 'Sering kehilangan kendali temperamen'),
(24, 'Sering memberi alas an terhadap orang yang lebih dewasa'),
(25, 'Sering menantang dan menjengkelkan masyarakat'),
(26, 'Sering menyalahkan orang lain atas kesalahan yang diperbuatnya'),
(27, 'Sering mudah tersinggung atau mudah menjengkelkan orang lain'),
(28, 'Sering marah dan menunjukkan kekesalan'),
(29, 'Sering berlaku dengki atau menunjukkan dendam'),
(30, 'Suka mengancam orang lain'),
(31, 'Suka memulai perkelahian'),
(32, 'Suka menggunakan senjata'),
(33, 'Suka mengganggu orang lain dan hewan secara fisik'),
(34, 'Suka mencuri dan berbohong'),
(35, 'Suka melakukan penyerangan secara seksual'),
(36, 'Suka merusak barang'),
(37, 'Keluar rumah pada saat malam hari'),
(38, 'Meninggalkan rumah tanpa izin'),
(39, 'Menolak hadir di sekolah'),
(40, 'hasil');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `idHarga` int(20) NOT NULL,
  `hargaPendaftaran` varchar(50) NOT NULL,
  `hargaPemeriksaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`idHarga`, `hargaPendaftaran`, `hargaPemeriksaan`) VALUES
(1, '100000', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_pemeriksaan`
--

CREATE TABLE `hasil_pemeriksaan` (
  `idPelanggan` int(20) NOT NULL,
  `idAhli` int(20) NOT NULL,
  `idHasil` int(20) NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `minat_bakat` text NOT NULL,
  `rekomendasi` text NOT NULL,
  `kesimpulan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_pemeriksaan`
--

INSERT INTO `hasil_pemeriksaan` (`idPelanggan`, `idAhli`, `idHasil`, `aspek`, `keterangan`, `minat_bakat`, `rekomendasi`, `kesimpulan`) VALUES
(1, 1, 1, 'Akademik', 'tess', 'awawawaw', '', ''),
(1, 1, 2, 'Kognitif', 'sdsd', '', '', ''),
(1, 1, 3, 'Afektif', ' aa111', '', '', ''),
(1, 1, 4, 'Psikomotorik', '', '', '', ''),
(1, 1, 5, 'Sosial', '', '', '', ''),
(3, 1, 1, 'akademik', ' saa', '', '', ''),
(3, 1, 2, 'Kognitif', '', '', '', ''),
(3, 1, 3, 'Afektif', '', '', '', ''),
(3, 1, 4, 'Psikomotorik', '', '', '', ''),
(3, 1, 5, 'Sosial', '', '', '', ''),
(4, 1, 1, 'akademik', '', '', '', ''),
(4, 1, 2, 'Kognitif', '', '', '', ''),
(4, 1, 3, 'Afektif', '', '', '', ''),
(4, 1, 4, 'Psikomotorik', '', '', '', ''),
(4, 1, 5, 'Sosial', '', '', '', ''),
(5, 1, 1, 'akademik', '', '', '', ''),
(5, 1, 2, 'Kognitif', '', '', '', ''),
(5, 1, 3, 'Afektif', '', '', '', ''),
(5, 1, 4, 'Psikomotorik', '', '', '', ''),
(5, 1, 5, 'Sosial', '', '', '', ''),
(5, 1, 1, 'akademik', '', '', '', ''),
(5, 1, 2, 'Kognitif', '', '', '', ''),
(5, 1, 3, 'Afektif', '', '', '', ''),
(5, 1, 4, 'Psikomotorik', '', '', '', ''),
(5, 1, 5, 'Sosial', '', '', '', ''),
(5, 1, 1, 'Akademik', '', '', '', ''),
(5, 1, 2, 'Kognitif', '', '', '', ''),
(5, 1, 3, 'Afektif', '', '', '', ''),
(5, 1, 4, 'Psikomotorik', '', '', '', ''),
(5, 1, 5, 'Sosial', '', '', '', ''),
(6, 1, 1, 'Akademik', ' lumayan', '', '', ''),
(6, 1, 2, 'Kognitif', '', '', '', ''),
(6, 1, 3, 'Afektif', '', '', '', ''),
(6, 1, 4, 'Psikomotorik', '', '', '', ''),
(6, 1, 5, 'Sosial', '', '', '', ''),
(7, 1, 1, 'Akademik', '', '', '', ''),
(7, 1, 2, 'Kognitif', '', '', '', ''),
(7, 1, 3, 'Afektif', '', '', '', ''),
(7, 1, 4, 'Psikomotorik', '', '', '', ''),
(7, 1, 5, 'Sosial', '', '', '', ''),
(9, 1, 1, 'Akademik', '', '', '', ''),
(9, 1, 2, 'Kognitif', '', '', '', ''),
(9, 1, 3, 'Afektif', '', '', '', ''),
(9, 1, 4, 'Psikomotorik', '', '', '', ''),
(9, 1, 5, 'Sosial', '', '', '', ' pasien mengalami autis yang diikuti dengan'),
(11, 1, 1, 'Akademik', '', '', '', ''),
(11, 1, 2, 'Kognitif', '', '', '', ''),
(11, 1, 3, 'Afektif', '', '', '', ''),
(11, 1, 4, 'Psikomotorik', '', '', '', ''),
(11, 1, 5, 'Sosial', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_pemeriksaan2`
--

CREATE TABLE `hasil_pemeriksaan2` (
  `idPelanggan` int(20) NOT NULL,
  `idAhli` int(20) NOT NULL,
  `idHasil` int(20) NOT NULL,
  `terapi` varchar(50) NOT NULL,
  `psikoedukasi` varchar(50) NOT NULL,
  `modifikasi` varchar(50) NOT NULL,
  `optimalisasi` varchar(50) NOT NULL,
  `vitamin` varchar(50) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `kesimpulan` text NOT NULL,
  `masalah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_pemeriksaan2`
--

INSERT INTO `hasil_pemeriksaan2` (`idPelanggan`, `idAhli`, `idHasil`, `terapi`, `psikoedukasi`, `modifikasi`, `optimalisasi`, `vitamin`, `durasi`, `kesimpulan`, `masalah`) VALUES
(1, 1, 1, 'Brain Gym', '', '', '', '', '', '', ''),
(1, 1, 2, 'EFT/SEFT', '', '', '', '', '', '', ''),
(1, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(1, 1, 4, 'Hypnotherapy', '', '', '', '', '', '', ''),
(1, 1, 5, 'Kinestetik dan Hydroterapi', '', '', '', '', '', '', ''),
(3, 1, 1, 'Brain Gym', ' uwow', '', '', '', '', '', 'aaa'),
(3, 1, 2, 'EFT/SEFT', '', '', '', '', '', '', ''),
(3, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(3, 1, 4, 'Hypnotherapy', ' asas', ' iyasds', '', '', '', '', ''),
(3, 1, 5, 'Kinestetik dan Hydroterapi', 'asas', ' tess', ' asas', '', '', '', ''),
(4, 1, 1, 'Brain Gym', '', '', '', '', '', '', ''),
(4, 1, 2, 'EFT/SFT', '', '', '', '', '', '', ''),
(4, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(4, 1, 4, 'Hypnotherapy', '', '', '', '', '', '', ''),
(4, 1, 5, 'Kinestetik dan Hydroterapy', '', '', '', '', '', '', ''),
(5, 1, 1, 'Brain Gym', '', '', '', '', '', '', ''),
(5, 1, 2, 'EFT/SFT', '', '', '', '', '', '', ''),
(5, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(5, 1, 4, 'Hypnotherapy', '', '', '', '', '', '', ''),
(5, 1, 1, 'Brain Gym', '', '', '', '', '', '', ''),
(5, 1, 2, 'EFT/SFT', '', '', '', '', '', '', ''),
(5, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(5, 1, 4, 'Hypnotherapy', '', '', '', '', '', '', ''),
(5, 1, 1, 'Brain Gym', '', '', '', '', '', '', ''),
(5, 1, 2, 'EFT/SFT', '', '', '', '', '', '', ''),
(5, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(5, 1, 4, 'Hypnotherapy', '', '', '', '', '', '', ''),
(6, 1, 1, 'Brain Gym', '', '', ' boleh lah', '', '', '', ''),
(6, 1, 2, 'EFT/SFT', '', '', '', '', '', '', ''),
(6, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(6, 1, 4, 'Hypnotherapy', '', '', '', '', '', '', ''),
(6, 1, 5, 'Kinestetik dan Hydroterapy', '', '', '', '', '', '', ''),
(7, 1, 1, 'Brain Gym', '', '', '', '', '', '', ''),
(7, 1, 2, 'EFT/SFT', '', '', '', '', '', '', ''),
(7, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(7, 1, 4, 'Hypnotherapy', '', '', '', '', '', '', ''),
(7, 1, 5, 'Kinestetik dan Hydroterapy', '', '', '', '', '', '', ''),
(9, 1, 1, 'Brain Gym', '', '', '', '', '', '', ''),
(9, 1, 2, 'EFT/SFT', '', '', '', '', '', '', ''),
(9, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(9, 1, 4, 'Hypnotherapy', '', '', '', '', '', '', ''),
(9, 1, 5, 'Kinestetik dan Hydroterapy', '', '', '', '', '', '', ''),
(11, 1, 1, 'Brain Gym', '', '', '', '', '', '', ''),
(11, 1, 2, 'EFT/SFT', '', '', '', '', '', '', ''),
(11, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(11, 1, 4, 'Hypnotherapy', '', '', '', '', '', '', ''),
(11, 1, 5, 'Kinestetik dan Hydroterapy', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_perkembangan`
--

CREATE TABLE `hasil_perkembangan` (
  `idPelanggan` int(20) NOT NULL,
  `idAhli` int(20) NOT NULL,
  `idHasil` int(20) NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `minat_bakat` text NOT NULL,
  `rekomendasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_perkembangan`
--

INSERT INTO `hasil_perkembangan` (`idPelanggan`, `idAhli`, `idHasil`, `aspek`, `keterangan`, `minat_bakat`, `rekomendasi`) VALUES
(5, 1, 1, 'Akademik', ' afggg', '', ''),
(5, 1, 2, 'Kognitif', '', '', ''),
(5, 1, 3, 'Afektif', '', '', ''),
(5, 1, 4, 'Psikomotorik', '', '', ''),
(5, 1, 5, 'Sosial', 'xxxx', '', ''),
(6, 1, 1, 'Akademik', '', '', ''),
(6, 1, 2, 'Kognitif', '', '', ''),
(6, 1, 3, 'Afektif', '', '', ''),
(6, 1, 4, 'Psikomotorik', '', '', ''),
(6, 1, 5, 'Sosial', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_perkembangan2`
--

CREATE TABLE `hasil_perkembangan2` (
  `idPelanggan` int(20) NOT NULL,
  `idAhli` int(20) NOT NULL,
  `idHasil` int(20) NOT NULL,
  `terapi` varchar(50) NOT NULL,
  `psikoedukasi` varchar(50) NOT NULL,
  `modifikasi` varchar(50) NOT NULL,
  `optimalisasi` varchar(50) NOT NULL,
  `vitamin` varchar(50) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `kesimpulan` text NOT NULL,
  `masalah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_perkembangan2`
--

INSERT INTO `hasil_perkembangan2` (`idPelanggan`, `idAhli`, `idHasil`, `terapi`, `psikoedukasi`, `modifikasi`, `optimalisasi`, `vitamin`, `durasi`, `kesimpulan`, `masalah`) VALUES
(5, 1, 1, 'Brain Gym', ' ffdddd', 'rrrr', '', '', '', '', 'berkembang biak'),
(5, 1, 2, 'EFT/SFT', '', '', '', '', '', '', ''),
(5, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(5, 1, 4, 'Hypnotherapy', '', '', '', '', '', '', ''),
(5, 1, 5, 'terapi baru', '', '', '', '', '', '', ''),
(6, 1, 1, 'Brain Gym', '', '', '', '', '', '', ''),
(6, 1, 2, 'EFT/SFT', '', '', '', '', '', '', ''),
(6, 1, 3, 'ABA', '', '', '', '', '', '', ''),
(6, 1, 4, 'Hypnotherapy', '', '', '', '', '', '', ''),
(6, 1, 5, 'Kinestetik dan Hydroterapy', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `idKaryawan` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `namaKaryawan` varchar(50) NOT NULL,
  `noHp` varchar(50) NOT NULL,
  `jenisKelamin` varchar(50) NOT NULL,
  `fotoKaryawan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`idKaryawan`, `username`, `password`, `namaKaryawan`, `noHp`, `jenisKelamin`, `fotoKaryawan`, `status`) VALUES
(1, 'karyawan1', '1234', '', '', '', '', ''),
(2, 'karyawan2', '1234', '', '', '', '', ''),
(3, 'karyawan3', '1234', '', '', '', '', ''),
(4, 'karyawan4', '1234', '', '', '', '', ''),
(5, 'karyawan5', '1234', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_adhd`
--

CREATE TABLE `karyawan_adhd` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `idKaryawan` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan_adhd`
--

INSERT INTO `karyawan_adhd` (`idPelanggan`, `idGejala`, `idKaryawan`, `nilai`) VALUES
(5, 1, 1, '0'),
(5, 2, 1, '0'),
(5, 3, 1, '1'),
(5, 4, 1, '1'),
(5, 5, 1, '0'),
(5, 6, 1, '0'),
(5, 7, 1, '0'),
(5, 8, 1, '0'),
(5, 9, 1, '0'),
(5, 10, 1, '0'),
(5, 11, 1, '0'),
(5, 12, 1, '0'),
(5, 13, 1, '0'),
(5, 14, 1, '0'),
(5, 15, 1, '0'),
(5, 16, 1, '0'),
(5, 17, 1, '0'),
(5, 18, 1, '0'),
(5, 19, 1, '2'),
(6, 1, 1, '0'),
(6, 2, 1, '0'),
(6, 3, 1, '0'),
(6, 4, 1, '0'),
(6, 5, 1, '0'),
(6, 6, 1, '0'),
(6, 7, 1, '0'),
(6, 8, 1, '0'),
(6, 9, 1, '0'),
(6, 10, 1, '0'),
(6, 11, 1, '0'),
(6, 12, 1, '0'),
(6, 13, 1, '0'),
(6, 14, 1, '0'),
(6, 15, 1, '0'),
(6, 16, 1, '0'),
(6, 17, 1, '0'),
(6, 18, 1, '0'),
(6, 19, 1, '0'),
(9, 1, 5, '0'),
(9, 2, 5, '0'),
(9, 3, 5, '0'),
(9, 4, 5, '0'),
(9, 5, 5, '0'),
(9, 6, 5, '0'),
(9, 7, 5, '0'),
(9, 8, 5, '0'),
(9, 9, 5, '0'),
(9, 10, 5, '0'),
(9, 11, 5, '0'),
(9, 12, 5, '0'),
(9, 13, 5, '0'),
(9, 14, 5, '0'),
(9, 15, 5, '0'),
(9, 16, 5, '0'),
(9, 17, 5, '0'),
(9, 18, 5, '0'),
(9, 19, 5, '0');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_autis`
--

CREATE TABLE `karyawan_autis` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `idKaryawan` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan_autis`
--

INSERT INTO `karyawan_autis` (`idPelanggan`, `idGejala`, `idKaryawan`, `nilai`) VALUES
(5, 1, 1, '1'),
(5, 2, 1, '1'),
(5, 3, 1, '0'),
(5, 4, 1, '0'),
(5, 5, 1, '0'),
(5, 6, 1, '0'),
(5, 7, 1, '0'),
(5, 8, 1, '0'),
(5, 9, 1, '0'),
(5, 10, 1, '2'),
(6, 1, 1, '0'),
(6, 2, 1, '0'),
(6, 3, 1, '0'),
(6, 4, 1, '0'),
(6, 5, 1, '0'),
(6, 6, 1, '0'),
(6, 7, 1, '0'),
(6, 8, 1, '0'),
(6, 9, 1, '0'),
(6, 10, 1, '0'),
(9, 1, 5, '0'),
(9, 2, 5, '0'),
(9, 3, 5, '0'),
(9, 4, 5, '0'),
(9, 5, 5, '0'),
(9, 6, 5, '0'),
(9, 7, 5, '0'),
(9, 8, 5, '0'),
(9, 9, 5, '0'),
(9, 10, 5, '0');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_ds`
--

CREATE TABLE `karyawan_ds` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `idKaryawan` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan_ds`
--

INSERT INTO `karyawan_ds` (`idPelanggan`, `idGejala`, `idKaryawan`, `nilai`) VALUES
(5, 1, 5, '1'),
(5, 2, 5, '1'),
(5, 3, 5, '0'),
(5, 4, 5, '1'),
(5, 5, 5, '0'),
(5, 6, 5, '0'),
(5, 7, 5, '0'),
(5, 8, 5, '0'),
(5, 9, 5, '0'),
(5, 10, 5, '0'),
(5, 11, 5, '0'),
(5, 12, 5, '0'),
(5, 13, 5, '0'),
(5, 14, 5, '0'),
(5, 15, 5, '0'),
(5, 16, 5, '0'),
(5, 17, 5, '0'),
(5, 18, 5, '0'),
(5, 19, 5, '0'),
(5, 20, 5, '0'),
(5, 21, 5, '0'),
(5, 22, 5, '0'),
(5, 23, 5, '0'),
(5, 24, 5, '0'),
(5, 25, 5, '0'),
(5, 26, 5, '0'),
(5, 27, 5, '0'),
(5, 28, 5, '0'),
(5, 29, 5, '0'),
(5, 30, 5, '0'),
(5, 31, 5, '0'),
(5, 32, 5, '0'),
(5, 33, 5, '0'),
(5, 34, 5, '3'),
(6, 1, 4, '0'),
(6, 2, 4, '0'),
(6, 3, 4, '0'),
(6, 4, 4, '0'),
(6, 5, 4, '0'),
(6, 6, 4, '0'),
(6, 7, 4, '0'),
(6, 8, 4, '0'),
(6, 9, 4, '0'),
(6, 10, 4, '0'),
(6, 11, 4, '0'),
(6, 12, 4, '0'),
(6, 13, 4, '0'),
(6, 14, 4, '0'),
(6, 15, 4, '0'),
(6, 16, 4, '0'),
(6, 17, 4, '0'),
(6, 18, 4, '0'),
(6, 19, 4, '0'),
(6, 20, 4, '0'),
(6, 21, 4, '0'),
(6, 22, 4, '0'),
(6, 23, 4, '0'),
(6, 24, 4, '0'),
(6, 25, 4, '0'),
(6, 26, 4, '0'),
(6, 27, 4, '0'),
(6, 28, 4, '0'),
(6, 29, 4, '0'),
(6, 30, 4, '0'),
(6, 31, 4, '0'),
(6, 32, 4, '0'),
(6, 33, 4, '0'),
(6, 34, 4, '0'),
(9, 1, 2, '0'),
(9, 2, 2, '0'),
(9, 3, 2, '0'),
(9, 4, 2, '0'),
(9, 5, 2, '0'),
(9, 6, 2, '0'),
(9, 7, 2, '0'),
(9, 8, 2, '0'),
(9, 9, 2, '0'),
(9, 10, 2, '0'),
(9, 11, 2, '0'),
(9, 12, 2, '0'),
(9, 13, 2, '0'),
(9, 14, 2, '0'),
(9, 15, 2, '0'),
(9, 16, 2, '0'),
(9, 17, 2, '0'),
(9, 18, 2, '0'),
(9, 19, 2, '0'),
(9, 20, 2, '0'),
(9, 21, 2, '0'),
(9, 22, 2, '0'),
(9, 23, 2, '0'),
(9, 24, 2, '0'),
(9, 25, 2, '0'),
(9, 26, 2, '0'),
(9, 27, 2, '0'),
(9, 28, 2, '0'),
(9, 29, 2, '0'),
(9, 30, 2, '0'),
(9, 31, 2, '0'),
(9, 32, 2, '0'),
(9, 33, 2, '0'),
(9, 34, 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_rm`
--

CREATE TABLE `karyawan_rm` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `idKaryawan` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan_rm`
--

INSERT INTO `karyawan_rm` (`idPelanggan`, `idGejala`, `idKaryawan`, `nilai`) VALUES
(5, 1, 2, '1'),
(5, 2, 2, '1'),
(5, 3, 2, '1'),
(5, 4, 2, '1'),
(5, 5, 2, '0'),
(5, 6, 2, '0'),
(5, 7, 2, '0'),
(5, 8, 2, '0'),
(5, 9, 2, '0'),
(5, 10, 2, '0'),
(5, 11, 2, '0'),
(5, 12, 2, '0'),
(5, 13, 2, '0'),
(5, 14, 2, '0'),
(5, 15, 2, '0'),
(5, 16, 2, '0'),
(5, 17, 2, '0'),
(5, 18, 2, '0'),
(5, 19, 2, '0'),
(5, 20, 2, '0'),
(5, 21, 2, '0'),
(5, 22, 2, '0'),
(5, 23, 2, '0'),
(5, 24, 2, '0'),
(5, 25, 2, '4'),
(6, 1, 5, '0'),
(6, 2, 5, '0'),
(6, 3, 5, '0'),
(6, 4, 5, '0'),
(6, 5, 5, '0'),
(6, 6, 5, '0'),
(6, 7, 5, '0'),
(6, 8, 5, '0'),
(6, 9, 5, '0'),
(6, 10, 5, '0'),
(6, 11, 5, '0'),
(6, 12, 5, '0'),
(6, 13, 5, '0'),
(6, 14, 5, '0'),
(6, 15, 5, '0'),
(6, 16, 5, '0'),
(6, 17, 5, '0'),
(6, 18, 5, '0'),
(6, 19, 5, '0'),
(6, 20, 5, '0'),
(6, 21, 5, '0'),
(6, 22, 5, '0'),
(6, 23, 5, '0'),
(6, 24, 5, '0'),
(6, 25, 5, '0'),
(9, 1, 4, '0'),
(9, 2, 4, '0'),
(9, 3, 4, '0'),
(9, 4, 4, '0'),
(9, 5, 4, '0'),
(9, 6, 4, '0'),
(9, 7, 4, '0'),
(9, 8, 4, '0'),
(9, 9, 4, '0'),
(9, 10, 4, '0'),
(9, 11, 4, '0'),
(9, 12, 4, '0'),
(9, 13, 4, '0'),
(9, 14, 4, '0'),
(9, 15, 4, '0'),
(9, 16, 4, '0'),
(9, 17, 4, '0'),
(9, 18, 4, '0'),
(9, 19, 4, '0'),
(9, 20, 4, '0'),
(9, 21, 4, '0'),
(9, 22, 4, '0'),
(9, 23, 4, '0'),
(9, 24, 4, '0'),
(9, 25, 4, '0');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_sl`
--

CREATE TABLE `karyawan_sl` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `idKaryawan` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan_sl`
--

INSERT INTO `karyawan_sl` (`idPelanggan`, `idGejala`, `idKaryawan`, `nilai`) VALUES
(5, 1, 3, '1'),
(5, 2, 3, '0'),
(5, 3, 3, '1'),
(5, 4, 3, '1'),
(5, 5, 3, '0'),
(5, 6, 3, '0'),
(5, 7, 3, '0'),
(5, 8, 3, '0'),
(5, 9, 3, '0'),
(5, 10, 3, '0'),
(5, 11, 3, '0'),
(5, 12, 3, '0'),
(5, 13, 3, '0'),
(5, 14, 3, '0'),
(5, 15, 3, '0'),
(5, 16, 3, '0'),
(5, 17, 3, '0'),
(5, 18, 3, '0'),
(5, 19, 3, '0'),
(5, 20, 3, '0'),
(5, 21, 3, '0'),
(5, 22, 3, '0'),
(5, 23, 3, '3'),
(6, 1, 2, '0'),
(6, 2, 2, '0'),
(6, 3, 2, '0'),
(6, 4, 2, '0'),
(6, 5, 2, '0'),
(6, 6, 2, '0'),
(6, 7, 2, '0'),
(6, 8, 2, '0'),
(6, 9, 2, '0'),
(6, 10, 2, '0'),
(6, 11, 2, '0'),
(6, 12, 2, '0'),
(6, 13, 2, '0'),
(6, 14, 2, '0'),
(6, 15, 2, '0'),
(6, 16, 2, '0'),
(6, 17, 2, '0'),
(6, 18, 2, '0'),
(6, 19, 2, '0'),
(6, 20, 2, '0'),
(6, 21, 2, '0'),
(6, 22, 2, '0'),
(6, 23, 2, '0'),
(9, 1, 3, '0'),
(9, 2, 3, '0'),
(9, 3, 3, '0'),
(9, 4, 3, '0'),
(9, 5, 3, '0'),
(9, 6, 3, '0'),
(9, 7, 3, '0'),
(9, 8, 3, '0'),
(9, 9, 3, '0'),
(9, 10, 3, '0'),
(9, 11, 3, '0'),
(9, 12, 3, '0'),
(9, 13, 3, '0'),
(9, 14, 3, '0'),
(9, 15, 3, '0'),
(9, 16, 3, '0'),
(9, 17, 3, '0'),
(9, 18, 3, '0'),
(9, 19, 3, '0'),
(9, 20, 3, '0'),
(9, 21, 3, '0'),
(9, 22, 3, '0'),
(9, 23, 3, '0');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_tunalaras`
--

CREATE TABLE `karyawan_tunalaras` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `idKaryawan` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan_tunalaras`
--

INSERT INTO `karyawan_tunalaras` (`idPelanggan`, `idGejala`, `idKaryawan`, `nilai`) VALUES
(5, 1, 4, '1'),
(5, 2, 4, '1'),
(5, 3, 4, '1'),
(5, 4, 4, '0'),
(5, 5, 4, '0'),
(5, 6, 4, '0'),
(5, 7, 4, '0'),
(5, 8, 4, '0'),
(5, 9, 4, '0'),
(5, 10, 4, '0'),
(5, 11, 4, '0'),
(5, 12, 4, '0'),
(5, 13, 4, '0'),
(5, 14, 4, '0'),
(5, 15, 4, '0'),
(5, 16, 4, '0'),
(5, 17, 4, '0'),
(5, 18, 4, '0'),
(5, 19, 4, '0'),
(5, 20, 4, '0'),
(5, 21, 4, '0'),
(5, 22, 4, '0'),
(5, 23, 4, '0'),
(5, 24, 4, '0'),
(5, 25, 4, '0'),
(5, 26, 4, '0'),
(5, 27, 4, '0'),
(5, 28, 4, '0'),
(5, 29, 4, '0'),
(5, 30, 4, '0'),
(5, 31, 4, '0'),
(5, 32, 4, '0'),
(5, 33, 4, '0'),
(5, 34, 4, '0'),
(5, 35, 4, '0'),
(5, 36, 4, '0'),
(5, 37, 4, '0'),
(5, 38, 4, '0'),
(5, 39, 4, '0'),
(5, 40, 4, '3'),
(6, 1, 3, '0'),
(6, 2, 3, '0'),
(6, 3, 3, '0'),
(6, 4, 3, '0'),
(6, 5, 3, '0'),
(6, 6, 3, '0'),
(6, 7, 3, '0'),
(6, 8, 3, '0'),
(6, 9, 3, '0'),
(6, 10, 3, '0'),
(6, 11, 3, '0'),
(6, 12, 3, '0'),
(6, 13, 3, '0'),
(6, 14, 3, '0'),
(6, 15, 3, '0'),
(6, 16, 3, '0'),
(6, 17, 3, '0'),
(6, 18, 3, '0'),
(6, 19, 3, '0'),
(6, 20, 3, '0'),
(6, 21, 3, '0'),
(6, 22, 3, '0'),
(6, 23, 3, '0'),
(6, 24, 3, '0'),
(6, 25, 3, '0'),
(6, 26, 3, '0'),
(6, 27, 3, '0'),
(6, 28, 3, '0'),
(6, 29, 3, '0'),
(6, 30, 3, '0'),
(6, 31, 3, '0'),
(6, 32, 3, '0'),
(6, 33, 3, '0'),
(6, 34, 3, '0'),
(6, 35, 3, '0'),
(6, 36, 3, '0'),
(6, 37, 3, '0'),
(6, 38, 3, '0'),
(6, 39, 3, '0'),
(6, 40, 3, '0'),
(9, 1, 1, '0'),
(9, 2, 1, '0'),
(9, 3, 1, '0'),
(9, 4, 1, '0'),
(9, 5, 1, '0'),
(9, 6, 1, '0'),
(9, 7, 1, '0'),
(9, 8, 1, '0'),
(9, 9, 1, '0'),
(9, 10, 1, '0'),
(9, 11, 1, '0'),
(9, 12, 1, '0'),
(9, 13, 1, '0'),
(9, 14, 1, '0'),
(9, 15, 1, '0'),
(9, 16, 1, '0'),
(9, 17, 1, '0'),
(9, 18, 1, '0'),
(9, 19, 1, '0'),
(9, 20, 1, '0'),
(9, 21, 1, '0'),
(9, 22, 1, '0'),
(9, 23, 1, '0'),
(9, 24, 1, '0'),
(9, 25, 1, '0'),
(9, 26, 1, '0'),
(9, 27, 1, '0'),
(9, 28, 1, '0'),
(9, 29, 1, '0'),
(9, 30, 1, '0'),
(9, 31, 1, '0'),
(9, 32, 1, '0'),
(9, 33, 1, '0'),
(9, 34, 1, '0'),
(9, 35, 1, '0'),
(9, 36, 1, '0'),
(9, 37, 1, '0'),
(9, 38, 1, '0'),
(9, 39, 1, '0'),
(9, 40, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_afeksi`
--

CREATE TABLE `nilai_afeksi` (
  `idPelanggan` int(20) NOT NULL,
  `idKaryawan` int(20) NOT NULL,
  `idData` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tahap` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_afeksi`
--

INSERT INTO `nilai_afeksi` (`idPelanggan`, `idKaryawan`, `idData`, `nilai`, `waktu`, `keterangan`, `tahap`, `status`) VALUES
(1, 2, 1, '20', ' qww', '', '', ''),
(1, 2, 2, '30', 'qwqw33', '333', '', ''),
(1, 2, 3, '30', '', '', '', ''),
(1, 2, 4, '30', '', '', '', ''),
(1, 2, 5, '30', '', '', '', ''),
(1, 2, 6, '30', '', '', '', ''),
(1, 2, 7, '30', '', '', '', ''),
(1, 2, 8, '30', '', '', '', ''),
(1, 2, 9, '30', '', '', '', ''),
(1, 2, 10, '30', '', '', '', ''),
(1, 2, 11, '30', '', '', '', ''),
(1, 2, 12, '30', '', '', '', ''),
(1, 2, 13, '30', '', '', '', ''),
(1, 2, 14, '20', '', '', '', ''),
(1, 2, 15, 'B', '', '', '', ''),
(2, 2, 1, '10', '', '', '', 'periksa'),
(2, 2, 2, '10', '', '', '', 'periksa'),
(2, 2, 3, '10', '', '', '', 'periksa'),
(2, 2, 4, '10', '', '', '', 'periksa'),
(2, 2, 5, '10', '', '', '', 'periksa'),
(2, 2, 6, '10', '', '', '', 'periksa'),
(2, 2, 7, '10', '', '', '', 'periksa'),
(2, 2, 8, '10', '', '', '', 'periksa'),
(2, 2, 9, '10', '', '', '', 'periksa'),
(2, 2, 10, '10', '', '', '', 'periksa'),
(2, 2, 11, '10', '', '', '', 'periksa'),
(2, 2, 12, '10', '', '', '', 'periksa'),
(2, 2, 13, '10', '', '', '', 'periksa'),
(2, 2, 14, '10', '', '', '', 'periksa'),
(2, 2, 15, '10', '', '', '', 'periksa'),
(3, 1, 1, '10', '', '', '', 'periksa'),
(3, 1, 2, '10', '', '', '', 'periksa'),
(3, 1, 3, '10', '', '', '', 'periksa'),
(3, 1, 4, '30', '', '', '', 'periksa'),
(3, 1, 5, '10', '', '', '', 'periksa'),
(3, 1, 6, '10', '', '', '', 'periksa'),
(3, 1, 7, '10', '', '', '', 'periksa'),
(3, 1, 8, '30', '', '', '', 'periksa'),
(3, 1, 9, '30', '', '', '', 'periksa'),
(3, 1, 10, '30', '', '', '', 'periksa'),
(3, 1, 11, '30', '', '', '', 'periksa'),
(3, 1, 12, '30', '', '', '', 'periksa'),
(3, 1, 13, '30', '', '', '', 'periksa'),
(3, 1, 14, '30', ' 1wqw', '', '', 'periksa'),
(3, 1, 15, 'B', '', '', '', 'periksa'),
(4, 3, 1, '10', '', '', '1', ''),
(4, 3, 2, '10', '', '', '1', ''),
(4, 3, 3, '10', '', '', '1', ''),
(4, 3, 4, '10', '', '', '1', ''),
(4, 3, 5, '10', '', '', '1', ''),
(4, 3, 6, '10', '', '', '1', ''),
(4, 3, 7, '10', '', '', '1', ''),
(4, 3, 8, '10', '', '', '1', ''),
(4, 3, 9, '10', '', '', '1', ''),
(4, 3, 10, '10', '', '', '1', ''),
(4, 3, 11, '10', '', '', '1', ''),
(4, 3, 12, '10', '', '', '1', ''),
(4, 3, 13, '10', '', '', '1', ''),
(4, 3, 14, '10', '', '', '1', ''),
(4, 3, 15, '10', '', '', '1', ''),
(5, 4, 1, '30', '', '', '1', ''),
(5, 4, 2, '30', '', '', '1', ''),
(5, 4, 3, '30', '', '', '1', ''),
(5, 4, 4, '30', '', '', '1', ''),
(5, 4, 5, '20', '', '', '1', ''),
(5, 4, 6, '10', '', '', '1', ''),
(5, 4, 7, '10', '', '', '1', ''),
(5, 4, 8, '10', '', '', '1', ''),
(5, 4, 9, '10', '', '', '1', ''),
(5, 4, 10, '10', '', '', '1', ''),
(5, 4, 11, '10', '', '', '1', ''),
(5, 4, 12, '10', '', '', '1', ''),
(5, 4, 13, '10', '', '', '1', ''),
(5, 4, 14, '10', '', '', '1', ''),
(5, 4, 15, 'C', '', '', '1', ''),
(5, 4, 1, '10', ' gegeboy', ' iyasds', '2', ''),
(5, 4, 2, '10', '', '', '2', ''),
(5, 4, 3, '10', '', '', '2', ''),
(5, 4, 4, '10', '', '', '2', ''),
(5, 4, 5, '10', '', '', '2', ''),
(5, 4, 6, '10', '', '', '2', ''),
(5, 4, 7, '10', '', '', '2', ''),
(5, 4, 8, '10', '', '', '2', ''),
(5, 4, 9, '10', '', '', '2', ''),
(5, 4, 10, '10', '', '', '2', ''),
(5, 4, 11, '10', '', '', '2', ''),
(5, 4, 12, '10', '', '', '2', ''),
(5, 4, 13, '10', '', '', '2', ''),
(5, 4, 14, '10', '', '', '2', ''),
(5, 4, 15, 'K', '', '', '2', ''),
(6, 3, 1, '10', '', '', '1', ''),
(6, 3, 2, '30', '', '', '1', ''),
(6, 3, 3, '30', '', '', '1', ''),
(6, 3, 4, '30', '', '', '1', ''),
(6, 3, 5, '10', '', '', '1', ''),
(6, 3, 6, '10', '', '', '1', ''),
(6, 3, 7, '10', '', '', '1', ''),
(6, 3, 8, '10', '', '', '1', ''),
(6, 3, 9, '10', '', '', '1', ''),
(6, 3, 10, '10', '', '', '1', ''),
(6, 3, 11, '10', '', '', '1', ''),
(6, 3, 12, '10', '', '', '1', ''),
(6, 3, 13, '10', '', '', '1', ''),
(6, 3, 14, '10', '', '', '1', ''),
(6, 3, 15, 'C', '', '', '1', ''),
(6, 3, 1, '30', '', '', '2', ''),
(6, 3, 2, '10', '', '', '2', ''),
(6, 3, 3, '20', '', '', '2', ''),
(6, 3, 4, '10', '', '', '2', ''),
(6, 3, 5, '10', '', '', '2', ''),
(6, 3, 6, '10', '', '', '2', ''),
(6, 3, 7, '10', '', '', '2', ''),
(6, 3, 8, '10', '', '', '2', ''),
(6, 3, 9, '10', '', '', '2', ''),
(6, 3, 10, '10', '', '', '2', ''),
(6, 3, 11, '10', '', '', '2', ''),
(6, 3, 12, '10', '', '', '2', ''),
(6, 3, 13, '10', '', '', '2', ''),
(6, 3, 14, '10', '', '', '2', ''),
(6, 3, 15, 'C', '', '', '2', ''),
(7, 4, 1, '30', '', '', '1', ''),
(7, 4, 2, '10', '', '', '1', ''),
(7, 4, 3, '10', '', '', '1', ''),
(7, 4, 4, '10', '', '', '1', ''),
(7, 4, 5, '10', '', '', '1', ''),
(7, 4, 6, '10', '', '', '1', ''),
(7, 4, 7, '10', '', '', '1', ''),
(7, 4, 8, '10', '', '', '1', ''),
(7, 4, 9, '10', '', '', '1', ''),
(7, 4, 10, '10', '', '', '1', ''),
(7, 4, 11, '10', '', '', '1', ''),
(7, 4, 12, '10', '', '', '1', ''),
(7, 4, 13, '10', '', '', '1', ''),
(7, 4, 14, '10', '', '', '1', ''),
(7, 4, 15, 'C', '', '', '1', ''),
(9, 1, 1, '30', '', '', '1', ''),
(9, 1, 2, '20', '', '', '1', ''),
(9, 1, 3, '30', '', '', '1', ''),
(9, 1, 4, '30', '', '', '1', ''),
(9, 1, 5, '20', '', '', '1', ''),
(9, 1, 6, '30', '', '', '1', ''),
(9, 1, 7, '0', '', '', '1', ''),
(9, 1, 8, '0', '', '', '1', ''),
(9, 1, 9, '0', '', '', '1', ''),
(9, 1, 10, '0', '', '', '1', ''),
(9, 1, 11, '0', '', '', '1', ''),
(9, 1, 12, '0', '', '', '1', ''),
(9, 1, 13, '0', '', '', '1', ''),
(9, 1, 14, '0', '', '', '1', ''),
(9, 1, 15, 'C', '', '', '1', ''),
(9, 1, 1, '20', '', '', '2', ''),
(9, 1, 2, '20', '', '', '2', ''),
(9, 1, 3, '30', '', '', '2', ''),
(9, 1, 4, '30', '', '', '2', ''),
(9, 1, 5, '20', '', '', '2', ''),
(9, 1, 6, '0', '', '', '2', ''),
(9, 1, 7, '0', '', '', '2', ''),
(9, 1, 8, '0', '', '', '2', ''),
(9, 1, 9, '0', '', '', '2', ''),
(9, 1, 10, '0', '', '', '2', ''),
(9, 1, 11, '0', '', '', '2', ''),
(9, 1, 12, '0', '', '', '2', ''),
(9, 1, 13, '0', '', '', '2', ''),
(9, 1, 14, '0', '', '', '2', ''),
(9, 1, 15, 'K', '', '', '2', ''),
(11, 4, 1, '0', '', '', '1', ''),
(11, 4, 2, '0', '', '', '1', ''),
(11, 4, 3, '0', '', '', '1', ''),
(11, 4, 4, '0', '', '', '1', ''),
(11, 4, 5, '0', '', '', '1', ''),
(11, 4, 6, '0', '', '', '1', ''),
(11, 4, 7, '0', '', '', '1', ''),
(11, 4, 8, '0', '', '', '1', ''),
(11, 4, 9, '0', '', '', '1', ''),
(11, 4, 10, '0', '', '', '1', ''),
(11, 4, 11, '0', '', '', '1', ''),
(11, 4, 12, '0', '', '', '1', ''),
(11, 4, 13, '0', '', '', '1', ''),
(11, 4, 14, '0', '', '', '1', ''),
(11, 4, 15, '0', '', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_akademik`
--

CREATE TABLE `nilai_akademik` (
  `idPelanggan` int(20) NOT NULL,
  `idKaryawan` int(20) NOT NULL,
  `idData` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tahap` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_akademik`
--

INSERT INTO `nilai_akademik` (`idPelanggan`, `idKaryawan`, `idData`, `nilai`, `waktu`, `keterangan`, `tahap`, `status`) VALUES
(1, 3, 1, '30', ' 444', ' 233', '', ''),
(1, 3, 2, '30', '', '', '', ''),
(1, 3, 3, '30', '', '', '', ''),
(1, 3, 4, '30', '', '', '', ''),
(1, 3, 5, '', '', '', '', ''),
(1, 3, 6, '', '', '', '', ''),
(1, 3, 7, '', '', '', '', ''),
(1, 3, 8, '', '', '', '', ''),
(1, 3, 9, '', '', '', '', ''),
(1, 3, 10, '', '', '', '', ''),
(1, 3, 11, '', '', '', '', ''),
(1, 3, 12, '', '', '', '', ''),
(1, 3, 13, '', '', '', '', ''),
(1, 3, 14, '', '', '', '', ''),
(1, 3, 15, '', '', '', '', ''),
(1, 3, 16, '', '', '', '', ''),
(1, 3, 17, '', '', '', '', ''),
(1, 3, 18, '', '', '', '', ''),
(1, 3, 19, '', '', '', '', ''),
(1, 3, 20, '', '', '', '', ''),
(1, 3, 21, '20', '', '', '', ''),
(1, 3, 22, 'K', '', '', '', ''),
(2, 5, 1, '10', '', '', '', ''),
(2, 5, 2, '10', '', '', '', ''),
(2, 5, 3, '10', '', '', '', ''),
(2, 5, 4, '10', '', '', '', ''),
(2, 5, 5, '10', '', '', '', ''),
(2, 5, 6, '10', '', '', '', ''),
(2, 5, 7, '10', '', '', '', ''),
(2, 5, 8, '10', '', '', '', ''),
(2, 5, 9, '10', '', '', '', ''),
(2, 5, 10, '10', '', '', '', ''),
(2, 5, 11, '10', '', '', '', ''),
(2, 5, 12, '10', '', '', '', ''),
(2, 5, 13, '10', '', '', '', ''),
(2, 5, 14, '10', '', '', '', ''),
(2, 5, 15, '10', '', '', '', ''),
(2, 5, 16, '10', '', '', '', ''),
(2, 5, 17, '10', '', '', '', ''),
(2, 5, 18, '10', '', '', '', ''),
(2, 5, 19, '10', '', '', '', ''),
(2, 5, 20, '10', '', '', '', ''),
(2, 5, 21, '10', '', '', '', ''),
(2, 5, 22, '10', '', '', '', ''),
(3, 5, 1, '10', '', '', '', 'periksa'),
(3, 5, 2, '10', '', '', '', 'periksa'),
(3, 5, 3, '10', '', '', '', 'periksa'),
(3, 5, 4, '10', '', '', '', 'periksa'),
(3, 5, 5, '10', '', '', '', 'periksa'),
(3, 5, 6, '10', '', '', '', 'periksa'),
(3, 5, 7, '10', '', '', '', 'periksa'),
(3, 5, 8, '10', '', '', '', 'periksa'),
(3, 5, 9, '10', '', '', '', 'periksa'),
(3, 5, 10, '10', '', '', '', 'periksa'),
(3, 5, 11, '10', '', '', '', 'periksa'),
(3, 5, 12, '10', '', '', '', 'periksa'),
(3, 5, 13, '10', '', '', '', 'periksa'),
(3, 5, 14, '10', '', '', '', 'periksa'),
(3, 5, 15, '10', '', '', '', 'periksa'),
(3, 5, 16, '10', '', '', '', 'periksa'),
(3, 5, 17, '10', '', '', '', 'periksa'),
(3, 5, 18, '10', '', '', '', 'periksa'),
(3, 5, 19, '10', '', '', '', 'periksa'),
(3, 5, 20, '30', '', '', '', 'periksa'),
(3, 5, 21, '30', '', '', '', 'periksa'),
(3, 5, 22, 'C', '', '', '', 'periksa'),
(4, 2, 1, '10', '', '', '1', ''),
(4, 2, 2, '10', '', '', '1', ''),
(4, 2, 3, '10', '', '', '1', ''),
(4, 2, 4, '10', '', '', '1', ''),
(4, 2, 5, '10', '', '', '1', ''),
(4, 2, 6, '10', '', '', '1', ''),
(4, 2, 7, '10', '', '', '1', ''),
(4, 2, 8, '10', '', '', '1', ''),
(4, 2, 9, '10', '', '', '1', ''),
(4, 2, 10, '10', '', '', '1', ''),
(4, 2, 11, '10', '', '', '1', ''),
(4, 2, 12, '10', '', '', '1', ''),
(4, 2, 13, '10', '', '', '1', ''),
(4, 2, 14, '10', '', '', '1', ''),
(4, 2, 15, '10', '', '', '1', ''),
(4, 2, 16, '10', '', '', '1', ''),
(4, 2, 17, '10', '', '', '1', ''),
(4, 2, 18, '10', '', '', '1', ''),
(4, 2, 19, '10', '', '', '1', ''),
(4, 2, 20, '10', '', '', '1', ''),
(4, 2, 21, '10', '', '', '1', ''),
(4, 2, 22, '10', '', '', '1', ''),
(5, 3, 1, '10', '', '', '1', ''),
(5, 3, 2, '10', '', '', '1', ''),
(5, 3, 3, '10', '', '', '1', ''),
(5, 3, 4, '10', '', '', '1', ''),
(5, 3, 5, '10', '', '', '1', ''),
(5, 3, 6, '10', '', '', '1', ''),
(5, 3, 7, '10', '', '', '1', ''),
(5, 3, 8, '10', '', '', '1', ''),
(5, 3, 9, '10', '', '', '1', ''),
(5, 3, 10, '10', '', '', '1', ''),
(5, 3, 11, '10', '', '', '1', ''),
(5, 3, 12, '10', '', '', '1', ''),
(5, 3, 13, '10', '', '', '1', ''),
(5, 3, 14, '10', '', '', '1', ''),
(5, 3, 15, '10', '', '', '1', ''),
(5, 3, 16, '10', '', '', '1', ''),
(5, 3, 17, '10', '', '', '1', ''),
(5, 3, 18, '10', '', '', '1', ''),
(5, 3, 19, '10', '', '', '1', ''),
(5, 3, 20, '10', '', '', '1', ''),
(5, 3, 21, '10', '', '', '1', ''),
(5, 3, 22, '10', '', '', '1', ''),
(5, 3, 1, '30', '', '', '2', ''),
(5, 3, 2, '30', '', '', '2', ''),
(5, 3, 3, '30', '', '', '2', ''),
(5, 3, 4, '10', '', '', '2', ''),
(5, 3, 5, '10', '', '', '2', ''),
(5, 3, 6, '10', '', '', '2', ''),
(5, 3, 7, '10', '', '', '2', ''),
(5, 3, 8, '10', '', '', '2', ''),
(5, 3, 9, '10', '', '', '2', ''),
(5, 3, 10, '10', '', '', '2', ''),
(5, 3, 11, '10', '', '', '2', ''),
(5, 3, 12, '10', '', '', '2', ''),
(5, 3, 13, '10', '', '', '2', ''),
(5, 3, 14, '10', '', '', '2', ''),
(5, 3, 15, '10', '', '', '2', ''),
(5, 3, 16, '10', '', '', '2', ''),
(5, 3, 17, '10', '', '', '2', ''),
(5, 3, 18, '10', '', '', '2', ''),
(5, 3, 19, '10', '', '', '2', ''),
(5, 3, 20, '10', '', '', '2', ''),
(5, 3, 21, '10', '', '', '2', ''),
(5, 3, 22, 'K', '', '', '2', ''),
(6, 2, 1, '10', '', '', '1', ''),
(6, 2, 2, '20', '', '', '1', ''),
(6, 2, 3, '10', '', '', '1', ''),
(6, 2, 4, '10', '', '', '1', ''),
(6, 2, 5, '10', '', '', '1', ''),
(6, 2, 6, '10', '', '', '1', ''),
(6, 2, 7, '10', '', '', '1', ''),
(6, 2, 8, '10', '', '', '1', ''),
(6, 2, 9, '10', '', '', '1', ''),
(6, 2, 10, '10', '', '', '1', ''),
(6, 2, 11, '10', '', '', '1', ''),
(6, 2, 12, '10', '', '', '1', ''),
(6, 2, 13, '10', '', '', '1', ''),
(6, 2, 14, '10', '', '', '1', ''),
(6, 2, 15, '10', '', '', '1', ''),
(6, 2, 16, '10', '', '', '1', ''),
(6, 2, 17, '10', '', '', '1', ''),
(6, 2, 18, '10', '', '', '1', ''),
(6, 2, 19, '10', '', '', '1', ''),
(6, 2, 20, '10', '', '', '1', ''),
(6, 2, 21, '10', '', '', '1', ''),
(6, 2, 22, 'C', '', '', '1', ''),
(6, 2, 1, '10', '', '', '2', ''),
(6, 2, 2, '10', '', '', '2', ''),
(6, 2, 3, '30', '', '', '2', ''),
(6, 2, 4, '10', '', '', '2', ''),
(6, 2, 5, '10', '', '', '2', ''),
(6, 2, 6, '10', '', '', '2', ''),
(6, 2, 7, '10', '', '', '2', ''),
(6, 2, 8, '10', '', '', '2', ''),
(6, 2, 9, '10', '', '', '2', ''),
(6, 2, 10, '10', '', '', '2', ''),
(6, 2, 11, '10', '', '', '2', ''),
(6, 2, 12, '10', '', '', '2', ''),
(6, 2, 13, '10', '', '', '2', ''),
(6, 2, 14, '10', '', '', '2', ''),
(6, 2, 15, '10', '', '', '2', ''),
(6, 2, 16, '10', '', '', '2', ''),
(6, 2, 17, '10', '', '', '2', ''),
(6, 2, 18, '10', '', '', '2', ''),
(6, 2, 19, '10', '', '', '2', ''),
(6, 2, 20, '10', '', '', '2', ''),
(6, 2, 21, '10', '', '', '2', ''),
(6, 2, 22, 'C', '', '', '2', ''),
(7, 5, 1, '30', '', '', '1', ''),
(7, 5, 2, '10', '', '', '1', ''),
(7, 5, 3, '10', '', '', '1', ''),
(7, 5, 4, '10', '', '', '1', ''),
(7, 5, 5, '10', '', '', '1', ''),
(7, 5, 6, '10', '', '', '1', ''),
(7, 5, 7, '10', '', '', '1', ''),
(7, 5, 8, '10', '', '', '1', ''),
(7, 5, 9, '10', '', '', '1', ''),
(7, 5, 10, '10', '', '', '1', ''),
(7, 5, 11, '10', '', '', '1', ''),
(7, 5, 12, '10', '', '', '1', ''),
(7, 5, 13, '10', '', '', '1', ''),
(7, 5, 14, '10', '', '', '1', ''),
(7, 5, 15, '10', '', '', '1', ''),
(7, 5, 16, '10', '', '', '1', ''),
(7, 5, 17, '10', '', '', '1', ''),
(7, 5, 18, '10', '', '', '1', ''),
(7, 5, 19, '10', '', '', '1', ''),
(7, 5, 20, '10', '', '', '1', ''),
(7, 5, 21, '10', '', '', '1', ''),
(7, 5, 22, 'C', '', '', '1', ''),
(9, 3, 1, '0', '', '', '1', ''),
(9, 3, 2, '0', '', '', '1', ''),
(9, 3, 3, '0', '', '', '1', ''),
(9, 3, 4, '0', '', '', '1', ''),
(9, 3, 5, '0', '', '', '1', ''),
(9, 3, 6, '0', '', '', '1', ''),
(9, 3, 7, '0', '', '', '1', ''),
(9, 3, 8, '0', '', '', '1', ''),
(9, 3, 9, '0', '', '', '1', ''),
(9, 3, 10, '0', '', '', '1', ''),
(9, 3, 11, '0', '', '', '1', ''),
(9, 3, 12, '0', '', '', '1', ''),
(9, 3, 13, '0', '', '', '1', ''),
(9, 3, 14, '0', '', '', '1', ''),
(9, 3, 15, '0', '', '', '1', ''),
(9, 3, 16, '0', '', '', '1', ''),
(9, 3, 17, '0', '', '', '1', ''),
(9, 3, 18, '0', '', '', '1', ''),
(9, 3, 19, '0', '', '', '1', ''),
(9, 3, 20, '0', '', '', '1', ''),
(9, 3, 21, '0', '', '', '1', ''),
(9, 3, 22, '0', '', '', '1', ''),
(9, 3, 1, '0', '', '', '2', ''),
(9, 3, 2, '0', '', '', '2', ''),
(9, 3, 3, '0', '', '', '2', ''),
(9, 3, 4, '0', '', '', '2', ''),
(9, 3, 5, '0', '', '', '2', ''),
(9, 3, 6, '0', '', '', '2', ''),
(9, 3, 7, '0', '', '', '2', ''),
(9, 3, 8, '0', '', '', '2', ''),
(9, 3, 9, '0', '', '', '2', ''),
(9, 3, 10, '0', '', '', '2', ''),
(9, 3, 11, '0', '', '', '2', ''),
(9, 3, 12, '0', '', '', '2', ''),
(9, 3, 13, '0', '', '', '2', ''),
(9, 3, 14, '0', '', '', '2', ''),
(9, 3, 15, '0', '', '', '2', ''),
(9, 3, 16, '0', '', '', '2', ''),
(9, 3, 17, '0', '', '', '2', ''),
(9, 3, 18, '0', '', '', '2', ''),
(9, 3, 19, '0', '', '', '2', ''),
(9, 3, 20, '0', '', '', '2', ''),
(9, 3, 21, '0', '', '', '2', ''),
(9, 3, 22, '0', '', '', '2', ''),
(11, 5, 1, '0', '', '', '1', ''),
(11, 5, 2, '0', '', '', '1', ''),
(11, 5, 3, '0', '', '', '1', ''),
(11, 5, 4, '0', '', '', '1', ''),
(11, 5, 5, '0', '', '', '1', ''),
(11, 5, 6, '0', '', '', '1', ''),
(11, 5, 7, '0', '', '', '1', ''),
(11, 5, 8, '0', '', '', '1', ''),
(11, 5, 9, '0', '', '', '1', ''),
(11, 5, 10, '0', '', '', '1', ''),
(11, 5, 11, '0', '', '', '1', ''),
(11, 5, 12, '0', '', '', '1', ''),
(11, 5, 13, '0', '', '', '1', ''),
(11, 5, 14, '0', '', '', '1', ''),
(11, 5, 15, '0', '', '', '1', ''),
(11, 5, 16, '0', '', '', '1', ''),
(11, 5, 17, '0', '', '', '1', ''),
(11, 5, 18, '0', '', '', '1', ''),
(11, 5, 19, '0', '', '', '1', ''),
(11, 5, 20, '0', '', '', '1', ''),
(11, 5, 21, '0', '', '', '1', ''),
(11, 5, 22, '0', '', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kognisi`
--

CREATE TABLE `nilai_kognisi` (
  `idPelanggan` int(20) NOT NULL,
  `idKaryawan` int(20) NOT NULL,
  `idData` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tahap` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_kognisi`
--

INSERT INTO `nilai_kognisi` (`idPelanggan`, `idKaryawan`, `idData`, `nilai`, `waktu`, `keterangan`, `tahap`, `status`) VALUES
(1, 4, 1, '20', '', '', '', ''),
(1, 4, 2, '20', '', '', '', ''),
(1, 4, 3, '20', '', '', '', ''),
(1, 4, 4, '30', '', '', '', ''),
(1, 4, 5, '', '', '', '', ''),
(1, 4, 6, '', ' dd', ' 22', '', ''),
(1, 4, 7, '', '', '', '', ''),
(1, 4, 8, '', '', '', '', ''),
(1, 4, 9, '', '', '', '', ''),
(1, 4, 10, '30', '', '', '', ''),
(1, 4, 11, '30', '', '', '', ''),
(1, 4, 12, '20', '', '', '', ''),
(1, 4, 13, '', '', '', '', ''),
(1, 4, 14, '', '', '', '', ''),
(1, 4, 15, 'C', '', '', '', ''),
(2, 3, 1, '30', ' zzzz', ' zxzx', '', 'sudah diperiksa'),
(2, 3, 2, '20', '', '', '', 'sudah diperiksa'),
(2, 3, 3, '30', '', '', '', 'sudah diperiksa'),
(2, 3, 4, '30', '', '', '', 'sudah diperiksa'),
(2, 3, 5, '30', '', '', '', 'sudah diperiksa'),
(2, 3, 6, '30', '', '', '', 'sudah diperiksa'),
(2, 3, 7, '30', '', '', '', 'sudah diperiksa'),
(2, 3, 8, '10', '', '', '', 'sudah diperiksa'),
(2, 3, 9, '30', '', '', '', 'sudah diperiksa'),
(2, 3, 10, '30', '', '', '', 'sudah diperiksa'),
(2, 3, 11, '30', '', '', '', 'sudah diperiksa'),
(2, 3, 12, '30', '', '', '', 'sudah diperiksa'),
(2, 3, 13, '30', '', '', '', 'sudah diperiksa'),
(2, 3, 14, '30', '', '', '', 'sudah diperiksa'),
(2, 3, 15, 'B', '', '', '', 'sudah diperiksa'),
(3, 3, 1, '30', '', '', '', 'periksa'),
(3, 3, 2, '30', '', '', '', 'periksa'),
(3, 3, 3, '30', ' wewe', '', '', 'periksa'),
(3, 3, 4, '30', '', '', '', 'periksa'),
(3, 3, 5, '10', '', '', '', 'periksa'),
(3, 3, 6, '10', '', '', '', 'periksa'),
(3, 3, 7, '10', '', '', '', 'periksa'),
(3, 3, 8, '30', '', '', '', 'periksa'),
(3, 3, 9, '30', '', '', '', 'periksa'),
(3, 3, 10, '30', '', '', '', 'periksa'),
(3, 3, 11, '30', '', '', '', 'periksa'),
(3, 3, 12, '30', '', '', '', 'periksa'),
(3, 3, 13, '30', ' gegeboy', '', '', 'periksa'),
(3, 3, 14, '20', '', '', '', 'periksa'),
(3, 3, 15, 'B', '', '', '', 'periksa'),
(4, 4, 1, '10', '', '', '1', ''),
(4, 4, 2, '10', '', '', '1', ''),
(4, 4, 3, '10', '', '', '1', ''),
(4, 4, 4, '10', '', '', '1', ''),
(4, 4, 5, '10', '', '', '1', ''),
(4, 4, 6, '10', '', '', '1', ''),
(4, 4, 7, '10', '', '', '1', ''),
(4, 4, 8, '10', '', '', '1', ''),
(4, 4, 9, '10', '', '', '1', ''),
(4, 4, 10, '10', '', '', '1', ''),
(4, 4, 11, '10', '', '', '1', ''),
(4, 4, 12, '10', '', '', '1', ''),
(4, 4, 13, '10', '', '', '1', ''),
(4, 4, 14, '10', '', '', '1', ''),
(4, 4, 15, '10', '', '', '1', ''),
(5, 5, 1, '30', '', '', '1', ''),
(5, 5, 2, '30', '', '', '1', ''),
(5, 5, 3, '20', '', '', '1', ''),
(5, 5, 4, '10', '', '', '1', ''),
(5, 5, 5, '10', '', '', '1', ''),
(5, 5, 6, '10', '', '', '1', ''),
(5, 5, 7, '10', '', '', '1', ''),
(5, 5, 8, '10', '', '', '1', ''),
(5, 5, 9, '10', '', '', '1', ''),
(5, 5, 10, '10', '', '', '1', ''),
(5, 5, 11, '10', '', '', '1', ''),
(5, 5, 12, '10', '', '', '1', ''),
(5, 5, 13, '10', '', '', '1', ''),
(5, 5, 14, '10', '', '', '1', ''),
(5, 5, 15, '10', '', '', '1', ''),
(5, 5, 1, '20', '', '', '2', ''),
(5, 5, 2, '20', '', '', '2', ''),
(5, 5, 3, '10', '', '', '2', ''),
(5, 5, 4, '20', '', '', '2', ''),
(5, 5, 5, '20', '', '', '2', ''),
(5, 5, 6, '10', '', '', '2', ''),
(5, 5, 7, '10', '', '', '2', ''),
(5, 5, 8, '10', '', '', '2', ''),
(5, 5, 9, '10', '', '', '2', ''),
(5, 5, 10, '10', '', '', '2', ''),
(5, 5, 11, '10', '', '', '2', ''),
(5, 5, 12, '10', '', '', '2', ''),
(5, 5, 13, '10', '', '', '2', ''),
(5, 5, 14, '10', '', '', '2', ''),
(5, 5, 15, 'C', '', '', '2', ''),
(6, 4, 1, '10', '', '', '1', ''),
(6, 4, 2, '10', '', '', '1', ''),
(6, 4, 3, '20', '', '', '1', ''),
(6, 4, 4, '30', '', '', '1', ''),
(6, 4, 5, '10', '', '', '1', ''),
(6, 4, 6, '10', '', '', '1', ''),
(6, 4, 7, '10', '', '', '1', ''),
(6, 4, 8, '10', '', '', '1', ''),
(6, 4, 9, '10', '', '', '1', ''),
(6, 4, 10, '10', '', '', '1', ''),
(6, 4, 11, '10', '', '', '1', ''),
(6, 4, 12, '10', '', '', '1', ''),
(6, 4, 13, '10', '', '', '1', ''),
(6, 4, 14, '10', '', '', '1', ''),
(6, 4, 15, 'C', '', '', '1', ''),
(6, 4, 1, '10', '', '', '2', ''),
(6, 4, 2, '10', '', '', '2', ''),
(6, 4, 3, '30', '', '', '2', ''),
(6, 4, 4, '20', '', '', '2', ''),
(6, 4, 5, '10', '', '', '2', ''),
(6, 4, 6, '10', '', '', '2', ''),
(6, 4, 7, '10', '', '', '2', ''),
(6, 4, 8, '10', '', '', '2', ''),
(6, 4, 9, '10', '', '', '2', ''),
(6, 4, 10, '10', '', '', '2', ''),
(6, 4, 11, '10', '', '', '2', ''),
(6, 4, 12, '10', '', '', '2', ''),
(6, 4, 13, '10', '', '', '2', ''),
(6, 4, 14, '10', '', '', '2', ''),
(6, 4, 15, 'C', '', '', '2', ''),
(7, 3, 1, '30', '', '', '1', ''),
(7, 3, 2, '30', '', '', '1', ''),
(7, 3, 3, '10', '', '', '1', ''),
(7, 3, 4, '10', '', '', '1', ''),
(7, 3, 5, '10', '', '', '1', ''),
(7, 3, 6, '10', '', '', '1', ''),
(7, 3, 7, '10', '', '', '1', ''),
(7, 3, 8, '30', '', '', '1', ''),
(7, 3, 9, '10', '', '', '1', ''),
(7, 3, 10, '10', '', '', '1', ''),
(7, 3, 11, '10', '', '', '1', ''),
(7, 3, 12, '10', '', '', '1', ''),
(7, 3, 13, '10', '', '', '1', ''),
(7, 3, 14, '10', '', '', '1', ''),
(7, 3, 15, 'C', '', '', '1', ''),
(9, 2, 1, '0', '', '', '1', ''),
(9, 2, 2, '0', '', '', '1', ''),
(9, 2, 3, '0', '', '', '1', ''),
(9, 2, 4, '0', '', '', '1', ''),
(9, 2, 5, '0', '', '', '1', ''),
(9, 2, 6, '0', '', '', '1', ''),
(9, 2, 7, '0', '', '', '1', ''),
(9, 2, 8, '0', '', '', '1', ''),
(9, 2, 9, '0', '', '', '1', ''),
(9, 2, 10, '0', '', '', '1', ''),
(9, 2, 11, '0', '', '', '1', ''),
(9, 2, 12, '0', '', '', '1', ''),
(9, 2, 13, '0', '', '', '1', ''),
(9, 2, 14, '0', '', '', '1', ''),
(9, 2, 15, '0', '', '', '1', ''),
(9, 2, 1, '0', '', '', '2', ''),
(9, 2, 2, '0', '', '', '2', ''),
(9, 2, 3, '0', '', '', '2', ''),
(9, 2, 4, '0', '', '', '2', ''),
(9, 2, 5, '0', '', '', '2', ''),
(9, 2, 6, '0', '', '', '2', ''),
(9, 2, 7, '0', '', '', '2', ''),
(9, 2, 8, '0', '', '', '2', ''),
(9, 2, 9, '0', '', '', '2', ''),
(9, 2, 10, '0', '', '', '2', ''),
(9, 2, 11, '0', '', '', '2', ''),
(9, 2, 12, '0', '', '', '2', ''),
(9, 2, 13, '0', '', '', '2', ''),
(9, 2, 14, '0', '', '', '2', ''),
(9, 2, 15, '0', '', '', '2', ''),
(11, 3, 1, '0', '', '', '1', ''),
(11, 3, 2, '0', '', '', '1', ''),
(11, 3, 3, '0', '', '', '1', ''),
(11, 3, 4, '0', '', '', '1', ''),
(11, 3, 5, '0', '', '', '1', ''),
(11, 3, 6, '0', '', '', '1', ''),
(11, 3, 7, '0', '', '', '1', ''),
(11, 3, 8, '0', '', '', '1', ''),
(11, 3, 9, '0', '', '', '1', ''),
(11, 3, 10, '0', '', '', '1', ''),
(11, 3, 11, '0', '', '', '1', ''),
(11, 3, 12, '0', '', '', '1', ''),
(11, 3, 13, '0', '', '', '1', ''),
(11, 3, 14, '0', '', '', '1', ''),
(11, 3, 15, '0', '', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_psikomotor`
--

CREATE TABLE `nilai_psikomotor` (
  `idPelanggan` int(20) NOT NULL,
  `idKaryawan` int(20) NOT NULL,
  `idData` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tahap` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_psikomotor`
--

INSERT INTO `nilai_psikomotor` (`idPelanggan`, `idKaryawan`, `idData`, `nilai`, `waktu`, `keterangan`, `tahap`, `status`) VALUES
(1, 1, 1, '20', '1', '1', '1', ''),
(1, 1, 2, '10', ' asas', '12123', '', ''),
(1, 1, 3, '20', ' asasa', '123', '', ''),
(1, 1, 4, '30', '', '', '', ''),
(1, 1, 5, '20', '', '', '', ''),
(1, 1, 6, '20', '', '', '', ''),
(1, 1, 7, '20', '', '', '', ''),
(1, 1, 8, '20', '', '', '', ''),
(1, 1, 9, '20', '', '', '', ''),
(1, 1, 10, '20', '', '', '', ''),
(1, 1, 11, '30', '', '', '', ''),
(1, 1, 12, '30', '', '', '', ''),
(1, 1, 13, '10', '', '', '', ''),
(1, 1, 14, '10', '', '', '', ''),
(1, 1, 15, '30', '', '', '', ''),
(1, 1, 16, '20', '', '', '', ''),
(1, 1, 17, '10', '', '', '', ''),
(1, 1, 18, 'C', '', '', '', ''),
(2, 4, 1, '10', '', '', '', ''),
(2, 4, 2, '10', '', '', '', ''),
(2, 4, 3, '10', '', '', '', ''),
(2, 4, 4, '10', '', '', '', ''),
(2, 4, 5, '10', '', '', '', ''),
(2, 4, 6, '10', '', '', '', ''),
(2, 4, 7, '10', '', '', '', ''),
(2, 4, 8, '10', '', '', '', ''),
(2, 4, 9, '10', '', '', '', ''),
(2, 4, 10, '10', '', '', '', ''),
(2, 4, 11, '10', '', '', '', ''),
(2, 4, 12, '10', '', '', '', ''),
(2, 4, 13, '10', '', '', '', ''),
(2, 4, 14, '10', '', '', '', ''),
(2, 4, 15, '10', '', '', '', ''),
(2, 4, 16, '10', '', '', '', ''),
(2, 4, 17, '10', '', '', '', ''),
(2, 4, 18, '10', '', '', '', ''),
(3, 2, 1, '10', '', '', '', 'periksa'),
(3, 2, 2, '10', '', '', '', 'periksa'),
(3, 2, 3, '10', '', '', '', 'periksa'),
(3, 2, 4, '10', '', '', '', 'periksa'),
(3, 2, 5, '10', '', '', '', 'periksa'),
(3, 2, 6, '10', '', '', '', 'periksa'),
(3, 2, 7, '10', '', '', '', 'periksa'),
(3, 2, 8, '10', '', '', '', 'periksa'),
(3, 2, 9, '10', '', '', '', 'periksa'),
(3, 2, 10, '10', '', '', '', 'periksa'),
(3, 2, 11, '10', '', '', '', 'periksa'),
(3, 2, 12, '10', '', '', '', 'periksa'),
(3, 2, 13, '10', '', '', '', 'periksa'),
(3, 2, 14, '30', '', '', '', 'periksa'),
(3, 2, 15, '30', '', '', '', 'periksa'),
(3, 2, 16, '30', '', '', '', 'periksa'),
(3, 2, 17, '30', '', '', '', 'periksa'),
(3, 2, 18, 'C', '', '', '', 'periksa'),
(4, 5, 1, '10', '', '', '1', ''),
(4, 5, 2, '10', '', '', '1', ''),
(4, 5, 3, '10', '', '', '1', ''),
(4, 5, 4, '10', '', '', '1', ''),
(4, 5, 5, '10', '', '', '1', ''),
(4, 5, 6, '10', '', '', '1', ''),
(4, 5, 7, '10', '', '', '1', ''),
(4, 5, 8, '10', '', '', '1', ''),
(4, 5, 9, '10', '', '', '1', ''),
(4, 5, 10, '10', '', '', '1', ''),
(4, 5, 11, '10', '', '', '1', ''),
(4, 5, 12, '10', '', '', '1', ''),
(4, 5, 13, '10', '', '', '1', ''),
(4, 5, 14, '10', '', '', '1', ''),
(4, 5, 15, '10', '', '', '1', ''),
(4, 5, 16, '10', '', '', '1', ''),
(4, 5, 17, '10', '', '', '1', ''),
(4, 5, 18, '10', '', '', '1', ''),
(5, 2, 1, '30', '', '', '1', ''),
(5, 2, 2, '30', '', '', '1', ''),
(5, 2, 3, '30', '', '', '1', ''),
(5, 2, 4, '30', '', '', '1', ''),
(5, 2, 5, '20', '', '', '1', ''),
(5, 2, 6, '30', '', '', '1', ''),
(5, 2, 7, '30', '', '', '1', ''),
(5, 2, 8, '30', '', '', '1', ''),
(5, 2, 9, '20', '', '', '1', ''),
(5, 2, 10, '10', '', '', '1', ''),
(5, 2, 11, '10', '', '', '1', ''),
(5, 2, 12, '10', '', '', '1', ''),
(5, 2, 13, '10', '', '', '1', ''),
(5, 2, 14, '10', '', '', '1', ''),
(5, 2, 15, '30', '', '', '1', ''),
(5, 2, 16, '30', '', '', '1', ''),
(5, 2, 17, '30', '', '', '1', ''),
(5, 2, 18, 'B', '', '', '1', ''),
(5, 2, 1, '30', ' asas', '', '2', ''),
(5, 2, 2, '30', '', '', '2', ''),
(5, 2, 3, '30', '', '', '2', ''),
(5, 2, 4, '30', '', '', '2', ''),
(5, 2, 5, '20', '', '', '2', ''),
(5, 2, 6, '30', '', '', '2', ''),
(5, 2, 7, '30', '', '', '2', ''),
(5, 2, 8, '30', '', '', '2', ''),
(5, 2, 9, '20', '', '', '2', ''),
(5, 2, 10, '10', '', '', '2', ''),
(5, 2, 11, '10', '', '', '2', ''),
(5, 2, 12, '10', '', '', '2', ''),
(5, 2, 13, '10', '', '', '2', ''),
(5, 2, 14, '10', '', '', '2', ''),
(5, 2, 15, '30', '', '', '2', ''),
(5, 2, 16, '30', '', '', '2', ''),
(5, 2, 17, '30', '', '', '2', ''),
(5, 2, 18, 'B', '', '', '2', ''),
(6, 5, 1, '1', '', '', '1', ''),
(6, 5, 2, '2', '', '', '1', ''),
(6, 5, 3, '10', '', '', '1', ''),
(6, 5, 4, '2', '', '', '1', ''),
(6, 5, 5, '10', '', '', '1', ''),
(6, 5, 6, '10', '', '', '1', ''),
(6, 5, 7, '10', '', '', '1', ''),
(6, 5, 8, '10', '', '', '1', ''),
(6, 5, 9, '10', '', '', '1', ''),
(6, 5, 10, '10', '', '', '1', ''),
(6, 5, 11, '10', '', '', '1', ''),
(6, 5, 12, '10', '', '', '1', ''),
(6, 5, 13, '10', '', '', '1', ''),
(6, 5, 14, '10', '', '', '1', ''),
(6, 5, 15, '10', '', '', '1', ''),
(6, 5, 16, '10', '', '', '1', ''),
(6, 5, 17, '10', '', '', '1', ''),
(6, 5, 18, '2', '', '', '1', ''),
(6, 5, 1, '10', '', '', '2', ''),
(6, 5, 2, '2', '', '', '2', ''),
(6, 5, 3, '10', '', '', '2', ''),
(6, 5, 4, '2', '', '', '2', ''),
(6, 5, 5, '10', '', '', '2', ''),
(6, 5, 6, '10', '', '', '2', ''),
(6, 5, 7, '10', '', '', '2', ''),
(6, 5, 8, '10', '', '', '2', ''),
(6, 5, 9, '10', '', '', '2', ''),
(6, 5, 10, '10', '', '', '2', ''),
(6, 5, 11, '10', '', '', '2', ''),
(6, 5, 12, '10', '', '', '2', ''),
(6, 5, 13, '10', '', '', '2', ''),
(6, 5, 14, '10', '', '', '2', ''),
(6, 5, 15, '10', '', '', '2', ''),
(6, 5, 16, '10', '', '', '2', ''),
(6, 5, 17, '10', '', '', '2', ''),
(6, 5, 18, '2', '', '', '2', ''),
(7, 2, 1, '30', '', '', '1', ''),
(7, 2, 2, '30', '', '', '1', ''),
(7, 2, 3, '10', '', '', '1', ''),
(7, 2, 4, '30', '', '', '1', ''),
(7, 2, 5, '30', '', '', '1', ''),
(7, 2, 6, '30', '', '', '1', ''),
(7, 2, 7, '30', '', '', '1', ''),
(7, 2, 8, '10', '', '', '1', ''),
(7, 2, 9, '10', '', '', '1', ''),
(7, 2, 10, '10', '', '', '1', ''),
(7, 2, 11, '10', '', '', '1', ''),
(7, 2, 12, '10', '', '', '1', ''),
(7, 2, 13, '10', '', '', '1', ''),
(7, 2, 14, '10', '', '', '1', ''),
(7, 2, 15, '10', '', '', '1', ''),
(7, 2, 16, '10', '', '', '1', ''),
(7, 2, 17, '10', '', '', '1', ''),
(7, 2, 18, 'C', '', '', '1', ''),
(9, 4, 1, '0', '', '', '1', ''),
(9, 4, 2, '0', '', '', '1', ''),
(9, 4, 3, '0', '', '', '1', ''),
(9, 4, 4, '0', '', '', '1', ''),
(9, 4, 5, '0', '', '', '1', ''),
(9, 4, 6, '0', '', '', '1', ''),
(9, 4, 7, '0', '', '', '1', ''),
(9, 4, 8, '0', '', '', '1', ''),
(9, 4, 9, '0', '', '', '1', ''),
(9, 4, 10, '0', '', '', '1', ''),
(9, 4, 11, '0', '', '', '1', ''),
(9, 4, 12, '0', '', '', '1', ''),
(9, 4, 13, '0', '', '', '1', ''),
(9, 4, 14, '0', '', '', '1', ''),
(9, 4, 15, '0', '', '', '1', ''),
(9, 4, 16, '0', '', '', '1', ''),
(9, 4, 17, '0', '', '', '1', ''),
(9, 4, 18, '0', '', '', '1', ''),
(9, 4, 1, '0', '', '', '2', ''),
(9, 4, 2, '0', '', '', '2', ''),
(9, 4, 3, '0', '', '', '2', ''),
(9, 4, 4, '0', '', '', '2', ''),
(9, 4, 5, '0', '', '', '2', ''),
(9, 4, 6, '0', '', '', '2', ''),
(9, 4, 7, '0', '', '', '2', ''),
(9, 4, 8, '0', '', '', '2', ''),
(9, 4, 9, '0', '', '', '2', ''),
(9, 4, 10, '0', '', '', '2', ''),
(9, 4, 11, '0', '', '', '2', ''),
(9, 4, 12, '0', '', '', '2', ''),
(9, 4, 13, '0', '', '', '2', ''),
(9, 4, 14, '0', '', '', '2', ''),
(9, 4, 15, '0', '', '', '2', ''),
(9, 4, 16, '0', '', '', '2', ''),
(9, 4, 17, '0', '', '', '2', ''),
(9, 4, 18, '0', '', '', '2', ''),
(11, 2, 1, '0', '', '', '1', ''),
(11, 2, 2, '0', '', '', '1', ''),
(11, 2, 3, '0', '', '', '1', ''),
(11, 2, 4, '0', '', '', '1', ''),
(11, 2, 5, '0', '', '', '1', ''),
(11, 2, 6, '0', '', '', '1', ''),
(11, 2, 7, '0', '', '', '1', ''),
(11, 2, 8, '0', '', '', '1', ''),
(11, 2, 9, '0', '', '', '1', ''),
(11, 2, 10, '0', '', '', '1', ''),
(11, 2, 11, '0', '', '', '1', ''),
(11, 2, 12, '0', '', '', '1', ''),
(11, 2, 13, '0', '', '', '1', ''),
(11, 2, 14, '0', '', '', '1', ''),
(11, 2, 15, '0', '', '', '1', ''),
(11, 2, 16, '0', '', '', '1', ''),
(11, 2, 17, '0', '', '', '1', ''),
(11, 2, 18, '0', '', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_sosial`
--

CREATE TABLE `nilai_sosial` (
  `idPelanggan` int(20) NOT NULL,
  `idKaryawan` int(20) NOT NULL,
  `idData` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tahap` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_sosial`
--

INSERT INTO `nilai_sosial` (`idPelanggan`, `idKaryawan`, `idData`, `nilai`, `waktu`, `keterangan`, `tahap`, `status`) VALUES
(1, 5, 1, '', '10 menit', ' bagus', '', ''),
(1, 5, 2, '10', ' 12 menit', ' nice', '', ''),
(1, 5, 3, '20', ' 10 jam', ' sasa', '', ''),
(1, 5, 4, '', ' ', '  mana', '', ''),
(1, 5, 5, '', '', ' orang', '', ''),
(1, 5, 6, '', ' ini', '', '', ''),
(1, 5, 7, '', '', '', '', ''),
(1, 5, 8, '', '', '', '', ''),
(1, 5, 9, '30', '', '', '', ''),
(1, 5, 10, '30', '', '', '', ''),
(1, 4, 11, '', '', '', '', ''),
(1, 5, 12, 'K', '', '', '', ''),
(2, 1, 1, '10', '', '', '', ''),
(2, 1, 2, '10', '', '', '', ''),
(2, 1, 3, '10', '', '', '', ''),
(2, 1, 4, '10', '', '', '', ''),
(2, 1, 5, '10', '', '', '', ''),
(2, 1, 6, '10', '', '', '', ''),
(2, 1, 7, '10', '', '', '', ''),
(2, 1, 8, '10', '', '', '', ''),
(2, 1, 9, '10', '', '', '', ''),
(2, 1, 10, '10', '', '', '', ''),
(2, 1, 11, '10', '', '', '', ''),
(2, 1, 12, '10', '', '', '', ''),
(3, 4, 1, '10', '', '', '', 'periksa'),
(3, 4, 2, '10', '', '', '', 'periksa'),
(3, 4, 3, '10', '', '', '', 'periksa'),
(3, 4, 4, '10', '', '', '', 'periksa'),
(3, 4, 5, '10', '', '', '', 'periksa'),
(3, 4, 6, '10', '', '', '', 'periksa'),
(3, 4, 7, '10', '', '', '', 'periksa'),
(3, 4, 8, '10', '', '', '', 'periksa'),
(3, 4, 9, '10', '', '', '', 'periksa'),
(3, 4, 10, '30', '', '', '', 'periksa'),
(3, 4, 11, '30', '', '', '', 'periksa'),
(3, 4, 12, 'C', '', '', '', 'periksa'),
(4, 1, 1, '20', '', '', '1', ''),
(4, 1, 2, '10', '', '', '1', ''),
(4, 1, 3, '10', '', '', '1', ''),
(4, 1, 4, '10', '', '', '1', ''),
(4, 1, 5, '10', '', '', '1', ''),
(4, 1, 6, '10', '', '', '1', ''),
(4, 1, 7, '10', '', '', '1', ''),
(4, 1, 8, '10', '', '', '1', ''),
(4, 1, 9, '10', '', '', '1', ''),
(4, 1, 10, '10', '', '', '1', ''),
(4, 1, 11, '20', '', '', '1', ''),
(4, 1, 12, 'C', '', '', '1', ''),
(5, 1, 1, '30', '', '', '1', ''),
(5, 1, 2, '30', '', '', '1', ''),
(5, 1, 3, '30', '', '', '1', ''),
(5, 1, 4, '10', '', '', '1', ''),
(5, 1, 5, '30', '', '', '1', ''),
(5, 1, 6, '30', '', '', '1', ''),
(5, 1, 7, '10', '', '', '1', ''),
(5, 1, 8, '30', '', '', '1', ''),
(5, 1, 9, '30', '', '', '1', ''),
(5, 1, 10, '30', '', '', '1', ''),
(5, 1, 11, '30', '', '', '1', ''),
(5, 1, 12, 'B', '', '', '1', ''),
(5, 1, 1, '30', ' e', '', '2', ''),
(5, 1, 2, '30', ' 1wqw', '', '2', ''),
(5, 1, 3, '10', '', ' ee', '2', ''),
(5, 1, 4, '10', '', '', '2', ''),
(5, 1, 5, '20', '', '', '2', ''),
(5, 1, 6, '10', '', '', '2', ''),
(5, 1, 7, '10', '', '', '2', ''),
(5, 1, 8, '10', '', '', '2', ''),
(5, 1, 9, '10', '', '', '2', ''),
(5, 1, 10, '20', '', '', '2', ''),
(5, 1, 11, '10', '', '', '2', ''),
(5, 1, 12, 'B', '', '', '2', ''),
(6, 1, 1, '30', '', '', '1', ''),
(6, 1, 2, '10', '', '', '1', ''),
(6, 1, 3, '10', '', '', '1', ''),
(6, 1, 4, '10', '', '', '1', ''),
(6, 1, 5, '10', '', '', '1', ''),
(6, 1, 6, '10', '', '', '1', ''),
(6, 1, 7, '10', '', '', '1', ''),
(6, 1, 8, '10', '', '', '1', ''),
(6, 1, 9, '10', '', '', '1', ''),
(6, 1, 10, '10', '', '', '1', ''),
(6, 1, 11, '10', '', '', '1', ''),
(6, 1, 12, 'C', '', '', '1', ''),
(6, 1, 1, '20', '', '', '2', ''),
(6, 1, 2, '10', '', '', '2', ''),
(6, 1, 3, '10', '', '', '2', ''),
(6, 1, 4, '10', '', '', '2', ''),
(6, 1, 5, '10', '', '', '2', ''),
(6, 1, 6, '10', '', '', '2', ''),
(6, 1, 7, '10', '', '', '2', ''),
(6, 1, 8, '10', '', '', '2', ''),
(6, 1, 9, '10', '', '', '2', ''),
(6, 1, 10, '10', '', '', '2', ''),
(6, 1, 11, '10', '', '', '2', ''),
(6, 1, 12, 'C', '', '', '2', ''),
(7, 1, 1, '20', ' 5 menit', 'bagus', '1', ''),
(7, 1, 2, '10', '', '', '1', ''),
(7, 1, 3, '30', '', '', '1', ''),
(7, 1, 4, '30', '', '', '1', ''),
(7, 1, 5, '10', '', '', '1', ''),
(7, 1, 6, '10', '', '', '1', ''),
(7, 1, 7, '10', '', '', '1', ''),
(7, 1, 8, '10', '', '', '1', ''),
(7, 1, 9, '10', '', '', '1', ''),
(7, 1, 10, '10', '', '', '1', ''),
(7, 1, 11, '10', '', '', '1', ''),
(7, 1, 12, 'C', '', '', '1', ''),
(9, 5, 1, '0', '', '', '1', ''),
(9, 5, 2, '0', '', '', '1', ''),
(9, 5, 3, '0', '', '', '1', ''),
(9, 5, 4, '0', '', '', '1', ''),
(9, 5, 5, '0', '', '', '1', ''),
(9, 5, 6, '0', '', '', '1', ''),
(9, 5, 7, '0', '', '', '1', ''),
(9, 5, 8, '0', '', '', '1', ''),
(9, 5, 9, '0', '', '', '1', ''),
(9, 5, 10, '0', '', '', '1', ''),
(9, 5, 11, '0', '', '', '1', ''),
(9, 5, 12, '0', '', '', '1', ''),
(9, 5, 1, '0', '', '', '2', ''),
(9, 5, 2, '0', '', '', '2', ''),
(9, 5, 3, '0', '', '', '2', ''),
(9, 5, 4, '0', '', '', '2', ''),
(9, 5, 5, '0', '', '', '2', ''),
(9, 5, 6, '0', '', '', '2', ''),
(9, 5, 7, '0', '', '', '2', ''),
(9, 5, 8, '0', '', '', '2', ''),
(9, 5, 9, '0', '', '', '2', ''),
(9, 5, 10, '0', '', '', '2', ''),
(9, 5, 11, '0', '', '', '2', ''),
(9, 5, 12, '0', '', '', '2', ''),
(11, 1, 1, '0', '', '', '1', ''),
(11, 1, 2, '0', '', '', '1', ''),
(11, 1, 3, '0', '', '', '1', ''),
(11, 1, 4, '0', '', '', '1', ''),
(11, 1, 5, '0', '', '', '1', ''),
(11, 1, 6, '0', '', '', '1', ''),
(11, 1, 7, '0', '', '', '1', ''),
(11, 1, 8, '0', '', '', '1', ''),
(11, 1, 9, '0', '', '', '1', ''),
(11, 1, 10, '0', '', '', '1', ''),
(11, 1, 11, '0', '', '', '1', ''),
(11, 1, 12, '0', '', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `idAdminPengirim` int(20) NOT NULL,
  `idKaryawanPengirim` int(20) NOT NULL,
  `idAhliPengirim` int(20) NOT NULL,
  `idPelangganPenerima` int(20) NOT NULL,
  `idAdminPenerima` int(20) NOT NULL,
  `idKaryawanPenerima` int(20) NOT NULL,
  `idAhliPenerima` int(20) NOT NULL,
  `namaPengirim` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `statusNotifikasi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`idAdminPengirim`, `idKaryawanPengirim`, `idAhliPengirim`, `idPelangganPenerima`, `idAdminPenerima`, `idKaryawanPenerima`, `idAhliPenerima`, `namaPengirim`, `pesan`, `statusNotifikasi`) VALUES
(1, 0, 0, 1, 0, 0, 0, 'admin', 'helloo', 1),
(1, 0, 0, 1, 0, 0, 0, 'admin', 'silahkan melakukan pembayaran', 1),
(1, 0, 0, 0, 0, 0, 1, 'admin', 'silahkan melakukan pengambilan kesimpulan', 1),
(0, 0, 1, 6, 0, 0, 0, 'ahli', 'silahkan mengecek hasil pemeriksaan', 1),
(0, 0, 1, 1, 0, 0, 0, 'ahli', 'tesss', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idPelanggan` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `statusPsikomotor` varchar(50) NOT NULL,
  `statusAfeksi` varchar(50) NOT NULL,
  `statusKognisi` varchar(50) NOT NULL,
  `statusAkademik` varchar(50) NOT NULL,
  `statusSosial` varchar(50) NOT NULL,
  `perkPsikomotor` varchar(20) NOT NULL,
  `perkKognisi` varchar(20) NOT NULL,
  `perkAfeksi` varchar(20) NOT NULL,
  `perkAkademik` varchar(20) NOT NULL,
  `perkSosial` varchar(20) NOT NULL,
  `kPsikomotor` varchar(50) NOT NULL,
  `kKognisi` varchar(50) NOT NULL,
  `kAfeksi` varchar(50) NOT NULL,
  `kAkademik` varchar(50) NOT NULL,
  `kSosial` varchar(50) NOT NULL,
  `ahliHasil` varchar(50) NOT NULL,
  `statusHasil` varchar(50) NOT NULL,
  `namaPelanggan` varchar(50) NOT NULL,
  `namaPelangganPgl` varchar(50) NOT NULL,
  `usia` varchar(20) NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `tempatLahir` varchar(20) NOT NULL,
  `tanggalLahir` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kwn` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `anakKe` varchar(20) NOT NULL,
  `namaSekolah` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `perkHamil` varchar(50) NOT NULL,
  `penyakitHamil` varchar(50) NOT NULL,
  `usiaKandung` varchar(20) NOT NULL,
  `riwayatLhr` varchar(50) NOT NULL,
  `tempatLhr` varchar(20) NOT NULL,
  `penolongLhr` varchar(20) NOT NULL,
  `gangguanLhr` varchar(20) NOT NULL,
  `beratBy` varchar(20) NOT NULL,
  `panjangBy` varchar(20) NOT NULL,
  `kelainanBy` varchar(50) NOT NULL,
  `netekUmr` varchar(20) NOT NULL,
  `mnmKlgUmr` varchar(20) NOT NULL,
  `imunisasi` varchar(20) NOT NULL,
  `pemeriksaan` varchar(20) NOT NULL,
  `kltsMkn` varchar(50) NOT NULL,
  `knttsMkn` varchar(20) NOT NULL,
  `ksltnMkn` varchar(20) NOT NULL,
  `berdiriUsia` varchar(20) NOT NULL,
  `jalanUsia` varchar(20) NOT NULL,
  `spdrdUsia` varchar(20) NOT NULL,
  `spdrdduaUsia` varchar(20) NOT NULL,
  `klmtLngkpUsia` varchar(20) NOT NULL,
  `sulitGerak` varchar(50) NOT NULL,
  `giziBalita` varchar(50) NOT NULL,
  `rwytKshtn` varchar(50) NOT NULL,
  `tanganDominan` varchar(20) NOT NULL,
  `rabaUsia` varchar(20) NOT NULL,
  `kataBrmkn` varchar(20) NOT NULL,
  `kataBrmknUsia` varchar(20) NOT NULL,
  `klmtLngkp` varchar(50) NOT NULL,
  `hubSaudara` varchar(50) NOT NULL,
  `hubTmn` varchar(50) NOT NULL,
  `hubOrtu` varchar(50) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `minat` varchar(50) NOT NULL,
  `tkUsia` varchar(20) NOT NULL,
  `lamaTk` varchar(20) NOT NULL,
  `sulitTk` varchar(20) NOT NULL,
  `sdUsia` varchar(20) NOT NULL,
  `sulitSd` varchar(50) NOT NULL,
  `tdkNaikKls` varchar(20) NOT NULL,
  `layananSblm` varchar(50) NOT NULL,
  `prestasi` varchar(50) NOT NULL,
  `matpelSulit` varchar(50) NOT NULL,
  `matpelSuka` varchar(50) NOT NULL,
  `ketLain` text NOT NULL,
  `noTlp` varchar(20) NOT NULL,
  `noHp` varchar(20) NOT NULL,
  `fotoPelanggan` varchar(100) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `usiaAyh` varchar(10) NOT NULL,
  `agamaAyh` varchar(20) NOT NULL,
  `statusAyh` varchar(20) NOT NULL,
  `pendidikanAyh` varchar(50) NOT NULL,
  `pekerjaanAyh` varchar(50) NOT NULL,
  `almtAyh` varchar(50) NOT NULL,
  `ibu` varchar(20) NOT NULL,
  `usiaIbu` varchar(10) NOT NULL,
  `agamaIbu` varchar(10) NOT NULL,
  `statusIbu` varchar(20) NOT NULL,
  `pendidikanIbu` varchar(50) NOT NULL,
  `pekerjaanIbu` varchar(50) NOT NULL,
  `almtIbu` varchar(50) NOT NULL,
  `wali` varchar(50) NOT NULL,
  `usiaWl` varchar(10) NOT NULL,
  `agamaWl` varchar(10) NOT NULL,
  `statusWl` varchar(50) NOT NULL,
  `pendidikanWl` varchar(50) NOT NULL,
  `pekerjaanWl` varchar(50) NOT NULL,
  `almtWl` varchar(50) NOT NULL,
  `ortuSerumah` varchar(10) NOT NULL,
  `anakOrtu` varchar(10) NOT NULL,
  `anakSatuOrtu` varchar(10) NOT NULL,
  `anakWali` varchar(10) NOT NULL,
  `jabAyh` varchar(50) NOT NULL,
  `jabIbu` varchar(50) NOT NULL,
  `jabiAyh` varchar(50) NOT NULL,
  `jabiIbu` varchar(50) NOT NULL,
  `persepsiOrtu` text NOT NULL,
  `kesulitanOrtu` text NOT NULL,
  `harapanOrtu` text NOT NULL,
  `bantuanOrtu` text NOT NULL,
  `tambahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idPelanggan`, `username`, `password`, `status`, `statusPsikomotor`, `statusAfeksi`, `statusKognisi`, `statusAkademik`, `statusSosial`, `perkPsikomotor`, `perkKognisi`, `perkAfeksi`, `perkAkademik`, `perkSosial`, `kPsikomotor`, `kKognisi`, `kAfeksi`, `kAkademik`, `kSosial`, `ahliHasil`, `statusHasil`, `namaPelanggan`, `namaPelangganPgl`, `usia`, `jenisKelamin`, `tempatLahir`, `tanggalLahir`, `agama`, `kwn`, `pendidikan`, `anakKe`, `namaSekolah`, `kelas`, `alamat`, `perkHamil`, `penyakitHamil`, `usiaKandung`, `riwayatLhr`, `tempatLhr`, `penolongLhr`, `gangguanLhr`, `beratBy`, `panjangBy`, `kelainanBy`, `netekUmr`, `mnmKlgUmr`, `imunisasi`, `pemeriksaan`, `kltsMkn`, `knttsMkn`, `ksltnMkn`, `berdiriUsia`, `jalanUsia`, `spdrdUsia`, `spdrdduaUsia`, `klmtLngkpUsia`, `sulitGerak`, `giziBalita`, `rwytKshtn`, `tanganDominan`, `rabaUsia`, `kataBrmkn`, `kataBrmknUsia`, `klmtLngkp`, `hubSaudara`, `hubTmn`, `hubOrtu`, `hobi`, `minat`, `tkUsia`, `lamaTk`, `sulitTk`, `sdUsia`, `sulitSd`, `tdkNaikKls`, `layananSblm`, `prestasi`, `matpelSulit`, `matpelSuka`, `ketLain`, `noTlp`, `noHp`, `fotoPelanggan`, `ayah`, `usiaAyh`, `agamaAyh`, `statusAyh`, `pendidikanAyh`, `pekerjaanAyh`, `almtAyh`, `ibu`, `usiaIbu`, `agamaIbu`, `statusIbu`, `pendidikanIbu`, `pekerjaanIbu`, `almtIbu`, `wali`, `usiaWl`, `agamaWl`, `statusWl`, `pendidikanWl`, `pekerjaanWl`, `almtWl`, `ortuSerumah`, `anakOrtu`, `anakSatuOrtu`, `anakWali`, `jabAyh`, `jabIbu`, `jabiAyh`, `jabiIbu`, `persepsiOrtu`, `kesulitanOrtu`, `harapanOrtu`, `bantuanOrtu`, `tambahan`) VALUES
(1, 'fadil', '1234', 'pending', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'tessss', '', '', 'Pria', '', '', '', '', '', '', '', '', 'wowwwww', '', '', '', '', '', '', '', '', '', '', '', '2', 'tidak', 'rutin', '', '', '', '', '', '', '', '', '', 'kurang', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'oarng', '1212', 'periksa', 'periksa', 'periksa', 'periksa', 'periksa', 'periksa', '', '', '', '', '', '4', '3', '2', '5', '1', '', '', 'ddssss', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '222', 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'pelanggan', '1234', 'kesimpulan', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', '', '', '', '', '', '2', '3', '1', '5', '4', '1', 'sudah diperiksa', 'amin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0912', 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'andi', '1234', 'periksa', 'periksa', 'periksa', 'periksa', 'periksa', 'sudah diperiksa', '', '', '', '', '', '5', '4', '3', '2', '1', '1', '', 'andi iman', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0812334', 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'pelanggan1', '1234', 'hasil perkembangan', 'sudah diperiksa', 'sudah diperiksa', 'periksa', 'periksa', 'periksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', '2', '5', '4', '3', '1', '1', 'sudah perkembangan', 'bayu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0812222', 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'pelanggan2', '1234', 'periksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', '5', '4', '3', '2', '1', '1', '', 'adii', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '08123333', 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'pelanggan3', '1234', 'lunas', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'periksa', 'periksa', 'periksa', 'periksa', 'periksa', '2', '3', '4', '5', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081234566', 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'new', '1234', 'lunas2', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'sudah diperiksa', 'periksa', 'periksa', 'sudah diperiksa', 'periksa', 'periksa', '4', '2', '1', '3', '5', '1', '', 'ali', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '08122221', 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'baru', '1234', 'valid1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'namas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081233121', 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'pelangganbaru', '1234', 'periksa', 'periksa', 'periksa', 'periksa', 'periksa', 'periksa', 'periksa', 'periksa', 'periksa', 'periksa', 'periksa', '2', '3', '4', '5', '1', '1', '', 'andiw', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081222121', 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_adhd`
--

CREATE TABLE `pelanggan_adhd` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `nilai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan_adhd`
--

INSERT INTO `pelanggan_adhd` (`idPelanggan`, `idGejala`, `nilai`) VALUES
(1, 1, 0),
(1, 2, 1),
(1, 3, 1),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(1, 7, 1),
(1, 8, 1),
(1, 9, 1),
(1, 10, 1),
(1, 11, 1),
(1, 12, 1),
(1, 13, 1),
(1, 14, 0),
(1, 15, 0),
(1, 16, 0),
(1, 17, 0),
(1, 18, 0),
(1, 19, 12),
(2, 1, 0),
(2, 2, 0),
(2, 3, 0),
(2, 4, 0),
(2, 5, 0),
(2, 6, 0),
(2, 7, 0),
(2, 8, 0),
(2, 9, 0),
(2, 10, 0),
(2, 11, 0),
(2, 12, 0),
(2, 13, 0),
(2, 14, 0),
(2, 15, 0),
(2, 16, 0),
(2, 17, 0),
(2, 18, 0),
(2, 19, 0),
(3, 1, 1),
(3, 2, 1),
(3, 3, 1),
(3, 4, 1),
(3, 5, 0),
(3, 6, 1),
(3, 7, 1),
(3, 8, 0),
(3, 9, 1),
(3, 10, 1),
(3, 11, 1),
(3, 12, 1),
(3, 13, 1),
(3, 14, 0),
(3, 15, 0),
(3, 16, 0),
(3, 17, 0),
(3, 18, 0),
(3, 19, 12),
(4, 1, 0),
(4, 2, 0),
(4, 3, 0),
(4, 4, 0),
(4, 5, 0),
(4, 6, 0),
(4, 7, 0),
(4, 8, 0),
(4, 9, 0),
(4, 10, 0),
(4, 11, 0),
(4, 12, 0),
(4, 13, 0),
(4, 14, 0),
(4, 15, 0),
(4, 16, 0),
(4, 17, 0),
(4, 18, 0),
(4, 19, 0),
(5, 1, 0),
(5, 2, 0),
(5, 3, 0),
(5, 4, 0),
(5, 5, 0),
(5, 6, 0),
(5, 7, 0),
(5, 8, 0),
(5, 9, 0),
(5, 10, 0),
(5, 11, 0),
(5, 12, 0),
(5, 13, 0),
(5, 14, 0),
(5, 15, 0),
(5, 16, 0),
(5, 17, 0),
(5, 18, 0),
(5, 19, 0),
(6, 1, 1),
(6, 2, 1),
(6, 3, 1),
(6, 4, 1),
(6, 5, 1),
(6, 6, 1),
(6, 7, 1),
(6, 8, 1),
(6, 9, 0),
(6, 10, 0),
(6, 11, 1),
(6, 12, 0),
(6, 13, 0),
(6, 14, 0),
(6, 15, 0),
(6, 16, 0),
(6, 17, 0),
(6, 18, 0),
(6, 19, 9),
(7, 1, 1),
(7, 2, 0),
(7, 3, 0),
(7, 4, 0),
(7, 5, 0),
(7, 6, 0),
(7, 7, 0),
(7, 8, 0),
(7, 9, 0),
(7, 10, 0),
(7, 11, 0),
(7, 12, 0),
(7, 13, 0),
(7, 14, 0),
(7, 15, 0),
(7, 16, 0),
(7, 17, 0),
(7, 18, 0),
(7, 19, 1),
(9, 1, 0),
(9, 2, 0),
(9, 3, 0),
(9, 4, 0),
(9, 5, 0),
(9, 6, 0),
(9, 7, 0),
(9, 8, 0),
(9, 9, 0),
(9, 10, 0),
(9, 11, 0),
(9, 12, 0),
(9, 13, 0),
(9, 14, 0),
(9, 15, 0),
(9, 16, 0),
(9, 17, 0),
(9, 18, 0),
(9, 19, 0),
(10, 1, 0),
(10, 2, 0),
(10, 3, 0),
(10, 4, 0),
(10, 5, 0),
(10, 6, 0),
(10, 7, 0),
(10, 8, 0),
(10, 9, 0),
(10, 10, 0),
(10, 11, 0),
(10, 12, 0),
(10, 13, 0),
(10, 14, 0),
(10, 15, 0),
(10, 16, 0),
(10, 17, 0),
(10, 18, 0),
(10, 19, 0),
(11, 1, 0),
(11, 2, 0),
(11, 3, 0),
(11, 4, 0),
(11, 5, 0),
(11, 6, 0),
(11, 7, 0),
(11, 8, 0),
(11, 9, 0),
(11, 10, 0),
(11, 11, 0),
(11, 12, 0),
(11, 13, 0),
(11, 14, 0),
(11, 15, 0),
(11, 16, 0),
(11, 17, 0),
(11, 18, 0),
(11, 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_autis`
--

CREATE TABLE `pelanggan_autis` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `nilai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan_autis`
--

INSERT INTO `pelanggan_autis` (`idPelanggan`, `idGejala`, `nilai`) VALUES
(1, 1, 1),
(1, 2, 0),
(1, 3, 0),
(1, 4, 0),
(1, 5, 1),
(1, 6, 1),
(1, 7, 1),
(1, 8, 1),
(1, 9, 1),
(1, 10, 6),
(2, 1, 0),
(2, 2, 0),
(2, 3, 0),
(2, 4, 0),
(2, 5, 0),
(2, 6, 0),
(2, 7, 0),
(2, 8, 0),
(2, 9, 0),
(2, 10, 0),
(3, 1, 0),
(3, 2, 0),
(3, 3, 0),
(3, 4, 1),
(3, 5, 1),
(3, 6, 1),
(3, 7, 1),
(3, 8, 1),
(3, 9, 0),
(3, 10, 5),
(4, 1, 0),
(4, 2, 0),
(4, 3, 0),
(4, 4, 0),
(4, 5, 0),
(4, 6, 0),
(4, 7, 0),
(4, 8, 0),
(4, 9, 0),
(4, 10, 0),
(5, 1, 0),
(5, 2, 0),
(5, 3, 0),
(5, 4, 0),
(5, 5, 0),
(5, 6, 0),
(5, 7, 0),
(5, 8, 0),
(5, 9, 0),
(5, 10, 0),
(6, 1, 1),
(6, 2, 1),
(6, 3, 1),
(6, 4, 1),
(6, 5, 1),
(6, 6, 1),
(6, 7, 1),
(6, 8, 1),
(6, 9, 0),
(6, 10, 8),
(7, 1, 0),
(7, 2, 0),
(7, 3, 0),
(7, 4, 0),
(7, 5, 0),
(7, 6, 0),
(7, 7, 0),
(7, 8, 0),
(7, 9, 0),
(7, 10, 0),
(9, 1, 1),
(9, 2, 1),
(9, 3, 1),
(9, 4, 1),
(9, 5, 1),
(9, 6, 1),
(9, 7, 1),
(9, 8, 1),
(9, 9, 0),
(9, 10, 8),
(10, 1, 0),
(10, 2, 0),
(10, 3, 0),
(10, 4, 0),
(10, 5, 0),
(10, 6, 0),
(10, 7, 0),
(10, 8, 0),
(10, 9, 0),
(10, 10, 0),
(11, 1, 0),
(11, 2, 0),
(11, 3, 0),
(11, 4, 0),
(11, 5, 0),
(11, 6, 0),
(11, 7, 0),
(11, 8, 0),
(11, 9, 0),
(11, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_ds`
--

CREATE TABLE `pelanggan_ds` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `nilai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan_ds`
--

INSERT INTO `pelanggan_ds` (`idPelanggan`, `idGejala`, `nilai`) VALUES
(1, 1, 1),
(1, 2, 0),
(1, 3, 1),
(1, 4, 1),
(1, 5, 1),
(1, 6, 0),
(1, 7, 1),
(1, 8, 0),
(1, 9, 0),
(1, 10, 0),
(1, 11, 0),
(1, 12, 0),
(1, 13, 0),
(1, 14, 0),
(1, 15, 0),
(1, 16, 0),
(1, 17, 0),
(1, 18, 0),
(1, 19, 0),
(1, 20, 0),
(1, 21, 0),
(1, 22, 0),
(1, 23, 2),
(1, 24, 0),
(1, 25, 0),
(1, 26, 0),
(1, 27, 0),
(1, 28, 0),
(1, 29, 0),
(1, 30, 0),
(1, 31, 0),
(1, 32, 0),
(1, 33, 0),
(1, 34, 5),
(2, 1, 0),
(2, 2, 0),
(2, 3, 0),
(2, 4, 0),
(2, 5, 0),
(2, 6, 0),
(2, 7, 0),
(2, 8, 0),
(2, 9, 0),
(2, 10, 0),
(2, 11, 0),
(2, 12, 0),
(2, 13, 0),
(2, 14, 0),
(2, 15, 0),
(2, 16, 0),
(2, 17, 0),
(2, 18, 0),
(2, 19, 0),
(2, 20, 0),
(2, 21, 0),
(2, 22, 0),
(2, 23, 0),
(2, 24, 0),
(2, 25, 0),
(2, 26, 0),
(2, 27, 0),
(2, 28, 0),
(2, 29, 0),
(2, 30, 0),
(2, 31, 0),
(2, 32, 0),
(2, 33, 0),
(2, 34, 0),
(3, 1, 0),
(3, 2, 0),
(3, 3, 0),
(3, 4, 0),
(3, 5, 0),
(3, 6, 0),
(3, 7, 0),
(3, 8, 0),
(3, 9, 0),
(3, 10, 0),
(3, 11, 0),
(3, 12, 0),
(3, 13, 0),
(3, 14, 0),
(3, 15, 0),
(3, 16, 0),
(3, 17, 0),
(3, 18, 0),
(3, 19, 0),
(3, 20, 0),
(3, 21, 0),
(3, 22, 0),
(3, 23, 0),
(3, 24, 0),
(3, 25, 0),
(3, 26, 0),
(3, 27, 0),
(3, 28, 0),
(3, 29, 0),
(3, 30, 0),
(3, 31, 0),
(3, 32, 0),
(3, 33, 0),
(3, 34, 0),
(4, 1, 0),
(4, 2, 0),
(4, 3, 0),
(4, 4, 0),
(4, 5, 0),
(4, 6, 0),
(4, 7, 0),
(4, 8, 0),
(4, 9, 0),
(4, 10, 0),
(4, 11, 0),
(4, 12, 0),
(4, 13, 0),
(4, 14, 0),
(4, 15, 0),
(4, 16, 0),
(4, 17, 0),
(4, 18, 0),
(4, 19, 0),
(4, 20, 0),
(4, 21, 0),
(4, 22, 0),
(4, 23, 0),
(4, 24, 0),
(4, 25, 0),
(4, 26, 0),
(4, 27, 0),
(4, 28, 0),
(4, 29, 0),
(4, 30, 0),
(4, 31, 0),
(4, 32, 0),
(4, 33, 0),
(4, 34, 0),
(5, 1, 0),
(5, 2, 0),
(5, 3, 0),
(5, 4, 0),
(5, 5, 0),
(5, 6, 0),
(5, 7, 0),
(5, 8, 0),
(5, 9, 0),
(5, 10, 0),
(5, 11, 0),
(5, 12, 0),
(5, 13, 0),
(5, 14, 0),
(5, 15, 0),
(5, 16, 0),
(5, 17, 0),
(5, 18, 0),
(5, 19, 0),
(5, 20, 0),
(5, 21, 0),
(5, 22, 0),
(5, 23, 0),
(5, 24, 0),
(5, 25, 0),
(5, 26, 0),
(5, 27, 0),
(5, 28, 0),
(5, 29, 0),
(5, 30, 0),
(5, 31, 0),
(5, 32, 0),
(5, 33, 0),
(5, 34, 0),
(6, 1, 0),
(6, 2, 0),
(6, 3, 0),
(6, 4, 0),
(6, 5, 0),
(6, 6, 0),
(6, 7, 0),
(6, 8, 0),
(6, 9, 0),
(6, 10, 0),
(6, 11, 0),
(6, 12, 0),
(6, 13, 0),
(6, 14, 0),
(6, 15, 0),
(6, 16, 0),
(6, 17, 0),
(6, 18, 0),
(6, 19, 0),
(6, 20, 0),
(6, 21, 0),
(6, 22, 0),
(6, 23, 0),
(6, 24, 0),
(6, 25, 0),
(6, 26, 0),
(6, 27, 0),
(6, 28, 0),
(6, 29, 0),
(6, 30, 0),
(6, 31, 0),
(6, 32, 0),
(6, 33, 0),
(6, 34, 0),
(7, 1, 0),
(7, 2, 0),
(7, 3, 0),
(7, 4, 0),
(7, 5, 0),
(7, 6, 0),
(7, 7, 0),
(7, 8, 0),
(7, 9, 0),
(7, 10, 0),
(7, 11, 0),
(7, 12, 0),
(7, 13, 0),
(7, 14, 0),
(7, 15, 0),
(7, 16, 0),
(7, 17, 0),
(7, 18, 0),
(7, 19, 0),
(7, 20, 0),
(7, 21, 0),
(7, 22, 0),
(7, 23, 0),
(7, 24, 0),
(7, 25, 0),
(7, 26, 0),
(7, 27, 0),
(7, 28, 0),
(7, 29, 0),
(7, 30, 0),
(7, 31, 0),
(7, 32, 0),
(7, 33, 0),
(7, 34, 0),
(9, 1, 0),
(9, 2, 0),
(9, 3, 0),
(9, 4, 0),
(9, 5, 0),
(9, 6, 0),
(9, 7, 0),
(9, 8, 0),
(9, 9, 0),
(9, 10, 0),
(9, 11, 0),
(9, 12, 0),
(9, 13, 0),
(9, 14, 0),
(9, 15, 0),
(9, 16, 0),
(9, 17, 0),
(9, 18, 0),
(9, 19, 0),
(9, 20, 0),
(9, 21, 0),
(9, 22, 0),
(9, 23, 0),
(9, 24, 0),
(9, 25, 0),
(9, 26, 0),
(9, 27, 0),
(9, 28, 0),
(9, 29, 0),
(9, 30, 0),
(9, 31, 0),
(9, 32, 0),
(9, 33, 0),
(9, 34, 0),
(10, 1, 0),
(10, 2, 0),
(10, 3, 0),
(10, 4, 0),
(10, 5, 0),
(10, 6, 0),
(10, 7, 0),
(10, 8, 0),
(10, 9, 0),
(10, 10, 0),
(10, 11, 0),
(10, 12, 0),
(10, 13, 0),
(10, 14, 0),
(10, 15, 0),
(10, 16, 0),
(10, 17, 0),
(10, 18, 0),
(10, 19, 0),
(10, 20, 0),
(10, 21, 0),
(10, 22, 0),
(10, 23, 0),
(10, 24, 0),
(10, 25, 0),
(10, 26, 0),
(10, 27, 0),
(10, 28, 0),
(10, 29, 0),
(10, 30, 0),
(10, 31, 0),
(10, 32, 0),
(10, 33, 0),
(10, 34, 0),
(11, 1, 0),
(11, 2, 0),
(11, 3, 0),
(11, 4, 0),
(11, 5, 0),
(11, 6, 0),
(11, 7, 0),
(11, 8, 0),
(11, 9, 0),
(11, 10, 0),
(11, 11, 0),
(11, 12, 0),
(11, 13, 0),
(11, 14, 0),
(11, 15, 0),
(11, 16, 0),
(11, 17, 0),
(11, 18, 0),
(11, 19, 0),
(11, 20, 0),
(11, 21, 0),
(11, 22, 0),
(11, 23, 0),
(11, 24, 0),
(11, 25, 0),
(11, 26, 0),
(11, 27, 0),
(11, 28, 0),
(11, 29, 0),
(11, 30, 0),
(11, 31, 0),
(11, 32, 0),
(11, 33, 0),
(11, 34, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_rm`
--

CREATE TABLE `pelanggan_rm` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `nilai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan_rm`
--

INSERT INTO `pelanggan_rm` (`idPelanggan`, `idGejala`, `nilai`) VALUES
(1, 1, 0),
(1, 2, 0),
(1, 3, 1),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(1, 7, 0),
(1, 8, 1),
(1, 9, 0),
(1, 10, 0),
(1, 11, 0),
(1, 12, 0),
(1, 13, 0),
(1, 14, 0),
(1, 15, 0),
(1, 16, 0),
(1, 17, 0),
(1, 18, 0),
(1, 19, 0),
(1, 20, 0),
(1, 21, 0),
(1, 22, 0),
(1, 23, 0),
(1, 24, 0),
(1, 25, 5),
(2, 1, 0),
(2, 2, 0),
(2, 3, 0),
(2, 4, 0),
(2, 5, 0),
(2, 6, 0),
(2, 7, 0),
(2, 8, 0),
(2, 9, 0),
(2, 10, 0),
(2, 11, 0),
(2, 12, 0),
(2, 13, 0),
(2, 14, 0),
(2, 15, 0),
(2, 16, 0),
(2, 17, 0),
(2, 18, 0),
(2, 19, 0),
(2, 20, 0),
(2, 21, 0),
(2, 22, 0),
(2, 23, 0),
(2, 24, 0),
(2, 25, 0),
(3, 1, 0),
(3, 2, 0),
(3, 3, 0),
(3, 4, 0),
(3, 5, 0),
(3, 6, 0),
(3, 7, 0),
(3, 8, 0),
(3, 9, 0),
(3, 10, 0),
(3, 11, 0),
(3, 12, 0),
(3, 13, 0),
(3, 14, 0),
(3, 15, 0),
(3, 16, 0),
(3, 17, 0),
(3, 18, 0),
(3, 19, 0),
(3, 20, 0),
(3, 21, 0),
(3, 22, 0),
(3, 23, 0),
(3, 24, 0),
(3, 25, 0),
(4, 1, 0),
(4, 2, 0),
(4, 3, 0),
(4, 4, 0),
(4, 5, 0),
(4, 6, 0),
(4, 7, 0),
(4, 8, 0),
(4, 9, 0),
(4, 10, 0),
(4, 11, 0),
(4, 12, 0),
(4, 13, 0),
(4, 14, 0),
(4, 15, 0),
(4, 16, 0),
(4, 17, 0),
(4, 18, 0),
(4, 19, 0),
(4, 20, 0),
(4, 21, 0),
(4, 22, 0),
(4, 23, 0),
(4, 24, 0),
(4, 25, 0),
(5, 1, 0),
(5, 2, 0),
(5, 3, 0),
(5, 4, 0),
(5, 5, 0),
(5, 6, 0),
(5, 7, 0),
(5, 8, 0),
(5, 9, 0),
(5, 10, 0),
(5, 11, 0),
(5, 12, 0),
(5, 13, 0),
(5, 14, 0),
(5, 15, 0),
(5, 16, 0),
(5, 17, 0),
(5, 18, 0),
(5, 19, 0),
(5, 20, 0),
(5, 21, 0),
(5, 22, 0),
(5, 23, 0),
(5, 24, 0),
(5, 25, 0),
(6, 1, 0),
(6, 2, 0),
(6, 3, 0),
(6, 4, 0),
(6, 5, 0),
(6, 6, 0),
(6, 7, 0),
(6, 8, 0),
(6, 9, 0),
(6, 10, 0),
(6, 11, 0),
(6, 12, 0),
(6, 13, 0),
(6, 14, 0),
(6, 15, 0),
(6, 16, 0),
(6, 17, 0),
(6, 18, 0),
(6, 19, 0),
(6, 20, 0),
(6, 21, 0),
(6, 22, 0),
(6, 23, 0),
(6, 24, 0),
(6, 25, 0),
(7, 1, 0),
(7, 2, 0),
(7, 3, 0),
(7, 4, 0),
(7, 5, 0),
(7, 6, 0),
(7, 7, 0),
(7, 8, 0),
(7, 9, 0),
(7, 10, 0),
(7, 11, 0),
(7, 12, 0),
(7, 13, 0),
(7, 14, 0),
(7, 15, 0),
(7, 16, 0),
(7, 17, 0),
(7, 18, 0),
(7, 19, 0),
(7, 20, 0),
(7, 21, 0),
(7, 22, 0),
(7, 23, 0),
(7, 24, 0),
(7, 25, 0),
(9, 1, 0),
(9, 2, 0),
(9, 3, 0),
(9, 4, 0),
(9, 5, 0),
(9, 6, 0),
(9, 7, 0),
(9, 8, 0),
(9, 9, 0),
(9, 10, 0),
(9, 11, 0),
(9, 12, 0),
(9, 13, 0),
(9, 14, 0),
(9, 15, 0),
(9, 16, 0),
(9, 17, 0),
(9, 18, 0),
(9, 19, 0),
(9, 20, 0),
(9, 21, 0),
(9, 22, 0),
(9, 23, 0),
(9, 24, 0),
(9, 25, 0),
(10, 1, 0),
(10, 2, 0),
(10, 3, 0),
(10, 4, 0),
(10, 5, 0),
(10, 6, 0),
(10, 7, 0),
(10, 8, 0),
(10, 9, 0),
(10, 10, 0),
(10, 11, 0),
(10, 12, 0),
(10, 13, 0),
(10, 14, 0),
(10, 15, 0),
(10, 16, 0),
(10, 17, 0),
(10, 18, 0),
(10, 19, 0),
(10, 20, 0),
(10, 21, 0),
(10, 22, 0),
(10, 23, 0),
(10, 24, 0),
(10, 25, 0),
(11, 1, 0),
(11, 2, 0),
(11, 3, 0),
(11, 4, 0),
(11, 5, 0),
(11, 6, 0),
(11, 7, 0),
(11, 8, 0),
(11, 9, 0),
(11, 10, 0),
(11, 11, 0),
(11, 12, 0),
(11, 13, 0),
(11, 14, 0),
(11, 15, 0),
(11, 16, 0),
(11, 17, 0),
(11, 18, 0),
(11, 19, 0),
(11, 20, 0),
(11, 21, 0),
(11, 22, 0),
(11, 23, 0),
(11, 24, 0),
(11, 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_sl`
--

CREATE TABLE `pelanggan_sl` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan_sl`
--

INSERT INTO `pelanggan_sl` (`idPelanggan`, `idGejala`, `nilai`) VALUES
(1, 1, '1'),
(1, 2, '1'),
(1, 3, '1'),
(1, 4, '0'),
(1, 5, '0'),
(1, 6, '0'),
(1, 7, '0'),
(1, 8, '0'),
(1, 9, '1'),
(1, 10, '0'),
(1, 11, '0'),
(1, 12, '0'),
(1, 13, '0'),
(1, 14, '0'),
(1, 15, '0'),
(1, 16, '0'),
(1, 17, '0'),
(1, 18, '0'),
(1, 19, '0'),
(1, 20, '0'),
(1, 21, '0'),
(1, 22, '0'),
(1, 23, '4'),
(2, 1, '0'),
(2, 2, '0'),
(2, 3, '0'),
(2, 4, '0'),
(2, 5, '0'),
(2, 6, '0'),
(2, 7, '0'),
(2, 8, '0'),
(2, 9, '0'),
(2, 10, '0'),
(2, 11, '0'),
(2, 12, '0'),
(2, 13, '0'),
(2, 14, '0'),
(2, 15, '0'),
(2, 16, '0'),
(2, 17, '0'),
(2, 18, '0'),
(2, 19, '0'),
(2, 20, '0'),
(2, 21, '0'),
(2, 22, '0'),
(2, 23, '0'),
(3, 1, '0'),
(3, 2, '0'),
(3, 3, '0'),
(3, 4, '0'),
(3, 5, '0'),
(3, 6, '0'),
(3, 7, '0'),
(3, 8, '0'),
(3, 9, '0'),
(3, 10, '0'),
(3, 11, '0'),
(3, 12, '0'),
(3, 13, '0'),
(3, 14, '0'),
(3, 15, '0'),
(3, 16, '0'),
(3, 17, '0'),
(3, 18, '0'),
(3, 19, '0'),
(3, 20, '0'),
(3, 21, '0'),
(3, 22, '0'),
(3, 23, '0'),
(4, 1, '0'),
(4, 2, '0'),
(4, 3, '0'),
(4, 4, '0'),
(4, 5, '0'),
(4, 6, '0'),
(4, 7, '0'),
(4, 8, '0'),
(4, 9, '0'),
(4, 10, '0'),
(4, 11, '0'),
(4, 12, '0'),
(4, 13, '0'),
(4, 14, '0'),
(4, 15, '0'),
(4, 16, '0'),
(4, 17, '0'),
(4, 18, '0'),
(4, 19, '0'),
(4, 20, '0'),
(4, 21, '0'),
(4, 22, '0'),
(4, 23, '0'),
(5, 1, '0'),
(5, 2, '0'),
(5, 3, '0'),
(5, 4, '0'),
(5, 5, '0'),
(5, 6, '0'),
(5, 7, '0'),
(5, 8, '0'),
(5, 9, '0'),
(5, 10, '0'),
(5, 11, '0'),
(5, 12, '0'),
(5, 13, '0'),
(5, 14, '0'),
(5, 15, '0'),
(5, 16, '0'),
(5, 17, '0'),
(5, 18, '0'),
(5, 19, '0'),
(5, 20, '0'),
(5, 21, '0'),
(5, 22, '0'),
(5, 23, '0'),
(6, 1, '0'),
(6, 2, '0'),
(6, 3, '0'),
(6, 4, '0'),
(6, 5, '0'),
(6, 6, '0'),
(6, 7, '0'),
(6, 8, '0'),
(6, 9, '0'),
(6, 10, '0'),
(6, 11, '0'),
(6, 12, '0'),
(6, 13, '0'),
(6, 14, '0'),
(6, 15, '0'),
(6, 16, '0'),
(6, 17, '0'),
(6, 18, '0'),
(6, 19, '0'),
(6, 20, '0'),
(6, 21, '0'),
(6, 22, '0'),
(6, 23, '0'),
(7, 1, '0'),
(7, 2, '0'),
(7, 3, '0'),
(7, 4, '0'),
(7, 5, '0'),
(7, 6, '0'),
(7, 7, '0'),
(7, 8, '0'),
(7, 9, '0'),
(7, 10, '0'),
(7, 11, '0'),
(7, 12, '0'),
(7, 13, '0'),
(7, 14, '0'),
(7, 15, '0'),
(7, 16, '0'),
(7, 17, '0'),
(7, 18, '0'),
(7, 19, '0'),
(7, 20, '0'),
(7, 21, '0'),
(7, 22, '0'),
(7, 23, '0'),
(9, 1, '0'),
(9, 2, '0'),
(9, 3, '0'),
(9, 4, '0'),
(9, 5, '0'),
(9, 6, '0'),
(9, 7, '0'),
(9, 8, '0'),
(9, 9, '0'),
(9, 10, '0'),
(9, 11, '0'),
(9, 12, '0'),
(9, 13, '0'),
(9, 14, '0'),
(9, 15, '0'),
(9, 16, '0'),
(9, 17, '0'),
(9, 18, '0'),
(9, 19, '0'),
(9, 20, '0'),
(9, 21, '0'),
(9, 22, '0'),
(9, 23, '0'),
(10, 1, '0'),
(10, 2, '0'),
(10, 3, '0'),
(10, 4, '0'),
(10, 5, '0'),
(10, 6, '0'),
(10, 7, '0'),
(10, 8, '0'),
(10, 9, '0'),
(10, 10, '0'),
(10, 11, '0'),
(10, 12, '0'),
(10, 13, '0'),
(10, 14, '0'),
(10, 15, '0'),
(10, 16, '0'),
(10, 17, '0'),
(10, 18, '0'),
(10, 19, '0'),
(10, 20, '0'),
(10, 21, '0'),
(10, 22, '0'),
(10, 23, '0'),
(11, 1, '0'),
(11, 2, '0'),
(11, 3, '0'),
(11, 4, '0'),
(11, 5, '0'),
(11, 6, '0'),
(11, 7, '0'),
(11, 8, '0'),
(11, 9, '0'),
(11, 10, '0'),
(11, 11, '0'),
(11, 12, '0'),
(11, 13, '0'),
(11, 14, '0'),
(11, 15, '0'),
(11, 16, '0'),
(11, 17, '0'),
(11, 18, '0'),
(11, 19, '0'),
(11, 20, '0'),
(11, 21, '0'),
(11, 22, '0'),
(11, 23, '0');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_tunalaras`
--

CREATE TABLE `pelanggan_tunalaras` (
  `idPelanggan` int(20) NOT NULL,
  `idGejala` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan_tunalaras`
--

INSERT INTO `pelanggan_tunalaras` (`idPelanggan`, `idGejala`, `nilai`) VALUES
(1, 1, '1'),
(1, 2, '1'),
(1, 3, '1'),
(1, 4, '1'),
(1, 5, '0'),
(1, 6, '1'),
(1, 7, '0'),
(1, 8, '0'),
(1, 9, '0'),
(1, 10, '0'),
(1, 11, '0'),
(1, 12, '0'),
(1, 13, '0'),
(1, 14, '0'),
(1, 15, '0'),
(1, 16, '0'),
(1, 17, '0'),
(1, 18, '0'),
(1, 19, '0'),
(1, 20, '0'),
(1, 21, '0'),
(1, 22, '0'),
(1, 23, '0'),
(1, 24, '0'),
(1, 25, '0'),
(1, 26, '0'),
(1, 27, '0'),
(1, 28, '0'),
(1, 29, '0'),
(1, 30, '0'),
(1, 31, '0'),
(1, 32, '0'),
(1, 33, '0'),
(1, 34, '0'),
(1, 35, '0'),
(1, 36, '0'),
(1, 37, '0'),
(1, 38, '1'),
(1, 39, '0'),
(1, 40, '4'),
(2, 1, '0'),
(2, 2, '0'),
(2, 3, '0'),
(2, 4, '0'),
(2, 5, '0'),
(2, 6, '0'),
(2, 7, '0'),
(2, 8, '0'),
(2, 9, '0'),
(2, 10, '0'),
(2, 11, '0'),
(2, 12, '0'),
(2, 13, '0'),
(2, 14, '0'),
(2, 15, '0'),
(2, 16, '0'),
(2, 17, '0'),
(2, 18, '0'),
(2, 19, '0'),
(2, 20, '0'),
(2, 21, '0'),
(2, 22, '0'),
(2, 23, '0'),
(2, 24, '0'),
(2, 25, '0'),
(2, 26, '0'),
(2, 27, '0'),
(2, 28, '0'),
(2, 29, '0'),
(2, 30, '0'),
(2, 31, '0'),
(2, 32, '0'),
(2, 33, '0'),
(2, 34, '0'),
(2, 35, '0'),
(2, 36, '0'),
(2, 37, '0'),
(2, 38, '0'),
(2, 39, '0'),
(2, 40, '0'),
(3, 1, '1'),
(3, 2, '1'),
(3, 3, '1'),
(3, 4, '1'),
(3, 5, '0'),
(3, 6, '1'),
(3, 7, '1'),
(3, 8, '0'),
(3, 9, '1'),
(3, 10, '1'),
(3, 11, '1'),
(3, 12, '1'),
(3, 13, '1'),
(3, 14, '1'),
(3, 15, '1'),
(3, 16, '1'),
(3, 17, '1'),
(3, 18, '1'),
(3, 19, '1'),
(3, 20, '1'),
(3, 21, '1'),
(3, 22, '1'),
(3, 23, '1'),
(3, 24, '1'),
(3, 25, '1'),
(3, 26, '1'),
(3, 27, '1'),
(3, 28, '1'),
(3, 29, '1'),
(3, 30, '1'),
(3, 31, '1'),
(3, 32, '1'),
(3, 33, '1'),
(3, 34, '1'),
(3, 35, '0'),
(3, 36, '0'),
(3, 37, '0'),
(3, 38, '1'),
(3, 39, '0'),
(3, 40, '33'),
(4, 1, '0'),
(4, 2, '0'),
(4, 3, '0'),
(4, 4, '0'),
(4, 5, '0'),
(4, 6, '0'),
(4, 7, '0'),
(4, 8, '0'),
(4, 9, '0'),
(4, 10, '0'),
(4, 11, '0'),
(4, 12, '0'),
(4, 13, '0'),
(4, 14, '0'),
(4, 15, '0'),
(4, 16, '0'),
(4, 17, '0'),
(4, 18, '0'),
(4, 19, '0'),
(4, 20, '0'),
(4, 21, '0'),
(4, 22, '0'),
(4, 23, '0'),
(4, 24, '0'),
(4, 25, '0'),
(4, 26, '0'),
(4, 27, '0'),
(4, 28, '0'),
(4, 29, '0'),
(4, 30, '0'),
(4, 31, '0'),
(4, 32, '0'),
(4, 33, '0'),
(4, 34, '0'),
(4, 35, '0'),
(4, 36, '0'),
(4, 37, '0'),
(4, 38, '0'),
(4, 39, '0'),
(4, 40, '0'),
(5, 1, '0'),
(5, 2, '0'),
(5, 3, '0'),
(5, 4, '0'),
(5, 5, '0'),
(5, 6, '0'),
(5, 7, '0'),
(5, 8, '0'),
(5, 9, '0'),
(5, 10, '0'),
(5, 11, '0'),
(5, 12, '0'),
(5, 13, '0'),
(5, 14, '0'),
(5, 15, '0'),
(5, 16, '0'),
(5, 17, '0'),
(5, 18, '0'),
(5, 19, '0'),
(5, 20, '0'),
(5, 21, '0'),
(5, 22, '0'),
(5, 23, '0'),
(5, 24, '0'),
(5, 25, '0'),
(5, 26, '0'),
(5, 27, '0'),
(5, 28, '0'),
(5, 29, '0'),
(5, 30, '0'),
(5, 31, '0'),
(5, 32, '0'),
(5, 33, '0'),
(5, 34, '0'),
(5, 35, '0'),
(5, 36, '0'),
(5, 37, '0'),
(5, 38, '0'),
(5, 39, '0'),
(5, 40, '0'),
(6, 1, '0'),
(6, 2, '0'),
(6, 3, '0'),
(6, 4, '0'),
(6, 5, '0'),
(6, 6, '0'),
(6, 7, '0'),
(6, 8, '0'),
(6, 9, '0'),
(6, 10, '0'),
(6, 11, '0'),
(6, 12, '0'),
(6, 13, '0'),
(6, 14, '0'),
(6, 15, '0'),
(6, 16, '0'),
(6, 17, '0'),
(6, 18, '0'),
(6, 19, '0'),
(6, 20, '0'),
(6, 21, '0'),
(6, 22, '0'),
(6, 23, '0'),
(6, 24, '0'),
(6, 25, '0'),
(6, 26, '0'),
(6, 27, '0'),
(6, 28, '0'),
(6, 29, '0'),
(6, 30, '0'),
(6, 31, '0'),
(6, 32, '0'),
(6, 33, '0'),
(6, 34, '0'),
(6, 35, '0'),
(6, 36, '0'),
(6, 37, '0'),
(6, 38, '0'),
(6, 39, '0'),
(6, 40, '0'),
(7, 1, '0'),
(7, 2, '0'),
(7, 3, '0'),
(7, 4, '0'),
(7, 5, '0'),
(7, 6, '0'),
(7, 7, '0'),
(7, 8, '0'),
(7, 9, '0'),
(7, 10, '0'),
(7, 11, '0'),
(7, 12, '0'),
(7, 13, '0'),
(7, 14, '0'),
(7, 15, '0'),
(7, 16, '0'),
(7, 17, '0'),
(7, 18, '0'),
(7, 19, '0'),
(7, 20, '0'),
(7, 21, '0'),
(7, 22, '0'),
(7, 23, '0'),
(7, 24, '0'),
(7, 25, '0'),
(7, 26, '0'),
(7, 27, '0'),
(7, 28, '0'),
(7, 29, '0'),
(7, 30, '0'),
(7, 31, '0'),
(7, 32, '0'),
(7, 33, '0'),
(7, 34, '0'),
(7, 35, '0'),
(7, 36, '0'),
(7, 37, '0'),
(7, 38, '0'),
(7, 39, '0'),
(7, 40, '0'),
(9, 1, '0'),
(9, 2, '0'),
(9, 3, '0'),
(9, 4, '0'),
(9, 5, '0'),
(9, 6, '0'),
(9, 7, '0'),
(9, 8, '0'),
(9, 9, '0'),
(9, 10, '0'),
(9, 11, '0'),
(9, 12, '0'),
(9, 13, '0'),
(9, 14, '0'),
(9, 15, '0'),
(9, 16, '0'),
(9, 17, '0'),
(9, 18, '0'),
(9, 19, '0'),
(9, 20, '0'),
(9, 21, '0'),
(9, 22, '0'),
(9, 23, '0'),
(9, 24, '0'),
(9, 25, '0'),
(9, 26, '0'),
(9, 27, '0'),
(9, 28, '0'),
(9, 29, '0'),
(9, 30, '0'),
(9, 31, '0'),
(9, 32, '0'),
(9, 33, '0'),
(9, 34, '0'),
(9, 35, '0'),
(9, 36, '0'),
(9, 37, '0'),
(9, 38, '0'),
(9, 39, '0'),
(9, 40, '0'),
(10, 1, '0'),
(10, 2, '0'),
(10, 3, '0'),
(10, 4, '0'),
(10, 5, '0'),
(10, 6, '0'),
(10, 7, '0'),
(10, 8, '0'),
(10, 9, '0'),
(10, 10, '0'),
(10, 11, '0'),
(10, 12, '0'),
(10, 13, '0'),
(10, 14, '0'),
(10, 15, '0'),
(10, 16, '0'),
(10, 17, '0'),
(10, 18, '0'),
(10, 19, '0'),
(10, 20, '0'),
(10, 21, '0'),
(10, 22, '0'),
(10, 23, '0'),
(10, 24, '0'),
(10, 25, '0'),
(10, 26, '0'),
(10, 27, '0'),
(10, 28, '0'),
(10, 29, '0'),
(10, 30, '0'),
(10, 31, '0'),
(10, 32, '0'),
(10, 33, '0'),
(10, 34, '0'),
(10, 35, '0'),
(10, 36, '0'),
(10, 37, '0'),
(10, 38, '0'),
(10, 39, '0'),
(10, 40, '0'),
(11, 1, '0'),
(11, 2, '0'),
(11, 3, '0'),
(11, 4, '0'),
(11, 5, '0'),
(11, 6, '0'),
(11, 7, '0'),
(11, 8, '0'),
(11, 9, '0'),
(11, 10, '0'),
(11, 11, '0'),
(11, 12, '0'),
(11, 13, '0'),
(11, 14, '0'),
(11, 15, '0'),
(11, 16, '0'),
(11, 17, '0'),
(11, 18, '0'),
(11, 19, '0'),
(11, 20, '0'),
(11, 21, '0'),
(11, 22, '0'),
(11, 23, '0'),
(11, 24, '0'),
(11, 25, '0'),
(11, 26, '0'),
(11, 27, '0'),
(11, 28, '0'),
(11, 29, '0'),
(11, 30, '0'),
(11, 31, '0'),
(11, 32, '0'),
(11, 33, '0'),
(11, 34, '0'),
(11, 35, '0'),
(11, 36, '0'),
(11, 37, '0'),
(11, 38, '0'),
(11, 39, '0'),
(11, 40, '0');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idPembayaran` int(20) NOT NULL,
  `idPengirim` int(20) NOT NULL,
  `buktiPembayaran1` varchar(50) NOT NULL,
  `totalPembayaran1` varchar(50) NOT NULL,
  `buktiPembayaran2` varchar(50) NOT NULL,
  `totalPembayaran2` varchar(50) NOT NULL,
  `statusPembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idPembayaran`, `idPengirim`, `buktiPembayaran1`, `totalPembayaran1`, `buktiPembayaran2`, `totalPembayaran2`, `statusPembayaran`) VALUES
(1, 1, '15477945406311.jpg', '', '', '', ''),
(2, 2, 'nuril_(3).jpg', '', '', '', 'terbayar'),
(3, 3, 'ran.JPG', '100.000', '', '2,750,000', 'terbayar'),
(4, 4, 'usecase.jpg', '100.000', '', '', 'terbayar'),
(5, 5, '1717562.jpg', '100.000', 'untitled_page.png', '6,600,000', 'terbayar'),
(6, 6, 'ran1.JPG', '100.000', 'ITC-logo-web.png', '2,750,000', 'terbayar'),
(7, 7, '1717563.jpg', '100.000', 'default3.png', '2,750,000', 'terbayar'),
(8, 8, 'default3.png', '100.000', 'default3.png', '', ''),
(9, 9, 'Capture.JPG', '100.000', 'download1.jpg', '2,750,000', 'terbayar'),
(10, 10, 'default3.png', '100.000', 'default3.png', '', ''),
(11, 11, 'bukti_transfer_1801090401081.jpg', '100.000', 'default3.png', '', 'terbayar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `ahli`
--
ALTER TABLE `ahli`
  ADD PRIMARY KEY (`idAhli`);

--
-- Indexes for table `data_afeksi`
--
ALTER TABLE `data_afeksi`
  ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `data_akademik`
--
ALTER TABLE `data_akademik`
  ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `data_kognisi`
--
ALTER TABLE `data_kognisi`
  ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `data_psikomotor`
--
ALTER TABLE `data_psikomotor`
  ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `data_sosial`
--
ALTER TABLE `data_sosial`
  ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `gejala_adhd`
--
ALTER TABLE `gejala_adhd`
  ADD PRIMARY KEY (`idGejala`);

--
-- Indexes for table `gejala_autis`
--
ALTER TABLE `gejala_autis`
  ADD PRIMARY KEY (`idGejala`);

--
-- Indexes for table `gejala_ds`
--
ALTER TABLE `gejala_ds`
  ADD PRIMARY KEY (`idGejala`);

--
-- Indexes for table `gejala_rm`
--
ALTER TABLE `gejala_rm`
  ADD PRIMARY KEY (`idGejala`);

--
-- Indexes for table `gejala_sl`
--
ALTER TABLE `gejala_sl`
  ADD PRIMARY KEY (`idGejala`);

--
-- Indexes for table `gejala_tunalaras`
--
ALTER TABLE `gejala_tunalaras`
  ADD PRIMARY KEY (`idGejala`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idKaryawan`);

--
-- Indexes for table `karyawan_adhd`
--
ALTER TABLE `karyawan_adhd`
  ADD KEY `idGejala` (`idGejala`),
  ADD KEY `idKaryawan` (`idKaryawan`);

--
-- Indexes for table `karyawan_autis`
--
ALTER TABLE `karyawan_autis`
  ADD KEY `idGejala` (`idGejala`),
  ADD KEY `idKaryawan` (`idKaryawan`);

--
-- Indexes for table `karyawan_ds`
--
ALTER TABLE `karyawan_ds`
  ADD KEY `idGejala` (`idGejala`),
  ADD KEY `idKaryawan` (`idKaryawan`);

--
-- Indexes for table `karyawan_rm`
--
ALTER TABLE `karyawan_rm`
  ADD KEY `idGejala` (`idGejala`),
  ADD KEY `idKaryawan` (`idKaryawan`);

--
-- Indexes for table `karyawan_sl`
--
ALTER TABLE `karyawan_sl`
  ADD KEY `idGejala` (`idGejala`),
  ADD KEY `idKaryawan` (`idKaryawan`);

--
-- Indexes for table `karyawan_tunalaras`
--
ALTER TABLE `karyawan_tunalaras`
  ADD KEY `idGejala` (`idGejala`),
  ADD KEY `idKaryawan` (`idKaryawan`);

--
-- Indexes for table `nilai_afeksi`
--
ALTER TABLE `nilai_afeksi`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idKaryawan` (`idKaryawan`),
  ADD KEY `idAfeksi` (`idData`);

--
-- Indexes for table `nilai_akademik`
--
ALTER TABLE `nilai_akademik`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idKaryawan` (`idKaryawan`),
  ADD KEY `idData` (`idData`);

--
-- Indexes for table `nilai_kognisi`
--
ALTER TABLE `nilai_kognisi`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idKaryawan` (`idKaryawan`),
  ADD KEY `idData` (`idData`);

--
-- Indexes for table `nilai_psikomotor`
--
ALTER TABLE `nilai_psikomotor`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idKaryawan` (`idKaryawan`),
  ADD KEY `idData` (`idData`);

--
-- Indexes for table `nilai_sosial`
--
ALTER TABLE `nilai_sosial`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idKaryawan` (`idKaryawan`),
  ADD KEY `idData` (`idData`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idPelanggan`);

--
-- Indexes for table `pelanggan_adhd`
--
ALTER TABLE `pelanggan_adhd`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idGejala` (`idGejala`);

--
-- Indexes for table `pelanggan_autis`
--
ALTER TABLE `pelanggan_autis`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idGejala` (`idGejala`);

--
-- Indexes for table `pelanggan_ds`
--
ALTER TABLE `pelanggan_ds`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idGejala` (`idGejala`);

--
-- Indexes for table `pelanggan_rm`
--
ALTER TABLE `pelanggan_rm`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idGejala` (`idGejala`);

--
-- Indexes for table `pelanggan_sl`
--
ALTER TABLE `pelanggan_sl`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idGejala` (`idGejala`);

--
-- Indexes for table `pelanggan_tunalaras`
--
ALTER TABLE `pelanggan_tunalaras`
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idGejala` (`idGejala`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idPembayaran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ahli`
--
ALTER TABLE `ahli`
  MODIFY `idAhli` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_afeksi`
--
ALTER TABLE `data_afeksi`
  MODIFY `idData` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data_akademik`
--
ALTER TABLE `data_akademik`
  MODIFY `idData` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `data_kognisi`
--
ALTER TABLE `data_kognisi`
  MODIFY `idData` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data_psikomotor`
--
ALTER TABLE `data_psikomotor`
  MODIFY `idData` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_sosial`
--
ALTER TABLE `data_sosial`
  MODIFY `idData` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gejala_adhd`
--
ALTER TABLE `gejala_adhd`
  MODIFY `idGejala` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gejala_autis`
--
ALTER TABLE `gejala_autis`
  MODIFY `idGejala` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gejala_ds`
--
ALTER TABLE `gejala_ds`
  MODIFY `idGejala` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `gejala_rm`
--
ALTER TABLE `gejala_rm`
  MODIFY `idGejala` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `gejala_sl`
--
ALTER TABLE `gejala_sl`
  MODIFY `idGejala` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gejala_tunalaras`
--
ALTER TABLE `gejala_tunalaras`
  MODIFY `idGejala` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `idKaryawan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idPelanggan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idPembayaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan_adhd`
--
ALTER TABLE `karyawan_adhd`
  ADD CONSTRAINT `karyawan_adhd_ibfk_1` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_adhd_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_adhd` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_autis`
--
ALTER TABLE `karyawan_autis`
  ADD CONSTRAINT `karyawan_autis_ibfk_1` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_autis_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_autis` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_ds`
--
ALTER TABLE `karyawan_ds`
  ADD CONSTRAINT `karyawan_ds_ibfk_1` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_ds_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_ds` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_rm`
--
ALTER TABLE `karyawan_rm`
  ADD CONSTRAINT `karyawan_rm_ibfk_1` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_rm_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_rm` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_sl`
--
ALTER TABLE `karyawan_sl`
  ADD CONSTRAINT `karyawan_sl_ibfk_1` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_sl_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_sl` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_tunalaras`
--
ALTER TABLE `karyawan_tunalaras`
  ADD CONSTRAINT `karyawan_tunalaras_ibfk_1` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_tunalaras_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_tunalaras` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_afeksi`
--
ALTER TABLE `nilai_afeksi`
  ADD CONSTRAINT `nilai_afeksi_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_afeksi_ibfk_2` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_afeksi_ibfk_3` FOREIGN KEY (`idData`) REFERENCES `data_afeksi` (`idData`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_akademik`
--
ALTER TABLE `nilai_akademik`
  ADD CONSTRAINT `nilai_akademik_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_akademik_ibfk_2` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_akademik_ibfk_3` FOREIGN KEY (`idData`) REFERENCES `data_akademik` (`idData`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_kognisi`
--
ALTER TABLE `nilai_kognisi`
  ADD CONSTRAINT `nilai_kognisi_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_kognisi_ibfk_2` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_kognisi_ibfk_3` FOREIGN KEY (`idData`) REFERENCES `data_kognisi` (`idData`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_psikomotor`
--
ALTER TABLE `nilai_psikomotor`
  ADD CONSTRAINT `nilai_psikomotor_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_psikomotor_ibfk_2` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_psikomotor_ibfk_3` FOREIGN KEY (`idData`) REFERENCES `data_psikomotor` (`idData`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_sosial`
--
ALTER TABLE `nilai_sosial`
  ADD CONSTRAINT `nilai_sosial_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_sosial_ibfk_2` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_sosial_ibfk_3` FOREIGN KEY (`idData`) REFERENCES `data_sosial` (`idData`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan_adhd`
--
ALTER TABLE `pelanggan_adhd`
  ADD CONSTRAINT `pelanggan_adhd_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggan_adhd_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_adhd` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan_autis`
--
ALTER TABLE `pelanggan_autis`
  ADD CONSTRAINT `pelanggan_autis_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggan_autis_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_autis` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan_ds`
--
ALTER TABLE `pelanggan_ds`
  ADD CONSTRAINT `pelanggan_ds_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggan_ds_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_ds` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan_rm`
--
ALTER TABLE `pelanggan_rm`
  ADD CONSTRAINT `pelanggan_rm_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggan_rm_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_rm` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan_sl`
--
ALTER TABLE `pelanggan_sl`
  ADD CONSTRAINT `pelanggan_sl_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggan_sl_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_sl` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan_tunalaras`
--
ALTER TABLE `pelanggan_tunalaras`
  ADD CONSTRAINT `pelanggan_tunalaras_ibfk_2` FOREIGN KEY (`idGejala`) REFERENCES `gejala_tunalaras` (`idGejala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggan_tunalaras_ibfk_3` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
