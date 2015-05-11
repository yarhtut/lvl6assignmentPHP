-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2014 at 09:49 AM
-- Server version: 5.5.30
-- PHP Version: 5.3.19

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `21104216`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`index`, `user_name`, `password`) VALUES
(1, 'yar', '123');

-- --------------------------------------------------------

--
-- Table structure for table `col3_features`
--

CREATE TABLE IF NOT EXISTS `col3_features` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `features_top_h4` text NOT NULL,
  `features_top_p` mediumtext NOT NULL,
  `features_img` varchar(200) NOT NULL,
  `features_bot_h3` text NOT NULL,
  `features_bot_h4` text NOT NULL,
  `page_categories` varchar(30) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `col3_features`
--

INSERT INTO `col3_features` (`index`, `features_top_h4`, `features_top_p`, `features_img`, `features_bot_h3`, `features_bot_h4`, `page_categories`) VALUES
(1, 'Kia ora Welcome to Capital Organic Wellington.', 'We are an on-line organic grocer that delivers nation-wide to your home 						or place of work ONCE PER WEEK.', 'https://maps.google.co.nz/maps?q=whitireia+new+zealand.&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=-41.124748,174.837396&amp;spn=0.006295,0.006295&amp;t=h&amp;output=embed', 'We will help you to get better healthy life', 'Order Online', 'contact'),
(2, 'Kia ora Welcome to Capital Organic Wellington. ', 'We are an online organic grocer that delivers nation-wide to your home \r\n						or place of work ONCE PER WEEK. Fruit on MONDAYS; Fruit and Veg combo''s \r\n						on THURSDAYS and FRIDAYS. You can order a weekly or fortnightly standard produce \r\n						box or a flexible option is available for those requiring more control over their\r\n						diet. You can also add fruit bags, eggs, milk, yogurt, breads, crackers, muesili, \r\n						dates, juice, elderflower cordial etc (when in stock) to any standard produce order. \r\n						Tailor make your own combination, set it and forget it.', 'imgs/farm1.jpg', 'We will help you to get better healthy life', 'Order Online', 'products'),
(3, 'Kia ora Welcome to Capital Organic Wellington.', 'We are an online organic grocer that delivers nation-wide to your home or place of work ONCE PER WEEK. Fruit on MONDAYS; Fruit and Veg combo''s on THURSDAYS and FRIDAYS. You can order a weekly or fortnightly standard produce box or a flexible option is available for those requiring more control over their diet. You can also add fruit bags, eggs, milk, yogurt, breads, crackers, muesili, dates, juice, elderflower cordial etc (when in stock) to any standard produce order. Tailor make your own combination, set it and forget it.', 'imgs/farm1.jpg', 'We will help you to get better healthy life', 'Order online', 'delivery'),
(4, 'Kia ora Welcome to Capital Organic Wellington.', 'We are an online organic grocer that delivers nation-wide to your home or place of work ONCE PER WEEK. Fruit on MONDAYS; Fruit and Veg combo''s on THURSDAYS and FRIDAYS. You can order a weekly or fortnightly standard produce box or a flexible option is available for those requiring more control over their diet. You can also add fruit bags, eggs, milk, yogurt, breads, crackers, muesili, dates, juice, elderflower cordial etc (when in stock) to any standard produce order. Tailor make your own combination, set it and forget it.', 'imgs/farm1.jpg', 'We will help you to get better healthy life', 'Order Online', 'supplier'),
(5, 'Kia ora Welcome to Capital Organic Wellington. ', 'We are an online organic grocer that delivers nation-wide to your home\r\n						or place of work ONCE PER WEEK. Fruit on MONDAYS; Fruit and Veg combo''s\r\n						on THURSDAYS and FRIDAYS. You can order a weekly or fortnightly standard produce\r\n						box or a flexible option is available for those requiring more control over their\r\n						diet. You can also add fruit bags, eggs, milk, yogurt, breads, crackers, muesili,\r\n						dates, juice, elderflower cordial etc (when in stock) to any standard produce order.\r\n						Tailor make your own combination, set it and forget it.', 'images/contact/ttt.jfif', 'We will help you to get better healthy life', 'Order Online', 'thanks'),
(6, 'Kia ora Welcome to Capital Organic Wellington. ', 'We are an online organic grocer that delivers nation-wide to your home\r\n						or place of work ONCE PER WEEK. Fruit on MONDAYS; Fruit and Veg combo''s\r\n						on THURSDAYS and FRIDAYS. You can order a weekly or fortnightly standard produce\r\n						box or a flexible option is available for those requiring more control over their\r\n						diet. You can also add fruit bags, eggs, milk, yogurt, breads, crackers, muesili,\r\n						dates, juice, elderflower cordial etc (when in stock) to any standard produce order.\r\n						Tailor make your own combination, set it and forget it.', 'imgs/farm1.jpg', 'We will help you to get better healthy life', 'Order Online', 'about');

-- --------------------------------------------------------

--
-- Table structure for table `col4_about`
--

CREATE TABLE IF NOT EXISTS `col4_about` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `top_header` varchar(50) NOT NULL,
  `img_id` varchar(15) NOT NULL,
  `sub_header` varchar(100) NOT NULL,
  `main_content` mediumtext NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `col4_about`
--

INSERT INTO `col4_about` (`index`, `top_header`, `img_id`, `sub_header`, `main_content`) VALUES
(1, 'About Us', 'images/2.jpg', 'Food for thought', 'Capital Organic Wellington..\r\nalksjdlfjalkjsdf\r\nalkdsjfklalkds\r\nalkdsjfl;kajds'),
(2, '', 'images/1.jpg', 'Testing2', 'I am really happy to learn the PHP coding from Luke Today.');

-- --------------------------------------------------------

--
-- Table structure for table `col4_delivery`
--

CREATE TABLE IF NOT EXISTS `col4_delivery` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `top_h1` varchar(50) NOT NULL,
  `top_h2` varchar(100) NOT NULL,
  `img_id` varchar(50) NOT NULL,
  `content_text` mediumtext NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `col4_delivery`
--

INSERT INTO `col4_delivery` (`index`, `top_h1`, `top_h2`, `img_id`, `content_text`) VALUES
(1, 'Local Delivery', 'How it''s work', 'images/supplier/delivery.jpg', 'We deliver: \r\nfood for homes to homes in Wellington City and the lower North Island (as far north as Palmerston North and Masterton). food for work to businesses in the Wellington CBD & workplaces in the inner city suburbs. food for friends anywhere in the North Island of New Zealand (although we prefer to send food that doesn''t require chilling to addresses further north than Palmerston North as they will require overnight delivery).');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE IF NOT EXISTS `contact_form` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `textarea` mediumtext NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`index`, `name`, `email`, `telephone`, `textarea`) VALUES
(1, 'l;,l', 'luk@hard.co.nz', '04-478-1151', 'Hello i want a bannan'),
(2, 'Man,Man', 'Man@man.co.nz', '00-000-0000', 'Hi yar');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_form`
--

CREATE TABLE IF NOT EXISTS `enquiry_form` (
  `index` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `purchase_items` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_form`
--

INSERT INTO `enquiry_form` (`index`, `name`, `email`, `telephone`, `address`, `purchase_items`) VALUES
(NULL, 'Yar,Htut', 'abcd@abcd.com', '00-000-0000', 'asdfasd', '[{"name":"Chicken","type":"Meats"}]');

-- --------------------------------------------------------

--
-- Table structure for table `footer_contact`
--

CREATE TABLE IF NOT EXISTS `footer_contact` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `footer_img` varchar(30) NOT NULL,
  `footer_h3` text NOT NULL,
  `footer_name` text NOT NULL,
  `footer_phone` varchar(20) NOT NULL,
  `footer_email` varchar(30) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `footer_contact`
--

INSERT INTO `footer_contact` (`index`, `footer_img`, `footer_h3`, `footer_name`, `footer_phone`, `footer_email`) VALUES
(2, 'images/footlogo.png', 'Sign Up Today', 'Capital Organic LTD', '0800 Organic', 'admin@capitalorganic.co.nz');

-- --------------------------------------------------------

--
-- Table structure for table `footer_nav_login_supplier`
--

CREATE TABLE IF NOT EXISTS `footer_nav_login_supplier` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `footer_h2` text NOT NULL,
  `footer_link` varchar(30) NOT NULL,
  `footer_link_name` varchar(30) NOT NULL,
  `footer_catagories` varchar(30) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `footer_nav_login_supplier`
--

INSERT INTO `footer_nav_login_supplier` (`index`, `footer_h2`, `footer_link`, `footer_link_name`, `footer_catagories`) VALUES
(2, 'Menu', 'index.php', 'Home', 'menu'),
(5, '', 'products.php', 'Products', 'menu'),
(6, '', 'delivery.php', 'Delivery', 'menu'),
(7, '', 'about.php', 'About', 'menu'),
(8, '', 'contact.php', 'Contact', 'menu'),
(9, '', 'admin.php', 'Login', 'menu'),
(10, 'Information', 'admin.php', 'Customer Login', 'info'),
(11, '', 'faq.php', 'F.A.Q', 'info'),
(12, '', 'payment.php', 'Payment Option', 'info'),
(13, 'Supplier', 'supplier.php', 'Vegetables', 'supplier'),
(14, '', 'supplier.php', 'Fruits', 'supplier'),
(15, '', 'supplier.php', 'Drink', 'supplier'),
(16, '', 'supplier.php', 'Bakery', 'supplier'),
(17, '', 'supplier.php', 'Meat', 'supplier');

-- --------------------------------------------------------

--
-- Table structure for table `footer_social`
--

CREATE TABLE IF NOT EXISTS `footer_social` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `footer_h2` varchar(30) NOT NULL,
  `footer_social_link` varchar(30) NOT NULL,
  `footer_social_name` varchar(30) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `footer_social`
--

INSERT INTO `footer_social` (`index`, `footer_h2`, `footer_social_link`, `footer_social_name`) VALUES
(1, 'Follow Us', ' http://facebook.com', 'images/social/ff.png'),
(2, '', 'https://twitter.com', 'images/social/tt.png'),
(3, '', 'https://account.google.com', 'images/social/gg.png');

-- --------------------------------------------------------

--
-- Table structure for table `index_contents_1`
--

CREATE TABLE IF NOT EXISTS `index_contents_1` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `content_img` varchar(30) NOT NULL,
  `content_h2` text NOT NULL,
  `content_p` mediumtext NOT NULL,
  `content_post_catagories` int(10) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `index_contents_1`
--

INSERT INTO `index_contents_1` (`index`, `content_img`, `content_h2`, `content_p`, `content_post_catagories`) VALUES
(1, '', '', ' ', 0),
(3, 'images/food/supplier.jpg', 'Our suppliers', '<br><br><br>\r\n												 Banana<br>\r\n												 Vegetables and Fruits<br>\r\n												 Organics Meat<br><br>', 2),
(4, 'imgs/secdelivery.jpg', 'Delivery Process', ' <p>\r\n													We deliver:<br>\r\n													food for homes to homes in Wellington City and the lower North Island (as far north as Palmerston North and Masterton).													food for work to businesses in the Wellington CBD & workplaces in the inner city suburbs.												', 3),
(6, 'imgs/secorganicfood.jpg', 'What is Organic Food and Meat', 'Organic foods are produced using methods of organic farming. "Organic" standard is defined differently in different jurisdictions, in general organic farming responds to site-specific farming and crop conditions by integrating cultural, biological.............', 1);

-- --------------------------------------------------------

--
-- Table structure for table `index_new_items`
--

CREATE TABLE IF NOT EXISTS `index_new_items` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `ad_top_img` varchar(30) NOT NULL,
  `ad_bot_img` varchar(30) NOT NULL,
  `ad_h4` text NOT NULL,
  `ad_h5` text NOT NULL,
  `ad_catagories` varchar(30) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `index_new_items`
--

INSERT INTO `index_new_items` (`index`, `ad_top_img`, `ad_bot_img`, `ad_h4`, `ad_h5`, `ad_catagories`) VALUES
(1, 'images/food/ffbot.png', 'images/food/fftop.png', 'Fruits and Vegetables', 'Go Shopping', 'Fruits '),
(2, 'images/food/fotop.png', 'images/food/fobot.png', 'Healthy Organic Fast Food', 'Go shopping', 'Foods'),
(3, 'images/food/drinktop.png', 'images/food/drinkbot.png', 'Healthy Organic Drink', 'Go Shopping', 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE IF NOT EXISTS `main_menu` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `main_menu` varchar(50) NOT NULL,
  `main_menu_link` varchar(50) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`index`, `main_menu`, `main_menu_link`) VALUES
(1, 'Home', 'index.php'),
(2, 'Products', 'products.php'),
(3, 'About', 'about.php'),
(4, 'Delivery', 'delivery.php'),
(5, 'Contact', 'contact.php'),
(6, 'Login', 'login.php');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `product_h2` text NOT NULL,
  `product_img` varchar(30) NOT NULL,
  `product_p` mediumtext NOT NULL,
  `product_catagories` text NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`index`, `product_h2`, `product_img`, `product_p`, `product_catagories`) VALUES
(1, 'Carrots', 'images/food/carrot.jpg', 'Ingredients:</br>	Energy - 162 kJ\r\n						</br>\r\n										Protein - 7,3%\r\n						</br>				Carbohydrates - 84,6%\r\n						</br>				Fat - 8,1%\r\n						</br>				Fiber - 2,7 g\r\n						</br>				Water - 89,1 g', 'Vegetables'),
(2, 'Cabbage', 'images/food/cabbage.jpg', 'This versatile vegetable can be crunchy, silky, pungent, or sweet,\r\n						depending on how you choose to cook it. Do not be fooled by its \r\n						humble reputation: Cabbage is a wonder food that is packed with\r\n						flavour and nutrients.', 'Vegetables'),
(3, 'Cauliflower', 'images/food/cauliflower.jpg', 'Cauliflower is one of several vegetables in the species Brassica oleracea, in the family Brassicaceae.', 'Vegetables'),
(4, 'Apples', 'images/food/apple.jpg', 'The apple is the pomaceous fruit of the apple tree, \r\n								species Malus domestica in the rose family (Rosaceae).', 'Fruits'),
(5, 'Orange', 'images/food/orange.jpg', 'The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus\r\n								× sinensis in the family Rutaceae', 'Fruits'),
(6, 'Kiwi', 'images/food/kiwi.jpg', 'The kiwifruit or Chinese Gooseberry (often shortened to kiwi), is the edible berry of a woody vine in the genus Actinidia.', 'Fruits'),
(7, 'Drink', 'images/food/drink1.jpg', 'Provides certified organic foods and drinks from New Zealand.\r\n										All products are free from genetic engineering and use all natural indgredients.\r\n										', 'Drinks'),
(8, 'Drink', 'images/food/drink2.jpg', 'Provides certified organic foods and drinks from New Zealand.\r\n										All products are free from genetic engineering and use all natural indgredients.\r\n										', 'Drinks'),
(9, 'Drink', 'images/food/drink3.jpg', 'Provides certified organic foods and drinks from New Zealand.\r\n										All products are free from genetic engineering and use all natural indgredients.\r\n										', 'Drinks'),
(10, 'Cake', 'images/food/cake.jpg', 'Wedding, Birthday & Festive Cakes. Based in Porirua City,\r\n										we are your cake making specialists.', 'Bakerys'),
(11, 'Bread', 'images/food/bread.jpg', 'Bread is a staple food prepared from a dough of flour and water, usually by baking.', 'Bakerys'),
(12, 'Donuts', 'images/food/donuts.jpg', 'A doughnut or donut (see spelling differences) is a type of fried dough confectionery or dessert food.', 'Bakerys'),
(13, 'Chicken', 'images/food/chicken.jpg', 'Premium certified organic free range chickens from Wellington Farms.\r\n										', 'Meats'),
(14, 'Beef', 'images/food/beef.jpg', 'Organic beef is beef grown according to organic food principles', 'Meats'),
(15, 'Lamb', 'images/food/lamb.jpg', 'Organic meat. Order online organic lamb from our farm delivered direct to you New Zealand wide.', 'Meats');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `index` int(10) NOT NULL AUTO_INCREMENT,
  `social_image` text NOT NULL,
  `social_link` text NOT NULL,
  `social_categories` varchar(30) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`index`, `social_image`, `social_link`, `social_categories`) VALUES
(1, 'images/social/f.png', 'https://www.facebook.com/yarthetpan.kyawhtut', 'facebook'),
(2, 'images/social/t.png', 'https://twitter.com/login', 'twitter'),
(3, 'images/social/g.png', 'https://account.google.com', 'google');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE IF NOT EXISTS `sub_menu` (
  `main_menu` text,
  `sub_menu_name` text,
  `sub_menu_link` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`main_menu`, `sub_menu_name`, `sub_menu_link`) VALUES
('products', 'test1', 'test1'),
('products', 'test2', 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `top_features`
--

CREATE TABLE IF NOT EXISTS `top_features` (
  `top_features_h3` text NOT NULL,
  `top_features_h4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_features`
--

INSERT INTO `top_features` (`top_features_h3`, `top_features_h4`) VALUES
('We will help you to get better healthy life', 'Order Online');

-- --------------------------------------------------------

--
-- Table structure for table `top_features_img`
--

CREATE TABLE IF NOT EXISTS `top_features_img` (
  `top_features_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_features_img`
--

INSERT INTO `top_features_img` (`top_features_img`) VALUES
('imgs/farm1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `top_features_text`
--

CREATE TABLE IF NOT EXISTS `top_features_text` (
  `top_features_text_h4` text NOT NULL,
  `top_features_text_p` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_features_text`
--

INSERT INTO `top_features_text` (`top_features_text_h4`, `top_features_text_p`) VALUES
('Kia ora Welcome to Capital Organic Wellington.', 'We are an online organic grocer that delivers nation-wide to your home \r\n						or place of work ONCE PER WEEK. Fruit on MONDAYS; Fruit and Veg combo''s \r\n						on THURSDAYS and FRIDAYS. You can order a weekly or fortnightly standard produce \r\n						box or a flexible option is available for those requiring more control over their\r\n						diet. You can also add fruit bags, eggs, milk, yogurt, breads, crackers, muesili, \r\n						dates, juice, elderflower cordial etc (when in stock) to any standard produce order. \r\n						Tailor make your own combination, set it and forget it.');

-- --------------------------------------------------------

--
-- Table structure for table `top_logo`
--

CREATE TABLE IF NOT EXISTS `top_logo` (
  `logo_name` varchar(20) NOT NULL,
  `logo_img` varchar(30) NOT NULL,
  `logo_link` varchar(30) NOT NULL,
  PRIMARY KEY (`logo_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_logo`
--

INSERT INTO `top_logo` (`logo_name`, `logo_img`, `logo_link`) VALUES
('top_logo', 'images/sidelogo1.png', 'index.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
