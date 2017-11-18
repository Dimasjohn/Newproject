-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 04:20 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schools`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `cpassword` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `comment` varchar(1024) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `email`, `phone`, `password`, `cpassword`, `category`, `comment`) VALUES
(1, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(2, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(3, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(4, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(5, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(6, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(7, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(8, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(9, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(10, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(11, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(12, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(13, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(14, 'JOHN', 'dimasjohn141@gmail.com', '', '', '', '', 'yes'),
(15, 'mami', 'm@gmail.com', '', '', '', '', 'yes welcom'),
(16, 'mami', 'm@gmail.com', '', '', '', '', 'yes welcom'),
(17, 'Dameng', 'd@gmail.com', '', '', '', '', 'yes.welcome'),
(18, 'eze', 'eze@gmail.coom', '', '', '', '', 'welcome'),
(19, 'mami', 'dimasjohn141@gmail.com', '98789', '111', '111', '', 'dew'),
(20, 'mami', 'dimasjohn141@gmail.com', '98789', '111', '111', '', 'dew'),
(21, 'mami', 'dimasjohn141@gmail.com', '909999', '111', 'ssss', '', 'eeee'),
(22, 'magit', 'jerrymagit@gmail.com', '08164690079', '1234', '1234', '', 'ddddddddddddddddddddddddddd'),
(23, 'magit', 'jerrymagit@gmail.com', '08164690079', '1234', '1234', '', 'ddddddddddddddddddddddddddd'),
(24, 'sule', 'ddddddfgdfhhjjjj@gmail.com', '1123456', '111', '111', 'farmer', 'yes'),
(25, 'Faith', 'faith@gmail.com', '090786676', '1234', '1234', 'farmer', 'Good day to you all');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `id` int(250) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `locations` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `images` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `locations`, `type`, `images`) VALUES
(1, 'Plateau State University, Bokkos', 'Located in Bokkos LGA Plateau State  , Around Ndar', 'Tertiary institution ', ''),
(2, 'University of jos', 'Located in Jos North Plateau State Along bauchi ringroad', 'Tertiary institution ', ''),
(3, 'Federal College of Forestry jos ', 'Jos North, Bauchi road', 'Tertiary institution ', ''),
(4, 'Obasanjo Model school', 'Along Old Airport Road ,opposite Avis Restaurant', 'Primary School', ''),
(5, 'Nigerian college of accountancy', 'Jos', 'Tertiary institution', ''),
(6, 'First Choice Model Academy', 'Opp Solomon Lar Park', 'Secondary ', ''),
(8, 'College of Arts Science and Remedial Studies ', 'Kurgwi', 'PrIvate Tertiary Institution', ''),
(9, 'Plateau State Polytechnic', 'Barkin Ladi', 'Public Tertiary Institution', ''),
(10, 'College Of Education Gindiri', 'Mangu LGA , Gindiri', 'Public Tertiary Institution', ''),
(11, 'College Of Agriculture, Garkawa ', 'Mikang, Garkawa', 'Public Tertiary Institution', ''),
(12, 'College Of Nursing and Midwifery, Vom', 'Jos South LGA, Vom', 'Public Tertiary Institution', ''),
(13, 'College Of Health Technology, Pankshin', 'Pankshin', 'Public Tertiary Institution', ''),
(14, 'College Of Health Technology, Zawan', 'Jos South LGA, Zawan', 'Public Tertiary Institution', ''),
(15, 'GSS HEI Rayfield', 'Rayfield', 'Public Secondary Schools', ''),
(16, 'Government Technical College, BUTECHS', 'Jos South LGA, Bukuru', 'Public Secondary School', ''),
(17, 'Government Sec. School Du', 'Jos South LGA, DU', 'Public Secondary School', ''),
(18, 'Government Sec.School, Giring', 'Jos South LGA, ', 'Public Secondary School', ''),
(19, 'Government Sec. School Kufang', 'Jos South LGA, ', 'Public Secondary School', ''),
(20, 'Government Sec. School Wholshe', 'Jos South LGA, Opp Tende Hotel Wholshe', 'Public Secondary School', ''),
(21, 'Government Secondary School, Anglo-Jos', 'Jos South LGA, ', 'Public Secondary School', ''),
(22, 'Government Secondary School Jakatai', 'Mangu LGA', 'Public Secondary School', ''),
(23, 'Government Sec. School Kajul', 'Mangu LGA', 'Public Secondary School', ''),
(24, 'Government Secondary School, Murish', 'Mangu LGA', 'Public Secondary School', ''),
(25, 'Government Secondary School, Pushit', 'Mangu LGA', 'Public Secondary School', ''),
(26, 'Government Secondary School, Langai', 'Mangu LGA, Gindiri', 'Public Secondary School', ''),
(27, 'Government Secondary School, Kombili', 'Mangu LGA', 'Public Secondary School', ''),
(28, 'Government Secondary School, Daika', 'Mangu LGA', 'Public Secondary School', ''),
(29, 'Government Secondary School, ASA', 'Pankshin', 'Public Secondary School', ''),
(30, 'Government Secondary School, Bet', 'Pankshin LGA', 'Public Secondary School', ''),
(31, 'Government Secondary School, Chigwong', 'Pankshin LGA', 'Public Secondary School', ''),
(32, 'Government Secondary School, Fier', 'Pankshin LGA', 'Public Secondary School', ''),
(33, 'Government Secondary School, Jak', 'Pankshin LGA', 'Public Secondary School', ''),
(34, 'Government College, Pankshin', 'Pankshin LGA', 'Public Secondary School', ''),
(35, 'Government Sec.School, Zamko', 'Langtang North, LGA', 'Public Secondary School', ''),
(36, 'Government Secondary School, Kaplak', 'Langtang North, LGA', 'Public Secondary School', ''),
(37, 'Government Secondary School, Pangna', 'Langtang North, LGA', 'Public Secondary School', ''),
(38, 'Government Sec.School, Fanyallang', 'Langtang North, LGA', 'Public Secondary School', ''),
(39, 'Govt, Model S.S ', 'Langtang North, LGA', 'Public Secondary School', ''),
(40, 'Government College, Langtang', 'Langtang North, LGA', 'Public Secondary School', ''),
(41, 'Government Sec. School, Fajul', 'Langtang South, LGA', 'Public Secondary School', ''),
(42, 'Government Secondary School, Faya', 'Langtang South, LGA', 'Public Secondary School', ''),
(43, 'Government Secondary School, Mabudi', 'Langtang South, LGA', 'Public Secondary School', ''),
(44, 'Government Sec. School, Timbol', 'Langtang South, LGA', 'Public Secondary School', ''),
(45, 'Government Sec. School, Sabongida', 'Langtang South, LGA', 'Public Secondary School', ''),
(46, 'Government Secondary School, Kabong', 'Jos North LGA ', 'Public Secondary School', ''),
(47, 'Government Secondary School, Angwan Rogo', 'Jos North LGA ', 'Public Secondary School', ''),
(48, 'Government Secondary School, West of Mines', 'Jos North LGA ', 'Public Secondary School', ''),
(49, 'Government Secondary School, Babale', 'Jos North LGA ', 'Public Secondary School', ''),
(50, 'Government Secondary School, Chwlengap', 'Jos North LGA ', 'Public Secondary School', ''),
(51, 'Government Secondary School, Chwlengap', 'Jos North LGA ', 'Public Secondary School', ''),
(52, 'Government Secondary School, Naraguta', 'Jos North LGA ', 'Public Secondary School', ''),
(53, 'Government Secondary School, Laranto', 'Jos North LGA ', 'Public Secondary School', ''),
(54, 'Government Secondary School, Riyom', 'Riyom LGA', 'Public Secondary School', ''),
(55, 'Government Sec. School, Sopp', 'Riyom LGA', 'Public Secondary School', ''),
(56, 'Government Sec. School, La-Hos', 'Riyom LGA', 'Public Secondary School', ''),
(57, 'Government Sec. School, Wareng', 'Riyom LGA', 'Public Secondary School', ''),
(58, 'Government Secondary School, Binchi ', 'Bassa LGA', 'Public Secondary School', ''),
(59, 'Government Secondary School, Jangre', 'Bassa LGA', 'Public Secondary School', ''),
(60, 'Government Sec. School, Lemoro', 'Bassa LGA', 'Public Secondary School', ''),
(61, 'Government College, Jangre', 'Bassa LGA', 'Public Secondary School', ''),
(62, 'Government Secondary School, Jebbu Miango', 'Bassa LGA', 'Public Secondary School', ''),
(63, 'Government Senior Science Secondary School, Kuru', 'Jos South LGA, Bukuru', 'Public Secondary School', ''),
(64, ' Government Secondary School, Zagun', 'Bassa LGA', 'Public Secondary School', ''),
(65, 'Government Girls College, Bokkos', 'Bokkos LGA', 'Public Secondary School', ''),
(66, 'Government Sec. School, Bokkos', 'Bokkos LGA', 'Public Secondary School', ''),
(67, 'All Nations Academy, Dashorong', 'Bokkos LGA, Dashorong Butura ', 'Private Secondary School', ''),
(68, 'Government Secondary School, Mbar', 'Bokkos LGA, Mbar', 'Public Secondary School', ''),
(69, 'Government Sec. School, Daffo', 'Bokkos LGA', 'Public Secondary School', ''),
(70, 'Government Secondary School, Masharkut', 'Bokkos LGA', 'Public Secondary School', ''),
(71, 'Government Secondary School, Manguna', 'Bokkos LGA', 'Public Secondary School', ''),
(72, 'Government Secondary School, Horop', 'Bokkos LGA', 'Public Secondary School', ''),
(73, 'Hayantul Private Secondary School', 'Jos North Angwan Rogo', 'Islamic Private Secondary School', ''),
(74, 'Governmet Secondary School, Mangu', 'Mangu LGA', 'Public Secondary School', 'utm.png');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `image` varchar(1024) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `website` varchar(100) NOT NULL,
  `map` varchar(1000) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `location`, `type`, `description`, `image`, `details`, `website`, `map`, `Date`) VALUES
(77, 'Rochas Foundation', 'Old Airport Along Rayfield Road', 'Private Secondary School', '', '', '', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.677738675713!2d8.874756214250538!3d9.877380577844912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1053737efa9a0081%3A0xf0a17d4d506bac1e!2sRochas+Foundation+College!5e0!3m2!1sen!2sng!4v1510135741017" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '2017-11-08 10:09:56'),
(79, 'University of Jos', 'Jos North Local Government, along Bauchi Road', 'Tertiary institution', 'The university of Jos abbreviated as Unijos, is a Federal university in Jos Plateau State, central Nigeria.', 'uj.jpeg', 'Motto: Discipline and Dedication\r\nEstablished: 1975\r\nVice-chancellor:Prof. Sabastian Seddi Maimako.\r\nStudents:14,000\r\nWebsite: www.unijos.edu.ng\r\nHISTORY:\r\nwhat became the university of Jos was established in November 1971 as a satellite campus of the University of Ibadan. The first students were admitted in January 1972 as pre-degree students with the first Bachelor  of Arts degree program begun in October 1973.\r\nIn october 1975, the military government under general Murtala Muhammed established the Unijos as a separate institution. ', 'https://www.unijos.edu.ng', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31442.76384928469!2d8.858128084968632!3d9.905156872765566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105372653d7fddd5%3A0xfdb10319cbb54a86!2sUniversity+of+Jos!5e0!3m2!1sen!2sng!4v1510132638442" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '2017-11-08 09:18:34'),
(81, 'Federal college of Education, Pankshin', 'Pankshin Local Government', 'Tertiary institution', '', 'lib2.jpg', '', 'www.fcepankshin.ng', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.9077825789422!2d9.391751814404846!3d9.341428086590287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10541223416c9f7b%3A0x202fdd288ca90f78!2sFCE+Pankshin%2C+Pankshin%3B+Plateau+State.!5e0!3m2!1sen!2sng!4v1510133308051" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '2017-11-08 09:29:12'),
(83, 'Plateau State college of Health Technology,panshin', 'Pankshin Local Government', 'Tertiary institution(college of health)', '', '', '', '', '', '2017-10-24 11:14:29'),
(84, 'Plateau State college of Health Technology,Zawan', 'Jos south local Government(Zawan)', 'Tertiary institution(college of health)', '', '', '', '', '', '2017-10-24 11:14:29'),
(86, 'Federal college of forestry Jos', 'Jos North Local Government, along Bauchi Road', 'Tertiary institution', '', '', '', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.8400527624526!2d8.890201914408084!3d9.947262776670314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1053726928b051c7%3A0xaec649cf0bb6018f!2sFederal+College+of+Forestry%2CJos!5e0!3m2!1sen!2sng!4v1510134497196" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '2017-11-08 09:48:51'),
(89, 'Obasanjo Model Secondary School', 'Hwolshe', 'Secondary school(public)', '', '', '', '', '', '2017-10-24 11:14:29'),
(101, 'Plateau State University,Bokkos', 'Bokkos Local Government', 'University', 'Plateau State University,Bokkos, is a state owned University established in 2005, during the regime of chief Dr.Joshua chibi Dariye as the Governor of the state, the university has 17 programs.', 'pla.jpg', 'Plateau State University,Bokkos, is a state owned University established in 2005, during the regime of chief Dr.Joshua chibi Dariye as the Governor of the state, the university has 17 programs.\r\nProf.D.D.D sheni is the present vice-chancellor of the university.', 'https://www.plasu.edu.ng', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15748.934722070473!2d8.977932966626596!3d9.312551087048795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1053ee46f2b7bf3d%3A0xda47ad5a59c8f775!2sPlateau+State+University+Bokkos.!5e0!3m2!1sen!2sng!4v1510133029180" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '2017-11-08 09:24:18'),
(105, 'Air force Military Schools ', 'Jos', 'Secondary school(public)', '', '', '', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.7629843265763!2d8.88597641440761!3d9.870241677964061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105374777ef8ffe1%3A0x144b5e8b1ece200b!2sAir+Force+Military+School!5e0!3m2!1sen!2sng!4v1510134667383" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '2017-11-08 09:51:49'),
(106, 'Air force Girls Military schools', 'Jos', 'Secondary school(public)', 'The Nigerian Air force Girls military school Jos was established in 1987 by the then regime ', '', '', '', '', '2017-10-24 11:14:29'),
(108, 'F G C jos', 'Jos', 'Secondary school(public)', 'is a very good school located in jos plateau state nigeria', '', '<p>Federal Government College Jos is a Federal Government Secondary School located in Jos Nigeria along Zaria Road Jos ,North Plateau State. FGC Jos is one of the unity school established by the Federal Government of Nigeria, the college is known for excellence in the total education of the student population and has successfully created equal gender opportunities for them in various fields of endeavor such as Medicine, Engineering, Law, Architecture Accounting etc. At present, the population of the teaching staffs is 82, this comprises of sixty five (65) permanent staff. The school working hours is from 8:00am-2:00pm<br>\r\n<b>Mission:</b> To produce great and discipline future leaders and foster unity through academics and moral excellence <br>\r\n<b>Vission:</b> Equipping young boys and girls with modern skills in all ramifications towards self-reliance and building</p><br>\r\n<p><b>Contact:</b>07080437605</P>        ', 'https://fgcjos.com.ng', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62872.67513422785!2d8.832415827254621!3d9.971994021324182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10536d5627a35947%3A0xaac6ea1bda0b679e!2sFederal+Government+College+Jos!5e0!3m2!1sen!2sng!4v1510133420037" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '2017-11-08 12:32:07'),
(112, '<p>Plateau State Polytechnic, Jos Camp</p>', '<p>Barkin Ladi Local Government</p>', '<p>Polytechnic</p>', '', 'mami4.jpg', '<p>Plateau State Polytechnic, PLAPOLY is a State Higher institution in Plateau Sate, North Central Nigeria. The institution has 2 campuses, one at Barkin Ladi and the other at Jos, the Capital of the State.</p>\r\n<p><b>Motto:</b> Technology for Development</p>\r\n<p><b>Courses/Departments in Plapoly</b></p>\r\n<p>.Business Administration and Management<br>\r\n.Engineering Technology<br>\r\n.General Studies<br> \r\n.Banking and Finance<br> \r\n.Computer Engineering<br>\r\n.Computer Science<br> \r\n.Public Administration<br>\r\n.Chemical Engineering<br>\r\n.Accountancy<br>\r\n.Quantity Survey<br>\r\n.Urban And Regional Planning<br>\r\n.Office Technology And Management<br>\r\n.Estate Management And Valuation<br>\r\n.Library Science<br>\r\n.Mechanical Engineering Technology<br>\r\n.Hospitality Management<br>\r\n.Electrical / Electronic Management<br>\r\n.Leisure And Tourism Management\r\n</p>\r\n<p><b>CONTACT</b>\r\nYakubu Gowon Way, Jos , Nigeria\r\ncontact@plalpoly.edu.ng</p>   ', 'www.plapoly.edu.ng', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.61135819348!2d8.87283851425052!3d9.882936077751843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105373798862b709%3A0x20f0f16f6af1f2e5!2sPlateau+State+Polytechnic+Jos+Campus!5e0!3m2!1sen!2sng!4v1510133098270" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '2017-11-08 11:54:05'),
(117, 'College Of Nursing and Midwifery, Vom', 'Jos South L. G. A.', 'Public Tertiary Institution', 'Along Vom Kafanchan Road', '8.jpg', '', 'Null', '', '2017-10-26 12:12:23'),
(118, 'St Luois College Jos', 'Along Joseph Gomwalk Road, Jos', 'Missionary school(private)', 'Opposite Obasanjo Model School', 'pix2.jpg', '<p>St Louis College, a girls school established by the first proprietor Rt. Rev. Dr. John Reddington, the then Catholic Bishop of Jos on the 25th of January 1960, at the first site, Our Lady of Fatima Primary School, Laranto road Jos. It finally moved to the permanent site along Joseph Gomwalk road Jos on the 7th October 1960 with thirty girls<br>\r\n\r\nThe school started at Our Lady of Fatima primary school with a population of 30 student with two (2) teachers, one, the principal Sr. Derinella now called Sr Patricia Moloney, who was a graduate B.A, and had a High Diploma in education and W.A.S.C holder.</p>\r\n\r\n', 'support@luoisvillejos.sch.ng', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.1014591761573!2d8.876518649939255!3d9.925507777001952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105372f8ec2a3491%3A0x12a323cdc3178e5c!2sSt.+Louis+College!5e0!3m2!1sen!2sng!4v1510169797653" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '2017-11-08 15:19:51'),
(119, 'Plateau State Specialist Hospital', 'Located in Jos South', 'State Hospital', '', '', ' <p><b>PROFILE</b><br>\r\nPlateau State Specialist Hospital, Jos, Nigeria, is a tertiary Health institution that provides specialized medical services, trains Health professionals and serves as a research center. <br>\r\n\r\n<b>VISION</b> <br>\r\nTo be a centre of excellence that provides holistic health care services, training and research.<br>\r\n\r\n<b>MISSION</b> <br>\r\nTo improve and sustain the health status of the society through holistic healthcare services, training and research.<br>\r\n\r\n<b>OBJECTIVES/ CORE VALUES OF PLATEAU STATE SPECIALIST HOSPITAL</b><br>\r\n•   Sanctity of the human life<br>\r\n•   Commitment to excellence<br>\r\n•   Discipline<br>\r\n•   Cleanliness and good hygiene in the work place<br>\r\n•   Quality and motivated manpower<br> \r\n•   Teamwork<br>\r\n•   Value based/participatory leadership<br>\r\n•   Prudent management of scare<br> resources.<br>\r\n\r\n\r\n<b>ORGANIZATIONAL STRUCTURE OF THE HOSPITAL</b><br>\r\nThe Plateau State Specialist Hospital is presently structured into five (5) major departments and several minor functional units. The major departments include:<br>\r\n1.  Administrative Department<br>\r\n2.  Medical and Radiology Department<br>\r\n3.  Nursing Department<br>\r\n4.  Pharmacy Department<br>\r\n5.  Laboratory Department<br>\r\n\r\n\r\n\r\n<b>FUNCTIONS OF THE VARIOUS DEPARTMENTS</b><br>\r\n\r\n(i) Administration<br>\r\nThis department serves as custodian of official documents in the Hospital and also handles all personnel related issues such as Recruitment, Promotion/Advancement, Disciplinary issues and also control and maintenance of vehicles, official correspondences. e.t.c.<br>\r\n\r\n(ii) Medical and Radiology Department\r\nServes as clinical department, which is responsible for providing medical care in terms of diagnosis and treatment of all diseases. It is also responsible for the training of House Officers and Postgraduate training in Family medicine. It is involved in researches in all fields of medicine. Other sub department under the medical department<br> includes:\r\n\r\nFamily Medicine<br>\r\na.  Obstetrics & Gynaecology<br>\r\nb.  Peadiatrics<br>\r\nc.  Surgery<br>\r\nd.  Medical<br>\r\ne.  Medical Records<br>\r\n\r\n\r\n(iii) Nursing Department<br>\r\n- Provides health care to all patients<br>\r\n- Handles all administrative needs of the Nursing department, e.g.<br>\r\n- Discipline<br>\r\n- Supervision<br>\r\n- Purchases and maintenance of cleaning materials and other ward consumable,<br>\r\n- Keeps management information about happenings in the department.<br>\r\n- Reports on damages to management for repairs<br>\r\n- Provides counseling services<br>\r\n- Handles supervision of ward orderlies<br>\r\n- Maintains a functional educational programme<br>\r\n- Keeps inventory of all units.<br>\r\n\r\n(iv) Pharmacy Department: <br>\r\n- Serves as the custodian of drugs and medicines<br>\r\n- Train Intern Pharmacists /perform simple compounding of drugs and medicines<br>\r\n- Provides drugs information<br>\r\n- Dispenses drugs to patients on the use of same.<br>\r\n Administration<br>\r\n\r\nThe Head of these departments and DFS constitute the Top\r\nManagement of the Hospital with the Chief Medical Director as<br>\r\n\r\ni.  Chairman<br>\r\nii. Medical and Radiology<br>\r\niii.    Nursing<br>\r\niv. Pharmacy<br>\r\nv.  Laboratory<br>\r\n\r\n(v) Laboratory Department<br>\r\nThis department serves as a diagnostic center for pathological samples and as a training center for Internship for Medical Laboratory Scientists and Industrial Attachment for students of Universities, Colleges of Medical Laboratory Science Technology and colleges of Health Technology.<br>\r\n\r\n<b>ONGOING PROJECTS</b><br>\r\na.  Laboratory Complex<br>\r\nb.  Administrative Block and Emergency Peadiatric Department<br>\r\nc.  Maternity Block, Dialysis Centre<br>\r\nd.  Female patient Relations shade and male Patient Relation Shade<br>\r\ne.  CT Scan with SM walk way<br>\r\nf.  Mortuary Complex<br>\r\ng.  Gynecology ward<br>\r\nh.  Ante-Natal Block<br>\r\ni.  Upgrade Epit Unit.</p>\r\n', 'www.plateauspecialisthosital.com', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.4523993096755!2d8.88187224993911!3d9.896227077494023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105373a1dbda4cd7%3A0xbbc46d475f3f5ae0!2sPlateau+Specialist+Hospital!5e0!3m2!1sen!2sng!4v1510169265940" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>\r\n', '2017-11-08 15:16:09'),
(120, 'Jos University Teaching Hospital(JUTH)', '', '', '', '', '', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.3283314053224!2d8.952516149939147!3d9.906588477320064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10537105ce51b7f7%3A0x431573747bc4f8aa!2sJos+University+Teaching+Hospital!5e0!3m2!1sen!2sng!4v1510169386348" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '2017-11-08 15:17:47'),
(121, 'Bingham University Teaching Hospital', '', '', '', '', '', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.044710487934!2d8.875785149939269!3d9.930234576922352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105372f776291d1b%3A0x5e839e844b2059ec!2sBingham+University+Teaching+Hospital!5e0!3m2!1sen!2sng!4v1510169598043" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '2017-11-08 15:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE IF NOT EXISTS `public` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `locations` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`id`, `name`, `locations`, `type`) VALUES
(1, 'Plateau State University, Bokkos', 'Located in Bokkos LGA Plateau State  , Around Ndar', 'Tertiary institution ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
