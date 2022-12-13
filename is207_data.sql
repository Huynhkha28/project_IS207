-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2022 lúc 07:37 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `is207`
--

-- --------------------------------------------------------

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(13, 'Trang chủ'),
(14, 'Đánh giá'),
(15, 'Hỗ Trợ'),
(16, 'kha');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
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
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_describe`, `course_price`, `course_image`, `course_type`) VALUES
(1, 'Làm quen với HTML và CSS', 'Khóa học cung cấp những kiến thức cơ bản của HTML và CSS', '1.500.000', 'htmlandcss.jpeg', 'front-end'),
(2, 'Thành thạo ngôn ngữ Javascript', 'Tiếp cận ngôn ngữ lập trình giao diện Javascript, thành thạo các cú pháp và lập trình chức năng cơ bản của một Website.', '1.800.000', 'javascript_course.jpg', 'front-end'),
(3, 'Lập Trình Front-end với ReactJS', 'Tiếp cận ReactJS từ cơ bản đến nâng cao. Học một lần viết được mọi thứ, quan trọng nhất là hiểu được một dự án ReactJS được thiết kế như thế nào. Bạn sẽ tự tin xin việc với các kiến thức vững chắc học được.', '2.000.000', 'react_logo.png', 'front-end'),
(4, 'Lập Trình Back-end với PHP', 'Khóa học cung cấp những kiến thức từ cơ bản đến nâng cao của ngôn ngữ PHP và lập trình hướng đối tượng.', '1.500.000', 'php_logo.png', 'back-end'),
(5, 'Hệ quản trị cơ sở dữ liệu MySQL', 'Khóa học cung cấp những kiến thức quan trọng và cơ bản của Hệ quản trị cơ sở dữ liệu MySQL nhằm quản lí dữ liệu cho những ứng dụng Web.', '1.000.000', 'mysql_course.image', 'back-end');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_summary`
--

CREATE TABLE `course_summary` (
  `summary_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `summary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `course_summary`
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
-- Cấu trúc bảng cho bảng `course_video`
--

CREATE TABLE `course_video` (
  `video_id` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `video_time` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `course_video`
--

INSERT INTO `course_video` (`video_id`, `course_id`, `video_name`, `video_link`, `video_time`) VALUES
('133', 1, 'Bài 1: Giới thiệu khóa học HTML-CSS và cài đặt phần mềm cần thiết', 'https://www.youtube.com/embed/G0quBPou7Z8', '3:52'),
('134', 1, 'Bài 2: Các thẻ HTML cơ bản - phần 1', 'https://www.youtube.com/embed/B51n2ucFn_I', '7:21'),
('135', 1, 'Bài 3: Các thẻ HTML cơ bản - phần 2', 'https://www.youtube.com/embed/i4XT_evGNZo', '9:47'),
('136', 1, 'Bài 4: Các cách thêm định dạng css vào file HTML', 'https://www.youtube.com/embed/zOQKvo-YD6k', '25:34'),
('137', 1, 'Bài 5: Phân biệt class và id trong html và css', 'https://www.youtube.com/embed/mFHyyABjnXg', '17:43'),
('138', 1, 'Bài 6: Một số thuộc tính cơ bản của CSS', 'https://www.youtube.com/embed/CRLl-csb2kw', '29:01'),
('139', 1, 'Bài 7: Hiệu ứng hover và làm bài tập', 'https://www.youtube.com/embed/GgnKAjFkpPM', '21:20'),
('140', 1, 'Bài 8: Hướng dẫn làm bài tập - Thuộc tính float: left', 'https://www.youtube.com/embed/3Fauc-yx2Os', '18:12'),
('141', 1, 'Bài 9: Hoàn thành bài tập - Nhúng video Youtube vào HTML', 'https://www.youtube.com/embed/z1Lr2GwVQJI', '8:29'),
('142', 1, 'Bài 10: Cách sử dụng font trong html và css', 'https://www.youtube.com/embed/nkKia9cxiXQ', '8:07'),
('143', 1, 'Bài 11: Sử dụng icon Font awesome', 'https://www.youtube.com/embed/JUlAolAqxbI', '7:09'),
('144', 1, 'Bài 12: Bài tập tổng hợp', 'https://www.youtube.com/embed/SdgmN_WXqag', '30:55'),
('145', 1, 'Bài 13: Hiệu ứng hover với transition', 'https://www.youtube.com/embed/LPMKfwfYjQc', '16:37'),
('146', 1, 'Bài 14: Thuộc tính box-shadow và hover nâng cao', 'https://www.youtube.com/embed/3JszNimJaoc', '22:36'),
('147', 1, 'Bài 15: Làm bài tập trang cafef.vn', 'https://www.youtube.com/embed/mHnimvYgRSg', '32:00'),
('148', 1, 'Bài 16: Làm trang Cafef.vn - phần 2', 'https://www.youtube.com/embed/PTib7VlmeKg', '16:00'),
('149', 1, 'Bài 17: Chia layer trong css với thuộc tính position', 'https://www.youtube.com/embed/8jPraLGYpvI', '21:49'),
('150', 1, 'Bài 18: Cách sử dụng flexbox', 'https://www.youtube.com/embed/DLmDgZZEVTA', '16:11'),
('151', 1, 'Bài 19: Căn chỉnh nội dung trong flexbox', 'https://www.youtube.com/embed/SAbvVyzENE4', '11:16'),
('152', 1, 'Bài 20: Bài tập flexbox', 'https://www.youtube.com/embed/i5T0Hk9k_gc', '31:08'),
('153', 1, 'Bài 21: Chia nhiều layer với thuộc tính z-index', 'https://www.youtube.com/embed/MDl2bIfwptw', '16:36'),
('154', 1, 'Bài 22: Kết hợp chia layer và hiệu ứng hover', 'https://www.youtube.com/embed/yA6A3NBCL3c', '15:36'),
('155', 1, 'Bài 23: Làm bài tập trang Edumall', 'https://www.youtube.com/embed/prOOcq-ykOU', '21:55'),
('156', 1, 'Bài 24: Hướng dẫn một số hiệu ứng hover', 'https://www.youtube.com/embed/szDXnNlVKP4', '20:44'),
('157', 1, 'Bài 25: Thuộc tính background attachment', 'https://www.youtube.com/embed/xJRth5nJIiM', '13:12'),
('158', 1, 'Bài 26: Hiệu ứng zoom và gradient', 'https://www.youtube.com/embed/KQJhedwyn2s', '16:02'),
('159', 1, 'Bài 27: Bài tập về flexbox và cách căn giữa cho nội dung', 'https://www.youtube.com/embed/BXaQaAv6Vc8', '16:16'),
('160', 1, 'Bài 28: Cách tạo animation trong css', 'https://www.youtube.com/embed/cMBC1oXwmh0', '18:36'),
('161', 1, 'Bài 29: Cách tạo responsive cho web', 'https://www.youtube.com/embed/jmDKje5lKRo', '8:04'),
('162', 1, 'Bài 30: Tổng hợp kiến thức cơ bản về HTML và CSS', 'https://www.youtube.com/embed/71PBLg6RTpg', '6:38'),
('163', 2, 'Javascript Cơ Bản - #01 - Biến và kiểu dữ liệu (Phần 01)', 'https://www.youtube.com/embed/IpA5WW7Hj8I', '16:18'),
('164', 2, 'Javascript Cơ Bản - #01 - Biến và kiểu dữ liệu (Phần 02)', 'https://www.youtube.com/embed/9i9eMjTwPks', '18:46'),
('165', 2, 'Javascript Cơ Bản - #01 - Biến và kiểu dữ liệu. Solution Challenge 01 (Phần 03)', 'https://www.youtube.com/embed/sRgAE6na1bA', '5:21'),
('166', 2, 'Javascript Cơ Bản - #02 - Câu lệnh If/Else trong Javascript', 'https://www.youtube.com/embed/oWLbwVFWBag', '10:50'),
('167', 2, 'Javascript Cơ Bản - #03 - Câu lệnh Switch/Case trong Javascript', 'https://www.youtube.com/embed/42MVQCKEdEU', '10:10'),
('168', 2, 'Javascript Cơ Bản - #04 - Truthy, Falsy trong Javascript. Challenge 02', 'https://www.youtube.com/embed/Lp1um9KPPb0', '11:08'),
('169', 2, 'Javascript Cơ Bản - #05 - Solution cho Challenge 02', 'https://www.youtube.com/embed/89eZAcZCci4', '11:30'),
('170', 2, 'Javascript Cơ Bản - #06 - Function trong Javascript', 'https://www.youtube.com/embed/D8efQm2L5EY', '14:40'),
('171', 2, 'Javascript Cơ Bản - #07 - Array trong Javascript', 'https://www.youtube.com/embed/YFYl5xkx9j8', '10:48'),
('172', 2, 'Javascript Cơ Bản - #08 - Một số Methods cơ bản của Array', 'https://www.youtube.com/embed/3ciU3zkZ7II', '18:33'),
('173', 2, 'Javascript Cơ Bản - #09 - Bài tập cơ bản challenge 03 ứng dụng Array', 'https://www.youtube.com/embed/5WClTP0V9o8', '1:56'),
('174', 2, 'Javascript Cơ Bản - #10 - Solution cho Challenge 03', 'https://www.youtube.com/embed/3u2sfyQ7BCo', '16:47'),
('175', 2, 'Javascript Cơ Bản - #11 - Object trong Javascript', 'https://www.youtube.com/embed/wachB0eOL6M', '20:28'),
('176', 2, 'Javascript Cơ Bản - #12 - Bài tập cơ bản Challenge 04 ứng dụng Object', 'https://www.youtube.com/embed/0OTSGj6ZpYc', '19:38'),
('177', 2, 'Javascript Cơ Bản - #13 - Vòng lặp trong Javascript', 'https://www.youtube.com/embed/2b6rQrGqExQ', '32:46'),
('178', 2, 'Javascript Cơ Bản - #14 - Bài tập ứng dụng vòng lặp, Challenge 05', 'https://www.youtube.com/embed/vhPvrsVrn90', '1:04'),
('179', 2, 'Javascript Cơ Bản - #15 - Solution cho Challenge 05', 'https://www.youtube.com/embed/UGTvW6TxAlQ', '23:04'),
('180', 3, 'React 01 - Giới thiệu khóa học React Framework | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/8mLIaDBaqPg', '3:01'),
('181', 3, 'ReactJs 02 - ReactJs in HTML - JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/HjbH4aRJZRw', '8:03'),
('182', 3, 'ReactJs 03 - ReactJs in NPM | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/jp9hR5GbSuw', '9:02'),
('183', 3, 'ReactJs 04 - ReactJs JSX & Element | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/tpqezsjdxsU', '9:18'),
('184', 3, 'ReactJs 05 - ReactJs Style Css | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/Wf8rjDa1VWc', '7:52'),
('185', 3, 'ReactJs 06 - ReactJs Component Function - Trung Tâm Java Master', 'https://www.youtube.com/embed/rHKpEa1ec4w', '7:10'),
('186', 3, 'ReactJs 07 - ReactJs Component Class - JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/r2Tqc0Yoj-o', '2:57'),
('187', 3, 'ReactJs 08 - ReactJs Props - JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/ZMjFjc_uG0k', '9:45'),
('188', 3, 'ReactJs 09 - ReactJs Props Advance - JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/G8Rb7v6G8nM', '8:29'),
('189', 3, 'ReactJs 10 - ReactJs Conditional Render - JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/WtMc2lHpWsI', '5:58'),
('190', 3, 'ReactJs 11 - ReactJs State - JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/Xtc17pjPepA', '16:08'),
('191', 3, 'ReactJs 12 - ReactJs Component LifeCycle - JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/i41jLwL2t4o', '9:16'),
('192', 3, 'ReactJs Form | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/6yIeMRT9A9s', '16:18'),
('193', 3, 'ReactJs List | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/Mwz3xJPn6gg', '9:16'),
('194', 3, 'ReactJs Table | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/2SPg5BNXqOc', '4:36'),
('195', 3, 'ReactJs - Thực hành React JS Fetch API - Search dữ liệu | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/mS2224kUdxg', '20:20'),
('196', 3, 'ReactJs - Spring API JWT - React Login | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/TeuhalwGPJs', '22:42'),
('197', 3, 'ReactJS - Thẻ Fragment | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/iLlyCHbcLRk', '3:44'),
('198', 3, 'ReactJs - Hook - Tạo hàm Hook riêng | JMaster.io', 'https://www.youtube.com/embed/gZXH0ExsEkk', '14:53'),
('199', 3, 'ReactJs - Router - Chuyển hướng mượt mà với thiết lập cơ bản | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/MWagCJLURFM', '11:21'),
('200', 3, 'ReactJs - Router - Nested Route Tạo các sub menu lồng nhau | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/IENg3lvjWTA', '11:18'),
('201', 3, 'ReactJs - Router - Đọc Params, History, Location | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/IiGx86pJSw8', '11:23'),
('202', 3, 'ReactJs - Router - Login Phân Quyền cực kỳ đơn giản | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/8-12EUoFd00', '11:25'),
('203', 3, 'ReactJs - Router - Xử lý giao diện Active Link Style | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/tszl_80ZRYg', '3:59'),
('204', 3, 'ReactJs - Router - Thực hành tạo menu CRUD Thêm/Sửa/Xoá/Tìm kiếm cực nhanh | JMaster.io', 'https://www.youtube.com/embed/xiZ0pFtAIwE', '12:41'),
('205', 3, 'ReactJs - (HOC) Higher-Order Components | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/ePZOlHgkwME', '15:16'),
('206', 3, 'ReactJs - Children và render props JSX đển tạo UI linh động | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/zPjX6BP62jw', '8:50'),
('207', 3, 'ReactJs - Tại sao nên dùng PureComponent để tăng hiệu suất | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/MTk8hgIg13M', '8:02'),
('208', 3, 'ReactJs - Style theo Module Css cho từng Component riêng rẽ |JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/EI7fKZgUMWo', '5:22'),
('209', 3, 'ReactJs - Refs để truy vấn vào HTML DOM | JMaster.io Trung Tâm Java', 'https://www.youtube.com/embed/NJgAwDrQbwk', '8:02'),
('210', 3, 'ReactJs - Check null, undefined | JMaster.io', 'https://www.youtube.com/embed/0pDPyR0pA48', '7:04'),
('211', 3, 'React Js - Lab Cập nhật thời tiết bằng React Js, API Weather, Axios - JMaster.io', 'https://www.youtube.com/embed/7Op3hpbktzY', '8:27'),
('212', 3, 'React Js - Lab chương trình chuyển đôi tiền tệ - JMaster.io', 'https://www.youtube.com/embed/Ckn_-HqQyZw', '5:38'),
('213', 3, 'React Js - Lab Hướng dẫn làm giao diện trang sản phẩm bằng React Bootstrap - JMaster.io', 'https://www.youtube.com/embed/FNTC6191Rfw', '8:24'),
('214', 4, 'Giới thiệu khóa học lập trình PHP&MySQL online tại KhoaPham.Vn', 'https://www.youtube.com/embed/7x1PDHsQyGw', '13:44'),
('215', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 0/30 : Video Giới thiệu chung', 'https://www.youtube.com/embed/KDrEcbTguNs', '8:36'),
('216', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 1/30 : Các thao tác chuẩn bị.', 'https://www.youtube.com/embed/-1BU87RSbMs', '8:10'),
('217', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 2/30 :Cấu trúc layout, blocks & pages', 'https://www.youtube.com/embed/HNJkZ2D5CNE', '13:51'),
('218', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 3/30: Trang chủ - Hiện tin mới nhất', 'https://www.youtube.com/embed/K2jNaQnon0E', '16:32'),
('219', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 4/30: Trang chủ - Hiện tin xem nhiều nhất', 'https://www.youtube.com/embed/MtRds0plOUc', '6:48'),
('220', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn (Bài 5/30): Trang chủ -Hiện 3 nhóm tin cột phải', 'https://www.youtube.com/embed/6iFGkbmSbvo', '13:53'),
('221', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn (Bài 6/30): Trang chủ -Hiện banner phải', 'https://www.youtube.com/embed/-ovfj24C7QQ', '5:44'),
('222', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn (Bài 7/30): Trang chủ - Hiện banner trượt dưới footer', 'https://www.youtube.com/embed/iWn0C6jMXCM', '3:09'),
('223', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn (Bài 8/30 Phần 1): Trang chủ - Viết code hiện menu 2 cấp', 'https://www.youtube.com/embed/6RrKUXD67vw', '7:10'),
('224', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn , Bài 8/30 Phần 2: Trang chủ - Hiện banner trượt dưới footer', 'https://www.youtube.com/embed/Z7zCuCdXbhU', '8:54'),
('225', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn , Bài 9/30: Trang chủ - Viết code hiện nhóm tin dưới footer', 'https://www.youtube.com/embed/Hl-W3JxTSOw', '6:43'),
('226', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn , Bài 10/30: Trang chủ - Viết code hiện tin trang chủ', 'https://www.youtube.com/embed/AsyRg_FT_ow', '12:14'),
('227', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn , Bài 11/30 : Viết code hiện tin theo loại', 'https://www.youtube.com/embed/k_2flN5ze6Y', '5:56'),
('228', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn , Bài 12/30 : Trang tin trong loại - Ttên loại tin đang xem', 'https://www.youtube.com/embed/ty_F5qAhVIo', '5:40'),
('229', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn , Bài 13/30 : Trang tin trong loại - Viết code phân trang', 'https://www.youtube.com/embed/wMYNuUfw5Hw', '17:43'),
('230', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 14/30 Viết code hiện chi tiết tin đang xem', 'https://www.youtube.com/embed/jPNNG0_Y45M', '6:33'),
('231', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 15/30 : Viết code hiện tin cùng loại tin đang xem', 'https://www.youtube.com/embed/g-hO3YeKKzE', '4:38'),
('232', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 16/30 : Viết code đếm số lần xem tin', 'https://www.youtube.com/embed/USYRyWzJA8Y', '2:47'),
('233', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 17/30 : Hiện tin chứa từ khóa cần tìm', 'https://www.youtube.com/embed/OQapj7LfWxs', '8:07'),
('234', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 18/30 : Viết code tạo chức năng đăng nhập', 'https://www.youtube.com/embed/GN-gYK0TOPk', '16:08'),
('235', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 19/30 : Thiết kế layout trang quản trị', 'https://www.youtube.com/embed/g-f4P-3pzIo', '7:00'),
('236', 4, 'Lập trình PHP&MySQL tại KhoaPham.Vn Bài 20/30 : Cấm truy cập trang quản trị khi chưa đăng nhập', 'https://www.youtube.com/embed/3549rFNTlFg', '4:21'),
('237', 4, 'Lập trình PHP - Bài 21: Hướng dẫn quản lý Thể Loại', 'https://www.youtube.com/embed/Y3wWW6PtkWY', '46:54'),
('238', 4, 'Lập trình PHP - Bài 22: Trang quản trị - Viết code quản lí loại tin', 'https://www.youtube.com/embed/lQ1tcmhjhcY', '33:29'),
('239', 4, 'Lập trình PHP - Bài 23: Trang quản trị - Viết code quản lí tin tức', 'https://www.youtube.com/embed/G86gtQehfOA', '37:37'),
('240', 4, 'Lập trình PHP - Bài 24: Trang quản trị - Viết code quản lí quảng cáo', 'https://www.youtube.com/embed/YUk1Jf4CM9A', '2:12'),
('241', 4, 'Lập trình PHP - Bài 25: Ajax - Giới thiệu kỹ thuật Ajax', 'https://www.youtube.com/embed/B2iGI8qh3Bs', '12:36'),
('242', 4, 'Lập trình PHP - Bài 26: Ajax - Ứng dụng Ajax vào ràng buộc 2 list/menu trang quản lí tin', 'https://www.youtube.com/embed/zUaHDoYUIjg', '9:16'),
('243', 4, 'Lập trình PHP - Bài 27: SEO onpage - Viết code SEF link - Cấu hình .htaccess tạo link thân thiện', 'https://www.youtube.com/embed/3IJXgVbYXOg', '20:54'),
('244', 4, 'Lập trình PHP - Bài 28: SEO onpage - Cấu hình file robots.txt', 'https://www.youtube.com/embed/DBqQY6DEn4Y', '4:19'),
('245', 4, 'Lập trình PHP - Bài 29: Hướng dẫn đăng kí hosting free & Upload trang web', 'https://www.youtube.com/embed/2A96nJ766-Q', '9:40'),
('246', 4, 'Lập trình PHP - Bài 30: Hướng dẫn đăng kí Google Webmaster & Google Analytics', 'https://www.youtube.com/embed/-eD7jjYT0VQ', '7:18'),
('247', 5, 'Bài 1: Giới thiệu khoá học Mysql', 'https://www.youtube.com/embed/tMxf9GUd448', '1:33'),
('248', 5, 'Bài 2: Hướng dẫn sử dụng cú pháp trong mysql', 'https://www.youtube.com/embed/-JU78YAfF7o', '6:46'),
('249', 5, 'Bài 3: Hướng dẫn sử dụng kiểu dữ liệu trong database', 'https://www.youtube.com/embed/5tAE8qXPFts', '10:35'),
('250', 5, 'Bài 4: Hướng dẫn sử dụng ràng buộc trong mysql (phần 1)', 'https://www.youtube.com/embed/0QGO3bKB1So', '9:26'),
('251', 5, 'Bài 5: Hướng dẫn sử dụng ràng buộc trong mysql (phần 2)', 'https://www.youtube.com/embed/CXM_oGBqza4', '12:45'),
('252', 5, 'Bài 6: Các loại toán tử trong SQL', 'https://www.youtube.com/embed/b-WGaGYAUQw', '6:30'),
('253', 5, 'Bài 7: Các câu lệnh cấu trúc DDL trong SQL', 'https://www.youtube.com/embed/w7GoXo5PIvI', '8:40'),
('254', 5, 'Bài 8: Hướng dẫn các câu lệnh DML trong SQL', 'https://www.youtube.com/embed/BL7FFKPETMs', '9:32'),
('255', 5, 'Bài 9: Hướng dẫn sử dụng các Joins trong SQL', 'https://www.youtube.com/embed/tKLOuvrHCNw', '7:33'),
('256', 5, 'Bài 10: Hướng dẫn sử dụng having trong SQL', 'https://www.youtube.com/embed/vfAWEtwtQf8', '4:28'),
('257', 5, 'Bài 11: Hướng dẫn sử dụng Index trong MySQL', 'https://www.youtube.com/embed/saZr66o5zNw', '2:46'),
('258', 5, 'Bài 12: Hướng dẫn sử dụng Trigger trong MySQL', 'https://www.youtube.com/embed/mxYQUIMJ5Aw', '7:39'),
('259', 5, 'Bài 13: Hướng dẫn sử dụng Transaction trong MySQL', 'https://www.youtube.com/embed/cKrrkVOy5QI', '9:15'),
('260', 5, 'Bài 14: Hướng dẫn sử dụng View trong MySQL', 'https://www.youtube.com/embed/QZHScccM500', '8:20'),
('261', 5, 'Bài 15: Sử dụng Stored Procedure trong Database', 'https://www.youtube.com/embed/ReeqgvOL4-w', '8:00'),
('262', 5, 'Bài 17: Hướng dẫn sử dụng toán tử like trong MySQL', 'https://www.youtube.com/embed/sddaOVSUZ-A', '7:27'),
('263', 5, 'Bài 18: Hướng dẫn sử dụng hàm có sẵn trong MySQL', 'https://www.youtube.com/embed/8Lkf4xegRX4', '5:21'),
('264', 5, 'Bài 19. Chuẩn hoá dữ liệu database', 'https://www.youtube.com/embed/DXcslY8IQ1k', '25:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment_bill`
--

CREATE TABLE `payment_bill` (
  `payment_id` int(11) NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `purchased_course`
--

CREATE TABLE `purchased_course` (
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `purchased_course`
--

INSERT INTO `purchased_course` (`user_id`, `course_id`, `user_name`) VALUES
(2, 1, 'huynhkha123'),
(2, 2, 'huynhkha123'),
(3, 1, 'namtran.09'),
(3, 2, 'namtran.09'),
(6, 1, 'baokha'),
(6, 2, 'baokha'),
(6, 3, 'baokha'),
(6, 4, 'baokha'),
(6, 5, 'baokha'),
(7, 1, 'quynhanhdangiu'),
(7, 2, 'quynhanhdangiu'),
(7, 3, 'quynhanhdangiu'),
(7, 5, 'quynhanhdangiu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `support`
--
-- Cấu trúc bảng cho bảng `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `post_id` int(11) NOT NULL,
  `post_name` text NOT NULL,
  `post_mota` text NOT NULL,
  `post_tags` varchar(50) NOT NULL,
  `post_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_blog`
--

INSERT INTO `tbl_blog` (`post_id`, `post_name`, `post_mota`, `post_tags`, `post_image`) VALUES
(1, 'Cách sử dụng font-end hiểu quả nhất 2', '                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ducimus voluptatibus eaque voluptatem porro, amet perspiciatis facilis excepturi officiis asperiores! Quisquam quos voluptatibus, ipsa nihil fugit maxime nesciunt animi veritatis dolorem facilis voluptatem eum totam. Voluptatibus dolores nobis eum dolorem tempore facere obcaecati molestiae magnam eius quasi quas mollitia corporis commodi molestias voluptatum dolorum deserunt fuga a animi deleniti, enim delectus quam aliquid officiis! Ex, rerum nisi veritatis incidunt a vero minima quibusdam sit ducimus error architecto ullam quis hic distinctio, exercitationem facilis magni quae accusamus voluptatibus. Facere repellendus fuga dolorem, pariatur iure quidem omnis dicta atque possimus necessitatibus temporibus suscipit officiis aliquam, animi et unde aspernatur, aut autem magni repudiandae inventore mollitia. Modi, praesentium. Sit laboriosam ducimus suscipit praesentium corporis pariatur, odit voluptatum blanditiis id excepturi repudiandae officia nulla, ipsam harum est minima laudantium? Modi tempora corrupti odio ratione debitis distinctio numquam quaerat iusto. Cum molestiae maiores debitis suscipit vel esse odio, harum, eveniet at odit facilis reiciendis soluta ex, necessitatibus sequi! Maiores, nostrum id quos magnam laudantium natus molestiae porro! Ut mollitia reiciendis perferendis enim cumque reprehenderit sequi maiores veniam omnis incidunt distinctio, fuga veritatis voluptates doloremque et aspernatur, deserunt voluptatum officiis adipisci animi autem quia, doloribus dicta.\r\n', 'back-end', 'blog_post_1.jpg'),
(2, 'Cách sử dụng font-end hiểu quả nhất 3', '                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat expedita nostrum magnam, eligendi voluptas, culpa ducimus odio laboriosam qui rerum dicta voluptate temporibus mollitia totam natus minima assumenda, aut quasi blanditiis! Esse, id sed ipsam quibusdam, et quisquam quasi possimus saepe libero laboriosam minus nostrum repudiandae ex consequuntur cum. Corporis.          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ducimus voluptatibus eaque voluptatem porro, amet perspiciatis facilis excepturi officiis asperiores! Quisquam quos voluptatibus, ipsa nihil fugit maxime nesciunt animi veritatis dolorem facilis voluptatem eum totam. Voluptatibus dolores nobis eum dolorem tempore facere obcaecati molestiae magnam eius quasi quas mollitia corporis commodi molestias voluptatum dolorum deserunt fuga a animi deleniti, enim delectus quam aliquid officiis! Ex, rerum nisi veritatis incidunt a vero minima quibusdam sit ducimus error architecto ullam quis hic distinctio, exercitationem facilis magni quae accusamus voluptatibus. Facere repellendus fuga dolorem, pariatur iure quidem omnis dicta atque possimus necessitatibus temporibus suscipit officiis aliquam, animi et unde aspernatur, aut autem magni repudiandae inventore mollitia. Modi, praesentium. Sit laboriosam ducimus suscipit praesentium corporis pariatur, odit voluptatum blanditiis id excepturi repudiandae officia nulla, ipsam harum est minima laudantium? Modi tempora corrupti odio ratione debitis distinctio numquam quaerat iusto. Cum molestiae maiores debitis suscipit vel esse odio, harum, eveniet at odit facilis reiciendis soluta ex, necessitatibus sequi! Maiores, nostrum id quos magnam laudantium natus molestiae porro! Ut mollitia reiciendis perferendis enim cumque reprehenderit sequi maiores veniam omnis incidunt distinctio, fuga veritatis voluptates doloremque et aspernatur, deserunt voluptatum officiis adipisci animi autem quia, doloribus dicta.\n', 'font-end', 'blog_post_1.jpg'),
(3, 'Cách sử dụng font-end hiểu quả nhất 2', '                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, necessitatibus eaque maiores accusantium, cumque laboriosam, non sint quis itaque enim quaerat veniam nulla. Nihil sed laboriosam excepturi obcaecati commodi culpa nam, numquam laborum quasi dicta cupiditate, itaque ex iusto accusantium harum illum magnam? Eius architecto tempore neque et officiis similique ab, vel ea nulla ipsam molestiae expedita aliquid cupiditate facere incidunt reprehenderit, quo libero aut perspiciatis necessitatibus dolor. Repellendus qui eveniet consectetur praesentium magni quam accusantium aspernatur? Illum quisquam accusamus animi possimus itaque eius libero. Impedit, doloribus ullam quia, eum expedita possimus deserunt totam quaerat dolorum commodi voluptatum natus eius minima vel eaque quo modi, perferendis fugiat quis illum accusantium? Facere nulla iste reiciendis vero est in accusantium vitae quisquam dicta dolorem quam delectus quasi deleniti doloremque id, quia excepturi quae nesciunt quos officia. Vitae dolorum totam optio architecto aliquam facilis, quod mollitia vel cum ad, repellendus cupiditate quasi sit est, unde vero voluptatibus. Laudantium fugiat a quia dignissimos optio, hic cum qui commodi sunt inventore nobis dolorum repudiandae magni alias aliquid nesciunt quos. Suscipit sunt ratione, laborum tenetur quaerat, praesentium ullam dolor libero unde dolore quis error. Aspernatur repudiandae nemo aut, natus ullam laborum quod magni omnis recusandae iusto.    \r\n', 'js', 'blog_post_1.jpg'),
(4, 'Cách sử dụng font-end hiểu quả nhất 3', '                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat expedita nostrum magnam, eligendi voluptas, culpa ducimus odio laboriosam qui rerum dicta voluptate temporibus mollitia totam natus minima assumenda, aut quasi blanditiis! Esse, id sed ipsam quibusdam, et quisquam quasi possimus saepe libero laboriosam minus nostrum repudiandae ex consequuntur cum. Corporis.       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, necessitatibus eaque maiores accusantium, cumque laboriosam, non sint quis itaque enim quaerat veniam nulla. Nihil sed laboriosam excepturi obcaecati commodi culpa nam, numquam laborum quasi dicta cupiditate, itaque ex iusto accusantium harum illum magnam? Eius architecto tempore neque et officiis similique ab, vel ea nulla ipsam molestiae expedita aliquid cupiditate facere incidunt reprehenderit, quo libero aut perspiciatis necessitatibus dolor. Repellendus qui eveniet consectetur praesentium magni quam accusantium aspernatur? Illum quisquam accusamus animi possimus itaque eius libero. Impedit, doloribus ullam quia, eum expedita possimus deserunt totam quaerat dolorum commodi voluptatum natus eius minima vel eaque quo modi, perferendis fugiat quis illum accusantium? Facere nulla iste reiciendis vero est in accusantium vitae quisquam dicta dolorem quam delectus quasi deleniti doloremque id, quia excepturi quae nesciunt quos officia. Vitae dolorum totam optio architecto aliquam facilis, quod mollitia vel cum ad, repellendus cupiditate quasi sit est, unde vero voluptatibus. Laudantium fugiat a quia dignissimos optio, hic cum qui commodi sunt inventore nobis dolorum repudiandae magni alias aliquid nesciunt quos. Suscipit sunt ratione, laborum tenetur quaerat, praesentium ullam dolor libero unde dolore quis error. Aspernatur repudiandae nemo aut, natus ullam laborum quod magni omnis recusandae iusto.    \n', 'html', 'blog_post_1.jpg'),
(5, 'Cách sử dụng font-end hiểu quả nhất 2', '                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, necessitatibus eaque maiores accusantium, cumque laboriosam, non sint quis itaque enim quaerat veniam nulla. Nihil sed laboriosam excepturi obcaecati commodi culpa nam, numquam laborum quasi dicta cupiditate, itaque ex iusto accusantium harum illum magnam? Eius architecto tempore neque et officiis similique ab, vel ea nulla ipsam molestiae expedita aliquid cupiditate facere incidunt reprehenderit, quo libero aut perspiciatis necessitatibus dolor. Repellendus qui eveniet consectetur praesentium magni quam accusantium aspernatur? Illum quisquam accusamus animi possimus itaque eius libero. Impedit, doloribus ullam quia, eum expedita possimus deserunt totam quaerat dolorum commodi voluptatum natus eius minima vel eaque quo modi, perferendis fugiat quis illum accusantium? Facere nulla iste reiciendis vero est in accusantium vitae quisquam dicta dolorem quam delectus quasi deleniti doloremque id, quia excepturi quae nesciunt quos officia. Vitae dolorum totam optio architecto aliquam facilis, quod mollitia vel cum ad, repellendus cupiditate quasi sit est, unde vero voluptatibus. Laudantium fugiat a quia dignissimos optio, hic cum qui commodi sunt inventore nobis dolorum repudiandae magni alias aliquid nesciunt quos. Suscipit sunt ratione, laborum tenetur quaerat, praesentium ullam dolor libero unde dolore quis error. Aspernatur repudiandae nemo aut, natus ullam laborum quod magni omnis recusandae iusto.    \r\n', 'css', 'blog_post_1.jpg'),
(6, 'Cách sử dụng font-end hiểu quả nhất 3', '                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat expedita nostrum magnam, eligendi voluptas, culpa ducimus odio laboriosam qui rerum dicta voluptate temporibus mollitia totam natus minima assumenda, aut quasi blanditiis! Esse, id sed ipsam quibusdam, et quisquam quasi possimus saepe libero laboriosam minus nostrum repudiandae ex consequuntur cum. Corporis.       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, necessitatibus eaque maiores accusantium, cumque laboriosam, non sint quis itaque enim quaerat veniam nulla. Nihil sed laboriosam excepturi obcaecati commodi culpa nam, numquam laborum quasi dicta cupiditate, itaque ex iusto accusantium harum illum magnam? Eius architecto tempore neque et officiis similique ab, vel ea nulla ipsam molestiae expedita aliquid cupiditate facere incidunt reprehenderit, quo libero aut perspiciatis necessitatibus dolor. Repellendus qui eveniet consectetur praesentium magni quam accusantium aspernatur? Illum quisquam accusamus animi possimus itaque eius libero. Impedit, doloribus ullam quia, eum expedita possimus deserunt totam quaerat dolorum commodi voluptatum natus eius minima vel eaque quo modi, perferendis fugiat quis illum accusantium? Facere nulla iste reiciendis vero est in accusantium vitae quisquam dicta dolorem quam delectus quasi deleniti doloremque id, quia excepturi quae nesciunt quos officia. Vitae dolorum totam optio architecto aliquam facilis, quod mollitia vel cum ad, repellendus cupiditate quasi sit est, unde vero voluptatibus. Laudantium fugiat a quia dignissimos optio, hic cum qui commodi sunt inventore nobis dolorum repudiandae magni alias aliquid nesciunt quos. Suscipit sunt ratione, laborum tenetur quaerat, praesentium ullam dolor libero unde dolore quis error. Aspernatur repudiandae nemo aut, natus ullam laborum quod magni omnis recusandae iusto.    \r\n', 'js', 'blog_post_1.jpg'),
(7, 'Cách sử dụng font-end hiểu quả nhất 2', '                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, necessitatibus eaque maiores accusantium, cumque laboriosam, non sint quis itaque enim quaerat veniam nulla. Nihil sed laboriosam excepturi obcaecati commodi culpa nam, numquam laborum quasi dicta cupiditate, itaque ex iusto accusantium harum illum magnam? Eius architecto tempore neque et officiis similique ab, vel ea nulla ipsam molestiae expedita aliquid cupiditate facere incidunt reprehenderit, quo libero aut perspiciatis necessitatibus dolor. Repellendus qui eveniet consectetur praesentium magni quam accusantium aspernatur? Illum quisquam accusamus animi possimus itaque eius libero. Impedit, doloribus ullam quia, eum expedita possimus deserunt totam quaerat dolorum commodi voluptatum natus eius minima vel eaque quo modi, perferendis fugiat quis illum accusantium? Facere nulla iste reiciendis vero est in accusantium vitae quisquam dicta dolorem quam delectus quasi deleniti doloremque id, quia excepturi quae nesciunt quos officia. Vitae dolorum totam optio architecto aliquam facilis, quod mollitia vel cum ad, repellendus cupiditate quasi sit est, unde vero voluptatibus. Laudantium fugiat a quia dignissimos optio, hic cum qui commodi sunt inventore nobis dolorum repudiandae magni alias aliquid nesciunt quos. Suscipit sunt ratione, laborum tenetur quaerat, praesentium ullam dolor libero unde dolore quis error. Aspernatur repudiandae nemo aut, natus ullam laborum quod magni omnis recusandae iusto.    \r\n', 'html', 'blog_post_1.jpg'),
(8, 'Cách sử dụng font-end hiểu quả nhất 3', '                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat expedita nostrum magnam, eligendi voluptas, culpa ducimus odio laboriosam qui rerum dicta voluptate temporibus mollitia totam natus minima assumenda, aut quasi blanditiis! Esse, id sed ipsam quibusdam, et quisquam quasi possimus saepe libero laboriosam minus nostrum repudiandae ex consequuntur cum. Corporis.       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, necessitatibus eaque maiores accusantium, cumque laboriosam, non sint quis itaque enim quaerat veniam nulla. Nihil sed laboriosam excepturi obcaecati commodi culpa nam, numquam laborum quasi dicta cupiditate, itaque ex iusto accusantium harum illum magnam? Eius architecto tempore neque et officiis similique ab, vel ea nulla ipsam molestiae expedita aliquid cupiditate facere incidunt reprehenderit, quo libero aut perspiciatis necessitatibus dolor. Repellendus qui eveniet consectetur praesentium magni quam accusantium aspernatur? Illum quisquam accusamus animi possimus itaque eius libero. Impedit, doloribus ullam quia, eum expedita possimus deserunt totam quaerat dolorum commodi voluptatum natus eius minima vel eaque quo modi, perferendis fugiat quis illum accusantium? Facere nulla iste reiciendis vero est in accusantium vitae quisquam dicta dolorem quam delectus quasi deleniti doloremque id, quia excepturi quae nesciunt quos officia. Vitae dolorum totam optio architecto aliquam facilis, quod mollitia vel cum ad, repellendus cupiditate quasi sit est, unde vero voluptatibus. Laudantium fugiat a quia dignissimos optio, hic cum qui commodi sunt inventore nobis dolorum repudiandae magni alias aliquid nesciunt quos. Suscipit sunt ratione, laborum tenetur quaerat, praesentium ullam dolor libero unde dolore quis error. Aspernatur repudiandae nemo aut, natus ullam laborum quod magni omnis recusandae iusto.    \r\n', 'html', 'blog_post_1.jpg'),
(9, 'Cách sử dụng font-end hiểu quả nhất 3', '                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat expedita nostrum magnam, eligendi voluptas, culpa ducimus odio laboriosam qui rerum dicta voluptate temporibus mollitia totam natus minima assumenda, aut quasi blanditiis! Esse, id sed ipsam quibusdam, et quisquam quasi possimus saepe libero laboriosam minus nostrum repudiandae ex consequuntur cum. Corporis.          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ducimus voluptatibus eaque voluptatem porro, amet perspiciatis facilis excepturi officiis asperiores! Quisquam quos voluptatibus, ipsa nihil fugit maxime nesciunt animi veritatis dolorem facilis voluptatem eum totam. Voluptatibus dolores nobis eum dolorem tempore facere obcaecati molestiae magnam eius quasi quas mollitia corporis commodi molestias voluptatum dolorum deserunt fuga a animi deleniti, enim delectus quam aliquid officiis! Ex, rerum nisi veritatis incidunt a vero minima quibusdam sit ducimus error architecto ullam quis hic distinctio, exercitationem facilis magni quae accusamus voluptatibus. Facere repellendus fuga dolorem, pariatur iure quidem omnis dicta atque possimus necessitatibus temporibus suscipit officiis aliquam, animi et unde aspernatur, aut autem magni repudiandae inventore mollitia. Modi, praesentium. Sit laboriosam ducimus suscipit praesentium corporis pariatur, odit voluptatum blanditiis id excepturi repudiandae officia nulla, ipsam harum est minima laudantium? Modi tempora corrupti odio ratione debitis distinctio numquam quaerat iusto. Cum molestiae maiores debitis suscipit vel esse odio, harum, eveniet at odit facilis reiciendis soluta ex, necessitatibus sequi! Maiores, nostrum id quos magnam laudantium natus molestiae porro! Ut mollitia reiciendis perferendis enim cumque reprehenderit sequi maiores veniam omnis incidunt distinctio, fuga veritatis voluptates doloremque et aspernatur, deserunt voluptatum officiis adipisci animi autem quia, doloribus dicta.\r\n', 'css', 'blog_post_1.jpg'),
(10, 'Cách sử dụng font-end hiểu quả nhất 3', '                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat expedita nostrum magnam, eligendi voluptas, culpa ducimus odio laboriosam qui rerum dicta voluptate temporibus mollitia totam natus minima assumenda, aut quasi blanditiis! Esse, id sed ipsam quibusdam, et quisquam quasi possimus saepe libero laboriosam minus nostrum repudiandae ex consequuntur cum. Corporis.       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, necessitatibus eaque maiores accusantium, cumque laboriosam, non sint quis itaque enim quaerat veniam nulla. Nihil sed laboriosam excepturi obcaecati commodi culpa nam, numquam laborum quasi dicta cupiditate, itaque ex iusto accusantium harum illum magnam? Eius architecto tempore neque et officiis similique ab, vel ea nulla ipsam molestiae expedita aliquid cupiditate facere incidunt reprehenderit, quo libero aut perspiciatis necessitatibus dolor. Repellendus qui eveniet consectetur praesentium magni quam accusantium aspernatur? Illum quisquam accusamus animi possimus itaque eius libero. Impedit, doloribus ullam quia, eum expedita possimus deserunt totam quaerat dolorum commodi voluptatum natus eius minima vel eaque quo modi, perferendis fugiat quis illum accusantium? Facere nulla iste reiciendis vero est in accusantium vitae quisquam dicta dolorem quam delectus quasi deleniti doloremque id, quia excepturi quae nesciunt quos officia. Vitae dolorum totam optio architecto aliquam facilis, quod mollitia vel cum ad, repellendus cupiditate quasi sit est, unde vero voluptatibus. Laudantium fugiat a quia dignissimos optio, hic cum qui commodi sunt inventore nobis dolorum repudiandae magni alias aliquid nesciunt quos. Suscipit sunt ratione, laborum tenetur quaerat, praesentium ullam dolor libero unde dolore quis error. Aspernatur repudiandae nemo aut, natus ullam laborum quod magni omnis recusandae iusto.    \r\n', 'css', 'blog_post_1.jpg'),
(11, 'Cách sử dụng font-end hiểu quả nhất 3', '                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat expedita nostrum magnam, eligendi voluptas, culpa ducimus odio laboriosam qui rerum dicta voluptate temporibus mollitia totam natus minima assumenda, aut quasi blanditiis! Esse, id sed ipsam quibusdam, et quisquam quasi possimus saepe libero laboriosam minus nostrum repudiandae ex consequuntur cum. Corporis.          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ducimus voluptatibus eaque voluptatem porro, amet perspiciatis facilis excepturi officiis asperiores! Quisquam quos voluptatibus, ipsa nihil fugit maxime nesciunt animi veritatis dolorem facilis voluptatem eum totam. Voluptatibus dolores nobis eum dolorem tempore facere obcaecati molestiae magnam eius quasi quas mollitia corporis commodi molestias voluptatum dolorum deserunt fuga a animi deleniti, enim delectus quam aliquid officiis! Ex, rerum nisi veritatis incidunt a vero minima quibusdam sit ducimus error architecto ullam quis hic distinctio, exercitationem facilis magni quae accusamus voluptatibus. Facere repellendus fuga dolorem, pariatur iure quidem omnis dicta atque possimus necessitatibus temporibus suscipit officiis aliquam, animi et unde aspernatur, aut autem magni repudiandae inventore mollitia. Modi, praesentium. Sit laboriosam ducimus suscipit praesentium corporis pariatur, odit voluptatum blanditiis id excepturi repudiandae officia nulla, ipsam harum est minima laudantium? Modi tempora corrupti odio ratione debitis distinctio numquam quaerat iusto. Cum molestiae maiores debitis suscipit vel esse odio, harum, eveniet at odit facilis reiciendis soluta ex, necessitatibus sequi! Maiores, nostrum id quos magnam laudantium natus molestiae porro! Ut mollitia reiciendis perferendis enim cumque reprehenderit sequi maiores veniam omnis incidunt distinctio, fuga veritatis voluptates doloremque et aspernatur, deserunt voluptatum officiis adipisci animi autem quia, doloribus dicta.\r\n', 'font-end', 'blog_post_1.jpg'),
(12, 'Cách sử dụng font-end hiểu quả nhất 4', '                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat expedita nostrum magnam, eligendi voluptas, culpa ducimus odio laboriosam qui rerum dicta voluptate temporibus mollitia totam natus minima assumenda, aut quasi blanditiis! Esse, id sed ipsam quibusdam, et quisquam quasi possimus saepe libero laboriosam minus nostrum repudiandae ex consequuntur cum. Corporis.       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, necessitatibus eaque maiores accusantium, cumque laboriosam, non sint quis itaque enim quaerat veniam nulla. Nihil sed laboriosam excepturi obcaecati commodi culpa nam, numquam laborum quasi dicta cupiditate, itaque ex iusto accusantium harum illum magnam? Eius architecto tempore neque et officiis similique ab, vel ea nulla ipsam molestiae expedita aliquid cupiditate facere incidunt reprehenderit, quo libero aut perspiciatis necessitatibus dolor. Repellendus qui eveniet consectetur praesentium magni quam accusantium aspernatur? Illum quisquam accusamus animi possimus itaque eius libero. Impedit, doloribus ullam quia, eum expedita possimus deserunt totam quaerat dolorum commodi voluptatum natus eius minima vel eaque quo modi, perferendis fugiat quis illum accusantium? Facere nulla iste reiciendis vero est in accusantium vitae quisquam dicta dolorem quam delectus quasi deleniti doloremque id, quia excepturi quae nesciunt quos officia. Vitae dolorum totam optio architecto aliquam facilis, quod mollitia vel cum ad, repellendus cupiditate quasi sit est, unde vero voluptatibus. Laudantium fugiat a quia dignissimos optio, hic cum qui commodi sunt inventore nobis dolorum repudiandae magni alias aliquid nesciunt quos. Suscipit sunt ratione, laborum tenetur quaerat, praesentium ullam dolor libero unde dolore quis error. Aspernatur repudiandae nemo aut, natus ullam laborum quod magni omnis recusandae iusto.    \r\n', 'css', 'blog_post_1.jpg'),
(13, 'Cách sử dụng font-end hiểu quả nhất 5', '                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat expedita nostrum magnam, eligendi voluptas, culpa ducimus odio laboriosam qui rerum dicta voluptate temporibus mollitia totam natus minima assumenda, aut quasi blanditiis! Esse, id sed ipsam quibusdam, et quisquam quasi possimus saepe libero laboriosam minus nostrum repudiandae ex consequuntur cum. Corporis.       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, necessitatibus eaque maiores accusantium, cumque laboriosam, non sint quis itaque enim quaerat veniam nulla. Nihil sed laboriosam excepturi obcaecati commodi culpa nam, numquam laborum quasi dicta cupiditate, itaque ex iusto accusantium harum illum magnam? Eius architecto tempore neque et officiis similique ab, vel ea nulla ipsam molestiae expedita aliquid cupiditate facere incidunt reprehenderit, quo libero aut perspiciatis necessitatibus dolor. Repellendus qui eveniet consectetur praesentium magni quam accusantium aspernatur? Illum quisquam accusamus animi possimus itaque eius libero. Impedit, doloribus ullam quia, eum expedita possimus deserunt totam quaerat dolorum commodi voluptatum natus eius minima vel eaque quo modi, perferendis fugiat quis illum accusantium? Facere nulla iste reiciendis vero est in accusantium vitae quisquam dicta dolorem quam delectus quasi deleniti doloremque id, quia excepturi quae nesciunt quos officia. Vitae dolorum totam optio architecto aliquam facilis, quod mollitia vel cum ad, repellendus cupiditate quasi sit est, unde vero voluptatibus. Laudantium fugiat a quia dignissimos optio, hic cum qui commodi sunt inventore nobis dolorum repudiandae magni alias aliquid nesciunt quos. Suscipit sunt ratione, laborum tenetur quaerat, praesentium ullam dolor libero unde dolore quis error. Aspernatur repudiandae nemo aut, natus ullam laborum quod magni omnis recusandae iusto.    \r\n', 'css', 'blog_post_1.jpg');

CREATE TABLE `support` (
  `support_id` int(11) NOT NULL,
  `support_name` varchar(255) NOT NULL,
  `support_content` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `tbl_admin`
--
CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_pw`) VALUES
(1, 'admin', '1');
--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_numbers` varchar(20) DEFAULT NULL,
  `user_address` varchar(300) DEFAULT NULL,
  `user_fullname` varchar(255) DEFAULT NULL,
  `user_avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`, `user_numbers`, `user_address`, `user_fullname`, `user_avatar`) VALUES
(2, 'huynhkha123', 'kha', 'kha123@gmail.com', '0987588952', 'Tây Ninh', 'Huỳnh Kha', NULL),
(3, 'namtran.09', 'namtrannhat0961', 'nam.tran09@hcmut.edu.vn', NULL, NULL, NULL, NULL),
(6, 'baokha', '202cb962ac59075b964b07152d234b70', '1234567@gm.edu.vn', NULL, NULL, NULL, NULL),
(7, 'quynhanhdangiu', '202cb962ac59075b964b07152d234b70', 'quynhanh@gmail.com', NULL, NULL, NULL, NULL),
(8, 'nam.tran09', '202cb962ac59075b964b07152d234b70', '123@gmail.com', NULL, NULL, NULL, NULL),
(9, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'admin@gmail.com', NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Chỉ mục cho bảng `course_summary`
--
ALTER TABLE `course_summary`
  ADD PRIMARY KEY (`summary_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Chỉ mục cho bảng `course_video`
--
ALTER TABLE `course_video`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Chỉ mục cho bảng `payment_bill`
--
ALTER TABLE `payment_bill`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `purchased_course`
--
ALTER TABLE `purchased_course`
  ADD PRIMARY KEY (`user_id`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Chỉ mục cho bảng `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`support_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`post_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `course_summary`
--
ALTER TABLE `course_summary`
  MODIFY `summary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `payment_bill`
--
ALTER TABLE `payment_bill`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `purchased_course`
--
ALTER TABLE `purchased_course`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `support`
--
ALTER TABLE `support`
  MODIFY `support_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--

ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_blog`
--

ALTER TABLE `tbl_blog`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `users`
--

ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `course_summary`
--
ALTER TABLE `course_summary`
  ADD CONSTRAINT `course_summary_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Các ràng buộc cho bảng `course_video`
--
ALTER TABLE `course_video`
  ADD CONSTRAINT `course_video_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Các ràng buộc cho bảng `purchased_course`
--
ALTER TABLE `purchased_course`
  ADD CONSTRAINT `purchased_course_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `purchased_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Các ràng buộc cho bảng `support`
--
ALTER TABLE `support`
  ADD CONSTRAINT `support_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
