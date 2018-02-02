-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 02, 2018 lúc 04:43 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `templatemanager`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'https://dantricdn.com/2018/u23-vietnam-u23-qatar-1516750413019.jpg', NULL, NULL),
(2, 'http://f.imgs.vietnamnet.vn/2018/01/23/18/truyen-thong-thai-lan-choang-vang-khi-u23-viet-nam-vao-chung-ket.jpg', NULL, NULL),
(3, 'https://dantricdn.com/zoom/327_245/2018/1/29/park-hang-seo5-1517195319097266989536.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `templates`
--

CREATE TABLE `templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `config` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci,
  `id_Image` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `template` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `templates`
--

INSERT INTO `templates` (`id`, `user_id`, `name`, `config`, `data`, `id_Image`, `created_at`, `updated_at`, `active`, `template`) VALUES
(70, 2, 'template', NULL, '{title:\"Tiêu Dề\", imageLink:\"https://dantricdn.com/thumb_w/640/2018/1/25/my-2-1516854889922987037089.jpg\",imageUrl:\"https://dantricdn.com/thumb_w/640/2018/1/25/my-2-1516854889922987037089.jpg\",}', 1, '2018-01-25 07:17:57', '2018-01-25 07:17:57', 1, '<div style=\"border: 1px solid rgb(205, 205, 205); width: 300px;\"><medium style=\"color:#000000;font-size:30px;background-color:#ff8000;padding:5px 5px 5px 10px;\" name=\"title\" v-model=\"title\" v-validate=\"{required:false,max:40}\"></medium> <a :href=\"imageLink\" target=\"_blank\"><img :src=\"imageUrl\" style=\"width:300px;height:306px;\"></a></div>'),
(71, 2, 'test', NULL, '{imageLink:\"https://dantricdn.com/thumb_w/640/2018/1/25/my-4-1516854904254561931518.jpg\",imageUrl:\"https://dantricdn.com/thumb_w/640/2018/1/25/my-4-1516854904254561931518.jpg\", title:\"Title Demo\",}', 2, '2018-01-25 07:34:10', '2018-01-25 07:34:10', 1, '<div style=\"border: 1px solid rgb(205, 205, 205); width: 500px;\"><a :href=\"imageLink\" target=\"_blank\"><img :src=\"imageUrl\" style=\"width:150px;height:150px;\"></a> <medium style=\"color:#000000;font-size:28px;background-color:#00ff00;padding:5px 5px 5px 10px;\" name=\"title\" v-model=\"title\" v-validate=\"{required:false,max:40}\"></medium></div>'),
(72, 2, 'gjhjjhj', NULL, '{imageLink:\"https://dantricdn.com/zoom/327_245/2018/1/29/park-hang-seo5-1517195319097266989536.jpg\",imageUrl:\"https://dantricdn.com/zoom/327_245/2018/1/29/park-hang-seo5-1517195319097266989536.jpg\",}', 3, '2018-01-29 04:53:23', '2018-01-29 04:53:23', 1, '<div style=\"border: 1px solid rgb(205, 205, 205); width: 350px;\"><a :href=\"imageLink\" target=\"_blank\"><img :src=\"imageUrl\" style=\"width:300px;height:308px;\"></a></div>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `role`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'kenlyzin', 'minhngocvu1612@gmail.com', '$2y$10$d/52UR7go0b9Lwe4xhbS0OWDsscn3FQ.3g/gQKZxNc6YGk9HwYSuG', 1, NULL, 1, 'ksJqicKKdm1JQv9CKSq5FyiEUHwHqSgSsKq6EeAk5hQbl8MkmboVi6F9qTok', '2017-12-27 07:57:32', '2018-02-01 01:21:55'),
(5, 'admin', 'admin@gmail.com', '$2y$10$XH3q25bCUPu58OVbDuwgGu9t5JJF66HYsvdmpm/8oi/e3JhdCYc9m', 1, NULL, 1, NULL, '2018-02-01 00:58:08', '2018-02-01 01:22:11');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_templates_userId_idx` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `templates`
--
ALTER TABLE `templates`
  ADD CONSTRAINT `fk_templates_userId` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
