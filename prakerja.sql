-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Agu 2023 pada 18.37
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_swedish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_swedish_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8mb4_swedish_ci NOT NULL,
  `priority` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `message` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `received` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
