-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 09:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `url`, `cover`, `date`) VALUES
(1, 'First Article', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aliquam. Molestiae, nostrum aperiam. Sapiente quasi placeat ab optio impedit adipisci iure accusantium, vero culpa commodi, doloribus error quia.', 'First-Article', 'BG_CS_Trinity_20_1.jpg', '2022-11-15 23:52:42'),
(2, 'Second Article', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aliquam. Molestiae, nostrum aperiam. Sapiente quasi placeat ab optio impedit adipisci iure accusantium, vero culpa commodi, doloribus error quia, praesentium veniam.', 'Second-Article', '', '2022-11-15 18:06:38'),
(3, 'Third Article', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aliquam. Molestiae, nostrum aperiam. Sapiente quasi placeat ab optio impedit adipisci iure accusantium, vero culpa commodi, doloribus error quia, praesentium veniam.', 'Third-Article', '', '2022-11-15 18:06:38'),
(8, 'Eight Article', '          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aliquam. Molestiae, nostrum aperiam. Sapiente quasi placeat ab optio impedit adipisci iure accusantium, vero culpa commodi, doloribus error quia, praesentium veniam.        ', 'Eight-Article', '', '2022-11-15 19:34:18'),
(10, 'Tenth Article', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aliquam. Molestiae, nostrum aperiam. Sapiente quasi placeat ab optio impedit adipisci iure accusantium, vero culpa commodi, doloribus error quia, praesentium veniam.', 'Tenth-Article', 'BG_CS_Millenium_09.jpg', '2022-11-15 23:42:33'),
(18, 'TEST COVER', 'Lorem Ipsum...', 'TEST-COVER', 'BG_CS_Millenium_07.jpg', '2022-11-15 23:35:58'),
(19, 'LAST ARTICLE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nobis enim numquam nemo quae, id earum, aut repellat iusto asperiores eaque dignissimos. Ab sequi nisi sapiente eveniet placeat qui sint.', 'LAST-ARTICLE', 'BG_CS_RAID_03.png', '2022-11-16 19:32:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
