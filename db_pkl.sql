-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2022 pada 10.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id` int(11) NOT NULL,
  `NIS` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `seksi` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`id`, `NIS`, `nama`, `seksi`, `id_user`) VALUES
(1, '99221133', 'Mimi Hacti', 'Bank', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_presensi`
--

CREATE TABLE `tb_presensi` (
  `id` int(11) NOT NULL,
  `id_peserta` int(11) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `keterangan` tinyint(1) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(7) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`, `level`) VALUES
(1, 'zul', '356a192b7913b04c54574d18c28d46e6395428ab', 'admin'),
(3, 'mimi', '356a192b7913b04c54574d18c28d46e6395428ab', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_presensi`
--
ALTER TABLE `tb_presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
