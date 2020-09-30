-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2019 at 07:16 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE IF NOT EXISTS `diagnosa` (
  `kode_diagnosa` varchar(10) NOT NULL,
  `nama_diagnosa` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_diagnosa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`kode_diagnosa`, `nama_diagnosa`) VALUES
('I0001', 'Diabetes'),
('I0002', 'Nyeri - Nyeri');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kode_dokter` varchar(10) NOT NULL,
  `nama_dokter` varchar(50) DEFAULT NULL,
  `Jenis_kelamin` varchar(10) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `sepesialis` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` int(13) DEFAULT NULL,
  PRIMARY KEY (`kode_dokter`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kode_dokter`, `nama_dokter`, `Jenis_kelamin`, `tanggal_lahir`, `sepesialis`, `alamat`, `no_hp`) VALUES
('D0001', 'jakfar shodiq', 'Laki-laki', '2019-01-11', 'Jantung', 'Jalan Hang tua', 2147483647),
('D0002', 'Siti', 'Perempuan', '2019-01-14', 'Saraf', 'Jalan Sueharjo', 823765466);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `no_reges` varchar(10) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `umur` int(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `kepala_keluarga` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_diagnosa` varchar(10) NOT NULL,
  `kode_traphy` varchar(10) NOT NULL,
  `kode_perawat` varchar(10) NOT NULL,
  `kode_dokter` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`no_reges`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_reges`, `tanggal_daftar`, `nama_pasien`, `umur`, `jenis_kelamin`, `no_hp`, `kepala_keluarga`, `alamat`, `kode_diagnosa`, `kode_traphy`, `kode_perawat`, `kode_dokter`, `keterangan`) VALUES
('P0001', '2019-01-11', 'Bono', 12, 'Laki-laki', 2147483647, 'Harjo', 'Jalan Lingkungan', 'I0001', 'P0001', 'R0001', 'D0001', 'Tindak Lanjuti'),
('P0002', '2019-01-11', 'Kuci', 15, 'Perempuan', 876543216, 'Jasmin', 'jalan Hambatan', 'I0002', 'P0002', 'R0002', 'D0002', 'Lanjutkan'),
('P0003', '2019-01-11', 'Kuci', 15, 'Perempuan', 876543216, 'Jasmin', 'jalan Hambatan', 'I0002', 'P0002', 'R0002', 'D0002', 'Lanjutkan');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `kode_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`kode_pengguna`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`kode_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'jakfar', 'jakfar', '12345', 'admin'),
(2, 'jakfar', 'shodiq', '23456789', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE IF NOT EXISTS `perawat` (
  `kode_perawat` varchar(10) NOT NULL,
  `nama_perawat` varchar(50) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `sepesialis` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int(13) NOT NULL,
  PRIMARY KEY (`kode_perawat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`kode_perawat`, `nama_perawat`, `Jenis_kelamin`, `tanggal_lahir`, `sepesialis`, `alamat`, `no_hp`) VALUES
('R0001', 'Farhana', 'Perempuan', '2019-01-26', 'Bedah', 'Jalan Imam Bonjol', 823478756),
('R0002', 'Danti', 'Perempuan', '2019-01-24', 'Bedah', 'jalan Kenangan', 876543219);

-- --------------------------------------------------------

--
-- Table structure for table `traphy`
--

CREATE TABLE IF NOT EXISTS `traphy` (
  `kode_traphy` varchar(10) NOT NULL,
  `nama_traphy` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_traphy`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traphy`
--

INSERT INTO `traphy` (`kode_traphy`, `nama_traphy`) VALUES
('P0001', 'Kemo '),
('P0002', 'Suntik');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
