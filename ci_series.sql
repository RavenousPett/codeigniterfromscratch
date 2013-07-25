-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2013 at 08:25 PM
-- Server version: 5.5.20
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ci_series`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `contents`) VALUES
(2, 'My Freshly Updated Title', 'My brand new content'),
(4, 'Title 4', 'Lorem ipsum dolor sit amet, etiam nec nullam consectetuer sed, lacus pellentesque dolor elit eros. Wisi ut aut lorem velit, sed commodo vel scelerisque lectus. Suspendisse accumsan libero enim praesent, neque massa placerat turpis elit, viverra sed per ipsum, a lectus esse ut. Ac leo magna at, ipsum urna sit pede praesent, aliquam vel nunc sed. Ligula elit enim molestie, amet maecenas sed nulla, sed ligula vivamus neque, nullam vulputate scelerisque donec. Nibh nulla eros in tempus, mollis arcu massa ultrices vitae.'),
(5, 'New Title', 'Newly added content');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email_address` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `username`, `password`, `email_address`) VALUES
(3, 'steven', 'hansel', 'steve', '765ae843192a0f1b071f4446ee4c5fa3', 'steve@soul.com'),
(4, 'Richard', 'Pett', 'rich', 'f8c16be0646ea6930e6a2161f4fe8481', 'rich_pett@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `title`) VALUES
(1, 'Some Title'),
(2, 'Another Title');
