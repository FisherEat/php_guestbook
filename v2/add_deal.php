<?php
/**
 * 发布留言 的处理页面
 * guest/add_deal.php
 */

# php设置页面编码
header( 'Content-type:text/html;charset=utf-8' );


$action = isset($_POST['action']) ? $_POST['action'] : false;

# 判断是否有表单的提交
if( $action ){

	$title = $_POST['title'];
	$content = $_POST['content'];
	# 如果没有填写标题 或 内容 ，就跳转回去 add.php 
	if( !$title || !$content ){
		echo "<script>";
		echo "alert('你还没有输入任何内容');";
		echo "location.href='add.php';";
		echo "</script>";
		exit;
	}
	# 获取当前时间的 时间戳 
	$time = time();

	# 增删改查： 增 , 往数据库中插入新的数据
	# 1 连接数据库 服务器
	$db = @mysql_connect( 'localhost' ,'root' , '' ) or die('数据库服务器连接失败');

	# 2 选择数据库
	mysql_select_db('guest');

	# 3 设置编码
	mysql_query( 'set names utf8' );

	# 构建sql查询语句 ： 插入语句 insert
	# insert into 表名 (字段1 , 字段2) values(字段1值 , 字段值);
	$query = "INSERT INTO message (title,content,addtime) VALUES('{$title}','{$content}' , {$time} ); ";
	mysql_query($query);
	// var_dump($query);
	
	# 判断是否 成功新增
	$new_id = mysql_insert_id();
	if( $new_id ){
		$message = '成功发布了留言';
	}else{
		$message = '发布留言失败';
	}
	echo "<script>";
	echo "alert('{$message}');";
	echo "location.href='index.php';";
	echo "</script>";

}else{

	echo "<script>";
	echo "alert('非法访问');";
	echo "location.href='index.php';";
	echo "</script>";

}