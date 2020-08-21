-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2020 lúc 06:57 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `timvieclamnhanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hosoxinviec`
--

CREATE TABLE `hosoxinviec` (
  `id` int(11) UNSIGNED NOT NULL,
  `idND` int(11) UNSIGNED DEFAULT NULL,
  `idTTDOfND` int(11) UNSIGNED DEFAULT NULL,
  `hovaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` date NOT NULL DEFAULT current_timestamp(),
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `honnhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trinhdo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kinhnghiem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioithieubanthan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hienthi` tinyint(4) DEFAULT 0 COMMENT '0:YES, 1:NO,',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hosoxinviec`
--

INSERT INTO `hosoxinviec` (`id`, `idND`, `idTTDOfND`, `hovaten`, `ngaysinh`, `hinhanh`, `email`, `honnhan`, `trinhdo`, `kinhnghiem`, `gioithieubanthan`, `hienthi`, `remember_token`, `created_at`, `updated_at`) VALUES
(86, NULL, NULL, 'ee', '1999-09-08', 'C:\\xampp\\tmp\\php1AD1.tmp', 'zzz@gmail.com', '1', '6', '100', 'zzz', 0, NULL, '2020-08-10 03:22:05', '2020-08-10 03:22:05'),
(87, NULL, NULL, 'Mến Đoàn', '1111-11-11', 'C:\\xampp\\tmp\\phpE7A3.tmp', 'mendoan@gmail.com', '1', '4', '7', 'jjjj', 1, NULL, '2020-08-15 05:14:36', '2020-08-15 05:14:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuvuc`
--

CREATE TABLE `khuvuc` (
  `idKV` int(11) NOT NULL,
  `idHoSo` int(11) UNSIGNED DEFAULT NULL,
  `khuvuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuvuc`
--

INSERT INTO `khuvuc` (`idKV`, `idHoSo`, `khuvuc`, `created_at`, `updated_at`) VALUES
(4, NULL, '1', '2020-08-09 18:32:06', '2020-08-09 18:32:06'),
(5, NULL, '1', '2020-08-09 18:36:37', '2020-08-09 18:36:37'),
(6, NULL, '1', '2020-08-09 18:41:34', '2020-08-09 18:41:34'),
(7, NULL, '1', '2020-08-09 18:45:25', '2020-08-09 18:45:25'),
(8, NULL, '1', '2020-08-09 18:50:53', '2020-08-09 18:50:53'),
(9, NULL, '1', '2020-08-09 18:54:40', '2020-08-09 18:54:40'),
(10, NULL, '1', '2020-08-09 18:59:19', '2020-08-09 18:59:19'),
(11, NULL, '1', '2020-08-09 19:03:31', '2020-08-09 19:03:31'),
(12, NULL, '1', '2020-08-09 19:05:56', '2020-08-09 19:05:56'),
(13, NULL, '1', '2020-08-10 03:22:06', '2020-08-10 03:22:06'),
(14, NULL, '1', '2020-08-15 03:46:59', '2020-08-15 03:46:59'),
(15, NULL, '1', '2020-08-15 05:14:36', '2020-08-15 05:14:36'),
(16, NULL, '1', '2020-08-16 04:42:41', '2020-08-16 04:42:41');

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
-- Cấu trúc bảng cho bảng `nganhnghe`
--

CREATE TABLE `nganhnghe` (
  `id` int(11) UNSIGNED NOT NULL,
  `idHoSo` int(11) UNSIGNED DEFAULT NULL,
  `nganh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nganhnghe`
--

INSERT INTO `nganhnghe` (`id`, `idHoSo`, `nganh`, `updated_at`, `created_at`) VALUES
(9, NULL, '96', '2020-08-09 18:32:06', '2020-08-09 18:32:06'),
(10, NULL, '44', '2020-08-09 18:36:37', '2020-08-09 18:36:37'),
(11, NULL, '30', '2020-08-09 18:41:34', '2020-08-09 18:41:34'),
(12, NULL, '30', '2020-08-09 18:45:25', '2020-08-09 18:45:25'),
(13, NULL, '30', '2020-08-09 18:50:53', '2020-08-09 18:50:53'),
(14, NULL, '44', '2020-08-09 18:54:40', '2020-08-09 18:54:40'),
(15, NULL, '14', '2020-08-09 18:59:19', '2020-08-09 18:59:19'),
(16, NULL, '96', '2020-08-09 19:03:31', '2020-08-09 19:03:31'),
(17, NULL, '61', '2020-08-09 19:05:56', '2020-08-09 19:05:56'),
(18, NULL, '96', '2020-08-10 03:22:06', '2020-08-10 03:22:06'),
(19, NULL, '7', '2020-08-15 03:46:59', '2020-08-15 03:46:59'),
(20, NULL, '96', '2020-08-15 05:14:36', '2020-08-15 05:14:36'),
(21, NULL, '96', '2020-08-16 04:42:41', '2020-08-16 04:42:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhatuyendung`
--

CREATE TABLE `nhatuyendung` (
  `idNTD` int(11) UNSIGNED NOT NULL,
  `idUser` int(11) UNSIGNED DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinhthanhpho` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `congty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `social_provider`
--

CREATE TABLE `social_provider` (
  `id` bigint(20) NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuyendung`
--

CREATE TABLE `tintuyendung` (
  `idTinTuyenDung` int(11) UNSIGNED NOT NULL,
  `idTinNhaTuyenDung` int(11) UNSIGNED DEFAULT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congviectuyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `macongviec` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motacongviec` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `yeucaucongviec` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `luongmin` int(10) NOT NULL,
  `luongmax` int(11) NOT NULL,
  `hinhthuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluongtuyen` int(10) NOT NULL,
  `bangcap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capbac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kinhnghiem` int(255) NOT NULL,
  `ngaybatdautuyendung` date NOT NULL DEFAULT current_timestamp(),
  `ngayketthuctuyendung` date NOT NULL DEFAULT current_timestamp(),
  `quyenloi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `congkhai` tinyint(4) NOT NULL,
  `new` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuyendung`
--

INSERT INTO `tintuyendung` (`idTinTuyenDung`, `idTinNhaTuyenDung`, `tieude`, `congviectuyen`, `macongviec`, `motacongviec`, `yeucaucongviec`, `luongmin`, `luongmax`, `hinhthuc`, `soluongtuyen`, `bangcap`, `capbac`, `gioitinh`, `kinhnghiem`, `ngaybatdautuyendung`, `ngayketthuctuyendung`, `quyenloi`, `img`, `congkhai`, `new`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'TRƯỞNG NHÓM KINH DOANH KHU VỰC HỒ CHÍ MINH', 'Trưởng nhóm kinh doanh', 'CV1', '- Phụ trách kênh siêu thị, đảm bảo chỉ tiêu doanh số theo hệ thống phân bổ (Co.op, Big C, Metro...)\r\n- Lập và triển khai kế hoạch về các chương trình khuyến mãi, ưu đãi tại từng hệ thống siêu thị.\r\n- Mở rộng khách hàng mới, chăm sóc và xây dựng mối quan hệ tốt với khách hàng.\r\n- Giám sát, kiểm tra, hướng dẫn và hỗ trợ nhân viên cách trưng bày hàng hóa và bảo quản sản phẩm tại các hệ thống siêu thị.\r\n- Quản lý công nợ bán hàng.\r\n- Chi tiết trao đổi trong quá trình phỏng vấn.', '- Tốt nghiệp Cao đẳng, Đại học chuyên ngành: Quản trị kinh doanh, Kinh tế hoặc liên quan.\r\n- Có tối thiểu 3 năm kinh nghiệm ở vị trí Trưởng kênh MT (Siêu Thị) hoặc tương đương.\r\n- Kỹ năng quản lý, giao tiếp, thương lượng, đàm phán tốt.\r\n- Có tinh thần trách nhiệm và nhiệt huyết trong công việc.', 15, 20, '1', 2, '6', '4', 'Nam', 2, '2020-08-11', '2020-08-30', '14', '1.jpg', 0, 1, NULL, '2020-08-09 18:32:44', '2020-08-09 18:32:06'),
(2, NULL, 'Công ty TNHH Vietnam Concentrix Services', 'Nhân Viên Nhắc Phí / Thu Hồi Nợ Qua Điện Thoại', 'CV2', '- Gọi ra cho Khách hàng theo data do công ty cung cấp sẵn.\r\n- KH đã sử dụng các dịch vụ: vay tiêu dùng, vay trả góp...\r\n- Nhắc nhở KH đóng tiền góp đúng thời hạn đã cam kết\r\n- Hướng dẫn các thủ tục liên quan cho khách hàng\r\n- Làm việc ca xoay (2 ca), 1 tuần đổi ca cố định 1 lần, 4 ngày off / tháng\r\n+Ca 1: 8h - 17h\r\n+Ca 2: 10h - 19h\r\n- Làm việc tại quận 11', '- Chất giọng rõ ràng\r\n- Không yêu cầu kinh nghiệm\r\n- Đã có bằng trung cấp trở lên', 10, 20, '1', 10, '4', '3', 'Cả nam và nữ', 0, '2020-08-05', '2020-08-30', '15', '2.jpg', 0, 0, NULL, '2020-08-09 18:36:59', '2020-08-09 18:36:37'),
(3, NULL, 'Công Ty TNHH Olam Việt Nam', 'Kế Toán Thanh Toán Và Tồn Kho', 'CV3', '1.Recording of inventory transactions for processing\r\n2. Recording of expenses, and making payment vouchers\r\n3. Monthly reconciliation of inventory records and SAP\r\n4. Conducting monthly stock count for the warehouse\r\n5. Taking approvals and making reports for management\r\n6. Support chief accountant for day-to-day tasks or reports', '-SAP working experience is preferable\r\n-University graduate majoring in finance and accounting.\r\n-1 year experience in equivalent position, total 2-4 year’s experience\r\n-Basic knowledge of: domestic payment via bank and cash\r\n-English level- medium\r\n-Working location: No. 16, Phan Dang Luu street, Long Binh Ward, Bien Hoa city, Dong Nai.', 7, 10, '1', 5, '6', '3', 'Cả nam và nữ', 7, '2020-08-20', '2020-09-30', '9', '3.jpg', 0, 0, NULL, '2020-08-09 18:42:05', '2020-08-09 18:41:34'),
(4, NULL, 'CÔNG TY CỔ PHẦN TẬP ĐOÀN ANH VINH', 'Chuyên Viên Tài Chính - Kế Toán', 'CV4', '- Làm hồ sơ lương và chi lương hàng tháng của CB-CNV.\r\n- Làm hồ sơ tài chính gửi Ngân hàng:\r\n+ Hồ sơ giải ngân theo chỉ đạo:\r\n+ Hồ sơ đáo hạn các khoản nợ vay đến hạn:\r\n+ Làm hồ sơ bảo lãnh dự thầu, cam kết tín dụng để tham gia đấu thầu các công trình khi có phát sinh.\r\n+ Làm hồ sơ gia hạn các loại bảo lãnh của các công trình khi có phát sinh.\r\n+ Làm Báo cáo tài chính, sổ chi tiết phát sinh của các tài khoản trong báo cáo tài chính, tờ khai thuế đối với các báo cáo cung cấp Ngân hàng.\r\n- Đi giao dịch ngân hàng theo lệnh của cấp trên.\r\n- Dẫn ngân hàng, đối tác đi thẩm định tài sản khi có phát sinh theo lệnh cấp trên\r\n- Một số công việc khác theo chỉ đạo của cấp trên.', '- Tốt nghiệp Đại học trở lên.\r\n- Giao tiếp tốt, khả năng đào tạo, hướng dẫn.\r\n- Có tối thiểu 3 năm kinh nghiệm ở vị trí Tài chính - Kế toán hoặc cùng lĩnh vực.\r\n- Khả năng nắm bắt tình hình tài chính và xu hướng tài chính.\r\n- Có khả năng tác nghiệp với các đồng nghiệp, làm việc tích cực, chịu khó, lắng nghe, phân tích xử lý linh hoạt.', 10, 12, '1', 3, '6', '3', 'Cả nam và nữ', 3, '2020-08-10', '2020-08-30', '6', '4.jpg', 0, 1, NULL, '2020-08-09 18:46:12', '2020-08-09 18:45:25'),
(5, NULL, 'Công ty TNHH Dịch Vụ Xây Dựng Hưng Thịnh Hoàng Gia', 'Kế Toán Công Trình (Nam)', 'CV5', '- Theo dõi tình hình nhập, xuất vật tư tại công trình hàng ngày và gửi về cho phòng kế toán\r\n- Theo dõi tài sản và hàng tháng đối chiếu với kế toán tài sản\r\n- Tiến hành kiểm kê kho theo quy định\r\n- Theo dõi công nợ tại công trường và hàng ngày, hàng tuần gửi về đối chiếu với kế toán công nợ.\r\n- Theo dõi bảng chấm công, lập bảng chi tiết tạm ứng lương của công trình\r\n- Theo dõi thu chi tiền mặt tại công trình và hàng tuần báo cáo về phòng kế toán.\r\n- Công việc cụ thể hơn sẽ được trao đổi khi phỏng vấn.\r\n- Làm việc tại công trường 30/4, Huyện Cần Giờ, TP Hồ Chí Minh', '- Giới tính Nam, tốt nghiệp Trung Cấp trở lên chuyên ngành Kế Toán\r\n- Có tinh thần trách nhiệm, chịu khó', 7, 10, '1', 5, '6', '3', 'Nam', 2, '2020-08-11', '2020-10-20', '15', '5.jpg\r\n', 0, 1, NULL, '2020-08-09 18:51:26', '2020-08-09 18:50:53'),
(6, NULL, 'CÔNG TY CỔ PHẦN XNK BẢO TÍN', 'Sales Khu Vực HCM', 'CV6', 'Mô tả công việc:\r\n1.Nhân viên sẽ được công ty hướng dẫn đào tạo kỹ năng bán hàng và học hỏi các sản phẩm mà công ty cung cấp trước khi được giao các thị trường và khách hàng mà mình quản lý.\r\n2.Công việc hàng ngày:Làm việc ký kết, thông báo với khách các chính sách khuyến mãi của công ty để chốt các đơn đặt hàng và hợp đồng.\r\n3.Sản phẩm mà công ty cung cấp:Các thiết bị điện cơ khí nhỏ:Máy khoan, máy mài, máy đục, máy hàn, máy phát điện, máy nén khí, máy cưa, máy cắt...., các sản phẩm nông ngư cơ :máy nổ, máy cắt cỏ, máy phun thuốc,....', '- Nam :tuổi từ 21 -26 tuổi\r\n- Tốt nghiệp cao đẳng trở lên (không yêu cầu đúng chuyên ngành kinh doanh )\r\n- Năng động, hoạt bát, giao tiếp tốt.\r\n-Thân thiện vui vẻ, hòa đồng trong tập thể\r\n- Có khả năng làm việc nhóm', 20, 25, '1', 1, '5', '3', 'Cả nam và nữ', 2, '2020-08-20', '2020-09-11', '14', '6.jpg', 0, 0, NULL, '2020-08-09 18:55:17', '2020-08-09 18:54:40'),
(7, NULL, 'CÔNG TY TNHH XNK MUMUSO VIỆT NAM', 'Quản Lý Cửa Hàng Tập Sự Khu Vực Hồ Chí Minh', 'CV7', '- Hỗ trợ kiểm tra, hướng dẫn & giám sát các bạn nhân viên sắp xếp, trưng bầy hàng hóa.\r\n- Hỗ trợ phân ca làm việc cho các bạn nhân viên trong điểm bán\r\n- Hướng dẫn khách thực hiện thủ tục thanh toán và sử dụng sản phẩm hiệu quả\r\n- Tổng hợp số liệu báo cáo Trưởng bộ phận theo nội dung được yêu cầu.\r\n- Báo cáo kết quả bán hàng hàng ngày / tuần / tháng \r\n- Giải quyết các khiếu nại cho khách hàng, và báo cáo cho quản lý khi có vấn đề xảy ra.\r\n- Chăm sóc cung cấp thông tin các chương trình ưu đãi cho khách hàng.\r\n- Thực hiện các công việc khác theo yêu cầu của quản lý.\r\n- Thời gian làm việc: xoay ca, fulltime (8.5h/ca)\r\n- Địa điểm làm việc: Quận 1, Quận 5, Quận 10.', '- Có kinh nghiệm làm trợ lý cửa hàng.\r\n- Ứng viên có thể làm việc xoay ca.\r\n- Sẵn sàng làm việc vào  Thứ 7, Chủ Nhật và Lễ, Tết.\r\n- Có tinh thần cầu tiến, mong muốn gắn bó lâu dài với công ty.\r\n- Giao tiếp tự tin, nhã nhặn, lịch sự và khiêm tốn.\r\n- Khả năng đàm phán, thuyết trình tốt.\r\n- Am hiểu ngành hàng tiêu dùng, Công ty, sản phẩm, khách hàng, đối thủ cạnh tranh, \r\n- Trung thực, nhiệt tình, có tinh thần trách nhiệm và có nguyện vọng gắn bó lâu dài với Công ty.\r\n- Có sức khỏe tốt, chịu được áp lực công việc.\r\n- Ưu tiên ứng viên làm việc trong các ngành bán lẻ, chuỗi cửa hàng.', 7, 10, '1', 3, '6', '5', 'Cả nam và nữ', 7, '2020-08-11', '2020-09-22', '2', '7.jpg', 0, 1, NULL, '2020-08-09 19:00:33', '2020-08-09 18:59:19'),
(8, NULL, 'CÔNG TY CỔ PHẦN KINH DOANH F88', 'Chuyên Viên Kinh Doanh - Khu Vực Hồ Chí Minh', 'CV8', '- Thực hiện các hoạt động tìm kiếm khách hàng và thúc đẩy kinh doanh (Chăm sóc khách hàng, Telesales, các hoạt động Marketing…)\r\n- Tiếp đón khách hàng theo quy trình phục vụ của Công ty, ghi nhật ký khách hàng\r\n- Tư vấn cho khách hàng về các quy định, quy trình, sản phẩm dịch vụ của Công ty;\r\n- Thẩm định tài sản, tư vấn và thực hiện hợp đồng sử dụng dịch vụ:\r\n- Ghi nhận và quản lý các giao dịch hàng ngày tại Phòng giao dịch;\r\n- Quản lý, kiểm kê tiền, tài sản của Công ty và khách hàng theo đúng quy định;\r\n- Thực hiện các công việc khác theo yêu cầu của cấp trên.\r\n- Thời gian làm việc: XOAY CA, nghỉ 01 ngày bất kỳ/tuần; nghỉ Lễ/Tết.\r\n+ Ca 1: 08h30 - 16h30.\r\n+ Ca 2: 13h00 - 21h00\r\n- Địa điểm làm việc: TẤT CẢ CÁC QUẬN/HUYỆN. Ưu tiên: các quận 2; quận 4; quận 7; quận 9; quận Bình Tân; quận Thủ Đức;', '- Nam/Nữ. Ưu tiên Nam. Tốt nghiệp tối thiểu Trung cấp;\r\n- Phẩm chất trung thực, tận tâm, trân trọng những lời mình nói;\r\n- Chủ động trong công việc, cầu tiến, ý thức ký luật;\r\n- Có khả năng chịu áp lực công việc và quản trị cảm xúc;\r\n- Kỹ năng giao tiếp và xử lý tình huống;\r\n- Kỹ năng làm việc độc lập và làm việc nhóm;\r\n- Kỹ năng sử dụng tin học và các thiết bị văn phòng;\r\n- Ngoại hình ưa nhìn.', 7, 10, '1', 6, '6', '3', 'Cả nam và nữ', 100, '2020-08-21', '2020-10-30', '1', '8.jpg', 0, 0, NULL, '2020-08-09 19:03:49', '2020-08-09 19:03:31'),
(9, NULL, 'CÔNG TY CP TRƯƠNG VIỆT', 'Kỹ Sư Nông Nghiệp Tại Hồ Chí Minh, Vũng Tàu, Kiên Giang', 'CV9', 'Đáp ứng nhu cầu mở rộng sản xuất kinh doanh của công ty. Chúng tôi cần tuyển một số kỹ thuật – thị trường Tại Hồ Chí Minh, Vũng Tàu, Kiên Giang với tiêu chí như sau:\r\n\r\n– Tư vấn, giới thiệu sản phẩm, Hướng dẫn sử dụng sản phẩm của Công ty đến Bà Con Nông Dân và khách hàng.\r\n– Tổ chức các điểm trình diễn sản phẩm, mô hình trình diễn, phun thử nghiệm, Hội thảo đầu bờ, Hội Thảo Nông dân, Tư vấn Bán Hàng nhằm quảng bá sản phẩm đến Bà Con Nông Dân.\r\n– Nghiên cứu nắm bắt tình hình sâu bệnh, dịch hại để xây dựng các chiến lược quảng bá kịp thời vụ hoặc phát triển sản phẩm mới.\r\n– Tổ chức chuyển giao kỹ thuật mới cho bà con nông dân,\r\n– Tổ chức giới thiệu kỹ thuật sản phẩm đến bà con nông dân;\r\n– Giám sát, báo cáo tình hình sâu bệnh, đề xuất phương án xử lý.\r\n– Tư vấn cho khách hàng về sản phẩm phân bón hữu cơ sinh học của công ty.\r\n– Bán hàng và thực hiện các chính sách bán hàng nhằm đạt chỉ tiêu doanh số.\r\n– Tìm kiếm khách hàng, đối tác để mở rộng thị trường, phát triển các đại lý.\r\n– Các công việc khác sẽ trao đổi trực tiếp khi phỏng vấn.', 'Giới tính: Nam, độ tuổi từ 22 – 40 tuổi.\r\n– Trình độ: Từ Cao đẳng trở lên các chuyên ngành Nông học, ngành Bảo vệ thực vật, ngành trồng trọt và các ngành có liên quan, Ưu tiên tốt nghiệp đại học, có kinh nghiệm trong ngành phân bón.\r\n– Nhanh nhẹn, thành thật, chăm chỉ và có sức khỏe tốt.\r\n– Có khả năng làm việc nhóm.\r\n– Đam mê với nghề bán hàng và chịu gắn bó lâu dài.\r\nYêu cầu hồ sơ\r\n– Đơn xin việc.\r\n– Sơ yếu lý lịch.\r\n– Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.\r\n– Các bằng cấp có liên quan.', 7, 15, '1', 7, '6', '2', 'Cả nam và nữ', 2, '2020-08-22', '2020-08-30', '4', '9.jpg', 0, 1, NULL, '2020-08-09 19:06:17', '2020-08-09 19:05:56'),
(11, NULL, 'Nhân Viên Kinh Doanh Ngành Tư Vấn Thiết Kế Kiến Trúc', 'Tìm kiếm, chăm sóc khách hàng', 'CV11', '- Tìm kiếm, chăm sóc khách hàng của công ty có sẵn, mới.\r\n- Giới thiệu, tư vấn khách hàng các mẫu vật liệu, làm báo giá, hợp đồng\r\n- Phát triển thị trường và khai thác khách hàng mới\r\n- Chăm sóc khách hàng sau khi ký hợp đồng.\r\n- Công việc được trao đổi cụ thể hơn khi phỏng vấn trực tiếp.', '- Có tối thiểu 1 năm kinh nghiệm kinh doanh, tư vấn trong lĩnh vực Xây dựng, Kiến trúc - Nội thất.\r\n- Thân thiện nhiệt tình, chịu được áp lực công việc\r\n- Có khả năng làm việc độc lập và xử lý các tình huống phát sinh.', 12, 15, '1', 3, '6', '3', 'Nữ', 7, '2020-08-12', '2020-08-30', '1', '11.jpg', 0, 0, NULL, '2020-08-16 04:44:50', '2020-08-16 04:42:41'),
(26, NULL, 'aa', 'aa', 'aa', 'aa', 'aa', 600000, 800000, '1', 2, '6', '1', 'Cả nam và nữ', 3, '2020-06-14', '2020-06-16', '8', '10.jpg', 0, 0, NULL, '2020-08-15 03:50:34', '2020-08-15 03:46:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` smallint(6) NOT NULL DEFAULT 0 COMMENT '0:nguoidung, 1:nhatuyendung, 2:admin',
  `block` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'true:block',
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'true:delete',
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `block`, `created_at`, `deleted`, `updated_at`) VALUES
(1, 'admin', '03675120xx', 'admin@gmail.com', NULL, '$2y$10$KZUQ6CqrUIPMaD3XzIx0..AWPrL2CenfscMCpqTFaQ4FpuTdYxwi.', NULL, 2, 0, '2020-08-09 19:08:46', 0, '2020-08-09 19:08:46'),
(2, 'Mến', '0123456780', 'mendoan@gmail.com', NULL, '$2y$10$mJR8wKCUnCPXTJB5lbRsyeJ5tVSDpnpalechnwA61AozwZpn3R/4S', NULL, 1, 0, '2020-08-09 19:10:14', 0, '2020-08-09 19:10:14'),
(3, 'Công Ty 1', '123456', 'nhatuyendung@gmail.com', NULL, '$2y$10$tqcNTPSoCwMH1MGHibmrWOLavEo16ga3MUpozKxOQZsqC4718jqR2', NULL, 1, 0, '2020-08-09 19:10:57', 0, '2020-08-09 19:10:57'),
(73, 'Mến Đoàn', '2222222', 'qqqq@gmail.com', NULL, '$2y$10$UuR.bvr9pamJdn20XAVMXu5L.ALIb7h34WwQK0HpLqTWVt2zaVN0C', NULL, 0, 0, '2020-08-10 03:18:36', 0, '2020-08-10 03:18:36'),
(74, 'z', '1111111111', 'zzz@gmail.com', NULL, '$2y$10$l3jqzY.RzrqhMccGM.9pG.ere4/8OQK07q1VsTfXpSVme3mB5sK4S', NULL, 0, 0, '2020-08-10 03:21:07', 0, '2020-08-10 03:21:07'),
(75, 'abcds', '23232323223', 'sdf@gmail.com', NULL, '$2y$10$efEMtSLqPhSLwvOXFrrfYulUcQsXwq9WA4fX6P2/zbvziqRD1ctsm', NULL, 0, 0, '2020-08-10 03:23:22', 0, '2020-08-10 03:23:22'),
(76, 'abc', '2121212121', 'm@gmail.com', NULL, '$2y$10$CIo90VM1hRpyk5L34W0DaOwmJQb28sziq5M7weipFU5juX7IpA6zy', NULL, 1, 0, '2020-08-10 03:35:40', 0, '2020-08-10 03:35:40');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hosoxinviec`
--
ALTER TABLE `hosoxinviec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idND` (`idND`),
  ADD KEY `idTTD` (`idTTDOfND`);

--
-- Chỉ mục cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`idKV`),
  ADD KEY `idHoSo` (`idHoSo`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idHoSo` (`idHoSo`);

--
-- Chỉ mục cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  ADD PRIMARY KEY (`idNTD`),
  ADD KEY `idUser` (`idUser`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `social_provider`
--
ALTER TABLE `social_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`(250));

--
-- Chỉ mục cho bảng `tintuyendung`
--
ALTER TABLE `tintuyendung`
  ADD PRIMARY KEY (`idTinTuyenDung`),
  ADD KEY `tintuyendungofNTD` (`idTinNhaTuyenDung`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hosoxinviec`
--
ALTER TABLE `hosoxinviec`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  MODIFY `idKV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  MODIFY `idNTD` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `social_provider`
--
ALTER TABLE `social_provider`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tintuyendung`
--
ALTER TABLE `tintuyendung`
  MODIFY `idTinTuyenDung` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hosoxinviec`
--
ALTER TABLE `hosoxinviec`
  ADD CONSTRAINT `nguoidung` FOREIGN KEY (`idND`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tinxinviecOfND` FOREIGN KEY (`idTTDOfND`) REFERENCES `tintuyendung` (`idTinTuyenDung`);

--
-- Các ràng buộc cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD CONSTRAINT `khuvuc` FOREIGN KEY (`idHoSo`) REFERENCES `hosoxinviec` (`id`);

--
-- Các ràng buộc cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  ADD CONSTRAINT `nganhnghe` FOREIGN KEY (`idHoSo`) REFERENCES `hosoxinviec` (`id`);

--
-- Các ràng buộc cho bảng `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  ADD CONSTRAINT `nhatuyendung` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `tintuyendung`
--
ALTER TABLE `tintuyendung`
  ADD CONSTRAINT `tintuyendungofNTD` FOREIGN KEY (`idTinNhaTuyenDung`) REFERENCES `nhatuyendung` (`idNTD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
