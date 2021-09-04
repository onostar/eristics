-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 01:06 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eristics`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `admin_email`, `user_password`, `contact_person`, `contact_phone`) VALUES
(6, 'admin@eristics.com.ng', '12345', 'Saint City', '08032848508');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ads_id` int(11) NOT NULL,
  `ads_title` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ads_id`, `ads_title`, `photo`) VALUES
(1, 'Done', 'Temix_md.jpg'),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'Politics'),
(2, 'Sports'),
(3, 'Events'),
(4, 'Gossips'),
(6, 'Others'),
(8, 'Celebrities');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `contact_name` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_subject` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sent_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `contact_name`, `contact_email`, `contact_message`, `mail_subject`, `sent_date`, `status`) VALUES
(2, 'Kelly Ikpefua', 'onostarkels@gmail.com', 'testing', '', '2021-08-03 00:00:00', 1),
(3, 'Kelly Ikpefua', 'onostarkels@gmail.com', 'testing from login', '', '2021-08-05 00:00:00', 1),
(4, 'Cynthia Oguas', 'cy@grace.com', 'Kindly give me info on adds placement', 'Advert consult', '2021-08-22 16:53:20', 1),
(5, 'Paul Idiagbon', 'paul@gmail.com', 'Just see if it work', 'testing the box', '2021-08-28 21:09:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story_id` int(11) NOT NULL,
  `title` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_report` int(11) NOT NULL,
  `foto` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_status` int(12) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `headline_id` int(11) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story_id`, `title`, `category`, `summary`, `i_report`, `foto`, `details`, `posted_by`, `update_status`, `post_date`, `headline_id`, `post_time`) VALUES
(2, 'Chef Pee Signatures', 'Politics', 'Egusi Soup With Pounded Yam', 1, 'akpu-egusi.jpg', '', '', 1, '2021-06-15', 0, '2021-08-22 10:23:47'),
(5, 'Chicken Republic', 'Snacks', 'Harmburger', 1, 'chef-pee-special-hot-dog.jpeg', 'Freshly made harmburger', '', 1, '2021-06-15', 0, '2021-08-22 10:23:47'),
(11, 'Chef Pee Signatures', 'Grains', 'Jollof Rice With Chicken', 1800, 'chef-pee-event-jollof-rice-plnatain-salad-chicken.jpg', 'Freshly prepared egusi jollof rice for your enjoyment', '', 0, '2021-06-15', 0, '2021-08-22 10:23:47'),
(12, 'Temix Empire', 'Cakes', 'Spongebob Cake', 4000, 'sponge_bob cake.jpg', '', '', 1, '2021-06-15', 0, '2021-08-22 10:23:47'),
(13, 'Chicken Republic', 'Politics', 'Jollof Anf Fried Rice Mixed With Turkey', 2500, 'rice.jpg', '', '', 1, '2021-06-15', 3, '2021-08-22 10:23:47'),
(21, 'Olu Of Warri Coronatd', 'Events', 'Here we witnes the coronation of olu of warr', 0, 'online_trading.jpeg', 'LETS WAtch the coronation of olu of warri at the 21st inaugua=ratin ceremony', 'Admin', 1, '2021-08-22', 1, '2021-08-22 10:23:47'),
(22, 'Southampton V Man United Live Today', 'Sports', 'Watch southampton take on the vibrant reds by 2pm today', 0, 'banking_banner.jpg', 'We shall be going live with the updates on the match between united and Southampton at saint Marys', 'Admin', 1, '2021-08-22', 1, '2021-08-22 10:23:47'),
(23, 'Learning Code', 'Others', '', 1, 'bitcoin.jpg', 'My first tiume learning to poast a blog', 'Paul Ikpefua', 1, '2021-08-22', 1, '2021-08-22 11:16:11'),
(24, 'Just Chasing', 'Others', '', 1, 'eat.png', 'checking 123', 'Cynthia Bullock', 0, '2021-08-22', 0, '2021-08-22 11:32:22'),
(25, 'The Cake Specialist', 'Others', 'This is still a test', 1, 'eat.jpg', 'dsc ', 'James Brown', 1, '2021-08-22', 0, '2021-08-22 11:34:00'),
(26, 'Story For The Gods', 'Events', '', 1, 'baking_cakes.jpg', 'We just discovered an item that is from the gods form 1980', 'John Bigfoot', 1, '2021-08-26', 1, '2021-08-26 07:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriber_id` int(11) NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriber_id`, `contact_email`) VALUES
(1, 'onostarkels@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
