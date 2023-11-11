-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2023 at 08:34 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `OGS`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE IF NOT EXISTS `tbl_faq` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_subject` varchar(30) NOT NULL,
  `f_content` varchar(1000) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`f_id`, `f_subject`, `f_content`) VALUES
(1, 'TEST 1', 'Content for test 1 '),
(2, 'pc', 'sakfj;sioafhsafsafsafasff'),
(3, 'big complaint', 'sadfasjlhflasjfhlskajhfsklafhklashfsklajfhsklajhflsjkadhfklsjadhfsjkladfhklsjdadhfklsjadhfklsjahdfkljashdfkljashfkljshaklfhsaddfjklhasdldjkfhsakldjfhsajkldfhsklajddhfsjkldafhsjkldafhklsjadhfkljsadhfklsjdahf;sjahd;fjklsahdd;fljha;olefhn;alskfho;iehfasklfj;sioahf[soaifh;slakdfh;silahf;wealknf;soaifhis'),
(4, 'big', 'jaskkkkkkkkkkkkkkkkkkkkfhlduasohf;oaisuhHHHH;HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHJKLDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDjaskkkkkkkkkkkkkkkkkkkkfhlduasohf;oaisuhHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHJKLDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDjaskkkkkkkkkkkkkkkkkkkkfhlduasohf;oaisuhHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHJKLDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDjaskkkkkkkkkkkkkkkkkkkkfhlduasohf'),
(5, 'SMAL', 'ASDASDASD'),
(6, 'BIG', 'jaskkkkkkkkkkkkkkkkkkkkfhlduasohf;oaisuhHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHJKLDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDjaskkkkkkkkkkkkkkkkkkkkfhlduasohf;oaisuhHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHJKLDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD'),
(7, 'big 2', 'asjhdfkjsahdflkjasfdsad\r\nshfkjashfdjksafdsadfas\r\nfdsa\r\nfsa\r\nfdsadfasdfasdfsadfasfda\r\nsfdasfdsafdasfsadfasdfas\r\ndfasfdasfasfsafsadfsadfsafa\r\nsfasfsadfasdfsdf\r\nfsdfasdfasdfas as safsad fsfd sadfa sdfas a fa fa fasdfa sfdgkashfdk askfhdlasjk hflkash flaksj hlkjsha lfkjhaslkhf lkajshdflkjash lhda lfkjsahflkjsa hlfkjsh lfjkhasljk fhslajkhf ljkashlfdkajsh fldjkahdf ljkahdsfh akjshdfl kjashdfl kjashldkfj halkjfhd lakshdfkjas hksaf '),
(8, 'manual test', 'manual test'),
(9, 'test using page', '					asdfsafdadfaf'),
(10, 'atlantic', '					global warming is dangerous');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reply`
--

CREATE TABLE IF NOT EXISTS `tbl_reply` (
  `t_id` int(11) NOT NULL,
  `t_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `t_role` varchar(6) NOT NULL,
  `t_reply` varchar(300) NOT NULL,
  `t_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reply`
--

INSERT INTO `tbl_reply` (`t_id`, `t_time`, `t_role`, `t_reply`, `t_status`) VALUES
(1, '2023-10-28 10:14:41', 'user', 'This is a test complaint.', 'intiated'),
(2, '2023-10-28 10:38:12', 'user', 'test from lily', 'intiated'),
(1, '2023-10-28 10:38:46', 'admin', 'Recived ! Closing ticket', 'admin reply'),
(1, '2023-10-28 10:40:14', 'admin', 'Opened Again', 'admin reply'),
(3, '2023-11-02 09:41:56', 'user', 'Ogling byn ashvin santhosh', 'intiated'),
(3, '2023-11-02 11:05:55', 'admin', 'ohhh he is anice guy', 'admin reply'),
(3, '2023-11-02 11:06:45', 'user', 'how do you know that ', 'user reply'),
(4, '2023-11-02 11:24:33', 'user', 'jfhgdgdkdkkdhjkdhkhkhka', 'intiated');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticket`
--

CREATE TABLE IF NOT EXISTS `tbl_ticket` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `t_content` varchar(300) NOT NULL,
  `t_subject` varchar(30) NOT NULL,
  `t_department` varchar(30) NOT NULL,
  `t_file` blob NOT NULL,
  `t_active` varchar(10) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_ticket`
--

INSERT INTO `tbl_ticket` (`t_id`, `user_id`, `t_content`, `t_subject`, `t_department`, `t_file`, `t_active`) VALUES
(1, 2, 'This is a test complaint.', 'amal', 'Lab', '', 'complete'),
(2, 3, 'test from lily', 'subject lily', 'Faculty', '', 'active'),
(3, 5, 'Ogling byn ashvin santhosh', 'ogling', 'Lab', '', 'delete'),
(4, 5, 'jfhgdgdkdkkdhjkdhkhkhka', 'srirag', 'Lab', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `role` varchar(6) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `mail`, `pass`, `role`) VALUES
(1, 'ashvin', 'ashvin@mail.com', '123', 'admin'),
(2, 'amal', 'amal@mail.com', '123', 'user'),
(3, 'lily', 'lilt@mail.in', '123', 'user'),
(4, 'hypo', 'hypo@mail.in', '123', 'user'),
(5, 'Bisna', 'B@gmail.com', '1234', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
