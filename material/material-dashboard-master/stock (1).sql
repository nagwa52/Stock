-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 05:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_payment`
--

CREATE TABLE `add_payment` (
  `id` int(222) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `salary` int(222) NOT NULL,
  `data` varchar(222) NOT NULL,
  `notes` varchar(222) NOT NULL,
  `E_id` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delete_emp`
--

CREATE TABLE `delete_emp` (
  `Did` int(222) NOT NULL,
  `Ddate` date NOT NULL,
  `Dname` varchar(222) NOT NULL,
  `Dsalary` int(222) NOT NULL,
  `Ddata` varchar(222) NOT NULL,
  `Dnotes` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delete_emp`
--

INSERT INTO `delete_emp` (`Did`, `Ddate`, `Dname`, `Dsalary`, `Ddata`, `Dnotes`) VALUES
(2, '2021-03-05', 'سلمى محمود ساامح', 5000, 'مهندسه', 'جيد جدا'),
(4, '2021-03-03', 'محمود حسن حسين', 55555, 'doctor', 'good'),
(5, '2021-03-03', 'manal', 4, 'مهندسه', 'hجيد جدا'),
(6, '2021-03-03', 'jomana', 4, 'مهندسه', 'hجيد جدا'),
(7, '2021-03-03', 'ريم محمود', 99999, 'مهندسه', 'هجيد'),
(8, '2021-03-04', 'hala devid mark', 555, 'kkkk', 'llllllll'),
(9, '2021-03-27', 'كليه هندسه جامعه الاسكندريه', 7600, 'للباشمهندسه نغم  محمود فتح', 'مرتب شهرى'),
(10, '2021-03-25', 'محمود السيد', 5000, 'صاحب شركه عقار سما للعقارات', 'لقد اخد المبلغ بالكامل مع مراعاه اى زياده');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `date`) VALUES
(1, 'نجوى طلعت', '2021-02-24'),
(11, 'lamees', '2021-02-26'),
(13, 'manal', '2021-02-26'),
(16, 'haidy', '2021-02-26'),
(23, 'nogaaaa', '2021-02-27'),
(27, 'jomana', '2021-02-27'),
(30, 'lara', '2021-02-27'),
(32, 'سلمى', '2021-02-27'),
(34, 'احمد طلعت', '2021-02-27'),
(35, 'محمود عبد العاطى حسين', '2021-02-27'),
(36, 'ملك طلعت حسن', '2021-02-27'),
(37, 'ريم محمود', '2021-02-28'),
(38, 'لميس محمود', '2021-02-28'),
(39, 'منال محمود', '2021-02-28'),
(40, 'محمود السيد', '2021-02-28'),
(41, 'احمد محمد حسن', '2021-02-28'),
(42, 'سلمى محمود ساامح', '2021-03-02'),
(43, 'kamal mohamed saad', '2021-03-03'),
(44, 'hala devid mark', '2021-03-03'),
(45, 'محمود حسن حسين', '2021-03-03'),
(46, 'معهد ابو قير', '2021-03-04'),
(47, 'معاهد ابو قير العليا', '2021-03-04'),
(48, 'كليه هندسه جامعه الاسكندريه', '2021-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE `trash` (
  `Tid` int(222) NOT NULL,
  `Tdate` date NOT NULL,
  `Tname` varchar(222) NOT NULL,
  `Tsalary` int(222) NOT NULL,
  `Tdata` varchar(222) NOT NULL,
  `Tnotes` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`Tid`, `Tdate`, `Tname`, `Tsalary`, `Tdata`, `Tnotes`) VALUES
(21, '2021-02-26', 'haidy', 5000, 'كمبيوتر', 'جيد'),
(24, '2021-02-27', 'mahmoud a', 5000, 'حاسب', 'جيد'),
(25, '2021-02-27', 'سلمى', 5000, 'حاسب', 'جيد'),
(26, '2021-02-27', 'محمد', 44444, 'حاسب', 'هجيد'),
(27, '2021-02-27', 'احمد طلعت', 5000, 'كمبيوتر', 'جيد'),
(29, '2021-01-12', 'ملك طلعت حسن', 44444, 'ملوكه عسوله', 'ممتازه'),
(30, '2021-02-28', 'محمود عبد العاطى حسين', 5000, 'كمبيوتر', 'جيد'),
(31, '2021-02-28', 'احمد محمد حسن', 4000, 'مهندس كمبيوتر', 'جيد'),
(32, '2021-03-02', 'سلمى محمود ساامح', 7000, 'مهندسه', 'جيد'),
(36, '2021-03-03', 'jomana', 4, 'مهندسه', 'hجيد جدا'),
(37, '2021-03-03', 'ريم محمود', 99999, 'مهندسه', 'هجيد'),
(38, '2021-03-04', 'hala devid mark', 555, 'kkkk', 'llllllll');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_payment`
--
ALTER TABLE `add_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `E_id` (`E_id`);

--
-- Indexes for table `delete_emp`
--
ALTER TABLE `delete_emp`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trash`
--
ALTER TABLE `trash`
  ADD PRIMARY KEY (`Tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_payment`
--
ALTER TABLE `add_payment`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `delete_emp`
--
ALTER TABLE `delete_emp`
  MODIFY `Did` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_payment`
--
ALTER TABLE `add_payment`
  ADD CONSTRAINT `add_payment_ibfk_1` FOREIGN KEY (`E_id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
