-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 18, 2019 lúc 10:42 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bai4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `1` int(11) NOT NULL,
  `account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passad` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`1`, `account`, `passad`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuctin`
--

CREATE TABLE `danhmuctin` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuctin`
--

INSERT INTO `danhmuctin` (`id`, `tendanhmuc`) VALUES
(3, 'Variety Drinks'),
(2, 'Delicious Food');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datban`
--

CREATE TABLE `datban` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydatban` date NOT NULL,
  `giodatban` time NOT NULL,
  `songuoi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dessert`
--

CREATE TABLE `dessert` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `anhdessert` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `anhfood` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `food`
--

INSERT INTO `food` (`id`, `ten`, `gia`, `anhfood`) VALUES
(1, '123', 12312, 'http://localhost:83/nhahang1/uploads/food/Dessert6.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `homepageattr`
--

CREATE TABLE `homepageattr` (
  `id` int(11) NOT NULL,
  `tenthuoctinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatrithuoctinh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `homepageattr`
--

INSERT INTO `homepageattr` (`id`, `tenthuoctinh`, `giatrithuoctinh`) VALUES
(1, 'slides_topbanner', '[{\"slide_image\":\"http:\\/\\/localhost:83\\/nhahang1\\/uploads\\/1.jpg\"},{\"slide_image\":\"http:\\/\\/localhost:83\\/nhahang1\\/uploads\\/2.jpg\"},{\"slide_image\":\"http:\\/\\/localhost:83\\/nhahang1\\/uploads\\/slide02.jpg\"},{\"slide_image\":\"http:\\/\\/localhost:83\\/nhahang1\\/uploads\\/slide03.jpg\"},{\"slide_image\":\"http:\\/\\/localhost:83\\/nhahang1\\/uploads\\/01.jpg\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `anhpizza` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pizza`
--

INSERT INTO `pizza` (`id`, `ten`, `gia`, `anhpizza`) VALUES
(1, 'đưa111aa5da56wd', 84668500000, 'http://localhost:83/nhahang1/uploads/pizza/d1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iddanhmuc` int(11) NOT NULL,
  `anhtin` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `iddanhmuc`, `anhtin`, `noidung`) VALUES
(3, 'CÀ RI MASSAMAN, THÁI LAN', 2, 'http://localhost:83/nhahang1/uploads/news/feat1.jpg', '			Nguyên liệu chính của món ăn này bao gồm thịt gà, ớt cay, tỏi, cà chua, ớt chuông, muối và bơ,.Món ăn này thường cũng có đậu phộng, nước dừa, hạt đều rán, khoai tây, lá nguyệt quế, nước nắm me… Là một món ăn Hồi Giáo vô cùng phổ biến ở miền Nam Thái Lan, món ăn này thường được ăn kèm với cơm và gừng muối được làm từ dưa leo và ớt ngâm giấm. Tên gọi của món ăn này cũng là một biến thể của từ Đạo Hồi trong tiếng Anh.					'),
(4, 'PIZZA NAPOLI, Ý', 2, 'http://localhost:83/nhahang1/uploads/news/feat2.jpg', '				Pizza luôn được xem là niềm tự hào của ẩm thực Ý, đặc biệt là ở vùng Napoli. Nguyên liệu để làm bánh pizza thường là cà chua, pho mát, rau củ và các loại thịt. Các đầu bếp làm bánh ở Ý thường có kỹ thuật làm bánh cao, họ có thể tạo ra những chiếc bánh thơm ngon, đế bánh giòn, và chiếc bánh có hình thức vô cùng đẹp mắt.				'),
(5, 'SÔ CÔ LA, MEXICO', 2, 'http://localhost:83/nhahang1/uploads/news/feat3.jpg', 'Sô cô la Mexico được xem là một trong những loại sô cô la ngon nhất thế giới, tại đây, có khoảng hơn 70 công ty chế biến và phân phối sô cô la, đặc điểm dễ nhận biết của sô cô la Mexico chính là hình dáng của chúng thường là hình đĩa. Người Mexico thường cho thêm hương vị như bột quế và ớt vào sô cô la để tăng thêm hương vị, tuy nhiên họ lại chỉ thích dùng sô cô la để pha thêm vào đồ uống của mình.'),
(6, 'SUSHI, NHẬT BẢN', 2, 'http://localhost:83/nhahang1/uploads/news/feat4.jpg', '				Người Nhật từ xưa đến nay vốn nổi tiếng là những con người cẩn thận, tỉ mỉ và có tính kiên trì, kỉ luật cao. Điều này không chỉ thể hiện ở những thành công về lĩnh vực kinh tế của quốc gia nghèo nàn về tài nguyên này, mà còn được thể hiện ở văn hóa ẩm thực, cách chế biến và trình bày món ăn của người Nhật. Một trong những món ăn nổi tiếng của người Nhật không thể không kể đến chính là sushi. Sushi có rất nhiều thành phần và cách thức chế biến, tuy nhiên, nguyên liệu chính để tạo nên món ăn này vẫn là cơm trộn giấm kết hợp với những loại thức ăn sống khác như cá sống, trứng cá, hải sản tươi sống, rau củ, wasabi…Chữ “su” trong từ sushi có nghĩa là giấm và “meshi” có nghĩa là gạo, vậy nên thành phần cơ bản của món ăn này chính là cơm Nhật trộn với giấm. Món ăn là nét đặc trưng cho tinh hoa văn hóa Nhật Bản, của nền nông nghiệp đánh bắt thủy sản khi món ăn được cho là bắt nguồn từ phương pháp bảo quản hải sản tươi sống của người Nhật cổ xưa.			'),
(7, 'VỊT QUAY BẮC KINH, TRUNG QUỐC', 2, 'http://localhost:83/nhahang1/uploads/news/feat5.jpg', '			Có lẽ không cần phải giới thiệu gì nhiều vì món ăn này vốn dĩ đã trở nên quá nổi tiếng đối với những ai yêu thích ẩm thực, trở thành một trong những món ăn đại diện của ngành ẩm thực Trung Quốc. Vịt quay Bắc Kinh được chế biến từ những con gà Bắc Kinh thơm ngon, sau khi chế biến chúng thường có màu vàng sậm bắt mắt, da vịt mỏng, giòn, hương vị thịt bên trong thì thơm lừng, mềm và ngọt. Thông thường, các con vịt quay Bắc Kinh sẽ được quay trong lò lửa lớn rồi dùng da và thịt để phục vụ khách, riêng phần xương sẽ được dùng để hầm nấu món súp.				'),
(8, 'HAMBURGER, ĐỨC', 2, 'http://localhost:83/nhahang1/uploads/news/feat6.jpg', '			Cái tên Hamburger có nguồn gốc từ một thành phố của Đức, thành phố Hamburg. Món bánh hamburger ở đây đặc biệt vì giữa hai lớp bánh chính là miếng thịt xay còn gọi là “thịt nướng Hamburg” dùng kèm với cà chua, salad và nước sốt kèm theo. Món ăn này sau đó được Billy Ingram và Walter Anderson mở rộng và phát triển, thậm chí, đây còn là món ăn được phục vụ phổ biến trong quân đội trossng giai đoạn thế chiến thứ 2 và trở thành một trong những món ăn nhanh được yêu thích nhất trên thế giới ngày nay.				'),
(9, 'Nước lọc tinh khiết', 3, 'http://localhost:83/nhahang1/uploads/news/nuoc1.jpg', '			Điểm chung giữa việc rửa xe và việc không đi ra ngoài vào ngày mưa chỉ để ngồi nhà xem phim là gì? Đó chính là nước. Không chỉ là thành phần chủ chốt cho tất cả các loại đồ uống kể trên, nước còn là nguồn sống của mọi thứ trên trái đất này. Không có bất cứ thứ đồ uống nào có thể đánh bại được nước lọc về tiêu chí giải khát, thanh lọc cơ thể. Thậm chí đã có nhiều loại nước đóng chai với nhãn dán ngộ nghĩnh nhưng đi kèm với đó là một cái giá cắt cổ. Điều tuyệt vời nhất về nước lọc là ở chỗ, bạn luôn luôn có thể pha chế thêm đồ giải khát vào những ngày nắng nóng, bất cứ khi nào mà bạn muốn. Đơn giản, chỉ cần thêm chút nước đá lạnh vào là xong.					'),
(10, 'Coca-Cola', 3, 'http://localhost:83/nhahang1/uploads/news/nuoc2.jpg', '				Được sáng chế bởi một dược sĩ vào năm 1886 với mục đích ban đầu là nhằm chữa trị căn bệnh nhức đầu, thức uống được coi là đồ giải khát được ưa chuộng số một thế giới này không khác gì giấc mơ Mỹ được đóng gói vỏn vẹn trong 1 cái lon. Từ chỗ chưa có gì cho đến năm 2008, ước tính trung bình mỗi người trên thế giới tiêu thụ khoảng 85 lon Coca-Cola một năm - nhiều hơn bất cứ loại đồ uống có ga nào khác. Tuy được ra đời với nhiều phiên bản khác nhau nhằm tiếp cận nhiều đối tượng khách hàng, như Diet, Cherry, Lemon và Zero, nhưng hương vị Coca-Cola chính gốc \"tê buốt tận óc\" với những bọt khí sủi tăm cùng với cảm giác mát lạnh xuyên qua khoang mũi mới chính là điều khiến người ta cảm thấy thích thú.				'),
(11, 'Cà phê (Ethiopia)', 3, 'http://localhost:83/nhahang1/uploads/news/nuoc3.jpg', '			Được phát hiện lần đầu tiên ở Ethiopia, không phải vô cớ khi cà phê đã từng được coi là một thứ hàng hóa trao đổi khi việc giao thương bắt đầu nở rộ. Với rất nhiều biến thể khác nhau, từ latte, cappuccino, mocha cho đến cà phê kiểu Mỹ, bạn luôn có cho mình 1 sự lựa chọn tuyệt vời để đánh bại cơn buồn ngủ buổi sáng, cũng như chuẩn bị cho một ngày làm việc mới đầy hiệu quả.'),
(12, 'Bia', 3, 'http://localhost:83/nhahang1/uploads/news/nuoc4.jpg', '		Lẽ dĩ nhiên, việc phát minh ra bánh xe và sau đó là con chip vi tính đóng một vai trò quan trọng trong lịch sử nhân loại. Nhưng điều đó cũng đúng với pizza và bia nữa. Người đầu tiên dám thử sức với bia lên men có lẽ là người vô cùng dũng cảm, nhưng nếu như không có anh ta, chúng ta sẽ không bao giờ biết đến thức uống sáng lấp lánh này. Giống như cách mà nhân vật hoạt hình Homer Simpson đã từng nói, nguồn gốc tội lỗi và đồng thời là cứu tinh cho cuộc sống này chính là những chai bia đến từ thương hiệu Weihenstephaner Vitus và Santa\'s Butt Porter.						'),
(13, 'Trà', 3, 'http://localhost:83/nhahang1/uploads/news/nuoc5.jpg', '					Trà có lẽ là thức uống hiện diện ở bất cứ đâu, bất kể tôn giáo hay nền văn hóa. Nếu như ở Tây Tạng, trà bơ được dùng phổ biến nhằm giữ ấm thân nhiệt cũng như tránh môi bị khô nứt nẻ thì người dân Ấn Độ lại chuộng loại trà đường phố được pha trộn thêm nhiều đường, giúp họ thư giãn trước cái ồn ã nơi đô thị. Ở Nhật Bản, văn hóa trà đạo đã trở thành bản sắc. Còn ở Anh Quốc, quê hương của trà, vai trò của thức uống này lại càng trở nên độc tôn hơn.			');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`1`);

--
-- Chỉ mục cho bảng `danhmuctin`
--
ALTER TABLE `danhmuctin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `datban`
--
ALTER TABLE `datban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `homepageattr`
--
ALTER TABLE `homepageattr`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `danhmuctin`
--
ALTER TABLE `danhmuctin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `datban`
--
ALTER TABLE `datban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dessert`
--
ALTER TABLE `dessert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `homepageattr`
--
ALTER TABLE `homepageattr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
