-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2021 at 01:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dd2`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `aname` varchar(200) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `city_id`, `state_id`, `aname`, `Doi`, `Dou`, `isactive`) VALUES
(1, 1, 7, 'Ranip', '2021-03-21', NULL, 1),
(2, 1, 7, 'Vadaj', '2021-04-09', NULL, 1),
(3, 1, 7, 'Paldi', '2021-04-09', NULL, 1),
(4, 2, 7, 'Varachha', '2021-04-09', NULL, 1),
(5, 2, 7, 'Adajan', '2021-04-09', NULL, 1),
(6, 3, 15, 'Navi Mumbai', '2021-04-09', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `cname`, `Doi`, `Dou`, `isactive`) VALUES
(1, 7, 'Ahmedabad', '2021-03-21', NULL, 1),
(2, 7, 'Surat', '2021-03-21', NULL, 1),
(3, 15, 'Mumbai', '2021-03-21', NULL, 1),
(4, 7, 'Rajkot', '2021-04-12', NULL, 1),
(5, 15, 'Jalgaon', '2021-04-12', NULL, 1),
(6, 15, 'Pune', '2021-04-12', NULL, 1),
(7, 30, 'New Delhi', '2021-04-12', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `comp_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `u_name`, `u_email`, `description`, `Doi`, `Dou`, `isactive`) VALUES
(1, 'Poojan', 'poojan@gmail.com', 'Start services in Gandhinagar.', '2021-03-22', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver_registration`
--

CREATE TABLE `driver_registration` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_password` varchar(100) NOT NULL,
  `d_phone_no` varchar(16) NOT NULL,
  `d_email` varchar(100) NOT NULL,
  `d_photo` varchar(200) NOT NULL,
  `d_address` varchar(200) NOT NULL,
  `licence` varchar(200) NOT NULL,
  `area_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `d_seq_id` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `Doi` date DEFAULT NULL,
  `Dou` date DEFAULT NULL,
  `permanent` varchar(10) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL,
  `isapprove` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_registration`
--

INSERT INTO `driver_registration` (`d_id`, `d_name`, `d_password`, `d_phone_no`, `d_email`, `d_photo`, `d_address`, `licence`, `area_id`, `city_id`, `state_id`, `d_seq_id`, `answer`, `Doi`, `Dou`, `permanent`, `isactive`, `isapprove`) VALUES
(1, 'Sahil Anilbhai Patel', '1006f0ae5a7ece19828a67ac62288e05', '9876543211', 'sahilpatel@gmail.com', '2.jpg', 'Ranip', 'd.jpeg', 1, 1, 7, 4, 'Cat', '2021-04-06', NULL, '1', 1, 1),
(2, 'Rutvik', '7619beac5f020e818e7ae5b3979a5f17', '8765432108', 'rutvik@gmail.com', '2.jpg', 'New Mumbai', 'd.jpeg', 6, 3, 15, 1, 'Blue', '2021-04-13', NULL, '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(100) NOT NULL,
  `u_id` int(100) NOT NULL,
  `d_id` int(100) NOT NULL,
  `trip_id` int(100) NOT NULL,
  `booking_id` int(100) NOT NULL,
  `p_col` int(1) DEFAULT NULL,
  `d_col` int(1) DEFAULT NULL,
  `d1_col` int(1) DEFAULT NULL,
  `d2_col` int(1) DEFAULT NULL,
  `p1_col` int(11) DEFAULT NULL,
  `dl_col` int(11) DEFAULT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `u_id`, `d_id`, `trip_id`, `booking_id`, `p_col`, `d_col`, `d1_col`, `d2_col`, `p1_col`, `dl_col`, `Doi`, `Dou`, `isactive`) VALUES
(1, 2, 2, 3, 1, 1, 1, 1, 1, 1, 1, '2021-04-14', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL,
  `u_type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `password`, `Doi`, `Dou`, `isactive`, `u_type`) VALUES
(1, 'dispense_deal@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-03-21', NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_booking_detail`
--

CREATE TABLE `parcel_booking_detail` (
  `booking_id` int(11) NOT NULL,
  `trip_id` int(100) DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(100) DEFAULT NULL,
  `pd_id` int(100) DEFAULT NULL,
  `weight` int(5) NOT NULL,
  `p_type_id` int(11) NOT NULL,
  `trip_date` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination_city_id` int(11) NOT NULL,
  `u2_name` varchar(200) NOT NULL,
  `u2_phone_no` varchar(16) NOT NULL,
  `u2_email` varchar(200) NOT NULL,
  `u2_photo` varchar(200) NOT NULL,
  `u2_address` varchar(200) NOT NULL,
  `payment` int(100) DEFAULT NULL,
  `shiped` int(1) DEFAULT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isshow` int(11) DEFAULT NULL,
  `isdshow` int(11) DEFAULT NULL,
  `ispshow` int(11) DEFAULT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcel_booking_detail`
--

INSERT INTO `parcel_booking_detail` (`booking_id`, `trip_id`, `u_id`, `p_id`, `pd_id`, `weight`, `p_type_id`, `trip_date`, `source`, `destination_city_id`, `u2_name`, `u2_phone_no`, `u2_email`, `u2_photo`, `u2_address`, `payment`, `shiped`, `Doi`, `Dou`, `isshow`, `isdshow`, `ispshow`, `isactive`) VALUES
(1, 3, 2, 2, 1, 5, 1, '2021-04-15', '3', 1, 'Jay', '9876678912', 'jay@yahoo.com', '2.jpg', 'Vadaj', 1400, 1, '2021-04-14', NULL, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_registration`
--

CREATE TABLE `parcel_registration` (
  `p_id` int(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_password` varchar(100) NOT NULL,
  `p_phone_no` varchar(100) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `p_photo` varchar(100) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `licence` varchar(100) NOT NULL,
  `area_id` int(100) NOT NULL,
  `city_id` int(100) NOT NULL,
  `state_id` int(100) NOT NULL,
  `p_seq_id` int(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL,
  `isapprove` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel_registration`
--

INSERT INTO `parcel_registration` (`p_id`, `p_name`, `p_password`, `p_phone_no`, `p_email`, `p_photo`, `p_address`, `licence`, `area_id`, `city_id`, `state_id`, `p_seq_id`, `answer`, `Doi`, `Dou`, `isactive`, `isapprove`) VALUES
(1, 'Raj Godvani', 'cac5ff630494aa784ce97b9fafac2500', '9807654321', 'raj@gmail.com', '2.jpg', 'Ranip', 'd.jpeg', 1, 1, 7, 2, '2', '2021-04-08', NULL, 1, 1),
(2, 'Rudra', '7f064da04f6fce39f051d75dcfc43221', '8765432111', 'rudra@gmail.com', '2.jpg', 'Mumbai', 'd.jpeg', 6, 3, 15, 4, 'Cat', '2021-04-13', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_type`
--

CREATE TABLE `parcel_type` (
  `p_type_id` int(11) NOT NULL,
  `p_type_name` varchar(100) NOT NULL,
  `price` int(100) DEFAULT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcel_type`
--

INSERT INTO `parcel_type` (`p_type_id`, `p_type_name`, `price`, `Doi`, `Dou`, `isactive`) VALUES
(1, 'Box', NULL, '2021-03-21', NULL, 1),
(2, 'Liqueur', NULL, '2021-03-21', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `security_question`
--

CREATE TABLE `security_question` (
  `seq_id` int(11) NOT NULL,
  `questionn` varchar(50) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_question`
--

INSERT INTO `security_question` (`seq_id`, `questionn`, `Doi`, `Dou`, `isactive`) VALUES
(1, 'What is your favorite color?', '0000-00-00', '2020-03-06', 1),
(2, 'What is your lucky number?', '0000-00-00', '0000-00-00', 1),
(3, 'What is your birthdate?', '2020-03-17', '0000-00-00', 1),
(4, 'What is you fevourite Animal?', '2020-04-23', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `sname`, `Doi`, `Dou`, `isactive`) VALUES
(1, 'Andhra pradesh', '0000-00-00', '2020-03-05', 1),
(2, 'Arunachal pradesh', '0000-00-00', '0000-00-00', 1),
(3, 'Asham', '0000-00-00', '0000-00-00', 1),
(4, 'Bihar', '0000-00-00', '0000-00-00', 1),
(5, 'Chhattisgarh', '0000-00-00', '0000-00-00', 1),
(6, 'Goa', '0000-00-00', '0000-00-00', 1),
(7, 'Gujarat', '0000-00-00', '0000-00-00', 1),
(8, 'Hariyana', '0000-00-00', '0000-00-00', 1),
(9, 'Himachal pradesh', '0000-00-00', '0000-00-00', 1),
(10, 'Jammu and kashmir', '0000-00-00', '0000-00-00', 1),
(11, 'Jharkhand', '0000-00-00', '0000-00-00', 1),
(12, 'Karnataka', '0000-00-00', '0000-00-00', 1),
(13, 'Kerala', '0000-00-00', '0000-00-00', 1),
(14, 'Madhya pradesh', '0000-00-00', '0000-00-00', 1),
(15, 'Maharashtra', '0000-00-00', '0000-00-00', 1),
(16, 'Manipur', '0000-00-00', '0000-00-00', 1),
(17, 'Meghalaya', '0000-00-00', '0000-00-00', 1),
(18, 'Mizoram', '0000-00-00', '0000-00-00', 1),
(19, 'Nagaland', '0000-00-00', '0000-00-00', 1),
(20, 'Orissa', '0000-00-00', '0000-00-00', 1),
(21, 'Punjab', '0000-00-00', '0000-00-00', 1),
(22, 'Sikkim', '0000-00-00', '0000-00-00', 1),
(23, 'Tamilnadu', '0000-00-00', '0000-00-00', 1),
(24, 'Telangana', '0000-00-00', '0000-00-00', 1),
(25, 'Tripura', '0000-00-00', '0000-00-00', 1),
(26, 'Uttaranchal', '0000-00-00', '0000-00-00', 1),
(27, 'Uttar Pradesh', '0000-00-00', '0000-00-00', 1),
(28, 'West Bengal', '0000-00-00', '0000-00-00', 1),
(29, 'Chandigarh', '0000-00-00', '0000-00-00', 1),
(30, 'Delhi', '0000-00-00', '0000-00-00', 1),
(31, 'Daman and Diu', '0000-00-00', '0000-00-00', 1),
(32, 'Lakshdeep', '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `t_id` int(100) NOT NULL,
  `u_id` int(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `trip_date` varchar(100) NOT NULL,
  `u2_name` varchar(100) NOT NULL,
  `u2_phone_no` varchar(16) NOT NULL,
  `u2_email` varchar(100) NOT NULL,
  `u2_photo` varchar(100) NOT NULL,
  `u2_address` varchar(200) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` int(1) NOT NULL,
  `iscollect` int(1) DEFAULT NULL,
  `isdeliver` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`t_id`, `u_id`, `source`, `destination`, `trip_date`, `u2_name`, `u2_phone_no`, `u2_email`, `u2_photo`, `u2_address`, `Doi`, `Dou`, `isactive`, `iscollect`, `isdeliver`) VALUES
(1, 1, '2', '3', '2021-04-17', 'Saumya', '9099976453', 'saumya@gmail.com', '2.jpg', 'New Mumbai', '2021-04-07', NULL, 1, 1, 1),
(2, 2, '3', '1', '2021-04-30', 'Jayesh', '9876678912', 'jayesh@yahoo.com', '2.jpg', 'Ranip', '2021-04-13', NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `trip_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `source` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `vehicle_model` varchar(100) NOT NULL,
  `vehicle_no` varchar(15) NOT NULL,
  `trip_time` varchar(100) NOT NULL,
  `vehicle_photo` varchar(100) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`trip_id`, `d_id`, `source`, `destination`, `vehicle_model`, `vehicle_no`, `trip_time`, `vehicle_photo`, `doi`, `dou`, `isactive`) VALUES
(1, 1, '1', '2', 'SUV', 'GJ-01-XX-0001', '06:00', 'myvehicle.webp', '2021-03-22', NULL, 1),
(2, 1, '2', '1', 'SUV', 'GJ-01-XX-0001', '18:00', 'myvehicle.webp', '2021-04-08', NULL, 1),
(3, 2, '3', '1', 'Truck', 'MH-04-XX-0001', '21:00', 'truck.jpeg', '2021-04-13', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_photo` varchar(200) NOT NULL,
  `u_address` varchar(200) NOT NULL,
  `area_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_phone_no` varchar(16) NOT NULL,
  `u_seq_id` int(11) NOT NULL,
  `u_answer` varchar(100) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`u_id`, `u_name`, `u_password`, `u_photo`, `u_address`, `area_id`, `city_id`, `state_id`, `u_email`, `u_phone_no`, `u_seq_id`, `u_answer`, `Doi`, `Dou`, `isactive`) VALUES
(1, 'Poojan', '82404d6c94d57f94165f92f5f689cfc7', '2.jpg', 'Ranip', 1, 1, 7, 'poojan@gmail.com', '9876543201', 2, '2', '2021-04-06', NULL, 1),
(2, 'Jinal', '4ea517e1bc6b8efa5d1cf3321857a394', 'female.png', 'Mumbai', 6, 3, 15, 'jinal@yahoo.com', '8765432109', 4, 'Dog', '2021-04-13', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `driver_registration`
--
ALTER TABLE `driver_registration`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `parcel_booking_detail`
--
ALTER TABLE `parcel_booking_detail`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `parcel_registration`
--
ALTER TABLE `parcel_registration`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `parcel_type`
--
ALTER TABLE `parcel_type`
  ADD PRIMARY KEY (`p_type_id`);

--
-- Indexes for table `security_question`
--
ALTER TABLE `security_question`
  ADD PRIMARY KEY (`seq_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `driver_registration`
--
ALTER TABLE `driver_registration`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parcel_booking_detail`
--
ALTER TABLE `parcel_booking_detail`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parcel_registration`
--
ALTER TABLE `parcel_registration`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parcel_type`
--
ALTER TABLE `parcel_type`
  MODIFY `p_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `security_question`
--
ALTER TABLE `security_question`
  MODIFY `seq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `t_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
