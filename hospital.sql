-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 10:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'Test@12345', '28-12-2016 11:42:05 AM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` varchar(255) NOT NULL,
  `appointmentTime` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userStatus` int(11) NOT NULL,
  `doctorStatus` int(11) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(3, 'Homeopath', 4, 2, 700, '2018-10-06', '10:11', '2018-10-05 15:53:01', 1, 1, ''),
(4, 'General Physician', 3, 2, 1200, '2018-10-10', '10:00', '2018-10-08 18:22:21', 1, 1, ''),
(5, 'Ayurveda', 7, 6, 200, '2018-10-13', '11:11', '2018-10-08 18:55:40', 1, 0, ''),
(6, 'Ayurveda', 7, 6, 200, '2018-10-18', '11:11', '2018-10-09 07:45:23', 0, 1, ''),
(7, 'Ayurveda', 5, 6, 8050, '2018-10-17', '11:11', '2018-10-09 07:53:07', 0, 1, ''),
(8, 'Ayurveda', 5, 6, 8050, '2018-10-11', '11:11', '2018-10-09 08:19:43', 0, 1, ''),
(9, 'Ayurveda', 7, 2, 200, '2018-10-23', '11:11', '2018-10-19 20:45:01', 1, 1, ''),
(10, 'Homeopath', 7, 2, 200, '2018-10-18', '11:11', '2018-10-20 19:51:47', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `docFees` varchar(255) NOT NULL,
  `timing1` time NOT NULL,
  `timing2` time NOT NULL,
  `timing3` time NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `docEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `timing1`, `timing2`, `timing3`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'Dentist', 'Anuj', 'New Delhi', '500', '09:00:00', '11:00:00', '02:00:00', 8285703354, 'anuj.lpu1@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '2016-12-29 06:25:37', '04-01-2017 01:27:51 PM'),
(3, 'General Physician', 'Nitesh Kumar', 'Ghaziabad', '1200', '00:00:00', '00:00:00', '00:00:00', 8523699999, 'nitesh@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:43:35', ''),
(4, 'Homeopath', 'Vijay Verma', 'New Delhi', '700', '00:00:00', '00:00:00', '00:00:00', 25668888, 'vijay@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:45:09', ''),
(5, 'Ayurveda', 'Sanjeev', 'Gurugram', '8050', '00:00:00', '00:00:00', '00:00:00', 442166644646, 'sanjeev@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:47:07', ''),
(6, 'General Physician', 'Amrita', 'New Delhi India', '2500', '00:00:00', '00:00:00', '00:00:00', 45497964, 'amrita@test.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:52:50', ''),
(7, 'Homeopath', 'sifat sheikh', 'xyz', '200', '00:00:00', '00:00:00', '00:00:00', 852888888, 'test@demo.com', 'ceb6c970658f31504a901b89dcd3e461', '2017-01-07 08:08:58', '21-10-2018 01:10:16 AM'),
(8, 'cardiology', 'yasir kazi', 'jacob circle agripada 40008', '500', '00:00:00', '00:00:00', '00:00:00', 9867009448, 'yasirkaziee@gmail', '8d03ecfad755ab078ae3fd29c63c2d7d', '2018-10-20 22:30:27', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2018-12-28 06:37:25', ''),
(2, 'General Physician', '2018-12-28 06:38:12', ''),
(3, 'Dermatologist', '2018-12-28 06:38:48', ''),
(4, 'Homeopath', '2018-12-28 06:39:26', ''),
(5, 'Ayurveda', '2018-12-28 06:39:51', ''),
(6, 'Dentist', '2018-12-28 06:40:08', ''),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2018-12-28 06:41:18', ''),
(8, 'cardiology', '2018-10-20 22:26:35', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorstest`
--

CREATE TABLE `doctorstest` (
  `docid` int(2) NOT NULL,
  `name` text NOT NULL,
  `dept` text NOT NULL,
  `dept id` int(3) NOT NULL,
  `days` text NOT NULL,
  `timing` text NOT NULL,
  `cabin` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorstest`
--

INSERT INTO `doctorstest` (`docid`, `name`, `dept`, `dept id`, `days`, `timing`, `cabin`) VALUES
(10, 'Dr Raman Sharma', 'Cardiology', 101, 'Monday,Tuesday,Wednesday', '02:00 PM to 09:00 PM', 204),
(11, 'Dr Alex Dsouza', 'Diabetology', 102, 'Wednesday,Friday,Saturday', '10:00 AM to 06:00 PM', 301),
(24, 'Dr karan Shah', 'Gynaecology', 104, 'Saturday,Sunday', '09:00am to 6:00pm', 505);

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `number` int(10) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `user_name`, `first_name`, `last_name`, `password`, `number`, `age`, `email`, `gender`) VALUES
(2, 'SIFFUDB748@gmail.com', 'sifat', 'sheikh', '3f59905388c4f65e605c1a23c', 0, 0, 'siffudb7@gmail.com', 'Female'),
(3, 'sifatyk', 'sifat', 'sheikh', '688ba714303cd0fc92125a307', 0, 0, 'mehmoodsheikh460@gmail.com', 'Female'),
(4, 'sifatyk', 'sifat', 'sheikh', '688ba714303cd0fc92125a307', 0, 0, 'mehmoodsheikh460@gmail.com', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(17, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-05 15:52:13', '05-10-2018 09:23:27 PM', 1),
(18, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-07 16:46:59', '', 1),
(19, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-07 16:50:35', '', 1),
(20, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-07 16:56:56', '08-10-2018 12:28:34 AM', 1),
(21, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-07 18:58:48', '08-10-2018 12:29:42 AM', 1),
(22, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-08 16:20:29', '', 1),
(23, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-08 18:56:25', '09-10-2018 12:26:38 AM', 1),
(24, 0, 'yasira', 0x3a3a3100000000000000000000000000, '2018-10-08 18:58:05', '09-10-2018 01:27:58 PM', 0),
(25, 7, 'yasirkaziee@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-08 18:58:19', '', 1),
(26, 6, 'sifatyk7@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-09 07:44:31', '', 1),
(27, 6, 'sifatyk7@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-09 07:52:37', '09-10-2018 01:23:28 PM', 1),
(28, 8, 'shruti@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-09 07:54:28', '09-10-2018 01:27:44 PM', 1),
(29, 0, 'sifatyk7@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-09 08:18:15', '', 0),
(30, 0, 'sifatyk7@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-09 08:18:23', '', 0),
(31, 6, 'sifatyk7@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-09 08:18:38', '', 1),
(32, 0, 'sifatyk7@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-18 19:44:27', '', 0),
(33, 0, 'sifatyk7@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-18 19:44:39', '', 0),
(34, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-18 19:44:49', '', 1),
(35, 0, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2018-10-19 20:39:09', '', 0),
(36, 0, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-19 20:39:31', '', 0),
(37, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-19 20:39:45', '', 1),
(38, 0, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2018-10-20 20:11:25', '', 0),
(39, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-20 20:11:30', '', 1),
(40, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-20 20:21:42', '21-10-2018 01:51:56 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(2, 'test123', 'New Delhi India', 'Delhi', 'female', 'test@gmail.com', 'ceb6c970658f31504a901b89dcd3e461', '2018-12-30 05:34:39', '08-10-2018 12:27:37 AM'),
(6, 'sifat sheikh', 'INAYAT MANZIL ROOM-2 1ST FLOOR 36 BALAMIYA LANE', 'MUMBAI', 'female', 'sifatyk7@gmail.com', 'df98829d4abc41a3e285cd89f583abd8', '2018-10-08 18:39:51', ''),
(7, 'yasir kazi', 'jacob circle, agripada, mumbai 400008', 'MUMBAI', 'male', 'yasirkaziee@gmail.com', '10044f2f81eca6a8ed03aedb8cc3d0ac', '2018-10-08 18:57:47', ''),
(8, 'shruti', 'mumbai', 'mumbai', 'female', 'shruti@gmail.com', 'eab6930b3c87b22874b40a0e52fe1ca3', '2018-10-09 07:53:59', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorstest`
--
ALTER TABLE `doctorstest`
  ADD PRIMARY KEY (`docid`,`dept id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctorstest`
--
ALTER TABLE `doctorstest`
  MODIFY `docid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
