-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 10:43 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ia.sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `background_id` int(11) NOT NULL,
  `background_img` varchar(255) NOT NULL,
  `background_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`background_id`, `background_img`, `background_status`) VALUES
(1, '5_48.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_summary` text NOT NULL,
  `news_content` text NOT NULL,
  `news_created` date NOT NULL,
  `news_updated` date NOT NULL,
  `news_release` date NOT NULL,
  `news_image1` varchar(255) DEFAULT NULL,
  `news_image2` varchar(255) NOT NULL,
  `news_image3` varchar(255) NOT NULL,
  `news_image4` varchar(255) NOT NULL,
  `news_image5` varchar(255) NOT NULL,
  `news_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `user_id`, `category_id`, `news_title`, `news_summary`, `news_content`, `news_created`, `news_updated`, `news_release`, `news_image1`, `news_image2`, `news_image3`, `news_image4`, `news_image5`, `news_status`) VALUES
(1, 2, 8, 'buku buku baku', 'nklanjbfea', 'asdeawasdw', '2018-08-08', '2018-08-08', '2018-08-08', NULL, '', '', '', '', 0),
(2, 2, 8, 'baku jurnal', 'buku buku', 'bukubuku', '2018-08-09', '2018-08-09', '2018-08-09', NULL, '', '', '', '', 0),
(3, 4, 8, '', 'ini adalah berita tentang', '<p>ini adalah berita tentang gambar dkk</p>\r\n', '2018-08-09', '0000-00-00', '2018-08-10', 'Web-Mutiara-Hadits-Shahih-Bukhari-Muslim-320x360.png', '5_48.png', '', '6193cbec4942b31376c47c63b5e1b59c.png', '39261285-mecca-wallpapers.jpg', 0),
(4, 2, 8, '', 'asddffe', '<p>faefragtrg</p>\r\n', '2018-08-09', '0000-00-00', '2018-08-09', '608594.jpg', 'blue_mosque-wallpaper-1366x768.jpg', '', 'mosque-ap.jpg', 'Pf6DUGe-mecca-wallpaper.jpg', 0),
(5, 5, 8, '', 'asudhyegakhn', '<p>ajbskdbyejamb dau</p>\r\n', '2018-08-09', '0000-00-00', '2018-08-14', 'mosque-ap.jpg', 'Pf6DUGe-mecca-wallpaper.jpg', 'thumb-1920-355006.jpg', 'blue_mosque-wallpaper-1366x768.jpg', '608594.jpg', 0),
(6, 5, 8, '', 'buku buku', '<p>asdfghhjjkk</p>\r\n', '2018-08-09', '0000-00-00', '2018-08-07', 'city_turkey_istanbul_sultan_ahmet_mosque-t2.jpg', 'JEwi9ng-mecca-wallpaper.jpg', 'mosque-ap.jpg', 'Pf6DUGe-mecca-wallpaper.jpg', 'thumb-1920-608594.jpg', 0),
(7, 4, 8, '', 'awwdasefadx', '<p>asddfdaffgadggsaef</p>\r\n', '2018-08-09', '2018-08-09', '2018-08-11', '4a44538c22ab7d2722fe28af2b949a7f2.jpg', '5_482.png', '400px-Broom_icon_svg2.png', '6193cbec4942b31376c47c63b5e1b59c2.png', '142167183816401863032.png', 0),
(8, 5, 8, 'apaaja', 'ini adalah berita', '<p>berita ini berisi buku</p>\r\n', '2018-08-09', '2018-08-09', '2018-08-12', '4a44538c22ab7d2722fe28af2b949a7f.jpg', '5_48.png', '400px-Broom_icon_svg.png', '6193cbec4942b31376c47c63b5e1b59c.png', '14216718381640186303.png', 0),
(9, 5, 11, 'Startup Baru Kitabisa.com', 'Merupakan startup', '<p>Berbasis Crowd Funding</p>\r\n', '2018-08-09', '0000-00-00', '2018-08-31', 'IMG_20180724_195828.jpg', '1521012162-kompetisi-hidup_1521012162-b.jpg', 'trash-can-24015_960_720.png', '400px-Broom_icon_svg.png', '6193cbec4942b31376c47c63b5e1b59c.png', 0),
(10, 5, 10, 'berternak menggunakan', 'cakep', '<p>mantaffff</p>\r\n', '2018-08-10', '0000-00-00', '2018-08-18', '010b7ac8e586f666b2e68ea934d26c99.jpg', '797319ed0e059bd4615d57f6fc86c414.jpg', 'cute-panda-hd.jpg', 'LRM_EXPORT_20180130_151044.jpg', 'Screenshot_2018-03-10-19-38-22-716_com_google_android_youtube.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`category_id`, `category_name`) VALUES
(8, 'buku asalam'),
(9, 'programming'),
(10, 'peternakan'),
(11, 'crowd funding');

-- --------------------------------------------------------

--
-- Table structure for table `news_tag`
--

CREATE TABLE `news_tag` (
  `newstag_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_id` int(11) NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `partner_image` varchar(255) NOT NULL,
  `partner_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partner_id`, `partner_name`, `partner_image`, `partner_link`) VALUES
(2, 'ugm', '400px-Broom_icon_svg1.png', 'www.ugm.ac.id'),
(3, '', '', ''),
(4, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `person_email` varchar(255) NOT NULL,
  `front_degree` varchar(11) NOT NULL,
  `back_degree` varchar(11) NOT NULL,
  `last_education` varchar(255) NOT NULL,
  `person_company` varchar(255) NOT NULL,
  `person_website` varchar(255) NOT NULL,
  `person_priority` int(11) NOT NULL,
  `person_image` varchar(255) NOT NULL,
  `person_position` varchar(255) NOT NULL,
  `person_description` text NOT NULL,
  `person_linkedin` varchar(255) NOT NULL,
  `person_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(255) NOT NULL,
  `program_description` text NOT NULL,
  `program_image` varchar(255) NOT NULL,
  `timeline_link` varchar(255) NOT NULL,
  `program_level` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`, `program_description`, `program_image`, `timeline_link`, `program_level`) VALUES
(1, '1001 startup', 'acara ini merupakan gagasan pemerintah untuk mengembangkan kreatifitas', '', 'startup.com', 1),
(2, 'internship eds', 'merupakan program magang', 'hands-304398_960_720.png', 'internship/event_2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `startup`
--

CREATE TABLE `startup` (
  `startup_id` int(11) NOT NULL,
  `startup_name` varchar(255) NOT NULL,
  `startup_description` text NOT NULL,
  `startup_weburl` varchar(255) NOT NULL,
  `startup_status` varchar(30) NOT NULL,
  `startup_category` varchar(255) NOT NULL,
  `startup_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startup`
--

INSERT INTO `startup` (`startup_id`, `startup_name`, `startup_description`, `startup_weburl`, `startup_status`, `startup_category`, `startup_image`) VALUES
(1, 'accesible.com', 'ini adalah startup fahmi', 'www.accesible', 'inactive', 'crowd funding', ''),
(2, 'belajarngaji', 'ini adalah startup untuk mempelajar alquran', 'www.belajarngaji.com', 'inactive', 'islam', '');

-- --------------------------------------------------------

--
-- Table structure for table `startup_founder`
--

CREATE TABLE `startup_founder` (
  `sf_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `startup_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `timeline_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `timeline_name` varchar(255) NOT NULL,
  `timeline_description` text NOT NULL,
  `timeline_start` date NOT NULL,
  `timeline_end` date NOT NULL,
  `registration_link` varchar(255) NOT NULL,
  `timeline_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`timeline_id`, `program_id`, `timeline_name`, `timeline_description`, `timeline_start`, `timeline_end`, `registration_link`, `timeline_image`) VALUES
(3, 1, '1001 Startup', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris orci odio, mollis et lorem sit amet, facilisis feugiat metus. Integer sed mi egestas, ultrices enim non, condimentum odio. Aenean tortor tellus, sodales sed diam aliquet, mollis sollicitudin nibh. Maecenas libero purus, feugiat ac arcu ut, dignissim ultricies diam. Etiam non nisi dolor. Vestibulum ultricies justo odio, eu interdum nunc vulputate non. Nam ut dapibus nulla. Quisque maximus in magna sed mollis. Pellentesque non ex ultrices quam bibendum elementum. Donec nec maximus urna. In consectetur, felis et vestibulum tempus, felis erat facilisis sapien, non tincidunt lorem leo a justo.\r\n\r\nDuis ut neque posuere, pulvinar sem a, venenatis odio. In non maximus lacus, quis pretium sem. Ut et condimentum ipsum. Maecenas rhoncus velit eu tellus semper, a venenatis turpis tempus. Nullam accumsan a odio vehicula accumsan. Nullam quis odio at nulla feugiat commodo id quis felis. Suspendisse iaculis tellus nulla, vel ultricies ante placerat non.\r\n\r\nSuspendisse fringilla turpis id dolor imperdiet dignissim. Sed lectus tortor, convallis molestie feugiat nec, venenatis non erat. Cras in justo eget felis mollis aliquam. Proin blandit nisi aliquam molestie ultrices. In sit amet est in lorem mattis dictum sed nec sapien. Curabitur lacinia et diam a elementum. Duis dui eros, euismod vel metus vitae, dapibus egestas ante. Phasellus aliquet justo vitae erat convallis, ac luctus quam porta. Phasellus nec viverra lacus.\r\n\r\nPellentesque consequat, sem at suscipit consectetur, risus felis tincidunt mauris, non faucibus sem est et mi. Vestibulum sit amet mi urna. Donec in pulvinar est, sed auctor mi. In hendrerit ante metus, eu rutrum felis scelerisque et. Nulla diam neque, eleifend id semper vel, tincidunt ac tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vestibulum id magna in sagittis. Nam fermentum mattis neque vitae aliquam. Aliquam nisl eros, convallis non malesuada quis, auctor sit amet leo. Donec placerat, orci in pellentesque commodo, lectus nisi dapibus nisl, interdum facilisis urna turpis in elit. Aenean magna magna, congue ac ultrices vel, gravida eu neque. Donec et diam sed velit aliquet tempus eget non nunc. Ut eu nulla et arcu tempor maximus.\r\n\r\nMorbi dignissim turpis tellus, et dapibus ante condimentum at. Pellentesque vitae diam elementum, ultrices risus a, pellentesque justo. In sed tellus et eros cursus rhoncus. Curabitur facilisis, tellus a molestie porttitor, sem eros volutpat lorem, ut lobortis turpis diam vitae nunc. Donec ac eleifend neque. Etiam mollis faucibus massa. Etiam venenatis diam eu finibus tempus. Quisque leo tortor, ullamcorper eu dui nec, dictum tempus tortor. Ut tempus, quam et tempus mattis, ex odio fermentum mauris, tincidunt interdum est magna sit amet ipsum. Cras risus velit, vulputate facilisis urna vel, porttitor scelerisque dolor. Morbi purus urna, malesuada eget quam in, bibendum blandit justo. Donec commodo aliquam lectus, finibus aliquam lorem vestibulum iaculis. Vestibulum magna nulla, laoreet non nulla at, consequat tristique mi. Fusce efficitur finibus cursus.', '2018-08-11', '2018-08-18', 'startup.com', 'e03c2d98a913e2c20832ce17c676e9d5_200x200.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_level` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_email`, `user_level`, `user_image`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', 'Select Role', 'thumb-1920-355006.jpg'),
(2, 'supervisor', 'f746c1c89a0836db532f4fbec857f52ee163a812', 'superviser@gmail.com', 'supervisor', ''),
(4, 'ggantara', 'asdf', 'g.gantara7@gmail.com', 'operator', ''),
(5, 'damskuy', '1234', 'damskuy@gmail.com', 'operator', 'JEwi9ng-mecca-wallpaper.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`background_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `news_tag`
--
ALTER TABLE `news_tag`
  ADD PRIMARY KEY (`newstag_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `startup`
--
ALTER TABLE `startup`
  ADD PRIMARY KEY (`startup_id`);

--
-- Indexes for table `startup_founder`
--
ALTER TABLE `startup_founder`
  ADD PRIMARY KEY (`sf_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`timeline_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `background_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news_tag`
--
ALTER TABLE `news_tag`
  MODIFY `newstag_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `startup`
--
ALTER TABLE `startup`
  MODIFY `startup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `startup_founder`
--
ALTER TABLE `startup_founder`
  MODIFY `sf_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `timeline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
