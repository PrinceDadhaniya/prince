-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2025 at 07:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prince-gpm-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_us_image_1` varchar(255) DEFAULT NULL,
  `about_us_title_1` varchar(255) DEFAULT NULL,
  `about_us_description_1` text DEFAULT NULL,
  `about_us_image_2` varchar(255) DEFAULT NULL,
  `about_us_title_2` varchar(255) DEFAULT NULL,
  `about_us_description_2` text DEFAULT NULL,
  `about_us_image_3` varchar(255) DEFAULT NULL,
  `about_us_title_3` varchar(255) DEFAULT NULL,
  `about_us_description_3` text DEFAULT NULL,
  `mission_image` varchar(255) DEFAULT NULL,
  `mission_title` varchar(255) DEFAULT NULL,
  `mission_description` text DEFAULT NULL,
  `vision_image` varchar(255) DEFAULT NULL,
  `vision_title` varchar(255) DEFAULT NULL,
  `vision_description` text DEFAULT NULL,
  `goals_image` varchar(255) DEFAULT NULL,
  `goals_title` varchar(255) DEFAULT NULL,
  `goals_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_us_image_1`, `about_us_title_1`, `about_us_description_1`, `about_us_image_2`, `about_us_title_2`, `about_us_description_2`, `about_us_image_3`, `about_us_title_3`, `about_us_description_3`, `mission_image`, `mission_title`, `mission_description`, `vision_image`, `vision_title`, `vision_description`, `goals_image`, `goals_title`, `goals_description`, `created_at`, `updated_at`) VALUES
(1, 'uploads/aboutus/1735538591_Google-chrome-will-block-mixed-content-809x425.png', 'Ut sunt blanditiis a', 'When launching a startup, founders typically have an idea of what they want to achieve — a vision of what success will look like. During the strategic planning process, it’s important to put this vision into concrete terms.', 'uploads/aboutus/1735538591_A-peek-into-the-future-of-Google-809x425.png', 'Quia elit culpa aut', 'When launching a startup, founders typically have an idea of what they want to achieve — a vision of what success will look like. During the strategic planning process, it’s important to put this vision into concrete terms.', 'uploads/aboutus/1735538591_A-peek-into-the-future-of-Google-809x425.png', 'Adipisci nisi explic', 'When launching a startup, founders typically have an idea of what they want to achieve — a vision of what success will look like. During the strategic planning process, it’s important to put this vision into concrete terms.', 'uploads/aboutus/1735538591_our-goals-list-card-with-colorful-brush-strokes-vector-21757396.jpg', 'Dolores fuga Labore', 'When launching a startup, founders typically have an idea of what they want to achieve — a vision of what success will look like. During the strategic planning process, it’s important to put this vision into concrete terms.', 'uploads/aboutus/1735538591_vision.png', 'Amet dolore optio', 'When launching a startup, founders typically have an idea of what they want to achieve — a vision of what success will look like. During the strategic planning process, it’s important to put this vision into concrete terms.', 'uploads/aboutus/1735538591_Google-chrome-will-block-mixed-content-809x425.png', 'Veniam aut numquam', 'When launching a startup, founders typically have an idea of what they want to achieve — a vision of what success will look like. During the strategic planning process, it’s important to put this vision into concrete terms.', '2024-12-30 00:33:11', '2025-03-08 07:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `product_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(161, 67, 'Main', 'Straight length, I-Line Busway, 1000A, 600VAC, 3 phase, 4 wire, integral ground bus, Al, plug in, 10ft', '2025-03-06 00:12:02', '2025-03-06 00:12:02'),
(162, 67, 'Complementary', 'Straight length, I-Line Busway, 1000A, 600VAC, 3 phase, 4 wire, integral ground bus, Al, plug in, 10ft', '2025-03-06 00:12:02', '2025-03-06 00:12:02'),
(163, 67, 'Environment', 'Straight length, I-Line Busway, 1000A, 600VAC, 3 phase, 4 wire, integral ground bus, Al, plug in, 10ft', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(164, 67, 'Packing Units', 'Straight length, I-Line Busway, 1000A, 600VAC, 3 phase, 4 wire, integral ground bus, Al, plug in, 10ft', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(165, 68, 'Main', 'Straight length, I-Line Busway, 400A, 600VAC, 3 phase, 4 wire, no integral ground bus, Al, plug in, 10ft', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(166, 68, 'Complementary', 'Straight length, I-Line Busway, 400A, 600VAC, 3 phase, 4 wire, no integral ground bus, Al, plug in, 10ft', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(167, 68, 'Packing Units', 'Straight length, I-Line Busway, 400A, 600VAC, 3 phase, 4 wire, no integral ground bus, Al, plug in, 10ft', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(168, 68, 'Contractual warranty', 'Straight length, I-Line Busway, 400A, 600VAC, 3 phase, 4 wire, no integral ground bus, Al, plug in, 10ft', '2025-03-06 00:49:35', '2025-03-06 00:49:35'),
(169, 69, 'Main', 'Straight distribution length, Canalis KN, additional, aluminium, 40A, 3L+N+PE, fixed length 3m, 1 outlet, RAL9001', '2025-03-06 01:45:59', '2025-03-06 01:45:59'),
(170, 69, 'Complementary', 'Straight distribution length, Canalis KN, additional, aluminium, 40A, 3L+N+PE, fixed length 3m, 1 outlet, RAL9001', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(171, 70, 'Main', 'Add-on residual current device, Acti9 Vigi NG125, 2P, 63A, AC type, instantaneous, 30mA, 230...415VAC', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(172, 70, 'Complementary', 'Add-on residual current device, Acti9 Vigi NG125, 2P, 63A, AC type, instantaneous, 30mA, 230...415VAC', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(173, 71, 'Main', 'miniature circuit breaker - iK60N - 2P - 40 A - C curve', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(174, 71, 'Complementary', 'miniature circuit breaker - iK60N - 2P - 40 A - C curve', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(175, 71, 'Environment', 'miniature circuit breaker - iK60N - 2P - 40 A - C curve', '2025-03-06 06:05:49', '2025-03-06 06:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `serial_number` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `category_id`, `image`, `description`, `serial_number`, `created_at`, `updated_at`) VALUES
(4, 'Test', 69, 'brands/678dfe8d3069f.jpg', 'The traditional way of producing electric power and supplying it to end customers was straightforward. The electricity was produced in bulk via large power plants, transmitted through high voltage lines to the supply stations, and then through distribution lines,', 1, '2024-12-30 06:04:18', '2025-03-05 23:43:48'),
(6, 'Alika Mills', 41, 'brands/678e000a04598.jpg', 'Advanced Distribution Management Systems: The Foundation of Distribution System Operations  Advanced Distribution Management Systems: The Foundation of Distribution System Operations  Advanced Distribution Management Systems: The Foundation of Distribution System Operations Advanced Distribution Management Systems: The Foundation of Distribution System Operations', 3, '2025-01-01 04:51:49', '2025-03-03 02:08:20'),
(7, 'Clementine Mueller', 49, 'brands/678e0030379c5.jpg', 'Nonetheless, to defer the expense of retrofitting distribution circuits, they are being loaded more heavily, closer to their limits.', 4, '2025-01-01 04:52:13', '2025-03-03 02:19:31'),
(13, 'steel', 39, 'brands/67b56b866c1ab.jpg', 'Because output from renewable DER are variable by nature, and time and location of electric vehicle charging is difficult to predict', 5, '2025-02-18 23:56:30', '2025-03-03 02:19:10'),
(14, 'TATA STEEL', 42, 'brands/67b57f424db55.jpg', 'Identify systemwide options for capacity provisioning including flexible energy services that help reduce traditional network investment and enable greater market participation', 6, '2025-02-19 01:20:42', '2025-03-03 02:19:46'),
(15, 'JSW STEEL', 48, 'brands/67b58043a47ac.webp', 'A more sophisticated, intelligent, and digital way of managing the emerging distribution system is crucial for DSOs. The implementation of an Advanced Distribution Management System', 7, '2025-02-19 01:24:59', '2025-03-03 02:20:00'),
(16, 'Steel BYTE', 32, 'brands/67c92ee2774f0.webp', 'When brainstorming \"Steel\" brand name ideas, it is crucial to use short and powerful words that leave a lasting impact on the audience.', 2, '2025-03-05 23:43:06', '2025-03-05 23:43:06'),
(17, 'SteelMast', 69, 'brands/67c92f885817a.webp', 'Using symbolic language in your \"Steel\" brand name ideas can add depth and meaning to your brand\'s identity.', 8, '2025-03-05 23:45:52', '2025-03-05 23:45:52'),
(18, 'STEELAVE', 32, 'brands/67c9313e3438a.webp', 'Metaphors allow you to communicate complex ideas and emotions through your \"Steel\" brand name', 9, '2025-03-05 23:53:10', '2025-03-05 23:53:10'),
(19, 'MESCO STEEL', 79, 'brands/67c98d48585e6.jpg', 'In this blog, we delve into the world of steel and explore the top steel companies in India.', 10, '2025-03-06 06:25:52', '2025-03-06 06:31:04'),
(20, 'ESSAR STEEL', 78, 'brands/67c98da4cb55d.jpg', 'With an annual crude steel capacity of more than 30 million tonnes per annum, the company ranks second as the largest producer in Europe', 11, '2025-03-06 06:27:24', '2025-03-06 06:32:01'),
(21, 'JINDAL STEEL & POWER', 73, 'brands/67c98e42c3cb7.jpg', 'The Indian Steel Industry goes way back to the early 1600s. Today, there is a huge demand for steel in different sectors like construction, railways, automobiles, consumer durables, and others.', 12, '2025-03-06 06:30:02', '2025-03-06 06:30:02'),
(22, 'VISA STEEL', 73, 'brands/67c98f4febe84.webp', 'VISA Steel is in the mineral mining, metal production, and energy industries. It produces products made of iron and steel, such as high-carbon ferrochrome, sponge iron, pig iron, and special steel.', 13, '2025-03-06 06:34:31', '2025-03-06 06:34:31'),
(23, 'FAA STEEL', 78, 'brands/67c98fd8f1927.png', 'FAA Steel was founded in 1990, as an independent steel trading company. For more than 30 years FAA Steel has been an industry leader in steel supplier.', 14, '2025-03-06 06:36:48', '2025-03-06 06:36:48'),
(24, 'AS STEEL', 73, 'brands/67c9904b8dc72.png', 'BIS certification and Mill test report mark the high-grade quality of the Steel.', 15, '2025-03-06 06:38:43', '2025-03-06 06:38:43'),
(25, 'BAO STEEL', 73, 'brands/67c990edbcf1c.webp', 'Baosteel, also known as Baowu Steel, was founded in 1978 and is headquartered in Pudong, Shanghai.', 16, '2025-03-06 06:41:25', '2025-03-06 06:41:25'),
(26, 'SANMARG STEEL', 73, 'brands/67c991d842de5.png', 'Trusted for over 25 years, Sanmarg Steel stands as a top steel manufacturing company in India, known for its commitment to quality and innovation.', 17, '2025-03-06 06:45:20', '2025-03-06 06:45:20'),
(27, 'ZAMIL STEEL', 73, 'brands/67c9927872ca8.webp', 'In the heart of the Arabian Peninsula, Saudi Arabia shines as an industrial powerhouse, and its steel industry takes centre stage in shaping the nation’s infrastructure and economic prosperity.', 18, '2025-03-06 06:48:00', '2025-03-06 06:48:00'),
(28, 'AGE STEEL', 73, 'brands/67c993032b35f.jpg', 'Dammam, the vibrant capital of the Eastern Province of Saudi Arabia, is not only a hub for oil and gas industries but also a crucial center for the steel supply sector.', 19, '2025-03-06 06:50:19', '2025-03-06 06:50:19'),
(29, 'Aasia STEEL', 79, 'brands/67c993c206473.webp', 'The Saudi steel industry not only meets domestic demand but also serves a growing international market.', 20, '2025-03-06 06:53:30', '2025-03-06 06:53:30'),
(30, 'ARJAS STEEL', 78, 'brands/67c994d66d050.webp', 'ARJAS STEEL IS ONE OF THE LEADING INTEGRATED PRODUCERS OF SPECIAL BAR QUALITY (SBQ) OR ALLOY STEEL IN INDIA.', 21, '2025-03-06 06:58:06', '2025-03-06 06:58:06'),
(31, 'BLUESCOPE STEEL', 78, 'brands/67c99628a130d.jpg', 'The steel industry specializes in the manufacturing and production of steel, pipes, and tubes.', 22, '2025-03-06 07:03:44', '2025-03-06 07:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `serial_number`, `name`, `slug`, `description`, `parent_id`, `image`, `created_at`, `updated_at`) VALUES
(32, '852456753215', 'Busway and Cable Management', 'busway-and-cable-management', 'Discover our busways, the most flexible option to carry and deliver energy throughout a building. They are especially effective in premises where reconfigurations are potentially frequent. Explore a diversity of cable ladders and mesh trays to fit cables into buildings for more traditional distribution system.', 34, NULL, '2025-01-28 05:47:26', '2025-02-05 07:46:25'),
(33, '412356752437', 'Power Busways', 'power-busways', 'Canalis power busways can harness every level of a power distribution system, in whatever building, from offices to heavy-duty industrial sites. Its flexibilty allows users to quickly plug in and out machines, or other appliances, and to easily reconfigure their distribution architecture.', 32, '1738065757.jpg', '2025-01-28 06:32:37', '2025-01-28 06:32:37'),
(34, '429751246973', 'Lighting Busways', 'lighting-busways', 'Canalis power busways can harness every level of a power distribution system, in whatever building, from offices to heavy-duty industrial sites.', 32, '1738065982.jpg', '2025-01-28 06:36:22', '2025-01-28 06:36:22'),
(41, 'AHD142JDR13R', 'Electric Vehicle (EV) Charging', 'electric-vehicle-ev-charging', 'EV charging infrastructure load management, access management and supervision solution.', 41, '1739001696.jpg', '2025-02-08 02:31:36', '2025-03-05 06:19:38'),
(43, 'dewfgravfvfdsav', 'abc', 'abc', 'Busbar trunking for low power distribution 160A', 66, '1739361587.jpg', '2025-02-12 06:29:47', '2025-03-05 06:23:08'),
(64, '233', 'werfg`qwedf', 'e23eref', '2wedf', 64, '1740984060.png', '2025-03-03 01:11:00', '2025-03-03 01:11:17'),
(66, '4', 'I-Line Busway', 'i-line-busway', 'Maximum ratings are 5000 A Copper and 4000 A Aluminum (600V). Available in both plug-in and feeder busway types.', 66, '1741175530.jpg', '2025-03-05 06:22:10', '2025-03-05 06:29:57'),
(69, '1', 'Busway and Cable Management', 'busway-and-cable-management', 'Discover our busways, the most flexible option to carry and deliver energy throughout a building. They are especially effective in premises where', NULL, '1741237385.jpg', '2025-03-05 23:33:05', '2025-03-05 23:33:05'),
(70, '2', 'I-Line Busway', 'i-line-busway', 'Maximum ratings are 5000 A Copper and 4000 A Aluminum (600V). Available in both plug-in and feeder busway types.', 69, '1741237433.jpg', '2025-03-05 23:33:53', '2025-03-05 23:33:53'),
(71, '3', 'Canalis KN', 'canalis-kn', 'Busbar trunking for low power distribution 160A', 69, '1741242664.jpg', '2025-03-06 01:01:04', '2025-03-06 01:01:04'),
(72, '5', 'Circuit Breakers and Switches', 'circuit-breakers-and-switches', 'Schneider Electric has been setting the standard in circuit breakers.', NULL, '1741247105.jpg', '2025-03-06 02:15:05', '2025-03-07 06:42:51'),
(73, 'asd435', 'ACB (Air Circuit Breaker) - EasyPact MVS', 'acb-air-circuit-breaker-easypact-mvs', 'High current air circuit breakers (ACB) up to 4000 A', 72, '1741247284.jpg', '2025-03-06 02:18:04', '2025-03-06 02:18:04'),
(74, 'fdghjfd', 'MasterPacT MTZ Active', 'masterpact-mtz-active', 'Reliable and high-performance circuit breakers to protect lines up to 6300 A', 72, '1741247568.jpg', '2025-03-06 02:22:48', '2025-03-06 02:22:48'),
(75, 'saafdcs', 'AVEVA™ Plant SCADA', 'aveva-plant-scada', 'High performance site SCADA software solution, enabling smart manufacturing through Plant Technology Modernization.', NULL, '1741247750.jpg', '2025-03-06 02:25:50', '2025-03-06 02:25:50'),
(76, 'dssgfds', 'Acti9 Miniature Circuit Breaker - MCB', 'acti9-miniature-circuit-breaker-mcb', 'Learn which protective devices suit you best for direct current applications up to 380 V DC.', NULL, '1741247885.jpg', '2025-03-06 02:28:05', '2025-03-06 02:28:05'),
(77, 'hjdfsastyjk', 'MCB for Protection - Acti9 iC60', 'mcb-for-protection-acti9-ic60', 'Giving you absolute peace of mind when it comes to electrical circuit protection and continuity of service, the miniature circuit breakers (MCB) are especially ideal if you are working within polluted environments and networks', 76, '1741248002.jpg', '2025-03-06 02:30:02', '2025-03-06 02:30:02'),
(78, 'sadfgfd', 'Acti 9 NG125', 'acti-9-ng125', 'High performance Miniature Circuit Breakers up to 125 A', NULL, '1741258638.jpg', '2025-03-06 05:27:18', '2025-03-06 05:27:18'),
(79, 'jkhhfds', 'Acti 9 iK60', 'acti-9-ik60', 'Modular circuit-breaker up to 63A', 78, '1741259634.jpg', '2025-03-06 05:43:54', '2025-03-06 05:43:54'),
(80, 'hfgdssdfg', 'Motor Starter and Protection Component', 'motor-starter-and-protection-component', 'The primary function of a motor is to start and stop the current in the connected system. It is a twofold mechanism, wherein the starter manually or automatically starts or stops the power and protects the motor from overload or faults.', NULL, '1741261525.jpg', '2025-03-06 06:15:25', '2025-03-06 06:15:25'),
(81, 'hgfdsad', 'TeSys LF', 'tesys-lf', 'Enclosed direct-on-line starters for use on AS-Interface line up to 5,5kW/400V', 80, '1741261696.jpg', '2025-03-06 06:18:16', '2025-03-06 06:18:16'),
(82, 'hgfdsrhj', 'Enclosed Motor Starter Solution guide', 'enclosed-motor-starter-solution-guide', 'The software to help you to select intuitively your enclosed motor starter solution', 80, '1741261844.jpg', '2025-03-06 06:20:44', '2025-03-06 06:20:44'),
(83, 'jhgfds', 'Wireless energy sensor', 'wireless-energy-sensor', 'PowerTag® is a compact and easy-to-install Class 1 wireless communication energy sensor that monitors and measures energy and power in real time.', NULL, '1741264741.jpg', '2025-03-06 07:09:01', '2025-03-06 07:09:01'),
(84, 'jfhgds', 'PowerLogic™ PM5000 Power Meters', 'powerlogic-pm5000-power-meters', 'Compact, versatile, digital power meter for energy cost and basic network management applications. The PowerLogic PM5000 series power meters are the new benchmark in affordable, precision metering. The value you want, the precision you need.', NULL, '1741264858.jpg', '2025-03-06 07:10:58', '2025-03-06 07:10:58'),
(85, 'iuytredsf', 'Acti9 iEM3000', 'acti9-iem3000', 'Feature-rich energy meter for DIN rail, modular enclosures in commercial and non-critical buildings', NULL, '1741264976.jpg', '2025-03-06 07:12:56', '2025-03-06 07:12:56'),
(86, 'tyrfdcvbn', 'Acti9 iEM2000', 'acti9-iem2000', 'DIN rail KWh meters for single-phase circuits up to 63A', NULL, '1741265067.jpg', '2025-03-06 07:14:27', '2025-03-06 07:14:27'),
(87, 'uiytrdcvbn', '22 mm Pushbuttons, switches, pilot lights', '22-mm-pushbuttons-switches-pilot-lights', 'The Harmony XB7 range of Ø 22 mm plastic pushbuttons and pilot lights offers a monolithic, optimized design that provides complete functions in a single part number, simplifying ordering and installation in electrical distribution and machine applications.', NULL, '1741265236.jpg', '2025-03-06 07:17:16', '2025-03-06 07:17:16'),
(88, 'bzaewrtytr', 'Harmony XB4', 'harmony-xb4', 'The modular Harmony XB4 range of 22 mm metal control and signaling units combines simplicity of installation, efficiency, modern design, flexibility, and robustness to meet most industrial applications.', NULL, '1741265309.jpg', '2025-03-06 07:18:29', '2025-03-06 07:18:29'),
(89, 'cbfdsvifsfvjf', 'Harmony XB5', 'harmony-xb5', 'The modular Harmony XB5 range of 22 mm plastic control and signaling units combines simplicity of installation, efficiency, flexibility, modern design and robustness to meet most industrial applications.', NULL, '1741265393.jpg', '2025-03-06 07:19:53', '2025-03-06 07:19:53'),
(90, 'styukmnbvc', 'PowerLogic AccuSine™ PCS Plus Power Correction System', 'powerlogic-accusine-pcs-plus-power-correction-system', 'AccuSine PCS+ is a flexible, high performance, cost-effective solution for stabilizing electrical networks by providing harmonic mitigation, power factor correction and load balancing.', NULL, '1741265744.jpg', '2025-03-06 07:25:44', '2025-03-06 07:25:44'),
(91, 'bvcxbfdh', 'PowerLogic AccuSine™ PCSn Neutral Harmonic Filters', 'powerlogic-accusine-pcsn-neutral-harmonic-filters', 'The AccuSine PCSn series is a scalable and flexible, high performance active harmonic filtering solution that brings reliability and efficiency to your electrical system, resulting in increased uptime, greater operational efficiency, prolonged equipment life, and improved energy efficiency.', NULL, '1741266092.jpg', '2025-03-06 07:31:32', '2025-03-06 07:31:32'),
(92, 'nxcrjuumil,f', 'PowerLogic™ AccuSine PFV+', 'powerlogic-accusine-pfv', 'AccuSine PVF+ can be operated as a displacement power factor correction and/or load balancing device.', NULL, '1741266300.jpg', '2025-03-06 07:35:00', '2025-03-06 07:35:00'),
(93, 'vfdgtsjukujg', 'EasyLogic APF', 'easylogic-apf', 'EasyLogic APF is a scalable, flexible and cost-effective active harmonic filtering solution for stabilizing electrical networks by providing harmonic mitigation, power factor correction and mains load balancing.', NULL, '1741266412.jpg', '2025-03-06 07:36:52', '2025-03-06 07:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `contactus_form_submission`
--

CREATE TABLE `contactus_form_submission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus_form_submission`
--

INSERT INTO `contactus_form_submission` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'abcd', 'abcd@gmail.com', '1234567890', 'rtyuj cvbnm,m iolk., guhikdr', '2025-03-03 07:12:04', '2025-03-03 07:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_details`
--

CREATE TABLE `contact_us_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us_details`
--

INSERT INTO `contact_us_details` (`id`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(25, 'Maruti Industrial Area, Rolex Road,\r\nNear Maldhari Railway,Crossing,\r\nRajkot, (Gujarat-INDIA) 360004.', '+91 82005 01951', 'support@nextgroup.in', '2025-03-05 02:42:36', '2025-03-05 04:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `product_id`, `type`, `file_path`, `created_at`, `updated_at`) VALUES
(92, 67, 'Software', 'documents/67c935abc07dd.pdf', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(93, 67, 'PDF', 'documents/67c935abd2bb7.pdf', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(94, 68, 'Software', 'documents/67c93e7723bad.pdf', '2025-03-06 00:49:35', '2025-03-06 00:49:35'),
(95, 68, 'PDF', 'documents/67c93e77385a5.pdf', '2025-03-06 00:49:35', '2025-03-06 00:49:35'),
(96, 68, 'Driver', 'documents/67c93e7748614.pdf', '2025-03-06 00:49:35', '2025-03-06 00:49:35'),
(97, 68, 'Software', 'documents/67c93e7751aeb.pdf', '2025-03-06 00:49:35', '2025-03-06 00:49:35'),
(98, 68, 'PDF', 'documents/67c93e7757d7b.pdf', '2025-03-06 00:49:35', '2025-03-06 00:49:35'),
(99, 69, 'Software', 'documents/67c94bb1ab308.pdf', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(100, 69, 'PDF', 'documents/67c94bb1bbd1b.pdf', '2025-03-06 01:46:02', '2025-03-06 01:46:02'),
(101, 69, 'Software', 'documents/67c94bb28b463.pdf', '2025-03-06 01:46:02', '2025-03-06 01:46:02'),
(102, 70, 'PDF', 'documents/67c9826968bcc.pdf', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(103, 70, 'Software', 'documents/67c982697bca9.pdf', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(104, 71, 'PDF', 'documents/67c988961ce20.pdf', '2025-03-06 06:05:50', '2025-03-06 06:05:50'),
(105, 71, 'PDF', 'documents/67c988962efad.pdf', '2025-03-06 06:05:50', '2025-03-06 06:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `documents_sections`
--

CREATE TABLE `documents_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `document_category` varchar(255) NOT NULL,
  `document_brand` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents_sections`
--

INSERT INTO `documents_sections` (`id`, `document_name`, `document_type`, `document_category`, `document_brand`, `description`, `file_path`, `created_at`, `updated_at`) VALUES
(2, 'folder', 'PDF', 'sdafd', 'Clementine Mueller', 'sgdytfc cfvcf ctvtvf dtrc', 'https://www.youtube.com/', '2025-02-27 04:30:23', '2025-02-27 04:30:23'),
(3, 'abcdef', 'Driver', 'sdafd', 'JSW STEEL', 'lkghfd reytru7i f retr', 'https://www.youtube.com/', '2025-02-27 04:55:34', '2025-02-27 04:55:34'),
(4, 'file', 'Driver', 'Low Voltage Products and Systems', 'Test', 'hfdhtrs yty uyju e rt res', 'https://www.youtube.com/', '2025-02-27 05:25:44', '2025-02-27 05:25:44'),
(5, 'xyz', 'Software', 'Busway and Cable Management', 'TATA STEEL', 'oiuytre dfghj hgfd', 'https://www.se.com/id/en/about-us/company-purpose/', '2025-02-27 07:20:39', '2025-02-27 07:20:39'),
(6, 'sdf', 'PDF', 'Busway and Cable Management', 'JSW STEEL', 'fdsgfrg5rt tyhytjyu rtgretctrgca rgeytr', 'https://www.youtube.com/', '2025-02-27 23:22:54', '2025-02-27 23:22:54'),
(7, 'sdcd', 'PDF', 'zxc', 'Alika Mills', 'qwsdc', 'asd', '2025-03-03 01:24:07', '2025-03-03 01:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `document_brand`
--

CREATE TABLE `document_brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `serial_number` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_brand`
--

INSERT INTO `document_brand` (`id`, `name`, `description`, `serial_number`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PDF', 'abcdef', 1, 'document-brands/67b82aeb6e27e.jpg', '2025-02-21 01:57:39', '2025-02-26 23:47:15'),
(4, 'File', 'new', 2, 'document-brands/67b834c47a199.png', '2025-02-21 02:39:40', '2025-02-21 02:40:00'),
(5, 'Folder', 'abcd frejav fgtrkjsg bgjbgb', 3, 'document-brands/67b8665165298.png', '2025-02-21 06:11:05', '2025-02-21 06:11:05'),
(6, 'Document', 'dfds hjyk ilvy6u', 4, 'document-brands/67b86683a7665.jpg', '2025-02-21 06:11:55', '2025-02-21 06:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `document_brands`
--

CREATE TABLE `document_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `serial_number` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_categories`
--

CREATE TABLE `document_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `serial_number` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_categories`
--

INSERT INTO `document_categories` (`id`, `name`, `slug`, `description`, `serial_number`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(6, 'Folderwerfg', 'folder', 'new', 2, '1740142608.jpg', 39, '2025-02-21 07:26:48', '2025-03-03 01:50:56'),
(34, 'steel', 'steel', 'dfds hjyk ilvy6u', 30, 'document_categories/DCqA3AZCDwODAPPmRcP12HiaFIPdxmPVTaZYmGOn.jpg', 34, '2025-02-26 06:38:28', '2025-02-26 06:39:07'),
(35, 'ffff', 'ffff', 'dfds hjyk ilvy6u', 8, 'document_categories/iiX2VRPogx3sgnp8rJGz5qvZ6pJ6ZtDpKC3GgnDd.jpg', 35, '2025-02-26 06:48:13', '2025-02-26 06:48:32'),
(36, 'dfg', 'dfg', 'Slider 2', 65, 'document_categories/l2vwpcoHlfcdzQKickchLuXnBYhhXv8JPCH0ZekJ.jpg', NULL, '2025-02-26 06:52:16', '2025-02-26 23:33:40'),
(39, 'qswddwd', 'wdwq', 'w', 21, 'document_categories/ekQCCDZWQqtrRMGpBsBh2y7ewExJobaNUQUPHwqZ.png', NULL, '2025-03-03 01:22:49', '2025-03-03 01:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `document_types`
--

CREATE TABLE `document_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `serial_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_types`
--

INSERT INTO `document_types` (`id`, `name`, `description`, `image`, `serial_number`, `created_at`, `updated_at`) VALUES
(1, 'PDF', 'asfdsf vfhvao vua', 'brands/67b5c06d27ef5.jpg', 1, '2025-02-19 05:58:45', '2025-02-19 05:58:45'),
(2, 'Document', 'fdewaf htrdhh dreta tre treystj', 'brands/67b5c139b89a5.jpg', 2, '2025-02-19 06:02:09', '2025-02-19 06:02:09'),
(3, 'File', 'desafr fgrfgr rtryvy', 'brands/67b5c1887cbff.png', 3, '2025-02-19 06:03:28', '2025-02-19 06:03:28'),
(4, 'Folder', 'gfragrg hytjuyu tuyusty treyt', 'brands/67b5c1a73cdb6.png', 4, '2025-02-19 06:03:59', '2025-02-19 06:03:59'),
(11, 'sdc', 'qws', 'brands/67c5517e072cb.png', 2122, '2025-03-03 01:21:42', '2025-03-03 01:21:42'),
(12, 'wd', 'qwdf', NULL, 5, '2025-03-03 01:22:05', '2025-03-03 01:22:05');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_documents`
--

CREATE TABLE `main_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(35, '0001_01_01_000000_create_users_table', 1),
(36, '0001_01_01_000001_create_cache_table', 1),
(37, '0001_01_01_000002_create_jobs_table', 1),
(38, '2024_11_26_034745_create_news_table', 1),
(39, '2024_11_27_073025_add_role_as_to_users_table', 1),
(40, '2024_11_28_060935_create_brands_table', 1),
(41, '2024_11_28_074734_create_sliders_table', 1),
(42, '2024_11_29_063024_create_news_details_table', 1),
(43, '2024_12_02_060630_create_categories_table', 1),
(44, '2024_12_02_105754_create_about_us_table', 1),
(45, '2024_12_03_065340_create_contactus_form_submission', 1),
(46, '2024_12_03_104301_create_secondsliders_table', 1),
(47, '2024_12_03_121406_create_minisiders_table', 1),
(48, '2024_12_05_123445_update_description_column_in_categories_table', 1),
(49, '2024_12_18_050547_create_products_table', 1),
(50, '2024_12_18_050559_create_attributes_table', 1),
(51, '2024_12_18_050603_create_documents_table', 1),
(52, '2024_12_26_110718_create_short_attributes_table', 2),
(53, '2024_12_27_052138_create_posts_table', 3),
(54, '2024_12_27_052634_create_main_documents_table', 3),
(55, '2025_02_18_095806_create_document_types_table', 4),
(61, '2025_02_19_070758_create_document_types_table', 5),
(62, '2025_02_20_051739_create_document_category_table', 6),
(63, '2025_02_20_125918_create_document_brand_table', 7),
(64, '2025_02_20_125918_create_document_brand_tables', 8),
(66, '2025_02_21_072353_create_document_brand_table', 9),
(67, '2025_02_20_051739_create_document_category_tables', 10),
(68, '2025_02_21_100343_create_document_categorie_table', 11),
(69, '2025_02_21_113704_update_document_brands_table', 12),
(76, '2025_02_24_064345_create_documents_sections_table', 13),
(77, '2025_03_04_062604_create_contact_us_details_table', 14),
(78, '2025_03_04_065613_create_contact_us_details_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `minisiders`
--

CREATE TABLE `minisiders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1-Hidden,0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `minisiders`
--

INSERT INTO `minisiders` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Test', 'Test', '1737367349.jpg', 0, '2024-12-30 06:05:53', '2025-01-20 04:32:29'),
(3, 'Test', 'Test', '1737367418.jpg', 0, '2024-12-30 06:06:11', '2025-01-20 04:33:38'),
(4, 'Test', 'Test', '1737367476.jpg', 0, '2024-12-30 06:06:21', '2025-01-20 04:34:36'),
(5, 'slider 4', 'sfdsfdcds vregvrfv', '1739773883.jpg', 0, '2025-02-17 01:01:23', '2025-02-17 01:01:23'),
(6, 'sliuder 5', 'fsafsd mlkufk thgth', '1739773958.jpg', 0, '2025-02-17 01:02:38', '2025-02-17 01:02:38'),
(7, 'slider 6', 'sadaesf myulgfg', '1739774100.jpg', 0, '2025-02-17 01:05:00', '2025-02-17 01:05:00'),
(8, 'afdfds', 'dsfshg hydrh', '1739774230.jpg', 0, '2025-02-17 01:07:10', '2025-02-17 01:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `header`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Perspiciatis except', 'images/67ce7c58dc5e4.jpg', 'Voluptas irure conse', '2024-12-30 00:32:05', '2025-03-10 00:14:56'),
(3, 'Siemens @ Hannover Messe 2023', 'images/67c588a9daed8.jpg', 'On April 17, Cedrik Neike, Member of the Managing Board of Siemens AG and CEO of Siemens Digital Industries, will talk about the solutions Siemens is developing for a smarter and more sustainable industry. These solutions are needed in a world where industry is constantly confronted with challenges such as Covid, conflicts and last but not least, climate change.', '2025-03-03 05:17:05', '2025-03-03 05:17:05'),
(4, 'Schneider Electric showcases sustainable & digital solutions at ELECRAMA 2023', 'images/67c594e2aab5f.jpg', 'Schneider Electric is showcasing its energy management and next-gen automation solutions at the 15th edition of ELECRAMA 2023 to accelerate the digital transformation of the Indian power sector.', '2025-03-03 06:09:14', '2025-03-03 06:09:14'),
(5, 'Siemens @ Hannover Messe 2023', 'images/67ce76e5a9772.jpg', 'Siemens @ Hannover Messe 2023', '2025-03-09 23:46:51', '2025-03-09 23:51:41'),
(6, 'Schneider Electric', 'images/67ce7e329b3a2.jpg', 'Schneider Electric', '2025-03-10 00:22:50', '2025-03-10 00:22:50'),
(7, 'Innovation at Every Level', 'images/67ce7fb21df22.jpg', 'We are leading the digital transformation of energy management and automation.', '2025-03-10 00:29:14', '2025-03-10 00:29:14'),
(8, 'Achieve better control and compliance', 'images/67ce80a7b896d.jpg', 'Manage and exchange product information in a multi-channel environment.', '2025-03-10 00:33:19', '2025-03-10 00:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `news_details`
--

CREATE TABLE `news_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `short_title` varchar(255) NOT NULL,
  `short_image` varchar(255) DEFAULT NULL,
  `short_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_details`
--

INSERT INTO `news_details` (`id`, `news_id`, `short_title`, `short_image`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Officia voluptas rer', 'images/6772375d894bb.png', 'Reprehenderit error', '2024-12-30 00:32:05', '2024-12-30 00:32:05'),
(3, 3, 'Hannover, April 17 to April 21, 2023', NULL, 'On April 17, Cedrik Neike, Member of the Managing Board of Siemens AG and CEO of Siemens Digital Industries, will talk about the solutions Siemens is developing for a smarter and more sustainable industry. These solutions are needed in a world where industry is constantly confronted with challenges such as Covid, conflicts and last but not least, climate change.\r\n\r\nUnder the motto \"Accelerate Transformation\", you will learn how industrial companies are working faster than ever to digitize and automate entire value chains. All with the aim of making them faster, more adaptable and more resistant.\r\n\r\nPart of this process is the decarbonization of the industry. In a showcase at the trade fair, Siemens will be demonstrating how the individual process steps of a battery\'s life cycle can be made more sustainable.\r\n\r\nDa te: April 17-21, 2023\r\nLocation: Hanover Fair\r\nWhere: Siemens booth Hall 9, Booth D53\r\nHybrid press conference and Q&A: 17:15 - 18:00 (participation on site + livestream).\r\n\r\nParticipation in the press conference is possible both on-site at our booth and digitally via livestream.', '2025-03-03 05:17:05', '2025-03-03 05:17:05'),
(4, 4, 'Schneider Electric is committed to providing a wide range of products and solutions aligned with the Govt', NULL, 'Schneider Electric is committed to providing a wide range of products and solutions aligned with the Govt. of India’s vision of Aatmanirbhar Bharat and Make in India, under its 2 Brands 2 Sales Strategy. With a strong R&D base, Schneider Electric is expected to play a critical role in India’s growth, especially in the next 25 years of the ‘Amrit Kaal’ period. The company is also the Sustainability Partner for ELECRAMA 2023 and is showcasing its state-of-the-art technologies and solutions for creating a brighter, more sustainable future together.\r\n\r\nJean-Pascal Tricoire, Chairman and CEO, Schneider Electric, emphasized India’s integral role in the company’s progressive strategy and its contribution to the economic growth of India while supporting local communities through training energy professionals, fostering entrepreneurship, providing access to digital education, and creating awareness about sustainability. Anil Chaudhry, Zone President, India and MD & CEO, Schneider Electric India Pvt. Ltd., also reiterated the company’s commitment to a more sustainable India and its aim to provide superior value to customers by offering a wide range of technologically advanced products and solutions across portfolios, applications, and segments.\r\n\r\nThe company is also launching a new Sustainability research report: Path to Developed & Decarbonized India, to help accelerate India’s efforts towards achieving its climate target by developing a futuristic energy system.', '2025-03-03 06:09:14', '2025-03-03 06:09:14'),
(5, 5, 'fgag', NULL, 'agfth', '2025-03-09 23:46:51', '2025-03-09 23:46:51'),
(6, 6, 'Hannover, April 17 to April 21, 2023', NULL, 'Schneider Electric showcases sustainable & digital solutions at ELECRAMA 2023', '2025-03-10 00:22:50', '2025-03-10 00:22:50'),
(7, 7, 'Innovation at Every Level', NULL, 'We are leading the digital transformation of energy management and automation. From energy and sustainability consulting to optimising the lifecycle of your assets, we provide services to meet your needs. Our technologies help you become more efficient, reduce costs, and meet your sustainability goals.', '2025-03-10 00:29:14', '2025-03-10 00:29:14'),
(8, 8, 'Achieve better control and compliance', NULL, 'Implement simulation software to your supply chain to improve throughput, operational and strategic decision-making, optimise asset utilisation and reduce logistics and storage costs.', '2025-03-10 00:33:19', '2025-03-10 00:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `description` text DEFAULT NULL,
  `serial_number` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category_id`, `brand_id`, `images`, `description`, `serial_number`, `created_at`, `updated_at`) VALUES
(67, 'AP2510G10ST', 10000, 70, 4, '\"[\\\"uploads\\\\\\/products\\\\\\/1741239722_AP2310G10ST-fr_369.jpg\\\"]\"', 'I-Line Busway offers a complete line of compatible, sandwich-type feeder and plug-in busway lengths and fittings. I-Line\'s plug-in busway has options from 225A to 5000A with aluminum or copper conductors; its feeder busway from 800A to 5000A. I-Line busway is constructed with three pole and four pole full neutral configurations for system voltages to 600 volts. This 10 foot plug-in section of busway has an aluminum bus rated at 1000A at 600V. This busway system is configured for a 3 phase, 4 wire system and has a 50 percent capacity integral ground bus.', 'AP2510G10ST', '2025-03-06 00:12:02', '2025-03-06 00:40:50'),
(68, 'AP50410', 20000, 70, 6, '\"[\\\"uploads\\\\\\/products\\\\\\/1741241974_AP30210-fr_369.jpg\\\"]\"', 'I-Line Busway offers a complete line of compatible, sandwich-type feeder and plug-in busway lengths and fittings. I-Line\'s plug-in busway has options from 225A to 5000A with aluminum or copper conductors; its feeder busway from 800A to 5000A. I-Line busway is constructed with three pole and four pole full neutral configurations for system voltages to 600 volts. This 10 foot plug-in section of busway has an aluminum bus rated at 400A at 600V. This busway system is configured for a 3 phase, 4 wire system and doesn\'t include integral ground bus.', 'AP50410', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(69, 'KNA40ED4301', 1234, 71, 7, '\"[\\\"uploads\\\\\\/products\\\\\\/1741245359_KNA40ED4303_Image_369.jpg\\\"]\"', 'Straight distribution length, Canalis KN, additional, aluminium, 40A, 3L+N+PE, fixed length 3m, 1 outlet, RAL9001', '123', '2025-03-06 01:45:59', '2025-03-06 01:45:59'),
(70, 'Add-on residual current device, Acti9 Vigi NG125, 2P, 63A, AC type, instantaneous, 30mA, 230...415VAC', 2345, 79, 14, '\"[\\\"uploads\\\\\\/products\\\\\\/1741259368_PB103984_369.jpg\\\"]\"', 'This Vigi NG125 is a modular add-on residual current devices. It is a 2P and rated current is 63A. The earth leakage protection class is AC type with a sensitivity of 30mA and a voltage independent technology. This product protects against short circuit, cable overload, electrical shock by indirect contact and fire hazards. This product is compliant with IEC 60947-2 standard. The Ue rated operational voltage is from 230VAC to 415VAC. The Ui rated insulation voltage is 690VAC. The Uimp rated impulse withstand voltage is 8kV. The pollution degree is 3. It can be mounted on 35 mm symmetrical DIN rail. The width in 9mm pitches is 5. The dimensions are (W) 99mm x (H) 118mm x (D) 81mm. The weight is 0.25kg. The degree of protection is IP20 and IP40 in an enclosure.', 'adfghsfd', '2025-03-06 05:39:27', '2025-03-06 05:44:40'),
(71, 'miniature circuit breaker - iK60N - 2P - 40 A - C curve', 3456, 79, 16, '\"[\\\"uploads\\\\\\/products\\\\\\/1741260947_A9F73106_Image_07_369.jpg\\\"]\"', 'This Acti9 iK60N product is a low voltage miniature circuit breaker (MCB). It is a 2P circuit breaker with 2 protected poles and 40A In rated current and C tripping curve. The rated short circuit breaking capacity goes up to 6000A at 230VAC conforming to EN/IEC 60898-1 standard and at conforming to standard. This product is compliant with EN/IEC 60898-1 standard. This miniature circuit breaker protects circuit against short circuit and overload current. It has a double clip for dismounting with comb busbar in place. It has an electrical endurance going up to 10000 cycles and a mechanical endurance going up to 20000 cycles. The Ue operational voltage is 230VAC. The Ui rated insulation voltage is 440VAC. The Uimp rated impulse withstand voltage is 4kV. The operating frequency is 50Hz or 60Hz. It can be mounted on DIN rail for modular installation. Its width is 4 pitches of 9mm. The product colour is white (RAL9003). The dimensions are (W) 36mm x (H) 85mm x (D) 78.5mm. The weight is 200g. It has an IP20 degree of protection. It becomes IP40 once in modular enclosure according to IEC/EN 60529 standard. The operating temperature is -25°C to 60°C. The storage temperature is -40°C to 85°C.', 'lkhjnbvcx', '2025-03-06 06:05:47', '2025-03-06 06:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `secondsliders`
--

CREATE TABLE `secondsliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1-Hidden,0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `secondsliders`
--

INSERT INTO `secondsliders` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Test', 'Test', '1739427798.jpg', 0, '2024-12-30 06:07:09', '2025-02-13 00:53:18'),
(5, 'test', 'test', '1739427641.jpg', 0, '2025-01-01 00:20:34', '2025-02-13 00:50:41'),
(6, 'Slider', 'Slider', '1739428515.jpg', 0, '2025-02-13 00:38:09', '2025-02-13 01:05:15'),
(7, 'Slider 2', 'Slider 2', '1739427903.jpg', 0, '2025-02-13 00:39:28', '2025-02-13 00:55:03'),
(8, 'abc', 'abc', '1739427573.jpg', 0, '2025-02-13 00:49:33', '2025-02-13 00:49:33'),
(9, 'new', 'new', '1739428116.jpg', 0, '2025-02-13 00:58:36', '2025-02-13 00:58:36'),
(10, 'slider 3', 'slider 3', '1739428274.jpg', 0, '2025-02-13 01:01:14', '2025-02-13 01:01:14'),
(11, 'abc 2', 'abc 2', '1739428376.jpg', 0, '2025-02-13 01:02:56', '2025-02-13 01:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wB1cqdbFh2cMausvYz1aU4cZTTvHFlgShHOyOkWu', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMnNieEx5bXFFOUVlRm1lZ0lKamdjWnJ2ajYxMTB4MGxHajM0cW1DNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcGkvY2FydCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzQxNTgyMjc1O319', 1741586996);

-- --------------------------------------------------------

--
-- Table structure for table `short_attributes`
--

CREATE TABLE `short_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `short_attributes`
--

INSERT INTO `short_attributes` (`id`, `attribute_id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(283, 161, 'Range of product', 'I-Line', '2025-03-06 00:12:02', '2025-03-06 00:12:02'),
(284, 161, 'Product or component type', 'Straight length', '2025-03-06 00:12:02', '2025-03-06 00:12:02'),
(285, 161, 'Application', 'Plug-in', '2025-03-06 00:12:02', '2025-03-06 00:12:02'),
(286, 162, '[In] rated current', '1000 A', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(287, 162, 'Short Circuit Rating', '50 kA', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(288, 162, 'Busbar Material', 'Aluminium: busbar', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(289, 162, 'Integral Ground/High Short Circuit Bracing', '50 percent capacity integral ground bus', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(290, 162, 'Rated Voltage', '600 V AC', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(291, 162, 'Number of Phases', '3 phases', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(292, 162, 'Wiring configuration', '4-wire', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(293, 162, 'Length', '3.05 m', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(294, 163, 'Product certifications', 'UL listed file E22182', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(295, 163, 'Standards', 'CSA C22.2 No 27:1997 IEC 61439-2 UL 857', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(296, 164, 'Unit Type of Package 1', 'PCE', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(297, 164, 'Number of Units in Package 1', '1', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(298, 164, 'Package 1 Height', '12.1 cm', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(299, 164, 'Package 1 Width', '15.2 cm', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(300, 164, 'Package 1 Length', '305 cm', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(301, 164, 'Package 1 Weight', '60.555 kg', '2025-03-06 00:12:03', '2025-03-06 00:12:03'),
(302, 165, 'Range of product', 'I-Line', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(303, 165, 'Product or component type', 'Straight length', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(304, 165, 'Application', 'Plug-in', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(305, 166, '[In] rated current', '400 A', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(306, 166, 'Short Circuit Rating', '22 KA', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(307, 166, 'Busbar Material', 'Aluminium: busbar', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(308, 166, 'Integral Ground/High Short Circuit Bracing', 'No integral ground bus', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(309, 166, 'Rated Voltage', '600 V AC', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(310, 166, 'Number of Phases', '3 phases', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(311, 166, 'Wiring configuration', '4-wire', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(312, 166, 'Length', '3.05 m', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(313, 167, 'Unit Type of Package 1', 'PCE', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(314, 167, 'Number of Units in Package 1', '1', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(315, 167, 'Package 1 Height', '15.2 cm', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(316, 167, 'Package 1 Width', '8.6 cm', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(317, 167, 'Package 1 Length', '306.1 cm', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(318, 167, 'Package 1 Weight', '37.648 kg', '2025-03-06 00:49:34', '2025-03-06 00:49:34'),
(319, 168, 'Warranty', '18 months', '2025-03-06 00:49:35', '2025-03-06 00:49:35'),
(320, 169, 'Range of product', 'Canalis', '2025-03-06 01:46:00', '2025-03-06 01:46:00'),
(321, 169, 'Product or component type', 'KN', '2025-03-06 01:46:00', '2025-03-06 01:46:00'),
(322, 169, 'Product or component type', 'Straight length', '2025-03-06 01:46:00', '2025-03-06 01:46:00'),
(323, 169, 'Device application', 'Low power distribution', '2025-03-06 01:46:00', '2025-03-06 01:46:00'),
(324, 169, '[Ie] rated operational current', '40 A at 35 °C', '2025-03-06 01:46:00', '2025-03-06 01:46:00'),
(325, 169, 'Busbar trunking polarity', '3L + PEN, 3L + N + PE', '2025-03-06 01:46:00', '2025-03-06 01:46:00'),
(326, 169, 'Number of tap-off outlets', '1', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(327, 169, 'Length', '3 m', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(328, 170, '[Ue] rated operational voltage', '230...500 V', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(329, 170, 'Network frequency', '50/60 Hz', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(330, 170, '[Uimp] rated impulse withstand voltage', '6 kV', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(331, 170, '[Ui] rated insulation voltage', '500 V', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(332, 170, '[Icw] rated short-time withstand current', '1.4 kA', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(333, 170, '[Ipk] rated peak withstand current', '6 kA', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(334, 170, 'Electrical connection', 'Lubricated sliding contact', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(335, 170, 'Radiated magnetic field', '0.039 µT', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(336, 170, 'Thermal stress limit', '1980 kA².s', '2025-03-06 01:46:01', '2025-03-06 01:46:01'),
(337, 171, 'Range', 'Acti9', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(338, 171, 'product name', 'Acti9 Vigi NG125', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(339, 171, 'Product or component type', 'Add-on residual current device', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(340, 171, 'Device short name', 'Vigi NG125', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(341, 171, 'Poles description', '2P', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(342, 171, '[In] rated current', '63 A', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(343, 171, 'network type', 'AC', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(344, 171, 'Earth-leakage sensitivity', '30 mA', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(345, 171, 'Earth-leakage protection time delay', 'Instantaneous', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(346, 171, 'Earth-leakage protection class', 'Type AC', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(347, 171, 'Standards', 'IEC/EN 60947-2:Annex B', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(348, 172, 'Device location in system', 'Outgoer, Group incomer', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(349, 172, 'Network frequency', '50/60 Hz', '2025-03-06 05:39:28', '2025-03-06 05:39:28'),
(350, 172, '[Ue] rated operational voltage', '230...415 V AC 50/60 Hz', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(351, 172, 'Residual current tripping technology', 'Voltage independent', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(352, 172, '[Ui] rated insulation voltage', '690 V AC 50/60 Hz conforming to IEC/EN 60947-2', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(353, 172, '[Uimp] rated impulse withstand voltage', '8 kV conforming to IEC/EN 60947-2', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(354, 172, 'Mounting support', '35 mm symmetrical DIN rail', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(355, 172, 'Electrical connection to mcb', 'By screws', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(356, 172, '9 mm pitches', '5', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(357, 172, 'Height', '118 mm', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(358, 172, 'Width', '99 mm', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(359, 172, 'Depth', '81 mm', '2025-03-06 05:39:29', '2025-03-06 05:39:29'),
(360, 173, 'Device application', 'Distribution', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(361, 173, 'Range', 'Acti9', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(362, 173, 'product name', 'Acti9 iK60', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(363, 173, 'Product or component type', 'Miniature circuit-breaker', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(364, 173, 'Device short name', 'iK60N', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(365, 173, 'Poles description', '2P', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(366, 173, 'Number of protected poles', '2', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(367, 173, '[In] rated current', '40 A at 30 °C', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(368, 173, 'network type', 'AC', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(369, 173, 'Trip unit technology', 'Thermal-magnetic', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(370, 173, 'Curve code', 'C', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(371, 173, 'Breaking capacity', '6000 A Icn at 230 V AC 50/60 Hz conforming to EN/IEC 60898-1', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(372, 173, 'Suitability for isolation', 'Yes conforming to EN/IEC 60898-1', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(373, 173, 'Standards', 'EN/IEC 60898-1', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(374, 173, 'Product certifications', 'SNI', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(375, 174, 'Network frequency', '50/60 Hz', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(376, 174, 'Magnetic tripping limit', '5...10 x In', '2025-03-06 06:05:48', '2025-03-06 06:05:48'),
(377, 174, '[Ics] rated service breaking capacity', '6000 A 100 % conforming to EN/IEC 60898-1 - 230 V AC 50/60 Hz', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(378, 174, 'Limitation class', '3 conforming to EN/IEC 60898-1', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(379, 174, '[Ui] rated insulation voltage', '440 V AC 50/60 Hz conforming to EN/IEC 60898-1', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(380, 174, '[Uimp] rated impulse withstand voltage', '4 kV conforming to EN/IEC 60898-1', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(381, 174, 'Contact position indicator', 'No', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(382, 174, 'Control type', 'Toggle', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(383, 174, 'Local signalling', 'ON/OFF indication', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(384, 174, 'Mounting mode', 'Clip-on', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(385, 174, 'Mounting support', 'DIN rail', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(386, 174, '9 mm pitches', '4', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(387, 174, 'Height', '85 mm', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(388, 174, 'Width', '36 mm', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(389, 174, 'Depth', '78.5 mm', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(390, 174, 'Net weight', '200 g', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(391, 174, 'Colour', 'White', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(392, 174, 'Mechanical durability', '20000 cycles', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(393, 174, 'Electrical durability', '10000 cycles', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(394, 174, 'Locking options description', 'Padlocking device', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(395, 174, 'Connections - terminals', 'Tunnel type terminal (top or bottom) 1…35 mm² rigid', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(396, 174, 'Wire stripping length', '14 mm for top or bottom connection', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(397, 174, 'Tightening torque', '3.5 N.m top or bottom', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(398, 174, 'Earth-leakage protection', 'Without', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(399, 175, 'IP degree of protection', 'IP20 conforming to IEC 60529', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(400, 175, 'Pollution degree', '2 conforming to EN/IEC 60898-1', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(401, 175, 'overvoltage category', 'II', '2025-03-06 06:05:49', '2025-03-06 06:05:49'),
(402, 175, 'Ambient air temperature for operation', '-25…60 °C', '2025-03-06 06:05:50', '2025-03-06 06:05:50'),
(403, 175, 'Ambient air temperature for storage', '-40…85 °C', '2025-03-06 06:05:50', '2025-03-06 06:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1-Hidden,0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Test', 'Test', '1739883180.webp', 0, '2024-12-30 04:23:41', '2025-02-18 07:23:00'),
(4, 'Test', 'Test', '1739883125.jpg', 0, '2024-12-30 04:23:53', '2025-02-18 07:22:05'),
(5, 'Test', 'Test', '1739883711.jpg', 0, '2024-12-30 04:24:05', '2025-02-18 07:31:51'),
(6, 'Test', 'Test', '1739883424.jpg', 0, '2024-12-30 04:24:17', '2025-02-18 07:27:04'),
(7, 'test', 'test', '1739884000.webp', 0, '2025-01-01 00:17:20', '2025-02-18 07:36:40'),
(8, 'Test', 'Test', '1739884208.jpg', 0, '2025-02-18 07:40:08', '2025-02-18 07:40:08'),
(10, 'new', 'new', '1739970912.webp', 0, '2025-02-19 07:45:12', '2025-02-19 07:45:12'),
(11, 'news', 'news', '1739971120.jpg', 0, '2025-02-19 07:48:40', '2025-02-19 07:48:40'),
(12, 'aaa', 'aaa', '1739971204.jpg', 0, '2025-02-19 07:50:04', '2025-02-19 07:50:04'),
(13, 'title', 'abcd frejav fgtrkjsg bgjbgb', '1740655358.jpg', 0, '2025-02-27 05:52:38', '2025-02-27 05:52:38'),
(14, 'title 1', 'dfds hjyk ilvy6u', '1740655506.png', 0, '2025-02-27 05:55:06', '2025-02-27 05:55:06'),
(15, 'title 2', 'new', '1740655695.webp', 0, '2025-02-27 05:58:15', '2025-02-27 05:58:15'),
(16, 'title 3', 'Slider 2', '1740655837.webp', 0, '2025-02-27 06:00:37', '2025-02-27 06:00:37'),
(17, 'new', 'dfds hjyk ilvy6u', '1740656461.webp', 0, '2025-02-27 06:11:01', '2025-02-27 06:11:01'),
(18, 'slide', 'dfds hjyk ilvy6u', '1740656546.jpg', 0, '2025-02-27 06:12:26', '2025-02-27 06:12:26'),
(19, 'slider', 'dfds hjyk ilvy6u', '1740656679.webp', 0, '2025-02-27 06:14:39', '2025-02-27 06:14:39'),
(20, 'old', 'dfds hjyk ilvy6u', '1740656868.webp', 0, '2025-02-27 06:17:48', '2025-02-27 06:17:48'),
(21, 'new', 'slider 3', '1740657167.jpg', 0, '2025-02-27 06:22:47', '2025-02-27 06:22:47'),
(22, 'slider 1', 'new', '1740657282.webp', 0, '2025-02-27 06:24:42', '2025-02-27 06:24:42'),
(23, 'one', 'new', '1740657426.jpg', 0, '2025-02-27 06:27:06', '2025-02-27 06:27:06'),
(24, 'banner', 'dfds hjyk ilvy6u', '1740657606.jpg', 0, '2025-02-27 06:30:06', '2025-02-27 06:30:06'),
(25, 'new one', 'abc', '1740658205.webp', 0, '2025-02-27 06:40:05', '2025-02-27 06:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user, 1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'divyesh', 'admin@example.com', NULL, '$2y$12$aEWFlq98IlIq6mvnahXeFuOGWNawi03uZ03UCPtgh44QInPZsuWkm', NULL, '2024-12-23 04:28:39', '2024-12-23 04:28:39', 1),
(2, 'muskan', 'mesaniyamuskan1@gmail.com', NULL, '$2y$12$Ac4NSD1PMAVcq4tISHrxhehlM4rSSl1qf54cypMzdgY5MGPAPEbje', NULL, '2025-01-07 01:16:26', '2025-01-07 01:16:26', 1),
(3, 'prince', 'prince@gmail.com', NULL, '$2y$12$.EUsS1diRVj/eFA1LszVmOa5vfXTStQbqY8nQQrMvO9D5tZIzg9T2', NULL, '2025-01-22 02:47:12', '2025-01-22 02:47:12', 1),
(4, 'admin', 'admin@gmail.com', NULL, '$2y$12$fz24zUEMjKwRGJoL7jsdPO9XO42VRfcvDa13HbX7EHtMSy74K0l9y', NULL, '2025-03-03 01:09:15', '2025-03-03 01:09:15', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_product_id_foreign` (`product_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_serial_number_unique` (`serial_number`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_serial_number_unique` (`serial_number`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `contactus_form_submission`
--
ALTER TABLE `contactus_form_submission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_details`
--
ALTER TABLE `contact_us_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_product_id_foreign` (`product_id`);

--
-- Indexes for table `documents_sections`
--
ALTER TABLE `documents_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_brand`
--
ALTER TABLE `document_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_brands`
--
ALTER TABLE `document_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_categories`
--
ALTER TABLE `document_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `document_categories_name_unique` (`name`),
  ADD UNIQUE KEY `document_categories_slug_unique` (`slug`),
  ADD UNIQUE KEY `document_categories_serial_number_unique` (`serial_number`),
  ADD KEY `document_categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `document_types`
--
ALTER TABLE `document_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `document_types_name_unique` (`name`),
  ADD UNIQUE KEY `document_types_serial_number_unique` (`serial_number`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_documents`
--
ALTER TABLE `main_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_documents_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minisiders`
--
ALTER TABLE `minisiders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_details`
--
ALTER TABLE `news_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_details_news_id_foreign` (`news_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_serial_number_unique` (`serial_number`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `secondsliders`
--
ALTER TABLE `secondsliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `short_attributes`
--
ALTER TABLE `short_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `short_attributes_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `contactus_form_submission`
--
ALTER TABLE `contactus_form_submission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `contact_us_details`
--
ALTER TABLE `contact_us_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `documents_sections`
--
ALTER TABLE `documents_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `document_brand`
--
ALTER TABLE `document_brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `document_brands`
--
ALTER TABLE `document_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_categories`
--
ALTER TABLE `document_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_documents`
--
ALTER TABLE `main_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `minisiders`
--
ALTER TABLE `minisiders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news_details`
--
ALTER TABLE `news_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `secondsliders`
--
ALTER TABLE `secondsliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `short_attributes`
--
ALTER TABLE `short_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attributes`
--
ALTER TABLE `attributes`
  ADD CONSTRAINT `attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `document_categories`
--
ALTER TABLE `document_categories`
  ADD CONSTRAINT `document_categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `document_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `main_documents`
--
ALTER TABLE `main_documents`
  ADD CONSTRAINT `main_documents_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news_details`
--
ALTER TABLE `news_details`
  ADD CONSTRAINT `news_details_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `short_attributes`
--
ALTER TABLE `short_attributes`
  ADD CONSTRAINT `short_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
