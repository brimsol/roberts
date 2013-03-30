-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2013 at 12:56 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `roberts`
--

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL COMMENT 'hm=Home page Slider',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL COMMENT 'Testimonial - Author Name',
  `description` varchar(700) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'sadasd', 'asdasdasd', '', '2013-03-30 10:26:03', '0000-00-00 00:00:00'),
(2, 'sdsdsdcvxcvxcv', 'sdsdsdsddsd', '13cd4128ee5f1c872dd2ea4d62073df2.jpg', '2013-03-30 10:26:28', '0000-00-00 00:00:00'),
(3, 'dtfhfghfgh', 'fghfghfghfghfg', '', '2013-03-30 11:46:06', '0000-00-00 00:00:00'),
(4, 'fghfghfghfg', 'hfghfghfghfgh', '', '2013-03-30 11:46:11', '0000-00-00 00:00:00'),
(5, 'fghfghfghfghfgh', 'fghfghfghfghfgh', '', '2013-03-30 11:46:17', '0000-00-00 00:00:00'),
(6, 'fghfghgfh', 'fghfghfghfghfghfghfghfghfghfghfghfgh', '', '2013-03-30 11:46:46', '0000-00-00 00:00:00'),
(7, 'fghfghfghfg', 'fghfghfgh', '', '2013-03-30 11:46:52', '0000-00-00 00:00:00'),
(8, 'fghgfhfghgfh', 'fghfghfgh', '', '2013-03-30 11:46:57', '0000-00-00 00:00:00'),
(9, 'fghfghfghfgh', 'fghfghfghfgh', '', '2013-03-30 11:47:04', '0000-00-00 00:00:00'),
(10, 'fghfghfghgfh', 'fghfghfgh', '', '2013-03-30 11:47:10', '0000-00-00 00:00:00'),
(11, 'John', 'Any proposed actions by you or your agents, which are inconsistent in any manner with this ‘Confidentiality’, will require the prior written consent of Tim Murphy will require the prior written.', '', '2013-03-30 11:47:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(1) NOT NULL COMMENT 'A=Admin,S=Super Admin',
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_loggedin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `username`, `email`, `password`, `last_loggedin`) VALUES
(1, 'S', 'yuko', 'Demo@gmail.com', '99075eb0baa8cfda1cae029da06b57b93cc13a31', '2013-02-26 16:28:27'),
(2, 'S', 'bandyworks', 'ami@bandyworks.com', '7e9ab5c5b7475f9ef8a9923f42e0fb2d921c006a', '2013-03-13 09:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `url` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
