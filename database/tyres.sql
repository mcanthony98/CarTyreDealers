-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 01:31 PM
-- Server version: 5.7.18-log
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tyres`
--

-- --------------------------------------------------------

--
-- Table structure for table `purpose`
--

CREATE TABLE `purpose` (
  `purpose_id` int(100) NOT NULL,
  `purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purpose`
--

INSERT INTO `purpose` (`purpose_id`, `purpose`) VALUES
(1, 'Heavey goods'),
(2, 'Light goods'),
(3, 'Rough roads'),
(4, 'Tarmac roads'),
(5, 'Long disatnce'),
(6, 'Short distance');

-- --------------------------------------------------------

--
-- Table structure for table `tyres`
--

CREATE TABLE `tyres` (
  `tyre_id` int(100) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `rim` int(100) NOT NULL,
  `width` int(100) NOT NULL,
  `profile` int(100) NOT NULL,
  `load_index` int(100) NOT NULL,
  `speed_symbol` varchar(2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `purpose` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `dealer` int(100) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tyres`
--

INSERT INTO `tyres` (`tyre_id`, `manufacturer`, `type`, `rim`, `width`, `profile`, `load_index`, `speed_symbol`, `image`, `purpose`, `price`, `dealer`, `date_added`) VALUES
(5, 'bridgstone', 'Duravis R200', 17, 200, 60, 91, 'v', 'tyre6.jpg', 3, 5000, 1, '2019-07-29 13:57:09'),
(6, 'Michelin', 'M804', 17, 205, 70, 87, 'T', 'tyre3.jpg', 1, 6500, 1, '2019-08-07 14:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(1) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `type` int(1) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `location` longtext,
  `phone` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `type`, `city`, `location`, `phone`) VALUES
(1, 'Shamwood Company Ltd', 'demo@peel.fr', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'Nairobi', 'juja, Camp David Plaza opp. Juja Police Station', '0715694859'),
(4, 'admin', 'admin@admin.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, NULL, NULL, NULL),
(5, 'Harry Dennis', 'harry@den.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(100) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `weight` int(100) NOT NULL,
  `speed` int(100) NOT NULL,
  `rim` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `manufacturer`, `model`, `weight`, `speed`, `rim`) VALUES
(1, 'Subaru', 'Legacy', 700, 210, 15),
(2, 'Mercedes', 'g wagon', 1500, 210, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purpose`
--
ALTER TABLE `purpose`
  ADD PRIMARY KEY (`purpose_id`);

--
-- Indexes for table `tyres`
--
ALTER TABLE `tyres`
  ADD PRIMARY KEY (`tyre_id`),
  ADD KEY `tyres_ibfk_1` (`purpose`),
  ADD KEY `dealer` (`dealer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purpose`
--
ALTER TABLE `purpose`
  MODIFY `purpose_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tyres`
--
ALTER TABLE `tyres`
  MODIFY `tyre_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tyres`
--
ALTER TABLE `tyres`
  ADD CONSTRAINT `tyres_ibfk_1` FOREIGN KEY (`purpose`) REFERENCES `purpose` (`purpose_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tyres_ibfk_2` FOREIGN KEY (`dealer`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
