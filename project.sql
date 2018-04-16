-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 11:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `uname` varchar(20) NOT NULL,
  `ssym` varchar(15) NOT NULL,
  `qty` int(10) NOT NULL,
  `rate` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `currprice` int(10) NOT NULL,
  `profit` int(10) NOT NULL,
  `pper` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`uname`, `ssym`, `qty`, `rate`, `total`, `currprice`, `profit`, `pper`) VALUES
('rohan', 'INFY', 10, 1012, 10120, 1134, 1220, 12),
('rohan', 'WIPRO', 5, 300, 1500, 291, -45, -3),
('rohan', 'ABB', 100, 20, 2000, 22, 200, 10),
('mukund', 'INFY', 5, 1050, 5250, 1134, 420, 8),
('mukund', 'IEX', 10, 1500, 15000, 1610, 1100, 7),
('mukund', 'ONGC', 10, 200, 2000, 181, -190, -10),
('mukund', 'SBIN', 10, 260, 2600, 250, -100, -4),
('rohit', 'NCC', 10, 110, 1100, 130, 200, 18),
('rohit', 'ITC', 20, 250, 5000, 265, 300, 6),
('rohit', 'INFY', 20, 1100, 22000, 1134, 680, 3),
('rahil', 'INFY', 10, 1000, 10000, 1134, 1340, 13),
('rahil', 'IEX', 10, 1500, 15000, 1610, 1100, 7),
('rahil', 'SBIN', 10, 260, 2600, 250, -100, -4),
('pawar', 'NCC', 20, 100, 2000, 130, 600, 30),
('pawar', 'WIPRO', 10, 300, 3000, 291, -90, -3),
('pawar', 'ONGC', 10, 150, 1500, 181, 310, 21),
('pawar', 'SBIN', 10, 270, 2700, 250, -200, -7);

-- --------------------------------------------------------

--
-- Table structure for table `transactionb`
--

CREATE TABLE `transactionb` (
  `uname` varchar(20) NOT NULL,
  `ssym` varchar(15) NOT NULL,
  `qty` int(10) NOT NULL,
  `rate` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `bdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactionb`
--

INSERT INTO `transactionb` (`uname`, `ssym`, `qty`, `rate`, `total`, `bdate`) VALUES
('rohan', 'INFY', 10, 1012, 10120, '2018-04-04'),
('rohan', 'WIPRO', 5, 300, 1500, '2018-04-04'),
('rohan', 'ABB', 100, 20, 2000, '2018-04-02'),
('mukund', 'INFY', 5, 1050, 5250, '2018-02-15'),
('mukund', 'IEX', 10, 1500, 15000, '2018-03-20'),
('mukund', 'ONGC', 10, 200, 2000, '2018-02-08'),
('mukund', 'SBIN', 10, 260, 2600, '2017-12-11'),
('rohit', 'NCC', 10, 110, 1100, '2018-02-10'),
('rohit', 'ITC', 20, 250, 5000, '2017-12-13'),
('rohit', 'INFY', 20, 1100, 22000, '2018-04-10'),
('rahil', 'INFY', 10, 1000, 10000, '2018-04-02'),
('rahil', 'IEX', 10, 1500, 15000, '2018-04-04'),
('rahil', 'SBIN', 10, 260, 2600, '2018-02-08'),
('pawar', 'NCC', 20, 100, 2000, '2018-02-20'),
('pawar', 'WIPRO', 10, 300, 3000, '2018-02-09'),
('pawar', 'ONGC', 10, 150, 1500, '2017-10-10'),
('pawar', 'SBIN', 10, 270, 2700, '2017-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `uname` varchar(20) NOT NULL,
  `ssym` varchar(15) NOT NULL,
  `qty` int(10) NOT NULL,
  `rate` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `sdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `aadhar` int(12) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `mob` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `name`, `address`, `aadhar`, `pan`, `mob`, `email`, `dob`, `pwd`) VALUES
('mukund', 'Mukund Vora', 'Vashi', 2147483647, 'AWFWEF34T', 998877665, 'mukund@gmail.com', '2018-04-10', 'mukund'),
('pawar', 'Siddhesh', 'spit', 85201478, 'qwerty123', 963524108, 'siddhesh@spit.com', '2018-04-10', 'siddesh'),
('pratik', 'Pratik Rathi', 'Goregoan', 239572981, 'UBBW6587F', 874698652, 'pratik@gmail.com', '2017-07-01', 'pratik'),
('rahil', 'Rahil Sheth', 'Ghatkopar', 346723467, 'AFF464GE2', 997755662, 'rahil@gmail.com', '2016-04-13', 'rahil'),
('rohan', 'Rohan Pawar', 'Bhandup', 457348342, 'AFFQ675HS', 944266548, 'rohan@gmail.com', '2017-09-04', 'rohan'),
('rohit', 'Rohit Sharma', 'Kalyan', 352963452, 'UFGGT876G', 881122556, 'rohit@gmail.com', '2017-03-14', 'rohit'),
('sarah', 'Sarah Sonje', 'Kurla', 895649785, 'TDUU647GJ', 759856685, 'sarah@gmail.com', '2017-07-04', 'sarah'),
('shloka', 'Shloka Saapru', 'Powai', 893249785, 'DGUN868HD', 759798221, 'shloka@gmail.com', '2013-04-08', 'shloka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD KEY `uname` (`uname`);

--
-- Indexes for table `transactionb`
--
ALTER TABLE `transactionb`
  ADD KEY `uname` (`uname`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD KEY `uname` (`uname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `adhar` (`aadhar`),
  ADD UNIQUE KEY `pan` (`pan`),
  ADD UNIQUE KEY `mob` (`mob`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `user` (`uname`);

--
-- Constraints for table `transactionb`
--
ALTER TABLE `transactionb`
  ADD CONSTRAINT `transactionb_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `user` (`uname`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `user` (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
