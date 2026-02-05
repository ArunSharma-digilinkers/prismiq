-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2025 at 06:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prismiq`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `battery_type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `backup` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `utility` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `category`, `battery_type`, `model`, `series`, `weight`, `backup`, `warranty`, `utility`, `image`) VALUES
(1, 'Inverter', 'Tall Tubular Inverter', 'Pi-tt-18024', 'prismiq', '54 Kg', '2 Hrs:30 Mins', '24 Months', '', 'demo-battery.png'),
(2, 'Inverter', 'Tall Tubular Inverter', 'Pi-tt-20024', 'prismiq', '57 Kg', '3 Hrs:00 Mins', '24/36 Months', '', 'demo-battery.png'),
(3, 'Inverter', 'Tall Tubular Inverter', 'Pi-tt-22024', 'prismiq', '60 Kg', '3 Hrs:30 Mins', '24/36 Months', '', 'demo-battery.png'),
(4, 'Inverter', 'Short Tubular Inverter', 'Pi-st-18024', 'prismiq', '52 Kg', '2 Hrs:30 Mins', '18/24 Months', '', 'demo-battery.png'),
(5, 'Inverter', 'Short Tubular Inverter', 'Pi-st-20024', 'prismiq', '54 Kg', '3 Hrs:00 Mins', '24 Months', '', 'demo-battery.png'),
(6, 'Inverter', 'Short Tubular Inverter', 'Pi-st-22024', 'prismiq', '56 Kg', '3 Hrs:30 Mins', '24 Months', '', 'demo-battery.png'),
(7, 'E-Rickshaw', '', 'Pi-ert-110', 'prismiq', '32 Kg', '2 Hrs:25 Mins', '6 Months', '', ''),
(8, 'E-Rickshaw', '', 'Pi-ert-140', 'prismiq', '36 Kg', '2 Hrs:45 Mins', '12 Months', '', ''),
(9, 'Automotive', '', 'Pi-aut-700', 'prismiq', '10 Kg', '', '12 Months', 'Car/SUV battery', ''),
(10, 'Automotive', '', 'Pi-aut-800', 'prismiq', '15 Kg', '', '12 Months', 'JCB battery', ''),
(11, 'Automotive', '', 'Pi-aut-1000', 'prismiq', '20 Kg', '', '12/18 Months', 'Truck/Bus battery', ''),
(12, 'Automotive', '', 'Pi-aut-1100', 'prismiq', '25 Kg', '', '12/18 Months', 'Tractor battery', ''),
(13, 'Tractor', '', 'Pi-aut-700', 'prismiq', '10 Kg', '', '12 Months', 'Car/SUV battery', ''),
(14, 'Tractor', '', 'Pi-aut-800', 'prismiq', '15 Kg', '', '12 Months', 'JCB battery', ''),
(15, 'Tractor', '', 'Pi-aut-1000', 'prismiq', '20 Kg', '', '12/18 Months', 'Truck/Bus battery', ''),
(16, 'Tractor', '', 'Pi-aut-1100', 'prismiq', '25 Kg', '', '12/18 Months', 'Tractor battery', ''),
(17, 'Solar', 'Tall Tubular Solar', 'Pis-tt-18024', 'prismiq', '64 Kg', '4 Hrs:30 Mins', '36/48 Months', '', ''),
(18, 'Solar', 'Tall Tubular Solar', 'Pis-tt-20024', 'prismiq', '66 Kg', '5 Hrs:30 Mins', '36/48 Months', '', ''),
(19, 'Solar', 'Tall Tubular Solar', 'Pis-tt-22024', 'prismiq', '69 Kg', '6 Hrs:30 Mins', '36/48 Months', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
