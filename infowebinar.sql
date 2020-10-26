-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 12:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infowebinar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `list_url`
--

CREATE TABLE `list_url` (
  `id` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_url`
--

INSERT INTO `list_url` (`id`, `link`, `judul`, `deskripsi`) VALUES
(1, 'https://pbs.twimg.com/media/ElP1mPGVkAIHb3J?format=jpg&name=large', 'Accept Yourself, Develop Yourself, Reach Your Dream', 'bit.ly/CallForPaperGCP'),
(3, 'https://pbs.twimg.com/media/ElPtqsJVkAEa1gY?format=jpg&name=large', 'Pemberdayaan Komunitas dalam Rangka Collaborative Governance guna Mencetak SDM unggul untuk Mewujudukan Smart City di Indonesia', 'bit.ly/webinarATT2020'),
(4, 'https://pbs.twimg.com/media/ElPkF8gVkAIl_9K?format=jpg&name=large', 'Diskusi Kebudayaan Prancis \"Les fêtes en France\" (Hari-Hari Besar Prancis)', 'http://tinyurl.com/daftarWEBINARWPUNHAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_url`
--
ALTER TABLE `list_url`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `list_url`
--
ALTER TABLE `list_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
