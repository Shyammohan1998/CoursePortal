-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 04:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myguru`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `gender`, `dob`, `address`, `mobile`, `email`, `password`, `img_name`, `img_path`) VALUES
(1, 'Shyam', 'Mohan', 'Male', '1998-12-14', 'Kizhakkemadom (H) Amayannor P O Kottayam\r\n686019', '+91 7909232372', 'shyammohan141298@gmail.com', '141298', 'Shyam', 'profile-photo/ShyamM_1 (2).jpg'),
(8, 'soumya', 'mohan', 'Female', '2006-01-12', 'Kizhakkemadom (H)\r\nAmayannoor PO\r\nkottayam', '+91 8547540739', 'soumya@gmail.com', 'abc123', 'soumya', 'profile-photo/user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `anouncement`
--

CREATE TABLE `anouncement` (
  `id` int(11) NOT NULL,
  `sendername` varchar(100) NOT NULL,
  `senderemail` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anouncement`
--

INSERT INTO `anouncement` (`id`, `sendername`, `senderemail`, `subject`, `message`, `date`) VALUES
(1, 'soumya mohan', 'soumya@gmail.com', 'Chemistry', 'quiz undee', '04-04-21'),
(2, 'soumya mohan', 'soumya@gmail.com', 'Biology', 'ggggggggggggggggg', '04-04-21'),
(3, 'soumya mohan', 'soumya@gmail.com', 'physics', 'eeeeeeeeeeeeeeeeeeeee', '04-04-21'),
(4, 'soumya mohan', 'soumya@gmail.com', 'maths', 'ggggggggggggggg', '04-04-21'),
(9, 'Admin', 'shyammohan141298@gmail.com', '', 'new course is added', '09-04-21'),
(10, 'Admin', 'shyammohan141298@gmail.com', '', 'NEW COURSE IS ADDED', '09-04-21'),
(12, 'Admin', 'shyammohan141298@gmail.com', '', 'This is a test for automatic email send from my project - MyGuru online course portal.\r\nBy Shyam Mohan ', '09-04-21'),
(15, 'Admin', 'shyammohan141298@gmail.com', '', 'Project completed', '17-04-21'),
(23, 'soumya mohan', 'soumya2@gmail.com', 'Chemistry', 'new message', '17-04-21'),
(29, 'Shyam Mohan', 'shyammohan141298@gmail.com', 'malayalam', 'module1', '26-04-21'),
(35, 'Shyam Mohan', 'shyammohan141298@gmail.com', 'malayalam', 'New meterial is added to your course. please login your dashbord for access.', '26-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `chatid` varchar(1000) NOT NULL,
  `senderid` varchar(100) NOT NULL,
  `recieverid` varchar(100) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `timestamp` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `chatid`, `senderid`, `recieverid`, `coursename`, `msg`, `timestamp`, `status`) VALUES
(1, 'shyammohan141298@gmail.comChemistrysoumya@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Chemistry', 'hello miss how are you', '11:00', 'seen'),
(2, 'shyammohan141298@gmail.comChemistrysoumya@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Chemistry', 'iam fine thank you', '11:30', 'seen'),
(28, 'shyammohan141298@gmail.comChemistrysoumya@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Chemistry', 'i haveone doubt', '11:01', 'seen'),
(30, 'shyammohan141298@gmail.comChemistrysoumya@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Chemistry', 'miss, i have one doubt. how to insert values in list or directory after installation.is it possible', '11:04', 'seen'),
(34, 'shyammohan141298@gmail.comDIPshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'DIP', 'hello sir', '11:15', 'seen'),
(35, 'shyammohan141298@gmail.comDIPshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'DIP', 'how are you', '11:15', 'seen'),
(36, 'soumya@gmail.comChemistrysoumya@gmail.com', 'soumya@gmail.com', 'soumya@gmail.com', 'Chemistry', 'hello', '12:48', 'seen'),
(37, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'helo sir', '03:00', 'seen'),
(38, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'how are you?', '03:01', 'seen'),
(39, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'iam fine', '03:01', 'seen'),
(40, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'thank you', '03:01', 'seen'),
(41, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'please give the pdf of kadaltheeram', '03:02', 'seen'),
(42, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'sorry...tharooolla', '03:03', 'seen'),
(43, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'please sir', '03:05', 'seen'),
(44, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'ok fine...i will give you ', '03:25', 'seen'),
(45, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'thank you so much sir', '03:26', 'seen'),
(46, 'sivapriyakp2199@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'sivapriyakp2199@gmail.com', 'Python', 'hello', '03:31', 'seen'),
(47, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'good morning', '07:37', 'seen'),
(48, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'good morningg', '09:04', 'seen'),
(49, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'eeeeeeeeeeee', '03:42', 'seen'),
(50, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'eeeeeeeeeeeeeeeeeee', '12:41', 'seen'),
(51, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'hello', '01:57', 'seen'),
(52, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'hai..........', '01:57', 'seen'),
(53, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'ok', '02:19', 'seen'),
(54, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'its okk', '02:23', 'seen'),
(55, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'eee', '02:54', 'seen'),
(60, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', '55', '03:08', 'seen'),
(61, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'l', '03:09', 'seen'),
(62, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'kkkkk', '03:10', 'seen'),
(63, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', ',,,,,,,,,,', '03:11', 'seen'),
(64, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'kkkkkk', '03:13', 'seen'),
(65, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'jjj', '03:15', 'seen'),
(76, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'nadakkane', '03:35', 'seen'),
(77, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'ellam sheriyakum', '03:36', 'seen'),
(78, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'nadannal matheee', '03:37', 'seen'),
(79, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'nadakkum', '03:37', 'seen'),
(80, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'sheriyayee ketto', '03:39', 'seen'),
(81, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'ellam okk ayille...', '03:39', 'seen'),
(82, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'yess.ellam ok ayeee', '03:40', 'seen'),
(83, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'njan arra mon', '03:41', 'seen'),
(84, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'pinnalla', '03:41', 'seen'),
(85, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'adipolly', '03:41', 'seen'),
(86, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'thanks for your coorporation', '03:42', 'seen'),
(87, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'its okk ', '03:45', 'seen'),
(88, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'its my pleasure', '03:45', 'seen'),
(89, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'smile....................', '03:46', 'seen'),
(90, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'another check', '03:52', 'seen'),
(91, 'petersonpv99@gmail.comPythonshyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'haloooo', '03:54', 'seen'),
(92, 'petersonpv99@gmail.comPythonshyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'may i  help you', '03:54', 'seen'),
(93, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'ok.fine', '04:08', 'seen'),
(94, 'petersonpv99@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'Python', 'yes..i want', '04:08', 'seen'),
(95, 'petersonpv99@gmail.comPythonshyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'ok. tell me', '04:09', 'seen'),
(96, 'petersonpv99@gmail.comPythonshyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'what can i do for you', '04:09', 'seen'),
(97, 'petersonpv99@gmail.comDIPshyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'shyammohan141298@gmail.com', 'DIP', 'excusme sir', '04:09', 'seen'),
(98, 'petersonpv99@gmail.comDIPshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'DIP', 'yess tell me', '04:14', 'seen'),
(102, 'petersonpv99@gmail.comDIPshyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'shyammohan141298@gmail.com', 'DIP', 'i have one doubt', '04:27', 'seen'),
(103, 'petersonpv99@gmail.comDIPshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'DIP', 'whats your doubt', '04:27', 'seen'),
(104, 'soumya@gmail.comDIPshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'DIP', 'hello', '05:31', 'seen'),
(105, 'soumya@gmail.comDIPshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'DIP', 'ok', '05:42', 'seen'),
(106, 'soumya@gmail.comDIPshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'DIP', 'sir please help me', '05:48', 'seen'),
(107, 'petersonpv99@gmail.comDIPshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'DIP', 'tell me', '05:54', 'seen'),
(108, 'petersonpv99@gmail.comDIPshyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'shyammohan141298@gmail.com', 'DIP', 'i will tell you later', '05:54', 'seen'),
(109, 'petersonpv99@gmail.comDIPshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'DIP', 'ok', '05:55', ''),
(110, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'EEE', '10:50', 'seen'),
(111, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'enthanu', '02:58', 'seen'),
(112, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'paranjolo', '02:58', 'seen'),
(113, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'take it easy', '02:58', 'seen'),
(114, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'ok thank you', '02:59', 'seen'),
(115, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'are you okkk', '02:59', 'seen'),
(116, 'abc@gmail.comPythonshyammohan141298@gmail.com', 'abc@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'hai sir', '01:00', 'seen'),
(117, 'abc@gmail.comPythonshyammohan141298@gmail.com', 'abc@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'how are you', '01:00', 'seen'),
(118, 'abc@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'abc@gmail.com', 'Python', 'iam fine', '01:03', ''),
(119, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'helloo...kando', '07:48', 'seen'),
(120, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'Free, high quality, open source icon library with over 1,300 icons. Include them anyway you like—SVGs, SVG sprite, or web fonts. Use them with or without Bootstrap in any project.', '08:06', 'seen'),
(129, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'what is this ?', '10:54', 'seen'),
(130, 'shyammohan141298@gmail.comphpshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'php', 'hello', '12:26', 'seen'),
(131, 'sivapriyakp2199@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'sivapriyakp2199@gmail.com', 'Python', 'how are you', '12:27', ''),
(132, 'sivapriyakp2199@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'sivapriyakp2199@gmail.com', 'Python', 'are you ok', '12:28', ''),
(133, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'nothing official about it', '01:21', 'seen'),
(134, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'ok fine', '01:21', ''),
(135, 'soumya@gmail.comPythonshyammohan141298@gmail.com', 'shyammohan141298@gmail.com', 'soumya@gmail.com', 'Python', 'anything else', '01:22', ''),
(136, 'soumya@gmail.comDIPshyammohan141298@gmail.com', 'soumya@gmail.com', 'shyammohan141298@gmail.com', 'DIP', 'are you busy now', '01:23', ''),
(137, 'petersonpv99@gmail.comPythonshyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'hello sir', '01:25', ''),
(138, 'petersonpv99@gmail.comPythonshyammohan141298@gmail.com', 'petersonpv99@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'if you dont mind please help me', '01:25', ''),
(139, 'adithyathankachan149@gmail.comPythonshyammohan141298@gmail.com', 'adithyathankachan149@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'hello sir.....', '01:27', ''),
(140, 'adithyathankachan149@gmail.comPythonshyammohan141298@gmail.com', 'adithyathankachan149@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'i have one doubt', '01:28', ''),
(141, 'adithyathankachan149@gmail.comPythonshyammohan141298@gmail.com', 'adithyathankachan149@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'please help me sir', '01:28', ''),
(144, 'anuishappy@gmail.comPythonshyammohan141298@gmail.com', 'anuishappy@gmail.com', 'shyammohan141298@gmail.com', 'Python', 'good afternoon sir', '01:33', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_email` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `tnqz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `discription`, `teacher_name`, `teacher_email`, `status`, `duration`, `tnqz`) VALUES
(1, 'Python', 'Python is a general purpose interpreted, interactive, object-oriented and high level programing language.this tutorial give enough understanding on python programing ', 'Shyam Mohan', 'shyammohan141298@gmail.com', 'Ongoing', '1 month', 2),
(2, 'DIP', 'digital image processing ', 'Shyam Mohan', 'shyammohan141298@gmail.com', 'Completed', '1 month', 2),
(7, 'Biology', '10th Level', 'soumya mohan', 'soumya2@gmail.com', 'Ongoing', '1 month', 0),
(8, 'Chemistry', '10th level', 'soumya mohan', 'soumya2@gmail.com', 'Ongoing', '1 month', 0),
(10, 'physics', 'Physics is the branch of science that deals with the structure of mater and how the fundamental constituents of the universe interact.it studies objects range from the very small using quantum mechanics to the entire universe using general relativity.', 'soumya mohan', 'soumya2@gmail.com', 'Ongoing', '1 month', 0),
(13, 'php', 'programing language', 'Shyam Mohan', 'shyammohan141298@gmail.com', 'Ongoing', '2 week', 2),
(15, 'malayalam', 'malayalam is a native language', 'Shyam Mohan', 'shyammohan141298@gmail.com', 'Approved', '1 month', 0),
(19, 'pattern Recognition', 'Pattern Recognition is the automated recognition of pattern and reqularities in data. it has applications in statistical data analysis,signal processing etc.', 'Angel Thomas', 'angelthomas@gmail.com', 'Ongoing', '4', 0),
(20, 'maths', '10th level', 'soumya mohan', 'soumya2@gmail.com', 'Approved', '1month', 0),
(22, 'English', 'English is a west germanic language first spoken in early medieval england, which has become the leading language of international discourse in the 21st centuary.', 'Shyam Mohan', 'shyammohan141298@gmail.com', 'Requested', '3 month', 0),
(31, 'Computer Networks', 'A computer network is a group of computers that use a set of common communication protocols over digital interconnection\r\n', 'Praseeda R', 'rpraseeda2019@gmail.com', 'Ongoing', '6 months', 0),
(32, 'Cyber Security', 'Cyber security is the practice of defending computers, servers, mobiles, electronic system, networks, and data from malicious attacks', 'Praseeda R', 'rpraseeda2019@gmail.com', 'Ongoing', '4 months', 0),
(33, 'Big data management', 'Big data is the collection of data that is  huge in volume, yet growing exponentially with time. it is a data with so large size and complexity that none of traditional data management tools.', 'Praseeda R', 'rpraseeda2019@gmail.com', 'Ongoing', '5 months', 0),
(36, 'Computational Mathematics', 'Computational mathematics involves mathematical research as well in areas of science where computing plays a central and essential role and emphasizes algorithms, symbolic computations.', 'Shifa Mahein', 'shifamahein@gmail.com', 'Ongoing', '4 months', 0),
(37, 'Software Engineering', 'Software engineering is a branch of computer science which includes the development and bulding of computer systems software and application programs', 'Emil Edison', 'emil350z@gmail.com', 'Ongoing', '6 months', 0),
(38, 'Ethical Hacking', 'Ethical hacking is an autherized practise of bypassing system security to identify potential data branches and threts in a network', 'Emil Edison', 'emil350z@gmail.com', 'Ongoing', '6 months', 0),
(39, 'DBMS', 'Data Base Management System is a s/w for storing and retrieving users data while considering appropriate security measures. it consist of a group of programs which manupulate the data base', 'Binu Sugathan', 'binusugathan@gmail.com', 'Ongoing', '8 months', 0),
(40, 'Data Mining', 'data mining is a process used by companies to turn raw data into useful information. By using s/w to look for patterns in large batches of data,bussiness can learn more about their customers to develop more effective marketing stratergies,increase sales,decrease costs', 'Binu Sugathan', 'binusugathan@gmail.com', 'Ongoing', '10 months', 0),
(41, 'Soft Computing', 'Soft computing is defined as a group of computational techinques based on artificial inteligence and natural selection that provides quick and cost effective solution to very complex problems for which analytical formulations do not exist ', 'Binu Sugathan', 'binusugathan@gmail.com', 'ongoing', '10 months', 0),
(42, 'Research Methodology', 'Research methodology is the specific procedures or techniques used to identify, select,process and analyze information about a topic.', 'Gayathri Rajiv', 'gayathrirajiv@gmail.com', 'Ongoing', '9 months', 0),
(43, 'Operating System', 'OS is an interface between a computer user and computer hardware.an operating system is a s/w which performs all the basic task like file/memory/process management and etc.', 'Sindhu R', 'rsindhu@gmail.com', 'Ongoing', '5 months', 0),
(44, 'Data Structure', 'data structure is a way to store and organize data so that it can be used efficiently. our data structure tutorial includes all topics of data structure such as array,stack,queue,pointer,structure,linked list,graph,searching and sorting programs etc', 'Sindhu R', 'rsindhu@gmail.com', 'Ongoing', '3 months', 0),
(45, 'Java', 'java is a powerful general-purpose programing languge.it is used to develop deskop and mobile application,big data processing embeded system and so on', 'Krishnaveni M', 'venikrishnaveni@gmail.com', 'Ongoing', '2 months', 0),
(46, 'Criptography', 'criptography is a method of protecting information and communications through the use of codes,so that only those for whome the information is intended can read and process it.', 'Krishnaveni M', 'venikrishnaveni@gmail.com', 'Ongoing', '5 months', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `resume` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fname`, `lname`, `gender`, `dob`, `address`, `mobile`, `email`, `password`, `img_name`, `img_path`, `status`, `resume`) VALUES
(6, 'Shyam', 'Mohan', 'Male', '1998-12-14', 'Kizhakkemadom (H)\r\nAmayannoor PO\r\nKottayam-686019', '+91 7909232372', 'shyammohan141298@gmail.com', '141298', 'Shyam', 'profile-photo/PhotoRoom.png', 'Approved', 'ResumeShyam.pdf'),
(28, 'Nikhil', 'sivenkuitty', 'Male', '1111-11-11', 'veedu (H) sthalam po jilla', '+76 1234567898', 'Nikhil@gmail.com', '2323', 'Nikhil', 'profile-photo/user.jpg', 'Requested', 'ResumeShyam.pdf'),
(29, 'soumya', 'mohan', 'Female', '2006-01-12', 'Kizhakkemadom (H)\r\nAmyannoor PO\r\nKottayam-686019', '+91 8547540739', 'soumya2@gmail.com', 'abc123', 'soumya', 'profile-photo/Screenshot_2021-02-05.jpg', 'Approved', 'ResumeShyam.pdf'),
(37, 'amal', 'suman', 'Male', '1111-11-11', 'aaaaaaaaaa', '+99 9999999999', 'amal@gmail.com', '101010', 'amal', 'profile-photo/user.jpg', 'Requested', 'ResumeShyam.docx'),
(46, 'Dileep', 'Kumar', 'Male', '1956-01-12', 'bhavanam (H) kottayam', '+91 8848574125', 'dileepkumar@gmail.com', 'password', 'dileep', 'profile-photo/user.jpg', 'Approved', 'ResumeShyam.pdf'),
(49, 'Praseeda', 'R', 'Female', '1986-06-18', 'Valiyaveetil (H)\r\nKottayam', '+91 9387836076', 'rpraseeda2019@gmail.com', 'praseeda', 'Praseeda', 'profile-photo/user.jpg', 'Approved', 'ResumeShyam.pdf'),
(50, 'Emil', 'Edison', 'Male', '1985-12-14', 'Thekkedathu (H)\r\nKottayam', '+91 9446402414', 'emil350z@gmail.com', 'emil350', 'Emil', 'profile-photo/IMG_20210410_122631[1].jpg', 'Approved', 'ResumeShyam.pdf'),
(51, 'Sindhu', 'R', 'Female', '1967-01-12', 'Pallithethekkethil (H)\r\nKottayam', '+91 9496539692', 'rsindhu@gmail.com', 'sindhu', 'Sindhu', 'profile-photo/user.jpg', 'Approved', 'ResumeShyam.pdf'),
(52, 'Krishnaveni', 'M', 'Female', '1965-11-02', 'Ardram (H)\r\nPuthuppally PO\r\nKottayam', '+91 9744001321', 'venikrishnaveni@gmail.com', 'veni', 'Krishnaveni', 'profile-photo/user.jpg', 'Approved', 'ResumeShyam.pdf'),
(53, 'Binu', 'Sugathan', 'Male', '1964-03-11', 'Kochupurakkal (H)\r\nKottayam', '+91 9447568549', 'binusugathan@gmail.com', 'sbinu', 'Binu', 'profile-photo/Screenshot_2021-04-10-12-25-52-17_f598e1360c96b5a5aa16536c303cff92[1].jpg', 'Approved', 'ResumeShyam.pdf'),
(54, 'Shifa', 'Mahein', 'Male', '1982-12-14', 'mampallil (H)\r\nalapuzha', '+91 9526814232', 'shifamahein@gmail.com', 'shifana', 'Shifa', 'profile-photo/user.jpg', 'Approved', 'ResumeShyam.pdf'),
(55, 'Gayathri', 'Rajiv', 'Female', '1980-03-02', 'Kollakunnel (H)\r\nKottayam', '+91 7558097991', 'gayathrirajiv@gmail.com', 'gayathri', 'Gayathri', 'profile-photo/user.jpg', 'Approved', 'ResumeShyam.pdf'),
(56, 'Angel', 'Thomas', 'Female', '1979-03-19', 'karangottil (H)\r\nErnakulam', '+91 9562489615', 'angelthomas@gmail.com', 'angel', 'Angel', 'profile-photo/user.jpg', 'Approved', 'ResumeShyam.pdf'),
(68, 'Mohanan', 'ak', 'Male', '0111-11-11', 'amaynnnoor', '+09 9446280739', 'akmohanan44@gmail.com', 'amayannoor', 'Mohanan', 'profile-photo/user.jpg', 'Requested', 'Unsupervised Learning Questions.docx');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sendername` varchar(100) NOT NULL,
  `senderemail` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `sendername`, `senderemail`, `subject`, `message`) VALUES
(1, 'Soumya Mohan', 'soumya@gmail.com', 'DIP', 'kolloolla'),
(2, 'Soumya Mohan', 'soumya@gmail.com', 'Biology', 'nallathaaa'),
(3, 'aaaaaaaa', 'aa@gmail.com', 'aaaaaaa', 'aaaaaaaaaaaa'),
(4, 'Soumya Mohan', 'soumya@gmail.com', 'DIP', 'sssss');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `quizid` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `qno` int(11) NOT NULL,
  `qstn` varchar(1000) NOT NULL,
  `optn1` varchar(300) NOT NULL,
  `optn2` varchar(300) NOT NULL,
  `optn3` varchar(300) NOT NULL,
  `optn4` varchar(300) NOT NULL,
  `ans` varchar(300) NOT NULL,
  `userans` varchar(300) NOT NULL,
  `mark` int(11) NOT NULL,
  `timer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `quizid`, `course`, `qno`, `qstn`, `optn1`, `optn2`, `optn3`, `optn4`, `ans`, `userans`, `mark`, `timer`) VALUES
(2, 'sample', 'DIP', 1, 'DIP stand for', 'Digital image processing', 'ssss', 'di', 'sssssss', 'Digital image processing', 'Digital image processing', 2, '01:30'),
(3, 'sample', 'DIP', 2, 'aaaaaa', 'ssssss', 'cccz', 'aqqqqqqq', 'zzz', 'ssssss', '', 2, '01:30'),
(4, 'sample', 'DIP', 3, 'asssss', '11111', 'bbbbbbbb', 'aaaaa', 'qqqqqqq', '11111', '', 2, '01:30'),
(8, 'sample', 'DIP', 4, 'njettilla vattayilla', 'dosha', 'iddali', 'pappadom', 'appom', 'pappadom', 'pappadom', 2, '01:30'),
(9, 'sample', 'DIP', 5, 'atm stand for', 'any time money', 'any time machine', 'automatic teller machine', 'nota', 'automatic teller machine', 'automatic teller machine', 2, '01:30'),
(14, 'dip0001', 'DIP', 1, 'An image represented by f(x,y) where x,y and f are finite is known as', 'gray scale image', 'analog image', 'digital image', 'RGB image', 'digital image', ' ', 5, '05:20'),
(15, 'dip0001', 'DIP', 2, 'Each bundle of energy in an electromagnetic wave is called ', 'photon', 'electron', 'proton', 'nuetron', 'photon', ' ', 5, '05:20'),
(16, 'dip0001', 'DIP', 3, 'PET stands for', 'Positron Emission Tomography', 'Penetrative Electron Test', 'Photo Electron Test', 'none of the above', 'Positron Emission Tomography', ' ', 5, '05:20'),
(17, 'dip0001', 'DIP', 4, 'A -------- electron microscope works like a slide projector', 'convolution', 'scanning', 'conversion', 'transmission', 'transmission', ' ', 5, '05:20'),
(18, 'dip0001', 'DIP', 5, ' -------- is the process of manipulating an image so that the result is more suitable than the original for a specific application', 'segmentation', 'representation', 'enhancement', 'restoration', 'enhancement', ' ', 5, '05:20'),
(19, 'dip0001', 'DIP', 6, '----- contracts or expands to control the light entering into the eye', 'fovea', 'retina', 'sclera', 'iris', 'iris', ' ', 5, '05:20'),
(20, 'dip0001', 'DIP', 7, 'Digitizing the amplitude values in an image sensed by an image sensor is ', 'sampling', 'quantization', 'digitization', 'correlation', 'quantization', ' ', 5, '05:20'),
(21, 'dip0001', 'DIP', 8, 'Spatial filtering deals with working on -----', 'neighborhood of every pixel in an image', 'single pixels', 'gray scale', 'resolution', 'neighborhood of every pixel in an image', ' ', 5, '05:20'),
(22, 'dip0001', 'DIP', 9, 'A spatial filter is also known as ', 'hue', 'mask', 'gray image', 'port', 'mask', ' ', 5, '05:20'),
(23, 'dip0001', 'DIP', 10, 'The process of moving a filter mask over the image and computing the sum of products at each location is ', 'convolution', 'filtering', 'correlation', 'compression', 'filtering', ' ', 5, '05:20'),
(24, 'dip0001', 'DIP', 11, 'Salt and Pepper noise can be eliminated by ', 'porting', 'correlation', 'sharpening', 'median filters', 'median filters', ' ', 5, '05:20'),
(25, 'dip0001', 'DIP', 12, 'Smoothing spacial filters are also known as ', 'averaging filters', 'homomorphic filters', 'high pass filters', 'none of these', 'averaging filters', ' ', 5, '05:20'),
(26, 'dip0001', 'DIP', 13, '----- are characterized sharp intensity transitions in an image', 'contours', 'edges', 'vertices', 'lines', 'edges', ' ', 5, '05:20'),
(27, 'dip0001', 'DIP', 14, '----- basic intensity transformation is used in MRI', 'image negatives', 'log transformation', 'power-law transformation', 'none of these', 'power-law transformation', ' ', 5, '05:20'),
(28, 'dip0001', 'DIP', 15, 'Sensor strips mounted in a ring configuration is used in', 'PET', 'MRI', 'CAT', 'X-Ray', 'CAT', ' ', 5, '05:20'),
(29, 'dip0001', 'DIP', 16, 'DIP stand for', 'digital image processing', 'digital information processing', 'digital intencity processing', 'digital itegrity process ', 'digital image processing', ' ', 5, '05:20'),
(39, 'ptn', 'Python', 1, 'aa', 'ss', 'dd', 'gg', 'ff', 'ss', ' ', 1, '00:10'),
(41, 'pppp', 'php', 1, 'php stand for', 'php', 'php:Hypertext Preprocessor', 'personal home page', 'NOTA', 'php:Hypertext Preprocessor', ' ', 5, '00:20'),
(44, 'phpphpphp', 'php', 1, 'php is a', 'client', 'client-server', 'server', 'none of the above', 'server', ' ', 10, '00:21');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `sname`, `semail`, `cname`) VALUES
(6, 'Peterson P Varughese', 'petersonpv99@gmail.com', 'Python'),
(7, 'Peterson P Varughese', 'petersonpv99@gmail.com', 'physics'),
(18, 'Sivapriya K P', 'sivapriyakp2199@gmail.com', 'Python'),
(19, 'siva', 'sivapriyakp2199@gmail.com', 'physics'),
(20, 'Soumya Mohan', 'soumya@gmail.com', 'physics'),
(22, 'adithya', 'adithyathankachan149@gmail.com', 'Operating System'),
(26, 'adithya', 'adithyathankachan149@gmail.com', 'Python'),
(37, 'anuchand', 'anuishappy@gmail.com', 'Python'),
(38, 'athirarej', 'athirareji27@gmail.com', 'Python'),
(39, 'Athira', 'athirareji27@gmail.com', 'physics'),
(43, 'anuchand', 'anuishappy@gmail.com', 'physics'),
(45, 'Shyam Moahan', 'shyammohan141298@gmail.com', 'physics'),
(49, 'Shyam Moahan', 'shyammohan141298@gmail.com', 'Python'),
(50, 'Shyam Moahan', 'shyammohan141298@gmail.com', 'DBMS'),
(51, 'Soumya Mohan', 'soumya@gmail.com', 'Operating System'),
(52, 'Peterson', 'petersonpv99@gmail.com', 'DBMS'),
(53, 'Soumya Mohan', 'soumya@gmail.com', 'DBMS'),
(54, 'Athira Reji', 'athirareji27@gmail.com', 'DBMS'),
(55, 'Soumya Mohan', 'soumya@gmail.com', 'DBMS'),
(56, 'Rintu Jose', 'rintujose4279@gmail.com', 'Python'),
(57, 'Shyam mohan', 'shyammohan141298@gmail.com', 'Ethical Hacking'),
(58, 'Rintu', 'rintujose4279@gmail.com', 'Ethical Hacking'),
(59, 'Adithya', 'adithyathankachan149@gmail.com', 'Ethical Hacking'),
(60, 'Arya', 'aryasanthosh793@gmail.com', 'Ethical Hacking'),
(61, 'Athira', 'athirareji27@gmail.com', 'Ethical Hacking'),
(62, 'Bitto', 'bittomani1998@gmail.com', 'Ethical Hacking'),
(63, 'Vydeh', 'vydehbaijukuttan@gmail.com', 'Ethical Hacking'),
(65, 'Peterson P Varughese', 'petersonpv99@gmail.com', 'DIP'),
(72, 'soumya mohan', 'soumya@gmail.com', 'Java'),
(85, 'Soumya Mohan', 'soumya@gmail.com', 'Python'),
(86, 'Soumya Mohan', 'soumya@gmail.com', 'DIP');

-- --------------------------------------------------------

--
-- Table structure for table `scoreboard`
--

CREATE TABLE `scoreboard` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `quizcode` varchar(100) NOT NULL,
  `mark` int(11) NOT NULL,
  `course` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scoreboard`
--

INSERT INTO `scoreboard` (`id`, `email`, `quizcode`, `mark`, `course`) VALUES
(3, 'soumya@gmail.com', 'dip0001', 15, 'DIP'),
(8, 'soumya@gmail.com', 'sample', 6, 'DIP'),
(9, 'shyammohan141298@gmail.com', 'pppp', 0, 'php');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `gender`, `dob`, `address`, `mobile`, `email`, `password`, `img_name`, `img_path`) VALUES
(39, 'Adithya', 'Thankachan', 'Female', '2021-02-11', 'PUTHETHARA\r\nT.V. PURAM P.O, \r\nVAIKOM, KOTTAYAM', '+91 9995965192', 'adithyathankachan149@gmail.com', 'thanku', 'Adithya', 'profile-photo/IMG-20.jpg'),
(40, 'Anuchand', 'A', 'Male', '2021-02-02', 'KOCHUKUNNAKATTIL(H), \r\nANJILITHANAM P.O, \r\nKAVIYOO', '+91 8281593655', 'anuishappy@gmail.com', 'happy', 'Soumya', 'profile-photo/user.jpg'),
(41, 'Arya', 'V S', 'Female', '2021-02-03', 'VARAMKUNNATH (H), \r\nVELOOR P.O, KOTTAYAM', '+91 8075046759', 'aryasanthosh793@gmail.com', 'avs', 'Arya', 'profile-photo/d67b7f1362[1].jpg'),
(42, 'Athira', 'Reji', 'Male', '1999-04-28', 'ERUPATHIL (H), \r\nCHEENGAM P.P , \r\nKOTTAYAM', '+91 9562292672', 'athirareji27@gmail.com', 'athira', 'Athira', 'profile-photo/94f46d65bef3a6[1].jpg'),
(43, 'Bitto', 'Mani', 'Male', '2021-02-08', 'MANGALAPPALLY(H), \r\nPUTHUPPALLY P.O, \r\nKOTTAYAM', '+91 9446669854', 'bittomani1998@gmail.com', 'bitto', 'Bitto', 'profile-photo/Screenshot_2021-02-27-09-11-16-42[1].jpg'),
(44, 'Jissamol', 'Kuriakose', 'Male', '2021-02-03', 'KADAPOOR(H), \r\nMEENADOM P.O , \r\nKOTTAYA', '+91 7025173579', 'jissamolkuriakose2018@gmail.com', 'jissa', 'Soumya', 'profile-photo/user.jpg'),
(45, 'Merin', 'Joseph', 'Female', '1998-12-30', 'KADOPPIL (H), \r\nPUTHUPAALY P.O , \r\nKOTTAYAM', '+91 7902415328', 'merinjoseph998@gmail.com', 'ferno', 'Merin', 'profile-photo/IMG-20210302-WA0053.jpg'),
(46, 'Peterson', 'P Varughese', 'Male', '2021-02-03', 'PUTHENPARAMPIL(H), \r\nERAVUCHIRA P.O. , \r\nTHOTTAKAC\r\n686539', '+91 9847734707', 'petersonpv99@gmail.com', 'peter', 'Peterson', 'profile-photo/IMG-20210227-WA0050[1].jpg'),
(47, 'Rintu', 'Jose', 'Female', '1997-10-02', 'CHIRATTAYOLIL(H), \r\nKURAVILANGAD P.O , \r\nKOTTAYAM', '+91 7025471947', 'rintujose4279@gmail.com', 'tiktok', 'Rintu', 'profile-photo/IMG-WA0002[1].jpg'),
(48, 'Shiny', 'A Shaji', 'Female', '2021-02-22', 'KAKKATTUMKUZHIYIL (H), \r\nMANGANAM P.O \r\nKOTTAYAM', '+91 8139817920', 'shinyashaji97@gmail.com', 'dingu', 'Shiny', 'profile-photo/IMG20191010091955[1].jpg'),
(49, 'Sivapriya', 'K P', 'Female', '2021-02-01', 'KONDOOPPARAMPU(H), \r\nPATHAMUTTOM PO\r\nKOTTAYAM', '+91 9074449570', 'sivapriyakp2199@gmail.com', 'siva', 'Sivapriya', 'profile-photo/ede49e2ab19f4a6bbd3ff27006462472[1].jpg'),
(50, 'Sneha', 'Elizabeth Roy', 'Female', '1996-02-06', 'OTTAPLACKEL (H), \r\nAREEPARAMBU P.O, \r\nKOTTAYAM', '+91 9961459518', 'snehaelizabethroy1@gmail.com', 'sneha', 'Soumya', 'profile-photo/user.jpg'),
(51, 'Sreekutty', 'Binu', 'Female', '2021-02-15', 'PARAPPALLICHIRA (H), \r\nRUBBER BOARD P.O. , \r\nKOTTA', '+91 8943708101', 'sreekuttybinu097@gmail.com', 'sree', 'Soumya', 'profile-photo/user.jpg'),
(52, 'Thara', 'S kumar', 'Female', '2021-02-01', 'ANCHANICKAL, \r\nKAVUNGUMPRAYAR P.O , \r\nPURAMATTOM ,', '+91 9061443145', 'tharaskumar77@gmail.com', 'thara', 'Soumya', 'profile-photo/user.jpg'),
(53, 'Vydeh', 'K Baijukuttan', 'Male', '2021-02-04', 'CHERUKANNANKERI (H), \r\nKUMARAKOM(E) \r\nKOTTAYAM', '+91 7510646163', 'vydehbaijukuttan@gmail.com', 'baijukuttan', 'Vydeh', 'profile-photo/IMG_20210413_100258[1].jpg'),
(62, 'Shyam', 'Mohan', 'Male', '1998-12-14', 'Kizhakkemadom (H)\r\nAmayannoor PO\r\nKottayam\r\n686019', '+91 7909232372', 'shyammohan141298@gmail.com', '141298', 'Shyam', 'profile-photo/ShyamM_2.jpg'),
(71, 'Soumya', 'Mohan', 'Female', '2006-01-12', 'kizhakkemadom\r\namayannoor p.o \r\nkottayam', '+91 9446280739', 'soumya@gmail.com', 'abc123', 'Soumya', 'profile-photo/Screenshot_2021-02-05.jpg'),
(78, 'Aiswarya', 'A N', 'Female', '1998-12-14', 'Vazhappallil (H)\r\nMoolavattom PO\r\nKottayam', '+91 9497317262', 'aiswaryaaishu412@gmail.com', 'aishu', 'Aiswarya', 'profile-photo/user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `study_materials`
--

CREATE TABLE `study_materials` (
  `id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_materials`
--

INSERT INTO `study_materials` (`id`, `course`, `name`, `size`, `downloads`) VALUES
(1, 'Biology', 'ResumeShyam.pdf', 175185, 3),
(2, 'Chemistry', 'carousal.txt', 1675, 0),
(3, 'physics', 'ResumeShyam.docx', 55401, 0),
(6, 'Biology', 'SC-seminar.pptx', 535355, 2),
(7, 'Biology', 'IpayMaster(ProjectReport).pdf', 2602773, 1),
(8, 'Biology', 'VID20210328113523.mp4', 25944506, 1),
(10, 'DIP', 'file.txt', 2196, 2),
(11, 'DIP', '102571743_304159823925754_3248524592741089285_n[1].mp4', 2928839, 0),
(12, 'DIP', 'OnlineCoursePortal(Abstract).pdf', 101157, 0),
(14, 'DIP', 'c50ed2b062364a7bbf4a1ba3fb830c6c[1].mp4', 5116213, 0),
(20, 'Python', 'file.txt', 2196, 1),
(26, 'php', 'file.txt', 2196, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(31, 'adithyathankachan149@gmail.com'),
(45, 'aiswaryaaishu412@gmail.com'),
(32, 'anuishappy@gmail.com'),
(33, 'aryasanthosh793@gmail.com'),
(34, 'athirareji27@gmail.com'),
(35, 'bittomani1998@gmail.com'),
(44, 'jissamolkuriakose2018@gmail.com'),
(36, 'merinjoseph998@gmail.com'),
(30, 'petersonpv99@gmail.com'),
(37, 'rintujose4279@gmail.com'),
(38, 'shinyashaji97@gmail.com'),
(10, 'shyammohan141298@gmail.com'),
(39, 'sivapriyakp2199@gmail.com'),
(40, 'snehaelizabethroy1@gmail.com'),
(41, 'sreekuttybinu097@gmail.com'),
(42, 'tharaskumar77@gmail.com'),
(43, 'vydehbaijukuttan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `anouncement`
--
ALTER TABLE `anouncement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `teacher_email` (`teacher_email`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semail` (`semail`),
  ADD KEY `cname` (`cname`);

--
-- Indexes for table `scoreboard`
--
ALTER TABLE `scoreboard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `study_materials`
--
ALTER TABLE `study_materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `anouncement`
--
ALTER TABLE `anouncement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `scoreboard`
--
ALTER TABLE `scoreboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `study_materials`
--
ALTER TABLE `study_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`teacher_email`) REFERENCES `faculty` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course` (`title`) ON DELETE CASCADE;

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`semail`) REFERENCES `student` (`email`) ON DELETE CASCADE,
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`cname`) REFERENCES `course` (`title`) ON DELETE CASCADE,
  ADD CONSTRAINT `register_ibfk_3` FOREIGN KEY (`cname`) REFERENCES `course` (`title`) ON DELETE CASCADE;

--
-- Constraints for table `scoreboard`
--
ALTER TABLE `scoreboard`
  ADD CONSTRAINT `scoreboard_ibfk_1` FOREIGN KEY (`email`) REFERENCES `student` (`email`) ON DELETE CASCADE,
  ADD CONSTRAINT `scoreboard_ibfk_2` FOREIGN KEY (`course`) REFERENCES `course` (`title`) ON DELETE CASCADE;

--
-- Constraints for table `study_materials`
--
ALTER TABLE `study_materials`
  ADD CONSTRAINT `study_materials_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course` (`title`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
