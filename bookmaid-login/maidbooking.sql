-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 11:05 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maidbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mob_no` bigint(250) NOT NULL,
  `add` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `image`, `name`, `mob_no`, `add`, `password`, `email`) VALUES
(1, 'uplods/dfesert.png', 'pvsr', 9685854658, 'solapur', '202cb962ac59075b964b07152d234b70', 'pvsr@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `mob_no` bigint(20) NOT NULL,
  `service` varchar(255) NOT NULL,
  `cleaner_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `c_name`, `mob_no`, `service`, `cleaner_name`) VALUES
(16, 'siddharth shukla', 756843456, 'Electrotherapy', 'William Smith'),
(17, 'vaishnavi gugal', 987654321, 'Electrotherapy', 'John Doe');

-- --------------------------------------------------------

--
-- Table structure for table `cont_us`
--

CREATE TABLE `cont_us` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cont_us`
--

INSERT INTO `cont_us` (`id`, `full_name`, `subject`, `message`, `email`) VALUES
(1, 'Rutuja Gaikwad', 'cleaning', 'hiiii', 'rutugaikwad744@gmail.com'),
(2, 'sakshi', 'cleaning', 'asdf', 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cust_regi`
--

CREATE TABLE `cust_regi` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mob_no` bigint(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_regi`
--

INSERT INTO `cust_regi` (`id`, `image`, `name`, `mob_no`, `address`, `email`, `user_name`, `pass`, `map`) VALUES
(2, '1649939734photosid.jpg', 'shehnaaz  kaur gill', 6767676767, 'Renuka Residency,Jule Solapur', 'sona@gmail.com', 'Rutuja', '202cb962ac59075b964b07152d234b70', ''),
(3, '1650267873Screenshot (25).png', 'shehnaaz  kaur gill', 8899004455, 'Renuka Residency,Jule Solapur', 's@gmail.com', 'shruti', '81dc9bdb52d04dc20036dbd8313ed055', '');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mob_no` bigint(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `addhar` bigint(50) NOT NULL,
  `experience` int(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `fir-reg` varchar(20) DEFAULT NULL,
  `no_of_comp` bigint(255) NOT NULL,
  `acc_no` bigint(255) NOT NULL,
  `ifc` bigint(50) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `salary` bigint(50) NOT NULL,
  `rating` int(100) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `addhar_pdf` varchar(255) DEFAULT NULL,
  `criminal_pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `image`, `name`, `mob_no`, `address`, `city`, `email`, `password`, `addhar`, `experience`, `gender`, `profession`, `fir-reg`, `no_of_comp`, `acc_no`, `ifc`, `detail`, `salary`, `rating`, `status`, `addhar_pdf`, `criminal_pdf`) VALUES
(1, 'upload/dessert.png', 'vaishnavi gugal', 8669566347, 'reliance market, solapur', 'solapur', 'vs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2545343688975, 2, 'female', 'car cleaner', '2', 1, 243454546, 24564537964657886, 'nothing all clear', 2000, 50, 'working', NULL, NULL),
(2, '1651055227b.jpg', 'mona desai', 14656853464, 'damani nagar', 'solapur', 'm@gmail.com', '202cb962ac59075b964b07152d234b70', 7864542315986, 2, '', 'car cleaner', '0', 0, 6487333236333, 232323113232, 'none', 500000, NULL, NULL, '1651055227shravni.pdf', ''),
(3, '1651056010a.jpg', 'mona desai', 14656853464, 'damani nagar', 'solapur', 'm@gmail.com', '202cb962ac59075b964b07152d234b70', 7864542315986, 2, '', 'car cleaner', '0', 1, 6487333236333, 232323113232, 'none', 500000, NULL, NULL, '1651056010b.jpg', ''),
(4, '1651056302a.jpg', 'pvsr 123', 14656853464, 'damani nagar', 'solapur', 'pvsr@gmail.com', '202cb962ac59075b964b07152d234b70', 7864542315986, 2, '', 'car cleaner', '0', 2, 6487333236333, 232323113232, 'none', 500000, NULL, NULL, '1651056302b.jpg', ''),
(5, '', 'mona desai', 14656853464, 'damani nagar', 'solapur', 'm@gmail.com', 'f4bd195b6885b5faab26f098e965deb0', 7864542315986, 2, 'Male', 'car cleaner', '0', 1, 6487333236333, 232323113232, 'nccndtg', 500000, NULL, NULL, '', ''),
(6, '', 'mona desai', 14656853464, 'damani nagar', 'solapur', 'm@gmail.com', 'f4bd195b6885b5faab26f098e965deb0', 7864542315986, 2, 'Male', 'car cleaner', 'YES', 1, 6487333236333, 232323113232, 'nccndtg', 500000, NULL, NULL, '', ''),
(7, '1651129363a.jpg', 'yumraj mane', 14656853464, 'damani nagar', 'solapur', 'pvsr@gmail.com', '202cb962ac59075b964b07152d234b70', 7864542315986, 2, 'Male', 'car cleaner', 'YES', 1, 6487333236333, 232323113232, 'nom', 500000, NULL, NULL, '1651129363shravni.pdf', '1651129363assignment-16.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cont_us`
--
ALTER TABLE `cont_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust_regi`
--
ALTER TABLE `cust_regi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cont_us`
--
ALTER TABLE `cont_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cust_regi`
--
ALTER TABLE `cust_regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
