-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 24, 2023 lúc 06:31 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datashoes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `CompID` int(30) NOT NULL,
  `CompName` varchar(50) NOT NULL,
  `CompAddress` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`CompID`, `CompName`, `CompAddress`, `Email`) VALUES
(1, 'Bitis', 'Quận 6 , Thành phố Hồ Chí Minh', 'bitis@com.vn'),
(2, 'Converse', 'Boston, Massachusetts, Hoa Kỳ', 'converse@com.vn'),
(3, 'Nike', 'Beaverton, Oregon, Hoa Kỳ', 'nike@com.vn'),
(4, 'Pettino', 'Quận 3, Thành phố Hồ Chí Minh', 'pettino@com.vn'),
(5, 'Vans', 'Costa Mesa, California, Hoa Kỳ', 'Vans@com.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ProdID` int(30) NOT NULL,
  `NamePr` varchar(50) NOT NULL,
  `ImagePr` varchar(50) NOT NULL,
  `PricePr` int(30) NOT NULL,
  `QuantitySold` int(40) DEFAULT NULL,
  `Company` int(30) NOT NULL,
  `Factory` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ProdID`, `NamePr`, `ImagePr`, `PricePr`, `QuantitySold`, `Company`, `Factory`) VALUES
(1, 'Giày Biti\'s HunterX2k20 Multi Layer Forest', 'DSMH02800DEN.png', 919000, 9400, 1, 'tpHCM'),
(6, 'Giày sneakers Converse Chuck Taylor All Star Class', '135253.png', 1000000, 32, 2, 'tpHCM'),
(7, 'Giày sneakers Converse Chuck Taylor All Star Logo ', '167173C.png', 1500000, 3, 2, 'tpHCM'),
(8, 'Giày sneakers Converse Chuck Taylor All Star 1970', '564970C.png', 2200000, 5300, 2, 'tpHCM'),
(9, 'Giày sneakers Converse Chuck Taylor All Star Glam', '565213C.png', 1400000, 792, 2, 'tpHCM'),
(10, ' Giày sneakers Converse Chuck Taylor All Star Love', '567311C.png', 1500000, 2700, 2, 'tpHCM'),
(11, 'Nike Air Force 1 \'07', 'CW2288.png', 2000000, 32, 3, 'tpHCM'),
(12, 'Nike Air Force 1 \'07', 'CZ0326.png', 2000000, 3, 3, 'tpHCM'),
(13, 'Nike Air Force 1 \'07', 'DH7561.png', 2300000, 5300, 3, 'tpHCM'),
(14, 'Nike Blazer Low \'77', 'DV7231.png', 2200000, 792, 3, 'tpHCM'),
(15, 'Nike Air Max SC SE', 'SCSE.png', 2200000, 2700, 3, 'tpHCM'),
(16, 'Giày thể thao sneaker (PHOM NHỎ) nam siêu nhẹ thời', 'PS03.png', 225000, 32, 4, 'tpHCM'),
(17, 'Giày thể thao sneaker nam PETTINO ', 'PZN01.png', 179000, 3, 4, 'tpHCM'),
(18, 'Giày nam thời trang thoáng khí PETTINO', 'PZS03.png', 139000, 5300, 4, 'tpHCM'),
(19, 'Giày cao cổ nam thời trang da cao cấp PETTINO', 'SC01.png', 259000, 792, 4, 'tpHCM'),
(20, 'Giày sneaker nam cổ cao cá tính chất đẹp PETTINO', 'TC01.png', 335000, 2700, 4, 'tpHCM'),
(21, 'Giày sneakers Vans UA Authentic Surf Kide', 'VN0A3MU6WOK.png', 1000000, 32, 5, 'tpHCM'),
(22, 'Giày Vans ComfyCush Slip-On', 'VN0A3WMDVNE.png', 1000000, 3, 5, 'tpHCM'),
(23, 'Giày sneakers Vans MN AVE Pro', 'VN0A4BT7LKZ.png', 3000000, 5300, 5, 'tpHCM'),
(24, 'Giày Vans UA SK8-Hi I Heart', 'VN0A4U3CWKU.png', 2000000, 792, 5, 'tpHCM'),
(25, 'Giày sneakers Vans UA Old Skool', 'VN0A7Q5YB9E.png', 2000000, 2700, 5, 'tpHCM'),
(26, 'Giày Biti\'s Hunter X 2k20 MultiLayer Ocean Blue', 'DSMH02800TRG.png', 910000, 2700, 1, 'tpHCM'),
(27, 'Biti\'s Hunter X Festive Frosty White', 'DSMH03500TRG.png', 910000, 5300, 1, 'tpHCM'),
(28, ' Biti\'s Hunter Street Vintage Black', 'DSMH04000DEN.png', 630000, 792, 1, 'tpHCM'),
(29, 'Giày Thể Thao Nam - Nữ Biti\'s Hunter Street Z', 'DSMH06200TRG.png', 799000, 2700, 1, 'tpHCM');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CompID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProdID`),
  ADD KEY `Company` (`Company`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `CompID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ProdID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `comp` FOREIGN KEY (`Company`) REFERENCES `company` (`CompID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
