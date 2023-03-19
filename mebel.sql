-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2023 at 09:10 AM
-- Server version: 8.0.30
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mebel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoriya`
--

CREATE TABLE `categoriya` (
  `id` int NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categoriya`
--

INSERT INTO `categoriya` (`id`, `name`) VALUES
(1, 'home'),
(2, 'office');

-- --------------------------------------------------------

--
-- Table structure for table `meebel`
--

CREATE TABLE `meebel` (
  `id` int NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(200) NOT NULL,
  `img` varchar(100) NOT NULL,
  `cat_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meebel`
--

INSERT INTO `meebel` (`id`, `name`, `description`, `img`, `cat_id`) VALUES
(7, 'tandem', 'Часто вместо того, чтобы собирать по деталям рабочее место, удобнее и экономически выигрышнее купить целый комплект.', '1.img', 2),
(8, 'PABLO', 'Изумительный стол Pablo подарит вашему интерьеру солидности.', '2.jpg', 2),
(9, 'ARCHIBALD', 'Ни один интерьер гостиной не обойдется без дивана. Именно поэтому важно выбрать правильную модель.', '3.jpg', 2),
(10, 'ROBOT', 'Эта модель не менее практичная и привлекательна. ', '4.jpg', 2),
(11, 'ALCOVE', 'Ценитель личного пространства? Тогда данный диван поможет вам отгородиться от суеты внешнего мира и сосредоточиться на себе.', '5.jpg', 1),
(12, 'BULGARI', 'Эта модель не менее практичная и привлекательна.', '6.jpg', 1),
(13, 'ARSENAL', 'Спортивное кресло Arsenal создано для всех удобств позвоночника и для долгого сидения в данном кресле. ', '7.jpg', 1),
(14, 'PIKO GREEN', 'Этот стульчик представляет собой качественную и современную модель, которая сможет обеспечить малышу комфорт и безопасность.', '8.jpg', 1),
(15, 'COMODITA', 'Стол COMODITA создаёт лёгкое летнее настроение. Глядя на такую мебель, сразу вспоминаются тёплые вечера.', '9.jpg', 1),
(16, 'EKO KVADRO', 'Продукция категории ЭКО отличается от стандартной продукции, тем что имеет ограниченность в количестве одинакового цвета.', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoriya`
--
ALTER TABLE `categoriya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meebel`
--
ALTER TABLE `meebel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoriya`
--
ALTER TABLE `categoriya`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meebel`
--
ALTER TABLE `meebel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `meebel`
--
ALTER TABLE `meebel`
  ADD CONSTRAINT `meebel_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categoriya` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
