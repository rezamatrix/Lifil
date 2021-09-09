-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 08:05 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bit`
--

-- --------------------------------------------------------

--
-- Table structure for table `amozsh`
--

CREATE TABLE `amozsh` (
  `id` bigint(20) NOT NULL,
  `pos` bigint(255) NOT NULL,
  `neg` bigint(20) NOT NULL,
  `idsender` bigint(20) NOT NULL,
  `tarikh` varchar(255) NOT NULL,
  `matn` text NOT NULL,
  `subgecet` text NOT NULL,
  `pic5` text NOT NULL,
  `file` text NOT NULL,
  `accfree` int(11) NOT NULL DEFAULT '0',
  `ghymat` varchar(255) NOT NULL,
  `takhfif` varchar(255) NOT NULL,
  `icon` text NOT NULL,
  `sizefile` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `adminacc` int(11) NOT NULL,
  `daste` bigint(20) NOT NULL,
  `barchasb` text NOT NULL,
  `acc` int(11) NOT NULL DEFAULT '0',
  `dalil` text NOT NULL,
  `code` text NOT NULL,
  `lic` int(11) NOT NULL,
  `uscunt` int(11) NOT NULL,
  `emailacc` int(11) NOT NULL,
  `clid` varchar(255) NOT NULL,
  `dled` bigint(20) NOT NULL,
  `filet` int(11) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amozsh`
--

INSERT INTO `amozsh` (`id`, `pos`, `neg`, `idsender`, `tarikh`, `matn`, `subgecet`, `pic5`, `file`, `accfree`, `ghymat`, `takhfif`, `icon`, `sizefile`, `user`, `adminacc`, `daste`, `barchasb`, `acc`, `dalil`, `code`, `lic`, `uscunt`, `emailacc`, `clid`, `dled`, `filet`, `time2`, `star`) VALUES
(1, 0, 0, 1, '1503329718', '[center][img=608x371]https://bitsoftware.ir/imguser/reza-m/73063917we.png[/img][/center]\r\n\r\nØ§ÛŒÙ† ÛŒÚ© Ù…Ø­ØµÙˆÙ„ Ù†Ù…ÙˆÙ†Ù‡ Ø¨Ø±Ø§ÛŒ ØªØ³Øª api Ø¯Ø± Ø¨Ø³ØªØ± php Ù…ÛŒ Ø¨Ø§Ø´Ø¯\r\nØ¨Ø±Ø§ÛŒ Ø§Ø·Ù„Ø§Ø¹Ø§Øª Ø¨ÛŒØ´ØªØ± Ø¨Ù‡ [url=https://bitsoftware.ir/apihelp.php]Ø¢Ø²Ù…Ø§ÛŒØ´Ú¯Ø§Ù‡ [/url]Ø¨Ø±ÙˆÛŒØ¯\r\n\r\n\r\n', 'PHP', '30438967we.jpg,1,1,1,1', '74542322we.zip', 1, '0', '0', '57561918l.png', '501', 'reza-m', 0, 8, 'PHP', 1, '', '', 3, 1, 0, 'url4i1ih', 0, 0, '1506448828', 0),
(2, 0, 0, 1, '1503726933', '[center][img=687x297]https://bitsoftware.ir/imguser/reza-m/30438967we.jpg[/img]\r\n[img=691x266]https://bitsoftware.ir/imguser/reza-m/4831808we.png[/img]\r\n[right]Ø§ÛŒÙ† ÛŒÚ© Ù†Ù…ÙˆÙ†Ù‡ Ø¢Ø²Ù…Ø§ÛŒØ´ api Ø¨Ø±Ø§ÛŒ c# Ù…ÛŒ Ø¨Ø§Ø´Ø¯ Ø¬Ù‡Øª Ù…Ø´Ø§Ù‡Ø¯Ù‡ Ø¢Ù…ÙˆØ²Ø´ Ø¨Ù‡ Ø¨Ø®Ø´ Ø¢Ø²Ù…Ø§ÛŒØ´Ú¯Ø§Ù‡ Ø¨Ø±ÙˆÛŒØ¯[/right]\r\n[/center]\r\n', 'Ù†Ù…ÙˆÙ†Ù‡ #C', '30438967we.jpg,1,1,1,1', '81854986we.zip', 1, '0', '0', '10226319l.png', '61765', 'reza-m', 0, 33, 'Ù†Ù…ÙˆÙ†Ù‡ C#', 1, '', '', 1, 2, 0, '1rgfy5la', 2, 0, '1506448737', 0),
(3, 0, 1, 1, '1504181038', '[center][img]https://bitsoftware.ir/imguser/reza-m/30438967we.jpg[/img][/center]\r\n[right]Ù†Ø³Ø®Ù‡ Ø¯ÙˆÙ… Ø¨Ø§ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ø§Ø² Ù†Ø´Ø³Øª Ù‡Ø§ÛŒ ÙˆØ¨ Ø³Ø§ÛŒØª Ùˆ ÛŒÙˆØ²Ø± Ù†ÛŒÙ… Ùˆ Ù¾Ø³ÙˆØ±Ø¯ Ú©Ø§Ø±Ø¨Ø±[/right]\r\n[right]Ù…Ø²Ø§ÛŒØ§ Ù†ÛŒØ§Ø²ÛŒ Ø¨Ù‡ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ø§Ø² Ú©Ø¯ 32 Ú©Ø§Ø±Ú©ØªØ±ÛŒ Ù†ÛŒØ³Øª Ùˆ ÙÙ‚Ø· Ø¨Ø§ ÛŒÙˆØ²Ø± ÛŒÙ†Ù… Ùˆ Ù¾Ø³ÙˆØ±Ø¯ Ù„Ø§Ú¯ÛŒÙ† Ù…ÛŒ Ú©Ù†Ù†Ø¯[/right]\r\n', 'C# V.2', '30438967we.jpg,1,1,1,1', '45530962we.zip', 1, '0', '0', '42685896l.png', '444355', 'reza-m', 0, 33, 'Ù†Ø³Ø®Ù‡ Ø¬Ø¯ÛŒØ¯,Ø³ÛŒ Ø´Ø§Ø±Ù¾,Ù„Ø§ÛŒØ³Ù†Ø³', 1, '', '', 1, 1, 0, 'seeasdvy', 1, 0, '1506448696', 0),
(4, 0, 0, 1, '1506431734', 'ØªÙˆ Ø§ÛŒÙ† Ø¯ÙˆØ±Ù‡ Ú©Ø§Ø±Ø¨Ø±Ø§Ù† Ø´Ù…Ø§ Ø¨Ù‡ Ø§Ù…Ù† Ø¨ÙˆØ¯Ù† Ø§Ø·Ù„Ø§Ø¹Ø§ØªØ´ÙˆÙ† Ùˆ Ø¯Ø²Ø¯ÛŒØ¯Ù‡ Ù†Ø´Ø¯Ù† Ø§ÙˆÙ† ØªÙˆØ³Ø· Ø§ÙØ±Ø§Ø¯ Ø¯ÛŒÚ¯Ø± Ø®ÛŒÙ„ÛŒ Ø§Ù‡Ù…ÛŒØª Ù…ÛŒ Ø¯Ù‡Ù†Ø¯\r\nÛŒÚ©ÛŒ Ø§Ø² Ø±ÙˆØ´ Ù‡Ø§ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ø§Ø² Data encoder Ù‡Ø³Øª.\r\n\r\nØ¯Ø± Ø§ÛŒÙ†Ø¬Ø§ Ú†Ù†Ø¯ Ù†Ù…ÙˆÙ†Ù‡ ØªØ§Ø¨Ø¹ Ø³Ø§Ø¯Ù‡ Ø¨Ø±Ø§ÛŒ Ø§Ù†Ø¬Ø§Ù… Ø§ÛŒÙ† Ú©Ø§Ø± Ø¨Ù‡ Ø´Ù…Ø§ Ø¢Ù…ÙˆØ²Ø´ Ù…ÛŒ Ø¯Ù‡ÛŒÙ…\r\n[left]myencode($text)[/left]\r\n\r\nØ§ÛŒÙ† ØªØ§Ø¨Ø¹ Ø¨Ø±Ø§ÛŒ Ú©Ø¯ Ú©Ø±Ø¯Ù† Ù†ÙˆØ´ØªÙ‡ Ù‡Ø§ÛŒ Ø´Ù…Ø§ Ùˆ ÛŒØ§ ÙˆØ±ÙˆØ¯ÛŒ Ø§Ø² Ø·Ø±Ù Ú©Ø§Ø±Ø¨Ø±Ø§Ù† Ùˆ ØªØºÛŒÛŒØ± Ø§Ù† Ø¨Ù‡ Ù†ÙˆØ´ØªÙ‡ Ù‡Ø§ÛŒ ØºØ±Ù‚Ø§Ø¨Ù„ Ø®ÙˆØ§Ù†Ø¯ Ø§Ø³Øª (ÙÙ‚Ø· Ø­Ø±ÙˆÙ Ø§ÛŒÙ†Ú¯Ù„ÛŒØ³ÛŒ Ùˆ Ø¹Ù„Ø§Ù…Øª).\r\n[left]mydecode($text)[/left]\r\n\r\nØ§ÛŒÙ† ØªØ§Ø¨Ø¹ Ø¨Ø±Ø§ÛŒ Ø¨Ø§Ø² Ú¯Ø±Ø¯Ø§Ù†ÛŒ Ø§Ø·Ù„Ø§Ø¹Øª Ø¨Ù‡ Ø­Ø§Ù„Øª Ø§ÙˆÙ„ÛŒÙ‡ Ø¨Ø§ Ø¬Ù„ÙˆÚ¯ÛŒØ±ÛŒ Ø§Ø² Ø§Ø¬Ø±Ø§ÛŒ Ú©Ø¯ Ù‡Ø§ÛŒ html Ù…ÛŒ Ø¨Ø§Ø´Ø¯\r\n[left]faencode($text)[/left]\r\n\r\nÚ©Ø¯ Ú©Ø±Ø¯Ù† Ù†ÙˆØ´ØªÙ‡ Ù‡Ø§ÛŒ ÙØ§Ø±Ø³ÛŒ Ùˆ Ø¹Ù„Ø§Ú©Øª Ù‡Ø§\r\n[left]fadecode($text)[/left]\r\n\r\nØ¨Ø§Ø²Ú¯Ø±Ø¯Ø§Ù†ÛŒ Ø¨Ù‡ Ø­Ø§Ù„Øª Ø§ÙˆÙ„ÛŒÙ‡\r\n[left]allencode($text)[/left]\r\n\r\nÚ©Ø¯ Ú©Ø±Ø¯Ù† Ù†ÙˆØ´ØªÙ‡ Ù‡Ø§ÛŒ ÙØ§Ø±Ø³ÛŒ Ùˆ Ø§ÛŒÙ†Ú¯Ù„ÛŒØ³ÛŒ Ùˆ Ù‡Ù…ÛŒÙ† Ø·ÙˆØ± Ø¹Ù„Ø§Ù…Øª Ù‡Ø§\r\n[left]alldecode($text)[/left]\r\n\r\nØ¨Ø§Ø²Ú¯Ø±Ø¯Ø§Ù†ÛŒ Ø¨Ù‡ Ø­Ø§Ù„Øª Ø§ÙˆÙ„ÛŒÙ‡\r\nØ§Ø² Ù…Ø²Ø§ÛŒØ§ÛŒ Ø§ÛŒÙ† Ú©Ø§Ø±:\r\n1.Ø§Ø·Ù„Ø§Ø¹Ø§Øª Ø¨Ø±Ø§ÛŒ Ø§ÙØ±Ø§Ø¯ Ø¯ÛŒÚ¯Ø± ØºÛŒØ± Ù‚Ø§Ø¨Ù„ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ù‡Ø³Øª Ùˆ Ù‡ÛŒÚ† Ú¯ÙˆÙ†Ù‡ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ø§ÛŒ Ø§Ø² Ù†Ù…ÛŒ ØªÙˆØ§Ù†Ø¯ Ø¨Ú©Ù†Ø¯\r\n2.Ø¬Ù„Ùˆ Ø¨Ø§Ú¯ Ù‡Ø§ÛŒ SQL Ù‡Ù… Ø¨Ù‡ Ø·ÙˆØ± Ú©Ø§Ù…Ù„ Ú¯Ø±ÙØªÙ‡ Ù…ÛŒ Ø´ÙˆØ¯\r\n3.Ø¯Ø± ØµÙˆØ±ØªÛŒ Ú©Ù‡ Ø¨Ú©Ø§Ù¾ Ø¯ÛŒØªØ§Ø¨ÛŒØ³ Ø´Ù…Ø§ Ø¯Ø± Ø§Ø®ØªÛŒØ§Ø± Ø§ÙØ±Ø§Ø¯ Ø¯ÛŒÚ¯Ø± Ù‚Ø±Ø§Ø± Ø¨Ú¯ÛŒØ±Ø¯ ØºÛŒØ± Ù‚Ø§Ø¨Ù„ Ø®ÙˆØ§Ù†Ø¯Ù† Ù…ÛŒ Ø´ÙˆØ¯\r\nÙ¾ÛŒØ´Ù†Ù‡Ø§Ø¯:\r\nØ§Ø² Ú©ØªØ§Ø¨ Ø®Ø§Ù†Ù‡ Ø¢Ù…Ø§Ø¯Ù‡ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ù†Ú©Ù†ÛŒØ¯ Ø³Ø¹ÛŒ Ú©Ù†ÛŒØ¯ Ø®ÙˆØ¯ØªØ§Ù† Ø·Ø±Ø§Ø­ÛŒ Ú©Ù†ÛŒØ¯ ØªØ§ Ø§ÙØ±Ø§Ø¯ Ø¯ÛŒÚ¯Ø± Ù†ØªÙˆØ§Ù†Ù† Ø¨Ø§Ø²Ú¯Ø±Ø¯Ø§Ù†ÛŒ Ú©Ù†Ù†Ø¯', 'data encoder Ø¨Ø±Ø§ÛŒ php ', '21131145l.png,1,1,1,1', '94408872we.zip', 1, '0', '0', '33061013l.png', '1318', 'reza-m', 0, 8, 'Ø§ÛŒÙ†Ú©Ø¯Ø±,php,Ø§ÛŒÙ†Ú©Ø¯Ø± php,data encoder Ø¨Ø±Ø§ÛŒ php ,Ú©Ø¯ Ú©Ø±Ø¯Ù† Ø§Ø·Ù„Ø§Ø¹Ø§Øª,Ø°Ø®ÛŒØ± Ø§Ø·Ù„Ø§Ø¹Ø§Øª , ØªØ²Ø±ÛŒÙ‚ mysql ,Ø¨Ø§Ú¯ Ø¯ÛŒØªØ§Ø¨ÛŒØ³', 1, '', '', 2, 1, 0, '', 0, 0, '1590612807', 0),
(6, 0, 0, 1, '1510163842', '[img=60x60]https://bitsoftware.ir/img.php?user=reza-m&amp;name=73063917we.png[/img]Ø§Ø§Ø§Ø§Ø§\r\nØ§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§\'/', 'Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§', '30438967we.jpg,1,1,1,1', '74542322we.zip', 0, '100', '0', '55396324l.png', '501', 'reza-m', 0, 18, 'Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§', 1, '', '', 1, 1, 0, '', 0, 0, '', 0),
(7, 0, 0, 1, '1590612860', 'lllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', 'lllllllllllllllllllllllllllllllllllllllll', '39574980l.png,1,1,1,1', '81854986we.zip', 1, '0', '0', '39574980l.png', '61765', 'reza-m', 0, 5, 'llllllllllllllllllllllllllllllllllllll', 1, '', '', 1, 1, 0, '', 0, 0, '', 0),
(8, 0, 0, 1, '1590840486', '\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'gfhdfghdfghdfgh', 'fdhgdfghdfghdf\'\'\'\'\'\'\'', '10545173l.png,1,1,1,1', '74542322we.zip', 1, '0', '0', '10545173l.png', '501', 'reza-m', 0, 5, 'dfghdfghdfgh', 1, '', '', 1, 1, 0, '', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) NOT NULL,
  `subgect` text NOT NULL,
  `matn` text NOT NULL,
  `Tarikh` varchar(255) NOT NULL,
  `idsender` varchar(255) NOT NULL,
  `idmnue` text NOT NULL,
  `barchasb` text NOT NULL,
  `name` text NOT NULL,
  `menu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `subgect`, `matn`, `Tarikh`, `idsender`, `idmnue`, `barchasb`, `name`, `menu`) VALUES
(1, 'Ù†Ø±Ù… Ø§ÙØ²Ø§Ø± Ù‡Ø§ÛŒ Ù‡Ù…Ø±Ø§Ù‡ Ú†ÛŒØ³ØªØŸ(Ø´Ù†Ø§ÙˆØ±)', 'Ø¨Ù‡ Ù†Ø±Ù… Ø§ÙØ²Ø§Ø±Ù‡Ø§ÛŒÛŒ Ú¯ÙØªÙ‡ Ù…ÛŒ Ø´ÙˆØ¯ Ú©Ù‡ Ø¨Ø§ Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒ ØªÙ„Ú¯Ø±Ø§Ù… Ú©Ø§Ø± Ù…ÛŒ Ú©Ù†Ù†Ø¯ Ùˆ Ù†ÛŒØ§Ø²ÛŒ Ø¨Ù‡ Ø¯Ø§Ù†Ù„ÙˆØ¯ Ù†Ø±Ù… Ø§ÙØ²Ø§Ø± Ù‡Ø§ÛŒ Ø­Ø¬Ù… Ø¨Ø§Ù„Ø§ Ù†ÛŒØ³Øª\r\nØ´Ù…Ø§ Ø§Ø² Ø·Ø±ÛŒÙ‚ Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒ ØªÙ„Ú¯Ø±Ø§Ù… Ú©Ø§Ø±ÛŒ Ù…Ø´Ø§Ø¨Ù‡ Ù†Ø±Ù… Ø§ÙØ²Ø§ÛŒ Ù‡Ø§ÛŒ ÙˆÛŒØ±Ø§ÛŒØ´Ú¯Ø± ÙÛŒÙ„Ù… Ùˆ Ø¹Ú©Ø³ Ø±Ø§ Ø­Ø¯ Ù‚Ø§Ø¨Ù„ ØªÙˆØ¬Ù‡ÛŒ Ù…ÛŒ ØªÙˆØ§Ù†ÛŒØ¯ Ø§Ù†Ø¬Ø§Ù… Ø¯Ù‡ÛŒØ¯ Ùˆ Ø¨Ø±Ø§ÛŒ Ù†Ù…ÙˆÙ†Ù‡ Ù†Ø±Ù… Ø§ÙØ²Ø§Ø± Ù‡Ø§ÛŒ Ø¯ÛŒÚ¯Ø± Ù…Ø§Ù†Ù†Ø¯ Ú©Ø§Ø± Ø¨Ø§ api Ø§ÛŒÙ†Ø³ØªØ§Ú¯Ø±Ø§Ù… Ùˆ Ø¯Ø±ÛŒØ§ÙØª Ø¹Ú©Ø³ Ù¾Ø±ÙØ§ÛŒÙ„ Ùˆ Ù¾Ø³Øª Ù‡Ø§ÛŒ Ú©Ø§Ø±Ø¨Ø±\r\nÙˆ Ù†Ù…ÙˆÙ†Ù‡ Ù†Ø±Ù… Ø§ÙØ²Ø§Ø± Ù‡Ø§ÛŒ Ú©Ù‡ Ø®ÙˆØ¯ Ù…Ø§ Ø¯Ø§Ø®Ù„ Ø³Ø§ÛŒØª Ø§Ø¶Ø§ÙÙ‡ Ù…ÛŒ Ú©Ù†ÛŒÙ… Ø¨Ø±Ø§ÛŒ Ù†Ù…ÙˆÙ†Ù‡ Ø¨Ø±Ø§ÛŒ Ø¢Ù…ÙˆØ²Ø´ Ø¨Ù‡ Ø´Ù…Ø§\r\n[img=60x60]http://localhost/lifil/img.php?name=30438967we.jpg&user=reza-m[/img]', '1508176791', '1', '65819576s.jpg', 'ØªÙ„Ú¯Ø±Ø§Ù…,Ù†Ø±Ù… Ø§ÙØ²Ø§Ø± Ø´Ù†Ø§ÙˆØ±,Ù†Ø±Ù… Ø§ÙØ²Ø§Ø± Ù‡Ù…Ø±Ø§Ù‡,Ù†Ø±Ù… Ø§ÙØ²Ø§Ø± Ù¾Ø±ØªØ§Ø¨Ù„,Ø¨Ø¯ÙˆÙ† Ù†ÛŒØ§Ø² Ø¨Ù‡ Ø¯Ø§Ù†Ù„ÙˆØ¯ Ù†Ø±Ù… Ø§ÙØ²Ø§Ø±,Ù†Ø±Ù… Ø§ÙØ²Ø§Ø± Ø¨Ø¯ÙˆÙ† Ù†ÛŒØ§Ø² Ø¨Ù‡ Ø¯Ø§Ù†Ù„ÙˆØ¯,Ú©Ù¾ÛŒ Ø±Ø§ÛŒØª,Ù„Ø§ÛŒØ³Ù†Ø³', 'reza-m', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bloga`
--

CREATE TABLE `bloga` (
  `id` bigint(20) NOT NULL,
  `subgect` text NOT NULL,
  `matn` text NOT NULL,
  `Tarikh` varchar(255) NOT NULL,
  `idsender` varchar(255) NOT NULL,
  `idmnue` text NOT NULL,
  `slid` text NOT NULL,
  `pic` text NOT NULL,
  `barchasb` text NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloga`
--

INSERT INTO `bloga` (`id`, `subgect`, `matn`, `Tarikh`, `idsender`, `idmnue`, `slid`, `pic`, `barchasb`, `name`) VALUES
(1, 'data encoder Ø¨Ø±Ø§ÛŒ php ', 'ØªÙˆ Ø§ÛŒÙ† Ø¯ÙˆØ±Ù‡ Ú©Ø§Ø±Ø¨Ø±Ø§Ù† Ø´Ù…Ø§ Ø¨Ù‡ Ø§Ù…Ù† Ø¨ÙˆØ¯Ù† Ø§Ø·Ù„Ø§Ø¹Ø§ØªØ´ÙˆÙ† Ùˆ Ø¯Ø²Ø¯ÛŒØ¯Ù‡ Ù†Ø´Ø¯Ù† Ø§ÙˆÙ† ØªÙˆØ³Ø· Ø§ÙØ±Ø§Ø¯ Ø¯ÛŒÚ¯Ø± Ø®ÛŒÙ„ÛŒ Ø§Ù‡Ù…ÛŒØª Ù…ÛŒ Ø¯Ù‡Ù†Ø¯\r\nÛŒÚ©ÛŒ Ø§Ø² Ø±ÙˆØ´ Ù‡Ø§ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ø§Ø² Data encoder Ù‡Ø³Øª.\r\n&lt;-------------&gt;\r\nØ¯Ø± Ø§ÛŒÙ†Ø¬Ø§ Ú†Ù†Ø¯ Ù†Ù…ÙˆÙ†Ù‡ ØªØ§Ø¨Ø¹ Ø³Ø§Ø¯Ù‡ Ø¨Ø±Ø§ÛŒ Ø§Ù†Ø¬Ø§Ù… Ø§ÛŒÙ† Ú©Ø§Ø± Ø¨Ù‡ Ø´Ù…Ø§ Ø¢Ù…ÙˆØ²Ø´ Ù…ÛŒ Ø¯Ù‡ÛŒÙ…\r\n[left]myencode($text)[/left]\r\nØ§ÛŒÙ† ØªØ§Ø¨Ø¹ Ø¨Ø±Ø§ÛŒ Ú©Ø¯ Ú©Ø±Ø¯Ù† Ù†ÙˆØ´ØªÙ‡ Ù‡Ø§ÛŒ Ø´Ù…Ø§ Ùˆ ÛŒØ§ ÙˆØ±ÙˆØ¯ÛŒ Ø§Ø² Ø·Ø±Ù Ú©Ø§Ø±Ø¨Ø±Ø§Ù† Ùˆ ØªØºÛŒÛŒØ± Ø§Ù† Ø¨Ù‡ Ù†ÙˆØ´ØªÙ‡ Ù‡Ø§ÛŒ ØºØ±Ù‚Ø§Ø¨Ù„ Ø®ÙˆØ§Ù†Ø¯ Ø§Ø³Øª (ÙÙ‚Ø· Ø­Ø±ÙˆÙ Ø§ÛŒÙ†Ú¯Ù„ÛŒØ³ÛŒ Ùˆ Ø¹Ù„Ø§Ù…Øª).\r\n[left]mydecode($text)[/left]\r\nØ§ÛŒÙ† ØªØ§Ø¨Ø¹ Ø¨Ø±Ø§ÛŒ Ø¨Ø§Ø² Ú¯Ø±Ø¯Ø§Ù†ÛŒ Ø§Ø·Ù„Ø§Ø¹Øª Ø¨Ù‡ Ø­Ø§Ù„Øª Ø§ÙˆÙ„ÛŒÙ‡ Ø¨Ø§ Ø¬Ù„ÙˆÚ¯ÛŒØ±ÛŒ Ø§Ø² Ø§Ø¬Ø±Ø§ÛŒ Ú©Ø¯ Ù‡Ø§ÛŒ html Ù…ÛŒ Ø¨Ø§Ø´Ø¯\r\n[left]faencode($text)[/left]\r\nÚ©Ø¯ Ú©Ø±Ø¯Ù† Ù†ÙˆØ´ØªÙ‡ Ù‡Ø§ÛŒ ÙØ§Ø±Ø³ÛŒ Ùˆ Ø¹Ù„Ø§Ú©Øª Ù‡Ø§\r\n[left]fadecode($text)[/left]\r\nØ¨Ø§Ø²Ú¯Ø±Ø¯Ø§Ù†ÛŒ Ø¨Ù‡ Ø­Ø§Ù„Øª Ø§ÙˆÙ„ÛŒÙ‡\r\n[left]allencode($text)[/left]\r\nÚ©Ø¯ Ú©Ø±Ø¯Ù† Ù†ÙˆØ´ØªÙ‡ Ù‡Ø§ÛŒ ÙØ§Ø±Ø³ÛŒ Ùˆ Ø§ÛŒÙ†Ú¯Ù„ÛŒØ³ÛŒ Ùˆ Ù‡Ù…ÛŒÙ† Ø·ÙˆØ± Ø¹Ù„Ø§Ù…Øª Ù‡Ø§\r\n[left]alldecode($text)[/left]\r\nØ¨Ø§Ø²Ú¯Ø±Ø¯Ø§Ù†ÛŒ Ø¨Ù‡ Ø­Ø§Ù„Øª Ø§ÙˆÙ„ÛŒÙ‡\r\nØ§Ø² Ù…Ø²Ø§ÛŒØ§ÛŒ Ø§ÛŒÙ† Ú©Ø§Ø±:\r\n1.Ø§Ø·Ù„Ø§Ø¹Ø§Øª Ø¨Ø±Ø§ÛŒ Ø§ÙØ±Ø§Ø¯ Ø¯ÛŒÚ¯Ø± ØºÛŒØ± Ù‚Ø§Ø¨Ù„ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ù‡Ø³Øª Ùˆ Ù‡ÛŒÚ† Ú¯ÙˆÙ†Ù‡ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ø§ÛŒ Ø§Ø² Ù†Ù…ÛŒ ØªÙˆØ§Ù†Ø¯ Ø¨Ú©Ù†Ø¯\r\n2.Ø¬Ù„Ùˆ Ø¨Ø§Ú¯ Ù‡Ø§ÛŒ SQL Ù‡Ù… Ø¨Ù‡ Ø·ÙˆØ± Ú©Ø§Ù…Ù„ Ú¯Ø±ÙØªÙ‡ Ù…ÛŒ Ø´ÙˆØ¯\r\n3.Ø¯Ø± ØµÙˆØ±ØªÛŒ Ú©Ù‡ Ø¨Ú©Ø§Ù¾ Ø¯ÛŒØªØ§Ø¨ÛŒØ³ Ø´Ù…Ø§ Ø¯Ø± Ø§Ø®ØªÛŒØ§Ø± Ø§ÙØ±Ø§Ø¯ Ø¯ÛŒÚ¯Ø± Ù‚Ø±Ø§Ø± Ø¨Ú¯ÛŒØ±Ø¯ ØºÛŒØ± Ù‚Ø§Ø¨Ù„ Ø®ÙˆØ§Ù†Ø¯Ù† Ù…ÛŒ Ø´ÙˆØ¯\r\nÙ¾ÛŒØ´Ù†Ù‡Ø§Ø¯:\r\nØ§Ø² Ú©ØªØ§Ø¨ Ø®Ø§Ù†Ù‡ Ø¢Ù…Ø§Ø¯Ù‡ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ù†Ú©Ù†ÛŒØ¯ Ø³Ø¹ÛŒ Ú©Ù†ÛŒØ¯ Ø®ÙˆØ¯ØªØ§Ù† Ø·Ø±Ø§Ø­ÛŒ Ú©Ù†ÛŒØ¯ ØªØ§ Ø§ÙØ±Ø§Ø¯ Ø¯ÛŒÚ¯Ø± Ù†ØªÙˆØ§Ù†Ù† Ø¨Ø§Ø²Ú¯Ø±Ø¯Ø§Ù†ÛŒ Ú©Ù†Ù†Ø¯\r\n[img=60x60]http://localhost/lifil/img.php?name=30438967we.jpg&user=reza-m[/img]', '1506427663', '1', '1', '57578969s.jpg', '57578969b.png', 'Ø§ÛŒÙ†Ú©Ø¯Ø±,php,Ø§ÛŒÙ†Ú©Ø¯Ø± php,data encoder Ø¨Ø±Ø§ÛŒ php ,Ú©Ø¯ Ú©Ø±Ø¯Ù† Ø§Ø·Ù„Ø§Ø¹Ø§Øª,Ø°Ø®ÛŒØ± Ø§Ø·Ù„Ø§Ø¹Ø§Øª , ØªØ²Ø±ÛŒÙ‚ mysql ,Ø¨Ø§Ú¯ Ø¯ÛŒØªØ§Ø¨ÛŒØ³', 'reza-m');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cart` text NOT NULL,
  `ircart` text NOT NULL,
  `bname` text NOT NULL,
  `iduser` varchar(255) NOT NULL,
  `acc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clide`
--

CREATE TABLE `clide` (
  `id` int(11) NOT NULL,
  `clid` varchar(255) NOT NULL,
  `ida` bigint(20) NOT NULL,
  `ids` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clide`
--

INSERT INTO `clide` (`id`, `clid`, `ida`, `ids`) VALUES
(1, 'url4i1ih', 1, 1),
(2, '1rgfy5la', 2, 1),
(3, 'seeasdvy', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` bigint(20) NOT NULL,
  `idsender` varchar(255) NOT NULL,
  `idamozesh` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tarikh` varchar(255) NOT NULL,
  `matn` text NOT NULL,
  `active` int(11) NOT NULL,
  `s` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id`, `idsender`, `idamozesh`, `name`, `tarikh`, `matn`, `active`, `s`) VALUES
(1, '1', '3', 'reza-m', '1590134859', 'ggggggggggggggggggggggggggggggggggggggggg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `darkhast`
--

CREATE TABLE `darkhast` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `tell` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mablgh` varchar(255) NOT NULL,
  `vaziat` int(11) NOT NULL,
  `idc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dl`
--

CREATE TABLE `dl` (
  `id` bigint(20) NOT NULL,
  `namebuyer` varchar(255) NOT NULL,
  `idseler` varchar(255) NOT NULL,
  `namefile` varchar(255) NOT NULL,
  `idamozesh` varchar(255) NOT NULL,
  `vazaiat` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `au` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `transget` varchar(255) NOT NULL,
  `idget` varchar(255) NOT NULL,
  `lc` text NOT NULL,
  `usein` text NOT NULL,
  `clid` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dl`
--

INSERT INTO `dl` (`id`, `namebuyer`, `idseler`, `namefile`, `idamozesh`, `vazaiat`, `price`, `au`, `time`, `transget`, `idget`, `lc`, `usein`, `clid`) VALUES
(7, 'reza-m', '1', '74542322we.zip', '1', '1', '', '28683br3216-6881cd', '1503727086', '000000000000000000000000000000006619', '000000000000000000000000000000006619', 'lobst7i2vmt82n1p', 'localhost', 'url4i1ih'),
(8, 'reza-m', '1', '74542322we.zip', '2', '1', '', '76308br8637-45295cd', '1503727086', '000000000000000000000000000000007995', '000000000000000000000000000000007995', '53bj2mvkn01reb8c', '', '1rgfy5la'),
(9, 'reza-m', '1', '45530962we.zip', '3', '1', '', '86127br5298-47622cd', '1504181427', '000000000000000000000000000000009985', '000000000000000000000000000000009985', '73em9n9kh1q3pgch', '', 'seeasdvy'),
(10, 'reza-m', '1', '74542322we.zip', '6', '0', '100', '0', '1590073621', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dled`
--

CREATE TABLE `dled` (
  `id` int(11) NOT NULL,
  `ida` bigint(20) NOT NULL,
  `idd` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dled`
--

INSERT INTO `dled` (`id`, `ida`, `idd`) VALUES
(1, 2, 7),
(2, 0, 5),
(3, 3, 1),
(4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dlfile`
--

CREATE TABLE `dlfile` (
  `id` bigint(20) NOT NULL,
  `nameseller` varchar(255) NOT NULL,
  `namefile` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time to end` varchar(255) NOT NULL,
  `namebuyer` varchar(255) NOT NULL,
  `idbuyer` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mnue`
--

CREATE TABLE `mnue` (
  `id` bigint(20) NOT NULL,
  `idmaker` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mnue`
--

INSERT INTO `mnue` (`id`, `idmaker`, `name`, `color`) VALUES
(2, '1', 'php', '');

-- --------------------------------------------------------

--
-- Table structure for table `mnuea`
--

CREATE TABLE `mnuea` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mnuea`
--

INSERT INTO `mnuea` (`id`, `name`) VALUES
(1, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` bigint(20) NOT NULL,
  `ids` bigint(20) NOT NULL,
  `idg` bigint(20) NOT NULL,
  `matn` text NOT NULL,
  `sub` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `readmsg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `op`
--

CREATE TABLE `op` (
  `id` bigint(20) NOT NULL,
  `op1` varchar(255) NOT NULL,
  `op2` varchar(255) NOT NULL,
  `op3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op`
--

INSERT INTO `op` (`id`, `op1`, `op2`, `op3`) VALUES
(1, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `posneg`
--

CREATE TABLE `posneg` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `onezero` int(11) NOT NULL,
  `idkala` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posneg`
--

INSERT INTO `posneg` (`id`, `name`, `onezero`, `idkala`) VALUES
(1, 'napoleon', 1, 5),
(2, 'reza-m', 1, 5),
(3, 'reza-m', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `repass`
--

CREATE TABLE `repass` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repass`
--

INSERT INTO `repass` (`id`, `code`, `email`) VALUES
(6, 'nr1e3e0rhv3jqmp7i2ybljiu', 'rezamalekpour41@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE `sender` (
  `id` int(11) NOT NULL,
  `matn` text NOT NULL,
  `therd` bigint(20) NOT NULL,
  `therd2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`id`, `matn`, `therd`, `therd2`) VALUES
(17, '%D8%A8%D8%A7+%D8%B3%D9%84%D8%A7%D9%85+%D8%AE%D8%AF%D9%85%D8%AA+%DA%A9%D8%A7%D8%B1%D8%A8%D8%B1%D9%87%D8%A7%DB%8C+%D8%B9%D8%B2%DB%8C%D8%B2%0D%0A%F0%9F%92%A5%D9%86%D8%B3%D8%AE%D9%87+%D8%AC%D8%AF%DB%8C%D8%AF+%D8%B1%D8%A8%D8%A7%D8%AA+%D8%B1%D8%A7%D9%87+%D8%A7%D9%86%D8%AF%D8%A7%D8%B2%DB%8C+%D8%B4%D8%AF.%F0%9F%92%A5%0D%0A%F0%9F%98%8D%D8%AD%D8%A7%D9%84%D8%A7+%D8%B4%D9%85%D8%A7+%D9%85%DB%8C+%D8%AA%D9%88%D9%86%DB%8C%D8%AF+%D8%A7%D8%B2+%D8%AF%DB%8C%DA%AF%D8%B1+%DA%A9%D8%B4%D9%88%D8%B1+%D9%87%D8%A7+%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D8%A8%D8%AE%D8%B1%DB%8C%D8%AF%F0%9F%98%8D%0D%0A%D8%B1%D9%88%D8%B4+%D8%AF%D8%B1%DB%8C%D8%A7%D9%81%D8%AA+%D8%A7%D8%B3+%D8%A7%D9%85+%D8%A7%D8%B3+%D9%87%D9%85+%D8%AA%D8%BA%DB%8C%DB%8C%D8%B1+%DA%A9%D8%B1%D8%AF%D9%87%0D%0A%D8%A8%D8%B1%D8%A7%DB%8C+%D8%AE%D8%B1%DB%8C%D8%AF+%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D8%B1%D9%88%D8%B3%DB%8C%D9%87+%D8%A8%D9%87+%D8%B5%D9%88%D8%B1%D8%AA+%D8%B1%D8%A7%DB%8C%DA%AF%D8%A7%D9%86+%D8%B1%D9%88%DB%8C+%DA%A9%D9%84%DB%8C%D8%AF+%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D8%AA%D9%84%DA%AF%D8%B1%D8%A7%D9%85+%D8%B1%D8%A7%DB%8C%DA%AF%D8%A7%D9%86+%D8%B1%D9%88%D8%B3%DB%8C%D9%87+%DA%A9%D9%84%DB%8C%DA%A9+%DA%A9%D9%86%DB%8C%D8%AF%0D%0A%D8%A8%D8%A7+%D8%AA%D8%B4%DA%A9%D8%B1+%D8%A7%D8%B2+%D8%B4%D9%85%D8%A7+%D8%B9%D8%B2%DB%8C%D8%B2%D8%A7%D9%86%0D%0A%E2%9D%A4%EF%B8%8F%D9%85%D8%AF%DB%8C%D8%B1%DB%8C%D8%AA+%D9%81%D9%86%DB%8C+%D8%AA%D9%84%D9%81%DB%8C%DA%A9%E2%9D%A4%EF%B8%8F', 5146, 0),
(18, '%D8%A8%D8%A7+%D8%B3%D9%84%D8%A7%D9%85+%D8%AE%D8%AF%D9%85%D8%AA+%DA%A9%D8%A7%D8%B1%D8%A8%D8%B1%D9%87%D8%A7%DB%8C+%D8%B9%D8%B2%DB%8C%D8%B2%0D%0A%F0%9F%92%A5%D9%86%D8%B3%D8%AE%D9%87+%D8%AC%D8%AF%DB%8C%D8%AF+%D8%B1%D8%A8%D8%A7%D8%AA+%D8%B1%D8%A7%D9%87+%D8%A7%D9%86%D8%AF%D8%A7%D8%B2%DB%8C+%D8%B4%D8%AF.%F0%9F%92%A5%0D%0A%F0%9F%98%8D%D8%AD%D8%A7%D9%84%D8%A7+%D8%B4%D9%85%D8%A7+%D9%85%DB%8C+%D8%AA%D9%88%D9%86%DB%8C%D8%AF+%D8%A7%D8%B2+%D8%AF%DB%8C%DA%AF%D8%B1+%DA%A9%D8%B4%D9%88%D8%B1+%D9%87%D8%A7+%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D8%A8%D8%AE%D8%B1%DB%8C%D8%AF%F0%9F%98%8D%0D%0A%D8%B1%D9%88%D8%B4+%D8%AF%D8%B1%DB%8C%D8%A7%D9%81%D8%AA+%D8%A7%D8%B3+%D8%A7%D9%85+%D8%A7%D8%B3+%D9%87%D9%85+%D8%AA%D8%BA%DB%8C%DB%8C%D8%B1+%DA%A9%D8%B1%D8%AF%D9%87%0D%0A%D8%A8%D8%B1%D8%A7%DB%8C+%D8%AE%D8%B1%DB%8C%D8%AF+%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D8%B1%D9%88%D8%B3%DB%8C%D9%87+%D8%A8%D9%87+%D8%B5%D9%88%D8%B1%D8%AA+%D8%B1%D8%A7%DB%8C%DA%AF%D8%A7%D9%86+%D8%B1%D9%88%DB%8C+%DA%A9%D9%84%DB%8C%D8%AF+%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D8%AA%D9%84%DA%AF%D8%B1%D8%A7%D9%85+%D8%B1%D8%A7%DB%8C%DA%AF%D8%A7%D9%86+%D8%B1%D9%88%D8%B3%DB%8C%D9%87+%DA%A9%D9%84%DB%8C%DA%A9+%DA%A9%D9%86%DB%8C%D8%AF%0D%0A%D8%A8%D8%A7+%D8%AA%D8%B4%DA%A9%D8%B1+%D8%A7%D8%B2+%D8%B4%D9%85%D8%A7+%D8%B9%D8%B2%DB%8C%D8%B2%D8%A7%D9%86%0D%0A%E2%9D%A4%EF%B8%8F%D9%85%D8%AF%DB%8C%D8%B1%DB%8C%D8%AA+%D9%81%D9%86%DB%8C+%D8%AA%D9%84%D9%81%DB%8C%DA%A9%E2%9D%A4%EF%B8%8F', 2098, 0),
(19, '80643', 5913, 0),
(20, '99159', 7125, 0),
(21, '%F0%9F%92%A5%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D9%87%D8%A7%DB%8C+%D8%AC%D8%AF%DB%8C%D8%AF+%D8%A8%D9%87+%D8%B1%D8%A8%D8%A7%D8%AA+%D8%A7%D8%B6%D8%A7%D9%81%D9%87+%D8%B4%D8%AF%F0%9F%92%A5%0D%0A', 7365, 0),
(22, '%F0%9F%92%A5%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D9%87%D8%A7%DB%8C+%D8%AC%D8%AF%DB%8C%D8%AF+%D8%A8%D9%87+%D8%B1%D8%A8%D8%A7%D8%AA+%D8%A7%D8%B6%D8%A7%D9%81%D9%87+%D8%B4%D8%AF%F0%9F%92%A5%0D%0A%F0%9F%91%88%D9%88+%D9%87%D9%85%DB%8C%D9%86+%D8%B7%D9%88%D8%B1+%D8%A8%D8%A7%DA%AF+%D8%A7%D8%B9%D9%84%D8%A7%D9%85+%D9%86%DA%A9%D8%B1%D8%AF%D9%86+%D8%B1%D8%A8%D8%A7%D8%AA+%D8%A8%D8%B9%D8%AF+%D8%A7%D8%B2+%D8%A7%D9%81%D8%B2%D8%A7%DB%8C%D8%B4+%D8%A7%D8%B9%D8%AA%D8%A8%D8%A7%D8%B1+%D8%B1%D9%81%D8%B9+%D8%B4%D8%AF%D9%87+%0D%0A%D8%A8%D8%A7%D8%AA%D8%B4%DA%A9%D8%B1+%D8%A7%D8%B2+%D9%87%D9%85%D8%B1%D8%A7%D9%87%DB%8C+%D8%B4%D9%85%D8%A7%0D%0A%F0%9F%91%88%28%D8%A7%DB%8C%D9%86+%DB%8C%DA%A9+%D9%BE%DB%8C%D8%A7%D9%85+%D8%AE%D8%A7%D9%85%D9%88%D8%B4+%D9%87%D8%B3%D8%AA%29', 7674, 0),
(23, '%F0%9F%98%8D%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D9%87%D8%A7%DB%8C+%D8%AC%D8%AF%DB%8C%D8%AF+%D8%A7%D8%B6%D8%A7%D9%81%D9%87+%D8%B4%D8%AF%F0%9F%98%8D%0D%0A%D9%82%D8%A7%D8%A8%D9%84%DB%8C%D8%AA+%D8%AF%DB%8C%D8%AF%D9%86+%D8%A2%D8%AE%D8%B1%DB%8C%D9%86+%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D9%87%D8%A7%DB%8C+%D8%AE%D8%B1%DB%8C%D8%AF%D8%A7%D8%B1%DB%8C+%D8%B4%D8%AF%D9%87+%D8%AA%D9%88%D8%B3%D8%B7+%D8%B4%D9%85%D8%A7+%D8%A8%D9%87+%D8%B1%D8%A8%D8%A7%D8%AA+%D8%A7%D8%B6%D8%A7%D9%81%D9%87+%D8%B4%D8%AF+%D8%A8%D8%B1%D8%A7%DB%8C+%D8%AF%DB%8C%D8%AF%D9%86+%2Fbuy+%DA%A9%D9%84%DB%8C%DA%A9+%DA%A9%D9%86%DB%8C%D8%AF', 8617, 0),
(24, '159679', 9392, 0),
(25, '%D8%A8%D8%B1%D8%A7%DB%8C+%D8%AE%D8%B1%DB%8C%D8%AF+%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D8%AA%D9%88+%D8%B1%D8%A8%D8%A7%D8%AA+%DA%A9%D8%A7%D9%81%DB%8C%D9%87+%D8%B4%D9%85%D8%A7+%D8%A8%D9%87+%D8%B4%DA%A9%D9%84+%D8%B2%DB%8C%D8%B1+%DA%A9%D9%87+%D8%AA%D9%88%D8%B6%DB%8C%D8%AD+%D9%85%DB%8C+%D8%AF%D9%85+%D8%B9%D9%85%D9%84+%DA%A9%D9%86%DB%8C%D8%AF%3A%0D%0A%D8%A7%D9%88%D9%84+%D8%A8%D8%A7%DB%8C%D8%AF+%D8%A7%D9%81%D8%B2%D8%A7%DB%8C%D8%B4+%D8%A7%D8%B9%D8%AA%D8%A8%D8%A7%D8%B1+%D8%A8%D8%AF%DB%8C%D8%AF%0D%0A%D8%A8%D8%B1%D8%A7%DB%8C+%D8%A7%DB%8C%D9%86+%DA%A9%D8%A7%D8%B1+%D8%A8%D9%87+%D8%A7%DB%8C%D9%86+%D8%B4%DA%A9%D9%84+%D8%B9%D9%85%D9%84+%DA%A9%D9%86%DB%8C%D8%AF%0D%0A%2Fp+%D9%85%D8%A8%D9%84%D8%BA+%D9%85%D9%88%D8%B1%D8%AF+%D9%86%D8%B8%D8%B1+%D8%A8%D9%87+%D8%AA%D9%88%D9%85%D8%A7%D9%86+%0D%0A%2Fp10000%0D%0A%D8%A8%D8%B9%D8%AF+%D8%A7%D8%B2+%D8%A7%DB%8C%D9%86+%D8%A8%D9%87+%D8%B4%D9%85%D8%A7+%DB%8C%D9%87+%D9%84%DB%8C%D9%86%DA%A9+%D8%AF%D8%A7%D8%AF%D9%87+%D9%85%DB%8C+%D8%B4%D9%87+%DA%A9%D9%87+%D9%88%D8%A7%D8%B1%D8%AF+%D8%A7%D9%88%D9%86+%D9%85%DB%8C+%D8%B4%DB%8C%D8%AF+%D9%88+%D9%BE%D8%B1%D8%AF%D8%A7%D8%AE%D8%AA+%D9%85%DB%8C+%DA%A9%D9%86%DB%8C%D8%AF%0D%0A%D8%A8%D8%B9%D8%AF+%D8%A7%D8%B2+%D8%A7%D9%88%D9%86+%D8%A8%D8%A7+%D8%AA%D9%88%D8%AC%D9%87+%D8%A8%D9%87+%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D9%85%D9%88%D8%B1%D8%AF+%D9%86%D8%B8%D8%B1%DB%8C+%DA%A9%D9%87+%D8%AF%D8%A7%D8%B1%DB%8C%D8%AF+%D9%81%D9%82%D8%B7+%DA%A9%D9%84%DB%8C%D8%AF%D8%B4+%D8%B1%D9%88+%D9%84%D9%85%D8%B3+%DA%A9%D9%86%DB%8C%D8%AF%0D%0A%E2%9D%A4%EF%B8%8F%D8%A8%D8%A7%D8%AA%D8%B4%DA%A9%D8%B1%E2%9D%A4%EF%B8%8F%0D%0A%28%D9%85%D9%86+%DB%8C%DA%A9+%D9%BE%DB%8C%D8%A7%D9%85+%D8%AE%D8%A7%D9%85%D9%88%D8%B4+%D9%87%D8%B3%D8%AA%D9%85%29', 10072, 0),
(26, '%F0%9F%92%AD%D8%B4%D9%85%D8%A7%D8%B1%D9%87+%D9%87%D8%A7%DB%8C+%D8%AC%D8%AF%DB%8C%D8%AF+%D8%A8%D9%87+%D8%B1%D8%A8%D8%A7%D8%AA+%D8%A7%D8%B6%D8%A7%D9%81%D9%87+%D8%B4%D8%AF%F0%9F%92%AD', 10384, 0),
(27, '200876', 10671, 0),
(28, '205793', 10814, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `img` text NOT NULL,
  `dt` text NOT NULL,
  `acc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `link`, `img`, `dt`, `acc`) VALUES
(10, 'http://localhost/lifil/img.php?user=reza-m&name=2714467we.jpg', 'http://localhost/lifil/img.php?user=reza-m&name=2714467we.jpg', '1', 1),
(11, 'http://localhost/lifil/img.php?user=reza-m&name=2714467we.jpg', 'http://localhost/lifil/img.php?user=reza-m&name=2714467we.jpg', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tkhalof`
--

CREATE TABLE `tkhalof` (
  `id` bigint(20) NOT NULL,
  `matn` text NOT NULL,
  `id2` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `ok` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` bigint(20) NOT NULL,
  `sender` bigint(20) NOT NULL,
  `filename` text NOT NULL,
  `lenght` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `realname` text NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `sender`, `filename`, `lenght`, `type`, `time`, `realname`, `token`) VALUES
(1, 1, '24933637we.png', '150711', 'png', '1503175635', '37587-O1APW5.png', 'fjsj607oq6je'),
(2, 1, '59772480s.jpg', '51068', 'jpg', '1503226148', 'r.jpg', 'f88ye9t8ergv'),
(3, 1, '74542322we.zip', '501', 'zip', '1503329558', '404.zip', 'aeff3bxwoz97'),
(5, 1, '73063917we.png', '22830', 'png', '1503411056', 'PHP-style-006.png', 'd5uzwq852mz3'),
(6, 1, '10226319l.png', '5548', 'png', '1503726933', 'c-sharp-tutors-online.png', 'o362jnezx9fl'),
(7, 1, '81854986we.zip', '61765', 'zip', '1503753470', 'csharp.zip', 'u4wbg1ac4w82'),
(8, 1, '30438967we.jpg', '23797', 'jpg', '1503753635', '513092_558d_2.jpg', '8v929qnxj6ig'),
(9, 1, '4831808we.png', '135550', 'png', '1503753645', 'AttachFileHandler.png', 'vewk1fulilf4'),
(10, 1, '45530962we.zip', '444355', 'zip', '1504180473', 'cs.zip', 'efl0ltoreu35'),
(11, 1, '23345743l.png', '40393', 'png', '1504181038', '1.png', '2nf3n5t1mg59'),
(12, 1, '42685896l.png', '40302', 'png', '1504181191', '1.png', 'in3q8chj027w'),
(13, 3, '73056693we.jpg', '105699', 'jpg', '1504690411', 'About us.jpg', 'n0wo337flfmq'),
(14, 3, '5932761s.jpg', '388226', 'jpg', '1504690750', '2.jpg', 'q4mf9z9aznit'),
(15, 1, '2714467we.jpg', '324736', 'jpg', '1505764795', 'Tarahi.jpg', 'nka3059spakn'),
(16, 3, '16582750s.jpg', '149070', 'jpg', '1505793369', 'photo_2016-04-12_08-37-44.jpg', 'g9pwq8pab3af'),
(17, 1, '94408872we.zip', '1318', 'zip', '1506431694', 'ende.zip', '9f836bduzgal'),
(18, 1, '39180143l.png', '45994', 'png', '1506431734', 'php.png', 'm68sik05giby'),
(19, 1, '65819576s.jpg', '46776', 'jpg', '1508176791', '69648590-header-wallpapers.jpg', 'zmobpy6msw41'),
(20, 5, '21134619s.jpg', '109048', 'jpg', '1508270103', 'user_photo.jpg', 'i37qhjidz5wd'),
(21, 5, '67665825l.jpg', '30234', 'jpg', '1508271724', 'photo_Û²Û°Û±Û·-Û±Û°-Û°Ûµ_Û°Û²-Û´Û´-Û±Û¸.jpg', 'j81va8wihlb9'),
(22, 1, '55396324l.png', '7477', 'png', '1510163842', 'b.png', 'pm1sptabakqb'),
(23, 1, '54512441l.png', '142299', 'png', '1590612451', 'd.png', 'o5t1777bdr17'),
(24, 1, '33061013l.png', '40302', 'png', '1590612768', '42685896l.png', 'usf6sr5au92d'),
(25, 1, '21131145l.png', '40302', 'png', '1590612807', '42685896l.png', 'cq4gp3pp747u'),
(26, 1, '39574980l.png', '40302', 'png', '1590612860', '42685896l.png', '70mxf9tu2o98'),
(27, 1, '39574980l.png', '40302', 'png', '1590612860', '42685896l.png', 'uuhfzlywutlo'),
(28, 1, '10545173l.png', '40302', 'png', '1590840486', '42685896l.png', '7oug3szi2gyj'),
(29, 1, '10545173l.png', '40302', 'png', '1590840486', '42685896l.png', 'halfq4w6obbo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tarikhsabtenam` varchar(255) NOT NULL,
  `timeonline` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tell` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `activecode` varchar(255) NOT NULL,
  `activeblog` int(11) NOT NULL DEFAULT '1',
  `nazarat` int(11) NOT NULL,
  `mojodi` text NOT NULL,
  `lvl` varchar(255) NOT NULL,
  `point` varchar(255) NOT NULL,
  `gold` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `newcom` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `baned` int(11) NOT NULL,
  `dev` int(11) NOT NULL,
  `api` text NOT NULL,
  `cartmeli` varchar(255) NOT NULL,
  `acc2` int(11) NOT NULL,
  `phcode` bigint(20) NOT NULL,
  `phacc` int(11) NOT NULL,
  `timesms` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `mb` varchar(255) NOT NULL,
  `emailacc` int(11) NOT NULL,
  `uuid` text NOT NULL,
  `timetorun` varchar(255) NOT NULL,
  `chatid` varchar(255) NOT NULL,
  `auh` varchar(255) NOT NULL,
  `tauh` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `password`, `tarikhsabtenam`, `timeonline`, `email`, `tell`, `active`, `activecode`, `activeblog`, `nazarat`, `mojodi`, `lvl`, `point`, `gold`, `avatar`, `newcom`, `token`, `baned`, `dev`, `api`, `cartmeli`, `acc2`, `phcode`, `phacc`, `timesms`, `text`, `mb`, `emailacc`, `uuid`, `timetorun`, `chatid`, `auh`, `tauh`) VALUES
(1, 'Ø±Ø¶Ø§ Ù…Ù„Ú© Ù¾ÙˆØ±', 'admin', '4dd61aa8b4f0463e4799532a92f259b0', '1503174125', '1631167396', 'travianrh@yahoo.com', '9396471804', 1, 'cx1d7uzy1wvp', 1, 0, '900', '2', '47', '', '59772480s.jpg', '0', '', 0, 1, '', '69622195s.jpg', 1, 51351, 1, '1503261625', '', '1787232', 1, 'B0EE0C3B-EF1A-11E5-9614-507B9DD9D53A', '1504686510', '126149424', 'b3sjal', '0');

-- --------------------------------------------------------

--
-- Table structure for table `web_menu`
--

CREATE TABLE `web_menu` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_menu`
--

INSERT INTO `web_menu` (`id`, `title`, `parent`) VALUES
(1, 'Ø¨Ø§Ø²ÛŒ', NULL),
(2, 'Ù†Ø±Ù… Ø§ÙØ²Ø§Ø±', NULL),
(3, 'Ø¢Ù…ÙˆØ²Ø´', NULL),
(4, 'Ø³ÙˆØ±Ø³', NULL),
(5, 'Ù†Ø±Ù… Ø§ÙØ²Ø§Ø± Ø¢Ù†ØªÛŒ ÙˆÛŒØ±ÙˆØ³', 2),
(6, 'Ù¾Ø±ÙˆÚ˜Ù‡ Ø¯Ø§Ù†Ø´Ø¬ÙˆÛŒÛŒ', NULL),
(7, 'Ø¨ÙˆØ±Ø³', 3),
(8, '2 Ø¨Ø¹Ø¯ÛŒ', 6),
(10, 'Ø¬Ø¯ÛŒØ¯', NULL),
(11, 'Ù…Ù†Ùˆ', NULL),
(12, 'Ø¬Ø¯ÛŒØ¯', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amozsh`
--
ALTER TABLE `amozsh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloga`
--
ALTER TABLE `bloga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clide`
--
ALTER TABLE `clide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `darkhast`
--
ALTER TABLE `darkhast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dl`
--
ALTER TABLE `dl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dled`
--
ALTER TABLE `dled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dlfile`
--
ALTER TABLE `dlfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mnue`
--
ALTER TABLE `mnue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mnuea`
--
ALTER TABLE `mnuea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `op`
--
ALTER TABLE `op`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posneg`
--
ALTER TABLE `posneg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repass`
--
ALTER TABLE `repass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sender`
--
ALTER TABLE `sender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkhalof`
--
ALTER TABLE `tkhalof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_menu`
--
ALTER TABLE `web_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amozsh`
--
ALTER TABLE `amozsh`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bloga`
--
ALTER TABLE `bloga`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clide`
--
ALTER TABLE `clide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `darkhast`
--
ALTER TABLE `darkhast`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dl`
--
ALTER TABLE `dl`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dled`
--
ALTER TABLE `dled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dlfile`
--
ALTER TABLE `dlfile`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mnue`
--
ALTER TABLE `mnue`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mnuea`
--
ALTER TABLE `mnuea`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `op`
--
ALTER TABLE `op`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posneg`
--
ALTER TABLE `posneg`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `repass`
--
ALTER TABLE `repass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sender`
--
ALTER TABLE `sender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tkhalof`
--
ALTER TABLE `tkhalof`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `web_menu`
--
ALTER TABLE `web_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
