-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2023 at 02:58 AM
-- Server version: 10.11.4-MariaDB-log
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_aarks_uwam`
--

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `designation` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `type` varchar(50) NOT NULL,
  `joining_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_present` tinyint(1) NOT NULL DEFAULT 1,
  `address` varchar(255) NOT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `committees`
--

INSERT INTO `committees` (`id`, `name`, `designation`, `phone`, `email`, `type`, `joining_date`, `status`, `is_present`, `address`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Duncan Ewing', 'Vitae eum quam labor', '+1 (965) 628-2991', 'naqalocy@mailinator.com', 'Sports_Team', '1995-02-25', 1, 1, 'Explicabo Doloribus', NULL, 'image933bec4253.png', '2023-07-02 06:04:42', '2023-07-02 06:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `info` varchar(80) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `subject`, `first_name`, `last_name`, `email`, `phone`, `info`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Quam ea sint corpori', 'Madeline', 'Larsen', 'laqovowy@mailinator.com', '+1 (241) 987-7094', 'Our Social Media', 'Magnam esse assumensadf', '2023-07-16 00:56:14', '2023-07-16 00:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

CREATE TABLE `donates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donates`
--

INSERT INTO `donates` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<h5 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Donations for UWA MSA<br>&Atilde;&#152;&Acirc;&not;&Atilde;&#152;&Acirc;&sup2;&Atilde;&#152;&Acirc;&sect;&Atilde;&#153;&AElig;&#146; &Atilde;&#152;&Acirc;&sect;&Atilde;&#153;&acirc;&#128;&#158;&Atilde;&#153;&acirc;&#128;&#158;&Atilde;&#153;&acirc;&#128;&iexcl;&Atilde;&#153;&Acirc;&#143; &Atilde;&#152;&Acirc;&reg;&Atilde;&#153;&Aring;&nbsp;&Atilde;&#152;&Acirc;&plusmn;&Atilde;&#152;&Acirc;&sect;&Atilde;&#153;&acirc;&#128;&sup1;<br>Any donations are welcome and can be either transferred into our account (bank details below), given during Jumu&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;ah or to any committee member listed&nbsp;<a href=\"http://uwamsa.org/about_mem.html\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 300ms ease 0s, background-color 300ms ease 0s;\">here</a>.<br>Bank Details:<br>BSB: 036 054, Account Number: 35 2225<br>Account Name: Muslim Students Association UWA</h5>\n', '2023-07-15 05:17:52', '2023-07-15 05:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `text`, `image`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sundowner BBQ', '<p>sdf</p>', 'image154443d371.jpeg', '2023-06-27', 1, '2023-06-26 23:03:50', '2023-06-27 04:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `event_dawahs`
--

CREATE TABLE `event_dawahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_dawahs`
--

INSERT INTO `event_dawahs` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<h2 style=\"text-align: center; line-height: 1.1; margin-bottom: 20px;\">Dawah Stalls<p><br style=\"text-align: center;\"></p><p class=\"lead\" style=\"text-align: center; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 24px;\">&Oslash;&uml;&Ugrave;&#144;&Oslash;&sup3;&Ucirc;&iexcl;&Ugrave;&#133;&Ugrave;&#144; &Ugrave;&plusmn;&Ugrave;&#132;&Ugrave;&#132;&Ugrave;&#135;&Ugrave;&#144; &Ugrave;&plusmn;&Ugrave;&#132;&Oslash;&plusmn;&Ugrave;&#142;&Ugrave;&#145;&Oslash;&shy;&Ucirc;&iexcl;&Ugrave;&#133;&Ugrave;&#142;&Ugrave;&#128;&Ugrave;&deg;&Ugrave;&#134;&Ugrave;&#144; &Ugrave;&plusmn;&Ugrave;&#132;&Oslash;&plusmn;&Ugrave;&#142;&Ugrave;&#145;&Oslash;&shy;&Ugrave;&#144;&Ugrave;&#138;&Ugrave;&#133;&Ugrave;&#144;</p><h3 style=\"text-align: center; line-height: 24px; margin-top: 20px; margin-bottom: 10px;\">The UWA MSA Holds Dawah Stalls every Tuesday.</h3></h2>\n', '2023-07-13 03:09:09', '2023-07-13 03:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<h1 style=\"text-align: center; \">About UWA MSA<h3><div style=\"text-align: center; \"><span style=\"text-align: var(--bs-body-text-align);\">UWA Muslim Students Association represents the Muslims community at UWA.</span></div><div style=\"text-align: center; \"><span style=\"text-align: var(--bs-body-text-align);\">The cabinet is elected annually and work dedicatedly to serve the Muslim community at UWA.</span></div></h3><p style=\"text-align: center; \"><img data-filename=\"History photo (1).jpg\" style=\"width: 564px;\" src=\"/uploads/images/history/16885657990.jpeg\"><br></p><p style=\"\">The Muslim Student Association was founded in 1989, with a meeting in the Mathematics Senior lab at the Maghrib Dusk prayer one August day. In the period 1989-1992, the association held most of it\'s activities in the make-shift rooms of various departments throughout the campus. In 1992, the University provided us with a prayer room but the location was too far from the main campus. However, the members at the time still managed to pray all but the afternoon Asr and Maghrib dusk prayers there. During 1993-97, Muslim student were left without a proper place for prayers after the room had become reassigned to the Education and Fine Arts department. With Allah\'s help, the effort by Muslim students and liason with the university Administration was rewarded with suitable prayer room in Winthrop Hall since 1997.</p><p style=\"\">Recent liasons and support from the University Administration has brought new prayer room Signages, use of the bigger Hackett Cafe for Ramadan Iftar and tarweeh as well as the introduction of Halal Food on campus.</p><p style=\"\">We are thankful to all the previous presidents and their committee members for their hard work, devotion and dedication.</p></h1>\n', '2023-07-05 01:17:47', '2023-07-05 08:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

CREATE TABLE `join_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<div class=\"pull-left\" style=\'float: left; margin-right: 20px; font-family: \"Open Sans\", sans-serif; letter-spacing: normal;\'><img class=\"img-responsive note-float-left\" src=\"http://uwamsa.org/images/services/join.png\" width=\"100\" height=\"60\" alt=\"Phone\" style=\"text-align: center; border: 0px; display: block; height: auto; max-width: 100%; float: left;\"><div class=\"media-body\" style=\'overflow: hidden; zoom: 1; font-family: \"Open Sans\", sans-serif; letter-spacing: normal; margin-left: 25px;\'><h2 style=\"text-align: center; font-weight: 600; line-height: 1.1; margin-bottom: 10px; font-size: 20px; margin-left: 25px;\">Join Us</h2><p style=\"text-align: center; margin-right: 0px; margin-bottom: 10px; margin-left: 25px;\">Join us to&nbsp;get involved in the exciting activities and programs organised by the UWAMSA.</p><p style=\"text-align: center; margin-right: 0px; margin-bottom: 10px; margin-left: 25px;\">Fill the&nbsp;<a href=\"https://docs.google.com/forms/d/1FqJtaBzl3QsJDeLiGEmR55UrfuEdOiJslXs-vRfnVio/viewform?c=0&amp;w=1https://docs.google.com/forms/d/1FqJtaBzl3QsJDeLiGEmR55UrfuEdOiJslXs-vRfnVio/viewform?c=0&amp;w=1\" target=\"_blank\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(30, 187, 17); text-decoration: none; transition: color 300ms ease 0s, background-color 300ms ease 0s;\">MSA Membership Form</a>&nbsp;or contact a&nbsp;<a href=\"http://uwamsa.org/about_mem.html\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(30, 187, 17); text-decoration: none; transition: color 300ms ease 0s, background-color 300ms ease 0s;\">committe member</a>.</p><p style=\"text-align: center; margin-right: 0px; margin-bottom: 10px; margin-left: 25px;\">Subscribe to our brand new monthly newsletter by sending a blank email&nbsp;<a href=\"mailto:uwa.msa.news@gmail.com\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(30, 187, 17); text-decoration: none; transition: color 300ms ease 0s, background-color 300ms ease 0s;\">here</a>.</p></div></div>\n', '2023-07-15 21:23:14', '2023-07-15 21:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2022_11_29_171240_create_permission_tables', 1),
(14, '2023_06_19_152831_create_sliders_table', 1),
(15, '2023_06_26_000546_create_events_table', 2),
(17, '2023_07_01_005836_create_committees_table', 3),
(18, '2023_07_05_035538_create_histories_table', 4),
(20, '2023_07_06_024803_create_president_addresses_table', 5),
(21, '2023_07_12_104748_create_event_dawahs_table', 6),
(22, '2023_07_13_104116_create_participant_infos_table', 7),
(23, '2023_07_15_110320_create_donates_table', 8),
(24, '2023_07_16_030910_create_join_us_table', 9),
(25, '2023_07_16_033107_create_sponsors_table', 10),
(26, '2023_07_16_040527_create_contacts_table', 11),
(27, '2017_08_24_000000_create_settings_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `participant_infos`
--

CREATE TABLE `participant_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `participant_infos`
--

INSERT INTO `participant_infos` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p><img data-filename=\"banner.jpeg\" style=\"width: 1541px;\" src=\"/uploads/images/participant/16894138870.jpeg\"><br><p>Road To Rememberance</p><p>Road to Remembrance is a Ramadan video series competition open to the entire community which aims to feature short, Islamic videos</p><p>on interesting shortlisted topics to be presented between the Taraweeh prayers at UWA.</p><p><br></p><p>And the best part? Not only do you get rewarded by Allah for sharing beneficial knowledge about Islam, the 3 best submissions of the</p><p>month (voted by the people) will win exciting prizes!</p><p><br></p><p>The Prophet (PBUH) has said: &Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#128;&#154;&Acirc;&not;&Atilde;&#133;&acirc;&#128;&#156;Allah, the angels, the inhabitants of heaven and earth, even the ant in its hole and even the fish in</p><p>the sea, send blessings upon the one who teaches the people good.&Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#128;&#154;&Acirc;&not;&Atilde;&#130;&Acirc;&#157; (al-Tirmidhi, 2609)</p><p><br></p><p>All video creators must choose from a topic from the list below and put together a short (3-5 minute) video elaborating upon it.</p><p>Preparatory information will also be provided.</p><p><br></p><p>*All submissions must be made a week prior to the viewings!*</p><p><br></p><p><br></p><p>List Of Topics and Resources</p><p>Mindful fasting to attain God-Consciousness:</p><p>Resource 1</p><p><br></p><p>Resource 2</p><p><br></p><p>Resource 3</p><p><br></p><p>Achieving your Ramadan Goals:</p><p>Resource 1</p><p><br></p><p>Resource 2</p><p><br></p><p>Resource 3</p><p><br></p><p>The excellence of the month of Ramadan:</p><p>Abu Huraira reported Allah\'s Messenger (may peace be upon him) as saying: When there comes the month of Ramadan, the gates of mercy are opened, and the gates of Hell are locked and the devils are chained, (Sahih Muslim, Book 6, Number 2361)</p><p><br></p><p>Resource 2</p><p><br></p><p>Fasting: The fourth pillar of Islam:</p><p>Islam is built upon five: to worship Allah and to disbelieve in what is worshiped besides him, to establish prayer, to give charity, to perform Hajj pilgrimage to the house, and to fast the month of Ramadan. (S&Atilde;&#131;&Aring;&#146;&Atilde;&#130;&Acirc;&pound;ah&Atilde;&#131;&Aring;&#146;&Atilde;&#130;&Acirc;&pound;i&Atilde;&#131;&Aring;&#146;&Atilde;&cent;&acirc;&#130;&not;&Aring;&frac34;h&Atilde;&#131;&Aring;&#146;&Atilde;&#130;&Acirc;&pound; al-Bukha&Atilde;&#131;&Aring;&#146;&Atilde;&cent;&acirc;&#130;&not;&Aring;&frac34;ri&Atilde;&#131;&Aring;&#146;&Atilde;&cent;&acirc;&#130;&not;&Aring;&frac34; 8,)</p><p><br></p><p>Resource 2</p><p><br></p><p>Resource 3</p><p><br></p><p>Resource 4</p><p><br></p><p>The Best way to seek forgiveness:</p><p>I heard the Messenger of Allah (&Atilde;&#131;&Acirc;&macr;&Atilde;&#130;&Acirc;&middot;&Atilde;&#130;&Acirc;&ordm;) saying, \"I swear by Allah that I seek Allah\'s Pardon and turn to Him in repentance more than seventy times a day.\" (Riyad as-Salihin 1870)</p><p><br></p><p>Resource 2</p><p><br></p><p>Resource 3</p><p><br></p><p>Resource 4</p><p><br></p><p>Allah Loves sincere supplication and Repentance:</p><p>Resource 1</p><p><br></p><p>Resource 2</p><p><br></p><p>Resource 3</p><p><br></p><p>Transforming Struggles into gratitude:</p><p>Resource 1</p><p><br></p><p>Resource 2</p><p><br></p><p>Resource 3</p><p><br></p><p>The person who is guaranteed Jannah:</p><p>The Messenger of Allah, peace and blessings be upon him, said, &Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#128;&#154;&Acirc;&not;&Atilde;&#133;&acirc;&#128;&#156;I guarantee a house on the outskirts of Paradise for one who leaves arguments even if he is right, and a house in the middle of Paradise for one who abandons lies even when joking, and a house in the highest part of Paradise for one who makes his character excellent.&Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#128;&#154;&Acirc;&not;&Atilde;&#130;&Acirc;&#157; (Sunan Abi&Atilde;&#131;&Aring;&#146;&Atilde;&cent;&acirc;&#130;&not;&Aring;&frac34; Da&Atilde;&#131;&Aring;&#146;&Atilde;&cent;&acirc;&#130;&not;&Aring;&frac34;wu&Atilde;&#131;&Aring;&#146;&Atilde;&cent;&acirc;&#130;&not;&Aring;&frac34;d 4800)</p><p><br></p><p>Resource 1</p><p><br></p><p>Gaining blessings through Charity:</p><p>There is never a day wherein servants (of God) get up at morn, but are not visited by two angels. One of them says: O Allah, give him more who spends (for the sake of Allah), and the other says: 0 Allah, bring destruction to one who withholds. (Sahih Muslim 1010)</p><p><br></p><p>Resource 1</p><p><br></p><p>Resource 2</p><p><br></p><p>Resource 3</p><p><br></p><p>Gaining blessings through Charity:</p><p>Resource 1</p><p><br></p><p>Resource 2</p><p><br></p><p>Resource 3</p><p><br></p><p>The significance of Laylatul Qadr:</p><p>Resource 1</p><p><br></p><p>Resource 2</p><p><br></p><p>Resource 3</p><p><br></p><p>Worship in the last 10 days:</p><p>Resource 1</p><p><br></p><p>Resource 2</p><p><br></p><p>Resource 3</p><p><br></p><p>Maximising the last 10 nights:</p><p>Resource 1</p><p><br></p><p>Resource 2</p><p><img data-filename=\"banner.jpeg\" style=\"width: 1541px;\" src=\"/uploads/images/participant/16894138720.jpeg\"><br></p><p>Resource 3</p><p><br></p><p>Forgiveness on Laylatul Qadr:</p><p>&Atilde;&#131;&Acirc;&cent;&Atilde;&cent;&acirc;&#128;&#154;&Acirc;&not;&Atilde;&#133;&acirc;&#128;&#156;Whoever spends the night of Laylat al-Qadr in prayer out of faith and in the hope of reward, his previous sins will be forgiven. (Narrated by al-Bukhaari, 1901; Muslim, 759.)</p><p><br></p><p>Resource 1</p><p><br></p><p>Resource 2</p><p><br></p><p>Maintaining our Ramadan Habits:</p><p>Resource 1</p><p><br></p><p>Resource 2</p><p><br></p><p>Resource 3</p><p></p><p></p></p>\n', '2023-07-15 03:35:41', '2023-07-15 03:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `removable` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `module`, `name`, `guard_name`, `removable`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'access-dashboard', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(2, 'dashboard', 'dashboard-manage', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(3, 'admin-user', 'admin-user-manage', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(4, 'admin-user', 'admin-user-add', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(5, 'admin-user', 'admin-user-edit', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(6, 'admin-user', 'admin-user-delete', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(7, 'admin-user', 'admin-user-impersonate', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(8, 'admin-user', 'admin-user-access-dashboard', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(9, 'user', 'user-manage', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(10, 'user', 'user-add', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(11, 'user', 'user-edit', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(12, 'user', 'user-delete', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(13, 'user', 'user-impersonate', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(14, 'user', 'user-access-dashboard', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(15, 'activity', 'activity-manage', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(16, 'activity', 'activity-add', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(17, 'activity', 'activity-edit', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(18, 'activity', 'activity-delete', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(19, 'permission', 'permission-manage', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(20, 'permission', 'permission-add', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(21, 'permission', 'permission-edit', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(22, 'permission', 'permission-delete', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(23, 'permission', 'permission-change', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(24, 'role', 'role-manage', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(25, 'role', 'role-add', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(26, 'role', 'role-edit', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(27, 'role', 'role-delete', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(28, 'role', 'role-change', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(29, 'backup', 'backup-manage', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(30, 'backup', 'backup-delete', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(31, 'visitor', 'visitor-manage', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(32, 'visitor', 'visitor-delete', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(33, 'setting', 'setting-manage', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(34, 'setting', 'language-manage', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `president_addresses`
--

CREATE TABLE `president_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `president_addresses`
--

INSERT INTO `president_addresses` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: center;\">President\'s Address at Annual General Meeting<p style=\"text-align: center;\">Held on 1st of October</p><p style=\"text-align: center;\">&Oslash;&uml;&Ugrave;&#144;&Oslash;&sup3;&Ucirc;&iexcl;&Ugrave;&#133;&Ugrave;&#144; &Ugrave;&plusmn;&Ugrave;&#132;&Ugrave;&#132;&Ugrave;&#135;&Ugrave;&#144; &Ugrave;&plusmn;&Ugrave;&#132;&Oslash;&plusmn;&Ugrave;&#142;&Ugrave;&#145;&Oslash;&shy;&Ucirc;&iexcl;&Ugrave;&#133;&Ugrave;&#142;&Ugrave;&#128;&Ugrave;&deg;&Ugrave;&#134;&Ugrave;&#144; &Ugrave;&plusmn;&Ugrave;&#132;&Oslash;&plusmn;&Ugrave;&#142;&Ugrave;&#145;&Oslash;&shy;&Ugrave;&#144;&Ugrave;&#138;&Ugrave;&#133;&Ugrave;&#144;</p><p style=\"text-align: center;\"><br></p><p style=\"text-align: center;\">&Oslash;&uml;&Oslash;&sup3;&Ugrave;&#133; &Oslash;&sect;&Ugrave;&#132;&Ugrave;&#132;&Ugrave;&#135; &Oslash;&sect;&Ugrave;&#132;&Oslash;&plusmn;&Oslash;&shy;&Ugrave;&#133;&Ugrave;&#134; &Oslash;&sect;&Ugrave;&#132;&Oslash;&plusmn;&Oslash;&shy;&Ugrave;&#138;&Ugrave;&#133;</p><p style=\"text-align: center;\">&Oslash;&plusmn;&Ugrave;&#142;&Oslash;&uml;&Ugrave;&#144;&Ugrave;&#145; &Oslash;&sect;&Oslash;&acute;&Ugrave;&#146;&Oslash;&plusmn;&Ugrave;&#142;&Oslash;&shy;&Ugrave;&#146; &Ugrave;&#132;&Ugrave;&#144;&Ugrave;&#138; &Oslash;&micro;&Ugrave;&#142;&Oslash;&macr;&Ugrave;&#146;&Oslash;&plusmn;&Ugrave;&#144;&Ugrave;&#138; &Ugrave;&#136;&Ugrave;&#142;&Ugrave;&#138;&Ugrave;&#142;&Oslash;&sup3;&Ugrave;&#144;&Ugrave;&#145;&Oslash;&plusmn;&Ugrave;&#146; &Ugrave;&#132;&Ugrave;&#144;&Ugrave;&#138; &Oslash;&pound;&Ugrave;&#142;&Ugrave;&#133;&Ugrave;&#146;&Oslash;&plusmn;&Ugrave;&#144;&Ugrave;&#138; &Ugrave;&#136;&Ugrave;&#142;&Oslash;&sect;&Oslash;&shy;&Ugrave;&#146;&Ugrave;&#132;&Ugrave;&#143;&Ugrave;&#132;&Ugrave;&#146; &Oslash;&sup1;&Ugrave;&#143;&Ugrave;&#130;&Ugrave;&#146;&Oslash;&macr;&Ugrave;&#142;&Oslash;&copy;&Ugrave;&#139; &Ugrave;&#133;&Ugrave;&#144;&Ugrave;&#134;&Ugrave;&#146; &Ugrave;&#132;&Ugrave;&#144;&Oslash;&sup3;&Ugrave;&#142;&Oslash;&sect;&Ugrave;&#134;&Ugrave;&#144;&Ugrave;&#138; &Ugrave;&#138;&Ugrave;&#142;&Ugrave;&#129;&Ugrave;&#146;&Ugrave;&#130;&Ugrave;&#142;&Ugrave;&#135;&Ugrave;&#143;&Ugrave;&#136;&Oslash;&sect; &Ugrave;&#130;&Ugrave;&#142;&Ugrave;&#136;&Ugrave;&#146;&Ugrave;&#132;&Ugrave;&#144;&Ugrave;&#138;</p><p style=\"text-align: justify;\">&acirc;&#128;&#156;My Lord, expand for me my chest [with assurance] and ease for me my task and untie the knot from my tongue so that&nbsp;<span style=\"font-weight: var(--bs-body-font-weight);\">they may understand my speech.&acirc;&#128;&#157;</span></p><p style=\"text-align: justify;\">We come together today on a blessed Friday to close the association&acirc;&#128;&#153;s year and start a new breath of life. Howeverm<span style=\"font-weight: var(--bs-body-font-weight);\">before that, let&acirc;&#128;&#153;s take a moment to reflect on how far we&acirc;&#128;&#153;ve come as an association this year.</span></p><p style=\"text-align: justify;\">Let\'s all ask the question: why does the MSA do work, and who is it for? The reason why we struggle between our&nbsp;<span style=\"font-weight: var(--bs-body-font-weight);\">responsibilities and MSA activities is for our religion and our community. We do it so Muslims like me and you, no&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">matter how religious, feel like we are part of one family. We come from a plethora of backgrounds, races,</span></p><p style=\"text-align: justify;\">ethnicities, and we all want to feel accepted, understood, seen and heard. We as the MSA take the rough path so all&nbsp;<span style=\"font-weight: var(--bs-body-font-weight);\">lives of Muslims become easier, happier, and more fulfilled. May Allah accept our sacrifices.</span></p><p style=\"text-align: justify;\">Our biggest mission as Muslims is to invite our contemporaries to come to know of Allah and worship him as the One and&nbsp;<span style=\"font-weight: var(--bs-body-font-weight);\">Only god. Allah says in Al-Baqarah verse 21 O mankind, serve your Lord Who created you and those before you, so that&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">you may guard against evil. This is part of our mission, and we expect rewards only from Him in this life and the&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">hereafter.</span></p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\">I am honoured and humbled to be part of such an amazing organisation, committee, and community. Every single person&nbsp;<span style=\"font-weight: var(--bs-body-font-weight);\">that I have come across throughout my journey has helped me grow in one way or another and I hope that the people who&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">are attending today&acirc;&#128;&#153;s AGM have also been touched in one way or another.</span></p><p style=\"text-align: justify;\">We have achieved so much this year. A new team, the MSA Creative team headed by Zahina Shah, saw a gap in the&nbsp;<span style=\"font-weight: var(--bs-body-font-weight);\">representation of CALD groups in the creative scene and innovated an amazing initiative. We had our biggest ever&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">Community Iftar in history with the largest attendance ever recorded. We started up weekly dawah stalls that broke&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">down stereotypes, answered questions and increased our presence on campus. We had our first ever Career Expo to&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">fill the gap that Muslims face when entering the workforce. We have our amazing postgraduate students who&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">hold religious discussions monthly, tackling difficult issues such as secularism, feminism and so much more. The&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">Women\'s Gala that started only last year for the first time will also be making a comeback at the end of&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">this year. This is only some of the achievements that this team has managed to accomplish.</span></p><p style=\"text-align: justify;\">If you&acirc;&#128;&#153;re not convinced by how amazing this team is already, all you have to do is attend any one of our events and&nbsp;<span style=\"font-weight: var(--bs-body-font-weight);\">see how passionate we are to bringing change and initiating new policies for Muslim students on campus. However, none&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">of this would become possible without the support and participation that we receive from fellow students and the&nbsp;</span><span style=\"font-weight: var(--bs-body-font-weight);\">larger community in Perth.</span></p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\">With that I would like to say that this has been an amazing year. May Allah accept all of our sacrifices and Insyallah&nbsp;<span style=\"font-weight: var(--bs-body-font-weight);\">next year becomes an even better one by Allah&acirc;&#128;&#153;s grace.</span></p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\">Amira Nunn&nbsp;<span style=\"font-weight: var(--bs-body-font-weight);\">2021 President of UWA Muslim Student&acirc;&#128;&#153;s Association</span></p></p>\n', '2023-07-06 01:01:15', '2023-07-06 01:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `removable` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `removable`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37'),
(2, 'admin', 'web', 0, '2023-06-25 17:05:37', '2023-06-25 17:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'app_name', 'West Coast Islamic Center'),
(2, 'app_logo', 'logo.png'),
(3, 'app_description', 'West Coast Islamic Center'),
(4, 'app_keyword', 'West Coast Islamic Center'),
(5, 'credit_footer', 'Yahya Gilani'),
(6, 'footer_credit', 'Yahya Gilani'),
(7, 'footer_credit_url', '.com'),
(8, 'footer_credit_link', '.com'),
(9, 'app_nav_logo', 'nav-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(1000) DEFAULT NULL,
  `image` varchar(30) NOT NULL,
  `icon` varchar(30) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'image14203aa56b.jpg', NULL, 1, '2023-07-30 20:49:43', '2023-07-30 20:49:43'),
(2, NULL, NULL, 'imagef9646b328d.jpg', NULL, 1, '2023-07-30 20:50:54', '2023-07-30 20:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<h2 style=\"text-align: center; line-height: 1.1; margin-bottom: 20px;\">Sponsors<p><br style=\"text-align: center;\"></p><p class=\"lead\" style=\"text-align: center; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 24px;\">&Oslash;&uml;&Ugrave;&#144;&Oslash;&sup3;&Ucirc;&iexcl;&Ugrave;&#133;&Ugrave;&#144; &Ugrave;&plusmn;&Ugrave;&#132;&Ugrave;&#132;&Ugrave;&#135;&Ugrave;&#144; &Ugrave;&plusmn;&Ugrave;&#132;&Oslash;&plusmn;&Ugrave;&#142;&Ugrave;&#145;&Oslash;&shy;&Ucirc;&iexcl;&Ugrave;&#133;&Ugrave;&#142;&Ugrave;&#128;&Ugrave;&deg;&Ugrave;&#134;&Ugrave;&#144; &Ugrave;&plusmn;&Ugrave;&#132;&Oslash;&plusmn;&Ugrave;&#142;&Ugrave;&#145;&Oslash;&shy;&Ugrave;&#144;&Ugrave;&#138;&Ugrave;&#133;&Ugrave;&#144;</p><h3 style=\"text-align: center; line-height: 24px; margin-top: 20px; margin-bottom: 10px;\">Special thank you to all of our generous sponsors.&nbsp;Members of the UWAMSA are entitled discounts from the following sponsors.</h3><h3 style=\"text-align: center; line-height: 24px; margin-top: 20px; margin-bottom: 10px;\">Please note: in order to recieve your discount, you must present your 2021 UWAMSA membership card. These offers are valid until 01/02/2022.</h3><h3 style=\"text-align: center; line-height: 24px; margin-top: 20px; margin-bottom: 10px;\">If you are a 2021 UWAMSA member but do not own a membership card, please&nbsp;<a href=\"http://uwamsa.org/contact-us.html\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 300ms ease 0s, background-color 300ms ease 0s;\">contact us</a>.</h3></h2>\n', '2023-07-15 21:57:39', '2023-07-15 21:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `d_o_b` date DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `image`, `phone`, `address`, `d_o_b`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Developer', 'admin@app.com', 1, NULL, NULL, '1725848515', 'Hatboalia, Alamdanga, Chuadaga', NULL, '$2y$10$O91MvGXxcEv0LgMRMa4YrOwJmIMfE.305BI2FkkM/pu63s58myvG6', NULL, NULL, NULL, NULL, '2023-06-25 17:05:38', '2023-06-25 17:05:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donates`
--
ALTER TABLE `donates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_dawahs`
--
ALTER TABLE `event_dawahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_us`
--
ALTER TABLE `join_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `participant_infos`
--
ALTER TABLE `participant_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `president_addresses`
--
ALTER TABLE `president_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_key_index` (`key`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donates`
--
ALTER TABLE `donates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_dawahs`
--
ALTER TABLE `event_dawahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `join_us`
--
ALTER TABLE `join_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `participant_infos`
--
ALTER TABLE `participant_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `president_addresses`
--
ALTER TABLE `president_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
