-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2012 at 03:46 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobforcareer`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `no_fax` varchar(20) DEFAULT NULL,
  `email_cp` varchar(35) NOT NULL,
  `email_event` varchar(35) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `company`
--


-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE IF NOT EXISTS `jobpost` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_company` int(5) DEFAULT NULL,
  `title` varchar(35) NOT NULL,
  `deskripsi` text,
  `posisi` varchar(35) NOT NULL,
  `jenkel` char(1) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `umur_min` int(2) DEFAULT NULL,
  `umur_max` int(2) DEFAULT NULL,
  `min_pengalaman` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `jobpost`
--


-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE IF NOT EXISTS `jobseeker` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `id_jobseeker` varchar(8) NOT NULL,
  `jenis_identitas` char(25) NOT NULL,
  `no_identitas` char(25) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `hp` char(13) NOT NULL,
  `jenkel` char(6) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `universitas` varchar(35) NOT NULL,
  `jenjang` varchar(35) NOT NULL,
  `jurusan` varchar(35) NOT NULL,
  `nilai` varchar(35) NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `tahun_lulus` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_jobseeker` (`id_jobseeker`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`id`, `id_jobseeker`, `jenis_identitas`, `no_identitas`, `nama`, `hp`, `jenkel`, `tempat_lahir`, `tanggal_lahir`, `foto`, `universitas`, `jenjang`, `jurusan`, `nilai`, `tahun_masuk`, `tahun_lulus`) VALUES
(1, 's1s1s2', 'KTP', '12312312312', 'Saksomo Herwijaya', '812963891263', 'laki', 'yogya', '2012-03-14', NULL, 'pelita nusantara', 'S1', 'Teknik Informatika', '5', 2008, 2009);

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE IF NOT EXISTS `lamaran` (
  `id_company` int(10) DEFAULT NULL,
  `id_jobseeker` int(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `action` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lamaran`
--


-- --------------------------------------------------------

--
-- Table structure for table `member_card`
--

CREATE TABLE IF NOT EXISTS `member_card` (
  `id_barcode` varchar(10) NOT NULL DEFAULT '0',
  `id_jobseeker` varchar(8) NOT NULL,
  `id_petugas` int(10) NOT NULL,
  `isactive` char(5) NOT NULL,
  PRIMARY KEY (`id_barcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_card`
--

INSERT INTO `member_card` (`id_barcode`, `id_jobseeker`, `id_petugas`, `isactive`) VALUES
('0', '1', 1, 'true'),
('321312', 's1s1s2', 1, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman_kerja`
--

CREATE TABLE IF NOT EXISTS `pengalaman_kerja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `jobseeker_id` int(15) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `tempat_bekerja` varchar(35) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pengalaman_kerja`
--


-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `hp` char(13) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `user_id`, `nama`, `alamat`, `hp`) VALUES
(1, 1, '1', 'ashdkaslhdkla', '982689689'),
(7, 8, 'Nama Kasir', 'adasdasdasdasdas', '12312321'),
(8, 9, 'pintu masuk', 'pintumasukpintumasuk', '13213'),
(9, 10, 'nama pintu kleuar', 'ajsdghasgdasghdj', '21312');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(2) NOT NULL DEFAULT '0' COMMENT '1=SUPER ADMIN, 2=KASIR, 3=PINTU MASUK, 4=PINTU KLUAR, 5=Company',
  `registered` date DEFAULT NULL,
  `lastlogin` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `registered`, `lastlogin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '0000-00-00', NULL),
(8, 'kasir', 'c7911af3adbd12a035b289556d96470a', '2', '0000-00-00', NULL),
(9, 'pintumasuk', '79f9c52ab530b36ad8fd99bfeaf15ed6', '3', '0000-00-00', NULL),
(10, 'pintukelua', 'c2b44957678bf7687a81d1847d0b9427', '4', '0000-00-00', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
