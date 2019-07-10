-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 01:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_demosource`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'SB SAJIB', 'sajib60@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentId` tinyint(4) NOT NULL DEFAULT '0',
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `categoryDescription`, `parentId`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(8, 'Computer Accessories', 'Computer AccessoriesComputer AccessoriesComputer Accessories', 0, 1, '2018-11-15 11:50:14', '2018-11-15 11:50:14'),
(9, 'Mouse', 'Computer AccessoriesComputer AccessoriesComputer AccessoriesComputer Accessories', 8, 1, '2018-11-15 11:50:48', '2018-11-15 11:50:48'),
(10, 'Keyboard', 'keyboardkeyboardkeyboardkeyboard', 8, 1, '2018-11-15 11:54:04', '2018-11-15 11:54:04'),
(13, 'Use Laptop & Desktop', 'A desktop computer is a personal computer designed for regular use at a single location on or near a desk or table due to its size and power requirements', 0, 1, '2018-11-21 17:32:32', '2018-11-21 17:32:32'),
(14, 'Laptop', 'A desktop computer is a personal computer designed for regular use at a single location on or near a desk or table due to its size and power requirements', 13, 1, '2018-11-21 17:36:56', '2018-11-21 17:36:56'),
(15, 'Desktop', 'A desktop computer is a personal computer designed for regular use at a single location on or near a desk or table due to its size and power requirements', 13, 1, '2018-11-21 17:37:25', '2018-11-21 17:37:25'),
(16, 'Laptop', '===================', 0, 1, '2018-11-24 20:56:11', '2018-11-24 20:56:11'),
(17, 'HP', '==================', 16, 1, '2018-11-24 20:58:41', '2018-11-24 20:58:41'),
(18, 'Desktop', '====================', 0, 1, '2018-11-26 17:10:38', '2018-11-26 17:10:38'),
(19, 'HP', '===================', 18, 1, '2018-12-10 18:31:31', '2018-12-10 18:31:31'),
(20, 'Dell', '=================', 18, 1, '2018-12-10 18:48:46', '2018-12-10 18:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `id` int(10) UNSIGNED NOT NULL,
  `manufactureName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufactureDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`id`, `manufactureName`, `manufactureDescription`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'intenl', '=============', 1, NULL, NULL),
(2, 'Dell', 'Dell is an American multinational computer technology company based in Round Rock, Texas, United States, that develops, sells, repairs, and supports computers and related products and services', 1, NULL, NULL),
(3, 'HP', 'The Hewlett-Packard Company or Hewlett-Packard was an American multinational information  HP also offers managed services by which they provide complete IT-support solutions for .... of the issue, which details the specifics of the fault and offers advice to the owners of affected computers.', 1, NULL, NULL),
(4, 'China', '===========', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marksheet_info`
--

CREATE TABLE `marksheet_info` (
  `marksheetId` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `roll` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marksheet_info`
--

INSERT INTO `marksheet_info` (`marksheetId`, `name`, `roll`) VALUES
(1, 'Sajib', '839132'),
(2, 'Sajib', '839132'),
(3, 'Sajib', '839132'),
(4, 'Sajib', '839132'),
(5, 'Sajib', '839132'),
(6, 'Sajib', '839132');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(174, '2014_10_12_000000_create_users_table', 1),
(175, '2014_10_12_100000_create_password_resets_table', 1),
(176, '2018_02_06_171445_create_categories_table', 1),
(177, '2018_02_07_135852_create_manufactures_table', 1),
(178, '2018_02_07_192516_create_products_table', 1),
(179, '2018_02_14_170306_create_customers_table', 1),
(180, '2018_02_15_103451_create_shipping_table', 1),
(181, '2018_02_15_161139_create_payment_table', 1),
(182, '2018_02_15_161353_create_order_table', 1),
(183, '2018_02_15_161554_create_order_details_table', 1),
(184, '2018_09_16_154128_create_logos_table', 1),
(185, '2018_09_18_114100_create_computerservicings_table', 1),
(186, '2018_09_18_114349_create_itservicesvics_table', 1),
(187, '2018_09_18_115144_create_itservicesvideos_table', 1),
(188, '2018_10_10_071605_create_mainaccounts_table', 1),
(189, '2018_10_10_073757_create_service_applies_table', 1),
(190, '2018_10_12_074925_create_contacts_table', 1),
(191, '2018_12_26_104531_create_students_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryId` int(11) NOT NULL,
  `manufactureId` int(11) NOT NULL,
  `productInformation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `longDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `newPrice` double(8,2) NOT NULL,
  `oldPrice` double(8,2) NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT '0',
  `stock` int(11) NOT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bestSellerProducts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `productStatus` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `categoryId`, `manufactureId`, `productInformation`, `shortDescription`, `longDescription`, `newPrice`, `oldPrice`, `publicationStatus`, `is_featured`, `stock`, `productImage`, `bestSellerProducts`, `view`, `productStatus`, `created_at`, `updated_at`) VALUES
(4, 'HP Probook 450 G5', 17, 3, 'HP PROBOOK 450 G5 8th Gen Intel Core i5 8250U (1.60-3.40GHz),\r\nRam 4GB 2400MHz (2 Slot), HDD 1TB 5400 rpm HDD, No-ODD, 1xM.2 Slot) 15.6 Inch HD (1366x768) Display,Color - Silver Notebook, Free-DOS (2 Yr Warranty) \r\nPart No #3MC70PA', 'HP PROBOOK 450 G5 8th Gen Intel Core i5 8250U', 'HP PROBOOK 450 G5 8th Gen Intel Core i5 8250U (1.60-3.40GHz),\r\nRam 4GB 2400MHz (2 Slot), HDD 1TB 5400 rpm HDD, No-ODD, 1xM.2 Slot) 15.6 Inch HD (1366x768) Display,Color - Silver Notebook, Free-DOS (2 Yr Warranty) \r\nPart No #3MC70PA', 51250.00, 49400.00, 1, 1, 2, 'admin/ProductImage/5DHRoo3AeD.activity_lifecycle.png', '0', '3', 0, NULL, NULL),
(5, 'A4Tech Op-620d Usb Optical Mouse', 9, 4, 'Brand	      : A4 Tech\r\nModel	      : A4 Tech OP-620D\r\nMouse Type  :	USB Mouse\r\nConnectivity  :	Wired\r\n2X Click        :	Yes\r\nWheel           :	Yes\r\nWarranty	     : No', 'A4Tech Op-620d Usb Optical Mouse', 'Details\r\nA4 Tech OP-620D\r\nThe A4tech optical wheel Mouse with hyper-fast scrolling for increased productivity. A nearly frictionless scroll wheel lets you fly through long documents and Web pages with a single flick. Experience smoother cursor control on virtually any surface. Contoured design give you more support and control.', 299.00, 350.00, 1, 0, 5, 'admin/ProductImage/GivToEP8mb.{sumon  shilpy}.jpg', '0', '15', 0, NULL, NULL),
(6, 'Dell  Core 2 Duo 2GB Desktop Brand PC', 15, 2, 'Desktop Type : brand Tower PC\r\nProcessor Type : Intel Core 2 Duo \r\nProcessor : Speed2.66 GHz, 4MB Cache \r\nMain Board : Dell G-31 Intel \r\nRAM : 2GB DDR2 800 BUS \r\nHard  Disk : 500GB SATADisk \r\nType  : HDD\r\nGraphics : CardOn \r\nBoard : Intel HD \r\nOptical Drive : DVD-RW, DVD, CD RW, CD', 'Dell OptiPlex GX620 desktop brand computer has intel core 2 duo processor, 2.66GHz clock speed, intel main board, 2GB RAM, 320GB HDD, intel graphics, mouse, keyboard and casing.', 'Dell OptiPlex GX620 desktop brand computer has intel core 2 duo processor, 2.66GHz clock speed, intel main board, 2GB RAM, 320GB HDD, intel graphics, mouse, keyboard and casing.', 15000.00, 51000.00, 1, 0, 5, 'admin/ProductImage/GMV04pWFM1.yjjmfczbfz.capture.png', '0', '1', 0, NULL, NULL),
(7, 'DELL optiplex 3050 MT Core i3 6th Gen Brand PC', 20, 2, 'Intel Core i3-6100 Processor (3M Cache, 3.70 GHz)\r\n4GB DDR4 RAM\r\n1TB SATA (7,200 RPM) HDD\r\nDell 18.5\'\' Wide Screen Monitor', '6th Generation Intel® Core™ i3-6100 Processor (3M Cache, 3.70 GHz)\r\n4GB DDR4\r\n1TB SATA (7,200 RPM) \r\nIntegrated Intel Graphics.\r\nDell  18.5\'\' Wide Screen Monitor with LED Back Light\r\nDVD Writer\r\nFront (USB 3.0 X 2) & (USB 2.0 X 2), Rear (USB 3.0 X 2) & (USB 2.0 X 2), Display Port, RJ45 Lan Port, HDMI port\r\nMid Tower(MT)\r\nDell Standard  USB Keyboard & Mouse\r\nFree DOS\r\n3 years Warranty .', 'Processor Type	6th Generation Intel® Core™ i3-6100 Processor (3M Cache, 3.70 GHz)\r\nProcessor Speed	3M Cache, 3.70 GHz\r\nMain Board	INTEL B250\r\nRAM	4GB DDR4\r\nHard Disk	1TB 7200RPM SATA\r\nMonitor	Dell  18.5\'\' Wide Screen Monitor with LED Back Light\r\nLan	Integrated Realtek® RTL8111HSD Ethernet LAN 10/100/1000; Optional wireless: 802.11ac+ Bluetooth 4.1 card\r\nAudio	Audio Speakers: Internal Dell Business audio speaker, Dell stereo speaker systems available; Dell sound bar for \r\nselect Flat-panel displays. Dell Wireless Speaker System available.\r\nOptical Drive	Dell DVD R/W\r\nMouse	Dell USB Optical Mouse\r\nKeyboard	Dell USB Keyboard\r\n\r\nInterface	Front (USB 3.0 X 2) & (USB 2.0 X 2), Rear (USB 3.0 X 2) & (USB 2.0 X 2), Display Port, RJ45 Lan Port, HDMI port\r\nWarranty	3 years Warranty', 50000.00, 34700.00, 1, 0, 6, 'admin/ProductImage/business card.jpg', '0', '9', 0, NULL, NULL),
(8, 'HP Probook 4500 G2', 17, 3, 'HP PROBOOK 450 G5 8th Gen Intel Core i5 8250U (1.60-3.40GHz),\r\nRam 4GB 2400MHz (2 Slot), HDD 1TB 5400 rpm HDD, No-ODD, 1xM.2 Slot) 15.6 Inch HD (1366x768) Display,Color - Silver Notebook, Free-DOS (2 Yr Warranty) \r\nPart No #3MC70PA', 'HP PROBOOK 450 G5 8th Gen Intel Core i5 8250U', 'HP PROBOOK 450 G5 8th Gen Intel Core i5 8250U (1.60-3.40GHz),\r\nRam 4GB 2400MHz (2 Slot), HDD 1TB 5400 rpm HDD, No-ODD, 1xM.2 Slot) 15.6 Inch HD (1366x768) Display,Color - Silver Notebook, Free-DOS (2 Yr Warranty) \r\nPart No #3MC70PA', 51250.00, 49400.00, 1, 1, 2, 'admin/ProductImage/5DHRoo3AeD.activity_lifecycle.png', '0', '3', 0, NULL, NULL),
(9, 'lenvo laptop', 20, 2, 'Intel Core i3-6100 Processor (3M Cache, 3.70 GHz)\r\n4GB DDR4 RAM\r\n1TB SATA (7,200 RPM) HDD\r\nDell 18.5\'\' Wide Screen Monitor', '6th Generation Intel® Core™ i3-6100 Processor (3M Cache, 3.70 GHz)\r\n4GB DDR4\r\n1TB SATA (7,200 RPM) \r\nIntegrated Intel Graphics.\r\nDell  18.5\'\' Wide Screen Monitor with LED Back Light\r\nDVD Writer\r\nFront (USB 3.0 X 2) & (USB 2.0 X 2), Rear (USB 3.0 X 2) & (USB 2.0 X 2), Display Port, RJ45 Lan Port, HDMI port\r\nMid Tower(MT)\r\nDell Standard  USB Keyboard & Mouse\r\nFree DOS\r\n3 years Warranty .', 'Processor Type	6th Generation Intel® Core™ i3-6100 Processor (3M Cache, 3.70 GHz)\r\nProcessor Speed	3M Cache, 3.70 GHz\r\nMain Board	INTEL B250\r\nRAM	4GB DDR4\r\nHard Disk	1TB 7200RPM SATA\r\nMonitor	Dell  18.5\'\' Wide Screen Monitor with LED Back Light\r\nLan	Integrated Realtek® RTL8111HSD Ethernet LAN 10/100/1000; Optional wireless: 802.11ac+ Bluetooth 4.1 card\r\nAudio	Audio Speakers: Internal Dell Business audio speaker, Dell stereo speaker systems available; Dell sound bar for \r\nselect Flat-panel displays. Dell Wireless Speaker System available.\r\nOptical Drive	Dell DVD R/W\r\nMouse	Dell USB Optical Mouse\r\nKeyboard	Dell USB Keyboard\r\n\r\nInterface	Front (USB 3.0 X 2) & (USB 2.0 X 2), Rear (USB 3.0 X 2) & (USB 2.0 X 2), Display Port, RJ45 Lan Port, HDMI port\r\nWarranty	3 years Warranty', 40000.00, 41000.00, 1, 0, 6, 'admin/ProductImage/business card.jpg', '0', '0', 0, NULL, NULL),
(10, 'Asus Op-620d Usb Optical Mouse', 9, 4, 'Brand	      : A4 Tech\r\nModel	      : A4 Tech OP-620D\r\nMouse Type  :	USB Mouse\r\nConnectivity  :	Wired\r\n2X Click        :	Yes\r\nWheel           :	Yes\r\nWarranty	     : No', 'A4Tech Op-620d Usb Optical Mouse', 'Details\r\nA4 Tech OP-620D\r\nThe A4tech optical wheel Mouse with hyper-fast scrolling for increased productivity. A nearly frictionless scroll wheel lets you fly through long documents and Web pages with a single flick. Experience smoother cursor control on virtually any surface. Contoured design give you more support and control.', 299.00, 350.00, 1, 0, 5, 'admin/ProductImage/GivToEP8mb.{sumon  shilpy}.jpg', '0', '14', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `sex`, `created_at`, `updated_at`) VALUES
(1, 'Sajib', 'Kumer', '1', NULL, NULL),
(16, 'Sajib', 'Kumer', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectId` int(11) NOT NULL,
  `marksheet_id` int(11) NOT NULL,
  `fourSubject` int(11) NOT NULL,
  `subject` text NOT NULL,
  `subNumber` text NOT NULL,
  `letter` varchar(250) NOT NULL,
  `point` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shimanto It', 'shimantoit@gmail.com', '$2y$10$I2rEf2rkWgg.sJSy..r0D.83ZS8AvLBC35w8BfMdsXvb2zVPydYVi', 1, 'oENAQO1PLuZIcsZtRB285rzRltACRIejqHreE5X33uIpvV257Vbn1RrVahti', '2018-10-12 10:33:55', '2018-10-12 10:33:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksheet_info`
--
ALTER TABLE `marksheet_info`
  ADD PRIMARY KEY (`marksheetId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marksheet_info`
--
ALTER TABLE `marksheet_info`
  MODIFY `marksheetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
