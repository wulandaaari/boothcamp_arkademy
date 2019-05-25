-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 12:59 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arkademi`
--

-- --------------------------------------------------------

--
-- Table structure for table `skilss`
--

CREATE TABLE IF NOT EXISTS `skilss` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `skills` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `skilss`
--

INSERT INTO `skilss` (`id`, `name`, `user_id`, `skills`) VALUES
(1, 'Wulan Dari', 1, 'PHP, CSS'),
(2, 'Vidia Rahmadhani', 2, ''),
(3, 'Amrina Rosyada', 3, ''),
(4, 'Puja Ulmi', 4, ''),
(5, 'Puji Ulma', 5, ''),
(6, 'Yunita', 6, ''),
(7, 'Ayu Mayang', 7, ''),
(8, 'Melisa', 8, ''),
(9, 'Tatu Buhaya', 9, ''),
(10, 'Sultan Alam', 10, ''),
(11, 'Zulhamdi Setia Darma', 11, ''),
(12, 'Aldo Pranama', 12, ''),
(13, 'Khairul Muhlisin', 13, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Wulan Dari'),
(2, 'Vidia Rahmadhani'),
(3, 'Amrina Rosyada'),
(4, 'Puja Ulmi'),
(5, 'Puji Ulma'),
(6, 'Yunita'),
(7, 'Ayu Mayang'),
(8, 'Melisa'),
(9, 'Tatu Buhaya'),
(10, 'Sultan Alam'),
(11, 'Zulhamdi Setia Darma'),
(12, 'Aldo Pranama'),
(13, 'Khairul Muhlisin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skilss`
--
ALTER TABLE `skilss`
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
-- AUTO_INCREMENT for table `skilss`
--
ALTER TABLE `skilss`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
