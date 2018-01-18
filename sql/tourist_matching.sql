-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 06:37 AM
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
-- Table structure for table `tourist_matching`
--

CREATE TABLE `tourist_matching` (
  `ID` int(3) NOT NULL,
  `Spots_Name` varchar(50) NOT NULL,
  `Spots_Address` varchar(150) NOT NULL,
  `Spots_Category` varchar(15) NOT NULL,
  `Spots_Country` varchar(20) NOT NULL,
  `fare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist_matching`
--

INSERT INTO `tourist_matching` (`ID`, `Spots_Name`, `Spots_Address`, `Spots_Category`, `Spots_Country`, `fare`) VALUES
(1, 'Sydney Opera House', 'Bennelong Point, Sydney NSW 2000', 'Landmarks', 'Australia', 280000),
(2, 'Great Barrier Reef', 'Queensland in northeastern Australia', 'Natural', 'Australia', 180000),
(3, 'Sydney Harbour Bridge', 'Sydney Harbour Bridge, Sydney NSW, Australia', 'Landmarks', 'Australia', 240000),
(4, 'Fraser Island', 'Australia Eastern Queensland coast', 'Natural', 'Australia', 340000),
(5, 'Kakadu National Park', 'Kakadu Hwy, Jabiru NT 0886, Australia', 'Natural', 'Australia', 456220),
(6, 'Banff National Park', 'Improvement District No. 9, AB T0L, Canada', 'Natural', 'Canada', 320000),
(7, 'Canadian Rockies', 'Canadian Rockies, Canada', 'Natural', 'Canada', 253000),
(8, 'CN Tower', '301 Front St W, Toronto, ON M5V 2T6, Canada', 'Landmarks', 'Canada', 156200),
(9, 'Stanley Park', 'Vancouver, BC V6G 1Z4, Canada', 'Landmarks', 'Canada', 256000),
(10, 'Jasper National Park', 'Jasper, AB T0E 1E0, Canada', 'Natural', 'Canada', 598230),
(11, 'Hobbiton Movie Set', '501 Buckland Rd, Hinuera, Matamata 3472, New Zealand', 'Landmarks', 'New Zealand', 156820),
(12, 'Tongariro National Park', 'Manawatu-Wanganui 4691, New Zealand', 'Natural', 'New Zealand', 165483),
(13, 'Bay of Islands', 'Bay of Islands, New Zealand', 'Natural', 'New Zealand', 135684),
(14, 'Lake Wanaka', 'Lake Wanaka, Otago, New Zealand', 'Natural', 'New Zealand', 544531),
(15, 'Waiheke Island', 'Waiheke Island, Auckland, New Zealand', 'Natural', 'New Zealand', 145640),
(16, 'Petronas Twin Towers KLCC', 'Kuala Lumpur City Centre, 50088 Kuala Lumpur, Federal Territory of Kuala Lumpur, Malaysia', 'Landmarks', 'Malaysia', 458452),
(17, 'KL Bird Park', 'KL Bird Park, 920, Jalan Cenderawasih, Tasik Perdana, 50480 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur, Malaysia', 'Natural', 'Malaysia', 156410),
(18, 'Kek Lok Si Temple', '1000-L, Tingkat Lembah Ria 1, 11500 Ayer Itam, Pulau Pinang, Malaysia', 'Landmarks', 'Malaysia', 512645),
(19, 'Muzium Kesenian Islam Malaysia', 'Jalan Lembah Perdana, Tasik Perdana, Wilayah Persekutuan, 50480 Kuala Lumpur, Malaysia', 'Landmarks', 'Malaysia', 144324),
(20, 'Langkawi Cable Car', 'Jalan Telaga Tujuh, 07000 Langkawi, Kedah, Malaysia', 'Natural', 'Malaysia', 456132),
(21, 'Tanah Lot', 'Beraban, Kediri, Tabanan Regency, Bali, Indonesia', 'Historical', 'Indonesia', 415312),
(22, 'Mount Bromo', 'Mt Bromo, Podokoyo, Tosari, Pasuruan, East Java, Indonesia', 'Natural', 'Indonesia', 314654),
(23, 'Sacred Monkey Forest Sanctuary', 'Jl. Monkey Forest, Ubud, Kabupaten Gianyar, Bali 80571, Indonesia', 'Historical', 'Indonesia', 146532),
(24, 'Prambanan Temple', 'Bokoharjo, Prambanan, Sleman Regency, Special Region of Yogyakarta, Indonesia', 'Historical', 'Indonesia', 564235),
(25, 'Mount Batur', 'South Batur, Kintamani, Bangli Regency, Bali, Indonesia', 'Natural', 'Indonesia', 486513);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourist_matching`
--
ALTER TABLE `tourist_matching`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
