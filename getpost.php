<?php
//新建数据库连接实例，服务器 数据库名  用户 密码
$pdo = new PDO("mysql:host=localhost;dbname=mydb","root","qqqqqqqqq1");
$pdo->query("set names utf8");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo 333;
	$sql = "insert into sj_article (cateid,title,content,addtime) values ('1','test','test1','111') ";
	$pdo -> exec($sql);
}

