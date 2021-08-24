-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 20, 2021 at 05:36 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatrooms`
--

DROP TABLE IF EXISTS `chatrooms`;
CREATE TABLE IF NOT EXISTS `chatrooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `replied_user_id` int(11) NOT NULL DEFAULT '0',
  `msg` varchar(200) NOT NULL,
  `created_on` varchar(20) NOT NULL DEFAULT 'null',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatrooms`
--

INSERT INTO `chatrooms` (`id`, `user_id`, `replied_user_id`, `msg`, `created_on`) VALUES
(4, 2, 6, ' Hi Alain', '21:51'),
(5, 2, 5, 'Hi Safi', '21:51'),
(6, 2, 4, 'Hi Yes', '21:51'),
(7, 2, 3, 'Hi Ishmael', '21:51'),
(12, 1, 5, 'Hi Safi', '21:54'),
(93, 2, 0, ' Hi Group!\n', '18:33'),
(107, 1, 0, ' Hi  There!\n ', '20:28'),
(111, 2, 1, ' Hi Dolph', '20:39'),
(124, 1, 4, 'Hi Ngoga!.', '9:8'),
(130, 1, 6, ' Hi', '10:25'),
(134, 1, 2, ' Hi Josie\n', '11:56'),
(137, 1, 5, 'Hi', '16:5'),
(144, 3, 0, ' Hi all\n', '17:29'),
(150, 1, 3, 'Hi', '17:30'),
(151, 3, 1, 'Hi Mugabo', '17:31'),
(152, 1, 3, ' Its been a while!', '17:31'),
(159, 2, 0, ' Hi\n', '11:5');

-- --------------------------------------------------------

--
-- Table structure for table `chat_user_table`
--

DROP TABLE IF EXISTS `chat_user_table`;
CREATE TABLE IF NOT EXISTS `chat_user_table` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) DEFAULT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_profile` varchar(100) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `user_status` enum('Disabled','Enable') DEFAULT NULL,
  `user_created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_verification_code` varchar(100) DEFAULT NULL,
  `user_login_status` enum('Logout','Login') NOT NULL DEFAULT 'Login',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_user_table`
--

INSERT INTO `chat_user_table` (`user_id`, `fname`, `lname`, `user_name`, `user_email`, `user_password`, `user_profile`, `DOB`, `user_status`, `user_created_on`, `user_verification_code`, `user_login_status`) VALUES
(1, 'Mugabo', 'Adolphe', 'mugabo', 'adoizere@gmail.com', '111capitano', 'male.jpg', '1999-06-26', 'Enable', '2021-06-18 12:23:29', '123', 'Login'),
(2, 'Josie', 'Umunezero', 'josie', 'josie@gmail.com', '111josie', 'female.png', '1999-06-26', 'Enable', '2021-06-08 14:38:08', '1234', 'Login'),
(3, 'Ishmael', 'Ndayambaje', 'ishmael', 'ishmael@gmail.com', '111ishmael', 'user.PNG', '1998-06-26', 'Enable', '2021-06-15 14:51:53', '12345', 'Login'),
(4, 'Ngoga', 'Yves', 'yves', 'yves@gmail.com', '111obio', 'font.png', '1999-06-26', 'Enable', '2021-06-23 13:48:22', '1234', 'Login'),
(5, 'Niyomugabo', 'Safi', 'safi', 'safi@gmail.com', '111safi', 'user1.png', '1999-06-26', 'Enable', '2021-06-22 13:50:06', '1235', 'Login'),
(6, 'Dusenge', 'Alain', 'alain', 'alain@gmail.com', '111alain', 'user2.png', '1999-06-26', 'Enable', '2021-06-22 13:51:08', '1234', 'Login');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
