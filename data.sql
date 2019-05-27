-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.7.25 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  9.5.0.5284
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 导出 test 的数据库结构
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `test`;

-- 导出  表 test.caiwu 结构
CREATE TABLE IF NOT EXISTS `caiwu` (
  `id` int(11) NOT NULL,
  `date` varchar(45) COLLATE utf8_bin NOT NULL,
  `name` varchar(45) COLLATE utf8_bin NOT NULL,
  `money` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `depart` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `user` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  test.caiwu 的数据：~5 rows (大约)
DELETE FROM `caiwu`;
/*!40000 ALTER TABLE `caiwu` DISABLE KEYS */;
INSERT INTO `caiwu` (`id`, `date`, `name`, `money`, `depart`, `user`) VALUES
	(160000001, '2019.5.2', '保险', '-10000', '人力资源部', '路人丙'),
	(160000002, '2019.4.23', '采购费用', '-20000', '后勤部', '路人丙'),
	(160000003, '201.3.5', '工资', '-50000', '财务部', '张三'),
	(160000004, '2019.5.21', '清洁费用', '-3000', '后勤部', '张三'),
	(160000005, '2019.2.9', '销售进账', '200000', '营销中心', '路人丙');
/*!40000 ALTER TABLE `caiwu` ENABLE KEYS */;

-- 导出  表 test.tb_apply 结构
CREATE TABLE IF NOT EXISTS `tb_apply` (
  `no` char(50) NOT NULL,
  `goods` char(50) NOT NULL,
  `goods_class` char(50) NOT NULL,
  `apply_person` char(50) NOT NULL,
  `apply_date` date NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  test.tb_apply 的数据：~5 rows (大约)
DELETE FROM `tb_apply`;
/*!40000 ALTER TABLE `tb_apply` DISABLE KEYS */;
INSERT INTO `tb_apply` (`no`, `goods`, `goods_class`, `apply_person`, `apply_date`, `state`) VALUES
	('A0001', '惠普A0', '计算机', '赵赞', '2019-05-20', 1),
	('A0002', '索尼B1', '打印机', '张三', '2019-05-20', 0),
	('A0003', '晨光X5', '消耗品', '李四', '2019-05-20', 0),
	('A0004', '惠普FA', '复印机', '王五', '2019-05-20', 2),
	('A0005', '红旗', '车辆', '赵六', '2019-05-20', 0);
/*!40000 ALTER TABLE `tb_apply` ENABLE KEYS */;

-- 导出  表 test.tb_expense 结构
CREATE TABLE IF NOT EXISTS `tb_expense` (
  `no` char(50) NOT NULL,
  `a_p` char(50) NOT NULL,
  `a_d` date NOT NULL,
  `a_m` float NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  test.tb_expense 的数据：~3 rows (大约)
DELETE FROM `tb_expense`;
/*!40000 ALTER TABLE `tb_expense` DISABLE KEYS */;
INSERT INTO `tb_expense` (`no`, `a_p`, `a_d`, `a_m`, `state`) VALUES
	('E0001', '张三', '2019-05-20', 1000, 0),
	('E0002', '李四', '2019-05-20', 2000, 1),
	('E0003', '王五', '2019-05-20', 5000, 2);
/*!40000 ALTER TABLE `tb_expense` ENABLE KEYS */;

-- 导出  表 test.tb_matter 结构
CREATE TABLE IF NOT EXISTS `tb_matter` (
  `matter_id` int(10) NOT NULL AUTO_INCREMENT,
  `matter_title` varchar(50) NOT NULL DEFAULT '0',
  `matter_publish` varchar(20) NOT NULL,
  `matter_receive` varchar(20) NOT NULL,
  `matter_content` varchar(150) NOT NULL,
  `matter_state` varchar(10) NOT NULL,
  `matter_assess` varchar(20) NOT NULL,
  PRIMARY KEY (`matter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- 正在导出表  test.tb_matter 的数据：~27 rows (大约)
DELETE FROM `tb_matter`;
/*!40000 ALTER TABLE `tb_matter` DISABLE KEYS */;
INSERT INTO `tb_matter` (`matter_id`, `matter_title`, `matter_publish`, `matter_receive`, `matter_content`, `matter_state`, `matter_assess`) VALUES
	(1, 'a', '管理员1', '160400001', '计算出题目1的结果', '已完成', '良好'),
	(2, 'b', '管理员1', '160400001', '计算出题目2的结果', '未完成', '未评价'),
	(3, 'c', '管理员1', '160400005', '计算出题目3的结果', '已完成', '未评价'),
	(4, 'd', '管理员1', '160400001', '计算出题目4的结果', '未完成', '未评价'),
	(5, 'e', '管理员1', '160400002', '计算出题目5的结果', '未完成', '未评价'),
	(6, 'f', '管理员1', '160400003', '计算出题目6的结果', '已完成', '未评价'),
	(7, 'g', '管理员1', '160400003', '计算出题目7的结果', '未完成', '未评价'),
	(8, 'h', '管理员1', '160400001', '计算出题目8的结果', '已完成', '优秀'),
	(9, 'i', '管理员1', '160400005', '计算出题目9的结果', '未完成', '未评价'),
	(10, 'j', '管理员1', '160400007', '计算出题目10的结果', '已完成', '一般'),
	(11, 'k', '管理员1', '160400002', '计算出题目11的结果', '未完成', '未评价'),
	(12, 'l', '管理员2', '160400009', '计算出题目12的结果', '已完成', '未评价'),
	(13, 'm', '管理员2', '160400009', '计算出题目13的结果', '已完成', '未评价'),
	(14, 'n', '管理员2', '160400001', '计算出题目14的结果', '未完成', '未评价'),
	(15, 'o', '管理员1', '160400004', '计算出题目15的结果', '未完成', '未评价'),
	(16, 'p', '管理员1', '160400006', '计算出题目16的结果', '已完成', '优秀'),
	(17, 'q', '管理员2', '160400006', '计算出题目17的结果', '未完成', '未评价'),
	(18, 'r', '管理员2', '160400006', '计算出题目18的结果', '已完成', '未评价'),
	(19, 's', '管理员2', '160400007', '计算出题目19的结果', '未完成', '未评价'),
	(20, 't', '管理员2', '160400007', '计算出题目20的结果', '未完成', '未评价'),
	(21, 'u', '管理员2', '160400001', '计算出题目21的结果', '已完成', '未评价'),
	(22, 'v', '管理员2', '160400001', '计算出题目22的结果', '未完成', '未评价'),
	(23, 'w', '管理员2', '160400002', '计算出题目23的结果', '未完成', '未评价'),
	(24, 'x', '管理员2', '160400005', '计算出题目24的结果', '未完成', '未评价'),
	(25, 'y', '管理员1', '160400006', '计算出题目25的结果', '未完成', '未评价'),
	(26, 'z', '管理员2', '160400005', '计算出题目26的结果', '未完成', '未评价');
/*!40000 ALTER TABLE `tb_matter` ENABLE KEYS */;

-- 导出  表 test.tb_news 结构
CREATE TABLE IF NOT EXISTS `tb_news` (
  `news_id` int(10) NOT NULL AUTO_INCREMENT,
  `news_tittle` varchar(50) NOT NULL,
  `news_author` varchar(50) NOT NULL,
  `news_content` varchar(500) NOT NULL,
  `news_time` varchar(50) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- 正在导出表  test.tb_news 的数据：~10 rows (大约)
DELETE FROM `tb_news`;
/*!40000 ALTER TABLE `tb_news` DISABLE KEYS */;
INSERT INTO `tb_news` (`news_id`, `news_tittle`, `news_author`, `news_content`, `news_time`) VALUES
	(1, '【材料•科创】学院召开互联网+大赛动员会暨科创中心成立大会', '管理员1', '与时俱进，创新未来，材料学院第五届互联网+大赛动员会暨学院大学生科技创新创业中心成立大会，于5月19日晚七点在大学生活动中心北216准时召开。', '2019.5.23'),
	(2, '【船舶土木•心理】“了解自我，做情绪主人” ——船舶土木心理委员参加心理讲座培训', '管理员1', '为了提升心理委员的工作技能，让心理委员更好更专业地帮助班级同学的心理情绪管理问题，5月21日下午14:30，船舶•土木各班级心理委员参加了学校心理中心在大活北301举办的“了解自我，做情绪主人”心理讲座。', '2019.5.23'),
	(3, '【书院·丁香】“丁香杯”第十届威海市大学生象棋联赛圆满落幕', '管理员1', '5月18日，由我校丁香书院主办、棋牌协会承办的第十届威海市大学生象棋联赛在我校美丽的丁香园拉开帷幕，来自威海市七所高校的30多名选手參加了比赛。', '2019.5.22'),
	(4, '【书院•梧桐】海梦队在中国大学生Chem-E-Car竞赛中又取得新成绩', '管理员2', '2019年第三届中国大学生Chem-E-Car竞赛于五月中旬在南京工业大学江浦校区成功举办。哈尔滨工业大学（威海）海梦队参加了此次竞赛，荣获“竞赛精神奖”。', '2019.5.21'),
	(5, '春季学期第三批次待报废资产现场勘查会', '管理员2', '5月16日上午，资产处在H320组织召开资产处置工作小组会议，对教务处申报的待报废资产进行现场勘查。资产处置工作小组由资产处李美杰、财务处王勇、计算机科学与技术学院何清刚和董开坤等人员组成，李美杰主持。', '2019.5.17'),
	(6, '山东大学（威海）教务处客人来访', '管理员2', '5月16日下午，山东大学（威海）教务处处长王湘云一行来校区，就两校课程共享共建暨学分互认等相关事宜进行交流。校区教务处处长姜永远在主楼一号会议室会见来访客人。', '2019.5.16'),
	(7, '综合办工程联合党支部开展专题学习', '管理员1', '2019年5月14日上午，综合办工程联合党支部在主楼305会议室组织专题学习，会议逐条学习了《中国共产党支部工作条例（试行）》（以下简称《条例》），本次学习会议由支部书记连丽同志主持。', '2019.5.15'),
	(8, '【向日葵】三点半乐园的志愿之路', '管理员1', '向日葵志愿者协会是哈尔滨工业大学（威海）海洋科学与技术学院院团委指导的校级学生组织，是一个面向社区长期从事公益服务的学生组织。', '2019.5.14'),
	(9, '三行情诗大赛一二期圆满结束', '管理员2', '留学交流协会讯（记者：叶会鸿）4月21日18:30，在学子路步行街，由留学交流协会主办的为期两周的三行情诗大赛一二期圆满结束。', '2019.5.14'),
	(10, '“与地球共生”音乐会顺利举行', '管理员2', '为了让青年一代能够认识并积极应对气候变化，支持并践行环保，3月30日晚8：30，环境保护协会在大学生活动多功能厅为同学们举办了地球一小时为背景的音乐晚会。', '2019.5.14');
/*!40000 ALTER TABLE `tb_news` ENABLE KEYS */;

-- 导出  表 test.tb_office 结构
CREATE TABLE IF NOT EXISTS `tb_office` (
  `no` char(10) NOT NULL,
  `name` char(50) NOT NULL,
  `date` date NOT NULL,
  `state` char(50) NOT NULL,
  `PIC` char(50) NOT NULL,
  `class` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  test.tb_office 的数据：~6 rows (大约)
DELETE FROM `tb_office`;
/*!40000 ALTER TABLE `tb_office` DISABLE KEYS */;
INSERT INTO `tb_office` (`no`, `name`, `date`, `state`, `PIC`, `class`) VALUES
	('0001', 'HP', '2019-05-12', 'good', '赵赞', '计算机'),
	('0002', '晨光', '2019-05-12', 'good', '秦利鹏', '消耗品'),
	('0003', 'Lenovo', '2019-05-12', 'good', '王五', '计算机'),
	('0004', '法拉利', '2019-05-12', 'good', '李四', '车辆'),
	('0005', '惠普A1', '2019-05-12', 'good', '路人乙', '打印机'),
	('0006', '惠普A2', '2019-05-12', 'good', '张三', '复印机');
/*!40000 ALTER TABLE `tb_office` ENABLE KEYS */;

-- 导出  表 test.tb_order 结构
CREATE TABLE IF NOT EXISTS `tb_order` (
  `id` int(20) NOT NULL,
  `product` varchar(30) NOT NULL,
  `ordertime` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `charge` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  test.tb_order 的数据：~17 rows (大约)
DELETE FROM `tb_order`;
/*!40000 ALTER TABLE `tb_order` DISABLE KEYS */;
INSERT INTO `tb_order` (`id`, `product`, `ordertime`, `state`, `charge`) VALUES
	(1, '打印机', '2017.4.1', '已确定', '秦利鹏'),
	(2, '手机', '2017.4.1', '待发货', '王五'),
	(3, '电脑', '2017.4.1', '已确定', '赵六'),
	(4, '投影仪', '2017.4.1', '待发货', '路人乙'),
	(5, '投影仪', '2017.4.1', '待发货', '秦利鹏'),
	(6, '投影仪', '2017.4.1', '待发货', '秦利鹏'),
	(7, '打印机', '2017.4.1', '待发货', '王五'),
	(8, '消耗品', '2017.4.1', '待发货', '秦利鹏'),
	(9, '消耗品', '2017.4.1', '待发货', '路人乙'),
	(10, '消耗品', '2017.4.1', '待发货', '赵六'),
	(12, '打印机', '2017.5.2', '待发货', '赵六'),
	(16, '打印机', '2017.4.1', '待发货', '秦利鹏'),
	(17, '手机', '2017.4.1', '已确定', '赵六'),
	(18, '电脑', '2017.4.1', '待确定', '路人乙'),
	(19, '手机', '2017.4.1', '待确定', '王五'),
	(22, '电脑', '2018.5.1', '待确定', '王五'),
	(123, '打印机', '20173.2', '待确定', '王五'),
	(1235, '向北前进和', ' 啊窗口句柄', '待发货', '王五');
/*!40000 ALTER TABLE `tb_order` ENABLE KEYS */;

-- 导出  表 test.tb_pcard 结构
CREATE TABLE IF NOT EXISTS `tb_pcard` (
  `pcard_id` int(4) NOT NULL AUTO_INCREMENT,
  `pcard_subject` varchar(50) NOT NULL,
  `pcard_author` varchar(50) NOT NULL,
  `pcard_time` varchar(50) NOT NULL,
  `pcard_content` varchar(500) NOT NULL,
  PRIMARY KEY (`pcard_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- 正在导出表  test.tb_pcard 的数据：~10 rows (大约)
DELETE FROM `tb_pcard`;
/*!40000 ALTER TABLE `tb_pcard` DISABLE KEYS */;
INSERT INTO `tb_pcard` (`pcard_id`, `pcard_subject`, `pcard_author`, `pcard_time`, `pcard_content`) VALUES
	(1, '关于举办第三期教职工网球培训班的通知', '管理员1', '2019.4.3', '各院、系、部、处：为丰富我校教职工业余文体生活，提高教职工网球水平，进一步促进我校网球运动的开展，教职工网球协会将举办第三期教职工网球培训班。现将有关事项通知如下：'),
	(2, '关于举办哈尔滨工业大学（威海）5.25心理微咨询之烦恼的树洞的通知', '管理员1', '2019.9.5', '为充分发挥信院心理工作站在大学生心理健康教育工作中的作用，帮助同学们更好的解决自己的心理烦恼。信息学院心理工作站拟组织开展心理微资询之烦恼的树洞活动，现将有关安排通知如下：'),
	(3, '国学数字文化馆试用通知', '管理员2', '2019.5.6', '我校区图书馆已开通国学数字文化馆试用，欢迎广大读者使用。数据库简介：国学数字文化馆依托中国孔子网融媒体平台，以“读好书、写好字、做好人”为宗旨，以普及传播中华优秀传统文化为主要内容，由《国学大讲堂》视频资料库和《国学经典文献》图书资料库两大部分组成，是传播中华优秀传统文化的数字资料馆。'),
	(4, '关于2019年毕业生户口迁移事项的通知', '管理员2', '2019.8.5', '各院、系辅导员：2019届毕业生离校在即，为了按时完成毕业生（含研究生）户口迁移工作，保证毕业生能顺利派遣，现将有关户口迁移事项通知如下：'),
	(5, '修身讲堂预告', '管理员1', '2019.5.6', '主题：《布达佩斯大饭店》时间：5月25日（第十三周周六）19点地点：N楼221本期内容：N楼221:《布达佩斯大饭店》 '),
	(6, '2019年暑期德国顶尖大学深度考察团报名通知', '管理员1', '2019.5.22', '为培养具有国际视野和国际竞争力的高素质人才，鼓励我校学生出国（境）留学，现为我校学生特开设暑期德国顶尖大学深度考察团项目。一、访问路线：德国顶尖大学安排：亚琛工业大学（TU9)慕尼黑工业大学（TU9)'),
	(7, '2019届哈工大优秀毕业生候选人公示', '管理员2', '2019.5.22', '按照哈尔滨工业大学2019届哈工大优秀毕业生的评定办法，经过各院系组织、审核后上报，经学工处与研究生处审查后，评选并推荐哈工大优秀毕业生本科生候选人266人，研究生30人，现进行公示。'),
	(8, '关于2019哈工大校友创新创业大赛（威海）报名的通知', '管理员2', '2019.5.22', '为响应习近平主席和党中央十九大建设创新型国家的精神，贯彻落实国家创新创业战略和政策，积极配合即将在上海证券交易所设立的科创板、IPO注册制等资本市场新形势，整合哈工大校友创业项目资源，更高质量地对接资本和资本市场，创造价值，造福社会，哈工大校友创业商学院立足上海，依托哈工大深厚的高精尖技术资源，哈工大各地校友会支持，和哈工大创业校友数量多、分布广、技术含量高、产业化效果好等优势，面向全球哈工大校友（包括哈工大一校三区师生）举办“哈工大校友创新创业大赛”，旨在提升哈工大校友的创业文化、创业生态，推动新技术、新项目与资本、资本市场、产业界的有效对接，培育更多的校友创业家和科技企业，形成哈工大校友科技产业板块，进而为我国整体核心技术进步、战略新兴产业提升、经济可持续发展做贡献。'),
	(9, '2019年机关党委党建培训通知', '管理员2', '2019.5.21', '机关党委各支部委员，全体党员：根据机关党委2019年重点工作安排，按机关党委“不忘初心、牢记使命——弘扬爱国奋斗精神、建功立业新时代”活动部署，为进一步提升机关党建工作水平，拟于近期组织开展机关党委党建工作培训，现将有关事宜通知如下：'),
	(10, '大学英语口语准考证打印及考前须知', '管理员1', '2019.5.21', '各位同学：2019年上半年的大学英语四六级的口语考试将于5月25日和26日进行。请同学们登陆系统http://cet-kw.neea.edu.cn/，选择快速打印准考证，在考前及时打印准考证，以免影响考试。');
/*!40000 ALTER TABLE `tb_pcard` ENABLE KEYS */;

-- 导出  表 test.tb_root 结构
CREATE TABLE IF NOT EXISTS `tb_root` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_branch` varchar(20) NOT NULL,
  `user_job` varchar(20) NOT NULL,
  `user_sex` varchar(5) NOT NULL,
  `user_tel` varchar(15) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_foundtime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  test.tb_root 的数据：~0 rows (大约)
DELETE FROM `tb_root`;
/*!40000 ALTER TABLE `tb_root` DISABLE KEYS */;
INSERT INTO `tb_root` (`user_id`, `user_name`, `user_password`, `user_branch`, `user_job`, `user_sex`, `user_tel`, `user_address`, `user_foundtime`) VALUES
	(1, '管理员1', '1111', '人力资源部', '经理', '男', '17811111111', '哈工大', '2017.1.1'),
	(2, '管理员2', '2222', '营销中心', '经理', '男', '17822222222', '哈工大', '2017.1.1');
/*!40000 ALTER TABLE `tb_root` ENABLE KEYS */;

-- 导出  表 test.tb_user 结构
CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_branch` varchar(20) NOT NULL,
  `user_job` varchar(20) NOT NULL,
  `user_sex` varchar(5) NOT NULL,
  `user_tel` varchar(15) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_foundtime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  test.tb_user 的数据：~9 rows (大约)
DELETE FROM `tb_user`;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` (`user_id`, `user_name`, `user_password`, `user_branch`, `user_job`, `user_sex`, `user_tel`, `user_address`, `user_foundtime`) VALUES
	(160400001, '赵赞', '111111111', '人力资源部', '职员', '男', '17811111111', '哈工大六公寓171', '2018.1.2'),
	(160400002, '秦利鹏', '222222222', '营销中心', '职员', '男', '17822222222', '哈工大六公寓171', '2018.1.1'),
	(160400003, '张三', '333333333', '财务部', '职员', '男', '17833333333', '哈工大', '2019.1.2'),
	(160400005, '王五', '555555555', '营销中心', '职员', '女', '17855555555', '哈工大', '2018.2.3'),
	(160400007, '路人甲', '777777777', '后勤部', '职员', '男', '17877777777', '哈工大九公寓', '2019.3.3'),
	(160400006, '赵六', '666666666', '营销中心', '职员', '男', '17866666666', '哈工大七公公寓', '2019.2.3'),
	(160400004, '李四', '444444444', '后勤部', '职员', '男', '17844444444', '哈工大', '2019.1.1'),
	(160400008, '路人乙', '888888888', '营销中心', '职员', '女', '17888888888', '哈工大', '2019.1.1'),
	(160400011, '路人戊', '001100110011', '后勤部', '职员', '男', '17800110011', '山大', '2018.1.1');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
