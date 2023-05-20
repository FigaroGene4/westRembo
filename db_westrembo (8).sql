-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 03:08 PM
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
-- Database: `db_westrembo`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dept` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `email`, `password`, `name`, `dept`) VALUES
(1, 'markgenesis37@gmail.com', 'Qweqwe11', 'Mark Genesis', 'su'),
(2, 'jorj@yahoo.com', 'qweqwe', 'Jorj', ''),
(3, 'jewel@yahoo.com', 'qweqwe', 'Jewel', ''),
(4, 'test@email.com', 'qweqwe', 'Test', ''),
(5, 'cherry@yahoo.com', 'qweqwe', 'Cherry', ''),
(6, 'ed@yahoo.com', 'Qweqwe', 'Ed', ''),
(7, 'kathm@yahoo.com', 'Qweqwe11', 'Kathlyn Mangoba', ''),
(8, 'westremboSU@app.com', 'Qweqwe11', 'AdminSuperUser', 'su'),
(9, 'jerryjorj', 'Qweqwe11', 'Jerry Jorj', 'Residential Department'),
(10, 'testuser@spad2go.com', 'Qweqwe11', 'test', 'Residential Department'),
(11, 'kathmm@yahoo.com', 'Qweqwe11', 'kath', 'Residential Department');

-- --------------------------------------------------------

--
-- Table structure for table `table_blog`
--

CREATE TABLE `table_blog` (
  `id` int(7) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_blog`
--

INSERT INTO `table_blog` (`id`, `title`, `name`, `date`, `content`, `img`, `category`) VALUES
(6, 'Libreng Bakuna sa Aso at Pusa ', '', '2022-11-26', 'Sa December 1, 2022, 9am hanggang 3pm ay magsasagawa ng \"FREE BAKSIN\" program ang My Makati Clout Chaser Inc. Dalhin ang inyong mga alagang aso at pusa na may collar at cage.&nbsp;', '1669476575wew.jpg', 'Health'),
(7, 'Libreng Tuli sa mga residente ng West Rembo', '', '2022-11-27', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui</i></span><div><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></div><div><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></div><div><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><i></i>dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span></div><div><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></div><div><span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\"><font face=\"courier new\"><br></font></span></div><div><span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\"><font face=\"courier new\"><br></font></span></div><div><span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\"><font face=\"courier new\">&nbsp;Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu</font></span><br></div>', '166953909055555555555.jpg', 'Health'),
(8, 'Test', '', '2023-01-07', '<b>TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest</b><div><b><br></b></div><div><i>TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest</i><b><br></b></div><div>TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest<span style=\"font-size: 1rem;\">TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest</span><span style=\"font-size: 1rem;\">TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest</span><span style=\"font-size: 1rem;\">TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest</span><span style=\"font-size: 1rem;\">TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest</span><span style=\"font-size: 1rem;\">TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest</span><span style=\"font-size: 1rem;\">TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest</span><i><br></i></div>', '167307585510498720_10154315535755249_1276011042367415773_o.jpg', 'General Information'),
(9, 'Test Page', '', '2023-01-11', 'This is a test post', '1673428599320522498_1826215814395936_471477525599497613_n.jpg', 'Emergency'),
(10, 'Test', '', '2023-01-11', 'Test', '1673429565mymakati.png', 'General Information');

-- --------------------------------------------------------

--
-- Table structure for table `table_documentrequest`
--

CREATE TABLE `table_documentrequest` (
  `id` int(11) NOT NULL,
  `transactionNumber` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reason` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `dateSchedule` date DEFAULT NULL,
  `referenceNumber` int(13) NOT NULL,
  `birthplace` varchar(55) NOT NULL,
  `period` varchar(55) NOT NULL,
  `voter` varchar(55) NOT NULL,
  `owner` varchar(55) NOT NULL,
  `relation` varchar(55) NOT NULL,
  `datePaymentAccepted` date NOT NULL,
  `dateOfSched` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_documentrequest`
--

INSERT INTO `table_documentrequest` (`id`, `transactionNumber`, `firstName`, `lastName`, `email`, `date`, `time`, `reason`, `price`, `category`, `status`, `dateSchedule`, `referenceNumber`, `birthplace`, `period`, `voter`, `owner`, `relation`, `datePaymentAccepted`, `dateOfSched`) VALUES
(134, 'DOC52574999', 'MARK GENESIS', 'DUMAYAS', 'markgenesis3231@gmail.com', '2022-12-06', '00:00:00', 'test', 0, 'Baranggay ID', 'For Approval', NULL, 0, '', '', '', '', '', '0000-00-00', '0000-00-00'),
(139, 'DOC98571025', 'Jerry', 'Feline', 'jerryfeline123321@yahoo.com', '2023-01-06', '00:00:00', 'wla lng trip lng', 100, 'Baranggay Clearance', 'Payment Approved', NULL, 2147483647, 'Pembo Lying In Clinic', '1 year', 'Yes', 'Robert Downey ', 'Idol', '0000-00-00', '0000-00-00'),
(141, 'DOC10299535', 'Jerry', 'Feline', 'jerryfeline123321@yahoo.com', '2023-01-07', '00:00:00', 'test', 200, 'Baranggay ID', 'Payment Approved', NULL, 2147483647, 'test', 'test', 'Yes', 'test', 'test', '0000-00-00', '0000-00-00'),
(145, 'DOC54535151', 'Mark Genesis', 'Dumayas', 'mark.dumayas@hartehanks.com', '2023-01-08', '00:00:00', 'Test', 200, 'Baranggay ID', 'Payment Approved', NULL, 2138192831, 'Pembo Makat City', '20 years', 'Yes', 'Irene Dumayas', 'Grandmother', '0000-00-00', '0000-00-00'),
(146, 'DOC56101985', 'Mark Genesis', 'Dumayas', 'mark.dumayas@hartehanks.com', '2023-01-08', '00:00:00', 'test', 200, 'Baranggay Clearance', 'Payment Approved', NULL, 12312321, 'test', 'test', 'Yes', 'test', 'test', '2023-01-08', '0000-00-00'),
(147, 'DOC54525410', 'test', 'test', 'testtest@yahoo.com', '2023-01-08', '00:00:00', 'test', 200, 'Baranggay ID', 'Payment Approved', NULL, 2147483647, 'test', 'test', 'Yes', 'test', 'test', '2023-01-08', '2023-01-10'),
(148, 'DOC56509810', 'Mark Genesis', 'Dumayas', 'markgenesis37@gmail.com', '2023-01-08', '00:00:00', 'for my job application requirements', 200, 'Baranggay ID', 'Payment Approved', NULL, 2147483647, 'Pembo Makat City', '10 years', 'Yes', 'Irene Dumayas', 'Grandmother', '2023-01-08', '2023-01-10'),
(149, 'DOC55575655', 'Mark Genesis', 'Dumayas', 'markgenesis37@gmail.com', '2023-01-08', '00:00:00', 'test', 200, 'Baranggay Clearance', 'Payment Approved', NULL, 111111111, 'test', 'test', 'Yes', 'tset', 'tset', '2023-01-08', '2023-01-10'),
(150, 'DOC10156999', 'Mark Genesis', 'Dumayas', 'markgenesis37@gmail.com', '2023-01-08', '00:00:00', 'test', 0, 'Business Permit', 'For Approval', NULL, 0, 'test', 'test', 'Yes', 'test', 'test', '0000-00-00', '0000-00-00'),
(154, 'DOC56514810', 'Mark Genesis', 'Dumayas', 'mdumayas.k11721510@umak.edu.ph', '2023-01-11', '00:00:00', 'for my job application', 200, 'Baranggay ID', 'Payment Approved', NULL, 2147483647, 'Pembo Makati City', '10 years', 'Yes', 'Irene Dumayas', 'Grandmother', '2023-01-11', '2023-01-13'),
(155, 'DOC10150485', 'Mark Genesis', 'Dumayas', 'mdumayas.k11721510@umak.edu.ph', '2023-01-11', '00:00:00', 'for school requirement', 300, 'Baranggay Clearance', 'Payment Approved', NULL, 2147483647, 'Pembo Makat City', '10 years', 'Yes', 'Irene Dumayas', 'Grandmother', '2023-01-11', '2023-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `table_payment`
--

CREATE TABLE `table_payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `referenceNumber` varchar(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_payment`
--

INSERT INTO `table_payment` (`id`, `name`, `email`, `referenceNumber`, `amount`, `date`, `status`) VALUES
(1, 'Mark Genesis', 'markgenesis37@gmail.com', '1', 250, '2022-11-12 17:04:28', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `table_pricing`
--

CREATE TABLE `table_pricing` (
  `id` int(11) NOT NULL,
  `baranggayId` int(4) NOT NULL,
  `baranggayClearance` int(4) NOT NULL,
  `businessPermit` int(4) NOT NULL,
  `buildingPermit` int(4) NOT NULL,
  `percentDownpayment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_pricing`
--

INSERT INTO `table_pricing` (`id`, `baranggayId`, `baranggayClearance`, `businessPermit`, `buildingPermit`, `percentDownpayment`) VALUES
(1, 200, 300, 500, 200, 100);

-- --------------------------------------------------------

--
-- Table structure for table `table_residents`
--

CREATE TABLE `table_residents` (
  `id` int(8) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `houseNumber` varchar(50) NOT NULL,
  `streetNumber` varchar(50) NOT NULL,
  `sitio` varchar(50) NOT NULL,
  `contactNumber` bigint(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `code` int(8) NOT NULL,
  `dateRegistered` date NOT NULL,
  `image` varchar(500) NOT NULL,
  `requests` int(50) NOT NULL,
  `validationT` varchar(500) NOT NULL,
  `imageValidaton` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_residents`
--

INSERT INTO `table_residents` (`id`, `firstName`, `lastName`, `email`, `birthdate`, `gender`, `password`, `houseNumber`, `streetNumber`, `sitio`, `contactNumber`, `status`, `code`, `dateRegistered`, `image`, `requests`, `validationT`, `imageValidaton`) VALUES
(26, 'Jewel', 'Dumayas', 'jewelmae@yahoo.com', '1212-12-12', 'Female', '$2y$10$mrRQYDC09Fr/nRCoMUKskuyHvjwtbhPyZbpzyEgGeGdI4DdrfPRcq', 'Blk 22 Lot 21', 'Phase 2', '2', 2147483647, 'verified', 0, '0000-00-00', '1668477291login_img.png', 0, 'verified', '1668477337login_img.png'),
(27, 'Carlo', 'Cambel', 'carlocambel@yahoo.com', '1212-12-12', 'Male', '$2y$10$sdr2QjUM27SWzyO.eXPbReC0j0EErQ.wQGq7vwz5gMnbudQA1h9Oe', '16th Jorj Town', 'Manggahan', '3', 2147483647, 'verified', 0, '0000-00-00', '166848041641646332_gUASYrbAplN6UqZcVXOfINKI2UFxdzpqk0NlCabU3yo.jpg', 0, 'verified', '166848046741646332_gUASYrbAplN6UqZcVXOfINKI2UFxdzpqk0NlCabU3yo.jpg'),
(28, 'Kathlyn ', 'Mangoba', 'kathm@yahoo.com', '1212-12-12', 'Male', '$2y$10$S6dnhED9uGPJ5ZFghvyDguNjeBf4ydacgK4N/zW/uvCKKO8P8Uq16', '16th Jorj Town', 'Manggahan', '2', 2147483647, 'verified', 0, '0000-00-00', '1668481036westrembosignage.jpg', 0, 'verified', '1668481115westrembosignage.jpg'),
(29, 'Test', 'Test', 'test@yahoo.com', '1212-12-12', 'Male', '$2y$10$iTEbxnLXxSZ2pRg0U.tto.NVoaFThETiDLraCJdxpwCD6.ZomzWw2', '16th Jorj Town', 'Qwe', '2', 2147483647, 'verified', 0, '0000-00-00', '1668482225westrembosignage.jpg', 0, 'verified', '1668482451westrembosignage.jpg'),
(36, 'Jog', 'orj', 'markgenesis27@gmail.com', '1999-12-01', 'Male', '$2y$10$KPyOGyeDbT5C4PGeLZpmHe77eDTW/Zk5prQ6Wl8x/Vdn0x1xHN4FW', '16th Jorj Town', 'Manggahan', '9', 2147483647, 'verified', 0, '0000-00-00', '1669612065Dumayas,MarkGenesis III-APDEV 2021-2022.jpg', 0, 'verified', '1669612224How-to-get-a-TIN-ID-in-the-Philippines.jpeg'),
(37, 'MARK GENESIS', 'DUMAYAS', 'markgenesis3s@gmail.com', '1999-12-01', 'Female', '$2y$10$uRv8ZrsI9nl2Y86u1JpeQOiuq8AFCjKuNo1QtyIHw5KdWcaOl/mj.', '16th Jorj Town', 'Manggahan', '12', 2147483647, 'notverified', 470388, '0000-00-00', '1670306728sor.jpg', 0, 'pending', ''),
(39, 'Jerry', 'Feline', 'jerryfeline123321@yahoo.com', '1923-12-01', 'Male', '$2y$10$nO576TMJf6TjEAZg9aitlO57e2qgibExugJ9i9jmJgS4k8TmAhlo2', '43B 12L', 'Gubat', '5', 2147483647, 'verified', 0, '0000-00-00', '1673030097Cla.jpg', 0, 'verified', ''),
(44, 'Mark Genesis', 'Dumayas', 'mark.dumayas@hartehanks.com', '1999-12-01', 'Male', '$2y$10$VGh2Ns7TrVqFolgfFTxUI.5ZNadjq0HZZmR2wXmRHqTRWQtCuXQfy', '16th Avenue', 'Manggahan', '5', 2147483647, 'verified', 0, '0000-00-00', '1673160632IMG_20220322_042224.jpg', 0, 'verified', '1673160675Employee-id-48-CRC.jpg'),
(49, 'Mark Genesis', 'Dumayas', 'qweqweqwe@y3232.com', '1211-12-12', 'Please Select a Gender', '$2y$10$FOJaeowZZY4DMnarhMiA2OtaAehTNC62eTXgFz9iMk9aLfeSdoZkC', '16th Avenue', 'Manggahan', '12', 2147483647, 'notverified', 568250, '2023-01-08', '1673191559testIdPic2.jpg', 0, 'pending', ''),
(53, 'Mark Genesis', 'Dumayas', 'markgenesis37@gmail.com', '0012-12-12', 'Male', '$2y$10$3ty75XmmGdycoLV9iwX2vu6kQS73lmtZzWqk5x56NP9ekBgcktPXi', '16th Avenue', 'Manggahan', '12', 2147483647, 'verified', 0, '2023-01-08', '1673192473testIdPic.jpg', 0, 'verified', '1673192498NBI Clearance.jpg'),
(55, 'yer', 'eryeryer', 'erye544ryer@yahoo.com', '1212-12-12', 'Male', '$2y$10$M3dhewzRQteou3TVbLcbzetukK2dE.pjLt9d1jbs1lCITEmDHhgPe', '16th Avenue', 'Manggahan', '12', 93989522931, 'notverified', 288596, '2023-01-08', '1673195591testIdPic2.jpg', 0, 'pending', ''),
(56, 'qweqwe', 'qweqweq', 'eqweqwewqeasdasdas2312@yahoo.com', '1212-12-12', 'Male', '$2y$10$WZCioQS7WJzZtBCtmmFVIOVU.8K0KnS.L4rJAH6Vye1tzA3ax9YZm', '16th Avenue', '16th', '12', 9192257291, 'notverified', 854284, '2023-01-08', '1673195687testIdPic.jpg', 0, 'pending', ''),
(57, 'qweqweqweqw', 'ewqewqeqw', 'qweqwewqewqasdas0932049@yahoo.com', '1212-12-12', 'Female', '$2y$10$LCGAvQ.0aQ4pI/NboBMGbuNMclemJHgrxoA6U6quAPjMZ/wujLOnS', 'qw', 'qw', '33', 3910293091, 'notverified', 233760, '2023-01-08', '1673205344testIdPic2.jpg', 0, 'pending', ''),
(58, 'test', 'test', 'testing@yahoo.com', NULL, '', 'Qweqwe11\r\n', '', '', '', 0, '', 0, '0000-00-00', '', 0, '', ''),
(61, 'Mark Genesis', 'Dumayas', 'mdumayas.k11721510@umak.edu.ph', '1999-12-01', 'Please Select a Gender', '$2y$10$oOsdkEr6an.zwXxl6YD4GOOQ02Phgdceb8Byn.Ot9kAqYQ3Sa5YvK', '16th Avenue', 'Manggahan', '5', 9189898238, 'verified', 0, '2023-01-11', '1673429193testIdPic.jpg', 0, 'verified', '1673429245NBI Clearance.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_transactions`
--

CREATE TABLE `table_transactions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `typeOfTransaction` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL,
  `payment` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_transactions`
--

INSERT INTO `table_transactions` (`id`, `name`, `email`, `typeOfTransaction`, `status`, `payment`) VALUES
(1, 'Genesis', 'markgenesis37@gmail.com', 'Barangay Clearance', 'complete', 'paid'),
(2, 'Jorj', 'jorj@gmail..com', 'Baranggay Business Permit', 'complete', 'paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_blog`
--
ALTER TABLE `table_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_documentrequest`
--
ALTER TABLE `table_documentrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_payment`
--
ALTER TABLE `table_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_pricing`
--
ALTER TABLE `table_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_residents`
--
ALTER TABLE `table_residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_transactions`
--
ALTER TABLE `table_transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_blog`
--
ALTER TABLE `table_blog`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table_documentrequest`
--
ALTER TABLE `table_documentrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `table_payment`
--
ALTER TABLE `table_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_pricing`
--
ALTER TABLE `table_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_residents`
--
ALTER TABLE `table_residents`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `table_transactions`
--
ALTER TABLE `table_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
