-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 07 Des 2022 pada 05.23
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarpras`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `status`) VALUES
(1, 'Irul Huda', 'irulhuda@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `ruang_id` int(11) DEFAULT NULL,
  `kode_inventaris` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `bahan` varchar(255) DEFAULT NULL,
  `tahun_pembelian` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `rusak` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `ruang_id`, `kode_inventaris`, `nama_barang`, `bahan`, `tahun_pembelian`, `jumlah`, `rusak`, `status`) VALUES
(1, 10, 'SMKSABILULMUTTAQIN/RG-MG', 'MEJA GURU', 'kayu', 2015, 10, 0, 'Baik'),
(2, 10, 'SMKSABILULMUTTAQIN/RG-KRSG', 'KURSI GURU', 'kayu', 2015, 10, 0, 'Baik'),
(3, 10, 'SMKSABILULMUTTAQIN/RG-LK', 'LOKER KAYU', 'kayu', 2015, 1, 0, 'BAIK'),
(4, 10, 'SMKSABILULMUTTAQIN/RG-LMR', 'LEMARI', 'kayu', 2013, 2, 1, 'Rusak Ringan'),
(5, 10, 'SMKSABILULMUTTAQIN/RG-PI', 'PAPAN INFORMASI', 'kayu', 2014, 1, 0, 'Baik'),
(6, 10, 'SMKSABILULMUTTAQIN/RG-LE', 'LEMARI ETALASE', 'kaca', 2019, 1, 0, 'BAIK'),
(7, 10, 'SMKSABILULMUTTAQIN/RG-KT', 'KURSI TAMU', 'kayu', 2017, 4, 1, 'Rusak Ringan'),
(8, 10, 'SMKSABILULMUTTAQIN/RG-MT', 'MEJA TAMU', 'kayu', 2017, 1, 0, 'BAIK'),
(9, 10, 'SMKSABILULMUTTAQIN/RG-JD', 'JAM DINDING', 'kaca', 2017, 1, 0, 'Baik'),
(10, 10, 'SMKSABILULMUTTAQIN/RG-KA', 'KIPAS ANGIN', 'PLASTIK', 2017, 1, 0, 'Baik'),
(11, 11, 'SMKSABILULMUTTAQIN/RKS-MJ', 'MEJA', 'kayu', 2012, 1, 0, 'Baik'),
(12, 11, 'SMKSABILULMUTTAQIN/RKS-KRS', 'KURSI', 'kayu', 2012, 3, 0, 'BAIK'),
(13, 11, 'SMKSABILULMUTTAQIN/RKS-KA', 'KIPAS ANGIN', 'PLASTIK', 2013, 1, 0, 'Baik'),
(14, 11, 'SMKSABILULMUTTAQIN/RKS-LK', 'LEMARI KAYU', 'kayu', 2013, 2, 0, 'Baik'),
(15, 11, 'SMKSABILULMUTTAQIN/RKS-LB', 'LEMARI BESI', 'Besi', 2015, 1, 0, 'BAIK'),
(16, 11, 'SMKSABILULMUTTAQIN/RKS-KT', 'KURSI TAMU', 'kayu', 2014, 3, 0, 'BAIK'),
(17, 11, 'SMKSABILULMUTTAQIN/RKS-PPKKS', 'PAPAN PROGRAM KERJA KEPALA SEKOLAH', 'kayu', 2013, 1, 0, 'Baik'),
(18, 11, 'SMKSABILULMUTTAQIN/RKS-TS', 'TEMPAT SAMPAH', 'PLASTIK', 2019, 1, 0, 'BAIK'),
(19, 11, 'SMKSABILULMUTTAQIN/RKS-LPTP', 'LAPTOP', 'PLASTIK', 2017, 1, 0, 'BAIK'),
(20, 9, 'SMKSABILULMUTTAQIN/TU-MJK', 'MEJA', 'kayu', 2012, 2, 0, 'baik'),
(21, 9, 'SMKSABILULMUTTAQIN/TU-Mj', 'MEJA', 'kayu', 2012, 1, 0, 'Baik'),
(22, 9, 'SMKSABILULMUTTAQIN/TU-CPU', 'CPU', 'ALUMUNIUM', 2012, 1, 0, 'BAIK'),
(23, 9, 'SMKSABILULMUTTAQIN/TU-MNTR', 'MONITOR LCD', 'kaca', 2012, 1, 0, 'BAIK'),
(24, 9, 'SMKSABILULMUTTAQIN/TU-PNTR', 'PRINTER', 'ALUMUNIUM', 2012, 1, 0, 'BAIK'),
(25, 9, 'SMKSABILULMUTTAQIN/TU-LE', 'LEMARI ETALASE', 'kaca', 2013, 2, 1, 'Rusak Ringan'),
(26, 9, 'SMKSABILULMUTTAQIN/TU-BF', 'BOX FILE', 'PLASTIK', 2015, 10, 0, 'BAIK'),
(27, 9, 'SMKSABILULMUTTAQIN/TU-DGK', 'PAPAN DATA GURU DAN KAYAWAN', 'kayu', 2013, 2, 0, 'BAIK'),
(28, 9, 'SMKSABILULMUTTAQIN/TU-KA', 'KIPAS ANGIN', 'PLASTIK', 2014, 1, 0, 'BAIK'),
(29, 9, 'SMKSABILULMUTTAQIN/TU-LK', 'LEMARI KECIL', 'kayu', 2015, 1, 0, 'BAIK'),
(30, 7, 'SMKSABILULMUTTAQIN/RG-KRS', 'KURSI', 'kayu', 2014, 5, 0, 'baik'),
(31, 7, 'SMKSABILULMUTTAQIN/RG-MJ', 'MEJA', 'kayu', 2014, 5, 0, 'BAIK'),
(32, 7, 'SMKSABILULMUTTAQIN/RG-LE', 'LEMARI ETALASE', 'kaca', 2014, 2, 0, 'BAIK'),
(33, 7, 'SMKSABILULMUTTAQIN/RG-CPU', 'CPU', 'ALUMUNIUM', 2013, 4, 1, 'Rusak Ringan'),
(34, 7, 'SMKSABILULMUTTAQIN/RG-MNTR', 'MONITOR LCD', 'kaca', 2013, 5, 2, 'Rusak Berat'),
(35, 7, 'SMKSABILULMUTTAQIN/RG-MSE', 'MOUSE', 'PLASTIK', 2013, 10, 5, 'Rusak Berat'),
(36, 7, 'SMKSABILULMUTTAQIN/RG-KBYRD', 'KEYBOARD', 'PLASTIK', 2013, 8, 2, 'Rusak berat'),
(37, 7, 'SMKSABILULMUTTAQIN/RG-MMRY1', 'MEMORY 1', 'ALUMUNIUM', 2014, 2, 1, 'Rusak Ringan'),
(38, 7, 'SMKSABILULMUTTAQIN/RG-MMRY2', 'MEMORY 2', 'ALUMUNIUM', 2016, 5, 1, 'Rusak Ringan'),
(39, 7, 'SMKSABILULMUTTAQIN/RG-HDD1', 'HARDDISK', 'ALUMUNIUM', 2014, 3, 1, 'Rusak Ringan'),
(40, 8, 'SMKSABILULMUTTAQIN/RG-TKR1', 'Mesin Las listrik', 'Besi', 2013, 1, 0, 'baik'),
(41, 8, 'SMKSABILULMUTTAQIN/RG-TKR2', 'Lemari Alat', 'Kaca', 2013, 2, 0, 'BAIK'),
(42, 8, 'SMKSABILULMUTTAQIN/RG-TKR3', 'Air Compresor ', 'Besi', 2014, 1, 0, 'BAIK'),
(43, 8, 'SMKSABILULMUTTAQIN/RG-TKR4', 'kunci shock', 'Besi', 2013, 4, 0, 'baik'),
(44, 8, 'SMKSABILULMUTTAQIN/RG-TKR5', 'Alat Tambal Ban', 'Besi', 2013, 2, 1, 'Rusak Ringan'),
(45, 8, 'SMKSABILULMUTTAQIN/RG-TKR6', 'Piston ring kompresor', 'Besi', 2014, 3, 1, 'Rusak Ringan'),
(46, 8, 'SMKSABILULMUTTAQIN/RG-TKR8', 'Komputer Pc', 'ALUMUNIUM', 2013, 1, 0, 'Baik'),
(47, 8, 'SMKSABILULMUTTAQIN/RG-TKR10', 'Impact Driver', 'Besi', 2015, 3, 0, 'Baik'),
(48, 8, 'SMKSABILULMUTTAQIN/RG-TKR11', 'Engine Toyota', 'Besi', 2015, 2, 0, 'Baik'),
(49, 8, 'SMKSABILULMUTTAQIN/RG-TKR12', 'Sistem Penggerak Roda (rem, Defferential, Poros)', 'Besi', 2014, 4, 2, 'Rusak Ringan'),
(50, 3, 'SMKSABILULMUTTAQIN/XIITKJ-MJ', 'MEJA', 'kayu', 2014, 20, 1, 'Rusak Berat'),
(51, 3, 'SMKSABILULMUTTAQIN/XIITKJ-KRS', 'KURSI', 'kayu', 2014, 20, 3, 'Rusak Ringan'),
(52, 3, 'SMKSABILULMUTTAQIN/XIITKJ-PT', 'PAPAN TULIS', 'kayu', 2014, 1, 0, 'Baik'),
(53, 3, 'SMKSABILULMUTTAQIN/XIITKJ-PIK', 'PAPAN INFORMASI KELAS', 'kayu', 2014, 1, 0, 'Baik'),
(54, 3, 'SMKSABILULMUTTAQIN/XIITKJ-LK', 'LEMARI KELAS', 'kayu', 2017, 1, 1, 'Rusak Ringan'),
(55, 3, 'SMKSABILULMUTTAQIN/XIITKJ-TS', 'TEMPAT SAMPAH', 'PLASTIK', 2019, 1, 1, 'Rusak Ringan'),
(56, 3, 'SMKSABILULMUTTAQIN/XIITKJ-KRSG', 'KURSI GURU', 'kayu', 2014, 1, 0, 'BAIK'),
(57, 3, 'SMKSABILULMUTTAQIN/XIITKJ-MJG', 'MEJA GURU', 'kayu', 2014, 1, 0, 'Baik'),
(58, 3, 'SMKSABILULMUTTAQIN/XIITKJ-GP', 'GAMBAR PAHLAWAN', 'Kertas', 2017, 5, 0, 'Baik'),
(59, 3, 'SMKSABILULMUTTAQIN/XIITKJ-TPLK', 'TAPLAK', 'KAIN', 2018, 1, 1, 'Rusak Ringan'),
(60, 6, 'SMKSABILULMUTTAQIN/XIITKR-MJ', 'MEJA', 'kayu', 2014, 20, 2, 'Rusak Ringan'),
(61, 6, 'SMKSABILULMUTTAQIN/XIITKR-KRS', 'KURSI', 'kayu', 2014, 20, 0, 'BAIK'),
(62, 6, 'SMKSABILULMUTTAQIN/XITKR-PIK', 'PAPAN INFORMASI KELAS', 'kayu', 2014, 1, 0, 'Baik'),
(63, 6, 'SMKSABILULMUTTAQIN/XIITKR-PT', 'PAPAN TULIS', 'kayu', 2014, 1, 0, 'baik'),
(64, 6, 'SMKSABILULMUTTAQIN/XIITKR-LK', 'LEMARI KELAS', 'kayu', 2017, 1, 1, 'Rusak Ringan'),
(65, 6, 'SMKSABILULMUTTAQIN/XIITKR-TS', 'TEMPAT SAMPAH', 'kayu', 2019, 1, 0, 'Baik'),
(66, 6, 'SMKSABILULMUTTAQIN/XIITKR-JD', 'JAM DINDING', 'kaca', 2019, 1, 0, 'BAIK'),
(67, 6, 'SMKSABILULMUTTAQIN/XIITKR-MJG', 'MEJA GURU', 'kayu', 2014, 1, 0, 'BAIK'),
(68, 6, 'SMKSABILULMUTTAQIN/XIITKR-KRSG', 'KURSI GURU', 'kayu', 2014, 1, 0, 'BAIK'),
(69, 6, 'SMKSABILULMUTTAQIN/XIITKR-GP', 'GAMBAR PAHLAWAN', 'Kertas', 2017, 5, 2, 'Rusak Ringan'),
(70, 2, 'SMKSABILULMUTTAQIN/XITKJ-MJ', 'MEJA', 'kayu', 2013, 20, 3, 'Rusak Berat'),
(71, 2, 'SMKSABILULMUTTAQIN/XITKJ-KRS', 'KURSI', 'kayu', 2013, 20, 4, 'Rusak Ringan'),
(72, 2, 'SMKSABILULMUTTAQIN/XITKJ-PIK', 'PAPAN INFORMASI KELAS', 'kayu', 2014, 1, 0, 'Baik'),
(73, 2, 'SMKSABILULMUTTAQIN/XITKJ-PT', 'PAPAN TULIS', 'kayu', 2013, 1, 1, 'Rusak Ringan'),
(74, 2, 'SMKSABILULMUTTAQIN/XITKJ-LK', 'LEMARI KELAS', 'kayu', 2017, 1, 0, 'Baik'),
(75, 2, 'SMKSABILULMUTTAQIN/XITKJ-TS', 'TEMPAT SAMPAH', 'PLASTIK', 2018, 1, 0, 'Baik'),
(76, 2, 'SMKSABILULMUTTAQIN/XITKJ-JD', 'JAM DINDING', 'Kaca', 2019, 1, 0, 'Baik'),
(77, 2, 'SMKSABILULMUTTAQIN/XITKJ-KRSG', 'KURSI GURU', 'kayu', 2013, 1, 0, 'BAIK'),
(78, 2, 'SMKSABILULMUTTAQIN/XITKJ-MJG', 'MEJA GURU', 'kayu', 2013, 1, 0, 'Baik'),
(79, 2, 'SMKSABILULMUTTAQIN/XITKJ-GP', 'GAMBAR PAHLAWAN', 'Kertas', 2017, 5, 1, 'Rusak Ringan'),
(80, 5, 'SMKSABILULMUTTAQIN/XITKR-MJ', 'MEJA', 'kayu', 2013, 23, 5, 'Rusak Ringan'),
(81, 5, 'SMKSABILULMUTTAQIN/XITKR-KRS', 'KURSI', 'kayu', 2013, 23, 4, 'Rusak Ringan'),
(82, 5, 'SMKSABILULMUTTAQIN/XITKR-PIK', 'PAPAN INFORMASI KELAS', 'kayu', 2014, 1, 0, 'Baik'),
(83, 5, 'SMKSABILULMUTTAQIN/XITKR-PT', 'PAPAN TULIS', 'kayu', 2013, 1, 1, 'Rusak Ringan'),
(84, 5, 'SMKSABILULMUTTAQIN/XITKR-LK', 'LEMARI KELAS', 'kayu', 2017, 1, 0, 'BAIK'),
(85, 5, 'SMKSABILULMUTTAQIN/XITKR-TS', 'TEMPAT SAMPAH', 'PLASTIK', 2019, 1, 0, 'Baik'),
(86, 5, 'SMKSABILULMUTTAQIN/XITKR-JD', 'JAM DINDING', 'kaca', 2019, 1, 0, 'Baik'),
(87, 5, 'SMKSABILULMUTTAQIN/XITKR-MJG', 'MEJA GURU', 'kayu', 2013, 1, 0, 'BAIK'),
(88, 5, 'SMKSABILULMUTTAQIN/XITKR-KRSG', 'KURSI GURU', 'kayu', 2013, 1, 0, 'BAIK'),
(89, 5, 'SMKSABILULMUTTAQIN/XITKR-GP', 'GAMBAR PAHLAWAN', 'Kertas', 2017, 5, 2, 'Rusak Berat'),
(90, 1, 'SMKSABILULMUTTAQIN/XTKJ-MJ', 'table', 'kayu', 2012, 25, 3, 'Rusak Ringan'),
(91, 1, 'SMKSABILULMUTTAQIN/XTKJ-KRS', 'KURSI', 'kayu', 2012, 25, 4, 'Rusak Ringan'),
(92, 1, 'SMKSABILULMUTTAQIN/XTKJ-PT', 'PAPAN TULIS', 'kayu', 2012, 1, 0, 'BAIK'),
(93, 1, 'SMKSABILULMUTTAQIN/XTKJ-PIK', 'PAPAN INFORMASI KELAS', 'kayu', 2014, 1, 0, 'BAIK'),
(94, 1, 'SMKSABILULMUTTAQIN/XTKJ-LK', 'LEMARI KELAS', 'kayu', 2017, 1, 0, 'BAIK'),
(95, 1, 'SMKSABILULMUTTAQIN/XTKJ-MJG', 'MEJA GURU', 'kayu', 2012, 1, 0, 'Baik'),
(96, 1, 'SMKSABILULMUTTAQIN/XTKJ-KRSG', 'KURSI GURU', 'kayu', 2012, 1, 0, 'BAIK'),
(97, 1, 'SMKSABILULMUTTAQIN/XTKJ-TS', 'TEMPAT SAMPAH', 'PLASTIK', 2018, 1, 1, 'Rusak Ringan'),
(98, 1, 'SMKSABILULMUTTAQIN/XTKJ-TPLK', 'TAPLAK', 'KAIN', 2018, 1, 1, 'Rusak Ringan'),
(99, 1, 'SMKSABILULMUTTAQIN/XTKJ-GP', 'GAMBAR PAHLAWAN', 'Kertas', 2017, 5, 2, 'Rusak Berat'),
(100, 4, 'SMKSABILULMUTTAQIN/XTKR-KRS', 'KURSI', 'kayu', 2012, 25, 5, 'Rusak Ringan'),
(101, 4, 'SMKSABILULMUTTAQIN/XTKR-MJ', 'MEJA', 'kayu', 2012, 25, 4, 'Rusak Ringan'),
(102, 4, 'SMKSABILULMUTTAQIN/XTKR-PIK', 'PAPAN INFORMASI KELAS', 'kayu', 2014, 1, 1, 'Rusak Ringan'),
(103, 4, 'SMKSABILULMUTTAQIN/XTKR-PT', 'PAPAN TULIS', 'kayu', 2012, 1, 0, 'BAIK'),
(104, 4, 'SMKSABILULMUTTAQIN/XTKR-LK', 'LEMARI KELAS', 'kayu', 2017, 1, 0, 'Baik'),
(105, 4, 'SMKSABILULMUTTAQIN/XTKR-TS', 'TEMPAT SAMPAH', 'PLASTIK', 2019, 1, 0, 'Baik'),
(106, 4, 'SMKSABILULMUTTAQIN/XTKR-JD', 'JAM DINDING', 'kaca', 2019, 1, 0, 'BAIK'),
(107, 4, 'SMKSABILULMUTTAQIN/XTKR-GP', 'GAMBAR PAHLAWAN', 'Kertas', 2017, 5, 3, 'Rusak Berat'),
(108, 4, 'SMKSABILULMUTTAQIN/XTKR-MJG', 'MEJA GURU', 'kayu', 2012, 1, 0, 'Baik'),
(109, 4, 'SMKSABILULMUTTAQIN/XTKR-KRSG', 'KURSI GURU', 'kayu', 2012, 1, 0, 'BAIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id` int(11) NOT NULL,
  `nama_ruang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id`, `nama_ruang`) VALUES
(1, 'X TKJ'),
(2, 'XI TKJ'),
(3, 'XII TKJ'),
(4, 'X TKR'),
(5, 'XI TKR'),
(6, 'XII TKR'),
(7, 'UPJ TKJ'),
(8, 'UPJ TKR'),
(9, 'TATA USAHA'),
(10, 'GURU'),
(11, 'KEPALA SEKOLAH');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_ruang_fk` (`ruang_id`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ruang_fk` FOREIGN KEY (`ruang_id`) REFERENCES `ruang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
