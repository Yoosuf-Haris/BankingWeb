-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 06:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marthr`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `assetName` varchar(200) NOT NULL,
  `assetId` varchar(200) NOT NULL,
  `PurchaseDate` date NOT NULL,
  `PurchaseFrom` varchar(200) NOT NULL,
  `Manufacturer` varchar(200) NOT NULL,
  `Model` varchar(200) NOT NULL,
  `Status` int(10) NOT NULL,
  `Supplier` varchar(255) NOT NULL,
  `AssetCondition` varchar(255) NOT NULL,
  `Warranty` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `AssetUser` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `assetName`, `assetId`, `PurchaseDate`, `PurchaseFrom`, `Manufacturer`, `Model`, `Status`, `Supplier`, `AssetCondition`, `Warranty`, `Price`, `AssetUser`, `Description`, `DateTime`) VALUES
(1, 'Macbook Book', '#AST-031256', '2020-09-23', 'Amazon', 'Apple Inc.', '2020', 1, 'Amazon', 'In good shape', '12 Months', 1900, 'Mushe abdul-Hakim', 'This is the description of the laptop', '2020-09-23 23:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `ClientId` varchar(225) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL,
  `Picture` varchar(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `ClientId`, `Phone`, `Company`, `Address`, `Status`, `Picture`, `date`) VALUES
(1, 'Yahuza', 'Abdul-Hakim', 'Vendetta', 'musheabdulhakim@protonmail.ch', '$2y$10$xU1zDRigag7ZMGs0Egcqoei0SrtZJRX/p425h4qOi5OMKFz32k0UC', 'CLT-613498', '233209229025', 'Microsoft Inc', 'Live from home', 1, 'd41d8cd98f00b204e9800998ecf8427e1601112041', '2020-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `Department`, `Date`) VALUES
(2, 'Accounts', '2020-09-26'),
(3, 'Loan', '2020-09-26'),
(4, 'Savings', '2020-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `Designation`, `Department`, `Date`) VALUES
(1, 'Accountant', 'Accounts', '2020-09-27'),
(2, 'Manager', 'Savings', '2020-09-27'),
(3, 'cfvghjklfghjk', 'Accounts', '2024-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Employee_Id` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Joining_Date` date NOT NULL DEFAULT current_timestamp(),
  `Picture` varchar(200) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `Employee_Id`, `Phone`, `Department`, `Designation`, `Joining_Date`, `Picture`, `DateTime`) VALUES
(4, 'ysf', 'yoosuf', 'abdul', 'musheabdulhakim@protonmail.ch', '$2y$10$E8FuYrk8eyA2s5bccuUNk.bTFXPHjzgbzhgJzIFfZHmevYT6Z41k6', 'EMP-743619', '+28520852', 'hay', 'Bank trainee', '2020-09-29', 'avatar-11.jpg', '2020-09-29 00:04:29'),
(5, 'Yahuza', 'Abdul-Hakim', 'Vendetta', 'harisyoosuf59@gmail.com', '$2y$10$fBLIUiJ3HTgxW5RcEdfi0O3NEUN.Sn8mdfBC5GckdTJdOTsSJRNBW', 'EMP-186249', '+233209229025', 'Loan', 'Loan manager', '2020-09-29', 'avatar-09.jpg', '2020-09-29 00:14:44'),
(6, 'Nifla', 'Nif', 'nifla@123', 'nifla54@gmail.com', '$2y$10$XvaIUbSTDsuiqRb6jvqCgOJPsLkhJYJDmZHDIHFTX37y.WMAmXC3.', 'EMP-134295', '778147144', 'Accounts', 'Accountant', '2024-11-07', 'new-02-5.jpg', '2024-11-07 23:15:55'),
(10, 'yoosuf', 'haris', 'ysf123', 'harisyoosuf59@gmail.com', '$2y$10$ou82PrqfV0GTffUMJsyR4.PMCcvsIksn1fR.hRwnVSyB.OXN.ykNa', 'EMP-847219', '0778474777', 'Accounts', 'Accountant', '2024-11-21', '3-3.jpg', '2024-11-21 16:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` int(11) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Target` text NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Description` text NOT NULL,
  `Status` int(11) NOT NULL,
  `Progress` varchar(200) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `Type`, `Subject`, `Target`, `StartDate`, `EndDate`, `Description`, `Status`, `Progress`, `dateTime`) VALUES
(1, 'Another One', 'Training', 'training till time infinity ', '2020-09-25', '2024-10-10', 'This is the thing i always want to do and am doing it for the rest of my life now friend.', 1, '80', '2020-09-25 00:13:34'),
(2, 'Another One', 'this is a test', '...', '2020-09-25', '2020-10-10', 'This is a test', 1, '50', '2020-09-25 00:39:34'),
(4, 'Another One', 'uiujhbgfvd', 'uynfxgbf', '2024-11-08', '2024-11-15', 'olutxhbaeztzhhtzhsrd', 1, '0', '2024-11-08 09:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `goal_type`
--

CREATE TABLE `goal_type` (
  `id` int(11) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `Status` int(100) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goal_type`
--

INSERT INTO `goal_type` (`id`, `Type`, `Description`, `Status`, `Date`) VALUES
(3, 'Another One', 'This is another test for the type section. Just testing it and seeing it work makes me smile with joy. Thats the power of programming for humans and especially to me .It makes me more happy to see my code run without troubles or bugs.', 1, '2020-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(11) NOT NULL,
  `Holiday_Name` varchar(200) NOT NULL,
  `Holiday_Date` date NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `Holiday_Name`, `Holiday_Date`, `DateTime`) VALUES
(1, 'Christmas', '2024-12-25', '2024-09-02 19:15:02'),
(3, 'full moon poya day', '2024-12-05', '2024-11-02 21:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `Employee` varchar(200) NOT NULL,
  `Starting_At` date NOT NULL,
  `Ending_On` date NOT NULL,
  `Days` int(200) NOT NULL,
  `Reason` text NOT NULL,
  `Time_Added` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `Employee`, `Starting_At`, `Ending_On`, `Days`, `Reason`, `Time_Added`, `status`) VALUES
(5, 'Nifla Nif', '0000-00-00', '2024-11-10', 1, 'zrexngfcv,hjbk', '2024-11-09 05:46:59', 'Confirmed'),
(7, 'Select Employee', '2024-11-09', '2024-11-11', 3, '\\afszgdxfgchbj,k', '2024-11-09 06:03:09', 'Confirmed'),
(8, 'Nifla Nif', '2024-11-13', '2024-11-15', 0, 'asdfgh,j.kljk.h,gfn', '2024-11-09 06:22:19', 'Confirmed'),
(9, 'Select Employee', '2024-11-09', '2024-11-13', 5, 'asdfghjklpoiuytrew', '2024-11-09 07:44:45', 'Confirmed'),
(10, 'Nifla Nif', '2024-11-09', '2024-11-16', 8, 'qwertyuiopasdfghjkl', '2024-11-09 07:45:24', 'Confirmed'),
(11, 'Nifla Nif', '2024-11-11', '2024-11-13', 3, 'asdfghjkl', '2024-11-10 06:18:10', 'Confirmed'),
(12, 'Nifla Nif', '2024-11-13', '2024-11-15', 3, 'hsrtrdgccnhyfjy', '2024-11-10 06:18:56', 'Confirmed'),
(13, 'Nifla Nif', '2024-11-11', '2024-11-12', 2, 'asdfghjklqwertyuio', '2024-11-11 02:01:16', 'Rejected'),
(14, 'Nifla Nif', '2024-11-11', '2024-11-14', 3, 'hestrtdxgtmhvh', '2024-11-11 02:18:00', 'Confirmed'),
(15, 'Nifla Nif', '2024-11-11', '2024-11-13', 3, 'hresxgfnxgfcvjbjuk.kiu', '2024-11-11 02:25:19', 'Confirmed'),
(16, 'Nifla Nif', '2024-11-12', '2024-11-16', 5, 'asdfghjklijnmyghbedx', '2024-11-11 06:58:30', 'Rejected'),
(17, 'Nifla Nif', '2024-11-12', '2024-11-16', 5, 'asdfghjklijnmyghbedx', '2024-11-11 06:59:05', 'Confirmed'),
(18, 'Nifla Nif', '2024-11-12', '2024-11-16', 5, 'asdfghjklijnmyghbedx', '2024-11-11 02:30:30', 'Confirmed'),
(19, 'Nifla Nif', '2024-11-21', '2024-11-22', 2, 'asdfghjnmk,l', '2024-11-20 16:18:51', 'Rejected'),
(20, 'ysf yoosuf', '2024-11-18', '2024-11-21', 4, 'asdfghjkl', '2024-11-20 20:58:45', 'Rejected'),
(21, 'Nifla Nif', '2024-11-21', '2024-11-22', 2, 'asdfghjk', '2024-11-20 18:06:19', 'Rejected'),
(22, 'Nifla Nif', '2024-11-21', '2024-11-22', 2, 'asdfghjkl', '2024-11-21 04:54:03', 'Rejected'),
(23, 'Nifla Nif', '2024-11-22', '2024-11-24', 3, 'asdfghjkl', '2024-11-21 04:56:32', 'Confirmed'),
(24, 'Nifla Nif', '2024-11-21', '2024-11-23', 3, 'asdfghjkl', '2024-11-21 04:58:43', 'Confirmed'),
(25, 'Nifla Nif', '2024-12-10', '2024-12-12', 3, 'rzhxtfcyhgvhn ', '2024-12-09 03:21:06', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id` int(11) NOT NULL,
  `Employee` varchar(200) NOT NULL,
  `OverTime_Date` date NOT NULL,
  `Hours` varchar(20) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`id`, `Employee`, `OverTime_Date`, `Hours`, `Type`, `Description`, `dateTime`) VALUES
(1, 'Mushe Abdul-Hakim', '2020-09-29', '5', '	Normal ex.5', 'This extra minutes are spent on trying to improve my knowledge on Accounting everyday.', '2020-09-29 00:38:26'),
(2, 'Goerge Merchason', '2020-09-29', '5', '	Normal ex.5', 'This was just to help the ceo with his presentation prep for tomorrow\'s big event.', '2020-09-29 09:20:37'),
(3, 'Yahuza Abdul-Hakim', '2020-09-10', '3', 'Normal ex.5', 'This is another test of the overtime of employees', '2020-09-29 09:28:59'),
(4, 'Nifla Nif', '2024-11-10', '5', 'asdfghjkl', 'asdfghjkl;', '2024-11-09 06:48:28'),
(5, 'Nifla Nif', '2024-11-08', '6', 'asdfghjkl', 'asdfghjkl', '2024-11-09 07:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `basic_salary` decimal(10,2) NOT NULL,
  `total_leave_days` int(11) NOT NULL DEFAULT 0,
  `adjusted_salary` decimal(10,2) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `Phone`, `Address`, `Picture`, `dateTime`) VALUES
(6, 'Nifla', 'Nif', 'Nifla', 'Nifla123@gmail.com', '$2y$10$zb2ibzzBKJHQaMeMoMZqTuRxERFAZl0LZUya8yJkxKa8JM6yzQEXy', '9876543210', 'Kurunegala, Sri lanka', 'Fathi.jpg', '2024-09-21 19:04:47'),
(7, 'Nuzkiya', 'Nuzkiya', 'Nuzkiya', 'fathima123@gmail.com', '$2y$10$f3acNJ/slpOfQvZy.u6OfOM6GOLTTjz3IYUIbMMQuixXjmgeRQ0Ga', '233209229025', 'Kandy, Sri lanka', 'nif.jpg', '2024-09-21 19:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`, `date`) VALUES
(1, 'admin\r\n', '2020-09-21'),
(2, 'employee', '2020-09-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `assetId` (`assetId`),
  ADD UNIQUE KEY `assetId_2` (`assetId`),
  ADD UNIQUE KEY `assetId_3` (`assetId`),
  ADD UNIQUE KEY `assetId_4` (`assetId`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ClientId` (`ClientId`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Department` (`Department`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Employee_Id` (`Employee_Id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goal_type`
--
ALTER TABLE `goal_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Type` (`Type`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `goal_type`
--
ALTER TABLE `goal_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
