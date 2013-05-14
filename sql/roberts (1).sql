-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2013 at 01:41 PM
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
  `flag` varchar(2) NOT NULL COMMENT 'hm-used to show in home page',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `clientofmonth`
--

INSERT INTO `clientofmonth` (`id`, `name`, `description`, `image`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'Dominionj', 'Dominionj Independent living center provides shelter between living spaces...Dominionj Independent living center provides shelter between living spaces...Dominionj Independent living center provides shelter between living spaces...', 'e5a671df397ea7d35d88edf695633708.jpg', 'hm', '2013-04-02 10:29:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE IF NOT EXISTS `gifts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL COMMENT 'Testimonial - Author Name',
  `description` varchar(700) NOT NULL,
  `image` varchar(200) NOT NULL,
  `flag` varchar(2) NOT NULL COMMENT 'hm-to show in home page',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`id`, `name`, `description`, `image`, `flag`, `created_at`, `updated_at`) VALUES
(14, 'sdfsd', 'sdfsdfsd', '', '', '2013-05-14 10:32:30', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ourworks`
--

INSERT INTO `ourworks` (`id`, `name`, `category`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Awning', 10, '0e3403716be6e64132ce2fba373efed0.jpg', '2013-04-04 11:20:40', '0000-00-00 00:00:00'),
(3, 'Awning', 9, '782d0b43870fa4da7d09d23a65eb21a8.jpg', '2013-04-04 11:23:26', '0000-00-00 00:00:00'),
(4, 'Awning', 3, 'd973870737bbcc86b3a20addae1ba8e1.jpg', '2013-04-04 11:23:35', '0000-00-00 00:00:00'),
(5, 'Awning', 2, '8f7aa57c0d4a46bc4c3d97ec9f642d9f.jpg', '2013-04-04 11:23:45', '0000-00-00 00:00:00'),
(6, 'Awning', 7, '5c13d6e071367ebce3cd51908882e35f.jpg', '2013-04-04 11:23:56', '0000-00-00 00:00:00'),
(7, 'Awning', 6, '99162742e9ac6811755ad891841e2d93.jpg', '2013-04-04 11:24:07', '0000-00-00 00:00:00'),
(8, 'Awning', 4, 'eea71248d2bb992f77a1db420688eb2e.jpg', '2013-04-04 11:24:17', '0000-00-00 00:00:00'),
(9, 'Awning', 8, 'f0ac05ffb3a5f14bd7c655aaf1e4fe02.jpg', '2013-04-04 11:24:27', '0000-00-00 00:00:00'),
(10, 'Awning', 5, 'e1da733ac3c823c38b2f0eb508584dbd.jpg', '2013-04-04 11:24:42', '0000-00-00 00:00:00');

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
(3, 'Contact', '<h1>Contact Info</h1>\r\n\r\n<p>Roberts Awning &amp; Sign</p>\r\n\r\n<p>1791 Midway Avenue,</p>\r\n\r\n<p>Petersburg, VA 23803</p>\r\n\r\n<p>+1-804-733-6012</p>\r\n\r\n<p>info@robertsawningandsign.com</p>\r\n\r\n<p>&nbsp;</p>', '2013-03-08 04:34:12', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Residential', 'Residential', '88507a090c95e763caea19608ba0ba8b.jpg', '2013-04-04 11:17:02', '0000-00-00 00:00:00'),
(3, 'Commercial', 'Commercial', 'ce72aaa3b53a2e420e499de1bd4e4a03.jpg', '2013-04-04 11:17:27', '0000-00-00 00:00:00'),
(4, 'Industrial', 'Industrial', '0440b78be7e9693f846544e91b7ff30b.jpg', '2013-04-04 11:17:55', '0000-00-00 00:00:00'),
(5, 'Drop Curtains', 'Drop Curtains', '6ebd2c0721decad6c26f467cda1c28df.jpg', '2013-04-04 11:18:18', '0000-00-00 00:00:00'),
(6, 'Aluminum', 'Aluminum', 'e229da74adca2ae6f55702035fe29bdb.jpg', '2013-04-04 11:18:40', '0000-00-00 00:00:00'),
(7, 'Retractable', 'Retractable', '61792b6527d94396848873d510b78243.jpg', '2013-04-04 11:18:59', '0000-00-00 00:00:00'),
(8, 'Bahamas Shutters', 'Bahamas Shutters', '335294c9fed97111355f870908e1e225.jpg', '2013-04-04 11:19:14', '0000-00-00 00:00:00'),
(9, 'Graphics', 'Graphics', 'f25f98de26339a9003f14cb45e243a03.jpg', '2013-04-04 11:19:31', '0000-00-00 00:00:00'),
(10, 'Screen/Glass rooms', 'Screen/Glass rooms', 'd72cadd1dcd5ece906301999ace16fc6.jpg', '2013-04-04 11:19:49', '0000-00-00 00:00:00');

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
(2, 'Roberts Awning', '1c302ab5920703ca9035aea1ff190245.jpg', 'Roberts Awning and Wallpaper was founded in 1912 to provide residents of Petersburg and the surrounding communities with quality awnings and wallpaper.', 'hm', '2013-04-02 09:06:16'),
(3, 'Roberts', '4522eba047308c0adbde870054f86d01.jpg', 'oberts Awning and Wallpaper was founded in 1912 to provide residents of Petersburg and the surrounding communities with quality awnings and wallpaper.', 'hm', '2013-04-02 09:06:30'),
(4, 'Roberts', '052b9a03214619b5af84b7bd1c6133a4.jpg', 'Some texthere', 'hm', '2013-04-02 09:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `spotlights`
--

CREATE TABLE IF NOT EXISTS `spotlights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `flag` varchar(2) NOT NULL COMMENT 'hm-toshow in home page',
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `spotlights`
--

INSERT INTO `spotlights` (`id`, `image`, `flag`, `description`, `created_at`, `updated_at`) VALUES
(1, '5defcbe0458633b31ab82dfd32c5563c.png', '', 'Dominion Independent living center provides shelter between living spaces...Dominionj Independent living center provides shelter between living spaces...Dominionj Independent living center provides shelter between living spaces...', '2013-04-01 05:35:23', '0000-00-00 00:00:00'),
(2, 'de758c5ee51395db9ee2dbc6b09d4a62.jpg', '', 'Dominionj Independent living center provides shelter between living spaces...Dominionj Independent living center provides shelter between living spaces...Dominionj Independent living center provides shelter between living spaces...', '2013-04-02 11:00:31', '0000-00-00 00:00:00'),
(3, '1eba7d93b5db65de67441d2d792c60a8.jpg', 'hm', 'Dominion Independent living center provides shelter between living spaces...Dominionj Independent living center provides shelter between living spaces...Dominionj Independent living center provides shelter between living spaces...', '2013-04-02 11:00:38', '0000-00-00 00:00:00'),
(4, '', '', '&lt;b&gt;sdfsdfsdfsd&lt;/b&gt;&lt;table&gt;&lt;tr&gt;dsfsdfsdfsdfsdfsdfsdfsdfsdf', '2013-05-09 11:34:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `description` varchar(700) NOT NULL,
  `image` varchar(200) NOT NULL,
  `flag` varchar(2) NOT NULL COMMENT 'hm-to show in home page',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `designation`, `description`, `image`, `flag`, `created_at`, `updated_at`) VALUES
(14, 'sdsds', 'sdsd', 'sdsdsds', '33170ef69cea198ddd8ad63aa26cf6d2.PNG', '', '2013-05-14 07:54:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories_child`
--

CREATE TABLE IF NOT EXISTS `sub_categories_child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
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
  `flag` varchar(2) NOT NULL COMMENT 'hm-to show in home page',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `image`, `flag`, `created_at`, `updated_at`) VALUES
(2, 'John', 'Any proposed actions by you or your agents, which are inconsistent in any manner with this ‘Confidentiality’, will require the prior written consent of Tim Murphy will require the prior written.', 'c0c40a511efbeb8c4dcb1d974d73ed11.png', '', '2013-03-30 10:26:28', '0000-00-00 00:00:00'),
(12, 'John John', 'Any proposed actions by you or your agents, which are inconsistent in any manner with this ‘Confidentiality’, will require the prior written consent of Tim Murphy will require the prior written.', '598f61f4e4d1038623a70dc0e8c9b312.png', '', '2013-04-02 10:59:19', '0000-00-00 00:00:00'),
(13, 'John Samuel', 'Any pproposed actions by you or your agents, which are inconsistent in any manner with this ‘Confidentiality’, will require the prior written consent of Tim Murphy will require the prior written.', 'fc594c4f706008af2111f3e843a42ea3.jpg', 'hm', '2013-04-02 10:59:35', '0000-00-00 00:00:00');

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
  `flag` varchar(2) NOT NULL COMMENT 'hm-to show in home page',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `url`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'Roberts', 'https://www.youtube.com/watch?v=ynnlvocIVBM', 'hm', '2013-04-02 10:03:01', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
