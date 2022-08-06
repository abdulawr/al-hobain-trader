-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 12:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aht`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `client_id` int(11) NOT NULL,
  `balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`client_id`, `balance`) VALUES
(3, 784250),
(4, 176500),
(6, 94000),
(7, 276500),
(8, 176500),
(10, 10000),
(17, 132405),
(18, 20000),
(19, 1448755);

-- --------------------------------------------------------

--
-- Table structure for table `cash_balance`
--

CREATE TABLE `cash_balance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `r_balance` bigint(20) NOT NULL,
  `f_balance` bigint(20) NOT NULL,
  `time` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cash_balance`
--

INSERT INTO `cash_balance` (`id`, `date`, `r_balance`, `f_balance`, `time`) VALUES
(11, '2020-04-22', 150, 300, '23:24:44'),
(12, '2020-04-23', 2000, 888, '00:39:33'),
(13, '2020-04-23', 4000, 4000, '12:54:35'),
(14, '2020-04-23', 600, 600, '15:35:08'),
(15, '2020-05-06', 3100, 3100, '00:27:00'),
(16, '2020-05-27', 3000, 3000, '15:42:17'),
(17, '2020-05-27', 3000, 3000, '15:48:19'),
(18, '2020-05-27', 50000, 50000, '15:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `cash_book`
--

CREATE TABLE `cash_book` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` text NOT NULL,
  `value` bigint(20) NOT NULL,
  `type` enum('R','F') NOT NULL,
  `bal_id` int(11) NOT NULL,
  `time` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cash_book`
--

INSERT INTO `cash_book` (`id`, `date`, `name`, `value`, `type`, `bal_id`, `time`) VALUES
(17, '2020-04-22', 'cs3', 50, 'R', 11, '23:24:44'),
(18, '2020-04-22', 'cs2', 50, 'R', 11, '23:24:44'),
(19, '2020-04-22', 'cs1', 50, 'R', 11, '23:24:44'),
(20, '2020-04-22', 'ds3', 100, 'F', 11, '23:24:44'),
(21, '2020-04-22', 'ds2', 100, 'F', 11, '23:24:44'),
(22, '2020-04-22', 'ds1', 100, 'F', 11, '23:24:44'),
(23, '2020-04-23', 'cp', 1000, 'R', 12, '00:39:33'),
(24, '2020-04-23', 'cp', 1000, 'R', 12, '00:39:33'),
(25, '2020-04-23', 'dp', 444, 'F', 12, '00:39:33'),
(26, '2020-04-23', 'dp', 444, 'F', 12, '00:39:33'),
(27, '2020-04-23', 'cs2', 3000, 'R', 13, '12:54:35'),
(28, '2020-04-23', 'cs1', 1000, 'R', 13, '12:54:35'),
(29, '2020-04-23', 'ds2', 1000, 'F', 13, '12:54:35'),
(30, '2020-04-23', 'ds1', 3000, 'F', 13, '12:54:35'),
(31, '2020-04-23', 'cs2', 300, 'R', 14, '15:35:08'),
(32, '2020-04-23', 'cs2', 200, 'R', 14, '15:35:08'),
(33, '2020-04-23', 'cs1', 100, 'R', 14, '15:35:08'),
(34, '2020-04-23', 'ds1', 300, 'F', 14, '15:35:08'),
(35, '2020-04-23', 'ds1', 300, 'F', 14, '15:35:08'),
(36, '2020-05-06', 'c4', 100, 'R', 15, '00:27:00'),
(37, '2020-05-06', 'basit', 2000, 'R', 15, '00:27:00'),
(38, '2020-05-06', 'fahid', 1000, 'R', 15, '00:27:00'),
(39, '2020-05-06', 'food', 100, 'F', 15, '00:27:00'),
(40, '2020-05-06', 'fasal bank', 3000, 'F', 15, '00:27:00'),
(41, '2020-05-27', 'abc', 2000, 'R', 16, '15:42:17'),
(42, '2020-05-27', 'ab', 1000, 'R', 16, '15:42:17'),
(43, '2020-05-27', 'llskdfj', 3000, 'F', 16, '15:42:17'),
(44, '2020-05-27', 'bvd', 2000, 'R', 17, '15:48:19'),
(45, '2020-05-27', 'avc', 1000, 'R', 17, '15:48:19'),
(46, '2020-05-27', 'ba', 3000, 'F', 17, '15:48:19'),
(47, '2020-05-27', 'Abdul Basit', 50000, 'R', 18, '15:52:01'),
(48, '2020-05-27', 'UBL', 50000, 'F', 18, '15:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `loc_id` int(11) DEFAULT NULL,
  `cnic` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`id`, `name`, `address`, `loc_id`, `cnic`, `mobile`, `date`) VALUES
(3, 'Abdul Basit Khan', 'Darra Adam Khel Main Bazar', 2, '88923-82392382', '0305-9235079', '2020-03-11'),
(4, 'Sheraz', 'Swat', 3, '22401-12757223', '0332-2388002', '2020-03-11'),
(6, 'Abdullah', 'Karachi', 5, '22301-13121112', '0333-9172449', '2020-03-11'),
(7, 'Rohaib Ullah', 'Mardan main road peshawar', 3, '83948-83988888', '0334-9392839', '2020-03-11'),
(8, 'Salman', 'near to kohat', 4, '22301-12324323', '0234-2323222', '2020-03-13'),
(9, 'Saad', 'lkjjsdflk;jdl;ksadjflsa', 4, '22401-12757261', '0305-9234757', '2020-03-25'),
(10, 'Adnan', 'Darra Adam Khel', 2, '38293-84928392', '0239-4938493', '2020-04-16'),
(13, 'Abdul ', 'Main bazar Darra Adam Khel', 2, '99384-38847773', '0039-4839483', '2020-04-16'),
(15, 'Taimoor', 'Main Bazar Lahore', 2, '28847-38849377', '0394-0384389', '2020-04-16'),
(16, 'usman', 'badber kohat road', 2, '22401-12527593', '0333-9263869', '2020-04-18'),
(17, 'Kamran Khan', 'Main road Sadar bazar', 4, '92039-28392837', '0332-2388002', '2020-05-04'),
(18, 'Fahid ', 'Main bazar univeristy ', 12, '11111-99999928', '0039-9828883', '2020-05-06'),
(19, 'Rafiullah Khan', 'jkla;jdslkasdjlkjasd;lkj', 1, '23909-20928349', '9083-8792348', '2020-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `fbr_rate`
--

CREATE TABLE `fbr_rate` (
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fbr_rate`
--

INSERT INTO `fbr_rate` (`rate`) VALUES
(7);

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `p_ton` int(11) NOT NULL,
  `p_truck` int(11) NOT NULL,
  `p_total` int(11) NOT NULL,
  `b_price` int(11) NOT NULL,
  `carrage` int(11) NOT NULL,
  `s_truck` int(11) NOT NULL,
  `s_total` int(11) NOT NULL,
  `profit` int(11) DEFAULT NULL,
  `lose` int(11) DEFAULT NULL,
  `time` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `date`, `client_id`, `p_ton`, `p_truck`, `p_total`, `b_price`, `carrage`, `s_truck`, `s_total`, `profit`, `lose`, `time`) VALUES
(5, '2020-03-11', 3, 400, 91100, 136650, 0, 0, 88250, 132375, 0, 4275, '22:53:58'),
(6, '2020-03-16', 3, 10, 91100, 91100, 550, 0, 88250, 88250, 0, 2850, '22:53:58'),
(7, '2020-03-11', 3, 20, 91100, 182200, 550, 5500, 88250, 176500, 0, 5700, '22:53:58'),
(8, '2020-03-12', 6, 20, 91100, 182200, 0, 0, 88250, 176500, 0, 5700, '22:53:58'),
(9, '2020-03-12', 7, 20, 91100, 182200, 0, 0, 88250, 176500, 0, 5700, '22:53:58'),
(11, '2020-03-12', 4, 410, 91100, 182200, 550, 0, 88250, 176500, 0, 5700, '22:53:58'),
(12, '2020-03-12', 7, 20, 91100, 182200, 550, 0, 88250, 176500, 0, 5700, '22:53:58'),
(13, '2020-03-13', 8, 20, 91100, 182200, 450, 0, 88250, 176500, 0, 5700, '22:53:58'),
(14, '2020-03-15', 3, 15, 91100, 136650, 550, 0, 88250, 132375, 0, 4275, '22:53:58'),
(21, '2020-04-18', 3, 15, 91100, 136650, 470, 5750, 88250, 132375, 0, 4275, '22:53:58'),
(22, '2020-04-18', 3, 15, 91100, 136650, 470, 5750, 88250, 132375, 0, 4275, '22:53:58'),
(23, '2020-04-18', 3, 15, 91100, 136650, 470, 5750, 88250, 132375, 0, 4275, '22:53:58'),
(24, '2020-04-19', 3, 15, 91100, 136650, 470, 5750, 88250, 132375, 0, 4275, '10:53:54'),
(25, '2020-04-23', 3, 20, 91100, 182200, 470, 5700, 88300, 176600, 0, 5600, '15:56:37'),
(26, '2020-05-04', 17, 15, 91100, 136650, 470, 5730, 88270, 132405, 0, 4245, '01:23:43'),
(27, '2020-05-06', 3, 15, 91100, 136650, 479, 5467, 90333, 135500, 0, 1151, '00:31:06'),
(28, '2020-05-16', 3, 15, 91100, 136650, 450, 5740, 84260, 126390, 0, 10260, '15:17:28'),
(29, '2020-05-27', 19, 14, 8899, 12459, 4509, 9832, 891968, 1248755, 1236296, 0, '15:38:19'),
(30, '2020-05-27', 3, 10, 91100, 91100, 450, 5750, 84250, 84250, 0, 6850, '15:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `partic` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `balance` int(11) NOT NULL,
  `total_balance` int(11) NOT NULL DEFAULT (`balance` - `credit`),
  `time` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`id`, `client_id`, `credit`, `partic`, `date`, `balance`, `total_balance`, `time`) VALUES
(7, 3, 600000, 'Demo item', '2020-03-16', 676500, 76500, '22:53:45'),
(8, 3, 10000, 'Second Item', '2020-03-30', 76500, 66500, '22:53:45'),
(9, 6, 5000, 'Demo', '2020-03-12', 99000, 94000, '22:53:45'),
(10, 3, 5000, 'Example', '2020-03-12', 66500, 61500, '22:53:45'),
(11, 3, 50000, 'cb', '2020-04-18', 61500, 11500, '22:53:45'),
(12, 3, 100000, 'VC', '2020-04-18', 370500, 270500, '22:53:45'),
(13, 3, 100000, 'VC', '2020-04-19', 402875, 302875, '10:54:44'),
(14, 3, 5000, 'kjasdf', '2020-05-05', 479475, 474475, '15:19:36'),
(15, 3, 475, 'klsajfl;', '2020-05-05', 474475, 474000, '15:20:44'),
(16, 3, 4000, 'vp', '2020-05-06', 474000, 470000, '00:28:32'),
(17, 3, 5500, 'vp', '2020-05-12', 605500, 600000, '01:12:20'),
(18, 3, 5000, 'vp', '2020-05-16', 726390, 721390, '15:18:32'),
(19, 3, 21390, 'jkhlaskdjfhf', '2020-05-27', 721390, 700000, '15:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`) VALUES
(1, 'Kohat'),
(2, 'Peshawar'),
(3, 'Mardan'),
(4, 'Karachi'),
(5, 'Punjab'),
(6, 'Darra Adam Khel'),
(7, 'Islamabad'),
(8, 'Multan'),
(9, 'Swat'),
(10, 'Lahore'),
(11, 'Faysalabad'),
(12, 'University Road'),
(13, 'Test123'),
(14, 'Kjlads;flkjlkasdf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `user` varchar(10) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(0001, 'admin', '$2y$10$afulsheuskeowncseiolsOgMs5d1nktfTVdupzqeaAl57BwIsLZe.'),
(0002, 'user', '$2y$10$afulsheuskeowncseiolsO50MfnKSBnOML9vT71/uSd5lNKqPoAtC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD UNIQUE KEY `client_id` (`client_id`),
  ADD UNIQUE KEY `UC_Person` (`client_id`);

--
-- Indexes for table `cash_balance`
--
ALTER TABLE `cash_balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_book`
--
ALTER TABLE `cash_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bal_id` (`bal_id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loc_id` (`loc_id`);

--
-- Indexes for table `fbr_rate`
--
ALTER TABLE `fbr_rate`
  ADD UNIQUE KEY `rate` (`rate`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH,
  ADD UNIQUE KEY `name_2` (`name`) USING HASH;

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cash_balance`
--
ALTER TABLE `cash_balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cash_book`
--
ALTER TABLE `cash_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `balance`
--
ALTER TABLE `balance`
  ADD CONSTRAINT `balance_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `dealer` (`id`);

--
-- Constraints for table `cash_book`
--
ALTER TABLE `cash_book`
  ADD CONSTRAINT `cash_book_ibfk_1` FOREIGN KEY (`bal_id`) REFERENCES `cash_balance` (`id`);

--
-- Constraints for table `dealer`
--
ALTER TABLE `dealer`
  ADD CONSTRAINT `dealer_ibfk_1` FOREIGN KEY (`loc_id`) REFERENCES `location` (`id`);

--
-- Constraints for table `journal`
--
ALTER TABLE `journal`
  ADD CONSTRAINT `journal_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `dealer` (`id`);

--
-- Constraints for table `ledger`
--
ALTER TABLE `ledger`
  ADD CONSTRAINT `ledger_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `dealer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
