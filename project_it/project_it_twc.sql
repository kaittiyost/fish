-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2017 at 04:06 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `project_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8_unicode_ci NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `ReplyID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `QuestionID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `CreateDate` datetime NOT NULL,
  `Details` text NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`ReplyID`, `QuestionID`, `CreateDate`, `Details`, `Name`) VALUES
(00001, 00001, '2016-09-17 12:12:14', 'ผสมนมวัวเยอะๆ', 'test  test'),
(00014, 00001, '2016-10-01 02:53:26', 'ไม่รู้', 'บุญชู  ไปนอนนะ'),
(00003, 00001, '2016-09-19 16:11:56', 'ใส่ลำเยอะ', 'บุญชู  ไปนอนนะ'),
(00004, 00001, '2016-09-19 16:12:55', 'ไม่แน่ใจ', 'บุญชู  ไปนอนนะ'),
(00005, 00002, '2016-09-19 18:46:25', 'สี่เหลี่ยม', 'บุญชู  ไปนอนนะ'),
(00006, 00003, '2016-09-27 09:44:10', 'ขอคำแนะนำด้วยครับ !!!', 'สมงิ  ไปนอนนะ'),
(00007, 00001, '2016-09-30 11:31:31', 'ไม่รู้', 'testkai007  testkai007'),
(00009, 00003, '2016-09-30 11:33:36', 'แนะนำถังสี', 'testkai007  testkai007'),
(00013, 00002, '2016-09-30 11:37:19', 'แบบทางยาวดีครับ555', 'testkai007  testkai007'),
(00012, 00003, '2016-09-30 11:35:30', 'น่าจะช่วยได้', 'testkai007  testkai007'),
(00015, 00005, '2016-10-01 02:54:06', 'ไม่ตก', 'บุญชู  ไปนอนนะ'),
(00016, 00005, '2016-10-01 03:17:22', 'ตก', 'บุญชู  ไปนอนนะ'),
(00017, 00005, '2016-10-01 04:32:41', 'ไม่ตก', 'สมงิ  ไปนอนนะ'),
(00022, 00006, '2016-10-03 09:15:25', 'สอบ', 'สมงิ  ไปนอนนะ'),
(00024, 00006, '2016-10-03 09:18:04', '555', 'สมงิ  ไปนอนนะ'),
(00025, 00006, '2016-10-03 09:18:12', '555', 'สมงิ  ไปนอนนะ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_answers`
--

CREATE TABLE `tb_answers` (
  `a_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `a_comment` text COLLATE utf8_unicode_ci NOT NULL,
  `a_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE `tb_bank` (
  `bank_id` int(11) NOT NULL,
  `bank_number` varchar(20) NOT NULL,
  `bank_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_bank`
--

INSERT INTO `tb_bank` (`bank_id`, `bank_number`, `bank_name`) VALUES
(9, '2930379057', 'ธนาคารกรุงไทย'),
(10, '2930379000', 'ธนาคารกสิกรไทย'),
(11, '2930379001', 'ธนาคารทหารไทย'),
(12, '2930379011', 'ธนาคารเพื่อการเกษตร'),
(13, '2930379010', 'ธนาคารออมสิน');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(1, 'ลูกปลาพันธุ์ปลา'),
(2, 'ประกอบอาหาร');

-- --------------------------------------------------------

--
-- Table structure for table `tb_deadfish`
--

CREATE TABLE `tb_deadfish` (
  `dead_id` int(11) NOT NULL,
  `dead_date` date NOT NULL,
  `dead_amount` varchar(30) NOT NULL,
  `dead_cause` text NOT NULL,
  `fish_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_deadfish`
--

INSERT INTO `tb_deadfish` (`dead_id`, `dead_date`, `dead_amount`, `dead_cause`, `fish_number`) VALUES
(1, '2016-09-08', '2', 'โดนกัด', 'FISH001'),
(2, '2016-09-08', '5', 'ตายแบบงงๆ', 'FISH002'),
(3, '2016-09-15', '10', 'ตายเฉยๆงง', 'FISH004'),
(4, '2016-09-30', '0', '-', 'FISH001'),
(5, '2016-09-30', '1', 'ตายเฉยๆ', 'FISH002'),
(6, '2016-09-30', '0', '-', 'FISH003'),
(7, '2016-09-30', '0', '-', 'FISH004');

-- --------------------------------------------------------

--
-- Table structure for table `tb_feed`
--

CREATE TABLE `tb_feed` (
  `feed_id` int(11) NOT NULL,
  `feed_name` varchar(30) NOT NULL,
  `feed_date` date NOT NULL,
  `feed_amount` varchar(30) NOT NULL,
  `feed_total` varchar(30) NOT NULL,
  `fish_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_feed`
--

INSERT INTO `tb_feed` (`feed_id`, `feed_name`, `feed_date`, `feed_amount`, `feed_total`, `fish_number`) VALUES
(1, 'อาหารปลานิล', '2016-09-08', '5', '20', 'FISH001'),
(2, 'ลำข้าว', '2016-09-08', '7', '7', 'FISH002'),
(3, 'ซีพี9933P', '2016-09-30', '5', '20', 'FISH001'),
(4, 'ซีพี9933P', '2016-09-30', '5', '20', 'FISH002'),
(5, 'ซีพี9933P', '2016-09-30', '5', '20', 'FISH003'),
(6, 'ซีพี9933P', '2016-09-30', '5', '20', 'FISH004');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fish`
--

CREATE TABLE `tb_fish` (
  `fish_id` int(11) NOT NULL,
  `fish_name` varchar(30) NOT NULL,
  `fish_start` date NOT NULL,
  `fish_resource` varchar(30) NOT NULL,
  `fish_size` varchar(30) NOT NULL,
  `fish_amount` varchar(30) NOT NULL,
  `fish_price` varchar(30) NOT NULL,
  `fish_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_fish`
--

INSERT INTO `tb_fish` (`fish_id`, `fish_name`, `fish_start`, `fish_resource`, `fish_size`, `fish_amount`, `fish_price`, `fish_number`) VALUES
(1, 'ปลานิล', '2016-09-08', 'ฟาร์มโชคชัย', '5', '200', '400', 'FISH001'),
(2, 'ปลาไน', '2016-09-08', 'ฟาร์มบุญช่วย', '2', '200', '400', 'FISH002'),
(3, 'ปลานิลทับทิม', '2016-09-08', 'ฟาร์มเฮาส์', '3', '400', '2000', 'FISH003'),
(4, 'ปลาช่อน', '2016-09-15', 'ฟาร์มทุ่งสง', '10', '250', '500', 'FISH004');

-- --------------------------------------------------------

--
-- Table structure for table `tb_growth`
--

CREATE TABLE `tb_growth` (
  `growth_id` int(11) NOT NULL,
  `fish_number` varchar(30) NOT NULL,
  `growth_date` date NOT NULL,
  `growth_size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_growth`
--

INSERT INTO `tb_growth` (`growth_id`, `fish_number`, `growth_date`, `growth_size`) VALUES
(1, 'FISH001', '2016-09-09', '20'),
(2, 'FISH002', '2016-09-15', '15'),
(3, 'FISH001', '2016-09-30', '25'),
(4, 'FISH002', '2016-09-30', '20'),
(5, 'FISH003', '2016-09-30', '17'),
(6, 'FISH004', '2016-09-30', '18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_knowledge`
--

CREATE TABLE `tb_knowledge` (
  `k_id` int(11) NOT NULL,
  `k_header` text COLLATE utf8_unicode_ci NOT NULL,
  `k_pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `k_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `k_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_knowledge`
--

INSERT INTO `tb_knowledge` (`k_id`, `k_header`, `k_pic`, `k_detail`, `k_date`) VALUES
(1, 'ฟาร์ม', 'pic/45641.png', 'ฟาร์มโชชัย บริการลูกปลาพันธุ์ปลา ราคาถูก', '2016-09-08'),
(2, 'วิธีการเลี้ยงปลาในกระชัง', 'pic/1378964517.JPG', '    &nbsp;&nbsp;&nbsp;การเลี้ยงปลาในกระชังเป็นรูปแบบการเลี้ยงที่ให้ผลผลิตสูง ก่อให้เกิดประโยชน์สูงสุดในเชิงเศรษฐศาสตร์ และการใช้ประโยชน์จากแหล่งน้ำทั่วไป อีกทั้งยังช่วยให้ผู้ที่ไม่มีที่ดินทำกินสามารถหันมาเลี้ยงปลาได้ หากปล่อยปลาในอัตราที่เหมาะสมจะทำให้ปลามีอัตราการเจริญเติบโตที่ดีขึ้นสามารถช่วยลดระยะเวลาการเลี้ยงให้สั้นลงได้ นอกจากนี้ยังสะดวกในการดูแลจัดการการเคลื่อนย้าย รวมทั้งการเก็บเกี่ยวผลผลิตและมีการลงทุนต่ำกว่ารูปแบบการเลี้ยงอื่นๆ ในขณะที่ผลตอบแทนต่อพื้นที่สูง อย่างไรก็ตาม การเลี้ยงปลานิลในกระชังอาจจะมีข้อเสียอยู่บ้าง เช่น ปัญหาโรคพยาธิที่มากับน้ำซึ่งไม่สามารถควบคุมได้ นอกจากนั้นยังอาจก่อให้เกิดปัญหาเรื่องสภาพแวดล้อมหากไม่มีการคำนึงถึงปริมาณและที่ตั้งของกระชัง ตลอดจนความเหมาะสมของลำน้ำ ดังนั้นการเลี้ยงยังขึ้นอยู่กับอาหารสำเร็จรูปเพียงอย่งเดียวทำให้สิ้นเปลืองในการลงทุน หลักการสำคัญที่ควรคำนึงถึงสำหรับการเลี้ยงปลาในกระชังได้แก่<br>\r\n\r\n        &nbsp;&nbsp;&nbsp;<b>การเลือกสถานที่</b><br>\r\n\r\n       &nbsp;&nbsp;&nbsp; บริเวณที่จะทำการเลี้ยงปลาในกระชังจะต้องมีคุณภาพสิ่งแวดล้อมอยู่ในเกณฑ์ดี เนื่องจากการเลี้ยงปลาในกระชังเป็นการเลี้ยงแบบพัฒนา(intensive) เน้นการจัดการเลี้ยงโดยใช้อาหารเป็นหลัก คุณภาพน้ำจึงเป็นเรื่องสำคัญสำหรับการเลี้ยงปลาในกระชัง โดยปกติแหล่งน้ำที่นำมาเลี้ยงปลาในกระชังควรเป็นแหล่งน้ำที่มีความสมบูรณ์ กล่าวคือ จะต้องมีปริมาณธาตุอาหารต่ำ หรือกล่าวอย่างง่ายๆ คือ น้ำจะต้องใสสะอาด มีคุณภาพดี  การเลี้ยงปลาในกระชังสามารถทำได้ทั้งในบ่อขนาดใหญ่ที่ไม่สามารถถ่ายน้ำได้หมด หรือในอ่างเก็บน้ำ แม่น้ำ ลำคลอง หนอง บึงทั่วไป รวมถึงบริเวณชายฝั่งทะเล เป็นต้น โดยมีหลักในการพิจารณาถึงทำเลที่เหมาะสม ดังนี้<br>\r\n\r\n        &nbsp;&nbsp;&nbsp;การถ่ายเทของกระแสน้ำ ปกติการเลี้ยงปลาในกระชังจะอาศัยการถ่ายเทน้ำผ่านกระชังเพื่อพัดเอาน้ำดีเข้ามาและไล่เอาของเสียออกไปนอกกระชัง เสมือนมีการเปลี่ยนน้ำใหม่เพื่อให้น้ำมีคุณภาพตลอดเวลา ดังนั้น บริเวณที่เลี้ยงปลาในกระชังจึงควรมีกระแสน้ำและลม เพื่อช่วยให้การหมุนเวียนของน้ำ ภายในกระชังเป็นไปด้วยดีแต่ต้องไม่รุนแรงนัก โดยเฉพาะสำหรับการเลี้ยงปลาในกระชังในอ่างเก็บน้ำหรือบ่อขนาดใหญ่ กระแสลมจะเป็นปัจจัยสำคัญที่ทำให้เกิดการหมุนเวียนของกระแสน้ำในกระชัง บริเวณที่แขวนกระชังจึงควรเป็นบริเวณที่โล่งแจ้ง ห่างไกลจากร่มไม้และไม่ควรมีพรรณไม้น้ำ เนื่องจากต้นไม้และพรรณไม้น้ำมักจะบังกระแสลมและกระแสน้ำ ซึ่งจะมีผลต่อการหมุนเวียนถ่ายเทน้ำในกระชัง<br>\r\n\r\n        &nbsp;&nbsp;&nbsp;ความลึกของแหล่งน้ำ  แหล่งน้ำควรมีความลึกพอประมาณ เมื่อกางกระชังแล้วระดับพื้นกระชังควรสูงจากพื้นก้นบ่อหรือพื้นน้ำไม่น้อยกว่า 50 เซนติเมตร เพื่อให้น้ำถ่ายเทได้ดีตลอด<br>\r\n\r\n        &nbsp;&nbsp;&nbsp;ห่างไกลจากสิ่งรบกวน  บริเวณที่ลอยกระชังควรห่างจากแหล่งชุมชน เพื่อป้องกันการรบกวนจากการพลุกพล่าน ซึ่งจะทำให้เกิดความเครียดกระวนกระวาย ได้รับบาดเจ็บจากการว่ายชนกระชังทำให้ปลาไม่กินอาหาร ทั้งหมดนี้จะเป็นอุปสรรคต่อการเจริญเติบโตตามปกติของปลาที่เลี้ยงหรือเป็นโรคติดเชื้อจากบาดแผลที่เกิดขึ้นได้<br>', '2016-09-08'),
(3, 'รายละเอียดพันธุ์ปลา', 'pic/welcome01.jpg', '<b>ชนิดของปลาที่ควรจะเลี้ยงในกระชัง </b><br><br>\r\n\r\n&nbsp;&nbsp;&nbsp;ควรมี ลักษณะดังนี้<br><br>\r\n\r\n<b>ก. ในแง่ทางชีววิทยาและสรีรวิทยา </b><br><br>\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;๑. โตเร็ว <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;๒. กินอาหารสมทบที่ให้ <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;๓. สามารถเปลี่ยนอาหารเป็นเนื้อได้ดี <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;๔. สามารถอยู่ได้หนาแน่นแออัด <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;๕. ทนต่อสภาวะแวดล้อมโดยเฉพาะในน้ำที่มีก๊าซ ออกซิเจนต่ำ <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;๖. ทนทานและมีความต้านทานโรคสูง <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;๗. หาลูกปลาได้สะดวก มีปริมาณพอเพียง <br><br>\r\n\r\n<b>ข. ในแง่เศรษฐกิจ </b><br>\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;๑. ราคาซื้อขายสูง <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;๒. ขายง่าย ขายสดไม่ต้องผ่านกรรมวิธีมาก <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;๓. ชนิดที่ตลาดต้องการ<br><br>\r\n\r\nปลาน้ำจืดที่มีความต้านทานที่เหมาะจะเลี้ยงในกระชังมีอยู่ ๕ ครอบครัว คือ <br>\r\nไซพรินิดี (Cyprinidae) ได้แก่ ปลาไน <br>\r\nซิลูริดี (Siluridae) ได้แก่ ปลาสวาย ปลาเทโพ <br>\r\nคลาริไอดี (Claridae) ได้แก่ ปลาดุก <br>\r\nโอฟิเซฟาลิดี (Ophicephalidae) ได้แก่ ปลาช่อน และ \r\nซิคลิดี (Cichlidae) ได้แก่ ปลาในสกุลตีลาเบีย ชนิดต่าง ๆ เช่น ปลานิล <br>\r\n&nbsp;&nbsp;&nbsp;ผลการทดลองปรากฏกว่า ปลานิลเหมาะแก่การเลี้ยงในกระชังมาก มีการเจริญเติบโตดี และมีอัตรารอดสูง กินอาหารเม็ด และเปลี่ยนอาหารเป็นเนื้อได้ดี มีความต้านทานโรคสูง และสามารถปรับตัวอยู่ได้หนาแน่น<br><br>\r\n\r\n&nbsp;&nbsp;&nbsp;ข้อเสียของปลาสกุลตีลาเบียที่เลี้ยงในบ่อดินก็คือ อัตรา การขยายพันธุ์ปลาสกุลตีลาเบีย เช่น ปลาหมอเทศ มีอัตราการขยายพันธุ์รวดเร็วมาก จึงทำให้การเจริญเติบโตชะงักงัน แต่เมื่อ นำไปเลี้ยงในกระชัง การสืบพันธุ์ดังกล่าวจะไม่เกิดขึ้น เนื่องจาก ปลาไม่สามารถทำหลุมวางไข่ในกระชังลอย ในปัจจุบันได้มีการ ทดลองเลี้ยงปลาหลายชนิดรวมกันในกระชัง ซึ่งจะทำให้ผลผลิตปลาสูงขึ้น โดยปล่อยปลาไนร้อยละ ๖๕ ปลาลิ่นร้อยละ ๑๘  และปลาซ่งร้อยละ ๑๘ ในระยะเวลาเลี้ยง ๑๑๗ วัน ปลาไนจะ โตจาก ๑๑๐ กรัม เป็น ๕๔๐ กรัม ปลาลิ่นจะโตจาก ๑๕๐ กรัม เป็น ๓๗๐ กรัม และปลาซ่งจะโตจาก ๑๗ กรัม เป็น ๒๐๐ กรัม<br><br>', '2016-09-13'),
(4, 'โรคที่เกิดจากปลาและวิธีการรักษา', 'pic/f.png', '<b>โรคและวิธีการักษา</b><br>\r\n   <b>1 โรคที่มีสาเหตุมาจากปรสิตภายนอก</b><br>\r\nปรสิตภายนอกที่ทำอันตรายต่อปลาทับทิมมีหลายชนิด โดยปรสิตจะเข้าเกาะในบริเวณเหงือก ผิวหนังและครีบ ทำให้ปลาเกิดความระคายเคือง เกิดบาดแผล ส่วนพวกที่เกาะบริเวณเหงือกจะทำให้มีผลต่อระบบการแลกเปลี่ยนก๊าซทำให้ปลาเกิดปัญหาขาดออกซิเจนได้<br>\r\n<b>ชนิดของปรสิตภายนอก ได้แก่</b><br>\r\n    <b>1. โปรโตซัว</b> พยาธิในกลุ่มนี้จะทำลายต่อลูกปลามากกว่าปลาขนาดใหญ่ ชนิดของโปรโตซัวที่พบบ่อย ได้แก่ เห็บระฆัง Trichodina sp., Chilodonella sp., Ichthyophthirius multifilis, Epistylis sp., Scyphidia sp., Apiosoma sp., และ Ichthyobodo sp.\r\nการรักษา : ใช้ฟอร์มาลิน(formalin) อัตราเข้มข้น 5 - 50 ppm.<br>\r\n    <b>2. ปลิงใส</b> ได้แก่ Gyrodactylus sp. และ Dactylogyrus sp. พวกนี้จะเข้าเกาะบริเวณเหงือกทำให้เหงือกมีผิวหนาขึ้น หรือเกิดอาการบวม ทำให้ปลาหายใจไม่สะดวก\r\nการรักษา : เช่นเดียวกับโปรโตซัว<br>\r\n    <b>3. ครัสเตเซียน</b> ได้แก่ Arhulus sp., Ergasilus sp., Lernaea sp. และ Lamproglena sp. ปรสิตในกลุ่มนี้ ส่วนของอวัยวะที่มีปลายแหลมฝังเข้าไปในเนื้อปลาเพื่อช่วยในการยึดเกาะและ / หรือกินเซลล์ หรือเลือดของปลาเป็นอาหาร ซึ่งทำอันตรายต่อปลาอย่างรุนแรง ทำให้ปลาเกิดแผลขนาดใหญ่ และสูญเสียเลือด ถ้าพบเป็นปริมาณมากจะทำให้ปลาตายอย่างรวดเร็ว ปรสิตกลุ่มนี้มักพบในปลาทับทิมที่เลี้ยงในกระชังเป็นส่วนใหญ่\r\nการรักษา : ใช้ดิพเทอร์เรกซ์(Dipterex) ในอัตราความเข้มข้น 0.25 - 0.5 ppm. แช่ตลอด<br>\r\n   <b>2 โรคที่มีสาเหตุมาจากปรสิตภายใน</b>\r\nปรสิตกลุ่มนี้มักพบอยู่ในทางเดินอาหาร และไม่ทำอันตรายต่อปลามากนัก<br>\r\n    <b>1. โปรโตซั</b>ว ชนิดที่พบในลำไส้ใหญ่ ได้แก่ Eimeria sp. ถ้ามีเป็นปริมาณมากจะทำให้ปลาผอมได้ ส่วนอีกชนิดพบในระบบหมุนเวียนโลหิต ได้แก่ Trypanosoma sp. ปรสิตชนิดนี้แม้จะตรวจพบในระบบเลือดของปลาทับทิมแต่ยังไม่มีรายงานแน่ชัดว่าทำให้ปลาทับทิมป่วยหรือตายได้<br>\r\n    <b>2. เมตาซัว </b>ได้แก่ digenetic, trematodes, cestodes, mematodes และ acanthocephalan<br>\r\n   <b>3 โรคที่มีสาเหตุมาจากแบคทีเรีย</b><br>\r\n    <b>1. โรคตัวด่าง</b> เกิดจาก Flexibacter columnaris พบในปลาทับทิมที่เลี้ยงน้ำจืด ส่วนปลาทับทิมที่เลี้ยงน้ำกร่อยจะเป็นชนิด F. maritimus โรคนี้มักพบในช่วงที่อากาศมีการเปลี่ยนแปลงกะทันหัน ในช่วงอากาศเย็น ในช่วงฝนตกหนัก และหลังจากการขนย้ายปลา ปลาที่พบว่ามีอาการตัวด่างมักตายในเวลาอันรวดเร็ว ถ้าไม่รีบรักษาทันทีปลาจะตายหมดบ่อภายใน 24 - 48 ชั่วโมง<br>\r\n<b>การรักษา :</b> ใช้ยาเหลือง Aeriflavin แช่ในอัตราความเข้มข้น 1 - 3 ppm. ถ้าลูกปลาที่อนุบาลในบ่อปูน หรือถังไฟเบอร์ อาจใช้ด่างทับทิมในอัตราความเข้มข้น 2 - 4 ppm. แช่ตลอด<br>\r\n    <b>2. โรคติดเชื้อ Aeromonas</b> ปลาจะมีอาการตกเลือดตามตัว ท้องบวม มีเลือดปนน้ำเหลืองในช่องท้องหรือมีแผลหลุม\r\nการรักษา :ใช้ยาปฏิชีวนะผสมอาหารในอัตรา3 - 5กรัมต่ออาหาร1กิโลกรัมให้ปลากินนาน5 - 7 วัน<br>\r\n    <b>3. โรคติดเชื้อ Streptococcus</b> ปลามีอาการตาขุ่น ตาบอด หรือตกเลือดภายในลูกตา บางครั้งพบว่าใต้คางหรือช่องขับถ่ายมีอาการบวมแดงมีน้ำเลือดภายในช่องท้อง โรคนี้จะเป็นลักษณะของโรคที่เรื้อรังคือ ปลาจะแสดงอาการของโรคช้าและเป็นระยะเวลานานกว่าปลาจะตาย\r\nการรักษา : ใช้ยาปฏิชีวนะผสมอาหารในอัตรา 3 - 5 กรัมต่ออาหาร 1 กิโลกรัม นาน 5 - 7 วัน<br>', '2016-09-13'),
(5, 'ข้อมูลการเลี้ยงที่เหมาะสม', 'pic/phu01031255p1.jpg', '<b>การเลือกสถานที่ </b><br>\r\n&nbsp;&nbsp;&nbsp;การเลือกสถานที่ที่เหมาะสมเป็นสิ่งที่สำคัญที่สุดในการดำเนินกิจการเลี้ยงปลาในกระชัง เพราะแหล่งน้ำที่อุดมสมบูรณ์ จะส่งผลให้ปลาเจริญเติบโตอย่างรวดเร็ว และมีอัตราการรอดสูง เป็นการทุ่นค่าใช้จ่าย ทำให้ผู้เลี้ยงได้ผลตอบแทนที่คุ้มค่า<br>\r\n 	การเลือกสถานที่ควรพิจารณาถึงปัจจัยเหมาะสม โดยสามารถแยกออกเป็น 2 ประการ คือ<br>\r\n 	&nbsp;&nbsp;&nbsp;<b>1.คุณสมบัติของน้ำ</b>  น้ำต้องมีคุณสมบัติที่ดีและมีปริมาณเพียงพอตลอดทั้งปี ตัวบ่งชี้คุณสมบัติของน้ำ ได้แก่<br>\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;•	ปริมาณออกซิเจน ปริมาณออกซิเจนที่ละลายในน้ำมีความจำเป็นต่อการดำรงชีวิตของสัตว์น้ำ มีผลต่อการเจริญเติบโต และอัตราการเปลี่ยนอาหารเป็นเนื้อ ความต้องการปริมาณออกซิเจนมีความแตกต่างกันในปลาแต่ละชนิด และขึ้นอยู่กับนิสัยการเคลื่อนไหว โดยปริมาณออกซิเจนที่พอดีสำหรับปลาหลายชนิด คือ 6 พีพีเอ็ม แหล่งน้ำที่ตรึงกระชังควรมีปริมาณออกซิเจนในน้ำในช่วงเช้า 6 พีพีเอ็ม หรือสูงกว่า ผู้เลี้ยงจึงควรหลีกเลี่ยงแหล่งน้ำเสียที่เกิดจากโรงงานอุตสาหกรรมและครัวเรือน <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;•	อุณหภูมิ ปลาบางชนิดหากมีการเปลี่ยนแปลงอุณหภูมิน้ำอย่างกะทันหัน อาจตายหรือชะงักการกินอาหารและอ่อนเพลีย ในการเลือกสถานที่ควรเลี่ยงบริเวณใกล้โรงงานที่ปล่อยน้ำร้อนลงในแหล่งน้ำ <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;•	ความเป็นกรด - ด่าง น้ำที่เหมาะสมสำหรับการเลี้ยงปลาควรมี pH ระหว่าง 6.5 - 8.5 สำหรับแหล่งน้ำกร่อยโดยทั่วไปควรมี pH อยู่ในช่วง 7.5 - 9.0 ค่อนข้างเป็นด่างเล็กน้อย น้ำจืดที่เป็นกรดทำให้ปลาอ่อนแอเป็นโรคได้ง่าย <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;•	ระดับความลึกของน้ำ บริเวณที่ตรึงกระชังควรมีความลึก 4 เมตร หรืออย่างน้อยควรให้ก้นกระชังห่างจากพื้นน้ำ 1 เมตร ในขณะที่น้ำต่ำสุด เพื่อไม่เป็นการรบกวนสัตว์หน้าดินโดยไม่จำเป็น และยังช่วยลดการติดเชื้อของปลาให้น้อยลงด้วย <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;•	กระแสน้ำ กระแสน้ำจะช่วยพัดพาเศษอาหารและของเสียออกไปนอกกระชัง เกิดการถ่ายเทของน้ำ ถ้ากระแสน้ำไหลแรงมากเกินไป ปลาจะต้องใช้พลังงานส่วนหนึ่งในการทรงตัวทำให้เจริญเติบโตช้า แต่ถ้ากระแสน้ำไหลช้าเกินไป จะทำให้เกิดการหมักหมมในกระชัง อัตราความเร็วของกระแสน้ำที่เหมาะสมอยู่ระหว่าง 0.2 - 0.5 เมตรต่อวินาที <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;•	อาหารธรรมชาติ แหล่งน้ำที่มีอาหารธรรมชาติ เช่น แพลงค์ตอน ลูกกุ้ง ลูกปลา ที่อุดมสมบูรณ์จะมีส่วนช่วยให้ปลาเจริญเติบโตและแข็งแรง <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;•	พื้นน้ำ การเลี้ยงปลาในกระชังสามารถทำได้ทุกสภาพพื้นน้ำ แต่ถ้าเป็นไปได้ควรเลือกลักษณะพื้นน้ำที่เป็นเลนปนทราย เพื่อสะดวกในการทอดสมอ และไม่มีสารอินทรีย์สะสมมากเหมือนพื้นน้ำที่เป็นดินโคลน หรือ ดินเลน <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;•	ความเค็ม ในกรณีที่เลี้ยงปลาน้ำกร่อยหรือปลาทะเล ควรเลือกแหล่งน้ำที่มีความเค็มคงสภาพอยู่เป็นเวลานาน ไม่มีการเปลี่ยนแปลงความเค็มอย่างกะทันหัน<br>\r\n 	&nbsp;&nbsp;&nbsp;<b>2. สภาพแวดล้อม</b>   หมายถึง สถานที่ใกล้แหล่งพันธุ์ปลา สามารถหาซื้ออาหารได้ง่ายและราคาถูก มีการคมนาคมที่สะดวกเป็นประโยชน์ในการลำเลียงพันธุ์ปลาและอาหาร หาแรงงานในท้องถิ่นได้ง่าย ไม่มีโจรผู้ร้าย ปราศจากศัตรูและภัยธรรมชาติ และไม่ขัดต่อกฎหมายการทำประมงและการสัญจรทางน้ำ<br>\r\n\r\n', '2016-09-13'),
(6, 'ประเภทปลาที่เหมาะสมในการเลี้ยง', 'pic/777854.jpg', '<b>การเลือกพันธุ์ปลา<b><br><br>\r\n   การเลือกซื้อพันธุ์ปลาส่วนใหญ่แล้วชาวบ้านที่นี่จะเลือกซื้อพันธุ์ปลาจากยะหริ่ง จังหวัดปัตตานีซึ่งลักษณะเด่นของพันธุ์ปลาที่นี่คือ แข็งแรง ทนต่อสภาพแวดล้อมที่นี่ได้ดี ปลาโตเร็วโดยพันธุ์ปลาที่จะนำมาปล่อยนี้ มีขนาดประมาณ 3-5 เซนติเมตรและในการปล่อยพันธุ์ปลา ชาวบ้านที่นี่นิยมปล่อยพันธุ์ปลาประมาณ 2,500-4,000 ตัวต่อกระชังซึ่งขึ้นอยู่กับความกว้างและความลึกของกระชังนั้น การปล่อยลูกพันธุ์ปลา ควรปล่อยเวลาเช้ามืด หรือช่วงเย็น', '2016-09-13'),
(7, 'อาหารและวิธีการให้อาหาร', 'pic/fish-feeding1.jpg', '<b>อาหารปลาและการให้อาหารปลา </b><br><br>\r\n&nbsp;&nbsp;&nbsp;อาหารที่ใช้เป็นอาหารชนิดลอยน้ำ โดยอาหารที่ใช้ส่วนใหญ่แล้วชาวบ้านใช้อาหารยี่ห้อ BETAGRO , PRO-CHOICE เป็นต้น โดยชาวบ้านบอกว่าสาเหตุที่เลือกใช้อาหารยี่ห้อนี่คือ ไม่แพงมากนัก ธาตุและสารอาหารครบถ้วน เหมาะที่จะเลี้ยงปลาที่มีจำนวนมากและใช้ต้นทุนต่ำ ระยะแรกการให้อาหารปลาขนาดเล็ก อาหารที่ใช้ก็เป็นอาหารขนาดเล็ก โดยเวลาในการให้อาหารแบ่งออกเป็น 3 ช่วงคือ เช้า เที่ยง และเย็นระยะที่สองคือปลาขนาดกลางไปจนถึงปลาขนาดใหญ่ ชาวบ้านใช้อาหารปลาขนาดกลาง โดยเวลาในการให้อาหารแบ่งออกเป็น 2 ช่วงคือ เช้า และเย็น การให้อาหารปลาควรหว่านอาหารให้ทั่วกระชัง และควบคุมปริมาณอาหารที่ให้ ให้เหมาะสม', '2016-09-13'),
(8, 'อุปกรณ์ในการสร้างกระชัง', 'pic/211.jpg', '&nbsp;&nbsp;&nbsp;<b>1. โครงสร้าง</b>  โครงสร้างของกระชังหรือแพ ใช้สำหรับเป็นที่แขวนลอยตัวกระชัง หรือเพื่อทำให้กระชังคงรูปอยู่ได้และแข็งแรงพอ สามารถต้านทานกระแสน้ำและคลื่นลมได้ดี กระชังจะต้องไม่เคลื่อนไหวมาก เพราะจะทำให้ปลาที่เลี้ยงตื่นตกใจ แล้วจะหยุดกินอาหารทำให้อ่อนแอ นอกจากนี้โครงสร้างของกระชังควรแข็งแรงพอต่อการเปลี่ยนแปลงของระดับน้ำขึ้นลง และควรมีทางเดินเพื่อง่ายต่อการดูแลรักษาวัสดุที่ใช้ในการสร้างโครงกระชังสามารถใช้วัสดุไดหลายอย่าง แต่ควรคำนึงถึงลักษณะภูมิประเทศและสิ่งแวดล้อมเป็นสำคัญด้วย เช่น <br>\r\n 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ก. เหล็กหรือท่อประปา มีอายุการใช้งานประมาณ 5 - 8 ปี<br>\r\n 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข. ไม้แปรรูป มีอายุการใช้งานประมาณ 4 - 6 ปี<br>\r\n 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ค. ไม้ไผ่หรือไม้เป้ง มีอายุการใช้งานประมาณ 1 - 2 ปี<br>\r\n 	&nbsp;&nbsp;&nbsp;<b>2. ตัวกระชัง</b>  เป็นส่วนที่รองรับและขังปลาให้อยู่ในพื้นที่จำกัดที่กำหนดไว้ วัสดุที่ใช้มีตั้งแต่เนื้ออวนจำพวกไนลอน โพลีเอททีลีน ซึ่งมีทั้งแบบมีปมและไม่มีปม หรือใช้วัสดุจำพวกไม้ เช่น ไม้ไผ่ ไม้เนื้ออ่อน ไม้เนื้อแข็ง และอาจจะใช้ตระแกรงชุบลวด แต่วัสดุดังกล่าวยังไม่เป็นที่นิยมมากนัก<br>\r\n 	&nbsp;&nbsp;&nbsp;<b>3. ทุ่นลอย </b>   เป็นส่วนที่ช่วยพยุงให้กระชังสามารถลอยน้ำอยู่ได้ วัสดุที่ใช้เป็นทุ่นมีหลายชนิด การเลือกใช้ควรคำนึงถึงวัสดุที่หาได้ในท้องถิ่นและมีราคาถูก มีความสะดวกในการซ่อมแซม งานได้ทนทานและสามารถลอยน้ำได้ดี<br>\r\n 	&nbsp;&nbsp;&nbsp;<b>4. ตุ้มถ่วงน้ำหนัก</b> ใช้ประโยชน์สำหรับตรึงแพที่ใช้แขวนลอยกระชัง โดยใช้เชือกหรือสายสลิงค์ยึดแพกระชังทั้ง 4 มุม แล้วใช้ตุ้มถ่วงโดยฝังลงสู่พื้นดินท้องน้ำ และใช้เพื่อตรึงเนื้ออวนของกระชังให้ตึงอยู่เสมอ เมื่อมีกระแสน้ำและกระแสลมพัดกระชังอวนก็จะไม่ไปรวมตัวไปอยู่ที่มุมใดมุมหนึ่ง<br>\r\n&nbsp;<b>อุปรณ์ในการสร้างกระชัง</b><br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. ท่อเหล็กเส้นผ่าศูนย์กลาง 1 นิ้วครึ่ง  ความหนาปานกลาง ถึงหนามาก ความยาวท่อนละ 6 เมตร สำหรับทำโครงแพขนาด กว้าง 6 เมตร ยาว 24 เมตร<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. ท่อเหล็กเส้นผ่าศูนย์กลาง 1.25 นิ้ว  ความยาวท่อนละ 20 เซนติเมตร สำหรับเป็นไส้สอดเชื่อมต่อท่อเหล็กเส้นผ่าศูนย์กลาง 1 นิ้วครึ่ง เข้าด้วยกัน<br>\r\n        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. ตัวประกับ   สำหรับใช้ยึดท่อเหล็กเส้นผ่าศูนย์กลาง 1 นิ้วครึ่ง   เพื่อประกอบเป็นโครงแพ ( วิธีการทำตัวประกับ อยู่ในรายละเอียด )<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. ทุ่นลอย   เป็นถัง 200 ลิตร<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. สายรัดทุ่นลอยเข้ากับโครงแพ   ทำจากเหล็กแผ่นหน้ากว้าง 2 นิ้ว ( วิธีการทำสายรัดอยู่ในรายละเอียด )<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. สีกันสนิม   และสีน้ำมันสีขาวสำหรับเคลือบกันสนิม<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7. ท่อ พีวีซี   เส้นผ่าศูนย์กลาง 4 นิ้ว ผ่าออกหนึ่งในสี่ ความยาว 6.5 เมตร สำหรับใช้ใส่สีกันสนิมหรือสีน้ำมันเพื่อใช้ท่อลงไปชุบเคลือบกันสนิม ทั้งภายในและภายนอก<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	ประกับท่อ 1 นิ้วครึ่ง ใช้เพลานิ้ว 6 หุน ท่อนิ้ว 2 หุน ใช้เพลานิ้วครึ่ง <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	การกดร่องตัวประกับ จัดแต่ละล๊อดห่างกัน 17 เซนติเมตร จากปากกาถึงแท่นเหล็กรองทำร่องการจัดชุดทำร่องให้ตั้งแท่นเหล็กทำร่องก่อน ถึงตั้งปากกาโดยให้กึ่งกลางของปากกาห่างจากขอบในปากกกา 24 เซนติเมตร โดยให้ตั้งฉากกัน <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	การเคลือบสี สีกันสนิม 2 กระป๋อง ชุบท่อเหล็กยาว 6 เมตรได้เท่ากับ 40 ท่อน <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	รางชุบเหล็กท่อทำจากพีวีซี เส้นผ่าศูนย์กลาง 4 นิ้ว ชุบสีกันสนิมแล้วทิ้งไว้ 2 วัน ให้สีแห้งสนิท แล้วจึงจะสามารถชุบสีขาวเคลือบได้ ไม่เช่นนั้นตัวสีกันสนิมไม่แห้งสนิท เมื่อชุบสีขาวเคลือบก็จะถูกทินเนอร์กัดสีกันสนิมลอกได้ <br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•	โครงกระชัง ทำจากท่อเหล็กเรียก " เหล็กแป๊บดำ " มี 3 ขนาด หนาบาง , หนาปานกลางเหมาะสำหรับใช้ทำโครงแพ , หนาที่สุด ( สีเขียวคาด )\r\n\r\n', '2016-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orders`
--

CREATE TABLE `tb_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_total` varchar(11) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `card` varchar(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` varchar(20) NOT NULL DEFAULT 'รอชำระเงิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_orders`
--

INSERT INTO `tb_orders` (`order_id`, `user_id`, `order_total`, `Fullname`, `address`, `phone`, `card`, `order_date`, `order_status`) VALUES
(1, 12, '81200', 'สมงิ  ไปนอนนะ', 'บ้าน', '0914182005', '55555', '2016-10-01 10:29:46', 'ชำระเงินแล้ว'),
(2, 9, '740', 'บุญชู  ไปนอนนะ', 'บ้าน', '0914182003', '6666666', '2016-10-01 10:22:33', 'ชำระเงินแล้ว'),
(3, 9, '227', 'บุญชู  ไปนอนนะ', 'บ้าน', '0914182005', '2930379057', '2016-10-02 05:22:18', 'ชำระเงินแล้ว'),
(4, 20, '290', 'บุญเสริม  ไปนอนนะ', '30/2 บ้านหนองสองห้อง ต.ศรีสมเด็จ อ.ศรีสมเด็จ จ.ร้อยเอ็ด 45000', '0914182004', '2930379000', '2016-10-01 18:15:15', 'รอชำระเงิน'),
(6, 9, '875', 'บุญชู  ไปนอนนะ', 'ร้อยเอ็ด-สารคาม', '0914182005', '2930379055', '2016-10-01 18:25:21', 'รอชำระเงิน'),
(8, 20, '4295', 'บุญเสริม  ไปนอนนะ', '30/2 บ้านหนองสองห้อง ต.ศรีสมเด็จ อ.ศรีสมเด็จ จ.ร้อยเอ็ด 45000', '0914182004', '290379050', '2016-10-01 20:27:00', 'รอชำระเงิน'),
(9, 11, '1199', 'ทองเหม็น  ไปนอนนะ', 'กรุงศรี', '0914182006', '2900379054', '2016-10-01 20:29:45', 'รอชำระเงิน'),
(10, 12, '290', 'สมงิ  ไปนอนนะ', 'ร้อยเอ็ด', '0914180000', '9999999999', '2016-10-02 05:50:17', 'รอชำระเงิน'),
(11, 11, '1064', 'ทองเหม็น  ไปนอนนะ', 'กรุงศรี', '0914182006', '55555555555', '2016-10-02 06:12:53', 'รอชำระเงิน'),
(12, 12, '443', 'สมงิ  ไปนอนนะ', 'ร้อยเอ็ด', '0914180000', '77777777', '2016-10-02 07:05:01', 'รอชำระเงิน'),
(13, 12, '40700', 'สมงิ  ไปนอนนะ', 'ร้อยเอ็ด', '0914180000', '55555555', '2016-10-02 07:06:00', 'รอชำระเงิน');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_details`
--

CREATE TABLE `tb_order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_order_details`
--

INSERT INTO `tb_order_details` (`order_detail_id`, `order_id`, `p_id`, `p_price`, `p_number`) VALUES
(25, 1, 10, 90, 1000),
(26, 2, 1, 60, 10),
(27, 3, 13, 3, 10),
(28, 4, 12, 1, 100),
(29, 5, 11, 1, 30),
(30, 6, 2, 5, 150),
(31, 7, 9, 80, 70),
(32, 8, 7, 70, 65),
(33, 9, 2, 5, 222),
(34, 10, 12, 1, 100),
(35, 11, 9, 80, 12),
(36, 12, 13, 3, 90),
(37, 13, 10, 90, 500);

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `pm_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pm_pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pm_date` date NOT NULL,
  `bank_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_payment`
--

INSERT INTO `tb_payment` (`pm_id`, `order_id`, `pm_pic`, `pm_date`, `bank_id`) VALUES
(1, 1, 'pic/OLG07Y8BMH_image.jpeg', '2016-10-04', '11'),
(2, 3, 'pic/OLG07Y8BMH_image.jpeg', '2016-10-04', '12'),
(3, 6, 'pic/OLG07Y8BMH_image.jpeg', '2016-10-06', '13'),
(4, 8, 'pic/OLG07Y8BMH_image.jpeg', '2016-10-08', '12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_postmessage`
--

CREATE TABLE `tb_postmessage` (
  `post_id` int(11) NOT NULL,
  `tp_id` int(11) NOT NULL,
  `post_header` text COLLATE utf8_unicode_ci NOT NULL,
  `post_pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_postmessage`
--

INSERT INTO `tb_postmessage` (`post_id`, `tp_id`, `post_header`, `post_pic`, `post_detail`, `post_date`) VALUES
(1, 4, 'ด่วน ! ลดกระหน่ำสินค้าลดราคา', 'pic/c8.jpg', 'สมัครสมาชิกวันนี้ฟรี ! รับสิทธิพิเศษซื้อสินค้าพร้อมราคาแบบสบายกระเป๋า เพียงซื้อสินค้าในราคา 2000 บาทขึ้นไป ลดทันที 50%', '2016-09-08'),
(2, 1, 'แนวทางการแก้ไขปัญหาเมื่อเกิดโรค', 'pic/f.png', '1.ลดหรืองดให้อาหาร เนื่องจากโดยปกตินั้นมักพบว่าเมื่อปลาเริ่มป่วยอัตราการกินอาหารของปลาจะลดลง ดังนั้นเกษตรกรควรลดระดับการให้อาหารแก่ปลาเพื่อป้องกันการสูญเสียอาหารและการหมักหมมของอาหารเหลือที่อาจเป็นอาหารของเชื้อโรคในน้ำ<br>\r\n\r\n2.หาสาเหตุที่แท้จริงของการเกิดโรค โดยการนำตัวอย่างปลาป่วยส่งให้หน่วยงานของรัฐที่รับผิดชอบเพื่อทำการตรวจวินิจฉัยให้ทันท่วงที โดยปลาที่จะนำส่งตรวจนั้นต้องอยู่ในสภาพที่มีชีวิตเท่านั้นจึงจะทำให้การตรวจวินิจฉัยสามารถทำได้อย่างถูกต้องและแม่นยำที่สุด<br>\r\n\r\n3.ใช้ยาหรือสารเคมีอย่างมีเหตุผล ถูกต้อง ตามความจำเป็น เมื่อพบว่าสาเหตุที่แท้จริงของการเกิดโรคมาจากแบคทีเรีย แนวทางที่สามารถรักษาปลาที่มีประสิทธิภาพและเกษตรกรสามารถทำได้คือ การผสมอาหาร ซึ่งช่วงที่ถูกต้องที่สุดในการรักษาคือ ช่วงที่พบว่าปลามีอัตราการตายระหว่าง 1-3% แรก เนื่องจากเป็นช่วงที่ปลามีการติดเชื้อน้อยอยู่ หากปล่อยให้อัตราการตายสูงขึ้นมากกว่า 20-30% ในขณะนั้นปลาส่วนใหญ่จะไม่กินอาหาร ทำให้การตอบสนองต่อการให้ยาปลาและความสำเร็จในการควบคุมโรคปลาให้มีโอกาสหายน้อย<br>\r\n\r\n4.นำปลาที่เป็นโรคออกจากพื้นที่บ่อเลี้ยงหรือกระชัง โดยการนำไปฝัง เผาทำลายหรือใช้ความร้อนในการประกอบอาหาร จะเป็นการลดหรือตัดวงจรของการแพร่ระบาดของเชื้อโรคได้ โดยเฉพาะการเลี้ยงปลาในบ่อดินขนาดใหญ่ ซึ่งเป็นที่น่าสังเกตว่าปลาเป็นโรคส่วนใหญ่จะว่ายลอยบริเวณท้ายบ่อ ขณะที่ปลาแข็งแรงยังขึ้นกินอาหารที่หัวบ่อ เกษตรกรสามารถใช้อวนแหเพื่อจับปลาท้ายบ่อออกไปและให้ยาผสมอาหารสำหรับปลาที่ยังกินอาหาร ร่วมกับการเสริมวิตามิน ซี เพื่อเสริมความต้านทานของระบบภูมิคุ้มกันของปลา จะสามารถรักษาและลดอัตราการตายของปลาได้อย่างมีประสิทธิภาพ<br>', '2016-09-08'),
(5, 2, 'ด่วน วันนี้', 'pic/1378964517.JPG', '-', '2016-09-12'),
(6, 3, 'ร่วมตอบคำถามชิงเงินรางวัล', 'pic/Questions1.jpg', 'ร่วมตอบคำถามชิงเงินรางวัล 5000 บาท', '2016-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pre_order`
--

CREATE TABLE `tb_pre_order` (
  `pr_id` int(11) NOT NULL,
  `pr_supli` varchar(100) NOT NULL,
  `pr_list` varchar(100) NOT NULL,
  `pr_date` date NOT NULL,
  `pr_price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `p_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `p_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_price` float NOT NULL,
  `p_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`p_id`, `category_id`, `p_name`, `p_pic`, `p_price`, `p_number`, `p_date`) VALUES
(1, 2, 'ปลานิล', 'pic/789786456341231.jpg', 60, '777', '2016-09-08'),
(2, 1, 'ลูกปลานิล', 'pic/789786456341231.jpg', 5, '4778', '2016-09-08'),
(7, 2, 'ปลาช่อน', 'pic/fishchon.jpg', 70, '526', '2016-09-18'),
(8, 2, 'ปลาไน', 'pic/14301952581430195421l.jpg', 50, '755', '2016-09-18'),
(9, 2, 'ปลาดุก', 'pic/119951700.jpg', 80, '893', '2016-09-23'),
(10, 2, 'ปลานิลทับทิม', 'pic/oreochromis_niloticus_tubtim.jpg', 90, '4500', '2016-09-23'),
(11, 1, 'ลูกปลาสร้อยขาว', 'pic/img_25560906101811.jpg', 0.5, '1770', '2016-09-23'),
(12, 1, 'ลูกปลาหมอ', 'pic/1231541321.jpg', 1, '5000', '2016-09-23'),
(13, 1, 'ลูกปลานิลทับทิม', 'pic/planil-20_s.png', 3, '1800', '2016-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_questions`
--

CREATE TABLE `tb_questions` (
  `q_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `q_topic` text COLLATE utf8_unicode_ci NOT NULL,
  `q_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `q_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_type_post`
--

CREATE TABLE `tb_type_post` (
  `tp_id` int(11) NOT NULL,
  `tp_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_type_post`
--

INSERT INTO `tb_type_post` (`tp_id`, `tp_title`) VALUES
(1, 'ประกาศ'),
(2, 'อัพเดท'),
(3, 'กิจกรรม'),
(4, 'โปรโมชั่น'),
(5, 'ข่าวใหม่555');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_word` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `lname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `pass_word`, `fname`, `lname`, `address`, `phone`, `status`) VALUES
(1, 'admin', '1234', 'Admin', 'System', 'Roi-et', '0914182005', 1),
(9, 'kealtisak', '56011217007', 'บุญชู', 'ไปนอนนะ', 'ร้อยเอ็ดอิอิ', '0914182005', 2),
(10, 'user001', '00001', 'test', 'test', 'test', '0914182003', 2),
(11, 'aoc24th', 'q1212312121', 'ทองเหม็น', 'ไปนอนนะ', 'กรุงศรี', '0914182006', 2),
(12, 'anatomejung', '1212312121', 'สมงิ', 'ไปนอนนะ', 'ร้อยเอ็ด', '0914180000', 2),
(13, 'testkai001', 'q1212312121', 'บุญมา', 'ไปนอนนะ', 'บ้านหนองสองห้อง ', '0914182003', 2),
(14, 'testkai002', 'q1212312121', 'สมบัติ', 'ไปนอนนะ', 'สารคาม', '0914182006', 2),
(16, 'testkai004', 'q1212312121', 'testkai004', 'testkai004', 'ขอนแก่น', '0914182006', 2),
(17, 'testkai005', 'q1212312121', 'testkai005', 'testkai005', 'สารคาม', '0914182006', 2),
(18, 'testkai006', 'q1212312121', 'testkai006', 'testkai006', 'ร้อยเอ็ด 555', '0914182002', 2),
(19, 'testkai007', 'q1212312121', 'testkai007', 'testkai007', 'บ้าน', '0914182005', 2),
(20, 'testkai000', 'gg1212312121', 'บุญเสริม', 'ไปนอนนะ', '30/2 บ้านหนองสองห้อง ต.ศรีสมเด็จ อ.ศรีสมเด็จ จ.ร้อยเอ็ด 45000', '0914182004', 2),
(21, 'test01', 'q1212312121', 'บุญมา', 'ไปนอนนะ', 'สารคาม', '0914182006', 2),
(23, 'thawatchai', 'abc123', 'thawatchai', 'chomsiri', 'mk', '0814019995', 2),
(24, 'dog', 'abc', 'dog', 'dog', 'dog', '0914182006', 2);

-- --------------------------------------------------------

--
-- Table structure for table `webboard`
--

CREATE TABLE `webboard` (
  `QuestionID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `CreateDate` datetime NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Details` text NOT NULL,
  `Name` varchar(50) NOT NULL,
  `View` int(5) NOT NULL,
  `Reply` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webboard`
--

INSERT INTO `webboard` (`QuestionID`, `CreateDate`, `Question`, `Details`, `Name`, `View`, `Reply`) VALUES
(00001, '2016-09-17 12:10:55', 'ขอสูตรการผสมอาหารปลาหน่อยครับ', 'ปลาไม่ค่อยกินอาหาร โตช้า ขอคำแนะนำจากผู้รู้หน่อยครับว่าจะผสมอาหารยังไงให้ปลากินและโตเร็ว รบกวนด้วยครับ _/\\_', 'เอ็ม  โพนชัด', 31, 8),
(00002, '2016-09-18 09:03:08', 'ขอคำแนะนำกระชังปลา', 'อยากรู้ว่าสร้างกระชังแบบไหนดี สร้างแบบไหนทนใช้งานได้นาน', 'บุญชู  ไปนอนนะ', 14, 3),
(00003, '2016-09-27 09:43:48', 'แนะนำอุปกรณ์ในการสร้างกระชังที่ทนๆหน่อยครับ', 'แนะนำอุปกรณ์ในการสร้างกระชังที่ทนๆหน่อยครับ เนื่องจากของที่ใช้แล้วมันไม่ทน ', 'สมงิ  ไปนอนนะ', 12, 5),
(00004, '2016-09-30 11:38:13', 'แนะนำร้านขายอาหารปลานิลถูกๆหน่อย', 'ใครพอจะมีร้านขายอาหารปลาถูกๆ แนะนำร้านขายอาหารปลานิลถูกๆหน่อยครับ', 'testkai007  testkai007', 2, 0),
(00005, '2016-09-30 17:58:02', 'ฝนตกไหม555', 'พรุ้งนี้ฝนตกไหม555', 'บุญเสริม  ไปนอนนะ', 15, 5),
(00006, '2016-10-01 04:35:47', 'วันนี้สอบ', 'สอบบ', 'สมงิ  ไปนอนนะ', 9, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`ReplyID`);

--
-- Indexes for table `tb_answers`
--
ALTER TABLE `tb_answers`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_deadfish`
--
ALTER TABLE `tb_deadfish`
  ADD PRIMARY KEY (`dead_id`);

--
-- Indexes for table `tb_feed`
--
ALTER TABLE `tb_feed`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `tb_fish`
--
ALTER TABLE `tb_fish`
  ADD PRIMARY KEY (`fish_id`);

--
-- Indexes for table `tb_growth`
--
ALTER TABLE `tb_growth`
  ADD PRIMARY KEY (`growth_id`);

--
-- Indexes for table `tb_knowledge`
--
ALTER TABLE `tb_knowledge`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb_order_details`
--
ALTER TABLE `tb_order_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`pm_id`);

--
-- Indexes for table `tb_postmessage`
--
ALTER TABLE `tb_postmessage`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tb_pre_order`
--
ALTER TABLE `tb_pre_order`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tb_questions`
--
ALTER TABLE `tb_questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `tb_type_post`
--
ALTER TABLE `tb_type_post`
  ADD PRIMARY KEY (`tp_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `webboard`
--
ALTER TABLE `webboard`
  ADD PRIMARY KEY (`QuestionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `ReplyID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_answers`
--
ALTER TABLE `tb_answers`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_deadfish`
--
ALTER TABLE `tb_deadfish`
  MODIFY `dead_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_feed`
--
ALTER TABLE `tb_feed`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_fish`
--
ALTER TABLE `tb_fish`
  MODIFY `fish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_growth`
--
ALTER TABLE `tb_growth`
  MODIFY `growth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_knowledge`
--
ALTER TABLE `tb_knowledge`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_order_details`
--
ALTER TABLE `tb_order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_postmessage`
--
ALTER TABLE `tb_postmessage`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_pre_order`
--
ALTER TABLE `tb_pre_order`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_questions`
--
ALTER TABLE `tb_questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_type_post`
--
ALTER TABLE `tb_type_post`
  MODIFY `tp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `webboard`
--
ALTER TABLE `webboard`
  MODIFY `QuestionID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;