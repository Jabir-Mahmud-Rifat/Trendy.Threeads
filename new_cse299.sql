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
  `admin_id` int(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`) VALUES
(1, 'rakib', ' shakib ', '25f9e794323b453885f5181f1b624d'),
(2, 'SHAKIB', ' shakib75@gmail.com', 'd3c4fb694484de76fc00096d34a64b'),
(3, 'MESSI', '1f42d189bd95aa44423e0263de1908d4', ' messi2022@gmail.com'),
(4, 'CR7', ' 12345', ' cr7@gmail.com'),
(5, 'vvjhvjhvj', ' 12335454', ' hfhjhj@gmail.com'),
(6, 'varun', ' 12345678tr', ' varun75@gmail.com'),
(7, 'king', ' 123ert', ' srk00@gmail.com'),
(8, 'king', ' 123ert', ' srk00@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `billing info(orders)`
--

CREATE TABLE `billing info(orders)` (
  `billing_id` int(11) NOT NULL,
  `billing_address` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `order_id` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `card_number` int(10) NOT NULL,
  `card_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pin` int(5) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `billing info(orders)`
--

INSERT INTO `billing info(orders)` (`billing_id`, `billing_address`, `order_id`, `card_number`, `card_name`, `pin`, `user_id`) VALUES
(1, 'Dhaka', ' 101 ', 223145, '', 1234, 1),
(2, 'Dhaka', ' 102', 22564, '', 1234, 2),
(3, 'Bogura', ' 103 ', 223150, '', 1234, 3),
(4, 'Rajshahi', ' 104', 22577, '', 1234, 4),
(5, 'Jossore', ' 105 ', 223196, '', 1234, 5),
(6, 'Rajbari', ' 106', 22500, '', 1234, 6);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_Id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `Quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_Id`, `product_id`, `price`, `Quantity`) VALUES
(1, 1, 1, 10, 11),
(2, 2, 1, 10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`) VALUES
(1, ' T-SHIRT ', 'WOOL'),
(2, ' PANT ', 'JEANS'),
(3, ' SHOE ', 'LEATHER'),
(4, ' JACKET ', 'LEATHER'),
(5, ' SHIRT', 'WOOL');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `bill_id` int(5) NOT NULL,
  `customer_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_contact` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer_address` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_category` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_quantity` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_price` int(8) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `bill_id`, `customer_name`, `customer_contact`, `customer_address`, `product_name`, `product_category`, `product_quantity`, `product_price`, `date`) VALUES
(1, 1, 'Fahim', '1960839377', 'haluaghat', 'Milk', 'food', '100gm', 500, '2019-12-21'),
(32, 2, 'Pias', '01455967441', 'Dhaka', 'Nestle Kit Kat', 'Chocolate', '40gm', 50, '2019-12-22'),
(33, 4, 'Pias', '01485311744', 'Dhaka', 'Bisk Club Potato Biscuits', 'Biscuit', '100gm', 25, '2019-12-22'),
(34, 4, 'Pias', '01485999441', 'Dhaka', 'Shezan Mango Fruit Drinks Pet', 'Juice', '500ml', 45, '2019-12-22'),
(35, 4, 'Pias', '01485967001', 'Dhaka', 'Fresh Soyabean Oil', 'Oil', '2ltr', 202, '2019-12-22'),
(36, 4, 'Pias', '01485968841', 'Dhaka', 'Rupchada Soyabin Oil', 'Oil', '2ltr', 202, '2019-12-22'),
(37, 5, 'Sajib', '01689562252', 'Khulna', 'Tic Tac Candy Mint Flav', 'Chocolate', '7gm', 25, '2019-12-22'),
(38, 5, 'Sajib', '01689511525', 'Khulna', 'Aarong Laban', 'Juice', '500gm', 50, '2019-12-22'),
(39, 5, 'Sajib', '01689568445', 'Khulna', 'Fresh Soyabean Oil', 'Oil', '2ltr', 202, '2019-12-22'),
(40, 5, 'Sajib', '01689588525', 'Khulna', 'Rupchanda Soyabean Oil', 'Oil', '2ltr', 218, '2019-12-22'),
(41, 6, 'Himel', '01785622351', 'Chattogram', 'Cadbury Perk Chocolate', 'Chocolate', '16gm', 15, '2019-12-22'),
(42, 6, 'Himel', '01785623514', 'Chattogram', 'Pran Frooto Mango Juice', 'Juice', '500gm', 45, '2019-12-22'),
(43, 6, 'Himel', '01785663514', 'Chattogram', 'Nestle Kit Kat', 'Chocolate', '40gm', 50, '2019-12-22'),
(44, 6, 'Himel', '01785623314', 'Chattogram', 'Rupchanda Soyabean Oil', 'Oil', '2ltr', 218, '2019-12-22'),
(45, 7, 'Jhalak', '01856921652', 'dhaka', 'Danish Max Milk Biscuits', 'Biscuit', '70gm', 10, '2019-12-22'),
(46, 7, 'Jhalak', '01856955652', 'dhaka', 'Aarong Laban', 'Juice', '500gm', 50, '2019-12-22'),
(47, 8, 'taemin', '0187655', 'dhanmondi', 'Nestle Kit Kat', 'Chocolate', '40gm', 50, '2022-12-22'),
(48, 9, 'Musfiq', '01623854595', 'savar', 'Nestle Kit Kat', 'Chocolate', '40gm', 50, '2019-12-22'),
(49, 10, '', '', '', 'Tic Tac Candy Mint Flav', 'Chocolate', '7gm', 25, '2019-12-22'),
(50, 10, 'Dighi', 'hgjhg', 'Busan', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(51, 10, 'Righi', 'hgjhg', 'Gamcheon', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(52, 10, 'Piya', 'hgjhg', 'Gwanju', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(53, 10, 'Sam', 'hgjhg', 'Ilsan', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(54, 10, 'Namjoon', 'hgjhg', 'Gangnam', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(55, 10, 'Pushpo', 'hgjhg', 'Sonadia', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(56, 10, 'Sonia', 'hgjhg', 'Dhanmondi', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(57, 10, 'Tamanna', 'huyjhg', 'Mirpur', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(58, 10, 'Tighi', 'hmkjhg', 'Katabon', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(59, 10, 'Kabbo', 'htyrhg', 'Uttara', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(60, 10, 'Katty', 'mkjhg', 'Basundhara', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(61, 31, 'Rae', '01987655', 'daegu', 'Nestle Kit Kat', 'Chocolate', '40gm', 50, '2022-12-22'),
(62, 32, 'Rajib', '01677588525', 'Kaliganj', 'Rupchanda Soyabean Oil', 'Oil', '2ltr', 218, '2019-11-22'),
(63, 33, 'Rahim', '01960839377', 'Bogura', 'Milk', 'food', '100gm', 500, '0000-00-00'),
(64, 34, 'Hemanta', '01985633514', 'Pabna', 'Pran Frooto Mango Juice', 'Juice', '500gm', 45, '2019-12-23'),
(65, 35, 'Shima', '5677788', 'Katabon', 'Cadbary Dairy Milk Chocolate', 'Chocolate', '55gm', 100, '2019-12-22'),
(66, 36, 'Asif', '016253695', 'Dhanmondi', 'Nestle Kit Kat', 'Chocolate', '40gm', 50, '2019-12-27'),
(67, 37, 'Shafiq', '0198795', 'norda', 'Aarong Laban', 'Juice', '500gm', 50, '2019-09-07'),
(68, 38, 'Moon', '0198943295', 'gazipur', 'Aarong Laban', 'Juice', '500gm', 50, '2019-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `delivery_Date` date NOT NULL,
  `payment method` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `product_id`, `delivery_Date`, `payment method`) VALUES
(1, 0, '2022-01-04', 'cash'),
(2, 0, '2022-01-10', 'cash'),
(3, 0, '2022-01-12', 'bkash'),
(4, 0, '2022-01-12', 'bkash'),
(5, 0, '2022-01-12', 'bkash'),
(6, 0, '2022-01-12', 'nagad'),
(7, 0, '2022-01-12', 'nagad'),
(8, 0, '2022-01-12', 'nagad'),
(9, 0, '2022-01-12', 'bkash'),
(10, 0, '2022-01-13', 'cash'),
(11, 0, '2022-01-13', 'cash'),
(12, 0, '2022-01-13', 'cash'),
(13, 0, '2022-01-13', 'bkash'),
(14, 0, '2022-01-13', 'bkash'),
(15, 0, '2022-01-13', 'bkash'),
(16, 0, '2022-01-13', 'cash'),
(17, 0, '2022-01-14', 'cash'),
(18, 0, '2022-01-14', 'cash'),
(19, 0, '2022-01-14', 'bkash'),
(20, 0, '2022-01-14', 'bkash'),
(21, 0, '2022-01-14', 'nagad'),
(22, 0, '2022-01-14', 'bkash'),
(23, 0, '2022-01-14', 'cash'),
(24, 0, '2022-01-14', 'cash'),
(25, 0, '2022-01-14', 'cash'),
(26, 0, '2022-01-14', 'bkash'),
(27, 0, '2022-01-15', 'bkash'),
(28, 0, '2022-01-15', 'bkash'),
(29, 0, '2022-01-15', 'cash'),
(30, 0, '2022-01-15', 'cash'),
(31, 0, '2022-01-15', 'cash'),
(32, 0, '2022-01-15', 'bkash'),
(33, 0, '2022-01-15', 'bkash'),
(34, 0, '2022-01-15', 'bkash'),
(35, 0, '2022-01-15', 'bkash'),
(36, 0, '2022-01-15', 'cash'),
(37, 0, '2022-01-15', 'cash'),
(38, 0, '2022-01-15', 'cash'),
(39, 0, '2022-01-15', 'bkash'),
(40, 0, '2022-01-16', 'bkash'),
(41, 0, '2022-01-16', 'cash'),
(42, 0, '2022-01-16', 'cash'),
(43, 0, '2022-01-16', 'cash'),
(44, 0, '2022-01-16', 'bkash'),
(45, 0, '2022-01-16', 'bkash'),
(46, 0, '2022-01-16', 'bkash'),
(47, 0, '2022-01-16', 'bkash'),
(48, 0, '2022-01-16', 'bkash'),
(49, 0, '2022-01-16', 'bkash'),
(50, 0, '2022-01-16', 'cash'),
(51, 0, '2022-01-16', 'cash'),
(52, 0, '2022-01-17', 'cash'),
(53, 0, '2022-01-17', 'cash'),
(54, 0, '2022-01-17', 'cash'),
(55, 0, '2022-01-17', 'cash'),
(56, 0, '2022-01-17', 'cash'),
(57, 0, '2022-01-17', 'cash'),
(58, 0, '2022-01-17', 'cash'),
(59, 0, '2022-01-17', 'bkash'),
(60, 0, '2022-01-17', 'bkash'),
(61, 0, '2022-01-17', 'nagad'),
(62, 0, '2022-01-17', 'cash'),
(63, 0, '2022-01-17', 'nagad'),
(64, 0, '2022-01-17', 'bkash'),
(65, 0, '2022-01-17', 'bkash'),
(66, 0, '2022-01-17', 'nagad'),
(67, 0, '2022-01-17', 'cash'),
(68, 0, '2022-01-17', 'nagad'),
(69, 0, '2022-01-18', 'bkash'),
(70, 0, '2022-01-18', 'bkash'),
(71, 0, '2022-01-18', 'bkash'),
(72, 0, '2022-01-18', 'nagad'),
(73, 0, '2022-01-18', 'nagad'),
(74, 0, '2022-01-18', 'nagad'),
(75, 0, '2022-01-18', 'bkash'),
(76, 0, '2022-01-18', 'cash'),
(77, 0, '2022-01-18', 'cash'),
(78, 0, '2022-01-18', 'cash'),
(79, 0, '2022-01-18', 'bkash'),
(80, 0, '2022-01-18', 'bkash'),
(81, 0, '2022-01-18', 'bkash'),
(82, 0, '2022-01-18', 'cash'),
(83, 0, '2022-01-18', 'cash'),
(84, 0, '2022-01-18', 'cash'),
(85, 0, '2022-01-18', 'bkash'),
(86, 0, '2022-01-18', 'bkash'),
(87, 0, '2022-01-18', 'nagad'),
(88, 0, '2022-01-18', 'bkash'),
(89, 0, '2022-01-18', 'cash'),
(90, 0, '2022-01-18', 'cash'),
(91, 0, '2022-01-18', 'cash'),
(92, 0, '2022-01-18', 'bkash'),
(93, 0, '2022-01-18', 'bkash'),
(94, 0, '2022-01-18', 'bkash'),
(95, 0, '2022-01-19', 'cash'),
(96, 0, '2022-01-19', 'cash'),
(97, 0, '2022-01-19', 'cash'),
(98, 0, '2022-01-19', 'bkash'),
(99, 0, '2022-01-19', 'bkash'),
(100, 0, '2022-01-19', 'bkash'),
(101, 0, '2022-01-19', 'bkash'),
(102, 0, '2022-01-19', 'cash'),
(103, 0, '2022-01-19', 'cash'),
(104, 0, '2022-01-19', 'cash'),
(105, 0, '2022-01-19', 'bkash'),
(106, 0, '2022-01-19', 'bkash'),
(107, 0, '2022-01-19', 'cash'),
(108, 0, '2022-01-19', 'cash'),
(109, 0, '2022-01-19', 'cash'),
(110, 0, '2022-01-19', 'bkash'),
(111, 0, '2022-01-19', 'bkash'),
(112, 0, '2022-01-19', 'bkash'),
(113, 0, '2022-01-19', 'bkash'),
(114, 0, '2022-01-19', 'bkash'),
(115, 0, '2022-01-19', 'bkash'),
(116, 0, '2022-01-19', 'cash'),
(117, 0, '2022-01-19', 'cash'),
(118, 0, '2022-01-19', 'cash'),
(119, 0, '2022-01-19', 'cash'),
(120, 0, '2022-01-19', 'cash'),
(121, 0, '2022-01-19', 'cash'),
(122, 0, '2022-01-19', 'cash'),
(123, 0, '2022-01-19', 'cash'),
(124, 0, '2022-01-19', 'cash'),
(125, 0, '2022-01-20', 'bkash'),
(126, 0, '2022-01-20', 'bkash'),
(127, 0, '2022-01-20', 'bkash'),
(128, 0, '2022-01-20', 'nagad'),
(129, 0, '2022-01-20', 'nagad'),
(130, 0, '2022-01-20', 'nagad'),
(131, 0, '2022-01-20', 'bkash'),
(132, 0, '2022-01-20', 'cash'),
(133, 0, '2022-01-20', 'cash'),
(134, 0, '2022-01-20', 'cash'),
(135, 0, '2022-01-20', 'bkash'),
(136, 0, '2022-01-20', 'bkash'),
(137, 0, '2022-01-20', 'bkash'),
(138, 0, '2022-01-20', 'cash'),
(139, 0, '2022-01-20', 'cash'),
(140, 0, '2022-01-20', 'cash'),
(141, 0, '2022-01-20', 'bkash'),
(142, 0, '2022-01-20', 'bkash'),
(143, 0, '2022-01-20', 'nagad'),
(144, 0, '2022-01-20', 'bkash'),
(145, 0, '2022-01-20', 'cash'),
(146, 0, '2022-01-20', 'cash'),
(147, 0, '2022-01-20', 'cash'),
(148, 0, '2022-01-20', 'bkash'),
(149, 0, '2022-01-20', 'bkash'),
(150, 0, '2022-01-20', 'bkash'),
(151, 0, '2022-01-20', 'nagad');

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_size` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_price` int(6) NOT NULL,
  `stock` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`product_id`, `product_name`, `category_name`, `product_size`, `product_price`, `stock`) VALUES
(1, 'ZARRA', 'JACKET', '', 5000, 45),
(2, 'ZARRA', 'SHIRT', '', 5000, 45),
(3, 'ZARRA', 'SHIRT', '', 5000, 45),
(4, 'ZARRA', 'PANT', '', 5000, 45),
(5, 'ADIDAS', 'JACKET', '', 5000, 45),
(6, 'ADIDAS', 'T-SHIRT', '', 5000, 45),
(7, 'ADIDAS', 'PANT', '', 5000, 45),
(8, 'NIKE', 'JACKET', '', 5000, 45),
(9, 'NIKE', 'T-SHIRT', '', 5000, 45),
(10, 'NIKE', 'PANT', '', 5000, 45),
(11, 'NIKE', 'SHOE', '', 5000, 45),
(12, 'ADIDAS', 'SHOE', '', 5000, 45);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `phone_number`, `city`) VALUES
(1, 'King', 'SKING', '515.123.4567', 'Dhaka'),
(2, 'Kochar', 'NKOCHAR', '515.123.4568', 'Bogura'),
(3, 'De Haan', 'DEHAAN', '515.123.4569', 'Dhaka'),
(4, 'Hunold', 'AHUNOLD', '590.423.4567', 'noakhali'),
(5, 'Ernst', 'BERNST', '590.423.4568', 'barishal'),
(6, 'Lorentz', 'DLORENTZ', '590.423.5567', 'Borguna'),
(7, 'Mourgos', 'KMORGOS', '650.123.5234', 'Faridpur'),
(8, 'Rajs', 'RRAJS', '650.121.5234', 'Jossore'),
(9, 'Davies', 'CDAVIES', '121.123.5234', 'Jhinaidah'),
(10, 'Vargas', 'PVARGAS', '121.123.5234', 'Rangpur'),
(11, 'Zlotkey', 'EZLOTKEY', '44.1344.429018', 'Dinajjpur'),
(12, 'Abel', 'EABEL', '44.1644.429017', 'Sirajganj'),
(13, 'Taylor', 'JTAILOR', '44.1644.429021', 'Panchagar'),
(14, 'Grant', 'KGRANT', '44.1644.429023', 'Dhaka'),
(15, 'Whalem', 'JWHALEN', '515.123.4444', 'Rajshahi'),
(16, 'Hartstein', 'MHARSTEIN', '515.123.5555', 'Bandra'),
(17, 'Fay', 'PFAY', '603.123.6666', 'Lahore'),
(18, 'Higgins', 'SHIGGINS', '515.123.8050', 'kualalampur'),
(19, 'Alex', 'he@gmail.com', '515.123.8050', 'mali'),
(20, 'Clein', 'k@gmail.com', '650.126.5234', 'Dhaka'),
(21, 'Whalem', 'JWHAL', '515.193.4444', 'Bogura'),
(22, 'Hartstein', 'MHARS', '515.123.5955', 'Rajbari'),
(23, 'Anderson', 'PAY', '683.123.6666', 'Rajbari'),
(24, 'Higgins', 'SHI', '515.223.8050', 'Cumilla'),
(25, 'Shah', 'hs@gmail.com', '585.123.8050', 'Jassore'),
(26, 'Abhnderson', 'BHPAY', '686.123.6666', 'Dhaka'),
(27, 'Higgins', 'Suuu', '517.223.8050', 'Bogura'),
(28, 'Shah', 'has@gmail.com', '585.129.8050', 'Rajshahi'),
(29, 'Higgins', 'SABBY', '595.223.8050', 'Rangpur'),
(30, 'Shah', 'ss@gmail.com', '585.123.8150', 'Feni'),
(31, 'Abhnderson', 'PFPAY', '606.123.6666', 'Faridabad'),
(32, 'Higgins', 'Suuu', '517.223.8050', 'Jossore'),
(33, 'Soozy', 'zas@gmail.com', '589.129.8050', 'Rajbari'),
(34, 'Gietz', 'WGIETZ', '515.123.8181', 'Coxs Bazar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing info(orders)`
--
ALTER TABLE `billing info(orders)`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_Id` (`user_Id`),
  ADD KEY `price` (`price`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_name` (`product_name`),
  ADD KEY `product_category` (`product_category`),
  ADD KEY `product_quantity` (`product_quantity`),
  ADD KEY `product_price` (`product_price`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category` (`category_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `billing info(orders)`
--
ALTER TABLE `billing info(orders)`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
