/**
 * guestbook-1.sql
 * 简约留言本-v1
 * @since 2016-12-21
 */

/* 创建一个数据库，设置编码为 utf8 */
CREATE DATABASE guest DEFAULT CHARSET utf8;

/* 选择数据库 */
USE guest;

/* 创建一个数据表： 判断是否存在，不存在则创建 */
CREATE table if NOT EXISTS `message` ( 
    `id` int(11) AUTO_INCREMENT COMMENT '编号',
    `title` varchar (200) COMMENT '留言标题',
    `content` text COMMENT '留言内容',
    `addtime` int(11) COMMENT '留言时间',
    `updatetime` int(11) COMMENT '更新时间',
    PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT '留言信息表';  


/* 插入测试数据 */
INSERT INTO `message` (`id`, `title`, `content`, `addtime`) VALUES
(1, '周日去打球么', '嘿，大家好，我是小明。周末一起打球吧', 1482219234),
(2, '21号就是冬至', '21号就是冬至，要一起吃汤圆么', 1482219277),
(3, '天气冷了记得加衣服', '天气冷了记得加衣服呀，我看了下广州的气温，变化的有点离谱', 1482225048),
(4, '村民手榴弹砸核桃', '村民冉某来到东木派出所，主动上交了一个自己一直用来砸核桃的物件，民警一看竟然是67式手榴弹！', 1482225085),
(5, '工资被发硬币', ' 湖南的唐先生做建筑工，因不满老板经常要其加班而辞职，老板用近3000元的硬币作为工资来支付给他', 1482225143);
