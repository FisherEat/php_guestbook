/**
 * php_guestbook.sql
 * 简约留言本sql语句
 * source php_guestbook.sql直接导入mysql
 */

/* 创建数据库， 设备编码为 utf8*/
CREATE DATABASE php_guestbook CHARSET utf8;

/* 选择数据库 */
USE php_guestbook;

/*创建数据表：判断是否存在，不存在则创建*/
CREATE table if NOT EXISTS `php_message` (
  `id` int(11) AUTO_INCREMENT COMMENT '编号',
  `title` varchar (200) COMMENT '标题',
  `content` text COMMENT '内容',
  `addtime` text COMMENT '添加时间',
  PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT '留言表信息';

/*插入测试数据*/
INSERT INTO `php_message` (`id`, `title`, `content`, `addtime`) VALUES
(1, '论优雅', '如何成为一个优雅的人？',1482219234),
(2, '国学经典', '国学经典文件学习？',1482219277),
(3, '古诗词', '春风桃李一杯酒，江湖夜雨十年灯',1482225048),
(4, '论语', '三十而立，四十而不惑，五十而知天命，六十而耳顺',1482225085),
(5, '友情万岁', '不相信会绝望，不感觉到踌躇',1482225143),
(6, '钢琴', '人生若只如初见，何事秋风悲画屏',1482219234);
