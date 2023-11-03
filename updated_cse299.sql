-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 07:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new cse299`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`, `email`) VALUES
('Rakib Rahman', 'rakib', '2356', 'rakib@yahoo.com' ),
('Shakib-al Hassan', 'shakib75', 'allrounder75' ,'shakib75@gmail.com'),
('Lionel Messi', 'messi10', 'theGOAT' ,'messi2022@gmail.com'),
('Cristiano Ronaldo', ' CR7', 'cr7rocks' ,'cr7@gmail.com'),
('Samiul Haq', 'samiul', 'sam123', 'samiul@gmail.com'),
('Jabir Mahmud', 'jabir', 'jab231','jabir@gmail.com'),
('Sabrina Katha', 'katha', 'kat321', 'katha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `billing info(orders)`
--

CREATE TABLE `billing info (orders)` (
  `billing_id` int(11) NOT NULL,
  `billing_address` varchar(40) NOT NULL,
  `order_id` varchar(40) NOT NULL,
  `card_number` int(10) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `pin` int(5) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing info(orders)`
--

INSERT INTO `billing info (orders)` (`billing_id`, `billing_address`, `order_id`, `card_number`, `card_name`, `pin`, `username`) VALUES
(1, 'Dhaka', ' 111 ', 223145, 'King', 1234, 'sking'),
(2, 'Jhinaidah', ' 112', 22564, 'Shanto', 1234, 'shantzy'),
(3, 'Jossore', ' 113 ', 223150, 'Tamim', 1234, 'tamJr'),
(4, 'Rajshahi', ' 114', 22577, 'Parves', 1234, 'parv139'),
(5, 'Dhaka', ' 115 ', 223196, 'Rohan', 1234, 'ROHAN'),
(6, 'Barishal', ' 116', 22500, 'Shahid', 1234, 's2k78');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` int(5) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `username`, `product_id`, `product_price`, `quantity`) VALUES
(1, 's2k78', 1010011, 1350, 2),
(2, 'LKD16', 1010113, 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_ID` int(11) NOT NULL,
  `category_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_ID`, `category_name`) VALUES
(101, ' T-SHIRT '),
(102, ' SHIRTS '),
(103, ' PANTS'),
(104, ' BLAZERS '),
(105, ' OUTFITS '),
(106, ' JEANS '),
(107, ' TOPS '),
(108, ' TRADITIONAL WEAR '),
(109, ' BABY ONESIES ' ),
(110, ' TODDLERS OUTWEAR '),
(111, ' KIDS APPAREL '),
(112, ' HOODIES '),
(113, ' SWEATERS '),
(114, ' JACKETS '),
(115, ' TURTLE-NECKS ');

-- --------------------------------------------------------

--
-- Table structure for table `tshirts`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_ID` int(11) NOT NULL,
  `product_size` varchar(10) NOT NULL,
  `product_price` int(6) NOT NULL,
  `stock` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category_ID`, `product_size`, `product_price`, `stock`) VALUES

(101001, 'Too Hot to Handle T-shirt - Black', '101', 'S', 650, 50),
(101002, 'Too Hot to Handle T-shirt - Black', '101', 'M', 650, 50),
(101003, 'Too Hot to Handle T-shirt - Black', '101', 'L', 650, 50),
(101004, 'Too Hot to Handle T-shirt - Black', '101', 'XL', 650, 50),
(101011, 'Foodie T-shirt - Red', '101', 'S', 675, 50),
(101012, 'Foodie T-shirt - Red', '101', 'M', 675, 50),
(101013, 'Foodie T-shirt - Red', '101', 'L', 675, 50),
(101014, 'Foodie T-shirt - Red', '101', 'XL', 675, 50),
(101021, 'KGF Rules T-shirt - Black', '101', 'S', 720, 50),
(101022, 'KGF Rules T-shirt - Black', '101', 'M', 720, 50),
(101023, 'KGF Rules T-shirt - Black', '101', 'L', 720, 50),
(101024, 'KGF Rules T-shirt - Black', '101', 'XL', 720, 50),
(101031, 'Glow in the Dark T-shirt - Black', '101', 'S', 800, 50),
(101032, 'Glow in the Dark T-shirt - Black', '101', 'M', 800, 50),
(101033, 'Glow in the Dark T-shirt - Black', '101', 'L', 800, 50),
(101034, 'Glow in the Dark T-shirt - Black', '101', 'XL', 800, 50),
(101041, 'Airplane T-shirt - Khaki', '101', 'S', 800, 50),
(101042, 'Airplane T-shirt - Khaki', '101', 'M', 800, 50),
(101043, 'Airplane T-shirt - Khaki', '101', 'L', 800, 50),
(101044, 'Airplane T-shirt - Khaki', '101', 'XL', 800, 50),
(101051, 'Solid T-shirt - Olive Green', '101', 'S', 870, 50),
(101052, 'Solid T-shirt - Olive Green', '101', 'M', 870, 50),
(101053, 'Solid T-shirt - Olive Green', '101', 'L', 870, 50),
(101054, 'Solid T-shirt - Olive Green', '101', 'XL', 870, 50),
(101061, 'Drop-shoulder T-shirt - Navy Blue', '101', 'S', 870, 50),
(101062, 'Drop-shoulder T-shirt - Navy Blue', '101', 'M', 870, 50),
(101063, 'Drop-shoulder T-shirt - Navy Blue', '101', 'L', 870, 50),
(101064, 'Drop-shoulder T-shirt - Navy Blue', '101', 'XL', 870, 50),
(101071, 'AC/DC T-shirt - Black', '101', 'S', 950, 50),
(101072, 'AC/DC T-shirt - Black', '101', 'S', 950, 50),
(101073, 'AC/DC T-shirt - Black', '101', 'S', 950, 50),
(101074, 'AC/DC T-shirt - Black', '101', 'S', 950, 50),
(101081, 'Mens Polo T-shirt - Bottle Green', '101', 'S', 950, 50),
(101082, 'Mens Polo T-shirt - Bottle Green', '101', 'M', 950, 50),
(101083, 'Mens Polo T-shirt - Bottle Green', '101', 'L', 950, 50),
(101084, 'Mens Polo T-shirt - Bottle Green', '101', 'XL', 950, 50),
(101091, 'Mens Polo T-shirt - Black', '101', 'S', 970, 50),
(101092, 'Mens Polo T-shirt - Black', '101', 'S', 970, 50),
(101093, 'Mens Polo T-shirt - Black', '101', 'L', 970, 50),
(101094, 'Mens Polo T-shirt - Black', '101', 'XL', 970, 50),
(101101, 'Mens Polo T-shirt - White', '101', 'S', 1000, 50),
(101102, 'Mens Polo T-shirt - White', '101', 'M', 1000, 50),
(101103, 'Mens Polo T-shirt - White', '101', 'L', 1000, 50),
(101104, 'Mens Polo T-shirt - White', '101', 'XL', 1000, 50),
(101111, 'Mens Polo T-shirt - Navy Blue', '101', 'S', 1000, 50),
(101112, 'Mens Polo T-shirt - Navy Blue', '101', 'M', 1000, 50),
(101113, 'Mens Polo T-shirt - Navy Blue', '101', 'L', 1000, 50),
(101114, 'Mens Polo T-shirt - Navy Blue', '101', 'XL', 1000, 50),
(102001, 'Mens Band Collar Striped Shirt - Blue & White', '102', 'S', 1200, 50),
(102002, 'Mens Band Collar Striped Shirt - Blue & White', '102', 'M', 1200, 50),
(102003, 'Mens Band Collar Striped Shirt - Blue & White', '102', 'L', 1200, 50),
(102004, 'Mens Band Collar Striped Shirt - Blue & White', '102', 'XL', 1200, 50),
(102021, 'Mens Casual Shirt - Mint Green', '102', 'S', 1300, 50),
(102022, 'Mens Casual Shirt - Mint Green', '102', 'M', 1300, 50),
(102023, 'Mens Casual Shirt - Mint Green', '102', 'L', 1300, 50),
(102024, 'Mens Casual Shirt - Mint Green', '102', 'XL', 1300, 50),
(102031, 'Mens Casual Shirt - Olive Green', '102', 'S', 1300, 50),
(102032, 'Mens Casual Shirt - Olive Green', '102', 'M', 1300, 50),
(102033, 'Mens Casual Shirt - Olive Green', '102', 'L', 1300, 50),
(102034, 'Mens Casual Shirt - Olive Green', '102', 'XL', 1300, 50),
(102041, 'Mens Casual Shirt - Pale Orange', '102', 'S', 1300, 50),
(102042, 'Mens Casual Shirt - Pale Orange', '102', 'M', 1300, 50),
(102043, 'Mens Casual Shirt - Pale Orange', '102', 'L', 1300, 50),
(102044, 'Mens Casual Shirt - Pale Orange', '102', 'XL', 1300, 50),
(102051, 'Mens Linen Shirt - Navy Blue', '102', 'S', 1350, 50),
(102052, 'Mens Linen Shirt - Navy Blue', '102', 'M', 1350, 50),
(102053, 'Mens Linen Shirt - Navy Blue', '102', 'L', 1350, 50),
(102054, 'Mens Linen Shirt - Navy Blue', '102', 'XL', 1350, 50),
(102061, 'Mens Grameen Check Shirt - Blue', '102', 'S', 1400, 50),
(102062, 'Mens Grameen Check Shirt - Blue', '102', 'M', 1400, 50),
(102063, 'Mens Grameen Check Shirt - Blue', '102', 'L', 1400, 50),
(102064, 'Mens Grameen Check Shirt - Blue', '102', 'XL', 1400, 50),
(102071, 'Mens Formal Shirt - White', '102', 'S', 1500, 50),
(102072, 'Mens Formal Shirt - White', '102', 'M', 1500, 50),
(102073, 'Mens Formal Shirt - White', '102', 'L', 1500, 50),
(102074, 'Mens Formal Shirt - White', '102', 'XL', 1500, 50),
(102081, 'Mens Formal Shirt - Black', '102', 'S', 1500, 50),
(102082, 'Mens Formal Shirt - Black', '102', 'M', 1500, 50),
(102083, 'Mens Formal Shirt - Black', '102', 'L', 1500, 50),
(102084, 'Mens Formal Shirt - Black', '102', 'XL', 1500, 50),
(103011, 'Mens Cargo Pants - Cream', '103', 'S', 1300, 50),
(103012, 'Mens Cargo Pants - Cream', '103', 'M', 1300, 50),
(103013, 'Mens Cargo Pants - Cream', '103', 'L', 1300, 50),
(103014, 'Mens Cargo Pants - Cream', '103', 'XL', 1300, 50),
(103021, 'Mens Cargo Pants - Denim Blue', '103', 'S', 1300, 50),
(103022, 'Mens Cargo Pants - Denim Blue', '103', 'M', 1300, 50),
(103023, 'Mens Cargo Pants - Denim Blue', '103', 'L', 1300, 50),
(103024, 'Mens Cargo Pants - Denim Blue', '103', 'XL', 1300, 50),
(103031, 'Mens Cargo Pants - Black', '103', 'S', 1350, 50),
(103032, 'Mens Cargo Pants - Black', '103', 'M', 1350, 50),
(103033, 'Mens Cargo Pants - Black', '103', 'L', 1350, 50),
(103034, 'Mens Cargo Pants - Black', '103', 'XL', 1350, 50),
(103041, 'Mens Formal Wide legged - Khaki', '103', 'S', 1400, 50),
(103042, 'Mens Formal Wide legged - Khaki', '103', 'M', 1400, 50),
(103043, 'Mens Formal Wide legged - Khaki', '103', 'L', 1400, 50),
(103044, 'Mens Formal Wide legged - Khaki', '103', 'XL', 1400, 50),
(104001, 'Mens Glen Check Blazer - Navy Blue', '104', 'S', 4000, 50),
(104002, 'Mens Glen Check Blazer - Navy Blue', '104', 'M', 4000, 50),
(104003, 'Mens Glen Check Blazer - Navy Blue', '104', 'L', 4000, 50),
(104004, 'Mens Glen Check Blazer - Navy Blue', '104', 'XL', 4000, 50),
(104011, 'Mens  Formal Blazer - Black', '104', 'S', 4250, 50),
(104012, 'Mens  Formal Blazer - Black', '104', 'M', 4250, 50),
(104013, 'Mens  Formal Blazer - Black', '104', 'L', 4250, 50),
(104014, 'Mens  Formal Blazer - Black', '104', 'XL', 4250, 50),
(104021, 'Mens  Formal Blazer -  Maroon', '104', 'S', 4800, 50),
(104022, 'Mens  Formal Blazer -  Maroon', '104', 'M', 4800, 50),
(104023, 'Mens  Formal Blazer -  Maroon', '104', 'L', 4800, 50),
(104024, 'Mens  Formal Blazer -  Maroon', '104', 'XL', 4800, 50),
(104031, 'Mens  Formal Blazer -  Pine Green', '104', 'S', 5200, 50),
(104032, 'Mens  Formal Blazer -  Pine Green', '104', 'M', 5200, 50),
(104033, 'Mens  Formal Blazer -  Pine Green', '104', 'L', 5200, 50),
(104034, 'Mens  Formal Blazer -  Pine Green', '104', 'XL', 5200, 50),
(104041, 'Mens Glen Check Blazer - Purple', '104', 'S', 5600, 50),
(104042, 'Mens Glen Check Blazer - Purple', '104', 'M', 5600, 50),
(104043, 'Mens Glen Check Blazer - Purple', '104', 'L', 5600, 50),
(104044, 'Mens Glen Check Blazer - Purple', '104', 'XL', 5600, 50),
(104051, 'Mens Glen Check Blazer - Grey', '104', 'S', 6000, 50),
(104052, 'Mens Glen Check Blazer - Grey', '104', 'M', 6000, 50),
(104053, 'Mens Glen Check Blazer - Grey', '104', 'L', 6000, 50),
(104054, 'Mens Glen Check Blazer - Grey', '104', 'XL', 6000, 50),
(104061, 'Mens Chalk Stripe Suit - Charcoal Grey', '104', 'S', 8250, 50),
(104062, 'Mens Chalk Stripe Suit - Charcoal Grey', '104', 'M', 8250, 50),
(104063, 'Mens Chalk Stripe Suit - Charcoal Grey', '104', 'L', 8250, 50),
(104064, 'Mens Chalk Stripe Suit - Charcoal Grey', '104', 'XL', 8250, 50),
(104071, 'Mens Glen Check Suit - Ocean Blue', '104', 'S', 8800, 50),
(104072, 'Mens Glen Check Suit - Ocean Blue', '104', 'M', 8800, 50),
(104073, 'Mens Glen Check Suit - Ocean Blue', '104', 'L', 8800, 50),
(104074, 'Mens Glen Check Suit - Ocean Blue', '104', 'XL', 8800, 50),
(105001, 'Womens Jumpsuit with Top - Powder Blue', '105', 'S', 1800, 50),
(105002, 'Womens Jumpsuit with Top - Powder Blue', '105', 'M', 1800, 50),
(105003, 'Womens Jumpsuit with Top - Powder Blue', '105', 'L', 1800, 50),
(105004, 'Womens Jumpsuit with Top - Powder Blue', '105', 'XL', 1800, 50),
(105011, 'Womens Jumpsuit - Black', '105', 'S', 1850, 50),
(105012, 'Womens Jumpsuit - Black', '105', 'M', 1850, 50),
(105013, 'Womens Jumpsuit - Black', '105', 'L', 1850, 50),
(105014, 'Womens Jumpsuit - Black', '105', 'XL', 1850, 50),
(105021, 'Womens Jumpsuit - Yellow', '105', 'S', 2000, 50),
(105022, 'Womens Jumpsuit - Yellow', '105', 'M', 2000, 50),
(105023, 'Womens Jumpsuit - Yellow', '105', 'L', 2000, 50),
(105024, 'Womens Jumpsuit - Yellow', '105', 'XL', 2000, 50),
(105031, 'Womens Silk Jumpsuit - Powder Green', '105', 'S', 2200, 50),
(105032, 'Womens Silk Jumpsuit - Powder Green', '105', 'M', 2200, 50),
(105033, 'Womens Silk Jumpsuit - Powder Green', '105', 'L', 2200, 50),
(105034, 'Womens Silk Jumpsuit - Powder Green', '105', 'XL', 2200, 50),
(106011, 'Womens Wide Legged Denim Jeans - Blue', '106', 'S', 1600, 50),
(106012, 'Womens Wide Legged Denim Jeans - Blue', '106', 'M', 1600, 50),
(106013, 'Womens Wide Legged Denim Jeans - Blue', '106', 'L', 1600, 50),
(106014, 'Womens Wide Legged Denim Jeans - Blue', '106', 'XL', 1600, 50),
(106021, 'Womens Wide Legged Jeans - Black', '106', 'S', 1750, 50),
(106022, 'Womens Wide Legged Jeans - Black', '106', 'M', 1750, 50),
(106023, 'Womens Wide Legged Jeans - Black', '106', 'L', 1750, 50),
(106024, 'Womens Wide Legged Jeans - Black', '106', 'XL', 1750, 50),
(106031, 'Womens Flare Jeans - Blue', '106', 'S', 1800, 50),
(106032, 'Womens Flare Jeans - Blue', '106', 'M', 1800, 50),
(106033, 'Womens Flare Jeans - Blue', '106', 'L', 1800, 50),
(106034, 'Womens Flare Jeans - Blue', '106', 'XL', 1800, 50),
(106041, 'Womens Formal Pants - Black', '106', 'S', 2000, 50),
(106042, 'Womens Formal Pants - Black', '106', 'M', 2000, 50),
(106043, 'Womens Formal Pants - Black', '106', 'L', 2000, 50),
(106044, 'Womens Formal Pants - Black', '106', 'XL', 2000, 50),
(107011, 'Womens Half-sleeve Crop Shirt - Light Green', '107', 'S', 700, 50),
(107012, 'Womens Half-sleeve Crop Shirt - Light Green', '107', 'M', 700, 50),
(107013, 'Womens Half-sleeve Crop Shirt - Light Green', '107', 'L', 700, 50),
(107014, 'Womens Half-sleeve Crop Shirt - Light Green', '107', 'XL', 700, 50),
(107021, 'Womens Balloon Sleeve Moff Shirt - Pink', '107', 'S', 750, 50),
(107022, 'Womens Balloon Sleeve Moff Shirt - Pink', '107', 'M', 750, 50),
(107023, 'Womens Balloon Sleeve Moff Shirt - Pink', '107', 'L', 750, 50),
(107024, 'Womens Balloon Sleeve Moff Shirt - Pink', '107', 'XL', 750, 50),
(107031, 'Womens Folded Half-sleeve Shirt - Pale Orange', '107', 'S', 800, 50),
(107032, 'Womens Folded Half-sleeve Shirt - Pale Orange', '107', 'M', 800, 50),
(107033, 'Womens Folded Half-sleeve Shirt - Pale Orange', '107', 'L', 800, 50),
(107034, 'Womens Folded Half-sleeve Shirt - Pale Orange', '107', 'XL', 800, 50),
(107041, 'Womens Folded Half-sleeve Shirt - Bottle Green', '107', 'S', 850, 50),
(107042, 'Womens Folded Half-sleeve Shirt - Bottle Green', '107', 'M', 850, 50),
(107043, 'Womens Folded Half-sleeve Shirt - Bottle Green', '107', 'L', 850, 50),
(107044, 'Womens Folded Half-sleeve Shirt - Bottle Green', '107', 'XL', 850, 50),
(108001, 'Womens Kurti with Pants - Sky Blue', '108', 'S', 3300, 50),
(108002, 'Womens Kurti with Pants - Sky Blue', '108', 'M', 3300, 50),
(108003, 'Womens Kurti with Pants - Sky Blue', '108', 'L', 3300, 50),
(108004, 'Womens Kurti with Pants - Sky Blue', '108', 'XL', 3300, 50),
(108011, 'Womens Kurti with Cream Trousers - Navy Blue', '108', 'S', 3500, 50),
(108012, 'Womens Kurti with Cream Trousers - Navy Blue', '108', 'M', 3500, 50),
(108013, 'Womens Kurti with Cream Trousers - Navy Blue', '108', 'L', 3500, 50),
(108014, 'Womens Kurti with Cream Trousers - Navy Blue', '108', 'XL', 3500, 50),
(108021, 'Womens Embroidered Kurti with Pants - White', '108', 'S', 3800, 50),
(108022, 'Womens Embroidered Kurti with Pants - White', '108', 'M', 3800, 50),
(108023, 'Womens Embroidered Kurti with Pants - White', '108', 'L', 3800, 50),
(108024, 'Womens Embroidered Kurti with Pants - White', '108', 'XL', 3800, 50),
(108031, 'Womens Three piece - Powder Blue', '108', 'S', 4000, 50),
(108032, 'Womens Three piece - Powder Blue', '108', 'M', 4000, 50),
(108033, 'Womens Three piece - Powder Blue', '108', 'L', 4000, 50),
(108034, 'Womens Three piece - Powder Blue', '108', 'XL', 4000, 50),
(108041, 'Womens Kurti with Pants - Lavendar', '108', 'S', 4200, 50),
(108042, 'Womens Kurti with Pants - Lavendar', '108', 'M', 4200, 50),
(108043, 'Womens Kurti with Pants - Lavendar', '108', 'L', 4200, 50),
(108044, 'Womens Kurti with Pants - Lavendar', '108', 'XL', 4200, 50),
(108051, 'Womens Three piece - Lavendar', '108', 'S', 5000, 50),
(108052, 'Womens Three piece - Lavendar', '108', 'M', 5000, 50),
(108053, 'Womens Three piece - Lavendar', '108', 'L', 5000, 50),
(108054, 'Womens Three piece - Lavendar', '108', 'XL', 5000, 50),
(108061, 'Womens Saree - Pink Shimmery', '108', 'S', 3300, 50),
(108062, 'Womens Saree - Pink Shimmery', '108', 'M', 3300, 50),
(108063, 'Womens Saree - Pink Shimmery', '108', 'L', 3300, 50),
(108064, 'Womens Saree - Pink Shimmery', '108', 'XL', 3300, 50),
(108071, 'Womens Saree - Navy Blue', '108', 'S', 3000, 50),
(108072, 'Womens Saree - Navy Blue', '108', 'M', 3000, 50),
(108073, 'Womens Saree - Navy Blue', '108', 'L', 3000, 50),
(108074, 'Womens Saree - Navy Blue', '108', 'XL', 3000, 50),
(109001, 'Baby Onesies - Grey', '109', 'S', 500, 50),
(109002, 'Baby Onesies - Grey', '109', 'M', 500, 50),
(109003, 'Baby Onesies - Grey', '109', 'L', 500, 50),
(109004, 'Baby Onesies - Grey', '109', 'XL', 500, 50),
(109011, 'Baby Onesies - Black', '109', 'S', 550, 50),
(109012, 'Baby Onesies - Black', '109', 'M', 550, 50),
(109013, 'Baby Onesies - Black', '109', 'L', 550, 50),
(109014, 'Baby Onesies - Black', '109', 'XL', 550, 50),
(109021, 'Baby Onesies - White', '109', 'S', 600, 50),
(109022, 'Baby Onesies - White', '109', 'M', 600, 50),
(109023, 'Baby Onesies - White', '109', 'L', 600, 50),
(109024, 'Baby Onesies - White', '109', 'XL', 600, 50),
(109031, 'Baby Onesies Mixed Set- White, Brown & Beige', '109', 'S', 2200, 50),
(109032, 'Baby Onesies Mixed Set- White, Brown & Beige', '109', 'M', 2200, 50),
(109033, 'Baby Onesies Mixed Set- White, Brown & Beige', '109', 'L', 2200, 50),
(109034, 'Baby Onesies Mixed Set- White, Brown & Beige', '109', 'XL', 2200, 50),
(110001, 'Babys Outwear - Mint Green', '110', 'S', 800, 50),
(110002, 'Babys Outwear - Mint Green', '110', 'M', 800, 50),
(110003, 'Babys Outwear - Mint Green', '110', 'L', 800, 50),
(110004, 'Babys Outwear - Mint Green', '110', 'XL', 800, 50),
(110011, 'Babys Outwear - Navy Blue', '110', 'S', 800, 50),
(110012, 'Babys Outwear - Navy Blue', '110', 'M', 800, 50),
(110013, 'Babys Outwear - Navy Blue', '110', 'L', 800, 50),
(110014, 'Babys Outwear - Navy Blue', '110', 'XL', 800, 50),
(110021, 'Babys Outwear - Orange', '110', 'S', 900, 50),
(110022, 'Babys Outwear - Orange', '110', 'M', 900, 50),
(110023, 'Babys Outwear - Orange', '110', 'L', 900, 50),
(110024, 'Babys Outwear - Orange', '110', 'XL', 900, 50),
(110031, 'Babys Outwear Set - Grey & Pink', '110', 'S', 1450, 50),
(110032, 'Babys Outwear Set - Grey & Pink', '110', 'M', 1450, 50),
(110033, 'Babys Outwear Set - Grey & Pink', '110', 'L', 1450, 50),
(110034, 'Babys Outwear Set - Grey & Pink', '110', 'XL', 1450, 50),
(111001, 'Boys T-shirt & Pants set - Black', '111', 'S', 800, 50),
(111002, 'Boys T-shirt & Pants set - Black', '111', 'M', 800, 50),
(111003, 'Boys T-shirt & Pants set - Black', '111', 'L', 800, 50),
(111004, 'Boys T-shirt & Pants set - Black', '111', 'XL', 800, 50),
(111011, 'Boys T-shirt & Pants set - Mint Green & White', '111', 'S', 1000, 50),
(111012, 'Boys T-shirt & Pants set - Mint Green & White', '111', 'M', 1000, 50),
(111013, 'Boys T-shirt & Pants set - Mint Green & White', '111', 'L', 1000, 50),
(111014, 'Boys T-shirt & Pants set - Mint Green & White', '111', 'XL', 1000, 50),
(111021, 'Boys T-shirt & Pants set - Black & Brown', '111', 'S', 1000, 50),
(111022, 'Boys T-shirt & Pants set - Black & Brown', '111', 'M', 1000, 50),
(111023, 'Boys T-shirt & Pants set - Black & Brown', '111', 'L', 1000, 50),
(111024, 'Boys T-shirt & Pants set - Black & Brown', '111', 'XL', 1000, 50),
(111031, 'Boys T-shirt & Pants set - Black & Blue', '111', 'S', 1000, 50),
(111032, 'Boys T-shirt & Pants set - Black & Blue', '111', 'M', 1000, 50),
(111033, 'Boys T-shirt & Pants set - Black & Blue', '111', 'L', 1000, 50),
(111034, 'Boys T-shirt & Pants set - Black & Blue', '111', 'XL', 1000, 50),
(111041, 'Girls Flowery Frock - Midnight Green', '111', 'S', 1200, 50),
(111042, 'Girls Flowery Frock - Midnight Green', '111', 'M', 1200, 50),
(111043, 'Girls Flowery Frock - Midnight Green', '111', 'L', 1200, 50),
(111044, 'Girls Flowery Frock - Midnight Green', '111', 'XL', 1200, 50),
(111051, 'Girls Polkadot Frock - Red', '111', 'S', 1200, 50),
(111052, 'Girls Polkadot Frock - Red', '111', 'M', 1200, 50),
(111053, 'Girls Polkadot Frock - Red', '111', 'L', 1200, 50),
(111054, 'Girls Polkadot Frock - Red', '111', 'XL', 1200, 50),
(111061, 'Girls Frock with Frills - Blue', '111', 'S', 1250, 50),
(111062, 'Girls Frock with Frills - Blue', '111', 'M', 1250, 50),
(111063, 'Girls Frock with Frills - Blue', '111', 'L', 1250, 50),
(111064, 'Girls Frock with Frills - Blue', '111', 'XL', 1250, 50),
(111071, 'Baby Rampers - Beige & Black', '111', 'S', 1300, 50),
(111072, 'Baby Rampers - Beige & Black', '111', 'M', 1300, 50),
(111073, 'Baby Rampers - Beige & Black', '111', 'L', 1300, 50),
(111074, 'Baby Rampers - Beige & Black', '111', 'XL', 1300, 50),
(112001, 'Mens Sporty Hoodies - Black', '112', 'S', 1100, 50),
(112002, 'Mens Sporty Hoodies - Black', '112', 'M', 1100, 50),
(112003, 'Mens Sporty Hoodies - Black', '112', 'L', 1100, 50),
(112004, 'Mens Sporty Hoodies - Black', '112', 'XL', 1100, 50),
(112011, 'Mens Sporty Hoodies - Olive Green', '112', 'S', 1200, 50),
(112012, 'Mens Sporty Hoodies - Olive Green', '112', 'M', 1200, 50),
(112013, 'Mens Sporty Hoodies - Olive Green', '112', 'L', 1200, 50),
(112014, 'Mens Sporty Hoodies - Olive Green', '112', 'XL', 1200, 50),
(112021, 'Mens Sporty Hoodies - Brown', '112', 'S', 1200, 50),
(112022, 'Mens Sporty Hoodies - Brown', '112', 'M', 1200, 50),
(112023, 'Mens Sporty Hoodies - Brown', '112', 'L', 1200, 50),
(112024, 'Mens Sporty Hoodies - Brown', '112', 'XL', 1200, 50),
(112031, 'Unisex Casual Hoodies - Purple', '112', 'S', 1200, 50),
(112032, 'Unisex Casual Hoodies - Purple', '112', 'M', 1200, 50),
(112033, 'Unisex Casual Hoodies - Purple', '112', 'L', 1200, 50),
(112034, 'Unisex Casual Hoodies - Purple', '112', 'XL', 1200, 50),
(112041, 'Womens Woollen Hoodies - White', '112', 'S', 1200, 50),
(112042, 'Womens Woollen Hoodies - White', '112', 'M', 1200, 50),
(112043, 'Womens Woollen Hoodies - White', '112', 'L', 1200, 50),
(112044, 'Womens Woollen Hoodies - White', '112', 'XL', 1200, 50),
(112051, 'Womens Casual Hoodies - White & Pink', '112', 'S', 1200, 50),
(112052, 'Womens Casual Hoodies - White & Pink', '112', 'M', 1200, 50),
(112053, 'Womens Casual Hoodies - White & Pink', '112', 'L', 1200, 50),
(112054, 'Womens Casual Hoodies - White & Pink', '112', 'XL', 1200, 50),
(112061, 'Womens Cozy Hoodies - Cream & Pink', '112', 'S', 1300, 50),
(112062, 'Womens Cozy Hoodies - Cream & Pink', '112', 'M', 1300, 50),
(112063, 'Womens Cozy Hoodies - Cream & Pink', '112', 'L', 1300, 50),
(112064, 'Womens Cozy Hoodies - Cream & Pink', '112', 'XL', 1300, 50),
(112071, 'Mens Cozy Hoodies - Blue', '112', 'S', 1300, 50),
(112072, 'Mens Cozy Hoodies - Blue', '112', 'M', 1300, 50),
(112073, 'Mens Cozy Hoodies - Blue', '112', 'L', 1300, 50),
(112074, 'Mens Cozy Hoodies - Blue', '112', 'XL', 1300, 50),
(113001, 'Unisex Sweatshirts - White', '113', 'S', 800, 50),
(113002, 'Unisex Sweatshirts - White', '113', 'M', 800, 50),
(113003, 'Unisex Sweatshirts - White', '113', 'L', 800, 50),
(113004, 'Unisex Sweatshirts - White', '113', 'XL', 800, 50),
(113011, 'Unisex Sweatshirts - Black', '113', 'S', 800, 50),
(113012, 'Unisex Sweatshirts - Black', '113', 'M', 800, 50),
(113013, 'Unisex Sweatshirts - Black', '113', 'L', 800, 50),
(113014, 'Unisex Sweatshirts - Black', '113', 'XL', 800, 50),
(113021, 'Unisex Sweatshirts - Blue', '113', 'S', 850, 50),
(113022, 'Unisex Sweatshirts - Blue', '113', 'M', 850, 50),
(113023, 'Unisex Sweatshirts - Blue', '113', 'L', 850, 50),
(113024, 'Unisex Sweatshirts - Blue', '113', 'XL', 850, 50),
(113031, 'Unisex Sweatshirts - Pine Green', '113', 'S', 900, 50),
(113032, 'Unisex Sweatshirts - Pine Green', '113', 'M', 900, 50),
(113033, 'Unisex Sweatshirts - Pine Green', '113', 'L', 900, 50),
(113034, 'Unisex Sweatshirts - Pine Green', '113', 'XL', 900, 50),
(114001, 'Mens Chore Jacket - Midnight Black', '114', 'S', 1800, 50),
(114002, 'Mens Chore Jacket - Midnight Black', '114', 'M', 1800, 50),
(114003, 'Mens Chore Jacket - Midnight Black', '114', 'L', 1800, 50),
(114004, 'Mens Chore Jacket - Midnight Black', '114', 'XL', 1800, 50),
(114011, 'Mens Denim Jacket - Blue', '114', 'S', 2200, 50),
(114012, 'Mens Denim Jacket - Blue', '114', 'M', 2200, 50),
(114013, 'Mens Denim Jacket - Blue', '114', 'L', 2200, 50),
(114014, 'Mens Denim Jacket - Blue', '114', 'XL', 2200, 50),
(114021, 'Mens Harrington Jacket - White', '114', 'S', 2800, 50),
(114022, 'Mens Harrington Jacket - White', '114', 'M', 2800, 50),
(114023, 'Mens Harrington Jacket - White', '114', 'L', 2800, 50),
(114024, 'Mens Harrington Jacket - White', '114', 'XL', 2800, 50),
(114031, 'Mens Puffer Jacket - Black', '114', 'S', 3000, 50),
(114032, 'Mens Puffer Jacket - Black', '114', 'M', 3000, 50),
(114033, 'Mens Puffer Jacket - Black', '114', 'L', 3000, 50),
(114034, 'Mens Puffer Jacket - Black', '114', 'XL', 3000, 50),
(114041, 'Womens Denim Jacket - Blue & Navy Blue', '114', 'S', 3500, 50),
(114042, 'Womens Denim Jacket - Blue & Navy Blue', '114', 'M', 3500, 50),
(114043, 'Womens Denim Jacket - Blue & Navy Blue', '114', 'L', 3500, 50),
(114044, 'Womens Denim Jacket - Blue & Navy Blue', '114', 'XL', 3500, 50),
(114051, 'Womens Leather Jacket - Carbon Black', '114', 'S', 6250, 50),
(114052, 'Womens Leather Jacket - Carbon Black', '114', 'M', 6250, 50),
(114053, 'Womens Leather Jacket - Carbon Black', '114', 'L', 6250, 50),
(114054, 'Womens Leather Jacket - Carbon Black', '114', 'XL', 6250, 50),
(114061, 'Womens Leather Jacket - Beige', '114', 'S', 7000, 50),
(114062, 'Womens Leather Jacket - Beige', '114', 'M', 7000, 50),
(114063, 'Womens Leather Jacket - Beige', '114', 'L', 7000, 50),
(114064, 'Womens Leather Jacket - Beige', '114', 'XL', 7000, 50),
(114071, 'Womens Leather Jacket - Black', '114', 'S', 7000, 50),
(114072, 'Womens Leather Jacket - Black', '114', 'M', 7000, 50),
(114073, 'Womens Leather Jacket - Black', '114', 'L', 7000, 50),
(114074, 'Womens Leather Jacket - Black', '114', 'XL', 7000, 50),
(115001, 'Unisex Turtleneck - Black', '115', 'S', 1100, 50),
(115002, 'Unisex Turtleneck - Black', '115', 'M', 1100, 50),
(115003, 'Unisex Turtleneck - Black', '115', 'L', 1100, 50),
(115004, 'Unisex Turtleneck - Black', '115', 'XL', 1100, 50),
(115011, 'Unisex Turtleneck - Blue', '115', 'S', 1200, 50),
(115012, 'Unisex Turtleneck - Blue', '115', 'M', 1200, 50),
(115013, 'Unisex Turtleneck - Blue', '115', 'L', 1200, 50),
(115014, 'Unisex Turtleneck - Blue', '115', 'XL', 1200, 50),
(115021, 'Unisex Turtleneck - Olive Green', '115', 'S', 1200, 50),
(115022, 'Unisex Turtleneck - Olive Green', '115', 'M', 1200, 50),
(115023, 'Unisex Turtleneck - Olive Green', '115', 'L', 1200, 50),
(115024, 'Unisex Turtleneck - Olive Green', '115', 'XL', 1200, 50),
(115031, 'Unisex Turtleneck - Brown', '115', 'S', 1200, 50),
(115032, 'Unisex Turtleneck - Brown', '115', 'M', 1200, 50),
(115033, 'Unisex Turtleneck - Brown', '115', 'L', 1200, 50),
(115034, 'Unisex Turtleneck - Brown', '115', 'XL', 1200, 50);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL,
  `delivery_Date` date NOT NULL,
  `payment method` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `username`, `product_id`, `delivery_Date`, `payment method`) VALUES
(1, 'sking', 1010011,'2022-01-04', 'cash'),
(2, 'nkochar', 115033,'2022-01-10', 'cash'),
(3, 'ROHAN', 113023,'2022-01-12', 'bkash'),
(4, 'dlanod', 113022,'2022-01-12', 'bkash'),
(5, 's2k78', 114014,'2022-01-12', 'bkash'),
(6, 'dLorentz', 114013,'2022-01-12', 'nagad'),
(7, 'LKD16', 1010011,'2022-01-12', 'nagad'),
(8, 'tamJr', 115001,'2022-01-12', 'nagad'),
(9, 'shantzy', 1010012 ,'2022-01-12', 'bkash'),
(10,'parv139', 1010011,'2022-01-13', 'cash'),
(11,'daily23', 1120023,'2022-01-20', 'nagad');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,  
  `email` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `email`,`password` ,`phone_number`, `city`) VALUES
('King', 'sking', 'king@yahoo.com', '111111', '01632856264', 'Dhaka'),
('Kochar', 'nkochar', 'nkoch@hotmail.com', '222222', '01742856264', 'Bogura'),
('Rohan', 'ROHAN', 'rohan@gmail.com', '333333', '01745856264', 'Dhaka'),
('Donald', 'dlanod', 'donald@gmail.com', '444444', '01864856264', 'Noakhali'),
('Shahid', 's2k78', 'shahid@gmail.com', '555555', '01866656784', 'Barishal'),
('Lorentz', 'dLorentz', 'lorentz@hotmail.com', '666666','01801286784', 'Comilla'),
('Liton', 'LKD16', 'liton@gmail.com', '777777', '01811186675', 'Faridpur'),
('Tamim', 'tamJr', 'junior@yahoo.com', '888888', '01965587752', 'Jossore'),
('Shanto', 'shantzy', 'shanto@hotmail.com', '999999', '01944588852', 'Jhinaidah'),
('Parves', 'parv139', 'parvez@ymail.com', '161616', '01613485426', 'Rangpur'),
('Daisy', 'daily23', 'daisy@gmail.com', '228228', '01313485876', 'Dinajjpur');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `billing info(orders)`
--
ALTER TABLE `billing info (orders)`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `username` (`username`),
  ADD KEY `product_price` (`product_price`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `username` (`username`),
  ADD KEY `product_id` (`product_id`);
--
-- Indexes for table `productlist`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_ID` (`category_ID`);
--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for table `billing info(orders)`
--
ALTER TABLE `billing info (orders)`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
