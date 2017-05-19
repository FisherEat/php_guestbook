<?php
/**
 * 留言本的首页
 * guest/index.php
 */
# 设置时区
date_default_timezone_set('PRC');

# 1 连接数据库 服务器
$db = @mysql_connect( 'localhost' ,'root' , '' ) or die('数据库服务器连接失败sadf 答复');

# 2 选择数据库
mysql_select_db('guest');

# 3 设置编码
mysql_query( 'set names utf8' );



# 构建sql查询语句
$query = 'SELECT * FROM message';
# 发送查询语句，会返回一个 结果集
$result = mysql_query($query);
# 从结果集中读取 结果数据
$data = [];
# 这里是多行数据，所以需要循环去读取
while ( $row = mysql_fetch_assoc($result) ) {
	$data[] = $row;
}

# 打印输出
// print_r($data);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>留言本首页</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="css/animate.min.css" >
	<link rel="stylesheet" href="css/style.css" >
</head>

<body>
	<div class="smart-green lists-box animated bounceInDown">
		<h3>
			<a href="add.php" class="add-guest">发布留言</a>
		</h3>
	    <table class="guest-table">
	    	<tr class="head-title">
	    		<th width="20px">序号</th>
	    		<th width="300px">标题</th>
	    		<th width="80px">时间</th>
	    		<th width="50px">操作</td>
	    	</tr>

	    	<?php foreach($data as $key=>$value){ ?>
	    	<tr>
	    		<td><?php echo $key+1;?></td>
	    		<td><?php echo $value['title'];?></td>
	    		<td><?php echo date('Y-m-d H:i:s' , $value['addtime'] );?></td>
	    		<td>
	    			<a href="show.php?id=<?php echo $value['id'];?>">编辑</a>
	    			<a href="delete.php?id=<?php echo $value['id'];?>&action=1" class="del-link">删除</a>
	    		</td>
	    	</tr>
	    	<?php }?>

	    </table>
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
