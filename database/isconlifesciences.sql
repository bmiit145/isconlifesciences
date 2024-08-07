-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2024 at 06:11 AM
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
-- Database: `isconlifesciences`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(3, 'Antibiotics / Antibacterials /ANTI Infective '),
(4, 'Analgesics/ Antipyretics/ NSAIDs'),
(5, 'Vitamin Supplements / Folic Acid / Food Supplement'),
(6, 'Anti Ulcer '),
(7, 'Anti allergic / Antihistamines'),
(8, 'Ayurvedic'),
(9, 'Anti Helminthes'),
(10, 'Injections'),
(11, 'Ani Malarial'),
(12, 'Anti Emetic'),
(13, 'Dental'),
(14, 'Skin Product'),
(15, 'Cosmetic'),
(16, 'Gynec'),
(17, 'Sexual Dysfunction'),
(18, 'Eye/ ENT Drops'),
(19, 'Psychiatric Drugs'),
(20, 'Covid Products'),
(21, 'Other Products');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `short_description` varchar(100) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `description_long` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `short_description`, `images`, `description_long`) VALUES
(11, 3, 'PRODUCT 1', 'Short Description of Antibiotics / Antibacterials /ANTI Infective', 'images/Antibiotics___Antibacterials__ANTI_Infective/1722934023_5.jfif', '<p>Long description of&nbsp;Antibiotics / Antibacterials /ANTI Infective&nbsp;</p>'),
(12, 6, 'PRODUCT 2', 'Short Description of Antibiotics / Antibacterials /ANTI Infective', 'images/Antibiotics___Antibacterials__ANTI_Infective/1722934023_5.jfif', '<p>Long description of&nbsp;Antibiotics / Antibacterials /ANTI Infective&nbsp;</p>'),
(13, 8, 'product 23', 'Since some online shoppers only scan text on websites, it might be helpful to use bullet points that', 'images/Ayurvedic/1722941114_1.jfif', '<p>By writing a paragraph (three or more sentences) or two about the product, retailers can set the scene and help the shopper realize why their life up to this point has been incomplete without it. It may seem daunting, but after some practice, it will become second nature and even (gasp!) fun.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
