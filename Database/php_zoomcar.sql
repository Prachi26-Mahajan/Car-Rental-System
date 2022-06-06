-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 02:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_zoomcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindemo`
--

CREATE TABLE `admindemo` (
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindemo`
--

INSERT INTO `admindemo` (`email`, `password`, `type`) VALUES
('admin@yahoo.com', '123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `area_id` int(10) NOT NULL,
  `areaname` varchar(100) NOT NULL,
  `city_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`area_id`, `areaname`, `city_id`) VALUES
(1, 'Ranjit avenue', 1),
(2, 'Kabir Park', 1),
(3, 'Basant Avenue', 1),
(4, 'Gobind Nagar', 2),
(5, 'Tilak Nagar', 2),
(7, 'Hathi Gate', 1),
(8, 'Jallan Wala Bagh', 1),
(9, 'Model Town', 2),
(10, 'Choti Baradari', 2),
(11, 'Nakodar Road', 2),
(12, 'Friends Colony', 2),
(13, 'Clock Tower', 3),
(14, 'Chaura Bazaar', 3),
(15, 'Ghumar Mandi', 3),
(16, 'East Moti Bagh', 3),
(17, 'Green Park', 3),
(18, 'Nitish Vihar', 3),
(19, 'Dream City', 3),
(20, 'Gurdwara Amb Sahib', 9),
(21, 'Phase 7, Industrial Area', 9),
(22, 'Rose Garden', 9),
(23, 'Cricket Stadium', 9);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(10) NOT NULL,
  `mycar_id` int(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `numberofdays` int(5) NOT NULL,
  `gst_percent` varchar(5) NOT NULL,
  `grand_total` int(10) NOT NULL,
  `billdate` date NOT NULL,
  `bookingid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `mycar_id`, `email`, `start_date`, `end_date`, `numberofdays`, `gst_percent`, `grand_total`, `billdate`, `bookingid`) VALUES
(11, 8, 'user@yahoo.com', '2021-08-03', '2021-08-05', 2, '12', 2240, '2021-08-02', 20);

-- --------------------------------------------------------

--
-- Table structure for table `blacklist_cars`
--

CREATE TABLE `blacklist_cars` (
  `id_blacklist_cars` int(10) NOT NULL,
  `mycar_id` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pickupplace` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `mycar_id` int(10) NOT NULL,
  `driving_license_number` varchar(50) NOT NULL,
  `aadhaar_number` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `email`, `pickupplace`, `city_id`, `mycar_id`, `driving_license_number`, `aadhaar_number`, `start_date`, `end_date`) VALUES
(22, 'user@yahoo.com', 1, 1, 8, '1234567890', '1234567898', '2021-08-03', '2021-08-05'),
(21, 'user@yahoo.com', 1, 1, 8, '1234567890', '1234567898', '2021-08-03', '2021-08-05'),
(20, 'user@yahoo.com', 1, 1, 8, '1234567890', '1234567898', '2021-08-03', '2021-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `desciption` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_name`, `brand`, `desciption`, `photo`) VALUES
('Swift Desire', 'Maruti Suzuki', 'Get used to second glances as the smooth sedan styling of the all new Maruti Suzuki Dzire leaves everyone awestruck.', 'car_photos/swift desire.jpg'),
('Ciaz', 'Maruti Suzuki', 'Ergonomic design that lets you indulge in true luxury.', 'car_photos/ciaz.png'),
('Ertiga', 'Maruti Suzuki', 'Maruti Suzuki Ertiga class-leading Smart Hybrid Technology', 'car_photos/ertiga.jpg'),
('i20', 'Hyundai', 'Excellent style and sportiness', 'car_photos/hyundai-elite-i20.jpg'),
('A6', 'Audi', 'The most attractive way of going your own way.', 'car_photos/a6.jpg'),
('Innova', 'Toyota', '6 speed super intelligent electronically controlled automatic transmission that draws out the engineâ€™s maximum potential', 'car_photos/innova.png'),
('WagonR', 'Maruti Suzuki', 'Greatness is found in attention to details.', 'car_photos/WagonR.png'),
('Tavera', 'Chevrolet', 'The Tavera is a utility vehicle which surprises, and pleasantly', 'car_photos/tavera.png');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(10) NOT NULL,
  `cityname` varchar(100) NOT NULL,
  `postalcode` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `cityname`, `postalcode`) VALUES
(1, 'Amritsar', '143001'),
(2, 'Jalandhar', '144022'),
(3, 'Ludhiana', '141002'),
(9, 'Mohali', '160055'),
(13, 'Brock Solis', '789546');

-- --------------------------------------------------------

--
-- Table structure for table `mycars`
--

CREATE TABLE `mycars` (
  `mycar_id` int(10) NOT NULL,
  `model` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `condition` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `coverphoto` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `insurance_validity` varchar(100) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `rental_id` int(10) NOT NULL,
  `rent` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycars`
--

INSERT INTO `mycars` (`mycar_id`, `model`, `color`, `condition`, `description`, `coverphoto`, `reg_no`, `insurance_validity`, `car_name`, `rental_id`, `rent`) VALUES
(8, '2017', 'Blue', 'New', 'Na', 'mycar/swift desire.jpg', 'PB02 AC 1234', '1 year', 'Swift Desire', 4, 1000),
(10, '2010', 'Brown', 'Good', 'Maruti Suzuki Ertiga class-leading Smart Hybrid Technology', 'mycar/ertiga.jpg', 'PB02 BB 5879', '1 year', 'Ertiga', 1, 2000),
(9, '2016', 'White', 'New', 'Na', 'mycar/ciaz.png', 'PB08 GH 5713', '1 year', 'Ciaz', 4, 1000),
(5, '2012', 'Silver', 'Good', 'Car made by the German automaker', 'mycar/a6.jpg', 'PB09 ML 6987', '1 year', 'A6', 1, 3000),
(11, '2013', 'Grey', 'New', '6 speed super intelligent', 'mycar/innova.png', 'PB02 BB 0042', '1 year', 'Innova', 1, 5000),
(12, '2011', 'Red', 'Average', 'The Tavera is a utility vehicle', 'mycar/tavera.png', 'PB02 CS 4242', '1 year', 'Tavera', 1, 2300),
(14, '2018', 'Red', 'Good', 'na', 'mycar/ertiga.jpg', 'phbdh83', '2 years', 'Swift Desire', 1, 890),
(15, '2020', 'White', 'Average', 'Gshdh', 'mycar/swift desire.jpg', 'Hshshdna', '2years', 'WagonR', 1, 809);

-- --------------------------------------------------------

--
-- Table structure for table `public_signup`
--

CREATE TABLE `public_signup` (
  `email` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` bigint(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_signup`
--

INSERT INTO `public_signup` (`email`, `password`, `fullname`, `gender`, `mobile`) VALUES
('user@yahoo.com', '123', 'abc', 'male', 1234567898),
('kumar@gmail.com', '123', 'Mr Kumar', 'male', 1234567898);

-- --------------------------------------------------------

--
-- Table structure for table `rental_areas`
--

CREATE TABLE `rental_areas` (
  `rental_areas_id` int(10) NOT NULL,
  `area_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `rental_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_areas`
--

INSERT INTO `rental_areas` (`rental_areas_id`, `area_id`, `city_id`, `rental_id`) VALUES
(317, 9, 2, 1),
(316, 5, 2, 1),
(315, 4, 2, 1),
(314, 5, 2, 4),
(313, 3, 1, 4),
(312, 1, 1, 4),
(311, 2, 1, 1),
(309, 1, 1, 1),
(318, 12, 2, 1),
(319, 13, 3, 1),
(320, 14, 3, 1),
(321, 19, 3, 1),
(322, 21, 9, 1),
(323, 22, 9, 1),
(324, 4, 2, 2),
(325, 11, 2, 2),
(326, 20, 9, 2),
(327, 20, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rental_signup`
--

CREATE TABLE `rental_signup` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `GSTIN` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `Adhar_no` varchar(20) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_signup`
--

INSERT INTO `rental_signup` (`ID`, `Name`, `GSTIN`, `Address`, `Adhar_no`, `Mobile`, `Email`, `Password`, `Status`) VALUES
(1, 'Khushdeep', '37AAACI1681G2ZN', 'New Amritsar', '452712360187', '8564287156', 'rental@yahoo.com', '123', 'Active'),
(2, 'Abhishek', '35AAACI1681G1ZS', 'Court Road, Amritsar', '554621967764', '9623652320', 'abhishek@gmail.com', '123', 'Pending'),
(4, 'Harman', '12AAACI1681G1Z0', 'Mall Road, Amrisar', '223514889677', '8989898989', 'harman@gmail.com', '123', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindemo`
--
ALTER TABLE `admindemo`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `mycar_id` (`mycar_id`),
  ADD KEY `bookingid` (`bookingid`);

--
-- Indexes for table `blacklist_cars`
--
ALTER TABLE `blacklist_cars`
  ADD PRIMARY KEY (`id_blacklist_cars`),
  ADD KEY `mycar_id` (`mycar_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `email` (`email`),
  ADD KEY `pickupplace` (`pickupplace`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `mycar_id` (`mycar_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_name`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `mycars`
--
ALTER TABLE `mycars`
  ADD PRIMARY KEY (`mycar_id`),
  ADD KEY `car_name` (`car_name`),
  ADD KEY `rental_id` (`rental_id`);

--
-- Indexes for table `public_signup`
--
ALTER TABLE `public_signup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rental_areas`
--
ALTER TABLE `rental_areas`
  ADD PRIMARY KEY (`rental_areas_id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `rental_id` (`rental_id`);

--
-- Indexes for table `rental_signup`
--
ALTER TABLE `rental_signup`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `area_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blacklist_cars`
--
ALTER TABLE `blacklist_cars`
  MODIFY `id_blacklist_cars` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mycars`
--
ALTER TABLE `mycars`
  MODIFY `mycar_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rental_areas`
--
ALTER TABLE `rental_areas`
  MODIFY `rental_areas_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT for table `rental_signup`
--
ALTER TABLE `rental_signup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
