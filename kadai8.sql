-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-06 03:16:05
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai8`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `review_tb`
--

CREATE TABLE `review_tb` (
  `id` int(16) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `eva` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `bool` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `review_tb`
--

INSERT INTO `review_tb` (`id`, `user_id`, `eva`, `comment`, `date`, `bool`) VALUES
(1, '', 0, '', '2022-12-29 04:09:00', 0),
(4, '', 0, '', '2022-12-29 04:34:22', 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `review_tb`
--
ALTER TABLE `review_tb`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `review_tb`
--
ALTER TABLE `review_tb`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
