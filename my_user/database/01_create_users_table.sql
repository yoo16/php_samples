-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: host.docker.internal
-- 生成日時: 2021 年 2 月 18 日 02:29
-- サーバのバージョン： 8.0.22
-- PHP のバージョン: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `my_shop`
--
CREATE DATABASE IF NOT EXISTS `my_shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `my_shop`;

-- --------------------------------------------------------

--
-- テーブルの構造 `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `amount` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- テーブルのデータのダンプ `items`
--

INSERT INTO `items` (`id`, `code`, `name`, `price`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'F00001', 'りんご', 150, NULL, '2020-12-13 05:58:25', '2020-12-13 05:58:25'),
(2, 'F00002', 'バナナ', 120, NULL, '2020-12-13 06:01:10', '2020-12-13 06:01:10'),
(3, 'F00003', 'もも', 350, NULL, '2020-12-13 06:15:45', '2020-12-13 06:15:45'),
(5, 'W0001', 'ミネラルウォーター', 100, NULL, '2020-12-13 13:26:14', '2020-12-13 13:26:14'),
(6, 'T00001', 'ストレートティー', 150, NULL, '2020-12-18 01:38:29', '2020-12-18 01:38:29');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(113, 'テスト6', 'test6@test.com', NULL, '$2y$10$ScLxOnXctLJfX4rVzgaj6u8SF0pWxEfUicujH/lBADz66jy5RqKVu', NULL, '2021-02-14 09:32:20', '2021-02-14 09:32:20'),
(114, 'test7', 'test7@test.com', NULL, '$2y$10$ZAU9n6AO/3AIhAyqlU.ct.XMIhXx9eJdXzdvkDZaAo9GE5POD62aC', NULL, '2021-02-14 09:41:30', '2021-02-14 09:41:30'),
(119, 'テスト', 'test1@test.com', NULL, '$2y$10$dws9YcPJd.Umx5pqL7pRgueJ3nJfSruMU1dHan4GCiYejEIxTezCC', NULL, '2021-02-14 12:18:14', '2021-02-14 12:18:14'),
(120, 'test', 'test@test.com', NULL, '$2y$10$oLt3Pph6SdFw1/Smav55O.ObSPJ.RG/i4b6tu5X9jcf0CCT9nE1RS', NULL, '2021-02-17 15:13:12', '2021-02-17 15:13:12');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_items`
--

DROP TABLE IF EXISTS `user_items`;
CREATE TABLE IF NOT EXISTS `user_items` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `item_id` bigint UNSIGNED NOT NULL,
  `amount` int NOT NULL,
  `total_price` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_items_item_id_fkey` (`item_id`),
  KEY `user_items_user_id_fkey` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `user_items`
--
ALTER TABLE `user_items`
  ADD CONSTRAINT `user_items_item_id_fkey` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_items_user_id_fkey` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
