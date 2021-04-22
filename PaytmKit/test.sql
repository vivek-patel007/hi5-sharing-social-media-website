-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 01:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_group`
--

CREATE TABLE `auth_group` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_group_permissions`
--

CREATE TABLE `auth_group_permissions` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permission`
--

CREATE TABLE `auth_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_permission`
--

INSERT INTO `auth_permission` (`id`, `name`, `content_type_id`, `codename`) VALUES
(1, 'Can add log entry', 1, 'add_logentry'),
(2, 'Can change log entry', 1, 'change_logentry'),
(3, 'Can delete log entry', 1, 'delete_logentry'),
(4, 'Can view log entry', 1, 'view_logentry'),
(5, 'Can add permission', 2, 'add_permission'),
(6, 'Can change permission', 2, 'change_permission'),
(7, 'Can delete permission', 2, 'delete_permission'),
(8, 'Can view permission', 2, 'view_permission'),
(9, 'Can add group', 3, 'add_group'),
(10, 'Can change group', 3, 'change_group'),
(11, 'Can delete group', 3, 'delete_group'),
(12, 'Can view group', 3, 'view_group'),
(13, 'Can add user', 4, 'add_user'),
(14, 'Can change user', 4, 'change_user'),
(15, 'Can delete user', 4, 'delete_user'),
(16, 'Can view user', 4, 'view_user'),
(17, 'Can add content type', 5, 'add_contenttype'),
(18, 'Can change content type', 5, 'change_contenttype'),
(19, 'Can delete content type', 5, 'delete_contenttype'),
(20, 'Can view content type', 5, 'view_contenttype'),
(21, 'Can add session', 6, 'add_session'),
(22, 'Can change session', 6, 'change_session'),
(23, 'Can delete session', 6, 'delete_session'),
(24, 'Can view session', 6, 'view_session'),
(25, 'Can add contact', 7, 'add_contact'),
(26, 'Can change contact', 7, 'change_contact'),
(27, 'Can delete contact', 7, 'delete_contact'),
(28, 'Can view contact', 7, 'view_contact'),
(29, 'Can add log in', 8, 'add_login'),
(30, 'Can change log in', 8, 'change_login'),
(31, 'Can delete log in', 8, 'delete_login'),
(32, 'Can view log in', 8, 'view_login'),
(33, 'Can add package', 9, 'add_package'),
(34, 'Can change package', 9, 'change_package'),
(35, 'Can delete package', 9, 'delete_package'),
(36, 'Can view package', 9, 'view_package'),
(37, 'Can add subscribe', 10, 'add_subscribe'),
(38, 'Can change subscribe', 10, 'change_subscribe'),
(39, 'Can delete subscribe', 10, 'delete_subscribe'),
(40, 'Can view subscribe', 10, 'view_subscribe'),
(41, 'Can add user', 11, 'add_user'),
(42, 'Can change user', 11, 'change_user'),
(43, 'Can delete user', 11, 'delete_user'),
(44, 'Can view user', 11, 'view_user'),
(45, 'Can add post', 12, 'add_post'),
(46, 'Can change post', 12, 'change_post'),
(47, 'Can delete post', 12, 'delete_post'),
(48, 'Can view post', 12, 'view_post'),
(49, 'Can add package payments', 13, 'add_packagepayments'),
(50, 'Can change package payments', 13, 'change_packagepayments'),
(51, 'Can delete package payments', 13, 'delete_packagepayments'),
(52, 'Can view package payments', 13, 'view_packagepayments'),
(53, 'Can add package booking', 14, 'add_packagebooking'),
(54, 'Can change package booking', 14, 'change_packagebooking'),
(55, 'Can delete package booking', 14, 'delete_packagebooking'),
(56, 'Can view package booking', 14, 'view_packagebooking'),
(57, 'Can add massages', 15, 'add_massages'),
(58, 'Can change massages', 15, 'change_massages'),
(59, 'Can delete massages', 15, 'delete_massages'),
(60, 'Can view massages', 15, 'view_massages'),
(61, 'Can add feedback', 16, 'add_feedback'),
(62, 'Can change feedback', 16, 'change_feedback'),
(63, 'Can delete feedback', 16, 'delete_feedback'),
(64, 'Can view feedback', 16, 'view_feedback'),
(65, 'Can add fa qs', 17, 'add_faqs'),
(66, 'Can change fa qs', 17, 'change_faqs'),
(67, 'Can delete fa qs', 17, 'delete_faqs'),
(68, 'Can view fa qs', 17, 'view_faqs'),
(69, 'Can add comments', 18, 'add_comments'),
(70, 'Can change comments', 18, 'change_comments'),
(71, 'Can delete comments', 18, 'delete_comments'),
(72, 'Can view comments', 18, 'view_comments');

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_groups`
--

CREATE TABLE `auth_user_groups` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_user_permissions`
--

CREATE TABLE `auth_user_user_permissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `django_admin_log`
--

CREATE TABLE `django_admin_log` (
  `id` int(11) NOT NULL,
  `action_time` datetime(6) NOT NULL,
  `object_id` longtext DEFAULT NULL,
  `object_repr` varchar(200) NOT NULL,
  `action_flag` smallint(5) UNSIGNED NOT NULL CHECK (`action_flag` >= 0),
  `change_message` longtext NOT NULL,
  `content_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `django_content_type`
--

CREATE TABLE `django_content_type` (
  `id` int(11) NOT NULL,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `django_content_type`
--

INSERT INTO `django_content_type` (`id`, `app_label`, `model`) VALUES
(1, 'admin', 'logentry'),
(3, 'auth', 'group'),
(2, 'auth', 'permission'),
(4, 'auth', 'user'),
(5, 'contenttypes', 'contenttype'),
(6, 'sessions', 'session'),
(18, 'tbl', 'comments'),
(7, 'tbl', 'contact'),
(17, 'tbl', 'faqs'),
(16, 'tbl', 'feedback'),
(8, 'tbl', 'login'),
(15, 'tbl', 'massages'),
(9, 'tbl', 'package'),
(14, 'tbl', 'packagebooking'),
(13, 'tbl', 'packagepayments'),
(12, 'tbl', 'post'),
(10, 'tbl', 'subscribe'),
(11, 'tbl', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `django_migrations`
--

CREATE TABLE `django_migrations` (
  `id` int(11) NOT NULL,
  `app` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `applied` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `django_migrations`
--

INSERT INTO `django_migrations` (`id`, `app`, `name`, `applied`) VALUES
(1, 'contenttypes', '0001_initial', '2021-04-10 22:10:34.007541'),
(2, 'auth', '0001_initial', '2021-04-10 22:10:38.822225'),
(3, 'admin', '0001_initial', '2021-04-10 22:10:54.085045'),
(4, 'admin', '0002_logentry_remove_auto_add', '2021-04-10 22:10:56.369330'),
(5, 'admin', '0003_logentry_add_action_flag_choices', '2021-04-10 22:10:56.437304'),
(6, 'contenttypes', '0002_remove_content_type_name', '2021-04-10 22:10:57.478371'),
(7, 'auth', '0002_alter_permission_name_max_length', '2021-04-10 22:10:58.519021'),
(8, 'auth', '0003_alter_user_email_max_length', '2021-04-10 22:10:58.712715'),
(9, 'auth', '0004_alter_user_username_opts', '2021-04-10 22:10:58.776903'),
(10, 'auth', '0005_alter_user_last_login_null', '2021-04-10 22:10:59.811041'),
(11, 'auth', '0006_require_contenttypes_0002', '2021-04-10 22:10:59.853409'),
(12, 'auth', '0007_alter_validators_add_error_messages', '2021-04-10 22:10:59.908463'),
(13, 'auth', '0008_alter_user_username_max_length', '2021-04-10 22:11:00.073885'),
(14, 'auth', '0009_alter_user_last_name_max_length', '2021-04-10 22:11:00.589187'),
(15, 'auth', '0010_alter_group_name_max_length', '2021-04-10 22:11:00.906792'),
(16, 'auth', '0011_update_proxy_permissions', '2021-04-10 22:11:00.994206'),
(17, 'sessions', '0001_initial', '2021-04-10 22:11:01.492316'),
(18, 'tbl', '0001_initial', '2021-04-10 22:11:07.456694');

-- --------------------------------------------------------

--
-- Table structure for table `django_session`
--

CREATE TABLE `django_session` (
  `session_key` varchar(40) NOT NULL,
  `session_data` longtext NOT NULL,
  `expire_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `Comments_ID` int(11) NOT NULL,
  `Comments` longtext NOT NULL,
  `Timestamp` datetime(6) NOT NULL,
  `User_ID_id` int(11) NOT NULL,
  `Post_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`Comments_ID`, `Comments`, `Timestamp`, `User_ID_id`, `Post_id`) VALUES
(1, 'comments xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '2021-04-19 01:08:42.000000', 1, 1),
(2, 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', '2021-04-19 01:10:06.000000', 7, 1),
(3, 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', '2021-04-19 01:10:06.000000', 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massages` longtext NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `Timestamp` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`cid`, `name`, `subject`, `email`, `massages`, `is_active`, `Timestamp`) VALUES
(1, 'vivek patel fvhyfv', 'b bb', 'vd@vd.com', 'xxx', 0, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE `tbl_faqs` (
  `FAQs_ID` int(11) NOT NULL,
  `Questions` longtext NOT NULL,
  `answeres` longtext NOT NULL,
  `User_ID_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `Feedback_ID` int(11) NOT NULL,
  `Responce` longtext NOT NULL,
  `Timestamp` datetime(6) NOT NULL,
  `User_ID_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `LogIn_ID` int(11) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Timestamp` datetime(6) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`LogIn_ID`, `Email_ID`, `Password`, `Type`, `Timestamp`, `is_active`) VALUES
(1, 'vp67176@gmail.com', '111111', 'user', '0000-00-00 00:00:00.000000', 0),
(9, 'pvivek093@gmail.com', '111111', 'user', '2021-04-12 01:09:00.000000', 0),
(10, 'admin@hi5-sharing.com', '111111', 'admin', '2021-04-12 00:00:00.000000', 0),
(12, 'vd@vd.com', '111111', 'user', '2021-04-12 13:03:10.000000', 0),
(15, 'nivaan@gmail.com', 'krishna', 'user', '2021-04-12 13:17:27.000000', 0),
(16, 'vd@vkd.com', '111111', 'user', '2021-04-12 13:21:56.000000', 0),
(17, 'vd@frff.com', '222222', 'user', '2021-04-12 13:33:37.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_massages`
--

CREATE TABLE `tbl_massages` (
  `Massages_id` int(11) NOT NULL,
  `Massages` longtext NOT NULL,
  `Timestamp` datetime(6) NOT NULL,
  `User_ID_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `package_id` int(11) NOT NULL,
  `package_price` int(11) NOT NULL,
  `package_description` longtext NOT NULL,
  `package_title` varchar(50) NOT NULL,
  `package_size` varchar(11) NOT NULL,
  `package_start` datetime(6) NOT NULL,
  `package_end` datetime(6) NOT NULL,
  `duration` int(3) NOT NULL,
  `timestamp` datetime(6) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`package_id`, `package_price`, `package_description`, `package_title`, `package_size`, `package_start`, `package_end`, `duration`, `timestamp`, `is_active`) VALUES
(1, 500, 'xxxxx', 'plus', '10', '2021-04-12 12:40:16.000000', '2021-04-30 12:40:16.000000', 0, '2021-04-12 12:40:16.000000', 0),
(2, 1000, 'kkkkkkk', 'pro', '8 GB', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 18, '2021-04-12 12:46:51.000000', 0),
(3, 2000, 'sss', 'platinium', '16 GB', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 18, '2021-04-12 12:47:47.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packagebooking`
--

CREATE TABLE `tbl_packagebooking` (
  `Booking_ID` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `package_title` varchar(50) NOT NULL,
  `package_price` int(11) NOT NULL,
  `duration` int(3) NOT NULL,
  `package_start` date NOT NULL,
  `package_end` date NOT NULL,
  `Package_ID` int(11) NOT NULL,
  `Payment_Status` varchar(10) NOT NULL,
  `is_active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_packagebooking`
--

INSERT INTO `tbl_packagebooking` (`Booking_ID`, `user_email`, `package_title`, `package_price`, `duration`, `package_start`, `package_end`, `Package_ID`, `Payment_Status`, `is_active`) VALUES
(8, 'vp67176@gmail.com', 'pro', 100, 18, '2021-04-19', '2021-05-07', 1, 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packagepayments`
--

CREATE TABLE `tbl_packagepayments` (
  `Payments_ID` int(11) NOT NULL,
  `package_title` varchar(50) NOT NULL,
  `package_price` int(5) NOT NULL,
  `card_no` int(16) NOT NULL,
  `Name_on card` varchar(50) NOT NULL,
  `Card type` varchar(50) NOT NULL,
  `Expire_Date` varchar(30) NOT NULL,
  `Timestamp` datetime(6) NOT NULL,
  `Package_ID_id` int(11) NOT NULL,
  `User_ID_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_packagepayments`
--

INSERT INTO `tbl_packagepayments` (`Payments_ID`, `package_title`, `package_price`, `card_no`, `Name_on card`, `Card type`, `Expire_Date`, `Timestamp`, `Package_ID_id`, `User_ID_id`) VALUES
(1, 'pro', 100, 2147483647, 'vvddd', 'Visa', '2021-04-22', '2021-04-21 12:52:20.000000', 1, 1),
(2, 'pro', 100, 2147483647, 'vvddd', 'Visa', '2021-04-22', '2021-04-21 12:53:23.000000', 1, 1),
(3, 'pro', 100, 2147483647, 'vv', 'Visa', '2021-04-25', '2021-04-21 12:53:57.000000', 1, 1),
(4, 'pro', 100, 2147483647, 'vv', 'Visa', '2021-04-25', '2021-04-21 12:57:15.000000', 1, 1),
(5, 'pro', 100, 2147483647, 'viviv', 'Visa', '2021-04-25', '2021-04-21 13:00:46.000000', 1, 1),
(6, 'pro', 100, 2147483647, 'viviv', 'Visa', '2021-04-25', '2021-04-21 13:02:51.000000', 1, 1),
(7, 'pro', 100, 2147483647, 'viviv', 'Visa', '2021-04-25', '2021-04-21 13:02:59.000000', 1, 1),
(8, 'pro', 100, 2147483647, 'viviv', 'Visa', '2021-04-25', '2021-04-21 13:03:45.000000', 1, 1),
(9, 'pro', 100, 2147483647, 'viviv', 'Visa', '2021-04-25', '2021-04-21 13:04:04.000000', 1, 1),
(10, 'pro', 100, 2147483647, 'viviv', 'Visa', '2021-04-25', '2021-04-21 13:06:20.000000', 1, 1),
(11, 'pro', 100, 2147483647, 'viviv', 'Visa', '2021-04-25', '2021-04-21 13:08:05.000000', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `Post_ID` int(11) NOT NULL,
  `type` varchar(6) NOT NULL,
  `Post` varchar(200) NOT NULL,
  `Post_Title` varchar(100) NOT NULL,
  `Post_Caption` longtext NOT NULL,
  `Timestamp` datetime(6) NOT NULL,
  `User_ID_id` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`Post_ID`, `type`, `Post`, `Post_Title`, `Post_Caption`, `Timestamp`, `User_ID_id`, `is_active`) VALUES
(1, 'image/', 'post-details-01.jpg', 'title', 'text.................................................', '2021-04-12 01:22:58.000000', 1, 0),
(2, 'image/', '02.jpg', 'post 2', 'xxxxxxxxxxxxxxxxxxxxx', '2021-04-12 01:25:32.000000', 1, 0),
(3, 'image/', '020-autumn-new-mens-black-white-patchwo_main-1.jpg', 'cdedw', 'xxxxxxxxxxxxxxxxxxxxx', '2021-04-18 20:07:19.000000', 1, 0),
(4, 'image/', 'ddddd.png', 'cdedw', 'endhuend', '2021-04-21 12:57:50.000000', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `Subscribe_ID` int(11) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Timestamp` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subscribe`
--

INSERT INTO `tbl_subscribe` (`Subscribe_ID`, `Email_ID`, `Timestamp`) VALUES
(1, 'nivaaninfotech@gmail.com', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `User_ID` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `User_image` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Mobile_NO` varchar(13) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Address` longtext NOT NULL,
  `OTP` int(11) NOT NULL,
  `Timestamp` datetime(6) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`User_ID`, `First_Name`, `Last_Name`, `User_image`, `gender`, `Email_ID`, `Mobile_NO`, `Password`, `City`, `Address`, `OTP`, `Timestamp`, `is_active`) VALUES
(1, 'vivek', 'patel', '20200114_120949.jpg', 'male', 'vp67176@gmail.com', '8401444555', '333333', 'visnagar', 'visnagar', 5069, '2021-04-12 01:02:08.000000', 0),
(3, 'vivek', 'patel', '20200114_121143.jpg', 'male', 'pvivek093@gmail.com', '8401444551', '111111', 'visnagar', 'visnagar', 5311, '2021-04-12 01:09:00.000000', 0),
(7, 'vivek patel', 'fvhyfv', '15.jpg', 'male', 'vd@vd.com', '9374283619', '111111', 'gcdgcd', 'hchch\r\nhvhv', 4737, '2021-04-12 13:03:10.000000', 1),
(13, 'ankita', 'soni', '20200114_120815.jpg', 'male', 'nivaan@gmail.com', '9924769581', 'krishna', '9898989898', 'visnagar', 7912, '2021-04-12 13:17:27.000000', 1),
(15, 'vivek patel', 'fvhyfv', '20200114_120815.jpg', 'male', 'vd@vkd.com', '8401444005', '111111', 'gcdgcd', 'hchch\r\nhvhv', 8229, '2021-04-12 13:21:55.000000', 1),
(16, 'vivek patel', 'fvhyfv', '16.jpg', 'male', 'vd@frff.com', '6666666666', '222222', 'visnagar', 'hchch\r\nhvhv', 1205, '2021-04-12 13:33:37.000000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_group`
--
ALTER TABLE `auth_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_group_permissions_group_id_permission_id_0cd325b0_uniq` (`group_id`,`permission_id`),
  ADD KEY `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` (`permission_id`);

--
-- Indexes for table `auth_permission`
--
ALTER TABLE `auth_permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_permission_content_type_id_codename_01ab375a_uniq` (`content_type_id`,`codename`);

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_user_groups_user_id_group_id_94350c0c_uniq` (`user_id`,`group_id`),
  ADD KEY `auth_user_groups_group_id_97559544_fk_auth_group_id` (`group_id`);

--
-- Indexes for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_user_user_permissions_user_id_permission_id_14a6b632_uniq` (`user_id`,`permission_id`),
  ADD KEY `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` (`permission_id`);

--
-- Indexes for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `django_admin_log_content_type_id_c4bce8eb_fk_django_co` (`content_type_id`),
  ADD KEY `django_admin_log_user_id_c564eba6_fk_auth_user_id` (`user_id`);

--
-- Indexes for table `django_content_type`
--
ALTER TABLE `django_content_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `django_content_type_app_label_model_76bd3d3b_uniq` (`app_label`,`model`);

--
-- Indexes for table `django_migrations`
--
ALTER TABLE `django_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `django_session`
--
ALTER TABLE `django_session`
  ADD PRIMARY KEY (`session_key`),
  ADD KEY `django_session_expire_date_a5c62663` (`expire_date`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`Comments_ID`),
  ADD KEY `tbl_comments_User_ID_id_3ecdb704_fk_tbl_user_User_ID` (`User_ID_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD PRIMARY KEY (`FAQs_ID`),
  ADD KEY `tbl_faqs_User_ID_id_842aada5_fk_tbl_user_User_ID` (`User_ID_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`Feedback_ID`),
  ADD KEY `tbl_feedback_User_ID_id_30148e9f_fk_tbl_user_User_ID` (`User_ID_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`LogIn_ID`),
  ADD UNIQUE KEY `Email_ID` (`Email_ID`);

--
-- Indexes for table `tbl_massages`
--
ALTER TABLE `tbl_massages`
  ADD PRIMARY KEY (`Massages_id`),
  ADD KEY `tbl_massages_User_ID_id_df9156b7_fk_tbl_user_User_ID` (`User_ID_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_packagebooking`
--
ALTER TABLE `tbl_packagebooking`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `tbl_packagebooking_Package_ID_id_485bf3b6_fk_tbl_packa` (`Package_ID`);

--
-- Indexes for table `tbl_packagepayments`
--
ALTER TABLE `tbl_packagepayments`
  ADD PRIMARY KEY (`Payments_ID`),
  ADD KEY `tbl_packagepayments_Package_ID_id_9d5da6ca_fk_tbl_packa` (`Package_ID_id`),
  ADD KEY `tbl_packagepayments_User_ID_id_ef012469_fk_tbl_user_User_ID` (`User_ID_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`Post_ID`),
  ADD KEY `tbl_post_User_ID_id_99862c57_fk_tbl_user_User_ID` (`User_ID_id`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`Subscribe_ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Email_ID` (`Email_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_group`
--
ALTER TABLE `auth_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_permission`
--
ALTER TABLE `auth_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `django_content_type`
--
ALTER TABLE `django_content_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `django_migrations`
--
ALTER TABLE `django_migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `Comments_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  MODIFY `FAQs_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `LogIn_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_massages`
--
ALTER TABLE `tbl_massages`
  MODIFY `Massages_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_packagebooking`
--
ALTER TABLE `tbl_packagebooking`
  MODIFY `Booking_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_packagepayments`
--
ALTER TABLE `tbl_packagepayments`
  MODIFY `Payments_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `Post_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `Subscribe_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  ADD CONSTRAINT `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  ADD CONSTRAINT `auth_group_permissions_group_id_b120cbf9_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`);

--
-- Constraints for table `auth_permission`
--
ALTER TABLE `auth_permission`
  ADD CONSTRAINT `auth_permission_content_type_id_2f476e4b_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`);

--
-- Constraints for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  ADD CONSTRAINT `auth_user_groups_group_id_97559544_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`),
  ADD CONSTRAINT `auth_user_groups_user_id_6a12ed8b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  ADD CONSTRAINT `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  ADD CONSTRAINT `auth_user_user_permissions_user_id_a95ead1b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  ADD CONSTRAINT `django_admin_log_content_type_id_c4bce8eb_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`),
  ADD CONSTRAINT `django_admin_log_user_id_c564eba6_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD CONSTRAINT `tbl_comments_User_ID_id_3ecdb704_fk_tbl_user_User_ID` FOREIGN KEY (`User_ID_id`) REFERENCES `tbl_user` (`User_ID`);

--
-- Constraints for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD CONSTRAINT `tbl_faqs_User_ID_id_842aada5_fk_tbl_user_User_ID` FOREIGN KEY (`User_ID_id`) REFERENCES `tbl_user` (`User_ID`);

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `tbl_feedback_User_ID_id_30148e9f_fk_tbl_user_User_ID` FOREIGN KEY (`User_ID_id`) REFERENCES `tbl_user` (`User_ID`);

--
-- Constraints for table `tbl_massages`
--
ALTER TABLE `tbl_massages`
  ADD CONSTRAINT `tbl_massages_User_ID_id_df9156b7_fk_tbl_user_User_ID` FOREIGN KEY (`User_ID_id`) REFERENCES `tbl_user` (`User_ID`);

--
-- Constraints for table `tbl_packagebooking`
--
ALTER TABLE `tbl_packagebooking`
  ADD CONSTRAINT `tbl_packagebooking_Package_ID_id_485bf3b6_fk_tbl_packa` FOREIGN KEY (`Package_ID`) REFERENCES `tbl_package` (`package_id`);

--
-- Constraints for table `tbl_packagepayments`
--
ALTER TABLE `tbl_packagepayments`
  ADD CONSTRAINT `tbl_packagepayments_Package_ID_id_9d5da6ca_fk_tbl_packa` FOREIGN KEY (`Package_ID_id`) REFERENCES `tbl_package` (`package_id`),
  ADD CONSTRAINT `tbl_packagepayments_User_ID_id_ef012469_fk_tbl_user_User_ID` FOREIGN KEY (`User_ID_id`) REFERENCES `tbl_user` (`User_ID`);

--
-- Constraints for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_User_ID_id_99862c57_fk_tbl_user_User_ID` FOREIGN KEY (`User_ID_id`) REFERENCES `tbl_user` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
