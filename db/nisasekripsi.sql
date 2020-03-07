-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Mar 2019 pada 05.52
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nisasekripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jwbmchat_user`
--

CREATE TABLE `jwbmchat_user` (
  `id` int(11) NOT NULL,
  `id_mchatrf` int(11) DEFAULT NULL,
  `jawaban` varchar(100) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jwbmchat_user`
--

INSERT INTO `jwbmchat_user` (`id`, `id_mchatrf`, `jawaban`, `ket`) VALUES
(1, 1, 'y', 'sama'),
(2, 10, 'n', 'tidak'),
(3, 11, 'n', 'tidak'),
(4, 12, 'n', 'sama'),
(5, 13, 'n', 'tidak'),
(6, 14, 'n', 'tidak'),
(7, 15, 'n', 'tidak'),
(8, 16, 'n', 'tidak'),
(9, 17, 'n', 'tidak'),
(10, 18, 'n', 'tidak'),
(11, 19, 'n', 'tidak'),
(12, 2, 'n', 'sama'),
(13, 20, 'n', 'tidak'),
(14, 3, 'n', 'tidak'),
(15, 4, 'n', 'tidak'),
(16, 5, 'n', 'sama'),
(17, 6, 'n', 'tidak'),
(18, 7, 'n', 'tidak'),
(19, 8, 'n', 'tidak'),
(20, 9, 'n', 'tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jwbpenyaring_user`
--

CREATE TABLE `jwbpenyaring_user` (
  `id` int(11) NOT NULL,
  `id_penyaring` int(11) DEFAULT NULL,
  `jawaban` varchar(100) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jwbpenyaring_user`
--

INSERT INTO `jwbpenyaring_user` (`id`, `id_penyaring`, `jawaban`, `ket`) VALUES
(1, 1, 'y', 'tidak'),
(2, 2, 'n', 'tidak'),
(3, 3, 'n', 'sama'),
(4, 4, 'n', 'sama'),
(5, 5, 'n', 'sama'),
(6, 6, 'n', 'sama'),
(7, 7, 'n', 'sama'),
(8, 8, 'n', 'sama'),
(9, 9, 'n', 'sama'),
(10, 10, 'n', 'sama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jwb_mchatrf`
--

CREATE TABLE `jwb_mchatrf` (
  `id` int(15) NOT NULL,
  `jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jwb_mchatrf`
--

INSERT INTO `jwb_mchatrf` (`id`, `jawaban`) VALUES
(1, 'y'),
(2, 'n'),
(3, 'y'),
(4, 'y'),
(5, 'n'),
(6, 'y'),
(7, 'y'),
(8, 'y'),
(9, 'y'),
(10, 'y'),
(11, 'y'),
(12, 'n'),
(13, 'y'),
(14, 'y'),
(15, 'y'),
(16, 'y'),
(17, 'y'),
(18, 'y'),
(19, 'y'),
(20, 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jwb_penyaring`
--

CREATE TABLE `jwb_penyaring` (
  `id` int(11) NOT NULL,
  `jawaban` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jwb_penyaring`
--

INSERT INTO `jwb_penyaring` (`id`, `jawaban`) VALUES
(1, 'n'),
(2, 'y'),
(3, 'n'),
(4, 'n'),
(5, 'n'),
(6, 'n'),
(7, 'n'),
(8, 'n'),
(9, 'n'),
(10, 'n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('nisa', 'nisa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `markers`
--

CREATE TABLE `markers` (
  `idlokasi` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text,
  `lat` varchar(100) DEFAULT NULL,
  `long` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `markers`
--

INSERT INTO `markers` (`idlokasi`, `nama`, `alamat`, `lat`, `long`) VALUES
(1, 'RSUD Ciamis', 'Jl. Rumah Sakit Jalan Rumah Sakit No.76 Ciamis', '-7.329589843749886', '	108.3594970703126');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mchatr/f`
--

CREATE TABLE `mchatr/f` (
  `id_mchatrf` varchar(11) NOT NULL,
  `pertanyaan` varchar(300) NOT NULL,
  `y` varchar(5) NOT NULL,
  `n` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mchatr/f`
--

INSERT INTO `mchatr/f` (`id_mchatrf`, `pertanyaan`, `y`, `n`) VALUES
('1', 'Jika anda menunjuk sesuatu di ruangan, apakah anak anda melihatnya? (Misalnya, jika anda menunjuk hewan atau mainan, apakah anak anda melihat ke arah hewan atau mainan yang anda tunjuk?)', '1', '0'),
('10', 'Apakah anak anda memberikan respon jika namanya dipanggil? (Misalnya, apakah anak anda melihat, bicara atau bergumam, atau menghentikan apa yang sedang dilakukannya saat anda memanggil namanya)', '1', '0'),
('11', 'Saat anda tersenyum pada anak anda tersenyum balik?', 'yes', 'no'),
('12', 'Apakah anak anda pernah marah saat mendengar suara bising sehari-hari? (Misalnya, apakah anak anda berteriak atau menangis saat mendengar suara bising seperti vacuum cleaner atau musik keras)', '0', '1'),
('13', 'Apakah anak anda bisa berjalan?', '1', '0'),
('14', 'Apakah anak anda menatap mata anda saat anda bicara padanya, bermain bersamanya, atau saat memakaikan pakaian?', '1', '0'),
('15', 'Apakah anak anda mencoba meniru apa yang anda lakukan? (Misalnya, melambaikan tangan, tepuk tangan atau meniru saat anda membuat suara lucu)', '1', '0'),
('16', 'Jika anda memutar kepala untuk melihat sesuatu, apakah anak anda melihat sekeliling untuk melihat apa yang anda lihat?', '1', '0'),
('17', 'Apakah anak anda mencoba utuk membuat anda melihat kepadanya? (Misalnya, apakah anak anda melihat anda untuk dipuji atau berkata \"lihat\" atau \"lihat aku\")', '1', '0'),
('18', 'Apakah anak anda mengerti saat anda memintanya melakukan sesuatu? (Misalnya, jika anda tidak menunjuk, apakah anak anda mengerti kalimat \"letakkan buku itu di atas kursi\" atau \"ambilkan saya selimut\")', '1', '0'),
('19', 'Jika sesuatu yang baru terjadi, apakah anak anda menatap wajah anda untuk melihat perasaan anda tentang hal tersebut? (Misalnya, jika anak anda mendengar bunyi aneh atau lucu, atau melihat mainan baru, akankah dia menatap wajah anda?)', '1', '0'),
('2', 'Pernahkah anda berpikir bahwa anak anda tuli?', '0', '1'),
('20', 'Apakah anak anda menyukai aktivitas yang bergerak? (Misalnya, diayun-ayun atau dihentak-hentakkan pada lutut anda)', '1', '0'),
('3', 'Apakah anak anda pernah bermain pura-pura? (Misalnya, berpura-pura minum dari gelas kosong, berpura-pura berbicara menggunakan telepon, atau menyuapi boneka atau boneka binatang?)', '1', '0'),
('4', 'Apakah anak anda suka memanjat benda-benda? (Misalnya, furniture, alat-alat bermain, atau tangga)', '1', '0'),
('5', 'Apakah anak anda menggerakkan jari-jari tangannya dengan cara\r\nyang tidak biasa di dekat matanya? (Misalnya, apakah anak anda menggoyangkan jari dekat pada matanya?)', '0', '1'),
('6', 'Apakah anak anda pernah menunjuk dengan satu jari untuk meminta sesuatu atau untuk meminta tolong? (Misalnya, menunjuk makanan atau mainan yang jauh dari jangkauannya)', '1', '0'),
('7', 'Apakah anak anda pernah menunjuk dengan satu jari untuk menunjukkan sesuatu yang menarik pada anda? (Misalnya, menunjuk pada pesawat di langit atau truk besar di jalan)', '1', '0'),
('8', 'Apakah anak anda tertarik pada anak lain? (Misalnya, apakah anak anda memperhatikan anak lain, tersenyum pada mereka atau pergi ke arah mereka)', '1', '0'),
('9', 'Apakah anak anda pernah memperlihatkan suatu benda dengan membawa atau mengangkatnya kepada anda - tidak untuk minta tolong, hanya untuk berbagi? (Misalnya, memperlihatkan anda bunga, binatang atau truk mainan)', '1', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `iduser` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `mchatr` varchar(15) NOT NULL,
  `penyaring` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`iduser`, `nama`, `email`, `username`, `password`, `umur`, `mchatr`, `penyaring`) VALUES
(0, 'annisa', 'annisa@gmail.com', 'nisa', 'nisa', 12, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyaring`
--

CREATE TABLE `penyaring` (
  `id` int(12) NOT NULL,
  `penyaring` varchar(100) NOT NULL,
  `y` varchar(4) NOT NULL,
  `n` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyaring`
--

INSERT INTO `penyaring` (`id`, `penyaring`, `y`, `n`) VALUES
(1, 'Pada usia 12 bulan tidak mengoceh, atau menunjuk atau gerakan lainnya', '0', '1'),
(2, 'Tidak bermasalah dengan pendengaran / tidak tuli (setelah melakukan tes di THT)', '1', '0'),
(3, 'Anak sering maenggunakan bahasa yang tidak biasa dan sering melakukan pengulangan', '0', '1'),
(4, 'Anak tidak mampu menginisiasi dan mempertahankan pembicaraan', '0', '1'),
(5, 'Anak terlihat cuek atau tidak responsif', '0', '1'),
(6, 'Anak memiliki prilaku atau gestur yang tidak biasa dan berulang', '0', '1'),
(7, 'Anak memiliki minat yang sangat berlebih ( seperti menyusun benda-benda secara rapih dan berulang)', '0', '1'),
(8, 'Anak memiliki rutinitas khusus dan bila diganggu akan marah', '0', '1'),
(9, 'Anak tertarik pada objek / bagian dari suatu benda ( misalnya tertarik pada roda di mobil-mobilan)', '0', '1'),
(10, 'Ukuran kepala anak  di bawah normal atau di atas normal', '0', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jwbmchat_user`
--
ALTER TABLE `jwbmchat_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jwbpenyaring_user`
--
ALTER TABLE `jwbpenyaring_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jwb_mchatrf`
--
ALTER TABLE `jwb_mchatrf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jwb_penyaring`
--
ALTER TABLE `jwb_penyaring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`idlokasi`);

--
-- Indexes for table `mchatr/f`
--
ALTER TABLE `mchatr/f`
  ADD PRIMARY KEY (`id_mchatrf`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `penyaring`
--
ALTER TABLE `penyaring`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jwbmchat_user`
--
ALTER TABLE `jwbmchat_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `jwbpenyaring_user`
--
ALTER TABLE `jwbpenyaring_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jwb_penyaring`
--
ALTER TABLE `jwb_penyaring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `idlokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
