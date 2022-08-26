-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `lincan`
--

-- --------------------------------------------------------

--
-- 資料表結構 `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL COMMENT '使用者訊息流水號',
  `cname` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '使用者中文姓名',
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '使用者電話',
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '使用者email',
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT '使用者地址',
  `message` text COLLATE utf8_unicode_ci NOT NULL COMMENT '使用者訊息',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '訊息日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `feedback`
--

INSERT INTO `feedback` (`id`, `cname`, `tel`, `email`, `address`, `message`, `create_date`) VALUES
(1, '明明', '09222222', 'test@gmail.com', '工業一路100號', 'test測試', '2022-08-24 10:29:05'),
(6, '李小明', '0912345678', 'test1@gmail.com', '工業一路100號', 'test測試', '2022-08-24 13:14:13'),
(7, '李小明', '0913245678', 'test1@gmail.com', '工業一路100號', 'test', '2022-08-24 13:21:38'),
(8, '李小明', '0913245678', 'test1@gmail.com', '工業一路100號', 'test', '2022-08-24 13:30:30'),
(9, '李小明', '0913245678', 'test1@gmail.com', '工業一路100號', 'test', '2022-08-24 14:14:48'),
(10, '李小明', '0912345678', 'test1@gmail.com', '工業一路100號', 'test123', '2022-08-26 03:26:32');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '使用者訊息流水號', AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
