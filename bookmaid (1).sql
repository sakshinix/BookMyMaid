-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 10:31 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmaid`
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
  `date` date DEFAULT NULL,
  `mob_no` bigint(20) NOT NULL,
  `service` varchar(255) NOT NULL,
  `cleaner_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `c_name`, `date`, `mob_no`, `service`, `cleaner_name`) VALUES
(17, 'vaishnavi gugal', NULL, 987654321, 'Electrotherapy', 'John Doe'),
(22, 'sona@gmail.com', '2022-06-01', 7447876967, 'Garden Cleaning', 'yumraj '),
(23, 'sona@gmail.com', '2022-06-05', 7447876967, 'PoolCleaning', 'mona');

-- --------------------------------------------------------

--
-- Table structure for table `bookingdelete`
--

CREATE TABLE `bookingdelete` (
  `id` int(9) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `contact` bigint(15) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `cleaner_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdelete`
--

INSERT INTO `bookingdelete` (`id`, `email`, `date`, `contact`, `service`, `cleaner_name`) VALUES
(1, 'sona@gmail.com', '2022-06-01', 7447876967, 'Kitchen', 'yumraj');

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
(2, 'sakshi', 'cleaning', 'asdf', 'a@gmail.com'),
(3, 'shehnaaz  kaur gill', 'cleaner not working ', 'cleaner is not working properly.', 'sona@gmail.com'),
(4, 'shehnaaz', 'cleaning', 'hii', 'sona@gmail.com'),
(5, 'sdd', '', '', ''),
(6, '', '', '', '');

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
(2, '1653110877sana.jpg', 'shehnaaz gill shukla', 6767676767, 'mohali, punjab, india', 'sona@gmail.com', 'shehnaaz', '81dc9bdb52d04dc20036dbd8313ed055', '');

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
(1, 'dessert.jpg', 'vaishnavi gugal', 8669566347, 'reliance market, solapur', 'solapur', 'vs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2545343688975, 2, 'female', 'OfficeCleaning', '2', 1, 243454546, 24564537964657886, 'nothing all clear', 2000, 50, 'working', NULL, '1651129363assignment-16.pdf'),
(7, '1651129363a.jpg', 'yumraj ', 14656853464, 'damani nagar', 'solapur', 'pvsr@gmail.com', '202cb962ac59075b964b07152d234b70', 7864542315986, 2, 'Male', 'WindowCleaning', 'YES', 1, 6487333236333, 232323113232, 'nom', 500000, 50, 'booked', '1651129363shravni.pdf', '1651129363assignment-16.pdf'),
(8, '1653121172face4.jpg', 'Rutuja Sarode', 9686721894, 'Renuka Residency', 'pune', 'r@gmail.com', '202cb962ac59075b964b07152d234b70', 123455667788, 45, 'Female', 'PoolCleaning', 'YES', 2, 123456789012, 12345678, 'none', 5000, NULL, NULL, '1653121172myaddahar.pdf', '1653121172myaddahar.pdf');

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
-- Indexes for table `bookingdelete`
--
ALTER TABLE `bookingdelete`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `bookingdelete`
--
ALTER TABLE `bookingdelete`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cont_us`
--
ALTER TABLE `cont_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cust_regi`
--
ALTER TABLE `cust_regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
