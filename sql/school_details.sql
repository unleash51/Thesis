-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 05:09 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipsmcis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE `school_details` (
  `school_id` int(3) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_address` varchar(150) NOT NULL,
  `school_country` varchar(15) NOT NULL,
  `school_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`school_id`, `school_name`, `school_address`, `school_country`, `school_contact`) VALUES
(1, 'University of Sydney', 'Camperdown NSW 2006', 'Australia', '+61 2 9351 2222'),
(2, 'University of Melbourne', 'Parkville VIC 3010', 'Australia', '+61 3 9035 5511'),
(3, 'Monash University', 'Wellington Rd & Blackburn Rd, Clayton VIC 3800', 'Australia', '+61 3 9905 4000'),
(4, 'University of Queensland', 'St Lucia QLD 4072', 'Australia', ' +61 7 3365 111'),
(5, 'University of New South Wales', 'Sydney NSW 2052', 'Australia', '+61 2 9385 1000'),
(6, 'Griffith University', '170 Kessels Rd, Nathan QLD 4111', 'Australia', '+61 7 3735 7111'),
(7, 'Australian National University', 'Canberra ACT 0200', 'Australia', '+61 2 6125 5111'),
(8, 'Deakin University', '221 Burwood Hwy, Burwood VIC 3125', 'Australia', '+61 3 9627 4877'),
(9, 'RMIT University', '124 La Trobe St, Melbourne VIC 3000', 'Australia', '+61 3 9925 2000'),
(10, 'University of Technology Sydney', '15 Broadway, Ultimo NSW 2007', 'Australia', '+61 2 9514 2000'),
(11, 'Curtin University', 'Kent St, Bentley WA 6102', 'Australia', '+61 8 9266 9266'),
(12, 'University of Canberra', 'University Drive, Bruce ACT 2617', 'Australia', '+61 2 6201 5342'),
(13, 'University of South Australia', '101 Currie St, Adelaide SA 5001', 'Australia', '+61 8 8302 6611'),
(14, 'Mcquarie University', 'Sydney NSW 2109', 'Australia', '+61 2 9850 7111'),
(15, 'Queensland University of Technology', '2 George St, Brisbane City QLD 4000', 'Australia', '+61 7 3138 2000'),
(16, 'University of Newcastle', 'University Dr, Callaghan NSW 2308', 'Australia', '+61 2 4921 5000'),
(17, 'University of Adelaide', 'Adelaide SA 5005', 'Australia', '+61 8 8313 5208'),
(18, 'Swinburne University of Technology', 'John St, Hawthorn VIC 3122', 'Australia', '+61 3 9214 8000'),
(19, 'Charles Sturt University', 'Quad 3, 102 Bennelong Pkwy, Sydney NSW 2127', 'Australia', '+61 1800 334 73'),
(20, 'University of Tasmania', 'Churchill Ave, Hobart TAS 7005', 'Australia', '+61 3 6226 2999'),
(21, 'James Cook University', '1 James Cook Dr, Townsville City QLD 4811', 'Australia', '+61 7 4781 4111'),
(22, 'University of Western Australia', '35 Stirling Hwy, Crawley WA 6009', 'Australia', '+61 8 6488 6000'),
(23, 'Edith Cowan University', '270 Joondalup Dr, Joondalup WA 6027', 'Australia', '+61 8 6304 0000'),
(24, 'University of Southern Queensland', 'West St, Darling Heights QLD 4350', 'Australia', '+61 1800 269 50'),
(25, 'Open University Australia', '700 Collins St, Docklands VIC 3008', 'Australia', '+61 3 8628 2971'),
(26, 'Flinders University', 'Sturt Rd, Bedford Park SA 5042', 'Australia', '+61 8 8201 3911'),
(27, 'University of the Sunshine Coast', '90 Sippy Downs Dr, Sippy Downs QLD 4556', 'Australia', '+61 7 5430 1234'),
(28, 'Federation University Australia', 'University Dr, Mount Helen VIC 3350', 'Australia', '+61 1800 333 86'),
(29, 'University of New England', 'Armidale NSW 2351', 'Australia', ' +61 2 6773 333'),
(30, 'Southern Cross University', 'Military Road, East Lismore NSW 2480', 'Australia', '+61 1800 626 48'),
(31, 'Murdoch University', '90 South St, Murdoch WA 6150', 'Australia', '+61 08 9360 606'),
(32, 'La Trobe University', 'Plenty Road & Kingsbury Drive, Melbourne VIC 3086', 'Australia', '+61 1300 528 76'),
(33, 'University of Wollongong', 'Northfields Ave, Wollongong NSW 2522', 'Australia', ' +61 2 4221 321'),
(34, 'Bond University', '14 University Dr, Robina QLD 4226', 'Australia', '+61 7 5595 1111'),
(35, 'Charles Darwin University', 'Ellengowan Dr, Casuarina NT 0810', 'Australia', '+61 8 8946 6666'),
(36, 'Victoria University, Australia', 'Ballarat Rd, Footscray VIC 3011', 'Australia', '+61 3 9919 6100'),
(37, 'University of Notre Dame Australia', '32 Mouat St, Fremantle WA 6160', 'Australia', '+61 8 9433 0555'),
(38, 'Central Queensland University', 'Bruce Hwy, North Rockhampton QLD 4702', 'Australia', '+61 7 4930 9000'),
(39, 'Melbourne Polytechnic', '77 St Georges Rd, Preston VIC 3072', 'Australia', '+61 3 9269 1200'),
(40, 'Chisholm Institute', '121 Stud Rd, Dandenong VIC 3175', 'Australia', '+61 1300 244 74'),
(41, 'Endeavour College of Natural Health', '2/269 Wickham St, Brisbane City QLD 4006', 'Australia', '+61 1300 462 88'),
(42, 'Canberra Institute of Technology', '37 Constitution Ave, Reid ACT 2601', 'Australia', '+61 2 6207 3188'),
(43, 'Monash College', 'Wellington Rd & Blackburn Rd, Clayton VIC 3800', 'Australia', '+61 3 9905 4000'),
(44, 'JMC Academy', '561 Harris St, Ultimo NSW 2007', 'Australia', '+61 2 8241 8899'),
(45, 'Torrens University Australia', '220 Victoria Square, Adelaide SA 5000', 'Australia', '+61 1300 575 80'),
(46, 'Emmanuel College', '423 Blackshaws Rd, Altona North VIC 3025', 'Australia', '+61 3 8325 5100'),
(47, 'Swinburne Online', '6/600 St Kilda Rd, Melbourne VIC 3004', 'Australia', '+61 3 9956 0600'),
(48, 'The Polytechnic of Western Australia', '6/600 St Kilda Rd, Melbourne VIC 3004', 'Australia', '+61 3 9956 0600'),
(49, 'University of British Columbia', '2329 West Mall, Vancouver, BC V6T 1Z4', 'Canada', '+1 604 822 2211'),
(50, 'University of Alberta', '116 St & 85 Ave, Edmonton, AB T6G 2R3', 'Canada', '+1 780-492-3111'),
(51, 'York University', '4700 Keele St, Toronto, ON M3J 1P3', 'Canada', ' +1 416-736-210'),
(52, 'University of Waterloo', '200 University Ave W, Waterloo, ON N2L 3G1', 'Canada', ' +1 519-888-456'),
(53, 'University of Ottawa', '75 Laurier Ave E, Ottawa, ON K1N 6N5', 'Canada', ' +1 613-562-570'),
(54, 'Seneca College', '1750 Finch Ave E, North York, ON M2J 2X5', 'Canada', ' +1 416-491-505'),
(55, 'Université Laval', '2325 Rue de l''Université, Ville de Québec, QC G1V 0A6', 'Canada', '+1 877 785-2825'),
(56, 'Ryerson University', '50 Victoria St, Toronto, ON M5B 2K3', 'Canada', '+1 416-979-5000'),
(57, 'Queen''s University', '99 University Avenue Kingston, Ontario Canada, K7L 3N6', 'Canada', '+1 613-533-2000'),
(58, 'McMaster University', '1280 Main St W, Hamilton, ON L8S 4L8', 'Canada', '+1 905-525-9140'),
(59, 'Université de Montréal', '2900 Boulevard Edouard-Montpetit, Montréal, QC H3T 1J4', 'Canada', '+1 514-343-6111'),
(60, 'University of Western Ontario ', '1151 Richmond St, London, ON N6A 3K7', 'Canada', '+1 519-661-2111'),
(61, 'University of Manitoba', '66 Chancellors Cir, Winnipeg, MB R3T 2N2', 'Canada', '+1 800-432-1960'),
(62, 'Simon Fraser University', '8888 University Dr, Burnaby, BC V5A 1S6', 'Canada', ' +1 778-782-311'),
(63, 'University of Guelph', '50 Stone Rd E, Guelph, ON N1G 2W1', 'Canada', '+1 519-824-4120'),
(64, 'Carleton University', '1125 Colonel By Dr, Ottawa, ON K1S 5B6', 'Canada', '+1 613-520-2600'),
(65, 'Université du Québec à Montréal', '405 Rue Sainte-Catherine Est, Montréal, QC H2L 2C4', 'Canada', '+1 514-987-3000'),
(66, 'Concordia University', '7141 Rue Sherbrooke O, Montréal, QC H4B 1R6', 'Canada', ' +1 514-848-242'),
(67, 'George Brown College', '160 Kendal Ave, Toronto, ON M5R 1M3', 'Canada', '+1 416-415-2000'),
(68, 'Dalhousie University', '6299 South St, Halifax, NS B3H 4R2', 'Canada', '+1 902-494-2211'),
(69, 'University of Victoria', '3800 Finnerty Rd, Victoria, BC V8P 5C2', 'Canada', '+1 250-721-7211'),
(70, 'Sheridan College', '1430 Trafalgar Rd, Oakville, ON L6H 2L1', 'Canada', '+1 905-845-9430'),
(71, 'Algonquin College', '1385 Woodroffe Ave, Nepean, ON K2G 1V8', 'Canada', '+1 613-727-4723'),
(72, 'Norther Alberta Institute of Technology', '11762 106 St NW, Edmonton, AB T5G 2R1', 'Canada', '+1 780-471-6248'),
(73, 'Universite du Quebec a Trois-Rivieres', '3351 Boulevard des Forges, Trois-Rivières, QC G9A 5H7', 'Canada', '+1 819-376-5011'),
(74, 'Conestoga College', '299 Doon Valley Dr, Kitchener, ON N2G 4M4', 'Canada', '+1-866-463-4484'),
(75, 'Université de Sherbrooke', '2500, boulevard de l''Université, Immeuble K1, Sherbrooke', 'Canada', '+1 819-821-8000'),
(76, 'Douglas College', '700 Royal Ave, New Westminster, BC V3M 5Z5', 'Canada', '+1 604-527-5400'),
(77, 'MacEwan University', '10700 104 Ave NW, Edmonton, AB T5J 4S2', 'Canada', '+1 780-497-5040'),
(78, 'Brock University', '1812 Sir Isaac Brock Way, St. Catharines, ON L2S 3A1', 'Canada', '+1 905-688-5550'),
(79, 'Mount Royal University', '4825 Mt Royal Gate SW, Calgary, AB T3E 6K6', 'Canada', '+1 403-440-6821'),
(80, 'British Columbia Institute of Technology', '3700 Willingdon Ave, Burnaby, BC V5G 3H2', 'Canada', '+1 604-434-5734'),
(81, 'Centennial College', '941 Progress Ave, Toronto, ON M1K 5E9', 'Canada', '+1 416-289-5000'),
(82, 'Thompson Rivers University', '900 McGill Rd, Kamloops, BC V2C 0C8', 'Canada', '+1-250-828-5000'),
(83, 'University of Saskatchewan', 'Saskatoon, SK S7N 5C5', 'Canada', '+1 306-966-4343'),
(84, 'Mohawk College', '35 Fennell Ave W, Hamilton, ON L9C 1E9', 'Canada', '+1-844-767-6871'),
(85, 'St. Clair College', '2000 Talbot Road West, Windsor, ON N9A 6S4', 'Canada', '+1-800-387-0524'),
(86, 'University of Regina', '3737 Wascana Pkwy, Regina, SK S4S 0A2', 'Canada', ' +1 306-585-411'),
(87, 'Georgian College', '1 Georgian Dr, Barrie, ON L4M 3X9', 'Canada', '+1 705-728-1968'),
(88, 'HEC Montreal', '3000 Chemin de la Côte-Sainte-Catherine, Montréal', 'Canada', '+1 514-340-6000'),
(89, 'Langara College', '100 W 49th Ave, Vancouver, BC V5Y 2Z6', 'Canada', '+1 604-323-5511'),
(90, 'Memorial University of Newfoundland', '230 Elizabeth Ave, St. John''s, NL A1B 3X9', 'Canada', '+1 709-864-8000'),
(91, 'Athabasca University', '1 University Dr, Athabasca, AB T9S 3A3', 'Canada', '+1 800-788-9041'),
(92, 'University of Windsor', '401 Sunset Ave, Windsor, ON N9B 3P4', 'Canada', '+1 519-253-3000'),
(93, 'Wilfrid Laurier University', '75 University Ave W, Waterloo, ON N2L 3C5', 'Canada', '+1 519-884-1970'),
(94, 'College Montmorency', '475 Boulevard de l''Avenir, Laval, QC H7N 5H9', 'Canada', '+1 450-975-6100'),
(95, 'Fanshawe College', '1001 Fanshawe College Blvd, London, ON N5Y 5R6', 'Canada', '+1 519-452-4277'),
(96, 'Fleming College', '1005 Elgin St W, Cobourg, ON K9A 5J4', 'Canda', '+1 705-749-5530'),
(97, 'Université du Québec en Outaouais', '283 Boul Alexandre-Taché, Gatineau, QC J8X 3X7', 'Canada', '+1 819-595-3900'),
(98, 'SAIT Polytechnic', '1301 16 Ave NW, Calgary, AB T2M 0L4', 'Canada', '+1 877-284-7248'),
(99, 'University of Auckland', 'Auckland, 1010', 'New Zealand', '+64 9-373 7999'),
(100, 'University of Otago', '362 Leith St., North Dunedin, Dunedin 9016', 'New Zealand', '+64 3-479 7000'),
(101, 'Auckland University of Technology', '55 Wellesley St. East, Auckland Central', 'New Zealand', '+64 9 921 9999'),
(102, 'Victoria University of Wellington', 'Kelbum, Wellington', 'New Zealand', '+64 4-472 1000'),
(103, 'University of Canterbury', '20 Kirkwood Ave, Upper Riccarton, Christchurch 8041', 'New Zealand', '+64 3-366 7001'),
(104, 'Unitec Institute of Technology', '139 Carrington Road, Mount Albert, Auckland', 'New Zealand', '+64 9-815 4321'),
(105, 'Massey University', 'Albany Express, Albany 0632', 'New Zealand', '+64 6 350 5701'),
(106, 'University of Waikato', 'Te Whare Wananga o Waikato, Gate 1 ', 'New Zealand', '+64 7 856 2889'),
(107, 'The Open Polytechnic of New Zealand', '3 Cleary St., Waterloo, Lower Hutt 5011', 'New Zealand', '+64 508 650 200'),
(108, 'Lincoln University', 'Ellesmere Jct Rd., Lincoln 7647', 'New Zealand', '+64 3-325 2811'),
(109, 'Toi Ohomai Institute of Technology', 'Toi Ohomai Rotorua, Private Bag 3028, Rotorua, 3046', 'New Zealand', '+64 7 346 8999'),
(110, 'Nelson Marlborough Institute of Technology', '322 Hardy St., Nelson 7010', 'New Zealand', '+64 3-546 9175'),
(111, 'Universal College of Learning', 'Corner King and Princess St., Palmerston North 4442', 'New Zealand', '+64 6-952 7000'),
(112, 'Eastern Institute of Technology', '501 Gloucester St., Taradale, Napler 4112', 'New Zealand', '+64 6-974 8000'),
(113, 'Christchurch Polytechnic Institute of Technology', '130 Madras St., Christchurch Central, Christchurch 8011', 'New Zealand', '+64 3-940 8000'),
(114, 'Institute of the Pacific United', '57 Aokautere  Dr., Fitzherbert, Palmerston North 4410', 'New Zealand', '+64 800 367 472'),
(115, 'De La Salle College', '81 Gray Ave., Mangere East, Auckland 2024', 'New Zealand', '+64 9-276 4319'),
(116, 'Tamaki College', 'Elstree Ave., Glen Innes, Auckland 1072', 'New Zealand', '+64 9-521 1104'),
(117, 'Laidlaw College', '80 Central Park Dr., Henderson, Auckland 0610', 'New Zealand', '+64 9-836 7800'),
(118, 'New Zealand College of Chiropractic', '6 Harrison Rd, Mount Wellington, Auckland 1060', 'New Zealand', '+64 9-526 2100'),
(119, 'Rodney College', '287 Rodney St, Wellsford 0900', 'New Zealand', '+64 9-423 6030'),
(120, 'Telford', '498 Owaka Highway, Waitepeka 9240', 'New Zealand', '+64 3-419 0300'),
(121, 'Aoraki Polytechnic', '32 Arthur St, Timaru Central, Timaru 7910', 'New Zealand', '+64 800 242 476'),
(122, 'Carey Baptist College', '473 Great South Rd, Penrose, Auckland 1062', 'New Zealand', '+64 9-525 4017'),
(123, 'ACG New Zealand International College', '5/345 Queen St, Auckland, 1010', 'New Zealand', '+64 9-307 5399'),
(124, 'New Zealand School of Music', '83 Kelburn Parade, Kelburn, Wellington 6012', 'New Zealand', '+64 4-463 5369'),
(125, 'Chanel College', 'Herbert St, Masterton 5810', 'New Zealand', '+64 6-370 0612'),
(126, 'Howick College', '25 Sandspit Rd, Howick, Auckland 2014', 'New Zealand', '+64 9-534 4492'),
(127, 'Massey University', 'Palmerston North', 'New Zealand', '+64 6 350 5701'),
(128, 'Nelson School of Music', '8 Nile St, Nelson, 7010', 'New Zealand', '+64 3-548 9477'),
(129, 'New Zealand Film Academy', '85 Airedale St, Auckland, 1010', 'New Zealand', '+64 22 424 6622'),
(130, 'Mangere College', '23 Bader Dr, Mangere, Auckland 2022', 'New Zealand', '+64 9-275 4029'),
(131, 'Te Wananga o Aotearoa', '15 Canning Cres, Mangere, Auckland 2022', 'New Zealand', '+64 9-256 5900'),
(132, 'University of Waikato Management School', 'Hillcrest Rd, Hillcrest, Hamilton 3240', 'New Zealand', '+64 7-838 4477'),
(133, 'Tairawhiti Polytechnic', '290-291 Palmerston Rd, Gisborne, 4010', 'New Zealand', '+64 6-869 0810'),
(134, 'Good Shepherd College', '20 Ponsonby Rd, Ponsonby, Auckland 1011', 'New Zealand', '+64 9-361 1053'),
(135, 'West City Christian College', '4341 Great North Rd, Henderson, Auckland 0610', 'New Zealand', '+64 9-838 7710'),
(136, 'Massey University', 'Massey University East Precinct, Dairy Flat Highway, 0632', 'New Zealand', '+64 800 627 739'),
(137, 'Can Tho University', 'Ba Tháng Hai, Xuân Khánh, Ninh Kieu, Can Tho', 'Vietnam', '+84 710 3838 47'),
(138, 'Ho Chi Minh University of Industry', '12 Nguyn Van Bao, Quyet Thang, Tp. Biên Hòa, Quyet Thang', 'Vietnam', '+84 8 3894 0390'),
(139, 'University of Malaya', 'Jalan Universiti, 50603 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'Malaysia', '+60 17-286 6261'),
(140, 'University of Technology, Malaysia', 'Pusat Pentadbiran Universiti Teknologi Malaysia, Office of Corporate Affairs, UTM, 81310 Skudai', 'Malaysia', '+60 7-553 3333'),
(141, 'Universiti Putra Malaysia', 'Jalan Upm, 43400 Serdang, Selangor', 'Malaysia', '+60 1800225587'),
(142, 'University of Kuala Lumpur', 'Menara Mbf, 22, Jalan Sultan Ismail, Kuala Lumpur, 50450 Kuala Lumpur, Selangor,', 'Malaysia', '+60 12-222 2061'),
(143, 'International Islamic University Malaysia', 'Jalan Gombak, 53100 Kuala Lumpur, Selangor', 'Malaysia', '+60 3-6196 5601'),
(144, 'Taylor''s University', '1, Jalan SS15/8, Ss 15, 47500 Subang Jaya, Selangor', 'Malaysia', '+60 3-5636 2641'),
(145, 'Monash University Malaysia Campus', 'Jalan Lagoon Selatan, Bandar Sunway, 47500 Subang Jaya, Selangor', 'Malaysia', '+60 3-5514 6000'),
(146, 'University of Nottingham Malaysia Campus', 'Jalan Broga, 43500 Semenyih, Selangor', 'Malaysia', '+60 3-8924 8000'),
(147, 'Universiti Teknologi MARA', '40450 Shah Alam, Selangor', 'Malaysia', '+60 3-5544 2000'),
(148, 'National University of Malaysia', 'Pekan Bangi, 43600 Bangi, Selangor', 'Malaysia', '+60 3-8921 5555'),
(149, 'Open University Malaysia', 'Jalan Tun Ismail, Kuala Lumpur, 50480 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'Malaysia', '+60 3-2773 2002'),
(150, 'Universiti Tunku Abdul Rahman', 'Jalan Universiti Bandar Barat, 31900, Kampar, Perak', 'Malaysia', '+60 5-468 8888'),
(155, 'Sunway University', '5, Jalan Universiti, Bandar Sunway, 47500 Subang Jaya, Selangor', 'Malaysia', '+60 3-7491 8622'),
(156, 'Tunku Abdul Rahman University College', 'Kampus Utama, Jalan Genting Kelang, 53300 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'Malaysia', '+60 3-4145 0123'),
(157, 'Universiti Utara Malaysia', 'Sintok, 06010 Universiti Utara Malaysia, Kedah', 'Malaysia', '+60 4-928 4000'),
(158, 'Sultan Idris Education University', 'Tanjong Malim, Perak Darul Ridzuan 35900', 'Malaysia', '+60 5-450 6000'),
(159, 'UCSI University', 'Jalan Menara Gading, Taman Connaught, 56000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'Malaysia', '+60 3-9101 8880'),
(160, 'University of Kuala Lumpur', 'Menara Mbf, 22, Jalan Sultan Ismail, Kuala Lumpur, 50450 Kuala Lumpur, Selangor', 'Malaysia', '+60 12-222 2061'),
(161, 'Universiti Tun Hussein Onn Malaysia', '86400 Parit Raja, Johor', 'Malaysia', '+60 7-453 7000'),
(162, 'Universiti Tenaga Nasional', 'Block Administration, Jalan Serdang, Seksyen 11, Selangor, 43650 Bandar Baru Bangi', 'Malaysia', '+60 3-8921 2020'),
(163, 'Universiti Teknikal Malaysia Melaka', 'Hang Tuah Jaya, 76100 Durian Tunggal, Malacca', 'Malaysia', '+60 6-555 2000'),
(164, 'Universiti Teknologi Petronas', 'Seri Iskandar, 32610 Teronoh, Perak', 'Malaysia', '+60 5-368 8000'),
(165, 'Universiti Malaysia Sabah', 'Jalan UMS, 88400 Kota Kinabalu, Sabah', 'Malaysia', '+60 88-320 000'),
(166, 'Limkokwing University of Creative Technology', 'Inovasi 1-1, Jalan Teknokrat 1/1, Cyberjaya, 63000 Cyberjaya, Selangor', 'Malaysia', '+60 3-8317 8888'),
(167, 'Universiti Sains Islam Malaysia', ' Bandar Baru Nilai, 71800 Nilai, Negeri Sembilan', 'Malaysia', '+60 6-798 8000'),
(168, 'Multimedia University', 'Multimedia University Jalan Multimedia, 63000 Cyberjaya, Selangor', 'Malaysia', '+60 130080-0668'),
(169, 'Universiti Malaysia Sarawak', 'Jalan Dato Mohd Musa, 94300 Kota Samarahan, Sarawak', 'Malaysia', '+60 82-581 000'),
(170, 'SEGi University', '9 Jalan Teknologi, Taman Sains Selangor, PJU 5, Kota Damansara, 47810 Petaling Jaya, Selangor', 'Malaysia', '+60 3-6145 1777'),
(171, 'University of Selangor', 'Jalan Zircon A7/A, Seksyen 7, 40000 Shah Alam, Selangor', 'Malaysia', '+60 3-5513 7957'),
(172, 'INTI International University', 'Persiaran Perdana BBN, Putra Nilai, 71800 Nilai, Negeri Sembilan', 'Malaysia', '+60 6-798 2000'),
(173, 'Kolej Universiti Islam Antarabangsa Selangor', 'Bandar Seri Putra, 43000 Kajang, Selangor', 'Malaysia', '60 3-8911 7000'),
(174, 'Wawasan Open University', '54, Jalan Sultan Ahmad Shah, 10050 Georgetown, Pulau Pinang', 'Malaysia', '+60 4-218 0133'),
(175, 'HELP University', ' Wilayah Persekutuan,, 15, Jalan Sri Semantan 1, Bukit Damansara, 50490 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'Malaysia', '+60 3-2716 2000'),
(176, 'Universiti Malaysia Perlis', ' 02600 Arau, Perlis', 'Malaysia', '+60 4-979 8008'),
(177, 'Asia Pacific University of Technology & Innovation', 'Technology Park Malaysia, Bukit Jalil, 57000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'Malaysia', '+60 3-8996 1000'),
(178, 'Universiti Sultan Zainal Abidin', ' Gong Badak, 21300 Kuala Terengganu, Terengganu', 'Malaysia', '+60 9-668 8888'),
(179, 'Universiti Malaysia Pahang', 'Pekan Pahang, 26600 Pekan Pahang, Pahang', 'Malaysia', '+609-4245000'),
(180, 'Universiti Malaysia Kelantan', ' Pengkalan Chepa, Taman Bendahara, 16100 Kota Bharu, Kelantan', 'Malaysia', '+60 9-771 7000'),
(181, 'Infrastructure University Kuala Lumpur', 'Jalan Ikram-Uniten, Unipark Suria, Selangor, 43000 Kajang', 'Malaysia', '+60 3-8738 3339'),
(182, 'Universiti Malaysia Terengganu', 'T145, 21300 Kuala Terengganu, Terengganu', 'Malaysia', '+60 9-668 4100'),
(183, 'Al-Madinah International University', 'Plaza Masalam, 11th floor, Jalan Tengku Ampuan Zabedah E 9/E, Seksyen 9, 40100 Shah Alam, Selangor', 'Malaysia', '+60 3-5511 3939'),
(184, 'KDU University College', ' Pjs 13, 46200 Petaling Jaya, Selangor', 'Malaysia', '+60 3-5565 0638'),
(185, 'International Medical University', '126, Jln Jalil Perkasa 19, Bukit Jalil, 57000 Bukit Jalil, Wilayah Persekutuan Kuala Lumpur', 'Malaysia', '+60 3-8656 7228'),
(186, 'Asia e University', ' Kampung Attap, 50000 Kuala Lumpur, Federal Territory of Kuala Lumpur', 'Malaysia', '+60 3-2785 0000'),
(187, 'Management and Science University', 'Seksyen 13, 40150 Shah Alam, Selangor', 'Malaysia', '+60 3-5521 6868'),
(188, 'Universiti Sultan Azlan Shah', 'Bukit Chandan, 33000 Kuala Kangsar, Perak', 'Malaysia', ''),
(189, 'Kuala Lumpur Metropolitan University College', 'Level 20, Menara Tun Ismail Mohamed Ali,, 25, Jalan Raja Laut, Chow Kit, 50350 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'Malaysia', '+60 3-2604 6000'),
(190, 'International University of Malaya-Wales', 'Ground Floor, Block A, City Campus, Jalan Tun Ismail, 50480 Kuala Lumpur, Federal Territory of Kuala Lumpur', 'Malaysia', '+60 3-2617 3000'),
(191, 'Kolej Universiti Insaniah', 'Kampung Titi Panjang, 09100 Kuala Ketil, Kedah', 'Malaysia', '+60 4-415 5000'),
(192, 'Ibrahim Sultan Polytechnic', 'KM 10, Jalan Kong Kong, 81700 Pasir Gudang, Johor', 'Malaysia', '+60 7-261 2488'),
(193, 'University of Brunei Darussalam', 'Jalan Tungku Link, Gadong BE1410', 'Brunei', '+673 246 3001'),
(194, 'University of Technology Brunei', 'Jalan Tungku Link, Mukim Gadong A, BE1410', 'Brunei', '+673 246 1020'),
(195, 'Sultan Sharif Ali Islamic University', 'Simpang 347 Jalan Pasar Gadong, Bandar Seri Begawan', 'Brunei', '+673 246 2000'),
(196, 'University of Indonesia', 'Pondok Cina, Beji, Depok City, West Java 16424', 'Indonesia', '+62 21 7867222'),
(197, 'Sultan Saiful Rijal Technical College', 'Simpang 125, Bandar Seri Begawan', 'Brunei', '+673 233 1077'),
(198, 'Jefri Bolkiah Engineering College', 'Jln. Setia Negara, Kuala Belait\r\nNegara Brunei Darussalam', 'Brunei', '+673 3 332902'),
(200, 'Gadjah Mada University', 'Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'Indonesia', '+62 274 588688'),
(201, 'Bandung Institute of Technology', 'Jl. Ganesha No.10, Lb. Siliwangi, Coblong, Kota Bandung, Jawa Barat 40132', 'Indonesia', '+62 22 2500935'),
(202, 'Jakarta State University', 'Jl. Rawamangun Muka, Rawamangun, RT.11/RW.14, Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220', 'Indonesia', '+62 21 4898486'),
(203, 'University of Brawijaya', 'Jl. Veteran, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Indonesia', '+62 341 551611');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
  ADD PRIMARY KEY (`school_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
