
  
-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 07:37 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_group_permissions`
--

CREATE TABLE `auth_group_permissions` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permission`
--

CREATE TABLE `auth_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(25, 'Can add contact us', 7, 'add_contactus'),
(26, 'Can change contact us', 7, 'change_contactus'),
(27, 'Can delete contact us', 7, 'delete_contactus'),
(28, 'Can view contact us', 7, 'view_contactus'),
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
(72, 'Can view comments', 18, 'view_comments'),
(73, 'Can add my model', 19, 'add_mymodel'),
(74, 'Can change my model', 19, 'change_mymodel'),
(75, 'Can delete my model', 19, 'delete_mymodel'),
(76, 'Can view my model', 19, 'view_mymodel');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`id`, `password`, `last_login`, `is_superuser`, `username`, `first_name`, `last_name`, `email`, `is_staff`, `is_active`, `date_joined`) VALUES
(1, 'pbkdf2_sha256$180000$kkizIWU0SHR3$Tl2tMGy19ctic1JEa8z0UYtV3aF3uYwV8kxDAl2cg5U=', '2021-02-16 07:59:31.707417', 1, 'vd', '', '', '', 1, 1, '2021-02-16 07:59:14.886740');

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_groups`
--

CREATE TABLE `auth_user_groups` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_user_permissions`
--

CREATE TABLE `auth_user_user_permissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `django_content_type`
--

CREATE TABLE `django_content_type` (
  `id` int(11) NOT NULL,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(7, 'tbl', 'contactus'),
(17, 'tbl', 'faqs'),
(16, 'tbl', 'feedback'),
(8, 'tbl', 'login'),
(15, 'tbl', 'massages'),
(19, 'tbl', 'mymodel'),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `django_migrations`
--

INSERT INTO `django_migrations` (`id`, `app`, `name`, `applied`) VALUES
(1, 'contenttypes', '0001_initial', '2021-02-07 20:49:05.447612'),
(2, 'auth', '0001_initial', '2021-02-07 20:49:08.303368'),
(3, 'admin', '0001_initial', '2021-02-07 20:49:19.868453'),
(4, 'admin', '0002_logentry_remove_auto_add', '2021-02-07 20:49:25.552341'),
(5, 'admin', '0003_logentry_add_action_flag_choices', '2021-02-07 20:49:25.655208'),
(6, 'contenttypes', '0002_remove_content_type_name', '2021-02-07 20:49:27.879753'),
(7, 'auth', '0002_alter_permission_name_max_length', '2021-02-07 20:49:28.078249'),
(8, 'auth', '0003_alter_user_email_max_length', '2021-02-07 20:49:28.268470'),
(9, 'auth', '0004_alter_user_username_opts', '2021-02-07 20:49:28.348735'),
(10, 'auth', '0005_alter_user_last_login_null', '2021-02-07 20:49:29.401516'),
(11, 'auth', '0006_require_contenttypes_0002', '2021-02-07 20:49:29.468071'),
(12, 'auth', '0007_alter_validators_add_error_messages', '2021-02-07 20:49:29.564119'),
(13, 'auth', '0008_alter_user_username_max_length', '2021-02-07 20:49:29.796964'),
(14, 'auth', '0009_alter_user_last_name_max_length', '2021-02-07 20:49:30.027609'),
(15, 'auth', '0010_alter_group_name_max_length', '2021-02-07 20:49:30.707270'),
(16, 'auth', '0011_update_proxy_permissions', '2021-02-07 20:49:30.798190'),
(17, 'sessions', '0001_initial', '2021-02-07 20:49:31.276009'),
(18, 'tbl', '0001_initial', '2021-02-07 20:49:38.058912'),
(19, 'tbl', '0002_mymodel', '2021-02-07 20:49:48.789274'),
(20, 'tbl', '0003_auto_20210208_0227', '2021-02-07 20:57:41.668434'),
(21, 'tbl', '0004_auto_20210208_0230', '2021-02-07 21:00:37.289834'),
(22, 'tbl', '0005_auto_20210216_1325', '2021-02-16 07:57:16.801976'),
(23, 'tbl', '0006_post', '2021-03-15 06:35:06.484083');

-- --------------------------------------------------------

--
-- Table structure for table `django_session`
--

CREATE TABLE `django_session` (
  `session_key` varchar(40) NOT NULL,
  `session_data` longtext NOT NULL,
  `expire_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `django_session`
--

INSERT INTO `django_session` (`session_key`, `session_data`, `expire_date`) VALUES
('lymadqem5nhiu2nnv8dw2kgfpqlxx64r', 'ZDY2NTU4ZWMwNDExMjJlYmM5YTI2NzYyOTliMzg3Njc1YjgwYTY5Mjp7Il9hdXRoX3VzZXJfaWQiOiIxIiwiX2F1dGhfdXNlcl9iYWNrZW5kIjoiZGphbmdvLmNvbnRyaWIuYXV0aC5iYWNrZW5kcy5Nb2RlbEJhY2tlbmQiLCJfYXV0aF91c2VyX2hhc2giOiI2YmZiYzMyYmFkZWI2OWY3MDAxYTQ2M2U3ZGU4OGQyNmY0MGJlZWYxIn0=', '2021-03-02 07:59:31.773468');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `package_id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `Login_ID` int(3) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Password` varchar(6) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`Login_ID`, `Email_ID`, `Password`, `Type`, `Timestamp`) VALUES
(1, 'vd@vd.com', '111111', 'user', '2021-03-03 13:55:55'),
(4, 'vd@hi5-sharing.com', '111111', 'admin', '2021-03-23 02:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packages`
--

CREATE TABLE `tbl_packages` (
  `package_id` int(3) NOT NULL,
  `package_price` int(5) NOT NULL,
  `package_description` longtext NOT NULL,
  `package_title` varchar(50) NOT NULL,
  `package_size` varchar(5) NOT NULL,
  `package_start` varchar(10) NOT NULL,
  `package_end` varchar(10) NOT NULL,
  `duration` int(3) NOT NULL,
  `timestamp` datetime NOT NULL,
  `is_active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_packages`
--

INSERT INTO `tbl_packages` (`package_id`, `package_price`, `package_description`, `package_title`, `package_size`, `package_start`, `package_end`, `duration`, `timestamp`, `is_active`) VALUES
(1, 5888, 'xxxxxxxxxxxxx', 'pkg ', '8', '2021-03-24', '2021-03-18', 56, '2021-03-29 08:32:03', 1),
(3, 500, 'xzxzxzx', 'intial package2', '16 GB', '03/25/2021', '0000-00-00', 6, '2021-03-29 08:34:02', 0),
(4, 800, 'knknknk', 'intial package4', 'Choos', '03/30/2021', '03/31/2021', 1, '2021-03-29 08:43:29', 0),
(5, 70000, 'c fgcgfcf', 'intial package4', '8 GB', '03/27/2021', '03/31/2021', 4, '2021-03-26 02:59:12', 0),
(6, 5000, 'asdfevvvvvv', 'intial package5', '16 GB', '03/27/2021', '06/17/2021', 82, '2021-03-26 03:38:07', 0),
(7, 5099, 'edccedced', 'intial package6', '16 GB', '03/30/2021', '03/31/2021', 1, '2021-03-29 08:34:27', 0);

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
  `User_ID_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`Post_ID`, `type`, `Post`, `Post_Title`, `Post_Caption`, `Timestamp`, `User_ID_id`) VALUES
(6, 'image/', '01.jpg', 'vd', 'xxxx', '2021-03-17 12:30:45.000000', 17),
(7, 'image/', '01.jpg', 'vd', 'xxxx', '2021-03-17 12:30:45.000000', 17),
(8, 'image/', '15.jpg', 'xxxvd', 'vdxxxx', '2021-03-22 02:38:34.000000', 17),
(9, 'image/', '16.jpg', 'pikachu', 'vd', '2021-03-22 02:40:11.000000', 17),
(10, 'image/', '24.jpg', 'pikachu2', 'vd2', '2021-03-22 02:45:45.000000', 17);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `User_ID` int(3) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Mobile_NO` varchar(10) NOT NULL,
  `Post` longtext NOT NULL,
  `Password` varchar(6) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Address` longtext NOT NULL,
  `OTP` int(6) NOT NULL,
  `Timestamp` datetime NOT NULL,
  `User_image` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`User_ID`, `First_Name`, `Last_Name`, `Email_ID`, `Mobile_NO`, `Post`, `Password`, `City`, `Address`, `OTP`, `Timestamp`, `User_image`, `gender`, `is_active`) VALUES
(17, 'Markv', 'Ottowdw', 'vd@vd.com', '22222', '0', '123456', 'ss', 'sxsx', 0, '2021-02-23 13:07:28', 'xx.jpeg', '1', 1),
(18, 'Markv', 'Ottowdw', 'vd@vd.com', '888888', '0', '123456', 'vvv', 'xx', 0, '2021-02-23 13:16:30', 'xx.jpeg', '1', 1),
(19, 'vivek', 'patel', 'vd@vd.com', '4444444444', '0', '555555', 'vis', 'bbhjb', 0, '2021-02-23 13:19:26', 'user.png', '1', 0),
(20, 'Markv', 'Ottochvhvhv', 'vd@vd.com', '5444454', '0', '123456', 'gg', 'xx', 0, '2021-02-23 13:26:30', '5895957.png', '1', 1),
(21, 'vivek', 'patel', 'soft@hv.vd', '8401444005', '0', '123456', 'vis', 'zzz', 0, '2021-03-01 01:34:51', 'D:xampp	mpphp1C52.tmp', 'male', 0),
(22, 'vivek', 'patel', 'vd@vd.com', '8401444005', '0', '1111', 'visv', 'xxx', 0, '2021-03-01 12:19:04', '5895957.png', 'male', 0),
(23, 'vivek', 'patel', 'vd@vd.com', '8401444005', '0', '111111', '5555555555', 'cccccccc', 9259, '2021-03-03 13:22:15', 'foundation_social-hi5_flat-circle-white-on-black_5', 'female', 0),
(24, 'pika', 'ptl', 'pik@gmail.com', '8080808080', '0', '888888', 'vis', 'vis', 6836, '2021-03-03 13:35:35', 'hi52.png', 'female', 0),
(25, 'pika', 'ptl', 'pik@gmail.com', '8080808080', '0', 'qqqqqq', 'vis', 'vis', 7916, '2021-03-03 13:38:50', '4a52c7152f086121f3dd0c34792a9a6b.png', 'male', 0),
(26, 'Markv', 'patel', 'vd@vd.com', '8401444005', '0', '111111', 'visnagar', 'vtyvtty', 7942, '2021-03-03 13:47:24', '5895957.png', 'female', 0),
(27, 'vivek', 'ptl', 'vd@vd.com', '8484014145', '0', '111111', 'visnhagar', 'cccxxcxcx', 7099, '2021-03-03 13:50:49', '5895957.png', 'male', 0),
(28, 'chetan', 'yfyfgOtto', 'vd@vd.com', '8080808080', '0', '111111', '8585985858', 'xxxxx', 6827, '2021-03-03 13:53:16', '5895957.png', 'male', 0),
(29, 'vd', 'Ottochvhvhv', 'vd@vd.com', '8080808080', '0', '111111', 'VISNAGAR', 'XXX', 9304, '2021-03-03 13:56:00', '5895957.png', 'male', 0),
(30, 'vivek', 'patel', 'vd@vd.com', '8401444005', '0', '1111', 'vis', 'xxx', 5427, '2021-03-13 12:43:20', '5895957.png', 'male', 1);

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
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`Login_ID`);

--
-- Indexes for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`Post_ID`),
  ADD KEY `tbl_post_User_ID_id_99862c57_fk_tbl_user_User_ID` (`User_ID_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`User_ID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `django_migrations`
--
ALTER TABLE `django_migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `Login_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `package_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `Post_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `User_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- Constraints for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_User_ID_id_99862c57_fk_tbl_user_User_ID` FOREIGN KEY (`User_ID_id`) REFERENCES `tbl_user` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

