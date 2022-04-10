-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 24, 2021 at 04:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `User_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Email_id` varchar(30) NOT NULL,
  `Responsibilities` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`User_name`, `password`, `Email_id`, `Responsibilities`) VALUES
('Aditya Waykos', '*********', 'Aswaykos@gmail.com', ''),
('Sanket Raone', '***********', 'raonesanket@gmail.com', ''),
('Sakshi Nagarkar', '**********', 'sakshi07nagarkar@gmail.com', ''),
('Sammed Singalkar', '************', 'sammedsingalkar@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Company_name` varchar(15) NOT NULL,
  `Company_id` int(6) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Establishment_date` date NOT NULL,
  `Website_url` varchar(35) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Company_stream` varchar(15) NOT NULL,
  `Location` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_name`, `Company_id`, `Pincode`, `Establishment_date`, `Website_url`, `Company_stream`, `Location`) VALUES
('Infosys', 40054, 560100, '1981-06-02', 'https://www.infosys.com/', 'IT', 'Bengaluru'),
('TCS', 110216, 400001, '1968-04-01', 'https://www.tcs.com/', 'IT', 'Mumbai'),
('TATA Motors', 112035, 400001, '1945-03-01', 'https://www.tatamotors.com/', 'Automobile', 'Mumbai'),
('Zomato', 192463, 110019, '2008-01-18', 'https://www.zomato.com/', 'Food Delivery', 'New Delhi'),
('Byjus\'s', 200213, 560029, '2011-03-01', 'https://byjus.com/', 'Education', 'Bengaluru'),
('Infosys', 400054, 560100, '1981-06-02', 'https://www.infosys.com/', 'IT', 'Bengaluru'),
('JIO', 456322, 400021, '2007-05-10', 'https://www.jio.com/', 'Telecom', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `Interview_Date` date NOT NULL,
  `Interview_id` int(6) NOT NULL,
  `Company_name` varchar(12) NOT NULL,
  `Interview_Type` varchar(15) NOT NULL,
  `Interview_place` varchar(10) NOT NULL,
  `Interviewer_name` varchar(50) NOT NULL,
  `Interviewee` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`Interview_Date`, `Interview_id`, `Company_name`, `Interview_Type`, `Interview_place`, `Interviewer_name`, `Interviewee`) VALUES
('2021-11-07', 1001, 'TCS', 'Online', 'Pune', 'Mrs. Mansi Shah, Mr. Manoj Dhale', 'Swati Annadate'),
('2021-11-07', 1002, 'Infosys', 'Offline', 'Mumbai', 'Mr. Rajesh Kumar, Mr. Dev Datta, Mr. Nikhil Jain', 'Sakshi Jain'),
('2021-11-08', 1003, 'TATA Motors', 'Online', 'Aurangabad', 'Mr. Aditya Jain, Mrs. Vishal Yogi', 'Harsh Wakle'),
('2021-11-10', 1004, 'Byju\'s', 'Online', 'Kolkata', 'Mrs. Samiksha Patil, Mrs. Harshit Kumar', 'Shital Soni'),
('2021-11-11', 1005, 'Zomato', 'offline', 'Hydrabad', 'Mr. Rajesh Kumar, Mrs. Kritika Doiphode', 'Urvashi Uttarwar'),
('2021-11-20', 1006, 'JIO', 'Offline', 'Pune', 'Mrs. Swati Kulkarni, Mr. Raghu Rajput. ', 'Kalpesh Deshmukh');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `No_Of_Vacancies` int(5) NOT NULL,
  `Company_name` varchar(15) NOT NULL,
  `Job_id` int(6) NOT NULL,
  `salary` float NOT NULL,
  `Skills_required` text NOT NULL,
  `Job_Location_city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`No_Of_Vacancies`, `Company_name`, `Job_id`, `salary`, `Skills_required`, `Job_Location_city`) VALUES
(54, 'TCS', 9090, 5, 'Python, SQL', 'Mumbai'),
(60, 'Infosys', 9091, 8, 'Java, Javascript', 'Bengaluru'),
(34, 'TATA Motors', 9092, 5, 'Communication', 'Mumbai'),
(45, 'Byjus\'s', 9093, 7, 'Communication skills', 'Mumbai'),
(59, 'Zomato', 9094, 6, 'Decision Making and Problem Solving', 'Bengaluru'),
(21, 'JIO', 9095, 10, 'Cloud computing,Programming', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `Job Seeker ID` int(6) NOT NULL,
  `Job Seeker name` varchar(30) NOT NULL,
  `Email_ID` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovenian_ci NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Contact_details` bigint(10) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`Job Seeker ID`, `Job Seeker name`, `Email_ID`, `Gender`, `Contact_details`, `Date_of_birth`, `Password`) VALUES
(40021, 'Swati Annadate', 'swatiannadate@gmail.com', 'Female', 9456872361, '2000-05-02', 'Swati@123'),
(40022, 'Sakshi Jain', 'jainsakshi1@yahoo.in', 'Female', 8495682130, '1991-07-14', 'Sakshi@jain34'),
(40023, 'Harsh Wakle', 'wakleharsh@gmail.com', 'Male', 7496853749, '1996-11-23', 'harsh12wakle'),
(40024, 'Shital Soni', 'shitalsoni@gmail.com', 'Female', 8895643015, '2000-08-16', 'Soni11@shital43'),
(40026, 'Kalpesh Deshmukh', 'deshmukhkd@gmail.com', 'Male', 7879764565, '2000-05-05', 'kd47mukh'),
(40052, 'Urvashi Uttarwar', 'urvashiuttarwar@gmail.com', 'Female', 7979765122, '1995-05-30', 'urvautt78');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Registration_no` int(7) NOT NULL,
  `Registration_name` varchar(25) NOT NULL,
  `Company_name` varchar(25) NOT NULL,
  `Date and Time` date NOT NULL,
  `Post` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Registration_no`, `Registration_name`, `Company_name`, `Date and Time`, `Post`) VALUES
(1919135, 'Swati Annadate', 'TCS', '2021-10-05', 'Software Developer'),
(1919136, 'Sakshi Jain', 'Infosys', '2021-10-21', 'Data Scientist'),
(1919137, 'Harsh Wakle', 'TATA Motors', '2021-10-26', 'Manager'),
(1919138, 'Shital Soni', 'Byjus\'s', '2021-11-01', 'Professor'),
(1919139, 'Urvashi Uttarwar', 'Zomato', '2021-10-25', 'Application manager'),
(1919140, 'Kalpesh Deshmukh', 'JIO', '2021-10-30', 'Website Manager');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `Qualification` text NOT NULL,
  `Experince` text NOT NULL,
  `Skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Email_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`Interview_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Job_id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`Job Seeker ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Registration_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
