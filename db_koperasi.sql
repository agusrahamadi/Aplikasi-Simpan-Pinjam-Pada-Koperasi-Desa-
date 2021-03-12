-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mar 2020 pada 11.17
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_koperasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `a`
--

CREATE TABLE IF NOT EXISTS `a` (
  `id_peminjaman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_admin`, `status`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `noktp` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `penghasilan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `alamat`, `no_hp`, `password`, `noktp`, `pekerjaan`, `penghasilan`) VALUES
('UJKS-001', 'AMIN NUR RAIS', 'TEGAL', '08999199451', 'e10adc3949ba59abbe56e057f20f883e', '224524525252525', 'Petani', '2000000'),
('UJKS-002', 'EKA NOVIATUN K', 'TEGAL', '088888888', 'e10adc3949ba59abbe56e057f20f883e', '224524525252525', 'Petani', '2000000'),
('UJKS-003', 'DEWI WULANDARI', 'ALAMAT', '08999199451', 'e10adc3949ba59abbe56e057f20f883e', '224524525252525', 'Petani', '2000000'),
('UJKS-004', 'DENNY ANDREANOR', 'KANDANGAN', '087771666554', 'e10adc3949ba59abbe56e057f20f883e', '4746476476647476', 'BUPATI', '7000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `angsuran`
--

CREATE TABLE IF NOT EXISTS `angsuran` (
  `id_angsuran` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_angsuran` date NOT NULL,
  `id_peminjaman` varchar(30) NOT NULL,
  `id_anggota` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `perbulan` float NOT NULL,
  `angsuran_ke` int(11) NOT NULL,
  PRIMARY KEY (`id_angsuran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data untuk tabel `angsuran`
--

INSERT INTO `angsuran` (`id_angsuran`, `tgl_angsuran`, `id_peminjaman`, `id_anggota`, `username`, `perbulan`, `angsuran_ke`) VALUES
(97, '2020-03-20', 'UJKS-004-1', 'UJKS-004', 'admin', 833000, 1),
(98, '2020-03-20', 'UJKS-004-1', 'UJKS-004', 'admin', 833000, 2),
(99, '2020-03-20', 'UJKS-004-1', 'UJKS-004', 'admin', 833000, 3),
(100, '2020-03-20', 'UJKS-004-1', 'UJKS-004', 'admin', 833000, 4),
(101, '2020-03-20', 'UJKS-004-1', 'UJKS-004', 'admin', 833000, 5),
(102, '2020-03-20', 'UJKS-004-1', 'UJKS-004', 'admin', 833000, 6),
(103, '2020-03-20', 'UJKS-002-1', 'UJKS-002', 'admin', 555000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `angsuran_a`
--

CREATE TABLE IF NOT EXISTS `angsuran_a` (
  `id_angsuran_a` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_angsuran_a` date NOT NULL,
  `id_peminjaman_a` varchar(30) NOT NULL,
  `id_anggota` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `perbulan_a` float NOT NULL,
  `angsuran_ke` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `nama_a` varchar(30) NOT NULL,
  `merek` varchar(30) NOT NULL,
  PRIMARY KEY (`id_angsuran_a`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data untuk tabel `angsuran_a`
--

INSERT INTO `angsuran_a` (`id_angsuran_a`, `tgl_angsuran_a`, `id_peminjaman_a`, `id_anggota`, `username`, `perbulan_a`, `angsuran_ke`, `type`, `nama_a`, `merek`) VALUES
(29, '2020-03-20', 'UJKS-002-A1', 'UJKS-002', 'admin', 2603000, 1, 'G-600', 'Traktor', 'quick'),
(30, '2020-03-20', 'UJKS-002-A1', 'UJKS-002', 'admin', 2603000, 2, 'G-600', 'Traktor', 'quick'),
(31, '2020-03-20', 'UJKS-002-A1', 'UJKS-002', 'admin', 2603000, 3, 'G-600', 'Traktor', 'quick'),
(32, '2020-03-20', 'UJKS-002-A1', 'UJKS-002', 'admin', 2603000, 4, 'G-600', 'Traktor', 'quick'),
(33, '2020-03-20', 'UJKS-002-A1', 'UJKS-002', 'admin', 2603000, 5, 'G-600', 'Traktor', 'quick'),
(34, '2020-03-20', 'UJKS-002-A1', 'UJKS-002', 'admin', 2603000, 6, 'G-600', 'Traktor', 'quick'),
(35, '2020-03-20', 'UJKS-004-A1', 'UJKS-004', 'admin', 70000, 1, 'M-328', 'Mesin Potong Rumput', 'Moris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cicilan`
--

CREATE TABLE IF NOT EXISTS `cicilan` (
  `id_cicilan` int(11) NOT NULL AUTO_INCREMENT,
  `peminjaman` float NOT NULL,
  `cicilan` enum('6','12','18','24') NOT NULL,
  `perbulan` float NOT NULL,
  PRIMARY KEY (`id_cicilan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data untuk tabel `cicilan`
--

INSERT INTO `cicilan` (`id_cicilan`, `peminjaman`, `cicilan`, `perbulan`) VALUES
(16, 5000000, '6', 900000),
(17, 5000000, '12', 750000),
(18, 5000000, '18', 500000),
(34, 5000000, '24', 300000),
(35, 10000000, '6', 833000),
(36, 10000000, '12', 555000),
(37, 10000000, '18', 416000),
(38, 10000000, '24', 166000),
(39, 15000000, '6', 2500000),
(40, 15000000, '12', 1250000),
(41, 15000000, '18', 833000),
(42, 15000000, '24', 625000),
(43, 20000000, '6', 3330000),
(44, 20000000, '12', 1666000),
(45, 20000000, '18', 1111000),
(46, 20000000, '24', 833000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cicilan_a`
--

CREATE TABLE IF NOT EXISTS `cicilan_a` (
  `id_cicilan_a` int(11) NOT NULL AUTO_INCREMENT,
  `peminjaman_a` float NOT NULL,
  `cicilan_a` enum('6','12','18','24') NOT NULL,
  `perbulan_a` float NOT NULL,
  `type` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `muka` float NOT NULL,
  PRIMARY KEY (`id_cicilan_a`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `cicilan_a`
--

INSERT INTO `cicilan_a` (`id_cicilan_a`, `peminjaman_a`, `cicilan_a`, `perbulan_a`, `type`, `nama`, `merek`, `muka`) VALUES
(13, 940000, '6', 120000, 'M-328', 'Mesin Potong Rumput', 'Moris', 50000),
(14, 940000, '12', 70000, 'M-328', 'Mesin Potong Rumput', 'Moris', 50000),
(15, 940000, '18', 55500, 'M-328', 'Mesin Potong Rumput', 'Moris', 50000),
(16, 940000, '24', 40000, 'M-328', 'Mesin Potong Rumput', 'Moris', 50000),
(17, 1485000, '6', 272250, 'Emax 32n', 'Mesin Potong Rumput Dorong', 'Lawnmover', 200000),
(18, 1485000, '12', 136125, 'Emax 32n', 'Mesin Potong Rumput Dorong', 'Lawnmover', 200000),
(19, 1485000, '18', 90750, 'Emax 32n', 'Mesin Potong Rumput Dorong', 'Lawnmover', 200000),
(20, 1485000, '24', 60250, 'Emax 32n', 'Mesin Potong Rumput Dorong', 'Lawnmover', 200000),
(21, 22000000, '6', 2603000, 'G-600', 'Traktor', 'quick', 1000000),
(22, 22000000, '12', 1933000, 'G-600', 'Traktor', 'quick', 1000000),
(23, 22000000, '18', 1288000, 'G-600', 'Traktor', 'quick', 1000000),
(24, 22000000, '24', 966000, 'G-600', 'Traktor', 'quick', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
  `id_lowongan` int(11) NOT NULL AUTO_INCREMENT,
  `lowongan` varchar(100) NOT NULL,
  `status` enum('enable','disable') NOT NULL,
  PRIMARY KEY (`id_lowongan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `lowongan`, `status`) VALUES
(1, 'Markom', 'disable'),
(2, 'BCC', 'disable'),
(3, 'BEC', 'disable'),
(4, 'LPPM', 'enable'),
(5, 'ADM', 'disable'),
(16, 'Marketing', 'enable'),
(17, 'Admin', 'enable');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` varchar(30) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `id_anggota` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `peminjaman` float NOT NULL,
  `cicilan` enum('6','12','18','24') NOT NULL,
  `perbulan` float NOT NULL,
  `ket` enum('LUNAS','BELUM') NOT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_peminjaman`, `id_anggota`, `username`, `peminjaman`, `cicilan`, `perbulan`, `ket`) VALUES
('UJKS-002-1', '2020-03-20', 'UJKS-002', 'admin', 10000000, '12', 555000, 'BELUM'),
('UJKS-004-1', '2020-03-20', 'UJKS-004', 'admin', 10000000, '6', 833000, 'LUNAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_a`
--

CREATE TABLE IF NOT EXISTS `peminjaman_a` (
  `id_peminjaman_a` varchar(30) NOT NULL,
  `tgl_peminjaman_a` date NOT NULL,
  `id_anggota` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `peminjaman_a` float NOT NULL,
  `cicilan_a` enum('6','12','18','24') NOT NULL,
  `perbulan_a` float NOT NULL,
  `ket` enum('LUNAS','BELUM') NOT NULL,
  `type` varchar(50) NOT NULL,
  `nama_a` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  PRIMARY KEY (`id_peminjaman_a`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman_a`
--

INSERT INTO `peminjaman_a` (`id_peminjaman_a`, `tgl_peminjaman_a`, `id_anggota`, `username`, `peminjaman_a`, `cicilan_a`, `perbulan_a`, `ket`, `type`, `nama_a`, `merek`) VALUES
('UJKS-002-A1', '2020-03-20', 'UJKS-002', 'admin', 22000000, '6', 2603000, 'LUNAS', 'G-600', 'Traktor', 'quick'),
('UJKS-004-A1', '2020-03-20', 'UJKS-004', 'admin', 940000, '12', 70000, 'BELUM', 'M-328', 'Mesin Potong Rumput', 'Moris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saldo`
--

CREATE TABLE IF NOT EXISTS `saldo` (
  `id_saldo` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` enum('simpan','pinjam','kredit') NOT NULL,
  `username` varchar(25) NOT NULL,
  `id_anggota` varchar(30) NOT NULL,
  `tgl_saldo` datetime NOT NULL,
  `debet_perusahaan` float NOT NULL,
  `kridit_perusahaan` float NOT NULL,
  `saldo_perusahaan` float NOT NULL,
  `ket_saldo` text NOT NULL,
  PRIMARY KEY (`id_saldo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=204 ;

--
-- Dumping data untuk tabel `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `jenis`, `username`, `id_anggota`, `tgl_saldo`, `debet_perusahaan`, `kridit_perusahaan`, `saldo_perusahaan`, `ket_saldo`) VALUES
(185, 'simpan', 'admin', 'UJKS-001', '2020-03-20 05:54:37', 0, 50000000, 50000000, 'DEBET DARI AKUN UJKS-001'),
(186, 'pinjam', 'admin', 'UJKS-004', '2020-03-20 05:56:18', 10000000, 0, 40000000, 'PINJAM'),
(187, 'pinjam', 'admin', 'UJKS-002', '2020-03-20 05:56:30', 10000000, 0, 30000000, 'PINJAM'),
(188, 'pinjam', 'admin', 'UJKS-004', '2020-03-20 05:56:45', 0, 833000, 30833000, 'ANGSURAN KE 1 DARI ID PEMINJAMAN UJKS-004-1'),
(189, 'pinjam', 'admin', 'UJKS-004', '2020-03-20 05:56:49', 0, 833000, 31666000, 'ANGSURAN KE 2 DARI ID PEMINJAMAN UJKS-004-1'),
(190, 'pinjam', 'admin', 'UJKS-004', '2020-03-20 05:56:52', 0, 833000, 32499000, 'ANGSURAN KE 3 DARI ID PEMINJAMAN UJKS-004-1'),
(191, 'pinjam', 'admin', 'UJKS-004', '2020-03-20 05:56:57', 0, 833000, 33332000, 'ANGSURAN KE 4 DARI ID PEMINJAMAN UJKS-004-1'),
(192, 'pinjam', 'admin', 'UJKS-004', '2020-03-20 05:56:59', 0, 833000, 34165000, 'ANGSURAN KE 5 DARI ID PEMINJAMAN UJKS-004-1'),
(193, 'pinjam', 'admin', 'UJKS-004', '2020-03-20 05:57:03', 0, 833000, 34998000, 'ANGSURAN KE 6 DARI ID PEMINJAMAN UJKS-004-1'),
(194, 'pinjam', 'admin', 'UJKS-002', '2020-03-20 05:57:19', 0, 555000, 35553000, 'ANGSURAN KE 1 DARI ID PEMINJAMAN UJKS-002-1'),
(195, 'pinjam', 'admin', 'UJKS-002', '2020-03-20 05:57:36', 22000000, 0, 13553000, 'PINJAM'),
(196, 'pinjam', 'admin', 'UJKS-004', '2020-03-20 05:58:00', 940000, 0, 12613000, 'PINJAM'),
(197, 'kredit', 'admin', 'UJKS-002', '2020-03-20 05:58:15', 0, 2603000, 15216000, 'ANGSURAN KE 1 DARI ID PEMINJAMAN UJKS-002-A1'),
(198, 'kredit', 'admin', 'UJKS-002', '2020-03-20 05:58:19', 0, 2603000, 17819000, 'ANGSURAN KE 2 DARI ID PEMINJAMAN UJKS-002-A1'),
(199, 'kredit', 'admin', 'UJKS-002', '2020-03-20 05:58:21', 0, 2603000, 20422000, 'ANGSURAN KE 3 DARI ID PEMINJAMAN UJKS-002-A1'),
(200, 'kredit', 'admin', 'UJKS-002', '2020-03-20 05:58:24', 0, 2603000, 23025000, 'ANGSURAN KE 4 DARI ID PEMINJAMAN UJKS-002-A1'),
(201, 'kredit', 'admin', 'UJKS-002', '2020-03-20 05:58:27', 0, 2603000, 25628000, 'ANGSURAN KE 5 DARI ID PEMINJAMAN UJKS-002-A1'),
(202, 'kredit', 'admin', 'UJKS-002', '2020-03-20 05:58:30', 0, 2603000, 28231000, 'ANGSURAN KE 6 DARI ID PEMINJAMAN UJKS-002-A1'),
(203, 'kredit', 'admin', 'UJKS-004', '2020-03-20 06:00:03', 0, 70000, 28301000, 'ANGSURAN KE 1 DARI ID PEMINJAMAN UJKS-004-A1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpan`
--

CREATE TABLE IF NOT EXISTS `simpan` (
  `id_simpan` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `id_anggota` varchar(30) NOT NULL,
  `tgl_simpan` datetime NOT NULL,
  `debet_anggota` float NOT NULL,
  `kridit_anggota` float NOT NULL,
  `saldo_anggota` float NOT NULL,
  `ket_simpan` text NOT NULL,
  PRIMARY KEY (`id_simpan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data untuk tabel `simpan`
--

INSERT INTO `simpan` (`id_simpan`, `username`, `id_anggota`, `tgl_simpan`, `debet_anggota`, `kridit_anggota`, `saldo_anggota`, `ket_simpan`) VALUES
(1, 'admin', '11161343', '2017-02-08 05:12:16', 5000, 0, 5000, 'DEBET'),
(10, 'admin', '11161343', '2017-02-09 04:33:31', 10000, 0, 15000, 'DEBET'),
(11, 'admin', '11161343', '2017-02-09 04:34:00', 0, 5000, 10000, 'KRIDIT'),
(14, 'admin', '11161344', '2017-02-09 04:38:53', 5000, 0, 5000, 'DEBET'),
(15, 'admin', '11161345', '2017-02-09 04:39:03', 10000, 0, 10000, 'DEBET'),
(16, 'admin', '11161343', '2017-02-09 04:39:21', 0, 10000, 0, 'KRIDIT'),
(17, 'admin', '11161344', '2017-02-13 13:28:44', 10000, 0, 15000, 'DEBET'),
(18, 'admin', '11161343', '2017-02-13 13:45:00', 50000, 0, 50000, 'DEBET'),
(19, 'admin', '11161344', '2017-02-14 04:58:01', 10000, 0, 25000, 'DEBET'),
(20, 'admin', '11161343', '2017-02-14 04:58:16', 0, 5000, 45000, 'KRIDIT'),
(21, 'admin', '11161343', '2017-02-14 05:04:34', 0, 40000, 5000, 'KRIDIT'),
(22, 'admin', '11161343', '2017-02-14 05:04:52', 10000, 0, 15000, 'DEBET'),
(23, 'admin', '11161343', '2017-02-14 05:05:15', 10000, 0, 25000, 'DEBET'),
(24, 'admin', '11161345', '2017-02-14 05:05:23', 5000, 0, 15000, 'DEBET'),
(25, 'admin', '11161344', '2017-02-14 05:05:31', 10000, 0, 35000, 'DEBET'),
(26, 'admin', '11161343', '2020-03-12 03:41:10', 0, 4000, 21000, 'KRIDIT'),
(27, 'admin', '11161343', '2020-03-12 03:41:23', 30000, 0, 51000, 'DEBET'),
(28, 'admin', '11161343', '2020-03-12 03:44:00', 55555, 0, 106555, 'DEBET'),
(29, 'admin', '11161343', '2020-03-12 03:47:43', 0, 10000, 96555, 'KRIDIT'),
(30, 'admin', '11161343', '2020-03-12 03:48:17', 0, 10000, 86555, 'KRIDIT'),
(31, 'admin', '11161343', '2020-03-12 03:49:37', 10000, 0, 96555, 'DEBET'),
(32, 'admin', '11161343', '2020-03-12 04:03:39', 100000, 0, 196555, 'DEBET'),
(33, 'admin', '11161343', '2020-03-12 04:04:00', 0, 100000, 96555, 'KRIDIT'),
(34, 'admin', '121212', '2020-03-12 04:25:20', 100000, 0, 100000, 'DEBET'),
(35, 'admin', '121212', '2020-03-12 04:26:35', 0, 100000, 0, 'KRIDIT'),
(36, 'admin', '11161343', '2020-03-13 11:38:08', 100000, 0, 196555, 'DEBET'),
(37, 'admin', '11161343', '2020-03-14 14:07:29', 1000000, 0, 1196560, 'DEBET'),
(38, 'admin', '11161343', '2020-03-14 14:07:35', 0, 1000000, 196560, 'KRIDIT'),
(39, 'admin', '141414', '2020-03-14 14:17:00', 5000, 0, 5000, 'DEBET'),
(40, 'admin', '11161343', '2020-03-14 14:17:17', 0, 6000, 190560, 'KRIDIT'),
(41, 'admin', '11161343', '2020-03-14 14:19:11', 0, 1, 190559, 'KRIDIT'),
(42, 'admin', '11161343', '2020-03-14 14:19:55', 1, 0, 190560, 'DEBET'),
(43, 'admin', '11161343', '2020-03-15 09:33:44', 1, 0, 190561, 'DEBET'),
(44, 'admin', '11161343', '2020-03-15 09:33:49', 0, 2, 190559, 'KRIDIT'),
(45, 'admin', 'UJKS-016', '2020-03-20 02:42:09', 100000, 0, 100000, 'DEBET'),
(46, 'admin', 'UJKS-016', '2020-03-20 03:20:55', 0, 5000, 95000, 'KRIDIT'),
(47, 'admin', 'UJKS-001', '2020-03-20 05:54:37', 50000000, 0, 50000000, 'DEBET');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
