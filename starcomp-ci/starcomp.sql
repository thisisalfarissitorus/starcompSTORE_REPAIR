-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2021 at 01:19 PM
-- Server version: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starcomp`
--
CREATE DATABASE starcomp;

USE starcomp;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `no_pesan` varchar(10) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `nama_depan` varchar(10) NOT NULL,
  `nama_belakang` varchar(10) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `hrg_produk` int(7) NOT NULL,
  `subtotal` int(8) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `id_perbaikan` varchar(10) NOT NULL,
  `biaya` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`no_pesan`, `id_user`, `nama_depan`, `nama_belakang`, `no_telp`, `email`, `username`, `id_produk`, `nm_produk`, `merk`, `hrg_produk`, `subtotal`, `tgl_pesan`, `id_perbaikan`, `biaya`) VALUES
('ORD00001', 'ADM01', 'admin', 'admin', '085103203100', 'admin@starcomp.com', 'admin', 'PRO0001', 'DP 40 DP 41 Black & Color Refill Ink', 'DataPrint', 40000, 120000, '2020-11-30', 'PER01', 39000);

-- --------------------------------------------------------

--
-- Table structure for table `gambar_bayar`
--

CREATE TABLE `gambar_bayar` (
  `id_gmbr_bayar` int(3) NOT NULL,
  `id_bayar` varchar(10) NOT NULL,
  `namafilebayar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar_bayar`
--

INSERT INTO `gambar_bayar` (`id_gmbr_bayar`, `id_bayar`, `namafilebayar`) VALUES
(1, 'BAY01', 'ATM_MANDIRI.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_kerusakan`
--

CREATE TABLE `gambar_kerusakan` (
  `id_gmbr_rusak` int(3) NOT NULL,
  `id_kerusakan` varchar(6) NOT NULL,
  `namafilerusak` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar_kerusakan`
--

INSERT INTO `gambar_kerusakan` (`id_gmbr_rusak`, `id_kerusakan`, `namafilerusak`) VALUES
(1, 'RSK001', 'ASUS1215P LCD.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_produk`
--

CREATE TABLE `gambar_produk` (
  `id_gmbr_prdk` int(3) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `namafileproduk` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar_produk`
--

INSERT INTO `gambar_produk` (`id_gmbr_prdk`, `id_produk`, `namafileproduk`) VALUES
(1, 'PRO0001', 'DATAPRINT.jpg'),
(2, 'PRO0002', 'flashdisk_toshiba_16gb_1505977895_80d7647c.jpg'),
(3, 'PRO0003', 'EPSON_INK.jpg'),
(4, 'PRO0004', 'flashdisk-kingston-32-flashdisk-harddisk-14344355.jpg'),
(5, 'PRO0005', 'DVD_R_GTPRO.jpeg'),
(6, 'PRO0006', 'JBL_BLUETOOTHSPEAKER.jpeg'),
(7, 'PRO0007', 'SIDU_FOLIOGARIS.jpeg'),
(8, 'PRO0008', 'VOTRE_KEYBOARD.jpeg'),
(9, 'PRO0009', 'STEADTLER_PENGHAPUS.jpg'),
(10, 'PRO0010', 'KENKO_RAUT.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_user`
--

CREATE TABLE `gambar_user` (
  `id_gmbr_user` int(3) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `namafile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar_user`
--

INSERT INTO `gambar_user` (`id_gmbr_user`, `id_user`, `namafile`) VALUES
(1, 'ADM01', 'find_user.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(7) NOT NULL,
  `nm_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`) VALUES
('ET001', 'Hiburan'),
('KT001', 'Alat Tulis Kantor'),
('PC001', 'Peralatan Komputer (Hiburan)'),
('PC002', 'Peralatan Komputer (Refill)'),
('PC003', 'Alat Penyimpanan Komputer'),
('PC004', 'Peralatan Komputer (Input)');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id_kerusakan` varchar(6) NOT NULL,
  `topik_kerusakan` varchar(15) NOT NULL,
  `dskpsi_kerusakan` varchar(200) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `tgl_konsul` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`id_kerusakan`, `topik_kerusakan`, `dskpsi_kerusakan`, `id_user`, `username`, `tgl_konsul`) VALUES
('RSK001', 'LCD RUSAK', 'Gan, kerusakan laptop aku,\r\n1. Laptop ASUS 121P LCD nya rusak. Tolong perbaiki laptop aku.\r\n2. Instal ulang ke Windows 8.1 64 bit. Datanya hapus semua.', 'ADM01', 'admin', '2021-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` varchar(10) NOT NULL,
  `jml_bayar` int(8) NOT NULL,
  `status_bayar` varchar(15) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `jml_bayar`, `status_bayar`, `tgl_bayar`) VALUES
('BAY01', 159000, 'TERBAYAR', '2020-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `no_pesan` varchar(10) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `subtotal` int(8) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `id_bayar` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `id_perbaikan` varchar(10) NOT NULL,
  `biaya` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`no_pesan`, `id_user`, `username`, `id_produk`, `jumlah`, `subtotal`, `tgl_pesan`, `id_bayar`, `tgl_bayar`, `id_perbaikan`, `biaya`) VALUES
('ORD00001', 'ADM01', 'admin', 'PRO0001', 3, 120000, '2020-11-30', 'BAY01', '2020-12-01', 'PER01', 39000);

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan_selesai`
--

CREATE TABLE `perbaikan_selesai` (
  `id_perbaikan` varchar(10) NOT NULL,
  `id_kerusakan` varchar(10) NOT NULL,
  `tgl_konsul` date NOT NULL,
  `tgl_perbaikan` date NOT NULL,
  `topik_kerusakan` varchar(20) NOT NULL,
  `gmbr_kerusakan` varchar(30) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `deskripsi_perbaikan` varchar(200) NOT NULL,
  `biaya` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perbaikan_selesai`
--

INSERT INTO `perbaikan_selesai` (`id_perbaikan`, `id_kerusakan`, `tgl_konsul`, `tgl_perbaikan`, `topik_kerusakan`, `gmbr_kerusakan`, `id_user`, `username`, `deskripsi_perbaikan`, `biaya`) VALUES
('PER01', 'RSK001', '2020-11-28', '2020-11-30', 'LCD RUSAK', 'ASUS1215P LCD.jpg', 'ADM01', 'admin', '1. Penggantian LCD = 29000, 2. Instal Ulang Windows 8.1 64-bit = 19000', 39000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(10) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `id_kategori` varchar(7) NOT NULL,
  `nm_kategori` varchar(30) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `stok_produk` int(3) NOT NULL,
  `hrg_produk` int(7) NOT NULL,
  `deskripsi` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nm_produk`, `id_kategori`, `nm_kategori`, `merk`, `stok_produk`, `hrg_produk`, `deskripsi`) VALUES
('PRO0001', 'DP 40 DP 41 Black & Color Refill Ink', 'PC002', 'Peralatan Komputer (Refill)', 'Data Print', 10, 30000, 'Data Print Tinta DP 40 DP 41 Black & Color Refill Ink adalah tinta refill yang digunakan untuk mengisi ulang tinta printer Anda. Tinta ini hanya dikhususkan untuk Printer Canon saja.'),
('PRO0002', 'Transmemory 16GB', 'PC003', 'Alat Penyimpanan Komputer', 'Toshiba', 20, 90000, 'Toshiba Transmemory 16GB adalah flashdisk 3.0 yang diproduksi oleh Toshiba yang berkapasitas 16 GB'),
('PRO0003', 'EPSON REFILL INK CMYK 664', 'PC002', 'Peralatan Komputer (Refill)', 'EPSON', 40, 50000, 'Epson INK CMYK adalah tinta refill untuk Epson Printer'),
('PRO0004', 'KINGSTON 32 GB', 'PC003', 'Alat Penyimpanan Komputer', 'KINGSTON', 20, 150000, 'Kingston 32 GB adalah flashdisk yang diproduksi oleh Kingston yang memiliki kapasitas 32 GB dengan teknologi USB 3.0'),
('PRO0005', 'DVD-R GT PRO', 'PC003', 'Alat Penyimpanan Komputer', 'GT PRO', 50, 5000, 'GT Pro memproduksi DVD dengan teknologi Read-only (sekali burning) denga kapasitas 4.07 GB.'),
('PRO0006', 'JBL Bluetooth Speaker', 'ET001', 'Hiburan', 'JBL', 10, 70000, 'JBL Bluetooth Speaker adalah produk speaker yang konektifitasnya melewati Bluetooth. Sangat jernih'),
('PRO0008', 'VOTRE QWERTY KEYBOARD', 'PC004', 'Peralatan Komputer (Input)', 'VOTRE', 6, 45000, 'VOTRE QWERTY KEYBOARD adalah produk keyboard yang mempunyai tata letak abjad QWERTY yang nyaman dan praktis digunakan\r\nuntuk pengetikan dokumen sehari-hari.'),
('PRO0009', 'STEADTLER RASOPLAST PENGHAPUS', 'KT001', 'Alat Tulis Kantor', 'STEADTLER', 10, 50000, 'Penghapus Steadtler adalah produk penghapus dari Steadtler untuk pensil 2B Steadtler.'),
('PRO0010', 'KENKO RAUTAN PENSIL', 'KT001', 'Alat Tulis Kantor', 'Kenko', 15, 15000, 'Kenko Rautan Pensil adalah rautan pensil yang diproduksi oleh Kenko. Produk tersebut selalu dipakai oleh pengguna pensil, teruta anak keci yang ingin meraut pensil mereka.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(5) NOT NULL,
  `nama_depan` varchar(10) NOT NULL,
  `nama_belakang` varchar(10) NOT NULL,
  `kota_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` varchar(6) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_depan`, `nama_belakang`, `kota_lahir`, `tgl_lahir`, `jns_kelamin`, `no_telp`, `email`, `username`, `password`, `hak_akses`) VALUES
('ADM01', 'admin', 'admin', 'pasuruan', '2020-11-11', 'pria', '085103203100', 'admin@starcomp.com', 'admin', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'admin'),
('USR01', 'Alfaris', 'Sitorus', 'Pasuruan', '2020-11-01', 'Pria', '081234567890', 'russelyalvarova12@outlook.com', 'alfaris', '48058e0c99bf7d689ce71c360699a14ce2f99774', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`no_pesan`);

--
-- Indexes for table `gambar_bayar`
--
ALTER TABLE `gambar_bayar`
  ADD PRIMARY KEY (`id_gmbr_bayar`);

--
-- Indexes for table `gambar_kerusakan`
--
ALTER TABLE `gambar_kerusakan`
  ADD PRIMARY KEY (`id_gmbr_rusak`);

--
-- Indexes for table `gambar_produk`
--
ALTER TABLE `gambar_produk`
  ADD PRIMARY KEY (`id_gmbr_prdk`);

--
-- Indexes for table `gambar_user`
--
ALTER TABLE `gambar_user`
  ADD PRIMARY KEY (`id_gmbr_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`no_pesan`);

--
-- Indexes for table `perbaikan_selesai`
--
ALTER TABLE `perbaikan_selesai`
  ADD PRIMARY KEY (`id_perbaikan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar_bayar`
--
ALTER TABLE `gambar_bayar`
  MODIFY `id_gmbr_bayar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gambar_kerusakan`
--
ALTER TABLE `gambar_kerusakan`
  MODIFY `id_gmbr_rusak` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gambar_produk`
--
ALTER TABLE `gambar_produk`
  MODIFY `id_gmbr_prdk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gambar_user`
--
ALTER TABLE `gambar_user`
  MODIFY `id_gmbr_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
