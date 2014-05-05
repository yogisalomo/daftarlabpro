-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2014 at 12:11 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siontang`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE IF NOT EXISTS `blog_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(50) NOT NULL,
  `post_description` varchar(200) DEFAULT NULL,
  `post_content` longtext,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='The posts in blog' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`post_id`, `post_title`, `post_description`, `post_content`) VALUES
(1, 'Dummy1', 'It''s a dummy', 'This is a very great long dummy'),
(2, 'Dummy2', NULL, 'This is a very great dummy');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar_labpro`
--

CREATE TABLE IF NOT EXISTS `pendaftar_labpro` (
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nim` int(8) NOT NULL,
  `kota_lahir` varchar(30) NOT NULL,
  `provinsi_lahir` varchar(30) NOT NULL,
  `negara_lahir` varchar(30) NOT NULL,
  `tanggallahir` date NOT NULL,
  `nomor_hp` int(15) NOT NULL,
  `nilai_pti` varchar(2) NOT NULL,
  `nilai_alstrukdat` varchar(2) NOT NULL,
  `nilai_oop` varchar(2) NOT NULL,
  `apa_kasus` int(1) NOT NULL,
  `penjelasan_kasus` text,
  `skill_programming` text,
  `organisasi` text,
  `tentang_dosen` text NOT NULL,
  `punya_barang_1` varchar(100) NOT NULL,
  `punya_barang_2` varchar(100) NOT NULL,
  `punya_barang_3` varchar(100) NOT NULL,
  `punya_barang_4` varchar(100) NOT NULL,
  `punya_barang_5` varchar(100) NOT NULL,
  `punya_barang_6` varchar(100) NOT NULL,
  `punya_barang_7` varchar(100) NOT NULL,
  `punya_barang_8` varchar(100) NOT NULL,
  `punya_barang_9` varchar(100) NOT NULL,
  `punya_barang_10` varchar(100) NOT NULL,
  `punya_barang_11` varchar(100) NOT NULL,
  `punya_barang_12` varchar(100) NOT NULL,
  `punya_barang_13` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar_labpro`
--

INSERT INTO `pendaftar_labpro` (`email`, `nama_lengkap`, `nim`, `kota_lahir`, `provinsi_lahir`, `negara_lahir`, `tanggallahir`, `nomor_hp`, `nilai_pti`, `nilai_alstrukdat`, `nilai_oop`, `apa_kasus`, `penjelasan_kasus`, `skill_programming`, `organisasi`, `tentang_dosen`, `punya_barang_1`, `punya_barang_2`, `punya_barang_3`, `punya_barang_4`, `punya_barang_5`, `punya_barang_6`, `punya_barang_7`, `punya_barang_8`, `punya_barang_9`, `punya_barang_10`, `punya_barang_11`, `punya_barang_12`, `punya_barang_13`, `created_at`, `updated_at`) VALUES
('dummy@dummy.org', 'Manta', 13511003, 'asda', 'asdasd', 'asdad', '2014-05-05', 81111, 'A', 'A', 'A', 1, 'asdas', 'asdasd', 'asdasd', 'asdasd', 'as', 'asda', 'asda', '', '', '', 'asd', 'sda', 'asda', 'asda', 'asdad', 'asdas', 'asdas', '2014-05-03 02:59:40', '2014-05-03 02:59:40');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
