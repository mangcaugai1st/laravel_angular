-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2024 at 09:05 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamerashop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Máy ảnh', 'nikon-camera-green-background.jpg', NULL, NULL),
(2, 'Ống kính', 'kit-lens-landscape-799924072dd4b54a90c774d5aa2c21e5-zybravgx2q47.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_03_24_105754_create_categories_table', 1),
(3, '2024_03_24_110449_create_products_table', 1),
(4, '2024_03_24_113746_sua_table_product', 1),
(5, '2024_03_24_114254_sua_table_product_lan2', 1),
(6, '2024_03_24_115458_sua_table_product_lan3', 1),
(7, '2024_03_24_120044_sua_table_product_lan4', 1),
(8, '2024_03_24_161051_xoahetbang', 2),
(9, '2024_03_24_161519_create_categories_table', 3),
(10, '2024_03_24_161752_create_products_table', 4),
(11, '2024_03_24_163204_sua_table_products', 5),
(12, '2024_03_27_155857_add_timestamp_for_products_table', 6),
(13, '2024_04_01_072219_create_users_table', 7),
(14, '2024_04_01_111550_edit_users_table1', 8),
(15, '2024_04_03_093640_add_timestamps_for_categories_table', 9),
(16, '2024_04_07_081502_add_description_for_product_table', 10),
(17, '2024_04_07_144720_modify_description_type_for_product_table', 11),
(18, '2024_04_09_040717_update_users_table', 12),
(19, '2024_04_09_042344_rename_some_fields_of_users_table', 13),
(20, '2024_04_10_025552_remove_some_columns_in_users_table', 14),
(21, '2024_04_10_033746_add_role_for_users_table', 15),
(22, '2024_04_10_053803_create_users_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_image`, `category_id`, `created_at`, `updated_at`, `product_description`) VALUES
(1, 'Nikon D3100', 3100000, 'nikon-d3100-2.png', 1, NULL, '2024-04-07 09:04:24', '<h2>D3100 có ngoại hình rất giống với người tiền nhiệm của nó là D3000. D3100 được xây dựng xung quanh cảm biến CMOS 14.2 megapixel, có chức năng xem trực tiếp (live view), quay được video Full HD.&nbsp;<br><br>So với D3000, thân máy được làm mới nhẹ hơn, có thêm nhiều nút thao tác rất tiện lợi. Hệ thống AF 11 điểm mới. Rất ít người phàn nàn về chất lượng hình ảnh ở chiếc máy D3100 này, hiệu suất ở ISO cao cũng đã được cải thiện đáng kể. Đây là một trong những máy ảnh tốt nhất ở dòng máy DSLR cấp phổ thông, mang lại chất lượng hình ảnh tốt cùng với thao tác nhanh và xử lý đơn giản.</h2><figure class=\"table\"><table><tbody><tr><td>Ngày ra mắt</td><td>19-tháng 08-2010</td></tr><tr><td colspan=\"2\"><strong>Thông tin cơ bản</strong></td></tr><tr><td>Kiểu máy</td><td>DSLR</td></tr><tr><td colspan=\"2\"><strong>Cảm biến</strong></td></tr><tr><td>Độ phân giải tối đa</td><td>4608 x 3072</td></tr><tr><td>Độ phân giải tùy chọn</td><td>3456 x 2304, 2304 x 1536</td></tr><tr><td>Tỉ lệ khung hình</td><td>3:2</td></tr><tr><td>Điểm ảnh hiệu quả</td><td>14 megapixels</td></tr><tr><td>Điểm ảnh tổng</td><td>15 megapixels</td></tr><tr><td>Kích thước cảm biến</td><td>APS-C (23.1 x 15.4 mm)</td></tr><tr><td>Loại cảm biến</td><td>CMOS</td></tr><tr><td>Chip xử lý hình ảnh</td><td>Expeed 2</td></tr></tbody></table></figure><p>&nbsp;</p><p>&nbsp;</p>'),
(2, 'Nikon AF-S DX Nikkor 35mm F1.8G', 4500000, 'afs-dx-nikkor-35mm-f18g-600x600.webp', 2, NULL, '2024-04-07 09:23:35', '<p><strong>Nikon AF-S DX NIKKOR 35mm f/1.8G</strong></p><p><strong>Nikon AF-S DX NIKKOR 35mm f / 1.8G </strong>được thiết kế để sử dụng với máy ảnh định dạng DX và cung cấp chiều dài tiêu cự tương đương 52.5mm.&nbsp;Với khẩu độ tối đa f / 1.8, ống kính này rất hữu ích trong điều kiện ánh sáng yếu và nó có một yếu tố aspherical để giúp kiểm soát biến dạng và quang sai.&nbsp;Ngoài ra, nó sử dụng lớp phủ&nbsp;Nikon’s Super Integrated để giảm thiểu tối đa flare và ghosting ảnh.</p>'),
(3, 'Nikon AF-S Nikkor 24-120mm F4G ED VR', 14500000, 'afs-nikkor-24120mm-f4g-ed-vr-hang-nhap-khau1-1-600x600.webp', 2, NULL, NULL, ''),
(4, 'Canon EOS R50 Kit RF-S18-45mm F4.5-6.3', 17000000, 'may-anh-canon-eos-r50-kit-rfs18-45mm-f45-63-is-stm-600x600.webp', 1, NULL, '2024-04-07 09:09:23', '<h2><strong>Thông tin nổi bật</strong></h2><ul><li>Bộ xử lý hình ảnh DIGIC X</li><li>Cảm biến APS-C CMOS 24.2MP</li><li>Chế độ quay phim dọc</li><li><p>Dual Pixel CMOS AF II với 651 zones</p><p>&nbsp;</p><p>Canon EOS R50 là mẫu&nbsp;máy ảnh mirrorless nhỏ gọn&nbsp;được trang bị cảm biến APS-C CMOS 24.2MP, khả năng quay phim dọc ấn tượng, cùng bộ xử lý hình ảnh DIGIC X mang lại những thước phim UHD 4K30p sống động trong mọi điều kiện quay chụp. Không chỉ vậy, camera còn sở hữu kính ngắm điện tử 2.36 triệu điểm, màn hình cảm ứng LCD đa góc 3 inch mang lại góc nhìn chuẩn cho&nbsp;những shoot ảnh.</p></li></ul>'),
(5, 'Fujifilm X-S20 Body', 31000000, 'may-anh-fujifilm-x-s20-600x600.webp', 1, NULL, '2024-04-07 09:12:23', '<h2><strong>Thiết kế Fujifilm X-S20 gọn nhẹ</strong></h2><p>Fujifilm X-S20 sở hữu thiết kế đặc trưng của dòng XS với báng cầm lớn mang lại cảm giác cầm nắm dễ dàng. Trọng lượng máy ảnh chỉ 491, người dùng dễ dàng bỏ chiếc camera vào balo và mang theo trong những chuyến đi của mình.</p><h2><strong>Cảm biến 26.1MP APS-C X-Trans BSI CMOS 4</strong></h2><p>Máy ảnh Fujifilm X-S20 sử dụng cảm biến X-Trans CMOS 4 có thiết kế đèn chiếu sáng sau. Với độ phân giải 26.1 MP, chiếc XS20 này có thể ghi lại những hình ảnh đáng nhớ trong chuyến phiêu lưu, cũng như những khoảnh khắc hàng ngày của bạn một cách sắc nét, sống động thông qua một loạt các bộ lọc độc đáo.</p><h2><strong>Bộ xử lý hình ảnh X-Processor 5</strong></h2><p>Fujifilm X-S20 được trang bị bộ xử lý hình ảnh X-Processor 5 có hiệu suất hoạt động cao, tốc độ xử lý hình ảnh nhanh gấp đôi X-Processor 4 trang bị trên chiếc Fujifim X-S10 trước đây.&nbsp;</p><p>Bộ xử lý hình ảnh X-Processor 5 kết hợp cảm biến 26.1MP APS-C X-Trans BSI CMOS 4 &nbsp;giúp X-S20 xử lý hình ảnh và video một cách nhanh chóng, cải thiện tốc độ và độ chính xác trong quá trình lấy nét tự động, mang lại những hình ảnh chất lượng với độ sắc nét cao.</p><h2><strong>Quay video 6.2K/30p 4:2:2 10-bit&nbsp;</strong></h2><p>Fujifilm X-S20 có hiệu suất video tiên tiến với sự kết hợp của cảm biến 26.1MP X-Trans CMOS 4 kết hợp bộ xử lý hình ảnh X-Processor 5 cho phép các nhiếp ảnh gia tạo nên những thước phim tuyệt đẹp có chất lượng lên đến 6.2K30p 4:2:2 10 bit màu. Ngoài ra, người dùng có thể phát huy tối đa khả năng sáng tạo với những video 4K/60P và 1080/240P ấn tượng.</p><p>&nbsp;</p>'),
(6, 'Sony Alpha A7R IIIA', 43990000, 'may-anh-sony-alpha-a7rm3a1-1-600x600.webp', 1, NULL, '2024-04-07 09:15:44', '<p><strong>Sony A7R IIIA</strong> đã chứng minh rằng tốc độ chụp, độ phân giải và khả năng video đỉnh cao là có thể cùng tồn tại. A7R IIIA của Sony là một máy ảnh đa năng, hiệu năng cao và đặc trưng bởi không chỉ độ phân giải cao mà còn bởi sự linh hoạt đa phương tiện. Chiếc máy ảnh&nbsp;A7R IIIA với khả năng quay phim vượt trội khi được trang bị bộ cảm biến CMOS 42.4MP Exmor R BSI và bộ xử lý hình ảnh BIONZ X được cải tiến. Sony A7R IIIA mang lại tốc độ chụp liên tục 10 fps cùng với hệ thống động lấy nét được cải tiến để theo dõi đối tượng nhanh hơn, chính xác hơn cùng với khung rộng.</p><p>Hệ thống Hybrid AF lấy nét nhanh chóng được kết hợp 399 điểm lấy nét theo pha và 425 khu vực tương phản để nhanh chóng tập trung đối tượng trong nhiều điều kiện ánh sáng khác nhau, đồng thời duy trì sự tập trung một cách hiệu quả hơn. Ngoài tốc độ và AF, cải tiến ISO 100-32000 cũng giúp tạo ra độ rõ nét hình ảnh lớn hơn rất nhiều và còn có thể mở rộng đến ISO 50-102400. Khả năng ghi hình cũng đã được mở rộng để nâng cao chất lượng khi ghi hình UHD 4K với chiều rộng toàn bộ cảm biến full frame hoặc khi sử dụng vùng Super35 và 5K oversampling để hạn chế tối đa sự mờ và răng cưa ảnh. Ngoài ra, A7R IIIA vẫn giữ được ổn định hình ảnh nhờ ổn định SteadyShot INSIDE 5 trục.</p><p><strong>Phiên bản&nbsp;A7R IIIA 2021 so với phiên bản A7R III gốc có các thay đổi như sau:</strong></p><ul><li>Số điểm ảnh của màn hình LCD tăng từ 1,440,000 lên 2,359,296 điểm.</li><li>Logo Sony bên dưới màn hình LCD được lược bỏ.</li><li>Cổng USB được đổi thành loại SuperSpeed USB 5Gbps (USB 3.2).</li></ul>'),
(20, 'Nikon D3500', 10500000, '1712647162.jpeg', 1, '2024-04-08 19:58:00', '2024-04-09 01:10:00', '<p><strong>Máy Ảnh Nikon D3500 Kit AF-P 18-55 VR</strong></p><p>- Cảm biến CMOS định dạng DX 24.2MP<br>- Bộ xử lý hình ảnh EXPEED 4<br>- ISO 100-25600; Chụp liên tiếp 5 hình/giây<br>- Màn hình LCD 9\"; 921000 điểm ảnh<br>- Quay Full HD 1080p ở tốc độ 60 khung hình / giây<br>- Hệ thống AF 11 điểm Multi-CAM 1000<br>- Kết nối Bluetooth SnapBridge<br>- Chế độ hướng dẫn và hiệu ứng đặc biệt<br>- Trọng lượng: 365g</p><p>- Ống kính AF-S 18-55mm F/3.5-5.6G VR</p><p>&nbsp;- Phụ kiện đi kèm: EN-EL14A Pin Li-Ion, bộ sạc nhanh MH-24, dây đeo máy ảnh AN-DC3, nắp Body, thẻ bảo hành, hướng dẫn sử dụng.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_password`, `role`, `created_at`, `updated_at`) VALUES
(6, 'user2', '$2y$12$eS3K4cBDciYMqihS5nnR7OfkxXaXe.thpMiCZ4xmpPgunyJMakZGK', 1, '2024-04-09 23:34:45', '2024-04-09 23:34:45'),
(7, 'admin', '$2y$12$9OUlX3jhBmkEVUb6.2CmuO/Lwzanvt2NwCRgNivPp1qG9J2dN4GJa', 0, NULL, NULL),
(8, 'user1', '$2y$12$WPUrKsoA3tp4hmy5spwouuc3BhoiC14uANrTZoTGpNGZmnx0.v056', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
