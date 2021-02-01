-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2021 at 04:08 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afghan_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_hospital`
--

DROP TABLE IF EXISTS `about_hospital`;
CREATE TABLE IF NOT EXISTS `about_hospital` (
  `about_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_hospital`
--

INSERT INTO `about_hospital` (`about_id`, `title`, `description`) VALUES
(2, 'Kunduz Hospital', '<p><span style=\"font-size:20px\">Tariq </span>Today, M&eacute;d<span style=\"background-color:#f1c40f\">ecins Sans Fronti&egrave;re</span>s (MSF) is <span style=\"font-size:22px\">rememberin</span>g one of the darkest moments in its history. On 3 October 2015, U.S. airstrikes killed 42 people and destroyed the MSF trauma hospital in Kunduz, Afghanistan. As we grieve the loss of our colleagues and patients, we are left with the question: is it still possible to safely provide medical care on the frontline? In the past year, there have been a further 77 attacks on medical facilities run and suppfjlksjlorted by MSF in Syria and Yemen. Hospitals are being continually dragged onto the battlefield, and patients and their doctors and nurses are sacrificed in the process.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE IF NOT EXISTS `advertisement` (
  `advertisement_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `description` text,
  `url` varchar(255) DEFAULT NULL,
  `photo` varchar(32) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`advertisement_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`advertisement_id`, `title`, `description`, `url`, `photo`, `start_date`, `end_date`) VALUES
(1, 'bØ¨ÛŒÙ…Ø³Ù†Ø´Ù†Ù…', '<p>bm</p>\r\n', 'b', '', '2020-09-24', '2021-06-09'),
(3, 'Ø±ÛŒØ§Ø³Øª Ø§Ù…Ù†ÛŒØª Ø³ÛŒØ³ØªÙ… Ù‡Ø§ÛŒ Ù…Ø¹Ù„ÙˆÙ…Ø§Øª', '<p style=\"text-align:right\">Ø¨ÙˆØ±Ø¯ ØªØ¹ÛŒÛŒÙ†Ø§Øª Ø®Ø¯Ù…Ø§Øª Ù…Ù„Ú©ÛŒ Ø¨ØªØ¹Ø¯Ø§Ø¯&nbsp;(ÛŒÚ© Ø¨Ø³Øª) Ø±ØªØ¨Ù‡ Ø¯ÙˆÙ…&nbsp; ÙˆØ²Ø§Ø±Øª ØªÚ©Ù†Ø§Ù„ÙˆÚ˜ÛŒ Ù…Ø¹Ù„ÙˆÙ…Ø§ØªÛŒ Ùˆ Ù…Ø®Ø§Ø¨Ø±Ø§Øª Ùˆ Ø³Ø§ÛŒÙ†Ø³ Ø±Ø§ Ø¬Ù‡Øª Ø§Ø³ØªØ®Ø¯Ø§Ù… Ú©Ø§Ø±Ú©Ù†Ø§Ù† Ø´Ø§ÛŒØ³ØªÙ‡ Ø¨Ù‡ Ø§Ø¹Ù„Ø§Ù† Ø±Ù‚Ø§Ø¨ØªÛŒ Ù…Ø¬Ø¯Ø¯ Ù…ÛŒ&zwnj; Ø³Ù¾Ø§Ø±Ø¯.</p>\r\n\r\n<p style=\"text-align:right\">Ø¹Ù„Ø§Ù‚Ù…Ù†Ø¯Ø§Ù† ÙˆØ§Ø¬Ø¯ Ø´Ø±Ø§ÛŒØ·ØŒ&zwnj; Ù…ÛŒ&zwnj;ØªÙˆØ§Ù†Ù†Ø¯ ÙÙˆØ±Ù…Ù‡ Ù‡Ø§ÛŒ Ø¯Ø±Ø®ÙˆØ§Ø³ØªÛŒ Ø±Ø§ Ø¨Ù‡ ØµÙˆØ±Øª Ø¢Ù†Ù„Ø§ÛŒÙ† Ø§Ø² ÙˆØ¨Ø³Ø§ÛŒØª Ú©Ù…ÛŒØ³ÛŒÙˆÙ† Ù…Ø³ØªÙ‚Ù„ Ø§ØµÙ„Ø§Ø­Ø§Øª Ø§Ø¯Ø§Ø±ÛŒ Ùˆ Ø®Ø¯Ù…Ø§Øª Ù…Ù„Ú©ÛŒ Ø§Ø² Ø·Ø±ÛŒÙ‚ Ù„ÛŒÙ†Ú© (<a href=\"http://www.iarcsc.com\">www.iarcsc.com</a> ) Ø§Ø±Ø§Ø¦Ù‡ Ù†Ù…Ø§ÛŒÙ†Ø¯.</p>\r\n\r\n<p style=\"text-align:right\">Ù‡Ù†Ú¯Ø§Ù… Ø¯Ø±Ø®ÙˆØ§Ø³Øª Ø´Ù…Ø§Ø±Ù‡ Ø¨Ø³Øª Ù…ÙˆØ±Ø¯ Ù†Ø¸Ø± Ø±Ø§ Ø§Ø² Ù¾Ø§ÛŒÛŒÙ† Ú©Ø§Ù¾ÛŒ Ù†Ù…ÙˆØ¯Ù‡ Ø¯Ø± Ø¨Ø®Ø´ Ù…Ø±Ø¨ÙˆØ· ÙÙˆØ±Ù… Ø¢Ù†Ù„Ø§ÛŒÙ† Ø¯Ø±Ø¬ Ù†Ù…Ø§Ø¦ÛŒØ¯.</p>\r\n\r\n<table style=\"width:0px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:right\">Ø´Ù…Ø§Ø±Ù‡</td>\r\n			<td style=\"text-align:right\">Ø¹Ù†ÙˆØ§Ù† Ø¨Ø³Øª</td>\r\n			<td colspan=\"2\" style=\"text-align:right\">Ø´Ù…Ø§Ø±Ù‡ Ø¨Ø³Øª</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:right\">Û±</td>\r\n			<td colspan=\"2\" style=\"text-align:right\">Ø±ÛŒØ§Ø³Øª Ø§Ù…Ù†ÛŒØª Ø³ÛŒØ³ØªÙ… Ù‡Ø§ÛŒ Ù…Ø¹Ù„ÙˆÙ…Ø§Øª</td>\r\n			<td style=\"text-align:right\">Û°Û±ÛµÛ´-Û±</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:right\">&nbsp;</td>\r\n			<td style=\"text-align:right\">&nbsp;</td>\r\n			<td style=\"text-align:right\">&nbsp;</td>\r\n			<td style=\"text-align:right\">&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n', 'KABUL AF', '', '2020-10-17', '2020-10-30'),
(4, 'Ø´ÙØ§Ø®Ø§Ù†Ù‡ Ø­ÙˆØ²ÙˆÛŒ ÙˆÙ„Ø§ÛŒØª Ú©Ù†Ø¯Ø²', '<p><a href=\"https://www.news-medical.net/news/20200922/Psychological-and-physical-impacts-of-childhood-sexual-abuse-are-closely-tied-shows-study.aspx\"><img alt=\"Psychological and physical impacts of childhood sexual abuse are closely tied, shows study\" src=\"https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2016%2f3%2fAbstract_medicine_background-Hilch-590_2e4a801483bf47b89171ef4d0eb913be-125x110.jpg\" /></a></p>\r\n\r\n<p><a href=\"https://www.news-medical.net/news/20200922/Psychological-and-physical-impacts-of-childhood-sexual-abuse-are-closely-tied-shows-study.aspx\">Psychological and physical impacts of childhood sexual abuse are closely tied, shows study</a></p>\r\n', 'KABUL AF', '', '2020-10-08', '2020-10-19'),
(5, 'Ø¬Ú«Ú“Û Ù¾Ù‡ ØªØ®Ø§Ø± Ú©ÙŠ Ù…Ù„Ú©ÙŠ Ù…Ø±Ú« Ú˜ÙˆØ¨Ù„Ù‡ Ø§Ø¯ÙˆÙ„Û Ø¯Ù‡', '<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.news-medical.net/news/20201008/Hard-lives-made-harder-by-COVID-Homeless-endure-a-e28098slow-moving-train-wrecke28099.aspx\"><img alt=\"Hard lives made harder by COVID: Homeless endure a â€˜slow-moving train wreckâ€™\" src=\"https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2014%2f7%2fHeart_Disease-150x125.jpg\" title=\"Hard lives made harder by COVID: Homeless endure a â€˜slow-moving train wreckâ€™\" /></a></p>\r\n\r\n<h3><a href=\"https://www.news-medical.net/news/20201008/Hard-lives-made-harder-by-COVID-Homeless-endure-a-e28098slow-moving-train-wrecke28099.aspx\">Hard lives made harder by COVID: Homeless endure a &lsquo;slow-moving train wreck&rsquo;</a></h3>\r\n\r\n<p>The message wasn&#39;t lost on Daniel Gonzalez. Early in the pandemic, one of the first things Imperial County did to ward off the virus was close the public bathrooms and, later, public cooling centers. In this sprawling Southern California desert, where summer brings blistering triple-digit heat, that lack of access could amount to a death sentence for people without shelter.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'KABUL AF', '', '2020-10-20', '2020-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `staff_id` int(11) NOT NULL,
  `absent_year` int(11) NOT NULL,
  `absent_month` int(11) NOT NULL,
  `absent_day` int(11) NOT NULL,
  `absent_hour` int(11) NOT NULL,
  PRIMARY KEY (`staff_id`,`absent_year`,`absent_month`,`absent_day`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`staff_id`, `absent_year`, `absent_month`, `absent_day`, `absent_hour`) VALUES
(2, 2020, 9, 22, 5),
(2, 2020, 9, 23, 3),
(3, 2020, 9, 23, 6),
(5, 2018, 10, 16, 2),
(2, 2020, 10, 18, 5),
(2, 2020, 11, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

DROP TABLE IF EXISTS `blood_bank`;
CREATE TABLE IF NOT EXISTS `blood_bank` (
  `blood_bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `blood_group` varchar(8) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expire_date` date NOT NULL,
  PRIMARY KEY (`blood_bank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`blood_bank_id`, `blood_group`, `quantity`, `expire_date`) VALUES
(2, 'A+', 65, '2020-09-09'),
(3, 'A+', 5, '2018-01-30'),
(4, 'A+', 50, '2018-09-25'),
(5, 'A+', 55, '2022-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(64) NOT NULL,
  PRIMARY KEY (`department_id`),
  UNIQUE KEY `department_name` (`department_name`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'Don\'t Have Ù†Ù‡ ÛŒÛŒ Ù„Ø±ÛŒ'),
(2, 'Ø¨Ø®Ø´ Ø¯Ø§Ø®Ù„Ù‡'),
(3, 'ÙˆØªØ±Ù†Ø±ÙŠ1'),
(4, 'Ø³ØªÙˆÙ…Ø§ØªÙˆÙ„ÙˆÚ˜ÛŒ'),
(5, 'Ø¨Ø®Ø´ Ø¹Ø§Ø¬Ù„'),
(6, 'Ø¨Ø®Ø´ Ø§Ø·ÙØ§Ù„'),
(7, 'Ø¨Ø®Ø´ Ø¹Ù…Ù„ÛŒØ§Øª'),
(8, 'Ø¨Ø®Ø´ Ø¬Ø±Ø§Ø­ÛŒ'),
(9, 'Ø¨Ø®Ø´ Ø¨Ø³ØªØ±'),
(10, 'Ø¨Ø®Ø´ Ø®Ø§Ø¶'),
(11, 'Ø¨Ø®Ø´ Ù…Ø­ØµÙ„ÛŒÙ†'),
(12, ''),
(13, 'afghanistan');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

DROP TABLE IF EXISTS `expense`;
CREATE TABLE IF NOT EXISTS `expense` (
  `expense_id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_to` varchar(128) NOT NULL,
  `amount` float NOT NULL,
  `currency` char(3) NOT NULL,
  `expense_date` date NOT NULL,
  PRIMARY KEY (`expense_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`expense_id`, `expense_to`, `amount`, `currency`, `expense_date`) VALUES
(1, 'faizullah', 9000.88, 'AFN', '2020-09-08'),
(2, 'Ahmad', 900, 'USD', '2020-09-08'),
(3, 'Tariq', 900, 'USD', '2020-09-08'),
(4, 'Ø¨Ø±Ù‚', 12000, 'AFN', '2018-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` char(10) DEFAULT NULL,
  `title` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `feedback_date` date NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `phone`, `title`, `message`, `feedback_date`) VALUES
(6, 'atal', 'afghan1212@gmail.com', '0780002528', 'Afghan Taliban', ' Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home  Afghanistan is your home ', '2020-09-08'),
(12, 'AFGHAN', 'aimal.afghan1212@gmail.com', '0780000205', 'Ø´ÙØ§Ø®Ø§Ù†Ù‡ Ø­ÙˆØ²ÙˆÛŒ ÙˆÙ„Ø§ÛŒØª Ú©Ù†Ø¯Ø²', '	Comprehensive Agriculture and Rural Development Organization	Ú©Ø§Ø¨Ù„	Nov-30	\r\n Intern 	Comprehensive Agriculture and Rural Development Organization	Ú©Ø§Ø¨Ù„	Nov-30	\r\n Hygiene Promotersâ€™ 	AWEC	Ø®ÙˆØ³Øª	Oct-21	\r\n Nutrition & IYCF-E Officer	Save the Children	Ø¨Ù„Ø®	Oct-22	\r\n Executive Manager	Comprehensive Agriculture and Rura', '2020-10-17'),
(11, 'Ø§Ø­Ø³Ø§Ù† Ø§Ù„Ù„Ù‡', '', '', 'Ø´ÛŒØ±Ø¢ØºØ§', 'ÛŒÛŒÛŒ', '2018-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `news_file` varchar(128) DEFAULT NULL,
  `news_date` date NOT NULL,
  `source` varchar(64) NOT NULL,
  `visit` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `description`, `news_file`, `news_date`, `source`, `visit`) VALUES
(23, 'Ø¬Ú«Ú“Û Ù¾Ù‡ ØªØ®Ø§Ø± Ú©ÙŠ Ù…Ù„Ú©ÙŠ Ù…Ø±Ú« Ú˜ÙˆØ¨Ù„Ù‡ Ø§Ø¯ÙˆÙ„Û Ø¯Ù‡', '<p style=\"text-align:right\">ØªÛŒØ±Ù‡ Ø´Ù¾Ù‡ Ø¯ ØªØ®Ø§Ø± ÙˆÙ„Ø§ÛŒØª Ù†Ù…Ú© Ø¢Ø¨ ÙˆÙ„Ø³ÙˆØ§Ù„Û Ù¾Ù‡ Ø¯Ù‡ Ø¨Ø§Ù„Ø§ Ø³ÛŒÙ…Ù‡ Ú©Û Ø¯ Ø¬Ú«Ú“Û Ù¾Ù‡ ØªØ±Ú… Ú©ÙŠ Ù…Ø±Ú« Ú˜ÙˆØ¨Ù„Ù‡ Ù‡Ù… Ø§ÙˆÚšØªÛ Ø¯Ù‡.</p>\r\n\r\n<p style=\"text-align:right\">Ø·Ù„Ø¨Ø§Ù† Ø§Ø¯Ø¹Ø§ Ú©ÙˆÙŠ Ú†ÙŠ Ø¯ÙˆÙ„Øª Ù„Ù‡ Ù‡ÙˆØ§ÙŠÙŠ ÚÙˆØ§Ú©Ù‡ Ù¾Ù‡ Ú©Ø§Ø± Ø§Ø®ÛŒØ³ØªÙ†ÙŠ ÛŒÙˆ Ú©ÙˆØ± Ø§Ùˆ Ù…Ø³Ø¬Ø¯ ÙˆÛŒØ´ØªÙ„ÙŠ Ø¯ÙŠ Ú†ÙŠ Ø¯ ÛŒÙˆÛ Ú©ÙˆØ±Ù†Û Ù¾Ù†ÚÙ‡ ØºÚ“ÙŠ( ÛŒÙˆÙ‡ ÚšÚÙ‡ØŒ ÛŒÙˆ Ù†Ø§Ø±ÛŒÙ†Ù‡ Ø§Ùˆ Û³ Ù…Ø§Ø´ÙˆÙ…Ø§Ù† ) Ø´Ù‡ÛŒØ¯Ø§Ù† Ø§Ùˆ &nbsp;ÛŒÙˆ Ú©ÙˆØ± Ùˆ Ù…Ø³Ø¬Ø¯ ØªØ®Ø±ÛŒØ¨ Ø´Ùˆ.ÙŠ Ø¯ÙŠ.</p>\r\n\r\n<p><a href=\"https://www.news-medical.net/news/20201015/Study-validates-health-related-independence-for-young-adults-with-autism.aspx\"><img alt=\"Study validates health-related independence for young adults with autism\" src=\"https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2018%2f7%2fGroup_of_high_school_students_sitting_in_classroom_and_writing_in_notebooks._-_LStockStudio_M2_790ff79608e145bd894fb0b64ee57c2a-125x110.jpg\" /></a></p>\r\n\r\n<p><a href=\"https://www.news-medical.net/news/20201015/Study-validates-health-related-independence-for-young-adults-with-autism.aspx\">Study validates health-related independence for young adults with autism</a></p>\r\n\r\n<p style=\"text-align:right\">Ø¯ÙˆÙ„Øª ØªØ± Ø§ÙˆØ³Ù‡ Ù¾Ù‡ Ø¯Û Ø§Ú“Ù‡ Ú…Ù‡ Ù†Ù‡ Ø¯ÙŠ ÙˆÙŠÙ„ÙŠ.</p>\r\n', '', '2020-10-17', 'Ù„Ø± Ø§Ùˆ Ø¨Ø±', 0),
(21, 'Ù‡Ù„Ù…Ù†Ø¯ Ú©Û Ø¬Ú«Ú“Ù‡ Ø´Ù¾Ú–Ù…Û ÙˆØ±ÚÛ ØªÙ‡ ÙˆØºÚÛØ¯Ù‡', '<p style=\"text-align:right\">Ù‡Ù„Ù…Ù†Ø¯ Ú©Û Ø¯ Ø¬Ú«Ú“Û Ø§ÙˆØ± Ù„Ø§ Ù‡Ù… Ø³ÙˆÚ“ Ø´ÙˆÛŒ Ù†Ù‡ Ø¯ÛŒ Ø§Ùˆ Ù†Ù† &#39;Ø¬Ù…Ø¹Ù‡ &#39;Ø¯ Ø¬Ú«Ú“Û Ø´Ù¾Ú–Ù…Ù‡ ÙˆØ±Ú Ø­Ú©ÙˆÙ…ØªÙŠ ÚÙˆØ§Ú©ÙˆÙ†Ùˆ Ù‡Ú…Ù‡ Ú©ÙˆÙ„Ù‡ Ø¯ Ù…Ø±Ú©Ø² Ù„ÚšÚ©Ø±Ú«Ø§Ù‡ Ù¾Ø± Û¶Û°Û± Ù„ÙˆÛŒÙ‡ Ù„Ø§Ø±Ù‡ Ø¯ ÙˆØ³Ù„ÙˆØ§Ù„ Ø·Ø§Ù„Ø¨Ø§Ù†Ùˆ ÙˆÙ„Ú©Ù‡ Ø®ØªÙ…Ù‡ Ø§Ùˆ Ø¯ØºÙ‡ Ù„Ø§Ø± Ù¾Ø±Ø§Ù†ÛŒØ²ÙŠ.</p>\r\n\r\n<p style=\"text-align:right\">Ø¯ Ù†Ø§ÙˆÛ Ø§Ùˆ Ù†Ø§Ø¯Ø¹Ù„ÙŠ ÙˆÙ„Ø³ÙˆØ§Ù„ÛŒÙˆ ÚÛŒÙ†Ùˆ Ø¨Ø±Ø®Ùˆ Ú©Û Ù„Ø§Ù‡Ù… Ø¬Ú«Ú“Ù‡ Ø±ÙˆØ§Ù†Ù‡ Ø¯Ù‡ Ø§Ùˆ Ø¯ Ø¬Ú«Ú“Û Ø¯ÙˆØ§Ú“Ù‡ ØºØ§Ú“Û ÛŒÙˆ Ù¾Ø± Ø¨Ù„ Ú«ÙˆØ²Ø§Ø±ÙˆÙ†Ù‡ Ú©ÙˆÙŠ.</p>\r\n\r\n<p><a href=\"https://www.news-medical.net/news/20201006/Study-provides-new-solution-to-offset-the-cost-of-medical-scribes.aspx\"><img alt=\"Study provides new solution to offset the cost of medical scribes\" src=\"https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2019%2f5%2fHealthcare_concept_of_professional_psychologist_doctor_consulting_and_comforting_-_BlurryMe_M3_e3f02ce2df2a48adb482bf6b9a94bc17-125x110.jpg\" /></a></p>\r\n\r\n<p style=\"text-align:right\">Ø¯ Ù‡Ù„Ù…Ù†Ø¯ Ø¯ ÙˆØ§Ù„ÙŠ Ø±Ø³Ù†ÛŒØ² Ø¯ÙØªØ± ÙˆØ§ÛŒÙŠØŒ ØªÛØ±Ù‡ Ø´Ù¾Ù‡ Ø¯ Ø¹Ù…Ù„ÛŒØ§ØªÙˆ Ù¾Ø± Ù…Ù‡Ø§Ù„ Ø¯ Ù†Ø§ÙˆÛ Ù„Ù¾Ø§Ø±Ù‡ Ø¯ ÙˆØ³Ù„ÙˆØ§Ù„Ùˆ Ø·Ø§Ù„Ø¨Ø§Ù†Ùˆ Ù†ÙˆÙ…ÙˆÙ„ Ø´ÙˆÛŒ ÙˆÙ„Ø³ÙˆØ§Ù„ Ø¯ Ø®Ù¾Ù„Ùˆ Ø¯ÙˆÙˆØ³Ø§ØªÙˆÙ†Ú©Ùˆ Ø³Ø±Ù‡ ÙˆÚ˜Ù„ Ø´ÙˆÛŒ Ø¯ÛŒ.</p>\r\n', '', '2020-10-17', 'BBC Pashto', 0),
(22, 'Ú©ÙˆØ±ÙˆÙ†Ø§ ÙØ±Ø§Ù†Ø³Ù‡ Ú©Û Ù¾Ù‡ ÛŒÙˆÙ‡ ÙˆØ±Ú ØªØ± Û³Û° Ø²Ø±Ùˆ Ú‰ÛØ± Ú©Ø³Ø§Ù† ÙˆÙ†ÛŒÙˆÙ„', '<p style=\"text-align:right\"><strong>ÙØ±Ø§Ù†Ø³ÙˆÙŠ Ú†Ø§Ø±ÙˆØ§Ú©ÙŠ ÙˆØ§ÙŠÙŠØŒ Ø¯ Ø¯ØºÙ‡ Ù‡ÛÙˆØ§Ø¯ Ù¾Ù‡ Ù¾Ù„Ø§Ø²Ù…ÛÙ†Ù‡ Ù¾Ø§Ø±ÛŒØ³ Ø§Ùˆ Ø§ØªÙˆ Ù†ÙˆØ±Ùˆ ÚšØ§Ø±ÙˆÙ†Ùˆ Ú©Û Ø¯ Ø´Ù¾Û Ù¼ÙˆÙ„Ø¨Ù†Ø¯ÛŒØ² Ø¯ Ù¾Ù„ÙŠ Ú©ÛØ¯Ùˆ Ø¯Ø±Ø´Ù„ Ú©Û Ù¾Ù‡ ÛŒÙˆÙ‡ ÙˆØ±Ú Ø¯ Ú©ÙˆÙˆÛÚ‰-Û±Û¹ Ù†Ø§Ø±ÙˆØºØ§Ù†Ùˆ Ø´Ù…ÛØ± Ø®ÙˆØ±Ø§ Ú‰ÛØ± Ø´ÙˆÛŒ Ø¯ÛŒ.</strong></p>\r\n\r\n<p style=\"text-align:right\">Ø¯ Ù¾Ù†Ø¬Ø´Ù†Ø¨Û Ù¾Ù‡ ÙˆØ±Ú Ø¯ØºÙ‡ Ù‡ÛÙˆØ§Ø¯ Ú©Û Û³Û° Ø²Ø±Ù‡ Û¶Û²Û± Ú©Ø³Ø§Ù† Ù¾Ù‡ Ú©ÙˆØ±ÙˆÙ†Ø§ Ø§Ø®ØªÙ‡ Ø¨Ù„Ù„ Ø´ÙˆÙŠ Ø§Ùˆ ØªØ± Ø¯Û ÛŒÙˆÙ‡ ÙˆØ±Ú Ù…Ø®Ú©Û Ù¾Ø±Û Û²Û² Ø²Ø±Ù‡ ÛµÛ¹Û± Ú©Ø³Ø§Ù† Ú©ÙˆØ±ÙˆÙ†Ø§ Ø´ÙˆÙŠ ÙˆÙˆ.</p>\r\n\r\n<p style=\"text-align:right\">Ø¯ Ø±ÙˆØºØªÛŒØ§ Ù†Ú“ÛŒÙˆØ§Ù„Ù‡ Ø§Ø¯Ø§Ø±Ù‡ Ø®Ø¨Ø±Ø¯Ø§Ø±ÛŒ ÙˆØ± Ú©ÙˆÙŠØŒ Ú†Û Ø¯ Ú˜ÙˆÙ†Ø¯ Ø®ÙˆÙ†Ø¯ÛŒØªÙˆØ¨ Ù„Ù¾Ø§Ø±Ù‡ Ø¯ Ø³Ø®ØªÙˆ Ø¨Ù†Ø¯ÛŒØ²ÙˆÙ†Ùˆ Ù„Ú«ÙˆÙ„ Ú‰ÛØ± Ø¶Ø±ÙˆØ±ÙŠ Ø¯ÙŠ.</p>\r\n\r\n<p style=\"text-align:right\">Ù¾Ù‡ Ø§Ø±ÙˆÙ¾Ø§ Ú©Û Ù…ÛŒÙ„ÛŒÙˆÙ†ÙˆÙ†Ùˆ Ø®Ù„Ú©Ùˆ ØªÙ‡ ÙˆÛŒÙ„ Ø´ÙˆÙŠ Ú†Û Ø¯ Ú©ÙˆØ±ÙˆÙ†Ø§ Ø¯ÙˆÛŒÙ…Û Ú…Ù¾Û Ø³Ø±Ù‡ Ø¯ Ø­Ú©ÙˆÙ…ØªÙˆÙ†Ùˆ Ø¯ Ù…Ù‚Ø§Ø¨Ù„Û Ù„Ù¾Ø§Ø±Ù‡ Ø¨Ø§ÛŒØ¯ Ø³Ø®Øª Ú˜ÙˆÙ†Ø¯ ÙˆÙ…Ù†ÙŠ.</p>\r\n\r\n<p style=\"text-align:right\">Ù¾Ù‡ Ø§Ø±ÙˆÙ¾Ø§ Ú©Û Ù„Ù‡ Ú©ÙˆØ±ÙˆÙ†Ø§ Ø¯ ÙˆØ±ÚÛ ØªØ± Ø²Ø±Ùˆ Ú‰ÛØ± Ú©Ø³Ø§Ù† Ù…Ø±ÙŠ Ø§Ùˆ Ù¾Ù‡ Ø¯Ø§ Ù…Ù‡Ø§Ù„ Ø¯ Ø±ÙˆØºØªÛŒØ§ Ù†Ú“ÛŒÙˆØ§Ù„Û Ø§Ø¯Ø§Ø±Û Ù¾Ø± Ø§Ø±ÙˆÙ¾Ø§ÙŠÙŠ Ø­Ú©ÙˆÙ…ØªÙˆÙ†Ùˆ ØºÚ– Ú©Ú“ÛŒ Ú†Û Ù„Ø§Ø³ Ù¾Ù‡ Ú©Ø§Ø± Ø´ÙŠ.</p>\r\n', '', '2020-10-17', 'BBC Pashto', 0),
(26, 'Ø´ÙØ§Ø®Ø§Ù†Ù‡ Ø­ÙˆØ²ÙˆÛŒ ÙˆÙ„Ø§ÛŒØª Ú©Ù†Ø¯Ø²', '<p><span style=\"font-size:72px\">ØªØ§Ø³Ùˆ ØºÙˆØ§Ú“ÛŒ&nbsp; Ú†ÛŒ ÙˆÛŒØ¨ Ø²Ø¯Ù‡ Ú©Ú“ÙŠ</span></p>\r\n', '', '2020-11-30', 'Ù„Ø± Ø§Ùˆ Ø¨Ø± ÛŒÙˆ Ù¾ÚšØªÙˆÙ†', 0),
(24, 'Killed In Attacks Across Pakistan', '<p>RFE<br />\r\n16 Oct 2020, 04:15 GMT+10</p>\r\n\r\n<p><span class=\"marker\"><span style=\"font-size:18px\">Pakistani officials</span></span> say<span style=\"font-family:Comic Sans MS,cursive\"> 14 security troop</span>s have been killed in two attacks in the country&#39;s northwestern and southwestern regions bordering Afghanistan.</p>\r\n\r\n<p>Six members of the paramilitary Frontier Corps died in an ambush in the restive Balochistan Province on October 15, the military said.</p>\r\n\r\n<p>A statement from the Armed Forces&#39;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '2020-10-17', 'Afghan new.net', 0),
(25, 'attack public police force', '<h3>Taliban attack public</h3>\r\n\r\n<p><img alt=\"\" src=\"https://ariananewspullzone01-j7rguih.netdna-ssl.com/wp-content/uploads/2020/10/kunduz.jpg\" style=\"height:180px; width:300px\" /></p>\r\n\r\n<p>(Last Updated On: October 4, 2020)</p>\r\n\r\n<p><strong>Heavy clashes are currently underway between the Afghan </strong></p>\r\n', '', '2020-10-17', 'ARN NEWS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

DROP TABLE IF EXISTS `overtime`;
CREATE TABLE IF NOT EXISTS `overtime` (
  `staff_id` int(11) NOT NULL,
  `overtime_year` int(11) NOT NULL,
  `overtime_month` int(11) NOT NULL,
  `overtime_day` int(11) NOT NULL,
  `over_hour` int(11) NOT NULL,
  PRIMARY KEY (`staff_id`,`overtime_year`,`overtime_month`,`overtime_day`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`staff_id`, `overtime_year`, `overtime_month`, `overtime_day`, `over_hour`) VALUES
(2, 2020, 9, 23, 3),
(2, 2018, 10, 16, 3),
(5, 2018, 10, 16, 5),
(7, 2020, 11, 5, 5),
(5, 2020, 11, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `address` varchar(128) NOT NULL,
  `phone` char(10) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birth_year` int(11) NOT NULL,
  `history` text,
  `date_save` date NOT NULL,
  PRIMARY KEY (`patient_id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `firstname`, `lastname`, `address`, `phone`, `gender`, `birth_year`, `history`, `date_save`) VALUES
(14, 'Ahamad', 'Ali', 'kabul afghanistan', '0782427382', 0, 2000, 'this is your status', '2018-10-17'),
(13, 'Ehsanullah', 'Khpalwak', 'Kunduz Afghanistan', '0787785655', 0, 1999, '', '2018-10-15'),
(15, 'faizullah', 'firozi', 'kunduz afghanistan', '0789456789', 0, 2000, 'to become a patient', '2020-10-17'),
(16, 'Ajmal', 'kajkdf', 'kundz', '0780807090', 0, 2002, 'your history', '2020-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `patient_test`
--

DROP TABLE IF EXISTS `patient_test`;
CREATE TABLE IF NOT EXISTS `patient_test` (
  `patient_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `test_date` date NOT NULL,
  `test_result` varchar(255) NOT NULL,
  PRIMARY KEY (`patient_test_id`),
  KEY `patient_patient_test_fk` (`patient_id`),
  KEY `test_patient_test_fk` (`test_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_test`
--

INSERT INTO `patient_test` (`patient_test_id`, `patient_id`, `test_id`, `test_date`, `test_result`) VALUES
(1, 11, 1, '2020-09-10', 'Many complications have been reported, including heart disease and prolonged respiratory issues in a group of people called “long-haulers.” Now, a new worrying finding shows that COVID-19 can cause sudden and irreversible hearing loss in patients.'),
(2, 10, 2, '2020-09-04', 'People may be skeptical about medical and health articles they encounter on crowdsourced websites, such as Wikipedia and Wikihealth, according to researchers.'),
(3, 8, 1, '2020-09-24', 'Researchers at Linköping University, Sweden, have developed a unique method to predict influenza epidemics by combining several sources of data.'),
(4, 8, 2, '2018-10-08', '\r\nAfrican women use advice apps to improve sexual relationships rather than health\r\nRather than using apps to seek health information, 20 per cent of African women use them to please their partners, writes Laura Owings.'),
(5, 8, 2, '2020-10-20', 'That depends on the test. Some can be done right in the office or a nearby lab, so you may have the results that day or the next. Other tests may take days or weeks, especially if they have to be sent to a specific kind of lab.'),
(6, 13, 2, '2020-10-29', 'Researchers from Queen Mary University of London, funded by Barts Charity, have launched a new clinical trial to investigate whether taking vitamin D could protect people from COVID-19'),
(7, 13, 2, '2020-10-21', 'Scientists have made a breakthrough in their work to develop semi-autonomous colonoscopy, using a robot to guide a medical device into the body.'),
(8, 14, 2, '2020-10-14', 'About 50 million people in the United States suffer with tinnitus, a condition in which people perceive sounds such as ringing or buzzing in their ears or head. It is the number one service-related disability among'),
(9, 14, 3, '2020-10-15', 'Hepatitis B disproportionately impacts U.S. Blacks, including African American and H'),
(10, 13, 1, '2020-10-15', 'The Trump administration\'s pandemic response: decisive action that saved lives,');

-- --------------------------------------------------------

--
-- Table structure for table `practice`
--

DROP TABLE IF EXISTS `practice`;
CREATE TABLE IF NOT EXISTS `practice` (
  `practice_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `phone` char(10) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `gender` tinyint(1) NOT NULL,
  `address` varchar(128) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `university` varchar(64) NOT NULL,
  `department_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`practice_id`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `email` (`email`),
  KEY `department_practice_fk` (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `practice`
--

INSERT INTO `practice` (`practice_id`, `firstname`, `lastname`, `phone`, `email`, `gender`, `address`, `photo`, `university`, `department_id`, `start_date`, `end_date`) VALUES
(1, 'atal', 'afghan', '099', 'afghan@gmail.com', 0, 'Afghan', 'assets/images/staff/user_m.png', 'kunduz', 4, '2020-09-08', '2020-11-24'),
(2, 'Ahmad', 'Ahmadi', '093787878', 'Afghan@gamail.com', 1, 'Afghanistan', 'assets/images/student_practice/1599592744turban-60782.jpg', 'kabul', 3, '2020-09-08', '2020-12-23'),
(3, 'Tariq', 'Ayoobi', '0778833232', 'Tariq@gmail.com', 0, 'Wardak Afghanistan', 'assets/images/student_practice/1602903169images (1).jfif', 'Kunduz', 2, '2020-10-17', '2022-06-14'),
(4, 'Karim', 'Badakhshi', '0763367623', 'Karim@gmail.com', 0, 'Badakhshan Afghanistan', 'assets/images/student_practice/1602903234download (3).jfif', 'Kunduz', 3, '2020-10-17', '2021-06-08'),
(5, 'Nik M', 'kunduzi', '0788888382', 'nikmohamad@gmail.com', 0, 'kunduz Afghanistan', 'assets/images/student_practice/1602903300download (1).jfif', 'kunduz', 4, '2020-10-17', '2021-01-05'),
(6, 'Ø­Ø³ÛŒØ¨ Ø§Ù„Ù„Ù‡', 'Ú©Ø§Ø¨Ù„ÛŒ', '0784541212', 'Hasib@yahoo.com', 0, 'kabul jan', 'assets/images/student_practice/1602903373download (2).jfif', 'kabul', 5, '2020-10-17', '2020-12-17'),
(7, 'Ù…Ø±ÛŒÙ…', 'Ø§ÙØºØ§Ù†', '0755454545', 'maryam@gmail.com', 1, 'Afghanistan', 'assets/images/staff/user_f.png', 'wardak', 2, '2020-10-17', '2020-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` varchar(32) NOT NULL,
  `room_type` varchar(32) NOT NULL,
  `department_id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`room_id`),
  KEY `department_room_fk` (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_no`, `room_type`, `department_id`, `capacity`) VALUES
(1, 'A-12', 'VIP', 3, 100),
(2, 'A-12', 'VIP', 6, 13);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dob` int(11) NOT NULL,
  `nic` varchar(64) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `position` varchar(64) NOT NULL,
  `gross_salary` int(11) NOT NULL,
  `currency` char(3) NOT NULL,
  `phone` char(10) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `address` varchar(128) NOT NULL,
  `hire_date` date NOT NULL,
  `staff_type` int(11) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`staff_id`),
  UNIQUE KEY `nic` (`nic`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `email` (`email`),
  KEY `department_staff_fk` (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `firstname`, `lastname`, `gender`, `dob`, `nic`, `photo`, `position`, `gross_salary`, `currency`, `phone`, `email`, `address`, `hire_date`, `staff_type`, `department_id`) VALUES
(10, 'fjdskljkf', 'jlkfjslkj', 0, 2000, 'jlkjkljkljj', 'assets/images/staff/user_m.png', 'yyiuyiu', 789, 'AFN', '7987987778', 'ufoiuoifuionkn', 'ufoiukljjlkjhkjk', '2018-10-16', 3, 1),
(2, 'Faizullah', 'Firozi', 0, 1999, '121250AF', 'assets/images/staff/user_m.png', 'admin', 90000, 'AFN', '0780002528', 'afghan1212@gmail.com', 'Kabul Afghanistan', '2020-09-08', 1, 2),
(5, 'Ahmad jan', 'Ahmadi', 0, 1958, '1217250AF', 'assets/images/staff/user_m.png', 'Admin', 797, 'USD', '0777884488', 'afghan12412@gmail.com', 'Kabul Afghanistan', '2018-10-15', 1, 3),
(7, 'Maryam', 'Mayar', 1, 1998, '1241250AF', 'assets/images/staff/user_f.png', 'admin', 797, 'USD', '0777888955', 'afghan12152@gmail.com', 'Kabul Afghanistan', '2018-10-15', 1, 2),
(12, 'fjdskljkfJ', 'JKJKJKL', 0, 2000, 'shkjfhkshh', 'assets/images/staff/user_m.png', 'hfdskjhfk', 798, 'AFN', '8734982749', 'fhsdkjhfkjshkj', 'hdskjfhsk', '2018-10-17', 1, 4),
(14, 'ahmad ', 'ahmadi', 0, 2002, '76867553766776', 'assets/images/staff/1602907135images (4).jfif', 'admin', 78000, 'AFN', '0789876543', 'tariq@gmail.com', 'wardak ', '2020-10-17', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(128) NOT NULL,
  `test_type` varchar(64) NOT NULL,
  `price` int(11) NOT NULL,
  `normal_result` varchar(255) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `test_type`, `price`, `normal_result`) VALUES
(1, 'head', 'headach', 9000, 'the head section'),
(2, 'heart', 'heart', 34000, 'this is the technical'),
(3, 'StomAch', 'The Best type', 9000, 'Good ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_password` varchar(64) NOT NULL,
  `user_photo` varchar(255) DEFAULT NULL,
  `account_status` tinyint(4) NOT NULL,
  `admin_level` tinyint(4) NOT NULL DEFAULT '0',
  `website_level` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_name`, `user_password`, `user_photo`, `account_status`, `admin_level`, `website_level`) VALUES
(3, 'faizullah', 'firozi', 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', '', 1, 1, 1),
(5, 'firozi', 'atall', 'afghan', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', NULL, 0, 0, 1),
(9, 'tariq', 'afghan', 'tariq', '*9E980CAEB48C9268E03B0A5F922FE39001A3998B', NULL, 0, 0, 1),
(14, 'Ehsan', 'khpalwak', 'ehsan', '*005E71EA323070B3C1389DE35B3F5D8276720770', NULL, 1, 0, 1),
(12, 'qahar', 'malang', 'malang', '*005E71EA323070B3C1389DE35B3F5D8276720770', NULL, 1, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
