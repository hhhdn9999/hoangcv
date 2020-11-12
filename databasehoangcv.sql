-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2020 at 02:05 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycv`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce_myself` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `helper_language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vitriungtuyen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hedieuhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tool` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `git` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zalo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `muctieu_nghenghiep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hocvan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kinhnghiem_lamviec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cac_du_an_canhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ky_nang_chuyen_mon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mot_so_thong_tin_khac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `introduce_myself`, `language`, `helper_language`, `vitriungtuyen`, `hedieuhanh`, `tool`, `git`, `facebook`, `blog`, `youtube`, `zalo`, `phone`, `address`, `muctieu_nghenghiep`, `hocvan`, `kinhnghiem_lamviec`, `cac_du_an_canhan`, `ky_nang_chuyen_mon`, `mot_so_thong_tin_khac`, `created_at`, `updated_at`) VALUES
(1, 'HUYNH HUY HOANG', 'huynhhuyhoang9999@gmail.com', NULL, '$2y$10$HMK5OrWEvb2vAK/rKJkVlOcx03QNbmQsyW4BT2Ykw9Yq0V1.YNbrq', NULL, NULL, NULL, NULL, 'https://lh3.googleusercontent.com/tgnlHRvBYNeVEDqFCaKCxD809G0mQ3O31Eu8dc0GnU78O4OPN76eMC_S-vGAThz80d1SGmNLyzXYOULT87CUGXQleivW9Ml-uReFKSlEbi_Iu9byE5k5MWrwjQBkfgErZOdYwwy1_N4IITnrId0WS2XQKGQz8vyeFXBpy3nlyujMDKl3dr0avZUCMixJgTnKm2VibmsBgL622kaj6tll5_H-tUGmEGWssYHfyRwI1ulcjzUhayxNBvaWuY4ffOy35Cr1mQlco-h9L1NEKJOWEZ5HzfEreS0gsGMeF9e4vNE1RAfa0XtFjyqAfcZ5c-7QwTicCBCvKs4_yqf6Ym6pkusxLKom241eYKYMfrJtcEyrStufc0qvWRGTHIGJ1hdrq0dXY246Qt1BqRyDgVcj9gH9FAupF86x3R96QneunUU9zFbqtwGyWd3yWjbrnwLVB8moXzyGa9PeBbYwXyd3MhsTxVKuVSeoHgFOEdbGyxshjCGbXzlTT-MoRFn2Uj0O1_wf1ga0RuLkaXXxGNJtcLWmzDPeKou8QQ6CQ6PvhyA2mdWHIK7DCMHeCNfdxyULWeAUrzJ3lny7kl4D81II9H5IiquQqnZ8Jf2ybrrOdwWeMcv-Gw0Xf04dJ0ctQ6lXW2E57cJkAiuhVeLQ6I5L6BNMthY7qCh8qzJYp19YTfJVDRmJc8PX7ZJBgbVr=w917-h949-no?authuser=0', 'I\'m Hoang , 22 tuổi, hiện tại đang sinh sống và làm việc tại Đà nẵng, nghề nghiệp là coder phát triển website', 'C++, PHP, Laravel   ', 'html, css, js, boostrap, jquery', 'Fersher', 'windown, ubuntu', 'git, visual code, phpstorm, sublime text,..', 'https://github.com/hhhdn9999', 'https://www.facebook.com/hhhdn9999/', 'https://www.facebook.com/hhhdn9999/', 'https://www.youtube.com/channel/UC12filbCJBjEn7hwyNXHGOg?view_as=subscriber', 'https://chat.zalo.me/', '+84 335 999 943', 'Hoa Vang - Da Nang', 'Mục tiêu của bản thân 1 – 3 năm tới là trở thành Full stack developer,  thành thạo được Laravel và Vuejs', 'Tốt nghiệp  Đại học Sư phạm Đà nẵng, bằng Trung bình, Điểm hệ 4 : 2.49đ', 'Đã thực tập lại Sun * bắt đầu vào tháng 13 - 07-2020 kết thúc 9 - 2020 với tên project Food and Drink . Vai trò trong project là coder, review code', 'http://hoangstore.herokuapp.com/     , Đây là project môn đồ án chuyên nghành với tên để tài là website cửa hàng bán đồ điện tử', 'Phát triển các sản phẩm website với ngôn ngữ PHP, framework Laravel, Mysql', '.................Tính tình : Khiêm tốn, thật thà, dũng cảm, không sợ gì hết, chỉ sợ rắn ................. Sở thích : thích nghe nhạc, xem phim ở rạp, đá bóng, thích xe phân khối lớn, dạo phố ban đêm, ngồi chém gió với bạn bè,..                      ', '2020-11-11 23:05:00', '2020-11-12 05:21:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
