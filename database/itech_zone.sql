-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 02:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itech_zone`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_title` varchar(30) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `sale_price` varchar(10) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `inquiry` varchar(20) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `name`, `email`, `subject`, `message`, `date/time`) VALUES
(1, 'Shari', 'majeedamir192@gmail.com', 'Website', 'php website', '2021-06-05 20:23:48'),
(2, 'Food Panda', 'pfood45@gmail.com', 'Food Panda Deals', 'We have an impressive food deals for you', '2021-06-10 14:34:52'),
(3, 'Shari', 'shari@gmail.com', 'My subject', 'my website', '2021-06-10 14:41:51'),
(4, 'Shari', 'robot@gmail.com', 'BSCS', 'bscs ics', '2021-06-10 15:01:45'),
(5, 'Shari', 'robot@gmail.com', 'BSCS', 'bscs ics', '2021-06-10 15:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_code` varchar(30) NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_code`, `coupon_discount`, `date/time`) VALUES
(4, 'Lahore55', 5000, '2021-06-01 16:31:00'),
(6, 'pakistan', 9000, '2021-06-01 16:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `insert_box`
--

CREATE TABLE `insert_box` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insert_box`
--

INSERT INTO `insert_box` (`id`, `title`, `description`, `date/time`) VALUES
(18, 'Laptops', 'Our Company will provide you best Laptops in reasonable prices. Must visit our Website', '2021-05-26 19:19:56'),
(19, 'Mobiles', 'We will provide you all types of Mobiles in cheap rate.', '2021-05-26 19:20:23'),
(22, 'Accessories', 'Our Company also provide the Accessories of Mobile and Laptop in a reasonable price. Must visit our Website.', '2021-06-01 18:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `insert_product`
--

CREATE TABLE `insert_product` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `manufacturer` int(20) NOT NULL,
  `product_category` int(20) NOT NULL,
  `image_1` varchar(100) NOT NULL,
  `image_2` varchar(100) NOT NULL,
  `image_3` varchar(100) NOT NULL,
  `purchase_price` varchar(11) NOT NULL,
  `sale_price` varchar(11) NOT NULL,
  `product_desc` varchar(3000) NOT NULL,
  `product_features` varchar(1000) NOT NULL,
  `keywords` varchar(50) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insert_product`
--

INSERT INTO `insert_product` (`id`, `title`, `manufacturer`, `product_category`, `image_1`, `image_2`, `image_3`, `purchase_price`, `sale_price`, `product_desc`, `product_features`, `keywords`, `date/time`) VALUES
(17, 'Vivo v11 pro', 25, 17, '1622116038_download (9).jpg', '1622116038_download (8).jpg', '1622116038_1536222480_635_vivo_v11_pro.webp', '50000', '55000', 'A couple of years ago, the smartphone industry was struck by the selfie frenzy, and pretty much every manufacturer began selling selfie-focused models. Among the crowd, Oppo’s F series and Vivo’s V series have stood the test of time, as both companies continue to iterate and refresh them. The company\'s latest offering is the Vivo V11 Pro, an iterative update to the Vivo V9 (Review) which was launched about six months ago. This is the first V series phone to sport an in-display fingerprint sensor\r\nVivo V11 Pro Summary\r\nThe Vivo V11 Pro sports a plastic body that\'s slim and light. The Starry Night colour looks really cool but the glossy finish attracts fingerprints very easily. The 6.41-inch Super AMOLED display has punchy colours and good brightness. The phone is powered by a Qualcomm Snapdragon 660 SoC and comes with 6GB of RAM and 64GB of storage. It supports dual SIMs with dual 4G VoLTE support. The rear 12-megapixel camera has very quick focusing speeds and image quality is good. Th', 'Display 6.41-inch (1080x2340)\r\nProcessor Qualcomm Snapdragon 660.\r\nFront Camera 25MP.\r\nRear Camera 12MP + 5MP.\r\nRAM 6GB.\r\nStorage 64GB.\r\nBattery Capacity 3400mAh.\r\nOS Android 8.1.', 'vivo', '2021-05-27 16:47:18'),
(18, 'I Phone 11 pro max', 29, 17, '1622117537_Apple-iPhone-11-Pro-Max-1.jpg', '1622117537_apple-iphone-11-pro.jpg', '1622117537_apple_i_phone_12_pro-_myshop-pk-__2.jpg', '220000', '234500', 'Price In Pakistan	 Rs 234,500\r\nPerformance	Apple A13 Bionic\r\nStorage	64 GB\r\nCamera	12MP + 12MP + 12MP\r\nBattery	3969 mAh\r\nDisplay	6.5\" (16.51 cm)\r\nRam	4 GB\r\nLaunch Date In India	September 20, 2019 (Official)\r\nKEY SPECS\r\nFront Camera	12 MP\r\nBattery	3969 mAh\r\nProcessor	Apple A13 Bionic\r\nDisplay	6.5 inches\r\nRam	4 GB\r\nRear Camera	12 MP + 12 MP + 12 MP\r\nSPECIAL FEATURES\r\nOther Sensors	Light sensor, Proximity sensor, Accelerometer, Barometer, Gyroscope\r\nFingerprint Sensor	No', 'Display 6.50-inch (1242x2688)\r\nProcessor Apple A13 Bionic.\r\nFront Camera 12MP.\r\nRear Camera 12MP + 12MP + 12MP.\r\nRAM 4GB.\r\nStorage 64GB.\r\nBattery Capacity 3969mAh.\r\nOS iOS 13.', 'iphone 11 pro max', '2021-05-27 17:12:17'),
(27, 'Dell Inspiron 15 350', 24, 16, '1622201375_images.jpg', '1622201375_download (5).jpg', '1622201375_download (2).jpg', '130000', '137999', 'Dell Inspiron 15 is a Windows 10 Home laptop with a 15.60-inch display that has a resolution of 1920x1080 pixels. It is powered by a Core i5 processor and it comes with 8GB of RAM. The Dell Inspiron 15 packs 1TB of HDD storage. Graphics are powered by AMD Radeon 530 Graphics. Operating system: Windows 10 Home Price in India: ₹71,968 Dimensions (mm): 380.00 x 258.00 x 22.70', 'Brand	Dell Model	Inspiron 15 3000 Price in Pakistan	Rs 13,799 Model Number	15 3000 Series	Inspiron Dimensions (mm)	380.00 x 260.30 x 25.15 Weight (kg)	2.25 Colours	Black Operating system	Windows 10 Battery', 'dell', '2021-05-28 16:29:35'),
(29, 'Intel Core i7', 26, 16, '1622201851_download (12).jpg', '1622201851_7156VgoIhdL._AC_SY450_.jpg', '1622201851_download (1).jpg', '70000', '77999', 'Looking for an Intel Core i7 laptop? You\'re not alone. Millions of PCs around the world are powered by Intel\'s Core brand of advanced multi-core processors, and among the best and fastest of them is the i7. That\'s why we\'ve published this webpage – to help you shop, every model listed here is a Lenovo Core i7 laptop.\r\n\r\nThere\'s good reason to buy a Core i7 laptop. First, the i7 is on the high end of Intel’s Core CPU hierarchy, offering faster speeds and more advanced features than most models in Intel’s value-focused Core i3 series or mainstream Core i5 series. The Core i7 is Intel’s “performance” line, making it a logical choice for laptop buyers seeking top-rated processor but who don’t need the absolute fastest speeds or highest core counts. [For those users, there’s the Core i9 series, a favorite of gamers, number-crunchers and tech enthusiasts alike.]\r\n\r\nWhat makes a Core i7 laptop the right choice for you? There are lots of highly technical reasons, but here’s a simplified list of the Core i7 CPU’s most frequently cited benefits:\r\n\r\nCore count: The Core i7 series has a higher maximum core count (eight) than the i3 and i5 chips.\r\nHyper-threading: Complementing the extra cores, there’s hyper-threading (multiplying overall processing capability).\r\nCache: With larger cache allotments than the other chips, a Core i7 CPU can help keep more programs and processes running at one time.\r\nAnother reason consumers buy laptops with Core i7 processors is to give themselves room to grow. It’s not uncommon for a popular software program or app to be upgraded and suddenly require a higher-level CPU or other component than the previous version. While there’s no such thing as a “future-proof” purchase, buying a laptop with faster processor than you currently need – or with more cores, or some other advanced feature -- can help prepare you for these unexpected changes.', 'Intel Core i7 9th Gen.\r\nHexa Core, 2.6 GHz Clock Speed.\r\n16 GB RAM.\r\n1 TB SSD.\r\n6 GB NVIDIA Graphics Card.\r\n15.6 inches, 1920 x 1080 pixels.\r\nWindows 64 OS.\r\n1 Year Warranty.\r\n', 'intel', '2021-05-28 16:37:31'),
(37, 'Headphone', 28, 21, '1622549124_download (16).jpg', '1622549124_Anker-Soundcore-Life-Q10-Wireless-Bluetooth-Headphones.jpg', '1622549124_download (15).jpg', '4000', '5299', 'Headphones are small speakers that can be worn in or around your ears. Traditional headphones have two ear cups attached by a band that is placed over your head. Smaller headphones, often called earbuds or earphones, are placed inside the outer part of your ear canal.', 'Special headphone features.\r\nNoise cancelling. ...\r\nWater-resistant headphones. ...\r\nVoice assistants. ...\r\nBone conduction. ...\r\nBiometric. ...\r\nMicrophones and controls. ...\r\nVolume limiting. ...\r\nSound amplification.\r\n', 'headphone', '2021-06-01 17:05:24'),
(38, 'Laptop Charger', 26, 20, '1623598618_download11.jpg', '1623598618_download (17).jpg', '1623598618_download (18).jpg', '4300', '5000', 'Also called an \"AC adapter\" or \"charger,\" power adapters plug into a wall outlet and convert AC to a single DC voltage. Computers use multiple DC voltages, and the power adapter is the external part of the power supply for a laptop.', '\r\nWhether you are looking for a new laptop battery or a Dell laptop charger, we can help you get the components you\r\n\r\nneed to keep your computer running efficiently. Take a look at our selection and find the Dell AC adaptor or laptop\r\n\r\nbatteries that will power your computer for hours on end.', 'laptop charger', '2021-06-13 20:36:58'),
(39, 'Samsung UA32TE40FAK 32 inch LED HD-Ready TV', 27, 18, '1623598908_1_1378128578-500x500.jpg', '1623598908_samsung-32-inch-uhd-led-flat-smart-tv-mu5300-pakistan-priceoye-wdatj.jpg', '1623598908_samsung-49-inch-hd-smart-led-tv-49n5300-pakistan-priceoye-zzqxc.jpg', '15000', '18499', 'As a forefront pioneer of LED technology, Samsung LEDs marks a new era in a global industry. Our company delivers a product line that comprises core components for LED lighting systems including modules for various uses in displays, mobile devices, automotive, and smart lighting solutions.', 'CONNECTIVITYPORTS\r\nHdmi Ports	2\r\nUsb Supports	Audio, Video, Image\r\nRf Inputanalog Coaxial Ports	1\r\nEthernet Sockets	1\r\nComposite Inputaudio Video Cable Ports	1\r\nMhl Enabled	Yes\r\nUsb Ports	1\r\nNfc Ports	No\r\nGENERAL\r\nWarranty	1 Year\r\nBox Contents	Television, Remote Control(TM1240A), Batteries, Mini Wall Mount, VESA Wall Mount, Power Cord, User Manual, Warranty Card\r\nModel	UA32K5300AR\r\nBrand	Samsung\r\nSeries	5', 'led', '2021-06-13 20:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `insert_product_category`
--

CREATE TABLE `insert_product_category` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `category` tinyint(1) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insert_product_category`
--

INSERT INTO `insert_product_category` (`id`, `title`, `category`, `picture`, `date/time`) VALUES
(16, 'Laptops', 1, '1622548360_download (2).jpg', '2021-06-01 16:52:40'),
(17, 'Mobiles', 1, '1622548343_442-22.jpg', '2021-06-01 16:52:23'),
(18, 'LEDs', 1, '1622548378_download (7).jpg', '2021-06-01 16:52:58'),
(20, 'Laptop Accessories', 1, '1622548147_download (13).jpg', '2021-06-01 16:49:07'),
(21, 'Mobile Accessories', 1, '1622548284_download (14).jpg', '2021-06-01 16:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `insert_slide`
--

CREATE TABLE `insert_slide` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insert_slide`
--

INSERT INTO `insert_slide` (`id`, `name`, `picture`, `url`, `date/time`) VALUES
(13, 'Silde 1', '1622038497_slider3.jpg', '', '2021-05-26 19:14:57'),
(14, 'Slide 2', '1622038327_slider2.jpg', '', '2021-05-26 19:12:07'),
(15, 'Slide 3', '1622038510_slider1.jpg', '', '2021-05-26 19:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `picture`, `date/time`) VALUES
(5, '1622641807_7156VgoIhdL._AC_SY450_.jpg', '2021-06-02 18:50:07'),
(6, '1622641640_download.png', '2021-06-02 18:47:20'),
(7, '1622641823_download (1).png', '2021-06-02 18:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_name`
--

CREATE TABLE `manufacturer_name` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer_name`
--

INSERT INTO `manufacturer_name` (`id`, `name`, `status`, `picture`, `date/time`) VALUES
(24, 'Dell', 1, '1622116225_download (5).jpg', '2021-05-27 16:50:25'),
(25, 'Vivo', 1, '1622116101_vivo-y20g.jpg', '2021-05-27 16:48:21'),
(26, 'Intel', 1, '1622116111_download (6).jpg', '2021-05-27 16:48:31'),
(27, 'Samsung', 1, '1622116126_download (3).jpg', '2021-05-27 16:48:46'),
(28, 'Audionic', 1, '1622116265_download (10).jpg', '2021-05-27 16:51:05'),
(29, 'I Phone', 1, '1622116662_apple_i_phone_12_pro-_myshop-pk-__2.jpg', '2021-05-27 16:57:42'),
(30, 'Redmi', 1, '1622116703_download (4).jpg', '2021-05-27 16:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `amount`, `status`, `date/time`) VALUES
(20, 9, 10598, 2, '2021-06-06 23:49:27'),
(21, 9, 240098, 1, '2021-06-05 18:47:45'),
(22, 9, 239799, 2, '2021-06-05 19:31:55'),
(23, 9, 210998, 0, '2021-06-08 19:22:36'),
(24, 9, 210998, 0, '2021-06-08 19:23:51'),
(31, 9, 10598, 0, '2021-06-08 19:27:35'),
(32, 9, 234500, 2, '2021-06-11 10:43:12'),
(33, 9, 188298, 0, '2021-06-10 10:00:13'),
(34, 9, 397490, 1, '2021-06-11 10:38:14'),
(35, 14, 469000, 1, '2021-06-12 20:12:54'),
(36, 15, 55000, 1, '2021-06-13 18:45:27'),
(37, 9, 234500, 1, '2021-06-13 19:12:49'),
(38, 9, 0, 0, '2021-06-13 20:21:49'),
(39, 9, 77999, 0, '2021-06-16 21:43:00'),
(40, 9, 234500, 2, '2021-06-18 15:41:33'),
(41, 9, 137999, 0, '2021-07-07 14:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `price`, `quantity`, `date/time`) VALUES
(32, 20, 37, 5299, 2, '2021-06-05 18:46:59'),
(33, 21, 37, 5299, 2, '2021-06-05 18:47:45'),
(34, 21, 18, 234500, 1, '2021-06-05 18:47:46'),
(35, 22, 37, 5299, 1, '2021-06-05 18:50:37'),
(36, 22, 18, 234500, 1, '2021-06-05 18:50:38'),
(37, 24, 29, 77999, 1, '2021-06-08 19:23:51'),
(38, 24, 27, 137999, 1, '2021-06-08 19:23:52'),
(40, 31, 37, 5299, 2, '2021-06-08 19:27:35'),
(41, 32, 18, 234500, 1, '2021-06-09 15:46:41'),
(42, 33, 17, 55000, 2, '2021-06-10 10:00:13'),
(43, 33, 37, 5299, 1, '2021-06-10 10:00:13'),
(44, 33, 29, 77999, 1, '2021-06-10 10:00:13'),
(45, 34, 17, 55000, 2, '2021-06-11 10:38:14'),
(46, 34, 18, 234500, 1, '2021-06-11 10:38:14'),
(47, 34, 37, 5299, 10, '2021-06-11 10:38:14'),
(48, 35, 18, 234500, 2, '2021-06-12 20:12:54'),
(49, 36, 17, 55000, 1, '2021-06-13 18:45:27'),
(50, 37, 18, 234500, 1, '2021-06-13 19:12:49'),
(51, 39, 29, 77999, 1, '2021-06-16 21:43:00'),
(52, 40, 18, 234500, 1, '2021-06-18 15:39:55'),
(53, 41, 27, 137999, 1, '2021-07-07 14:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` int(20) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `transaction_id` int(30) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `customer_id`, `order_id`, `amount`, `payment_method`, `transaction_id`, `date/time`) VALUES
(19, 15, 36, 55000, 13, 4643653, '2021-06-13 19:08:13'),
(21, 9, 37, 234500, 12, 2341, '2021-06-13 19:13:09'),
(22, 9, 40, 234500, 9, 12341, '2021-06-18 15:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`payment_method_id`, `payment_method`, `date/time`) VALUES
(9, 'Bank Account', '2021-06-05 15:07:26'),
(11, 'Debit Card', '2021-06-05 15:08:04'),
(12, 'Credit Card', '2021-06-05 15:08:11'),
(13, 'Jazz Cash', '2021-06-05 15:08:19'),
(14, 'Easypaisa', '2021-06-05 15:08:24'),
(15, 'Omni Account', '2021-06-05 15:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `country` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `picture` varchar(60) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `country`, `city`, `contact`, `address`, `picture`, `date/time`) VALUES
(9, 'Danish', 'danish_ali@gmail.com', '909d04bb454d2fd8f73735a43c5fe516', 'Pakistan', 'Lahore', '03054344650', 'lhr pak', '1622558142_IMG_20190611_111045_141.jpg', '2021-06-07 20:43:58'),
(14, 'robot', 'robot@gmail.com', 'd1b3507fdc5a41c7bb82dc280939090d', 'Pak', 'lhr', '12341', 'lhjr pka', '1623160100_7156VgoIhdL._AC_SY450_.jpg', '2021-06-08 18:48:20'),
(15, 'Mobile', 'mobile@gmail.com', '4a4fa8319e618a543bae11e02f537b84', 'Pakistan', 'Lahore', '12341', 'lhr pak', '1623583604_5320.jpg', '2021-06-13 11:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(20) NOT NULL,
  `type` int(1) NOT NULL DEFAULT 1,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `quantity`, `type`, `date/time`) VALUES
(5, 18, 2, 1, '2021-06-02 18:40:02'),
(6, 29, 1, 1, '2021-06-10 10:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_country` varchar(20) NOT NULL,
  `user_picture` varchar(100) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_country`, `user_picture`, `date/time`) VALUES
(1, 'Danish Ali', 'danish_ali@gmail.com', '1234', 'Pakistan', '1622122657_PicsArt_06-04-06.25.57 - Copy.jpg', '2021-05-27 18:37:38'),
(4, 'Amir Majeed', 'amir12@gmail.com', '123', 'Pakistan', '1622122681_IMG_20190611_111045_141.jpg', '2021-05-27 18:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `product_id`, `customer_id`, `quantity`, `date/time`) VALUES
(5, 18, 9, 3, '2021-06-07 19:32:34'),
(7, 17, 9, 1, '2021-06-07 20:13:35'),
(10, 27, 9, 1, '2021-06-08 19:21:32'),
(17, 17, 9, 1, '2021-06-09 15:47:07'),
(18, 29, 9, 1, '2021-06-10 09:59:42'),
(19, 29, 15, 2, '2021-06-13 11:50:45'),
(20, 17, 15, 1, '2021-06-13 18:45:08'),
(21, 18, 9, 1, '2021-06-13 19:12:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `relation with customerr` (`customer_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `insert_box`
--
ALTER TABLE `insert_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insert_product`
--
ALTER TABLE `insert_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relation with manufacturer` (`manufacturer`),
  ADD KEY `relation with product category` (`product_category`);

--
-- Indexes for table `insert_product_category`
--
ALTER TABLE `insert_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insert_slide`
--
ALTER TABLE `insert_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `manufacturer_name`
--
ALTER TABLE `manufacturer_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `relation with customer` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `relation with order` (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `relation with order id` (`order_id`),
  ADD KEY `relation with customer idd` (`customer_id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `relation with product id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `relation with products` (`product_id`),
  ADD KEY `relation with customer id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `insert_box`
--
ALTER TABLE `insert_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `insert_product`
--
ALTER TABLE `insert_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `insert_product_category`
--
ALTER TABLE `insert_product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `insert_slide`
--
ALTER TABLE `insert_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manufacturer_name`
--
ALTER TABLE `manufacturer_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `relation with customerr` FOREIGN KEY (`customer_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `insert_product`
--
ALTER TABLE `insert_product`
  ADD CONSTRAINT `relation with manufacturer` FOREIGN KEY (`manufacturer`) REFERENCES `manufacturer_name` (`id`),
  ADD CONSTRAINT `relation with product category` FOREIGN KEY (`product_category`) REFERENCES `insert_product_category` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `relation with customer` FOREIGN KEY (`customer_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `relation with order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `relation with customer idd` FOREIGN KEY (`customer_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `relation with order id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE;

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `relation with product id` FOREIGN KEY (`product_id`) REFERENCES `insert_product` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `relation with customer id` FOREIGN KEY (`customer_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `relation with products` FOREIGN KEY (`product_id`) REFERENCES `insert_product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
