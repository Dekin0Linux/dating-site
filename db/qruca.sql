-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 01:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qruca`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'mark005', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `upload_date`) VALUES
(4, 'WhatsApp Image 2022-11-15 at 12.56.07.jpg', '2022-11-18 00:31:41'),
(8, 'WhatsApp Image 2022-11-15 at 12.56.07.jpg', '2022-11-18 00:33:46'),
(9, 'WhatsApp Image 2022-11-15 at 12.38.20k.jpg', '2022-11-18 00:33:46'),
(10, 'WhatsApp Image 2022-11-15 at 12.38.19..jpg', '2022-11-18 00:33:46'),
(11, 'WhatsApp Image 2022-11-15 at 12.3.jpg', '2022-11-18 01:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `service` varchar(100) NOT NULL,
  `match_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `body_type` varchar(200) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `match_no` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL DEFAULT 0,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `age`, `gender`, `service`, `match_name`, `phone`, `image2`, `body_type`, `interest`, `match_no`, `image`, `amount`, `description`) VALUES
(48, 'Cynthia Marvin', 25, 'female', 'regular', '', '0261965074', 'WhatsApp Image 2022-11-15 at 12.38.19..jpg', 'Thick', '', '', 'WhatsApp Image 2022-11-15 at 12.38.20k.jpg', 250, ''),
(49, 'Jane Doe', 25, 'female', 'regular', '', '0261965074', 'WhatsApp Image 2022-11-15 at 12.38..jpg', 'Thick', 'Adventure, Swimming', '', 'WhatsApp Image 2022-11-15 at 12.3.jpg', 200, ''),
(50, 'Emy white', 25, 'female', 'regular', '', '0261965074', 'WhatsApp Image 2022-11-15 at 12.38.20k.jpg', 'Thick', 'Movies', '', 'WhatsApp Image 2022-11-15 at 12.56.07.jpg', 350, ''),
(51, 'Pat Mary', 20, 'female', 'regular', '', '0261965074', 'gfd.jpg', 'Thick', '', '', 'WhatsApp Image 2022-11-15 at 12.38.20.jpg', 50, ''),
(52, 'Angela Yu', 23, 'female', 'regular', '', '0245555555', 'WhatsApp Image 2022-11-15 at 12.3.jpg', 'Slim', '', '', 'WhatsApp Image 2022-11-15 at 12.38.19..jpg', 200, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
