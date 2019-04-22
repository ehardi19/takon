-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2019 pada 19.47
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answer`
--

INSERT INTO `answer` (`answer_id`, `question_id`, `answer`, `timestamp`, `user_id`) VALUES
(1, 1, 'Justru yang ilmiah-ilmiah itu yang receh dan kemungkinan plagiatnya tinggi sob.\r\n\r\nSudah cukup sering saya membaca jawaban yang bikin mata berbinar-binar, argumen yang orgasmik, pemilihan kata yang mempesona, tidak lupa rujukan jurnal dan publikasi yang mentereng dan tutur bahasa yang membuat tetap dalam jiwa. Eh, tapi begitu dicek di gugel, ternyata copas. Hadeh.\r\n\r\nPengalaman pribadi, pendapat pribadi dan ehm, kisah percintaan itulah yang unik; datangnya langsung dari kehidupan orang per orang, mengalir wajar dan apa adanya seperti kehidupan itu sendiri.', '2019-04-22 15:45:44', 1),
(2, 2, 'Setelah mendengar penjelasan para astronom saat konferensi kemaren, menurut saya foto ini buram karena jarak teleskop ke pusat black hole untuk pengambilan foto black hole ini sangatlah jauh.\r\n\r\nMenurut astronom black hole berukuran 3 juta kali ukuran bumi, berjarak 500 juta triliun kilometer atau 55 tahun juta tahun cahaya dari bumi, dan massanya 6,5 milyar kali massa matahari. Dengan jarak sejauh itu sulit untuk mengambil foto yang jelas. Jika black hole tersebut berjarak dekat dengan bumi, black hole bisa melahap bumi dan planet lainnya karena pusarannya sangatlah kuat. Black hole di M87 ini ketika diamati masih aktif untuk melahap material di sekitarnya. Jika dilihat dari fotonya terlihat pusaran debu, gas, bintang dan cahaya tersedot ke dalam lubang hitam.\r\n\r\nWalaupun begitu kita adalah generasi yang beruntung karena bisa melihat bukti langsung dari salah satu teori Albert Einstein mengenai Black hole. Pastinya para astronom akan terus mengamati sampai mendapatkan foto black hole yang jelas.', '2019-04-22 15:49:12', 1),
(6, 2, 'Intinya sih gini. Hasil foto awalnya mencakup beberapa benda lain seperti galaksi, bintang, dll. Nah foto yang beredar adalah hasil crop dari foto tadi supaya lebih fokus ke lubang hitamnya', '2019-04-22 17:39:13', 2),
(7, 4, 'Segala hal yang sifatnya abstrak, tidak rutin, dan tidak berpola. Hal ini dikarenakan AI bekerja dengan menggunakan dataset dan mempelajari pola data tersebut untuk dilakukan aksi. Komputer juga mengalami kesulitan memahami konteks meskipun teknologi deep learning mulai memungkinkan adanya pembelajaran konteks.\r\n\r\nSebenarnya beberapa hal yg terkait kreativitas pun mulai dapat diikuti oleh AI sebagai contoh teknologi menggambar yang dikembangkan oleh Nvidia yakni gauGAN yang dapat mengenerate gambar detail dari doodle atau coret-coretan[1]\r\n\r\nBaca artikel berikut untuk lebih jelasnya “GAN 2.0: NVIDIA’s Hyperrealistic Face Generator” by Synced https://link.medium.com/JFzxC65CrV\r\n\r\nBahkan sudah ada AI yang dapat mengenerate cerita dan lukisan. Jadi pertanyaannya apkah mungkin ada pekerjaan yang tidak dapt digantikan AI?\r\n\r\nJawabannya mungkin pekerjaan yang mengharuskan tatap muka dengan manusia, baik itu pelayanan publik maupun jasa swasta. Tapi itu untuk sekarang kalau nanti… who knows', '2019-04-22 17:42:40', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `question`
--

INSERT INTO `question` (`question_id`, `question`, `timestamp`, `user_id`) VALUES
(1, 'Mengapa mayoritas pertanyaan dan jawaban di Quora Indonesia adalah soal kehidupan pribadi dan percintaan? Mengapa tidak seperti Quora internasional yang banyak membahas hal-hal yang bersifat lebih ilmiah atau historis?', '2019-04-22 15:44:56', 1),
(2, 'Kenapa foto asli lubang hitam sangatlah buram dan tidak jelas ?', '2019-04-22 15:48:35', 1),
(4, 'Di masa mendatang, apakah hal yang tidak mungkin digantikan oleh AI (Artificial Intelligence)?', '2019-04-22 17:41:18', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `phone`, `email`, `password`) VALUES
(1, 'Admin Admin', '081234567890', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Super', '', 'super@super.com', '1b3231655cebb7a1f783eddf27d254ca');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indeks untuk tabel `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
