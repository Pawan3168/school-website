-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 08:05 PM
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
-- Database: `bds_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activity_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `created_at`) VALUES
(1, 'bds_admin', '33e4fe2d042cd64c29ff8c2907bb0286', '2024-10-04 20:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `album_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cover_image_id` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`album_id`, `title`, `description`, `cover_image_id`, `created_on`, `updated_on`) VALUES
(1, 'Diyo Making', 'An album showcasing the Diyo making process and event.', 7, '2024-11-05 18:15:18', '2024-11-05 18:15:18'),
(2, 'Mandala Making', 'A collection of images showcasing the art of Mandala making.', 16, '2024-11-05 18:59:10', '2024-11-05 18:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `carousel_slides`
--

CREATE TABLE `carousel_slides` (
  `slide_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel_slides`
--

INSERT INTO `carousel_slides` (`slide_id`, `title`, `subtitle`, `description`, `image_id`, `order`) VALUES
(1, 'Field', 'Trips', 'We organize regular field trips and tours, enhancing hands-on learning experiences in history, science, nature, and culture.', 2, 1),
(2, 'School', 'Premises', 'Our spacious campus features modern classrooms, labs, a library, sports facilities, and secure playgrounds for a conducive learning environment.', 1, 2),
(3, 'Annual', 'Programs', 'We host various annual programs, including cultural celebrations and workshops, allowing students to showcase talents and engage with the community.', 3, 3),
(4, 'Lab', 'Facilities', 'Our well-equipped labs for Physics, Chemistry, Biology, and Computer Science provide hands-on experience with modern tools and safety equipment.', 4, 4),
(5, 'Extracurricular', 'Activities', 'We offer diverse extracurricular activities, including sports and arts, nurturing creativity, leadership, and teamwork among students.', 5, 5),
(6, 'Physical', 'Activities', 'Emphasizing sports and physical education, we provide various sports with dedicated coaches and well-maintained facilities for student fitness and discipline.', 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `is_past_event` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `alt_text` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `filename`, `alt_text`, `caption`, `uploaded_on`) VALUES
(1, 'assets/images/img1.jpg', 'Image of the school premises', 'Our well-maintained campus features modern classrooms and facilities.', '2024-11-05 17:33:50'),
(2, 'assets/images/img2.jpg', 'Image of a field trip', 'Students participating in a hands-on learning field trip.', '2024-11-05 17:33:50'),
(3, 'assets/images/img3.jpg', 'Image of an annual program', 'Students showcasing their talents during the annual program.', '2024-11-05 17:33:50'),
(4, 'assets/images/img4.jpg', 'Image of lab facilities', 'Well-equipped labs for Physics, Chemistry, Biology, and Computer Science.', '2024-11-05 17:33:50'),
(5, 'assets/images/img5.jpg', 'Image of extracurricular activities', 'Diverse extracurricular activities nurturing creativity and teamwork.', '2024-11-05 17:33:50'),
(6, 'assets/images/img6.jpg', 'Image of physical activities', 'Students engaging in sports and physical education.', '2024-11-05 17:33:50'),
(7, 'assets/images/album/DiyoMaking/1.jpg', 'Diyo Making Image', 'Diyo Making', '2024-11-05 18:13:19'),
(8, 'assets/images/album/DiyoMaking/2.jpg', 'Diyo Making Image', 'Diyo Making', '2024-11-05 18:13:19'),
(9, 'assets/images/album/DiyoMaking/3.jpg', 'Diyo Making Image', 'Diyo Making', '2024-11-05 18:13:19'),
(10, 'assets/images/album/DiyoMaking/4.jpg', 'Diyo Making Image', 'Diyo Making', '2024-11-05 18:13:19'),
(11, 'assets/images/album/DiyoMaking/5.jpg', 'Diyo Making Image', 'Diyo Making', '2024-11-05 18:13:19'),
(12, 'assets/images/album/DiyoMaking/6.jpg', 'Diyo Making Image', 'Diyo Making', '2024-11-05 18:13:19'),
(13, 'assets/images/album/DiyoMaking/7.jpg', 'Diyo Making Image', 'Diyo Making', '2024-11-05 18:13:19'),
(14, 'assets/images/album/DiyoMaking/8.jpg', 'Diyo Making Image', 'Diyo Making', '2024-11-05 18:13:19'),
(15, 'assets/images/album/DiyoMaking/9.jpg', 'Diyo Making Image', 'Diyo Making', '2024-11-05 18:13:19'),
(16, 'assets/images/album/MandalaMaking/1.jpg', 'Mandala Making Image 1', 'Mandala Making Image 1', '2024-11-05 18:58:26'),
(17, 'assets/images/album/MandalaMaking/2.jpg', 'Mandala Making Image 2', 'Mandala Making Image 2', '2024-11-05 18:58:26'),
(18, 'assets/images/album/MandalaMaking/3.jpg', 'Mandala Making Image 3', 'Mandala Making Image 3', '2024-11-05 18:58:26'),
(19, 'assets/images/album/MandalaMaking/4.jpg', 'Mandala Making Image 4', 'Mandala Making Image 4', '2024-11-05 18:58:26'),
(20, 'assets/images/album/MandalaMaking/5.jpg', 'Mandala Making Image 5', 'Mandala Making Image 5', '2024-11-05 18:58:26'),
(21, 'assets/images/album/MandalaMaking/6.jpg', 'Mandala Making Image 6', 'Mandala Making Image 6', '2024-11-05 18:58:26'),
(22, 'assets/images/album/MandalaMaking/7.jpg', 'Mandala Making Image 7', 'Mandala Making Image 7', '2024-11-05 18:58:26'),
(23, 'assets/images/album/MandalaMaking/8.jpg', 'Mandala Making Image 8', 'Mandala Making Image 8', '2024-11-05 18:58:26'),
(24, 'assets/images/album/MandalaMaking/9.jpg', 'Mandala Making Image 9', 'Mandala Making Image 9', '2024-11-05 18:58:26'),
(25, 'assets/images/album/MandalaMaking/10.jpg', 'Mandala Making Image 10', 'Mandala Making Image 10', '2024-11-05 18:58:26'),
(26, 'assets/images/album/MandalaMaking/11.jpg', 'Mandala Making Image 11', 'Mandala Making Image 11', '2024-11-05 18:58:26'),
(27, 'assets/images/album/MandalaMaking/12.jpg', 'Mandala Making Image 12', 'Mandala Making Image 12', '2024-11-05 18:58:26'),
(28, 'assets/images/album/MandalaMaking/13.jpg', 'Mandala Making Image 13', 'Mandala Making Image 13', '2024-11-05 18:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE `introduction` (
  `intro_id` int(11) NOT NULL,
  `heading` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `large_image_id` int(11) DEFAULT NULL,
  `small_image_id_1` int(11) DEFAULT NULL,
  `small_image_id_2` int(11) DEFAULT NULL,
  `medium_image_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `nav_id` int(11) NOT NULL,
  `label` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `album_id`, `image_id`, `caption`, `order`, `uploaded_on`) VALUES
(1, 1, 7, 'Diyo Making Image 1', 1, '2024-11-05 18:15:59'),
(2, 1, 8, 'Diyo Making Image 2', 2, '2024-11-05 18:15:59'),
(3, 1, 9, 'Diyo Making Image 3', 3, '2024-11-05 18:15:59'),
(4, 1, 10, 'Diyo Making Image 4', 4, '2024-11-05 18:15:59'),
(5, 1, 11, 'Diyo Making Image 5', 5, '2024-11-05 18:15:59'),
(6, 1, 12, 'Diyo Making Image 6', 6, '2024-11-05 18:15:59'),
(7, 1, 13, 'Diyo Making Image 7', 7, '2024-11-05 18:15:59'),
(8, 1, 14, 'Diyo Making Image 8', 8, '2024-11-05 18:15:59'),
(9, 1, 15, 'Diyo Making Image 9', 9, '2024-11-05 18:15:59'),
(10, 2, 16, 'Mandala Making Image 1', 1, '2024-11-05 19:00:42'),
(11, 2, 17, 'Mandala Making Image 2', 2, '2024-11-05 19:00:42'),
(12, 2, 18, 'Mandala Making Image 3', 3, '2024-11-05 19:00:42'),
(13, 2, 19, 'Mandala Making Image 4', 4, '2024-11-05 19:00:42'),
(14, 2, 20, 'Mandala Making Image 5', 5, '2024-11-05 19:00:42'),
(15, 2, 21, 'Mandala Making Image 6', 6, '2024-11-05 19:00:42'),
(16, 2, 22, 'Mandala Making Image 7', 7, '2024-11-05 19:00:42'),
(17, 2, 23, 'Mandala Making Image 8', 8, '2024-11-05 19:00:42'),
(18, 2, 24, 'Mandala Making Image 9', 9, '2024-11-05 19:00:42'),
(19, 2, 25, 'Mandala Making Image 10', 10, '2024-11-05 19:00:42'),
(20, 2, 26, 'Mandala Making Image 11', 11, '2024-11-05 19:00:42'),
(21, 2, 27, 'Mandala Making Image 12', 12, '2024-11-05 19:00:42'),
(22, 2, 28, 'Mandala Making Image 13', 13, '2024-11-05 19:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) DEFAULT NULL,
  `permissions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vision_mission_values`
--

CREATE TABLE `vision_mission_values` (
  `section_id` int(11) NOT NULL,
  `section_name` enum('Vision','Mission','Core Values') DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `cover_image_id` (`cover_image_id`);

--
-- Indexes for table `carousel_slides`
--
ALTER TABLE `carousel_slides`
  ADD PRIMARY KEY (`slide_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`intro_id`),
  ADD KEY `large_image_id` (`large_image_id`),
  ADD KEY `small_image_id_1` (`small_image_id_1`),
  ADD KEY `small_image_id_2` (`small_image_id_2`),
  ADD KEY `medium_image_id` (`medium_image_id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `vision_mission_values`
--
ALTER TABLE `vision_mission_values`
  ADD PRIMARY KEY (`section_id`),
  ADD KEY `image_id` (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carousel_slides`
--
ALTER TABLE `carousel_slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
  MODIFY `intro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vision_mission_values`
--
ALTER TABLE `vision_mission_values`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`) ON DELETE SET NULL;

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`cover_image_id`) REFERENCES `images` (`image_id`) ON DELETE SET NULL;

--
-- Constraints for table `carousel_slides`
--
ALTER TABLE `carousel_slides`
  ADD CONSTRAINT `carousel_slides_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`) ON DELETE SET NULL;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`) ON DELETE SET NULL;

--
-- Constraints for table `introduction`
--
ALTER TABLE `introduction`
  ADD CONSTRAINT `introduction_ibfk_1` FOREIGN KEY (`large_image_id`) REFERENCES `images` (`image_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `introduction_ibfk_2` FOREIGN KEY (`small_image_id_1`) REFERENCES `images` (`image_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `introduction_ibfk_3` FOREIGN KEY (`small_image_id_2`) REFERENCES `images` (`image_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `introduction_ibfk_4` FOREIGN KEY (`medium_image_id`) REFERENCES `images` (`image_id`) ON DELETE SET NULL;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`album_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `photos_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`) ON DELETE SET NULL;

--
-- Constraints for table `vision_mission_values`
--
ALTER TABLE `vision_mission_values`
  ADD CONSTRAINT `vision_mission_values_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
