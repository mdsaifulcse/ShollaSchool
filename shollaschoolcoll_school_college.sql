-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2020 at 09:46 PM
-- Server version: 10.2.36-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shollaschoolcoll_school_college`
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
  `present_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmanent_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `name`, `father_name`, `mother_name`, `gender`, `blood_group`, `religion`, `marital_status`, `mobile`, `administrator_type`, `designation_id`, `education`, `email`, `date_of_birth`, `image`, `aministrator_status`, `present_address`, `parmanent_address`, `created_at`, `updated_at`) VALUES
(1, 'Helal Uddin Ahamed', 'Father Name', 'Mother Name', 'Male', 'Helal Uddin Ahamed', 'Islam', 'Married', '01542718654', 'Managing-Committee', 2, 'Masters', 'adeptsaiful@gmail.com', '1975-03-14', 'front/img/administrator/5a015c8fd7d00Principal.jpg', 1, 'Dhaka', 'Dhaka', '2017-11-07 01:11:11', '2019-01-13 00:50:15'),
(2, 'Mahabubur Rahman (Tara Mia)', 'Late Abdur Rafiq Mia', 'Late Torikun nessa', 'Male', NULL, 'Islam', 'Married', '01766195366', 'Managing-Committee', 3, 'Graduation', 'mrpappu786@gmail.com', '1948-04-01', 'front/img/administrator/5bb05e2cc8c04tara.1.jpg', 1, 'Vill- Konda, Po- Awona, Upazilla- Nawabgonj, District- Dhaka.', 'Vill- Konda, Po- Awona, Upazilla- Nawabgonj, District- Dhaka.', '2017-11-07 01:14:04', '2018-09-29 23:25:01'),
(3, 'Engr. Md.Salim Miah', 'Noor Islam', 'Rokeya Begum', 'Male', 'Engr. Md.Salim Miah', 'Islam', 'Married', '01711645509', 'Managing-Committee', 1, 'Masters', 'mmsalim1000@gmail.com', '1966-01-16', 'front/img/administrator/5bb054c7c0e4aUntitled-6.jpg', 0, 'Villl- Singjor, Po- Sholla, Upazilla- Nawabgonj, District- Dhaka.', 'Villl- Singjor, Po- Sholla, Upazilla- Nawabgonj, District- Dhaka.', '2017-11-07 01:15:37', '2020-11-03 00:32:30'),
(4, 'Md. Mukhlesur Rahman', 'Late Md Abdul Quddus', 'Late Mahila Khatun', 'Male', NULL, 'Islam', 'Married', '01715697811', 'Managing-Committee', 1, 'Masters', 'mukhlesurrahman1957@gmail.com', '1957-03-10', 'front/img/administrator/5fa0ffc85e9f0president.jpg', 1, 'Badhan, flat #3\\A,\r\nHouse# 592 Road3 10 \r\nBaitul Aman Housing Society Ltd., Adabor\r\nMohammadpur, Dhaka-1207', 'Badhan, flat #3\\A,\r\nHouse# 592 Road3 10 \r\nBaitul Aman Housing Society Ltd., Adabor\r\nMohammadpur, Dhaka-1207', '2020-11-03 00:59:21', '2020-11-03 00:59:21');

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
  `present_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_of_schools`
--

INSERT INTO `class_of_schools` (`id`, `class_of`, `class_name`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Six', NULL, 1, '2018-08-30 12:06:39', '2018-08-30 12:06:39'),
(2, 1, 'Seven', NULL, 1, '2018-08-30 12:38:52', '2018-08-30 12:38:52'),
(3, 1, 'Eight', NULL, 1, '2018-08-30 12:38:59', '2018-08-30 12:38:59'),
(4, 2, 'Eleven', 'XI', 1, '2019-09-06 23:26:20', '2019-09-06 23:26:20'),
(5, 2, 'Twelve', 'XII', 1, '2019-09-06 23:26:53', '2019-09-06 23:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `class_sections`
--

CREATE TABLE `class_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_of_school_id` int(10) UNSIGNED NOT NULL,
  `section_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_sections`
--

INSERT INTO `class_sections` (`id`, `class_of_school_id`, `section_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Polash', 1, '2018-08-30 12:08:05', '2018-09-30 02:19:31'),
(2, 1, 'Golap', 1, '2018-08-30 12:08:12', '2018-08-30 12:08:12'),
(3, 1, 'Shapla', 1, '2018-08-30 12:08:28', '2018-09-23 03:21:33'),
(5, 3, 'Bolaka', 1, '2018-08-30 12:39:30', '2018-08-30 12:39:30'),
(6, 3, 'Doyel', 1, '2018-08-30 12:39:36', '2018-08-30 12:39:36'),
(7, 3, 'Golap', 1, '2018-08-30 12:39:40', '2018-08-30 12:39:40'),
(8, 1, 'SHIMUL', 1, '2018-10-07 00:52:24', '2018-10-07 00:52:24'),
(9, 1, 'JOBA', 1, '2018-12-06 00:37:32', '2018-12-06 00:37:32'),
(10, 4, 'Business', 1, '2019-09-06 23:31:57', '2019-09-06 23:31:57'),
(11, 4, 'Humanities', 1, '2019-09-06 23:32:39', '2019-09-06 23:32:39');

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
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'President', 'President', 1, '2018-08-31 00:12:34', '2018-08-31 00:13:47'),
(2, 'Member Secretary', 'Member Secretary', 1, '2018-08-31 00:15:41', '2018-09-29 23:11:26'),
(3, 'Donor Member', 'Donor Member', 1, '2018-09-29 23:09:13', '2018-09-29 23:09:13'),
(4, 'Guardian Member', 'Guardian Member', 1, '2018-09-29 23:10:17', '2018-09-29 23:10:17');

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
(14, 'Memory Photo', 'front/img/gallery/5a1a49be43370education pic.jpg', 'memory', 1, '2017-11-25 22:57:34', '2019-02-05 23:29:02');

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
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `lecture_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `departemen`, `subject`, `class_id`, `section_id`, `teacher_id`, `lecture_file`, `published_status`, `created_at`, `updated_at`) VALUES
(8, 'All Departemen', 'Bangla', 3, 5, 63, 'front/lecture/5ba916f4a1e89Project-Proposal.pdf', 1, '2018-09-24 10:55:16', '2018-09-24 10:55:16');

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
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, 'Road Runner', 'runner@gmail.com', '01786954231', 'Dhaka', 'Good Good', '2017-10-30 02:28:53', '2017-10-30 02:28:53'),
(4, 'kk', 'riazkhan@gmail.com', '01725963258', '554', '5', '2018-09-09 01:58:56', '2018-09-09 01:58:56');

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
(27, '২০১৭ ইং সালে জেএসসি পরীক্ষায় বৃত্তি প্রাপ্ত ছাত্র-ছাত্রীদের নামের তালিকা।', 'front/notice/files/5acb53b118842stipend jsc -2018.pdf', 1, '2018-04-09 05:51:13', '2018-04-09 05:51:13'),
(28, '১০ম শ্রেণির নির্বাচনী পরীক্ষা-২০১৮ ইং এর সময়সূচী', 'front/notice/files/5ba09d14f1844Test Tutine School-18.pdf', 1, '2018-09-18 00:37:09', '2018-09-18 00:37:09'),
(29, '২০১৮-১৯ শিক্ষাবর্ষের একাদশ শ্রেণিতে অনলাইন পদ্ধতিতে ভর্তিকৃত শিক্ষার্থীদের রেজিস্ট্রেশন করণ প্রসংগে।', 'front/notice/files/5ba09e4a8f68fRegistration.pdf', 1, '2018-09-18 00:41:11', '2018-09-18 00:42:18'),
(30, '২০১৮ ইং সালের জুনিয়র স্কুল সার্টিফিকেট (জে.এস,সি ) পরীক্ষার রুটিন।', 'front/notice/files/5baf4d1e37b51JSC Exam Rutine-18.pdf', 1, '2018-09-29 03:59:59', '2018-09-29 03:59:59'),
(31, '১০ শ্রেণির নির্বাচনী পরীক্ষার ফলাফল আগামী ০১/১১/২০১৮ ইং তারিখ দুপুর ২.০০ ঘটিকায় প্রকাশ করা হবে।', 'front/notice/files/5bc31cb906ec4Faka pdf.pdf', 1, '2018-10-14 03:38:49', '2018-10-14 04:38:49'),
(32, 'বার্ষিক পরীক্ষা-২০১৮ ইং সনের রুটিন প্রকাশ।', 'front/notice/files/5bd98475367efAanaul Exam Rutine-18.pdf', 1, '2018-10-31 04:31:17', '2018-10-31 04:31:17'),
(33, '১০ম শ্রেণির নির্বাচনী পরীক্ষা-২০১৮ ইং এর ফলাফল', 'front/notice/files/5bdaace29f9bccombinepdf (2)-min.pdf', 1, '2018-11-01 01:36:03', '2018-11-01 01:36:03'),
(34, '২০১৯ সনের এস.এস.সি পরীক্ষার রুটিন প্রকাশ', 'front/notice/files/5bfb714777b2bS.S.C Rutine-2019.pdf', 1, '2018-11-25 22:06:31', '2018-11-25 22:06:31'),
(35, 'যৌন হয়রানি প্রতিরোধ কমিটি', 'front/notice/files/5cc68ff30d880Iftijing-19.pdf', 1, '2019-04-28 23:47:31', '2019-04-28 23:47:31'),
(36, '৬ষ্ট হতে ১০ম শ্রেণি পর্য ন্ত অর্ধবাষিক -২০১৯ ইং  পরীক্ষার রুটিন প্রকাশ।', 'front/notice/files/5d0494d981de5routine_jun-exam_2019-pdf.pdf', 1, '2019-06-15 00:48:58', '2019-06-15 00:48:58'),
(37, '১৫ আগষ্ট জাতির পিতা বঙ্গবন্ধু শেখ মজিবুর রহমানের ৪৪ তম শাহাদৎ উপলক্ষ্যে শোক দিবস পালনের নোটিশ।', 'front/notice/files/5d4966e4383b215 august.pdf', 1, '2019-08-06 05:39:16', '2019-08-06 05:39:16'),
(38, '২০২০ ইং সনের এইচ.এস.সি পরীক্ষার রুটিন প্রকাশ', 'front/notice/files/5d662925b0151hsc Rutine-2020.pdf', 1, '2019-08-28 01:11:34', '2019-08-28 01:11:34'),
(39, 'মূল্যায়ন পরীক্ষা সংক্রান্ত জরুরি বিজ্ঞপ্তি', 'front/notice/files/5f72d0b68e4b7school notiice.pdf', 1, '2020-09-29 00:14:18', '2020-09-29 00:14:18'),
(40, '২০২০-২১ শিক্ষাবর্ষের ২০২০ সালে একাদশ শ্রেণিতে ভর্তিকৃত ছাত্র-ছাত্রীদের রেজিষ্ট্রেশন সংক্রান্ত জরুরি বিজ্ঞপ্তি সংক্রান্ত জরুরি বিজ্ঞপ্তি', 'front/notice/files/5f72d1b01050aCollege reg Notice.pdf', 1, '2020-09-29 00:18:25', '2020-09-29 00:18:25'),
(41, 'এতদ্বারা ৬ষ্ঠ থেকে  ৯ম শ্রেনি পর্যন্ত সকল ছাত্র - ছাত্রীকে জানানো যাচ্ছে  যে, প্রদত্ত রুটিন অনুযায়ী  সরকারী নির্দেশিত  এ্যাসাইনমেন্ট দেয়া  ও জমা নেওয়া হবে। তাই মুখে  মাস্ক পরে  স্বাস্থ্যবিধি মেনে রুটিন অনুযায়ী এ্যাসাইনমেন্ট নেওয়ার নির্দেশ দেওয়া হলো।', 'front/notice/files/5fa27a384b106Doc Nov 04 2020 15.38.pdf', 1, '2020-11-04 03:54:01', '2020-11-04 03:54:01');

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
(5, 'Annual Exam Rutine-2017', 'front/routine/5a1273b63b596Annual Exam Rutine-17.pdf', 'exam-routine', 1, '2017-11-20 00:18:30', '2017-11-20 00:18:30'),
(6, 'বার্ষিক পরীক্ষা-২০১৮ ইং সনের রুটিন', 'front/routine/5bc3079e7f564Aanaul Exam Rutine-18.pdf', 'exam-routine', 1, '2018-10-14 03:08:46', '2018-10-14 03:08:46');

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
(7, 'মুজিব বর্ষ (২০২০-২১)', 'মুজিব ১০০ বর্ষ', 'front/img/slider/5e5cb0a923ada20200115130304468016 copy.jpg', 1, '2020-03-02 01:07:22', '2020-03-02 01:07:22'),
(8, 'কলেজ ভবন', 'কলেজ ভবন', 'front/img/slider/5e5cb4f42283000000000000.jpg', 1, '2020-03-02 01:25:41', '2020-03-02 01:25:41');

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
(1, 'front/img/speech-person/5fa100877f8acpresident.jpg', '<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"color:#8e44ad\"><span style=\"font-size:16px\"><strong><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:#ffffff\">Education is the backbone of a nation. Sholla Higher Secondary School acts as a pivot of our society and it is situated at Sholla Union under Nawabgonj Upazila of Dhaka district. It has a glorious history from the very beginning of its establishment. It was established in 1945 since then it has been playing a vital role in educating its students as well as other related personnel. With the passage of era, we need dynamics and versatile knowledge and this institution has been working as a co-founder of every positive decision of the country. And I hope our beloved institution will help to be competent with the present world and I am proud of being a part of this institution. From the core of my heart, I always wish a bright future for this institution. </span></span></strong></span></span></p>', 'president-speech', '2017-10-28 05:19:00', '2020-11-17 23:23:59'),
(2, 'front/img/speech-person/5b8983442d4ca59f478aa619fcPrincipal.jpg', '<p style=\"text-align:justify\"><span style=\"color:#8e44ad\"><span style=\"font-size:16px\"><strong><span style=\"font-family:Calibri,sans-serif\">This institution is located at Sholla Union under Nawabgonj Upazila of Dhaka district. It is one of the oldest institutions in our district. It has almost 2000 students and it is one of the renowned schools in Bangladesh. It has a glorious past. It was established in 1945. From then till today, it has been keeping its image equally remarkable in the sky of educational institutions. In the global perspective of twenty first century, life has become much competitive because of unprecedented advancements, dynamism and diversity of science and technology. Now, skilled, educated, proficient and potential persons are demanded to cope with this dynamic and challenging world. And I hope our beloved institution will help to be competent with the present world and I am proud of being a part of this institution. From the core of my heart, I always wish a bright future for this institution.</span></strong></span></span></p>', 'principal-speech', '2017-10-28 05:19:29', '2020-11-17 23:23:21');

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
(5, 'Atikul Hassan Abdullah', 'Awlad Hossain', 'Bakul Begum', '01720111432', 'Male', 'Islam', '20072616294001525', 'Singjor', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'Sch-01', '1', 1, 2, NULL, '2018', 'front/img/students/5ba0a1f2c36acLogo Binoy.jpg', 1, '2018-08-30 12:46:50', '2018-09-18 00:57:55'),
(6, 'Sothi Akter', 'Abdul Mia', 'Sufia Begum', '01771283426', 'Female', 'Islam', '23102006', 'Modanmohonpur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-02', '2', 1, 2, NULL, '2018', 'front/img/students/5ba0a332498d6Logo Binoy.jpg', 1, '2018-09-18 01:03:14', '2018-09-18 01:03:14'),
(7, 'Shanto Islam', 'Hafiz Islam', 'Nargis Begum', '01716029320', 'Male', 'Islam', '20053090181121537', 'Modanmohonpur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-03', '3', 1, 2, NULL, '2018', 'front/img/students/5ba0a40ad9b11Logo Binoy.jpg', 1, '2018-09-18 01:06:51', '2018-09-18 01:06:51'),
(8, 'Md. Musha', 'Md. Faruk Hossain', 'Rabiya Begum', '01840332721', 'Male', 'Islam', '20070420', 'Singjor', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-04', '4', 1, 2, NULL, '2018', 'front/img/students/5ba0b196f3632Logo Binoy.jpg', 1, '2018-09-18 02:04:39', '2018-09-18 02:04:39'),
(9, 'Sadia Islam Mim', 'Siddikur Rahman', 'Hosnaara Begum', '01721606284', 'Female', 'Islam', '200626166294118339', 'Konda', 'Awona', 'Nawabganj', 'Dhaka', 'school-student', 'sch-05', '5', 1, 2, NULL, '2018', 'front/img/students/5ba0b2ae7b880Logo Binoy.jpg', 1, '2018-09-18 02:09:18', '2018-09-18 02:09:18'),
(10, 'Sonia Akter', 'Panno Mia', 'Nasima Begum', '01768095701', 'Female', 'Islam', '20052616294115842', 'Boually', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-06', '6', 1, 2, NULL, '2018', 'front/img/students/5ba0b3802e7c1Logo Binoy.jpg', 1, '2018-09-18 02:12:48', '2018-09-18 02:12:48'),
(11, 'Rumana Islam Runa', 'Md. Rohul Amin', 'Sahana Begum', '01832727002', 'Female', 'Islam', '200626162941135010', 'Sonapur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-07', '8', 1, 2, NULL, '2018', 'front/img/students/5ba0b49dafe97Logo Binoy.jpg', 1, '2018-09-18 02:16:29', '2018-09-18 02:17:33'),
(12, 'Suraiya Akter', 'Rafiq Uddin', 'Beauty Begum', '01726860602', 'Female', 'Islam', '20062616294118339', 'Singjor', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-08', '09', 1, 2, NULL, '2018', 'front/img/students/5ba0b55a19951Logo Binoy.jpg', 1, '2018-09-18 02:20:42', '2018-09-18 02:20:42'),
(13, 'Rifat Hossain', 'Subet Ali', 'Shila Begum', '01824829061', 'Male', 'Islam', '20062616294116236', 'Modanmohonpur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-09', '10', 1, 2, NULL, '2018', 'front/img/students/5ba0b63a16d32Logo Binoy.jpg', 1, '2018-09-18 02:24:26', '2018-09-18 02:24:26'),
(14, 'Nayem Hossen', 'Deluar Hossen', 'Parul Begum', '01881711241', 'Male', 'Islam', '20072616294118523', 'Singjor', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-10', '11', 1, 2, NULL, '2018', 'front/img/students/5ba0b6e618a19Logo Binoy.jpg', 1, '2018-09-18 02:27:18', '2018-09-18 02:27:18'),
(15, 'MD. Saruar Buiya', 'Md. Delowar Buiya', 'Salma Vegum', '01929730144', 'Male', 'Islam', '20070719', 'Modanmohonpur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-11', '12', 1, 2, NULL, '2018', 'front/img/students/5ba0b75891722Logo Binoy.jpg', 1, '2018-09-18 02:29:12', '2018-09-18 02:29:12'),
(16, 'Junayed Ahamed', 'Jabed Ali Ahikdar', 'Jorina Shikdar', '01815496709', 'Male', 'Islam', '20075618225011203', 'Nilamborpotty', 'Chandhar', 'Singair', 'Manikganj', 'school-student', 'sch-12', '13', 1, 2, NULL, '2018', 'front/img/students/5ba0b7ef2e417Logo Binoy.jpg', 1, '2018-09-18 02:31:43', '2018-09-18 02:31:43'),
(17, 'Juwlakha', 'Md. Juyel Mia', 'Asma Begum', '01839096926', 'Female', 'Islam', '20072616294115448', 'Sholla', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-13', '14', 1, 2, NULL, '2018', 'front/img/students/5ba0b87ba8ba3Logo Binoy.jpg', 1, '2018-09-18 02:34:04', '2018-09-18 02:34:04'),
(18, 'Eva Akter', 'A.K.M Mohiuddin', 'Rozina Akter', '01813708587', 'Female', 'Islam', '20072616294115087', 'Sonapur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-14', '15', 1, 2, NULL, '2018', 'front/img/students/5ba0b93ba9606Logo Binoy.jpg', 1, '2018-09-18 02:37:15', '2018-09-18 02:37:15'),
(19, 'Mahia Akter', 'Mohiaddin Ahamad', 'Mrs. Shova Akter', '01760410881', 'Female', 'Islam', '20070715', 'Singjor', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-15', '16', 1, 2, NULL, '2018', 'front/img/students/5ba0ba96c46a1Logo Binoy.jpg', 1, '2018-09-18 02:43:03', '2018-09-18 02:43:03'),
(20, 'Fardin Khan', 'Saiful Islam', 'Firoza Khanam', '01764105084', 'Male', 'Islam', '200756182251406627', 'Nilamborpotty', 'Chandhar', 'Singair', 'Manikganj', 'school-student', 'sch-16', '17', 1, 2, NULL, '2018', 'front/img/students/5ba0bb541c131Logo Binoy.jpg', 1, '2018-09-18 02:46:12', '2018-09-18 02:46:12'),
(21, 'Sompod Hazra', 'Sankar Hazra', 'Suborna Hazra', '01915876557', 'Female', 'Hinduism', '20062616294118393', 'Konda', 'Awona', 'Nawabganj', 'Dhaka', 'school-student', 'sch-17', '18', 1, 2, NULL, '2018', 'front/img/students/5ba0c1d2df480Logo Binoy.jpg', 1, '2018-09-18 02:48:24', '2018-09-18 03:13:55'),
(22, 'Nirob Das', 'Tapon Chandra Das', 'Anjali Rani Das', '01854688947', 'Male', 'Hinduism', '20060727', 'Konda', 'Awona', 'Nawabganj', 'Dhaka', 'school-student', 'sch-18', '19', 1, 2, NULL, '2018', 'front/img/students/5ba0c28cdb5c3Logo Binoy.jpg', 1, '2018-09-18 03:17:01', '2018-09-23 00:00:08'),
(23, 'Jui Akter', 'Md. Jolil', 'Shikha Begum', '01840088929', 'Female', 'Islam', '20040530', 'khatia', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-19', '20', 1, 2, NULL, '2018', 'front/img/students/5ba0c352645e1Logo Binoy.jpg', 1, '2018-09-18 03:20:18', '2018-09-23 00:15:41'),
(24, 'RONJIT MONDAL', 'RATAN MONDAL', 'JAMUNA RANI MONDAL', '01859153101', 'Male', 'Hinduism', '20050730', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-20', '21', 1, 2, NULL, '2018', 'front/img/students/5ba72d28b9b19LOGO.jpg', 1, '2018-09-23 00:05:28', '2018-09-23 00:16:12'),
(25, 'LIMA KHAN', 'LITON KHAN', 'HAPPY KHAN', '01852808852', 'Female', 'Islam', '20070401', 'SHINGHARA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-21', '22', 1, 2, NULL, '2018', 'front/img/students/5ba72dd671505LOGO.jpg', 1, '2018-09-23 00:08:22', '2018-09-23 00:16:36'),
(26, 'SHEPAIN HOSSAIN', 'MONER HOSSAIN', 'BOBITA BEGUM', '01838729705', 'Male', 'Islam', '20070907', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-22', '23', 1, 2, NULL, '2018', 'front/img/students/5ba72e6825f71LOGO.jpg', 1, '2018-09-23 00:10:48', '2018-09-23 00:17:06'),
(27, 'SMRITY AKTER', 'GIASH UDDIN', 'RINA BRGUM', '01999101823', 'Female', 'Islam', '20062616294118049', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-23', '24', 1, 2, NULL, '2018', 'front/img/students/5ba72ec53d3b6LOGO.jpg', 1, '2018-09-23 00:12:21', '2018-09-23 00:17:37'),
(28, 'TASLIMA AKTER', 'ABUL HOSSAIN', 'ROMORTU BEGUM', '01869032825', 'Female', 'Islam', '20042616294112908', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-24', '25', 1, 2, NULL, '2018', 'front/img/students/5ba7308156e44LOGO.jpg', 1, '2018-09-23 00:19:46', '2018-09-23 00:19:46'),
(29, 'MIM AKTHER', 'KALAM MIA', 'NASIMA BEGUM', '01710955161', 'Female', 'Islam', '20042619048049287', 'UMPARA', 'SERAJDIGHA', 'SREE NAGAR', 'MUNSHIGONJ', 'school-student', 'sch-25', '26', 1, 2, NULL, '2018', 'front/img/students/5ba731aaa442aLOGO.jpg', 1, '2018-09-23 00:24:42', '2018-09-23 00:24:42'),
(30, 'BABLE AKTHER', 'SELIM', 'RASHADA BEGUM', '01951423735', 'Female', 'Islam', '20052616294115510', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-26', '27', 1, 2, NULL, '2018', 'front/img/students/5ba7326ce5f20LOGO.jpg', 1, '2018-09-23 00:27:57', '2018-09-23 00:27:57'),
(31, 'SAZIYA AKTER', 'SALAUDDIN', 'NAJMA AKTER', '01811527996', 'Female', 'Islam', '20052616294118140', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-27', '28', 1, 2, NULL, '2018', 'front/img/students/5ba732ebe90ffLOGO.jpg', 1, '2018-09-23 00:30:04', '2018-09-23 00:30:04'),
(32, 'PARTHO MONDAL', 'SUBOL MONDAL', 'DIPALI MONDAL', '01824829063', 'Male', 'Islam', '20070210', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-28', '29', 1, 2, NULL, '2018', 'front/img/students/5ba73374c3a37LOGO.jpg', 1, '2018-09-23 00:32:20', '2018-09-23 00:32:20'),
(33, 'LIZA AKTER', 'LAL CHAN', 'JULAKHA BEGUM', '01858803339', 'Male', 'Islam', '20070222', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-29', '30', 1, 2, NULL, '2018', 'front/img/students/5ba733e75c410LOGO.jpg', 1, '2018-09-23 00:34:15', '2018-09-23 00:34:15'),
(34, 'MARIAM', 'MIRAZ KHAN', 'RUBIA BEGUM', '01838021934', 'Female', 'Islam', '20065618225022214', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-30', '31', 1, 2, NULL, '2018', 'front/img/students/5ba73446d4f6bLOGO.jpg', 1, '2018-09-23 00:35:50', '2018-09-23 00:35:50'),
(35, 'MUKTA AKTER', 'MD. MOSTOFA BEGUM', 'HAMIDA BEGUM', '01832452850', 'Female', 'Islam', '20085618225107440', 'Nilamborpotty', 'Chandhar', 'Singair', 'Manikganj', 'school-student', 'sch-31', '32', 1, 2, NULL, '2018', 'front/img/students/5ba734b6594fcLOGO.jpg', 1, '2018-09-23 00:37:42', '2018-09-23 00:37:42'),
(36, 'SAMIA AKTHER', 'MANUWAR HOSSAIN', 'RINA  BEGUM', '01795491253', 'Female', 'Islam', '20050512', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-32', '33', 1, 2, NULL, '2018', 'front/img/students/5ba7351fe91daLOGO.jpg', 1, '2018-09-23 00:39:28', '2018-09-23 00:39:28'),
(37, 'SRISTY SARKER', 'BIMOL SARKER', 'MINOTI  SARKER', '01851301681', 'Female', 'Hinduism', '20072616294115446', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-33', '34', 1, 2, NULL, '2018', 'front/img/students/5ba7358770044LOGO.jpg', 1, '2018-09-23 00:41:11', '2018-09-23 00:41:11'),
(38, 'MD. ROBIN', 'MD. MIJAN', 'MOHELA BEGUM', '01811979041', 'Male', 'Islam', '20050501', 'ROPARCHAR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-34', '35', 1, 2, NULL, '2018', 'front/img/students/5ba7361e384e4LOGO.jpg', 1, '2018-09-23 00:43:42', '2018-09-23 00:43:42'),
(39, 'MARIA AKTER', 'BACCHU MIAH', 'KAMRUN NAHAR', '01765889029', 'Female', 'Islam', '20062616294115576', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-35', '36', 1, 2, NULL, '2018', 'front/img/students/5ba73708cf78bLOGO.jpg', 1, '2018-09-23 00:47:36', '2018-09-23 00:47:36'),
(40, 'SADIA AKTER', 'MD. SWAPAN MIAH', 'JAHANARA BEGUM', '01775652734', 'Female', 'Islam', '20052616294100094', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-36', '38', 1, 2, NULL, '2018', 'front/img/students/5ba739070e9d9LOGO.jpg', 1, '2018-09-23 00:56:07', '2018-09-23 00:56:07'),
(41, 'SHUVO MONDAL', 'SARDHON MONDOL', 'NITU MONDOL', '01727719136', 'Male', 'Hinduism', '20072616294000492', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-37', '39', 1, 2, NULL, '2018', 'front/img/students/5ba739ecd5411LOGO.jpg', 1, '2018-09-23 00:59:57', '2018-09-23 00:59:57'),
(42, 'DISTI AKTER', 'BADSHA MIA', 'TANIA BEGUM', '01720066462', 'Female', 'Islam', '20060807', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-38', '40', 1, 2, NULL, '2018', 'front/img/students/5ba73a54a497cLOGO.jpg', 1, '2018-09-23 01:01:40', '2018-09-23 01:01:40'),
(43, 'MITHIL SARKER', 'DULAL SARKER', 'MUKULI RANI SARKER', '01817061232', 'Female', 'Hinduism', '20072616294000491', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-39', '41', 1, 2, NULL, '2018', 'front/img/students/5ba73ac2a3a18LOGO.jpg', 1, '2018-09-23 01:03:30', '2018-09-23 01:03:30'),
(44, 'RUPA AKTER', 'EYAKYB KHAN', 'BANU BEGUM', '01859714491', 'Female', 'Islam', '20072616294110145', 'Boually', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-40', '42', 1, 2, NULL, '2018', 'front/img/students/5ba73b39a5327LOGO.jpg', 1, '2018-09-23 01:05:29', '2018-09-23 01:11:25'),
(45, 'TANJILA', 'MD. SANAULLHA', 'MOKLIMA BEGUM', '01726544871', 'Female', 'Islam', '20062616294118215', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-41', '43', 1, 2, NULL, '2018', 'front/img/students/5ba73d402a6ceLOGO.jpg', 1, '2018-09-23 01:14:08', '2018-09-23 01:14:08'),
(46, 'REYAD MAHMUD SOMRAT', 'SHEIKH WASIM', 'SHEIKH RIMA', '01824660947', 'Male', 'Islam', '20070905', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-42', '44', 1, 2, NULL, '2018', 'front/img/students/5ba73dc2a227eLOGO.jpg', 1, '2018-09-23 01:16:18', '2018-09-23 01:16:18'),
(47, 'SADIA AKTER', 'KABIR HOSSAIN', 'DULI BEGUM', '01790589811', 'Female', 'Islam', '20062616294117273', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-43', '45', 1, 2, NULL, '2018', 'front/img/students/5ba73e39ee699LOGO.jpg', 1, '2018-09-23 01:18:18', '2018-09-23 01:18:18'),
(48, 'HAFSA AKTER', 'HARUN', 'MAJEDA', '01749798840', 'Female', 'Islam', '20060219', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-44', '46', 1, 2, NULL, '2018', 'front/img/students/5ba73e8ea4b6bLOGO.jpg', 1, '2018-09-23 01:19:42', '2018-09-23 01:19:42'),
(49, 'ANTOR MONDAL', 'ROTAN MONDAL', 'DURGA MONDAL', '01867099305', 'Male', 'Hinduism', '20072616294100313', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-45', '47', 1, 2, NULL, '2018', 'front/img/students/5ba73eff6dd54LOGO.jpg', 1, '2018-09-23 01:21:35', '2018-09-23 01:21:35'),
(50, 'MASUM', 'MD. ABDUL HOSSAIN', 'ROKSANA BEGUM', '01780069902', 'Male', 'Islam', '20062616294114254', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-46', '48', 1, 2, NULL, '2018', 'front/img/students/5ba73f5c26793LOGO.jpg', 1, '2018-09-23 01:23:08', '2018-09-23 01:23:08'),
(51, 'LIMA AKTER', 'RAZZAB ALI', 'JUHURA BEGUM', '01747608036', 'Female', 'Islam', '20061226', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-47', '49', 1, 2, NULL, '2018', 'front/img/students/5ba7442e2ade7LOGO.jpg', 1, '2018-09-23 01:43:42', '2018-09-23 01:43:42'),
(52, 'FURMAN MOLLA', 'YOUSUF MOLLA', 'SOMAYA', '01845185003', 'Female', 'Islam', '20022616294116751', 'Boually', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-48', '50', 1, 2, NULL, '2018', 'front/img/students/5ba744a13f2faLOGO.jpg', 1, '2018-09-23 01:45:37', '2018-09-23 01:45:37'),
(53, 'HAMED', 'MD. MOHIBUL ALAM', 'YASMIN BEGUM', '01635090760', 'Male', 'Islam', '20045618225011203', 'SHINGHARA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-49', '51', 1, 2, NULL, '2018', 'front/img/students/5ba745132a74eLOGO.jpg', 1, '2018-09-23 01:47:31', '2018-09-23 01:47:31'),
(54, 'RUMAN MIA', 'SHEIKH BASHIR AHAMMED', 'RUMA AKTER', '01872594762', 'Male', 'Islam', NULL, 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-50', '52', 1, 2, NULL, '2018', 'front/img/students/5ba7457b43712LOGO.jpg', 1, '2018-09-23 01:49:15', '2018-09-23 01:49:15'),
(55, 'ALOMGIR', 'CHAN MIA', 'MANARA BEGUM', '01869768631', 'Male', 'Islam', '20040686939031007', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-51', '53', 1, 2, NULL, '2018', 'front/img/students/5ba74620b98c4LOGO.jpg', 1, '2018-09-23 01:52:00', '2018-09-23 01:52:00'),
(56, 'SHOHANA AKTER', 'MD. SHAHID', 'AKLIMA BEGUM', '01724206836', 'Female', 'Islam', '20052616294118064', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-52', '54', 1, 2, NULL, '2018', 'front/img/students/5ba747faa3019LOGO.jpg', 1, '2018-09-23 01:59:54', '2018-09-23 01:59:54'),
(57, 'AMRITA CHANDA', 'DABASHIS CHANDA', 'SABITA CHANDA', '01733653738', 'Male', 'Hinduism', '20072616294000498', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-53', '55', 1, 2, NULL, '2018', 'front/img/students/5ba748b6d48faLOGO.jpg', 1, '2018-09-23 02:03:03', '2018-09-23 02:03:03'),
(58, 'MAHIM HOSSAIN', 'MONIR HOSSAIN', 'MUSSADA', '01798836848', 'Male', 'Islam', '20052616294118433', 'CHOKORIA', 'PATILJHAP', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-54', '56', 1, 2, NULL, '2018', 'front/img/students/5ba74b58ecaadLOGO.jpg', 1, '2018-09-23 02:14:17', '2018-09-23 02:14:17'),
(59, 'MD. AKASH', 'MD. DIN ISLAM', 'RASHEDA BEGUM', '01819706582', 'Male', 'Islam', '20072616294116638', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-55', '57', 1, 2, NULL, '2018', 'front/img/students/5ba74c38e9862LOGO.jpg', 1, '2018-09-23 02:18:01', '2018-09-23 02:18:01'),
(60, 'YAMIN ISLAM', 'SIRAJUL ISLAM', 'RINA', '01914224560', 'Male', 'Islam', '20082616240110067', 'MODAN KHALI', 'CHURAIN', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-56', '58', 1, 2, NULL, '2018', 'front/img/students/5ba74d7885479LOGO.jpg', 1, '2018-09-23 02:23:20', '2018-09-23 02:23:20'),
(61, 'RAHIMA AKTER', 'MD. HOSSAIN ALI', 'JOBADA BEGUM', '01783404717', 'Male', 'Islam', '20070815', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-57', '59', 1, 2, NULL, '2018', 'front/img/students/5ba74e2cbc515LOGO.jpg', 1, '2018-09-23 02:26:20', '2018-09-23 02:26:20'),
(62, 'MD. MUSTAKIM HOSSEN', 'MD. ROHOMAN', 'MUKTA BEGUM', '01850213042', 'Male', 'Islam', '20050714', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-58', '60', 1, 2, NULL, '2018', 'front/img/students/5ba74ed1889baLOGO.jpg', 1, '2018-09-23 02:29:05', '2018-09-23 02:29:05'),
(63, 'MD. SOMON MIYA', 'MD. HALIM MIYA', 'SIMA BEGUM', '01840182458', 'Male', 'Islam', '20040718', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-59', '61', 1, 2, NULL, '2018', 'front/img/students/5ba74f522579cLOGO.jpg', 1, '2018-09-23 02:31:15', '2018-09-23 02:31:15'),
(64, 'TAISER', 'GUNJAR ALI', 'SAJAD BEGUM', '01710665920', 'Male', 'Islam', '20062616294118170', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-60', '62', 1, 2, NULL, '2018', 'front/img/students/5ba74fe7b7e99LOGO.jpg', 1, '2018-09-23 02:33:43', '2018-09-23 02:33:43'),
(65, 'NIZUM HOSSAIN', 'AMJAD HOSSAIN', 'KHUTIJA BEGUM', '01705224472', 'Male', 'Islam', NULL, 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-61', '64', 1, 2, NULL, '2018', 'front/img/students/5ba75064420d3LOGO.jpg', 1, '2018-09-23 02:35:48', '2018-09-23 02:35:48'),
(66, 'FARHAN HOSSAIN', 'MIZANUR RAHMAN', 'BEAUTY', '01823868955', 'Male', 'Islam', '20071203', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-62', '65', 1, 2, NULL, '2018', 'front/img/students/5ba751ee249edLOGO.jpg', 1, '2018-09-23 02:42:22', '2018-09-23 02:42:22'),
(67, 'YEASIN', 'EYAR ALI', 'SHIRIN', '01783265228', 'Male', 'Islam', '20062616294116294', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-63', '66', 1, 2, NULL, '2018', 'front/img/students/5ba7527672bebLOGO.jpg', 1, '2018-09-23 02:44:38', '2018-09-23 02:44:38'),
(68, 'MD. PARVEZ', 'MONIR', 'FAHIMA BEGUM', '01779968385', 'Male', 'Islam', '20040331', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-64', '67', 1, 2, NULL, '2018', 'front/img/students/5ba752e19e059LOGO.jpg', 1, '2018-09-23 02:46:25', '2018-09-23 02:46:25'),
(69, 'SADIYA AKTER', 'MD. EDRIS MUROL', 'SHEULY BEGUM', '01815426090', 'Female', 'Islam', '20070109', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-65', '68', 1, 2, NULL, '2018', 'front/img/students/5ba7533a6f357LOGO.jpg', 1, '2018-09-23 02:47:54', '2018-09-23 02:47:54'),
(70, 'BRISTI AKTER', 'BDURUZZAMAN', 'MOYNA BEGUM', '01819707137', 'Female', 'Islam', '20062616294115160', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-66', '70', 1, 2, NULL, '2018', 'front/img/students/5ba753966ef28LOGO.jpg', 1, '2018-09-23 02:49:26', '2018-09-23 02:49:26'),
(71, 'SHIHAB HOSSEN', 'OSMN', 'RUBIYA', '01756972213', 'Male', 'Islam', '20060615', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-67', '71', 1, 2, NULL, '2018', 'front/img/students/5ba75438255eeLOGO.jpg', 1, '2018-09-23 02:52:08', '2018-09-23 02:52:08'),
(72, 'TOUFA', 'BAJLUR RAHMAN', 'MANARA', '01798655728', 'Female', 'Islam', '20062616294116147', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-68', '72', 1, 2, NULL, '2018', 'front/img/students/5ba754c1419ffLOGO.jpg', 1, '2018-09-23 02:54:25', '2018-09-23 02:54:25'),
(73, 'JESMIN AKTER', 'BABUL MIA', 'MOHOR JAN', '01741954282', 'Female', 'Islam', '20062616294118120', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-69', '73', 1, 2, NULL, '2018', 'front/img/students/5ba758fe8aec3LOGO.jpg', 1, '2018-09-23 03:12:30', '2018-09-23 03:12:30'),
(74, 'SIAM HOSSAIN', 'HUMAYUN KABIR', 'NASRIN AKTER', '01840277502', 'Female', 'Islam', '20070909', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-70', '74', 1, 2, NULL, '2018', 'front/img/students/5ba7596c40e74LOGO.jpg', 1, '2018-09-23 03:14:20', '2018-09-23 03:14:20'),
(75, 'BITHY AKTHER', 'BESU MIA', 'ROWSHONAEA RENU', '01706313410', 'Female', 'Islam', '20072616294115439', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-71', '75', 1, 2, NULL, '2018', 'front/img/students/5ba759d3a19b9LOGO.jpg', 1, '2018-09-23 03:16:03', '2018-09-23 03:16:03'),
(76, 'SK. MASRUR HOSSAIN', 'SK. MUSTAK HOSSAIN', 'NAHAR SULTANA', '01712334850', 'Male', 'Islam', '20070815', 'Konda', 'Awona', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-72', '76', 1, 2, NULL, '2018', 'front/img/students/5ba75a8f73d59LOGO.jpg', 1, '2018-09-23 03:19:11', '2018-09-23 03:19:11'),
(77, 'TANIMA MONDAL TETHI', 'BEBAK MONDAL', 'MALATI MONDAL', '01881887224', 'Female', 'Hinduism', '20072616294118522', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-73', '01', 1, 3, NULL, '2018', 'front/img/students/5ba75e278ff25LOGO.jpg', 1, '2018-09-23 03:34:31', '2018-09-23 03:34:31'),
(78, 'NUSRAT JAHAN', 'MD. LAIKAT ALI', 'SHILPI AKTHER', '01815073938', 'Female', 'Islam', '20072616294118268', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-74', '02', 1, 3, NULL, '2018', 'front/img/students/5ba75edc3d498LOGO.jpg', 1, '2018-09-23 03:37:32', '2018-09-23 03:37:32'),
(79, 'ANUP RAJBONGSHI', 'KARTICK RAJBONGSHI', 'ANNA RAJBONGSHI', '01845019799', 'Male', 'Hinduism', '20072616294118594', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-75', '04', 1, 3, NULL, '2018', 'front/img/students/5ba75fdb73254LOGO.jpg', 1, '2018-09-23 03:41:47', '2018-09-23 03:41:47'),
(80, 'MOYURI', 'MOBJEL HOSSAIN', 'ANAWARA BEGUM', '01865390597', 'Female', 'Islam', '20062616294116243', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-76', '05', 1, 3, NULL, '2018', 'front/img/students/5ba760430dc09LOGO.jpg', 1, '2018-09-23 03:43:31', '2018-09-23 03:43:31'),
(81, 'ANANYNA AKTHER', 'AMZAD HOSSAIN', 'SHEULY BEGUM', '01916297281', 'Female', 'Islam', '20072616206010034', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-77', '06', 1, 3, NULL, '2018', 'front/img/students/5ba760ba9f4aeLOGO.jpg', 1, '2018-09-23 03:45:30', '2018-09-23 03:45:30'),
(82, 'REMON SARKER EMON', 'SUVASH CHANDO SARKER', 'RINA RANI SARKER', '01881865759', 'Male', 'Hinduism', '20072616294118591', 'AJOGORA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-78', '03', 1, 3, NULL, '2018', 'front/img/students/5ba7614de76a7LOGO.jpg', 1, '2018-09-23 03:47:58', '2018-09-23 03:47:58'),
(83, 'PARTHO SARKER SMARON', 'SANJOY SARKER', 'JHARNAMONDAL', '01714395108', 'Male', 'Hinduism', '20072616294000923', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-79', '08', 1, 3, NULL, '2018', 'front/img/students/5ba761e49deb9LOGO.jpg', 1, '2018-09-23 03:50:28', '2018-09-23 03:50:28'),
(84, 'SHORNA RAJBONGSHI', 'GOPAL RAJBONGSHI', 'BINDA RAJBONGSHI', '01881710179', 'Female', 'Hinduism', '20072616294000417', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-80', '09', 1, 3, NULL, '2018', 'front/img/students/5ba7624d586ebLOGO.jpg', 1, '2018-09-23 03:52:13', '2018-09-23 03:52:13'),
(85, 'PRIONTY MONDAL SHAON', 'DILIP MONDAL', 'RITA MONDAL', '01819151187', 'Female', 'Islam', '20072616294005379', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-81', '11', 1, 3, NULL, '2018', 'front/img/students/5ba762c8d0e7bLOGO.jpg', 1, '2018-09-23 03:54:16', '2018-09-23 03:54:16'),
(86, 'ANAMIKA RAJ ORMILA', 'SANA RAJBONGSHI', 'DURGA RAJBONGSHI', '01871411490', 'Female', 'Hinduism', '20072616294118589', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-82', '12', 1, 3, NULL, '2018', 'front/img/students/5ba9e6f65d7a4LOGO.jpg', 1, '2018-09-25 01:42:46', '2018-09-25 01:42:46'),
(87, 'RAKIBUL ISLAM RIDOY', 'MD. MONIR HOSSAIN', 'RUMA AKTER', '01731547520', 'Male', 'Islam', '20072616294118596', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-83', '13', 1, 3, NULL, '2018', 'front/img/students/5ba9e775a3580LOGO.jpg', 1, '2018-09-25 01:44:53', '2018-09-25 01:44:53'),
(88, 'SNEHASISH GOSWAMI', 'MRINAL GOSWAMI', 'MAYA GOSWAMI', '01718744830', 'Female', 'Hinduism', '20062616294000623', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-84', '15', 1, 3, NULL, '2018', 'front/img/students/5ba9e7e457704LOGO.jpg', 1, '2018-09-25 01:46:44', '2018-09-25 01:46:44'),
(89, 'ADRITA RAJ RIYA', 'JIBON RAJBONGSHI', 'SOBITA RAJBONGSHI', '01853001646', 'Female', 'Hinduism', '20072616294118590', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-85', '16', 1, 3, NULL, '2018', 'front/img/students/5ba9f1585e462LOGO.jpg', 1, '2018-09-25 02:27:04', '2018-09-25 02:27:04'),
(90, 'JANNATUL FERDUS (JANNAT)', 'JAHANGIR ALAM', 'MAHMUDA JAHANGIR', '01825566423', 'Female', 'Islam', '20072616294118273', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-86', '17', 1, 3, NULL, '2018', 'front/img/students/5ba9f2190fafbLOGO.jpg', 1, '2018-09-25 02:30:17', '2018-09-25 02:30:17'),
(91, 'AMENA', 'SAMSUL HAQUE', 'RUSONA BEGUM', '01743213543', 'Female', 'Islam', '20062616294115847', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-87', '18', 1, 3, NULL, '2018', 'front/img/students/5ba9f26c74850LOGO.jpg', 1, '2018-09-25 02:31:40', '2018-09-25 02:31:40'),
(92, 'MD. ALHAJ', 'KHORSED ALAM', 'ALEYA BEGUM', '01727282082', 'Male', 'Islam', '20072616294116410', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-88', '19', 1, 3, NULL, '2018', 'front/img/students/5ba9f2f388415LOGO.jpg', 1, '2018-09-25 02:33:55', '2018-09-25 02:33:55'),
(93, 'KOUSHIK MONDOL', 'NOKUL MONDOL', 'SHILPI MONDOL', '01838728620', 'Female', 'Hinduism', '20062616294004801', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-89', '20', 1, 3, NULL, '2018', 'front/img/students/5baa0e3dce538LOGO.jpg', 1, '2018-09-25 04:30:22', '2018-09-25 04:30:22'),
(94, 'SADIA NAZNIN', 'MD. ABUSAYED', 'MASUDA BEGUM', '01874268216', 'Female', 'Islam', '20072616294000162', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-90', '21', 1, 3, NULL, '2018', 'front/img/students/5baa0ea875b14LOGO.jpg', 1, '2018-09-25 04:32:08', '2018-09-25 04:32:08'),
(95, 'HIMA AKTER', 'HARUN OR RASHID', 'MARJINA RASHID', '01845290068', 'Female', 'Islam', '20072616294118701', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-91', '22', 1, 3, NULL, '2018', 'front/img/students/5baa0f273292bLOGO.jpg', 1, '2018-09-25 04:34:15', '2018-09-25 04:34:15'),
(96, 'MD. SAMIUM SIAM', 'MD. ALEF UDDIN', 'NILA AKTER BANNA', '01728160385', 'Male', 'Islam', '20072616294118603', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-92', '23', 1, 3, NULL, '2018', 'front/img/students/5baa0f99d386bLOGO.jpg', 1, '2018-09-25 04:36:09', '2018-09-25 04:36:09'),
(97, 'PAPIYA AKTER', 'MD. KAIUM BHUIYAN', 'PIYARA BEGUM', '01746775476', 'Male', 'Islam', '20072616294118529', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-93', '24', 1, 3, NULL, '2018', 'front/img/students/5baa0ffa57ed3LOGO.jpg', 1, '2018-09-25 04:37:46', '2018-09-25 04:37:46'),
(98, 'SHAMPA AKTER', 'MD. OHIDUR', 'TASLENA BEGUM', '01768051691', 'Male', 'Islam', '20072616294118706', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-94', '25', 1, 3, NULL, '2018', 'front/img/students/5baa114bcb7a9LOGO.jpg', 1, '2018-09-25 04:43:23', '2018-09-25 04:43:23'),
(99, 'TANVIR AHMED MUNNA', 'MD. TIPU MOLLAH', 'HALENA BRGUM', '01715176684', 'Male', 'Islam', '20060816', 'HAYET KANDA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-95', '26', 1, 3, NULL, '2018', 'front/img/students/5baf4ec2abbf5LOGO.jpg', 1, '2018-09-29 04:06:59', '2018-09-29 04:06:59'),
(100, 'NAHID HOSSEN', 'MD. YOUNUS ALI', 'NURUN NAHER', '01706065754', 'Male', 'Islam', '20045618225006226', 'NILUMBERPOTTY', 'CHANDOR', 'SINGAIR', 'Manikganj', 'school-student', 'sch-96', '27', 1, 3, NULL, '2018', 'front/img/students/5baf4f41ad2e4LOGO.jpg', 1, '2018-09-29 04:09:05', '2018-09-29 04:09:05'),
(101, 'SHIYAM HOSSAIN', 'HUMAYUN AHMMED', 'KAKALI AKTER', '01850153116', 'Male', 'Islam', '20072616294118547', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-97', '28', 1, 3, NULL, '2018', 'front/img/students/5baf4fba1ba98LOGO.jpg', 1, '2018-09-29 04:11:06', '2018-09-29 04:11:06'),
(102, 'LAMIYA', 'RUHUL AMIN', 'NAZMA BEGUM', '01712509939', 'Female', 'Islam', '20062616294000362', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-98', '29', 1, 3, NULL, '2018', 'front/img/students/5baf5010056f0LOGO.jpg', 1, '2018-09-29 04:12:32', '2018-09-29 04:12:32'),
(103, 'SUSANTO RAJBONGSHI DIP', 'DILIP RAJBONGSHI', 'MALOTI RAJBONGSHI', '01854709578', 'Male', 'Hinduism', '20072616294118595', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-99', '30', 1, 3, NULL, '2018', 'front/img/students/5baf50711bb51LOGO.jpg', 1, '2018-09-29 04:14:09', '2018-09-29 04:14:09'),
(104, 'SAMRINA AKTER MONA', 'GIAS UDDIN', 'MINO AKTER', '01836454873', 'Female', 'Islam', '20072616294116029', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-100', '31', 1, 3, NULL, '2018', 'front/img/students/5baf50e54d5f1LOGO.jpg', 1, '2018-09-29 04:16:05', '2018-09-29 04:16:05'),
(105, 'MD. FAHAD HOSSEN', 'FAZLUL KARIM', 'MS. SALMA', '01727576286', 'Male', 'Islam', '20065618225107329', 'Nilamborpotty', 'Chandhar', 'Singair', 'Manikganj', 'school-student', 'sch-101', '32', 1, 3, NULL, '2018', 'front/img/students/5baf5153dc6b3LOGO.jpg', 1, '2018-09-29 04:17:56', '2018-09-29 04:17:56'),
(106, 'ALAMIN HOSSAIN', 'MD. SANOAR HOSSAIN', 'NASRIN SULTANA', '01720043677', 'Male', 'Islam', '20072616294118585', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-102', '33', 1, 3, NULL, '2018', 'front/img/students/5baf51b134bf4LOGO.jpg', 1, '2018-09-29 04:19:29', '2018-09-29 04:19:29'),
(107, 'SADIA ISLAM', 'SIDUL ISLAM', 'SOVOTIRA BEGUM', '01720172534', 'Female', 'Islam', '20062616294118544', 'ULAIL', 'Awona', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-103', '34', 1, 3, NULL, '2018', 'front/img/students/5baf529f1b6cbLOGO.jpg', 1, '2018-09-29 04:23:27', '2018-09-29 04:23:27'),
(108, 'NIPA', 'NOOR JAMAL', 'HELENA BEGUM', '01833218750', 'Female', 'Islam', '20072616294118709', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-104', '35', 1, 3, NULL, '2018', 'front/img/students/5baf532e016cbLOGO.jpg', 1, '2018-09-29 04:25:50', '2018-09-29 04:25:50'),
(109, 'SOMAIYA AKTER', 'MATER MIYA', 'NURJAHAN BEGUM', '01885580509', 'Female', 'Islam', '20062616294104839', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-105', '36', 1, 3, NULL, '2018', 'front/img/students/5bb04d4416df7LOGO.jpg', 1, '2018-09-29 22:12:52', '2018-09-29 22:12:52'),
(110, 'SOMIR MONDAL', 'ROMONI MOHAN MONDAL', 'MALOTI RANI MONDAL', '01837094119', 'Male', 'Hinduism', '20072616294000638', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-106', '37', 1, 3, NULL, '2018', 'front/img/students/5bb0514948e62LOGO.jpg', 1, '2018-09-29 22:30:01', '2018-09-29 22:30:01'),
(111, 'KAZI MEZBAH UDDIN', 'KAZI ASADUZZAMAN AKASH', 'SABINA YESMIN', '01930193848', 'Male', 'Islam', '20071020', 'SHINGHARA', 'PATILJHAP', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-107', '38', 1, 3, NULL, '2018', 'front/img/students/5bb0622601d89LOGO.jpg', 1, '2018-09-29 23:41:58', '2018-09-29 23:41:58'),
(112, 'MD. ZIHADUL ISLAM MIDUL', 'MD. ZIARAT HOSSAIN', 'MISHU AKTER', '01837215610', 'Male', 'Islam', '20072616294000305', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-108', '39', 1, 3, NULL, '2018', 'front/img/students/5bb0628d5de50LOGO.jpg', 1, '2018-09-29 23:43:41', '2018-09-29 23:43:41'),
(113, 'RABEYA AKTER', 'MD. HABIBUR RAHMAN', 'JULIA BEGUM', '01831127277', 'Female', 'Islam', '20062616294116453', 'Boually', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-109', '40', 1, 3, NULL, '2018', 'front/img/students/5bb0637546b3cLOGO.jpg', 1, '2018-09-29 23:47:33', '2018-09-29 23:47:33'),
(114, 'MARIYA AKTER', 'ABUL KALAM', 'SHARMIN BEGUM', '01638201282', 'Female', 'Islam', '20072616294000966', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-110', '43', 1, 3, NULL, '2018', 'front/img/students/5bb064b0901ccLOGO.jpg', 1, '2018-09-29 23:52:48', '2018-09-29 23:52:48'),
(115, 'SHIKHA AKTER', 'MD. IBRAHIM', 'SHEULI BEGUM', '01708003514', 'Female', 'Islam', '20072616294116319', 'BOWALI', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-111', '44', 1, 3, NULL, '2018', 'front/img/students/5bb0651a037b2LOGO.jpg', 1, '2018-09-29 23:54:34', '2018-09-29 23:54:34'),
(116, 'SHRIKUL ISLAM', 'AZAM ALI', 'SHAHANA BEGUM', '01850265060', 'Male', 'Islam', '20072616294118697', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-112', '45', 1, 3, NULL, '2018', 'front/img/students/5bb0656b347ddLOGO.jpg', 1, '2018-09-29 23:55:55', '2018-09-29 23:55:55'),
(117, 'AYSHA SIDDIKI (JHUMUR)', 'MD. ASLAM', 'ROUSOUN AKTER', '01727368066', 'Female', 'Islam', '20062616294000437', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-113', '46', 1, 3, NULL, '2018', 'front/img/students/5bb0666d1a215LOGO.jpg', 1, '2018-09-30 00:00:13', '2018-09-30 00:00:13'),
(118, 'ABUBAKER SIDDEK', 'KURBAN ALI', 'ASMA BEGUM', '01879449182', 'Male', 'Islam', '20072616294118593', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-114', '47', 1, 3, NULL, '2018', 'front/img/students/5bb066c694cd0LOGO.jpg', 1, '2018-09-30 00:01:42', '2018-09-30 00:01:42'),
(119, 'SHEIKH MURAD HOSSEN', 'ATIAR RAHMAN', 'JOSNA BEGUM', '01864496364', 'Male', 'Islam', '20072616294116237', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-115', '48', 1, 3, NULL, '2018', 'front/img/students/5bb0672061ce7LOGO.jpg', 1, '2018-09-30 00:03:12', '2018-09-30 00:03:12'),
(120, 'ADIBA HASAN', 'HASAN MOROL', 'HALIMA AKTER', '01708333030', 'Male', 'Islam', '20070903', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-116', '49', 1, 3, NULL, '2018', 'front/img/students/5bb0678c95360LOGO.jpg', 1, '2018-09-30 00:05:00', '2018-09-30 00:05:00'),
(121, 'MUKTA AKTER', 'MOTIER RAMAN', 'AMJANA AKTER', '01836454959', 'Female', 'Islam', '20072616294118703', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-117', '50', 1, 3, NULL, '2018', 'front/img/students/5bb067eddb258LOGO.jpg', 1, '2018-09-30 00:06:38', '2018-09-30 00:06:38'),
(122, 'JOYITA MAJJE', 'GOPAL MAJJE', 'SHABITRA MAJJE', '01854762341', 'Female', 'Islam', '20052616294000522', 'AJOGORA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-118', '51', 1, 3, NULL, '2018', 'front/img/students/5bb068527aa04LOGO.jpg', 1, '2018-09-30 00:08:18', '2018-09-30 00:08:18'),
(123, 'MEHERUN NESSA', 'MD. DELOWER HOSSAIN', 'PARUL BEGUM', '01885521741', 'Female', 'Islam', '20072616294118522', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-119', '52', 1, 3, NULL, '2018', 'front/img/students/5bb068e514f35LOGO.jpg', 1, '2018-09-30 00:10:45', '2018-09-30 00:10:45'),
(124, 'FAHAT HASSAN OLIY', 'ABU JAHER', 'TAHAMINA AKTER', '01942829474', 'Male', 'Islam', '20062616227102409', 'BARHA', 'BARHA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-120', '53', 1, 3, NULL, '2018', 'front/img/students/5bb069de915bbLOGO.jpg', 1, '2018-09-30 00:14:54', '2018-09-30 00:14:54'),
(125, 'MD. RIFAT HOSSAIN RATUL', 'MD. AMIR HOSSAIN', 'CHAMPA BEGUM', '01834501831', 'Male', 'Islam', '20062616294103473', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-121', '54', 1, 3, NULL, '2018', 'front/img/students/5bb06a3b6136fLOGO.jpg', 1, '2018-09-30 00:16:27', '2018-09-30 00:16:27'),
(126, 'LABONNA', 'ABDUL LATIF', 'REHANA AKTER', '01858766963', 'Female', 'Islam', '20072616294118709', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-122', '55', 1, 3, NULL, '2018', 'front/img/students/5bb06aa6bf84bLOGO.jpg', 1, '2018-09-30 00:18:14', '2018-09-30 00:18:14'),
(127, 'ALVI AKTER', 'MD. ALAUDDIN', 'TITEABA AKTHER', '01778604558', 'Female', 'Islam', '20072616294118532', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-123', '56', 1, 3, NULL, '2018', 'front/img/students/5bb06b157ada9LOGO.jpg', 1, '2018-09-30 00:20:05', '2018-09-30 00:20:05'),
(128, 'RACHANA SARKER', 'NEPAL SARKER', 'MALATI MITTRA', '01922784819', 'Female', 'Hinduism', '20072616294000508', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-124', '57', 1, 3, NULL, '2018', 'front/img/students/5bb06b75d9de9LOGO.jpg', 1, '2018-09-30 00:21:42', '2018-09-30 00:21:42'),
(129, 'RIYA SAHA', 'RIPON SAHA', 'SUMA SAHA', '01843478470', 'Female', 'Hinduism', '20072616294003973', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-125', '59', 1, 3, NULL, '2018', 'front/img/students/5bb06bd9dd0e8LOGO.jpg', 1, '2018-09-30 00:23:22', '2018-09-30 00:23:22'),
(130, 'JIBONNAHAR', 'MD. BADOL KAJI', 'MRS. RENU BEGUM', '01768038141', 'Female', 'Islam', '200520616294117928', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-126', '60', 1, 3, NULL, '2018', 'front/img/students/5bb06c5c4c5daLOGO.jpg', 1, '2018-09-30 00:25:32', '2018-09-30 00:25:32'),
(131, 'SUBE KUNNAHAR BINTAY HELAL', 'HELAL UDDIN AHMED', 'TASLIMA AHMED', '01835822077', 'Female', 'Islam', '20071012', 'SINGHARA', 'PATILJHAP', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-127', '61', 1, 3, NULL, '2018', 'front/img/students/5bb06d1c79f8dLOGO.jpg', 1, '2018-09-30 00:28:44', '2018-09-30 00:28:44'),
(132, 'TAHAMINA AKTER', 'MD. AKTER HOSSAIN', 'RINA AKTER', '01819442087', 'Female', 'Islam', '2007261629800005', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-128', '62', 1, 3, NULL, '2018', 'front/img/students/5bb06d8478af3LOGO.jpg', 1, '2018-09-30 00:30:28', '2018-09-30 00:30:28'),
(133, 'NIPA YESMIN', 'MD. DELOWAR HOSSAIN', 'ROHIMA BEGUM', '01929571365', 'Female', 'Islam', '20072616294118381', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-129', '63', 1, 3, NULL, '2018', 'front/img/students/5bb0716ede608LOGO.jpg', 1, '2018-09-30 00:47:11', '2018-09-30 00:47:11'),
(134, 'ROBIYA AKTER', 'ALTAB HOSSAIN', 'LAILA BEGUM', '01726868745', 'Female', 'Islam', '20062616294115400', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-130', '64', 1, 3, NULL, '2018', 'front/img/students/5bb071d966258LOGO.jpg', 1, '2018-09-30 00:48:57', '2018-09-30 00:48:57'),
(135, 'SAMIA AKTER', 'ALUDDIN KHAN', 'RAHIMA BEGUM', '01836322510', 'Female', 'Islam', '20082616294118288', 'Konda', 'Awona', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-131', '66', 1, 3, NULL, '2018', 'front/img/students/5bb073c9010c6LOGO.jpg', 1, '2018-09-30 00:57:13', '2018-09-30 00:57:13'),
(136, 'BISHAL SARKER', 'NIMAY SARKER', 'MAMATA SARKER', '01715246698', 'Female', 'Hinduism', '20052616294100351', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-132', '67', 1, 3, NULL, '2018', 'front/img/students/5bb074675dee4LOGO.jpg', 1, '2018-09-30 00:59:51', '2018-09-30 00:59:51'),
(137, 'AFRIN', 'AZIZUL HAQUE', 'MAKSADA BEGUM', '01812302873', 'Female', 'Islam', '20062616294000425', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-133', '68', 1, 3, NULL, '2018', 'front/img/students/5bb074dcc118dLOGO.jpg', 1, '2018-09-30 01:01:49', '2018-09-30 01:01:49'),
(138, 'TAMANNA', 'EANOS MOLLA', 'TANIA BEGUM', '01782225819', 'Female', 'Islam', NULL, 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-134', '01', 1, 1, NULL, '2018', 'front/img/students/5bb0877152aa7LOGO.jpg', 1, '2018-09-30 02:21:05', '2018-09-30 02:21:05'),
(139, 'SRISTY CHAKRABORTY', 'ALOK CHAKRABORTY', 'BEAUTY CHAKRABORTY', '01731566781', 'Female', 'Hinduism', '20072616294001211', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-135', '02', 1, 1, NULL, '2018', 'front/img/students/5bb0882445c00LOGO.jpg', 1, '2018-09-30 02:24:04', '2018-09-30 02:24:04'),
(140, 'LIKHAN KAZI', 'LUTFOR RAHMAN', 'RUJENA BEGUM', '01731180277', 'Male', 'Islam', '200726162941180705', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-136', '03', 1, 1, NULL, '2018', 'front/img/students/5bb0889691fdeLOGO.jpg', 1, '2018-09-30 02:25:58', '2018-09-30 02:25:58'),
(141, 'CHAWAN MONDAL', 'HARENDRO KUMAR MONDAL', 'ANITA RANI MONDAL', '01838007766', 'Male', 'Hinduism', '20062616294000616', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-137', '04', 1, 1, NULL, '2018', 'front/img/students/5bb089ada8e68LOGO.jpg', 1, '2018-09-30 02:30:37', '2018-09-30 02:30:37'),
(142, 'KHADIZA AKTER BITHILA', 'BALLAL', 'BEAUTI AKTER', '01858526838', 'Female', 'Islam', '20062616294118240', 'Konda', 'Awona', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-138', '05', 1, 1, NULL, '2018', 'front/img/students/5bb08cf5776e8LOGO.jpg', 1, '2018-09-30 02:44:37', '2018-09-30 02:44:37'),
(143, 'LAMIA', 'NURUL HAQUE', 'LAILA HAQUE', '01943034733', 'Female', 'Islam', '2007267629411830', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-139', '06', 1, 1, NULL, '2018', 'front/img/students/5bb09b232ab1eLOGO.jpg', 1, '2018-09-30 03:45:07', '2018-09-30 03:45:07'),
(144, 'SHIFA AKTER', 'MD. JALAL UDDIN', 'ROOKSHANA BEGUM', '01947336802', 'Female', 'Islam', '20072616294115728', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-140', '07', 1, 1, NULL, '2018', 'front/img/students/5bb09b8430d3dLOGO.jpg', 1, '2018-09-30 03:46:44', '2018-09-30 03:46:44'),
(145, 'SADIA AFRIN', 'MD. MOSLEM UDDIN', 'LUTFA BEGUM', '01752890439', 'Female', 'Islam', '20062616294116162', 'BOWALI', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-141', '08', 1, 1, NULL, '2018', 'front/img/students/5bb09bf9ac866LOGO.jpg', 1, '2018-09-30 03:48:41', '2018-09-30 03:48:41'),
(146, 'RIYA AKTER', 'RIYAJUL ISLAM', 'RANO BEGUM', '01861043206', 'Female', 'Islam', '20072616294113450', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-142', '09', 1, 1, NULL, '2018', 'front/img/students/5bb09c4e2e47eLOGO.jpg', 1, '2018-09-30 03:50:06', '2018-09-30 03:50:06'),
(147, 'ISRAT JERIN', 'NAZIR AHAMED', 'RIPA AKTER', '01712270442', 'Female', 'Islam', '200626162941144', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-143', '10', 1, 1, NULL, '2018', 'front/img/students/5bb09cae951fcLOGO.jpg', 1, '2018-09-30 03:51:42', '2018-09-30 03:51:42'),
(148, 'SANJIDA AKTER', 'MD. SALAUDDIN', 'NURUN NAHAR', '01781941900', 'Female', 'Islam', '20072616294118531', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-144', '11', 1, 1, NULL, '2018', 'front/img/students/5bb09d07f2191LOGO.jpg', 1, '2018-09-30 03:53:12', '2018-09-30 03:53:12'),
(149, 'MD. TAMIM HOSSAIN', 'MD. MOBARAK HOSSAIN', 'SAMSUNAHAR', '01878254773', 'Male', 'Islam', '20072616294112131', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-145', '12', 1, 1, NULL, '2018', 'front/img/students/5bb09dda01510LOGO.jpg', 1, '2018-09-30 03:56:42', '2018-09-30 03:56:42'),
(150, 'ALLASSN MOLLA', 'SOFIQUL MOLLA', 'SAFIA BEGUM', '01827164443', 'Male', 'Islam', '20062616294116228', 'BOWALI', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-146', '13', 1, 1, NULL, '2018', 'front/img/students/5bb09e4162a28LOGO.jpg', 1, '2018-09-30 03:58:25', '2018-09-30 03:58:25'),
(151, 'SUMONA SARKER', 'NARAYON SARKER', 'JONOTA SARKER', '01727730558', 'Female', 'Hinduism', '20070315', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-147', '15', 1, 1, NULL, '2018', 'front/img/students/5bb09e95ad60cLOGO.jpg', 1, '2018-09-30 03:59:49', '2018-09-30 03:59:49'),
(152, 'DIPA AKTER', 'RUHUL AMIN MOLLA', 'JORINA BEGUM', '01799139741', 'Female', 'Islam', '20082616294116337', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-148', '16', 1, 1, NULL, '2018', 'front/img/students/5bb09eee62bf6LOGO.jpg', 1, '2018-09-30 04:01:18', '2018-09-30 04:01:18'),
(153, 'MARIA AKTER', 'ANWAR HOSSAIN', 'NURJAHAN BEGUM', '01858057315', 'Female', 'Islam', '20072616294116333', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-149', '17', 1, 1, NULL, '2018', 'front/img/students/5bb09f6aaa663LOGO.jpg', 1, '2018-09-30 04:03:22', '2018-09-30 04:03:22'),
(154, 'MD. FAHAD HOSSAIN', 'MD. NUR ALI', 'MST. PARUL AKTER', '01878254983', 'Male', 'Islam', '20070901', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-150', '18', 1, 1, NULL, '2018', 'front/img/students/5bb09fe74bec0LOGO.jpg', 1, '2018-09-30 04:05:27', '2018-09-30 04:05:27'),
(155, 'URMI MONDAL', 'AVOY MONDAL', 'REVA MONDAL', '01839586242', 'Female', 'Hinduism', '20070726', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-151', '19', 1, 1, NULL, '2018', 'front/img/students/5bb2faf8290e2LOGO.jpg', 1, '2018-10-01 22:58:32', '2018-10-01 22:58:32'),
(156, 'HELENA AKTER', 'MR. HELAL', 'AMENA BEGUM', '01766897824', 'Female', 'Islam', '20072616294116186', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-152', '21', 1, 1, NULL, '2018', 'front/img/students/5bb2fc908d5bfLOGO.jpg', 1, '2018-10-01 23:05:20', '2018-10-01 23:05:20'),
(157, 'LIJA AKTER', 'MOKLES MIA', 'RASHEDA BEGUM', '01727320375', 'Female', 'Islam', '20062616294115492', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-153', '23', 1, 1, NULL, '2018', 'front/img/students/5bb2fd0b12aecLOGO.jpg', 1, '2018-10-01 23:07:23', '2018-10-01 23:07:23'),
(158, 'NAFIZ', 'ABUL HOSSAIN', 'NASIMA BEGUM', '01816542165', 'Male', 'Islam', NULL, 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-154', '24', 1, 1, NULL, '2018', 'front/img/students/5bb2fd7b43a38LOGO.jpg', 1, '2018-10-01 23:09:15', '2018-10-01 23:09:15'),
(159, 'TANHA AKTER', 'MD. ALLAUDDIN', 'NORJAHAN BEGUM', '01715462163', 'Female', 'Islam', '20062616294117337', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-155', '25', 1, 1, NULL, '2018', 'front/img/students/5bb2fef8e78f9LOGO.jpg', 1, '2018-10-01 23:15:37', '2018-10-01 23:15:37'),
(160, 'ANTOR MONDAL', 'JATIBDRA MONDAL', 'LATA RANI MONDAL', '01753930917', 'Male', 'Hinduism', '20062616294000421', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-156', '26', 1, 1, NULL, '2018', 'front/img/students/5bb2ff691574bLOGO.jpg', 1, '2018-10-01 23:17:29', '2018-10-01 23:17:29'),
(161, 'FAHIMA AKTER MUKTA', 'ABDUL KAYUM', 'FATEMA BEGUM', '01725800088', 'Female', 'Islam', '20072616294115508', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-157', '27', 1, 1, NULL, '2018', 'front/img/students/5bb3002ca6b1bLOGO.jpg', 1, '2018-10-01 23:20:44', '2018-10-01 23:20:44'),
(162, 'ASRAFUL', 'MD. SHORAB HOSSAN', 'LIZA', '01795084579', 'Male', 'Islam', '20060501', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-158', '29', 1, 1, NULL, '2018', 'front/img/students/5bb300a4a7b98LOGO.jpg', 1, '2018-10-01 23:22:44', '2018-10-01 23:22:44'),
(163, 'AKASHI DAS', 'PORIMOL DAS', 'ANITA DAS', '01727641027', 'Male', 'Hinduism', '20062616294104671', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-159', '30', 1, 1, NULL, '2018', 'front/img/students/5bb3010372ad2LOGO.jpg', 1, '2018-10-01 23:24:19', '2018-10-01 23:24:19'),
(164, 'SARMIN AKTER', 'FARUK', 'SABANA', '01700813162', 'Female', 'Islam', '20062616294118112', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-160', '32', 1, 1, NULL, '2018', 'front/img/students/5bb30168288edLOGO.jpg', 1, '2018-10-01 23:26:00', '2018-10-01 23:26:00'),
(165, 'TULI MONDAL', 'SANJIT CHANDRA MONDAL', 'LOTA RANI MONDAL', '01751060755', 'Female', 'Hinduism', '20072616294000250', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-161', '33', 1, 1, NULL, '2018', 'front/img/students/5bb301d075c2dLOGO.jpg', 1, '2018-10-01 23:27:44', '2018-10-01 23:27:44'),
(166, 'MAYA AKTER', 'MD. AKTER HOSSAIN', 'ZEASMIN BEGUM', '01817454269', 'Female', 'Hinduism', '20072616294117196', 'Singjor', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-162', '34', 1, 1, NULL, '2018', 'front/img/students/5bb3021fbe9d7LOGO.jpg', 1, '2018-10-01 23:29:03', '2018-10-01 23:29:03'),
(167, 'JUTHI AKTER', 'DIN ISLAM', 'BIKIS AKTHER', '01779968325', 'Female', 'Islam', '20062616294118169', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-163', '35', 1, 1, NULL, '2018', 'front/img/students/5bb302ad7127dLOGO.jpg', 1, '2018-10-01 23:31:25', '2018-10-01 23:31:25'),
(168, 'AIRIN', 'ABUL HOSSAIN', 'SHEULEY BEGUM', '01744263288', 'Female', 'Islam', NULL, 'CHOK SINGJUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-164', '36', 1, 1, NULL, '2018', 'front/img/students/5bb305b889f39LOGO.jpg', 1, '2018-10-01 23:44:24', '2018-10-01 23:44:24'),
(169, 'MD. NAZMUL', 'MD. BACCHU MIAH', 'MST. MOTIYA', '01703633075', 'Male', 'Islam', '2005618225106618', 'NILUMBERPOTTY', 'Chandhar', 'SINGAIR', 'Manikganj', 'school-student', 'sch-165', '37', 1, 1, NULL, '2018', 'front/img/students/5bb30627bda30LOGO.jpg', 1, '2018-10-01 23:46:15', '2018-10-01 23:46:15'),
(170, 'TANIA AKTER', 'BILLAL HOSSAIN', 'TOHURA BEGUM', '01822021728', 'Female', 'Islam', '20072616294116417', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-166', '38', 1, 1, NULL, '2018', 'front/img/students/5bb30687be3bfLOGO.jpg', 1, '2018-10-01 23:47:51', '2018-10-01 23:47:51');
INSERT INTO `students` (`id`, `student_name`, `father_name`, `mother_name`, `guardian_mobile`, `gender`, `religion`, `birth_reg_number`, `village`, `post_office`, `thana`, `district`, `student_as`, `student_id`, `student_roll`, `class_id`, `section_id`, `study_group`, `session_year`, `student_image`, `published_status`, `created_at`, `updated_at`) VALUES
(171, 'AFRIN MOU', 'JOYNAL MOLLA', 'JAHANARA BEGUM', '01715561292', 'Female', 'Islam', '20071117', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-167', '39', 1, 1, NULL, '2018', 'front/img/students/5bb30a22bc106LOGO.jpg', 1, '2018-10-02 00:03:14', '2018-10-02 00:03:14'),
(172, 'SITHI MONDAL', 'SRIBASH MONDAL', 'SHANTA MONDAL', '01843374202', 'Female', 'Hinduism', '20062616294117900', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-168', '40', 1, 1, NULL, '2018', 'front/img/students/5bb30a8610f8aLOGO.jpg', 1, '2018-10-02 00:04:54', '2018-10-02 00:04:54'),
(173, 'SANTA AKTER', 'BLOU MIA', 'ROKSANA BEGUM', '01821176704', 'Female', 'Islam', '20072616294116227', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-169', '41', 1, 1, NULL, '2018', 'front/img/students/5bb30ace5b955LOGO.jpg', 1, '2018-10-02 00:06:06', '2018-10-02 00:06:06'),
(174, 'AUYN KUMAR SOJIB', 'JIBON RAJBANGSHI', 'SOBITA RAJBONGSHI', '01715638619', 'Male', 'Hinduism', '20070531', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-170', '42', 1, 1, NULL, '2018', 'front/img/students/5bb30b4b8e2edLOGO.jpg', 1, '2018-10-02 00:08:11', '2018-10-02 00:08:11'),
(175, 'SANTO ISLAM', 'MOYFUL', 'ROZENA AKTER', '01738873313', 'Male', 'Islam', '20062616294116334', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-171', '43', 1, 1, NULL, '2018', 'front/img/students/5bb30b9e46885LOGO.jpg', 1, '2018-10-02 00:09:34', '2018-10-02 00:09:34'),
(176, 'SARMIN AKTER', 'SAMSUDDIN MIA', 'JORINA BEGUM', '01824195917', 'Female', 'Islam', '20052616294117330', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-172', '47', 1, 1, NULL, '2018', 'front/img/students/5bb30c0c40950LOGO.jpg', 1, '2018-10-02 00:11:24', '2018-10-02 00:11:24'),
(177, 'HABIBUR RAHAMAN', 'ROBIUL AWAL', 'NAZMA BEGUM', '01764979717', 'Male', 'Islam', NULL, 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-173', '48', 1, 1, NULL, '2018', 'front/img/students/5bb30c50a4486LOGO.jpg', 1, '2018-10-02 00:12:32', '2018-10-02 00:12:32'),
(178, 'MAROFA AKTER', 'BOSIR DAWAN', 'SOHINA BEGUM', '01857149499', 'Female', 'Islam', '20051006', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-174', '49', 1, 1, NULL, '2018', 'front/img/students/5bb30d1ed8537LOGO.jpg', 1, '2018-10-02 00:15:58', '2018-10-02 00:15:58'),
(179, 'ANIK ISLAM', 'ABUL KALAM', 'MINU BEGUM', '01798882068', 'Female', 'Islam', '20062616294118102', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-175', '51', 1, 1, NULL, '2018', 'front/img/students/5bb30db55c69fLOGO.jpg', 1, '2018-10-02 00:18:29', '2018-10-02 00:18:29'),
(180, 'SAIMON', 'SELIM', 'ALIYA', '01641100077', 'Male', 'Islam', '20072616294115499', 'SINGHARA', 'PATILJHAP', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-176', '52', 1, 1, NULL, '2018', 'front/img/students/5bb30f9e5fe00LOGO.jpg', 1, '2018-10-02 00:26:38', '2018-10-02 00:26:38'),
(181, 'MOSHIUR RAHAMAN', 'ABDUL SALAM', 'SUMI AKTER', '01871310019', 'Male', 'Islam', NULL, 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-177', '53', 1, 1, NULL, '2018', 'front/img/students/5bb313882b436LOGO.jpg', 1, '2018-10-02 00:43:20', '2018-10-02 00:43:20'),
(182, 'MD. SAGOR', 'MD. RAJJAK', 'MS. RUPOSI', '01478160987', 'Male', 'Islam', '20072616294000223', 'CHOKORIA', 'PATILJHAP', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-178', '58', 1, 1, NULL, '2018', 'front/img/students/5bb31806d344cLOGO.jpg', 1, '2018-10-02 01:02:30', '2018-10-02 01:02:30'),
(183, 'SAJJAD HOSSEN', 'HADES MIA', 'MASUDA BEGUM', '01726364083', 'Male', 'Islam', '20072616294118113', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-179', '59', 1, 1, NULL, '2018', 'front/img/students/5bb31873d9862LOGO.jpg', 1, '2018-10-02 01:04:20', '2018-10-02 01:04:20'),
(184, 'TANVIR AHMED', 'RIAJUL ISLAM', 'KORSHADA AKTHER', '01771068410', 'Male', 'Islam', '20072616294104580', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-180', '60', 1, 1, NULL, '2018', 'front/img/students/5bb31a7642448LOGO.jpg', 1, '2018-10-02 01:12:54', '2018-10-02 01:12:54'),
(185, 'SADIYA ISLAM', 'ISMAIL HOSSAIN', 'JOSNA BEGUM', '01815810107', 'Female', 'Islam', '20072616294118569', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-181', '62', 1, 1, NULL, '2018', 'front/img/students/5bb31ac1462b5LOGO.jpg', 1, '2018-10-02 01:14:09', '2018-10-02 01:14:09'),
(186, 'ANIMA RAJBONGSHI', 'AHYAMPAD RAJBONGSHI', 'SHORBORI RAJBONGSHI', '01992338958', 'Female', 'Hinduism', '20062616294003941', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-182', '63', 1, 1, NULL, '2018', 'front/img/students/5bb31b8f77361LOGO.jpg', 1, '2018-10-02 01:17:35', '2018-10-02 01:17:35'),
(187, 'EVA AKTER', 'MD. ISLAM', 'JUSNA BEGUM', '01715658713', 'Female', 'Islam', '20072616294119010', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-183', '64', 1, 1, NULL, '2018', 'front/img/students/5bb31bd6908efLOGO.jpg', 1, '2018-10-02 01:18:46', '2018-10-02 01:18:46'),
(188, 'FARIA SIDDIKI ROJA', 'SIDDIKUR RAHMAN', 'JESMIN SIDDIKI', '01821140401', 'Female', 'Islam', '20072616294118597', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-184', '65', 1, 1, NULL, '2018', 'front/img/students/5bb31c34ef5b7LOGO.jpg', 1, '2018-10-02 01:20:21', '2018-10-02 01:20:21'),
(189, 'MOREUM ISLAM', 'MOHIUDDIN', 'LIPI BEGUM', '01824220364', 'Female', 'Islam', '20072616294118340', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-185', '66', 1, 1, NULL, '2018', 'front/img/students/5bb31c8072f98LOGO.jpg', 1, '2018-10-02 01:21:36', '2018-10-02 01:21:36'),
(190, 'AKHI', 'SER ALI', 'RASHIDA', '01727682014', 'Female', 'Islam', '20045618225106645', 'NILUMBERPOTTY', 'Chandhar', 'Singair', 'Manikganj', 'school-student', 'sch-186', '68', 1, 1, NULL, '2018', 'front/img/students/5bb31cd611bffLOGO.jpg', 1, '2018-10-02 01:23:02', '2018-10-02 01:23:02'),
(191, 'NORJAHAN', 'MD. NURU', 'JOHURA BEGUM', '01884398982', 'Female', 'Islam', '20062616294118030', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-187', '69', 1, 1, NULL, '2018', 'front/img/students/5bb31d3675823LOGO.jpg', 1, '2018-10-02 01:24:38', '2018-10-02 01:24:38'),
(192, 'SOSMITA MONDAL', 'JATINDRA MONDAL', 'ASMANI MONDAL', '01934745505', 'Female', 'Hinduism', '20042616294116229', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-188', '70', 1, 1, NULL, '2018', 'front/img/students/5bb31d8889a15LOGO.jpg', 1, '2018-10-02 01:26:00', '2018-10-02 01:26:00'),
(193, 'SMRITY MONDAL', 'SHYAMAL MONDAL', 'ANITA MONDAL', '01815787954', 'Female', 'Islam', '20042616294001914', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-189', '71', 1, 1, NULL, '2018', 'front/img/students/5bb31df5465ceLOGO.jpg', 1, '2018-10-02 01:27:49', '2018-10-02 01:27:49'),
(194, 'LAIJU AKTER', 'MAHI UDDIN', 'RAJIYA KHATUN', '01840756755', 'Female', 'Islam', '20065618225108740', 'NILUMBERPOTTY', 'Chandhar', 'Singair', 'Manikganj', 'school-student', 'sch-190', '72', 1, 1, NULL, '2018', 'front/img/students/5bb31e5b5f9f5LOGO.jpg', 1, '2018-10-02 01:29:31', '2018-10-02 01:29:31'),
(195, 'HRIDOY MIA', 'AWAL', 'RUMA AKTER', '01835087126', 'Male', 'Islam', '20070201', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-191', '73', 1, 1, NULL, '2018', 'front/img/students/5bb3252116386LOGO.jpg', 1, '2018-10-02 01:58:25', '2018-10-02 01:58:25'),
(196, 'NUPUR', 'BILLAL HOSSAIN', 'BILKIS BEGUM', '01928391203', 'Female', 'Islam', '20072616294116227', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-192', '75', 1, 1, NULL, '2018', 'front/img/students/5bb325762dcf9LOGO.jpg', 1, '2018-10-02 01:59:50', '2018-10-02 01:59:50'),
(197, 'TAYYABA NAJIR', 'NAJIR AHMED', 'SYEDA SHAHIDA HAQQI', '01708775274', 'Female', 'Islam', '20062616294114349', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-193', '01', 1, 8, NULL, '2018', 'front/img/students/5bb9acfd3ab18LOGO.jpg', 1, '2018-10-07 00:51:41', '2018-10-07 00:53:00'),
(198, 'RAJU', 'AHMMED ALLI', 'EYSMIN', '01855080900', 'Male', 'Islam', '20075618225107180', 'NILUMBERPOTTY', 'Chandhar', 'SINGAIR', 'Manikganj', 'school-student', 'sch-194', '02', 1, 8, NULL, '2018', 'front/img/students/5bb9ade79e41bLOGO.jpg', 1, '2018-10-07 00:55:35', '2018-10-07 00:55:35'),
(199, 'ATHAI RAJBONGSHI', 'RAMPARSD RAJBONGSHI', 'RANGMALA RAJBONGSHI', '01834665042', 'Female', 'Hinduism', '20072616294102069', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-195', '03', 1, 8, NULL, '2018', 'front/img/students/5bb9ae889c27eLOGO.jpg', 1, '2018-10-07 00:58:16', '2018-10-07 00:58:16'),
(200, 'ASHRAFUL ISLAM', 'MD. MONIR HOSSAIN', 'SAHIDA BEGUM', '01827154643', 'Male', 'Islam', '20062616294117357', 'DAKHIN SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-196', '04', 1, 8, NULL, '2018', 'front/img/students/5bb9af26b7699LOGO.jpg', 1, '2018-10-07 01:00:54', '2018-10-07 01:00:54'),
(201, 'RIFAT DEWAN', 'ROMIZ DEWAN', 'PARUL BEGUM', '01915355446', 'Male', 'Islam', '20072616294116182', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-197', '05', 1, 8, NULL, '2018', 'front/img/students/5bb9af85a3b22LOGO.jpg', 1, '2018-10-07 01:02:29', '2018-10-07 01:02:29'),
(204, 'MIM AKTER', 'MD. YOUNUS ALI', 'NURUN NAHER', '01706065755', 'Female', 'Islam', '2004561822500622', 'NILUMBERPOTTY', 'Chandhar', 'SINGAIR', 'Manikganj', 'school-student', 'sch-198', '06', 1, 8, NULL, '2018', 'front/img/students/5bc2c8a939913LOGO.jpg', 1, '2018-10-13 22:40:09', '2018-10-13 22:40:09'),
(205, 'MIM AKTER', 'MD. ABU BAKKAR SIDDIK', 'KULSUM BEGUM', '01871731927', 'Female', 'Islam', '20072616294115536', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-199', '07', 1, 8, NULL, '2018', 'front/img/students/5bc2c972cc597LOGO.jpg', 1, '2018-10-13 22:43:31', '2018-10-13 22:43:31'),
(206, 'SAKILA AKTER', 'MD. MOKIN MOLLA', 'RINA AKTER', '01823348973', 'Female', 'Islam', '20052616294113959', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-201', '09', 1, 8, NULL, '2018', 'front/img/students/5bc2cae14f01eLOGO.jpg', 1, '2018-10-13 22:49:37', '2018-10-13 22:53:05'),
(207, 'MAHMUD TAHA NAJIR AHMED', 'NAJIR AHMED', 'SYEDA AHAHIDA HAQQI', '01866884571', 'Male', 'Islam', '20072616294114348', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-200', '08', 1, 8, NULL, '2018', 'front/img/students/5bc2cb814b4f8LOGO.jpg', 1, '2018-10-13 22:52:17', '2018-10-13 22:52:17'),
(208, 'FATEMA AKTER', 'RAJJAB ALI', 'NASIMA BEGUM', '01764373283', 'Female', 'Islam', '20052616294116154', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-202', '10', 1, 8, NULL, '2018', 'front/img/students/5bc2cc1d6a4ccLOGO.jpg', 1, '2018-10-13 22:54:53', '2018-10-13 22:54:53'),
(209, 'REJVE KHAN', 'ISLAM KHAN', 'PARVIN BEGUM', '01827166068', 'Female', 'Islam', '20072616294116753', 'BOULLY', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-203', '11', 1, 8, NULL, '2018', 'front/img/students/5bc2ccb0cdcbbLOGO.jpg', 1, '2018-10-13 22:57:21', '2018-10-13 22:57:21'),
(210, 'SANZIDA', 'SHAH ALOM', 'JHORNA BEGUM', '01732338495', 'Female', 'Islam', '20072616294115992', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-204', '12', 1, 8, NULL, '2018', 'front/img/students/5bc2cd1f4c499LOGO.jpg', 1, '2018-10-13 22:59:11', '2018-10-13 22:59:11'),
(211, 'JAWSHIJ AHAMED', 'ALAMGIR HOSSAIN', 'KAMRUN NAHAR', '01812984490', 'Male', 'Islam', '20072616294115701', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-205', '13', 1, 8, NULL, '2018', 'front/img/students/5bc2cda195348LOGO.jpg', 1, '2018-10-13 23:01:21', '2018-10-13 23:01:21'),
(212, 'SREETE SARKER', 'BIPUL SARKER', 'ANJANA SARKER', '01825449855', 'Female', 'Islam', '20072616298000851', 'AJOGORA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-206', '14', 1, 8, NULL, '2018', 'front/img/students/5bc2ce583953aLOGO.jpg', 1, '2018-10-13 23:04:24', '2018-10-13 23:04:24'),
(213, 'MD. ASIF AHAMED', 'ABDUL BAREK', 'ACHIA BEGUM', '01815777956', 'Male', 'Islam', '20072616294118598', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-207', '15', 1, 8, NULL, '2018', 'front/img/students/5bc2ceef51959LOGO.jpg', 1, '2018-10-13 23:06:55', '2018-10-13 23:06:55'),
(214, 'PRIYANKA MONDAL', 'GOPAL MONDAL', 'KNOWSHALLA MONDAL', '01857612085', 'Female', 'Hinduism', '20072616294115540', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-208', '16', 1, 8, NULL, '2018', 'front/img/students/5bc2cf5b3752eLOGO.jpg', 1, '2018-10-13 23:08:43', '2018-10-13 23:08:43'),
(215, 'SHISHIR MONDAL', 'MAGLAL MONDAL', 'DIPALLY MONDAL', '01827166073', 'Male', 'Hinduism', '20062616294004748', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-209', '17', 1, 8, NULL, '2018', 'front/img/students/5bc2cfe981709LOGO.jpg', 1, '2018-10-13 23:11:05', '2018-10-13 23:11:05'),
(216, 'HEMEL MOLLA', 'MOKSAD MOLLA', 'HASENA BEGUM', '01881709089', 'Male', 'Islam', '20072616294118419', 'BOWALI', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-210', '19', 1, 8, NULL, '2018', 'front/img/students/5bc2d0b7c69acLOGO.jpg', 1, '2018-10-13 23:14:31', '2018-10-13 23:14:31'),
(217, 'SABBIR', 'TAJUL', 'SIMA', '01834666904', 'Male', 'Islam', '20042616294113461', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-211', '22', 1, 8, NULL, '2018', 'front/img/students/5bc2d12e19e93LOGO.jpg', 1, '2018-10-13 23:16:30', '2018-10-13 23:16:30'),
(218, 'MASUD RANA', 'MD. RABIUL', 'MAKSUDA AKTER', '01871310023', 'Male', 'Islam', '20072616294118524', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-212', '23', 1, 8, NULL, '2018', 'front/img/students/5bc2d326e3e90LOGO.jpg', 1, '2018-10-13 23:24:55', '2018-10-13 23:24:55'),
(219, 'SUMA AKTER', 'KHINUR HOSSAIN', 'SALMA BEGUM', '01731034124', 'Female', 'Islam', '200726162941155556', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-213', '24', 1, 8, NULL, '2018', 'front/img/students/5bc2d3d09b401LOGO.jpg', 1, '2018-10-13 23:27:44', '2018-10-13 23:27:44'),
(220, 'ARIFA AKTER', 'ARIF', 'AYESHA BEGUM', '01734335821', 'Female', 'Islam', '200626162941161055', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-214', '25', 1, 8, NULL, '2018', 'front/img/students/5bc2d4af05d98LOGO.jpg', 1, '2018-10-13 23:31:27', '2018-10-13 23:31:27'),
(221, 'ASIKUR RAHMAN', 'AMINUR HOSSAIN', 'ROUSANARRA BEGUM', '01853073417', 'Male', 'Islam', '20062616294118024', 'CHOKORIA', 'PATILJHAP', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-215', '26', 1, 8, NULL, '2018', 'front/img/students/5bc2d9fb9b74eLOGO.jpg', 1, '2018-10-13 23:54:04', '2018-10-13 23:54:04'),
(222, 'SABBIR AHAMED', 'SHOHIDE ISLAM', 'SHILPY AKTER', '01815779206', 'Male', 'Islam', '20072616294117620', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-216', '27', 1, 8, NULL, '2018', 'front/img/students/5bc2dc1994692LOGO.jpg', 1, '2018-10-14 00:03:05', '2018-10-14 00:03:05'),
(223, 'MD. EAMIN', 'MD. SALAUDDIN', 'SHAMSUR NAHAR', '01855854739', 'Male', 'Islam', '20072616294115727', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-217', '29', 1, 8, NULL, '2018', 'front/img/students/5bc2dc7fc83d7LOGO.jpg', 1, '2018-10-14 00:04:47', '2018-10-14 00:04:47'),
(224, 'PARVEZ', 'ABDUL ALIM', 'PARUL BEGUM', '01860493474', 'Male', 'Islam', '20052616294004526', 'CHOKORIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-218', '30', 1, 8, NULL, '2018', 'front/img/students/5bc2dd2b9afaeLOGO.jpg', 1, '2018-10-14 00:07:39', '2018-10-14 00:07:39'),
(225, 'ASHA', 'AUSH ALI', 'MUKSADA', '01762158112', 'Female', 'Islam', '20072616294115820', 'SHOLLA', 'SHOLLA', 'Nawabganj', 'DHAKA', 'school-student', 'sch-219', '31', 1, 8, NULL, '2018', 'front/img/students/5bc2ddb732843LOGO.jpg', 1, '2018-10-14 00:09:59', '2018-10-14 00:09:59'),
(226, 'LAJUK MREDDA', 'SRISTI MREDDA', 'JOYTARA RANI MREDDA', '01924796119', 'Female', 'Islam', '20072616267', 'JHONJONEA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-220', '32', 1, 8, NULL, '2018', 'front/img/students/5bc3186493f9aLOGO.jpg', 1, '2018-10-14 04:20:20', '2018-10-14 04:20:20'),
(227, 'BADSHA', 'ALI AHMMED', 'SALMA BEGUM', '01940177867', 'Male', 'Islam', '20062616294115551', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-221', '33', 1, 8, NULL, '2018', 'front/img/students/5bc318cc97529LOGO.jpg', 1, '2018-10-14 04:22:04', '2018-10-14 04:22:04'),
(228, 'AYSHA AKTER RIMU', 'RIFAT JEWEL', 'SALMA AKTER', '01850368878', 'Female', 'Islam', '20062616294000715', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-222', '34', 1, 8, NULL, '2018', 'front/img/students/5bc31a5251041LOGO.jpg', 1, '2018-10-14 04:28:34', '2018-10-14 04:28:34'),
(229, 'PARTHO MONDAL', 'BABUL MONDAL', 'POPY MONDAL', '01715962861', 'Male', 'Hinduism', '20072616294000504', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-223', '35', 1, 8, NULL, '2018', 'front/img/students/5bc31afa1d9c6LOGO.jpg', 1, '2018-10-14 04:31:22', '2018-10-14 04:31:22'),
(231, 'TANZEELA ISLAM', 'NURUL ISLAM', 'PARVIN BEGUM', '01680717376', 'Female', 'Islam', '20072616294114823', 'SINGHARA', 'PATILJHAP', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-224', '36', 1, 8, NULL, '2018', 'front/img/students/5bc41f4fe4b42LOGO.jpg', 1, '2018-10-14 23:02:08', '2018-10-14 23:02:08'),
(232, 'MEHEDI HASAN', 'RIPON MIA', 'MASUDA', '01814877787', 'Male', 'Islam', '20062616294117866', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-225', '37', 1, 8, NULL, '2018', 'front/img/students/5bc41fd1a9770LOGO.jpg', 1, '2018-10-14 23:04:17', '2018-10-14 23:04:17'),
(233, 'ORPITA MONDOL', 'TIPAS MONDOL', 'ASHA MONDOL', '01881560857', 'Female', 'Hinduism', '20052616294116681', 'BOWALI', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-226', '38', 1, 8, NULL, '2018', 'front/img/students/5bc42042d85e2LOGO.jpg', 1, '2018-10-14 23:06:11', '2018-10-14 23:06:11'),
(234, 'ANIKA AKTER', 'AKTER HOSSAN', 'ALEYA BEGUM', '01830135519', 'Female', 'Islam', '2007261629811521', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-227', '39', 1, 8, NULL, '2018', 'front/img/students/5bc4209d1b6c8LOGO.jpg', 1, '2018-10-14 23:07:41', '2018-10-14 23:07:41'),
(235, 'SABNUR AKTER', 'HABIBUR', 'PIARA BEGUM', '01828523583', 'Female', 'Islam', '20052616294115611', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-228', '40', 1, 8, NULL, '2018', 'front/img/students/5bc421112f017LOGO.jpg', 1, '2018-10-14 23:09:37', '2018-10-14 23:09:37'),
(236, 'ALAMIN', 'NUR ISLAM', 'SHEMA BEGUM', '01932861921', 'Male', 'Islam', '20052616294116498', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-229', '41', 1, 8, NULL, '2018', 'front/img/students/5bc4216d7ba7fLOGO.jpg', 1, '2018-10-14 23:11:09', '2018-10-14 23:11:09'),
(237, 'DIPANGHAR MONDAL', 'NIDHAN MONDAL', 'RASMNI MONDAL', '01865948774', 'Male', 'Hinduism', '20052616294114141', 'AJOGORA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-230', '42', 1, 8, NULL, '2018', 'front/img/students/5bc4221314a5cLOGO.jpg', 1, '2018-10-14 23:13:55', '2018-10-14 23:13:55'),
(238, 'MD. MURAD HOSSAIN', 'MD. BADAL HOSSAIN', 'NACNA', '01852012490', 'Male', 'Islam', '20062616294103453', 'SINGJOR', 'SHOLLA', 'Nawabganj', 'DHAKA', 'school-student', 'sch-231', '43', 1, 8, NULL, '2018', 'front/img/students/5bc422997d426LOGO.jpg', 1, '2018-10-14 23:16:09', '2018-10-14 23:16:09'),
(239, 'ASHA AKTHER', 'MUBARAK HOSSAIN', 'KULSUM BEGUM', '01829134772', 'Female', 'Islam', '20052611629411726', 'CHOKORIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-232', '44', 1, 8, NULL, '2018', 'front/img/students/5bc4232fc3d3bLOGO.jpg', 1, '2018-10-14 23:18:40', '2018-10-14 23:18:40'),
(240, 'ARPON MALAKER', 'BISHWAJIT MALAKER', 'SIKHA MALAKER', '01716106002', 'Male', 'Hinduism', '20062616294000560', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-233', '45', 1, 8, NULL, '2018', 'front/img/students/5bc423a74f8bbLOGO.jpg', 1, '2018-10-14 23:20:39', '2018-10-14 23:20:39'),
(241, 'MONIRA AKTER MIM', 'MANO', 'BEAUTI AKTER', '01836983238', 'Female', 'Islam', '20072616294117332', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-234', '48', 1, 8, NULL, '2018', 'front/img/students/5bc428f134c8bLOGO.jpg', 1, '2018-10-14 23:43:13', '2018-10-14 23:43:13'),
(242, 'AZIZUL HOSSAIN', 'EBADUL HOSSAIN', 'TASLIMA BEGUM', '01881866205', 'Female', 'Islam', '20062616294118073', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-234', '49', 1, 8, NULL, '2018', 'front/img/students/5bd986b9124bcLOGO.jpg', 1, '2018-10-31 04:40:57', '2018-10-31 04:40:57'),
(243, 'SHOPNA DAS', 'HARADHAN DAS', 'SHILLA RANI DAS', '01835452432', 'Female', 'Hinduism', '20062616294000847', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-235', '50', 1, 8, NULL, '2018', 'front/img/students/5bd98744e0071LOGO.jpg', 1, '2018-10-31 04:43:17', '2018-10-31 04:43:17'),
(244, 'CHAINA AKTER', 'AMJAD HOSSAIN', 'NAJMA BEGUM', '01820854677', 'Female', 'Islam', '20035618177105176', 'PURBO BANDHAIL', 'Chandhar', 'SINGAIR', 'Manikganj', 'school-student', 'sch-236', '51', 1, 8, NULL, '2018', 'front/img/students/5bd9882642eb8LOGO.jpg', 1, '2018-10-31 04:47:02', '2018-10-31 04:47:02'),
(245, 'TUSAR', 'SAHIN MIAH', 'LIPI BEGUM', '01843899177', 'Male', 'Islam', '20072616294118446', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-237', '53', 1, 8, NULL, '2018', 'front/img/students/5be3cd9cb47beLOGO.jpg', 1, '2018-11-07 23:46:05', '2018-11-07 23:46:05'),
(246, 'AMIR HAMZA', 'FARUK HOSSEN', 'SHIREEN AKTER', '01849434557', 'Male', 'Islam', '20072616294118160', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-238', '54', 1, 8, NULL, '2018', 'front/img/students/5be3d2d0cb5daLOGO.jpg', 1, '2018-11-08 00:08:16', '2018-11-08 00:08:16'),
(247, 'PARTHO RAJBONGSHI', 'NIPEN RAJBONGSHI', 'NANON RAJBONGSHI', '01865386893', 'Male', 'Hinduism', '25022006', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-239', '55', 1, 8, NULL, '2018', 'front/img/students/5c07927c415a8LOGO.jpg', 1, '2018-12-05 02:55:24', '2018-12-05 02:55:24'),
(248, 'NUR ISLAM', 'KAHINUR MIA', 'FARIDA AKTER', '01827154833', 'Male', 'Islam', '20072616294107955', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-240', '56', 1, 8, NULL, '2018', 'front/img/students/5c07933178a24LOGO.jpg', 1, '2018-12-05 02:58:25', '2018-12-05 02:58:25'),
(249, 'MD. AMJAD', 'OMID ALI', 'JORNA AKTER', '01789259665', 'Male', 'Islam', '26042005', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-241', '58', 1, 8, NULL, '2018', 'front/img/students/5c0793fd08a99LOGO.jpg', 1, '2018-12-05 03:01:49', '2018-12-05 03:01:49'),
(250, 'ROMAN', 'AWLAD HOSSAIN', 'AMILY', '01881710111', 'Male', 'Islam', '20072616294118543', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-242', '59', 1, 8, NULL, '2018', 'front/img/students/5c0794da2177aLOGO.jpg', 1, '2018-12-05 03:05:30', '2018-12-05 03:05:30'),
(251, 'KANIZ FATEMA', 'ABUL KALAM', 'ZUI AKTER', '01850157138', 'Female', 'Islam', '09042007', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-243', '60', 1, 8, NULL, '2018', 'front/img/students/5c0798e19b7d8LOGO.jpg', 1, '2018-12-05 03:22:41', '2018-12-05 03:22:41'),
(252, 'MD. YUSUF', 'MD. HAREJ', 'ROMA BEGUM', '01865218984', 'Male', 'Islam', '20072616294116338', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-244', '61', 1, 8, NULL, '2018', 'front/img/students/5c07995190f44LOGO.jpg', 1, '2018-12-05 03:24:33', '2018-12-05 03:24:33'),
(253, 'TUHIN', 'MUKSED ALI', 'SALINA AKTER', '01992272237', 'Male', 'Islam', '20052616294115623', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-245', '62', 1, 8, NULL, '2018', 'front/img/students/5c079a0d90c19LOGO.jpg', 1, '2018-12-05 03:27:41', '2018-12-05 03:27:41'),
(254, 'BRISTY MONDAL', 'SONJOY MONDAL', 'BEAUTY MONDAL', '01815801981', 'Female', 'Hinduism', '2006261629411517', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-246', '63', 1, 8, NULL, '2018', 'front/img/students/5c079a77dcb1bLOGO.jpg', 1, '2018-12-05 03:29:27', '2018-12-05 03:29:27'),
(255, 'JIASMIN', 'FAJAL', 'MALEKA BEGUM', '01879426381', 'Male', 'Islam', '20062616294115495', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-247', '65', 1, 8, NULL, '2018', 'front/img/students/5c079ae478475LOGO.jpg', 1, '2018-12-05 03:31:16', '2018-12-05 03:31:16'),
(256, 'SURAIYA AKTER', 'MD. LITON', 'HASINA', '01816052930', 'Female', 'Islam', '20072616294115489', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-248', '66', 1, 8, NULL, '2018', 'front/img/students/5c079b44e4493LOGO.jpg', 1, '2018-12-05 03:32:53', '2018-12-05 03:32:53'),
(257, 'HALIMA AKTER', 'MD. MIR HOSSAIN', 'ALAY BEGUM', '01830239999', 'Female', 'Islam', '20072616294117904', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-249', '67', 1, 8, NULL, '2018', 'front/img/students/5c079bab621c7LOGO.jpg', 1, '2018-12-05 03:34:35', '2018-12-05 03:34:35'),
(258, 'NAYEM', 'LAVLO BEGUM', 'NAEIMA BEGUM', '01988156175', 'Male', 'Islam', '20062616294117936', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-250', '68', 1, 8, NULL, '2018', 'front/img/students/5c079c049b2a6LOGO.jpg', 1, '2018-12-05 03:36:04', '2018-12-05 03:36:04'),
(259, 'SHAYAN MONDAL', 'TOPAN MONDAL', 'MONJU RANI MONDAL', '01867726025', 'Male', 'Hinduism', '20072616294000521', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-251', '70', 1, 8, NULL, '2018', 'front/img/students/5c079caa50899LOGO.jpg', 1, '2018-12-05 03:38:50', '2018-12-05 03:38:50'),
(260, 'SULTANA AKTER', 'MD. SULTAN ALI', 'JAHERA BEGUM', '01752167551', 'Female', 'Islam', '20072616294115779', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-252', '71', 1, 8, NULL, '2018', 'front/img/students/5c079ef819eacLOGO.jpg', 1, '2018-12-05 03:48:40', '2018-12-05 03:48:40'),
(261, 'SIMU AKTER', 'SHORIF ALI', 'DELOARA BEGUM', '01644315097', 'Female', 'Islam', '20072616294117332', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-253', '72', 1, 8, NULL, '2018', 'front/img/students/5c079f8968e9fLOGO.jpg', 1, '2018-12-05 03:51:05', '2018-12-05 03:51:05'),
(262, 'ALMA AKTER', 'SARJAHAN HOSSEN', 'MORJINA AKTER', '01828195222', 'Female', 'Islam', '20072616294118145', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-254', '73', 1, 8, NULL, '2018', 'front/img/students/5c07a358de043LOGO.jpg', 1, '2018-12-05 04:07:21', '2018-12-05 04:07:21'),
(263, 'RIDOY HOSSAIN', 'KOTO MOLLA', 'RAHIMA', '01862304723', 'Male', 'Islam', '11082004', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-255', '74', 1, 8, NULL, '2018', 'front/img/students/5c07a3a2917abLOGO.jpg', 1, '2018-12-05 04:08:34', '2018-12-05 04:08:34'),
(264, 'MONDIRA MONDAL', 'RUPCHAN MONDAL', 'KOMOLA MONDAL', '01833454622', 'Female', 'Hinduism', '20072616294118187', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-256', '75', 1, 8, NULL, '2018', 'front/img/students/5c07a4067859dLOGO.jpg', 1, '2018-12-05 04:10:14', '2018-12-05 04:10:14'),
(265, 'AKHI MONDAL', 'TAPON MONDAL', 'NAYON TARA MONDAL', '01879442397', 'Female', 'Hinduism', '20062616294001212', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-257', '01', 1, 9, NULL, '2018', 'front/img/students/5c08c4596fe46LOGO.jpg', 1, '2018-12-06 00:40:25', '2018-12-06 00:40:25'),
(266, 'MARIA AKTHER', 'MANJUR ALAM', 'ALEYA BEGUM', '01731305217', 'Female', 'Islam', '20042616294116135', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-258', '02', 1, 9, NULL, '2018', 'front/img/students/5c08c5ab4a502LOGO.jpg', 1, '2018-12-06 00:46:03', '2018-12-06 00:46:03'),
(267, 'SONALE BISWAS', 'NITAI BISWAS', 'LAXMI BISWAS', '01731493004', 'Female', 'Hinduism', '20072616294000461', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-259', '03', 1, 9, NULL, '2018', 'front/img/students/5c08c610b6a70LOGO.jpg', 1, '2018-12-06 00:47:44', '2018-12-06 00:47:44'),
(268, 'FAHIM', 'ABUL KALAM', 'FARIDA BEGUM', '01863969028', 'Male', 'Islam', '20072616294117989', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-260', '04', 1, 9, NULL, '2018', 'front/img/students/5c08c6689e62aLOGO.jpg', 1, '2018-12-06 00:49:12', '2018-12-06 00:49:12'),
(269, 'PIYA RANI SHEKHA', 'VOROT MONDAL', 'MAYA MONDAL', '01636674606', 'Female', 'Hinduism', '20062616294117276', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-261', '05', 1, 9, NULL, '2018', 'front/img/students/5c08c70394e14LOGO.jpg', 1, '2018-12-06 00:51:47', '2018-12-06 00:51:47'),
(270, 'SATHI AKTER', 'MUNSOR ALLI', 'LIPE BEGUM', '01936702472', 'Female', 'Islam', '20062616294005062', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-262', '06', 1, 9, NULL, '2018', 'front/img/students/5c08c772ac477LOGO.jpg', 1, '2018-12-06 00:53:38', '2018-12-06 00:53:38'),
(271, 'ABU JIHAD', 'SORBOT ALI', 'JORINA KHATUN', '01823541349', 'Male', 'Islam', '20055618225106656', 'Nilamborpotty', 'CHANDHOR', 'SINGAIR', 'MANIKGONJ', 'school-student', 'sch-263', '07', 1, 9, NULL, '2018', 'front/img/students/5c08cd2e6a6d5LOGO.jpg', 1, '2018-12-06 01:18:06', '2018-12-06 01:18:06'),
(272, 'ASESHA', 'SAHALAM', 'KULSUM', '01862750964', 'Female', 'Islam', '20072616294116146', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-264', '08', 1, 9, NULL, '2018', 'front/img/students/5c08cda00c10aLOGO.jpg', 1, '2018-12-06 01:20:00', '2018-12-06 01:20:00'),
(273, 'SONALI SARKER', 'SOWPON SARKER', 'RINA RANI SARKER', '01875893112', 'Female', 'Hinduism', '20052616294104962', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-265', '09', 1, 9, NULL, '2018', 'front/img/students/5c08ce69ceea9LOGO.jpg', 1, '2018-12-06 01:23:21', '2018-12-06 01:23:21'),
(274, 'MOKTA AKTER', 'MQAJID', 'KHUSHEDA BEGUM', '01827166253', 'Female', 'Hinduism', '20052616294118014', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-266', '10', 1, 9, NULL, '2018', 'front/img/students/5c08cf006da33LOGO.jpg', 1, '2018-12-06 01:25:52', '2018-12-06 01:25:52'),
(275, 'ARIFUL', 'DOLLA', 'ASMA BEGUM', '01816775708', 'Male', 'Islam', '20052616294117922', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-267', '11', 1, 9, NULL, '2018', 'front/img/students/5c08e3787e169LOGO.jpg', 1, '2018-12-06 02:53:12', '2018-12-06 02:53:12'),
(276, 'MARIA AKTER', 'MUKTER HOSSAIN', 'SABANA', '01861901352', 'Female', 'Islam', '20062616294118076', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-268', '12', 1, 9, NULL, '2018', 'front/img/students/5c08e523e7be9LOGO.jpg', 1, '2018-12-06 03:00:20', '2018-12-06 03:00:20'),
(277, 'AFROZA AKTER', 'ABDUL', 'SOME BEGUM', '01869173554', 'Female', 'Islam', '20052616294116133', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-269', '13', 1, 9, NULL, '2018', 'front/img/students/5c08e993e43a2LOGO.jpg', 1, '2018-12-06 03:19:16', '2018-12-06 03:19:16'),
(278, 'MIM AKTER', 'HASAN ALI', 'TASLIMA BEGUM', '01830554305', 'Female', 'Islam', '20062616294118216', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-270', '14', 1, 9, NULL, '2018', 'front/img/students/5c08eadc20f83LOGO.jpg', 1, '2018-12-06 03:24:44', '2018-12-06 03:24:44'),
(279, 'SEFAT', 'FAZAL HAQUE', 'Rabiya Begum', '01817354680', 'Male', 'Islam', '20052616294116132', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-271', '15', 1, 9, NULL, '2018', 'front/img/students/5c08ecaf99fd2LOGO.jpg', 1, '2018-12-06 03:32:31', '2018-12-06 03:32:31'),
(280, 'ORPITA SARKER', 'KARTHIK SARKER', 'ADURI SARKER', '01821830710', 'Female', 'Hinduism', '02022007', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-272', '16', 1, 9, NULL, '2018', 'front/img/students/5c0dfcdc6cfdbLOGO.jpg', 1, '2018-12-09 23:42:52', '2018-12-09 23:42:52'),
(281, 'MOKTA AKTER', 'NAZRUL ISLAM', 'ROKEYA BEGUM', '01931148278', 'Female', 'Islam', '12122005', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-273', '18', 1, 9, NULL, '2018', 'front/img/students/5c0dfdb6af6ffLOGO.jpg', 1, '2018-12-09 23:46:30', '2018-12-09 23:46:30'),
(282, 'SHILA MONDAL', 'GOPAL MONDAL', 'LAXMIMONDAL', '01815785792', 'Female', 'Hinduism', '20042616294000377', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-274', '19', 1, 9, NULL, '2018', 'front/img/students/5c0dfe380141fLOGO.jpg', 1, '2018-12-09 23:48:40', '2018-12-09 23:48:40'),
(283, 'SOMPA MONDAL', 'NAYAN MONDAL', 'KAMONA MONDAL', '01814739756', 'Female', 'Hinduism', '20062616294113981', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-275', '20', 1, 9, NULL, '2018', 'front/img/students/5c0dfea23a030LOGO.jpg', 1, '2018-12-09 23:50:26', '2018-12-09 23:50:26'),
(284, 'RUMANA AKTHER', 'RUMAN SEKH', 'BITH BEGUM', '01814087110', 'Female', 'Islam', '20052616294113728', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-276', '21', 1, 9, NULL, '2018', 'front/img/students/5c0dff1f67b15LOGO.jpg', 1, '2018-12-09 23:52:31', '2018-12-09 23:52:31'),
(285, 'RISA AKTHER', 'RAHMAN', 'SHAPLA', '01768051597', 'Female', 'Islam', '2006261629114175', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-277', '22', 1, 9, NULL, '2018', 'front/img/students/5c0dfff93a4e2LOGO.jpg', 1, '2018-12-09 23:56:09', '2018-12-09 23:56:09'),
(286, 'SALMA AKTER', 'ABDUS SALAM', 'CHINA BEGUM', '01832510210', 'Female', 'Islam', '20042616294114088', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-278', '23', 1, 9, NULL, '2018', 'front/img/students/5c0e006472210LOGO.jpg', 1, '2018-12-09 23:57:56', '2018-12-09 23:57:56'),
(287, 'BISSOJIT RAJBONGSHI', 'BIREN RAJBONGSHI', 'LOLITA RAJBONGSHI', '01826691728', 'Male', 'Hinduism', '20062616294004880', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-279', '25', 1, 9, NULL, '2019', 'front/img/students/5c3461c71a624LOGO.jpg', 1, '2019-01-08 02:39:35', '2019-01-08 02:39:35'),
(288, 'HAFSA MIN', 'MOHAMMAD ALI', 'ROWSONARA', '01779509979', 'Female', 'Islam', '20052616294113915', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-280', '26', 1, 9, NULL, '2019', 'front/img/students/5c34624c802eaLOGO.jpg', 1, '2019-01-08 02:41:48', '2019-01-08 02:41:48'),
(289, 'KAMRUL HASAN', 'BABUL', 'KAMRUN NAHAR', '01876481551', 'Female', 'Islam', '20052616294113908', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-281', '27', 1, 9, NULL, '2019', 'front/img/students/5c3462d1d96b3LOGO.jpg', 1, '2019-01-08 02:44:01', '2019-01-08 02:44:01'),
(290, 'DIP RAJBONGSHI', 'SUSHIL RAJBONGSHI', 'ANITA RAJBONGSHI', '01884398855', 'Male', 'Hinduism', '27092006', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-282', '28', 1, 9, NULL, '2018', 'front/img/students/5c3464d3c9dfaLOGO.jpg', 1, '2019-01-08 02:52:35', '2019-01-08 02:52:35'),
(291, 'SUMA MONDAL', 'VASAN MONDAL', 'MOMTA MONDAL', '01863544033', 'Female', 'Hinduism', '20062616294004862', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-283', '29', 1, 9, NULL, '2018', 'front/img/students/5c3465b796de1LOGO.jpg', 1, '2019-01-08 02:56:23', '2019-01-08 02:56:23'),
(292, 'LIFA KHANAM', 'ROBIUL KHAN', 'SALMA BEGUM', '01727797214', 'Female', 'Islam', '20072616294115624', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-284', '30', 1, 9, NULL, '2018', 'front/img/students/5c346645d7f80LOGO.jpg', 1, '2019-01-08 02:58:45', '2019-01-08 02:58:45'),
(293, 'DIPA AKTER', 'ANU MOLLA', 'SABURA BEGUM', '01748459205', 'Female', 'Islam', '20065618225107178', 'NILUMBERPOTTY', 'Chandhar', 'SINGAIR', 'MANIKGONJ', 'school-student', 'sch-285', '32', 1, 9, NULL, '2018', 'front/img/students/5c3466b5de436LOGO.jpg', 1, '2019-01-08 03:00:37', '2019-01-08 03:00:37'),
(294, 'SUMAYA AKTER', 'ABDUL MOLLA', 'SHORE BANU', '01814739416', 'Female', 'Islam', '20045618225007495', 'NILUMBERPOTTY', 'Chandhar', 'SINGAIR', 'MANIKGONJ', 'school-student', 'sch-286', '33', 1, 9, NULL, '2018', 'front/img/students/5c346dc6ad499LOGO.jpg', 1, '2019-01-08 03:30:46', '2019-01-08 03:30:46'),
(295, 'BITHI AKTHER', 'SAWPAN MIAH', 'MAJSUDA BEGUM', '01815781650', 'Female', 'Islam', '20062616294116024', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-287', '34', 1, 9, NULL, '2018', 'front/img/students/5c346e5fe1c66LOGO.jpg', 1, '2019-01-08 03:33:20', '2019-01-08 03:33:20'),
(296, 'RUJA AKTHER', 'RAMJAN ALI', 'NURJAHAN BEGUM', '01832677163', 'Female', 'Islam', '20072616294118379', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-288', '35', 1, 9, NULL, '2018', 'front/img/students/5c346eff35867LOGO.jpg', 1, '2019-01-08 03:35:59', '2019-01-08 03:35:59'),
(297, 'YAMIN', 'SORMON', 'SONAKA', '01843235283', 'Male', 'Islam', '20072616294118347', 'KHATIA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-289', '36', 1, 9, NULL, '2018', 'front/img/students/5c3470781c4c7LOGO.jpg', 1, '2019-01-08 03:42:16', '2019-01-08 03:42:16'),
(298, 'KOHELE MONDAL', 'LALON MONDAL', 'KOLPONA MONDAL', '01710240395', 'Female', 'Hinduism', '20055618251101792', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-290', '38', 1, 9, NULL, '2018', 'front/img/students/5c34713702100LOGO.jpg', 1, '2019-01-08 03:45:27', '2019-01-08 03:45:27'),
(299, 'RITU AKTHER', 'ALI HOSSEN', 'Sahana Begum', '01787105355', 'Female', 'Islam', '20062616294115821', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-291', '39', 1, 9, NULL, '2018', 'front/img/students/5c3471f847fd5LOGO.jpg', 1, '2019-01-08 03:48:40', '2019-01-08 03:48:40'),
(300, 'RATRI RAJBONGSHI', 'RATON RAJBONGSHI', 'SARASTHI RAJBONGSHI', '01882152779', 'Female', 'Hinduism', '20062616294000402', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-292', '41', 1, 9, NULL, '2018', 'front/img/students/5c347390de38aLOGO.jpg', 1, '2019-01-08 03:55:29', '2019-01-08 03:55:29'),
(301, 'SHRABONE SHAHA', 'SUMON SHAHA', 'BISNU SHAHA', '01834924604', 'Female', 'Hinduism', '20062613806030547', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-293', '42', 1, 9, NULL, '2018', 'front/img/students/5c358b216052bLOGO.jpg', 1, '2019-01-08 23:48:17', '2019-01-08 23:48:17'),
(302, 'SADIYA AKTER', 'SAGOR ALI', 'AKLIMA BEGUM', '01840377000', 'Female', 'Islam', '7004380092713', 'NILUMBERPOTTY', 'Chandhar', 'SINGAIR', 'MANIKGONJ', 'school-student', 'sch-294', '44', 1, 9, NULL, '2018', 'front/img/students/5c35906532effLOGO.jpg', 1, '2019-01-09 00:10:45', '2019-01-09 00:10:45'),
(303, 'SURAIYA', 'BODURUZZAMAN', 'SAKHINA BEGUM', '01837413386', 'Female', 'Islam', '20062616294114708', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-295', '45', 1, 9, NULL, '2018', 'front/img/students/5c3590e26d4ccLOGO.jpg', 1, '2019-01-09 00:12:50', '2019-01-09 00:12:50'),
(304, 'MD. REZUAN HOSSAIN', 'MD. EANUS ALI', 'PANUYARA BEGUM', '01775398766', 'Male', 'Islam', '20072616294118540', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-296', '46', 1, 9, NULL, '2018', 'front/img/students/5c35a665b1293LOGO.jpg', 1, '2019-01-09 01:44:37', '2019-01-09 01:44:37'),
(305, 'MD. AWOAL HOSSAIN', 'MD. EANUS ALI', 'PANUYARA BEGUM', '01775398761', 'Male', 'Islam', '20072616294118541', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-297', '47', 1, 9, NULL, '2018', 'front/img/students/5c35a6e6b607eLOGO.jpg', 1, '2019-01-09 01:46:46', '2019-01-09 01:46:46'),
(306, 'SHIPON', 'FOJOR ALI', 'SHAHIDA', '01731177826', 'Male', 'Islam', '06012006', 'PURBO BANDHAIL', 'SHAHORAIL', 'SINGAIR', 'MANIKGONJ', 'school-student', 'sch-298', '48', 1, 9, NULL, '2018', 'front/img/students/5c35a7b09a88dLOGO.jpg', 1, '2019-01-09 01:50:08', '2019-01-09 01:50:08'),
(307, 'ARIJIT DAS', 'RANJIT DAS', 'SUAGAT DAS', '01764614924', 'Male', 'Hinduism', '20062616294114187', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-299', '49', 1, 9, NULL, '2018', 'front/img/students/5c35a834ab725LOGO.jpg', 1, '2019-01-09 01:52:20', '2019-01-09 01:52:20'),
(308, 'RAKIB', 'NORUL AMIN', 'RASEDA BEGUM', '01858739141', 'Male', 'Islam', '20052616294114050', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-300', '50', 1, 9, NULL, '2018', 'front/img/students/5c35a92ab2f56LOGO.jpg', 1, '2019-01-09 01:56:26', '2019-01-09 01:56:26'),
(309, 'NAHAY MONDAL', 'TOPAN MONDAL', 'MONJU RANI MONDAL', '01929352779', 'Male', 'Hinduism', '20062616294114136', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-301', '52', 1, 9, NULL, '2018', 'front/img/students/5c3abf5acd357LOGO.jpg', 1, '2019-01-12 22:32:27', '2019-01-12 22:32:27'),
(310, 'NASIM', 'ATIYAR HOSSAIN', 'NASIMA BEGUM', '01902606729', 'Male', 'Islam', '20042616294113595', 'Modanmohonpur', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-302', '53', 1, 9, NULL, '2018', 'front/img/students/5c3abfc7941e2LOGO.jpg', 1, '2019-01-12 22:34:15', '2019-01-12 22:34:15'),
(311, 'SUJANNA MONDAL', 'SUNIL MONDAL', 'SIMA', '01875020277', 'Female', 'Hinduism', '20072616294118586', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-303', '56', 1, 9, NULL, '2018', 'front/img/students/5c3ac03bd6b8bLOGO.jpg', 1, '2019-01-12 22:36:11', '2019-01-12 22:36:11'),
(312, 'OPU', 'JAHANGIR ALOM', 'ROHIMA AKTER', '01815781790', 'Male', 'Islam', '20052616294117934', 'SONAPUR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-304', '57', 1, 9, NULL, '2018', 'front/img/students/5c3ac12c43c6fLOGO.jpg', 1, '2019-01-12 22:40:12', '2019-01-12 22:40:12'),
(313, 'SOURAV MONDAL', 'SHYAMAL MONDAL', 'MANIKA MONDAL', '01855854533', 'Male', 'Hinduism', '200526162940048', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-305', '58', 1, 9, NULL, '2018', 'front/img/students/5c3ac228d8c1cLOGO.jpg', 1, '2019-01-12 22:44:24', '2019-01-12 22:44:24'),
(314, 'SAIKAT MONDAL', 'SWAPAN MONDAL', 'SARODHA MONDAL', '01636674813', 'Male', 'Hinduism', '12112007', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-306', '60', 1, 9, NULL, '2018', 'front/img/students/5c3ac51cc6822LOGO.jpg', 1, '2019-01-12 22:57:00', '2019-01-12 22:57:00'),
(315, 'SADIYA AKTER', 'MD. DILU', 'JOHURA KHATUN', '01839792686', 'Male', 'Islam', '20072616294118164', 'SINGJOR', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-307', '55', 1, 9, NULL, '2018', 'front/img/students/5c3ac5b4af04dLOGO.jpg', 1, '2019-01-12 22:59:32', '2019-01-12 22:59:32'),
(316, 'CHAITY MONDOL', 'BAIDDYONATH MONDAL', 'UMA MONDAL', '01717105534', 'Female', 'Hinduism', '20072616294001291', 'SHOLLA', 'SHOLLA', 'NAWABGONJ', 'DHAKA', 'school-student', 'sch-308', '63', 1, 9, NULL, '2018', 'front/img/students/5c3ac984ac0a2LOGO.jpg', 1, '2019-01-12 23:15:48', '2019-01-12 23:15:48'),
(317, 'Sheaikh Rahamat', 'Baitul Islam', 'Rehena Begum', '01705161424', 'Male', 'Islam', NULL, 'Khatia', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190001', '1', 1, 8, NULL, '2019', 'front/img/students/5cb41981a80151.JPG', 1, '2019-04-14 23:41:21', '2019-04-14 23:41:21'),
(318, 'RYAN MAHMUD', 'JEWEL MIA', 'RINA SULTANA', '01834413066', 'Male', 'Islam', NULL, 'SINGJOR', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190002', '2', 1, 8, NULL, '2019', 'front/img/students/5cc6910b02d692.JPG', 1, '2019-04-28 23:52:11', '2019-04-28 23:52:11'),
(319, 'SWAPNIL KUMAR DEB', 'BISHWAJIT CHANDRA SHIL', 'KONIKA RANI SHIL', '01734542307', 'Male', 'Hinduism', NULL, 'SHOLLA', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190003', '3', 1, 8, NULL, '2019', 'front/img/students/5cc6923b519a53.JPG', 1, '2019-04-28 23:57:15', '2019-04-28 23:57:15'),
(320, 'APON MANDAL', 'NADIRAM MANDAL', 'SHEFALY RANI MANDAL', '01734542308', 'Male', 'Hinduism', NULL, 'SHOLLA', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190004', '04', 1, 8, NULL, '2019', 'front/img/students/5cc6937de0eac4.JPG', 1, '2019-04-29 00:02:38', '2019-04-29 00:02:38'),
(321, 'ZAKIA AKTER', 'GOGON', 'JHORNA BEGUM', '01920718819', 'Female', 'Islam', NULL, 'SHOLLA', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190005', '05', 1, 8, NULL, '2019', 'front/img/students/5cc694b56653c5.JPG', 1, '2019-04-29 00:07:49', '2019-04-29 00:07:49'),
(322, 'SADIA MOLLA', 'ALEK CHAN MOLLA', 'MADINA BEGUM', '01776205051', 'Female', 'Islam', NULL, 'SHOLLA', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190006', '06', 1, 8, NULL, '2019', 'front/img/students/5cc695750785c6.JPG', 1, '2019-04-29 00:11:01', '2019-04-29 00:11:01'),
(323, 'ONTOR BISWAS', 'RATON BISWAS', 'MUKTI RANI BISWAS', '01798116059', 'Male', 'Hinduism', NULL, 'SHOLLA', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190007', '09', 1, 8, NULL, '2019', 'front/img/students/5cc6991023c6f9.JPG', 1, '2019-04-29 00:26:24', '2019-04-29 00:26:24'),
(324, 'DIYASMIN VHUIYA', 'DELOWAR MIA', 'SATHI AKTER', '01798116051', 'Female', 'Islam', NULL, 'MODONMAHANPUR', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190008', '10', 1, 8, NULL, '2019', 'front/img/students/5cc69c529b47e10.JPG', 1, '2019-04-29 00:40:18', '2019-04-29 00:40:18'),
(325, 'MD RASEL', 'MD SHARIF MIA', 'RASHEDA BEGUM', '01776205055', 'Male', 'Islam', NULL, 'SINGJOR', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190009', NULL, 1, 8, NULL, '2019', 'front/img/students/5cc69ceed1e3611.JPG', 1, '2019-04-29 00:42:54', '2019-04-29 00:42:54'),
(326, 'NADIM HOSSEN', 'ABDUR RAUB', 'NACHIMA BEGUM', '01830625141', 'Male', 'Islam', NULL, 'MODONMAHANPUR', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190010', '12', 1, 8, NULL, '2019', 'front/img/students/5cc69dba79b1712.JPG', 1, '2019-04-29 00:46:18', '2019-04-29 00:46:18'),
(327, 'ABU SAYED', 'NURUL ISLAM', 'SULTANA RAZIA', '01830625142', 'Male', 'Islam', NULL, 'SINGJOR', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190013', '13', 1, 8, NULL, '2019', 'front/img/students/5cc7e1fe30edf13.JPG', 1, '2019-04-29 23:49:50', '2019-04-29 23:49:50'),
(328, 'TAMANNA ISLAM AIVEE', 'ALHAZ', 'SHOVA AKTER', '01835106075', 'Female', 'Islam', NULL, 'MATAP PUR', 'MELENG', 'N', 'D', 'school-student', 'sch-20190014', '14', 1, 8, NULL, '2019', 'front/img/students/5cc7e2e19755b14.JPG', 1, '2019-04-29 23:53:39', '2019-04-29 23:53:39'),
(329, 'MUNIA AKTER', 'ALI AHAMMAD', 'ANJU BEGUM', '01835106076', 'Female', 'Islam', NULL, 'SONAPUR', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190015', '15', 1, 8, NULL, '2019', 'front/img/students/5cc7e385e0ac015.JPG', 1, '2019-04-29 23:56:22', '2019-04-29 23:56:22'),
(330, 'AMOR SARKER', 'ADARI SARKER', 'LALITA RANI SARKER', '01835106077', 'Male', 'Hinduism', NULL, 'SHOLLA', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190016', '16', 1, 8, NULL, '2019', 'front/img/students/5cc7e45c9a53816.JPG', 1, '2019-04-29 23:59:56', '2019-04-29 23:59:56'),
(331, 'LAMIA AKTER', 'RATAN MIA', 'SUFIA', '01835106078', 'Female', 'Islam', NULL, 'SONAPUR', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190017', '17', 1, 8, NULL, '2019', 'front/img/students/5cc7e4f5380c617.JPG', 1, '2019-04-30 00:02:29', '2019-04-30 00:02:29'),
(332, 'SAMIMA AKTER', 'MD. TIPU MIA', 'BEAUTY AKTER', '01778589751', 'Female', 'Islam', NULL, 'MODONMAHANPUR', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190018', '18', 1, 8, NULL, '2019', 'front/img/students/5cc7e66a9e72518.JPG', 1, '2019-04-30 00:08:42', '2019-04-30 00:08:42'),
(333, 'NADI AKTER', 'MD. NAZIM UDDIN', 'BEAUTY AKTER', '01763505980', 'Female', 'Islam', NULL, 'MODONMAHANPUR', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190019', '19', 1, 8, NULL, '2019', 'front/img/students/5cc7e6fa84ac619.JPG', 1, '2019-04-30 00:11:06', '2019-04-30 00:11:06'),
(334, 'RUBAIYA AKTER', 'MD. RIPON', 'NABIHA AKTER', '01828780607', 'Female', 'Islam', NULL, 'SINGJOR', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190020', '20', 1, 8, NULL, '2019', 'front/img/students/5cc7e778b482320.JPG', 1, '2019-04-30 00:13:12', '2019-04-30 00:13:12'),
(335, 'CHANDAN BEPARI', 'SUDHIR BEPARI', 'JYATSNA BEPARI', '01828780608', 'Male', 'Hinduism', NULL, 'AZGURA', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190021', '21', 1, 8, NULL, '2019', 'front/img/students/5cc7e880843d221.JPG', 1, '2019-04-30 00:17:36', '2019-04-30 00:17:36'),
(336, 'Anjali Biswas', 'Nitto Gopal Biswas', 'Laxmi Rani Biswas', '01868293560', 'Female', 'Hinduism', NULL, 'Sholla', NULL, NULL, NULL, 'school-student', 'sch-20190022', '22', 1, 8, NULL, '2019', 'front/img/students/5d5cdfa5ebbe322.JPG', 1, '2019-08-21 00:07:34', '2019-08-21 00:07:34'),
(337, 'Onik Mandal', 'Onil Mandal', 'Benu Rani', '01824001209', 'Female', 'Hinduism', NULL, 'SHOLLA', 'SHOLLA', 'NAWABGANJ', 'DHAKA', 'school-student', 'sch-20190023', '23', 1, 8, NULL, '2019', 'front/img/students/5d5ce18e78efe23.JPG', 1, '2019-08-21 00:15:42', '2019-08-21 00:17:58'),
(338, 'Md Shiblu Kazi', 'Md Ohedul Kazi', 'Laila', '01728808607', 'Male', 'Islam', NULL, 'Modonmohanpur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190024', '24', 1, 8, NULL, '2019', 'front/img/students/5d5f7a8f9749824.JPG', 1, '2019-08-22 23:33:03', '2019-08-22 23:33:03'),
(339, 'Mariom Akter', 'Md Rashid Molla', 'Fulmati Begum', '01746786334', 'Female', 'Islam', NULL, 'Sholla', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190025', '25', 1, 8, NULL, '2019', 'front/img/students/5d5f7b2de45b025.JPG', 1, '2019-08-22 23:35:41', '2019-08-22 23:35:41'),
(340, 'Sabira Mahbuba Nisha', 'Arman Ali', 'Rekha Akter', '01784793278', 'Female', 'Islam', NULL, 'Sholla', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190026', '26', 1, 8, NULL, '2019', 'front/img/students/5d5f7ba80d10826.JPG', 1, '2019-08-22 23:37:44', '2019-08-22 23:37:44');
INSERT INTO `students` (`id`, `student_name`, `father_name`, `mother_name`, `guardian_mobile`, `gender`, `religion`, `birth_reg_number`, `village`, `post_office`, `thana`, `district`, `student_as`, `student_id`, `student_roll`, `class_id`, `section_id`, `study_group`, `session_year`, `student_image`, `published_status`, `created_at`, `updated_at`) VALUES
(341, 'Kazi Mahidul Islam', 'K M Shamsuddin', 'mrs mansura khatun', '01923839960', 'Male', 'Islam', NULL, 'Konda', 'Aona', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190027', '27', 1, 8, NULL, '2019', 'front/img/students/5d5f7cdd052b427.JPG', 1, '2019-08-22 23:42:53', '2019-08-22 23:42:53'),
(342, 'Jinia Isma Jui', 'Din Islam', 'Aleya Begum', '01867711593', 'Female', 'Islam', NULL, 'Khotiya', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190028', '28', 1, 8, NULL, '2019', 'front/img/students/5d5f7d62539da28.JPG', 1, '2019-08-22 23:45:06', '2019-08-22 23:45:06'),
(343, 'Hrittrik Roy', 'Milon Roy', 'Modhumala Roy', '01720672733', 'Male', 'Hinduism', NULL, 'Ajghora', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190029', '29', 1, 8, NULL, '2019', 'front/img/students/5d5f7e1ed724b29.JPG', 1, '2019-08-22 23:48:14', '2019-08-22 23:48:14'),
(344, 'Roksana Akter', 'Nur mia', 'Nargiz', '01782671993', 'Female', 'Islam', NULL, 'Nilamborpotti', 'Chandohor', 'Singair', 'Manikganj', 'school-student', 'sch-20190030', '30', 1, 8, NULL, '2019', 'front/img/students/5d5f7f706739430.JPG', 1, '2019-08-22 23:53:52', '2019-08-22 23:53:52'),
(345, 'Dipta Shil', 'Shukumar Shil', 'Kabita Rani Shil', '01731093798', 'Female', 'Hinduism', NULL, 'Sholla', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190031', '31', 1, 8, NULL, '2019', 'front/img/students/5d5f804778e0331.JPG', 1, '2019-08-22 23:57:27', '2019-08-22 23:57:27'),
(346, 'Tahmina Akter', 'Ataul Hoque', 'Rahima Khatun', '01782396912', 'Female', 'Islam', NULL, 'Singjhor', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190032', '32', 1, 8, NULL, '2019', 'front/img/students/5d5f80e53391532.JPG', 1, '2019-08-23 00:00:05', '2019-08-23 00:00:05'),
(347, 'Md Songbad Mahmud', 'MD Helal Uddin', 'Soniya Helal', '01826682092', 'Male', 'Islam', NULL, 'Chokoriya', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190033', '33', 1, 8, NULL, '2019', 'front/img/students/5d5fb4e99588d35.JPG', 1, '2019-08-23 00:03:58', '2019-08-23 03:42:01'),
(348, 'Bristy Akter', 'Khorshed Alom', 'Bokul Akter', '01760410885', 'Female', 'Islam', NULL, 'Singjhor', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190034', '34', 1, 8, NULL, '2019', 'front/img/students/5d5fb45057aab35.JPG', 1, '2019-08-23 00:09:38', '2019-08-23 03:39:28'),
(349, 'Rakayet hossen', 'Ukil Uddin', 'Ruma Begum', '01702042187', 'Male', 'Islam', NULL, 'Modonmohanpur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190035', '35', 1, 8, NULL, '2019', 'front/img/students/5d5fb94845c0c35.JPG', 1, '2019-08-23 03:43:30', '2019-08-23 04:00:40'),
(350, 'Sabbir Ahmed', 'Abdus Salam', 'Asma Benjir', '01720172521', 'Male', 'Islam', NULL, 'Singjhor', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190036', '36', 1, 8, NULL, '2019', 'front/img/students/5d5fb8db6edde36.JPG', 1, '2019-08-23 03:58:51', '2019-08-23 03:58:51'),
(351, 'Roksana Akter', 'Badarruddin', 'Aleya Khatun', '01849323152', 'Female', 'Islam', NULL, 'Sonapur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190037', '37', 1, 8, NULL, '2019', 'front/img/students/5d5fb9f65024837.JPG', 1, '2019-08-23 04:03:34', '2019-08-23 04:03:34'),
(352, 'Md Ayad Hossen', 'Helal Uddin', 'Asma Begum', '01715561006', 'Male', 'Islam', NULL, 'Modonmohanpur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190038', '38', 1, 8, NULL, '2019', 'front/img/students/5d5fba9e797e838.jpg', 1, '2019-08-23 04:06:22', '2019-08-23 04:06:22'),
(353, 'Trisha', 'Md Hasan Ali', 'Mrs Hasina Begum', '01852847698', 'Male', 'Islam', NULL, 'Khotiya', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190039', '39', 1, 8, NULL, '2019', 'front/img/students/5d5fbb2f0717639.JPG', 1, '2019-08-23 04:08:47', '2019-08-23 04:08:47'),
(354, 'Kajol', 'Md Kamrul Islam', 'Mukhseda Akter', '01884503270', 'Male', 'Islam', NULL, 'Khotiya', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190040', '40', 1, 8, NULL, '2019', 'front/img/students/5d5fbbd362e8b40.JPG', 1, '2019-08-23 04:11:31', '2019-08-23 04:11:31'),
(355, 'Dola Akter', 'Shakhawat Hossen', 'Shewly Begum', '01711574757', 'Female', 'Islam', NULL, 'Singjhor', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190041', '41', 1, 8, NULL, '2019', 'front/img/students/5d5fbc3f0189e41.JPG', 1, '2019-08-23 04:13:19', '2019-08-23 04:13:19'),
(356, 'Ismail Mia', 'Kuddus Ali', 'Hajera Khatun', '01862302934', 'Male', 'Islam', NULL, 'Anna', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190042', '42', 1, 8, NULL, '2019', 'front/img/students/5d5fbce825f5542.JPG', 1, '2019-08-23 04:16:08', '2019-08-23 04:16:08'),
(357, 'Farhana Hoque', 'Sorol Hoque', 'Rina Hoque', '01798116054', 'Female', 'Islam', NULL, 'Modonmohanpur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190043', '43', 1, 8, NULL, '2019', 'front/img/students/5d5fbd61dec1e43.JPG', 1, '2019-08-23 04:18:10', '2019-08-23 04:18:10'),
(358, 'Md Rifat Dewan', 'Md Kashem Dewan', 'Rafeja BEGUM', '01719013174', 'Male', 'Islam', NULL, 'East Bandail', 'Shayesta', 'Singair', 'Manikganj', 'school-student', 'sch-20190044', '44', 1, 8, NULL, '2019', 'front/img/students/5d5fbe650860044.JPG', 1, '2019-08-23 04:22:29', '2019-08-23 04:22:29'),
(359, 'Tamanna Akter', 'Tofajjal Hossen Khan', 'Shima AKTER', '01757192640', 'Female', 'Islam', NULL, 'East Bandail', 'shahrail', 'Singair', 'Manikganj', 'school-student', 'sch-20190046', '46', 1, 8, NULL, '2019', 'front/img/students/5d5fbee9e13ff46.JPG', 1, '2019-08-23 04:24:42', '2019-08-23 04:24:42'),
(360, 'Lamia Akter', 'Imdadul hOQUE', 'Najma Begum', '01883646069', 'Male', 'Islam', NULL, 'Singjhor', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190047', '47', 1, 8, NULL, '2019', 'front/img/students/5d5fbf64b325647.jpg', 1, '2019-08-23 04:26:44', '2019-08-23 04:26:44'),
(361, 'Ikramul Islam', 'Dolil Uddin', 'Ishom Tara', '01796389490', 'Female', 'Islam', NULL, 'Modonmohanpur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190048', '48', 1, 8, NULL, '2019', 'front/img/students/5d5fbfd9bee0248.JPG', 1, '2019-08-23 04:28:41', '2019-08-23 04:28:41'),
(362, 'Md Samiul Islam', 'Md ARSHED', 'Simu Akter', '01872202861', 'Male', 'Islam', NULL, 'Modonmohanpur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190049', '49', 1, 8, NULL, '2019', 'front/img/students/5d5fc04b6773249.JPG', 1, '2019-08-23 04:30:35', '2019-08-23 04:30:35'),
(363, 'Apon Kumer Shil', 'Sopon Kumer Shil', 'Dola Rani', '01998546440', 'Male', 'Hinduism', NULL, 'Sholla', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190050', '50', 1, 8, NULL, '2019', 'front/img/students/5d5fc0bc1527850.JPG', 1, '2019-08-23 04:32:28', '2019-08-23 04:32:28'),
(364, 'Hafsha Akter', 'Hasan Ali', 'Parvin Akter', '01882989754', 'Female', 'Islam', NULL, 'Modonmohanpur', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190051', '51', 1, 8, NULL, '2019', 'front/img/students/5d5fc10fd443651.JPG', 1, '2019-08-23 04:33:51', '2019-08-23 04:33:51'),
(365, 'Yasin Mia', 'Ali Akber', 'Sahela BEGUM', '01863293483', 'Female', 'Islam', NULL, 'Singjhor', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190052', '52', 1, 8, NULL, '2019', 'front/img/students/5d5fc1618c09852.JPG', 1, '2019-08-23 04:35:13', '2019-08-23 04:35:13'),
(366, 'Sonali Mandal', 'Liton Kumer', 'Surovi Mondal', '01784070081', 'Female', 'Islam', NULL, 'Sholla', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190054', '54', 1, 8, NULL, '2019', 'front/img/students/5d5fc22a9bba554.JPG', 1, '2019-08-23 04:38:34', '2019-08-23 04:38:34'),
(367, 'Shimla Khanom', 'Md Khobir Uddin', 'Rehana Akter', '01812182986', 'Female', 'Islam', NULL, 'Nilamborpotti', 'Chandohor', 'Singair', 'Manikganj', 'school-student', 'sch-20190055', '55', 1, 8, NULL, '2019', 'front/img/students/5d5fc28ebdf7a55.JPG', 1, '2019-08-23 04:40:14', '2019-08-23 04:40:14'),
(368, 'Labib Abdullah', 'Faruque Hossen', 'Libina AKTER', '01914246234', 'Male', 'Islam', NULL, 'Khotiya', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190056', '56', 1, 8, NULL, '2019', 'front/img/students/5d5fc37d5586656.jpg', 1, '2019-08-23 04:44:13', '2019-08-23 04:44:13'),
(369, 'Haidar Mia', 'Jalal Mia', 'Parvin', '01881961472', 'Male', 'Islam', NULL, 'Joymontop', 'Joymontop', 'Singair', 'Manikganj', 'school-student', 'sch-20190058', '58', 1, 8, NULL, '2019', 'front/img/students/5d5fc4136e43c58.JPG', 1, '2019-08-23 04:46:43', '2019-08-23 04:46:43'),
(370, 'Nur Hasan', 'Abdul Rashid', 'Nasrin Begum', '01718151987', 'Male', 'Islam', NULL, 'Konda', 'Sholla', 'Nawabganj', 'Dhaka', 'school-student', 'sch-20190059', '59', 1, 8, NULL, '2019', 'front/img/students/5d5fc4e2b042959.JPG', 1, '2019-08-23 04:50:10', '2019-08-23 04:50:10'),
(371, 'NABANITA GHOSH', 'SHYAMAL KUMAR GHOSH', 'SHANDYA GHOSH', '01838728829', 'Female', 'Hinduism', NULL, 'Khatia', NULL, NULL, NULL, 'college-student', 'col-201911301', '301', 4, 10, 'Business', '2019', 'front/img/students/5d73416164c0d301.JPG', 1, '2019-09-06 23:34:25', '2019-09-06 23:34:25');

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
  `present_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(4, 'Niranjon Kumar Sarkar', 'Male', NULL, 'Hinduism', '01929729920', NULL, 'Office-assistanta', 'front/img/stuff/5a18ff10b3a16Untitled-1 copy.jpg', 'Sholla, Nawabgonj, Dhaka-1320, Bangladesh', 'Sholla, Nawabgonj, Dhaka-1320, Bangladesh', 1, '2017-11-07 06:54:24', '2017-11-25 13:13:57'),
(5, 'BINOY KUMAR KIRTTONIA', 'Male', NULL, 'Hinduism', '01818115195', 'bcabag@yahoo.com', 'Assistant-librarian', 'front/img/stuff/5ba5febc1ebc6Binoy Kumar.jpg', 'VILL- PURATAN BANDURA, PO- HASNABAD, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'VILL- PURATAN BANDURA, PO- HASNABAD, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 0, '2018-09-22 02:35:08', '2018-09-22 02:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_educations`
--

CREATE TABLE `teacher_educations` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `b_ed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed_board` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `bed_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed_passing_year` date DEFAULT NULL,
  `masters` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_board` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters_passing_year` date DEFAULT NULL,
  `graduation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_board` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_passing_year` date DEFAULT NULL,
  `hsc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_board` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_passing_year` date DEFAULT NULL,
  `ssc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_board` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_passing_year` date DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_educations`
--

INSERT INTO `teacher_educations` (`id`, `teacher_id`, `b_ed`, `bed_subject`, `bed_board`, `bed_result`, `bed_passing_year`, `masters`, `masters_subject`, `masters_board`, `masters_result`, `masters_passing_year`, `graduation`, `graduation_subject`, `graduation_board`, `graduation_result`, `graduation_passing_year`, `hsc`, `hsc_group`, `hsc_board`, `hsc_result`, `hsc_passing_year`, `ssc`, `ssc_group`, `ssc_board`, `ssc_result`, `ssc_passing_year`, `designation`, `special_in`, `teacher_type`, `join_date`, `created_at`, `updated_at`) VALUES
(11, 28, 'B.ED', NULL, NULL, NULL, '2018-09-09', 'Masters', 'M.Com (Accounting)', 'Dhaka University', 'Second', '1991-01-01', 'Graduation', 'B.Com (Accounting)', 'Dhaka University', 'Second', '1990-01-01', 'HSC', 'Business Studies', 'Dhaka', '1st', '1987-01-01', 'SSC', 'Science', 'Dhaka', '1st', '1985-01-01', 'Principal', 'Business Studies', 'Parmanent', '1995-09-14', '2018-09-09 10:44:46', '2018-09-11 01:00:30'),
(13, 31, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'M.Com (Managment)', 'Dhaka University', 'Second', '1989-01-01', 'Graduation', 'B.Com (Hons) Managment', 'Dhaka University', 'Second', '1988-01-01', 'HSC', 'Commerce', 'DHAKA', 'Second', '1985-01-01', 'SSC', 'Commerce', 'DHAKA', '1st', '1983-01-01', 'Assistant-professor', 'Managment', 'Permanent', '1996-01-01', '2018-09-11 23:20:09', '2018-09-11 23:20:09'),
(14, 32, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'M.S.S (Political Science)', 'National University', 'Second', '1995-01-01', 'Graduation', 'B.S.S (Hons) Political Science', 'National University', 'Second', '1994-01-01', 'HSC', 'Science', 'Comilla', 'Second', '1991-01-01', 'SSC', 'Science', 'Comilla', '1st', '1989-01-01', 'Assistant-professor', 'Political Science', 'Permanent', '2000-04-18', '2018-09-15 23:57:40', '2018-09-15 23:57:40'),
(16, 33, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'English', 'National University', 'Second', '1996-01-01', 'Graduation', 'Humanaties', 'Dhaka University', 'Second', '1991-01-01', 'HSC', 'Science', 'DHAKA', 'Second', '1986-01-01', 'SSC', 'Science', 'DHAKA', 'DHAKA', '1984-01-01', 'Assistant-professor', 'English', 'Permanent', '2003-07-05', '2018-09-16 00:33:09', '2020-11-17 07:14:48'),
(17, 34, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', NULL, NULL, NULL, '1970-01-01', 'Graduation', 'B.Com (Accounting)', 'Dhaka University', 'Second', '2018-09-16', 'HSC', 'Science', 'DHAKA', 'Second', '2016-02-02', 'SSC', 'Science', 'DHAKA', '1st', '2018-01-01', 'Lecturer', 'Islanic History', 'Permanent', '2000-01-02', '2018-09-16 00:48:10', '2018-09-16 00:48:10'),
(18, 35, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'Economics', 'National University', 'Second', '1999-01-01', 'Graduation', 'Economics', 'National University', 'Second', '1998-01-01', 'HSC', 'Science', 'DHAKA', '1st', '1995-01-01', 'SSC', 'Science', 'DHAKA', '1st', '1993-01-01', 'Lecturer', 'Economics', 'Permanent', '2004-03-03', '2018-09-16 01:09:58', '2018-09-16 01:09:58'),
(19, 36, 'B.ED', NULL, NULL, NULL, '1970-12-31', 'Masters', 'Bangla', 'National University', 'Second', '2002-01-01', 'Graduation', 'Bangla (Hons)', 'National University', 'Second', '2001-01-01', 'HSC', 'HUMANITIES', 'DHAKA', '1st', '1997-01-01', 'SSC', 'HUMANITIES', 'DHAKA', 'DHAKA', '1994-01-01', 'Lecturer', 'Bangla', 'Permanent', '2009-06-25', '2018-09-16 01:19:43', '2018-09-17 10:25:28'),
(20, 37, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', NULL, NULL, NULL, '1970-01-01', 'Graduation', 'Computer Science & Engineering', 'Dhaka International University', '3.50', '2005-01-01', 'HSC', 'Science', 'DHAKA', '1st', '1999-01-01', 'SSC', 'Science', 'DHAKA', '1st', '1997-01-01', 'Lecturer', 'ICT', 'Permanent', '2011-10-16', '2018-09-20 03:45:39', '2018-09-20 03:45:39'),
(21, 38, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'M.Com (Accounting)', 'Chittagong University', 'Second', '1998-01-01', 'Graduation', 'B.Com(Hons) Accounting', 'Chittagong University', 'Second', '1994-01-01', 'HSC', 'Commerce', 'DHAKA', 'Second', '1989-01-01', 'SSC', 'Science', 'Comilla', 'Second', '1986-01-01', 'Lecturer', 'Accounting', 'Permanent', '2015-04-30', '2018-09-20 03:49:09', '2018-09-20 03:49:09'),
(22, 39, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'Mss( Social Work)', 'National University', 'Second', '2010-01-01', 'Graduation', 'Bss(Hons) Social Work', 'National University', 'Second', '2009-01-01', 'HSC', 'Commerce', 'DHAKA', '4.58', '2005-01-01', 'SSC', 'Commerce', 'DHAKA', '2.69', '2003-01-01', 'Lecturer', 'Social Work', 'Partime', '2015-04-30', '2018-09-21 22:31:25', '2018-09-21 22:31:25'),
(23, 40, 'B.ED', 'Arts', 'Dhaka University', 'Second', '1993-01-01', 'Masters', 'Arts', 'National University', 'Second', '1995-01-01', 'Graduation', 'Arts', 'Dhaka University', 'Second', '1984-01-01', 'HSC', 'HUMANITIES', 'DHAKA', 'Second', '1982-01-01', 'SSC', 'HUMANITIES', 'DHAKA', '1st', '1980-01-01', 'Assistant-Headmaster', 'English', 'Permanent', '1990-01-08', '2018-09-21 23:28:02', '2018-09-21 23:28:02'),
(24, 41, 'B.ED', 'Science Mathmatics, Physics', 'B.O.U', 'Second', '1995-01-01', 'Masters', NULL, NULL, NULL, '1970-01-01', 'Graduation', 'Science (Physics)', 'Dhaka University', 'Pass', '1987-01-01', 'HSC', 'Science', 'DHAKA', '1st', '1983-01-01', 'SSC', 'Science', 'DHAKA', '1st', '1981-01-01', 'Assistant-Teacher', 'Mathmatics, Physics', 'Permanent', '1991-01-01', '2018-09-21 23:48:49', '2018-09-21 23:48:49'),
(25, 42, 'B.ED', 'Social Science', 'I.E.R', 'Second', '1995-01-01', 'Masters', NULL, NULL, NULL, '1970-01-01', 'Graduation', 'Arts (Poltitical Science)', 'Dhaka University', '3rd', '1990-01-01', 'HSC', 'Science', 'DHAKA', 'Second', '1985-01-01', 'SSC', 'Science', 'DHAKA', '1st', '1985-01-01', 'Assistant-Teacher', 'English, Bangla, Mathmatics', 'Permanent', '1992-04-11', '2018-09-22 00:10:54', '2018-09-22 00:10:54'),
(26, 43, 'B.ED', 'Bangla, Philosophy, Social Science', 'National University', 'Second', '2004-01-01', 'Masters', NULL, NULL, NULL, '1970-01-01', 'Graduation', 'Arts (English)', 'Dhaka University', '3rd', '1991-01-01', 'HSC', 'Science', 'DHAKA', 'Second', '1989-01-01', 'SSC', 'Science', 'DHAKA', '1st', '1986-01-01', 'Assistant-Teacher', 'English', 'Permanent', '1993-04-03', '2018-09-22 00:30:14', '2018-09-22 00:30:14'),
(27, 44, 'B.ED', 'Arts', 'Open University', 'Second', '2000-01-01', 'Masters', 'Arts', 'National University', 'Second', '1995-01-01', 'Graduation', 'Managment', 'Dhaka University', '3rd', '1991-01-01', 'HSC', 'Commerce', 'DHAKA', 'Second', '1990-01-01', 'SSC', 'Science', 'DHAKA', '1st', '1987-01-01', 'Assistant-Teacher', 'Accounting, Bangla', 'Permanent', '1993-04-03', '2018-09-22 00:43:20', '2018-09-22 00:43:20'),
(28, 45, 'B.ED', 'English, Bangla', 'National University', 'Second', '2002-01-01', 'Masters', NULL, NULL, NULL, '1970-01-01', 'Graduation', 'Arts', 'Dhaka University', '3rd', '1988-01-01', 'HSC', 'Science', 'DHAKA', '3rd', '1986-01-01', 'SSC', 'Science', 'DHAKA', '1st', '1981-01-01', 'Assistant-Teacher', 'English', 'Permanent', '1993-04-03', '2018-09-22 00:58:27', '2018-09-22 00:58:27'),
(29, 46, 'B.ED', 'Islam', 'National University', 'pass', '2010-01-01', 'Masters', 'Hadis', 'Madrasha Board', 'Second', '1976-01-01', 'Graduation', 'Tafsir, Hadis, Arabic', 'Madrasha Board', '3rd', '1976-01-01', 'HSC', 'Quran, Hadis, Arabic', 'Madrasha Board', '1st', '1974-01-01', 'SSC', 'Quran, Fiqh, Bengoli', 'Madrasha Board', '1st', '1972-01-01', 'Assistant-Teacher', 'Islam Religon', 'Permanent', '1993-08-01', '2018-09-22 01:12:50', '2018-09-22 01:12:50'),
(30, 47, 'B.ED', 'Bangla', 'B.O.U', 'Second', '2002-01-01', 'Masters', 'ISLAMIC HISTORY & CULTARE', 'AsianUniversity', 'A-', '2011-01-01', 'Graduation', 'Bangla', 'Dhaka University', '3rd', '1992-01-01', 'HSC', 'HUMANITIES', 'DHAKA', 'Second', '1986-01-01', 'SSC', 'HUMANITIES', 'DHAKA', '1st', '1984-01-01', 'Assistant-Teacher', 'Bangla', 'Permanent', '1994-08-06', '2018-09-22 01:23:18', '2018-09-25 01:37:36'),
(31, 48, 'B.ED', 'Mathmatics, Geography', 'National University', '1st', '2000-01-01', 'Masters', NULL, NULL, NULL, '1970-01-01', 'Graduation', 'Science', 'National University', 'Second', '1994-01-01', 'HSC', 'Science', 'DHAKA', '1st', '1990-01-01', 'SSC', 'Science', 'DHAKA', '1st', '1988-01-01', 'Assistant-Teacher', 'Mathmatics, Geography', 'Permanent', '1997-05-24', '2018-09-22 01:33:56', '2018-09-22 01:33:56'),
(32, 49, 'B.ED', 'HUMANITIES', 'Asia University', '1st', '2007-01-01', 'Masters', NULL, NULL, NULL, '1970-01-01', 'Graduation', 'Humanaties', 'National University', '3rd', '1997-01-01', 'HSC', 'HUMANITIES', 'DHAKA', 'Second', '1994-01-01', 'SSC', 'Science', 'DHAKA', '1st', '1992-01-01', 'Assistant-Teacher', 'Agriculture', 'Permanent', '2001-01-01', '2018-09-22 02:11:16', '2018-09-22 02:11:16'),
(33, 50, 'B.ED', 'BANGLA, ENGLISH', 'UTTARA UNIVERSITY', 'Second', '2006-01-01', 'Masters', 'BANGLA', 'National University', 'Second', '2003-01-01', 'Graduation', 'B.A (HONS) BANGLA', 'National University', 'Second', '2001-01-01', 'HSC', 'HUMANITIES', 'DHAKA', '1st', '1998-01-01', 'SSC', 'HUMANITIES', 'DHAKA', '1st', '1995-01-01', 'Assistant-Teacher', 'BANGLA', 'Permanent', '2005-01-01', '2018-09-22 02:23:18', '2018-09-22 02:23:18'),
(34, 51, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'M.S.C ( BOTANY)', 'National University', 'Second', '2011-01-01', 'Graduation', 'B.SC', 'National University', 'Second', '2008-01-01', 'HSC', 'Science', 'DHAKA', '2.90', '2004-01-01', 'SSC', 'Science', 'DHAKA', '3.50', '2002-01-01', 'Assistant-laibrarian', 'SCIENCE', 'Permanent', '2010-07-15', '2018-09-22 02:46:50', '2018-09-22 02:46:50'),
(35, 52, 'B.ED', 'HUMANITIES', 'PRIVATE UNIVERSITY', '3.53', '2006-01-01', 'Masters', NULL, NULL, NULL, '1970-01-01', 'Graduation', 'B.SS', 'National University', 'Second', '2002-01-01', 'HSC', 'HUMANITIES', 'DHAKA', 'Second', '1999-01-01', 'SSC', 'HUMANITIES', 'DHAKA', 'Second', '1996-01-01', 'Assistant-Teacher', 'HINDU RELIGION', 'Permanent', '2014-06-19', '2018-09-22 03:04:47', '2018-09-22 03:04:47'),
(36, 53, 'B.ED', 'ENGLISH', 'National University', 'Second', '2007-01-01', 'Masters', 'ISLAMIC HISTORY & CULTARE', 'National University', 'Second', '2010-01-01', 'Graduation', 'HUMANITIES', 'National University', 'Second', '2005-01-01', 'HSC', 'HUMANITIES', 'DHAKA', 'Second', '2000-01-01', 'SSC', 'Science', 'DHAKA', 'Second', '1997-01-01', 'Assistant-Teacher', 'PHYSICAL EDUCATION & SPORTS', 'Permanent', '2014-06-22', '2018-09-22 03:28:35', '2018-09-22 03:28:35'),
(37, 54, 'B.ED', 'English', 'National University', '1st', '2016-01-01', 'Masters', 'English', 'National University', 'Second', '2006-01-01', 'Graduation', 'English', 'National University', 'Second', '2004-12-01', 'HSC', 'HUMANITIES', 'DHAKA', 'Second', '2000-01-01', 'SSC', 'HUMANITIES', 'DHAKA', '1st', '1998-01-01', 'Assistant-Teacher', 'English', 'Partime', '2010-11-01', '2018-09-22 03:50:21', '2018-09-22 03:50:21'),
(38, 55, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'English', 'National University', 'Second', '2013-01-01', 'Graduation', 'English', 'National University', 'Second', '2012-01-01', 'HSC', 'HUMANITIES', 'DHAKA', '4.50', '2007-01-01', 'SSC', 'HUMANITIES', 'DHAKA', '4.00', '2005-01-01', 'Lecturer', 'English', 'Partime', '2017-11-01', '2018-09-22 04:04:47', '2018-09-22 04:04:47'),
(39, 56, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'Managment', 'National University', '1st', '2010-01-01', 'Graduation', 'Managment', 'National University', 'Second', '2009-01-01', 'HSC', 'COMMERCE', 'DHAKA', '3.90', '2004-01-01', 'SSC', 'COMMERCE', 'DHAKA', 'DHAKA', '2002-01-01', 'Lecturer', 'PRODUCATION MANAGMENT AND MARKETING', 'PARTIME', '2007-07-01', '2018-09-22 04:30:27', '2018-10-08 02:01:25'),
(40, 57, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'HUMANITIES', 'ISLAMIC UNIVERSITY, KUSHTIA', '3.60', '2010-01-01', 'Graduation', 'Humanaties', 'Madrasha Board', '1st', '2007-01-01', 'HSC', 'HUMANITIES', 'Madrasha Board', '3.00', '2004-01-01', 'SSC', 'HUMANITIES', 'Madrasha Board', '3.67', '2002-01-01', 'Assistant-Teacher', 'ISLAMIC STUDIES', 'Permanent', '2013-08-13', '2018-09-22 04:41:57', '2018-09-22 04:41:57'),
(41, 58, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'M.Com (Accounting)', 'National University', 'Second', '2003-01-01', 'Graduation', 'B.Com (Hons) ACCOUNTING', 'National University', 'Second', '2002-01-01', 'HSC', 'Science', 'DHAKA', '1st', '1999-01-01', 'SSC', 'Science', 'DHAKA', '1st', '1995-01-01', 'Assistant-Teacher', 'Accounting', 'PARTIME', '2008-07-02', '2018-09-22 04:52:47', '2018-09-22 04:52:47'),
(42, 59, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'BOTANY', 'JAHANGIRNAGAR UNIVERSITY', '3.19', '2013-01-01', 'Graduation', 'BOTANY', 'JAHANGIRNAGAR UNIVERSITY', '3.26', '2012-01-01', 'HSC', 'Science', 'DHAKA', '4.80', '2007-01-01', 'SSC', 'Science', 'DHAKA', '5.00', '2005-01-01', 'Assistant-Teacher', 'SCIENCE, MATHMATICS', 'PARTIME', '2016-04-02', '2018-09-22 22:21:32', '2018-09-22 22:21:32'),
(43, 65, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'Zoology', 'Dhaka COLLEGE', 'Second', '2013-01-01', 'Graduation', 'Zoology', 'National University', 'Second', '2012-01-01', 'HSC', 'Science', 'DHAKA', '4.20', '2007-01-01', 'SSC', 'Science', 'DHAKA', 'DHAKA', '2005-01-01', 'Assistant-Teacher', 'Science', 'PARTIME', '2020-01-18', '2018-09-22 22:35:33', '2020-11-03 07:34:13'),
(44, 64, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'MSC', 'AMERICAN INTERNATIONAL UNIVERSITY-BANGLADESH', '3.64', '2016-01-01', 'Graduation', 'B.SC', 'Bangalore University', 'Second', '2013-01-01', 'HSC', 'Science', 'DHAKA', '4.70', '2007-01-01', 'SSC', 'Science', 'DHAKA', '4.69', '2005-01-01', 'Assistant-Teacher', 'Information & Communication Technology', 'Permanent', '2019-02-20', '2018-09-22 23:37:37', '2020-11-03 06:57:47'),
(45, 62, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', NULL, NULL, NULL, '1970-01-01', 'Graduation', 'English', 'National University', '3.03', '2014-01-01', 'HSC', 'BUSINESS STUDIES', 'DHAKA', '5.00', '2010-01-01', 'SSC', 'BUSINESS STUDIES', 'DHAKA', '5.00', '2008-01-01', 'Assistant-Teacher', 'English', 'PARTIME', '2018-01-15', '2018-09-22 23:47:51', '2018-09-22 23:47:51'),
(46, 63, 'B.ED', NULL, NULL, NULL, '1970-01-01', 'Masters', 'M.B.S', 'National University', 'Second', '2009-01-01', 'Graduation', 'B.B.S', 'National University', 'Second', '2007-01-01', 'HSC', 'COMMERCE', 'DHAKA', '2.80', '2003-01-01', 'SSC', 'COMMERCE', 'DHAKA', '2.88', '2001-01-01', 'Assistant-Teacher', 'Managment', 'PARTIME', '2018-01-29', '2018-09-22 23:57:26', '2018-09-22 23:57:26');

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
  `date_of_birth` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_status` tinyint(4) NOT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmanent_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_no` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_personals`
--

INSERT INTO `teacher_personals` (`id`, `name`, `father_name`, `mother_name`, `gender`, `blood_group`, `religion`, `marital_status`, `mobile`, `email`, `date_of_birth`, `image`, `teacher_status`, `present_address`, `parmanent_address`, `serial_no`, `created_at`, `updated_at`) VALUES
(28, 'Helal Uddin Ahmmed', 'Abdul Barek', 'Rahela Begum', 'Male', 'A+', 'Islam', 'Married', '01835822077', 'shollahighschool@gmail.com', '1969-11-26', 'front/img/teachers/5b949b70d06ce07-1 (113).jpg', 1, 'VILL- SINGHARA, PO- PATILJHAP, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'VILL- SINGHARA, PO- PATILJHAP, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 1, '2018-09-08 22:02:57', '2018-09-15 23:59:59'),
(31, 'Mohammad Kahinoor Islam', 'Md. Keramot Ali', 'Alkom Begum', 'Male', 'AB+', 'Islam', 'Married', '01924927292', 'kahinoorislam68@gmail.com', '1968-11-11', 'front/img/teachers/5b98a0d9e3dd8Kahinoor Islam.jpg', 1, 'Vill+Po- Meleng, Upazilla- Nawabganj, District- Dhaka.', 'Vill+Po- Meleng, Upazilla- Nawabganj, District- Dhaka.', 2, '2018-09-11 23:15:06', '2018-09-11 23:15:06'),
(32, 'Md. Helal Uddin', 'Late Md. Safi Ullah', 'Mrs. Nur Nahar', 'Male', 'A+', 'Islam', 'Married', '01718726912', 'uddinhelal646@gmail.com', '1974-01-01', 'front/img/teachers/5ba09e8bdc853Helal Uddin1.jpg', 1, 'Vill- Kashimpur, Po- Nawabganj, Upazilla- Nawabganj, District- Dhaka.', 'Vill- Kashimpur, Po- Nawabganj, Upazilla- Nawabganj, District- Dhaka.', 3, '2018-09-15 23:53:34', '2018-09-18 00:43:24'),
(33, 'Md. Abdur Rouf', 'Jalal Uddin Ahmed', 'Rokeya Begum', 'Male', '0 Negative', 'Islam', 'Married', '01832776486', 'roufmdabdur80@gmail.com', '1968-11-11', 'front/img/teachers/5b9df432b2528Abdur Rouf.jpg', 1, 'Vill- Khatia, Po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 'Vill- Khatia, Po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 4, '2018-09-16 00:12:02', '2018-11-04 23:37:01'),
(34, 'S.M Enamul Haque', 'sfsdfsdfsf', 'fsfsfsfsf', 'Male', 'vdfsd', 'Islam', 'Married', '01765581277', 'adeptsaiful@gmail.com', '1970-01-01', 'front/img/teachers/5b9dfc41698f2S M Enamul Haque.jpg', 1, NULL, 'dgdg', 5, '2018-09-16 00:46:25', '2018-09-16 00:46:25'),
(35, 'Mohammad Jahangir Alam', 'Mohammad Abdus Suqure', 'Ambia Begum', 'Male', 'B+', 'Islam', 'Married', '01714269391', 'Mohammadjahangiralam77@gmail.com', '1977-01-01', 'front/img/teachers/5b9dffbde02c0Jahangir-Alam.jpg', 1, 'Vill+Po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 'Vill+Po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 6, '2018-09-16 01:01:18', '2018-09-16 01:01:18'),
(36, 'Mosammat Asma Akhtar', 'Mohammad Nazim Uddin', 'Ayesha Khatun', 'Male', 'B+', 'Islam', 'Married', '01916995738', 'asmaakhtar79@gmail.com', '1979-10-10', 'front/img/teachers/5b9e032036f56Asma akhtar.JPG', 1, 'Vill- Khatia,Po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 'Vill- Khatia,Po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 7, '2018-09-16 01:15:44', '2018-09-16 01:15:44'),
(37, 'Mohammad Asaduzzaman', 'Mohammad Golam Mostofa', 'Begum Samsunnahar', 'Male', 'O+', 'Islam', 'Married', '01712408383', 'asadsir1982@gmail.com', '1982-02-01', 'front/img/teachers/5b9e06261dc2fAsaduzzaman.jpg', 1, 'Vill- Singjor, po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 'Vill- Singjor, po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 8, '2018-09-16 01:28:38', '2018-09-16 01:28:38'),
(38, 'Md. Lutful Karim', 'Late Fazlul Karim', 'Late Lutful Nesa', 'Male', 'AB+', 'Islam', 'Married', '01818615841', 'luthfulkarim787@gmail.com', '1971-03-05', 'front/img/teachers/5b9f3d9377deaLutful-Karim.jpg', 1, 'Vill- Sholla, Po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 'Vill- Mohadebpur, Po- Dala Bazer, Upazilla- Sadar, District- Lakshmipur.', 9, '2018-09-16 23:37:24', '2018-09-16 23:37:24'),
(39, 'Anzumanara Rema', 'Burhan Uddin', 'Shahanara Begum', 'Femal', 'B-', 'Islam', 'Married', '01724869236', 'anzumanararema@gmail.com', '1986-11-20', 'front/img/teachers/5ba5c27ed31c7Anzumanara Rema.jpg', 1, 'Vill+po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 'Vill+po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 10, '2018-09-21 22:18:10', '2018-09-21 22:18:10'),
(40, 'Narayan Chandra Sarker', 'Bipin Chandra Sarker', 'Bisaka Sarker', 'Male', 'AB+', 'Hinduism', 'Married', '01725775937', 'narayanchandrasarker65@gmail.com', '1965-01-04', 'front/img/teachers/5ba5d1d60fc0dNarayan Chandra.jpg', 1, 'Vill+Po- Bardhan para, Upazilla- Nawabgonj, District- Dhaka.', 'Vill+Po- Bardhan para, Upazilla- Nawabgonj, District- Dhaka.', 11, '2018-09-21 23:23:34', '2018-09-21 23:23:34'),
(41, 'NAZIR AHAMMED', 'MD. FAKIR CHAN', 'ANWARA BEGUM', 'Male', 'B+', 'Islam', 'Married', '01715522049', 'nazirahmmed28@gmail.com', '1966-09-15', 'front/img/teachers/5ba5d4e5e431bNazir Ahammed.jpg', 1, 'Vill- Singjor, Po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 'Vill- Singjor, Po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 12, '2018-09-21 23:36:38', '2018-09-21 23:36:38'),
(42, 'MD. ABDUL KARIM', 'MD. ALTAF HOSSAIN', 'HALIMA KHATUN', 'Male', 'AB+', 'Islam', 'Married', '01866000245', 'ak1559844@gmail.com', '1970-06-21', 'front/img/teachers/5ba5da9de24acKarim Sir.jpg', 1, 'Vill- Khatia, Po- Sholla- Upazilla- Nawabganj, District- Dhaka.', 'Vill- Khatia, Po- Sholla- Upazilla- Nawabganj, District- Dhaka.', 13, '2018-09-22 00:01:02', '2018-09-22 00:01:02'),
(43, 'Chandra Nath Bepari', 'Subal Bepari', 'Bishaka Rani  Bepari', 'Male', 'O+', 'Hinduism', 'Married', '01715677645', 'chanranathbepari51@gmail.com', '1970-04-21', 'front/img/teachers/5ba5df92c859dChandra Nath Bepary.jpg', 1, 'Vill+Po- Sholla, Upazilla- Nawabgonj, District- Dhaka.', 'Vill+Po- Sholla, Upazilla- Nawabgonj, District- Dhaka.', 14, '2018-09-22 00:22:10', '2018-09-22 00:22:10'),
(44, 'Shyamal Kumar Ghosh', 'Ranjit Kumar Ghosh', 'Alya Ghosh', 'Male', 'B+', 'Hinduism', 'Married', '01838728829', 'shyamalkumarghosh41@gmail.com', '1970-11-06', 'front/img/teachers/5ba5e2f7b400dShyamal Kumar Ghosh.jpg', 1, 'Vill- Khatia, Po- Sholla, Upazilla- Nawabgonj, District- Dhaka.', 'Vill- Khatia, Po- Sholla, Upazilla- Nawabgonj, District- Dhaka.', 15, '2018-09-22 00:36:40', '2018-09-22 00:36:40'),
(45, 'Jadab Chandra Mondal', 'Late- Bhabesh Chandra Mondal', 'Late Nani Bala Mondal', 'Male', 'O+', 'Hinduism', 'Married', '01815687638', 'jadabchandramondal098@gmail.com', '1965-12-31', 'front/img/teachers/5ba5e6cb23d97Jadab Chandra Mondal.jpg', 1, 'Vill+Po-Patiljhap, Upazilla- Nawabgonj, District- Dhaka.', 'Vill+Po-Patiljhap, Upazilla- Nawabgonj, District- Dhaka.', 16, '2018-09-22 00:52:59', '2018-09-22 00:52:59'),
(46, 'Md. Nurul Islam Ansari', 'Md. Amgad hossain', 'Shar Vhunu', 'Male', 'O+', 'Islam', 'Married', '01779197623', 'nurulislamansari5@gmail.com', '1960-09-01', 'front/img/teachers/5ba5e9c14f5b1Md. Nurul Islam Ansari.jpg', 0, 'Vill- Konda, Po- Awona, Upazlla- Nawabgonj, District- Dhaka.', 'Vill- Konda, Po- Awona, Upazlla- Nawabgonj, District- Dhaka.', 17, '2018-09-22 01:05:37', '2020-11-17 07:19:23'),
(47, 'Goutam Kumar Chakraborty', 'Himangshu Kumer Chakraborty', 'Shefali  Chakraborty', 'Male', 'B+', 'Hinduism', 'Married', '01718367238', 'goutamchakraborty5@gmail.com', '1968-10-09', 'front/img/teachers/5ba5ecd29d8b1Goutam KUmar.jpg', 1, 'Vill+Po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 'Vill+Po- Sholla, Upazilla- Nawabganj, District- Dhaka.', 18, '2018-09-22 01:18:42', '2018-09-25 01:34:57'),
(48, 'Profulla Kumar  Balo', 'Ganesh Chandra Balo', 'Amiya Rani Balo', 'Male', 'B+', 'Hinduism', 'Married', '01820187098', 'profullakumarbalo@gmail.com', '1973-01-11', 'front/img/teachers/5ba5ef5f82657Profulla Kumar Balo.jpg', 1, 'Vill+Po- Sholla, Upzilla- Nawabgonj, District- Dhaka.', 'Vill- Bhurakhali, Po- Tashulla Bangla BAzar, Upazilla-  Nawabgonj, District- Dhaka.', 19, '2018-09-22 01:29:35', '2018-09-22 01:29:35'),
(49, 'Lipi Yeasmin', 'Md. Abdur Rahman', 'Hosneara Begum', 'Femal', 'AB+', 'Islam', 'Married', '01914175819', 'lipiyeasmin2@gmail.com', '1976-01-03', 'front/img/teachers/5ba5f814e3811Lipi Yeasmin.jpg', 1, 'Kalacopa, Nawabgonj, Dhaka.', 'Vill- Dashakia, Po- Atia Dargah, Upazilla- Delduar, District- Dhaka.', 20, '2018-09-22 02:06:45', '2018-09-22 02:06:45'),
(50, 'LAVELY KHATUN', 'LUTFOR RAHAMAN', 'SHAHIDA BEGUM', 'Femal', 'B+', 'Islam', 'Married', '01714215223', 'lavelyjhatun42@gmail.com', '1980-03-04', 'front/img/teachers/5ba5fa8d827eeLavely Khatun.JPG', 1, 'VILL- SINGJOR, PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'VILL- SINGJOR, PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 21, '2018-09-22 02:17:17', '2018-09-22 02:17:17'),
(51, 'BINOY KUMAR KIRTTONIA', 'BISHWAJIT KIRTTONIA', 'KALPANA KIRTONIA', 'Male', NULL, 'Hinduism', 'Married', '01818115195', 'bcabag@yahoo.com', '1986-10-20', 'front/img/teachers/5ba600910bb90Binoy Kumar.jpg', 1, 'VILL- PURATAN BANDURA, PO- HASNABAD, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'VILL- PURATAN BANDURA, PO- HASNABAD, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 22, '2018-09-22 02:42:57', '2018-09-22 02:42:57'),
(52, 'SUKLA RANI MONDAL', 'JOYCHAN MONDAL', 'SARSWATI RANI MONDAL', 'Femal', NULL, 'Hinduism', 'Married', '01989042043', 'suklamondal@gmail.com', '1980-11-15', 'front/img/teachers/5ba60397921d9Sukla Rani Mondal.jpg', 1, 'VILL- KALAKOPA (RAZARAMPUR), PO+UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'VILL- CHANDRAKHOLA, PO- PATILJHAP, UPAZILA- NAWBGONJ, DISTRICT- DHAKA.', 23, '2018-09-22 02:55:51', '2018-09-22 02:55:51'),
(53, 'MAFIZUL ISLAM', 'FOYEZ ULLAH', 'ASMA AKTER', 'Male', 'O+', 'Islam', 'Married', '01734642103', 'ahmedmahafuz66@gmail.com', '1982-02-07', 'front/img/teachers/5ba60943a3522Mofizul Islam.jpg', 1, 'VILL- KHATIA, PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'VILL+PO- GOLAIDANGA, UPAZILLA- SINGAIR, DISTRICT- DHAKA.', 24, '2018-09-22 03:20:03', '2018-09-22 03:20:03'),
(54, 'AFROZA PARVIN', 'SHEIKH AFSER UDDIN', 'SAHERA BEGUM', 'Femal', 'A+', 'Islam', 'Married', '01884631611', 'afrozaparvin1983@gmail.com', '1983-11-25', 'front/img/teachers/5ba60eb20b077Afroza Parvin.jpg', 1, 'VILL-KHATIA, PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'VILL-KHATIA, PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 25, '2018-09-22 03:43:14', '2018-09-22 03:43:14'),
(55, 'SHAH ALI', 'LATE ABDUR RAZZAK KHAN', 'RAGIA BEGUM', 'Male', 'B+', 'Islam', 'Married', '01913098549', 'shahalinu09@gmail.com', '1989-02-25', 'front/img/teachers/5ba6132a3a7e0Sha Ali.jpg', 1, 'sholla, nawabgonj, Dhaka.', 'Vill- NORTH KUDALPUR, PO- GAREBERCHAR, UPAZILLA- GOSHAIRHAT, DISTRICT-SHAREATPUR.', 26, '2018-09-22 04:02:18', '2018-09-22 04:02:18'),
(56, 'TAMANNA PARVIN', 'YEASIN BAPARY', 'ASEYA BEGUM', 'Femal', 'O+', 'Islam', 'Married', '01858540169', 'tamannaparvin86@gmail.com', '1986-05-10', 'front/img/teachers/5ba6182a84454Tamanna Parvin.jpg', 1, 'VILL- SINGJOR, PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'VILL- SINGJOR, PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 27, '2018-09-22 04:23:39', '2018-09-22 04:23:39'),
(57, 'FATIMA PARVIN', 'ABDUL WAZED', 'SUFIA KHATUN', 'Femal', 'B+', 'Islam', 'Married', '01926423063', 'fatimaparvin1987@gmail.com', '1987-11-05', 'front/img/teachers/5ba61b1cc9bdeFatima Parvin.jpg', 1, 'VILL+PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'VILL+PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 28, '2018-09-22 04:36:12', '2018-09-22 04:36:12'),
(58, 'SUNIL KUMAR SARKER', 'RATAN CHANDRA SARKER', 'LILABATI SARKER', 'Male', 'A+', 'Hinduism', 'Married', '01818600709', 'sunilsarker79@gmail.com', '1979-07-05', 'front/img/teachers/5ba61e4de17b9Sunil kumar Sarker.jpg', 1, 'Vill- JHANJHANIA, PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'Vill- JHANJHANIA, PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 30, '2018-09-22 04:49:50', '2018-09-22 04:49:50'),
(59, 'MD. RASHEDUL HASAN', 'MD. HAFIZ UDDIN', 'JABEDA BEGUM', 'Male', 'A+', 'Islam', 'Married', '01922448236', 'rashedulhasan1990@gmail.com', '1990-07-10', 'front/img/teachers/5ba7134328c49Rashedul Islam.jpg', 1, 'VILL+PO- BARDHANPARA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'VILL+PO- BARDHANPARA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 33, '2018-09-22 22:15:00', '2018-09-22 22:15:00'),
(60, 'SATHI RANI SARKER', 'ANUKUL CHANDRA SARKER', 'NAMITA RANI SARKER', 'Femal', 'AB+', 'Hinduism', 'Married', '01884725790', 'sathisarker@gmail.com', '1987-08-10', 'front/img/teachers/5ba72731e8f0cSATHI RANI.jpg', 1, 'VILL+PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 'VILL+PO- SHOLLA, UPAZILLA- NAWABGONJ, DISTRICT- DHAKA.', 31, '2018-09-22 22:32:07', '2018-09-23 03:08:37'),
(62, 'DEBOSREE RANI SHIL', 'DULAL CHANDRA SHIL', 'JHARNA RANI SHIL', 'Femal', 'B+', 'Hinduism', 'Married', '01705309436', 'debosreeshil436@gmail.com', '1992-04-25', 'front/img/teachers/5ba7289cf1268Debosree rani shil.jpg', 1, 'VILL+PO- SHOLLA, UPAZILLA-NAWABGONJ, DISTRICT-DHAKA.', 'VILL+PO- SHOLLA, UPAZILLA-NAWABGONJ, DISTRICT-DHAKA.', 35, '2018-09-22 23:46:05', '2018-09-22 23:46:05'),
(63, 'RUMA AKTER', 'MD. BADSHA MIA', 'NASRIN BEGUM', 'Femal', 'O+', 'Islam', 'Married', '01636102506', 'rumaakter1985m@gmail.com', '1985-07-20', 'front/img/teachers/5ba72a905a9f1Ruma Akter.jpg', 1, 'VILL+PO- SHOLLA, UPAZILLA-NAWABGONJ, DISTRICT- DHAKA.', 'VILL+PO- SHOLLA, UPAZILLA-NAWABGONJ, DISTRICT- DHAKA.', 36, '2018-09-22 23:54:24', '2018-09-22 23:54:24'),
(64, 'Md. Hamidur Rahman Ron', 'Samsul Islam', 'Mahila Begum', 'Male', 'b+', 'Islam', 'Married', '01718013196', 'hamidur.ramman786@gmail.com', '1988-11-27', 'front/img/teachers/5fa14fd11ee76rana.jpg', 1, 'Vill+Post: South Jamsha, Thana: Singair Dist: Manikganj', 'Vill+Post: South Jamsha, Thana: Singair Dist: Manikganj\r\nNational Id: 146 729 9903', 34, '2020-11-03 01:06:14', '2020-11-17 07:29:04'),
(65, 'Md Humayun Khan', 'Md Samsuddin khan', 'Hasina Begom', 'Male', 'ab+', 'Islam', 'Unmarried', '01632343590', 'khanhumayun05@gmail.com', '1990-03-22', 'front/img/teachers/5fa1579b92432humm.jpg', 1, 'vill+post:South Balukhandho\r\np.s: Nawabganj\r\nDist: Dhaka', 'vill+post:South Balukhandho\r\np.s: Nawabganj\r\nDist: Dhaka', 37, '2020-11-03 07:14:03', '2020-11-17 08:40:05');

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
(1, 'admin', '01687835849', 'adeptsaiful@gmail.com', '$2y$10$BF6ba7m2d.YyPgu9e/eW1.rTa8jOp2H0s7anSH6qSzccmY44ifc8m', 'puewqHGCXwhm8KN90mHL03i9Op4EexnVH7TfWIDkdnYXs5E9jiX9NYCHGSJ7', '2017-10-24 06:28:43', '2017-11-17 23:34:17');

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
  ADD KEY `lecture_class_section_id` (`section_id`),
  ADD KEY `lecturs_teacher_id` (`teacher_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_personal_education` (`teacher_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alumni_students`
--
ALTER TABLE `alumni_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class_of_schools`
--
ALTER TABLE `class_of_schools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `class_sections`
--
ALTER TABLE `class_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `meritorious_students`
--
ALTER TABLE `meritorious_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school_info_rules`
--
ALTER TABLE `school_info_rules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `speeches`
--
ALTER TABLE `speeches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=372;

--
-- AUTO_INCREMENT for table `stuffs`
--
ALTER TABLE `stuffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_educations`
--
ALTER TABLE `teacher_educations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `teacher_personals`
--
ALTER TABLE `teacher_personals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

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
  ADD CONSTRAINT `lecture_class_section_id` FOREIGN KEY (`section_id`) REFERENCES `class_sections` (`id`),
  ADD CONSTRAINT `lecturs_teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_personals` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `student_class_section_id` FOREIGN KEY (`section_id`) REFERENCES `class_sections` (`id`),
  ADD CONSTRAINT `students_classId` FOREIGN KEY (`class_id`) REFERENCES `class_of_schools` (`id`);

--
-- Constraints for table `teacher_educations`
--
ALTER TABLE `teacher_educations`
  ADD CONSTRAINT `teacher_personal_education` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_personals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
