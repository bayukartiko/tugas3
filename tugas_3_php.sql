-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 09:02 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_3_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `databarang`
--

CREATE TABLE `databarang` (
  `kode_barang` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` varchar(255) NOT NULL,
  `kategori` int(5) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `url` varchar(255) NOT NULL,
  `stok` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databarang`
--

INSERT INTO `databarang` (`kode_barang`, `tanggal`, `nama_barang`, `harga_barang`, `kategori`, `satuan`, `url`, `stok`) VALUES
(1, '0000-00-00', 'mie', '5000', 1, '', 'bla', 50),
(2, '2020-04-12', 'jus', '5000', 2, 'pcs', 'abc', 100),
(3, '0000-00-00', 'bakso', '50000', 1, 'kiloan', '', 500),
(4, '0000-00-00', 'kerupuk', '500', 3, 'pcs', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUTExMVFhUWFh0XGBgYFh8YGxsYHyAYGR4XHh4YHSkgGBomGxodIjEhJSorLi4uHR8zODMtNyktLisBCgoKDg0OGxAQGzUlICUvLS0tLS0tLS8tLS0tLS0tLS0tLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKUBMgMBEQACEQEDEQH/', 500),
(5, '0000-00-00', 'coklat', '8000', 1, 'pcs', '', 50),
(6, '0000-00-00', 'es krim', '2000', 1, 'box', '', 500),
(9, '0000-00-00', 'covid', '1000', 2, 'box', '', 4);

--
-- Triggers `databarang`
--
DELIMITER $$
CREATE TRIGGER `formattanggalinsert` BEFORE INSERT ON `databarang` FOR EACH ROW SET NEW.tanggal = DATE_FORMAT(NOW(), '%d-%m-%Y')
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `formattanggalupdate` BEFORE UPDATE ON `databarang` FOR EACH ROW SET NEW.tanggal = DATE_FORMAT(NOW(), '%d-%m-%Y')
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databarang`
--
ALTER TABLE `databarang`
  MODIFY `kode_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
