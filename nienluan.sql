-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 02:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nienluan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'Khánh Nguyễn', 'khanhb1909929@student.ctu.edu.vn', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, 'KhanhB1909929', 'khanhb1909929@student.ctu.edu.vn', 'khanhb1909929', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(10, 'Laptop'),
(11, 'Macbook'),
(14, 'Phụ kiện'),
(18, 'Máy tính bàn');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `userId`, `quantity`, `price`, `date_order`, `status`) VALUES
(24, 11, 'Bộ máy tính để bàn Dell Optiplex core i7, Ram 8GB, ổ cứng SSD 120GB, HDD 500GB, Màn hình DELL Dell 22 inch.Bảo hành 12T', 2, '1', '14990000', '2022-05-14 11:16:29', 1),
(25, 7, 'Laptop Asus UX331UAL EG021TS i5-8250, 8Gb Ram, SSD 512GB, intel HD Graphics, Win 10, 13.3 inch FHD', 2, '1', '17150000', '2022-05-14 11:21:01', 1),
(26, 9, 'Dây Nguồn có Jack DC 5.5*2.1mm', 2, '1', '230000', '2022-05-14 11:32:15', 1),
(27, 7, 'Laptop Asus UX331UAL EG021TS i5-8250, 8Gb Ram, SSD 512GB, intel HD Graphics, Win 10, 13.3 inch FHD', 2, '1', '17150000', '2022-05-14 11:50:42', 1),
(28, 8, 'Laptop Asus VivoBook A412FA i3-10110U/ 4Gb Ram/ 512Gb SSD/ Intel HD Graphics/ 14.0 inch FHD/ win10                       ', 2, '3', '59970000', '2022-05-14 11:50:42', 1),
(29, 6, 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', 2, '1', '30990000', '2022-05-14 11:56:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` tinytext NOT NULL,
  `catId` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `productDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `image`, `price`, `quantity`, `productDesc`) VALUES
(6, 'Laptop Acer Nitro 5 AN515-45-R0B6 GeForce® RTX3060 6GB R7-5800H 8G 512G 144Hz W10          ', 10, '4041d9b4fd.jpg', '30990000', 10, 'Khong co mo ta'),
(7, 'Laptop Asus UX331UAL EG021TS i5-8250, 8Gb Ram, SSD 512GB, intel HD Graphics, Win 10, 13.3 inch FHD', 10, '3a8a534530.jpg', '17150000', 5, 'Laptop Asus'),
(8, 'Laptop Asus VivoBook A412FA i3-10110U/ 4Gb Ram/ 512Gb SSD/ Intel HD Graphics/ 14.0 inch FHD/ win10                       ', 10, '214748f0ab.jpg', '19990000', 12, 'Không'),
(9, 'Dây Nguồn có Jack DC 5.5*2.1mm', 14, 'dda636e82d.jpg', '230000', 8, 'pk'),
(10, 'Macbook Pro 2014 13inch core i5 ram 16Gb SSD 128Gb', 11, '3cddf769b3.jpg', '22990000', 9, 'mb'),
(11, 'Bộ máy tính để bàn Dell Optiplex core i7, Ram 8GB, ổ cứng SSD 120GB, HDD 500GB, Màn hình DELL Dell 22 inch.Bảo hành 12T', 18, '2135ec5bef.jpg', '14990000', 16, 'pc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userId` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sex` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `tinh` varchar(255) NOT NULL,
  `quan` varchar(255) NOT NULL,
  `phuong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `fullName`, `Email`, `password`, `phone`, `sex`, `diachi`, `tinh`, `quan`, `phuong`) VALUES
(1, '', 'me@example.com', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '', '', '', ''),
(2, 'Nguyen Minh Khanh123', 'khanhnguyn123456@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '0784432140', 0, '46/14, KV5', 'Can Tho', 'Binh Thuy', 'Binh Thuy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
