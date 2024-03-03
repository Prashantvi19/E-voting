-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 03:36 PM
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
-- Database: `online_voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(10) NOT NULL,
  `active_id` varchar(255) NOT NULL,
  `active_org_id` varchar(255) NOT NULL,
  `official_name` varchar(255) NOT NULL,
  `famous_name` varchar(255) NOT NULL,
  `address_publish_photo` varchar(255) NOT NULL,
  `party` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `doc_type_party_or_id_proof` varchar(255) NOT NULL,
  `address_party_or_id_proof` varchar(255) NOT NULL,
  `address_motive_latter` varchar(255) NOT NULL,
  `address_poster` varchar(255) NOT NULL,
  `address_logo` varchar(255) NOT NULL,
  `address_speech_video` varchar(255) NOT NULL,
  `address_appeal` varchar(255) NOT NULL,
  `accepted_by_ID` varchar(255) NOT NULL DEFAULT 'notAccept' COMMENT 'notAccept- not accepted request, org admin id -accepted request',
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `active_id`, `active_org_id`, `official_name`, `famous_name`, `address_publish_photo`, `party`, `post`, `slogan`, `doc_type_party_or_id_proof`, `address_party_or_id_proof`, `address_motive_latter`, `address_poster`, `address_logo`, `address_speech_video`, `address_appeal`, `accepted_by_ID`, `created_at`, `updated_at`) VALUES
(18, '31', '42', 'ADARSH SHARMA', '(BUGGU)', '../user/static/img/1708612318messages-1.jpg', 'kkb', 'mla', 'TUM VOTE DO HAM 5 YEAR TUMKO BS ASHWASAN DEGE ', 'xyz', '../user/static/img/17086123182.png', '../user/static/img/17086123185.png', '../user/static/img/17086123181702625265.jpg', '../user/static/img/1708612318about-icon-1.png', '../user/static/img/17086123181702635741.jpg', 'HELLO EVERYONE', 'IST7890', '2024-02-22', NULL),
(19, '32', '42', 'Prashant vishwakarma', 'KUMAR', '../user/static/img/1708613502messages-3.jpg', 'kkb', 'mla', 'AAP HAME CHOONO HAM HAMRA KARTAVYA PURINISTHA SE NIBHAYEGE', 'xyz', '../user/static/img/17086135022.png', '../user/static/img/17086135024.png', '../user/static/img/17086135021.png', '../user/static/img/1708613502apple-touch-icon.png', '../user/static/img/1708613502blog-3.jpg', 'NAMSTE BHARAT BASHIYO ', 'IST7890', '2024-02-22', NULL),
(20, '33', '42', 'AISH', 'AISHWARYA', '../user/static/img/1708613957messages-2.jpg', 'kkb', 'mla', 'MERA TO EK HI PANDHA YUWAO KO MILEGA ROJGAR AUR APNA KHUDKA NIJI KAMAYI JIYEGA HAR BANDA', 'xyz', '../user/static/img/17086139574.png', '../user/static/img/17086139571702625907.jpg', '../user/static/img/17086139571702625907.jpg', '../user/static/img/1708613957com logo.jpg', '../user/static/img/1708613957carousel-1.jpg', 'MAIN APKA APNA AISH', 'IST7890', '2024-02-22', NULL),
(21, '37', '43', 'ABHISHEK', 'ABHI', '../user/static/img/1708621366profile-img.jpg', 'zxzxzx', 'zXXx', 'AAP KI VOTE HAMARI SOCH DONO LABHARTHI HOGI', 'ZxZXx', '../user/static/img/17086213662.png', '../user/static/img/17086213661702625265.jpg', '../user/static/img/1708621366funfact-icon-1.png', '../user/static/img/1708621366logo (2).png', '../user/static/img/1708621366news-3.jpg', 'AAP HAME HI CHOONE', 'OND4321', '2024-02-22', NULL),
(22, '38', '43', 'ASHISH BHAIYA', 'NETA BHAIYA', '../user/static/img/1708621719team-2.jpg', 'zxzxzx', 'zXXx', 'JO HAMNE NHI KIYA VO KISI SE NHI HOGA', 'ZxZXx', '../user/static/img/1708621719blog-1.jpg', '../user/static/img/17086217191702625265.jpg', '../user/static/img/1708621719blog-1.jpg', '../user/static/img/1708621719funfact-icon-2.png', '../user/static/img/1708621719carousel-2.jpg', 'AAP EK VOTE AUR HAM AAP KE SEVA ME HAJIR', 'OND4321', '2024-02-22', NULL),
(23, '39', '43', 'ANURAG', 'ANU BHAIYA', '../user/static/img/1708622147testimonial-3.jpg', 'zxzxzx', 'zXXx', 'EK EK VOTE KA KARJ CHUKAKE DAM LUGA', 'ZxZXx', '../user/static/img/17086221471702635741.jpg', '../user/static/img/17086221475.png', '../user/static/img/1708622147funfact-icon-3.png', '../user/static/img/1708622147vendor-3.jpg', '../user/static/img/1708622147logo (2).png', 'MERI JANTA MERA SATH DO ', 'OND4321', '2024-02-22', NULL),
(24, '43', '44', 'AISHWARYA', 'AISH Bhai', '../user/static/img/1708699063apple-touch-icon.png', 'aadhaar', '3213', 'AAP HAME CHOONO HAM HAMRA KARTAVYA PURINISTHA SE NIBHAYEGE', '123213', '../user/static/img/1708699063about.jpg', '../user/static/img/1708699063about.jpg', '../user/static/img/1708699063about.jpg', '../user/static/img/17086990631702384390.png', '../user/static/img/17086990631702384390.png', 'dfasdadasfdafadf', 'IRD4321', '2024-02-23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `active_id` varchar(255) NOT NULL,
  `user_belong` varchar(40) NOT NULL,
  `user_type` int(10) NOT NULL DEFAULT 2 COMMENT '1- for org_user, 2- for ovs admin',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `active_id`, `user_belong`, `user_type`, `name`, `email`, `subject`, `messages`, `date`) VALUES
(34, 'IRD4321', '44', 2, 'Prashant vishwakarma', 'orgthird1@gmail.om', 'HELLO', 'IT IA WORKING', '2024-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `active_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ovs_admin_id` varchar(15) DEFAULT NULL COMMENT 'id reply by admin',
  `reply` text DEFAULT NULL COMMENT 'reply message',
  `rating` varchar(255) NOT NULL,
  `address_feedback` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `reply_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `active_id`, `name`, `email`, `ovs_admin_id`, `reply`, `rating`, `address_feedback`, `date`, `reply_date`) VALUES
(22, 'IRD4321', 'Prashant vishwakarma', 'prashant@gmail.com', NULL, NULL, '5', 'AWESOME PROJECT', '2024-02-23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `id` int(11) NOT NULL,
  `user_belong` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT 'Super User',
  `unic_id` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 1 COMMENT '0-OVS Admin, \r\n1-Org User,   \r\n2-Org Admin,\r\n3-org Sub-Admin',
  `password` varchar(255) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0 COMMENT '0-Request not accepted yet, 1-Active ID, 2-Block user, 3-Suspended user, 4-Service Stoped fro user. 5-ID Resticate(Block for ferther registation only for admin \r\n option)',
  `created_at` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`id`, `user_belong`, `user_id`, `unic_id`, `email`, `contact_number`, `user_type`, `password`, `user_status`, `created_at`, `updated_at`) VALUES
(19, '1', 'Super User', 'ovs4115', 'ovsadmin@ovs.com', '6264184115', 0, '1234', 1, '2024-02-08 12:33:52', NULL),
(64, '42', 'Org Super User', 'IST7890', 'orgsfirst@ovs.com', '1234567890', 2, '1234', 1, '2024-02-22 16:19:48', NULL),
(65, '43', 'Org Super User', 'OND4321', 'orgsecond@gmail.com', '0987654321', 2, '1234', 1, '2024-02-22 16:20:49', NULL),
(66, '44', 'Org Super User', 'IRD4321', 'orgthird@gmail.com', '1234554321', 2, '1234', 1, '2024-02-22 16:34:01', NULL),
(67, '42', '32', 'ANT42HANT', 'orgfirst1@gmail.com', '1234512345', 1, '1234', 1, '2024-02-22 18:58:04', NULL),
(68, '42', '31', 'RSH42ARSH', 'orgfirst2@gmail.com', '1234552341', 1, '1234', 1, '2024-02-22 19:00:10', NULL),
(69, '42', '33', 'ISH42AISH', 'orgfirst3@gmail.com', '1234514325', 1, '1234', 1, '2024-02-22 19:01:14', NULL),
(70, '42', '34', 'RAJ42VRAJ', 'orgfirst4@gmail.com', '1234554321', 1, '1234', 1, '2024-02-22 19:02:46', NULL),
(71, '42', '35', 'HAM42BHAM', 'orgfirst5@gmail.com', '1234554231', 1, '1234', 1, '2024-02-22 19:04:26', NULL),
(72, '42', '36', 'EEN42VEEN', 'orgfirst6@gmail.com', '1234543215', 1, '1234', 1, '2024-02-22 19:05:31', NULL),
(73, '43', '37', 'HEK43SHEK', 'orsecond1@gmail.com', '1234512345', 1, '1234', 1, '2024-02-22 19:06:39', NULL),
(75, '43', '38', 'ISH43HISH', 'orsecond2@gmail.com', '5234112345', 1, '1234', 1, '2024-02-22 19:11:43', NULL),
(76, '43', '39', 'RAG43URAG', 'orsecond3@gmail.com', '5432112345', 1, '1234', 1, '2024-02-22 19:13:44', NULL),
(77, '43', '40', 'ASH43YASH', 'orsecond4@gmail.com', '5431212345', 1, '1234', 1, '2024-02-22 19:16:31', NULL),
(78, '43', '41', 'IND43VIND', 'orsecond5@gmail.com', '5342112345', 1, '1234', 1, '2024-02-22 19:17:48', NULL),
(79, '43', '42', 'DAL43ADAL', 'orsecond6@gmail.com', '5243112345', 1, '1234', 1, '2024-02-22 19:19:48', NULL),
(81, '11', 'Super User', 'mins412211', 'ovsadmin2@ovs.com', '5544332211', 0, '1234', 1, '2024-02-23 17:24:01', NULL),
(83, '44', '44', 'ANT44WANT', 'orgthird1@gmail.com', '12343211234', 1, '1234', 1, '2024-02-23 17:36:00', NULL),
(90, '50', 'Org Super User', 'org7678', 'demo@email.com', '12345677678', 2, '12345678', 1, '2024-02-25 22:08:10', NULL),
(91, '50', '48', 'mov50emov', 'demov@email.com', '12323132132', 1, '12345678', 1, '2024-02-25 22:11:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `org_admin`
--

CREATE TABLE `org_admin` (
  `id` int(10) NOT NULL,
  `ovs_accepted_by_id` varchar(60) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `unic_id` varchar(20) DEFAULT NULL,
  `user_status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `org_admin`
--

INSERT INTO `org_admin` (`id`, `ovs_accepted_by_id`, `org_name`, `email`, `mobile_number`, `password`, `unic_id`, `user_status`) VALUES
(42, 'ovs4115', 'ORG_FRIST', 'orgsfirst@ovs.com', '1234567890', '1234', 'IST7890', 1),
(43, 'ovs4115', 'ORG_SECOND', 'orgsecond@gmail.com', '0987654321', '1234', 'OND4321', 1),
(44, 'ovs4115', 'ORG_THIRD', 'orgthird@gmail.com', '1234554321', '1234', 'IRD4321', 1),
(50, 'ovs4115', 'demo_org', 'demo@email.com', '12345677678', '12345678', 'org7678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `org_participate`
--

CREATE TABLE `org_participate` (
  `id` int(11) NOT NULL,
  `user_belong` varchar(255) NOT NULL,
  `unic_id` varchar(10) DEFAULT NULL,
  `org_email_id` varchar(255) NOT NULL,
  `org_mobile_number` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_by_voter` varchar(255) NOT NULL COMMENT 'its renew email id for yhe user choice',
  `mobile_number_by_voter` varchar(255) NOT NULL COMMENT 'its renew mobile number\r\n for yhe user choice',
  `Voter_application_status` varchar(255) NOT NULL DEFAULT 'noSingup' COMMENT 'notAccept-does not fill, 1 - remainning requested-requesting pending org admin ID, noSingup\r\ndidn''t create/login',
  `password` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `org_participate`
--

INSERT INTO `org_participate` (`id`, `user_belong`, `unic_id`, `org_email_id`, `org_mobile_number`, `first_name`, `middle_name`, `last_name`, `email_by_voter`, `mobile_number_by_voter`, `Voter_application_status`, `password`, `created_at`, `updated_at`) VALUES
(4, '44', 'ANT44WANT', 'orgthird1@gmail.com', '1121234567', 'YASHWANT', 'KUMAR', 'PATEL', 'orgthird1@gmail.com', '12343211234', 'IRD4321', '1234', '2024-02-23', NULL),
(31, '42', 'RSH42ARSH', 'orgfirst2@gmail.com', '1234552341', 'ADARSH', 'KUMAR', 'SHARMA', 'orgfirst2@gmail.coma', '1234552341', 'IST7890', '1234', '2024-02-22', NULL),
(32, '42', 'ANT42HANT', 'orgfirst1@gmail.com', '1234512345', 'PRASHANT', 'KUMAR', ' VISHWKARMA', 'orgfirst1@gmail.com', '1234512345', 'IST7890', '1234', '2024-02-22', NULL),
(33, '42', 'ISH42AISH', 'orgfirst3@gmail.com', '1234514325', 'AISH', 'KUMAR', 'SHARMA', 'orgfirst3@gmail.com', '1234514325', 'IST7890', '1234', '2024-02-22', NULL),
(34, '42', 'RAJ42VRAJ', 'orgfirst4@gmail.com', '1234554321', 'YUVRAJ', 'KUMAR', 'NAGAR', 'orgfirst4@gmail.com', '1234554321', 'IST7890', '1234', '2024-02-22', NULL),
(35, '42', 'HAM42BHAM', 'orgfirst5@gmail.com', '1234554231', 'SHUBHAM', 'KUMAR', 'PATEL', 'orgfirst5@gmail.com', '1234554231', 'IST7890', '1234', '2024-02-22', NULL),
(36, '42', 'EEN42VEEN', 'orgfirst6@gmail.com', '1234543215', 'PRAVEEN', 'KUMAR', 'PATIDAR', 'orgfirst6@gmail.com', '1234543215', 'notAccept', '1234', '2024-02-22', NULL),
(37, '43', 'HEK43SHEK', 'orsecond1@gmail.com', '1234512345', 'ABHISHEK', 'KUMAR', 'PATIL', 'orsecond1@gmail.com', '1234512345', 'OND4321', '1234', '2024-02-22', NULL),
(38, '43', 'ISH43HISH', 'orsecond2@gmail.com', '5234112345', 'ASHISH', 'KUMAR', 'PATEL', 'orsecond2@gmail.com', '5234112345', 'OND4321', '1234', '2024-02-22', NULL),
(39, '43', 'RAG43URAG', 'orsecond3@gmail.com', '5432112345', 'ANURAG', 'KUMAR', 'SHARMA', 'orsecond3@gmail.com', '5432112345', 'OND4321', '1234', '2024-02-22', NULL),
(40, '43', 'ASH43YASH', 'orsecond4@gmail.com', '5431212345', 'YASH', 'KUMAR', 'PATHAK', 'orsecond4@gmail.com', '5431212345', 'OND4321', '1234', '2024-02-22', NULL),
(41, '43', 'IND43VIND', 'orsecond5@gmail.com', '5342112345', 'GOVIND', 'KUMAR', 'NAGAR', 'orsecond5@gmail.com', '5342112345', 'OND4321', '1234', '2024-02-22', NULL),
(42, '43', 'DAL43ADAL', 'orsecond6@gmail.com', '5243112345', 'BADAL', 'KUMAR', 'RAGHUVANSHI', 'orsecond6@gmail.com', '5243112345', 'notAccept', '1234', '2024-02-22', NULL),
(47, '49', 'mov49emov', 'demov@email.com', '32134121234', 'demov', 'user', 'demo', 'demov@email.com', '1232313213', 'notAccept', '12345678', '2024-02-25', NULL),
(48, '50', 'mov50emov', 'demov@email.com', '32134121234', 'demov', 'user', 'demo', 'demov@email.com', '12323132132', 'notAccept', '12345678', '2024-02-25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `org_participate_voter`
--

CREATE TABLE `org_participate_voter` (
  `id` int(10) NOT NULL,
  `active_org_id` varchar(255) NOT NULL,
  `voter_id` varchar(255) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `middle_name` varchar(40) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `mobile_number` text NOT NULL,
  `email` text NOT NULL,
  `profile_photo` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `tahsil` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `type_address_proof` varchar(255) NOT NULL,
  `doc_address_proof` varchar(255) NOT NULL,
  `type_id_proof` varchar(255) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `literate_status` varchar(255) NOT NULL DEFAULT 'Literate',
  `accepted_by_ID` varchar(40) NOT NULL DEFAULT 'notAccept' COMMENT '0-Request not accepted yet, \r\nadmin org ID - accepted\r\n\r\n1-Active ID, 2-Block user, 3-Suspended user, 4-Service Stoped fro user. 5-ID Resticate(Block for ferther registation only for admin \r\n option)',
  `vote_status` int(10) NOT NULL DEFAULT 0 COMMENT '0-vote is remaing, 1 is voted',
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `org_participate_voter`
--

INSERT INTO `org_participate_voter` (`id`, `active_org_id`, `voter_id`, `first_name`, `middle_name`, `last_name`, `dob`, `mobile_number`, `email`, `profile_photo`, `gender`, `country`, `state`, `district`, `tahsil`, `city`, `pin_code`, `type_address_proof`, `doc_address_proof`, `type_id_proof`, `id_proof`, `literate_status`, `accepted_by_ID`, `vote_status`, `create_at`, `updated_at`) VALUES
(237, '42', '31', 'ADARSH', 'KUMAR', ' SHARMA', '1222-12-12', '1234552341', 'orgfirst2@gmail.coma', '../user/static/img/1708612542messages-1.jpg', 'MALE', 'SADSA', 'ASDAS', 'ASDA', 'ASD', 'ASD', '12345', 'aadhaar ', '../user/static/img/17086125421702625265.jpg', 'aadhar', '../user/static/img/17086125425.png', 'Untutored', 'IST7890', 0, '2024-02-22 14:35:42', NULL),
(238, '42', '32', 'PRASHANT', 'KUMAR', ' VISHWKARMA', '0000-00-00', '1234512345', 'orgfirst1@gmail.om', '../user/static/img/17086131921.png', 'MALE', 'sdd', 'asdad', 'sadsad', 'sad', 'sadasd', '311111', 'aadhaar ', '../user/static/img/17086131921.png', 'aadhar', '../user/static/img/17086131921.png', 'Literate', 'IST7890', 0, '2024-02-22 14:46:32', NULL),
(239, '42', '33', 'AISH', 'KUMAR', 'SHARMA', '1222-02-12', '1234512345', 'vish@gmail.com', '../user/static/img/1708613661messages-2.jpg', 'MALE', 'DSFS', 'SDADSA', 'SDAD', 'ASD', 'SADA', '123455', 'aadhaar ', '../user/static/img/17086136612.png', 'aadhar', '../user/static/img/17086136614.png', 'Literate', 'IST7890', 0, '2024-02-22 14:54:21', NULL),
(240, '42', '34', 'YUVRAJ', 'KUMAR', 'NAGAR', '0000-00-00', '1234554321', 'orgfirst4@gmail.com', '../user/static/img/1708614279team-3.jpg', 'MALE', 'SAD', 'ASDAD', 'SADASD', 'SADAD', 'ASDAS', '112333', 'aadhaar ', '../user/static/img/1708614279blog-1.jpg', 'aadhar', '../user/static/img/1708614279logo.webp', 'Literate', 'IST7890', 0, '2024-02-22 15:04:40', NULL),
(241, '42', '35', 'SHUBHAM', 'KUMAR', 'PATEL', '3322-02-12', '1234554231', 'orgfirst5@gmail.com', '../user/static/img/1708614382team-1.jpg', 'MALE', 'ASSA', 'asdad', 'Sa', 'ASD', 'sadasd', '311111', 'aadhaar ', '../user/static/img/17086143821702625265.jpg', 'aadhar', '../user/static/img/1708614382about.jpg', 'Literate', 'IST7890', 0, '2024-02-22 15:06:22', NULL),
(242, '43', '37', 'ABHISHEK', 'KUMAR', 'PATIL', '3322-12-12', '1234512345', 'orsecond1@gmail.com', '../user/static/img/1708621150profile-img.jpg', 'MALE', 'SDAD', 'ADS', 'DASD', 'SADAS', 'DASD', '123132', 'aadhar ', '../user/static/img/17086211501702625265.jpg', 'aadhaar', '../user/static/img/1708621150about.jpg', 'Literate', 'OND4321', 1, '2024-02-22 16:59:10', NULL),
(243, '43', '38', 'ASHISH', 'KUMAR', 'PATEL', '1122-12-12', '5234112345', 'orsecond2@gmail.com', '../user/static/img/1708621539user.jpg', 'MALE', 'WQQ', 'QWEQW', 'QEWQE', 'EWQEWQ', 'EQWE', '123132', 'aadhar ', '../user/static/img/1708621539blog-2.jpg', 'aadhaar', '../user/static/img/17086215395.png', 'Literate', 'OND4321', 1, '2024-02-22 17:05:39', NULL),
(244, '43', '39', 'ANURAG', 'KUMAR', 'SHARMA', '3232-02-03', '5432112345', 'orsecond3@gmail.com', '../user/static/img/1708621861testimonial-3.jpg', 'MALE', 'AsA', 'Asa', 'SA', 'aS', 'HGHH', '311111', 'aadhar ', '../user/static/img/17086218612.png', 'aadhaar', '../user/static/img/1708621861com logo.jpg', 'Literate', 'OND4321', 1, '2024-02-22 17:11:01', NULL),
(245, '43', '40', 'YASH', 'KUMAR', 'PATHAK', '2323-12-12', '5431212345', 'orsecond4@gmail.com', '../user/static/img/1708622325testimonial-1.jpg', 'MALE', 'SAD', 'SDSA', 'SDA', 'SAD', 'SAD', '11111', 'aadhar ', '../user/static/img/1708622325slides-3.jpg', 'aadhaar', '../user/static/img/1708622325funfact-icon-1.png', 'Literate', 'OND4321', 1, '2024-02-22 17:18:45', NULL),
(246, '43', '41', 'GOVIND', 'KUMAR', 'NAGAR', '0000-00-00', '5342112345', 'orsecond5@gmail.com', '../user/static/img/17086224714.png', 'MALE', 'SAD', 'ADAS', 'SDAS', 'ASDAS', 'SA', '311111', 'aadhar ', '../user/static/img/1708622471blog-3.jpg', 'aadhaar', '../user/static/img/1708622471about-icon-1.png', 'Literate', 'OND4321', 1, '2024-02-22 17:21:11', NULL),
(247, '44', '43', 'AISHWARYA', 'KUMAR', 'SHARMA', '2323-02-12', '55443322112132', 'orgthird1@gmail.com', '../user/static/img/17086989821702384390.png', 'MALE', 'a', 'aS', 'as', 'AS', 'S', '123234', '2321 ', '../user/static/img/1708698982about.jpg', '12313', '../user/static/img/1708698982about.jpg', 'Literate', 'IRD4321', 0, '2024-02-23 14:36:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ovs_admin`
--

CREATE TABLE `ovs_admin` (
  `id` int(11) NOT NULL,
  `unic_id` varchar(40) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deactivated_by_OVS` varchar(10) NOT NULL,
  `user_status` int(20) NOT NULL DEFAULT 1,
  `create_date` date NOT NULL DEFAULT current_timestamp(),
  `deactivated_date` date DEFAULT NULL,
  `created_by_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ovs_admin`
--

INSERT INTO `ovs_admin` (`id`, `unic_id`, `name`, `email`, `mobile_number`, `password`, `deactivated_by_OVS`, `user_status`, `create_date`, `deactivated_date`, `created_by_id`) VALUES
(1, 'ovs4115', 'ovs admin', 'ovsadmin@ovs.com', '6264184115', '1234', '', 1, '2024-02-08', '0000-00-00', 'Developer'),
(11, 'mins412211', 'ovs2Admin', 'ovsadmin2@ovs.com', '5544332211', '1234', '', 1, '2024-02-23', NULL, 'ovs4115');

-- --------------------------------------------------------

--
-- Table structure for table `requer_doc`
--

CREATE TABLE `requer_doc` (
  `id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `doc_requer_for` varchar(255) DEFAULT NULL COMMENT '1-ID proof, 2-Address Proof,3-Party Name, 4-Post (Candidate), 5-Party/ID-Proof',
  `doc_name` varchar(255) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requer_doc`
--

INSERT INTO `requer_doc` (`id`, `org_id`, `doc_requer_for`, `doc_name`, `create_at`, `update_at`) VALUES
(42, 42, '1', 'aadhar', '0000-00-00', '0000-00-00'),
(43, 42, '2', 'aadhaar', '0000-00-00', '0000-00-00'),
(44, 42, '3', 'kkb', '0000-00-00', '0000-00-00'),
(45, 42, '4', 'mla', '0000-00-00', '0000-00-00'),
(46, 42, '5', 'xyz', '0000-00-00', '0000-00-00'),
(47, 43, '1', 'aadhaar', '0000-00-00', '0000-00-00'),
(48, 43, '2', 'aadhar', '0000-00-00', '0000-00-00'),
(49, 43, '3', 'zxzxzx', '0000-00-00', '0000-00-00'),
(50, 43, '4', 'zXXx', '0000-00-00', '0000-00-00'),
(51, 43, '5', 'ZxZXx', '0000-00-00', '0000-00-00'),
(52, 43, '3', 'xZx', '0000-00-00', '0000-00-00'),
(53, 44, '1', '12313', '0000-00-00', '0000-00-00'),
(54, 44, '2', 'aadhar', '0000-00-00', '0000-00-00'),
(55, 44, '3', 'aadhaar', '0000-00-00', '0000-00-00'),
(56, 44, '', 'mla213', '0000-00-00', '0000-00-00'),
(57, 44, '5', '123213', '0000-00-00', '0000-00-00'),
(58, 44, '4', '3213', '0000-00-00', '0000-00-00'),
(59, 44, '3', '32132', '0000-00-00', '0000-00-00'),
(60, 44, '2', '2321', '0000-00-00', '0000-00-00'),
(61, 44, '1', '123123', '0000-00-00', '0000-00-00'),
(67, 50, '1', 'demo1', '0000-00-00', '0000-00-00'),
(68, 50, '3', 'demo2', '0000-00-00', '0000-00-00'),
(69, 50, '2', 'demo3', '0000-00-00', '0000-00-00'),
(70, 50, '4', 'demo5', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_admin`
--

CREATE TABLE `sub_admin` (
  `id` int(10) NOT NULL,
  `org_id` varchar(15) NOT NULL COMMENT 'created org id',
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `unic_id` varchar(40) NOT NULL,
  `created_by` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voters_vote`
--

CREATE TABLE `voters_vote` (
  `id` int(10) NOT NULL,
  `org_id` varchar(123) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `total_get_votes` int(10) NOT NULL DEFAULT 0,
  `start_close_vote` varchar(255) NOT NULL DEFAULT '0' COMMENT '0- stop voting,1 -start voting',
  `results_show_hide` int(10) NOT NULL DEFAULT 0 COMMENT '0- close result and 1- show results',
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voters_vote`
--

INSERT INTO `voters_vote` (`id`, `org_id`, `user_id`, `total_get_votes`, `start_close_vote`, `results_show_hide`, `created_at`, `updated_at`) VALUES
(161, '43', '43', 6, '0', 0, '2024-02-23', '2024-02-23'),
(162, '43', '37', 5, '0', 0, '2024-02-23', '2024-02-23'),
(163, '43', '38', 1, '0', 0, '2024-02-23', '2024-02-23'),
(164, '43', '39', 1, '0', 0, '2024-02-23', '2024-02-23'),
(175, '42', '42', 0, '0', 1, '2024-02-25', '2024-02-25'),
(176, '42', '31', 0, '0', 1, '2024-02-25', '2024-02-25'),
(177, '42', '32', 0, '0', 1, '2024-02-25', '2024-02-25'),
(178, '42', '33', 0, '0', 1, '2024-02-25', '2024-02-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_admin`
--
ALTER TABLE `org_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_participate`
--
ALTER TABLE `org_participate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_participate_voter`
--
ALTER TABLE `org_participate_voter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ovs_admin`
--
ALTER TABLE `ovs_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requer_doc`
--
ALTER TABLE `requer_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_admin`
--
ALTER TABLE `sub_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subadmin_id` (`unic_id`);

--
-- Indexes for table `voters_vote`
--
ALTER TABLE `voters_vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `org_admin`
--
ALTER TABLE `org_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `org_participate`
--
ALTER TABLE `org_participate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `org_participate_voter`
--
ALTER TABLE `org_participate_voter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `ovs_admin`
--
ALTER TABLE `ovs_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `requer_doc`
--
ALTER TABLE `requer_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `sub_admin`
--
ALTER TABLE `sub_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voters_vote`
--
ALTER TABLE `voters_vote`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
