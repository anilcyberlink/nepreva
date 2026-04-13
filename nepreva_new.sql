-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2026 at 09:55 AM
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
-- Database: `nepreva_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `cl_adminmenu_user`
--

CREATE TABLE `cl_adminmenu_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `adminmenu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_adminmenu_user`
--

INSERT INTO `cl_adminmenu_user` (`id`, `user_id`, `adminmenu_id`) VALUES
(1, 3, 1),
(11, 3, 2),
(12, 3, 4),
(13, 3, 5),
(14, 3, 12),
(25, 4, 1),
(26, 4, 2),
(27, 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `cl_admin_menu`
--

CREATE TABLE `cl_admin_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_admin_menu`
--

INSERT INTO `cl_admin_menu` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Manage Banners', '2020-08-16 08:51:13', '2025-04-22 01:58:01'),
(2, 'Manage Posts', '2020-08-16 08:52:23', '2020-08-16 08:52:23'),
(4, 'Manage Photo Gallery', '2020-08-16 08:52:38', '2020-08-16 08:52:38'),
(5, 'Manage Video Gallery', '2020-08-16 08:53:15', '2020-08-16 08:53:15'),
(9, 'Manage Users', '2020-08-16 08:53:49', '2020-08-16 08:53:49'),
(12, 'Settings', '2020-08-16 08:54:22', '2020-08-16 08:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `cl_associated_posts`
--

CREATE TABLE `cl_associated_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `sub_title` varchar(191) DEFAULT NULL,
  `brief` text DEFAULT NULL,
  `thumbnail` varchar(191) DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `uri` varchar(191) NOT NULL,
  `page_key` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_banner`
--

CREATE TABLE `cl_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `content` varchar(191) DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `link_title` varchar(191) DEFAULT 'Learn More',
  `link` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_banner`
--

INSERT INTO `cl_banner` (`id`, `title`, `caption`, `content`, `picture`, `video`, `link_title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'EASTERN HORIZON LOGISTICS LLC', '\"Driven by Excellence, Delivered with Care.\"', 'Driving Operational Efficiency in Every Move.', 'banner-1-uaNnt9ENyWIg47wnsLKENCASluSJWetIImEF2KuU.jpg', NULL, NULL, NULL, '1', '2020-12-31 08:12:27', '2025-04-21 23:26:52'),
(3, 'EASTERN HORIZON LOGISTICS LLC', '\"Driven by Excellence, Delivered with Care.\"', 'Your partner in chemical logistics—moving critical materials with confidence.', 'photo3-zYUkOA0XxnSEkCI9oXuU7mBUCxP6XJdaVnQYYJPz.jpg', NULL, NULL, NULL, '1', '2021-05-21 00:21:17', '2025-04-29 02:38:02'),
(4, 'EASTERN HORIZON LOGISTICS LLC', '\"Driven by Excellence, Delivered with Care.\"', 'Leveraging deep industry knowledge.', 'warehouse-picture-1-o0BGxCLrc15MUgryD2umpEBvPOR8yg8eY6AmmLSm.jpg', NULL, NULL, NULL, '1', '2021-05-21 00:48:41', '2025-04-29 02:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `cl_career`
--

CREATE TABLE `cl_career` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `position` varchar(150) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `cover` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_country`
--

CREATE TABLE `cl_country` (
  `id` int(11) NOT NULL,
  `country` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cl_country`
--

INSERT INTO `cl_country` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Nepal', NULL, NULL),
(3, 'Aland Islands', NULL, NULL),
(4, 'Albania', NULL, NULL),
(5, 'Algeria', NULL, NULL),
(6, 'American Samoa', NULL, NULL),
(7, 'Andorra', NULL, NULL),
(8, 'Angola', NULL, NULL),
(9, 'Anguilla', NULL, NULL),
(10, 'Antarctica', NULL, NULL),
(11, 'Antigua ', NULL, NULL),
(12, 'Argentina ', NULL, NULL),
(13, 'Armenia ', NULL, NULL),
(14, 'Aruba ', NULL, NULL),
(15, 'Australia', NULL, NULL),
(16, 'Austria ', NULL, NULL),
(17, 'Azerbaijan', NULL, NULL),
(18, 'Bahamas', NULL, NULL),
(19, 'Bahrain ', NULL, NULL),
(20, 'Bangladesh', NULL, NULL),
(21, 'Barbados', NULL, NULL),
(22, 'Barbuda ', NULL, NULL),
(23, 'Belarus ', NULL, NULL),
(24, 'Belgium ', NULL, NULL),
(25, 'Belize', NULL, NULL),
(26, 'Benin ', NULL, NULL),
(27, 'Bermuda ', NULL, NULL),
(28, 'Bhutan ', NULL, NULL),
(29, 'Bolivia', NULL, NULL),
(30, 'Bosnia ', NULL, NULL),
(31, 'Botswana', NULL, NULL),
(32, 'Bouvet Island', NULL, NULL),
(33, 'Brazil', NULL, NULL),
(34, 'British Indian Ocean Territory', NULL, NULL),
(35, 'Brunei Darussalam ', NULL, NULL),
(36, 'Bulgaria ', NULL, NULL),
(37, 'Burkina Faso ', NULL, NULL),
(38, 'Burundi ', NULL, NULL),
(39, 'Caicos Islands', NULL, NULL),
(40, 'Cambodia ', NULL, NULL),
(41, 'Cameroon ', NULL, NULL),
(42, 'Canada ', NULL, NULL),
(43, 'Cape Verde', NULL, NULL),
(44, 'Cayman Islands', NULL, NULL),
(45, 'Central African Republic ', NULL, NULL),
(46, 'Chad ', NULL, NULL),
(47, 'Chile ', NULL, NULL),
(48, 'China ', NULL, NULL),
(49, 'Christmas Island', NULL, NULL),
(50, 'Cocos (Keeling) Islands ', NULL, NULL),
(51, 'Colombia', NULL, NULL),
(52, 'Comoros', NULL, NULL),
(53, 'Republic of Congo ', NULL, NULL),
(54, 'Democratic Republic of the congo', NULL, NULL),
(55, 'Cook Islands ', NULL, NULL),
(56, 'Costa Rica ', NULL, NULL),
(57, 'Cote d\'Ivoire', NULL, NULL),
(58, 'Croatia ', NULL, NULL),
(59, 'Cuba ', NULL, NULL),
(60, 'Cyprus', NULL, NULL),
(61, 'Czech Republic', NULL, NULL),
(62, 'Denmark ', NULL, NULL),
(63, 'Djibouti ', NULL, NULL),
(64, 'Dominica ', NULL, NULL),
(65, ' Dominican Republic', NULL, NULL),
(66, 'Ecuador ', NULL, NULL),
(67, 'Egypt', NULL, NULL),
(68, 'El Salvador', NULL, NULL),
(69, 'Equatorial Guinea', NULL, NULL),
(70, 'Eritrea', NULL, NULL),
(71, 'Estonia ', NULL, NULL),
(72, 'Ethiopia ', NULL, NULL),
(73, 'Falkland Islands (Malvinas)', NULL, NULL),
(74, 'Faroe Islands  ', NULL, NULL),
(75, 'Fiji', NULL, NULL),
(76, 'Finland ', NULL, NULL),
(77, 'France ', NULL, NULL),
(78, 'French Guiana', NULL, NULL),
(79, 'French Polynesia', NULL, NULL),
(80, 'French Southern Territories ', NULL, NULL),
(81, 'Futuna Islands', NULL, NULL),
(82, 'Gabon  ', NULL, NULL),
(83, 'Gambia ', NULL, NULL),
(84, 'Georgia ', NULL, NULL),
(85, 'Germany ', NULL, NULL),
(86, 'Ghana ', NULL, NULL),
(87, 'Gibraltar ', NULL, NULL),
(88, 'Greece ', NULL, NULL),
(89, 'Greenland', NULL, NULL),
(90, 'Grenada ', NULL, NULL),
(91, 'Guadeloupe', NULL, NULL),
(92, 'Guam ', NULL, NULL),
(93, 'Guatemala', NULL, NULL),
(94, 'Guernsey', NULL, NULL),
(95, 'Guinea ', NULL, NULL),
(96, 'Guinea-Bissau', NULL, NULL),
(97, 'Guyana ', NULL, NULL),
(98, 'Haiti ', NULL, NULL),
(99, 'Heard', NULL, NULL),
(100, 'Herzegovina ', NULL, NULL),
(101, 'Holy See ', NULL, NULL),
(102, 'Honduras', NULL, NULL),
(103, 'Hong Kong', NULL, NULL),
(104, 'Hungary', NULL, NULL),
(105, 'Iceland ', NULL, NULL),
(106, 'India ', NULL, NULL),
(107, 'Indonesia ', NULL, NULL),
(108, 'Iran (Islamic Republic of)', NULL, NULL),
(109, 'Iraq', NULL, NULL),
(110, 'Ireland', NULL, NULL),
(111, 'Isle of Man', NULL, NULL),
(112, 'Israel ', NULL, NULL),
(113, 'Italy', NULL, NULL),
(114, 'Jamaica', NULL, NULL),
(115, 'Jan Mayen Islands', NULL, NULL),
(116, 'Japan ', NULL, NULL),
(117, 'Jersey', NULL, NULL),
(118, 'Jordan ', NULL, NULL),
(119, 'Kazakhstan', NULL, NULL),
(120, 'Kenya', NULL, NULL),
(121, 'Kiribati ', NULL, NULL),
(122, 'Korea ', NULL, NULL),
(123, 'Korea (Democratic)', NULL, NULL),
(124, 'Kuwait ', NULL, NULL),
(125, 'Kyrgyzstan', NULL, NULL),
(126, 'Lao ', NULL, NULL),
(127, 'Latvia', NULL, NULL),
(128, 'Lebanon ', NULL, NULL),
(129, 'Lesotho ', NULL, NULL),
(130, 'Liberia', NULL, NULL),
(131, 'Libyan Arab Jamahiriya', NULL, NULL),
(132, 'Liechtenstein', NULL, NULL),
(133, 'Lithuania ', NULL, NULL),
(134, 'Luxembourg ', NULL, NULL),
(135, 'Macao', NULL, NULL),
(136, 'Macedonia ', NULL, NULL),
(137, 'Madagascar ', NULL, NULL),
(138, 'Malawi ', NULL, NULL),
(139, 'Malaysia ', NULL, NULL),
(140, 'Maldives ', NULL, NULL),
(141, 'Mali', NULL, NULL),
(142, 'Malta ', NULL, NULL),
(143, 'Marshall Islands', NULL, NULL),
(144, 'Martinique ', NULL, NULL),
(145, 'Mauritania ', NULL, NULL),
(146, 'Mauritius', NULL, NULL),
(147, 'Mayotte', NULL, NULL),
(148, 'McDonald Islands', NULL, NULL),
(149, 'Mexico ', NULL, NULL),
(150, 'Micronesia ', NULL, NULL),
(151, 'Miquelon', NULL, NULL),
(152, 'Moldova ', NULL, NULL),
(153, 'Monaco ', NULL, NULL),
(154, 'Mongolia ', NULL, NULL),
(155, 'Montenegro ', NULL, NULL),
(156, 'Montserrat', NULL, NULL),
(157, 'Morocco ', NULL, NULL),
(158, 'Mozambique', NULL, NULL),
(159, 'Myanmar ', NULL, NULL),
(160, 'Namibia ', NULL, NULL),
(161, 'Nauru', NULL, NULL),
(162, 'United States', NULL, NULL),
(163, 'Netherlands', NULL, NULL),
(164, 'Netherlands Antilles ', NULL, NULL),
(165, 'Nevis ', NULL, NULL),
(166, 'New Caledonia', NULL, NULL),
(167, 'New Zealand ', NULL, NULL),
(168, 'Nicaragua', NULL, NULL),
(169, 'Niger ', NULL, NULL),
(170, 'Nigeria', NULL, NULL),
(171, 'Niue', NULL, NULL),
(172, 'Norfolk Island ', NULL, NULL),
(173, 'Northern Mariana Islands ', NULL, NULL),
(174, 'Norway ', NULL, NULL),
(175, 'Oman ', NULL, NULL),
(176, 'Pakistan', NULL, NULL),
(177, 'Palau ', NULL, NULL),
(178, 'Palestinian Territory Occupied', NULL, NULL),
(179, 'Panama ', NULL, NULL),
(180, 'Papua New Guinea', NULL, NULL),
(181, 'Paraguay ', NULL, NULL),
(182, 'Peru ', NULL, NULL),
(183, 'Philippines ', NULL, NULL),
(184, 'Pitcairn ', NULL, NULL),
(185, 'Poland', NULL, NULL),
(186, 'Portugal', NULL, NULL),
(187, 'Principe ', NULL, NULL),
(188, 'Puerto Rico ', NULL, NULL),
(189, 'Qatar ', NULL, NULL),
(190, 'Reunion ', NULL, NULL),
(191, 'Romania ', NULL, NULL),
(192, 'Russian Federation', NULL, NULL),
(193, 'Rwanda ', NULL, NULL),
(194, 'Saint Barthelemy', NULL, NULL),
(195, 'Saint Helena', NULL, NULL),
(196, 'Saint Kitts ', NULL, NULL),
(197, 'Saint Lucia ', NULL, NULL),
(198, 'Saint Martin (French part)', NULL, NULL),
(199, 'Saint Pierre ', NULL, NULL),
(200, 'Saint Vincent ', NULL, NULL),
(201, 'Samoa', NULL, NULL),
(202, 'San Marino ', NULL, NULL),
(203, 'Sao Tome ', NULL, NULL),
(204, 'Saudi Arabia', NULL, NULL),
(205, 'Senegal ', NULL, NULL),
(206, 'Serbia ', NULL, NULL),
(207, 'Seychelles ', NULL, NULL),
(208, 'Sierra Leone', NULL, NULL),
(209, 'Singapore', NULL, NULL),
(210, 'Slovakia', NULL, NULL),
(211, 'Slovenia ', NULL, NULL),
(212, 'Solomon Islands', NULL, NULL),
(213, 'Somalia ', NULL, NULL),
(214, 'South Africa', NULL, NULL),
(215, 'South Georgia ', NULL, NULL),
(216, 'South Sandwich Islands', NULL, NULL),
(217, 'Spain', NULL, NULL),
(218, 'Sri Lanka', NULL, NULL),
(219, 'Sudan', NULL, NULL),
(220, 'Suriname', NULL, NULL),
(221, 'Svalbard ', NULL, NULL),
(222, 'Swaziland ', NULL, NULL),
(223, 'Sweden ', NULL, NULL),
(224, 'Switzerland', NULL, NULL),
(225, 'Syrian Arab Republic', NULL, NULL),
(226, 'Taiwan ', NULL, NULL),
(227, 'Tajikistan ', NULL, NULL),
(228, 'Tanzania ', NULL, NULL),
(229, 'Thailand ', NULL, NULL),
(230, 'The Grenadines ', NULL, NULL),
(231, 'Timor-Leste', NULL, NULL),
(232, 'Tobago', NULL, NULL),
(233, 'Togo ', NULL, NULL),
(234, 'Tokelau', NULL, NULL),
(235, 'Tonga ', NULL, NULL),
(236, 'Trinidad ', NULL, NULL),
(237, 'Tunisia ', NULL, NULL),
(238, 'Turkey ', NULL, NULL),
(239, 'Turkmenistan ', NULL, NULL),
(240, 'Turks Islands ', NULL, NULL),
(241, 'Tuvalu', NULL, NULL),
(242, 'Uganda ', NULL, NULL),
(243, 'Ukraine ', NULL, NULL),
(244, 'United Arab Emirates', NULL, NULL),
(245, 'United Kingdom', NULL, NULL),
(246, 'Afghanistan', NULL, NULL),
(247, 'Uruguay ', NULL, NULL),
(248, 'US Minor Outlying Islands ', NULL, NULL),
(249, 'Uzbekistan ', NULL, NULL),
(250, 'Vanuatu ', NULL, NULL),
(251, 'Vatican City State ', NULL, NULL),
(252, 'Venezuela Vietnam ', NULL, NULL),
(253, 'Virgin Islands (British) ', NULL, NULL),
(254, 'Virgin Islands (US)', NULL, NULL),
(255, 'Wallis ', NULL, NULL),
(256, 'Western Sahara', NULL, NULL),
(257, 'Yemen', NULL, NULL),
(258, 'Zambia', NULL, NULL),
(259, 'Zimbabwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_images`
--

CREATE TABLE `cl_gallery_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `picture` varchar(191) NOT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_image_categories`
--

CREATE TABLE `cl_gallery_image_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) NOT NULL,
  `picture` varchar(191) NOT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_videos`
--

CREATE TABLE `cl_gallery_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `video` text DEFAULT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_video_categories`
--

CREATE TABLE `cl_gallery_video_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) NOT NULL,
  `video` varchar(191) DEFAULT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_init`
--

CREATE TABLE `cl_init` (
  `id` int(11) NOT NULL,
  `code` varchar(191) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cl_init`
--

INSERT INTO `cl_init` (`id`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, '123', 1, '2018-12-10 04:48:12', '2018-12-11 01:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `cl_inquiry`
--

CREATE TABLE `cl_inquiry` (
  `id` bigint(20) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_log`
--

CREATE TABLE `cl_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(191) DEFAULT NULL,
  `action_date` datetime DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_banner`
--

CREATE TABLE `cl_multiple_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_id` int(11) DEFAULT 0,
  `title` varchar(191) DEFAULT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `content` varchar(191) DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `link` varchar(191) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_document`
--

CREATE TABLE `cl_multiple_document` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL DEFAULT 0,
  `key_string` varchar(100) DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `document` varchar(191) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_image`
--

CREATE TABLE `cl_multiple_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file_name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_video`
--

CREATE TABLE `cl_multiple_video` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) DEFAULT 0,
  `title` varchar(191) DEFAULT NULL,
  `video` text NOT NULL,
  `ordering` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_posts`
--

CREATE TABLE `cl_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` int(11) DEFAULT 0,
  `visiter` int(11) DEFAULT 0,
  `post_date` datetime DEFAULT NULL,
  `post_author` int(11) NOT NULL DEFAULT 1,
  `template` varchar(191) DEFAULT NULL,
  `template_child` varchar(100) DEFAULT NULL,
  `post_title` text DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `post_content` longtext DEFAULT NULL,
  `post_excerpt` text DEFAULT NULL,
  `uri` varchar(191) NOT NULL,
  `page_key` varchar(191) NOT NULL DEFAULT '0',
  `post_type` int(11) DEFAULT 0,
  `post_category` int(11) DEFAULT 0,
  `post_parent` int(11) DEFAULT 0,
  `post_order` int(11) DEFAULT 0,
  `home_order` int(11) DEFAULT 0,
  `banner` varchar(191) DEFAULT NULL,
  `page_thumbnail` varchar(191) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `page_video` varchar(191) DEFAULT NULL,
  `meta_keyword` varchar(191) DEFAULT NULL,
  `meta_description` varchar(191) DEFAULT NULL,
  `associated_title` varchar(191) DEFAULT NULL,
  `external_link` varchar(191) DEFAULT NULL,
  `price` varchar(11) DEFAULT NULL,
  `post_tags` varchar(191) DEFAULT NULL,
  `project_status` tinyint(1) DEFAULT 0,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `global_post` tinyint(4) DEFAULT 0,
  `published` enum('1','0') NOT NULL DEFAULT '1',
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_draft` enum('1','0') NOT NULL DEFAULT '0',
  `is_trashed` enum('1','0') NOT NULL DEFAULT '0',
  `show_in_home` enum('0','1') DEFAULT '0',
  `is_password_protected` enum('1','0') NOT NULL DEFAULT '0',
  `comment` enum('1','0') NOT NULL DEFAULT '0',
  `lang` enum('en','np') NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_categories`
--

CREATE TABLE `cl_post_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_type` varchar(191) NOT NULL,
  `category` varchar(191) NOT NULL,
  `category_caption` varchar(191) DEFAULT NULL,
  `category_content` text DEFAULT NULL,
  `uri` varchar(191) NOT NULL,
  `ordering` int(11) DEFAULT 0,
  `thumbnail` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_post_categories`
--

INSERT INTO `cl_post_categories` (`id`, `post_type`, `category`, `category_caption`, `category_content`, `uri`, `ordering`, `thumbnail`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Footer', 'Footer', 'Footer', 'footer', NULL, NULL, NULL, '1', '2021-05-21 01:59:47', '2021-05-21 01:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_featured_images`
--

CREATE TABLE `cl_post_featured_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `featured_image` varchar(191) DEFAULT NULL,
  `featured_image_caption` varchar(191) DEFAULT NULL,
  `featured_image_status` enum('1','0') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_type`
--

CREATE TABLE `cl_post_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` varchar(50) DEFAULT '0',
  `post_type` varchar(191) NOT NULL,
  `uri` varchar(191) NOT NULL,
  `caption` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `template` varchar(100) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `ordering` int(11) DEFAULT 0,
  `is_menu` enum('0','1') NOT NULL DEFAULT '0',
  `is_footer_menu` tinyint(1) DEFAULT 0,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_post_type`
--

INSERT INTO `cl_post_type` (`id`, `uid`, `post_type`, `uri`, `caption`, `content`, `meta_keyword`, `meta_description`, `template`, `banner`, `ordering`, `is_menu`, `is_footer_menu`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT US', 'About Us', 'about-us', '<p> It’s our great pleasure and honour to introduce Respect Trading &amp; Contracting WLL. RTC is leading Project support (manpower supply &amp; cleaning services) &amp; Integrated Facility Management company in Doha Qatar. Since our humble beginning in 2009 RTC is committed to providing the best services to our valued clients to achieve their goal on time.  It consists of a dedicated team &amp; qualified professional who have vast knowledge and experience in the field of construction. We undertake to subcontract of civil and MEP job and supply skilled, unskilled and another technical workforce to construction oil &amp; gas and Logistic field. We having quality strength of trained manpower in a different category to cater for the need of our clients as per project requirement. We have successfully completed delivered a huge number of projects in Qatar since our operation. Currently, large numbers of clients are getting benefits from our range of services.</p>\r\n<p>We look forward to serving you in near future. Please feel free to contact us.</p>\r\n<p><em><strong><span class=\"il\">Assuring</span> you of <span class=\"il\">our</span> quality &amp; <span class=\"il\">best</span> <span class=\"il\">services</span> at all times. </strong></em></p>', '<p>It’s our great pleasure and honour to introduce <strong>Respect Trading &amp; Contracting WLL</strong>. RTC is leading Project support (manpower &amp; materials supply) &amp; Integrated Facility Management company in Doha, Qatar. Since our humble begging in 2009, RTC is committed to providing quality services to our valued clients to achieve their goal.  It consists of a dedicated team &amp; qualified professional who have vast knowledge and experience in the field of construction. We undertake to subcontract of civil and MEP job and supply skilled, unskilled and another technical workforce to construction oil &amp; gas and Logistics field. We having quality strength of trained manpower in a different category to cater for the need of our clients as per project requirement. We have successfully completed a number of projects in Qatar since our operation started. Currently, large numbers of clients are getting benefits from our range of services.</p>\r\n<p> </p>\r\n<p>When you successfully create a bonding with your customers &amp; employees, many of them might stay loyal on a life basis which you will have the chance to mentor the growth of your business while building a solid foundation of brand promoters, but achieving that bonding is no easy task. The companies that succeed are ones that stay true to their core values over the years and create a company that employees &amp; customers are proud to associate with. We are amalgamated with such a passion to emerge as a leading solutions provider.</p>', 'About Us', 'ABOUT US', 'posttypeTemplate-about', 'blog-qY3a45f8bbfA3B5i94fIHrmG8E3fPYc9AcbtuUUs.jpg', 1, '1', 0, '1', '2021-05-20 08:13:06', '2025-04-20 04:48:29'),
(2, 'SERVICESSERVICES', 'Services', 'services', '<p><strong>We provide various best services to our client</strong></p>', '<p>At Eastern Horizon Logistics LLC, we provide a comprehensive range of logistics and transportation services designed to meet the diverse needs of businesses across various industries. Our solutions are tailored to optimize supply chain operations, improve efficiency, and ensure the safe and timely delivery of goods. With a customer-centric approach, we integrate advanced technology and a commitment to excellence in every aspect of our services. Below are the key offerings that form the foundation of our service portfolio:</p>', NULL, NULL, 'posttypeTemplate-services', '', 2, '1', 0, '1', '2021-05-20 08:13:57', '2025-04-16 00:26:41'),
(3, 'News & Articles', 'Blog', 'blog', '<p>CAREER</p>', '<p>For any job opportunity, please send us your CV to </p>', NULL, NULL, 'posttypeTemplate-blog', '', 3, '0', 0, '1', '2021-05-20 08:14:13', '2025-05-20 02:09:28'),
(4, 'CONTACT', 'Contact', 'contact', '<h2>Contact with us</h2>', '<p>euismod eu augue. Etiam vel dui arcu. Cras varius mieros pharetra, id aliquam metus venenatis. Donec sollicit</p>', NULL, NULL, 'posttypeTemplate-contact', '', 7, '1', 0, '1', '2021-05-20 08:14:35', '2025-04-16 01:55:17'),
(5, 'GalleryGallery', 'Gallery', 'gallery', NULL, NULL, NULL, NULL, 'posttypeTemplate-gallery', '', 4, '1', 0, '1', '2025-04-11 01:50:20', '2025-04-15 05:07:10'),
(6, 'CertificationCertification', 'Certification', 'certification', NULL, NULL, NULL, NULL, 'posttypeTemplate-certification', '', 5, '1', 0, '1', '2025-04-15 04:54:18', '2025-04-15 05:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_videos`
--

CREATE TABLE `cl_post_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `featured_video` varchar(191) DEFAULT NULL,
  `featured_video_caption` varchar(191) DEFAULT NULL,
  `featured_video_status` enum('1','0') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_roles`
--

CREATE TABLE `cl_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_roles`
--

INSERT INTO `cl_roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', '2018-07-01 09:56:16', '2020-08-16 14:47:31'),
(2, 'Admin', '2018-07-01 09:56:34', '2020-08-16 14:47:43'),
(3, 'General', '2020-08-16 14:47:05', '2020-08-16 14:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `cl_settings`
--

CREATE TABLE `cl_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `num_of_inquiries` int(11) DEFAULT 0,
  `site_name` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `phone2` varchar(50) DEFAULT NULL,
  `email_primary` varchar(191) DEFAULT NULL,
  `email_secondary` varchar(191) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `facebook_link` varchar(191) DEFAULT NULL,
  `linkedin_link` varchar(191) DEFAULT NULL,
  `youtube_link` varchar(191) DEFAULT NULL,
  `twitter_link` varchar(191) DEFAULT NULL,
  `google_plus` varchar(100) DEFAULT NULL,
  `instagram_link` varchar(100) DEFAULT NULL,
  `meta_key` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `welcome_title` varchar(255) DEFAULT NULL,
  `welcome_text` text DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `copyright_text` text DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_settings`
--

INSERT INTO `cl_settings` (`id`, `num_of_inquiries`, `site_name`, `phone`, `phone2`, `email_primary`, `email_secondary`, `website`, `address`, `facebook_link`, `linkedin_link`, `youtube_link`, `twitter_link`, `google_plus`, `instagram_link`, `meta_key`, `meta_description`, `google_map`, `welcome_title`, `welcome_text`, `title1`, `title2`, `copyright_text`, `experience`, `created_at`, `updated_at`) VALUES
(1, 0, 'Nepreva', '+977-9800000000', '+977-9800000001', 'info@nepreva.com', 'info@nepreva.com', NULL, 'Kathmandu, Nepal', 'http://facebook.com/', 'https://www.linkedin.com', NULL, 'https://twitter.com', NULL, 'https://www.instagram.com/', NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0719143309157!2d85.3269006!3d27.7150658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190e51f9bdf7%3A0xae7fcfdcb4e9786c!2sNBSM%20%26%20Associates!5e0!3m2!1sen!2snp!4v1776065737702!5m2!1sen!2snp\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Inventore veritatis quasi architecto beatae vitae dicta sunt explica. Nemo enim ipsam voluptatem.', NULL, NULL, NULL, 'Nepreva', 30, NULL, '2026-04-13 01:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_03_28_114354_create_cl_post_metas_table', 1),
(5, '2018_03_28_114442_create_cl_post_featured_images_table', 1),
(6, '2018_03_28_114755_create_cl_post_attachments_table', 1),
(7, '2018_03_28_114834_create_cl_post_videos_table', 1),
(9, '2018_03_28_115212_create_cl_post_comments_table', 1),
(10, '2018_03_28_115358_create_cl_categories_table', 1),
(11, '2018_03_28_115432_create_cl_category_metas_table', 1),
(12, '2018_03_29_064328_create_cl_log_table', 1),
(13, '2018_05_08_114118_create_cl_userroles_table', 1),
(14, '2018_05_20_062425_create_cl_members_table', 1),
(15, '2018_06_04_092530_create_cl_roles_table', 1),
(16, '2018_06_06_123826_create_product_category_table', 1),
(17, '2018_06_07_093316_create_post_type_table', 1),
(18, '2018_06_13_071711_create_cl_post_category_table', 1),
(19, '2018_06_21_080700_create_cl_banner_table', 1),
(20, '2018_06_27_053620_create_cl_product_type_table', 2),
(21, '2018_06_28_061103_create_cl_product_brand_table', 3),
(22, '2018_06_28_061256_create_cl_currency_table', 3),
(23, '2018_06_28_061707_create_cl_product_unit_table', 3),
(26, '2018_06_29_051629_create_cl_products_table', 1),
(31, '2018_07_03_014755_create_cl_gallery_image_categories_table', 4),
(32, '2018_07_03_014814_create_cl_gallery_images_table', 4),
(35, '2018_07_03_104330_create_cl_gallery_videos_table', 6),
(37, '2018_07_03_103721_create_cl_gallery_video_categories_table', 7),
(38, '2018_07_04_061117_create_cl_post_type_table', 7),
(39, '2018_03_28_113701_create_cl_posts_table', 8),
(41, '2018_08_06_085514_create_cl_product_tag_table', 9),
(42, '2018_09_20_120321_create_cl_customer_billing_address_table', 10),
(43, '2018_09_20_120340_create_cl_customer_shipping_address_table', 10),
(44, '2018_09_24_094921_create_cl_orders_table', 11),
(45, '2018_09_25_061818_create_cl_country_table', 12),
(46, '2018_09_25_092853_create_order_product_table', 13),
(47, '2018_09_25_100703_create_cl_order_product_table', 14),
(48, '2018_10_02_031657_create_cl_settings_table', 15),
(49, '2018_11_14_092229_create_cl_tender_table', 16),
(51, '2018_11_19_042417_create_cl_tender_category', 18),
(52, '2018_11_19_075448_create_cl_tender_document_table', 19),
(53, '2018_11_16_111624_create_cl_venderdetail_table', 20),
(54, '2018_11_25_060813_create_cl_multiple_video_table', 21),
(55, '2018_11_29_065424_create_cl_multiple_document_table', 22),
(56, '2019_03_13_082841_create_newsletter_signup_table', 23),
(59, '2019_03_14_052123_create_cl_associated_posts_table', 24),
(61, '2019_03_15_090749_create_cl_dwninfo_table', 25),
(62, '2020_08_06_095339_create_cl_multiple_banner_table', 26),
(63, '2020_08_06_120936_add_banner_id_column_at_cl_multiple_banner_table', 26),
(64, '2020_08_07_084648_add_visitor_column_at_posts_table', 26),
(66, '2020_08_11_180220_create_role_user_table', 27),
(67, '2020_08_12_061740_create_foreign_keys_for_role_user_table', 27),
(68, '2020_08_16_130049_crate_admin_menu_table', 28),
(74, '2020_08_16_162623_create_adminmenu_user_table', 29),
(75, '2020_08_16_205219_crate_foreign_keys_for_adminmenu_user_table', 29),
(79, '2020_08_17_062614_add_global_post_cl_posts_table', 30),
(80, '2020_12_10_131852_create_cl_portfolio_table', 31),
(81, '2020_12_10_132930_create_cl_associated_portfolios_table', 31);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 3, 4, NULL, NULL),
(16, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `pin` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `pin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'root@admin.com', '$2y$10$bkfjB.2syJg78umiyDc4ruvL1eZQpAlWni1Tml8AdeGmK33xwPdoa', 1100, 'OfXbCfMeeR9r7kSrmKW4rEgmnfSy5XqZvpnuN4zEhwtQudOOPZWZltQFlcrO', '2018-06-24 04:33:34', '2018-06-24 04:33:34'),
(3, 'Cyberlink', 'cyberlink@admin.com', '$2y$10$bkfjB.2syJg78umiyDc4ruvL1eZQpAlWni1Tml8AdeGmK33xwPdoa', 8910, 'nXU236UFhRqg7WFzn46BoTknv27lEqrNAjQzaGFh88bqifFl0TQHLO4Eo3rA', '2020-08-16 10:32:43', '2020-08-16 11:21:35'),
(4, 'User', 'user@nepreva.com', '$2y$10$bkfjB.2syJg78umiyDc4ruvL1eZQpAlWni1Tml8AdeGmK33xwPdoa', 1100, '79GXktB6Tl9KEaJ5l2jtRKpGFwQnEj4BcMEF5ucMoZzSVYVjKhFb0rKwOnnS', '2020-08-16 11:22:14', '2025-04-20 22:59:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cl_adminmenu_user`
--
ALTER TABLE `cl_adminmenu_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cl_adminmenu_user_user_id_foreign` (`user_id`),
  ADD KEY `cl_adminmenu_user_adminmenu_id_foreign` (`adminmenu_id`);

--
-- Indexes for table `cl_admin_menu`
--
ALTER TABLE `cl_admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_associated_posts`
--
ALTER TABLE `cl_associated_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_banner`
--
ALTER TABLE `cl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_career`
--
ALTER TABLE `cl_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_country`
--
ALTER TABLE `cl_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_images`
--
ALTER TABLE `cl_gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_image_categories`
--
ALTER TABLE `cl_gallery_image_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_videos`
--
ALTER TABLE `cl_gallery_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_video_categories`
--
ALTER TABLE `cl_gallery_video_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_init`
--
ALTER TABLE `cl_init`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_inquiry`
--
ALTER TABLE `cl_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_log`
--
ALTER TABLE `cl_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_banner`
--
ALTER TABLE `cl_multiple_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_document`
--
ALTER TABLE `cl_multiple_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_image`
--
ALTER TABLE `cl_multiple_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_video`
--
ALTER TABLE `cl_multiple_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_posts`
--
ALTER TABLE `cl_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_categories`
--
ALTER TABLE `cl_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_featured_images`
--
ALTER TABLE `cl_post_featured_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_type`
--
ALTER TABLE `cl_post_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_videos`
--
ALTER TABLE `cl_post_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_roles`
--
ALTER TABLE `cl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_settings`
--
ALTER TABLE `cl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cl_adminmenu_user`
--
ALTER TABLE `cl_adminmenu_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cl_admin_menu`
--
ALTER TABLE `cl_admin_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cl_associated_posts`
--
ALTER TABLE `cl_associated_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_banner`
--
ALTER TABLE `cl_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cl_career`
--
ALTER TABLE `cl_career`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_country`
--
ALTER TABLE `cl_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT for table `cl_gallery_images`
--
ALTER TABLE `cl_gallery_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_gallery_image_categories`
--
ALTER TABLE `cl_gallery_image_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_gallery_videos`
--
ALTER TABLE `cl_gallery_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_gallery_video_categories`
--
ALTER TABLE `cl_gallery_video_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_init`
--
ALTER TABLE `cl_init`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cl_inquiry`
--
ALTER TABLE `cl_inquiry`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_log`
--
ALTER TABLE `cl_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_multiple_banner`
--
ALTER TABLE `cl_multiple_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_multiple_document`
--
ALTER TABLE `cl_multiple_document`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_multiple_image`
--
ALTER TABLE `cl_multiple_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_multiple_video`
--
ALTER TABLE `cl_multiple_video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_posts`
--
ALTER TABLE `cl_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_post_categories`
--
ALTER TABLE `cl_post_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cl_post_featured_images`
--
ALTER TABLE `cl_post_featured_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_post_type`
--
ALTER TABLE `cl_post_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cl_post_videos`
--
ALTER TABLE `cl_post_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_roles`
--
ALTER TABLE `cl_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cl_settings`
--
ALTER TABLE `cl_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cl_adminmenu_user`
--
ALTER TABLE `cl_adminmenu_user`
  ADD CONSTRAINT `cl_adminmenu_user_adminmenu_id_foreign` FOREIGN KEY (`adminmenu_id`) REFERENCES `cl_admin_menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cl_adminmenu_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `cl_roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
