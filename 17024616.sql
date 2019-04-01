-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2019 at 02:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `17024616`
--

-- --------------------------------------------------------

--
-- Table structure for table `imhontu_home`
--

CREATE TABLE `imhontu_home` (
  `id` int(2) NOT NULL,
  `content` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imhontu_home`
--

INSERT INTO `imhontu_home` (`id`, `content`, `description`, `created_at`) VALUES
(1, 'site description', ' <p>Imhontu is one of the UK\'s leading luxury retailers, specialising in contemporary men\'s and women\'s designer clothing & global brand collection of fitted ready to wear clothings for young, old, men, women and children.</p>\r\n<p>Imhontu exists for the love of fashion. We believe in empowering individuality. Our mission is to be the global technology platform for luxury fashion and tailor made clothings.</p>\r\n\r\n<p>To be able to shop on Imhontu you will need to register an account with us. To do this you will need an email address and a contact phone number. Setting up an account will also allow you to order without having to fill in your name and address details every time you shop and will also give additional benefits such as regular newsletters, you\'ll also be one of the first to know when we have special offers and discounts.</p>\r\n\r\n<p>To find a product you wish to buy you can search using the search facility of the page. Alternatively if you see a product of interest , you can use the product page. This will guide you to a product listing and when you click on a product this will take you to the product page. From the product page you can add the product to your cart. Once you have your items in your cart, you can then increase the quantity by entering the desired amount in the Quantity field. You can then proceed to checkout, choosing your preferred delivery options and make payments thereafter.</p>\r\n\r\n<p>The payment pages used at Imhontu are secure and you can safely enter your card details to pay for your order. We accept the following methods of payment: Mastercard, VISA, VISA Debit, VISA Electron, Maestro, PayPal and Gift Cards.</p>\r\n\r\n<p>Please select the desired payment option and proceed to the next page where you will enter the card details. Based on the type of card you are using for payment, you may then be asked to enter further details to enhance the security of the transaction. This request of information comes direct from your card issuer and relates to a password that identifies you as the authorised user of the card. If you do not have a password set up you can do so online during the transaction.</p>\r\n\r\n<p>All credit and debit card holders are subject to validation and authorisation by both us and the card issuer, to maintain security and prevent fraud. Internet Fraud is Illegal and perpetrators will be prosecuted in all cases.</p>\r\n\r\n<p>We view the security of our customer\'s data as paramount. Any personal data you provide to us and from which you can be identified is stored securely and confidentially and is processed in accordance with applicable legislation and this privacy policy, which sets out what personal data we collect about you when you interact with us and how we use your data.</p>\r\n\r\n<p>We take appropriate technical and organisational measures to protect against unauthorised or unlawful processing of your personal data, including encrypting your information to applicable industry standards.</p>', '2019-02-23 20:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `imhontu_order`
--

CREATE TABLE `imhontu_order` (
  `order_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `qty` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imhontu_product`
--

CREATE TABLE `imhontu_product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` int(10) NOT NULL,
  `images` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imhontu_product`
--

INSERT INTO `imhontu_product` (`product_id`, `name`, `description`, `price`, `images`, `created_at`) VALUES
(1, 'Vspace Top', 'Sexy vspace carton color for women. The blouse have been designed and made with the most care possible. It is treated with upmost care into production. The item is 100% pure cotton and it will stretch according to your body size.', 150, 'img/shop/product1.jpg', '2019-02-23 21:03:10'),
(2, 'Lakeside Top', 'This grey sweat shirt have been designed and made with the most care possible. It is treated with upmost care into production. The item is 100% pure cotton and it will stretch according to your body size.\r\n<br>\r\nThe sweat shirt is the best you can find on the market and it comes in different sizes and color. This is a limited edition', 200, 'img/shop/product2.jpg', '2019-02-23 21:03:15'),
(3, 'Camo Polo', 'This camo polo have been designed and made with the most care possible. It is treated with upmost care into production. The item is 100% pure cotton and it will stretch according to your body size.\r\n<br>\r\nThis polo is the best you can find on the market and it comes in different sizes and color. This is a limited edition', 200, 'img/shop/product6f.jpg', '2019-02-23 21:27:32'),
(4, 'Kamze Blouse', 'Crafted with long sleeves and a crew neckline, this piece features ribbed trims and is finished with the brands signature, suitable for any weather.', 190, 'img/shop/product4.jpg', '2019-02-23 20:48:05'),
(5, 'Clar Sweatshirt', 'Update your casual wear with this  sweatshirt. Crafted with long sleeves, this piece features ribbed trims and a crew neckline embellished with the finest of cotton. Finished with a branded tag to the seam and on a tonal print to the reverse, this piece is not one to be missed.', 230, 'img/shop/product5.jpg', '2019-02-23 21:33:14'),
(6, 'Stone Sweatshirt', 'Crafted with long sleeves and a crew neckline, this piece features ribbed trims and is finished with the brands signature, suitable for any weather.', 195, 'img/shop/product7.jpg', '2019-02-23 21:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `imhontu_user`
--

CREATE TABLE `imhontu_user` (
  `user_id` int(3) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imhontu_home`
--
ALTER TABLE `imhontu_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imhontu_order`
--
ALTER TABLE `imhontu_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `imhontu_product`
--
ALTER TABLE `imhontu_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `imhontu_user`
--
ALTER TABLE `imhontu_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imhontu_home`
--
ALTER TABLE `imhontu_home`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imhontu_order`
--
ALTER TABLE `imhontu_order`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imhontu_product`
--
ALTER TABLE `imhontu_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `imhontu_user`
--
ALTER TABLE `imhontu_user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imhontu_order`
--
ALTER TABLE `imhontu_order`
  ADD CONSTRAINT `imhontu_order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `imhontu_product` (`product_id`),
  ADD CONSTRAINT `imhontu_order_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `imhontu_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
