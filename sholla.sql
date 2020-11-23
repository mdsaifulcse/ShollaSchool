-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 08:38 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sholla`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_schools`
--

CREATE TABLE `about_schools` (
  `id` int(10) UNSIGNED NOT NULL,
  `school_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_schools`
--

INSERT INTO `about_schools` (`id`, `school_image`, `short_description`, `long_description`, `created_at`, `updated_at`) VALUES
(1, 'front/img/school-image/slider2.jpg', '<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"color:#f1c40f\"><u><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\">History of the school </span><span style=\"font-family:SutonnyMJ\"><span style=\"background-color:#ffffff\">t</span></span></span></u><span style=\"background-color:#ffffff\"> </span></span><span style=\"color:#2ecc71\"><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\">The name of the institution is Sholla High School &amp; College. It was established in 1945 A</span></span><span style=\"font-size:14.0pt\">.D. At&nbsp; the time of establishment the first name of the institution was </span><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\">Sholla</span></span><span style=\"background-color:#ffffff\"> </span><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\">Multi</span></span><span style=\"background-color:#ffffff\"> </span><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\">Face</span></span><span style=\"background-color:#ffffff\"> </span><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\">High School</span></span><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\">. Late Mr Nalini Mohan Ghos is the founder of the school. In view of&nbsp; the higher education here attached eleventh and twelve class in </span></span><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\">1995 A</span></span><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\">.D. From then the institution contains the name&nbsp; </span></span><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\">Sholla<span style=\"background-color:#ffffff\"> </span>High School and College. This institution is making doctor, engineer and government high officials.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"color:#f1c40f\"><u><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\">Objectives of&nbsp; the&nbsp; school and college </span><span style=\"font-family:SutonnyMJ\"><span style=\"background-color:#ffffff\">t</span></span></span></u></span><span style=\"color:#2ecc71\"><span style=\"font-size:14.0pt\"><span style=\"background-color:#ffffff\"> It is a public welfare institution. It&rsquo;s main object is to allocate education among the students and to make educated persons in the society. It&rsquo;s another main object is to help the poor meritorious students to take higher education.</span></span></span></span></p>', '<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><strong><u><span style=\"font-size:14.0pt\">History of the school </span></u></strong><strong><u><span style=\"font-size:14.0pt\"><span style=\"font-family:SutonnyMJ\">t</span></span></u></strong> <span style=\"font-size:14.0pt\">The name of the institution is Sholla High School &amp; College. It was established in </span><span style=\"font-size:14.0pt\">1945 A</span><span style=\"font-size:14.0pt\">.D. At&nbsp; the time of establishment the first name of the institution was </span><span style=\"font-size:14.0pt\">Sholla</span> <span style=\"font-size:14.0pt\">Multi</span> <span style=\"font-size:14.0pt\">Face</span> <span style=\"font-size:14.0pt\">High School</span><span style=\"font-size:14.0pt\">. Late Mr Nalini Mohan Ghos is the founder of the school. In view of&nbsp; the higher education here attached eleventh and twelve class in </span><span style=\"font-size:14.0pt\">1995 A</span><span style=\"font-size:14.0pt\">.D. From then the institution contains the name&nbsp; </span><span style=\"font-size:14.0pt\">Sholla</span> <span style=\"font-size:14.0pt\">High School</span><span style=\"font-size:14.0pt\"> and College. This institution is making doctor, engineer and government high officials.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><strong><u><span style=\"font-size:14.0pt\">Objectives of&nbsp; the&nbsp; school and college </span></u></strong><strong><u><span style=\"font-size:14.0pt\"><span style=\"font-family:SutonnyMJ\">t</span></span></u></strong><span style=\"font-size:14.0pt\"> It is a public welfare institution. It&rsquo;s main object is to allocate education among the students and to make educated persons in the society. It&rsquo;s another main object is to help the poor meritorious students to take higher education.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><strong><u><span style=\"font-size:14.0pt\">Facilities of the school </span></u></strong><strong><u><span style=\"font-size:14.0pt\"><span style=\"font-family:SutonnyMJ\">t-</span></span></u></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<ol style=\"list-style-type:lower-roman\">\r\n	<li style=\"text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">The students can admitt in class six, class nine and in class eleven in online.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">The school &amp; college allocate education among the students and create litterate citigen for the society.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">The school &amp; college also give the ICT training to the students.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">The students take parts co- curriculam activities now &amp; then.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">The school give stipend among the poor students who are meritorious.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">The students can pay tution fees through online. </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">Any student can apply for addmission through online.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">Any guardian can know the information of his child about his performance of studies through the online.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">The guardian may able to know the presency in the class of his chaild through online.</span></span></span></li>\r\n</ol>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><strong><span style=\"font-size:14.0pt\">Contract Information </span></strong><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:SutonnyMJ\">t</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">Mobile </span><span style=\"font-size:14.0pt\"><span style=\"font-family:SutonnyMJ\">t</span></span><span style=\"font-size:14.0pt\"> 01835822077</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"color:#2ecc71\"><span style=\"font-size:14.0pt\">Email Address </span><span style=\"font-size:14.0pt\"><span style=\"font-family:SutonnyMJ\">t </span></span></span><span style=\"font-size:14.0pt\"><a href=\"mailto:shollahighschool@gmail.com\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#2ecc71\">shollahighschool@gmail.com</span></a></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">EIIN no </span><span style=\"font-size:14.0pt\"><span style=\"font-family:SutonnyMJ\">t </span></span><span style=\"font-size:14.0pt\">108321</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">Webe Site </span><span style=\"font-size:14.0pt\"><span style=\"font-family:SutonnyMJ\">t </span></span><span style=\"font-size:14.0pt\">shollahighschoolandcollege.education.bd</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"color:#2ecc71\"><span style=\"font-size:12pt\"><span style=\"font-size:14.0pt\">Permanent Address </span><span style=\"font-size:14.0pt\"><span style=\"font-family:SutonnyMJ\">t </span></span><span style=\"font-size:14.0pt\">P.O:</span> <span style=\"font-size:14.0pt\">Sholla, Upozilla : Nababgonj, District: </span><span style=\"font-size:14.0pt\">Dhaka</span><span style=\"font-size:14.0pt\">.</span></span></span></p>', '2017-10-28 01:18:56', '2017-12-18 00:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `academic_contents`
--

CREATE TABLE `academic_contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_as` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pubsidhe_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_contents`
--

INSERT INTO `academic_contents` (`id`, `title`, `image`, `contents`, `content_as`, `pubsidhe_status`, `created_at`, `updated_at`) VALUES
(1, 'Courses of Content', 'front/img/school-image/Final_exam_spring-2017.PNG', '<p>The students can admitt in class six, class nine and in class eleven in online. The school &amp; college allocate education among the students and create litterate citigen for the society. The school &amp; college also give the ICT training to the students.</p>\r\n\r\n<p>The students take parts co- curriculam activities now &amp; then. The school give stipend among the poor students who are meritorious. The students can pay tution fees through online.</p>\r\n\r\n<p>Any student can apply for addmission through online. Any guardian can know the information of his child about his performance of studies through the online. The guardian may able to know the presency in the class of his chaild through online.</p>', 'courses-studies', 1, NULL, '2017-11-16 15:46:08'),
(2, 'Academic Curriculum', 'front/img/school-image/^0CD36BF5B4F40FEDCAEB26CBCB4AC7D1027F81E1B9F3A79E56^pimgpsh_fullsize_distr.jpg', '<p>The students can admitt in class six, class nine and in class eleven in online. The school &amp; college allocate education among the students and create litterate citigen for the society.</p>\r\n\r\n<p>The school &amp; college also give the ICT training to the students. The students take parts co- curriculam activities now &amp; then. The school give stipend among the poor students who are meritorious.</p>\r\n\r\n<p>The students can pay tution fees through online. Any student can apply for addmission through online. Any guardian can know the information of his child about his performance of studies through the online.</p>\r\n\r\n<p>The guardian may able to know the presency in the class of his chaild through online.</p>', 'academic-curriculum', 1, '2017-11-26 18:00:00', '2017-11-16 15:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `administrator_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_id` int(10) UNSIGNED NOT NULL,
  `education` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aministrator_status` tinyint(4) NOT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci,
  `parmanent_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `name`, `father_name`, `mother_name`, `gender`, `blood_group`, `religion`, `marital_status`, `mobile`, `administrator_type`, `designation_id`, `education`, `email`, `date_of_birth`, `image`, `aministrator_status`, `present_address`, `parmanent_address`, `created_at`, `updated_at`) VALUES
(1, 'Helal Uddin Ahamed', 'Father Name', 'Mother Name', 'Male', 'Helal Uddin Ahamed', 'Islam', 'Married', '01542718654', 'Managing-Committee', 1, 'Masters', 'adeptsaiful@gmail.com', '1975-03-14', 'front/img/administrator/5a015c8fd7d00Principal.jpg', 1, 'Dhaka', 'Dhaka', '2017-11-07 01:11:11', '2017-11-07 04:50:28'),
(2, 'Md. Saiful Islam', 'Father Name', 'Mother Name', 'Male', 'Md. Saiful Islam', 'Islam', 'Unmarried', '01751248652', 'Teacher', 1, 'Graduation', 'saiful@gmail.com', NULL, 'front/img/administrator/5a017f4415c48assistant1.jpg', 1, NULL, 'Dhaka', '2017-11-07 01:14:04', '2017-11-07 04:50:34'),
(3, 'Md. Jahidul\'s Islam', 'Amir Hossain', 'Amena Begum', 'Male', 'Md. Jahidul\'s Islam', 'Islam', 'Married', '01542784111', 'Managing-Committee', 1, 'Masters', 'jahidul@gmail.com', '2017-11-07', 'front/img/administrator/5a017f3730717teacher1.jpg', 1, 'dgdfgd', 'Dhakasdfs fsd fs', '2017-11-07 01:15:37', '2018-08-31 00:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_students`
--

CREATE TABLE `alumni_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_status` tinyint(4) NOT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni_students`
--

INSERT INTO `alumni_students` (`id`, `name`, `university`, `profession`, `mobile`, `email`, `blood_group`, `education`, `image`, `published_status`, `present_address`, `created_at`, `updated_at`) VALUES
(1, 'Helal Uddin Ahammed', 'Dhaka University', 'Teacher', '01785426135', 'helal@gmail.com', '0+', 'Masters', 'front/img/alumni-students/5a0f2af568305alumni-studnet.jpg', 1, 'Dhaka', '2017-11-17 04:08:28', '2017-11-17 12:31:17'),
(2, 'Jahangir Alam', 'Dhaka University', 'Teacher', '01785421305', 'jahangir@gmail.com', 'a+', 'Masters', 'front/img/alumni-students/5a0f3119dcc68Hydrangeas.jpg', 1, 'Dhaka', '2017-11-17 04:09:34', '2017-11-17 12:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `class_of_schools`
--

CREATE TABLE `class_of_schools` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_of` tinyint(3) UNSIGNED NOT NULL COMMENT '1=School, 2=College',
  `class_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_of_schools`
--

INSERT INTO `class_of_schools` (`id`, `class_of`, `class_name`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Six', NULL, 1, '2018-08-30 12:06:39', '2018-08-30 12:06:39'),
(2, 1, 'Seven', NULL, 1, '2018-08-30 12:38:52', '2018-08-30 12:38:52'),
(3, 1, 'Eight', NULL, 1, '2018-08-30 12:38:59', '2018-08-30 12:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `class_sections`
--

CREATE TABLE `class_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_of_school_id` int(10) UNSIGNED NOT NULL,
  `section_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_sections`
--

INSERT INTO `class_sections` (`id`, `class_of_school_id`, `section_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Shamoli', 1, '2018-08-30 12:08:05', '2018-08-30 12:08:05'),
(2, 1, 'Golap', 1, '2018-08-30 12:08:12', '2018-08-30 12:08:12'),
(3, 1, 'Shoapla', 1, '2018-08-30 12:08:28', '2018-08-30 12:08:28'),
(4, 1, 'Polash', 1, '2018-08-30 12:08:46', '2018-08-30 12:08:46'),
(5, 3, 'Bolaka', 1, '2018-08-30 12:39:30', '2018-08-30 12:39:30'),
(6, 3, 'Doyel', 1, '2018-08-30 12:39:36', '2018-08-30 12:39:36'),
(7, 3, 'Golap', 1, '2018-08-30 12:39:40', '2018-08-30 12:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` int(10) UNSIGNED NOT NULL,
  `content_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_uses`
--

INSERT INTO `contact_uses` (`id`, `content_address`, `first_mobile`, `second_mobile`, `contact_email`, `created_at`, `updated_at`) VALUES
(1, '<p>P.O: Sholla, P.S: Nawabganj&nbsp;<br />\r\nDhaka-1320, Bangladesh&nbsp;</p>', '01835822077', '01823867931', 'info@shollaschoolcollege.edu.bd', '2017-10-30 00:07:23', '2017-11-18 23:54:08'),
(2, '<p>P.O: Sholla, P.S: Nawabganj&nbsp;<br />\r\nDhaka-1320, Bangladesh lll</p>', '01715316584', '01512365984', 'info@shollaschoolcollege.edu.bd', '2017-10-30 00:29:54', '2017-10-30 00:29:54'),
(3, '<p>P.O: Sholla, P.S: Nawabganj&nbsp;<br />\r\nDhaka-1320, Bangladesh</p>', '01715316584', '01512365984', 'info@shollaschoolcollege.edu.bd', '2017-10-30 00:30:55', '2017-10-30 00:30:55'),
(4, '<p>P.O: Sholla, P.S: Nawabganj&nbsp;<br />\r\nDhaka-1320, Bangladesh bbb</p>', '01715316584', '01512365984', 'info@shollaschoolcollege.edu.bd', '2017-10-30 00:31:28', '2017-10-30 00:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `designation_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'President', 'President', 1, '2018-08-31 00:12:34', '2018-08-31 00:13:47'),
(2, 'Secritery', NULL, 1, '2018-08-31 00:15:41', '2018-08-31 00:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_photo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_event` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `caption`, `gallery_photo`, `photo_event`, `published_status`, `created_at`, `updated_at`) VALUES
(11, 'Sports Photo', 'front/img/gallery/5a127b1d0f3c0Picture 254.jpg', 'sports', 1, '2017-11-08 04:42:53', '2017-11-20 00:50:05'),
(12, 'Sports Photo', 'front/img/gallery/5a1a486fc5bcasports pic.jpg', 'sports', 1, '2017-11-25 22:52:00', '2017-11-25 22:52:00'),
(13, 'Memory Photo', 'front/img/gallery/5a1a49adb8bb6education pic 1.jpg', 'memory', 1, '2017-11-25 22:57:17', '2017-11-25 22:57:17'),
(14, 'Memory Photo', 'front/img/gallery/5a1a49be43370education pic.jpg', 'memory', 1, '2017-11-25 22:57:34', '2017-11-25 22:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(10) UNSIGNED NOT NULL,
  `departemen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `lecture_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `departemen`, `subject`, `class_id`, `section_id`, `teacher_id`, `lecture_file`, `published_status`, `created_at`, `updated_at`) VALUES
(4, 'All Departemen', 'Bangla', 3, 5, 9, 'front/lecture/5a06da3565dcdClass rutine-2017.pdf', 1, '2017-11-11 05:08:37', '2017-11-11 06:49:00'),
(5, 'All Departemen', 'Final Result', 3, 2, 4, 'front/lecture/5a06dba06cb7bbanner_img.png', 1, '2017-11-11 05:14:40', '2017-11-11 06:03:56'),
(6, 'English', 'Final Result Published', 2, 3, 6, 'front/lecture/5a06dbdf2beba525x100_1744525x100_863Sholla.png', 1, '2017-11-11 05:15:43', '2017-11-11 07:02:07'),
(7, 'All Departemen11', 'Bangla11', 1, 3, 24, 'front/lecture/5b8978ab9c2a0Advertisement-BOF.pdf', 1, '2018-08-31 11:19:39', '2018-08-31 11:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `meritorious_students`
--

CREATE TABLE `meritorious_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_year` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result_year` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_class_id` int(10) UNSIGNED NOT NULL,
  `running_class_id` int(10) UNSIGNED NOT NULL,
  `result_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grate_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meritorious_students`
--

INSERT INTO `meritorious_students` (`id`, `full_name`, `father_name`, `mother_name`, `session_year`, `result_year`, `previous_class_id`, `running_class_id`, `result_place`, `grate_point`, `total_number`, `gender`, `religion`, `address`, `student_image`, `published_status`, `created_at`, `updated_at`) VALUES
(1, 'Saddam Hossain', 'Father\'s Name', 'Mother\'s Name', '2017-2018', '2018', 2, 3, 'First', '4.92', '1200', 'Femal', 'Islam', 'Student Address', 'front/img/meritories-student/5b8921e6b2935User_ring.png', 1, '2018-08-31 05:09:27', '2018-08-31 05:45:21'),
(2, 'Nafija', 'Father\'s Name', 'Mother\'s Name', '2017-2018', '2018', 1, 2, 'Second', '4.92', NULL, 'Femal', 'Islam', NULL, 'front/img/meritories-student/5b892d3158b11User_ring.png', 1, '2018-08-31 05:57:37', '2018-08-31 05:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `mobile`, `location`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Md. Saiful Islam', 'adeptsaiful@gmail.com', '01687835849', 'Dhaka', '01687835849', '2017-10-30 02:07:38', '2017-10-30 02:07:38'),
(3, 'Road Runner', 'runner@gmail.com', '01786954231', 'Dhaka', 'Good Good', '2017-10-30 02:28:53', '2017-10-30 02:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_25_065904_create_sliders_table', 2),
(4, '2017_10_26_085923_create_notices_table', 3),
(5, '2017_10_28_065744_create_about_schools_table', 4),
(6, '2017_10_28_103631_create_speeches_table', 5),
(7, '2017_10_29_095841_create_meritorious_students_table', 6),
(8, '2017_10_30_054115_create_contact_uses_table', 7),
(9, '2017_10_30_055903_create_contact_uses_table', 8),
(10, '2017_10_30_060300_create_contact_uses_table', 9),
(11, '2017_10_30_071407_create_messages_table', 10),
(12, '2017_10_31_100720_create_overviews_table', 11),
(13, '2017_10_31_131353_create_school_info_rules_table', 12),
(14, '2017_11_02_062436_create_teacher_personals_table', 13),
(15, '2017_11_02_062515_create_teacher_educationals_table', 13),
(16, '2017_11_02_062605_create_teacher_teachings_table', 13),
(17, '2017_11_02_065429_create_teacher_educations_table', 14),
(18, '2017_11_02_065623_create_teacher_teachings_table', 15),
(19, '2017_11_02_130702_create_teacher_educations_table', 16),
(20, '2017_11_07_064120_create_administrators_table', 17),
(21, '2017_11_07_121511_create_stuffs_table', 18),
(22, '2017_11_08_062540_create_galleries_table', 19),
(23, '2017_11_08_114622_create_routines_table', 20),
(24, '2017_11_09_055532_create_results_table', 21),
(26, '2017_11_11_091601_create_lectures_table', 23),
(27, '2017_11_13_093116_create_students_table', 24),
(28, '2017_11_15_122446_create_students_table', 25),
(29, '2017_11_16_200508_create_academic_contents_table', 26),
(30, '2017_11_17_094312_create_alumni_students_table', 27),
(31, '2018_06_28_180911_create_class_of_schools_table', 28),
(32, '2018_7_09_130346_create_class_sections_table', 28),
(33, '2017_11_6_054714_create_designations_table', 29);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `subject`, `notice_file`, `published_status`, `created_at`, `updated_at`) VALUES
(13, 'ষষ্ঠ থেকে নবম শ্রেণি পর্যন্ত ছাত্র-ছাত্রীদের বার্ষিক পরীক্ষা আগামী ০৩-১২-২০১৭ ইং তারিখ থেকে।', 'front/notice/files/5a126ae3c6967Annual Exam Rutine-17.pdf', 1, '2017-10-30 03:07:47', '2017-11-19 23:40:51'),
(14, 'ম্যাগাজিন প্রকাশ সংক্রান্ত বিজ্ঞপ্তি।', 'front/notice/files/5a13cc700b930Magazine Bigopti-2017.pdf', 1, '2017-11-21 00:49:20', '2017-11-21 00:49:20'),
(16, 'এস.এস.সি- ২০১৮  ইং সনের পরীক্ষার্থীদের রুটিন প্রকাশ।', 'front/notice/files/5a18f2fd13c09S.S.C Rutine-2018.pdf', 1, '2017-11-24 22:35:09', '2017-11-24 22:35:09'),
(17, '২০১৭-২০১৮ শিক্ষাবর্ষের প্রথম সেমিষ্টার পরীক্ষার সময়সূচী।', 'front/notice/files/5a19476100aeaRutine First Semester-17.pdf', 1, '2017-11-25 04:33:28', '2017-11-25 04:35:13'),
(18, '২০১৬-২০১৭ ইং শিক্ষাবর্ষের ছাত্র-ছাত্রীদের নির্বাচনী পরীক্ষার ফলাফল আগামী ১০/১২/২০১৭ তারিখ দুপুর ১২.০০ টায় প্রকাশ করা হবে।', 'front/notice/files/5a2cc352bc34fFaka pdf.pdf', 1, '2017-12-09 23:17:06', '2017-12-09 23:17:06'),
(19, '৩০/১২/২০১৭ ইং তারিখ রোজ শনিবার সকাল ১০.০০ টায় শোল্লা উচ্চ মাধ্যমিক বিদ্যালয়ের বার্ষিক পরীক্ষার রেজাল্ট প্রকাশ করা হবে।', 'front/notice/files/5a38ae0848b91Faka pdf.pdf', 1, '2017-12-19 00:13:28', '2017-12-19 00:13:28'),
(20, 'এস.এস.সি- ২০১৮  ইং সনের মডেল টেষ্ট পরীক্ষার রুটিন প্রকাশ।', 'front/notice/files/5a3a162fef005S.S.C ModelTest.2018.pdf', 1, '2017-12-20 01:50:08', '2017-12-20 01:50:08'),
(21, 'নবাবগঞ্জ উপজেলা আন্তঃ স্কুল ও মাদরাসা উত্তর জোনের বার্ষিক ক্রীড়া প্রতিযোগিতা-২০১৭ইং শোল্লা হাইস্কুল এন্ড কলেজ খেলার মাঠে আগামী ২৬/১২/২০১৭ ইং অনুষ্ঠিত হতে যাচ্ছে।', 'front/notice/files/5a3e070e60510Faka pdf.pdf', 1, '2017-12-23 01:34:38', '2017-12-23 01:34:38'),
(22, '৩০০০ বর্গফুটের আধাপাকা টিনসেড ভবনের বিক্রয় বিজ্ঞপ্তি।', 'front/notice/files/5a51fdd1504deDak Notice Bulding-17.pdf', 1, '2018-01-07 05:00:33', '2018-01-07 05:00:33'),
(23, 'আগামী ২৭ জানুয়ারি ২০১৮ খ্রিষ্টাব্দ রোজ শনিবার সকাল ১০.৩০ ঘটিকায় শোল্লা হাই স্কুল এন্ড কলেজের বার্ষিক ক্রীড়া প্রতিযোগিতা ও চারতলা কলেজ একাডেমিক ভবনের ভিত্তি প্রস্তর স্থাপন হতে যাচ্ছে।', 'front/notice/files/5a5f054c79f8eCard-2018.pdf', 1, '2018-01-17 02:11:56', '2018-01-17 02:11:56'),
(24, '২২ মার্চ সকাল ১০.০০ টায় আনন্দ শোভাযাত্রা, ২৪ মার্চ অভিভাবক সমাবেশ, ও ২৬ মার্চ মহান স্বাধীনতা দিবস উদযাপন করা হবে।', 'front/notice/files/5ab0e5975d4d6Faka pdf.pdf', 1, '2018-03-20 04:42:31', '2018-03-20 04:42:31'),
(25, '২০১৮ ইং সনের ৬ষ্ঠ হতে ১০ম শ্রেণির মূল্যায়ন পরীক্ষার রুটিন ।', 'front/notice/files/5abb1c1b76428Rutine-2018.pdf', 1, '2018-03-27 22:37:47', '2018-03-27 22:37:47'),
(26, 'শোল্লা উচ্চ মাধ্যমিক বিদ্যালয়ের গভর্নিংবডির নির্বাচনের তফসিল ঘোষনা।', 'front/notice/files/5acaeb39902fbsmc.pdf', 1, '2018-04-08 22:25:29', '2018-04-08 22:25:29'),
(27, '২০১৭ ইং সালে জেএসসি পরীক্ষায় বৃত্তি প্রাপ্ত ছাত্র-ছাত্রীদের নামের তালিকা।', 'front/notice/files/5acb53b118842stipend jsc -2018.pdf', 1, '2018-04-09 05:51:13', '2018-04-09 05:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `overviews`
--

CREATE TABLE `overviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `president` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `principal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_student` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overviews`
--

INSERT INTO `overviews` (`id`, `president`, `principal`, `total_student`, `total_teacher`, `mobile`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Engineer Md. Selim Mia', 'Helal Uddin Ahamed', '1585 (School : 1260, College : 325)', '34(School: 12, College: 22)', '+88 01835822077', 'shollahighschool@gmail.com', 'P.O:Sholla ,P.S: Nawabgonj, Dhaka-1320', '2017-10-31 04:23:32', '2017-11-24 22:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('adeptsaiful@gmail.com', '$2y$10$HAbozK/nT8Gucq81nXKrcObXwWARtgRttV/5BPbi62stqlNNafa0O', '2017-11-19 13:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result_file` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result_as` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `routine_file` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `routine_as` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `subject`, `routine_file`, `routine_as`, `published_status`, `created_at`, `updated_at`) VALUES
(4, 'Class Rutine-2018', 'front/routine/5a6966ccee99fClass Rutine School- 2018.pdf', 'class-routine', 1, '2017-11-08 06:24:49', '2018-01-24 23:10:36'),
(5, 'Annual Exam Rutine-2017', 'front/routine/5a1273b63b596Annual Exam Rutine-17.pdf', 'exam-routine', 1, '2017-11-20 00:18:30', '2017-11-20 00:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `school_info_rules`
--

CREATE TABLE `school_info_rules` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_type` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_info_rules`
--

INSERT INTO `school_info_rules` (`id`, `title`, `image`, `contents`, `content_type`, `created_at`, `updated_at`) VALUES
(1, 'Institute History', 'front/img/school-image/59f99d452056eslider3.jpg', '<p style=\"text-align:justify\"><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;The name of the institution is Sholla High School &amp; College. It was established in </span></span><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">1945 A</span></span><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">.D. At&nbsp; the time of establishment the first name of the institution was </span></span><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">Sholla</span></span> <span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">Multi</span></span> <span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">Face</span></span> <span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">High School</span></span><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">. Late Mr Nalini mohan ghos is the founder of the school. In view of&nbsp; the higher education here attached eleventh and twelve class in </span></span><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">1995 A</span></span><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">.D. From then the institution contains the name&nbsp; </span></span><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">Sholla</span></span> <span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\">High School</span></span><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;\"> and College. This institution is making doctor, engineer and government high officials.</span></span></p>', 'history', '2017-10-31 18:00:00', '2017-11-24 23:09:03'),
(2, 'Institute Rules', 'front/img/school-image/59f98ef99c78dsholla-School.jpg', '<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;\"><strong><u><span style=\"font-size:14.0pt\">Facilities of the school </span></u></strong><strong><u><span style=\"font-size:14.0pt\"><span style=\"font-family:SutonnyMJ\">t-</span></span></u></strong></span></span></p>\r\n\r\n<ol style=\"list-style-type:lower-roman\">\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;\"><span style=\"font-size:14.0pt\">The students can admitt in class six, class nine and in class eleven in online.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;\"><span style=\"font-size:14.0pt\">The school &amp; college allocate education among the students and create litterate citigen for the society.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;\"><span style=\"font-size:14.0pt\">The school &amp; college also give the ICT training to the students.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;\"><span style=\"font-size:14.0pt\">The students take parts co- curriculam activities now &amp; then.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;\"><span style=\"font-size:14.0pt\">The school give stipend among the poor students who are meritorious.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;\"><span style=\"font-size:14.0pt\">The students can pay tution fees through online. </span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;\"><span style=\"font-size:14.0pt\">Any student can apply for addmission through online.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;\"><span style=\"font-size:14.0pt\">Any guardian can know the information of his child about his performance of studies through the online.</span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;\"><span style=\"font-size:14.0pt\">The guardian may able to know the presency in the class of his chaild through online.</span></span></span></li>\r\n</ol>', 'rules', '2017-10-31 18:00:00', '2017-11-24 23:13:24'),
(3, 'Land Infromation', 'front/img/school-image/59f98f02b9a6eslider2.jpg', '<p><span style=\"color:#2ecc71\"><strong><u><span style=\"background-color:#ecf0f1\">This Institute,</span></u></strong></span> located on (area-location), in Dhaka. This Institute is one of the oldest institute in our district. It has about 20,000 students.This Institute is one of the renowned schools in Bangladesh. It has a glorious past.It was established in 1945</p>\r\n\r\n<p>This Institute, located on (area-location), in Dhaka. This Institute is one of the oldest institute in our district. It has about 20,000 students.This Institute is one of the renowned schools in Bangladesh. It has a glorious past.It was established in 1945</p>\r\n\r\n<p>This Institute, located on (area-location), in Dhaka. This Institute is one of the oldest institute in our district. It has about 20,000 students.This Institute is one of the renowned schools in Bangladesh. It has a glorious past.It was established in 1945</p>', 'land-info', NULL, '2017-11-01 04:03:20'),
(4, 'Building Information', 'front/img/school-image/59f98f0bba441sholla-School.jpg', '<p>This Institute, located on (area-location), in Dhaka. This Institute is one of the oldest institute in our district. It has about 20,000 students.This Institute is one of the renowned schools in Bangladesh. It has a glorious past.It&nbsp;</p>\r\n\r\n<p>This Institute, located on (area-location), in Dhaka. This Institute is one of the oldest institute in our district. It has about 20,000 students.This Institute is one of the renowned schools in Bangladesh. It has a glorious past.It&nbsp;</p>\r\n\r\n<p>This Institute, located on (area-location), in Dhaka. This Institute is one of the oldest institute in our district. It has about 20,000 students.This Institute is one of the renowned schools in Bangladesh. It has a glorious past.It&nbsp;</p>', 'building-info', '2017-10-31 18:00:00', '2017-11-01 03:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `caption`, `slider_image`, `published_status`, `created_at`, `updated_at`) VALUES
(1, 'অ্যাসেম্বলি ক্লাস', 'Sholla School', 'front/img/slider/5a12788e8715eIMG_01000.jpg', 1, '2017-10-25 03:11:46', '2017-11-20 00:39:11'),
(2, 'School Campas', 'Sholla School and College', 'front/img/slider/5a1901e368c5959f98ef99c78dsholla-School.jpg', 1, '2017-10-25 03:13:07', '2017-11-24 23:38:43'),
(5, 'আনন্দ শোভাযাত্রা- ২০১৮ ইং', 'শোল্লা উচ্চ মাধ্যমিক বিদ্যালয়', 'front/img/slider/5abb1d4d722f1IMG_20180322_121120.gif', 1, '2018-03-27 22:42:53', '2018-03-27 22:42:53'),
(6, 'নবনির্বাচিত গভর্ণিংবডির সদস্যবৃন্দ- ২০১৮ ইং', 'শোল্লা উচ্চ মাধ্যমিক বিদ্যালয়', 'front/img/slider/5b53031017fea33768738_793144067476308_468033267828785152_n.jpg', 1, '2018-07-21 03:55:28', '2018-07-21 03:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `speeches`
--

CREATE TABLE `speeches` (
  `id` int(10) UNSIGNED NOT NULL,
  `person_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speech_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `speech_person` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `speeches`
--

INSERT INTO `speeches` (`id`, `person_image`, `speech_content`, `speech_person`, `created_at`, `updated_at`) VALUES
(1, 'front/img/speech-person/59f478bc91badPrecident.jpg', 'This Institute, located on (area-location), in Dhaka. This Institute is one of the oldest institute in our district. It has about 20,000 students.This Institute is one of the renowned schools in Bangladesh. It has a glorious past.It was established in 1945. From that, till today, this school is keeping its image equally remarkable in the sky of Educational institutions.\r\nIn the ent global perspective of the twenty-first century, because of unprecedented advancement, dynamism, diversity of science and technology, life has become much more competitive. Skilled, educated, proficient and potential persons are now demanded to cope with this dynamism and challenge... President one', 'president-speech', '2017-10-28 05:19:00', '2017-10-28 06:47:36'),
(2, 'front/img/speech-person/5b8983442d4ca59f478aa619fcPrincipal.jpg', '<p>This Institute, located on (area-location), in Dhaka. This Institute is one of the oldest institute in our district. It has about 20,000 students.This Institute is one of the renowned schools in Bangladesh. It has a glorious past.It was established in 1945. From that, till today, this school is keeping its image equally remarkable in the sky of Educational institutions.<br />\r\nIn the ent global perspective of the twenty-first century, because of unprecedented advancement, dynamism, diversity of science and technology, life has become much more competitive. Skilled, educated, proficient and potential persons are now demanded to cope with this dynamism is&#39;t and challenge... two</p>', 'principal-speech', '2017-10-28 05:19:29', '2018-08-31 12:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_reg_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_as` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_roll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `study_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `father_name`, `mother_name`, `guardian_mobile`, `gender`, `religion`, `birth_reg_number`, `village`, `post_office`, `thana`, `district`, `student_as`, `student_id`, `student_roll`, `class_id`, `section_id`, `study_group`, `session_year`, `student_image`, `published_status`, `created_at`, `updated_at`) VALUES
(3, 'Rashadul Islam', 'Munnaf Befari', 'Jahera Begum', '01546895231', 'Male', 'Islam', NULL, 'Shingour', NULL, NULL, NULL, 'college-student', 'col-102', '12', 1, 1, 'Science', '2017', 'front/img/students/5a0c37cd35f5fclass-routine.jpg', 1, '2017-11-15 06:49:17', '2018-08-30 12:24:02'),
(4, 'Hafsa Billah', 'Father Name', 'Mother Name', '01854236985', 'Female', 'Islam', NULL, 'Shingour', NULL, NULL, NULL, 'college-student', 'col-103', '5', 1, 2, 'Science', '2017', 'front/img/students/5a0d2856bbdb15a02ab1f481aeteacher1.jpg', 1, '2017-11-15 07:10:26', '2017-11-15 23:58:56'),
(5, 'Hafsa Billah', 'sdfsd', 'sdfsdf', '01475236958', 'Female', 'Islam', NULL, 'sdfsdf', NULL, NULL, NULL, 'school-student', 'sch-104', NULL, 1, 1, NULL, '2018', 'front/img/students/5b883b9a84cc9User_ring.png', 1, '2018-08-30 12:46:50', '2018-08-30 12:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `stuffs`
--

CREATE TABLE `stuffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stuff_type` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci,
  `parmanent_address` text COLLATE utf8mb4_unicode_ci,
  `stuff_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stuffs`
--

INSERT INTO `stuffs` (`id`, `name`, `gender`, `blood_group`, `religion`, `mobile`, `email`, `stuff_type`, `image`, `present_address`, `parmanent_address`, `stuff_status`, `created_at`, `updated_at`) VALUES
(2, 'Idris Ali', 'Male', NULL, 'Islam', '01949640685', NULL, 'Office-assistanta', 'front/img/stuff/5a18fdc4d771eEdris Ali.jpg', 'Sholla, Nawabgonj, Dhaka-1320, Bangladesh', 'Sholla, Nawabgonj, Dhaka-1320, Bangladesh', 1, '2017-11-07 06:50:49', '2017-11-24 23:21:17'),
(3, 'Bimol Kumar Mondal', 'Male', NULL, 'Hinduism', '01823867931', 'ratulkumar640@gmail.com', 'Computer-operator', 'front/img/stuff/5a18fd7d934e749934.jpg', 'Sholla, Nawabgonj, Dhaka-1320, Bangladesh', 'Sholla, Nawabgonj, Dhaka-1320, Bangladesh', 1, '2017-11-07 06:53:55', '2017-12-05 03:50:00'),
(4, 'Niranjon Kumar Sarkar', 'Male', NULL, 'Hinduism', '01929729920', NULL, 'Office-assistanta', 'front/img/stuff/5a18ff10b3a16Untitled-1 copy.jpg', 'Sholla, Nawabgonj, Dhaka-1320, Bangladesh', 'Sholla, Nawabgonj, Dhaka-1320, Bangladesh', 1, '2017-11-07 06:54:24', '2017-11-25 13:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_educations`
--

CREATE TABLE `teacher_educations` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `b_ed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed_board` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `bed_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed_passing_year` timestamp NULL DEFAULT NULL,
  `masters` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_board` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_passing_year` timestamp NULL DEFAULT NULL,
  `graduation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_board` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_passing_year` timestamp NULL DEFAULT NULL,
  `hsc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_board` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_passing_year` timestamp NULL DEFAULT NULL,
  `ssc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_board` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_passing_year` timestamp NULL DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_educations`
--

INSERT INTO `teacher_educations` (`id`, `teacher_id`, `b_ed`, `bed_subject`, `bed_board`, `bed_result`, `bed_passing_year`, `masters`, `masters_subject`, `masters_board`, `masters_result`, `masters_passing_year`, `graduation`, `graduation_subject`, `graduation_board`, `graduation_result`, `graduation_passing_year`, `hsc`, `hsc_group`, `hsc_board`, `hsc_result`, `hsc_passing_year`, `ssc`, `ssc_group`, `ssc_board`, `ssc_result`, `ssc_passing_year`, `designation`, `special_in`, `teacher_type`, `join_date`, `created_at`, `updated_at`) VALUES
(2, 8, 'B.ED', NULL, NULL, NULL, '2017-11-09 18:00:00', 'Masters', 'Political Science', 'N.U', '2nd Division', '1994-12-31 18:00:00', 'Graduation', 'Political Science', 'N.U', '2nd Division', '1993-12-31 18:00:00', 'HSC', 'Humanities', 'Comilla', '2nd Division', '1990-12-31 18:00:00', 'SSC', 'Science', 'Comilla', '1st Division', '2008-12-31 18:00:00', 'Assistant-professor', 'English', 'Parmanent', '2000-01-17 18:00:00', '2017-11-05 00:06:46', '2017-12-09 04:00:39'),
(3, 4, 'B.ED', NULL, NULL, NULL, '2017-11-14 18:00:00', 'Masters', 'Humanities', 'N.U', '2nd Division', '2001-12-31 18:00:00', 'Graduation', 'Bangla', 'N.U', '2nd Division', '2000-12-31 18:00:00', 'HSC', 'Humanities', 'Dhaka', '1st Division', '1996-12-31 18:00:00', 'SSC', 'Humanities', 'Dhaka', '1st Division', '1993-12-31 18:00:00', 'Assistant-Teacher', 'Bangla', 'Parmanent', '2009-06-24 17:00:00', '2017-11-05 02:46:11', '2017-12-09 03:46:25'),
(4, 5, 'B.ED', 'bed', 'DU', '5.00', '2017-11-09 18:00:00', 'Masters', 'Economics', 'N.U', 'Second Division', '1998-12-31 18:00:00', 'Graduation', 'Economics', 'NU', 'Second Division', '1997-12-31 18:00:00', 'HSC', 'Science', 'Dhaka', '1st Division', '1994-12-31 18:00:00', 'SSC', 'Science', 'Dhaka', 'Dhaka', '1992-12-31 18:00:00', 'Assistant-Teacher', 'Economics', 'Parmanent', '2004-03-02 18:00:00', '2017-11-05 02:47:49', '2017-12-09 03:41:10'),
(5, 6, 'B.ED', NULL, NULL, NULL, '2017-11-29 18:00:00', 'Masters', 'English', 'N.U', 'Second Division', '1995-12-31 18:00:00', 'Graduation', 'English', 'N.U', 'Second Division', '1990-12-31 18:00:00', 'HSC', 'English', 'Dhaka', 'Second Division', '1985-12-31 18:00:00', 'SSC', 'English', 'Dhaka', 'First Division', '1983-12-31 18:00:00', 'Assistant-Teacher', 'English, Bangla', 'Parmanent', '2003-07-04 18:00:00', '2017-11-05 06:13:48', '2017-12-09 03:33:26'),
(6, 13, 'B.ED', NULL, NULL, NULL, NULL, 'Masters', NULL, NULL, NULL, NULL, 'Graduation', NULL, NULL, NULL, NULL, 'HSC', 'ddd', 'ggggggg', '3.00', '1999-12-31 18:00:00', 'SSC', 'ss', 'dhak', '3.00', '1992-12-31 18:00:00', 'Assistant-Headmaster', NULL, 'permanent', NULL, '2017-12-09 04:36:22', '2017-12-09 04:36:22'),
(7, 12, 'B.ED', NULL, NULL, NULL, NULL, 'Masters', NULL, NULL, NULL, NULL, 'Graduation', NULL, NULL, NULL, NULL, 'HSC', 'HSC', 'Dhaka', '3.00', '1999-12-31 18:00:00', 'SSC', 'SSC', 'dhak', '5.00', '1999-12-31 18:00:00', 'Assistant-Teacher', NULL, 'Permanent', NULL, '2017-12-09 04:38:26', '2017-12-09 04:38:26'),
(8, 11, 'B.ED', NULL, NULL, NULL, NULL, 'Masters', NULL, NULL, NULL, NULL, 'Graduation', NULL, NULL, NULL, NULL, 'HSC', 'Humanities', 'Dhaka', '1st Division', '1999-12-31 18:00:00', 'SSC', 'English', 'dhak', '1st Division', '1999-12-31 18:00:00', 'Assistant-Teacher', NULL, 'Permanent', NULL, '2017-12-09 04:39:34', '2017-12-09 04:39:34'),
(9, 26, 'B.ED', NULL, NULL, NULL, NULL, 'Masters', 'Accounting', 'Dhaka University', '2nd Division', '1990-12-31 18:00:00', 'Graduation', 'Accounting', 'Dhaka University', '2nd Division', '1989-12-31 18:00:00', 'HSC', 'Business Studies', 'Dhaka', '1st Division', '1986-12-31 18:00:00', 'SSC', 'Business Studies', 'Dhaka', '1st Division', '1984-12-31 18:00:00', 'Principal', 'English, Bangla', 'Permanent', '1995-09-13 18:00:00', '2017-12-18 00:58:02', '2017-12-18 00:58:02'),
(10, 9, 'B.ED', NULL, NULL, NULL, NULL, 'Masters', 'Managment', 'Dhaka University', '2nd Division', '1988-12-31 18:00:00', 'Graduation', 'MANAGEMENT', 'Dhaka University', '2nd Division', '1984-12-31 18:00:00', 'HSC', 'Business Studies', 'Dhaka', '2nd Division', '1984-12-31 18:00:00', 'SSC', 'MANAGEMENT', 'Dhaka', '1st Division', '1982-12-31 18:00:00', 'Assistant-professor', 'English, Bangla', 'Permanent', '1996-04-06 18:00:00', '2017-12-18 01:24:34', '2017-12-18 01:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_personals`
--

CREATE TABLE `teacher_personals` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_status` tinyint(4) NOT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci,
  `parmanent_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_no` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_personals`
--

INSERT INTO `teacher_personals` (`id`, `name`, `father_name`, `mother_name`, `gender`, `blood_group`, `religion`, `marital_status`, `mobile`, `email`, `date_of_birth`, `image`, `teacher_status`, `present_address`, `parmanent_address`, `serial_no`, `created_at`, `updated_at`) VALUES
(1, 'ANJUMANARA RIMA', 'Md. Alauddin', 'Amena Begum', 'Male', 'o+', 'Islam', 'Married', '01758946213', 'adeptsaiful@gmail.com', '2017-11-01 18:00:00', 'front/img/teachers/59faf26232438BD_Courier.PNG', 1, 'DHAKA', 'DHAKA', 26, '2017-11-02 04:24:34', '2018-08-27 12:44:18'),
(2, 'MD. LUTFUL KARIM', 'Amir Hossain', 'Reno Begum', 'Male', 'a+', 'Islam', 'Unmarried', '01578462589', 'saiful@gmail.com', '2017-11-01 18:00:00', 'front/img/teachers/5a2bb68647896IMG_0384.JPG', 1, 'Dhaka', 'Dhaka', 25, '2017-11-02 04:50:34', '2018-08-27 12:45:00'),
(3, 'MD. ASADUZZAMAN', 'Father Name', 'Mother Name', 'Male', 'o+', 'Islam', 'Unmarried', '01578456923', 'teacher@gmail.com', '2017-11-02 18:00:00', 'front/img/teachers/59fafa8a39a7c19030629_260314657781992_5784264093451379335_n.jpg', 1, 'Dhaka', 'dhaka', 24, '2017-11-02 04:59:22', '2018-08-27 12:45:14'),
(4, 'ASMA AKTER', 'Father Name', 'Mother Name', 'Male', 'o+', 'Islam', 'Married', '01254785642', 'teachers@gmail.com', '2017-11-01 18:00:00', 'front/img/teachers/5a2baca3c433fIMG_0270.JPG', 1, 'dhaka', 'Dhaka', 23, '2017-11-02 05:04:28', '2018-08-27 12:45:27'),
(5, 'Jahangir Alam', 'Father Name', 'Mother Name', 'Femal', 'o+', 'Hinduism', 'Unmarried', '01758469213', 'teacher1@gmail.com', '2017-12-05 18:00:00', 'front/img/teachers/5a27ca0241f67IMG_0267.JPG', 1, 'Dhaka', 'Dhaka', 22, '2017-11-02 05:05:29', '2018-08-27 12:45:42'),
(6, 'MD. Abdur Rouf', 'Father Name', 'Mother Name', 'Male', 'o+', 'Islam', 'Unmarried', '01756481235', 'teacher2@gmail.com', '2017-11-01 18:00:00', 'front/img/teachers/5a27c9ce95f74Rouf sir.jpg', 1, 'dhaka', 'Dhaka', 21, '2017-11-02 05:06:23', '2018-08-27 12:45:58'),
(7, 'S.M ENAMUL HAQUE', 'Father Name', 'Mother Name', 'Male', 'o+', 'Islam', 'Unmarried', '01865421974', 'teacher3@gmail.com', '2017-11-03 18:00:00', 'front/img/teachers/5a27c9b15e911649.jpg', 1, 'Dhaka', 'Dhaka', 20, '2017-11-02 05:08:01', '2018-08-27 12:46:15'),
(8, 'HELAL UDDIN', 'Father Name', 'Mother Name', 'Male', 'o+', 'Islam', 'Married', '01869542137', 'Rofe110@gmail.com', '2017-11-09 18:00:00', 'front/img/teachers/5a27c998d532707-367.jpg', 1, 'Dhaka', 'Dhakaq', 19, '2017-11-02 05:09:34', '2018-08-27 12:46:32'),
(9, 'Md. Kahinoor Islam', 'Father Name', 'Mother Name', 'Male', 'o+', 'Islam', 'Married', '01748938158', 'mdrouf@gmail.com', '2017-10-28 18:00:00', 'front/img/teachers/5a27c8eaa73a9DSC_0719.JPG', 1, 'Dhaka', 'Dhaka', 18, '2017-11-02 05:12:29', '2018-08-27 12:46:46'),
(10, 'NARAYAN CHANDRA SORKER', 'LATE. BIPIN CHANDRA  BISWAS', 'LATE. BISHAKA RANI BISWAS', 'Male', NULL, 'Hinduism', 'Married', '01725775937', 'bimolkumar92@yahoo.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2bb848539d9Photo of Narayan Chandra.jpg', 1, 'DHAKA', 'DHAKA', 17, '2017-12-09 04:17:44', '2018-08-27 12:47:03'),
(11, 'NAZIR AHAMMED', 'Golap Khan', 'Rahela Begum', 'Male', 'A+', 'Islam', 'Married', '01734642103', 'ratulkumar92@yahoo.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2bb899ef146Untitled-1.jpg', 1, 'DHAKA', 'DHAKA', 16, '2017-12-09 04:19:06', '2018-08-27 12:47:18'),
(12, 'ABDUL KARIM', 'Abdul Barek', 'Rahela Begum', 'Male', NULL, 'Islam', 'Married', '01838728828', 'bcabag@yahoo.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2bba91e06a6IMG_20170320_0001.jpg', 1, 'DHAKA', 'DHAKA', 15, '2017-12-09 04:27:30', '2018-08-27 12:47:31'),
(13, 'S.M ENAMUL HAQUE', 'Golap Khan', 'Nasima Begum', 'Male', NULL, 'Islam', 'Married', '01715522049', 'schooladmin@yahoo.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2bbb644a79e649.jpg', 1, 'dhaka', 'dhaka', 2, '2017-12-09 04:31:00', '2018-08-27 12:43:08'),
(14, 'CHANDRA NATH BEPARI', 'Golap Khan', 'Rahela Begum', 'Male', 'A+', 'Islam', 'Married', '01866000245', 'schooladmin@gmail.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2cc486194b5Photo of Chandra Nath Bepary.jpg', 1, 'Dhaka', 'Dhaka', 14, '2017-12-09 23:22:14', '2018-08-27 12:47:44'),
(15, 'SHYAMAL KUMAR GHOSH', 'Biplob', 'gita', 'Male', NULL, 'Hinduism', 'Married', '01722548697', 'shymaolkumar@gmail.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2cc5929241ePhot of Shyamal Kumar Ghosh.jpg', 1, NULL, 'Dhaka', 13, '2017-12-09 23:26:42', '2018-08-27 12:48:01'),
(16, 'JADAB CHANDRA MONDAL', 'gopol mondal', 'renu', 'Male', NULL, 'Hinduism', 'Married', '01725896321', 'jadabchandramondal098@gmail.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2cc5fb25b911739.jpg', 1, NULL, 'Dhaka', 12, '2017-12-09 23:28:27', '2018-08-27 12:48:19'),
(17, 'Nurul islam Ansary', 'md .Rukon', 'moli', 'Male', NULL, 'Islam', 'Married', '01856947236', 'nurulislamansari5@gmail.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2cc66530376photo of Md. Nurul Islam Ansari.jpg', 1, NULL, 'Dhaka', 11, '2017-12-09 23:30:13', '2018-08-27 12:48:44'),
(18, 'GOUTAM KUMAR CHAKRABORTY', 'Himanshu', 'rity', 'Male', NULL, 'Hinduism', 'Married', '01896548214', 'goutamchakraborty5@gmail.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2cc7032e561FB_IMG_1471861641168.jpg', 1, NULL, 'Dhaka', 10, '2017-12-09 23:32:51', '2018-08-27 12:48:56'),
(19, 'PROFULLA KUMAR BALO', 'adnan', 'rita', 'Male', NULL, 'Hinduism', 'Married', '01921458971', 'profullakumarbalo@gmail.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2cc759509eaPhoto of Prafulla Kumar Balo.jpg', 1, NULL, 'Dhaka', 9, '2017-12-09 23:34:17', '2018-08-27 12:49:14'),
(20, 'LIPI YEASMIN', 'mobarak', 'prerty', 'Femal', NULL, 'Islam', 'Married', '01925897545', 'lipiyeasmin2@gmail.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2cc79f6cd0b580f359805117.jpg', 1, NULL, 'Dhaka', 8, '2017-12-09 23:35:27', '2018-08-27 12:49:28'),
(21, 'LAVELY KHATUN', 'sufa', 'sufia', 'Male', NULL, 'Islam', 'Married', '01725894564', 'lavelyjhatun42@gmail.com', '2017-12-18 18:00:00', 'front/img/teachers/5a2cc7fa9240b581438f2eb5cb.jpg', 1, 'Dhaka', 'Dhka', 7, '2017-12-09 23:36:58', '2018-08-27 12:49:41'),
(22, 'BINOY KUMAR KIRTTONIA', 'rohit', 'kjhkih', 'Femal', NULL, 'Hinduism', 'Married', '01896443252', 'binoykumar@gmail.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2cca80354dfIMG0041A.jpg', 1, NULL, 'Dhaka', 6, '2017-12-09 23:47:44', '2018-08-27 12:49:57'),
(24, 'MAFIZUL ISLAM', 'dgfdg', 'dgdgdsg', 'Male', NULL, 'Islam', 'Married', '01784592155', 'mafizul@gmail.com', '2018-08-26 18:00:00', 'front/img/teachers/5a2ccd440e34358103cfa9ad39.jpg', 1, NULL, 'dhaka', 4, '2017-12-09 23:59:32', '2018-08-27 12:50:28'),
(25, 'AFROJA PARVIN', 'GDGG', 'fhfhfh', 'Femal', NULL, 'Islam', 'Married', '01875965421', 'afroja@gmail.com', '1986-01-13 18:00:00', 'front/img/teachers/5a2ccda91cf01Logo Binoy.jpg', 1, 'Dhaka', 'dhaka', 3, '2017-12-10 00:01:13', '2018-08-27 12:50:43'),
(26, 'Helal Uddin Ahmed', 'Abdul Barek', 'Rahela Begum', 'Male', NULL, 'Islam', 'Married', '01698887747', 'helaluddinahmed85@gmail.com', '1970-02-16 18:00:00', 'front/img/teachers/5a2e242d5ee39Principal.jpg', 1, 'Dhaka', 'Dhaka', 1, '2017-12-11 00:22:37', '2018-08-27 12:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '01687835849', 'adeptsaiful@gmail.com', '$2y$10$BF6ba7m2d.YyPgu9e/eW1.rTa8jOp2H0s7anSH6qSzccmY44ifc8m', 'jtHZFHHyBsV1RiIKiSzZ8bRWPBFPfETI7Y38cTNTmwbpftRtepe23WuUKLth', '2017-10-24 06:28:43', '2017-11-17 23:34:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_schools`
--
ALTER TABLE `about_schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_contents`
--
ALTER TABLE `academic_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `administrators_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `administrators_email_unique` (`email`),
  ADD KEY `administrator_designation` (`designation_id`);

--
-- Indexes for table `alumni_students`
--
ALTER TABLE `alumni_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_of_schools`
--
ALTER TABLE `class_of_schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_sections_class_of_school_id_foreign` (`class_of_school_id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lecture_class_id` (`class_id`),
  ADD KEY `lecture_class_section_id` (`section_id`);

--
-- Indexes for table `meritorious_students`
--
ALTER TABLE `meritorious_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overviews`
--
ALTER TABLE `overviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_info_rules`
--
ALTER TABLE `school_info_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speeches`
--
ALTER TABLE `speeches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_classId` (`class_id`),
  ADD KEY `student_class_section_id` (`section_id`);

--
-- Indexes for table `stuffs`
--
ALTER TABLE `stuffs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stuffs_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `stuffs_email_unique` (`email`);

--
-- Indexes for table `teacher_educations`
--
ALTER TABLE `teacher_educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_personals`
--
ALTER TABLE `teacher_personals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_schools`
--
ALTER TABLE `about_schools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `academic_contents`
--
ALTER TABLE `academic_contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alumni_students`
--
ALTER TABLE `alumni_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class_of_schools`
--
ALTER TABLE `class_of_schools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class_sections`
--
ALTER TABLE `class_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `meritorious_students`
--
ALTER TABLE `meritorious_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `overviews`
--
ALTER TABLE `overviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school_info_rules`
--
ALTER TABLE `school_info_rules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `speeches`
--
ALTER TABLE `speeches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stuffs`
--
ALTER TABLE `stuffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher_educations`
--
ALTER TABLE `teacher_educations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher_personals`
--
ALTER TABLE `teacher_personals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrators`
--
ALTER TABLE `administrators`
  ADD CONSTRAINT `administrator_designation` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`);

--
-- Constraints for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD CONSTRAINT `class_sections_class_of_school_id_foreign` FOREIGN KEY (`class_of_school_id`) REFERENCES `class_of_schools` (`id`);

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `lecture_class_id` FOREIGN KEY (`class_id`) REFERENCES `class_of_schools` (`id`),
  ADD CONSTRAINT `lecture_class_section_id` FOREIGN KEY (`section_id`) REFERENCES `class_sections` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `student_class_section_id` FOREIGN KEY (`section_id`) REFERENCES `class_sections` (`id`),
  ADD CONSTRAINT `students_classId` FOREIGN KEY (`class_id`) REFERENCES `class_of_schools` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
