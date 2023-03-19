-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2022 at 05:22 PM
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
-- Database: `quanlynhahang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `ID` int(10) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`ID`, `username`, `password`, `email`, `phone`, `address`) VALUES
(1, 'admin', 'admin', 'namvp.21it@vku.udn.vn', '0867077565', ''),
(2, 'nam', 'nam', 'vunam13069@gmail.com', '0888888888', 'ha noi'),
(3, 'nam136', '123', 'vunam13062003@gmail.com', '0123456789', 'da nang'),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, '', '', '', '', ''),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', ''),
(16, '', '', '', '', ''),
(17, '', '', '', '', ''),
(18, '', '', '', '', ''),
(19, '', '', '', '', ''),
(20, '', '', '', '', ''),
(21, '', '', '', '', ''),
(22, '', '', '', '', ''),
(23, '', '', '', '', ''),
(24, '', '', '', '', ''),
(25, '', '', '', '', ''),
(26, '', '', '', '', ''),
(27, '', '', '', '', ''),
(28, '', '', '', '', ''),
(29, '', '', '', '', ''),
(30, '', '', '', '', ''),
(31, '', '', '', '', ''),
(32, '', '', '', '', ''),
(33, '', '', '', '', ''),
(34, '', '', '', '', ''),
(35, '', '', '', '', ''),
(36, '', '', '', '', ''),
(37, '', '', '', '', ''),
(38, '', '', '', '', ''),
(39, '', '', '', '', ''),
(40, '', '', '', '', ''),
(41, '', '', '', '', ''),
(42, '', '', '', '', ''),
(43, '', '', '', '', ''),
(44, '', '', '', '', ''),
(45, '', '', '', '', ''),
(46, '', '', '', '', ''),
(47, '', '', '', '', ''),
(48, '', '', '', '', ''),
(49, '', '', '', '', ''),
(50, '', '', '', '', ''),
(51, '', '', '', '', ''),
(52, '', '', '', '', ''),
(53, '', '', '', '', ''),
(54, '', '', '', '', ''),
(55, '', '', '', '', ''),
(56, '', '', '', '', ''),
(57, '', '', '', '', ''),
(58, '', '', '', '', ''),
(59, '', '', '', '', ''),
(60, '', '', '', '', ''),
(61, '', '', '', '', ''),
(62, '', '', '', '', ''),
(63, '', '', '', '', ''),
(64, '', '', '', '', ''),
(65, '', '', '', '', ''),
(66, '', '', '', '', ''),
(67, '', '', '', '', ''),
(68, '', '', '', '', ''),
(69, '', '', '', '', ''),
(70, '', '', '', '', ''),
(71, '', '', '', '', ''),
(72, '', '', '', '', ''),
(73, '', '', '', '', ''),
(74, '', '', '', '', ''),
(75, '', '', '', '', ''),
(76, '', '', '', '', ''),
(77, '', '', '', '', ''),
(78, '', '', '', '', ''),
(79, '', '', '', '', ''),
(80, '', '', '', '', ''),
(81, '', '', '', '', ''),
(82, '', '', '', '', ''),
(83, '', '', '', '', ''),
(84, '', '', '', '', ''),
(85, '', '', '', '', ''),
(86, '', '', '', '', ''),
(87, '', '', '', '', ''),
(88, '', '', '', '', ''),
(89, '', '', '', '', ''),
(90, '', '', '', '', ''),
(91, '', '', '', '', ''),
(92, '', '', '', '', ''),
(93, '', '', '', '', ''),
(94, '', '', '', '', ''),
(95, '', '', '', '', ''),
(96, '', '', '', '', ''),
(97, '', '', '', '', ''),
(98, '', '', '', '', ''),
(99, '', '', '', '', ''),
(100, '', '', '', '', ''),
(101, '', '', '', '', ''),
(102, '', '', '', '', ''),
(103, '', '', '', '', ''),
(104, '', '', '', '', ''),
(105, '', '', '', '', ''),
(106, '', '', '', '', ''),
(107, '', '', '', '', ''),
(108, '', '', '', '', ''),
(109, '', '', '', '', ''),
(110, '', '', '', '', ''),
(111, '', '', '', '', ''),
(112, '', '', '', '', ''),
(113, '', '', '', '', ''),
(114, '', '', '', '', ''),
(115, '', '', '', '', ''),
(116, '', '', '', '', ''),
(117, '', '', '', '', ''),
(118, '', '', '', '', ''),
(119, '', '', '', '', ''),
(120, '', '', '', '', ''),
(121, '', '', '', '', ''),
(122, '', '', '', '', ''),
(123, '', '', '', '', ''),
(124, '', '', '', '', ''),
(125, '', '', '', '', ''),
(126, '', '', '', '', ''),
(127, '', '', '', '', ''),
(128, '', '', '', '', ''),
(129, '', '', '', '', ''),
(130, '', '', '', '', ''),
(131, 'giangcho', 'giangcho', 'giangcho@gmail.com', '0123344999', 'dak nong'),
(144, 'vunam1306', 'abc', 'vunam13062003@gmail.com', '0888888888', 'ha noi ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartid` int(25) NOT NULL,
  `sessionid` varchar(225) NOT NULL,
  `productid` int(25) NOT NULL,
  `productname` varchar(225) NOT NULL,
  `price` int(25) NOT NULL,
  `quantity` int(25) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartid`, `sessionid`, `productid`, `productname`, `price`, `quantity`, `image`) VALUES
(50, '2fod69u6p615srjbmtf447v552', 12, 'Com ga', 40, 1, 'comga.jpg'),
(51, 'snbl4p78lcf1hsgndp182due6g', 10, 'Com rang', 35, 3, 'comrang.jpg'),
(54, 'snbl4p78lcf1hsgndp182due6g', 11, 'Bibimbap', 40, 2, 'comtronhanquoc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(25) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `phone`, `address`) VALUES
(1, 'Nam', '0867077565', 'Đường abc - Đà Nẵng'),
(2, 'Nguyen van a', '0123456789', '470 Trần Đại Nghĩa - Đà Nẵng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `orderid` int(25) NOT NULL,
  `productid` int(25) NOT NULL,
  `ID` int(25) NOT NULL,
  `productname` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `quantity` int(25) NOT NULL,
  `price` int(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `orderdate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`orderid`, `productid`, `ID`, `productname`, `username`, `quantity`, `price`, `phone`, `email`, `address`, `image`, `status`, `orderdate`) VALUES
(16, 12, 2, 'Com ga', 'nam', 1, 40, '0888888888', 'vunam13069@gmail.com', 'ha noi', 'comga.jpg', '', '2022-11-30 12:48:46.462822'),
(17, 10, 2, 'Com rang', 'nam', 3, 105, '0888888888', 'vunam13069@gmail.com', 'ha noi', 'comrang.jpg', '', '2022-12-01 23:12:41.329764'),
(18, 11, 2, 'Bibimbap', 'nam', 2, 80, '0888888888', 'vunam13069@gmail.com', 'ha noi', 'comtronhanquoc.jpg', '', '2022-12-01 23:12:41.332090');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productid` int(25) NOT NULL,
  `type` varchar(225) NOT NULL,
  `productname` varchar(225) NOT NULL,
  `price` int(25) NOT NULL,
  `image` varchar(225) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productid`, `type`, `productname`, `price`, `image`, `description`) VALUES
(1, 'breakfast', 'Pho', 35, 'pho.jpg', 'Nước dùng cho nồi phở thường là nước dùng trong được ninh từ xương bò (hoặc xương lợn), kèm theo nhiều loại gia vị bao gồm quế, hồi, gừng nướng, thảo quả, sá sùng, đinh hương, hạt mùi, hành khô nướng. Thịt dùng cho món phở là thịt bò (với đủ loại thịt bắp, nạm, gầu được làm tái, hay chín hẳn) hoặc thịt gà (gà ta già luộc, xé thịt cho thịt ngọt đậm đà). \"Bánh phở\" theo truyền thống được làm từ bột gạo, tráng thành tấm mỏng rồi cắt thành sợi. Phở luôn được thưởng thức khi còn nóng hổi. Theo đó, để có một bát phở ngon và đậm vị, điều này còn phụ thuộc rất nhiều vào kĩ năng của người nấu, trong đó quan trọng nhất đó chính là nồi nước dùng.'),
(2, 'breakfast', 'Banh xeo', 10, 'banhxeo.jpg', 'Bánh xèo là một loại bánh phổ biến ở châu Á, phiên bản bánh xèo của Nhật Bản và Triều Tiên có bột bên ngoài, bên trong có nhân là tôm, thịt, giá đỗ, kim chi, khoai tây, hẹ, (bánh xèo Triều Tiên); tôm, thịt, cải thảo (Nhật Bản) được rán màu vàng, đúc thành hình tròn hoặc gấp lại thành hình bán nguyệt. Tuỳ theo từng địa phương tại Việt Nam mà bánh được thưởng thức với nét đặc trưng riêng. Thường có 2 phương pháp chính: đổ bánh xèo giòn và bánh xèo dai. Ăn bằng hai cách: ăn bốc hoặc ăn bằng đũa.'),
(3, 'breakfast', 'Xoi', 20, 'xoi.jpg', 'Nguyên liệu chính để làm xôi thông thường là các loại gạo nếp, và đôi khi là các loại gạo tẻ thơm dẻo. Ngoại trừ xôi trắng thường chỉ có gạo nếp với một chút muối ăn cho thành phẩm là những hạt xôi dẻo màu trắng ngà, đa số các loại xôi khác đều có kết hợp với các chất tạo màu, tạo vị như lá cẩm (màu tím), lá dứa hay lá riềng (màu xanh), gấc (màu đỏ), bột dành dành hay bột nghệ (màu vàng). Một số dân tộc (như dân tộc Tày, Người Nùng, dân tộc Mường) sử dụng nhiều loại nước sắc từ lá, củ, rễ thực vật các loại để tạo nên xôi nhiều màu sắc[1]. Các nguyên liệu kết hợp khác như các loại hạt đỗ xanh, đỗ đen, lạc, hạt dưa, hạt sen, hạt điều, ngô,cơm dừa; các loại thực phẩm nguồn gốc động vật như thịt, cá; các loại hoa quả như xoài, sầu riêng v.v. được sử dụng tạo nên nhiều dạng xôi. Các thực phẩm ăn kèm như ruốc, muối vừng, pa tê, xúc xích, thịt quay, xá xíu, thịt hun khói, thịt gà, trứng, giò lụa, giò bò, chả, lạp xưởng cũng cho món xôi những hương vị và chất lượng riêng biệt.'),
(4, 'breakfast', 'Bun cha', 30, 'buncha.jpg', 'Bún chả là một món ăn của Việt Nam, bao gồm bún, chả thịt lợn nướng trên than hoa và bát nước mắm chua cay mặn ngọt. Món ăn xuất xứ từ miền Bắc Việt Nam, là thứ quà có sức sống lâu bền nhất của Hà Nội,nên có thể coi đây là một trong những đặc sản đặc trưng của ẩm thực Hà thành. Bún chả có nét tương tự món bún thịt nướng ở miền Trung và miền Nam, nhưng nước mắm pha có vị thanh nhẹ hơn.'),
(5, 'breakfast', 'Banh mi', 20, 'banhmi.jpg', 'Bánh mì Việt Nam (gọi tắt là bánh mì) là một món ăn Việt Nam, với lớp vỏ ngoài là một ổ bánh mì nướng có da giòn, ruột mềm, còn bên trong là phần nhân. Tùy theo văn hóa vùng miền hoặc sở thích cá nhân, người ta có thể chọn nhiều nhân bánh mì khác nhau. Tuy nhiên, loại nhân bánh truyền thống thường chứa chả lụa, thịt, cá, thực phẩm chay hoặc mứt trái cây, kèm theo một số nguyên liệu phụ khác như patê, bơ, rau, ớt và đồ chua. Bánh mì được xem như một loại thức ăn nhanh bình dân và thường được tiêu thụ trong bữa sáng hoặc bất kỳ bữa phụ nào trong ngày. Do có giá thành phù hợp nên bánh mì trở thành món ăn được rất nhiều người ưa chuộng.'),
(6, 'breakfast', 'Banh cuon', 35, 'banhcuon.jpg', 'Bánh cuốn còn gọi là bánh mướt hay bánh ướt (khi không có nhân) là tên gọi một loại thực phẩm làm từ bột gạo hấp tráng mỏng, cuộn tròn, bên trong độn nhân rau hoặc thịt.'),
(7, 'breakfast', 'My quang', 30, 'myquang.jpg', 'Mỳ Quảng là một món ăn đặc sản đặc trưng của Quảng Nam và Đà Nẵng, Việt Nam.\r\n\r\nMỳ Quảng thường được làm từ bột gạo xay mịn với nước từ hạt dành dành và trứng cho có màu vàng và tráng thành từng lớp bánh mỏng, sau đó thái theo chiều ngang để có những sợi mỳ mỏng khoảng 5 -10mm.\r\n\r\nDưới lớp mỳ là các loại rau sống, Mỳ Quảng phải ăn kèm với rau sống 9 vị thì mới tạo nên được hương vị nồng nàn: húng quế, xà lách tươi, cải non mới nụ, giá trắng có thể được trụng chín hoặc để sống, ngò rí, rau răm với hành hoa thái nhỏ và thêm hoa chuối cắt mỏng.\r\n\r\nTrên mỳ là thịt lợn, tôm, thịt gà, thịt ếch, thịt cá lóc (đôi khi có trứng luộc) cùng với nước dùng được hầm từ xương heo. Người ta còn bỏ thêm lạc rang khô và giã dập, hành lá thái nhỏ, rau thơm, ớt đỏ... Thông thường nước dùng được gọi là nước nhưng đây cũng là một loại nước lèo nhưng rất cô đặc và ít nước.\r\n\r\nNgoài ra mỳ còn được dùng kèm với bánh tráng mè, thêm cả đậu phộng rang giòn thơm tạo nên hương vị đặc trưng.'),
(8, 'breakfast', 'Bun bo Hue', 35, 'bunbohue.jpg', 'Trong nước dùng của bún, người Huế thường nêm vào một ít mắm ruốc, góp phần làm nên hương vị rất riêng của nồi bún bò Huế. Sau khi xương bò được hầm chín tới, người ta thường thêm vào một ít chả heo hay chả cua được quết nhuyễn. Thịt bò có thể được cắt mỏng, nhúng vào nước dùng đang sôi trước khi cho vào tô bún (gọi là thịt bò tái). Người ta cũng thường cho thêm một ít ớt bột và gia vị vào tô bún rồi ăn với rau sống gồm giá, rau thơm, xà lách, rau cải con, bắp chuối cắt nhỏ.'),
(9, 'lunch', 'Com tam', 35, 'comtam.jpg', 'Một dĩa Cơm tấm thường được phục vụ kèm với một chén nước mắm và một chén canh, trên cùng dĩa ăn sẽ là một miếng sườn nướng và xung quanh là các món ăn mặn kèm khác cùng với mỡ hành được rưới lên trên cùng.\r\n\r\nCơm tấm khi phục vụ sẽ được bày trên dĩa hoặc hộp nếu mua về. Để xúc thức ăn thì dùng muỗng và nĩa, tuy nhiên chỉ có người miền Nam mới thường dùng, còn người miền Trung và miền Bắc không quen dùng nĩa, vì vậy các tiệm cơm phục vụ ở địa phương sẽ thường có thêm đũa để dễ sử dụng.'),
(10, 'lunch', 'Com rang', 35, 'comrang.jpg', 'Cơm chiên hay cơm rang là một món cơm nấu đã được chế biến trong chảo hoặc chảo rán và thường được trộn với các thành phần khác như trứng, rau, hải sản hoặc thịt. Nó thường được ăn riêng lẻ hoặc như một món ăn kèm cho món ăn khác. Cơm chiên là một thành phần phổ biến của các món ăn Đông Á, Đông Nam Á và một số món ăn Nam Á. Cơm chiên thường được làm với các thành phần còn sót lại từ các món ăn khác, dẫn đến có rất nhiều biến tấu. Cơm chiên được phát triển đầu tiên vào thời nhà Tuỳ ở Trung Quốc và như vậy tất cả các món cơm chiên có thể truy nguyên nguồn gốc của chúng đối với cơm chiên Trung Quốc.'),
(11, 'lunch', 'Bibimbap', 40, 'comtronhanquoc.jpg', 'Bibimbap( / ˈ b iː b ɪ m b æ p / BEE -bim-bap , từ tiếng Hàn 비빔밥 [pi.bim.p͈ap̚] , nghĩa đen là \"cơm trộn\"), đôi khi được La Mã hóa là bi bim bap hoặc bim bim bop , là một món cơm của Hàn Quốc. Thuật ngữ \"bibim\" có nghĩa là \"trộn\" và \" bap \" là cơm nấu chín . Bibimbap được phục vụ như một bát cơm trắng ấm với namul (rau xào và gia vị) hoặc kim chi (rau lên men truyền thống) và gochujang ( tương ớt ), nước tương hoặc doenjang (tương đậu nành lên men). Một quả trứng sống hoặc chiên và thịt thái lát.'),
(12, 'lunch', 'Com ga', 40, 'comga.jpg', 'Cơm gà là món ăn được chế biến và trình bày với hình thức cơm và thịt gà. Cơm có thể dùng là cơm trắng hoặc cơm chiên, cơm rang và thịt gà được trình bày thông thường là đùi gà hay cánh gà. Món cơm gà tương đối dễ làm và phổ biến. Nhưng tùy theo từng quốc gia và tập tục địa phương mà có những phương cách thực hiện khác nhau.'),
(13, 'lunch', 'Pizza Italy', 150, 'pizza.jpg', 'Pizza (phát âm tiếng Ý: [ˈpittsa], tiếng Anh: /ˈpiːtsə/ ),Tiếng La tinh thường đọc là Pi-da /pi˧ zaː˧/, là loại bánh dẹt,tròn được chế biến từ bột mì,nấm men... sau khi đã được ủ bột để nghỉ ít nhất 24 tiếng đồng hồ và nhào nặn thành loại bánh có hình dạng tròn và dẹt,và được cho vào lò nướng chín trước khi ăn'),
(14, 'lunch', 'Sushi', 200, 'shushi.jpg', 'Sushi (寿司 (壽司) (Thọ ti)/ すし/ スシ Sushi?) là một món ăn Nhật Bản gồm cơm trộn giấm (shari) kết hợp với các nguyên liệu khác (neta). Neta và hình thức trình bày sushi rất đa dạng, nhưng nguyên liệu chính mà tất cả các loại sushi đều có là shari. Neta phổ biến nhất là hải sản. Thịt sống cắt lát gọi riêng là sashimi.'),
(15, 'lunch', 'Paella', 250, 'comthapcam.jpg', 'Paella là một món cơm thập cẩm, rất đặc trưng của Tây Ban Nha và các nước có sử dụng tiếng Tây Ban Nha. Món ăn kiểu như ngày nay có từ giữa thế kỷ 19 gần hồ Albufera, một đầm phá tại Valencia, trên các bờ biển phía đông của Tây Ban Nha. Nhiều người không phải dân Tây Ban Nha xem paella là món ăn dân tộc của Tây Ban Nha, nhưng hầu hết người Tây Ban Nha coi nó là một món ăn của khu vực Valencia. Người Valencia là coi paella là một trong những biểu tượng xác định của họ. Có ba biến thể loại được biết đến rộng rãi của món paella: paella Valencia (tiếng Tây Ban Nha: Paella valenciana), paella hải sản (tiếng Tây Ban Nha: paella de marisco) và paella hỗn hợp (tiếng Tây Ban Nha: paella mixta), nhưng có nhiều biến thể khác nữa. Paella Valencia bao gồm gạo trắng, rau xanh, thịt (thỏ, gà, vịt), ốc sên đất, đậu và gia vị. Hải sản paella thay thế thịt và ốc sên với hải sản và không có đậu và rau xanh.Paella hỗn hợp là sự kết hợp theo phong cách tự do gồm có hải sản, thịt, rau, và đôi khi đậu. Hầu hết các đầu bếp paella sử dụng calasparra hoặc bomba, gạo cho món ăn này. Các thành phần quan trọng khác bao gồm nghệ tây và dầu ô liu.'),
(16, 'lunch', 'Kebab', 150, 'kebab.jpg', 'Thịt nướng bao gồm thịt cắt nhỏ hoặc thịt xay , đôi khi có rau và nhiều món ăn kèm khác theo công thức cụ thể. Mặc dù thịt nướng thường được nướng trên xiên trên lửa, nhưng một số món kebab được nướng bằng lò trong chảo hoặc được chế biến dưới dạng món hầm chẳng hạn như tas kebab .Thịt truyền thống cho kebab thường là thịt cừu , nhưng công thức nấu ăn của vùng có thể bao gồm thịt bò , dê , gà , cá hoặc thậm chí cả thịt lợn (tùy thuộc vào việc có cấm tôn giáo cụ thể hay không ).'),
(17, 'dinner', 'Beefsteak', 200, 'bittet.jpg', 'Bít tết (bắt nguồn từ từ tiếng Pháp bifteck /biftɛk/[1] trong tiếng Anh cũng thường được gọi ngắn gọn là steak), là một món ăn bao gồm miếng thịt bò lát phẳng, thường được nướng vỉ, áp chảo hoặc nướng broiling ở nhiệt độ cao. Những miếng thịt mềm hơn được cắt ra từ phần thăn và sườn được làm chín nhanh chóng, sử dụng nhiệt khô và phục vụ toàn bộ.'),
(18, 'dinner', 'Hotpot', 999, 'lau.jpg', 'Lẩu (có nguồn gốc từ giọng Quảng Đông: 爐, âm Hán Việt: lô, nghĩa là \"bếp lò\"), còn gọi là cù lao, là một loại món ăn phổ biến xuất phát từ Mông Cổ, nhưng ngày nay được các nước Đông Á ưa thích. Một nồi lẩu bao gồm một bếp (ga, than hay điện) đang đỏ lửa và nồi nước dùng đang sôi. Các thức ăn sống hoặc chín được để xung quanh và người ăn gắp đồ ăn bỏ vào nồi nước dùng, đợi chín tới và ăn nóng. Thông thường đồ ăn dùng làm món lẩu là: thịt, cá, lươn, rau, nấm, hải sản... Ở nhiều nơi, món lẩu thường được ăn vào mùa đông nhằm mục đích giữ thức ăn nóng sốt.'),
(19, 'dinner', 'Pizza Italy', 150, 'pizza.jpg', 'Pizza (phát âm tiếng Ý: [ˈpittsa], tiếng Anh: /ˈpiːtsə/ ),Tiếng La tinh thường đọc là Pi-da /pi˧ zaː˧/, là loại bánh dẹt,tròn được chế biến từ bột mì,nấm men... sau khi đã được ủ bột để nghỉ ít nhất 24 tiếng đồng hồ và nhào nặn thành loại bánh có hình dạng tròn và dẹt,và được cho vào lò nướng chín trước khi ăn'),
(20, 'dinner', 'Paella', 250, 'comthapcam.jpg', 'Paella valenciana là món cơm thập cẩm truyền thống của vùng Valencia , được cho là công thức ban đầu,và bao gồm gạo hạt tròn,bajoqueta và tavella (các loại đậu xanh ), thỏ, gà, đôi khi là vịt, và garrofó (nhiều loại đậu lima hoặc bơ ), nấu trong dầu ô liu và nước luộc gà. Món ăn đôi khi được thêm gia vị bằng cảcành hương thảo . Theo truyền thống, màu vàng đến từ nghệ tây , nhưng nghệ và cúc kim chẩn thảo có thể được sử dụng làm chất thay thế.Tim và thân cây atisô có thể được sử dụng làm nguyên l'),
(21, 'dinner', 'Kebab', 150, 'kebab.jpg', 'Thịt nướng bao gồm thịt cắt nhỏ hoặc thịt xay , đôi khi có rau và nhiều món ăn kèm khác theo công thức cụ thể. Mặc dù thịt nướng thường được nướng trên xiên trên lửa, nhưng một số món kebab được nướng bằng lò trong chảo hoặc được chế biến dưới dạng món hầm chẳng hạn như tas kebab .Thịt truyền thống cho kebab thường là thịt cừu , nhưng công thức nấu ăn của vùng có thể bao gồm thịt bò , dê , gà , cá hoặc thậm chí cả thịt lợn (tùy thuộc vào việc có cấm tôn giáo cụ thể hay không ).'),
(22, 'dinner', 'Pho', 35, 'pho.jpg', 'Thành phần chính của phở là bánh phở và nước dùng cùng với thịt bò hoặc thịt gà cắt lát mỏng. Thịt bò thích hợp nhất để nấu phở là thịt, xương từ các giống bò ta (bò nội, bò vàng). Ngoài ra còn kèm theo các gia vị như: tương, tiêu, chanh, nước mắm, ớt, vân vân. Những gia vị này được thêm vào tùy theo khẩu vị của người dùng. Phở thông thường được dùng để làm món điểm tâm buổi sáng hoặc lót dạ buổi đêm; nhưng ở các thành phố lớn, món ăn này có thể được thưởng thức cả ngày. Tại các tỉnh phía Nam Việt Nam và một số vùng miền khác, phở được bày kèm với đĩa rau thơm như hành, giá và những lá cây rau mùi, rau húng, trong đó ngò gai là loại lá đặc trưng của phở; tuy nhiên tại Hà Nội thông thường sẽ không có đĩa rau sống này. Phở thường là phở bò hay phở gà, nhưng đôi khi cũng có những biến thể khác, đặc biệt là phở sốt vang, phở khô, phở xào, phở chua, phở vịt ở Cao Bằng, và phở thịt quay ở các tỉnh miền núi phía Bắc.'),
(23, 'dinner', 'Bibimbap', 40, 'comtronhanquoc.jpg', 'Bibimbap( / ˈ b iː b ɪ m b æ p / BEE -bim-bap , từ tiếng Hàn 비빔밥 [pi.bim.p͈ap̚] , nghĩa đen là \"cơm trộn\"), đôi khi được La Mã hóa là bi bim bap hoặc bim bim bop , là một món cơm của Hàn Quốc. Thuật ngữ \"bibim\" có nghĩa là \"trộn\" và \" bap \" là cơm nấu chín . Bibimbap được phục vụ như một bát cơm trắng ấm với namul (rau xào và gia vị) hoặc kim chi (rau lên men truyền thống) và gochujang ( tương ớt ), nước tương hoặc doenjang (tương đậu nành lên men). Một quả trứng sống hoặc chiên và thịt thái lát.'),
(24, 'dinner', 'Bun bo Hue', 35, 'bunbohue.jpg', 'Trong nước dùng của bún, người Huế thường nêm vào một ít mắm ruốc, góp phần làm nên hương vị rất riêng của nồi bún bò Huế. Sau khi xương bò được hầm chín tới, người ta thường thêm vào một ít chả heo hay chả cua được quết nhuyễn. Thịt bò có thể được cắt mỏng, nhúng vào nước dùng đang sôi trước khi cho vào tô bún (gọi là thịt bò tái). Người ta cũng thường cho thêm một ít ớt bột và gia vị vào tô bún rồi ăn với rau sống gồm giá, rau thơm, xà lách, rau cải con, bắp chuối cắt nhỏ.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `orderid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
