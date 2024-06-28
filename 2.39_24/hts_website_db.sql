-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 03:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hts_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `std_num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `comment`, `created_at`, `std_num`) VALUES
(1, 'jordan', 'j@hts.com', 'Hello world', '2024-06-28 11:26:56', '7895'),
(2, 'Brenna Barron', 'lanasasyt@mailinator.com', 'Aut accusantium temp', '2024-06-28 12:23:00', '667eaacf5ead5'),
(3, 'Bruce Booth', 'reqegofife@mailinator.com', 'Pariatur Delectus ', '2024-06-28 12:26:26', '667eabf28c38c'),
(4, 'Rina Sellers', 'fitapekyv@mailinator.com', 'Laudantium qui sit ', '2024-06-28 12:28:39', '667eac776a18a'),
(5, 'Xyla Gates', 'fyne@mailinator.com', 'Sit eos et eiusmod o', '2024-06-28 12:28:57', '667eac89af88c'),
(6, 'Isabelle Stone', 'faxuk@mailinator.com', 'Reiciendis quia dese', '2024-06-28 12:34:28', '667eadd459db7'),
(7, 'Rowan Page', 'bugohehano@mailinator.com', 'Facere fugiat labor', '2024-06-28 12:34:45', '667eade5969ea'),
(8, 'Aurora Woodward', 'disapux@mailinator.com', 'Excepturi adipisci q', '2024-06-28 12:38:53', '667eaedd73c1e'),
(9, 'Sophia Herrera', 'pypewabo@mailinator.com', 'In voluptatem omnis ', '2024-06-28 12:39:19', '667eaef7c4552');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
