<?php
/**
 * 更新处理页面
 * guest/update_deal.php
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
	# 更新时间
	$time = time();

	# 增删改查： 增 , 往数据库中插入新的数据
	# 1 连接数据库 服务器
	$db = @mysql_connect( 'localhost' ,'root' , '' ) or die('数据库服务器连接失败');

	# 2 选择数据库
	mysql_select_db('guest');

	# 3 设置编码
	mysql_query( 'set names utf8' );

	# 获取 id : 过滤数据 
	$id = isset($_POST['id']) ? $_POST['id'] : 0;
	$id = intval($id);

	# 构建sql查询语句 ： 更新语句 update
	# update 表名 set 字段名1=字段名1值 , 字段名2=字段名2值 where id=2;
	$query = "UPDATE message SET title='{$title}' , content='{$content}',updatetime={$time} WHERE id=".$id;
	// var_dump($query); exit;
	mysql_query($query);
	
	# 判断是否 成功更新
	$logs = mysql_affected_rows();
	if( $logs ){
		$message = '成功更新留言';
	}else{
		$message = '更新留言失败';
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


