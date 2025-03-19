-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 04:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `qid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phoneno` bigint(20) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`qid`, `name`, `email`, `phoneno`, `message`, `date`) VALUES
(1, 'Andy', 'andy@live.com', 6569748576, 'It is test query', '2023-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `mobilespecification`
--

CREATE TABLE `mobilespecification` (
  `pid` int(11) NOT NULL,
  `os` varchar(30) DEFAULT NULL,
  `processor` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `sim_type` varchar(30) DEFAULT NULL,
  `hybrid_sim_slot` tinyint(1) DEFAULT NULL,
  `display_size` varchar(30) DEFAULT NULL,
  `resolution` varchar(30) DEFAULT NULL,
  `internal_storage` varchar(30) DEFAULT NULL,
  `ram` varchar(10) DEFAULT NULL,
  `primary_camera` varchar(30) DEFAULT NULL,
  `secondary_camera` varchar(30) DEFAULT NULL,
  `network_type` varchar(30) DEFAULT NULL,
  `battery_capacity` varchar(30) DEFAULT NULL,
  `width` varchar(10) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `warranty_summary` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobilespecification`
--

INSERT INTO `mobilespecification` (`pid`, `os`, `processor`, `color`, `sim_type`, `hybrid_sim_slot`, `display_size`, `resolution`, `internal_storage`, `ram`, `primary_camera`, `secondary_camera`, `network_type`, `battery_capacity`, `width`, `height`, `warranty_summary`) VALUES
(15001, 'OxygenOS based on Android™ 13', 'Snapdragon® 8+ Gen 1 ', 'Galactic Silver', 'Dual Sim', 0, '17.02 cm (6.7 inch)', '2772 X 1240 pixels 450 ppi', '256GB', '16GB', '50MP', '16MP', '5G', '5,000 mAh', '7.43 cm', '16.34 cm', 'Domestic warranty of 12 months on phone & 6 months on accessories'),
(15002, 'OxygenOS based on Android™ 12', 'Dimensity 8100-MAX', 'Forest Green', 'Dual Sim', 0, '17.02 cm (6.7 inch)', '2412 X 1080 pixels 394 ppi', '256GB', '12GB', '50MP', '16MP', '5G', '5,000 mAh', '7.55 cm', '16.33 cm', 'Domestic warranty of 12 months on phone & 6 months on accessories'),
(15003, 'OxygenOS 13.0 based on Android', 'Qualcomm® Snapdragon™ 8 Gen 2', 'Eternal Green', 'Dual Sim', 0, '17.02 cm (6.7 inch)', '3216*1440 (QHD+), 525 ppi', '256GB', '16GB', '50MP', '16MP', '5G', '5,000 mAh', '7.41 cm', '16.31 cm', 'Domestic warranty of 12 months on phone & 6 months on accessories'),
(15004, 'Android 11', 'Qualcomm Snapdragon 870', 'NEO Blue', 'Dual Sim', 0, '16.81 cm (6.62 inch)', '1080×2400 FHD+ 397 ppi', '256GB', '12GB', '64MP', '16MP', '5G', '5,000 mAh', '7.58cm', '16.29cm', 'Domestic warranty of 12 months on phone & 6 months on accessories'),
(15005, 'MIUI 12.5, Android 11', 'Qualcomm®️ Snapdragon™️ 888', 'Moonlight White', 'Dual Sim', 0, '16.94 cm (6.67 inch)', '1080 x 2460 pixels', '256GB', '12GB', '108MP', '16MP', '5G', '5,000 mAh', '7.69cm', '16.41cm', 'Domestic warranty of 12 months on phone & 6 months on accessories'),
(15006, 'MIUI 12,Android 10', 'Qualcomm® Snapdragon™ 865', 'Cosmic Black', 'Dual Sim', 0, '16.94 cm (6.67 inch)', '2400 x 1080 Pixels', '128GB', '8GB', '108MP', '20MP', '5G', '5,000 mAh', '7.64cm', '16.51cm', 'Domestic warranty of 12 months on phone & 6 months on accessories'),
(15007, 'MIUI 12.5, Android 11', 'Mediatek Dimensity 920 5G', 'Pacific Pearl', 'Dual Sim', 0, '16.94 cm (6.67 inch)', '2400 x 1080 Pixels', '128GB', '8GB', '108MP', '16MP', '5G', '4500 mAh', '7.61cm', '16.36cm', 'Domestic warranty of 12 months on phone & 6 months on accessories'),
(15008, 'ColorOS 12.1, Android 12', 'MediaTek Dimensity 8100-MAX', 'Glazed Green', 'Dual Sim', 0, '17.02 cm (6.7 inch)', '2412 x 1080 Pixels', '256GB', '12GB', '50MP', '32MP', '5G', '4500 mAh', ' 7.42cm', '16.12cm', 'Domestic warranty of 12 months on phone & 6 months on accessories'),
(15009, 'Android 12', 'Qualcomm® Snapdragon™ 8 Gen 1', 'Phantom White', 'Dual Sim', 0, '17.27 cm (6.8 inch)', '3088 x 1440 Pixels', '1TB', '12GB', '108MP', '40MP', '5G', '5,000 mAh', '7.79cm', '16.33cm', 'Domestic warranty of 12 months on phone & 6 months on accessories'),
(15010, 'Android 13', 'Qualcomm Snapdragon 8 Gen 2', 'Cream', 'Dual Sim', 0, '17.27 cm (6.8 inch)', '3088 x 1440 Pixels', '1TB', '12GB', '200MP', '12MP', '5G', '5,000 mAh', '7.81 cm', '16.34 cm', 'Domestic warranty of 12 months on phone & 6 months on accessories');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pid` varchar(100) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `payment_status` varchar(50) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `pid`, `order_date`, `amount`, `address`, `payment_status`, `status`) VALUES
(2, 4, '15018,15010', '2023-07-14', 214998, 'Devanshu Saini,Sector 11 Plot no. 9 Vaishali Nagar,Jaipur', 'Debit Card', 'Delivered'),
(3, 4, '15016,15009', '2023-07-14', 181998, 'Devanshu Saini,Sector 11 Plot no. 9 Vaishali Nagar,Jaipur', 'Internet Banking', 'Undelivered');

-- --------------------------------------------------------

--
-- Table structure for table `productmaster`
--

CREATE TABLE `productmaster` (
  `pid` int(11) NOT NULL,
  `pname` varchar(40) DEFAULT NULL,
  `pprice` int(11) DEFAULT NULL,
  `ptype` varchar(40) DEFAULT NULL,
  `pimage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productmaster`
--

INSERT INTO `productmaster` (`pid`, `pname`, `pprice`, `ptype`, `pimage`) VALUES
(15001, 'OnePlus 11R 5G (Galactic Silver, 256 GB)', 43499, 'Mobile', 'product/OnePlus 11R 5G.jpeg'),
(15002, 'OnePlus 10R (Forest Green, 256 GB)', 34960, 'Mobile', 'product/OnePlus 10R.jpeg'),
(15003, 'OnePlus 11 5G (Eternal Green, 256 GB) ', 60575, 'Mobile', 'product/OnePlus 11 5G.jpeg'),
(15004, 'Realme GT NEO 2 (NEO Blue, 256 GB) ', 29999, 'Mobile', 'product/Realme GT NEO 2.jpeg'),
(15005, 'Xiaomi 11T Pro 5G Hyperphone ', 35990, 'Mobile', 'product/Xiaomi 11T Pro 5G Hyperphone.jpeg'),
(15006, 'Mi 10T Pro (Cosmic Black, 128 GB)', 47999, 'Mobile', 'product/Mi 10T Pro.jpeg'),
(15007, 'Xiaomi 11i Hypercharge 5G', 28999, 'Mobile', 'product/Xiaomi 11i Hypercharge 5G.jpeg'),
(15008, 'OPPO Reno8 Pro 5G (Glazed Green, 256 GB)', 45999, 'Mobile', 'product/OPPO Reno8 Pro 5G.jpeg'),
(15009, 'SAMSUNG Galaxy S22 Ultra 5G ', 91999, 'Mobile', 'product/SAMSUNG Galaxy S22 Ultra 5G.jpeg'),
(15010, 'SAMSUNG Galaxy S23 Ultra 5G ', 154999, 'Mobile', 'product/SAMSUNG Galaxy S23 Ultra 5G.jpeg'),
(15011, 'Sony Bravia 139 cm (55 inches) 4K', 57990, 'TV', 'product/Sony Bravia 139 cm (55 inches) 4K 1.jpg'),
(15012, 'MI Xiaomi (55 inches) 4K Android OLED', 99999, 'TV', 'product/MI Xiaomi (55 inches) 4K Android OLED 1.jpg'),
(15013, 'LG (55 inches) 4K Smart OLED', 97990, 'TV', 'product/LG (55 inches) 4K Smart OLED 1.jpg'),
(15014, 'Sony Bravia (77 inches) XR 4K OLED', 413990, 'TV', 'product/Sony Bravia (77 inches) XR 4K OLED 1.jpg'),
(15015, 'Samsung (55 inches) 4K Smart OLED', 180900, 'TV', 'product/Samsung (55 inches) 4K Smart OLED 1.jpg'),
(15016, 'Acer (75 inches) 4K Ultra HD Smart', 89999, 'TV', 'product/Acer (75 inches) 4K Ultra HD Smart 1.jpg'),
(15017, 'OnePlus (55 inches) 4K Ultra HD Smart', 39999, 'TV', 'product/OnePlus (55 inches) 4K Ultra HD Smart 1.jpg'),
(15018, 'Acer XL Series  (70 inch) (4K) Smart TV', 59999, 'TV', 'product/Acer XL Series  (70 inch) (4K) Smart TV 1.jpg'),
(15019, 'Mi X Series (55 inch) (4K) Smart TV', 37999, 'TV', 'product/Mi X Series (55 inch) (4K) Smart TV.jpeg'),
(15020, 'Mi X Series (50 inch) (4K) Smart TV', 32999, 'TV', 'product/Mi X Series (50 inch) (4K) Smart TV.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tvspecification`
--

CREATE TABLE `tvspecification` (
  `pid` int(11) NOT NULL,
  `in_the_box` varchar(150) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `display_size` varchar(20) DEFAULT NULL,
  `screen_type` varchar(20) DEFAULT NULL,
  `hd_tech_res` varchar(20) DEFAULT NULL,
  `smart_tv` tinyint(1) DEFAULT NULL,
  `motion_sensor` tinyint(1) DEFAULT NULL,
  `hdmi` varchar(20) DEFAULT NULL,
  `usb` varchar(20) DEFAULT NULL,
  `built_in_wifi` tinyint(1) DEFAULT NULL,
  `launch_year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tvspecification`
--

INSERT INTO `tvspecification` (`pid`, `in_the_box`, `color`, `display_size`, `screen_type`, `hd_tech_res`, `smart_tv`, `motion_sensor`, `hdmi`, `usb`, `built_in_wifi`, `launch_year`) VALUES
(15011, '1 LED TV, 1 Warranty Card, 1 AC Power Cord, 1 Remote Control, 1 Table-Top Stand, 1 User Manual, 2 AAA Batteries', 'Black', '139 cm (55 inches)', 'LED', 'Ultra HD (4K), 3840 ', 0, 0, '3 Side', '2 Side', 0, 2022),
(15012, '1 OLED TV, 2 Table Stand Base, 1 User Manual, 1 Remote Control, 4 screws, 1 Cable Strap, 2 AAA Batteries', 'Black', '138.8 cm (55 inches)', 'LED', 'Ultra HD (4K), 3840 ', 0, 0, '3 Side', '2 Side', 0, 2022),
(15013, '1 OLED 4K TV, 1 User Manual, 1 Warranty Card, 1 Remote Control, 2 Batteries', 'Black', '139 cm (55 inches)', 'LED', 'Ultra HD (4K), 3840 ', 0, 0, '3 Side', '2 Side', 0, 2022),
(15014, '1 LED TV, 1 Warranty Card, 1 AC Power Cord, 1 Remote Control, 1 Table-Top Stand, 1 User Manual, 2 AAA Batteries', 'Black', '195 cm (77 inches)', 'LED', 'Ultra HD (4K), 3840 ', 0, 0, '4 Side', '2 Side', 0, 2022),
(15015, '1 TV Unit User Manual Power Cable Batteries (For Remote Control) TM1240A Remote Controller', 'Black', '138 cm (55 inch)', 'LED', 'Ultra HD (4K), 3840 ', 0, 0, '4 Side', '2 Side', 0, 2018),
(15016, '1N Television, 1N Remote Control, 1N User Manual, 1N Warranty Card, 2N Stands, 2N AAA Batteries, 4N Screws, 1N Power Cord', 'Black', '189 cm (75 inch)', 'LED', 'Ultra HD (4K), 3840 ', 0, 0, '3 Side', '2 Side', 0, 2023),
(15017, '1N Television Set, 2N AAA Batteries, 2N Stand Bases, 4N Screws, 1N Manual & Warranty Card, 1N Remote Controller, 1N AV-IN Adapter', 'Black', '138 cm (55 inch)', 'LED', 'Ultra HD (4K), 3840 ', 0, 0, '3 Side', '2 Side', 0, 2022),
(15018, '1 TV Unit, Remote, User Manual, Warranty Card, Power Cord, 2 AAA Batteries, Pedestal Stands, 4 Screws', 'Black', '178 cm (70 inch)', 'LED', 'Ultra HD (4K), 3840 ', 0, 0, '3 Side', '2 Side', 0, 2023),
(15019, 'LED TV 1 Unit, Remote Control 1 Unit, Manual & Warranty Card 1 Unit, Stands 2 Unit, Screws 4 Unit, Battery 2 Unit', 'Black', '138 cm (55 inch)', 'LED', 'Ultra HD (4K), 3840 ', 0, 0, '3 Side', '2 Side', 0, 2022),
(15020, 'LED TV 1 Unit, Remote Control 1 Unit, Manual & Warranty Card 1 Unit, Stands 2 Unit, Screws 4 Unit, Battery 2 Unit', 'Black', '125 cm (50 inch)', 'LED', 'Ultra HD (4K), 3840 ', 0, 0, '3 Side', '2 Side', 0, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE `usermaster` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(40) DEFAULT NULL,
  `user_email` varchar(40) DEFAULT NULL,
  `user_pwd` varchar(40) DEFAULT NULL,
  `user_gender` varchar(40) DEFAULT NULL,
  `user_mobile` bigint(20) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`user_id`, `user_name`, `user_email`, `user_pwd`, `user_gender`, `user_mobile`, `user_dob`, `role`) VALUES
(4, 'Devanshu Saini', 'devanshu@gmail.com', '1234512345', 'Male', 123456789, '2000-11-01', 'Admin'),
(6, 'Andy', 'andy@live.com', '12341234', 'Male', 9874563210, '1999-12-31', 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `mobilespecification`
--
ALTER TABLE `mobilespecification`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `productmaster`
--
ALTER TABLE `productmaster`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tvspecification`
--
ALTER TABLE `tvspecification`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `usermaster`
--
ALTER TABLE `usermaster`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usermaster`
--
ALTER TABLE `usermaster`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
