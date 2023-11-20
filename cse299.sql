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
-- Table structure for table `billing info`
--

CREATE TABLE `billing info` (
  `billing_id` int(11) NOT NULL,
  `billing_address` varchar(40) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `payment_method` varchar(40) NOT NULL,  
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing info`
--

INSERT INTO `billing info` (`billing_id`, `billing_address`, `cart_id`, `payment_method`, `username`) VALUES
(1, 'Dhaka',  1 , 'cash', 'sking'),
(2, 'Jhinaidah', 2, 'nagad', 'shantzy'),
(3, 'Jossore', 3, 'cash', 'tamJr'),
(4, 'Rajshahi', 4, 'card', 'parv139'),
(5, 'Dhaka', 5 , 'bKash', 'ROHAN'),
(6, 'Barishal', 6, 'card', 's2k78');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_size` varchar(10) NOT NULL,
  `product_price` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `total_price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `username`, `comment`) VALUES

  (1, 'LKD16' , 'Trendy Threads is my preferred internet retailer for fashionable yet reasonably priced apparel. I adore the vast array of things they provide, ranging from everyday casual clothing to more elegant ensembles. Their customer service is excellent and their product quality has always impressed me. To anybody searching for an amazing internet shopping experience, I heartily recommend Trendy Threads!'),
  (2, 'shantzy', 'I have been a Trendy Threads customer for a few years now, and I have always been happy with their products and service. Their website is easy to navigate, and they offer a variety of payment options. My only complaint is that their shipping can sometimes be a bit slow.'),
  (3, 'tamJr', 'I have ordered from Trendy Threads a few times, and I have had mixed experiences. Some of the products I have ordered have been great, but others have been disappointing. I have also had a few issues with their customer service. Overall, I think Trendy Threads is a decent online shopping platform, but there are definitely better options out there'),
  (4, 'sking', 'I used to love Trendy Threads, but I have been disappointed with their recent products and service. The quality of their products has declined, and their customer service is not as responsive as it used to be. I have also had a few problems with their shipping, and I have had to return a few items because they were defective. I am not sure Ill be shopping at Trendy Threads again anytime soon.'),
  (5, 'parv139', 'I am so glad I discovered Trendy Threads! I have been shopping online for years, and I have never found a website that I love as much as this one. The selection of clothes is amazing, and the prices are unbeatable. I have also been blown away by the quality of the products. Everything I have ordered has been exactly as pictured and has fit perfectly. Plus, the customer service is fantastic.  I highly recommend Trendy Threads to anyone looking for a great online shopping experience!');


--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `category_ID` int(11) NOT NULL,
  `product_price` int(6) NOT NULL,
  `stock` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `img`, `category_ID`, `product_price`, `stock`) VALUES

(10100, 'Too Hot to Handle T-shirt - Black','https://i.ibb.co/2N16zHr/TOO-HOT-TO-HANDLE-mockup-image.jpg', 101, 650, 50),
(10101, 'Foodie T-shirt - Red', 'https://i.ibb.co/GMCtkxx/foodie-tshirt-image-mydesignation-eat-at-trivandrum-C.jpg', 101, 675, 50),
(10102, 'KGF Rules T-shirt - Black', 'https://i.ibb.co/vjHxhMq/kgf-tshirt-mockup.jpg', 101, 720, 50),
(10103, 'Glow in the Dark T-shirt - Black', 'https://i.ibb.co/FVDnPz5/harry-potter-tshirt-glow-in-the-dark-mydesignation-mockup-glow.gif', 101, 800, 50),
(10104, 'Airplane T-shirt - Khaki', 'https://i.ibb.co/7yb0F06/t-shirts-1.jpg', 101, 800, 50),
(10105, 'Solid T-shirt - Olive Green', 'https://i.ibb.co/tQ9x3zx/t-shirts-2.jpg', 101, 870, 50),
(10106, 'Drop-shoulder T-shirt - Navy Blue', 'https://i.ibb.co/sw0gFXZ/t-shirts-3.jpg', 101, 870, 50),
(10107, 'AC/DC T-shirt - Black', 'https://i.ibb.co/y5MGg43/t-shirts-4.jpg', 101, 950, 50),
(10108, 'Mens Polo T-shirt - Bottle Green', 'https://i.ibb.co/FqdkcMv/polos-1.jpg', 101, 950, 50),
(10109, 'Mens Polo T-shirt - Black', 'https://i.ibb.co/qgL44nr/polos-2.jpg', 101, 970, 50),
(10110, 'Mens Polo T-shirt - White', 'https://i.ibb.co/WVwfQ2T/polos-3.jpg', 101, 1000, 50),
(10111, 'Mens Polo T-shirt - Navy Blue', 'https://i.ibb.co/hWs2v4w/polos-4.jpg', 101, 1000, 50),
(10200, 'Mens Band Collar Striped Shirt - Blue & White', 'https://i.ibb.co/XJx6n8G/shirts-1.jpg', 102, 1200, 50),
(10202, 'Mens Casual Shirt - Mint Green', 'https://i.ibb.co/Nmp60JK/shirts-3.jpg', 102, 1300, 50),
(10203, 'Mens Casual Shirt - Olive Green', 'https://i.ibb.co/q95c7rt/shirts-9.jpg', 102, 1300, 50),
(10204, 'Mens Casual Shirt - Pale Orange',  'https://i.ibb.co/nzDnvht/shirts-5.jpg', 102, 1300, 50),
(10205, 'Mens Linen Shirt - Navy Blue', 'https://i.ibb.co/Qmd6ywX/shirts-8.jpg', 102, 1350, 50),
(10206, 'Mens Grameen Check Shirt - Blue', 'https://i.ibb.co/HnkgGW5/shirts-7.jpg', 102, 1400, 50),
(10207, 'Mens Formal Shirt - White', 'https://i.ibb.co/93XmxL4/shirts-4.jpg', 102, 1500, 50),
(10208, 'Mens Formal Shirt - Black', 'https://i.ibb.co/RyRVqCj/shirts-6.jpg', 102, 1500, 50),
(10301, 'Mens Cargo Pants - Cream', 'https://i.ibb.co/zQF7Byt/pants-2.jpg', 103, 1300, 50),
(10302, 'Mens Cargo Pants - Denim Blue', 'https://i.ibb.co/64nMGQc/pants-3.jpg', 103, 1300, 50),
(10303, 'Mens Cargo Pants - Black', 'https://i.ibb.co/ZzVPNzb/pants-4.jpg', 103, 1350, 50),
(10304, 'Mens Formal Wide legged - Khaki', 'https://i.ibb.co/d77CTwp/pants-7.jpg', 103, 1400, 50),
(10400, 'Mens Glen Check Blazer - Navy Blue', 'https://i.ibb.co/3kf97t8/blazer-1.jpg', 104, 4000, 50),
(10401, 'Mens  Formal Blazer - Black', 'https://i.ibb.co/nkJTsZc/blazer-4.jpg', 104, 4250, 50),
(10402, 'Mens  Formal Blazer -  Maroon', 'https://i.ibb.co/PwHqnS8/blazer-5.jpg', 104, 4800, 50),
(10403, 'Mens  Formal Blazer -  Pine Green', 'https://i.ibb.co/wR5v8VT/blazer-2.jpg', 104, 5200, 50),
(10404, 'Mens Glen Check Blazer - Purple', 'https://i.ibb.co/1sTxbjm/blazer-3.jpg', 104, 5600, 50),
(10405, 'Mens Glen Check Blazer - Grey', 'https://i.ibb.co/GMMVcPC/blazer-6.jpg',  104, 6000, 50),
(10406, 'Mens Chalk Stripe Suit - Charcoal Grey', 'https://i.ibb.co/pPzM8Wx/suit-2.jpg', 104, 8250, 50),
(10407, 'Mens Glen Check Suit - Ocean Blue', 'https://i.ibb.co/wwV79cP/suit-1.jpg', 104, 8800, 50),
(10500, 'Womens Jumpsuit with Top - Powder Blue', 'https://i.ibb.co/mTFyNnN/jumpsuit-1.jpg', 105, 1800, 50),
(10501, 'Womens Jumpsuit - Black', 'https://i.ibb.co/Xkqr2YH/jumpsuit-2.jpg', 105, 1850, 50),
(10502, 'Womens Jumpsuit - Yellow', 'https://i.ibb.co/h90QSYD/jumpsuit-3.jpg', 105, 2000, 50),
(10503, 'Womens Silk Jumpsuit - Powder Green', 'https://i.ibb.co/y02DbkX/jumpsuit-4.jpg', 105, 2200, 50),
(10601, 'Womens Wide Legged Denim Jeans - Blue', 'https://i.ibb.co/3dhWV5j/lad-jeans-2.jpg', 106, 1600, 50),
(10602, 'Womens Wide Legged Jeans - Black', 'https://i.ibb.co/mGjTtQn/lad-jeans-3.jpg', 106, 1750, 50),
(10603, 'Womens Flare Jeans - Blue', 'https://i.ibb.co/DVjPwdB/lad-jeans-4.jpg', 106, 1800, 50),
(10604, 'Womens Formal Pants - Black', 'https://i.ibb.co/37mGs4z/lad-jeans-5.jpg', 106, 2000, 50),
(10701, 'Womens Half-sleeve Crop Shirt - Light Green', 'https://i.ibb.co/KVWZynf/w-shirt-1.jpg', 107, 700, 50),
(10702, 'Womens Balloon Sleeve Moff Shirt - Pink', 'https://i.ibb.co/FgxMrdK/w-shirt-2.jpg', 107, 750, 50),
(10703, 'Womens Folded Half-sleeve Shirt - Pale Orange', 'https://i.ibb.co/mTJS56c/w-shirt-3.jpg', 107, 800, 50),
(10704, 'Womens Folded Half-sleeve Shirt - Bottle Green', 'https://i.ibb.co/ByJxHCh/w-shirt-4.jpg', 107, 850, 50),
(10800, 'Womens Kurti with Pants - Sky Blue', 'https://i.ibb.co/dtPZ6xd/salwar-1.jpg', 108, 3300, 50),
(10801, 'Womens Kurti with Cream Trousers - Navy Blue', 'https://i.ibb.co/Z8cXFg7/salwar-2.jpg', 108, 3500, 50),
(10802, 'Womens Embroidered Kurti with Pants - White', 'https://i.ibb.co/kXCLz53/salwar-3.jpg', 108, 3800, 50),
(10803, 'Womens Three piece - Powder Blue', 'https://i.ibb.co/zhsVgd8/salwar-4.jpg', 108, 4000, 50),
(10804, 'Womens Kurti with Pants - Lavendar', 'https://i.ibb.co/6J3Yq3T/salwar-5.jpg', 108, 4200, 50),
(10805, 'Womens Three piece - Lavendar', 'https://i.ibb.co/CBptGhF/salwar-6.jpg', 108, 5000, 50),
(10806, 'Womens Saree - Pink Shimmery', 'https://i.ibb.co/55B66sk/saree-1.jpg', 108, 3300, 50),
(10807, 'Womens Saree - Navy Blue', 'https://i.ibb.co/vqNZ6Wb/saree-2.jpg', 108, 3000, 50),
(10900, 'Baby Onesies - Grey',  'https://i.ibb.co/tp7PYkQ/onesies-1.jpg', 109, 500, 50),
(10901, 'Baby Onesies - Black', 'https://i.ibb.co/XLhrWZ0/onesies-2.jpg', 109, 550, 50),
(10902, 'Baby Onesies - White', 'https://i.ibb.co/jkKMCcH/onesies-3.jpg', 109, 600, 50),
(10903, 'Baby Onesies Mixed Set- White, Brown & Beige', 'https://i.ibb.co/5MwpgzY/onesies-4.jpg', 109, 2200, 50),
(11000, 'Babys Outwear - Mint Green', 'https://i.ibb.co/k9twp87/outwear-1.jpg', 110, 800, 50),
(11001, 'Babys Outwear - Navy Blue', 'https://i.ibb.co/f29pYn6/outwear-2.jpg', 110, 800, 50),
(11002, 'Babys Outwear - Orange', 'https://i.ibb.co/hKLj39d/outwear-4.jpg', 110, 900, 50),
(11003, 'Babys Outwear Set - Grey & Pink', 'https://i.ibb.co/16cpwGp/outwear-3.jpg', 110, 1450, 50),
(11100, 'Boys T-shirt & Pants set - Black', 'https://i.ibb.co/vJpSCKp/kids-shirt-4.jpg', 111, 800, 50),
(11101, 'Boys T-shirt & Pants set - Mint Green & White', 'https://i.ibb.co/wyP24rM/kids-shirt-1.jpg', 111, 1000, 50),
(11102, 'Boys T-shirt & Pants set - Black & Brown', 'https://i.ibb.co/WVzzVzS/kids-shirt-2.jpg', 111, 1000, 50),
(11103, 'Boys T-shirt & Pants set - Black & Blue', 'https://i.ibb.co/rML178L/kids-shirt-3.jpg', 111, 1000, 50),
(11104, 'Girls Flowery Frock - Midnight Green', 'https://i.ibb.co/fvbyxxr/kids-frock-1.jpg', 111, 1200, 50),
(11105, 'Girls Polkadot Frock - Red', 'https://i.ibb.co/gM24w3Z/kids-frock-2.jpg', 111, 1200, 50),
(11106, 'Girls Frock with Frills - Blue','https://i.ibb.co/M16LFYB/kids-frock-3.jpg',  111, 1250, 50),
(11107, 'Baby Rampers - Beige & Black', 'https://i.ibb.co/QnRwLZf/kids-ramper-1.jpg', 111, 1300, 50),
(11200, 'Mens Sporty Hoodies - Black', 'https://i.ibb.co/4pttbyX/hoodies-1.jpg', 112, 1100, 50),
(11201, 'Mens Sporty Hoodies - Olive Green', 'https://i.ibb.co/VvP168P/hoodies-2.jpg', 112, 1200, 50),
(11202, 'Mens Sporty Hoodies - Brown', 'https://i.ibb.co/JFW1R8t/hoodies-3.jpg', 112, 1200, 50),
(11203, 'Unisex Casual Hoodies - Purple', 'https://i.ibb.co/zf3jKTm/hoodies-4.jpg', 112, 1200, 50),
(11204, 'Womens Woollen Hoodies - White', 'https://i.ibb.co/dbFvbpZ/hoodies-5.jpg', 112, 1200, 50),
(11205, 'Womens Casual Hoodies - White & Pink', 'https://i.ibb.co/09Tqk84/hoodies-6.jpg', 112, 1200, 50),
(11206, 'Womens Cozy Hoodies - Cream & Pink', 'https://i.ibb.co/fFm28NW/hoodies-7.jpg', 112, 1300, 50),
(11207, 'Mens Cozy Hoodies - Blue', 'https://i.ibb.co/5cFXHyc/hoodies-8.jpg', 112, 1300, 50),
(11300, 'Unisex Sweatshirts - White', 'https://i.ibb.co/rfCBBzN/sweater-1.jpg', 113, 800, 50),
(11301, 'Unisex Sweatshirts - Black', 'https://i.ibb.co/5TWrYFR/sweater-2.jpg', 113, 800, 50),
(11302, 'Unisex Sweatshirts - Blue', 'https://i.ibb.co/xHBFgQd/sweater-3.jpg', 113, 850, 50),
(11303, 'Unisex Sweatshirts - Pine Green', 'https://i.ibb.co/WV96QVq/sweater-5.jpg', 113, 900, 50),
(11400, 'Mens Chore Jacket - Midnight Black', 'https://i.ibb.co/qkmdRz6/jackets-1.jpg', 114, 1800, 50),
(11401, 'Mens Denim Jacket - Blue', 'https://i.ibb.co/rdBSJVC/jackets-2.jpg', 114, 2200, 50),
(11402, 'Mens Harrington Jacket - White', 'https://i.ibb.co/7WLHzWq/jackets-3.jpg', 114, 2800, 50),
(11403, 'Mens Puffer Jacket - Black', 'https://i.ibb.co/qRzgZhy/jackets-5.jpg', 114, 3000, 50),
(11404, 'Womens Denim Jacket - Blue & Navy Blue', 'https://i.ibb.co/b3N8TnB/jackets-9.jpg', 114, 3500, 50),
(11405, 'Womens Leather Jacket - Carbon Black', 'https://i.ibb.co/bzQ66mk/jackets-7.jpg', 114, 6250, 50),
(11406, 'Womens Leather Jacket - Beige', 'https://i.ibb.co/9Trq0r0/jackets-6.jpg', 114, 7000, 50),
(11407, 'Womens Leather Jacket - Black', 'https://i.ibb.co/R0krGdV/jackets-8.jpg', 114, 7000, 50),
(11500, 'Unisex Turtleneck - Black', 'https://i.ibb.co/M1TMQ6X/turtleneck-1.jpg', 115, 1100, 50),
(11501, 'Unisex Turtleneck - Blue', 'https://i.ibb.co/cQ4SDLt/turtleneck-2.jpg', 115, 1200, 50),
(11502, 'Unisex Turtleneck - Olive Green', 'https://i.ibb.co/tZ3w9FF/turtleneck-3.jpg', 115, 1200, 50),
(11503, 'Unisex Turtleneck - Brown', 'https://i.ibb.co/2cbSqgh/turtleneck-4.jpg', 115, 1200, 50);

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
(1, 'sking', 101011,'2022-01-04', 'cash'),
(2, 'nkochar', 115033,'2022-01-10', 'cash'),
(3, 'ROHAN', 113023,'2022-01-12', 'bkash'),
(4, 'dlanod', 113022,'2022-01-12', 'bkash'),
(5, 's2k78', 114014,'2022-01-12', 'bkash'),
(6, 'dLorentz', 114013,'2022-01-12', 'nagad'),
(7, 'LKD16', 101011,'2022-01-12', 'nagad'),
(8, 'tamJr', 115001,'2022-01-12', 'nagad'),
(9, 'shantzy', 101012 ,'2022-01-12', 'bkash'),
(10,'parv139', 101011,'2022-01-13', 'cash'),
(11,'daily23', 112023,'2022-01-20', 'nagad');

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
-- Indexes for table `billing info`
--
ALTER TABLE `billing info`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `username` (`username`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `img` (`img`),
  ADD KEY `product_name` (`product_name`),  
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
-- AUTO_INCREMENT for table `billing info`
--
ALTER TABLE `billing info`
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
