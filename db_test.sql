-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Sep 2020 pada 03.54
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--
CREATE DATABASE IF NOT EXISTS `db_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_test`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `common.diskusi`
--

DROP TABLE IF EXISTS `common.diskusi`;
CREATE TABLE `common.diskusi` (
  `BeginDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `RecordID` int(11) NOT NULL,
  `DiskusiID` int(11) NOT NULL,
  `Judul` text NOT NULL,
  `Deskripsi` text NOT NULL,
  `KategoriID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ModifiedBy` varchar(150) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `common.diskusi`
--

INSERT INTO `common.diskusi` (`BeginDate`, `EndDate`, `RecordID`, `DiskusiID`, `Judul`, `Deskripsi`, `KategoriID`, `UserID`, `ModifiedBy`, `ModifiedDate`) VALUES
('2020-09-01', '9999-12-12', 1, 1, 'Material untuk jembatan apa saja?', 'Di desa saya sedang akan dilaksanakan pembangunan jembatan untuk memperlancar ekonomi. Material apa saja yang dibutuhkan untuk membuat jembatan yang kokoh.', 1, 3, '3', '2020-09-01'),
('2020-09-02', '9999-12-12', 2, 2, 'Bagaimana cara bertahan dari Covid-19?', 'Saya sendiri harus pergi keluar untuk urusan pekerjaan. Apa yang harus saya lakukan agar terhindar dari penularan.', 2, 1, '1', '2020-09-02'),
('2020-09-03', '9999-12-12', 3, 3, 'Apa itu teknologi?', 'Untuk tugas sekolah saya', 3, 2, '2', '2020-09-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `common.kategori`
--

DROP TABLE IF EXISTS `common.kategori`;
CREATE TABLE `common.kategori` (
  `BeginDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `RecordID` int(11) NOT NULL,
  `KategoriID` int(11) NOT NULL,
  `NamaKategori` varchar(250) NOT NULL,
  `ModifiedBy` varchar(150) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `common.kategori`
--

INSERT INTO `common.kategori` (`BeginDate`, `EndDate`, `RecordID`, `KategoriID`, `NamaKategori`, `ModifiedBy`, `ModifiedDate`) VALUES
('2020-09-06', '9999-12-12', 1, 1, 'Jembatan', 'system', '2020-09-06'),
('2020-09-06', '9999-12-12', 2, 2, 'Kesehatan', 'system', '2020-09-06'),
('2020-09-06', '9999-12-12', 3, 3, 'Teknologi', 'system', '2020-09-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `common.user`
--

DROP TABLE IF EXISTS `common.user`;
CREATE TABLE `common.user` (
  `BeginDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `RecordID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `FullName` varchar(250) NOT NULL,
  `PhotoProfile` text NOT NULL,
  `ModifiedBy` varchar(150) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `common.user`
--

INSERT INTO `common.user` (`BeginDate`, `EndDate`, `RecordID`, `UserID`, `Username`, `Email`, `Password`, `FullName`, `PhotoProfile`, `ModifiedBy`, `ModifiedDate`) VALUES
('2020-09-06', '9999-12-12', 1, 1, 'pengusahaa', 'pengusaha@test.com', 'pengusahaa', 'Pengusaha A', '1.jpg', 'system', '2020-09-06'),
('2020-09-06', '9999-12-12', 2, 2, 'siswaa', 'siswa@test.com', 'siswaa', 'Siswa A', '2.jpg', 'system', '2020-09-06'),
('2020-09-06', '9999-12-12', 3, 3, 'doktora', 'doktor@test.com', 'doktora', 'Doktor A', '3.jpg', 'system', '2020-09-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relation.balasan`
--

DROP TABLE IF EXISTS `relation.balasan`;
CREATE TABLE `relation.balasan` (
  `BeginDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `RecordID` int(11) NOT NULL,
  `BalasID` int(11) NOT NULL,
  `Balasan` text NOT NULL,
  `JawabanID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ModifiedBy` varchar(150) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relation.balasan`
--

INSERT INTO `relation.balasan` (`BeginDate`, `EndDate`, `RecordID`, `BalasID`, `Balasan`, `JawabanID`, `UserID`, `ModifiedBy`, `ModifiedDate`) VALUES
('2020-09-05', '9999-12-12', 1, 1, 'Terbuat dari kayu', 1, 3, '3', '2020-09-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relation.jawaban`
--

DROP TABLE IF EXISTS `relation.jawaban`;
CREATE TABLE `relation.jawaban` (
  `BeginDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `RecordID` int(11) NOT NULL,
  `JawabanID` int(11) NOT NULL,
  `Jawaban` text NOT NULL,
  `DiskusiID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ModifiedBy` varchar(150) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relation.jawaban`
--

INSERT INTO `relation.jawaban` (`BeginDate`, `EndDate`, `RecordID`, `JawabanID`, `Jawaban`, `DiskusiID`, `UserID`, `ModifiedBy`, `ModifiedDate`) VALUES
('2020-09-04', '9999-12-12', 1, 1, 'Untuk jembatan yang akan dibuat, mau terbuat dari kayu atau semen?', 1, 1, '1', '2020-09-04'),
('2020-09-05', '9999-12-12', 2, 2, 'Maaf, tidak tau', 1, 2, '2', '2020-09-05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `common.diskusi`
--
ALTER TABLE `common.diskusi`
  ADD PRIMARY KEY (`RecordID`);

--
-- Indeks untuk tabel `common.kategori`
--
ALTER TABLE `common.kategori`
  ADD PRIMARY KEY (`RecordID`);

--
-- Indeks untuk tabel `common.user`
--
ALTER TABLE `common.user`
  ADD PRIMARY KEY (`RecordID`);

--
-- Indeks untuk tabel `relation.balasan`
--
ALTER TABLE `relation.balasan`
  ADD PRIMARY KEY (`RecordID`);

--
-- Indeks untuk tabel `relation.jawaban`
--
ALTER TABLE `relation.jawaban`
  ADD PRIMARY KEY (`RecordID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `common.diskusi`
--
ALTER TABLE `common.diskusi`
  MODIFY `RecordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `common.kategori`
--
ALTER TABLE `common.kategori`
  MODIFY `RecordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `common.user`
--
ALTER TABLE `common.user`
  MODIFY `RecordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `relation.balasan`
--
ALTER TABLE `relation.balasan`
  MODIFY `RecordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `relation.jawaban`
--
ALTER TABLE `relation.jawaban`
  MODIFY `RecordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
