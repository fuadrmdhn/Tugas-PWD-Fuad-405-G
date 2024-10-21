-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2024 pada 15.45
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `institution` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registration`
--

INSERT INTO `registration` (`id`, `email`, `nama`, `institution`, `country`, `address`) VALUES
(3, '2200018404@webmail.uad.ac.id', 'Ramarajasharifa G. E', 'UAD', 'Indonesia', 'Indramayu'),
(4, '2200018399@webmail.uad.ac.id', 'Adhitya Wira Yuda', 'UAD', 'Indonesia', 'Lampung'),
(5, '2200018405@webmail.uad.ac.id', 'Muhammad Fuad Ramadhan', 'UAD', 'Indonesia', 'Sragen'),
(8, 'bonjhol1004@gmail.com', 'Imam Muzaky', 'UTP', 'Indonesia', 'Sragen'),
(9, 'laskarbintang@gmail.com', 'Bintang Laskar Satriyo', 'UMY', 'Indonesia', 'Bandung'),
(10, 'dadens12@gmail.com', 'Dadens', 'ITB', 'Indonesia', 'Cianjur'),
(11, '2100023001@gmail.com', 'Ahmad Ali', 'UAD', 'Arab', 'Madinah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
