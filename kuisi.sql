-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 09:48 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kuisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `no` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `username`, `password`, `status`) VALUES
(1, 'Alvi', '202cb962ac59075b964b07152d234b70', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `datasetku`
--

CREATE TABLE IF NOT EXISTS `datasetku` (
  `id` int(100) NOT NULL,
  `jenis` varchar(300) NOT NULL,
  `kategori` varchar(700) NOT NULL,
  `keaktifan` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasetku`
--

INSERT INTO `datasetku` (`id`, `jenis`, `kategori`, `keaktifan`) VALUES
(1, 'Malam ini mau ketemu Jon Snow #GameofThrones', 'Menonton', 1),
(2, '#Udin yang bahagia', 'Travelling', 1),
(3, 'Setelah diskusi panjang dengan beberapa orang, akhirnya memutuskan untuk membuka gembok di akun ini.', 'Travelling', 1),
(4, '''Doaku untuk Audry dan semua orang yang menjadi korban bully" semangat terus hidup tidak berhenti karna semua', 'Menonton', 1),
(5, 'Menunggu', 'Travelling', 1),
(6, 'Jangan lewatkan', 'Menonton', 1),
(7, 'im still waiting u baby', 'Menonton', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_kategori`
--

CREATE TABLE IF NOT EXISTS `data_kategori` (
  `id` int(5) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keaktifan` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kategori`
--

INSERT INTO `data_kategori` (`id`, `kategori`, `keaktifan`) VALUES
(1, 'Travelling', 1),
(2, 'Menonton', 1);

-- --------------------------------------------------------

--
-- Table structure for table `grid`
--

CREATE TABLE IF NOT EXISTS `grid` (
  `id` int(11) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `Jarak` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grid`
--

INSERT INTO `grid` (`id`, `hobi`, `nama_pengguna`, `Jarak`) VALUES
(9, 'Olahraga', 'Ardhika Rafi Pratama', 0.0905749),
(10, 'Menonton', 'Adinda Thomas', 0.0924179),
(11, 'Membaca', 'Arditya Yudha Pratama', 0.0886943),
(12, 'Menonton', 'Safira Putri Pradani', 0.0883003),
(13, 'Olahraga', 'Aditya Raino', 0.0960218),
(14, 'Melukis', 'Raissa Almira R', 0.0852439),
(15, 'Olahraga', 'Ajil Ditto', 0.0957916),
(16, 'Travelling', 'Meita ayu damayanti', 0.0891195),
(17, 'Travelling', 'Agus Kuncoro', 0.0945664),
(18, 'Olahraga', 'Catur wahyu', 0.0905749),
(19, 'Membaca', 'Rezha Andhika Nuryanto Saputra', 0.0886943);

-- --------------------------------------------------------

--
-- Table structure for table `kategorii`
--

CREATE TABLE IF NOT EXISTS `kategorii` (
  `id` int(5) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keaktifan` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorii`
--

INSERT INTO `kategorii` (`id`, `kategori`, `keaktifan`) VALUES
(1, 'Olahraga', 1),
(2, 'Musikan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE IF NOT EXISTS `klasifikasi` (
  `id` int(250) NOT NULL,
  `stem` varchar(250) NOT NULL,
  `count` int(250) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `keaktifan` int(250) NOT NULL,
  `prediksi` varchar(250) NOT NULL,
  `fakta` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `stem`, `count`, `kategori`, `keaktifan`, `prediksi`, `fakta`) VALUES
(1, 'gak', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(2, 'tau', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(3, 'deh', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(4, 'ulang', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(5, 'tahun', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(6, 'ini', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(7, '1', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(8, 'februari', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(9, 'dapet', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(10, 'say', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(11, 'hbd', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(12, 'kamu', 3, 'Musikan', 1, 'Olahraga', 'Musikan'),
(13, 'apa', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(14, 'enggak', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(15, 'iya', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(16, 'p', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(17, 'baca', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(18, 'aku', 3, 'Musikan', 1, 'Olahraga', 'Musikan'),
(19, 'mau', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(20, 'base', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(21, 'url', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(22, 'ku', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(23, 'senang', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(24, 'manusia', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(25, 'lepas', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(26, 'salah', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(27, 'sengaja', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(28, 'asa', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(29, 'nah', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(30, 'karna', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(31, 'sama', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(32, 'lacobaaa', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(33, 'mandangin', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(34, 'jauh', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(35, 'aja', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(36, 'rasa', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(37, 'adem', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(38, 'relax', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(39, 'nada', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(40, 'pagi', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(41, 'hari', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(42, 'sedapppp', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(43, 'lg', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(44, 'kasmaran', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(45, 'senandung', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(46, 'irama', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(47, 'lagu', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(48, 'bunyi', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(49, 'bass', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(50, 'suka', 2, 'Musikan', 1, 'Olahraga', 'Musikan'),
(51, 'merdu', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(52, 'burung', 1, 'Musikan', 1, 'Olahraga', 'Musikan'),
(53, 'nyanyi', 1, 'Musikan', 1, 'Olahraga', 'Musikan');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasii`
--

CREATE TABLE IF NOT EXISTS `klasifikasii` (
  `id` int(250) NOT NULL,
  `stem` varchar(250) NOT NULL,
  `count` int(250) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `keaktifan` int(250) NOT NULL,
  `prediksi` varchar(250) NOT NULL,
  `fakta` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasifikasii`
--

INSERT INTO `klasifikasii` (`id`, `stem`, `count`, `kategori`, `keaktifan`, `prediksi`, `fakta`) VALUES
(1, 'soon', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(2, 'jalan', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(3, 'jepang', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(4, 'enak', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(5, 'kali', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(6, 'ya', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(7, 'aja', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(8, 'ketemu', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(9, 'naruto', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(10, 'kuy', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(11, 'ngabuburit', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(12, 'bareng', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(13, 'aa', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(14, 'mayan', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(15, 'nih', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(16, 'mumpung', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(17, 'panas', 3, 'Menonton', 1, 'Travelling', 'Menonton'),
(18, 'kaya', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(19, 'pas', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(20, 'liat', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(21, 'si', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(22, 'sama', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(23, 'orang', 4, 'Menonton', 1, 'Travelling', 'Menonton'),
(24, 'begini', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(25, 'ekspresi', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(26, 'pas', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(27, 'nyokap', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(28, 'ultah', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(29, 'manager', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(30, 'gw', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(31, 'lokasi', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(32, 'siapa', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(33, 'suka', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(34, 'main', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(35, 'squishi', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(36, 'gw', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(37, 'makan', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(38, 'banyak', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(39, 'terus', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(40, 'mekar', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(41, 'pipi', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(42, 'udah', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(43, 'anak', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(44, 'lumayan', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(45, 'emba', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(46, 'krudung', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(47, 'belakang', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(48, 'biar', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(49, 'bilang', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(50, 'couple', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(51, 'jadi', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(52, 'langsung', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(53, 'jepret', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(54, 'minum', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(55, 'ga', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(56, 'mahal', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(57, 'penting', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(58, 'foto', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(59, 'sedia', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(60, 'payung', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(61, 'hmmmm', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(62, 'ada', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(63, 'serah', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(64, 'lelah', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(65, 'abai', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(66, 'tetap', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(67, 'tahan', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(68, 'perempuan', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(69, 'sulit', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(70, 'laki-laki', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(71, 'cinta', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(72, 'tiap', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(73, 'kamu', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(74, 'rasa', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(75, 'untung', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(76, 'percaya', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(77, 'doa', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(78, 'ibu', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(79, 'didenger', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(80, 'makan', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(81, '2', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(82, 'jenis', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(83, 'enak', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(84, 'banget', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(85, 'lama', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(86, 'ngga', 3, 'Travelling', 1, 'Menonton', 'Travelling'),
(87, 'bayar', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(88, 'sendiri', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(89, '-', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(90, 'anonim', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(91, 'trust', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(92, 'your', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(93, 'hope', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(94, 'not', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(95, 'fear', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(96, 'saya', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(97, 'ga', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(98, 'habis', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(99, 'mikir', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(100, 'orangtuanya', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(101, 'anak', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(102, 'laki', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(103, 'yg', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(104, 'mukulin', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(105, 'itu', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(106, 'ngajarin', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(107, 'apa', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(108, 'rumah', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(109, 'merinding', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(110, 'ngeliat', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(111, 'orang', 4, 'Travelling', 1, 'Menonton', 'Travelling'),
(112, 'antusias', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(113, 'sambut', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(114, 'presiden', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(115, 'baru', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(116, 'sampai', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(117, 'kalau', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(118, 'diri', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(119, 'mati', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(120, 'masuk', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(121, 'surga', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(122, 'yasmine', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(123, 'the', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(124, 'movie', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(125, 'august', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(126, 'in', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(127, 'cema', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(128, 'met', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(129, 'milad', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(130, 'indonesia', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(131, 'moga', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(132, 'ya', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(133, 'man', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(134, 'u', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(135, 'kapan', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(136, 'maennya', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(137, 'jadwal', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(138, 'cuaca', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(139, 'londen', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(140, 'banget', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(141, 'konon', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(142, 'kata', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(143, 'sby', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(144, 'perintah', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(145, 'usut', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(146, 'dalang', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(147, 'walkout', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(148, 'fraksi', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(149, 'demokrat', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(150, 'paripurna', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(151, 'ruu', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(152, 'pilkada', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(153, 'indah', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(154, 'bagi', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(155, 'udah', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(156, 'liat', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(157, 'cerita', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(158, 'daki', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(159, 'gunung', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(160, 'salak', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(161, 'belum', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(162, 'dasar', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(163, 'risol', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(164, 'bocor', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(165, 'harepin', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(166, 'ada', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(167, 'mau', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(168, 'males', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(169, 'aku', 2, 'Travelling', 1, 'Menonton', 'Travelling'),
(170, 'latih', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(171, 'sendi', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(172, 'leher', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(173, 'jakarta', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(174, 'sendu', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(175, 'yang', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(176, 'sini', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(177, 'lihat', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(178, 'umur', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(179, 'bryan', 1, 'Travelling', 1, 'Menonton', 'Travelling'),
(180, 'ingat', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(181, 'bila', 4, 'Menonton', 1, 'Travelling', 'Menonton'),
(182, 'sunyi', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(183, 'rindu', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(184, 'jauh', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(185, 'paham', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(186, 'keliru', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(187, 'maaf', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(188, 'luka', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(189, 'jakarta', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(190, 'hari', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(191, 'ini', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(192, 'bagi', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(193, 'ngga', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(194, 'mutusin', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(195, 'pacar', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(196, 'karna', 2, 'Menonton', 1, 'Travelling', 'Menonton'),
(197, 'sayang', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(198, 'lain', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(199, 'punya', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(200, 'cara', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(201, 'baik', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(202, 'inget', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(203, 'diri', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(204, 'kita', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(205, 'ialah', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(206, 'pinjam', 1, 'Menonton', 1, 'Travelling', 'Menonton'),
(207, 'uang', 1, 'Menonton', 1, 'Travelling', 'Menonton');

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE IF NOT EXISTS `kuis` (
  `id` int(32) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `counter` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `id` int(100) NOT NULL,
  `jenis` varchar(300) NOT NULL,
  `kategori` varchar(700) NOT NULL,
  `keaktifan` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `jenis`, `kategori`, `keaktifan`) VALUES
(1, 'berat', 'Olahraga', 1),
(2, 'merubah', 'Olahraga', 1),
(3, 'gemas', 'Musikan', 1),
(4, 'ya rabb', 'Musikan', 1),
(5, 'pulang', 'Musikan', 1),
(6, 'Sore Malam', 'Olahraga', 1);

-- --------------------------------------------------------

--
-- Table structure for table `list_prediksi`
--

CREATE TABLE IF NOT EXISTS `list_prediksi` (
  `id` int(250) NOT NULL,
  `jenis` varchar(250) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `keaktifan` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_prediksi`
--

INSERT INTO `list_prediksi` (`id`, `jenis`, `kategori`, `keaktifan`) VALUES
(1, 'Soon Jalan jalan ke Jepang enak kali ya, kali aja ketemu Naruto', 'Menonton', 1),
(2, 'Beginilah ekspresi saya Pas nyokap ultah dan manager juga ultah tapi gw masih dilokasi,', 'Travelling', 1),
(3, 'siapa yang suka main SQUISHI??? nih mumpung gw lagi makan banyak terus memekar ini pipi udah kaya mainan anak', 'Menonton', 1),
(4, 'Minum aja, biar ga mahal, yang penting foto foto', 'Menonton', 1),
(5, 'Ada yang menyerah lelah saat diabaikan, ada yang tetap bertahan', 'Menonton', 1),
(6, 'Setiap kamu merasa beruntung, percayalah doa ibumu telah didenger', 'Travelling', 1),
(7, 'Trust your hope, not your fear', 'Travelling', 1),
(8, 'Sampai sampai dia merasa kalau dirinya mati, dia masuk surga', 'Travelling', 1),
(9, 'Cuacanya Londen banget...(konon katanya)', 'Menonton', 1),
(10, 'gak tau deh ulang tahun tahun ini, 1 februari dapet say hbd dari kamu apa enggak', 'Musikan', 1),
(11, 'aku mau', 'Musikan', 1),
(12, 'senang', 'Musikan', 1),
(13, 'Indahnya berbagi ðŸ˜', 'Travelling', 1),
(14, 'Lacobaaa ini, mandangin kamu dari jauh aja rasanya adem', 'Musikan', 1),
(15, 'Ingati bila sunyi, rindui bila jauh, pahami bila keliru, maafkan bila terluka', 'Menonton', 1),
(16, 'bernada di pagi hari', 'Musikan', 1),
(17, 'irama dan nada merdu', 'Musikan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `full_name`, `password`) VALUES
(1, 'alvi', 'Alviana Dina', '$2y$05$siU0H0bk1eBtkF8zOOxN5uA6muuP0ONCbeyekCAVBEwE0HMbwkCr.'),
(2, 'admin', 'Admin Perpus', '$2y$05$0RfFGKdD.I9/9SRZd9../.kIQg7pwgDxhICT0t1aPZh29Ia2oRA3u');

-- --------------------------------------------------------

--
-- Table structure for table `prediksi`
--

CREATE TABLE IF NOT EXISTS `prediksi` (
  `id` int(250) NOT NULL,
  `nama_pengguna` varchar(250) NOT NULL,
  `jenis` varchar(250) NOT NULL,
  `keaktifan` int(2) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `tp` int(2) NOT NULL,
  `fp` int(2) NOT NULL,
  `tn` int(2) NOT NULL,
  `fn` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prediksi`
--

INSERT INTO `prediksi` (`id`, `nama_pengguna`, `jenis`, `keaktifan`, `kategori`, `tp`, `fp`, `tn`, `fn`) VALUES
(1, 'Alviana', 'Soon Jalan jalan ke Jepang enak kali ya, kali aja ketemu Naruto', 1, 'Menonton', 0, 1, 0, 0),
(2, 'Alviana', 'Saksikan', 1, 'Travelling', 1, 0, 0, 0),
(3, 'Alviana', 'Beginilah ekspresi saya Pas nyokap ultah dan manager juga ultah tapi gw masih dilokasi,', 1, 'Travelling', 0, 1, 0, 0),
(4, 'alviana', 'siapa yang suka main SQUISHI??? nih mumpung gw lagi makan banyak terus memekar ini pipi udah kaya mainan anak', 1, 'Menonton', 0, 1, 0, 0),
(5, 'alviana', 'Ayoo siapa yang dulu kalo disuruh minum vitamin sama orang tua tapi cuman pura pura nelen wkwkkww', 1, 'Menonton', 1, 0, 0, 0),
(6, 'Alviana', 'Minum aja, biar ga mahal, yang penting foto foto', 1, 'Menonton', 0, 1, 0, 0),
(7, 'Alviana', 'Yang paling tau harus gimana, ya dirinya sendiri, dia cuma pengen didengerin', 1, 'Menonton', 1, 0, 0, 0),
(8, 'ridwan', 'Saat hubungan berakhir, bukan hanya berhenti saling mencintai tapi juga berhenti untuk saling menyakiti', 1, 'Travelling', 1, 0, 0, 0),
(9, 'aslan', 'Terjawab sudah misteti dari rasa minum coca cola pake es', 1, 'Travelling', 1, 0, 0, 0),
(10, 'alvi', 'Ada yang menyerah lelah saat diabaikan, ada yang tetap bertahan', 1, 'Menonton', 0, 1, 0, 0),
(11, 'alviana', 'Setiap kamu merasa beruntung, percayalah doa ibumu telah didenger', 1, 'Travelling', 0, 1, 0, 0),
(12, 'ernest', 'Duh Man u, mental juaranya kemana iniiiiiiiiii', 1, 'Menonton', 1, 0, 0, 0),
(13, 'se', 'tujuan', 1, 'Travelling', 1, 0, 0, 0),
(14, 'alviana', 'Trust your hope, not your fear', 1, 'Travelling', 0, 1, 0, 0),
(15, 'putri', 'Sampai sampai dia merasa kalau dirinya mati, dia masuk surga', 1, 'Travelling', 0, 1, 0, 0),
(16, 'alviana', 'Cuacanya Londen banget...(konon katanya)', 1, 'Menonton', 0, 1, 0, 0),
(17, 'alviana', 'Medioker, nontonnya sabar terus, orang sabar disayang Tuhan', 1, 'Menonton', 1, 0, 0, 0),
(18, 'via', 'gak tau deh ulang tahun tahun ini, 1 februari dapet say hbd dari kamu apa enggak', 1, 'Musikan', 0, 1, 0, 0),
(19, 'Als', 'Siaangggg', 1, 'Musikan', 0, 0, 1, 0),
(20, 'ars', 'aku mau', 1, 'Musikan', 0, 1, 0, 0),
(21, 'Asq', 'Hari ini diajak macan ke salah satu toko baju, pas mau bayar diomelin macan', 1, 'Olahraga', 1, 0, 0, 0),
(22, 'aq', 'Wooooyyy ribut siniii', 1, 'Olahraga', 1, 0, 0, 0),
(23, 'ifa', 'Kalo jalan sama macan, tiap detik penuh dengan nasehat dan do''a.', 1, 'Musikan', 0, 0, 1, 0),
(24, 'a', 'senang', 1, 'Musikan', 0, 1, 0, 0),
(25, 'Adinda Thomas', 'Indahnya berbagi ðŸ˜', 1, 'Travelling', 0, 1, 0, 0),
(26, 'Aditya Raino', 'pohon kecil sama pohon gede lagi berhadapan', 1, 'Olahraga', 1, 0, 0, 0),
(27, 'Aditya Raino', 'Lacobaaa ini, mandangin kamu dari jauh aja rasanya adem', 1, 'Musikan', 0, 1, 0, 0),
(28, 'Agus Kuncoro', 'Ingati bila sunyi, rindui bila jauh, pahami bila keliru, maafkan bila terluka', 1, 'Menonton', 0, 1, 0, 0),
(29, 'Ajil Ditto', 'sama mantan mah ga ada kenangan..', 1, 'Olahraga', 1, 0, 0, 0),
(30, 'Ajil Ditto', 'km sweet bgt si ðŸ˜˜', 1, 'Olahraga', 1, 0, 0, 0),
(31, 'Ajun perwira', 'bernada di pagi hari', 1, 'Musikan', 0, 1, 0, 0),
(32, 'Ajun perwira', 'irama dan nada merdu', 1, 'Musikan', 0, 1, 0, 0),
(33, 'Ajun perwira', 'nada merdu lantunan', 1, 'Olahraga', 1, 0, 0, 0),
(34, 'Ajun perwira', 'lagu itu bernada', 1, 'Olahraga', 1, 0, 0, 0),
(35, 'Ajun perwira', 'musik ku senandung irama', 1, 'Musikan', 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stem`
--

CREATE TABLE IF NOT EXISTS `stem` (
  `id` int(255) NOT NULL,
  `stem` varchar(500) NOT NULL,
  `count` int(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keaktifan` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stem`
--

INSERT INTO `stem` (`id`, `stem`, `count`, `kategori`, `keaktifan`) VALUES
(1, 'malam', 1, 'Menonton', 1),
(2, 'mau', 2, 'Menonton', 1),
(3, 'ketemu', 1, 'Menonton', 1),
(4, 'jon', 1, 'Menonton', 1),
(5, 'snow', 1, 'Menonton', 1),
(6, 'gameofthrones', 1, 'Menonton', 1),
(7, 'bawa', 1, 'Menonton', 1),
(8, 'anak', 1, 'Menonton', 1),
(9, 'bayi', 2, 'Menonton', 1),
(10, 'masuk', 1, 'Menonton', 1),
(11, 'bioskop', 1, 'Menonton', 1),
(12, 'berisik', 1, 'Menonton', 1),
(13, '-', 1, 'Menonton', 1),
(14, 'lalu', 1, 'Menonton', 1),
(15, 'si', 1, 'Menonton', 1),
(16, 'kaget', 1, 'Menonton', 1),
(17, 'menang', 1, 'Menonton', 1),
(18, 'demi', 1, 'Menonton', 1),
(19, 'endgame', 1, 'Menonton', 1),
(20, 'ku', 1, 'Menonton', 1),
(21, 'bangun', 1, 'Menonton', 1),
(22, 'pagi', 1, 'Menonton', 1),
(23, 'it', 1, 'Menonton', 1),
(24, 's', 1, 'Menonton', 1),
(25, 'not', 1, 'Menonton', 1),
(26, 'to', 1, 'Menonton', 1),
(27, 'late', 1, 'Menonton', 1),
(28, 'cara', 1, 'Menonton', 1),
(29, 'bangkitin', 1, 'Menonton', 1),
(30, 'mood', 1, 'Menonton', 1),
(31, 'kerja', 1, 'Menonton', 1),
(32, 'hari', 1, 'Menonton', 1),
(33, 'libur', 1, 'Menonton', 1),
(34, 'udin', 1, 'Travelling', 1),
(35, 'bahagia', 1, 'Travelling', 1),
(36, 'seringkali', 1, 'Travelling', 1),
(37, 'mau', 2, 'Travelling', 1),
(38, 'main', 1, 'Travelling', 1),
(39, 'gunung', 1, 'Travelling', 1),
(40, 'malemnya', 1, 'Travelling', 1),
(41, 'kaya', 1, 'Travelling', 1),
(42, 'anak', 1, 'Travelling', 1),
(43, 'kecil', 1, 'Travelling', 1),
(44, 'ga', 1, 'Travelling', 1),
(45, 'tidur', 1, 'Travelling', 1),
(46, 'karna', 1, 'Travelling', 1),
(47, 'neng', 1, 'Travelling', 1),
(48, 'pergi', 1, 'Travelling', 1),
(49, 'telah', 1, 'Travelling', 1),
(50, 'diskusi', 1, 'Travelling', 1),
(51, 'panjang', 1, 'Travelling', 1),
(52, 'beberapa', 1, 'Travelling', 1),
(53, 'orang', 1, 'Travelling', 1),
(54, 'akhir', 1, 'Travelling', 1),
(55, 'putus', 1, 'Travelling', 1),
(56, 'buka', 1, 'Travelling', 1),
(57, 'gembok', 1, 'Travelling', 1),
(58, 'akun', 1, 'Travelling', 1),
(59, 'ini', 1, 'Travelling', 1),
(60, 'tiap', 1, 'Travelling', 1),
(61, 'pulang', 2, 'Travelling', 1),
(62, 'kampung', 1, 'Travelling', 1),
(63, 'inget', 1, 'Travelling', 1),
(64, 'kamu', 2, 'Travelling', 1),
(65, 'ngehek', 1, 'Travelling', 1),
(66, 'seduh', 1, 'Travelling', 1),
(67, 'rasa', 1, 'Travelling', 1),
(68, 'kasar', 1, 'Travelling', 1),
(69, 'doa', 1, 'Menonton', 1),
(70, 'audry', 1, 'Menonton', 1),
(71, 'semua', 2, 'Menonton', 1),
(72, 'orang', 1, 'Menonton', 1),
(73, 'jadi', 1, 'Menonton', 1),
(74, 'korban', 1, 'Menonton', 1),
(75, 'bully', 1, 'Menonton', 1),
(76, 'semangat', 1, 'Menonton', 1),
(77, 'terus', 1, 'Menonton', 1),
(78, 'hidup', 2, 'Menonton', 1),
(79, 'henti', 1, 'Menonton', 1),
(80, 'karna', 1, 'Menonton', 1),
(81, 'telah', 1, 'Menonton', 1),
(82, 'cukup', 1, 'Menonton', 1),
(83, 'stress', 1, 'Menonton', 1),
(84, 'buku', 2, 'Menonton', 1),
(85, 'wajib', 1, 'Menonton', 1),
(86, 'tiap', 1, 'Menonton', 1),
(87, 'bulan', 1, 'Menonton', 1),
(88, 'baca', 1, 'Menonton', 1),
(89, 'beri', 1, 'Menonton', 1),
(90, 'motivasi', 1, 'Menonton', 1),
(91, 'baru', 1, 'Menonton', 1),
(92, 'tunggu', 1, 'Travelling', 1),
(93, 'kira', 2, 'Travelling', 1),
(94, 'kapan', 1, 'Travelling', 1),
(95, 'yah', 1, 'Travelling', 1),
(96, 'soleh', 1, 'Travelling', 1),
(97, 'jadi', 1, 'Travelling', 1),
(98, 'ketua', 1, 'Travelling', 1),
(99, 'gank', 1, 'Travelling', 1),
(100, 'kubur', 1, 'Travelling', 1),
(101, 'lagi', 1, 'Travelling', 1),
(102, 'bon', 1, 'Travelling', 1),
(103, 'udah', 1, 'Travelling', 1),
(104, 'kaga', 1, 'Travelling', 1),
(105, 'sabar', 1, 'Travelling', 1),
(106, 'seperti', 1, 'Travelling', 1),
(107, 'jangan', 2, 'Menonton', 1),
(108, 'lewat', 2, 'Menonton', 1),
(109, 'seru', 1, 'Menonton', 1),
(110, 'abu', 2, 'Menonton', 1),
(111, 'dadak', 1, 'Menonton', 1),
(112, 'soleh', 1, 'Menonton', 1),
(113, 'im', 1, 'Menonton', 1),
(114, 'still', 1, 'Menonton', 1),
(115, 'waiting', 1, 'Menonton', 1),
(116, 'u', 1, 'Menonton', 1),
(117, 'baby', 1, 'Menonton', 1),
(118, 'lacobaaa', 1, 'Menonton', 1),
(119, 'enak', 1, 'Menonton', 1),
(120, 'panggil', 1, 'Menonton', 1),
(121, 'trio', 1, 'Menonton', 1),
(122, 'apa', 2, 'Menonton', 1),
(123, 'yah', 1, 'Menonton', 1),
(124, 'hmmm', 1, 'Menonton', 1),
(125, 'aja', 1, 'Menonton', 1),
(126, 'penting', 1, 'Menonton', 1),
(127, 'ber3', 1, 'Menonton', 1),
(128, 'seluruh', 1, 'Menonton', 1),
(129, 'keluarga', 1, 'Menonton', 1),
(130, 'berat', 2, 'Olahraga', 1),
(131, 'bukan', 1, 'Olahraga', 1),
(132, 'mau', 1, 'Olahraga', 1),
(133, 'ikut-ikutan', 2, 'Olahraga', 1),
(134, 'kalo', 1, 'Olahraga', 1),
(135, 'kes', 1, 'Olahraga', 1),
(136, 'karna', 1, 'Olahraga', 1),
(137, 'positive', 1, 'Olahraga', 1),
(138, 'aku', 1, 'Olahraga', 1),
(139, 'sama', 1, 'Olahraga', 1),
(140, 'sekali', 1, 'Olahraga', 1),
(141, 'rubah', 1, 'Olahraga', 1),
(142, 'don', 1, 'Olahraga', 1),
(143, 't', 1, 'Olahraga', 1),
(144, 'fear', 1, 'Olahraga', 1),
(145, 'change', 1, 'Olahraga', 1),
(146, 'you', 3, 'Olahraga', 1),
(147, 'may', 2, 'Olahraga', 1),
(148, 'lose', 1, 'Olahraga', 1),
(149, 'something', 2, 'Olahraga', 1),
(150, 'good', 1, 'Olahraga', 1),
(151, 'but', 1, 'Olahraga', 1),
(152, 'also', 1, 'Olahraga', 1),
(153, 'gain', 1, 'Olahraga', 1),
(154, 'great', 1, 'Olahraga', 1),
(155, 'gemas', 1, 'Musikan', 1),
(156, 'mmesshh', 1, 'Musikan', 1),
(157, 'nyaaa', 1, 'Musikan', 1),
(158, 'uuuuu', 1, 'Musikan', 1),
(159, 'rabb', 2, 'Musikan', 1),
(160, 'kuat', 1, 'Musikan', 1),
(161, 'imankuuuu', 1, 'Musikan', 1),
(162, 'pulang', 2, 'Musikan', 1),
(163, 'aku', 1, 'Musikan', 1),
(164, 'hilang', 1, 'Musikan', 1),
(165, 'arah', 2, 'Musikan', 1),
(166, 'sesat', 1, 'Musikan', 1),
(167, 'tak', 1, 'Musikan', 1),
(168, 'tau', 1, 'Musikan', 1),
(169, 'jalan', 1, 'Musikan', 1),
(170, 'sore', 2, 'Olahraga', 1),
(171, 'malam', 1, 'Olahraga', 1),
(172, 'syem', 1, 'Olahraga', 1),
(173, 'umms', 1, 'Olahraga', 1),
(174, 'miss', 1, 'Olahraga', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_data_akhir`
--

CREATE TABLE IF NOT EXISTS `tabel_data_akhir` (
  `id` int(11) NOT NULL,
  `kode_hobi` varchar(11) NOT NULL,
  `hobi` varchar(21) NOT NULL,
  `nama_pengguna` varchar(21) NOT NULL,
  `vektor_x` int(12) NOT NULL,
  `vektor_v` int(12) NOT NULL,
  `jarak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_data_form`
--

CREATE TABLE IF NOT EXISTS `tabel_data_form` (
  `no` int(11) NOT NULL,
  `kode_hobi` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `status_kegiatan` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_data_form`
--

INSERT INTO `tabel_data_form` (`no`, `kode_hobi`, `nama_lengkap`, `jenis_kelamin`, `status_kegiatan`, `tanggal_lahir`, `hobi`, `email`) VALUES
(1, 'TW000001', 'Ardhika Rafi Pratama', 'Laki-Laki', 'Mahasiswa', '1998-02-04', 'Olahraga', 'ardhikarafi23@gmail.com'),
(2, 'TW000002', 'Arditya Yudha Pratama', 'Pilih', 'Mahasiswa', '1997-12-14', 'Membaca', 'pratamaadit14@gmail.com'),
(3, 'TW000003', 'Safira Putri Pradani', 'Perempuan', 'Mahasiswa', '1997-08-03', 'Menonton', 'safiraputripradani@gmail.com'),
(4, 'TW000004', 'Raissa Almira R', 'Perempuan', 'Mahasiswa', '1998-07-17', 'Melukis', 'raissaalmira16@gmail.com'),
(5, 'TW000005', 'Meita ayu damayanti', 'Laki-Laki', 'Pilih', '1997-05-28', 'Travelling', 'meitaayu028@gmail.com'),
(6, 'TW000006', 'Catur wahyu', 'Laki-Laki', 'Mahasiswa', '1997-03-11', 'Olahraga', 'hallocatur@gmail.com'),
(7, 'TW000007', 'Rezha Andhika Nuryanto Saputra', 'Laki-Laki', 'Mahasiswa', '1997-09-25', 'Membaca', 'saputrareza979@gmail.com'),
(8, 'TW000008', 'Mohammad Arif Muttaqin', 'Laki-Laki', 'Mahasiswa', '1997-02-18', 'Bermain Game', 'm.arifmuttaqin97@gmail.com'),
(9, 'TW000009', 'Cinta Rasca Leksono', 'Laki-Laki', 'Pelajar', '2002-04-24', 'Mendengarkan Musik', 'cintarascaaa@gmail.com'),
(10, 'TW000010', 'Maulana Bagus Saputra', 'Laki-Laki', 'Mahasiswa', '19999-06-16', 'Menonton', 'catzy.rais@yahoo.com'),
(11, 'TW000011', 'Fahmi fastabik', 'Laki-Laki', 'Mahasiswa', '1998-10-24', 'Olahraga', 'fahmi.fastabik24@gmail.com'),
(12, 'TW000012', 'Thoriqul Umar', 'Laki-Laki', 'Mahasiswa', '1997-05-02', 'Olahraga', ''),
(13, 'TW000013', 'Dela Ekasari', 'Perempuan', 'Mahasiswa', '1996-06-12', 'Travelling', 'ekasaridela@gmail.com'),
(14, 'TW000014', 'muhamad habib abdul aziz', 'Laki-Laki', 'Mahasiswa', '1997-08-13', 'Olahraga', 'muhamad.habib08@gmail.com'),
(15, 'TW000015', 'Amelia Devi Putri Ariyanto', 'Perempuan', 'Mahasiswa', '2000-01-26', 'Mendengarkan Musik', 'ameliadev26@gmail.com'),
(16, 'TW000016', 'M. Abdul Baqi Al Jawad', 'Laki-Laki', 'Mahasiswa', '1998-05-02', 'Olahraga', 'buckyhelmsmash@gmail.com'),
(17, 'TW000017', 'Aulia Tazki', 'Perempuan', 'Pelajar', '2001-02-06', 'Mendengarkan Musik', 'auliatazki61@gmail.com'),
(18, 'TW000018', 'Nur Fitri Ani', 'Perempuan', 'Mahasiswa', '1997-02-09', 'Menonton', 'nurfitri91997@gmail.com'),
(19, 'TW000019', 'Maghfira', 'Perempuan', 'Pelajar', '2002-09-02', 'Membaca', 'maghfira0709@gmail.com'),
(20, 'TW000020', 'Lina Puji A', 'Perempuan', 'Mahasiswa', '1997-08-25', 'Mendengarkan Musik', 'linapuji05@gmail.com'),
(21, 'TW000021', 'Carissa adila m', 'Perempuan', 'Mahasiswa', '1998-03-23', 'Bermain Game', 'carissa.huang88.ch@gmail.com'),
(22, 'TW000022', 'Zahra Nurhaliza Br Tarigan', 'Perempuan', 'Pelajar', '2004-01-27', 'Olahraga', 'zahranurhaliza5@gmail.com'),
(23, 'TW000023', 'Regita Churnia Dewi', 'Perempuan', 'Mahasiswa', '1998-02-16', 'Membaca', 'regitachurniadewi16@gmail.com'),
(24, 'TW000024', 'Ulfa Hidayati', 'Perempuan', 'Mahasiswa', '1997-02-10', 'Membaca', 'ulfahdyt@gmail.com'),
(25, 'TW000025', 'Wahyu Rizky Eka Perwira', 'Laki-Laki', 'Mahasiswa', '1997-07-17', 'Travelling', 'wrep17@gmail.com'),
(26, 'TW000026', 'Muhammad Daffa Syaddad', 'Laki-Laki', 'Pelajar', '2003-07-11', 'Bermain Game', 'daffasyaddad3@gmail.com'),
(27, 'TW000027', 'annisa nur khalishah', 'Perempuan', 'Pelajar', '2001-08-09', 'Travelling', 'annisa080901@gmail.com'),
(28, 'TW000028', 'Debrina Luna A.M', 'Perempuan', 'Mahasiswa', '1996-04-12', 'Menonton', 'debrinalunaa@gmail.com'),
(29, 'TW000029', 'Ardian Rifki Rifaldi', 'Laki-Laki', 'Mahasiswa', '1997-04-25', 'Olahraga', 'aldot.rifaldi@gmail.com'),
(30, 'TW000030', 'Bondan Pramana', 'Laki-Laki', 'Mahasiswa', '1998-11-18', 'Bermain Game', 'bondanpram@gmail.com'),
(31, 'TW000031', 'Muhammad abdul azis', 'Laki-Laki', 'Pelajar', '2000-03-13', 'Travelling', 'ancekar@yahoo.com'),
(32, 'TW000032', 'Renaldi Riyanto', 'Laki-Laki', 'Pelajar', '2001-10-28', 'Olahraga', 'aldiraldi0@gmail.com'),
(33, 'TW000033', 'Maya maesaroh', 'Perempuan', 'Pelajar', '2000-10-23', 'Menonton', 'maesarohmaya350@gmail.com'),
(34, 'TW000034', 'Renaldi Angga', 'Laki-Laki', 'Pelajar', '2001-11-22', 'Travelling', 'aldiangga34@gmail.com'),
(35, 'TW000035', 'Ghaniyyah', 'Perempuan', 'Pelajar', '2006-01-23', 'Travelling', 'ghaniyyah.23@gmail.com'),
(36, 'TW000036', 'Sitinurazizah', 'Perempuan', 'Pelajar', '2004-07-21', 'Olahraga', 'snazizah1321@gmail.com'),
(37, 'TW000037', 'Isnaeni ramadhani', 'Perempuan', 'Mahasiswa', '1997-01-01', 'Travelling', 'isnaeniramadhani@gmail.com'),
(38, 'TW000038', 'Adinda Kayla afnan', 'Perempuan', 'Pelajar', '2006-09-08', 'Olahraga', 'adindakaylaafnan@gmail.com'),
(39, 'TW000039', 'Hasri Ainun', 'Perempuan', 'Pekerja', '1995-03-24', 'Travelling', 'ainun_hasri@yahoo.com'),
(40, 'TW000040', 'Rifa tsabita Auliya', 'Perempuan', 'Pelajar', '2000-07-17', 'Olahraga', 'rifa.tsabita2006@gmail.com'),
(41, 'TW000041', 'Ebbya farrhay', 'Laki-Laki', 'Pelajar', '2005-03-18', 'Olahraga', 'ebbyafarrhay40172@gmail.com'),
(42, 'TW000042', 'Arla dannisa', 'Perempuan', 'Pelajar', '2000-09-06', 'Melukis', 'arladannisa69@gmail.com'),
(43, 'TW000043', 'Andre Kahlil Tario Prahananto', 'Laki-Laki', 'Mahasiswa', '1996-05-06', 'Olahraga', 'akeismamet@gmail.com'),
(44, 'TW000044', 'Safira Jilan Harlan', 'Perempuan', 'Pelajar', '2005-06-01', 'Membaca', 'safirajilanharlan@gmail.com'),
(45, 'TW000045', 'Siti aisyah', 'Perempuan', 'Pelajar', '2000-02-12', 'Menonton', 'sitiaisyahk480@gmail.com'),
(46, 'TW000046', 'Azriel', 'Laki-Laki', 'Pelajar', '2004-08-11', 'Olahraga', 'azrielpamungkas08@gmail.com'),
(47, 'TW000047', 'Dimas Redyan', 'Laki-Laki', 'Mahasiswa', '1997-05-10', 'Menulis', 'dimasredyan@gmail.com'),
(48, 'TW000048', 'Lutfi adnan', 'Laki-Laki', 'Mahasiswa', '1997-09-24', 'Travelling', 'lutfiii27@gmail.com'),
(49, 'TW000049', 'Uzri Nisa Zamzami', 'Perempuan', 'Pekerja', '1998-07-09', 'Menulis', 'uzrnsa09@gmail.com'),
(50, 'TW000050', 'Nisa Nurfitri', 'Perempuan', 'Pelajar', '2006-07-06', 'Menulis', 'nissa187281@gmail.com'),
(51, 'TW000051', 'Adilah Salma', 'Perempuan', 'Pelajar', '2004-06-24', 'Memasak', 'adilahsalma217@gmail.com'),
(52, 'TW000052', 'Zahra Alganiyu Putri', 'Perempuan', 'Mahasiswa', '1998-08-24', 'Mendengarkan Musik', 'zahranrlite269@gmail.com'),
(53, 'TW000053', 'Yuuka permata Amirullah', 'Perempuan', 'Pelajar', '2003-10-12', 'Memasak', 'Yuuka121003@gmail.com'),
(54, 'TW000054', 'Exza Alviansyah', 'Laki-Laki', 'Mahasiswa', '1998-05-29', 'Olahraga', 'exzaalvian2@gmail.com'),
(55, 'TW000055', 'Hedi fazli', 'Laki-Laki', 'Mahasiswa', '2004-06-05', 'Bermain Game', 'pporu29@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE IF NOT EXISTS `tabel_pendaftaran` (
  `no` int(11) NOT NULL,
  `kode_hobi` varchar(20) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(40) NOT NULL,
  `status_kegiatan` varchar(100) NOT NULL,
  `umur` int(12) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`no`, `kode_hobi`, `nama_lengkap`, `jenis_kelamin`, `status_kegiatan`, `umur`, `tanggal_lahir`, `email`, `photo`) VALUES
(1, 'TW000001', 'Ardhika Rafi Pratama', 'Laki-Laki', 'Mahasiswa', 21, '1997-02-04', 'ardhikarafi23@gmail.com', 'LOGO_BACKGROUND_ABU-ABU_OK5.png'),
(2, 'TW000002', 'Arditya Yudha Pratama', 'Laki-Laki', 'Mahasiswa', 21, '1997-12-14', 'pratamaadit14@gmail.com', 'Kosong1.png'),
(3, 'TW000003', 'Safira Putri Pradani', 'Perempuan', 'Mahasiswa', 20, '1998-08-13', 'safiraputripradani@gmail.com', '2013_lamborghini_veneno_interior-wallpaper-2560x1440.jpg'),
(4, 'TW000004', 'Raissa Almira R', 'Perempuan', 'Mahasiswa', 20, '1998-08-03', 'raissaalmira16@gmail.com', '2013_rolls_royce_ghost_fab1-wallpaper-2560x1440.jpg'),
(5, 'TW000005', 'Meita ayu damayanti', 'Perempuan', 'Mahasiswa', 21, '1997-05-28', 'meitaayu028@gmail.com', '2014_jaguar_xkr_s_gt-wallpaper-2560x1440.jpg'),
(6, 'TW000006', 'Catur wahyu', 'Laki-Laki', 'Mahasiswa', 22, '1997-03-11', 'hallocatur@gmail.com', '2014_lamborghini_aventador_novitec_torado-wallpaper-2560x1440.jpg'),
(7, 'TW000007', 'Rezha Andhika Nuryanto Saputra', 'Laki-Laki', 'Mahasiswa', 22, '1997-09-25', 'saputrareza979@gmail.com', '2014_nissan_gtr-wallpaper-2560x1440.jpg'),
(8, 'TW000008', 'Mohammad Arif Muttaqin', 'Laki-Laki', 'Mahasiswa', 22, '1997-02-18', 'm.arifmuttaqin97@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(9, 'TW000009', 'Cinta Rasca Leksono', 'Perempuan', 'Pelajar', 17, '2002-04-24', 'cintarascaaa@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(10, 'TW000010', 'Maulana Bagus Saputra', 'Laki-Laki', 'Mahasiswa', 19, '1999-06-16', 'catzy.rais@yahoo.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(11, 'TW000011', 'Fahmi fastabik', 'Laki-Laki', 'Mahasiswa', 22, '1998-10-24', 'fahmi.fastabik24@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(12, 'TW000013', 'Thoriqul Umar', 'Laki-Laki', 'Mahasiswa', 20, '1999-12-15', 'bang.thortu@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(13, 'TW000013', 'Dela Ekasari', 'Perempuan', 'Mahasiswa', 22, '1996-12-06', 'ekasaridela@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(14, 'TW000014', 'Muhamad habib abdul aziz', 'Laki-Laki', 'Mahasiswa', 21, '1997-08-13', 'muhamad.habib08@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(15, 'TW000015', 'Amelia Devi Putri Ariyanto', 'Perempuan', 'Mahasiswa', 19, '2000-01-26', 'liadev26@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(16, 'TW000016', 'M. Abdul Baqi Al Jawad', 'Laki-Laki', 'Mahasiswa', 21, '1998-02-05', 'buckyhelmsmash@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(17, 'TW000017', 'Aulia Tazki', 'Perempuan', 'Pelajar', 18, '0000-00-00', 'auliatazki61@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(18, 'TW000018', 'Nur Fitri Ani', 'Perempuan', 'Mahasiswa', 22, '1997-09-02', 'nurfitri91997@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(19, 'TW000019', 'Maghfira', 'Perempuan', 'Pelajar', 16, '2002-09-07', 'maghfira0709@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(20, 'TW000010', 'Lina Puji A', 'Perempuan', 'Mahasiswa', 22, '1997-08-25', 'linapuji05@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(21, 'TW000021', 'Carissa adila m', 'Perempuan', 'Mahasiswa', 21, '1998-03-23', 'carissa.huang88.ch@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(22, 'TW000022', 'Zahra Nurhaliza Br Tarigan', 'Perempuan', 'Pelajar', 15, '2004-01-27', 'zahranurhaliza5@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(23, 'TW000023', 'Regita Churnia Dewi', 'Perempuan', 'Mahasiswa', 21, '1998-02-16', 'regitachurniadewi16@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(24, 'TW000024', 'Ulfa Hidayati', 'Perempuan', 'Mahasiswa', 22, '1997-02-10', 'ulfahdyt@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(25, 'TW000025', 'Wahyu Rizky Eka Perwira', 'Laki-Laki', 'Mahasiswa', 20, '1998-07-17', 'wrep17@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(26, 'TW000026', 'Muhammad Daffa Syaddad', 'Laki-Laki', 'Pelajar', 15, '2003-07-11', 'daffasyaddad3@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(27, 'TW000027', 'Annisa nur khalishah', 'Perempuan', 'Pelajar', 17, '2001-08-09', 'annisa080901@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(28, 'TW000028', 'Debrina Luna A.M', 'Perempuan', 'Mahasiswa', 23, '1996-04-12', 'debrinalunaa@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(29, 'TW000029', 'Ardian Rifki Rifaldi', 'Laki-Laki', 'Mahasiswa', 22, '1997-04-25', 'aldot.rifaldi@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(30, 'TW000030', 'Bondan Pramana', 'Laki-Laki', 'Mahasiswa', 20, '1998-11-18', 'bondanpram@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(31, 'TW000031', 'Muhammad abdul azis', 'Laki-Laki', 'Pelajar', 19, '2000-12-13', 'ancekar@yahoo.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(32, 'TW000032', 'Renaldi Riyanto', 'Laki-Laki', 'Pelajar', 17, '2001-10-28', 'aldiraldi0@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(33, 'TW000033', 'Maya maesaroh', 'Perempuan', 'Pelajar', 19, '2000-10-23', 'maesarohmaya350@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(34, 'TW000034', 'Isnaeni ramadhani', 'Perempuan', 'Mahasiswa', 22, '1997-10-10', 'isnaeniramadhani@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(35, 'TW000035', 'Adinda Kayla afnan', 'Perempuan', 'Pelajar', 16, '2006-09-08', 'adindakaylaafnan@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(36, 'TW000036', 'Hasri Ainun', 'Perempuan', 'Pekerja', 24, '1995-03-24', 'ainun_hasri@yahoo.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(37, 'TW000037', 'Rifa tsabita Auliya', 'Perempuan', 'Pelajar', 17, '2000-07-17', 'rifa.tsabita2006@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(38, 'TW000038', 'Ebbya farrhay', 'Laki-Laki', 'Pelajar', 14, '2005-03-18', 'ebbyafarrhay40172@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(39, 'TW000039', 'Arla dannisa', 'Perempuan', 'Pelajar', 12, '2000-09-06', 'arladannisa69@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(40, 'TW000040', 'Andre Kahlil Tario Prahananto', 'Laki-Laki', 'Mahasiswa', 23, '1996-05-06', 'akeismamet@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(41, 'TW000041', 'Andre Kahlil Tario Prahananto', 'Laki-Laki', 'Mahasiswa', 23, '1996-05-06', 'akeismamet@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(42, 'TW000042', 'Andre Kahlil Tario Prahananto', 'Laki-Laki', 'Mahasiswa', 23, '1996-05-06', 'akeismamet@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(43, 'TW000043', 'Safira Jilan Harlan', 'Perempuan', 'Pelajar', 14, '2005-06-01', 'safirajilanharlan@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(44, 'TW000044', 'Safira Jilan Harlan', 'Perempuan', 'Pelajar', 14, '2005-06-01', 'safirajilanharlan@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(45, 'TW000045', 'Siti aisyah', 'Perempuan', 'Pelajar', 17, '2000-02-12', 'sitiaisyahk480@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(46, 'TW000046', 'Azriel', 'Laki-Laki', 'Pelajar', 14, '2004-08-11', 'azrielpamungkas08@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(47, 'TW000047', 'Dimas Redyan', 'Laki-Laki', 'Mahasiswa', 22, '1997-10-05', 'dimasredyan@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(48, 'TW000048', 'Lutfi adnan', 'Laki-Laki', 'Mahasiswa', 21, '1997-09-24', 'lutfiii27@gmail.com', '2017_acura_nsx-wallpaper-3840x2160.jpg'),
(49, 'TW000049', 'Uzri Nisa Zamzami', 'Perempuan', 'Pekerja', 21, '1998-07-09', 'uzrnsa09@gmail.com', 'LOGO_BACKGROUND_ABU-ABU_OK5.png'),
(50, 'TW000050', 'Nisa Nurfitri', 'Perempuan', 'Pelajar', 13, '2006-07-06', 'nissa187281@gmail.com', 'Kosong1.png'),
(51, 'TW000051', 'Adilah Salma', 'Perempuan', 'Mahasiswa', 21, '2004-06-24', 'adilahsalma217@gmail.com', '2013_lamborghini_veneno_interior-wallpaper-2560x1440.jpg'),
(52, 'TW000052', 'Zahra Alganiyu Putri', 'Perempuan', 'Pelajar', 15, '1998-08-24', 'zahranrlite269@gmail.com', '2013_rolls_royce_ghost_fab1-wallpaper-2560x1440.jpg'),
(53, 'TW000053', 'Yuuka permata Amirullah', 'Perempuan', 'Pelajar', 14, '2003-10-12', ' 	Yuuka121003@gmail.com', '2014_jaguar_xkr_s_gt-wallpaper-2560x1440.jpg'),
(54, 'TW000054', ' 	Exza Alviansyah', 'Laki-Laki', 'Mahasiswa', 21, '1998-05-29', 'exzaalvian2@gmail.com', '2014_lamborghini_aventador_novitec_torado-wallpaper-2560x1440.jpg'),
(55, 'TW000055', 'Hedi fazli', 'Laki-Laki', 'Pelajar', 14, '2004-06-05', 'pporu29@gmail.com', '2014_nissan_gtr-wallpaper-2560x1440.jpg'),
(56, 'TW000056', 'Adinda Thomas', 'Perempuan', 'Pekerja', 31, '2019-07-25', 'dindathom@gmail.com', 'arches-wallpaper-3840x2160.jpg'),
(57, 'TW000057', 'Aditya Raino', 'Laki-Laki', 'Mahasiswa', 21, '1997-10-17', 'adityarain@gmail.com', 'yamaha_m1_motorcycle-wallpaper-3840x2160.jpg'),
(58, 'TW000058', 'Agus Kuncoro', 'Laki-Laki', 'Mahasiswa', 28, '1991-01-26', 'aguss@gmail.com', 'arches-wallpaper-3840x2160.jpg'),
(59, 'TW000059', 'Ajil Ditto', 'Laki-Laki', 'Pelajar', 12, '2007-10-17', 'aguss@gmail.com', 'watch_dogs_hd-wallpaper-2560x1440.jpg'),
(60, 'TW000060', 'Ajun Perwira', 'Laki-Laki', 'Pekerja', 29, '1990-09-26', 'ajunko@gmail.com', 'the_aventador_2-wallpaper-3840x2160.jpg'),
(61, 'TW000061', 'Banu agung', 'Laki-Laki', 'Mahasiswa', 21, '2019-08-13', 'banu@gmail.com', '2014_jaguar_xkr_s_gt-wallpaper-2560x14401.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pengguna_akurasi`
--

CREATE TABLE IF NOT EXISTS `tabel_pengguna_akurasi` (
  `id` int(11) NOT NULL,
  `kode_hobi` varchar(100) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `jenis_hobi` varchar(100) NOT NULL,
  `akurasi` varchar(30) NOT NULL,
  `presisi` varchar(50) NOT NULL,
  `recall` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pengguna_akurasi`
--

INSERT INTO `tabel_pengguna_akurasi` (`id`, `kode_hobi`, `nama_pengguna`, `jenis_hobi`, `akurasi`, `presisi`, `recall`) VALUES
(1, 'TW000001', 'Adinda Thomas', 'Menonton', '48', '50', '55'),
(2, 'TW000002', 'Aditya Raino', 'Olahraga', '50', '56', '72'),
(3, 'TW000003', 'Agus Kuncoro', 'Travelling', '46', '55', '71'),
(4, 'TW000004', 'Agus Kuncoro', 'Olahraga', '50', '55', '73'),
(5, 'TW000005', 'Ajun perwira', 'Musikan', '51', '57', '73');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_twitter`
--

CREATE TABLE IF NOT EXISTS `tabel_twitter` (
  `no` int(11) NOT NULL,
  `kode_hobi` varchar(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nama_twitter` varchar(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `status_kegiatan` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_twitter`
--

INSERT INTO `tabel_twitter` (`no`, `kode_hobi`, `nama_lengkap`, `nama_twitter`, `umur`, `jenis_kelamin`, `status_kegiatan`) VALUES
(1, 'TW000001', 'Adinda Thomas', '@adindathomas', 31, 'Perempuan', 'Pekerja'),
(2, 'TW000002', 'AdityaRaino', '@adityanone', 21, 'Laki-Laki', 'Mahasiswa'),
(3, 'TW000003', 'Agus Kuncoro', '@agueskuncoro', 28, 'Laki-Laki', 'Mahasiswa'),
(4, 'TW000004', 'Ajil Ditto', '@ajilldito0', 12, 'Laki-Laki', 'Pelajar'),
(5, 'TW000005', 'Ajun Perwira', '@ajunperwira', 29, 'Laki-Laki', 'Pekerja');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alternatif`
--

CREATE TABLE IF NOT EXISTS `tbl_alternatif` (
  `kode_uji` varchar(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_hobi` varchar(100) NOT NULL,
  `status_kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`kode_uji`, `nama_lengkap`, `jenis_hobi`, `status_kegiatan`) VALUES
('P01', 'Ardhika Rafi Pratama', 'Berenang', 'Mahasiswa'),
('P02', 'Adinda Thomas', 'Menonton', 'Pekerja'),
('P03', 'Arditya Yudha Pratama', 'Manga an', 'Mahasiswa'),
('P04', 'Safira Putri Pradani', 'Menonton', 'Mahasiswa'),
('P05', 'Aditya Raino', 'Olahraga', 'Mahasiswa'),
('P06', 'Raissa Almira R', 'Menggambarkan anime', 'Mahasiswa'),
('P07', 'Ajil Ditto', 'Olahraga', 'Mahasiswa'),
('P08', 'Meita ayu damayanti', 'Travelling', 'Mahasiswa'),
('P09', 'Agus Kuncoro', 'Travelling', 'Mahasiswa'),
('P10', 'Catur wahyu', 'Olahraga', 'Mahasiswa'),
('P11', 'Rezha Andhika Nuryanto Saputra', 'Membaca', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_evaluasi`
--

CREATE TABLE IF NOT EXISTS `tbl_evaluasi` (
  `id_evaluasi` int(11) NOT NULL,
  `id_subkriteria` int(11) NOT NULL,
  `kode_uji` varchar(100) NOT NULL,
  `nilai` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=273 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_evaluasi`
--

INSERT INTO `tbl_evaluasi` (`id_evaluasi`, `id_subkriteria`, `kode_uji`, `nilai`) VALUES
(35, 18, 'A11', 20),
(36, 19, 'A11', 0),
(37, 20, 'A11', 0),
(38, 21, 'A11', 0),
(39, 22, 'A11', 0),
(40, 23, 'A11', 0),
(41, 24, 'A11', 0),
(42, 25, 'A11', 0),
(43, 26, 'A11', 0),
(44, 27, 'A11', 15),
(45, 28, 'A11', 0),
(46, 29, 'A11', 20),
(47, 30, 'A11', 0),
(48, 31, 'A11', 0),
(49, 32, 'A11', 0),
(50, 33, 'A11', 0),
(51, 34, 'A11', 0),
(52, 18, 'A12', 0),
(53, 19, 'A12', 0),
(54, 20, 'A12', 19),
(55, 21, 'A12', 0),
(56, 22, 'A12', 0),
(57, 23, 'A12', 0),
(58, 24, 'A12', 0),
(59, 25, 'A12', 0),
(60, 26, 'A12', 0),
(61, 27, 'A12', 0),
(62, 28, 'A12', 0),
(63, 29, 'A12', 0),
(64, 30, 'A12', 0),
(65, 31, 'A12', 0),
(66, 32, 'A12', 0),
(67, 33, 'A12', 0),
(68, 34, 'A12', 0),
(69, 18, 'P01', 20),
(70, 19, 'P01', 0),
(71, 20, 'P01', 0),
(72, 21, 'P01', 0),
(73, 22, 'P01', 0),
(74, 23, 'P01', 0),
(75, 24, 'P01', 0),
(76, 25, 'P01', 0),
(77, 26, 'P01', 0),
(78, 27, 'P01', 15),
(79, 28, 'P01', 0),
(80, 29, 'P01', 20),
(81, 30, 'P01', 0),
(82, 31, 'P01', 0),
(83, 32, 'P01', 2),
(84, 33, 'P01', 2),
(85, 34, 'P01', 1),
(86, 18, 'P02', 0),
(87, 19, 'P02', 0),
(88, 20, 'P02', 0),
(89, 21, 'P02', 0),
(90, 22, 'P02', 0),
(91, 23, 'P02', 0),
(92, 24, 'P02', 0),
(93, 25, 'P02', 10),
(94, 26, 'P02', 0),
(95, 27, 'P02', 15),
(96, 28, 'P02', 0),
(97, 29, 'P02', 0),
(98, 30, 'P02', 0),
(99, 31, 'P02', 12),
(100, 32, 'P02', 5),
(101, 33, 'P02', 5),
(102, 34, 'P02', 6),
(103, 18, 'P03', 0),
(104, 19, 'P03', 0),
(105, 20, 'P03', 0),
(106, 21, 'P03', 12),
(107, 22, 'P03', 0),
(108, 23, 'P03', 0),
(109, 24, 'P03', 0),
(110, 25, 'P03', 0),
(111, 26, 'P03', 0),
(112, 27, 'P03', 15),
(113, 28, 'P03', 0),
(114, 29, 'P03', 20),
(115, 30, 'P03', 0),
(116, 31, 'P03', 0),
(117, 32, 'P03', 2),
(118, 33, 'P03', 2),
(119, 34, 'P03', 1),
(120, 18, 'P04', 0),
(121, 19, 'P04', 0),
(122, 20, 'P04', 0),
(123, 21, 'P04', 0),
(124, 22, 'P04', 0),
(125, 23, 'P04', 0),
(126, 24, 'P04', 0),
(127, 25, 'P04', 10),
(128, 26, 'P04', 0),
(129, 27, 'P04', 15),
(130, 28, 'P04', 0),
(131, 29, 'P04', 20),
(132, 30, 'P04', 0),
(133, 31, 'P04', 0),
(134, 32, 'P04', 2),
(135, 33, 'P04', 2),
(136, 34, 'P04', 1),
(137, 18, 'P05', 20),
(138, 19, 'P05', 0),
(139, 20, 'P05', 0),
(140, 21, 'P05', 0),
(141, 22, 'P05', 0),
(142, 23, 'P05', 0),
(143, 24, 'P05', 0),
(144, 25, 'P05', 0),
(145, 26, 'P05', 0),
(146, 27, 'P05', 15),
(147, 28, 'P05', 0),
(148, 29, 'P05', 20),
(149, 30, 'P05', 0),
(150, 31, 'P05', 0),
(151, 32, 'P05', 5),
(152, 33, 'P05', 6),
(153, 34, 'P05', 7),
(154, 18, 'P06', 0),
(155, 19, 'P06', 0),
(156, 20, 'P06', 0),
(157, 21, 'P06', 0),
(158, 22, 'P06', 0),
(159, 23, 'P06', 6),
(160, 24, 'P06', 0),
(161, 25, 'P06', 0),
(162, 26, 'P06', 0),
(163, 27, 'P06', 0),
(164, 28, 'P06', 10),
(165, 29, 'P06', 20),
(166, 30, 'P06', 0),
(167, 31, 'P06', 0),
(168, 32, 'P06', 2),
(169, 33, 'P06', 2),
(170, 34, 'P06', 1),
(171, 18, 'P07', 20),
(172, 19, 'P07', 0),
(173, 20, 'P07', 0),
(174, 21, 'P07', 0),
(175, 22, 'P07', 0),
(176, 23, 'P07', 0),
(177, 24, 'P07', 0),
(178, 25, 'P07', 0),
(179, 26, 'P07', 0),
(180, 27, 'P07', 15),
(181, 28, 'P07', 0),
(182, 29, 'P07', 0),
(183, 30, 'P07', 18),
(184, 31, 'P07', 0),
(185, 32, 'P07', 5),
(186, 33, 'P07', 6),
(187, 34, 'P07', 7),
(188, 18, 'P08', 0),
(189, 19, 'P08', 0),
(190, 20, 'P08', 0),
(191, 21, 'P08', 0),
(192, 22, 'P08', 14),
(193, 23, 'P08', 0),
(194, 24, 'P08', 0),
(195, 25, 'P08', 0),
(196, 26, 'P08', 0),
(197, 27, 'P08', 15),
(198, 28, 'P08', 0),
(199, 29, 'P08', 20),
(200, 30, 'P08', 0),
(201, 31, 'P08', 0),
(202, 32, 'P08', 2),
(203, 33, 'P08', 2),
(204, 34, 'P08', 1),
(205, 18, 'P09', 0),
(206, 19, 'P09', 0),
(207, 20, 'P09', 0),
(208, 21, 'P09', 0),
(209, 22, 'P09', 14),
(210, 23, 'P09', 0),
(211, 24, 'P09', 0),
(212, 25, 'P09', 0),
(213, 26, 'P09', 0),
(214, 27, 'P09', 15),
(215, 28, 'P09', 0),
(216, 29, 'P09', 20),
(217, 30, 'P09', 0),
(218, 31, 'P09', 0),
(219, 32, 'P09', 5),
(220, 33, 'P09', 6),
(221, 34, 'P09', 7),
(222, 18, 'P10', 20),
(223, 19, 'P10', 0),
(224, 20, 'P10', 0),
(225, 21, 'P10', 0),
(226, 22, 'P10', 0),
(227, 23, 'P10', 0),
(228, 24, 'P10', 0),
(229, 25, 'P10', 0),
(230, 26, 'P10', 0),
(231, 27, 'P10', 15),
(232, 28, 'P10', 0),
(233, 29, 'P10', 20),
(234, 30, 'P10', 0),
(235, 31, 'P10', 0),
(236, 32, 'P10', 2),
(237, 33, 'P10', 2),
(238, 34, 'P10', 1),
(239, 18, 'A11', 0),
(240, 19, 'A11', 0),
(241, 20, 'A11', 0),
(242, 21, 'A11', 0),
(243, 22, 'A11', 0),
(244, 23, 'A11', 0),
(245, 24, 'A11', 0),
(246, 25, 'A11', 0),
(247, 26, 'A11', 0),
(248, 27, 'A11', 0),
(249, 28, 'A11', 0),
(250, 29, 'A11', 0),
(251, 30, 'A11', 0),
(252, 31, 'A11', 0),
(253, 32, 'A11', 0),
(254, 33, 'A11', 0),
(255, 34, 'A11', 0),
(256, 18, 'P11', 0),
(257, 19, 'P11', 0),
(258, 20, 'P11', 0),
(259, 21, 'P11', 12),
(260, 22, 'P11', 0),
(261, 23, 'P11', 0),
(262, 24, 'P11', 0),
(263, 25, 'P11', 0),
(264, 26, 'P11', 0),
(265, 27, 'P11', 15),
(266, 28, 'P11', 0),
(267, 29, 'P11', 20),
(268, 30, 'P11', 0),
(269, 31, 'P11', 0),
(270, 32, 'P11', 2),
(271, 33, 'P11', 2),
(272, 34, 'P11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE IF NOT EXISTS `tbl_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `bobot` float NOT NULL,
  `hasil_bobot` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `hasil_bobot`) VALUES
(6, 'Hobi', 20, 0.4),
(7, 'Umur', 10, 0.2),
(8, 'Status Kegiatan', 5, 0.1),
(9, 'Jarak', 15, 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
  `no` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`no`, `username`, `password`, `status`) VALUES
(1, 'ardika', '34083b561bcf6df3e519950dc5842ac8', 'pengguna'),
(2, 'aditya', '057829fa5a65fc1ace408f490be486ac', 'pengguna'),
(3, 'safira', 'ea9827e9ad232af00af77b2375693568', 'pengguna'),
(4, 'raissa', '8214126d5e926a68fcaa5a873ed59c38', 'pengguna'),
(5, 'meita', '24be8613caa4a7c804987efb6c312f0f', 'pengguna'),
(6, 'catur', '3a9e3a1e836c1ded01fa4d59323723eb', 'pengguna'),
(7, 'rezha', 'edfb15986d681461b02a4f837349bb38', 'pengguna'),
(8, 'ariff', '2b499c9be188aedf561ef5699ddfd597', 'pengguna'),
(9, 'cinta', 'c3653e4408832e6611f37dcd90544de8', 'pengguna'),
(10, 'bagus', '17b38fc02fd7e92f3edeb6318e3066d8', 'pengguna'),
(11, 'fahmi', 'f11d50d63d3891a44c332e46d6d7d561', 'pengguna'),
(12, 'thoriq', 'c0176f364b73516947e8e45b8b3c9e97', 'pengguna'),
(13, 'dela', '4e4a3b45c22f1be8f65067b617722ad6', 'pengguna'),
(14, 'habib', '1391921ec73a2f5dff54e075bbda7487', 'pengguna'),
(15, 'amel', '1391921ec73a2f5dff54e075bbda7487', 'pengguna'),
(16, 'jawad', 'b4da655a32a0316c91fe1fd755e5f0e2', 'pengguna'),
(17, 'aulia', '614913bc360cdfd1c56758cb87eb9e8f', 'pengguna'),
(18, 'fitri', '534a0b7aa872ad1340d0071cbfa38697', 'pengguna'),
(19, 'maghfira', '24e938de8aa0bf35d4f40785844ceca6', 'pengguna'),
(20, 'lina', 'f6f4deb7dad1c2e5e0b4d6569dc3c1c5', 'pengguna'),
(21, 'carissa', '32ab14191a6fac0c525b6b2f86cd0db8', 'pengguna'),
(22, 'pagit', '0a2d51f7c2012614b169b03c65061826', 'pengguna'),
(23, 'regita', '45a803af1b03198772816b2ce03b26df', 'pengguna'),
(24, 'ulfa', '23111cf70745859063eec8a99d6206d9', 'pengguna'),
(25, 'wahyu', '32c9e71e866ecdbc93e497482aa6779f', 'pengguna'),
(26, 'daffa', '135a4e22cda0e0a68499e6d6e2a861aa', 'pengguna'),
(27, 'ica', '1e628956ae1080b8caf3d79545a2d0a7', 'pengguna'),
(28, 'luna', 'ba8a48b0e34226a2992d871c65600a7c', 'pengguna'),
(29, 'rifki', '2a5c4c5a5ba1c332279685ddec507cd9', 'pengguna'),
(30, 'bondan', 'acaa3b2723e9789e72d81321b8328e76', 'pengguna'),
(31, 'azis', 'ece4d80d2597f084b564b95c1bf2f224', 'pengguna'),
(32, 'theo', '7938414aed691e4bf32edcad0d7df0c6', 'pengguna'),
(33, 'maya', 'b2693d9c2124f3ca9547b897794ac6a1', 'pengguna'),
(34, 'angga', '8479c86c7afcb56631104f5ce5d6de62', 'pengguna'),
(35, 'ghani', '3802e72efd3f12809164e522b918b251', 'pengguna'),
(36, 'siti', 'db04eb4b07e0aaf8d1d477ae342bdff9', 'pengguna'),
(37, 'isnaeni', 'a8b75025ab626e00fdfa301719188a13', 'pengguna'),
(38, 'adinda', '80ae4feb95c0768096fcdeee2e395936', 'pengguna'),
(39, 'hasri', 'c6bf0b0784ce28e984d8b9443beecc54', 'pengguna'),
(40, 'rifa', '4797a79a801d05ef1bc5345edaa69cd6', 'pengguna'),
(41, 'ebbya', '836c0036c3f4ef46736e75b2124543fa', 'pengguna'),
(42, 'arla', '836c0036c3f4ef46736e75b2124543fa', 'pengguna'),
(43, 'andre', '19984dcaea13176bbb694f62ba6b5b35', 'pengguna'),
(44, 'jilan', 'cfc38a00fb490f17ce6d408f6688665b', 'pengguna'),
(45, 'aisyah', '26bb533df5747c7a3f2a9cc48a8cf3ee', 'pengguna'),
(46, 'azriel', '108751d6ed0fb569560bbd60f63c3f01', 'pengguna'),
(47, 'meong', '7aa1dfee8619ac8f282e296d83eb55ff', 'pengguna'),
(48, 'adnan', 'd1a0a9e9391af09e978c4c3d11711e75', 'pengguna'),
(49, 'uzril', '5206e51c55946eb56603c11c79cac87b', 'pengguna'),
(50, 'nur', 'b55178b011bfb206965f2638d0f87047', 'pengguna'),
(51, 'adilla', 'f33105dc240abe51a04b00f3a183ca19', 'pengguna'),
(52, 'alga', 'e6f47b8acce0ca7627e3018b3efad838', 'pengguna'),
(53, 'yuuka', 'c73800f9c47806be3fc8557a3aaea3a8', 'pengguna'),
(54, 'exza', 'b9aba4a30b1482013b3d7c0e6846faf1', 'pengguna'),
(55, 'fazli', '6aa327ac73ed5b2d759c93d1ed7baca0', 'pengguna'),
(56, 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'pengguna'),
(57, 'admin', '594280c6ddc94399a392934cac9d80d5', 'pengguna'),
(58, 'adityaraino', '2717c4efd1af668b65034cd9afaa56a6', 'pengguna'),
(59, 'Agusk', '724693126badc753a5244e1767564cbf', 'pengguna'),
(60, 'Ajil', '13d9173fd8c031b139be36976e39614a', 'pengguna'),
(61, 'ajun', '2fde3f3766523023ca876f68e95a3eca', 'pengguna'),
(62, 'banu', '2f3b1c44cd7011fce586353f25fd02b8', 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subkriteria`
--

CREATE TABLE IF NOT EXISTS `tbl_subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_subkriteria` varchar(40) NOT NULL,
  `bobot` int(11) NOT NULL,
  `hasil_bobot` float NOT NULL,
  `bobot_global` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subkriteria`
--

INSERT INTO `tbl_subkriteria` (`id_subkriteria`, `id_kriteria`, `nama_subkriteria`, `bobot`, `hasil_bobot`, `bobot_global`) VALUES
(18, 6, 'Olahraga', 20, 0.2, 0.08),
(19, 6, 'Bermain Game', 5, 0.05, 0.02),
(20, 6, 'Menulis', 13, 0.13, 0.052),
(21, 6, 'Membaca', 12, 0.12, 0.048),
(22, 6, 'Travelling', 14, 0.14, 0.056),
(23, 6, 'Melukis', 6, 0.06, 0.024),
(24, 6, 'Menyanyi', 11, 0.11, 0.044),
(25, 6, 'Menonton', 10, 0.1, 0.04),
(26, 6, 'Musikan', 9, 0.09, 0.036),
(27, 7, 'Dewasa', 15, 0.6, 0.12),
(28, 7, 'Remaja', 10, 0.4, 0.08),
(29, 8, 'Mahasiswa', 20, 0.4, 0.04),
(30, 8, 'Pelajar', 18, 0.36, 0.036),
(31, 8, 'Pekerja', 12, 0.24, 0.024),
(32, 9, 'Akurasi', 20, 0.4, 0.12),
(33, 9, 'Presisi', 17, 0.34, 0.102),
(34, 9, 'Recall', 13, 0.26, 0.078);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `id` int(250) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keaktifan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE IF NOT EXISTS `testing` (
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `Bt` int(11) NOT NULL,
  `batasan` varchar(20) NOT NULL,
  `Bb` int(11) NOT NULL,
  `Sb` int(11) NOT NULL,
  `identifikasi` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `datasetku`
--
ALTER TABLE `datasetku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kategori`
--
ALTER TABLE `data_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grid`
--
ALTER TABLE `grid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorii`
--
ALTER TABLE `kategorii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasii`
--
ALTER TABLE `klasifikasii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_prediksi`
--
ALTER TABLE `list_prediksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stem`
--
ALTER TABLE `stem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_data_akhir`
--
ALTER TABLE `tabel_data_akhir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_data_form`
--
ALTER TABLE `tabel_data_form`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tabel_pengguna_akurasi`
--
ALTER TABLE `tabel_pengguna_akurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_twitter`
--
ALTER TABLE `tabel_twitter`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`kode_uji`);

--
-- Indexes for table `tbl_evaluasi`
--
ALTER TABLE `tbl_evaluasi`
  ADD PRIMARY KEY (`id_evaluasi`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_subkriteria`
--
ALTER TABLE `tbl_subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `datasetku`
--
ALTER TABLE `datasetku`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_kategori`
--
ALTER TABLE `data_kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `grid`
--
ALTER TABLE `grid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `kategorii`
--
ALTER TABLE `kategorii`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `klasifikasii`
--
ALTER TABLE `klasifikasii`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `list_prediksi`
--
ALTER TABLE `list_prediksi`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `stem`
--
ALTER TABLE `stem`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=175;
--
-- AUTO_INCREMENT for table `tabel_data_akhir`
--
ALTER TABLE `tabel_data_akhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_data_form`
--
ALTER TABLE `tabel_data_form`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tabel_pengguna_akurasi`
--
ALTER TABLE `tabel_pengguna_akurasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tabel_twitter`
--
ALTER TABLE `tabel_twitter`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_evaluasi`
--
ALTER TABLE `tbl_evaluasi`
  MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=273;
--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `tbl_subkriteria`
--
ALTER TABLE `tbl_subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
