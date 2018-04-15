-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 12:41 PM
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
('rohan', 'INFY', 10, 5, 50, 200, 1950, 3900),
('rohit', 'WIP', 5, 5, 25, 0, 0, 0),
('sarah', 'ABB', 10, 2000, 20000, 2000, 99900, 99900),
('rohit', 'INFY', 7, 7, 49, 200, 1351, 2757),
('rohit', 'INFY', 7, 7, 49, 200, 1351, 2757),
('rahil', 'APP', 15, 35, 425, 0, 0, 0),
('rahil', 'As', 10, 56, 560, 0, 0, 0),
('rahil', 'MUKUNd', 10, 1000, 10000, 0, 0, 0),
('shloka', 'Rohit', 1, 1000, 1000, 0, 0, 0),
('shloka', 'WIP', 7, 7, 49, 0, 0, 0),
('shloka', 'roh', 1, 10, 100, 2000, 1900, 1900),
('shloka', 'roh', 15, 5, 75, 2000, 29925, 39900),
('shloka', 'roh', 5, 1, 5, 2000, 9995, 199900),
('rahil', 'mukund', 50, 2, 100, 0, 0, 0),
('rahil', 'INFY', 50, 50, 2500, 200, 7500, 300),
('qwerty', 'INFY', 50, 150, 7500, 200, 2500, 33),
('qwerty', 'WIPRO', 100, 200, 20000, 150, -5000, -25),
('manoj', 'INFY', 10, 12, 120, 0, 0, 0),
('manoj', 'INFY', 30, 15, 450, 0, 0, 0);

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
('rahil', 'APP', 15, 35, 425, '0000-00-00'),
('rahil', 'As', 10, 56, 560, '2018-04-19'),
('rahil', 'MUKUNd', 10, 1000, 10000, '2018-04-06'),
('shloka', 'Rohit', 1, 1000, 1000, '2018-04-05'),
('shloka', 'WIP', 7, 7, 49, '2018-04-06'),
('shloka', 'WIP', 15, 10, 150, '2018-04-10'),
('shloka', 'roh', 1, 10, 100, '2018-04-03'),
('shloka', 'roh', 15, 5, 75, '2018-04-11'),
('shloka', 'roh', 5, 1, 5, '2018-04-10'),
('rahil', 'mukund', 50, 2, 100, '2018-04-12'),
('qwerty', 'INFY', 50, 500, 25000, '2018-04-21'),
('qwerty', 'INFY', 50, 50, 2500, '2018-04-05'),
('qwerty', 'INFY', 50, 50, 2500, '2018-04-03'),
('rahil', 'INFY', 50, 50, 2500, '2018-04-17'),
('qwerty', 'INFY', 50, 150, 7500, '2018-04-12'),
('qwerty', 'WIPRO', 100, 200, 20000, '2018-04-11'),
('manoj', 'INFY', 10, 12, 120, '2018-04-18'),
('manoj', 'INFY', 30, 15, 450, '2018-04-03');

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

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`uname`, `ssym`, `qty`, `rate`, `total`, `sdate`) VALUES
('shloka', 'WIP', 15, 10, 150, '2018-04-10'),
('rahil', 'MSFT', 10, 50, 500, '2018-04-18'),
('qwerty', 'INFY', 20, 100, 2000, '2018-04-18'),
('manoj', 'INFY', 10, 15, 150, '0000-00-00');

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
('manoj', 'Manoj Sharma', 'Kalyan', 983658392, 'YFY7656YF', 386529852, 'rohit.pagal.ladka.ha', '2018-04-19', 'manoj'),
('mukund', 'Mukund Vora', 'Vashi', 2147483647, 'AWFWEF34T', 998877665, 'mukund@gmail.com', '2018-04-10', 'mukund'),
('pawar', 'Siddhesh', 'spit', 85201478, 'qwerty123', 963524108, 'siddhesh@spit.com', '2018-04-10', 'power'),
('pratik', 'Pratik Rathi', 'Goregoan', 239572981, 'UBBW6587F', 874698652, 'pratik@gmail.com', '2017-07-01', 'pratik'),
('qwerty', 'qwerty', 'qwer', 7412685, '987456iuyt', 98742685, 'dfghj@dfgh.com', '2018-04-01', 'qwerty'),
('rahil', 'Rahil Sheth', 'Ghatkopar', 346723467, 'AFF464GE2', 997755662, 'rahil@gmail.com', '2016-04-13', 'rahil'),
('rohan', 'Rohan Pawar', 'Bhandup', 457348342, 'AFFQ675HS', 944266548, 'rohan@gmail.com', '2017-09-04', 'rohan'),
('rohit', 'Rohit Sharma', 'Kalyan', 352963452, 'UFGGT876G', 881122556, 'rohit@gmail.com', '2017-03-14', 'rohit'),
('sarah', 'Sarah Sonje', 'Kurla', 895649785, 'TDUU647GJ', 759856685, 'sarah@gmail.com', '2017-07-04', 'sarah'),
('shloka', 'Shloka Saapru', 'Powai', 893249785, 'DGUN868HD', 759798221, 'shloka@gmail.com', '2013-04-08', 'sholka');

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
