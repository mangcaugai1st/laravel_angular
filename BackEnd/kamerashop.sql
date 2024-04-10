-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2024 at 04:24 PM
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
-- Database: `kamerashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_thumbnail`) VALUES
(1, 'Máy ảnh', 'nikon-camera-green-background.jpg'),
(2, 'Ống kính', 'kit-lens-landscape-799924072dd4b54a90c774d5aa2c21e5-zybravgx2q47.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int NOT NULL,
  `newsCategory_id` int NOT NULL,
  `news_title` text NOT NULL,
  `news_header1` text NOT NULL,
  `news_text1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `news_header2` text NOT NULL,
  `news_text2` text NOT NULL,
  `news_header3` text NOT NULL,
  `news_text3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `newsCategory_id`, `news_title`, `news_header1`, `news_text1`, `news_header2`, `news_text2`, `news_header3`, `news_text3`) VALUES
(1, 1, 'Rò rỉ thông số máy ảnh Nikon Z9', 'Giới thiệu.', 'Bộ thông số kỹ thuật được cho là của máy ảnh Nikon Z9 cấp độ chuyên nghiệp đã bị rò rỉ. Và nó thể hiện Nikon đang rất nghiêm túc về dòng máy này. Chiếc máy mirrorless full frame “flagship” sử dụng cảm biến 46MP. Chụp liên tục 20 khung hình/giây, quay được video 8K và hơn thế nữa.', 'Thông tin cơ bản', 'Thông tin này được công bố bởi Nikon Rumors, họ cũng khẳng định nguồn tin là “đáng tin cậy”. Theo đó, Nikon Z9 (tạm gọi) sẽ có thân máy kiểu Nikon D6 (có thể còn grip tích hợp). Khả năng chụp ảnh như Canon EOS R5 và hiệu suất lấy nét tự động mạnh mẽ như Sony a9 II.', 'Thông tin chi tiết', 'Về những con số cụ thể, thì nó được cho là mang theo cảm biến 46MP. Bộ xử lý EXPEED hoàn toàn mới có khả năng chụp ảnh lên đến 20 khung hình/giây và quay video 8K/30p. Máy ảnh này cũng có hệ thống AF cải tiến giúp phát hiện đối tượng nhanh nhạy. EVF độ phân giải cao, 2 khe cắm thẻ XQD/CFExpress. Gigabit LAN, và nó có “giao diện người dùng mới”.\r\n\r\n Chiếc máy Nikon Z9 này được dự đoán sẽ xuất hiện vào “mùa thu năm 2021”. Với mức giá từ 6.000 USD – 7.000 USD (140 triệu – 165 triệu VNĐ)'),
(2, 2, 'Thị phần của Canon tăng vọt tại Nhật Bản và đe dọa vượt qua Sony', 'Theo một báo cáo mới của BCN.', 'Mặc dù ngành nhiếp ảnh có sự khởi đầu năm mới đầy khó khăn do Covid-19. Nhưng hiện đã bắt đầu phục hồi ở Nhật Bản. Trong đó đáng chú ý nhất là Canon đang tăng thị phần máy ảnh full frame và sắp chạm tới con số của Sony. \r\n\r\nBCN đã chỉ ra rằng, tính đến tháng 4 “tỷ lệ sụt giảm của máy ảnh mirrorless nhiều hơn. So với toàn bộ các loại máy ảnh. Số lượng máy bán ra chỉ bằng 19.7% so với cùng kỳ năm ngoái, giảm hơn 80%. Tuy nhiên, nó đã phục hồi nhanh chóng sau tháng 7”.\r\n', 'Diễn biến.', 'Đến tháng 9, doanh số bán hàng đã phục hồi lên 97.8% tổng số đơn vị máy bán ra. Tổng giá trị doanh thu là 90.3% so với cùng thời điểm năm ngoái. Xem xét mức độ ảnh hưởng tồi tệ của thị trường vào đầu năm, mức độ hồi phục này rất đáng mừng.\r\n\r\nĐối với máy ảnh mirrorless full frame, BCN cho biết Sony đã có gần như 100% thị phần vào năm 2018. Nhưng kể từ đó, các nhà sản xuất khác đã tham gia và đã tạo nên cuộc đua quyết liệt. Mặc dù Sony vẫn chiếm hơn một nửa tổng số máy ảnh mirrorless trên thị trường. Vì thế tỷ lệ doanh thu hàng năm của họ vẫn giảm đáng kể từ đó. Tất nhiên năm nay mức giảm còn mạnh hơn.\r\n', '', ''),
(3, 3, 'Top 3 máy ảnh dành cho người mới', 'Canon EOS M200', 'Chiếc máy ảnh này sở hữu thiết kế khá đơn giản và nhỏ gọn, không có nhiều nút bấm hay nút chức năng tùy chỉnh mà chỉ có những nút cơ bản. Nhờ thế, những người mới tập tành làm quen với máy ảnh có thể tìm hiểu và thao tác một cách dễ dàng. Bên cạnh đó, Canon EOS M200 chỉ tích hợp 2 chế độ chụp chính là chụp thông thường và chụp tự động. Trong khi chế độ chụp tự động thích hợp với những người chưa biết gì hoặc thích selfie. Thì tính năng chụp thông thường với chế độ AV, TV, M…lại giúp người dùng “vọc vạch” để hoàn thiện kỹ năng trong quá trình học về kỹ thuật nhiếp ảnh.\r\n\r\nCanon EOS M200 được trang bị công nghệ lấy nét Dual Pixel CMOS AF. Cải tiến với vùng AF mở rộng tối đa đến 143 điểm. Giúp tăng tốc độ lấy nét tự động khi chụp ở chế độ Live View. Màn hình cảm ứng có kích thước 3 inch với 1.04 triệu điểm ảnh. Có thể lật ngược 180° ra phía trước cũng giúp người dùng thao tác dễ dàng. Chỉ với việc chạm và chọn trực tiếp trên màn hình khi quay hoặc chụp hình selfie. Điều này khá phù hợp với phái nữ và những Vlogger chưa có nhiều kỹ năng nhiếp ảnh.\r\n', 'Nikon D5600', 'Đây là dòng máy ảnh DSLR được nhiều người có kinh nghiệm khuyến nghị dành cho những người mới tập tành chụp ảnh. Máy có kích thước nhỏ gọn với các nút bấm khá đơn giản. Phím dial được thiết kế theo kiểu Control Layout có nút quay lớn cùng giao diện. Menu trên màn hình cảm ứng đơn giản giúp các thao tác trở nên dễ dàng. Dù mới tập chơi, bạn cũng chỉ cần tối đa 15 – 30 phút là có thể quen thuộc với chúng. \r\n\r\nMặt khác, màn hình cảm ứng của máy ảnh Nikon D5600 có khả năng xoay lật với kích thước 3.2 inch. Và độ phân giải 1.04 triệu điểm ảnh giúp người dùng dễ dàng xem. Phân tích chi tiết các bức ảnh dễ dàng sau khi chụp', 'Panasonic Lumix DC G100', 'Không hẳn là máy ảnh dành cho người mới. Nói đúng ra thì Panasonic Lumix DC G100 là chiếc máy chuyên dành cho các Vlogger. Những người không biết quá nhiều về nhiếp ảnh. Nhưng vẫn có thể sáng tạo ra nhiều nội dung chất lượng. Để đáp ứng được điều này, hãng đã chú trọng vào thiết kế và trang bị thêm nhiều tính năng đặc biệt cho máy.\r\n\r\nĐầu tiên, Lumix G100 sở hữu thiết kế nhỏ gọn với trọng lượng chỉ 412g. Ống kính LUMIX G VARIO 12-32mm / F3.5-5.6 ASPH. Khá lý tưởng cho các tín đồ xê dịch. Ngoài ra, báng cầm tay được kết nối với máy ảnh thông qua USB có thể sử dụng như một chiếc tripod siêu nhỏ. Không chỉ giúp người dùng có đủ thời gian lấy sáng & phơi sáng. Mà còn hỗ trợ chống rung khi vừa di chuyển vừa chụp hình, quay video.\r\n\r\nMặc dù máy chỉ trang bị cảm biến CMOS 20.3MP. Nhưng lại có khả năng loại bỏ bộ lọc tần số thấp. Và dải ISO rộng lên đến 25600 hỗ trợ chụp ảnh sắc nét trong điều kiện thiếu sáng. Bên cạnh đó, bộ vi xử lý Venus Engine. Giúp cải thiện tốc độ xử lý hình ảnh, đem đến trải nghiệm mượt mà hơn.');

-- --------------------------------------------------------

--
-- Table structure for table `newscategory`
--

CREATE TABLE `newscategory` (
  `newsCategory_id` int NOT NULL,
  `newsCategory_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newscategory`
--

INSERT INTO `newscategory` (`newsCategory_id`, `newsCategory_name`) VALUES
(1, 'Review máy ảnh'),
(2, 'Bản tin máy ảnh'),
(3, 'Kỹ thuật nhiếp ảnh');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderDetails_id` int NOT NULL,
  `orders_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int NOT NULL,
  `orders_date` date NOT NULL,
  `orders_totalAmount` decimal(10,0) NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int NOT NULL,
  `product_image` text NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`, `category_id`) VALUES
(1, 'Nikon D3100', 3100000, 'nikon-d3100-2.png', 1),
(2, 'Nikon AF-S DX Nikkor 35mm F1.8G', 4500000, 'afs-dx-nikkor-35mm-f18g-600x600.webp', 2),
(3, 'Nikon AF-S Nikkor 24-120mm F4G ED VR', 14500000, 'afs-nikkor-24120mm-f4g-ed-vr-hang-nhap-khau1-1-600x600.webp', 2),
(4, 'Canon EOS R50 Kit RF-S18-45mm F4.5-6.3', 17000000, 'may-anh-canon-eos-r50-kit-rfs18-45mm-f45-63-is-stm-600x600.webp', 1),
(5, 'Fujifilm X-S20 Body', 31000000, 'may-anh-fujifilm-x-s20-600x600.webp', 1),
(6, 'Sony Alpha A7R IIIA', 43990000, 'may-anh-sony-alpha-a7rm3a1-1-600x600.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `newsCategory_id` (`newsCategory_id`);

--
-- Indexes for table `newscategory`
--
ALTER TABLE `newscategory`
  ADD PRIMARY KEY (`newsCategory_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderDetails_id`),
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newscategory`
--
ALTER TABLE `newscategory`
  MODIFY `newsCategory_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderDetails_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`newsCategory_id`) REFERENCES `newscategory` (`newsCategory_id`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`orders_id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
