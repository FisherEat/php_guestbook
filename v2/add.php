<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>发布留言</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="css/animate.min.css" >
	<link rel="stylesheet" href="css/style.css" >
</head>

<body>
	<div class="smart-green from-box animated bounceInDown">
	
	    <form action="add_deal.php" method="post" name="guest-form">
			<h1>发布留言
				<a href="index.php" class="link">返回首页</a>
			</h1>
			<label>
				<span>标题 :</span>
				<input type="text" name="title" placeholder="请输入留言的标题" />
			</label>
			
			
			<label>
				<span>留言内容 :</span>
				<textarea name="content" placeholder="这里可以输入你的宝贵意见"></textarea>
			</label>
			
			<label>
				<span>&nbsp;</span>
				<input type="hidden" name="action" value="1">
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