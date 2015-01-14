-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2015 at 09:01 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
`id_upload` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `link` text NOT NULL,
  `preview` text NOT NULL,
  `preview2` text NOT NULL,
  `preview3` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id_upload`, `title`, `description`, `created_by`, `category`, `link`, `preview`, `preview2`, `preview3`) VALUES
(31, 'Symbol', 'Cool symbol', 'hanherb', 'other', 'symbol-symbol', 'images/uploads/symbol1.png', 'images/uploads/symbol2.png', 'images/uploads/symbol3.png'),
(40, 'symbol2', 'symbol lagi', 'hanherb', 'mobile', 'symbol-symbol', 'images/uploads/symbol4.jpg', 'images/uploads/symbol5.png', 'images/2-c.png'),
(41, 'Marmut', 'marmut cantik', 'hanherb', 'programming', 'marmut-marmutan', 'images/uploads/ex.jpg', 'images/2-b.png', 'images/2-c.png'),
(42, 'anak', 'anak-anak', 'hanherb', 'website', 'anak', 'images/uploads/contoh.gif', 'images/2-b.png', 'images/2-c.png'),
(43, 'Empty', 'Empty', 'hanherb', 'programming', 'Empty', 'images/2.png', 'images/2-b.png', 'images/2-c.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_number` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_number`, `nim`, `username`, `email`, `password`, `fullname`, `year`) VALUES
(1, '113103012', 'hanherb', 'dyo.pyon@gmail.com', 'b51aa9e176fb9b3fa34ea2b46449212e', 'Hanindyo Herbowo', 2013),
(4, '111333', 'nunu', 'nunu@yahoo.com', 'c8448be50b73f4aef91a851566763d2e', 'nunu nini nono', 2012),
(6, '1', 'admin', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 'Admin', 2013);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
 ADD PRIMARY KEY (`id_upload`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_number`), ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_number` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
