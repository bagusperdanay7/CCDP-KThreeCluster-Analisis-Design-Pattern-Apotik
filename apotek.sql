-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 04 Agu 2022 pada 23.40
-- Versi server: 8.0.27
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `doktercom`
--

DROP TABLE IF EXISTS `doktercom`;
CREATE TABLE IF NOT EXISTS `doktercom` (
  `idDokter` int NOT NULL AUTO_INCREMENT,
  `namaDokter` varchar(64) NOT NULL,
  `alamatDokter` varchar(100) NOT NULL,
  `namaPasien` varchar(64) NOT NULL,
  PRIMARY KEY (`idDokter`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `doktercom`
--

INSERT INTO `doktercom` (`idDokter`, `namaDokter`, `alamatDokter`, `namaPasien`) VALUES
(19, 'Alam JiwaBangsa', 'Singaperbangsa', 'Lala Kumalasari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

DROP TABLE IF EXISTS `obat`;
CREATE TABLE IF NOT EXISTS `obat` (
  `kodeObat` int NOT NULL AUTO_INCREMENT,
  `namaObat` varchar(50) NOT NULL,
  `jenisObat` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  PRIMARY KEY (`kodeObat`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kodeObat`, `namaObat`, `jenisObat`, `deskripsi`) VALUES
(1, 'Maag', 'perut', 'Digunakan untuk mules dan sakit perut'),
(5, 'paramex', 'flu', 'obat untuk flu dan sakit kepala'),
(6, 'Malkist', 'makanan', 'untuk sarapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

DROP TABLE IF EXISTS `pembeli`;
CREATE TABLE IF NOT EXISTS `pembeli` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jumlah_beli` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama`, `alamat`, `jumlah_beli`) VALUES
(1, 'robi', 'Bekasi', 2),
(2, 'Adi', 'Brkasi', 10),
(4, 'Asep minandar', 'Cikarang', 600),
(5, 'Sulaiman', 'kp. cap jaya rt 007/003 desa Lenggahsari kecamatan Cabangbungin kabupaten Bekasi', 100),
(6, 'Robi Nurhidayat', 'jakarta', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proxylogin`
--

DROP TABLE IF EXISTS `proxylogin`;
CREATE TABLE IF NOT EXISTS `proxylogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `proxylogin`
--

INSERT INTO `proxylogin` (`username`, `password`) VALUES
('bagus', 'c2b9cdc9dbbe6569b42b16de3de2f25b'),
('bagus', '9ac807dbc2df694054e4bcab80405b3c'),
('perdana', '9ac807dbc2df694054e4bcab80405b3c'),
('lala', 'dc0271053c027f3ac28884a17ac1f939'),
('perda', '85dc5775f06dc72f2ef19d558918489d'),
('bagusper', 'b5cc6e3faa949988b11fabd92fd9ae5e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `kodeSupplier` int NOT NULL AUTO_INCREMENT,
  `namaSupplier` varchar(64) NOT NULL,
  `AlamatSupplier` varchar(100) NOT NULL,
  PRIMARY KEY (`kodeSupplier`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`kodeSupplier`, `namaSupplier`, `AlamatSupplier`) VALUES
(1, 'Jaya Abadi', 'Perum Dago Indah'),
(3, 'Kimia Farma', 'Ir. H Juanda 600');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `harga_obat` float NOT NULL,
  `jumlah_beli` int NOT NULL,
  `diskon` float NOT NULL,
  `total_bayar` float NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_pembeli`, `nama_obat`, `jenis_obat`, `harga_obat`, `jumlah_beli`, `diskon`, `total_bayar`) VALUES
(2, 'adi', 'paramex', 'Anak', 2500, 100, 1250, 248750),
(3, 'amah', 'maag', 'Dewasa', 12000, 10, 1200, 10800),
(4, 'aji', 'batuk', 'Anak', 10000, 10, 5000, 5000),
(5, 'kai', 'anakonidis', 'Anak', 5000, 10, 2500, 47500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksisupplier`
--

DROP TABLE IF EXISTS `transaksisupplier`;
CREATE TABLE IF NOT EXISTS `transaksisupplier` (
  `kodeNota` int NOT NULL AUTO_INCREMENT,
  `tanggalTransaksi` date NOT NULL,
  `namaSupplier` varchar(64) NOT NULL,
  `namaBarang` varchar(64) NOT NULL,
  `jumlahBarang` int NOT NULL,
  `hargaBarang` float NOT NULL,
  `totalHarga` float NOT NULL,
  `kategoriSupplier` varchar(64) NOT NULL,
  PRIMARY KEY (`kodeNota`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `transaksisupplier`
--

INSERT INTO `transaksisupplier` (`kodeNota`, `tanggalTransaksi`, `namaSupplier`, `namaBarang`, `jumlahBarang`, `hargaBarang`, `totalHarga`, `kategoriSupplier`) VALUES
(2, '2022-08-03', 'PT Lama Mau Tidur ', 'Obat Batuk HERBAL', 100, 0, 0, ''),
(8, '2022-08-04', 'PT Lama Mau Tidur ', 'Obat Batuk HERBAL', 100, 12000, 1200000, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
