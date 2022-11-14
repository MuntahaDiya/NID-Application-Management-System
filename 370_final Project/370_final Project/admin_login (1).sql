-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 03:14 PM
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
-- Database: `admin_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `adinfo`
--

CREATE TABLE `adinfo` (
  `Admin_id` varchar(50) NOT NULL,
  `Admin_name` varchar(100) NOT NULL,
  `Admin_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adinfo`
--

INSERT INTO `adinfo` (`Admin_id`, `Admin_name`, `Admin_Password`) VALUES
('191', 'Siam', '147'),
('191', 'Siam', '147'),
('191', 'Siam', 'v'),
('191', 'Siam', 'v'),
('191', 'Siam', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Admin Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone Num` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Admin Id`, `Name`, `Email`, `Phone Num`, `Password`) VALUES
(12, 'joy', 'joy@mail', 2145, '454'),
(2011, 'bhole', 'jui', 258, '0123'),
(19101613, 'Tanjim', 'tanjimulislamsiam8@gmail.com', 1789196772, '11806038');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `Applicant_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`Applicant_Name`, `Email`, `Pass`, `Phone_number`) VALUES
('Anika', 'anika@gmail.com', '77777', 12345),
('k', 'p', 'v', 1),
('Partho Sarothi', 'partho@gmail.com', '12345', 2147483647),
('abcd', 'abcd@mail', '147', 198),
('tamanna', 'tamanna@gmail.com', '555555', 1879);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Admin Id`,`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
