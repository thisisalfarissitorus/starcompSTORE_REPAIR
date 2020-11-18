-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2020 at 01:11 AM
-- Server version: 10.3.25-MariaDB-0+deb10u1
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

CREATE DATABASE `starcomp`;

USE `starcomp`;

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

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id_kerusakan` varchar(6) NOT NULL,
  `topik_kerusakan` varchar(15) NOT NULL,
  `dskpsi_kerusakan` varchar(100) NOT NULL,
  `gmbr` varchar(100) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `tgl_konsul` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` varchar(10) NOT NULL,
  `jml_bayar` int(8) NOT NULL,
  `gmbr_bkti_transfer` varchar(100) NOT NULL,
  `status_bayar` varchar(15) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `gmbr_kerusakan` varchar(100) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `deskripsi_perbaikan` varchar(100) NOT NULL,
  `biaya` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `gmbr_produk` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `password` varchar(15) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`no_pesan`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
