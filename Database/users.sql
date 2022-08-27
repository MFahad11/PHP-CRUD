-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 08:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `First_name` text DEFAULT NULL,
  `Last_name` text DEFAULT NULL,
  `Email` varchar(35) DEFAULT NULL,
  `Number` varchar(11) DEFAULT NULL,
  `Pass` varchar(10) DEFAULT NULL,
  `Province` varchar(20) DEFAULT NULL,
  `City` varchar(15) DEFAULT NULL,
  `Address` varchar(256) DEFAULT NULL,
  `Zip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`First_name`, `Last_name`, `Email`, `Number`, `Pass`, `Province`, `City`, `Address`, `Zip`) VALUES
('Fahad', 'Ahad', 'fahadahad567@gmail.com', '03341242344', 'english', 'sindh', 'Karachi', 'Sheet-19 Block A House No. 47 Saima Arabian Villas Karachi', 75340),
('Fawad', 'Ahmad', 'ahmadfawad12@gmail.com', '03141242321', 'urdue', 'sindh', 'Karachi', 'Nazimabad Block 6', 75340),
('Ahmad', 'Jahanzaib', 'jahanzaib098@gmail.com', '03102841105', 'a12345', 'sindh', 'Karachi', 'Malir block 7', 991),
('Daniyal', 'Ahad', 'fahadahad129@gmail.com', '03102941086', 'b12345', 'Sindh', 'Hyedrabad', 'Block 7 Latifabad', 12309),
('Sahal', 'Muzammil', 'sahal0129@gmail.com', '03112841086', 'c12345', 'Sindh', 'Hyedrabad', 'Block 7 Latifabad', 12309),
('Tayyab', 'Ahad', 'ahadtayyab29@gmail.com', '03102841886', 'd12345', 'Sindh', 'Sukkur', 'Block 7 Latifabad', 12309),
('Raniya', 'Ahad', 'raniya188@gmail.com', '03102841081', 'e12345', 'Punjab', 'Lahore', 'Block 7 Latifabad', 12309),
('Ali', 'Khan', 'khan667@gmail.com', '03103841086', 'f12345', 'Punjab', 'Lahore', 'Block 7 Latifabad', 12309),
('Taimoor', 'Zahid', 'taimmor5679@gmail.com', '03102849086', 'g12345', 'Punjab', 'Lahore', 'Block 7 Latifabad', 12309),
('Zohaib', 'Ahmed', 'zohaib908@gmail.com', '03112841086', 'h12345', 'Punjab', 'Lahore', 'Block 7 Latifabad', 12309),
('Noman', 'Ameer', 'noma129@gmail.com', '03102832186', 'i12345', 'Punjab', 'Faislabad', 'Block 7 Latifabad', 12309),
('Nawaz', 'Ayaz', 'ayaznawaz@gmail.com', '03152841086', 'j12345', 'Punjab', 'Islamabad', 'Block 7 Latifabad', 12309),
('Arsalan', 'Ameer', 'ameerarsal9@gmail.com', '03152846086', 'k12345', 'KPK', 'Peshawar', 'Block 7 Latifabad', 12309),
('Shaban', 'Ameer', 'ameershaban1@gmail.com', '03162845086', 'l12345', 'KPK', 'Peshawar', 'Block 7 Latifabad', 12309),
('Sufiyan', 'Ameer', 'sufiyan1@gmail.com', '03102841076', 'm12345', 'KPK', 'Peshawar', 'Block 7 Latifabad', 12309),
('Faizan', 'Ameer', 'faizanameer9@gmail.com', '03102841066', 'n12345', 'KPK', 'Abottabad', 'Block 7 Latifabad', 12309),
('Affan', 'Shaban', 'affan1@gmail.com', '03104584108', 'o12345', 'KPK', 'Abottabad', 'Block 7 Latifabad', 12309),
('Shayan', 'Shahid', 'shayan456@gmail.com', '03102941086', 'p12345', 'KPK', 'Abottabad', 'Block 7 Latifabad', 12309),
('Hamdan', 'Sufiyan', 'hamdan77@gmail.com', '03122841086', 'q12345', 'Punjab', 'Faislabad', 'Block 7 Latifabad', 12309),
('Sadan', 'Sufiyan', 'sufiyansadan9@gmail.com', '03002841086', 'r12345', 'Punjab', 'Multan', 'Block 7 Latifabad', 12309),
('Wajdan', 'Faizan', 'wajdan29@gmail.com', '03002840986', 's12345', 'Sindh', 'Karachi', 'Block 7 Latifabad', 12309),
('Nooriyan', 'Arsalan', 'nooriyan12@gmail.com', '03003601086', 't12345', 'Sindh', 'Karachi', 'Block 7 Latifabad', 12309),
('Mustafa', 'Haneef', 'haneefmus129@gmail.com', '03012841086', 'u12345', 'Sindh', 'Karachi', 'Block 7 Latifabad', 12309),
('Unais', 'Noman', 'nomanunais2@gmail.com', '03102341086', 'v12345', 'Sindh', 'Mirpurkhas', 'Block 7 Latifabad', 12309),
('Hamza', 'Khan', 'khanhamza@gmail.com', '03042841086', 'w12345', 'Sindh', 'Sajawal', 'Block 7 Latifabad', 12309),
('Bilal', 'Owais', 'bilal9@gmail.com', '03152841086', 'x12345', 'Sindh', 'Hyedrabad', 'Block 7 Latifabad', 12309),
('Abdul Ahad', 'Akhtar', 'ahad09@gmail.com', '03152851086', 'y12345', 'Punjab', 'Sahiwal', 'Block 7 Latifabad', 12309),
('Abdul Qadir', 'Akhtar', 'qadir555@gmail.com', '03102856686', 'z12345', 'Punjab', 'Islamabad', 'Block 7 Latifabad', 12309),
('Abdul Wahab', 'Akhtar', 'wahab2118@gmail.com', '03102841086', 'w17345', 'Balochistan', 'Quetta', 'Block 7 Latifabad', 12309),
('Hammad', 'Fareed', 'fareedhammad776@gmail.com', '03102841086', 'b12345', 'Balochistan', 'Quetta', 'Block 7 Latifabad', 12309),
('Wajeeh ', 'Fareed ', 'wajeeh@gmail.com', '03102841086', 'k12385 ', 'Balochistan ', 'Sibbi', 'Block 7 Latifabad', 12309),
('Owais', 'Hamid', 'owais667@gmail.com', '03152841206', 'b12125', 'Balochistan', 'Quetta', 'Block 7 Latifabad', 12309),
('Anas', 'Javeed', 'anasjaveed376@gmail.com', '03142841086', 'l13m45', 'Balochistan', 'Quetta', 'Block 7 Latifabad', 12309),
('Raheel', 'Latif', 'raheel666@gmail.com', '03134841086', 'ba2345', 'Balochistan', 'Quetta', 'Block 7 Latifabad', 12309),
('Dawood', 'Ahmad', 'dawoodabc@gmail.com', '03102841086', 'bb8345', 'Punjab', 'Rawalpindi', 'Block 7 Latifabad', 12309),
('Hassan', 'Ahad', 'fd129@gmail.com', '03102841086', 'aq1345', 'Punjab', 'Rawalpinndi', 'Block 7 Latifabad', 12309),
('Abdullah', 'Akhlaq', 'abdullah129@gmail.com', '03102841086', 'b12390', 'Punjab', 'Lahore', 'Block 7 Latifabad', 12309);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
