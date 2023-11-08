-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 05:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbaccessusers`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `petid` int(255) NOT NULL,
  `ownerid` int(255) DEFAULT NULL,
  `petname` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`petid`, `ownerid`, `petname`, `breed`, `gender`, `birthdate`) VALUES
(1, NULL, '123', '123', 123, '0000-00-00'),
(2, NULL, '123', '123', 123, '0000-00-00'),
(3, NULL, '123', '123', 123, '0000-00-00'),
(4, 3, '123', '123', 123, '0000-00-00'),
(5, 5, '123', '123', 123, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `regdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `contact`, `username`, `password`, `regdate`) VALUES
(2, 'Allen', 'Pascual', 'nazarhene@yahoo.com', 0, 'Allen', '500bde0337758c1e07d73f8f1e90d6da4a092e6c', '2023-11-07'),
(3, 'jordan', 'jordan', 'jordan@gmail.com', 0, 'jordan', '1cb5bd5a9e45420321f44c72da5d90d7f0432ffb', '2023-11-07'),
(4, 'poasod', 'aspdoapdo', 'apsodpad@yahoo.com', 0, 'qweqe', '056eafe7cf52220de2df36845b8ed170c67e23e3', '2023-11-07'),
(5, 'Allen', 'Pascual', 'Nazarhene@yahoo.com', 0, 'Allen', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2023-11-07'),
(7, 'Bea', 'Bea', 'Bea@gmail.com', 1221, 'Bea', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2023-11-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`petid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `petid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
