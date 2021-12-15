-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 10:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frs`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Petrol'),
(2, 'Diesel'),
(3, 'Octane'),
(4, 'Natural gas'),
(5, 'Engine Oil'),
(6, 'Lubricant');

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `fuel_id` int(3) NOT NULL,
  `fuel_category_id` int(3) NOT NULL,
  `fuel_name` varchar(255) NOT NULL,
  `fuel_company` varchar(255) NOT NULL,
  `fuel_image` text NOT NULL,
  `fuel_details` varchar(1000) NOT NULL,
  `fuel_unit_price` varchar(255) NOT NULL,
  `fuel_tags` varchar(255) NOT NULL,
  `fuel_status` varchar(255) NOT NULL,
  `fuel_order_count` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`fuel_id`, `fuel_category_id`, `fuel_name`, `fuel_company`, `fuel_image`, `fuel_details`, `fuel_unit_price`, `fuel_tags`, `fuel_status`, `fuel_order_count`) VALUES
(1, 5, 'Castrol Engine Oil', 'Castrol', 'castrol.jpg', '<p>Lorem ipsum dolor sit, amet consectetur adipisicinSide Widget Well Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.Side Widget Well Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>', '550', 'Castrol,Engine Oil', 'published', '2'),
(2, 6, 'Total Lubricant', 'Total', 'total_lub.png', '<p>Total international group is the world&rsquo;s fith-ranked publicly-traded international oil company. More than 97.000 employees and over 130 nationalities are representing the workforce. Total Lubricants offers a wide range of products thanks to : its diversified market segments : automotive, industrial market, marine, association of multiple uses : engine oil, gear oil, coolant liquids, metal working, white oils, hydraulic &amp; brake fluids.</p>', '999', 'total,best, lubricant', 'published', '2'),
(14, 4, 'CNG', 'Eastern Refinery', 'cng.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus numquam tenetur assumenda a ea repellendus aut exercitationem aliquam impedit quisquam qui hic voluptates atque eius earum quae iusto debitis perferendis alias voluptas harum dolorum, magnam vero iste. Voluptas placeat vitae ut assumenda explicabo minima, quis ipsa quae eum illo eos eaque ipsam magnam dolore omnis deserunt? Vitae aut, necessitatibus, veniam autem, quam id officiis corrupti porro at libero laboriosam excepturi natus quibusdam non praesentium impedit ducimus? Repellat reprehenderit ipsa illo officia dolor delectus perferendis, voluptate autem reiciendis labore illum consectetur ipsam molestiae rerum sit? Recusandae labore ullam eveniet reprehenderit, voluptatem ut fuga iure aperiam optio, veritatis dolores. Cum, nihil. Mollitia tempora quia error fuga repudiandae harum perspiciatis illum impedit recusandae unde ratione, molestiae laboriosam placeat a eius nam. Excepturi, eum earum aut aliquid iusto id ', '85/ltr', 'Gas, Refinery ', 'published', '1'),
(15, 3, 'Pure Octane', 'Japan Oil Supplier', 'motoroil.jpg', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus numquam tenetur assumenda a ea repellendus aut exercitationem aliquam impedit quisquam qui hic voluptates atque eius earum quae iusto debitis perferendis alias voluptas harum dolorum, magnam vero iste. Voluptas placeat vitae ut assumenda explicabo minima, quis ipsa quae eum illo eos eaque ipsam magnam dolore omnis deserunt? Vitae aut, necessitatibus, veniam autem, quam id officiis corrupti porro at libero laboriosam excepturi natus quibusdam non praesentium impedit ducimus? Repellat reprehenderit ipsa illo officia dolor delectus perferendis, voluptate autem reiciendis labore illum consectetur ipsam molestiae rerum sit? Recusandae labore ullam eveniet reprehenderit, voluptatem ut fuga iure aperiam optio, veritatis dolores. Cum, nihil. Mollitia tempora quia error fuga repudiandae harum perspiciatis illum impedit recusandae unde ratione, molestiae laboriosam placeat a eius nam. Excepturi, eum earum aut aliquid iusto id', '110/ltr', 'Japan,Octane,Pure', 'draft', '1'),
(16, 2, 'Mobil Diesel OIl', 'Mobil', 'mobil.png', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore saepe nesciunt quaerat similique accusantium? Eaque suscipit error fugit quibusdam earum ducimus ullam, aperiam libero. Eius molestiae voluptate voluptas dolores corrupti modi assumenda soluta numquam? Dolor, dicta quam. Praesentium molestiae itaque impedit, distinctio, doloremque ea neque veritatis et consequatur iure id minus blanditiis harum beatae odit ad? Animi, iste autem provident vel quos odio quisquam exercitationem maxime magnam tempore officiis esse saepe amet eaque quidem expedita molestias ut? Molestiae, obcaecati ipsum eligendi libero eveniet quos omnis qui et soluta illo adipisci reiciendis autem, dolor voluptatem dolore consequatur maxime distinctio? Repellat ab sequi vel, numquam odio perferendis culpa ducimus voluptatibus pariatur unde voluptatum velit voluptates asperiores doloremque exercitationem recusandae dicta nesciunt. Ipsum accusantium voluptate vero, facilis voluptatum alias nemo et. Debitis,', '350', 'mobil,deisel', 'published', '1'),
(17, 5, 'Shell Engine Oil', 'Shell ', 'shell.png', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore saepe nesciunt quaerat similique accusantium? Eaque suscipit error fugit quibusdam earum ducimus ullam, aperiam libero. Eius molestiae voluptate voluptas dolores corrupti modi assumenda soluta numquam? Dolor, dicta quam. Praesentium molestiae itaque impedit, distinctio, doloremque ea neque veritatis et consequatur iure id minus blanditiis harum beatae odit ad? Animi, iste autem provident vel quos odio quisquam exercitationem maxime magnam tempore officiis esse saepe amet eaque quidem expedita molestias ut? Molestiae, obcaecati ipsum eligendi libero eveniet quos omnis qui et soluta illo adipisci reiciendis autem, dolor voluptatem dolore consequatur maxime distinctio? Repellat ab sequi vel, numquam odio perferendis culpa ducimus voluptatibus pariatur unde voluptatum velit voluptates asperiores doloremque exercitationem recusandae dicta nesciunt. ', '680', 'Shell,Engine Oil', 'published', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `msg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `name`, `email`, `message`, `msg_date`) VALUES
(1, 'Afrime Araf', 'afrimectg@gmail.com', 'Mercury is the closest planet to the Sun and the smallest one in the Solar System—it’s only a bit larger than the Moon\r\n', '2021-02-03'),
(3, 'jhon', 'jhon@demo.com', 'Venus has a beautiful name, but it’s ', '2021-02-03'),
(4, 'Kazi Afrime', 'kaahamed59@gmail.com', 'Despite being red, Mars is a cold place\r\n', '2021-02-03'),
(5, 'Alex Hales', 'alex.hales@yahoo.com', 'Hey, You Guys are awersome.', '2021-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(3) NOT NULL,
  `order_fuel_id` int(3) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `delivery_date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `card_number` int(16) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_fuel_id`, `customer_name`, `customer_email`, `quantity`, `order_status`, `delivery_date`, `address`, `card_name`, `card_number`, `exp_date`) VALUES
(1, 1, 'Afrime Araf', 'kaziafrime@yahoo.com', '100 litter', 'delivered', '2021-01-07', 'Ananda Bazar Halishahar Chitaagong', 'afrimearaf', 555555556, '2021-01-13'),
(2, 2, 'Zaltan Ibra', 'zaltan@gmail.com', '30 litter', 'delivered', '2021-02-02', 'Milan, Italy', 'Zaltan', 2147483647, '2022-06-30'),
(3, 1, 'Wanda Maximaoff', 'wanda@yahoo.com', '5 Gallon', 'undelivered', '2021-01-12', '10, Kawran Bazar,Dhaka', 'wandaavg', 750133988, '2021-05-10'),
(4, 15, 'Tom Odinson', 'tom@odinson.com', '50 litter', 'delivered', '2021-03-09', '15th street, LA', 'Tom ', 2147483647, '2022-05-07'),
(5, 14, 'Aladin', 'aladin@gmail.com', '200 litter', 'delivered', '2020-10-15', 'Delhi,India', 'Aladinmf', 156453243, '2021-09-03'),
(6, 2, 'Bruce Banner', 'hulk@hulk.com', '40 gallon', 'delivered', '2021-02-02', 'Mohrenstrasse, 3710117 Berlin', 'Bruce', 2147483647, '2021-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_role`, `user_image`) VALUES
(1, 'Afrime_Araf', 'Afrime  ', 'Araf  ', 'afrimearaf@outlook.com', '1234', 'Admin', 'Araf neww.jpg'),
(2, 'Jb', 'James ', 'Bond ', 'jamesbond@jb.com', '1111', 'Admin', 'jb.jfif'),
(7, 'araf', 'Kazi', 'Afrime', 'afrimectg@gmail.com', 'admin', 'Admin', 'Araf.jpg'),
(8, 'Richi', 'Richi', 'Barua', 'richi@barua.com', 'richi', 'Admin', 'richi.png'),
(10, 'eka', 'Sumona ', 'Afrin', 'eka@eka.com', 'eka', 'Admin', 'eka.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`fuel_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `fuel_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
