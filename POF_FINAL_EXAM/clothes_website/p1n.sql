-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 05:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p1n`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `title`, `des`, `photo`) VALUES
(11, 'fgfg', 'dsadsfsf', 0x62616e6e6572312d313635313436303336352e6a7067),
(13, 'ffsfd', 'fsdfsdfdsf', 0x63342d313635313436303533382e6a7067),
(16, 'dfdgfdgds', 'fsdfsdfgsdgsd', 0x63332d313635313436303634352e6a7067),
(18, 'fsdfsdfsf', 'fsdfdsfsdf', 0x63322d313635313436303735302e6a7067),
(19, '', '', 0x2d313635313436303738332e),
(20, 'fdsfdsgds', 'gdsgdsgdgddg', 0x63382d313635313436303739312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `usersName` varchar(100) NOT NULL,
  `usersEmail` varchar(100) NOT NULL,
  `usersUid` varchar(100) NOT NULL,
  `usersPwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'hh', 'hh123@gmail.com', 'hh', '$2y$10$1yOjbjyuNj4J0.gWenE7neD32wYynDLwLwtHHgGO6R7n/CfhLa0Vu'),
(2, 'kk', 'kk123@gmail.com', 'kk', '$2y$10$kgJDpwEAxDDmBqhUOYUXQeyyuEwRwKPiysfGjJ0uZGN.5zZqW7Ttu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD UNIQUE KEY `des` (`des`) USING HASH;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
