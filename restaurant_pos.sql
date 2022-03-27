-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2021 lúc 08:22 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `restaurant_pos`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `address` varchar(1024) DEFAULT '',
  `state` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `level`, `name`, `phoneNumber`, `email`, `address`, `state`) VALUES
(1, 'minhtoan', '1915564', 2, 'Trần Minh Toàn', '0981710152', 'tranminhtoan.149@gmail.com', 'Nhà khách ĐHQG, Đông Hòa, Dĩ An', 1),
(3, 'admin', 'admin', 1, 'Admin', '', '', '', 1),
(6, 'thayboingugat', '28012001', 2, 'Thắng', '', '', '', 1),
(7, 'tiendung', '123', 2, 'Dung', '', '', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auto_ma_dat_phong`
--

CREATE TABLE `auto_ma_dat_phong` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `auto_ma_dat_phong`
--

INSERT INTO `auto_ma_dat_phong` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Beverages'),
(2, 'Potato'),
(3, 'Chicken'),
(4, 'Burgers'),
(5, 'Salads');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(350) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calories` int(11) DEFAULT NULL,
  `image` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `item`
--

INSERT INTO `item` (`id`, `category_id`, `name`, `price`, `description`, `calories`, `image`) VALUES
(2, 1, 'Cocacola Bottle', 2, 'Milk, Sugar, Cream, Corn Syrup, Natural Flavor, Mono and Diglycerides, Cellulose Gum, Guar Gum, Carrageenan, Vitamin A Palmitate', 330, 'coca1.png'),
(3, 1, 'Cocacola', 2, 'Milk, Sugar, Cream, Corn Syrup, Natural Flavor, Mono and Diglycerides, Cellulose Gum, Guar Gum, Carrageenan, Vitamin A Palmitate', 330, 'coca2.png'),
(5, 1, 'Lemon Juice', 3, 'Water, Orange Pekoe and Pekoe Cut Black Tea., ice', 2, 'lemon.png'),
(8, 2, 'Potato Big', 2, 'Potato is an instant messaging tool focused on security. It is faster, safer, more open and completely free', 180, 'potato.png'),
(9, 2, 'Potato Small', 1, 'Potato is an instant messaging tool focused on security. It is faster, safer, more open and completely free', 140, 'potato3.png'),
(13, 3, 'Chicken McNuggets', 6, 'White Boneless Chicken, Water, Vegetable Oil (Canola Oil, Corn Oil, Soybean Oil, Hydrogenated Soybean Oil,..', 420, 'chicken (2).png'),
(14, 4, 'Big Mac Burger', 5, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 550, 'buger5.png'),
(19, 2, 'Potato slices', 1, 'Potato is an instant messaging tool focused on security. It is faster, safer, more open and completely free', 140, 'potato2.png'),
(20, 3, 'Combo Chicken', 4, 'White Boneless Chicken, Water, Vegetable Oil (Canola Oil, Corn Oil, Soybean Oil, Hydrogenated Soybean Oil,..', 350, 'chicken.png'),
(27, 4, 'Big Burger', 4, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 500, 'burger.png'),
(28, 4, 'Mac Burger', 6, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 330, 'burger1.png'),
(29, 4, 'Medium Mac Burger', 4, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 300, 'burger2.png'),
(38, 2, 'Mashed Potato', 2, 'Potato is an instant messaging tool focused on security. It is faster, safer, more open and completely free', 120, 'potato4.png'),
(51, 3, 'Chicken Small', 2, 'Chicken is an instant messaging tool focused on security. It is faster, safer, more open and completely free', 120, 'chicken2.png'),
(57, 3, 'Chicken Big Max', 25, 'The chicken (Gallus gallus domesticus) is a domesticated subspecies of the red junglefowl originally from Southeastern Asia. Rooster or cock is a term for an adult male bird, and younger male may be called a cockerel. A male that has been castrated is a capon. An adult female bird is called a hen and a sexually immature female is called a pullet.', 500, 'chicken4.png'),
(69, 5, 'Salat 1', 1, 'A food made primarily of a mixture of raw or cold ingredients, typically vegetables, usually served with a dressing such as vinegar or mayonnaise.  chicken salad', 50, 'salat1.png'),
(70, 5, 'Salat 2', 2, 'A food made primarily of a mixture of raw or cold ingredients, typically vegetables, usually served with a dressing such as vinegar or mayonnaise.  chicken salad', 50, 'salat2.png'),
(71, 1, 'Pepsi', 2, 'Carbonated Water, High Fructose Corn Syrup, Caramel Color, Sugar, Phosphoric Acid, Caffeine, Citric Acid', 330, 'pepsi1.png'),
(74, 5, 'Salat 3', 1, 'A food made primarily of a mixture of raw or cold ingredients, typically vegetables, usually served with a dressing such as vinegar or mayonnaise.  chicken salad', 50, 'salat3.png'),
(75, 5, 'Salat 4', 2, 'A food made primarily of a mixture of raw or cold ingredients, typically vegetables, usually served with a dressing such as vinegar or mayonnaise.  chicken salad', 60, 'salat4.png'),
(76, 1, 'Sprite', 2, 'Carbonated Water, High Fructose Corn Syrup, Caramel Color, Sugar, Phosphoric Acid, Caffeine, Citric Acid', 320, 'sprite2.png'),
(78, 3, 'Chicken Medium', 15, 'The chicken (Gallus gallus domesticus) is a domesticated subspecies of the red junglefowl originally from Southeastern Asia. Rooster or cock is a term for an adult male bird, and younger male may be called a cockerel. A male that has been castrated is a capon. An adult female bird is called a hen and a sexually immature female is called a pullet.', 350, 'chicken 8.png'),
(79, 1, 'Sprite Bottle', 2, 'Carbonated Water, High Fructose Corn Syrup, Caramel Color, Sugar, Phosphoric Acid, Caffeine, Citric Acid', 330, 'sprite1.png'),
(80, 1, 'Pepsi Bottle', 2, 'Carbonated Water, High Fructose Corn Syrup, Caramel Color, Sugar, Phosphoric Acid, Caffeine, Citric Acid', 320, 'pepsi2.png'),
(81, 1, 'Orange Juice', 3, 'Carbonated Water, High Fructose Corn Syrup, Caramel Color, Sugar, Phosphoric Acid, Caffeine, Citric Acid', 220, 'orange.png'),
(82, 3, 'Chicken Small Combo ', 12, 'The chicken (Gallus gallus domesticus) is a domesticated subspecies of the red junglefowl originally from Southeastern Asia. Rooster or cock is a term for an adult male bird, and younger male may be called a cockerel. A male that has been castrated is a capon. An adult female bird is called a hen and a sexually immature female is called a pullet.', 400, 'chicken 10.png'),
(83, 4, 'Combo Medium Burger', 6, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 550, 'burger4.png'),
(84, 4, 'Small Burger', 3, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 150, 'burger3.png'),
(85, 4, 'Small Burger 2', 3, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 120, 'burger6.png'),
(86, 4, 'Chicken Burger', 5, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 200, 'burger7.png'),
(88, 5, 'Salat 5', 2, 'A food made primarily of a mixture of raw or cold ingredients, typically vegetables, usually served with a dressing such as vinegar or mayonnaise.  chicken salad', 60, 'salat5 (2).png'),
(89, 5, 'Salat 6', 1, 'A food made primarily of a mixture of raw or cold ingredients, typically vegetables, usually served with a dressing such as vinegar or mayonnaise.  chicken salad', 40, 'salat5.png'),
(90, 5, 'Salat 7', 2, 'A food made primarily of a mixture of raw or cold ingredients, typically vegetables, usually served with a dressing such as vinegar or mayonnaise.  chicken salad', 65, 'salat7.png'),
(91, 5, 'Salat 8', 2, 'A food made primarily of a mixture of raw or cold ingredients, typically vegetables, usually served with a dressing such as vinegar or mayonnaise.  chicken salad', 80, 'salat8.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item_in_cart`
--

CREATE TABLE `item_in_cart` (
  `item_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `val` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `item_in_cart`
--

INSERT INTO `item_in_cart` (`item_id`, `name`, `image`, `total_price`, `val`, `username`) VALUES
(2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(5, 'Iced Tea', 'burger.png', 492, 4, 'toanem'),
(71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(5, 'Iced Tea', 'burger.png', 0, 0, 'toanem'),
(71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(5, 'Iced Tea', 'burger.png', 0, 0, 'toanem'),
(71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(5, 'Iced Tea', 'burger.png', 246, 2, 'user1'),
(3, 'Vanilla Shake', 'burger.png', 123, 1, 'user1'),
(71, 'Nothing', 'burger.png', 123, 1, 'user1'),
(2, 'Chocolate Shake', 'burger.png', 123, 1, 'user1'),
(2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(5, 'Iced Tea', 'burger.png', 0, 0, 'toanem'),
(71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(5, 'Iced Tea', 'burger.png', 0, 0, 'toanem'),
(71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(2, 'Chocolate Shake', 'burger.png', 369, 3, 'minhtoan149'),
(3, 'Vanilla Shake', 'burger.png', 492, 4, 'minhtoan149'),
(5, 'Iced Tea', 'burger.png', 246, 2, 'minhtoan149'),
(71, 'Nothing', 'burger.png', 246, 2, 'minhtoan149'),
(2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(5, 'Iced Tea', 'burger.png', 0, 0, 'toanem'),
(71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(2, 'Chocolate Shake', 'burger.png', 492, 4, 'minhtoan149'),
(3, 'Vanilla Shake', 'burger.png', 492, 4, 'minhtoan149'),
(5, 'Iced Tea', 'burger.png', 246, 2, 'minhtoan149'),
(71, 'Nothing', 'burger.png', 246, 2, 'minhtoan149'),
(71, 'Nothing', 'burger.png', 492, 4, 'thayboingugat'),
(71, 'Nothing', 'burger.png', 492, 4, 'thayboingugat'),
(71, 'Nothing', 'burger.png', 492, 4, 'thayboingugat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `orderID` varchar(255) NOT NULL,
  `orderDate` datetime DEFAULT NULL,
  `tableNumber` varchar(255) DEFAULT NULL,
  `totalPrice` int(11) DEFAULT NULL,
  `stateID` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`orderID`, `orderDate`, `tableNumber`, `totalPrice`, `stateID`, `username`) VALUES
('DH25112021000006', '2021-11-25 09:28:25', 123, 492, 3, ''),
('DH26112021000007', '2021-11-26 02:35:35', 20, 0, 3, ''),
('DH26112021000008', '2021-11-26 01:54:19', 123, 9, 3, 'minhtoan'),
('DH28112021000009', '2021-11-28 04:30:32', 123123, 7, 3, 'tiendung'),
('DH28112021000010', '2021-11-28 04:31:07', 123, 21, 3, 'tiendung'),
('DH28112021000011', '2021-11-28 04:31:20', 123, 18, 3, 'tiendung');

--
-- Bẫy `order`
--
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `state`
--

CREATE TABLE `state` (
  `stateID` int(11) NOT NULL,
  `stateName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `state`
--

INSERT INTO `state` (`stateID`, `stateName`) VALUES
(1, 'Waiting'),
(2, 'Confirmed'),
(3, 'Cancel');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `auto_ma_dat_phong`
--
ALTER TABLE `auto_ma_dat_phong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item` (`category_id`);

--
-- Chỉ mục cho bảng `item_in_cart`
--
ALTER TABLE `item_in_cart`
  ADD KEY `fk1_item_cart` (`item_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `fk_order` (`stateID`);

--
-- Chỉ mục cho bảng `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `auto_ma_dat_phong`
--
ALTER TABLE `auto_ma_dat_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_item` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `item_in_cart`
--
ALTER TABLE `item_in_cart`
  ADD CONSTRAINT `fk1_item_cart` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`stateID`) REFERENCES `state` (`stateID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;