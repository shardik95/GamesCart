-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2015 at 04:00 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gamescart`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `game_id` int(255) NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `release_date` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `game_name`, `release_date`, `price`, `type`, `stock`, `image`, `video`, `platform`) VALUES
(1, 'Grand Theft Auto V', '18th November,2014', 'Rs 3499/-', 'Released', 30, 'gta5.jpg', 'https://www.youtube.com/embed/UWzV0AFXukI', 'PS4'),
(2, 'Witcher 3 : The Wild Hunt', '19th May,2015', 'Rs 3499/-', 'Released', 25, 'witcher31.jpg', 'https://www.youtube.com/embed/b1n_1RSS19w', 'PS4'),
(3, 'FIFA 15', '25th September,2014', 'Rs 3300/-', 'Released', 15, 'fifa15.jpg', 'https://www.youtube.com/embed/bwz98athxQ8', 'PS4'),
(4, 'Until Dawn', '26th August,2016', 'Rs 3999/-', 'preorder', 0, 'ud.jpg', 'https://www.youtube.com/embed/4bgIZONHPXA', 'PS4'),
(5, 'The Last of Us :Remastered', '7th August,2014', 'RS 2999/-', 'Released', 12, 'lou.jpg', 'https://www.youtube.com/embed/AaOWRvmtEFQ', 'PS4'),
(6, 'Watch Dogs', '25th May,2014', 'Rs 2999/-', 'Released', 9, 'watchdogs.jpg', 'https://www.youtube.com/embed/-368yVrRTqE', 'PS3'),
(7, 'Call of Duty:Advanced Warefare', '4th November,2014', 'Rs 2800/-', 'Released', 18, 'cod.jpg', 'https://www.youtube.com/embed/sFu5qXMuaJU', 'PS3'),
(8, 'Grand Theft Auto 5', '17th September,2013', 'Rs 2999/-', 'Released', 14, 'gta51.jpg', 'https://www.youtube.com/embed/QkkoHAzjnUs', 'PS3'),
(9, 'Tomb Raider', '5th March,2016', 'Rs 3999/-', 'preorder', 0, 'tr.jpg', 'https://www.youtube.com/embed/YvGiCx29DZs', 'PS3'),
(10, 'Hitman Absolution', 'NA', 'RS 3499/-', 'preorder', 0, 'hitman.jpg', 'https://www.youtube.com/embed/Wu1Aii7scBo', 'PS3'),
(11, 'Batman Arkham Knight', '21st June,2015', 'Rs 3499/-', 'Released', 20, 'bak.jpg', 'https://www.youtube.com/embed/CINA288fZUs', 'Xbox One'),
(12, 'Assassin''s Creed : Unity', '14th November,2014', 'Rs 3300/-', 'Released', 0, 'acu1.png', 'https://www.youtube.com/embed/xzCEdSKMkdU', 'Xbox one'),
(13, 'Mad Max', '2nd September,2016', 'Rs 3499/-', 'preorder', 0, 'madmax2.jpg', 'https://www.youtube.com/embed/P6Stp5Akb-0', 'Xbox one'),
(14, 'Halo V :Guardians', 'NA', 'Rs 3999/-', 'Released', 0, 'halo5.jpg', 'https://www.youtube.com/embed/blW40AVWXrE', 'Xbox one'),
(15, 'Forza :Horizon', '2nd March,2014', 'Rs 2399/-', 'Released', 7, 'forza.jpg', 'https://www.youtube.com/embed/_KczoUxPRgs', 'Xbox 360'),
(16, 'Halo V: Guardians', '24th October,2014', 'Rs 2899/-', 'Released', 0, 'halo360.jpg', 'https://www.youtube.com/embed/blW40AVWXrE', 'Xbox 360'),
(17, 'Gears Of War', 'NA', 'Rs 2999/-', 'Released', 8, 'gow360.jpg', 'https://www.youtube.com/embed/n7Te5fcnrUA', 'Xbox 360'),
(18, 'Alan Wake', '15th Febuary,2016', 'Rs 2200/-', 'preorder', 0, 'aw360.jpg', 'https://www.youtube.com/embed/Z6_w54oxXLk', 'Xbox 360'),
(19, 'FIFA 15', '24th September,2014', 'Rs 3499/-', 'Released', 5, 'fifa360.jpg', 'https://www.youtube.com/embed/TnTYVT6lwBc', 'Xbox 360'),
(20, 'Witcher 3 : The Wild Hunt', '19th May,2015', 'Rs 1499/-', 'Released', 17, 'witcherpc.jpg', 'https://www.youtube.com/embed/c0i88t0Kacs', 'PC'),
(21, 'Metal Gear Solid V :Phantom Pain', '1st September,2015', 'Rs 1499/-', 'Released', 14, 'mgspc.jpg', 'https://www.youtube.com/embed/EViHlhuI2SE', 'PC'),
(22, 'Divinity : Original Sin', '13th July,2013', 'Rs 999/-', 'Released', 19, 'divinitypc.jpg', 'https://www.youtube.com/embed/0Vc3OEf_LLE', 'PC'),
(23, 'Call Of Duty : Advanced Warefare', '4th November,2014', 'Rs 1499/-', 'Released', 11, 'codpc.jpg', 'https://www.youtube.com/embed/sFu5qXMuaJU', 'PC'),
(24, 'Dues Ex : Mankind Divided', '16th March,2016', 'Rs 1499/-', 'preorder', 0, 'duespc.jpg', 'https://www.youtube.com/embed/uvSs5b6y-YM', 'PC'),
(25, 'Playstation 4', '24th September,2013', 'Rs 37990/-', 'Released', 16, 'ps42.png', 'https://www.youtube.com/embed/x7QhUL8NUK4', 'Console'),
(26, 'Xbox one', '14th November,2013', 'Rs 44990/-', 'Released', 12, 'xone2.png', 'https://www.youtube.com/embed/LIYeHCFttMc', 'Console'),
(27, 'Playstation 3', '24th September,2009', 'Rs 15990/-', 'Released', 7, 'ps32.png', 'https://www.youtube.com/embed/u-JdJxcdBEc', 'Console'),
(28, 'Xbox 360', '14th August,2009', 'Rs 12990/-', 'Released', 3, 'x3602.jpg', 'https://www.youtube.com/embed/p2qlHoxPioM', 'Console');

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

CREATE TABLE IF NOT EXISTS `pincode` (
  `pcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pincode`
--

INSERT INTO `pincode` (`pcode`) VALUES
('400001'),
('400002'),
('400003'),
('400004'),
('400005'),
('400006'),
('400007'),
('400008'),
('400009'),
('400010'),
('400011'),
('400012'),
('400013'),
('400014'),
('400016'),
('400017'),
('400019'),
('400020'),
('400021'),
('400023'),
('400024'),
('400026'),
('400028'),
('400032'),
('400036\r\n'),
('400037'),
('400038'),
('400039'),
('400041'),
('400042'),
('400049'),
('400050'),
('400051'),
('400052'),
('400058'),
('400059'),
('400060'),
('400062'),
('400063'),
('400064'),
('400065'),
('400066'),
('400067'),
('400068'),
('400069'),
('400070'),
('400071'),
('400074'),
('400075'),
('400076'),
('400078'),
('400080'),
('400081'),
('400082'),
('400084'),
('400085'),
('400086'),
('400087'),
('400090'),
('400091'),
('400092'),
('400093'),
('400094'),
('400095'),
('400097'),
('400101'),
('400102'),
('400103'),
('400104');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(25) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `user_id`, `password`, `dob`, `address1`, `address2`, `city`, `state`, `pincode`, `gender`, `phone`) VALUES
('aditya', 'sharma', 'aps@gmail.com', '123', '1995-06-19', 'thane', 'west', 'mumbai', 'maharashtra', '407070', 'male', '123456789'),
('het', 'nagda', 'het@gm.com', '123', '1995-12-05', 'ghatkopar', 'gelda', 'mumbai', 'maharashtra', '400086', 'male', '78945613'),
('HARDIK', 'shah', 'hrs@gmail.com', 'hrs', 'hrs', 'xvy', 'ydbd', 'mumbai', 'mah', '400086', 'male', '985555'),
('Rajiv', 'shah', 'rajiv@gmail.com', '123', '1994-02-01', 'ghatkopar', 'gelda', 'mumbai', 'maharashtra', '400086', 'male', '98200'),
('geeta', 'sdu', 'ud@gm.com', '123', '1994-02-05', 'hbs', 'bhs', 'mumbai', 'maharashtra', '400086', 'female', '0961914646');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `pincode`
--
ALTER TABLE `pincode`
  ADD PRIMARY KEY (`pcode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
