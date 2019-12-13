-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-13 08:47:01
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `information`
--

CREATE TABLE `information` (
  `id` int(10) NOT NULL,
  `acc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `addr` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Education` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `information`
--

INSERT INTO `information` (`id`, `acc`, `pw`, `name`, `birthday`, `addr`, `profile`, `Education`, `major`) VALUES
(1, 'evan3826t', '123', '谷啟祥', '1995-09-08', '新北市土城區', '我出生在一個很平凡但很美滿的小家庭，父親是個公務員，在台電服務，母親是個家庭主婦，而弟弟和我都還在學校求學。父母用民主的方式管教我們，希望我們能夠獨立自主、主動學習，累積人生經驗，但他們會適時的給予鼓勵和建議，父母親只對我們要求兩件事，第一是保持健康，第二是著重課業。因為沒有健康的身體，就算有再多的才華、再大的抱負也無法發揮出來。又因為家境並不富裕，所以必須專心於課業上，學得一技之長，將來才能自立更生。\n\n          在小學時代的我很活潑、很好動，在課業上表現平平，但課外表現不錯，除了擔任過班長等幹部外，還參加樂隊、糾察隊等，另外還曾獲選為校隊參加跳高比賽。\n\n         小學畢業後，進入了一所私立中學，因為校規嚴格，使原本好動的我變得較為文靜，不過在那裡我學會了許多應有的禮節與待人處世的道理。在國中時期的我，好像開了竅，代表全校接受縣政府的表揚，在國三畢業典禮上，更代表了全體畢業生上台領取畢業證書。\n\n         進附中後，每天都覺得很充實、很快樂。附中學生的特色是能K、能玩，所以我不斷地努力學習，希望能夠達到此目標。在課業方面，我都能保持在一定的水準，因為上課專心聽講、仔細思考、體會老師所說的每一句話，在腦海裡架構重要觀念，一有問題就立刻發問，因此上課的吸收效率很高，不但使得複習的工作能夠很快完成，還有多餘的時間從事課外活動。在這麼多的科目當中，我最喜歡的是數學、化學和生物，因為數學、化學能夠訓練我們組織與思考能力。而生物則和日常生活有密切的關係，且它為我們揭開人體的奧秘。\n\n         我在學校人際關係良好，因為無論何時，總是笑臉迎人，微笑已成為我個人的正字招牌。老師們常稱讚我是個品學兼優的好學生，常給我許多的鼓勵，而同學間的相處十分融洽，彼此之間很有默契，團結一心。\n\n         除了課業之外，其他方面我也沒有偏廢。在高一時加入學校管樂隊，吹奏低音號，每天升旗參加出勤，在這裡不但使我對管樂器有進一步的認識，還認識了許多朋友，因此在那個時候，參加社團已成為我放學後的一大休閒。而我最喜歡的運動是棒球，我常在電視上或球場上觀賞職棒比賽，欣賞球員的美姿，模仿其動作。我常利用課餘時間約同學一起出外打球，記得在高二時，班上組隊參加班際壘球賽，那時我擔任隊長，防守二壘，首先展開攻勢，激起球隊士氣，最後終以一分之差贏得了最後勝利。除了棒球之外，我也很喜歡藍球、排球等，因此使得原本瘦弱的身體，變得強壯許多。\n\n         我從小就立志要當醫生，近年來當我接觸了有關醫學系的相關資訊，漸漸地了解到當個醫生並不是那麼簡單的事，需要對服務人群有興趣，及擅長人際溝通，且在求學的過程中也相當辛苦。但疾病加諸在病人身上的痛苦是無法言諭的，來自醫生的關懷與勉勵，能讓病人產生無比的信念，勇敢地向疾病宣戰，在病人痊癒時，看到病人及家屬喜形於色，那種喜悅，令我十分嚮往，而且醫生不僅僅是要免除病人的疾病和虛弱，也要能兼顧對人們的整體關懷，使病患的身心達到安寧的狀態，在這一方面，它讓我更確定了讀醫學系的志向。', '台北科技大', '機械工程系');

-- --------------------------------------------------------

--
-- 資料表結構 `license`
--

CREATE TABLE `license` (
  `id` int(10) NOT NULL,
  `license` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `license`
--

INSERT INTO `license` (`id`, `license`) VALUES
(1, '電腦輔助立體製圖');

-- --------------------------------------------------------

--
-- 資料表結構 `newwork`
--

CREATE TABLE `newwork` (
  `id` int(10) NOT NULL,
  `work_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(10) NOT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `newwork`
--

INSERT INTO `newwork` (`id`, `work_type`, `location`, `salary`, `position`, `sh`) VALUES
(2, '全職', '新北市', 45000, '後端工程師', 0),
(8, '全職', '新北市', 45000, '全端工程師', 0),
(9, '全職', '新北市', 45000, '全端工程師', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `name` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '原始檔名',
  `type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '檔案類型',
  `path` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '檔案路徑',
  `text` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '說明'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `type`, `path`, `text`) VALUES
(19, 'calendar.jpg', 'image/jpeg', './img/calendar.jpg', '萬年曆'),
(20, 'invoice.jpg', 'image/jpeg', './img/invoice.jpg', '發票程式'),
(21, 'log_in.jpg', 'image/jpeg', './img/log_in.jpg', '註冊登入系統');

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `skill` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `skill`) VALUES
(1, 'JavaScript'),
(5, 'CSS'),
(17, 'HTML'),
(18, 'PHP'),
(19, 'LabVIEW'),
(20, 'Solidworks'),
(21, 'SolidEdge'),
(22, 'autoCAD'),
(23, 'C++');

-- --------------------------------------------------------

--
-- 資料表結構 `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `work` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `work`
--

INSERT INTO `work` (`id`, `work`, `position`) VALUES
(1, '創研光電', '機構工程師');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `newwork`
--
ALTER TABLE `newwork`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `license`
--
ALTER TABLE `license`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `newwork`
--
ALTER TABLE `newwork`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
