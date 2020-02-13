-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 01:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mulary`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges_and_universities`
--

CREATE TABLE `colleges_and_universities` (
  `id` int(11) NOT NULL,
  `name` varchar(5000) NOT NULL,
  `province` varchar(1000) NOT NULL,
  `university_or_college` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges_and_universities`
--

INSERT INTO `colleges_and_universities` (`id`, `name`, `province`, `university_or_college`) VALUES
(1, 'Royal Roads University', 'British Columbia', 'University'),
(2, 'Simon Fraser University', 'British Columbia', 'University'),
(3, 'Trinity Western University', 'British Columbia', 'University'),
(4, 'Vancouver Island University', 'British Columbia', 'University'),
(5, 'University of Victoria', 'British Columbia', 'University'),
(6, 'University of Northern British Columbia', 'British Columbia', 'University'),
(7, 'Thompson River University', 'British Columbia', 'University'),
(8, 'University of the Fraser Valley', 'British Columbia', 'University'),
(9, 'University of British Columbia', 'British Columbia', 'University'),
(10, 'First Nations University of Canada', 'Saskatchewan', 'University'),
(11, 'University of Regina', 'Saskatchewan', 'University'),
(12, 'University of Saskatchewan', 'Saskatchewan', 'University'),
(13, 'Athabasca University', 'Alberta', 'University'),
(14, 'Augustana University College', 'Alberta', 'University'),
(15, 'Concordia University College of Alberta', 'Alberta', 'University'),
(16, 'The King’s University College', 'Alberta', 'University'),
(17, 'University of Alberta', 'Alberta', 'University'),
(18, 'University of Calgary', 'Alberta', 'University'),
(19, 'University of Lethbridge', 'Alberta', 'University'),
(20, 'MacEwan University', 'Alberta', 'University'),
(21, 'Mount Royal University', 'Alberta', 'University'),
(22, 'Brandon University', 'Manitoba', 'University'),
(23, 'University of Manitoba', 'Manitoba', 'University'),
(24, 'University of Winnipeg', 'Manitoba', 'University'),
(25, 'Canadian Mennonite University', 'Manitoba', 'University'),
(26, 'St. Paul’s College', 'Manitoba', 'University'),
(27, 'Université de Saint-Boniface', 'Manitoba', 'University'),
(28, 'Bishop’s University', 'Québec', 'University'),
(29, 'Concordia University', 'Québec', 'University'),
(30, 'École de technologie supérieur', 'Québec', 'University'),
(31, 'École nationale d’administration publique', 'Québec', 'University'),
(32, 'École Polytechnique de Montréal', 'Québec', 'University'),
(33, 'HEC Montréal', 'Québec', 'University'),
(34, 'Institut national de la recherche scientifique', 'Québec', 'University'),
(35, 'McGill University', 'Québec', 'University'),
(36, 'TÉLUQ', 'Québec', 'University'),
(37, 'Université de Montréal', 'Québec', 'University'),
(38, 'Université de Sherbrooke', 'Québec', 'University'),
(39, 'Université de Québec', 'Québec', 'University'),
(40, 'Université du Québec à Chicoutimi (UQAC)', 'Québec', 'University'),
(41, 'Université du Québec à Montréal (UQAM)', 'Québec', 'University'),
(42, 'Université du Québec à Rimouski (UQAR)', 'Québec', 'University'),
(43, 'Université du Québec à Trois-Rivières (UQTR)', 'Québec', 'University'),
(44, 'Université du Québec en Abitibi-Témiscamingue (UQAT)', 'Québec', 'University'),
(45, 'Université du Québec en Outaouais', 'Québec', 'University'),
(46, 'Université de Laval', 'Québec', 'University'),
(47, 'University of Prince Edward Island', 'P.E.I', 'University'),
(48, 'Acadia University', 'Nova Scotia', 'University'),
(49, 'Cape Breton University', 'Nova Scotia', 'University'),
(50, 'Dalhousie University', 'Nova Scotia', 'University'),
(51, 'Mount Saint Vincent University', 'Nova Scotia', 'University'),
(52, 'NSCAD University', 'Nova Scotia', 'University'),
(53, 'Saint Mary’s University', 'Nova Scotia', 'University'),
(54, 'St. Francis Xavier University', 'Nova Scotia', 'University'),
(55, 'Université Sainte-Anne', 'Nova Scotia', 'University'),
(56, 'University of King’s College', 'Nova Scotia', 'University'),
(57, 'Mount Allison University', 'New Brunswick', 'University'),
(58, 'St. Thomas University', 'New Brunswick', 'University'),
(59, 'Université de Moncton', 'New Brunswick', 'University'),
(60, 'University of New Brunswick', 'New Brunswick', 'University'),
(61, 'Memorial University of Newfoundland', 'Newfoundland and Labrador', 'University'),
(62, 'Algoma University', 'Ontario', 'University'),
(63, 'Brescia University College', 'Ontario', 'University'),
(64, 'Brock University', 'Ontario', 'University'),
(65, 'Carleton University', 'Ontario', 'University'),
(66, 'Dominican University College', 'Ontario', 'University'),
(67, 'Huron University College', 'Ontario', 'University'),
(68, 'King’s University College at Western University', 'Ontario', 'University'),
(69, 'Lakehead University', 'Ontario', 'University'),
(70, 'Laurentian University', 'Ontario', 'University'),
(71, 'McMaster University', 'Ontario', 'University'),
(72, 'Nipissing University', 'Ontario', 'University'),
(73, 'OCAD University', 'Ontario', 'University'),
(74, 'Queen’s University', 'Ontario', 'University'),
(75, 'Redeemer University College', 'Ontario', 'University'),
(76, 'Royal Military College of Canada', 'Ontario', 'University'),
(77, 'Ryerson University', 'Ontario', 'University'),
(78, 'Saint Paul University', 'Ontario', 'University'),
(79, 'St. Jerome’s University', 'Ontario', 'University'),
(80, 'Trent University', 'Ontario', 'University'),
(81, 'University of Guelph', 'Ontario', 'University'),
(82, 'University of Ontario Institute of Technology', 'Ontario', 'University'),
(83, 'University of Ottawa', 'Ontario', 'University'),
(84, 'University of St. Michael’s College', 'Ontario', 'University'),
(85, 'University of Sudbury', 'Ontario', 'University'),
(86, 'University of Toronto', 'Ontario', 'University'),
(87, 'University of Trinity College', 'Ontario', 'University'),
(88, 'University of Waterloo', 'Ontario', 'University'),
(89, 'University of Western Ontario', 'Ontario', 'University'),
(90, 'University of Windsor', 'Ontario', 'University'),
(91, 'Victoria University', 'Ontario', 'University'),
(92, 'Wilfrid Laurier University', 'Ontario', 'University'),
(93, 'York University', 'Ontario', 'University'),
(94, 'British Columbia Institute of Technology', 'British Columbia', 'College'),
(95, 'Okanagan College', 'British Columbia', 'College'),
(96, 'Ashton College', 'British Columbia', 'College'),
(97, 'Brighton College', 'British Columbia', 'College'),
(98, 'Columbia College', 'British Columbia', 'College'),
(99, 'Camosun College', 'British Columbia', 'College'),
(100, 'Canadian College', 'British Columbia', 'College'),
(101, 'Capilano University', 'British Columbia', 'College'),
(102, 'Collège Éducacentre', 'British Columbia', 'College'),
(103, 'College of the New Caledonia', 'British Columbia', 'College'),
(104, 'College of the Rockies', 'British Columbia', 'College'),
(105, 'Douglas College', 'British Columbia', 'College'),
(106, 'Eton College', 'British Columbia', 'College'),
(107, 'Justice Institute of British Columbia', 'British Columbia', 'College'),
(108, 'Kwantlen Polytechnic University', 'British Columbia', 'College'),
(109, 'Langara College', 'British Columbia', 'College'),
(110, 'Native Education College', 'British Columbia', 'College'),
(111, 'Nicola Valley Institute of Technology', 'British Columbia', 'College'),
(112, 'North Island College', 'British Columbia', 'College'),
(113, 'Northern Lights College', 'British Columbia', 'College'),
(114, 'Northwest Community College', 'British Columbia', 'College'),
(115, 'Okanagan College', 'British Columbia', 'College'),
(116, 'Selkirk College', 'British Columbia', 'College'),
(117, 'Sprott Shaw College', 'British Columbia', 'College'),
(118, 'Vancouver Community College', 'British Columbia', 'College'),
(119, 'Vancouver Institute of Media Arts', 'British Columbia', 'College'),
(120, 'Winnipeg Technical College', 'Manitoba', 'College'),
(121, 'Assiniboine Community College', 'Manitoba', 'College'),
(122, 'University College of the North', 'Manitoba', 'College'),
(123, 'Red River College of Applied Arts, Science and Technology', 'Manitoba', 'College'),
(124, 'École technique et professionnelle, Université de Saint-Boniface', 'Manitoba', 'College'),
(125, 'Manitoba Institute of Trades and Technology', 'Manitoba', 'College'),
(126, 'New Brunswick College of Craft and Design', 'New Brunswick', 'College'),
(127, 'New Brunswick Community College', 'New Brunswick', 'College'),
(128, 'Maritime College of Forest Technology', 'New Brunswick', 'College'),
(129, 'New Brunswick Bible Institute', 'New Brunswick', 'College'),
(130, 'College of the North Atlantic', 'Newfoundland and Labrador', 'College'),
(131, 'Marine Institute', 'Newfoundland and Labrador', 'College'),
(132, 'Centre for Nursing Studies', 'Newfoundland and Labrador', 'College'),
(133, 'Algonquin College', 'Ontario', 'College'),
(134, 'Collège Boréal', 'Ontario', 'College'),
(135, 'Cambrian College of Applied Arts and Technology', 'Ontario', 'College'),
(136, 'Canadore College of Applied Arts and Technology', 'Ontario', 'College'),
(137, 'Centennial College of Applied Arts and Technology', 'Ontario', 'College'),
(138, 'La Cité collégiale', 'Ontario', 'College'),
(139, 'Conestoga College Institute of Technology and Advanced Learning', 'Ontario', 'College'),
(140, 'Confederation College of Applied Arts and Technology', 'Ontario', 'College'),
(141, 'Durham College', 'Ontario', 'College'),
(142, 'Fanshawe College of Applied Arts and Technology', 'Ontario', 'College'),
(143, 'Fleming College', 'Ontario', 'College'),
(144, 'George Brown College', 'Ontario', 'College'),
(145, 'Georgian College of Applied Arts and Technology', 'Ontario', 'College'),
(146, 'Humber College Institute of Technology & Advanced Learning University of Guelph, Kemptville Campus', 'Ontario', 'College'),
(147, 'Lambton College of Applied Arts and Technology', 'Ontario', 'College'),
(148, 'Loyalist College of Applied Arts and Technology', 'Ontario', 'College'),
(149, 'The Michener Institute for Applied Health Sciences', 'Ontario', 'College'),
(150, 'Mohawk College of Applied Arts and Technology', 'Ontario', 'College'),
(151, 'Niagara College', 'Ontario', 'College'),
(152, 'Northern College of Applied Arts and Technology', 'Ontario', 'College'),
(153, 'St. Clair College of Applied Arts and Technology', 'Ontario', 'College'),
(154, 'St. Lawrence College', 'Ontario', 'College'),
(155, 'Sault College of Applied Arts and Technology', 'Ontario', 'College'),
(156, 'Seneca College of Applied Arts and Technology', 'Ontario', 'College'),
(157, 'Sheridan College Institute of Technology and Advanced Learning', 'Ontario', 'College'),
(158, 'Aurora College', 'Northwest Territories', 'College'),
(159, 'Academy of Learning College', 'Northwest Territories', 'College'),
(160, 'Canadian Coast Guard College', 'Nova Scotia', 'College'),
(161, 'Gaelic College', 'Nova Scotia', 'College'),
(162, 'Kingston Bible College', 'Nova Scotia', 'College'),
(163, 'Nova Scotia Community College', 'Nova Scotia', 'College'),
(164, 'Nunavut Arctic College', 'Nunavut', 'College'),
(165, 'Holland College', 'P.E.I', 'College'),
(166, 'Maritime Christian College', 'P.E.I', 'College'),
(167, 'Collège Acadie Î.-P.-É.', 'P.E.I', 'College'),
(168, 'Bethany College', 'Saskatchewan', 'College'),
(169, 'Briercrest College and Seminary', 'Saskatchewan', 'College'),
(170, 'Carlton Trail Regional College', 'Saskatchewan', 'College'),
(171, 'Horizon College and Seminary', 'Saskatchewan', 'College'),
(172, 'College Mathieu', 'Saskatchewan', 'College'),
(173, 'Cumberland College', 'Saskatchewan', 'College'),
(174, 'Eston College', 'Saskatchewan', 'College'),
(175, 'Great Plains College', 'Saskatchewan', 'College'),
(176, 'Nipawin Bible College', 'Saskatchewan', 'College'),
(177, 'Northlands College', 'Saskatchewan', 'College'),
(178, 'North West Regional College', 'Saskatchewan', 'College'),
(179, 'Parkland College', 'Saskatchewan', 'College'),
(180, 'Saskatchewan Indian Institute of Technologies', 'Saskatchewan', 'College'),
(181, 'Saskatchewan Institute of Applied Sciences and Technology', 'Saskatchewan', 'College'),
(182, 'Southeast Regional College', 'Saskatchewan', 'College'),
(183, 'St Peter’s College', 'Saskatchewan', 'College'),
(184, 'Western Academy Broadcasting College', 'Saskatchewan', 'College'),
(185, 'Yukon College', 'Yukon', 'College');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges_and_universities`
--
ALTER TABLE `colleges_and_universities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges_and_universities`
--
ALTER TABLE `colleges_and_universities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
