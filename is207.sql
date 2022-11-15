-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 01:49 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `is207`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(13, 'Trang chủ'),
(14, 'Đánh giá'),
(15, 'Hỗ Trợ'),
(16, 'kha');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_describe` text NOT NULL,
  `course_price` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `course_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_describe`, `course_price`, `course_image`, `course_type`) VALUES
(1, 'Làm quen với HTML và CSS', 'Khóa học cung cấp những kiến thức cơ bản của HTML và CSS', '1.500.000', 'htmlandcss.jpeg', 'front-end'),
(2, 'Thành thạo ngôn ngữ Javascript', 'Tiếp cận ngôn ngữ lập trình giao diện Javascript, thành thạo các cú pháp và lập trình chức năng cơ bản của một Website.', '1.800.000', 'javascript_course.jpg', 'front-end'),
(3, 'Lập Trình Front-end với ReactJS', 'Tiếp cận ReactJS từ cơ bản đến nâng cao. Học một lần viết được mọi thứ, quan trọng nhất là hiểu được một dự án ReactJS được thiết kế như thế nào. Bạn sẽ tự tin xin việc với các kiến thức vững chắc học được.', '2.000.000', 'react_logo.png', 'front-end'),
(4, 'Lập Trình Back-end với PHP', 'Khóa học cung cấp những kiến thức từ cơ bản đến nâng cao của ngôn ngữ PHP và lập trình hướng đối tượng.', '1.500.000', 'php_logo.png', 'back-end'),
(5, 'Hệ quản trị cơ sở dữ liệu MySQL', 'Khóa học cung cấp những kiến thức quan trọng và cơ bản của Hệ quản trị cơ sở dữ liệu MySQL nhằm quản lí dữ liệu cho những ứng dụng Web.', '1.000.000', 'mysql_course.image', 'back-end');

-- --------------------------------------------------------

--
-- Table structure for table `course_summary`
--

CREATE TABLE `course_summary` (
  `summary_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `summary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_summary`
--

INSERT INTO `course_summary` (`summary_id`, `course_id`, `summary`) VALUES
(1, 1, 'Biết dùng các thẻ HTML và các thuộc tính CSS để tạo kiểu cho một Website.'),
(2, 1, 'Luyện tập được khả năng thiết kế UI tiêu chuẩn.'),
(3, 1, 'Biết cách phân tích giao diện Website.'),
(4, 1, 'Biết cách đặt tên Class HTML theo tiêu chuẩn BEM'),
(5, 2, 'Biết cú pháp cơ bản của Javascript.'),
(6, 2, 'Thành thạo DOM APIs để tương tác với Website.'),
(7, 2, 'Rèn luyện được tư duy lập trình với Javascript.'),
(8, 2, 'Tạo được giao diện Website đầu tiên sử dụng HTML, CSS và Javascript.'),
(9, 3, 'Biết cấu trúc của một ứng dụng Web viết bằng ReactJS.'),
(10, 3, 'Triển khai được dự án ReactJS ra thực tế và đưa lên Internet.'),
(11, 3, 'Hiểu các khái niệm trong ReactJS hooks.'),
(12, 3, 'Triển khai một ứng dụng Web thực tế và đưa vào sử dụng được.'),
(13, 4, 'Làm quen với ngôn ngữ lập trình thủ tục PHP và hiểu được các cú pháp cơ bản.'),
(14, 4, 'Thành thạo kĩ thuật lập trình hướng đối tượng với PHP.'),
(15, 4, 'Tạo được Website động tương tác với dữ liệu người dùng'),
(16, 4, 'Tạo lập một dự án thực tế với đầy đủ Front-end và Back-end.'),
(17, 5, 'Biết sử dụng các câu lệnh cơ bản như: Select, Insert, Delete, Update,...'),
(18, 5, 'Thiết lập được một cơ sở dữ liệu lưu trữ cho Website động.'),
(19, 5, 'Thành thạo việc thao tác với dữ liệu người dùng và bảo mật dữ liệu.'),
(20, 5, 'Tạo được cơ sở dữ liệu cho một ứng dụng Web thực tế và triển khai chúng.');

-- --------------------------------------------------------

--
-- Table structure for table `course_video`
--

CREATE TABLE `course_video` (
  `video_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `video_time` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_video`
--

INSERT INTO `course_video` (`video_id`, `course_id`, `video_name`, `video_link`, `video_time`) VALUES
(1, 1, 'Giới thiệu khóa học HTML-CSS và cài đặt phần mềm cần thiết', 'htmlandcss_video1.mp4', '3:53'),
(2, 1, 'Các thẻ HTML cơ bản phần 1', 'htmlandcss_video2.mp4', '7:22'),
(3, 1, 'Các thẻ HTML cơ bản phần 2', 'htmlandcss_video3.mp4', '9:48'),
(4, 1, 'Các cách thêm định dạng css vào file HTML', 'htmlandcss_video4.mp4', '13:25'),
(5, 1, 'Phân biệt class và id trong HTMl và CSS', 'htmlandcss_video5.mp4', '17:44'),
(6, 1, 'Một số thuộc tính cơ bản của CSS', 'htmlandcss_video6.mp4', '20:08'),
(7, 1, 'Hiệu ứng hover và làm bài tập', 'htmlandcss_video7.mp4', '21:20'),
(8, 1, 'Hướng dẫn làm bài tập - Thuộc tính float:left', 'htmlandcss_video8.mp4', '18:14'),
(9, 1, 'Hoàn thành bài tập - Nhúng video Youtube vào HTML', 'htmlandcss_video9.mp4', '8:30'),
(10, 1, 'Cách sử dụng font trong HTML và CSS', 'htmlandcss_video10.mp4', '8:08'),
(11, 1, 'Sử dụng icon Font awesome', 'htmlandcss_video11.mp4', '7:11'),
(12, 1, 'Bài tập tổng hợp', 'htmlandcss_video12.mp4', '30:56'),
(13, 1, 'Hiệu ứng Hover với transition', 'htmlandcss_video13.mp4', '16:38'),
(14, 1, 'Thuộc tính box-shadow và hover nâng cao', 'htmlandcss_video14.mp4', '23:57'),
(15, 1, 'Làm bài tập trang Cafef.vn', 'htmlandcss_video15.mp4', '32:01'),
(16, 1, 'Làm bài tập trang Cafef.vn', 'htmlandcss_video16.mp4', '16:51'),
(17, 1, 'Chia layer trong css với thuộc tính positon', 'htmlandcss_video17.mp4', '21:50'),
(18, 1, 'Cách sử dụng flexbox', 'htmlandcss_video18.mp4', '31:09'),
(19, 1, 'Căn chỉnh nội dung trong flexbox', 'htmlandcss_video19.mp4', '11:17'),
(20, 1, 'Bài tập flexbox', 'htmlandcss_video20.mp4', '31:09'),
(21, 1, 'Chia nhiều layer với thuộc tính z-index', 'htmlandcss_video21.mp4', '16:37'),
(22, 1, 'Kết hợp chia layer và hiệu ứng hover', 'htmlandcss_video22.mp4', '15:37'),
(23, 1, 'Làm bài tập trang Edumall', 'htmlandcss_video23.mp4', '21:56'),
(24, 1, 'Hướng dẫn một số hiệu ứng Hover', 'htmlandcss_video24.mp4', '20:45'),
(25, 1, 'Thuộc tính background attachment', 'htmlandcss_video25.mp4', '13:13'),
(26, 1, 'Hiệu ứng zoom và gradient', 'htmlandcss_video26.mp4', '16:03'),
(27, 1, 'Bài tập về flexbox và căn giữa cho nội dung', 'htmlandcss_video27.mp4', '16:17'),
(28, 1, 'Cách tạo animation trong CSS', 'htmlandcss_video28.mp4', '18:37'),
(29, 1, 'Cách tạo Responsive cho Website', 'htmlandcss_video29.mp4', '8:04'),
(30, 1, 'Tổng hợp kiến thức về HTML và CSS', 'htmlandcss_video30.mp4', '6:39');

-- --------------------------------------------------------

--
-- Table structure for table `payment_bill`
--

CREATE TABLE `payment_bill` (
  `payment_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_price` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`) VALUES
(1, 'huynhkha', 'kha15466', 'huynhkha'),
(2, 'huynhkha123', 'kha', 'kha123@gmail.com'),
(3, 'namtran.09', 'namtrannhat0961', 'nam.tran09@hcmut.edu.vn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_summary`
--
ALTER TABLE `course_summary`
  ADD PRIMARY KEY (`summary_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `course_video`
--
ALTER TABLE `course_video`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `payment_bill`
--
ALTER TABLE `payment_bill`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_summary`
--
ALTER TABLE `course_summary`
  MODIFY `summary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `course_video`
--
ALTER TABLE `course_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payment_bill`
--
ALTER TABLE `payment_bill`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_summary`
--
ALTER TABLE `course_summary`
  ADD CONSTRAINT `course_summary_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `course_video`
--
ALTER TABLE `course_video`
  ADD CONSTRAINT `course_video_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
