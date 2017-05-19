<?php
/**
 * 留言的详情页面
 * guest/show.php
 */

# 1 连接数据库 服务器
$db = @mysql_connect( 'localhost' ,'root' , '' ) or die('数据库服务器连接失败');

# 2 选择数据库
mysql_select_db('guest');

# 3 设置编码
mysql_query( 'set names utf8' );

# 接收 url地址栏传送过来的 id 参数的值
// $id = $_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : 0;

# 过滤 ： 转换为 整数
$id = intval($id);

# 构建查询语句
$query = 'SELECT * FROM message WHERE id='.$id;
// var_dump($query);

# 发送查询语句，会返回一个 结果集 
$result = mysql_query($query);
$single = mysql_fetch_assoc($result);
// print_r($single);

# 非法访问
if( !$id || !$single){
	echo "<script>";
	echo "alert('非法访问');";
	echo "location.href='index.php';";
	echo "</script>";
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>留言详情</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="css/animate.min.css" >
	<link rel="stylesheet" href="css/style.css" >
</head>

<body>
	<div class="smart-green from-box animated bounceInDown">
	
	    <form action="update_deal.php" method="post" name="guest-form">
			<h1>留言详情
				<a href="index.php" class="link">返回首页</a>
			</h1>
			<label>
				<span>标题 :</span>
				<input type="text" name="title" placeholder="请输入留言的标题" value="<?php echo $single['title'];?>"/>
			</label>
			
			
			<label>
				<span>留言内容 :</span>
				<textarea name="content" placeholder="这里可以输入你的宝贵意见"><?php echo $single['content'];?></textarea>
			</label>
			
			<label>
				<span>&nbsp;</span>
				<input type="hidden" name="action" value="1">
				<input type="hidden" name="id" value="<?php echo $id;?>">
				<input type="submit" class="button" value="提交" />

			</label>
			
		</form>
	</div>

	<!-- 提示信息 -->
	<div class="tips-box">
		<h3></h3>
	</div>

	<!-- jq -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/guest.js"></script>
</body>
</html>