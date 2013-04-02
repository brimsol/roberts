-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2013 at 02:02 PM
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
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'asdsadsadsdds', 'asdxcvxsadsasdsdsdsd', '2013-04-02 06:06:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clientofmonth`
--

CREATE TABLE IF NOT EXISTS `clientofmonth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `clientofmonth`
--

INSERT INTO `clientofmonth` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'asdasdsad', 'asdasdsad', 'e5a671df397ea7d35d88edf695633708.jpg', '2013-04-02 10:29:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ourworks`
--

CREATE TABLE IF NOT EXISTS `ourworks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ourworks`
--

INSERT INTO `ourworks` (`id`, `name`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'asfaf', 1, 'e4603feaa8b5e330e5683203ef8e4600.jpg', '2013-04-02 07:28:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, 'About us', '<h1>About Us</h1>\r\n\r\n<p>Roberts Awning and Wallpaper was founded in 1912 to provide residents of Petersburg and the surrounding communities with quality awnings and wallpaper. The company remained in the Roberts’ family until the 1990s when John Radcliffe, a local business owner, bought the company and expanded the offerings to include more commercial customers. Roberts’ Awning and Sign has been owned by two different families for four generations and still serves Petersburg 100 years later.</p>\r\n\r\n<p>We now provide awnings and signs to residents as well as commercial and industrial businesses in Petersburg, Colonial Heights, Hopewell/Prince George, Richmond, Emporia, and Williamsburg, just to name a few. Roberts Awning and Sign combines the experience and craftsmanship of a 100 year old business with the latest technology to provide our customers with quality service and a quality product. All of our manufacturing, from welding and sewing to graphics and design takes place in house, and installations are performed by our experienced installers, not subcontractors.\r\n</p>\r\n\r\n<p>We work with our customers throughout the design process to guarantee they receive exactly what they need. We begin with a design consultation to determine the look and feel our customers are going for. Then we determine what product will be best and get to work on building the design. We use a variety of materials and processes to provide you with the best quality product.</p>\r\n\r\n<h3>Why Choose Roberts?</h3>\r\n<label class="why_choose">We have been building and installing awnings for 100 years</label>\r\n<label class="why_choose">Locally owned and operated in Petersburg, Virginia</label>\r\n<label class="why_choose">Products built in-house by our own employees</label>\r\n<label class="why_choose">Installations performed by our own employees, never a subcontractor</label>\r\n<label class="why_choose">Local service includes repair and maintenance services – we won’t leave you in the lurch</label>\r\n\r\n<p>Please take a look through our offerings and information about our services and don’t hesitate to contact us for any assistance you might need. Thank you!</p>', '2013-03-07 10:26:10', '0000-00-00 00:00:00'),
(3, 'FAQ/Contact', '<h1>Contact Info</h1>\r\n\r\n<p>Roberts Awning &amp; Sign</p>\r\n\r\n<p>1791 Midway Avenue,</p>\r\n\r\n<p>Petersburg, VA 23803</p>\r\n\r\n<p>+1-804-733-6012</p>\r\n\r\n<p>info@robertsawningandsign.com</p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>', '2013-03-08 04:34:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'dsfsdfsdf', 'sdfsdfdsfdsf', 'be4e64ed83254051742b7a48c99b71e8.jpg', '2013-04-01 09:02:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL COMMENT 'hm=Home page Slider',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `image`, `description`, `category`, `created_at`) VALUES
(1, 'Roberts', 'bcccfce4e57b54a88dde3f08e18039b4.jpg', 'oberts Awning and Wallpaper was founded in 1912 to provide residents of Petersburg and the surrounding communities with quality awnings and wallpaper.', 'hm', '2013-04-02 09:06:02'),
(2, 'Roberts Awning', 'b67e456e52dc02dbfdcf8ed97a313b33.jpg', 'oberts Awning and Wallpaper was founded in 1912 to provide residents of Petersburg and the surrounding communities with quality awnings and wallpaper.', 'hm', '2013-04-02 09:06:16'),
(3, 'Roberts', '4522eba047308c0adbde870054f86d01.jpg', 'oberts Awning and Wallpaper was founded in 1912 to provide residents of Petersburg and the surrounding communities with quality awnings and wallpaper.', 'hm', '2013-04-02 09:06:30'),
(4, 'Roberts', '052b9a03214619b5af84b7bd1c6133a4.jpg', 'Some texthere', 'hm', '2013-04-02 09:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `spotlights`
--

CREATE TABLE IF NOT EXISTS `spotlights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `spotlights`
--

INSERT INTO `spotlights` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, '5defcbe0458633b31ab82dfd32c5563c.png', 'Dominion Independent living center provides shelter between living spaces...', '2013-04-01 05:35:23', '0000-00-00 00:00:00'),
(2, '4baaee63e203ef250f5d52d69852f754.jpg', 'Dominion Independent living center provides shelter between living spaces...', '2013-04-02 11:00:31', '0000-00-00 00:00:00'),
(3, '1eba7d93b5db65de67441d2d792c60a8.jpg', 'Dominion Independent living center provides shelter between living spaces...', '2013-04-02 11:00:38', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'John', 'Any proposed actions by you or your agents, which are inconsistent in any manner with this ‘Confidentiality’, will require the prior written consent of Tim Murphy will require the prior written.', 'c0c40a511efbeb8c4dcb1d974d73ed11.png', '2013-03-30 10:26:28', '0000-00-00 00:00:00'),
(12, 'John John', 'Any proposed actions by you or your agents, which are inconsistent in any manner with this ‘Confidentiality’, will require the prior written consent of Tim Murphy will require the prior written.', '598f61f4e4d1038623a70dc0e8c9b312.png', '2013-04-02 10:59:19', '0000-00-00 00:00:00'),
(13, 'John Samuel', 'Any proposed actions by you or your agents, which are inconsistent in any manner with this ‘Confidentiality’, will require the prior written consent of Tim Murphy will require the prior written.', 'fda97c91406b5c1dad757ee6dc0172e8.png', '2013-04-02 10:59:35', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Roberts', 'https://www.youtube.com/watch?v=N-G-XGG7xno', '2013-04-02 10:03:01', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
