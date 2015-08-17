-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-08-15 10:28:16
-- 服务器版本： 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dankal`
--

-- --------------------------------------------------------

--
-- 表的结构 `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`account_id` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(100) NOT NULL,
  `head` char(15) NOT NULL,
  `longnum` char(20) NOT NULL,
  `shortnum` char(6) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `account`
--

INSERT INTO `account` (`account_id`, `username`, `password`, `head`, `longnum`, `shortnum`) VALUES
(19, '', 'd41d8cd98f00b204e9800998ecf8427e', 'default.png', '', ''),
(20, '汝鹏', '2aff7dde3c7e65aade683b431ed682b2', 'default.png', '12345678911', '123456'),
(21, '你好', '27be97366ad8e58c7ec15badc5cf95a6', 'default.png', '12345678911', '123456'),
(22, '赢', '86bcb958edfd3e583a6cb23cf325d562', 'default.png', '333333333333', '949466'),
(23, '赢', '86bcb958edfd3e583a6cb23cf325d562', 'default.png', '333333333333', '949466'),
(24, '赢', '86bcb958edfd3e583a6cb23cf325d562', 'default.png', '333333333333', '949466'),
(25, '赢', 'd41d8cd98f00b204e9800998ecf8427e', 'default.png', '33', '949466'),
(26, '赢', 'd41d8cd98f00b204e9800998ecf8427e', 'default.png', '33', '949466');

-- --------------------------------------------------------

--
-- 表的结构 `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
`contacts_id` int(11) NOT NULL,
  `account_id` int(11) DEFAULT NULL,
  `phonebook_id` char(255) NOT NULL,
  `name` char(20) NOT NULL,
  `longnum` char(20) NOT NULL,
  `shortnum` char(6) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=441 ;

--
-- 转存表中的数据 `contacts`
--

INSERT INTO `contacts` (`contacts_id`, `account_id`, `phonebook_id`, `name`, `longnum`, `shortnum`, `visible`) VALUES
(393, NULL, '48|49|50', '蔡润涛', '13246760334', '641022', NULL),
(394, NULL, '48|49|50', '蔡烁', '13760242257', '672257', NULL),
(395, NULL, '48|49|50', '陈成涛', '15627922932', '', NULL),
(396, NULL, '48|49|50', '陈嘉娣', '13760235740', '615740', NULL),
(397, NULL, '48|49|50', '陈绍坚', '13760239854', '691058', NULL),
(398, NULL, '48|49|50', '陈友奇', '13760241949', '', NULL),
(399, NULL, '48|49|50', '陈媛媛', '13760237215', '677215', NULL),
(400, NULL, '48|49|50', '陈志虹', '13760236745', '666745', NULL),
(401, NULL, '48|49|50', '邓国才', '13760240481', '680481', NULL),
(402, NULL, '48|49|50', '邓小明', '13760240202', '660202', NULL),
(403, NULL, '48|49|50', '冯铁生', '13760238504', '641034', NULL),
(404, NULL, '48|49|50', '何林辉', '13760239979', '', NULL),
(405, NULL, '48|49|50', '黄鸿', '13760242311', '691064', NULL),
(406, NULL, '48|49|50', '黄天赐', '13246707007', '', NULL),
(407, NULL, '48|49|50', '黄雪丽', '13760242171', '662171', NULL),
(408, NULL, '48|49|50', '黄奕源', '13691800673', '', NULL),
(409, NULL, '48|49|50', '康胜程', '13760238214', '641031', NULL),
(410, NULL, '48|49|50', '赖柏祥', '13923025972', '', NULL),
(411, NULL, '48|49|50', '李静芳', '13760241766', '611766', NULL),
(412, NULL, '48|49|50', '李明灿', '15814423381', '', NULL),
(413, NULL, '48|49|50', '林诗淦', '13760239052', '641039', NULL),
(414, NULL, '48|49|50', '林展州', '18902431855', '', NULL),
(415, NULL, '48|49|50', '罗华', '13760239771', '641044', NULL),
(416, NULL, '48|49|50', '罗汝鹏', '13760237549', '667549', NULL),
(417, NULL, '48|49|50', '马锋阳', '13760238491', '', NULL),
(418, NULL, '48|49|50', '孙佩芬', '13760237078', '667087', NULL),
(419, NULL, '48|49|50', '唐儒景', '13414922187', '', NULL),
(420, NULL, '48|49|50', '万志彬', '13760238959', '668959', NULL),
(421, NULL, '48|49|50', '王达铭', '13760238501', '668501', NULL),
(422, NULL, '48|49|50', '王玉华', '13246706635', '', NULL),
(423, NULL, '48|49|50', '温苏彬', '18026933012', '', NULL),
(424, NULL, '48|49|50', '吴前锐', '13246706393', '', NULL),
(425, NULL, '48|49|50', '谢秋青', '13760237002', '667002', NULL),
(426, NULL, '48|49|50', '许耿超', '18026931059', '', NULL),
(427, NULL, '48|49|50', '杨雁皓', '13728728140', '', NULL),
(428, NULL, '48|49|50', '杨政敏', '13760240027', '660027', NULL),
(429, NULL, '48|49|50', '姚梓鹏', '13760242177', '', NULL),
(430, NULL, '48|49|50', '叶子鹏', '13760240353', '641051', NULL),
(431, NULL, '48|49|50', '余逸夫', '15914121647', '', NULL),
(432, NULL, '48|49|50', '余志伟', '13760237235', '', NULL),
(433, NULL, '48|49|50', '袁小惋', '13760242173', '662173', NULL),
(434, NULL, '48|49|50', '张楚韬', '13246707010', '', NULL),
(435, NULL, '48|49|50', '郑业成', '18033412875', '', NULL),
(436, NULL, '48|49|50', '钟燕乔', '13246750585', '', NULL),
(437, NULL, '48|49|50', '钟卓美', '13760238564', '688564', NULL),
(438, NULL, '48|49|50', '朱梅', '13760238935', '668935', NULL),
(439, NULL, '48|49|50', '诸惠奇', '13760237552', '667552', NULL),
(440, NULL, '48|49|50', '庄瑞丹', '13760236847', '641019', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `phonebook`
--

CREATE TABLE IF NOT EXISTS `phonebook` (
`phonebook_id` int(11) NOT NULL,
  `name` char(16) NOT NULL,
  `intr` char(32) NOT NULL,
  `logo` char(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- 转存表中的数据 `phonebook`
--

INSERT INTO `phonebook` (`phonebook_id`, `name`, `intr`, `logo`) VALUES
(48, '13移动互联3-2班(A表）', '13移动互联3-2班(A表)13移动互联3-2班(A表)13移动', '../logo/75671802282cf01687100cf38132879a.png'),
(49, '13移动互联3-2班(B表）', '13移动互联3-2班(B表)13移动互联3-2班(B表)13移动', '../logo/a5f1feabe02a86998725e25a325674db.png'),
(50, '13移动互联3-2班(C表）', '13移动互联3-2班(C表)13移动互联3-2班(C表)13移动', '../logo/6841ec7486dd6057713975117fd92060.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`contacts_id`);

--
-- Indexes for table `phonebook`
--
ALTER TABLE `phonebook`
 ADD PRIMARY KEY (`phonebook_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `contacts_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=441;
--
-- AUTO_INCREMENT for table `phonebook`
--
ALTER TABLE `phonebook`
MODIFY `phonebook_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
