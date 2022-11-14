-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 04:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(11) NOT NULL,
  `date` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `number`, `date`) VALUES
(1, 'Nuranmomo', 'nuran.momo@gmail.com', '01912345987', '12-12-2022'),
(2, 'Sadia Mahmud', 'sadia.mahmud@g.bracu.ac.bd', '01912345789', '2022-05-20'),
(3, 'Asif Iqbal', 'asif123@gmail.com', '0982385000', '2023-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(20) CHARACTER SET latin1 NOT NULL,
  `bg` varchar(20) CHARACTER SET latin1 NOT NULL,
  `bcno` varchar(16) NOT NULL,
  `faname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fanid` varchar(16) NOT NULL,
  `maname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `manid` varchar(16) NOT NULL,
  `maritalstat` varchar(10) CHARACTER SET latin1 NOT NULL,
  `presentaddress` varchar(30) CHARACTER SET latin1 NOT NULL,
  `permanentaddress` varchar(30) CHARACTER SET latin1 NOT NULL,
  `edu` varchar(30) CHARACTER SET latin1 NOT NULL,
  `work` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `gender`, `bg`, `bcno`, `faname`, `fanid`, `maname`, `manid`, `maritalstat`, `presentaddress`, `permanentaddress`, `edu`, `work`) VALUES
(1, 'diya', 'mun', 'f', 'a+', '123bnmkjh', 'abu', '34567kf', 'tamanna', '67890kfjh', 'divorced', '304 east', 'natore', 'unedu', 'student'),
(7, 'Shweta', 'Samaira', 'n', 'a', '1234567890', 'Shahidul Islam', '6789064532', 'Tarana', '456789032', 'si', 'Bashabo', 'Bashabo', 'HSC', 'Student'),
(8, 'Partho ', 'Sarothi', 'm', 'a', '0987645678', 'uitred', '01287234', 'Rozy', '34560123', 'di', 'noakhali', 'Barisal', 'HSC', 'Student'),
(9, 'Tanjimul', 'Islam', 'm', 'a', '300912234556', 'Kalam Azad', '0990877865', 'tia', '9002344456', 'wi', 'noakhali', 'Barisal', 'HSC', 'Student'),
(10, 'Asif ', 'Iqbal', 'm', 'a', '46890987765', 'kalam rahman', '1234566098', 'jorina amin', '0981236575', 'si', 'Mirpur Dhaka', 'Rajshahi', 'HSC', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `password`) VALUES
(1, 'diya123', 'diamuntaha11@gmail.com', 1307988349, '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Partho Sarothi', 'partho.sarothi@gmail.com', 1987456932, '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Siam', 'siam123@gmail.com', 1234567890, '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 'Marzia Mumu', 'marzia.mumu@gmail.com', 1345678901, '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'Muntaha Diya', 'dia123@gmail.com', 1912309876, '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'Marzia Islam', 'marziamumu@gmail.com', 1923089318, '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bc-no` (`bcno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
