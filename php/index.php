<?php
/**
 *  留言本首页
 */

 # 设置时区
 date_default_timezone_set('PRC');

 # 1 连接数据库服务器
// $db = @mysql_connect('localhost', 'root', '') or die('数据库连接失败');

$dsn = 'mysql:host=localhost;dbname=php_guestbook';
$user = 'root';
$password = '';

try {
  $sql = 'select * from php_message';
  $pdo = new PDO($dsn, $user, $password);
  foreach ($pdo->query($sql) as $value) {
    var_dump($value);
  }
} catch (PDOException $e) {
  echo 'SQL Query:' .$sql .'</br>';
  echo 'Connection failed:' .$e->getMessage();
}


 # 2 选择数据库

 # 3 设置编码

 # 4 构建sql查询语句

 # 5 发送查询语句，会返回一个 结果集

 # 6 从结果集中读取 结果数据

 # 这里是多行数据，所以需要循环去读取

 ?>
