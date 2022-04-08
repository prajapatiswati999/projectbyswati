-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 07:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'swati prajapati', 'prajapathswati999@gmail.com', '12345'),
(2, 'subhash prajapati', 'prajapathsubhash2424@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `name`, `sname`, `email`, `phone`, `password`, `city`, `date`) VALUES
(1, 'shrikant', 'Social Studies', 'cseshrikant0806@gmail.com', '8007680161', 'scs', 'scs', '0000-00-00'),
(2, 'Ajay', 'Sharma', 'ajay@gmail.com', '8007680161', '789632147', 'Aurangabad', '0000-00-00'),
(3, 'atish', 'vijay store', 'atish@gmail.com', '84555555', '789632147', 'aurangabad', '2000-10-20'),
(4, 'Gurudev ', 'GRB', 'Pune@gmail.com', '7498139982', 'Pune@2020', 'Auranagbad', '2020-12-20'),
(5, 'shrikant', 'Social Studies', 'c06@gmail.com', '8007680161', 'fPd49ho6', 'Aurangabad', '2000-01-02'),
(6, 'Rupali', 'Yadav', 'rupali@gmail.com', '9423153386', 'h2gsANok', 'Aurangabad', '2020-06-05'),
(7, 'Jyoti Shirish Palkar', 'Shree Om Multi Services', 'jyotipalkar24@gmail.com', '9850320601', 'Jyoti@2020', 'Chiplun', '2020-06-28'),
(8, 'Shravani Dipak Tawade', 'Gajanan Enterprises', 'shravani8207@gmail.com', '7678080207', 'Shravani@2020', 'Talegaon Dabhade', '2020-06-24'),
(10, 'swati prajapati', '431001', 'jaibhawani nagar , aurangabad', '7276036050', '1', '$7276036050', '0000-00-00'),
(11, 'swati prajapati', '431001', 'jaibhawani nagar , aurangabad', '7276036050', '1', '$7276036050', '0000-00-00'),
(12, 'swati prajapati', '431001', 'jaibhawani nagar , aurangabad', '7276036050', '1', '$7276036050', '0000-00-00'),
(13, 'swati prajapati', '431001', 'jaibhawani nagar , aurangabad', '7276036050', '1', '$7276036050', '0000-00-00'),
(14, 'swati prajapati', '431001', 'jaibhawani nagar , aurangabad', '7276036050', '1', '$7276036050', '0000-00-00'),
(15, 'khushi', '431001', 'jaibhani', '7276036050', '2', '$7276036050', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `product_booking`
--

CREATE TABLE `product_booking` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `amount` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_booking`
--

INSERT INTO `product_booking` (`id`, `name`, `pincode`, `address`, `contact`, `amount`) VALUES
(1, 'subhash prajapati', '431001', 'jaybhawani nagar,aurangabad', '7276036050', '1');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'khushi', 'prajapatisubhash2424@gmail.com', '11111'),
(2, 'swati', 'prajapatiswati999@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_booking`
--
ALTER TABLE `product_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_booking`
--
ALTER TABLE `product_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
