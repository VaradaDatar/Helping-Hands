-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 01:06 PM
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
-- Database: `helpinghands`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `D_id` int(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `uPassword` varchar(255) NOT NULL,
  `confPassword` varchar(255) NOT NULL,
  `randsalt` varchar(255) NOT NULL DEFAULT '	$2y$10$iusesomecrazystrings22	',
  `userRole` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`D_id`, `userName`, `email`, `contact`, `uPassword`, `confPassword`, `randsalt`, `userRole`) VALUES
(1, 'gouri18', 'gourikdatar@gmail.com', 2147483647, 'gouri8878', 'gouri8878', '	$2y$10$iusesomecrazystrings22	', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ev_id` int(255) NOT NULL,
  `ev_name` varchar(255) NOT NULL,
  `ev_des` text NOT NULL,
  `ev_date` date NOT NULL,
  `ev_venue` text NOT NULL,
  `ev_reg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ev_id`, `ev_name`, `ev_des`, `ev_date`, `ev_venue`, `ev_reg`) VALUES
(5, 'awareness ', 'awareness drive is been held', '2019-12-01', 'Muktangan', ''),
(18, 'Edu Camp', 'Its our duty to give others what we are getting spread education spread happiness', '2019-10-31', 'Bavdhan , Paranjpe Site', ''),
(20, 'BYGV', 'HGHKNHN', '2019-10-25', 'DES School', '');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `n_id` int(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `addr` text NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `confPassw` varchar(255) NOT NULL,
  `randsalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22	',
  `userRole` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`n_id`, `userName`, `email`, `contact`, `addr`, `uname`, `upassword`, `confPassw`, `randsalt`, `userRole`) VALUES
(1, '', 'varada.k.datar@gmail.com', 2147483647, 'dtjdsfmvjkeftgfelbkflg lifheo5960', 'Varada Datar', 'ilovevirat@18', 'ilovevirat@18', '$2y$10$iusesomecrazystrings22	', 0),
(2, 'varada18', 'varada.k.datar@gmail.com', 912345678, 'kvkfi 7685 kuyf', 'Varada Datar', 'qwertyuiop', 'qwertyuiop', '$2y$10$iusesomecrazystrings22	', 0),
(4, 'varada18', 'varada@gmail.com', 2147483647, '678,hfffuy', 'Varada Datar', 'qwertyuio', 'qwertyuiio', '$2y$10$iusesomecrazystrings22	', 0),
(5, 'varada', 'varada@gmail.com', 1234567890, 'dsdddd', 'Varada Datar', 'student@123', 'student@123', '$2y$10$iusesomecrazystrings22	', 0),
(6, ' maher12', 'adsd@kgg.com', 2147483647, 'kgovvb', 'varada', '1234', '1234', '$2y$10$iusesomecrazystrings22	', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vol`
--

CREATE TABLE `vol` (
  `V_id` int(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `confPassword` varchar(255) NOT NULL,
  `randSalt` varchar(255) DEFAULT '$2y$10$iusesomecrazystrings22',
  `userRole` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vol`
--

INSERT INTO `vol` (`V_id`, `userName`, `email`, `contact`, `upassword`, `confPassword`, `randSalt`, `userRole`) VALUES
(12, 'Varada18', 'varada.k.datar@gmail.com', 2525256, '123456789', '123456789', '$2y$10$iusesomecrazystrings22', 0),
(20, 'Priya', 'priyagandhal@gmail,com', 2525256, 'ASDFG', 'ASDFG', '$2y$10$iusesomecrazystrings22', 0),
(21, 'varada', 'varada.k.datar@gmail.com', 2147483647, 'ilovevirat@18', 'ilovevirat@18', '$2y$10$iusesomecrazystrings22', 0),
(22, 'varada', 'varada.k.datar@gmail.com', 2147483647, 'ilovevirat@18', 'ilovevirat@18', '$2y$10$iusesomecrazystrings22', 0),
(23, 'varada', 'varada.k.datar@gmail.com', 2147483647, 'ilovevirat@18', 'ilovevirat@18', '$2y$10$iusesomecrazystrings22', 0),
(24, 'rmna777', 'rmna77733@gmail.com', 787867452, 'priyavediahe', 'priyavediahe', '$2y$10$iusesomecrazystrings22', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ev_id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`V_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `D_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ev_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `n_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vol`
--
ALTER TABLE `vol`
  MODIFY `V_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
