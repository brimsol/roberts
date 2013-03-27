-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2013 at 01:17 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `glenna`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE IF NOT EXISTS `collections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(10) NOT NULL COMMENT 'G=Girls,B=Boys,N=Neutral',
  `similar` varchar(500) NOT NULL,
  `store` varchar(500) NOT NULL COMMENT 'Buy Swatches Link',
  `new` varchar(1) NOT NULL DEFAULT 'N',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `description`, `image`, `category`, `similar`, `store`, `new`, `created_at`, `updated_at`) VALUES
(14, 'Central Park', 'Sophisticated blend of toile, hound&#39;s-tooth, gingham check, embroidery and velvets in soft shades of glacier and sand create a gender neutral palette great for girls and boys.  Made using the highest thread count fabrics, framed in luxurious trims to create a cottage chic elegance.  Bring style and comfort to the nursery with Central Park.', '5e18470df678f055329d77b60a26429e.jpg', 'Neutral', 'a:1:{i:0;s:2:"20";}', '', 'N', '2013-03-13 10:50:37', '0000-00-00 00:00:00'),
(15, 'Ava', 'Ava features a crib skirt made of layers of crushed vanilla taffeta designed to cascade to the floor under a sheer floral, sequin embellished overskirt.  Sheer floral fabric has a dimensional flower appliqué and is lined with ivory moiré.  Ivory cording adds the finishing touch to the bumper for a dramatic and luxurious statement of style.', 'e26278e763e25b0c9b1f6b5883469e1f.jpg', 'Girls', 'b:0;', '', 'N', '2013-03-13 11:49:47', '0000-00-00 00:00:00'),
(16, 'Bella &amp; Friends', 'Lions, tigers, giraffes and elephants delight in soothing shades of pastel pink, white and grey.  100% cotton polka dots, stripes, zigzags and animals are combined with silky grey solid and white velvet for a colorful bumper.  Clean lines of crib skirt are accented by whimsical pink pom pom.  Bumper and quilt are framed by crisp white woven cording.  Easily decorate walls with vinyl animal and polka dot decals.', '63351cbd6cb90efa0fc6029ff52e2547.jpg', 'Girls', 'b:0;', '', 'N', '2013-03-13 16:02:24', '0000-00-00 00:00:00'),
(17, 'Ellie &amp; Stretch', 'The fresh colors and clean design of Ellie &amp; Stretch are sure to please.  Vibrant elephants and giraffes in flamingo pink and lemongrass are a striking contrast to the crisp optic white background.  Perky polka dot adds whimsy.  Patched quilt and bumper are trimmed in white woven cord.  White sheet and quilt back are ultra soft for added comfort.  Musical mobile features knit zebra, giraffe, hippo and elephant in bright colors.   A fun pattern in happy colors, Ellie the Elephant and Stretch the Giraffe bring joy to the nursery.', 'c6a5b1fe3bb783d57d23902eebcc18a7.jpg', 'Girls', 'b:0;', '', 'N', '2013-03-13 16:04:00', '0000-00-00 00:00:00'),
(18, 'McKenzie', 'McKenzie is a modern floral design bursting with style in hip shades of kiwi, cherry and graphite colors that pop against bold black and white stripes.  Quilt includes soft silvery velvet patches that are hand patched with 100% cotton floral print and lined with super soft knit fabric.  Clean lines of bumper and quilt are offset by crisp black piping.  Create a fun space to capture your child&#39;s imagination.', '1c53b2cc8bce8a9d90fa6d422b462d50.jpg', 'Girls', 'b:0;', '', 'N', '2013-03-13 16:05:01', '0000-00-00 00:00:00'),
(19, 'Tanzania', 'Take a walk on the wild side with this whimsical jungle themed bedding!  Super soft cheetah print combined with chocolate and caramel velvets framed in a honey colored cord create a soothing space for your little one.', 'c8ec9d05afa3dc68edd90d45be59965a.jpg', 'Neutral', 'b:0;', '', 'N', '2013-03-13 16:06:21', '0000-00-00 00:00:00'),
(20, 'Preston', 'The classic design of Preston is sure to please you and your baby boy.  Multi-color stripe brings together shades of tan, mocha, cream and blue.  Premium fabrics include cream moiré, mocha dot embroidery, super soft chenille damask and two kinds of rich velvets.  Quilt back and sheet are ultra soft for baby&#39;s comfort.  Lux trims include a fun two-tone pom pom and woven cord.', 'd95c4e0a4de10993b843db75ad635e0f.jpg', 'Boys', 'b:0;', '', 'N', '2013-03-13 16:07:09', '0000-00-00 00:00:00'),
(21, 'Finley', 'For boy or girl, Finley`s clean pastels range from sky and butter to mint and cream.  Cotton prints include a softly looped scribble and a multi-color polka-dot.  Prints are hand-patched with lightly textured caramel velvet.  Pastel pom-pom trim finishes the double layer crib skirt.  Finley’s subtle colors, textures and patterns are sure to delight and please your newborn.', '949ee1e1542b422ccbc8a66211658ed5.jpg', 'Neutral', 'b:0;', '', 'N', '2013-03-14 08:53:33', '0000-00-00 00:00:00'),
(22, 'Grayson', 'Cutting-edge style in an urban-inspired, monochromatic color palette of pewter, coal, sand and taupe is a wonderful addition to any decor.  Gender neutral geometric paisley-like print fabric is combined with multi-color stripe, brushed tan velvet and classic Greek key.  Grayson adds modern sophistication to baby’s nursery.&lt;br/&gt;Isabella is embellished throughout with decorative tassels and cord. Lovely combination of pink and green in a unique array of fabrics including a touch of toile, soft velvet, star jacquard, woven gingham, embroidered rosebuds and sheer stripes. The crib skirt has two layers that are sewn together to prevent slippage. The bumper ties are 2&quot; wide pink satin ribbons. Pinched pleat valance is lovely design in toile with gingham ruffle.', '369b1b558a4e5a4526aa1b22a6405ec1.jpg', 'Neutral', 'a:1:{i:0;s:2:"21";}', '', 'N', '2013-03-14 08:54:20', '0000-00-00 00:00:00'),
(23, 'Love Letters', 'Bring a bit of Victorian style to your little one&#39;s room with the Love Letters collection.  Romance abounds with a vintage document print that is 100% cotton and reads &quot;Amore Forever, Liebe Love&quot;.  Rich fabrics in ballet pink, cream velvet and dot embroidery are patched together for a beautiful quilt that is today&#39;s heirloom and tomorrow&#39;s keepsake. Delicate cord is made from tightly looped fine ribbon for an exquisite embellishment to the pillows, quilt and bumper.  Lovely crib skirt features whimsical pink pom poms and a gathered sheer stripe overskirt.  This classic design that is sure to comfort baby and delight mom.', 'd82d4d44da652ad7b5e32bbd975c8bc8.jpg', 'Girls', 'b:0;', '', 'N', '2013-03-14 08:55:20', '0000-00-00 00:00:00'),
(24, 'Madison', 'An instant classic. Madison radiates charm and sophistication with traditional design elements. Surround your little one with embroidered dots on taffeta, whimsical cotton toile, soft cream velvet and fuzzy pom pom tassels. Embellished with luxurious satin ribbon bumper ties and corded quilt trim.', '49db13d3a58a70978d3eb851f39f1743.jpg', 'Girls', 'b:0;', '', 'N', '2013-03-14 08:56:07', '0000-00-00 00:00:00'),
(25, 'Melrose', 'Colorful large flowers in shades of marigold and citrine boldly stand out against a warm gray background and are accented by richly colored leaves in shades of magenta, purple, black and teal.  100% cotton prints blend beautifully with a modern diamond key print in black and yellow.  A fun color palette and bold prints brings modern style to a hip nursery.', '266b6ca3f90f3388894d29dfb5565bbf.jpg', 'Girls', 'a:2:{i:0;s:2:"17";i:1;s:2:"18";}', '', 'N', '2013-03-14 08:58:08', '0000-00-00 00:00:00'),
(26, 'Addison', 'A wonderful mix of textured white velvet and unique 100% cotton prints in vibrant colors creates a stunning nursery collection in pinks and grays.  Fresh colors include watermelon, fuchsia and warm grays.   Classic patterns feature a large  polka dot, a whimsical zigzag and a large ikat-inspired flower.  Gray piping offsets the clean lines of the quilt and bumper adding to the contemporary look and feel.  Addison’s colors and patterns beautifully complement today’s modern nursery.', '366f8db8232d8b8f04a38b070f5ec02f.jpg', 'Girls', 'a:3:{i:0;s:2:"22";i:1;s:2:"18";i:2;s:2:"25";}', '', 'Y', '2013-03-16 06:51:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `onlinestores`
--

CREATE TABLE IF NOT EXISTS `onlinestores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `url` varchar(500) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `onlinestores`
--

INSERT INTO `onlinestores` (`id`, `name`, `url`, `create_at`, `updated_at`) VALUES
(3, 'Baby Super Mall', 'http://babysupermall.com/main/browse/by-brand-glenna-jean.html', '2013-03-14 03:51:30', '0000-00-00 00:00:00'),
(4, 'La Bella', 'http://www.labellababybedding.com/catalog.htm?category=57', '2013-03-14 03:51:52', '0000-00-00 00:00:00'),
(5, 'Baby Age', 'http://www.babyage.com/brands/glenna_jean.htm', '2013-03-14 03:52:11', '0000-00-00 00:00:00'),
(6, 'Baby Bedding Town', 'http://www.babybeddingtown.com/baby-bedding/designer-baby-bedding/glenna-jean-baby-bedding', '2013-03-14 03:52:44', '0000-00-00 00:00:00'),
(7, 'Bella Baby', 'http://www.bellababy-boutique.com/Glenna-Jean_c_250.html', '2013-03-14 07:35:03', '0000-00-00 00:00:00'),
(8, 'Baby Universe', 'http://www.babyuniverse.com/search/index.jsp?kw=&amp;f=Taxonomy/BABYU/3481337&amp;f=PAD/Brand+Name+Secondary/Glenna+Jean&amp;f=Taxonomy/BABYU/3489583&amp;f=Taxonomy/BABYU/3489586&amp;fbc=1&amp;fbn=Taxonomy|Crib+Bedding&amp;fbx=1', '2013-03-14 07:35:28', '0000-00-00 00:00:00'),
(9, 'Shower Your Baby', 'http://showeryourbaby.com/babybedding1.html', '2013-03-14 07:36:13', '0000-00-00 00:00:00'),
(10, 'Baby In Comfort', 'http://www.livingincomfort.com/indoor-store-baby-kids-stuff-bedding-glenna-jean.html', '2013-03-14 07:36:41', '0000-00-00 00:00:00'),
(11, 'Simply Baby Furniture', 'http://www.simplybabyfurniture.com/shop-by-brand-glenna-jean.html', '2013-03-14 07:37:03', '0000-00-00 00:00:00'),
(12, 'Net Kids Wear', 'http://netkidswear.com/glenjeanbedc.html', '2013-03-14 07:37:29', '0000-00-00 00:00:00'),
(13, 'A baby&#39;s Palace', 'http://www.ababysplace.com/index.asp?PageAction=VIEWCATS&amp;Category=11', '2013-03-14 07:38:08', '0000-00-00 00:00:00'),
(14, 'The Frog and the Princess', 'http://www.thefrogandtheprincess.com/baby-girl.php', '2013-03-14 07:38:32', '0000-00-00 00:00:00'),
(15, 'Baby Metro', 'http://www.babymetro.com/Glenna-Jean-s/196.htm', '2013-03-14 07:38:55', '0000-00-00 00:00:00'),
(16, 'Wayfair', 'http://www.wayfair.com/Glenna-Jean-C138195.html', '2013-03-14 07:39:14', '0000-00-00 00:00:00'),
(17, 'Baby Authority', 'http://www.babyauthority.com/brands/glenna-jean/', '2013-03-14 07:39:27', '0000-00-00 00:00:00'),
(18, 'Baby Mania', 'http://www.babymania.com/GlennaJean-tp2-7.html', '2013-03-14 07:39:43', '0000-00-00 00:00:00'),
(19, 'Buy Buy Baby', 'http://www.buybuybaby.com/searchSKU.asp?brand=458&amp;go=1&amp;', '2013-03-14 07:40:01', '0000-00-00 00:00:00'),
(20, 'PishPoshBaby', 'http://www.pishposhbaby.com/brands-glenna-jean.html', '2013-03-14 07:40:16', '0000-00-00 00:00:00'),
(21, 'My Baby Bedding Shop', 'http://www.mybabybeddingshop.com/shopbybrand/glennajean', '2013-03-14 07:40:33', '0000-00-00 00:00:00'),
(22, 'Parental Guide', 'http://www.parentalguide.org/glennajean.aspx', '2013-03-14 07:40:55', '0000-00-00 00:00:00');

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
(2, 'About us', '<p align="justify" class="about_p">Glenna Jean, a family business for over 35 years, specializes in soft textured fabrics and hand-patched bedding. Our extensive fabric inventory includes cut velvets, corduroys, jacquards, dupioni, woven cottons, embroideries and opulent trimmings gathered from across the globe.&nbsp; Combine that with our complete line of coordinating accessories and your baby&#39;s nursery will be transformed into the soft, warm, nurturing environment that babies need.</p>\r\n\r\n<p align="justify" class="about_p">We offer a diverse collection of infant, twin and full bedding designed to satisfy your own unique taste and your baby&#39;s need for comfort and security.&nbsp; Because all of our sewing takes place in the United States, we can closely monitor its quality and construction to bring you the best made product on the market using the highest thread count fabrics.&nbsp; And because our product is designed domestically, our patterns are trend driven so you have access to the latest fashion colors and styles for an extra special nursery.</p>\r\n\r\n<p align="justify" class="about_p">Our complete line of accessories grow with your child.&nbsp; This makes the transition from a nursery to a toddler room an easy one.&nbsp; Simply convert the crib to a bed and replace the nursery linens with our coordinating twin and full bedding.&nbsp; The lamps, rug, wall decor, window treatments, pillows and wall color will match and don&#39;t need to be updated.&nbsp;</p>\r\n\r\n<p align="justify" class="about_p">So from our family to yours, we&#39;d like to say &quot;thank you for choosing Glenna Jean&quot;.&nbsp; You can take comfort in knowing that you have access to the best designed, highest quality bedding available.*&nbsp; When you purchase a Glenna Jean crib bedding set, you are purchasing a lovingly handcrafted product with a rich history, still proudly made in America, in the heart of historic Petersburg, Virginia.</p>\r\n\r\n<p class="about_p_bold"><strong><em>Proud to be a 6 time winner of &quot;Best Bedding&quot; by the readers of Baby &amp; Childrens&#39; Product News.&nbsp; </em></strong></p>', '2013-03-07 10:26:10', '0000-00-00 00:00:00'),
(3, 'FAQ/Contact', '<p align="justify">Q: I don&rsquo;t see any prices listed. How much are your bedding sets?<br />\r\nA: We are the manufacturer and do not sell our products directly. Please visit our store locator section for a list of retailers in your area. They will be able to assist you with pricing information.</p>\r\n\r\n<p align="justify"><br />\r\nQ: Do you make bedding for round cribs?<br />\r\nA: We don&rsquo;t make bedding for round cribs at this time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: I want to have my glider covered to match my baby&rsquo;s nursery. Can I buy fabric by the yard?<br />\r\nA: Almost all of our fabrics are available by the yard for you to customize your nursery. Any of the retailers in our store locator section will be able to assist you with fabric widths and availability.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: Are your bedding sets available as separates?<br />\r\nA: Yes, all of our products are available individually.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: Is my Glenna Jean bedding washable?<br />\r\nA: With the exception of items that contain tassel trims, all Glenna Jean bedding is machine washable. Wash items on the GENTLE CYCLE in cold water Use only non-chlorine bleach when needed and LAY FLAT TO DRY.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: I would like sample swatches to see the actual colors and quality of the fabrics used in your products.<br />\r\nA: Fabric swatches are available for $5.00 per set by calling our customer service department @ 804.861.0687.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: Who makes the cribs shown in the Latte, Echo, Tickled Pink and Mod Squad photos?<br />\r\nA: The Latte, Echo and Tickled Pink cribs are from Morigeau-Lepine, while the Mod Squad crib was fabricated by our design team for the photo and is not commercially available.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="justify">Q: Your tag line says &ldquo;Made for Life&rdquo;. Does that mean your products are guaranteed forever?<br />\r\nA: While the utmost care goes into the construction and design of every Glenna Jean product, (we have had customers pass their Glenna Jean bedding on to their children&rsquo;s children) they are not guaranteed forever. They are guaranteed from defects in workmanship from 90 days from shipment.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1>Contact Info</h1>\r\n\r\n<p align="left"><span class="subtitles">Glenna Jean </span><br />\r\n<span class="tekst2">PO Box 2187,<br />\r\nPetersburg, Virginia, 23804 </span><br /> <span class="subtitles">Contact No. (804) 861-0687</span></p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>', '2013-03-08 04:34:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `category`, `created_at`, `updated_at`) VALUES
(5, 'Quilt', '', '1b979f4048bd60fa637f1a68975ce3f7.jpg', 14, '2013-03-13 10:57:16', '0000-00-00 00:00:00'),
(6, 'Throw (Houndstooth Check with Softee Back)', '', 'ba503b6bb870011e88bbc7f350632cf3.jpg', 14, '2013-03-13 16:55:43', '0000-00-00 00:00:00'),
(7, 'Bumper', '', 'dc129ae09349f410bd833e788c486113.jpg', 14, '2013-03-13 16:56:51', '0000-00-00 00:00:00'),
(8, 'Convertible Crib Rail Protector - Long (Individual) (Toile)', '', '325e645850bc3fed46b15077bf6e5118.jpg', 14, '2013-03-13 16:58:26', '0000-00-00 00:00:00'),
(9, 'Convertible Crib Rail Protector - Short (Set of 2) (Toile)', '', '97b536ea1fb4ebce0ea2a8d91701a3a1.jpg', 14, '2013-03-13 16:59:03', '0000-00-00 00:00:00'),
(10, 'Diaper Stacker', '', '1928c7afad7ac26814f213e7babd40b8.jpg', 14, '2013-03-13 16:59:32', '0000-00-00 00:00:00'),
(11, 'Changing Pad Cover (Toile)', '', 'df55eff413a40b1da4074d6dbd3c8289.jpg', 14, '2013-03-13 17:00:03', '0000-00-00 00:00:00'),
(12, 'Crib Skirt', '', 'a77f33fbebc806e1813a5bcd62396bcc.jpg', 14, '2013-03-13 23:48:52', '0000-00-00 00:00:00'),
(13, 'Pillow  - Toile with Fringe', '', 'd4e1875ce0f7b8842591b1955d245d5b.jpg', 14, '2013-03-13 23:49:21', '0000-00-00 00:00:00'),
(14, 'Pillow - Houndstooth Check', '', 'b7e883e948b5a8213860f6a686dc30bd.jpg', 14, '2013-03-13 23:50:28', '0000-00-00 00:00:00'),
(15, 'Pillow - Roll  (Toile)', '', 'd0181843ebf1d5ba93216159a746c44d.jpg', 14, '2013-03-13 23:51:21', '0000-00-00 00:00:00'),
(16, 'Pillow - Coral', '', '827def0414b0e664d66f1a9456d41355.jpg', 14, '2013-03-13 23:51:47', '0000-00-00 00:00:00'),
(17, 'Pillow - Tan Check', '', 'c9553a1a9a71020ab5e504a042ceec03.jpg', 14, '2013-03-13 23:52:36', '0000-00-00 00:00:00'),
(18, 'Pillow - Cream Ribbon', '', '2e36e43dd713b4735f9ca7152156cf96.jpg', 14, '2013-03-14 00:12:42', '0000-00-00 00:00:00'),
(19, 'Drapery Panels (Blue Velvet) (Set of 2) (Approx. 100x40&quot;) Lined', '', '6fc88457abeefd86a79f229906b08dda.jpg', 14, '2013-03-14 00:14:13', '0000-00-00 00:00:00'),
(20, 'Window Valance Toille (Approximately 78x18&quot;)', '', 'd662028f21857cfb0146507168ea5eea.jpg', 14, '2013-03-14 00:14:32', '0000-00-00 00:00:00'),
(21, 'Mobile Arm Cover (53&quot;) (Blue Velvet)', '', '21b87ff956d2f8762f75b640d59b1d70.jpg', 14, '2013-03-14 00:15:07', '0000-00-00 00:00:00'),
(22, 'Rug - Cream Shag (2x3&#39;)', '', '432b9e7afe68024287c3500cab547362.jpg', 14, '2013-03-14 00:17:25', '0000-00-00 00:00:00'),
(23, 'Fitted Sheet (Cream Softee)', '', '16d6671dcf1dd7265f64b28ead34bd1c.jpg', 14, '2013-03-14 09:02:27', '0000-00-00 00:00:00'),
(24, 'Top Sheet (Cream Softee)', '', '446a9be4129dd64d90d2bd444ad50114.jpg', 14, '2013-03-14 09:02:50', '0000-00-00 00:00:00'),
(25, 'Big Baby Pin Hanger (24x7&quot;)', '', '14b7b2aca39a3e30a1958854951e2cd5.jpg', 14, '2013-03-14 09:04:27', '0000-00-00 00:00:00'),
(26, 'Storage - Wire Basket (20x13x6&quot;)', '', '4b6f0bc16ea8faf304c8c802a9ba30d9.jpg', 14, '2013-03-14 09:05:57', '0000-00-00 00:00:00'),
(27, 'Memory Board - Central Park (21x18&quot;)', '', 'a048f3d6381d1e77253a06b59b9dcab3.jpg', 14, '2013-03-14 09:06:28', '0000-00-00 00:00:00'),
(28, 'Wipes Box (9x6x5&quot;)', '', '32b156a1ffe49606128fb33513a6bc9b.jpg', 14, '2013-03-14 09:06:54', '0000-00-00 00:00:00'),
(29, 'Tissue Cover &amp; Wastebasket Set (5x5x6&quot; and 9x9x11&quot;)', '', '500a267a002395028349a0dcb17ca61f.jpg', 14, '2013-03-14 09:07:19', '0000-00-00 00:00:00'),
(30, 'Diaper Caddy (10x7x14&quot;)', '', '321a4f2297e01b36c2c6a7056e6da164.jpg', 14, '2013-03-14 09:07:44', '0000-00-00 00:00:00'),
(31, 'Frog Prince (9x11x19&quot;)', '', '1175cb14a007fb223a41d091098dff9f.jpg', 14, '2013-03-14 09:08:18', '0000-00-00 00:00:00'),
(32, 'Chandelier - Birds &amp; Leaves (24Hx24W&quot;) (25 watt)', '', 'a48f3810332439bffdba0343bc6429c5.jpg', 14, '2013-03-14 09:08:57', '0000-00-00 00:00:00'),
(33, 'Sheer Butterflies (Set of 6) (8X11, 10X14, 15X23&quot;)', '', '4d554f065cce41ab540b801d53df8054.jpg', 14, '2013-03-14 09:09:44', '0000-00-00 00:00:00'),
(34, 'Rug - Cream Square (2&#39;8x4&#39;8)', '', 'f7282d31a2ec0b06d00749fe9288b4b0.jpg', 14, '2013-03-14 09:10:12', '0000-00-00 00:00:00'),
(35, 'Sheer Window Panels Aprox 57 x 100&quot;', '', 'ac970930cfb2c88f7d76ee3ef9970dde.jpg', 14, '2013-03-14 09:10:42', '0000-00-00 00:00:00'),
(36, 'Little Prince Plaque (8 x 12 x 8)', '', '658641ef95685cf040165131e8d3ea67.jpg', 14, '2013-03-14 09:11:10', '0000-00-00 00:00:00'),
(37, 'Family Tree Frame (9 x 1/2 x 11)', '', '14e2e123181594bc276fcbafb27426b6.jpg', 14, '2013-03-14 09:11:32', '0000-00-00 00:00:00'),
(38, 'Watch Me Grow Frame (15 1/2 x 1/2 x 7)', '', '8af4ab3e1ab55dc9cadfc0f960b61806.jpg', 14, '2013-03-14 09:11:51', '0000-00-00 00:00:00'),
(39, 'Nest Egg Bank - Blue (5 x 4 1/2 x 4 1/4)', '', 'c54c15d58b17eb4f5db9f3cde72971e9.jpg', 14, '2013-03-14 09:12:30', '0000-00-00 00:00:00'),
(40, 'Spigot Hanger (4x24x3.5&quot;)', '', '21519f2747fc1ceba0efce32d2e87ff8.jpg', 14, '2013-03-14 09:13:03', '0000-00-00 00:00:00'),
(41, 'Wall Decal - Tree (Adjustable Size: Up To 7.5&#39; x 7.5&#39;)', '', '576c85f0c83155918b91e194c109e141.jpg', 14, '2013-03-14 09:13:39', '0000-00-00 00:00:00'),
(42, 'Pillow - Solid Blue', '', '3cfe6da3c901d94678d5c4ae5d5d037e.jpg', 15, '2013-03-14 09:23:26', '0000-00-00 00:00:00'),
(43, 'Quilt', '', 'cd13fa3c1bbacad3805cbf4c1a823114.jpg', 15, '2013-03-14 09:23:56', '0000-00-00 00:00:00'),
(44, 'Throw (Sheer Dimensional Floral)', '', '443208043db36cc9b8cb32e70fd09622.jpg', 15, '2013-03-14 09:24:28', '0000-00-00 00:00:00'),
(45, 'Bumper', '', 'c2fb5f4358b71d6423ee270e275508a0.jpg', 15, '2013-03-14 09:24:44', '0000-00-00 00:00:00'),
(46, 'Diaper Stacker', '', 'cf31ebfc34ecb8029a7dbafdcc6be6ee.jpg', 15, '2013-03-14 09:25:07', '0000-00-00 00:00:00'),
(47, 'Changing Pad Cover (Pink Moire)', '', '9bd841887fb30169599ee922c667a2f9.jpg', 15, '2013-03-14 09:25:24', '0000-00-00 00:00:00'),
(48, 'Crib Skirt', '', 'd8eaecbbeca82e43fb3ba2f58f9e52e7.jpg', 15, '2013-03-14 09:25:41', '0000-00-00 00:00:00'),
(49, 'Tablecloth Topper (Tan Moire with beaded ruffle)', '', 'a6aa4f8b2fe3c4daf8334bdd57ccabda.jpg', 15, '2013-03-14 09:26:17', '0000-00-00 00:00:00'),
(50, 'Tablecloth Underskirt - Moire with Tassles', '', '390e4d43f74ef518674eb75db134ff37.jpg', 15, '2013-03-14 09:26:37', '0000-00-00 00:00:00'),
(51, 'Fitted Sheet (Cream Softee)', '', 'c53d109b277d81ccb59f42d6568c8b7c.jpg', 15, '2013-03-14 09:27:14', '0000-00-00 00:00:00'),
(52, 'Top Sheet (Cream Softee)', '', 'c3d759f3fff11a00191df04e42b5c917.jpg', 15, '2013-03-14 09:28:27', '0000-00-00 00:00:00'),
(53, 'Pillow - Floral Overlay with Ruffle', '', '550268456ab0275be38e47d1290d2659.jpg', 15, '2013-03-14 09:28:53', '0000-00-00 00:00:00'),
(54, 'Pillow - Pink Dot', '', '22997dedd0843ee26315025733d9bcb5.jpg', 15, '2013-03-14 09:29:12', '0000-00-00 00:00:00'),
(55, 'Pillow - Mocha Dot', '', 'a99960c0703c00d0451b1385a75a5a4d.jpg', 15, '2013-03-14 09:29:30', '0000-00-00 00:00:00'),
(56, 'Pillow - Cream Ribbon with Ruffle', '', '3b1c404c80da49c1fbb977a7fe5a4384.jpg', 15, '2013-03-14 09:29:59', '0000-00-00 00:00:00'),
(57, 'Pillow - Pink Ribbon', '', 'bf0bfd792441fb58eaf9e07dc81cf542.jpg', 15, '2013-03-14 09:30:18', '0000-00-00 00:00:00'),
(58, 'Pillow - Roll (Pink Dot)', '', 'a86ac74849d4f53ed96f44cb8b0ae969.jpg', 15, '2013-03-14 09:30:39', '0000-00-00 00:00:00'),
(59, 'Wall Hanging (Set of 3 hearts)', '', '27f50b7995be75b7d93bb2d2fc6d12b4.jpg', 15, '2013-03-14 09:31:02', '0000-00-00 00:00:00'),
(60, 'Sheer Window Panel (Pink Dimensional Floral) (Aprox 100x52)', '', '9273cedb910c839824400f610b50a572.jpg', 15, '2013-03-14 09:31:27', '0000-00-00 00:00:00'),
(61, 'Drapery Panels - (Moire&#39; w Cream Tassels) Lined (Aprox 100 x 40)', '', '209938b547a7c9f67da42d166904cda0.jpg', 15, '2013-03-14 09:31:46', '0000-00-00 00:00:00'),
(62, 'Musical Mobile (Plays Brahms&#39; Lullaby)', '', '9b7b8df5363f15da64c4d10ff5f9c9e7.jpg', 15, '2013-03-14 09:32:07', '0000-00-00 00:00:00'),
(63, 'Mobile Arm Cover (Moire&#39;)', '', '8b6e0fd7ce0f1401e36aae3cc07476be.jpg', 15, '2013-03-14 09:32:36', '0000-00-00 00:00:00'),
(64, '4Pc Set (Includes quilt, bumper, cream fitted sheet, crib skirt)', '', 'a40fc13f33dda9459f36a206132cb77b.jpg', 15, '2013-03-14 09:33:10', '0000-00-00 00:00:00'),
(65, 'Full Set (Duvet cover, skirt &amp; 2 Pink shams)', '', 'a01efdfdab941ec1570c30d6865539d3.jpg', 15, '2013-03-14 09:33:35', '0000-00-00 00:00:00'),
(66, 'Lamp -Yellow Base with Roses &amp; Ribbon Shade (14x14x24&quot;) (75 w)', '', '58e0059d52188b6b39a37e983707c066.jpg', 15, '2013-03-14 09:34:08', '0000-00-00 00:00:00'),
(67, 'Storage - Wire Basket (20x13x6&quot;)', '', '12f53921e444e55c9ec1903f41cf3cb2.jpg', 15, '2013-03-14 09:34:29', '0000-00-00 00:00:00'),
(68, 'Memory Board - Antique Wire Pink (17 x 22&quot;)', '', '2071e0982e9bcff8b4a0c2826a4ffb91.jpg', 15, '2013-03-14 09:34:52', '0000-00-00 00:00:00'),
(69, 'Rosebud Topiary (6x6x12&quot;)', '', '9cc4fade16b68e2701532bf232414c13.jpg', 15, '2013-03-14 09:36:58', '0000-00-00 00:00:00'),
(70, 'Plush - Prima Donna - Small (10&quot;)', '', '251f4b3e0913b45c8d9fc319faf8d6cf.jpg', 15, '2013-03-14 09:37:47', '0000-00-00 00:00:00'),
(71, 'Plush - Prima Donna - Large (14&quot;)', '', '7f4c07b0820f109139be21bb6ff6526e.jpg', 15, '2013-03-14 09:38:06', '0000-00-00 00:00:00'),
(72, 'Rosebud and Leaf Trinket Box (4Hx5Wx3&quot;D)', '', '1a9ac03106004b30284055f35eba232b.jpg', 15, '2013-03-14 09:40:13', '0000-00-00 00:00:00'),
(73, 'Bumper', '', '318c1e2a97e2afb51bd9bd9eb1722a41.jpg', 26, '2013-03-16 08:30:28', '0000-00-00 00:00:00'),
(74, 'Crib Rail Protector (Long) Floral', '', 'ea95c99034b6f90eed80c749e1fc4e34.jpg', 26, '2013-03-16 08:30:46', '0000-00-00 00:00:00'),
(75, 'Crib Rail Protector (Short Set) Floral', '', '50fbba6b45ca42906116e7c2db86a30a.jpg', 26, '2013-03-16 08:31:29', '0000-00-00 00:00:00'),
(76, 'Diaper Stacker', '', 'ddb4b6c2264432132321e3a8503925fd.jpg', 26, '2013-03-16 08:31:57', '0000-00-00 00:00:00'),
(77, 'Changing Pad Cover (Floral)', '', '26a4feaf91b69443335bfa8a0700c84a.jpg', 26, '2013-03-16 08:32:14', '0000-00-00 00:00:00'),
(78, 'Fitted Sheet - Cream Softee', '', '2f9fb0d3292354ad23afbd6231ec81a5.jpg', 26, '2013-03-16 08:32:32', '0000-00-00 00:00:00'),
(79, 'Pillow - Pink Dot', '', 'ccb216abe74da61e4f62461f8e60a626.jpg', 26, '2013-03-16 08:32:56', '0000-00-00 00:00:00'),
(80, 'Pillow - Floral', '', 'e181c647f4ef02bc093be5c121bb9d47.jpg', 26, '2013-03-16 08:33:14', '0000-00-00 00:00:00'),
(81, 'Pillow - Zig Zag Stripe', '', '0488855217c2e6cd3a57416828210a1d.jpg', 26, '2013-03-16 08:33:35', '0000-00-00 00:00:00'),
(82, 'Pillow - Rectangle Floral', '', 'c1b6cb44bf7fabe66b31d60279d4d5c4.jpg', 26, '2013-03-16 08:33:53', '0000-00-00 00:00:00'),
(83, 'Pillow - Rectangle Zig Zag Stripe', '', 'c705ab0876f23599040ba7aa2a08ee8c.jpg', 26, '2013-03-16 08:34:15', '0000-00-00 00:00:00'),
(84, '3Pc Set (Includes quilt, white sheet, crib skirt)', '', 'f7c576e462ae7ad1f9627707c378e854.jpg', 26, '2013-03-16 08:34:41', '0000-00-00 00:00:00'),
(85, 'Window Valance  Floral (70 x 18)', '', '7cf9488852de1ecb372157a986e6d6fe.jpg', 26, '2013-03-16 08:35:03', '0000-00-00 00:00:00'),
(86, 'Drapery Panels -  Gray - (Set of 2) Not Lined (54 x 84)', '', '4df6ce51d17556a403847fd2fb9da27a.jpg', 26, '2013-03-16 08:35:26', '0000-00-00 00:00:00'),
(87, 'Musical Mobile', '', 'e6a9ce9a8e87cc1172328130c31882a9.jpg', 26, '2013-03-16 08:36:25', '0000-00-00 00:00:00'),
(88, 'Mobile Arm Cover (Pink Dot)', '', '3351ce6228c35ba0ad672e7d7f24ec7c.jpg', 26, '2013-03-16 08:36:51', '0000-00-00 00:00:00'),
(89, '4 Pc Set (Includes quilt, bumper, white sheet, crib skirt)', '', 'e4a6522ab38bf1383b2d2f019bd8336c.jpg', 26, '2013-03-16 08:37:20', '0000-00-00 00:00:00'),
(90, 'Big Baby Pin Hanger (24 x 7&quot;)', '', '1ec030e6b16f137d610e2f153ad53832.jpg', 26, '2013-03-16 08:38:07', '0000-00-00 00:00:00'),
(91, 'Lamp - Clear Base w Dot Shade (19.5 H)', '', '006917c0b1408da49a97064472d3d432.jpg', 26, '2013-03-16 08:38:32', '0000-00-00 00:00:00'),
(92, 'Round Bubblegum Rug (4 x 4)', '', '6ff349bd0de2c4b4d1f162d93284922a.jpg', 26, '2013-03-16 08:39:07', '0000-00-00 00:00:00'),
(93, 'Decorative Elephant (6 x 5 x 12)', '', '7032a5e349fed16f395b88f06eb2d921.jpg', 26, '2013-03-16 08:39:49', '0000-00-00 00:00:00'),
(94, 'Wall Decals (Set of 3)', '', '9f90278e29b5c179fd3fd37428ce69ee.jpg', 26, '2013-03-16 08:40:15', '0000-00-00 00:00:00'),
(95, 'Plush - Large Gator (15&quot;)', '', '032890ada5a16416fb40b019cf48fcf9.jpg', 26, '2013-03-16 08:40:57', '0000-00-00 00:00:00'),
(96, 'Plush - Small Gator (10&quot;)', '', 'fea68ca0cfdeabbec85557c0c19abf79.jpg', 26, '2013-03-16 08:41:17', '0000-00-00 00:00:00'),
(97, 'Plush - Mouse (15&quot;)', '', '9c7bdabe0e1b29228e0bebcf70f61263.jpg', 26, '2013-03-16 08:41:34', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `description`, `category`, `created_at`) VALUES
(14, 'e8156343ad81d181e3615193d28a2aec.jpg', '', 'hm', '2013-03-01 08:47:05'),
(15, 'ed20078a58e20028f4b62c1061598be5.jpg', '', 'hm', '2013-03-01 08:47:13'),
(16, 'ca0d598f691cb373402a2a54a558c5a2.jpg', '', 'hm', '2013-03-01 08:47:21'),
(18, '82168b1b8bef4cfc19753062d16fef06.jpg', '', 'hm', '2013-03-01 10:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Alabama', '2013-03-14 03:39:56', '0000-00-00 00:00:00'),
(3, 'Arkansas', '2013-03-14 03:39:56', '0000-00-00 00:00:00'),
(4, 'Arizona', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(5, 'California', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(6, 'Colorado', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(7, 'Connecticut', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(8, 'Florida', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(9, 'Georgia', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(10, 'Hawaii', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(11, 'Illinois', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(12, 'Idaho', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(13, 'Indiana', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(14, 'Iowa', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(15, 'Kansas', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(16, 'Kentucky', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(17, 'Louisianna', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(18, 'Maine', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(19, 'Maryland', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(20, 'Massachusetts', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(21, 'Michigan', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(22, 'Missouri', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(23, 'Minnesota', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(24, 'Missisippi', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(25, 'Nebraska', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(26, 'North Carolina', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(27, 'North Dakota ', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(28, 'New Hampshire', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(29, 'Nevada', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(30, 'New Jersey', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(31, 'New York', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(32, 'North Dakota ', '2013-03-14 10:05:57', '0000-00-00 00:00:00'),
(33, 'Ohio', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(34, 'Oklahoma', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(35, 'Oregon', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(36, 'Pennsylvania', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(37, 'Rhode Island', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(38, 'South Carolina', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(39, 'South Dakota ', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(40, 'Tennessee', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(41, 'Texas', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(42, 'Utah', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(43, 'Virginia', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(44, 'Vermont', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(45, 'Washington', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(46, 'Wisconsin', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(47, 'Puerto Rico', '2013-03-14 10:10:35', '0000-00-00 00:00:00'),
(48, 'Canada', '2013-03-14 10:10:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `state` int(11) NOT NULL COMMENT 'State ID',
  `address` varchar(300) NOT NULL,
  `contact_no` varchar(500) NOT NULL,
  `url` varchar(500) DEFAULT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `state`, `address`, `contact_no`, `url`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(3, 'Siegel&#39;s Baby&#39;s Room', 2, '758 Downtowner Blvd.Mobile AL 36609', '877-293-9791', '', '', '', '2013-03-14 03:41:11', '0000-00-00 00:00:00'),
(4, 'Sugarfoot&#39;s Baby Boutique', 2, 'Lurleen B Wallace Blvd, Northport, AL\r\n35476', '205-345-1331', '', '', '', '2013-03-14 03:41:48', '0000-00-00 00:00:00'),
(5, 'Aldrich Baby News', 3, '5665 E. Speedway Blvd.\r\nTucson \r\nAZ \r\n85712', '520-795-2400', NULL, '15.12.132', '15.12.132', '2013-03-14 03:42:26', '0000-00-00 00:00:00'),
(6, 'Buy Buy Baby', 3, '10080 N. 90th St.  Scottsdale  \r\nAZ  \r\n85258', '480-661-2123', NULL, '15.12.132', '15.12.132', '2013-03-14 03:42:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `swatches`
--

CREATE TABLE IF NOT EXISTS `swatches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `swatches`
--

INSERT INTO `swatches` (`id`, `name`, `description`, `image`, `category`, `created_at`, `updated_at`) VALUES
(1, 'dsfsdf', 'sdfsdfds', 'ed03f636bd2348361541bca72ebbc0bf.png', 26, '2013-03-19 21:53:35', '0000-00-00 00:00:00');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
