-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-12-14 07:57:34
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `team_yoga`
--

-- --------------------------------------------------------

--
-- 資料表結構 `custom_product`
--

CREATE TABLE `custom_product` (
  `sid` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `mat-total-price` int(11) NOT NULL,
  `mat-count` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `matw` int(11) NOT NULL,
  `mat-h` int(11) NOT NULL,
  `mat-thickness` varchar(255) NOT NULL,
  `mat-texture` varchar(255) NOT NULL,
  `pick_color` varchar(255) NOT NULL,
  `design_img` varchar(255) NOT NULL,
  `mat-print` varchar(255) NOT NULL,
  `save_data` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `custom_product`
--

INSERT INTO `custom_product` (`sid`, `member_id`, `mat-total-price`, `mat-count`, `weight`, `matw`, `mat-h`, `mat-thickness`, `mat-texture`, `pick_color`, `design_img`, `mat-print`, `save_data`, `created_at`) VALUES
(94, 1, 3600, 1, 340, 61, 173, '3.5', 'TPE', '#c18a8a', '338480688', '', 'save', '2020-12-14 14:49:42'),
(95, 1, 3600, 1, 340, 61, 173, '3.5', 'TPE', '#eedc68', '602131571', '', 'no', '2020-12-14 14:50:47');

-- --------------------------------------------------------

--
-- 資料表結構 `favorite`
--

CREATE TABLE `favorite` (
  `sid` int(11) NOT NULL,
  `member_id` varchar(10) NOT NULL,
  `product_sid` varchar(10) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `favorite`
--

INSERT INTO `favorite` (`sid`, `member_id`, `product_sid`, `created_at`) VALUES
(8, '1', '15', '2020-12-04'),
(9, '1', '32', '2020-12-04'),
(12, '1', '17', '2020-12-07'),
(14, '1', '13', '2020-12-10');

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `account` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `activated` int(11) DEFAULT 0,
  `nickname` varchar(255) DEFAULT NULL,
  `avatar` varchar(50) DEFAULT 'avatar00.jpg',
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `members`
--

INSERT INTO `members` (`id`, `account`, `email`, `password`, `mobile`, `city`, `address`, `birthday`, `activated`, `nickname`, `avatar`, `create_at`) VALUES
(1, 'butterfly159', 'butterfly.liaw@gmail.com', '666', '0987-090-999', '臺中市', '南屯區妤甄路100號-5樓', '2005-01-01', 0, 'Butterfly', 'avatar01.jpg', '2019-12-12 00:00:00'),
(2, 'chrome2416', 'chrome2416@yahoo.com.tw', '123', '0983-118-742', '臺北市', '大安區信義路三段123號', '2000-11-11', 0, 'Kelly', 'avatar02.jpg', '2019-12-13 00:00:00'),
(3, 'sally123', 'sally123@gmail.com', '123', '0912-345-678', '臺北市', '大安區信義路三段123號', '2000-02-17', 0, 'Sally', 'avatar03.jpg', '2020-11-24 00:00:00'),
(4, 'yujuwk357', 'yujuwk@gmail.com', '123', '0953-319-458', '臺北市', '汐止區水源路', '2000-02-18', 0, 'Ruan', 'avatar04.jpg', '2020-11-24 00:00:00'),
(5, 'taco123', 'taco123@gmail.com', '123', '0935-318-343', '臺北市', '文山區興隆路三段號', '2012-11-30', 0, 'taco', 'avatar05.jpg', '2020-11-25 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `my_coupon`
--

CREATE TABLE `my_coupon` (
  `sid` int(11) NOT NULL,
  `member_sid` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `my_coupon`
--

INSERT INTO `my_coupon` (`sid`, `member_sid`, `coupon_code`, `description`, `deadline`) VALUES
(1, '1', '36deg_welcome', '新用戶限定！滿千折百', '2020-12-31');

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `sid` int(11) NOT NULL,
  `member_sid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `logistic` varchar(255) DEFAULT NULL COMMENT '物流',
  `trans_fee` varchar(255) DEFAULT NULL COMMENT '運費',
  `payment` varchar(255) DEFAULT NULL COMMENT '付款方式',
  `deduction` varchar(255) DEFAULT NULL COMMENT '折抵金額',
  `buyer` varchar(255) DEFAULT NULL COMMENT '收件人',
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `points` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `logistic_status` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `orders`
--

INSERT INTO `orders` (`sid`, `member_sid`, `amount`, `order_date`, `logistic`, `trans_fee`, `payment`, `deduction`, `buyer`, `address`, `mobile`, `email`, `points`, `payment_status`, `logistic_status`, `order_status`) VALUES
(1, 1, 4080, '2020-08-05 18:00:03', '宅配', '60', '貨到付款', '100', '阿蝶', '台北市麗寶最高那一層', '0966666666', 'butterfly@gmail.com', '10', '已付款', '已經出貨', '已完成訂單'),
(2, 1, 11400, '2020-12-05 11:24:35', '宅配', '60', '貨到付款', '0', '阿蝶', '台北市麗寶最高那一層', '0966666666', 'butterfly@gmail.com', '10', '已付款', '已出貨', '已完成訂單'),
(3, 1, 9080, '2020-12-07 16:11:06', 'home', '60', 'credit', '100', 'butterfly159', '臺北市南屯區妤甄路100號-5樓', '0987-090-999', 'butterfly.liaw@gmail.com', '10', '已付款', '待出貨', '待出貨'),
(4, 1, 9080, '2020-12-07 16:11:22', 'home', '60', 'atm', '100', 'butterfly159', '臺北市南屯區妤甄路100號-5樓', '0987-090-999', 'butterfly.liaw@gmail.com', '10', '已付款', '待出貨', '待出貨'),
(5, 1, 5940, '2020-12-09 10:34:50', 'home', '60', 'credit', '0', 'butterfly159', 'null南屯區妤甄路100號-5樓', '0987-090-999', 'butterfly.liaw@gmail.com', '10', '已付款', '待出貨', '待出貨'),
(6, 1, 1500, '2020-12-09 10:35:59', '超商', '60', '信用卡', '0', 'butterfly159', 'null南屯區妤甄路100號-5樓', '0987-090-999', 'butterfly.liaw@gmail.com', '10', '已付款', '待出貨', '待出貨'),
(7, 1, 4370, '2020-12-10 16:19:34', '宅配', '60', '信用卡', '0', '<?= $m_row[\'account\'] ?>', 'null<?= $m_row[\'address\'] ?>', '<?= $m_row[\'mobile\'] ?>', '<?= $m_row[\'email\'] ?>', '10', '已付款', '待出貨', '待出貨'),
(8, 1, 2460, '2020-12-10 16:21:20', '宅配', '60', 'ATM', '0', 'butterfly159', '嘉義市南屯區妤甄路100號-5樓', '0987-090-999', 'butterfly.liaw@gmail.com', '10', '已付款', '待出貨', '待出貨');

-- --------------------------------------------------------

--
-- 資料表結構 `order_details`
--

CREATE TABLE `order_details` (
  `sid` int(11) NOT NULL,
  `order_sid` int(11) NOT NULL,
  `product_sid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `custom_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `order_details`
--

INSERT INTO `order_details` (`sid`, `order_sid`, `product_sid`, `quantity`, `custom_id`) VALUES
(1, 1, 1, 1, NULL),
(2, 1, 13, 1, NULL),
(3, 2, 25, 5, NULL),
(4, 5, 22, 1, NULL),
(5, 5, 3, 1, NULL),
(6, 5, 0, 0, NULL),
(7, 6, 13, 3, NULL),
(8, 7, 13, 1, NULL),
(9, 7, 34, 1, 88),
(10, 8, 13, 1, NULL),
(11, 8, 14, 4, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `sid` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `list_id` varchar(30) DEFAULT NULL,
  `product_num` varchar(10) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `on_sale` tinyint(11) DEFAULT 1,
  `quick_view_01` text DEFAULT NULL,
  `quick_view_02` text DEFAULT NULL,
  `quick_view_03` text DEFAULT NULL,
  `introduction` text DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `thickness` varchar(11) DEFAULT NULL,
  `weight` varchar(11) DEFAULT NULL,
  `img` text DEFAULT '\'[]\''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`sid`, `product_name`, `list_id`, `product_num`, `publish_date`, `price`, `on_sale`, `quick_view_01`, `quick_view_02`, `quick_view_03`, `introduction`, `color`, `length`, `width`, `thickness`, `weight`, `img`) VALUES
(1, '36 pro® 6mm', 'mat01-purple', 'm01-p-180', '2020-10-01', 3600, 0, '1. 全新結構，提供手腕與腳踝最佳緩衝及保護。', '2. 天然橡膠材質，乾濕止滑效果優異。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '超密寬敞的高性能瑜伽墊，具有無與倫比的舒適性和緩衝性。保證PRO®永不磨損。', '#3F5981', 180, 66, '0.6', '340', 'm01_0,m01_1,m01_2,m01_3'),
(2, '36 pro® 6mm', 'mat01-green', 'm02-g-180', '2020-10-02', 3600, 0, '1. 全新結構，提供手腕與腳踝最佳緩衝及保護。', '2. 天然橡膠材質，乾濕止滑效果優異。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '超密寬敞的高性能瑜伽墊，具有無與倫比的舒適性和緩衝性。保證PRO®永不磨損。', '#5F7874', 180, 66, '0.6', '340', 'm02_0,m02_1,m02_2,m02_3'),
(3, '36 pro® 6mm', 'mat01-dark_blue', 'm03-d-180', '2020-10-03', 3600, 0, '1. 全新結構，提供手腕與腳踝最佳緩衝及保護。', '2. 天然橡膠材質，乾濕止滑效果優異。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '超密寬敞的高性能瑜伽墊，具有無與倫比的舒適性和緩衝性。保證PRO®永不磨損。', '#B6A8C2', 180, 66, '0.6', '340', 'm03_0,m03_1,m03_2,m03_3'),
(4, '36 pro® 6mm', 'mat01-purple', 'm01-p-180', '2020-10-01', 3600, 0, '1. 全新結構，提供手腕與腳踝最佳緩衝及保護。', '2. 天然橡膠材質，乾濕止滑效果優異。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '超密寬敞的高性能瑜伽墊，具有無與倫比的舒適性和緩衝性。保證PRO®永不磨損。', '#3F5981', 215, 66, '0.6', '360', 'm01_0,m01_1,m01_2,m01_3'),
(5, '36 pro® 6mm', 'mat01-green', 'm02-g-180', '2020-10-02', 3600, 0, '1. 全新結構，提供手腕與腳踝最佳緩衝及保護。', '2. 天然橡膠材質，乾濕止滑效果優異。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '超密寬敞的高性能瑜伽墊，具有無與倫比的舒適性和緩衝性。保證PRO®永不磨損。', '#5F7874', 215, 66, '0.6', '360', 'm02_0,m02_1,m02_2,m02_3'),
(6, '36 pro® 6mm', 'mat01-dark_blue', 'm03-d-180', '2020-10-03', 3600, 0, '1. 全新結構，提供手腕與腳踝最佳緩衝及保護。', '2. 天然橡膠材質，乾濕止滑效果優異。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '超密寬敞的高性能瑜伽墊，具有無與倫比的舒適性和緩衝性。保證PRO®永不磨損。', '#B6A8C2', 215, 66, '0.6', '360', 'm03_0,m03_1,m03_2,m03_3'),
(7, '36 prolite®4.7mm', 'mat02-red', 'm04-r-180', '2010-10-04', 2760, 0, '1. 高密度墊層可在任何表面提供無與倫比的體驗，關節保護和多功能性。', '2. 織物狀的表面光潔度可在姿勢之間實現最佳移動。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '中型瑜伽墊，為您的練習帶來無與倫比的緩沖和舒適感。', '#DF212B', 180, 60, '0.47', '180', 'm04_0,m04_1,m04_2,m04_3'),
(8, '36 prolite®4.7mm', 'mat02-blue', 'm05-b-180', '2020-10-05', 2760, 0, '1. 高密度墊層可在任何表面提供無與倫比的體驗，關節保護和多功能性。', '2. 織物狀的表面光潔度可在姿勢之間實現最佳移動。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '中型瑜伽墊，為您的練習帶來無與倫比的緩沖和舒適感。', '#49589E', 180, 60, '0.47', '180', 'm05_0,m05_1,m05_2,m05_3'),
(9, '36 prolite®4.7mm', 'mat02-black_blue', 'm06-b-180', '2020-10-06', 2760, 0, '1. 高密度墊層可在任何表面提供無與倫比的體驗，關節保護和多功能性。', '2. 織物狀的表面光潔度可在姿勢之間實現最佳移動。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '中型瑜伽墊，為您的練習帶來無與倫比的緩沖和舒適感。', '#1F2024', 180, 60, '0.47', '180', 'm06_0,m06_1,m06_2,m06_3'),
(10, '36 prolite®4.7mm', 'mat02-red', 'm04-r-180', '2010-10-04', 2760, 0, '1. 高密度墊層可在任何表面提供無與倫比的體驗，關節保護和多功能性。', '2. 織物狀的表面光潔度可在姿勢之間實現最佳移動。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '中型瑜伽墊，為您的練習帶來無與倫比的緩沖和舒適感。', '#DF212B', 215, 60, '0.47', '200', 'm04_0,m04_1,m04_2,m04_3'),
(11, '36 prolite®4.7mm', 'mat02-blue', 'm05-b-180', '2020-10-05', 2760, 0, '1. 高密度墊層可在任何表面提供無與倫比的體驗，關節保護和多功能性。', '2. 織物狀的表面光潔度可在姿勢之間實現最佳移動。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '中型瑜伽墊，為您的練習帶來無與倫比的緩沖和舒適感。', '#49589E', 215, 60, '0.47', '200', 'm05_0,m05_1,m05_2,m05_3'),
(12, '36 prolite®4.7mm', 'mat02-black_blue', 'm06-b-180', '2020-10-06', 2760, 0, '1. 高密度墊層可在任何表面提供無與倫比的體驗，關節保護和多功能性。', '2. 織物狀的表面光潔度可在姿勢之間實現最佳移動。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '中型瑜伽墊，為您的練習帶來無與倫比的緩沖和舒適感。', '#1F2024', 215, 60, '0.47', '200', 'm06_0,m06_1,m06_2,m06_3'),
(13, '環保瑜珈磚', 'b01', 'b01-b-023', '2020-10-01', 480, 0, '1. 高密度墊層可在任何表面提供無與倫比的體驗，關節保護和多功能性。', '2. 織物狀的表面光潔度可在姿勢之間實現最佳移動。', '3. 表面特殊波紋壓痕處理，提升質感並增加磨擦阻力係數。', '第一款由超過50％的再生EVA組成，輕巧的瑜珈磚可提供無與倫比的舒適性和支撐。', '', 23, 15, '10', '400', 'b01_0,b01_1,b01_2,b01_3'),
(14, '環保瑜珈磚', 'b02', 'b02-g-023', '2020-10-01', 480, 0, '1. 半徑邊緣帶來舒適感和美感。', '2. 高密度，極高的耐用性，牢固的支撐。', '3. 柔軟舒適的抓地力且防滑。', '第一款由超過51％的再生EVA組成，輕巧的瑜珈磚可提供無與倫比的舒適性和支撐。', '', 23, 15, '10', '400', 'b02_0,b02_1,b02_2,b02_3'),
(15, '軟木瑜珈磚', 'b03', 'b03-b-022', '2020-09-02', 880, 0, '1. 輕便，重量小於市售常用粗粒軟木材質。', '2. 易於抓握的紋理表面。', '3. 舒適的輪廓邊緣。', '這款高品質瑜珈磚由可持續性的軟木塞製成，具堅固性且支撐效果極佳。', '', 23, 15, '10', '250', 'b03_0,b03_1,b03_2,b03_3'),
(16, '薄軟木瑜珈磚', 'b04', 'b04-b-007', '2020-09-03', 780, 0, '1. 圓潤流暢四邊圓角設計。', '2. 表面材質更容易持握，提供練習時的安全支撐。', '3. 軟木來自櫟樹的樹皮，為可再生材質。', '此款軟木磚比其他尺寸的瑜珈磚薄，但同樣具有支撐作用。較薄的寬度便於握持並易於旅行攜帶。', '', 8, 10, '22', '130', 'b04_0,b04_1,b04_2,b04_3'),
(17, '瑜珈支撐墊', 'p01', 'p01-b-033', '2020-10-01', 179, 0, '1. 觸感柔軟，溫柔呵護膝蓋和手腕，舒適練習。', '2. 有效分解關節壓力，體式保持更長久。', '3. 保護手腕手腕，減小手腕負重。', '20mm加厚柔軟，保護脆弱關節。優良回彈，有效緩衝瑜珈體式帶來的關節壓力。', '#616EBC', 34, 17, '1', '800', 'p01_0,p01_1,p01_2,p01_3'),
(18, '瑜珈支撐墊', 'p02', 'b02-b-033', '2020-10-02', 179, 0, '1. 觸感柔軟，溫柔呵護膝蓋和手腕，舒適練習。', '2. 有效分解關節壓力，體式保持更長久。', '3. 保護手腕手腕，減小手腕負重。', '20mm加厚柔軟，保護脆弱關節。優良回彈，有效緩衝瑜珈體式帶來的關節壓力。', '#343434', 34, 17, '1', '800', 'p02_0,p02_1,p02_2,p02_3'),
(19, 'Relex 顆粒按摩滾筒', 'rolle-pink', 'r01-p-045', '2020-09-07', 1288, 0, '1. 加厚發泡組織，舒適貼合各曲線幅度，適於調整與訓練。', '2. 於緊繃處做重點停留，放鬆疲憊累積的肌膜，軟化緊繃的肌肉線條。', '3. 建議搭配專業知識適度使用，請避免直接使用於身體關節交接處。', '無毒EVA材質，與肌膚接觸無負擔，高密度，高強度，不易變形，特殊紋路設計，按摩舒壓放鬆效果。', '#EEB195', 45, 0, '9', '140', 'r01_0,r01_1,r01_2,r01_3'),
(20, 'Relex 顆粒按摩滾筒', 'rolle-green', 'r02-g-045', '2020-09-07', 1288, 0, '1. 加厚發泡組織，舒適貼合各曲線幅度，適於調整與訓練。', '2. 於緊繃處做重點停留，放鬆疲憊累積的肌膜，軟化緊繃的肌肉線條。', '3. 建議搭配專業知識適度使用，請避免直接使用於身體關節交接處。', '無毒EVA材質，與肌膚接觸無負擔，高密度，高強度，不易變形，特殊紋路設計，按摩舒壓放鬆效果。', '#A7CDBD', 45, 0, '9', '140', 'r02_0,r02_1,r02_2,r02_3'),
(21, 'Relex 顆粒按摩滾筒', 'rolle-cream', 'r03-c-045', '2020-09-07', 1288, 0, '1. 加厚發泡組織，舒適貼合各曲線幅度，適於調整與訓練。', '2. 於緊繃處做重點停留，放鬆疲憊累積的肌膜，軟化緊繃的肌肉線條。', '3. 建議搭配專業知識適度使用，請避免直接使用於身體關節交接處。', '無毒EVA材質，與肌膚接觸無負擔，高密度，高強度，不易變形，特殊紋路設計，按摩舒壓放鬆效果。', '#E6D0B9', 45, 0, '9', '140', 'r03_0,r03_1,r03_2,r03_3'),
(22, '重量運動手環', 'sand-blue', 's01-b-027', '2020-10-11', 2280, 0, '1. 一磅的重量，為鍛煉增加穩定且舒適的阻力。', '2. 採用最優質的健身材料製成，有多種顏色可供選擇', '3. 揮別醜陋又不便的傳統負重沙包，啟動新式美麗運動能量。', '瘦身效果遠遠超越啞鈴、負重沙包的運動神器，直接配戴在手腕、腳踝上，不影響日常生活，也能隨時隨地消耗熱量。', '#4D93B4', 27, 7, '0', '100', 's01_0,s01_1,s01_2,s01_3'),
(23, '重量運動手環', 'sand-black', 's02-b-027', '2020-10-12', 2280, 0, '1. 一磅的重量，為鍛煉增加穩定且舒適的阻力。', '2. 採用最優質的健身材料製成，有多種顏色可供選擇', '3. 揮別醜陋又不便的傳統負重沙包，啟動新式美麗運動能量。', '瘦身效果遠遠超越啞鈴、負重沙包的運動神器，直接配戴在手腕、腳踝上，不影響日常生活，也能隨時隨地消耗熱量。', '#38393D', 27, 7, '0', '100', 's02_0,s02_1,s02_2,s02_3'),
(24, '重量運動手環', 'sand-white', 's03-w-027', '2020-10-13', 2280, 0, '1. 一磅的重量，為鍛煉增加穩定且舒適的阻力。', '2. 採用最優質的健身材料製成，有多種顏色可供選擇', '3. 揮別醜陋又不便的傳統負重沙包，啟動新式美麗運動能量。', '瘦身效果遠遠超越啞鈴、負重沙包的運動神器，直接配戴在手腕、腳踝上，不影響日常生活，也能隨時隨地消耗熱量。', '#F2F2F2', 27, 7, '0', '100', 's03_0,s03_1,s03_2,s03_3'),
(25, '重量運動手環', 'sand-green', 's04-g-027', '2020-10-14', 2280, 0, '1. 一磅的重量，為鍛煉增加穩定且舒適的阻力。', '2. 採用最優質的健身材料製成，有多種顏色可供選擇', '3. 揮別醜陋又不便的傳統負重沙包，啟動新式美麗運動能量。', '瘦身效果遠遠超越啞鈴、負重沙包的運動神器，直接配戴在手腕、腳踝上，不影響日常生活，也能隨時隨地消耗熱量。', '#C0DECE', 27, 7, '0', '100', 's04_0,s04_1,s04_2,s04_3'),
(26, 'Thunder伸展帶', 'a01', 'a01-b-244', '2020-10-11', 550, 0, '1. 經過改良的中桿設計可牢固地固定瑜珈繩', '2. 提供安全、防滑的支撐。', '3. 由堅固、耐用、未漂白的棉織帶與染料製做，輕巧又環保。', '瑜伽伸展帶有助於掌握挑戰性的姿勢和平衡技巧。致力於將最高水平的功能性，美觀性和質量。', '', 244, 4, '0', '200', 'a01_0,a01_1,a01_2,a01_3'),
(27, 'Thunder伸展帶', 'a02', 'a02-b-244', '2020-10-12', 550, 0, '1. 經過改良的中桿設計可牢固地固定瑜珈繩\n', '2. 提供安全、防滑的支撐。\n', '3. 由堅固、耐用、未漂白的棉織帶與染料製做，輕巧又環保。', '瑜伽伸展帶有助於掌握挑戰性的姿勢和平衡技巧。致力於將最高水平的功能性，美觀性和質量。', '', 244, 4, '0', '200', 'a02_0,a02_1,a02_2,a02_3'),
(28, 'Thunder伸展帶', 'a03', 'a03-p-244', '2020-10-13', 550, 0, '1. 經過改良的中桿設計可牢固地固定瑜珈繩\n', '2. 提供安全、防滑的支撐。\n', '3. 由堅固、耐用、未漂白的棉織帶與染料製做，輕巧又環保。', '瑜伽伸展帶有助於掌握挑戰性的姿勢和平衡技巧。致力於將最高水平的功能性，美觀性和質量。', '', 244, 4, '0', '200', 'a03_0,a03_1,a03_2,a03_3'),
(29, 'Thunder伸展帶', 'a04', 'a04-p-244', '2020-10-14', 550, 0, '1. 經過改良的中桿設計可牢固地固定瑜珈繩\n', '2. 提供安全、防滑的支撐。\n', '3. 由堅固、耐用、未漂白的棉織帶與染料製做，輕巧又環保。', '瑜伽伸展帶有助於掌握挑戰性的姿勢和平衡技巧。致力於將最高水平的功能性，美觀性和質量。', '', 244, 4, '0', '200', 'a04_0,a04_1,a04_2,a04_3'),
(30, '36 彈力帶', 'c01', 'c01--060', '2020-10-11', 664, 0, '1. 四種分級阻力搭配，由易至難，漸進式訓練。', '2. 獨創內裡菱格壓紋設計，高效防滑並增添3倍極限拉伸範圍。', '3. 環保、天然乳膠成分，讓手感柔軟，自然無味、彈力更強。', '100％天然乳膠彈力帶，可為您的鍛煉增加額外的挑戰。 所有套裝都放入網狀小袋中，便於存放。', '', 60, 5, '1', '100', 'c01_0,c01_1,c01_2,c01_3'),
(31, '36 彈力帶', 'c02', 'c02--060', '2020-10-12', 664, 0, '1. 四種分級阻力搭配，由易至難，漸進式訓練。', '2. 獨創內裡菱格壓紋設計，高效防滑並增添3倍極限拉伸範圍。', '3. 環保、天然乳膠成分，讓手感柔軟，自然無味、彈力更強。', '100％天然乳膠彈力帶，可為您的鍛煉增加額外的挑戰。 所有套裝都放入網狀小袋中，便於存放。', '', 60, 5, '1', '100', 'c02_0,c02_1,c02_2,c02_3'),
(32, '棉質舖巾', 'w01', 'w01--173', '2020-08-05', 1140, 0, '1. 採用高優質的超細纖維質料，親膚性佳且柔軟舒適。', '2. 專利Skidless®止滑技術，矽膠顆粒點服貼在瑜珈墊上，練習過程中不易滑動。', '3. 使用前可先噴上一些水氣，增加瑜珈鋪巾的止滑效果。', '瑜珈鋪巾適合熱瑜珈或是動態瑜珈使用，可直接平鋪在一般瑜珈墊上，在手腳濕潤情況下最能見到止滑效果。', '', 173, 61, '0', '120', 'w01_0,w01_1,w01_2,w01_3'),
(33, '環保羊毛舖巾', 'w02', 'w02--208', '2020-08-06', 1320, 0, '1. 75％的再生羊毛和25％的再生合成纖維。', '2. 鎖邊針跡，防止磨損。', '3. 密集編織具有抗拉伸性和超柔軟性，即使洗滌後仍能抵抗“起毛球”。', '由100％的再生纖維製成，可壓和折疊，提供溫暖，舒適和多功能性。', '', 208, 153, '0', '150', 'w02_0,w02_1,w02_2,w02_3'),
(34, '客製瑜珈墊', '', '', '2020-08-06', 3600, 0, '', '', '', '製作專屬於你的瑜珈墊！質感客製化刻字、圖片、顏色等。任你揮灑創意、創造獨一無二的專屬禮物。', '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `yoga_test`
--

CREATE TABLE `yoga_test` (
  `question_id` int(255) NOT NULL,
  `question` text NOT NULL,
  `ans` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `yoga_test`
--

INSERT INTO `yoga_test` (`question_id`, `question`, `ans`, `value`) VALUES
(1, '1.請問你的身高？', '170 cm 以下,170-180 cm,180 cm 以上', '180,180,215'),
(2, '2.請問你做瑜珈的目的？', '健身或瘦身,放鬆減壓,修復傷口,柔軟度,增強肌耐力,改善身體循環,調節呼吸', '達到最佳健身效果,得到最深層的放鬆,得到最深層的放鬆,有最深層的伸展,達到最佳健身效果,能夠穩定、改善循環,能夠抓穩節奏、調節呼吸'),
(3, '3.常做瑜珈的種類？', '哈達瑜珈,阿斯坦加瑜珈,和緩瑜珈,動瑜珈,陰瑜珈,熱瑜珈,修復瑜珈,其他,我還不知道', '做哈達瑜珈,做阿斯坦加瑜珈,做和緩瑜珈,做動瑜珈,做陰瑜珈,做熱瑜珈,做修復瑜珈,做各種瑜珈,做探索各式瑜珈'),
(4, '4.做瑜珈的地點？', '瑜珈教室,家裡,戶外,健身房', '1,2,3,4'),
(5, '5.你做瑜珈的頻率？', '第一次練習,1-2次/周,3-4次/周,幾乎每天', '5,6,7,8');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `custom_product`
--
ALTER TABLE `custom_product`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 資料表索引 `my_coupon`
--
ALTER TABLE `my_coupon`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `yoga_test`
--
ALTER TABLE `yoga_test`
  ADD PRIMARY KEY (`question_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `custom_product`
--
ALTER TABLE `custom_product`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `favorite`
--
ALTER TABLE `favorite`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `my_coupon`
--
ALTER TABLE `my_coupon`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_details`
--
ALTER TABLE `order_details`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
