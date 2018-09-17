-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2018 at 01:47 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.19

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
  `background_status` varchar(20) NOT NULL,
  `permission_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`background_id`, `background_img`, `background_status`, `permission_status`) VALUES
(6, 'bmw_e90_deep_concave_black_helicopter_94623_3840x2160.jpg', 'none', ''),
(7, 'sunset_autumn_river_trees_118215_3840x2400.jpg', 'selected', ''),
(8, 'bmw_e90_deep_concave_black_helicopter_94623_3840x2160.jpg', 'none', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(255) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_status`) VALUES
(1, 'AGRICULTURAL TECHNOLOGY', ''),
(2, 'AGRICULTURE', ''),
(3, 'ECONOMICS', '');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `major_id` int(255) NOT NULL,
  `faculty_id` int(255) NOT NULL,
  `major_name` varchar(255) NOT NULL,
  `major_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`major_id`, `faculty_id`, `major_name`, `major_status`) VALUES
(1, 1, 'Agriculture Engineering', ''),
(2, 1, 'Food & Agricultural Product Technology', '');

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
  `news_status` tinyint(1) NOT NULL,
  `permission_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `user_id`, `category_id`, `news_title`, `news_summary`, `news_content`, `news_created`, `news_updated`, `news_release`, `news_image1`, `news_image2`, `news_image3`, `news_image4`, `news_image5`, `news_status`, `permission_status`) VALUES
(1, 2, 8, 'buku buku baku', 'nklanjbfea', 'asdeawasdw', '2018-08-08', '2018-08-08', '2018-08-08', NULL, '', '', '', '', 0, ''),
(2, 2, 8, 'baku jurnal', 'buku buku', 'bukubuku', '2018-08-09', '2018-08-09', '2018-08-09', NULL, '', '', '', '', 0, ''),
(3, 4, 8, '', 'ini adalah berita tentang', '<p>ini adalah berita tentang gambar dkk</p>\r\n', '2018-08-09', '0000-00-00', '2018-08-10', 'Web-Mutiara-Hadits-Shahih-Bukhari-Muslim-320x360.png', '5_48.png', '', '6193cbec4942b31376c47c63b5e1b59c.png', '39261285-mecca-wallpapers.jpg', 0, ''),
(4, 2, 8, '', 'asddffe', '<p>faefragtrg</p>\r\n', '2018-08-09', '0000-00-00', '2018-08-09', '608594.jpg', 'blue_mosque-wallpaper-1366x768.jpg', '', 'mosque-ap.jpg', 'Pf6DUGe-mecca-wallpaper.jpg', 0, ''),
(5, 5, 8, '', 'asudhyegakhn', '<p>ajbskdbyejamb dau</p>\r\n', '2018-08-09', '0000-00-00', '2018-08-14', 'mosque-ap.jpg', 'Pf6DUGe-mecca-wallpaper.jpg', 'thumb-1920-355006.jpg', 'blue_mosque-wallpaper-1366x768.jpg', '608594.jpg', 0, ''),
(6, 5, 8, '', 'buku buku', '<p>asdfghhjjkk</p>\r\n', '2018-08-09', '0000-00-00', '2018-08-07', 'city_turkey_istanbul_sultan_ahmet_mosque-t2.jpg', 'JEwi9ng-mecca-wallpaper.jpg', 'mosque-ap.jpg', 'Pf6DUGe-mecca-wallpaper.jpg', 'thumb-1920-608594.jpg', 0, ''),
(7, 4, 8, '', 'awwdasefadx', '<p>asddfdaffgadggsaef</p>\r\n', '2018-08-09', '2018-08-09', '2018-08-11', '4a44538c22ab7d2722fe28af2b949a7f2.jpg', '5_482.png', '400px-Broom_icon_svg2.png', '6193cbec4942b31376c47c63b5e1b59c2.png', '142167183816401863032.png', 0, ''),
(8, 5, 8, 'apaaja', 'ini adalah berita', '<p>berita ini berisi buku</p>\r\n', '2018-08-09', '2018-08-09', '2018-08-12', '4a44538c22ab7d2722fe28af2b949a7f.jpg', '5_48.png', '400px-Broom_icon_svg.png', '6193cbec4942b31376c47c63b5e1b59c.png', '14216718381640186303.png', 0, ''),
(9, 5, 11, 'Startup Baru Kitabisa.com', 'Merupakan startup', '<p>Berbasis Crowd Funding</p>\r\n', '2018-08-09', '0000-00-00', '2018-08-31', 'IMG_20180724_195828.jpg', '1521012162-kompetisi-hidup_1521012162-b.jpg', 'trash-can-24015_960_720.png', '400px-Broom_icon_svg.png', '6193cbec4942b31376c47c63b5e1b59c.png', 0, ''),
(10, 5, 10, 'berternak menggunakan', 'cakep', '<p>mantaffff</p>\r\n', '2018-08-10', '0000-00-00', '2018-08-18', '010b7ac8e586f666b2e68ea934d26c99.jpg', '797319ed0e059bd4615d57f6fc86c414.jpg', 'cute-panda-hd.jpg', 'LRM_EXPORT_20180130_151044.jpg', 'Screenshot_2018-03-10-19-38-22-716_com_google_android_youtube.png', 1, ''),
(11, 7, 11, 'aplikasi baru', 'asdfdfg', '', '2018-08-25', '0000-00-00', '2018-08-31', NULL, '', '', '', '', 0, ''),
(12, 7, 11, 'aplikasi baru', 'asdfdfg', '', '2018-08-25', '2018-08-25', '2018-08-31', NULL, '', '', '', '', 0, ''),
(13, 6, 9, 'berita baru', '', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p><img alt=\"\" src=\"/ia_ugm/assets/kcfinder/upload/images/buran.jpg\" style=\"height:297px; width:500px\" /></p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2018-09-07', '0000-00-00', '2018-09-08', 'astro.jpg', '', '', '', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`category_id`, `category_name`, `category_status`) VALUES
(8, 'buku asalam', ''),
(9, 'programming', ''),
(10, 'peternakan', ''),
(11, 'crowd funding', '');

-- --------------------------------------------------------

--
-- Table structure for table `news_tag`
--

CREATE TABLE `news_tag` (
  `newstag_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `newstag_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_tag`
--

INSERT INTO `news_tag` (`newstag_id`, `news_id`, `tag_id`, `newstag_status`) VALUES
(1, 1, 1, ''),
(2, 1, 2, ''),
(14, 12, 1, ''),
(15, 12, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_id` int(11) NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `partner_image` varchar(255) NOT NULL,
  `partner_link` varchar(255) DEFAULT NULL,
  `partner_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partner_id`, `partner_name`, `partner_image`, `partner_link`, `partner_status`) VALUES
(2, 'ugm', 'logougm.png', 'www.ugm.ac.id', ''),
(3, 'kibar', 'kibar.png', 'kibar.id', ''),
(4, 'ia-ugm', 'logo_ia.png', 'innovative-academy.ugm.ac.id', ''),
(5, 'iwak', 'iwak7.png', 'iwak.id', ''),
(6, 'iwak', 'iwak71.png', 'www.ugm.ac.id', ''),
(7, 'gaksa', 'a380.jpg', 'innovative-academy.ugm.ac.id', '');

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
  `person_level` varchar(255) NOT NULL,
  `person_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `first_name`, `last_name`, `person_email`, `front_degree`, `back_degree`, `last_education`, `person_company`, `person_website`, `person_priority`, `person_image`, `person_position`, `person_description`, `person_linkedin`, `person_level`, `person_status`) VALUES
(1, 'gaksa', 'gantara', 'g.gantara@gmail.com', 'dr.', 'Sp.Ok', 'universitas gadjah mada', 'kibar', 'www.gaksa.com', 1, 'main@2x.png', 'founder', 'merupakan lorem ipsum', 'www.linkedin.com', 'mentor', ''),
(2, 'damar', 'kurniawan', 'damskuy@email.com', '', 'se', 'universitas indonesia', '', '', 2, 'dasm.jpg', 'Logistic', 'asemeleh asemeleh', 'www.linkedin.com/damar', 'staff', ''),
(3, 'fahmi', 'husaen', 'fahmi@gmail.com', 'dr.', 's.pd', 'universitas gadjah mada', 'aksesibel', 'fahmihusaen.com', 1, 'dd.png', '', 'fahmi handsome', 'www.linkedin.com/fahmi', 'mentor', ''),
(5, 'fahmi', 'husaen', 'fahmi@gmail.com', 'dr.', 's.pd', '', '', '', 3, 'Masjid-Transparent-Image.png', 'Supervisor', 'mantaps', 'www.linkedin.com/fahmi', 'staff', ''),
(6, 'fahmi', 'husaen', 'fahmi@gmail.com', 'dr.', 's.pd', 'universitas gadjah mada', 'aksesibel', 'fahmihusaen.com', 2, 'tom_square.png', '', 'fahmi tampan berprestasi', 'www.linkedin.com/fahmi', 'mentor', ''),
(7, 'fahmi', 'husaen', 'fahmi@gmail.com', 'dr.', 's.pd', 'universitas gadjah mada', 'aksesibel', 'fahmihusaen.com', 3, 'images.png', '', 'fahmi euy', 'www.linkedin.com/fahmi', 'mentor', ''),
(8, 'fahmi', 'husaen', 'fahmi@gmail.com', 'dr.', 's.pd', 'universitas gadjah mada', 'aksesibel', 'fahmihusaen.com', 1, 'tom_square1.png', '', 'fahmi', 'www.linkedin.com/fahmi', 'mentor', '');

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
  `program_level` int(255) NOT NULL,
  `program_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`, `program_description`, `program_image`, `timeline_link`, `program_level`, `program_status`) VALUES
(1, '1001 startup', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisi consectetur, commodo nulla ac, facilisis tellus. Sed ut odio viverra, cursus lorem et, tempus tellus. Sed lacinia mi sit amet porttitor sodales. Aenean tincidunt justo sed cursus euismod. Duis sed accumsan nunc, in viverra lectus. Ut nec posuere tortor. Vestibulum aliquam mi faucibus interdum pharetra. Cras eleifend metus vel erat consectetur, sed tincidunt eros rutrum.', 'Gerakan-Nasional-1000-Startup-Digital.jpg', 'https://1000startupdigital.id/i/', 1, ''),
(2, 'Belajar Ngoding', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisi consectetur, commodo nulla ac, facilisis tellus. Sed ut odio viverra, cursus lorem et, tempus tellus. Sed lacinia mi sit amet porttitor sodales. Aenean tincidunt justo sed cursus euismod. Duis sed accumsan nunc, in viverra lectus. Ut nec posuere tortor. Vestibulum aliquam mi faucibus interdum pharetra. Cras eleifend metus vel erat consectetur, sed tincidunt eros rutrum.\r\n\r\n', 'Pf6DUGe-mecca-wallpaper.jpg', '', 1, ''),
(3, 'internship eds', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisi consectetur, commodo nulla ac, facilisis tellus. Sed ut odio viverra, cursus lorem et, tempus tellus. Sed lacinia mi sit amet porttitor sodales. Aenean tincidunt justo sed cursus euismod. Duis sed accumsan nunc, in viverra lectus. Ut nec posuere tortor. Vestibulum aliquam mi faucibus interdum pharetra. Cras eleifend metus vel erat consectetur, sed tincidunt eros rutrum.\r\n\r\n', 'thumb-1920-608594.jpg', '', 2, ''),
(4, 'program', '', 'buku-55ec11ebc322bda015e786f2.jpg', '', 2, ''),
(5, 'program eds', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisi consectetur, commodo nulla ac, facilisis tellus. Sed ut odio viverra, cursus lorem et, tempus tellus. Sed lacinia mi sit amet porttitor sodales. Aenean tincidunt justo sed cursus euismod. Duis sed accumsan nunc, in viverra lectus. Ut nec posuere tortor. Vestibulum aliquam mi faucibus interdum pharetra. Cras eleifend metus vel erat consectetur, sed tincidunt eros rutrum.\r\n\r\n', 'trash-can-24015_960_720.png', '', 4, ''),
(6, 'presentasi', 'presentasi', 'astro.jpg', 'https://1000startupdigital.id/i/', 1, 'Accepted');

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
  `startup_image` varchar(255) NOT NULL,
  `permission_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startup`
--

INSERT INTO `startup` (`startup_id`, `startup_name`, `startup_description`, `startup_weburl`, `startup_status`, `startup_category`, `startup_image`, `permission_status`) VALUES
(1, 'Lunasin', 'ini adalah startup fahmi', 'www.accesible', 'active', 'crowd funding', 'lunasin2.png', ''),
(2, 'Iwak', 'ini adalah startup yang menghubungkan para pengusaha ikan', 'www.iwak.id', 'active', 'e-commerce', 'iwak7.png', ''),
(3, 'Calova', 'Explore your passion!', 'www.calova.id', 'active', 'mantaps', 'calova3.png', ''),
(4, 'hipstime', 'Explore your passion!', 'www.hipstime.id', 'active', 'e-commerce', 'hipstime.png', ''),
(5, 'Lunasin', 'Explore your passion!', 'lunasin.id', 'active', 'e-commerce', 'lunasin21.png', ''),
(6, 'accesible', 'Explore your passion!', 'lunasin.id', 'active', 'mantaps', 'h9x44gpd1k6glptfehb0_18434.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `startup_founder`
--

CREATE TABLE `startup_founder` (
  `sf_id` int(11) NOT NULL,
  `startup_id` int(11) NOT NULL,
  `major_id` int(255) NOT NULL,
  `faculty_id` int(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `sf_position` varchar(50) NOT NULL,
  `sf_image` varchar(255) NOT NULL,
  `sf_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startup_founder`
--

INSERT INTO `startup_founder` (`sf_id`, `startup_id`, `major_id`, `faculty_id`, `first_name`, `last_name`, `sf_position`, `sf_image`, `sf_status`) VALUES
(2, 1, 2, 1, 'gaksa', 'gantara', 'founder', 'program-bg02-9x8.png', ''),
(3, 2, 1, 1, 'Gaksa', 'Gantara', 'CTO', 'astro.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(255) NOT NULL,
  `tag_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `tag_name`, `tag_status`) VALUES
(1, 'startup', ''),
(2, 'enterpreneur', ''),
(3, 'Programming', '');

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
  `timeline_image` varchar(255) NOT NULL,
  `timeline_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`timeline_id`, `program_id`, `timeline_name`, `timeline_description`, `timeline_start`, `timeline_end`, `registration_link`, `timeline_image`, `timeline_status`) VALUES
(3, 1, '1001 Startup', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris orci odio, mollis et lorem sit amet, facilisis feugiat metus. Integer sed mi egestas, ultrices enim non, condimentum odio. Aenean tortor tellus, sodales sed diam aliquet, mollis sollicitudin nibh. Maecenas libero purus, feugiat ac arcu ut, dignissim ultricies diam. Etiam non nisi dolor. Vestibulum ultricies justo odio, eu interdum nunc vulputate non. Nam ut dapibus nulla. Quisque maximus in magna sed mollis. Pellentesque non ex ultrices quam bibendum elementum. Donec nec maximus urna. In consectetur, felis et vestibulum tempus, felis erat facilisis sapien, non tincidunt lorem leo a justo.\r\n\r\nDuis ut neque posuere, pulvinar sem a, venenatis odio. In non maximus lacus, quis pretium sem. Ut et condimentum ipsum. Maecenas rhoncus velit eu tellus semper, a venenatis turpis tempus. Nullam accumsan a odio vehicula accumsan. Nullam quis odio at nulla feugiat commodo id quis felis. Suspendisse iaculis tellus nulla, vel ultricies ante placerat non.\r\n\r\nSuspendisse fringilla turpis id dolor imperdiet dignissim. Sed lectus tortor, convallis molestie feugiat nec, venenatis non erat. Cras in justo eget felis mollis aliquam. Proin blandit nisi aliquam molestie ultrices. In sit amet est in lorem mattis dictum sed nec sapien. Curabitur lacinia et diam a elementum. Duis dui eros, euismod vel metus vitae, dapibus egestas ante. Phasellus aliquet justo vitae erat convallis, ac luctus quam porta. Phasellus nec viverra lacus.\r\n\r\nPellentesque consequat, sem at suscipit consectetur, risus felis tincidunt mauris, non faucibus sem est et mi. Vestibulum sit amet mi urna. Donec in pulvinar est, sed auctor mi. In hendrerit ante metus, eu rutrum felis scelerisque et. Nulla diam neque, eleifend id semper vel, tincidunt ac tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vestibulum id magna in sagittis. Nam fermentum mattis neque vitae aliquam. Aliquam nisl eros, convallis non malesuada quis, auctor sit amet leo. Donec placerat, orci in pellentesque commodo, lectus nisi dapibus nisl, interdum facilisis urna turpis in elit. Aenean magna magna, congue ac ultrices vel, gravida eu neque. Donec et diam sed velit aliquet tempus eget non nunc. Ut eu nulla et arcu tempor maximus.\r\n\r\nMorbi dignissim turpis tellus, et dapibus ante condimentum at. Pellentesque vitae diam elementum, ultrices risus a, pellentesque justo. In sed tellus et eros cursus rhoncus. Curabitur facilisis, tellus a molestie porttitor, sem eros volutpat lorem, ut lobortis turpis diam vitae nunc. Donec ac eleifend neque. Etiam mollis faucibus massa. Etiam venenatis diam eu finibus tempus. Quisque leo tortor, ullamcorper eu dui nec, dictum tempus tortor. Ut tempus, quam et tempus mattis, ex odio fermentum mauris, tincidunt interdum est magna sit amet ipsum. Cras risus velit, vulputate facilisis urna vel, porttitor scelerisque dolor. Morbi purus urna, malesuada eget quam in, bibendum blandit justo. Donec commodo aliquam lectus, finibus aliquam lorem vestibulum iaculis. Vestibulum magna nulla, laoreet non nulla at, consequat tristique mi. Fusce efficitur finibus cursus.', '2018-08-11', '2018-08-18', 'startup.com', 'e03c2d98a913e2c20832ce17c676e9d5_200x200.png', 'Accepted'),
(4, 5, 'internship', '', '2018-09-13', '2018-09-25', '', 'hands-304398_960_720.png', ''),
(5, 5, 'internship', '', '2018-09-15', '2018-09-20', '', '39261285-mecca-wallpapers.jpg', ''),
(6, 5, '1001 Startup', 'adsdw', '2018-09-22', '2018-09-24', '', 'books-25154_960_7201.png', ''),
(13, 5, 'aruka kanata', 'asderf', '2018-09-19', '2018-09-20', '', 'books-25154_960_720.png', ''),
(14, 3, 'super', 'asd', '2018-09-27', '2018-09-29', '', 'cup-620897_960_720.png', ''),
(15, 6, 'asdefaew', 'asede', '2018-09-18', '2018-09-21', '', '14216718381640186303.png', '');

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
  `user_status` varchar(50) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_email`, `user_level`, `user_status`, `user_image`) VALUES
(2, 'supervisor', 'f746c1c89a0836db532f4fbec857f52ee163a812', 'superviser@gmail.com', 'supervisor', '', ''),
(5, 'damskuy', '1234', 'damskuy@gmail.com', 'operator', '', 'JEwi9ng-mecca-wallpaper.jpg'),
(6, 'gaksa', '3da541559918a808c2402bba5012f6c60b27661c', 'g.gantara@gmail.com', 'supervisor', 'Pending', '5_48.png'),
(7, 'tesadmin', 'f10e2821bbbea527ea02200352313bc059445190', 'admin@email.com', 'admin', '', 'images.png'),
(8, 'ggantara', 'f10e2821bbbea527ea02200352313bc059445190', 'g.gantara7@gmail.com', 'supervisor', '', 'tom_square1.png'),
(9, 'damskuy', 'f10e2821bbbea527ea02200352313bc059445190', 'damar@gmail.com', 'operator', '', 'pelukan_(1).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`background_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`major_id`);

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
  MODIFY `background_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `major_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news_tag`
--
ALTER TABLE `news_tag`
  MODIFY `newstag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `startup`
--
ALTER TABLE `startup`
  MODIFY `startup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `startup_founder`
--
ALTER TABLE `startup_founder`
  MODIFY `sf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `timeline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
