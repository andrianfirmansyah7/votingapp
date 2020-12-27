-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2020 pada 14.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilukm2021`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `id_calon` int(11) NOT NULL,
  `nama_calon_km` varchar(50) NOT NULL,
  `nama_calon_wakil` varchar(50) NOT NULL,
  `nomor_urut` int(11) NOT NULL,
  `foto_calon_km` varchar(50) NOT NULL,
  `foto_calon_wakil` varchar(50) NOT NULL,
  `visi` varchar(100) NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`id_calon`, `nama_calon_km`, `nama_calon_wakil`, `nomor_urut`, `foto_calon_km`, `foto_calon_wakil`, `visi`, `misi`) VALUES
(1, 'Ilham Bagus Sugiarto', 'Muhammad Fabio Virgiansyah', 1, 'IBE.jpg', 'FABS.jpg', 'Menjadikan kelas SI-43-05 menjadi kelas yang aktif, ceria, solid dan memiliki rasa persaudaraan kuat', '<br>1. Mendorong kegiatan makrab setiap setahun 2 kali <br>\r\n2. Mendorong gerakan belajar bersama <br>\r\n3. Mabar Valorant setiap hari <br>\r\n4. Mendorong komunikasi yang baik dan aktif dengan dosen'),
(2, 'R. Khalid Jati Junjunan S.B.P', 'Arif Raihan Alaudin', 2, 'JUN.jpg', 'ALA.jpg', 'Menjadikan kelas SI-43-05 menjadi kelas tersantuy dan tersolid', '<br>1. Mendorong teman-teman bermain game bersama sehari 2 kali <br>\r\n2. Uang kas Rp.1000 per hari <br>\r\n3. Menjadikan hari Minggu sebagai hari nugas bersama'),
(3, 'Muhammad Raihan Hadwirianto', 'Maarij Haritsah', 3, 'HAN.jpg', 'RIS.jpg', 'TUMPAH (Tekun, Ulet, Mengayomi, Peduli, AmanaH)', '1. Mendorong penerapan semangat TUMPAH <br>\r\n2. Mengembangkan semangat persatuan <br>\r\n3. Membangun portal aspirasi <br>\r\n4. Melakukan desentralisasi kekuasaan <br>\r\n5. Peduli terhadap sesama <br>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `nim` varchar(50) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`nim`, `nama_mahasiswa`, `email`, `token`) VALUES
('1202190032', 'Muhammad Hafizh Hidayatullah', 'hidayatulhafizh@gmail.com', 'SI90440032'),
('1202190081', 'Cindy Muhdiantini', 'cindymuhdiantini123@gmail.com', 'SI84220081'),
('1202190170', 'Fitri Adini Firdaus', 'fitriadini@gmail.com', 'SI43210170'),
('1202190183', 'Andrian Firmansyah', 'andrianfirmansyah6290@gmail.com', 'SI92380183'),
('1202190257', 'Muhammad Rafi Mulyawan', 'warmul@gmail.com', 'SI32120257'),
('1202194092', 'Nizur Adha', 'adhanizur@gmail.com', 'SI92134092'),
('1202194271', 'Naufal Aqil Himawan', 'himawannaufal@gmail.com', 'SI84214271'),
('1202194296', 'Jimmy', 'jimmyarsat@gmail.com', 'SI28324296'),
('1202194328', 'Barajati Syakurnia', 'barjat@gmail.com', 'SI92134328');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suara`
--

CREATE TABLE `suara` (
  `id` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `pilihan` varchar(2) NOT NULL,
  `tanggal_memilih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suara`
--

INSERT INTO `suara` (`id`, `nim`, `pilihan`, `tanggal_memilih`, `status`) VALUES
(1, '1202194271', '2', '2020-12-26 10:03:30', 1),
(2, '1202190183', '2', '2020-12-27 09:14:18', 1),
(3, '1202190170', '3', '2020-12-26 10:03:47', 0),
(4, '1202194328', '1', '2020-12-27 08:06:09', 1),
(5, '1202190257', '1', '2020-12-27 09:35:27', 1),
(6, '1202194296', '1', '2020-12-27 09:36:38', 1),
(7, '1202190032', '1', '2020-12-27 09:40:49', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_role` varchar(20) NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role`, `user_created_at`) VALUES
(1, 'Andrian Firmansyah', 'andrianfirmansyah6290@gmail.com', '$2y$10$Kv4IQV42fCxiYBq59FACdeI1UGXeCnw41O3a/GJvR7LXmDBdR6b/q', 'Super Admin', '2020-12-24 18:08:59'),
(4, 'Raden Mas Junan PTR', 'juna@fas.com', '$2y$10$q8r4rUr3KvwI1V/ghMEcLeG96x8fMl3GF918KzyVwG79nIEi2M3Si', 'Validator', '2020-12-26 17:41:49'),
(5, 'Jaske', 'jaske@gmail.com', '$2y$10$otG2EtJRAXqU9QFOHjgcreHm1wQFXiSkBxom.XPTJ5D5bL83vpIzu', 'Admin', '2020-12-26 18:16:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `suara`
--
ALTER TABLE `suara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
