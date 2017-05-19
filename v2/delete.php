<?php
/**
 * 删除处理页面
 * guest/delete.php
 */

# php设置页面编码
header( 'Content-type:text/html;charset=utf-8' );


$action = isset($_GET['action']) ? $_GET['action'] : false;

# 判断是否有表单的提交
if( $action ){

	# 增删改查： 增 , 往数据库中插入新的数据
	# 1 连接数据库 服务器
	$db = @mysql_connect( 'localhost' ,'root' , '' ) or die('数据库服务器连接失败');

	# 2 选择数据库
	mysql_select_db('guest');

	# 3 设置编码
	mysql_query( 'set names utf8' );

	# 获取 id : 过滤数据 
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$id = intval($id);

	# 构建sql查询语句 ： 删除语句 delete
	# delete from message where id=2;
	$query = "DELETE FROM message WHERE id=".$id;
	// var_dump($query); exit;
	mysql_query($query);
	
	# 判断是否 成功删除
	$logs = mysql_affected_rows();
	if( $logs ){
		$message = '成功删除留言';
	}else{
		$message = '删除留言失败';
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


