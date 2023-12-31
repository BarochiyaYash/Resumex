-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 10:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(18) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `about` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`, `phone`, `about`) VALUES
(2, 'YASHKUMAR BAROCHIYA', 'ybarochiya@rku.ac.in', '123456789', '9000000007', 'I am YASHKUMAR BAROCHIYA 5BCA student.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `u_name`, `email`, `gender`, `mobile`, `password`) VALUES
(1, '', '', '', '', '', ''),
(2, '', '', '', '', '', ''),
(4, 'Yash Barochiya', 'yash', 'ybarochiya@rku.ac.in', 'Male', '8488532647', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `resume_data`
--

CREATE TABLE `resume_data` (
  `id` int(11) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `expert` varchar(30) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL,
  `lA` varchar(12) DEFAULT NULL,
  `lB` varchar(12) DEFAULT NULL,
  `lC` varchar(12) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `eduA` varchar(50) DEFAULT NULL,
  `yearA` varchar(12) DEFAULT NULL,
  `eduB` varchar(50) DEFAULT NULL,
  `yearB` varchar(12) DEFAULT NULL,
  `expeyearA` varchar(12) DEFAULT NULL,
  `expetitleA` varchar(50) DEFAULT NULL,
  `expeA` varchar(500) DEFAULT NULL,
  `expeyearB` varchar(12) DEFAULT NULL,
  `expetitleB` varchar(50) DEFAULT NULL,
  `expeB` varchar(500) DEFAULT NULL,
  `skillA` varchar(25) DEFAULT NULL,
  `skillB` varchar(25) DEFAULT NULL,
  `skillC` varchar(25) DEFAULT NULL,
  `skillD` varchar(25) DEFAULT NULL,
  `skillE` varchar(25) DEFAULT NULL,
  `user_id` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_data`
--

INSERT INTO `resume_data` (`id`, `image`, `full_name`, `expert`, `about`, `lA`, `lB`, `lC`, `address`, `phone`, `email`, `eduA`, `yearA`, `eduB`, `yearB`, `expeyearA`, `expetitleA`, `expeA`, `expeyearB`, `expetitleB`, `expeB`, `skillA`, `skillB`, `skillC`, `skillD`, `skillE`, `user_id`) VALUES
(2, 'uploads/Yashkumar.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yash');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `temp_id` varchar(12) NOT NULL,
  `temp_name` varchar(30) NOT NULL,
  `about_temp` varchar(220) NOT NULL,
  `example_image` varchar(80) NOT NULL,
  `kit_image` varchar(80) NOT NULL,
  `logic_file` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `temp_id`, `temp_name`, `about_temp`, `example_image`, `kit_image`, `logic_file`) VALUES
(1, 'AV85964', 'WORK', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.', '', 'uploads/1.1.png', 'uploads/1.1.php'),
(2, 'KD12563', 'resume', 'The placeholder text used in design when creating content. It helps designers plan out where the content will sit, without needing to wait for the content to be written and approved. ', '', 'uploads/2.1.png', 'uploads/2.1.php'),
(3, 'FG74586', 'Profile', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', '', 'uploads/3.png', 'uploads/3.php'),
(4, 'LR45253', 'MAVIC', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. ', '', 'uploads/4.1.png', 'uploads/4.1.php'),
(5, 'BN74586', 'JOB_DETAILS', 'Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.', '', 'uploads/3.2.png', 'uploads/3.2.php'),
(6, 'NH15863', 'Project', 'The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '', 'uploads/1.2.png', 'uploads/1.2.php'),
(7, 'YB32105', 'Corel', 'Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.', '', 'uploads/3.5.png', 'uploads/3.5.php'),
(8, 'OD12956', 'MavicA', 'Lorem .....', '', 'uploads/4.4.png', 'uploads/4.4.php');

-- --------------------------------------------------------

--
-- Table structure for table `template_index`
--

CREATE TABLE `template_index` (
  `id` int(11) NOT NULL,
  `temp_id` varchar(12) NOT NULL,
  `temp_name` varchar(30) NOT NULL,
  `about_temp` varchar(220) NOT NULL,
  `example_image` varchar(80) NOT NULL,
  `kit_image` varchar(80) NOT NULL,
  `logic_file` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template_index`
--

INSERT INTO `template_index` (`id`, `temp_id`, `temp_name`, `about_temp`, `example_image`, `kit_image`, `logic_file`) VALUES
(1, 'AV85964', 'WORK', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.', '', 'uploads/1.1.png', 'uploads/1.1.php'),
(2, 'KD12563', 'resume', 'The placeholder text used in design when creating content. It helps designers plan out where the content will sit, without needing to wait for the content to be written and approved. ', '', 'uploads/2.1.png', 'uploads/2.1.php'),
(3, 'FG74586', 'Profile', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', '', 'uploads/3.png', 'uploads/3.php'),
(4, 'LR45253', 'MAVIC', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. ', '', 'uploads/4.1.png', 'uploads/4.1.php'),
(5, 'BN74586', 'JOB_DETAILS', 'Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.', '', 'uploads/3.2.png', 'uploads/3.2.php'),
(6, 'NH15863', 'Project', 'The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '', 'uploads/1.2.png', 'uploads/1.2.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_data`
--
ALTER TABLE `resume_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_index`
--
ALTER TABLE `template_index`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `resume_data`
--
ALTER TABLE `resume_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `template_index`
--
ALTER TABLE `template_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
