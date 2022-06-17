-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2022 at 11:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CompanyDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `cfirst_name` varchar(20) DEFAULT NULL,
  `cmiddle_name` varchar(20) DEFAULT NULL,
  `clast_name` varchar(20) DEFAULT NULL,
  `cemail` varchar(25) DEFAULT NULL,
  `custusername` varchar(25) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `prodid` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `cfirst_name`, `cmiddle_name`, `clast_name`, `cemail`, `custusername`, `contact`, `prodid`, `qty`) VALUES
(10, 'John', '', 'Douch', 'johnd@gmail.com', 'JohnD', '8989653256', 1020, 50),
(20, 'Jems', '', 'Adom', 'jemsa@gmail.com', 'JemsA', '789654123', 1020, 120);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `department_name` varchar(20) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `department_name`, `manager_id`, `location`) VALUES
(10, 'Administration', 200, 'SEATTLE'),
(20, 'Marketing', 201, 'TORONTO'),
(50, 'Shipping', 124, 'SOUTH SAN FRANSCISCO'),
(60, 'IT', 103, 'SOUTHLAKE'),
(80, 'Sales', 149, 'OXFORD'),
(90, 'Executive', 100, 'SEATTLE'),
(110, 'Accounting', 205, 'SEATTLE'),
(190, 'Contracting', NULL, 'SEATTLE');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `hire_date` date NOT NULL,
  `job_title` varchar(10) NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `skills` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `first_name`, `middle_name`, `last_name`, `username`, `pass`, `phone_number`, `hire_date`, `job_title`, `salary`, `department_id`, `manager_id`, `address`, `skills`) VALUES
(55, 'bhu', '', 'nj', 'Bhura', 'kkkkk', '8888888888', '2022-02-12', 'fsdah', 6555, 10, 100, 'jk', 'hnn'),
(100, 'Steven', 'Alexander', 'king', 'SKING', 'SKING', '515.123.4567', '1987-07-17', 'AD_PRES', 24000, 90, NULL, 'New York', 'C'),
(101, 'Neena', 'Arun', 'Kochhar', 'NKOCHHAR', 'NKOCHHAR', '515.123.4568', '1989-09-21', 'AD_VP', 17000, 90, 100, 'Washington DC', 'Java'),
(102, 'Lex', 'Zeu', 'De Haan', 'LDEHAAN', 'LDEHAAN', '515.123.4569', '1993-01-13', 'AD_VP', 17000, 90, 100, 'New York', 'Python'),
(103, 'Alexander', 'Alars', 'Hunold', 'AHUNOLD', 'AHUNOLD', '590.423.4567', '1990-01-03', 'IT_PROG', 9000, 60, 102, 'Chicago', 'SQL'),
(104, 'Bruce', 'Banner', 'Ernst', 'BERNST', 'BERNST', '590.423.4568', '1991-05-21', 'IT_PROG', 6000, 60, 103, 'Boston', 'ReactJS'),
(107, 'Diana', 'James', 'Lorentz', 'DLORENTZ', 'DLORENTZ', '590.423.5567', '1999-02-07', 'IT_PROG', 42000, 60, 103, 'Washington DC', 'NodeJS'),
(124, 'Kevin', 'William', 'Mourgos', 'KMOURGOS', 'KMOURGOS', '650.123.5234', '1999-11-16', 'ST_MAN', 5800, 50, 100, 'New York', 'SQL'),
(141, 'Trenna', 'William', 'Rajs', 'TRAJS', 'TRAJS', '650.123.8009', '1995-10-17', 'ST_CLERK', 3500, 50, 124, 'Houston', 'C#'),
(142, 'Curtis', 'James', 'Davies', 'CDAVIES', 'CDAVIES', '650.121.2994', '1997-01-29', 'ST_CLERK', 3100, 50, 124, 'Washington DC', 'Java'),
(143, 'Randall', 'Oliver', 'Matos', 'RMATOS', 'RMATOS', '650.121.2874', '1998-03-15', 'ST_CLERK', 2600, 50, 124, 'Italy', 'Accountancy'),
(144, 'Peter', 'Noah', 'Vargas', 'PVARGAS', 'PVARGAS', '650.123.8009', '1998-07-09', 'ST_CLERK', 2500, 50, 124, 'Chicago', 'Accountancy'),
(149, 'Eleni', 'Liam', 'Zlotkey', 'PVARGAS', 'PVARGAS', '650.123.8009', '1998-07-09', 'SA_MAN', 10500, 80, 100, 'New York', 'Web Developer'),
(174, 'Ellen', 'Roger', 'Abel', 'PVARGAS', 'PVARGAS', '650.123.8009', '1998-07-09', 'SA_REP', 11000, 80, 149, 'Boston', 'Excel'),
(176, 'Jonathon', 'Odin', 'Taylor', 'PVARGAS', 'PVARGAS', '650.123.8009', '1998-07-09', 'SA_REP', 8600, 80, 149, 'Houston', 'Excel'),
(178, 'Kimberely', 'Oliver', 'Grant', 'RGRANI', 'RGRANI', '011.44.1044.425200', '1999-05-04', 'SA_REP', 7040, NULL, 149, 'Houston', 'Data Scientist'),
(200, 'Jennifer', 'James', 'Whalen', 'JWHALEN', 'JWHALEN', '515.123.4444', '1987-09-17', 'AD_ASST', 4400, 10, 101, 'New York', 'Management'),
(201, 'Michalen', 'Michael', 'Hartstein', 'MHARTSTE', 'MHARTSTE', '515.123.5555', '1996-02-17', 'MK_MAN', 13000, 20, 100, 'Chicago', 'Data Analytics'),
(202, 'Pat', 'Dray', 'Fay', 'PFAY', 'PFAY', '603.123.6666', '1997-08-17', 'MK_REP', 6000, 20, 201, 'Washington DC', 'SQL'),
(205, 'Shelley', 'Drew', 'Higgins', 'SHIGGINS', 'SHIGGINS', '515.123.8080', '1994-06-07', 'AC_MGR', 12000, 110, 101, 'Boston', 'Accountancy'),
(206, 'William', 'Kewin', 'Gietz', 'WGIETZ', 'WGIETZ', '515.123.8181', '1994-07-07', 'AC_ACCOUNT', 8300, 110, 205, 'New York', 'Android');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `proid` int(11) NOT NULL,
  `pro_name` varchar(20) DEFAULT NULL,
  `pro_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proid`, `pro_name`, `pro_price`) VALUES
(1010, 'Laptop', 45000),
(1020, 'PCs', 54000),
(1030, 'Hard Drive', 25000),
(1040, 'Graphic Card', 35000),
(1050, 'Optical Drive', 35000),
(1060, 'Motherboard', 40000),
(1070, 'RAM Modules', 20000),
(1080, 'Preprocessors (CPU)', 32000),
(1090, 'Printers', 56000),
(1110, 'System Fans', 34000),
(1120, 'Webcam', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `prodid` (`prodid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`prodid`) REFERENCES `product` (`proid`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`dept_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
