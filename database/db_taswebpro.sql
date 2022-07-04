-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 05:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_taswebpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `description` text NOT NULL,
  `location` text NOT NULL,
  `img_path` text NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `location`, `img_path`, `date_updated`) VALUES
(11, 'Pemrograman Web', 'Didik Setiawan', 'Pemrograman Web Untuk Pemula', '123a', './../assets/img/202207030824_web.jpg', '2022-07-03 13:24:23'),
(12, 'Pemrograman Web 2', 'Rohi Abdulloh', 'Pemrograman Web Untuk Pemula', '321A', './../assets/img/202207030827_programmer.jpg', '2022-07-03 13:27:56'),
(14, 'Digital Marketing 2', 'Andreas Agung', 'Digital Marketing Lanjutan', '312a', './../assets/img/202207030947_BLK_TFODM2021442469.jpg', '2022-07-03 14:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_books`
--

CREATE TABLE `borrowed_books` (
  `id` int(30) NOT NULL,
  `book_id` int(30) NOT NULL,
  `borrower_id` int(30) NOT NULL,
  `date_borrowed` date NOT NULL,
  `date_return` date NOT NULL,
  `book_number` varchar(50) NOT NULL,
  `date_received` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT ' 1 = returned',
  `user_id` int(30) NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowed_books`
--

INSERT INTO `borrowed_books` (`id`, `book_id`, `borrower_id`, `date_borrowed`, `date_return`, `book_number`, `date_received`, `status`, `user_id`, `date_updated`) VALUES
(1, 2, 4, '2020-09-01', '2020-09-06', '1001', '2020-09-09', 1, 2, '2020-09-09 14:57:42'),
(3, 4, 1, '2020-09-09', '2020-09-12', '1002', NULL, 0, 1, '2020-09-09 15:29:25'),
(5, 11, 6, '2022-07-03', '2022-07-06', '2', NULL, 0, 2, '2022-07-03 14:24:15'),
(6, 14, 7, '2022-07-03', '2022-07-06', '1', NULL, 0, 2, '2022-07-03 14:50:06'),
(7, 0, 0, '2022-07-03', '2022-07-06', '', NULL, 0, 2, '2022-07-03 15:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `id` int(30) NOT NULL,
  `student_id_no` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `date_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `student_id_no`, `name`, `address`, `contact`, `date_updated`) VALUES
(6, '672019131', 'Stefanus Dorotheoputra', 'Wisma Dipo 127', '082157273921', '2022-07-03 13:06:06'),
(7, '672019000', 'Tanem Hikmat', 'Salatiga', '082154543921', '2022-07-03 14:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `user_type` tinyint(1) DEFAULT 1 COMMENT '1 = admin',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_type`, `date_updated`) VALUES
(1, 'Stefanus', 'Steftheo', 'steftheo', 1, '2022-07-03 12:55:41'),
(2, 'Administrator', 'admin', 'admin123', 1, '2020-09-09 12:10:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
