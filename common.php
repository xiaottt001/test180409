<?php
//连接数据库
$pdo = new PDO("mysql:host=localhost;dbname=blog","root","123");
if (!$pdo) {
	echo "数据库连接失败！";
}
//开启session
session_start();
if (empty($_SESSION)) {
	echo "尚未登录，请登录";
// 	header("Refresh:2;url=http://www.baidu.com");
	//确保重定向后，后续代码不会被执行
	exit;
} else {
	header("Location: http://www.sina.com");
}
