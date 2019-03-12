-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2019 pada 15.51
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sevidb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` int(30) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `nama`, `nim`, `tanggal`) VALUES
(18, '', 0, '2019-03-05 15:23:57'),
(19, '', 0, '2019-03-05 15:48:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usia` int(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `biografi` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `website` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usia`, `nim`, `jurusan`, `biografi`, `gender`, `website`, `email`, `level`) VALUES
(4, 'saya', 'kamu', 0, '0', '', '', '', '', '', ''),
(48, 'sevi', 'a5c91c1c0807988e0938345f9c46a826', 18, '0903181823003', 'Sistem Informasi', 'hxlhgldf', 'Laki - Laki', 'www.google.com', 'sevi1@gmail.com', 'admin'),
(50, 'hamba', 'd3b134fa3908983cb6828229d9e76abf', 23, '09031281823055', 'Sistem Informasi', 'aku hamba allah', 'Laki - Laki', 'www.gmail.com', 'ok.mfep@gmail.com', 'admin'),
(51, 'hai', '57f842286171094855e51fc3a541c1e2', 18, '09031181823025', 'Sistem Informasi', '*', 'Perempuan', 'www.google.com', 'sevidian4@gmail.com', 'admin'),
(52, 'mao', '3fe8ebd7f5996651fa46c4aefe24b6af', 17, '09031181823025', 'Sistem Informasi', '...', 'Perempuan', 'www.google.com', 'sevidian4@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
