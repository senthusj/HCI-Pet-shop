-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 07:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `add_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addnotification`
--

CREATE TABLE `addnotification` (
  `no_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addnotification`
--

INSERT INTO `addnotification` (`no_id`, `customer_id`) VALUES
(0, 3),
(0, 5),
(0, 5),
(0, 5),
(0, 11),
(0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email_id`, `password`) VALUES
(1, 'baskaranajiharan1234@gmail.com', 'Haran0000');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `speciallist` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `customer_id`, `name`, `email`, `contact_number`, `speciallist`, `date`, `time`, `location`, `reason`) VALUES
(1, 5, 'david', 'john@gmail.com', 774568987, 'Veterinary Internal Medicine', '2018-10-24', 'morning', 'jaffna', '		medical clinic					'),
(2, 5, 'Johnian', 'john@gmail.com', 778965485, 'Veterinary Neurologist', '2018-10-06', 'evening', 'thirunalvelly', 'regular check up				'),
(3, 10, 'siva', 'kamal@gmail.com', 778521475, 'Veterinary Neurologist', '2018-11-16', 'night', 'kandy', '				get medicine			'),
(4, 10, 'kamalan', 'kamal@gmail.com', 778956235, 'Veterinary Internal Medicine', '2018-10-16', 'morning', 'kandy', 'get medical check up				'),
(5, 10, 'kamalan', 'kamal@gmail.com', 778956235, 'Veterinary Neurologist', '2018-10-23', 'evening', 'kandy', 'get medical check up				'),
(6, 12, 'rakini', 'rakini@gmail.com', 772696321, 'Veterinary Neurologist', '2018-10-23', 'night', 'kokuvil', '					get medical clinic		'),
(7, 6, 'jathushan', '1234@gmail.com', 765486079, 'Veterinary Cardiologist', '2020-10-20', 'Morning', 'jaffna', '		asxsax					');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `card_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `expdate`, `zipcode`, `card_no`) VALUES
(1, '2020-09-21', '100', '4235789610257431'),
(2, '2020-09-21', '150', '4178932011478632'),
(3, '2021-06-21', '175', '4236789412007524'),
(4, '2021-04-11', '200', '4122369848963201'),
(5, '2021-06-21', '250', '4369784512308945');

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`category_id`, `category_name`) VALUES
(1, 'Doghouse'),
(2, 'Fishhouse'),
(3, 'cathouse'),
(4, 'dogfood\r\n'),
(5, 'catthings'),
(6, 'reptile'),
(7, 'catfood'),
(8, 'cat'),
(9, 'bird'),
(10, 'smallpet'),
(11, 'dog'),
(12, 'fish'),
(13, 'birdfood'),
(14, 'fishfood'),
(15, 'dogthings'),
(16, 'fishthings'),
(17, 'birdhouse');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone_no` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `customer_id`, `fullname`, `email_id`, `phone_no`, `message`) VALUES
(1, 10, 'peterparker', 'peter@gmail.com', 778978458, 'Please call me I want to get some product informations from you'),
(2, 10, 'peterparker', 'peter@gmail.com', 778978458, 'Please make me as seller I want to sell some birds.....'),
(3, 3, 'Anantharaja Arun', 'arun@gmail.com', 778952321, 'I want to get more items'),
(4, 3, 'Anantharaja Arun', 'arun@gmail.com', 778952321, 'I would like to sell some fishes '),
(5, 12, 'vimalan rakini', 'rakini@gmail.com', 778963245, 'Give me some details about your marketing process'),
(6, 12, 'vimalan rakini', 'rakini@gmail.com', 778963245, 'Can I sell rabits?\r\nSend me the further informations');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `email_id`, `date`, `gender`, `password`, `admin_id`) VALUES
(1, 'baskaran', 'ajiharan', 'baskaranajiharan1234@gmail.com', '2018-10-10', 'Male', 'Haran0000', 1),
(3, 'Ananthararaja', 'Arunan', 'arun@gmail.com', '2018-09-11', 'Male', 'Arun0000', 1),
(5, 'Johnian', 'david', 'john@gmail.com', '2018-10-23', 'Male', 'John0000', 1),
(6, 'Aaron', 'Davis', 'davis@gmail.com', '1998-01-21', 'Male', 'Aaron0000', 1),
(10, 'kamalan', 'siva', 'kamal@gmail.com', '2018-10-10', 'Male', 'Kamal0000', 1),
(11, 'Peter', 'Parker', 'Peter@gmail.com', '2018-10-10', 'Male', 'Peter0000', 1),
(12, 'vimalan', 'rakini', 'rakini@gmail.com', '2018-10-07', 'female', 'Rakini0000', 1),
(13, 'Raviraj', 'sayanthan', 'saya@gmail.com', '2018-10-07', 'Male', 'Saya0000', 1),
(15, 'Shanmugavel', 'Anushiya', 'shanmuanushiya@gmail.com', '1994-10-09', 'Male', 'anu00000A', 1),
(16, 'S', 'Lathusha', 'slath123@gmail.com', '1960-10-01', 'Female', 'Slath123000', 1),
(18, 'Anandarajah', 'Sinthujan', 'a.sinthujan99@gmail.com', '1998-01-11', 'Male', '0776012121Ss@#$', 1),
(19, 'jathushan', 'v', 'jathu.js1@gmail.com', '1997-12-01', 'Male', 'Ja123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `user_interface` varchar(255) DEFAULT NULL,
  `pet_details` varchar(255) DEFAULT NULL,
  `auto_log` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `message`, `email_id`, `customer_id`, `user_interface`, `pet_details`, `auto_log`) VALUES
(1, 'good', 'kamal@gmail.com', 5, 'lowlevel', 'Not enough', 'priority members'),
(2, 'please give pet/products details', 'kamal@gmail.com', 5, 'High level', 'Enough', 'priority members'),
(3, 'Please add more products', 'Peter@gmail.com', 11, 'lowlevel', 'Great', 'priority members'),
(4, 'Add more details about products', 'Peter@gmail.com', 11, 'lowlevel', 'Not enough', 'Users'),
(5, 'good', 'rakini@gmail.com', 12, 'lowlevel', 'Not enough', 'priority members'),
(6, 'not bad but improve user interface', 'rakini@gmail.com', 12, 'High level', 'Enough', 'Users');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `price` int(225) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `item_link` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `price`, `image`, `item_name`, `category_id`, `item_link`, `admin_id`) VALUES
(1, 500, 'Marshall Premium Ferret Food.jpg', 'food', 10, 'small pet.php', 1),
(2, 5800, 'dh1.png', 'Kennel Cab Soft Sided Pet Carrier', 1, 'Dog House.php', 1),
(3, 800, '1004.jpg', 'fishtank1', 2, 'Fish Tank.php', 1),
(4, 900, '008.jpg', 'fish_tank2', 2, 'Fish Tank.php', 1),
(5, 5000, 'Heated Outdoor cat.jpg', 'Heated Outdoor cat', 3, 'Cat House.php', 1),
(6, 2000, 'df1.jpg', 'Hill\'s Science Diet Mature Adult Dog Food', 4, 'dog food.php', 1),
(7, 2500, 'Dinosaur Cat Hat,jpg', 'Dinosaur Cat Hat', 5, 'cat shop-accesoreis.php', 1),
(8, 500, 'Tetrafauna Reptomin Aquatic Turtle, Newt and Frog Floating Food Sticks.jpg', 'reptile_food1', 6, 'reptiles.php', 1),
(9, 8500, 'cf1.jpg', 'Grain Free, Turkey,Chicken & Duck', 7, 'cat food.php', 1),
(10, 2000, 'cf4.jpg', 'Cat Treats', 7, 'cat food.php', 1),
(11, 5000, 'g1.jpg', 'Bigeons and Doves', 9, 'bird.php', 1),
(12, 1100, 'Angora Rabbit.jpg', 'smallpet1', 10, 'small pet.php', 1),
(13, 1000, 'Beagle dog.jpg', 'dog2', 11, 'dog.php', 1),
(14, 1300, 'fancy bear hamster.jpg', 'smallpet2', 10, 'small pet.php', 1),
(15, 1200, 'roborovski dwart hamster.png', 'smallpet4', 10, 'small pet.php', 1),
(16, 75000, 'Akita_Inu.jpg', 'Akita Inu', 11, 'dog.php', 1),
(17, 2700, 'g2.jpg', 'Blue Parakeet', 9, 'bird.php', 1),
(18, 2400, '789.png', 'dog5', 11, 'dog.php', 1),
(19, 2000, 'g7.jpg', 'Rose ringed Parakeet', 9, 'bird.php', 1),
(20, 1200, 'winter white hamster.jpg', 'smallpet5', 10, 'small pet.php', 1),
(21, 2100, 'e04.jpg', 'fish4', 12, 'fish.php', 1),
(22, 2000, 'Angora Rabbit.jpg', 'smallpet7', 10, 'small pet.php', 1),
(23, 3000, 'Akita_Inu.jpg', 'dog6', 11, 'dog.php', 1),
(24, 28000, 'g4.jpg', 'Domestic Canary', 9, 'bird.php', 1),
(25, 300000, 'g5.jpg', 'Green Parakeet', 9, 'bird.php', 1),
(26, 52000, 'g8.jpg', 'Macaw', 9, 'bird.php', 1),
(27, 12000, 'bf1.jpg', 'Grreat Choice Wild Bird Seed Mix', 13, 'Bird food.php', 1),
(28, 17000, 'bf2.jpg', 'Stawberry Millet Spray', 13, 'Bird food.php', 1),
(29, 15000, 'bf3.jpg', ' Gourmet Blend Wild Bird Food', 13, 'Bird food.php', 1),
(30, 22000, 'bf4.png', 'Stokes Select Berry Suet', 13, 'Bird food.php', 1),
(31, 17000, 'bf5.png', 'Forti-Diet Pro Health Parakeet Treat Stick Bird Treat', 13, 'Bird food.php', 1),
(32, 500, 'bh1.jpg', 'Red Rock Twin Chamber Bird Seed Feeder', 17, 'bird House.php', 1),
(33, 750, 'bh2.jpg', 'Single Suet Cage', 17, 'bird House.php', 1),
(34, 95000, 'bh3.jpg', 'SureFill Medium Plastic Tube Feeder', 17, 'bird House.php', 1),
(35, 85000, 'bh4.jpg', 'Prevue Pet Products Good Night Bird Cage Cover', 17, 'bird House.php', 1),
(36, 50000, 'bh5.jpg', 'Treat Play-N-Learn Cockatiel Cage', 17, 'bird House.php', 1),
(37, 100, 'bh6.jpg', 'Wood Table Top Playstand', 17, 'bird House.php', 1),
(38, 11000, 'bf6.jpg', 'Natural Orange Slices Bird Treat', 13, 'bird House.php', 1),
(39, 22000, 'befriend cat.jpg', 'Befriend cat', 8, 'cat.php', 1),
(40, 2300, 'Abyssinian Profile.jpg', 'Abyssinian Profile', 8, 'cat.php', 1),
(41, 21500, 'Burmese Laying.jpg', 'Burmese Laying', 8, 'cat.php', 1),
(42, 35000, 'Birman Brown Kitty.jpg', 'Birman Brown Kitty', 8, 'cat.php', 1),
(43, 25000, 'Birman Kitty.jpg\"', 'Birman Kitty', 8, 'cat.php', 1),
(44, 25000, 'Bobtail Cat Standing.jpg', 'Bobtail Cat Standing', 8, 'cat.php', 1),
(46, 2000, 'cf6.jpg', 'Temptations mix ups catnip Fever cat treat', 7, 'cat food.php', 1),
(47, 5000, 'cf2.jpg', 'Hill\'s Prescription Diet kidney Care', 7, 'cat food.php', 1),
(48, 3000, 'cf3.jpg', 'Puria Friskies Party Mix Cat Treats', 7, 'cat food.php', 1),
(49, 37000, 'Cat Bow tie.jpg', 'Cat Bow tie', 5, 'cat shop-accesoreis.php', 1),
(50, 5000, 'Cat Adjustable Collar.jpg', 'Cat Adjustable Collar', 5, 'cat shop-accesoreis.php', 1),
(51, 4800, 'Mystical Cats Accessory Bag.jpg', 'Mystical Cats Accessory Bag', 5, 'cat shop-accesoreis.php', 1),
(52, 5000, '66.jpg', 'Cat-Clothe', 5, 'cat shop-accesoreis.php', 1),
(53, 4300, 'Cat-Cap.jpg', 'Cat-Cap', 5, 'cat shop-accesoreis.php', 1),
(54, 75000, 'Armarkat Little House pet bed.jpg', 'Armarkat Little House pet bed', 3, 'Cat House.php', 1),
(55, 95000, 'Armarkat Cat Tree.png', 'Armarkat Cat Tree', 3, 'Cat House.php', 1),
(56, 95000, 'American Eskimo Dog.jpg', 'American Eskimo Dog', 11, 'dog.php', 1),
(57, 8500, 'Beagle dog.jpg', 'Beagle dog', 11, 'dpg.php', 1),
(58, 15000, 'df2.jpg', 'Blue\'s Stew Adult Dog Food', 4, 'dog.php', 1),
(59, 1000, 'df3.jpg', 'BLUE Wilderness Adult Dog Food-Grain Free,Natural', 4, 'dog.php', 1),
(60, 75000, 'dh2.png', 'Top Paw Front Carrier Pet Carrier', 1, 'Dog House.php', 1),
(61, 95000, 'dh3.png', 'petmate plastic carriers', 1, 'Dog House.php', 1),
(62, 5000, 'dt1.jpg', 'Grreat Choice Adjustable Mesh Dog Muzzle', 15, 'dog shop_accesoreis.php', 1),
(63, 25000, 'dt2.jpg', 'Doggy dolly dog caterpillar', 15, 'dog shop_accesoreis.php', 1),
(64, 15000, 'dt3.jpg', 'Mad About Dog Fancy Hats', 15, 'dog shop_accesoreis.php', 1),
(65, 50000, '01.jpg', 'Anglefish', 12, 'Fish.php', 1),
(66, 7000, 'a02.jpg', 'balloon belly molly', 12, 'Fish.php', 1),
(67, 9800, 'd01.jpg', 'fancy guppy', 12, 'Fish.php', 1),
(68, 5000, 'ff1.jpg', 'TetraMin Tropical Flakes', 14, 'Fish food.php', 1),
(69, 8000, 'ff2.jpg', 'Tetra TetraFin Goldfish Flakes', 14, 'Fish food.php', 1),
(70, 17000, 'ff3.jpg', 'Tetra TetraColor Tropical Fish Flakes', 14, 'Fish food.php', 1),
(71, 25000, '1001.jpg', 'Fish Tank', 14, 'Fish Tank.php', 1),
(72, 45000, '1002.jpg', 'Fish Tank', 14, 'Fish Tank.php', 1),
(73, 55000, '1003.jpg', 'Fish Tank', 14, 'Fish Tank.php', 1),
(74, 5000, 'ftt1.jpg', 'Imagitarium Blue Jean Aquarium Gravel', 16, 'Fish Décor Gravel Substrate.php', 1),
(75, 4800, 'ftt2.jpg', 'Marina Decorative Gravel', 16, 'Fish Décor Gravel Substrate.php', 1),
(76, 17000, 'ftt3.jpg', 'Pure Water Pebbles Aquarium Gravel, 25-Pound, Red Frost', 16, 'Fish Décor Gravel Substrate.php', 1),
(80, 5000, 'fancy bear hamster.jpg', 'fancy bear hamster', 10, 'small pet.php', 1),
(81, 8000, 'winter white hamster.jpg', 'winter white hamster', 10, 'small pet.php', 1),
(82, 15000, 'russian dwarf hamster.png', 'russian dwarf hamster', 10, 'small pet.php', 1),
(83, 2000, 'Dog Gate.jpg', 'Dog gate', 1, 'Dog House.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `no_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `last_payment` float NOT NULL,
  `card_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`no_id`, `customer_id`, `message`, `name`, `last_payment`, `card_no`, `date`, `time`) VALUES
(4, 10, NULL, 'siva', 0, '', '0000-00-00', '00:00:00'),
(5, 10, 'Payment Sucessfull!!..', 'siva', 2700, '1234567892', '2018-10-03', '15:44:31'),
(6, 10, 'Payment Sucessfull!!..', 'siva', 87000, '1234567892', '2018-10-03', '15:45:05'),
(7, 10, 'Payment Sucessfull!!..', 'siva', 87500, '1234567891', '2018-10-03', '15:46:01'),
(8, 3, 'Payment Sucessfull!!..', 'Arunan', 99000, '1234567890', '2018-10-03', '15:53:08'),
(9, 3, 'Payment Sucessfull!!..', 'Arunan', 1000, '1234567890', '2018-10-03', '15:53:41'),
(10, 3, 'Payment Sucessfull!!..', 'Arunan', 2300, '1234567890', '2018-10-03', '15:55:07'),
(11, 5, NULL, 'david', 0, '', '0000-00-00', '00:00:00'),
(12, 5, 'Payment Sucessfull!!..', 'david', 17000, '1234567893', '2018-10-03', '16:06:03'),
(13, 5, 'Payment Sucessfull!!..', 'david', 441500, '1234567893', '2018-10-03', '16:06:37'),
(14, 5, 'Payment Sucessfull!!..', 'david', 500, '1234567893', '2018-10-03', '16:07:14'),
(15, 6, NULL, 'Davis', 0, '', '0000-00-00', '00:00:00'),
(20, 11, NULL, 'Parker', 0, '', '0000-00-00', '00:00:00'),
(21, 11, 'Payment Sucessfull!!..', 'Parker', 302800, '1234567893', '2018-10-04', '08:36:32'),
(22, 12, NULL, 'rakini', 0, '', '0000-00-00', '00:00:00'),
(23, 12, 'Payment Sucessfull!!..', 'rakini', 2300, '1234567894', '2018-10-04', '09:51:09'),
(24, 13, NULL, 'sayanthan', 0, '', '0000-00-00', '00:00:00'),
(25, 18, NULL, 'Sinthujan', 0, '', '0000-00-00', '00:00:00'),
(26, 15, NULL, 'Anushiya', 0, '', '0000-00-00', '00:00:00'),
(27, 16, NULL, '', 0, '', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`) VALUES
(4, 3),
(5, 3),
(6, 3),
(7, 5),
(8, 5),
(9, 5),
(10, 5),
(1, 10),
(2, 10),
(3, 10),
(11, 11),
(12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `list_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` int(255) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`list_id`, `order_id`, `customer_id`, `item_id`, `quantity`, `price`, `image`) VALUES
(1, 1, 2, 17, 1, 2700, 'g2.jpg'),
(2, 2, 2, 10, 1, 2000, 'cf4.jpg'),
(3, 2, 2, 9, 10, 8500, 'cf1.jpg'),
(4, 3, 2, 35, 1, 85000, 'bh4.jpg'),
(5, 3, 2, 20, 1, 1200, 'winter white hamster.jpg'),
(6, 3, 2, 14, 1, 1300, 'fancy bear hamster.jpg'),
(7, 4, 3, 11, 1, 5000, 'g1.jpg'),
(8, 4, 3, 10, 1, 2000, 'cf4.jpg'),
(9, 4, 3, 28, 4, 17000, 'bf2.jpg'),
(10, 4, 3, 27, 2, 12000, 'bf1.jpg'),
(11, 5, 3, 13, 1, 1000, 'Beagle dog.jpg'),
(12, 6, 3, 40, 1, 2300, 'Abyssinian Profile.jpg'),
(13, 7, 5, 28, 1, 17000, 'bf2.jpg'),
(14, 8, 5, 41, 1, 21500, 'Burmese Laying.jpg'),
(15, 8, 5, 42, 12, 35000, 'Birman Brown Kitty.jpg'),
(16, 9, 5, 32, 1, 500, 'bh1.jpg'),
(17, 10, 5, 9, 1, 8500, 'cf1.jpg'),
(18, 11, 11, 40, 1, 2300, 'Abyssinian Profile.jpg'),
(19, 11, 11, 54, 4, 75000, 'Armarkat Little House pet bed.jpg'),
(20, 11, 11, 1, 1, 500, 'Marshall Premium Ferret Food.jpg'),
(21, 12, 12, 40, 1, 2300, 'Abyssinian Profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `card_id` int(11) DEFAULT NULL,
  `totalprice` double DEFAULT NULL,
  `Address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_date`, `order_id`, `customer_id`, `card_id`, `totalprice`, `Address`, `city`) VALUES
(1, '2018-10-03', 1, 10, 3, 2700, 'manipay,mill lane', 'jaffna'),
(2, '2018-10-03', 2, 10, 3, 87000, 'manipay,mill lane', 'jaffna'),
(3, '2018-10-03', 3, 10, 2, 87500, 'jaffna, hospital road', 'jaffna'),
(4, '2018-10-03', 4, 3, 1, 99000, 'Thellipali ,church lane', 'jaffna'),
(5, '2018-10-03', 5, 3, 1, 1000, 'Thellipali ,church lane', 'jaffna'),
(6, '2018-10-03', 6, 3, 1, 2300, 'Thellipali ,church lane', 'jaffna'),
(7, '2018-10-03', 7, 5, 4, 17000, 'chavakacheri, school lane', 'chavakacheri'),
(8, '2018-10-03', 8, 5, 4, 441500, 'chavakacheri, school lane', 'chavakacheri'),
(9, '2018-10-03', 9, 5, 4, 500, 'chavakacheri, school lane', 'chavakacheri'),
(10, '2018-10-04', 11, 11, 4, 302800, 'Thirunelvelly juction', 'jaffna'),
(11, '2018-10-04', 12, 12, 5, 2300, 'kokuvil main road, kokuvil', 'jaffna');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `pet_id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `registered` varchar(255) NOT NULL DEFAULT 'Registered',
  `Age` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`pet_id`, `color`, `breed`, `registered`, `Age`, `customer_id`, `image`, `name`, `email_id`) VALUES
(1, 'Black', 'American Eskimo Dog', 'Registered', 4, 10, '94.jpg', 'Parker', 'peter@gmail.com'),
(2, 'White', 'American Eskimo Dog', 'Registered', 10, 11, '795088-2880x1620.jpg', 'Parker', 'peter@gmail.com'),
(3, 'Brown', 'Affenpinscher', 'Registered', 11, 10, '005.jpg', 'kamalan', 'kamal@gmail.com'),
(4, 'Golden Brown', 'Tibetan Terrier', 'Registered', 15, 6, '01.jpg', 'davis', 'davis@gmail.com'),
(5, 'Other', 'Bull Terrier', 'Registered', 11, 12, '57.jpg', 'rakini', 'rakini@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `customer_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`customer_id`, `image`) VALUES
(10, 'Lighthouse.jpg'),
(1, '003.jpg'),
(3, 'Chrysanthemum.jpg'),
(5, 'Tulips.jpg'),
(6, '488.jpg'),
(11, 'Chrysanthemum.jpg'),
(12, 'Cat-Cap.jpg'),
(13, 'p61.jpg'),
(18, 'Chrysanthemum.jpg'),
(15, 'Koala.jpg'),
(16, NULL),
(19, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `Name`, `Address`, `mail`, `phoneno`, `Position`, `admin_id`) VALUES
(1, 'ajiharan', 'jaffna', 'baskaranajiharan1234@gmail.com', 776377435, 'seller', 1),
(3, 'Arunan', 'Kandy', 'arun@gmail.com', 774535621, 'seller', 1),
(5, 'david', 'jaffna', 'john@gmail.com', 776458789, 'seller', 1),
(6, 'Davis', 'jaffna', 'davis@gmail.com', 774152369, 'seller', 1),
(11, 'Parker', 'Hatton', 'Peter@gmail.com', 758963851, 'seller', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`add_id`),
  ADD KEY `fk_cust` (`customer_id`);

--
-- Indexes for table `addnotification`
--
ALTER TABLE `addnotification`
  ADD KEY `fk_custnoti` (`customer_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `fk_customersssf` (`customer_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `fk_custum` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `fk_adminiddd` (`admin_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `fk_customer` (`customer_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `fk_categoryss` (`category_id`),
  ADD KEY `fk_adminid` (`admin_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`no_id`),
  ADD KEY `fk_customers` (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_customersf` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`list_id`),
  ADD KEY `fk_ordera` (`order_id`),
  ADD KEY `fk_items` (`item_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk_cardrr` (`card_id`),
  ADD KEY `fk_customerrr` (`customer_id`),
  ADD KEY `fk_orderrr` (`order_id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `fk_custompets` (`customer_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD KEY `fk_customer2` (`customer_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `fk_adminiid` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addcart`
--
ALTER TABLE `addcart`
  ADD CONSTRAINT `fk_cust` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `addnotification`
--
ALTER TABLE `addnotification`
  ADD CONSTRAINT `fk_custnoti` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `fk_customersssf` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `fk_custum` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_adminiddd` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `fk_adminid` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_categoryss` FOREIGN KEY (`category_id`) REFERENCES `category_list` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `fk_customers` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_customersf` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_ordera` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_cardrr` FOREIGN KEY (`card_id`) REFERENCES `card` (`card_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_customerrr` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_orderrr` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `fk_custompets` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_customer2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `fk_adminiid` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
