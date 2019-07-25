-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2019 at 09:01 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboardDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Alerts`
--

CREATE TABLE `Alerts` (
  `alert_id` int(11) NOT NULL,
  `alert` text NOT NULL,
  `alert_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Alerts`
--

INSERT INTO `Alerts` (`alert_id`, `alert`, `alert_type_id`) VALUES
(1, 'Alert 1', 1),
(2, 'Alert 2', 2),
(3, 'Alert 3', 6),
(4, 'Alert 4', 3),
(5, 'Alert 5', 2),
(6, 'Alert 6', 4),
(7, 'Alert 7', 7),
(8, 'Alert 8', 5),
(9, 'Alert 9', 1),
(10, 'Alert 10', 3),
(11, 'Alert 11', 6),
(12, 'Alert 12', 2),
(13, 'Alert 13', 1),
(14, 'Alert 14', 7),
(15, 'Alert 15', 1),
(16, 'Alert 16', 7),
(17, 'Alert 17', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Alert_Type`
--

CREATE TABLE `Alert_Type` (
  `alert_type_id` int(11) NOT NULL,
  `alert_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Alert_Type`
--

INSERT INTO `Alert_Type` (`alert_type_id`, `alert_type`) VALUES
(1, 'Alert Type 1'),
(2, 'Alert Type 2'),
(3, 'Alert Type 3'),
(4, 'Alert Type 4'),
(5, 'Alert Type 5'),
(6, 'Alert Type 6'),
(7, 'Alert Type 7');

-- --------------------------------------------------------

--
-- Table structure for table `Articles`
--

CREATE TABLE `Articles` (
  `article_id` int(11) NOT NULL,
  `article_name` text NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Articles`
--

INSERT INTO `Articles` (`article_id`, `article_name`, `topic_id`) VALUES
(1, 'Article 1', 1),
(2, 'Article 2', 5),
(3, 'Article 3', 2),
(4, 'Article 4', 6),
(5, 'Article 5', 1),
(6, 'Article 6', 7),
(7, 'Article 7', 4),
(8, 'Article 8', 2),
(9, 'Article 9', 8),
(10, 'Article 10', 3),
(11, 'Article 11', 9),
(12, 'Article 12', 10),
(13, 'Article 13', 7),
(14, 'Article 14', 4),
(15, 'Article 15', 6),
(16, 'Article 16', 4),
(17, 'Article 17', 3),
(18, 'Article 18', 8),
(19, 'Article 19', 10),
(20, 'Article 20', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Article_Shares`
--

CREATE TABLE `Article_Shares` (
  `user_id` int(11) NOT NULL,
  `article_share_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Article_Shares`
--

INSERT INTO `Article_Shares` (`user_id`, `article_share_id`) VALUES
(2, 4),
(1, 5),
(3, 9),
(4, 3),
(5, 8),
(6, 6),
(7, 15),
(8, 20),
(9, 19),
(10, 7),
(11, 1),
(12, 2),
(10, 4),
(5, 11),
(2, 9),
(7, 11),
(1, 7),
(8, 17),
(9, 19),
(12, 9),
(7, 12),
(5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `Article_Views`
--

CREATE TABLE `Article_Views` (
  `user_id` int(11) NOT NULL,
  `article_view_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Article_Views`
--

INSERT INTO `Article_Views` (`user_id`, `article_view_id`) VALUES
(1, 4),
(2, 5),
(3, 8),
(4, 11),
(5, 13),
(6, 15),
(7, 13),
(8, 12),
(9, 11),
(10, 10),
(11, 17),
(12, 9),
(4, 8),
(7, 4),
(7, 19),
(5, 20),
(3, 19),
(4, 17),
(9, 15),
(13, 8),
(17, 13),
(14, 13),
(7, 12),
(6, 18);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `last_name` text NOT NULL,
  `password` text NOT NULL,
  `first_name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `last_name`, `password`, `first_name`, `email`) VALUES
(6, 'c', 'c', 'c', 'c'),
(10, 'Yadav', 'Himanshu1!', 'Himanshu', 'h.skb.oo7@gmail.com'),
(11, 'Yad', 'Cool', 'Himanshu', 'himanshu.oo7@gmail.com'),
(1, 'Yadav', 'Cool', 'Himanshu', 'himanshu.skb.oo7@gmail.com'),
(7, 'dwf', 'dwdw', 'wf', 'himanshu.skb.oo@gmail.com'),
(8, 'nkdw', 'Dwed', 'jkwfn', 'himanshu.skbo7@gmail.com'),
(2, 'Yadav', 'cenjef', 'Himanshu', 'himanshu@gmail.com'),
(4, 'dnwj', 'dwfwf', 'Himanshu', 'himanshu@yail.com'),
(5, 'ffw', '', 'dfw', 'himanshu@yl.com'),
(3, 'dnwj', 'Hi', 'Himanshu', 'himanshu@ymail.com'),
(9, 'Yada', 'dw', 'Himanshu', 'hu');

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `id` int(11) NOT NULL,
  `menu_items` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`id`, `menu_items`) VALUES
(8, 'Admins'),
(3, 'Clinician Corner'),
(1, 'Dashboard'),
(12, 'Log Out'),
(11, 'My Profile'),
(2, 'On-Demand Content'),
(10, 'Patient Advocacy'),
(6, 'Products'),
(9, 'Resources'),
(5, 'Skillsets'),
(7, 'Treatment Tracks'),
(4, 'Users');

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `message_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_by_id` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Messages`
--

INSERT INTO `Messages` (`message_id`, `message`, `created_by_id`, `date_created`) VALUES
(1, 'Message 1', 1, '2019-07-14'),
(2, 'Message 2', 5, '2019-07-14'),
(3, 'Message 3', 1, '2019-07-15'),
(4, 'Message 4', 7, '2019-07-14'),
(5, 'Message 5', 8, '2019-07-17'),
(6, 'Message 6', 9, '2019-07-18'),
(7, 'Message 7', 12, '2019-07-14'),
(8, 'Message 8', 10, '2019-07-17'),
(9, 'Message 9', 7, '2019-07-16'),
(10, 'Message 10', 2, '2019-07-13'),
(11, 'Message 11', 5, '2019-07-19'),
(12, 'Message 12', 4, '2019-07-12'),
(13, 'Message 13', 3, '2019-07-13'),
(14, 'Message 14', 8, '2019-07-19'),
(15, 'Message 15', 7, '2019-07-20'),
(16, 'Message 16', 7, '2019-07-21'),
(17, 'Message 17', 5, '2019-07-22'),
(18, 'Message 18', 7, '2019-07-19'),
(19, 'Message 19', 8, '2019-07-14'),
(20, 'Message 20', 6, '2019-07-15'),
(21, 'Message 21', 1, '2019-07-16'),
(22, 'Message 22', 3, '2019-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE `Roles` (
  `role_id` int(11) NOT NULL,
  `role_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Roles`
--

INSERT INTO `Roles` (`role_id`, `role_name`) VALUES
(1, 'Role 1'),
(2, 'Role 2'),
(3, 'Role 3');

-- --------------------------------------------------------

--
-- Table structure for table `Skills`
--

CREATE TABLE `Skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Skills`
--

INSERT INTO `Skills` (`skill_id`, `skill_name`) VALUES
(1, 'Skill 1'),
(2, 'Skill 2'),
(3, 'Skill 3'),
(4, 'Skill 4'),
(5, 'Skill 5');

-- --------------------------------------------------------

--
-- Table structure for table `Topics`
--

CREATE TABLE `Topics` (
  `topic_id` int(11) NOT NULL,
  `topic_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Topics`
--

INSERT INTO `Topics` (`topic_id`, `topic_name`) VALUES
(1, 'Topic 1'),
(2, 'Topic 2'),
(3, 'Topic 3'),
(4, 'Topic 4'),
(5, 'Topic 5'),
(6, 'Topic 6'),
(7, 'Topic 7'),
(8, 'Topic 8'),
(9, 'Topic 9'),
(10, 'Topic 10');

-- --------------------------------------------------------

--
-- Table structure for table `Treatment_record`
--

CREATE TABLE `Treatment_record` (
  `user_id` int(11) NOT NULL,
  `treatment_track_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Treatment_record`
--

INSERT INTO `Treatment_record` (`user_id`, `treatment_track_id`) VALUES
(3, 1),
(4, 7),
(2, 7),
(2, 5),
(2, 4),
(5, 10),
(7, 4),
(8, 3),
(1, 2),
(1, 6),
(1, 9),
(1, 3),
(1, 5),
(1, 1),
(1, 4),
(6, 4),
(6, 8),
(6, 9),
(9, 1),
(9, 5),
(8, 8),
(10, 6),
(10, 7),
(6, 5),
(10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Treatment_tracks`
--

CREATE TABLE `Treatment_tracks` (
  `treatment_track_id` int(11) NOT NULL,
  `treatment_track_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Treatment_tracks`
--

INSERT INTO `Treatment_tracks` (`treatment_track_id`, `treatment_track_name`) VALUES
(1, 'Treatment Track 1'),
(2, 'Treatment Track 2'),
(3, 'Treatment Track 3'),
(4, 'Treatment Track 4'),
(5, 'Treatment Track 5'),
(6, 'Treatment Track 6'),
(7, 'Treatment Track 7'),
(8, 'Treatment Track 8'),
(9, 'Treatment Track 9'),
(10, 'Treatment Track 10');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `date_added` date NOT NULL,
  `added_by` text NOT NULL,
  `status_bit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role_id`, `date_added`, `added_by`, `status_bit`) VALUES
(1, 'Himanshu', 'Yadav1', 'himanshu1@gmail.com', 'himanshu1', 1, '2019-08-07', '1', 1),
(2, 'Himanshu', 'Yadav2', 'himanshu2@gmail.com', 'himanshu2', 1, '2019-08-07', '1', 0),
(3, 'Himanshu', 'Yadav3', 'himanshu3@gmail.com', 'himanshu3', 2, '2019-08-07', '1', 1),
(4, 'Himanshu', 'Yadav4', 'himanshu4@gmail.com', 'himanshu4', 2, '2019-07-07', '1', 0),
(5, 'Himanshu', 'Yadav5', 'himanshu5@gmail.com', 'himanshu5', 1, '2019-08-07', '2', 1),
(6, 'Himanshu', 'Yadav6', 'himanshu6@gmail.com', 'himanshu6', 1, '2019-08-08', '3', 1),
(7, 'Himanshu', 'Yadav7', 'himanshu7@gmail.com', 'himanshu7', 1, '2019-09-07', '4', 0),
(8, 'Himanshu', 'Yadav8', 'himanshu8@gmail.com', 'himanshu8', 1, '2018-08-07', '2', 1),
(9, 'Himanshu', 'Yadav9', 'himanshu9@gmail.com', 'himanshu9', 1, '2019-08-15', '7', 1),
(10, 'Himanshu', 'Yadav10', 'himanshu10@gmail.com', 'himanshu10', 1, '2019-11-07', '11', 0),
(11, 'Himanshu', 'Yadav11', 'himanshu11@gmail.com', 'himanshu11', 3, '2019-08-07', '1', 1),
(12, 'Himanshu', 'Yadav12', 'himanshu12@gmail.com', 'himanshu12', 2, '2020-08-07', '2', 0),
(13, 'Himanshu', 'Yadav15', 'himanshu15@gmail.com', 'himanshu15', 1, '2019-07-22', '1', 1),
(14, 'Himanshu', 'Yadav16', 'himanshu16@gmail.com', 'himanshu16', 1, '2019-07-22', '0', 1),
(15, 'Himanshu', 'Yadav19', 'himanshu19@gmail.com', 'himanshu19', 1, '2019-07-22', '1', 1),
(16, 'Himanshu', 'Yadav20', 'himanshu20@gmail.com', 'himanshu20', 2, '2019-07-22', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `UsersVsSkills`
--

CREATE TABLE `UsersVsSkills` (
  `user_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UsersVsSkills`
--

INSERT INTO `UsersVsSkills` (`user_id`, `skill_id`) VALUES
(2, 2),
(4, 5),
(5, 2),
(6, 3),
(7, 4),
(8, 4),
(9, 2),
(10, 1),
(11, 3),
(1, 1),
(3, 2),
(5, 3),
(7, 2),
(3, 1),
(12, 3),
(13, 4),
(14, 2),
(15, 5),
(16, 3),
(13, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Alerts`
--
ALTER TABLE `Alerts`
  ADD PRIMARY KEY (`alert_id`);

--
-- Indexes for table `Alert_Type`
--
ALTER TABLE `Alert_Type`
  ADD PRIMARY KEY (`alert_type_id`);

--
-- Indexes for table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`email`(30)),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`menu_items`(30)),
  ADD KEY `id` (`id`);

--
-- Indexes for table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `Skills`
--
ALTER TABLE `Skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `Topics`
--
ALTER TABLE `Topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `Treatment_tracks`
--
ALTER TABLE `Treatment_tracks`
  ADD PRIMARY KEY (`treatment_track_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Alerts`
--
ALTER TABLE `Alerts`
  MODIFY `alert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `Alert_Type`
--
ALTER TABLE `Alert_Type`
  MODIFY `alert_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Messages`
--
ALTER TABLE `Messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `Roles`
--
ALTER TABLE `Roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Skills`
--
ALTER TABLE `Skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Topics`
--
ALTER TABLE `Topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Treatment_tracks`
--
ALTER TABLE `Treatment_tracks`
  MODIFY `treatment_track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
