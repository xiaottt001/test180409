<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>博客注册</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="stylesheet" type="text/css" href="" media="all">
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src=""></script>
    </head>
<body>
<form action="" method="post">
用户名:<input type="text" name="name" id="tag1">&nbsp;&nbsp;<span>用户名已存在</span>
<br><br>
&nbsp;密码:<input type="password" name="pwd">
<br><br>
<input type="submit">
</form>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=blog","root","123");
if (!$pdo) {
	echo "数据库连接失败！";
	exit();
}
if (!empty($_POST)) {
	var_dump($_POST);
	var_dump($pdo);
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	$sql = "insert into user(name,pwd) values ('{$name}','{$pwd}')";
	echo $sql;
	$insert = $pdo -> exec($sql);
	if ($insert) {
		echo "插入成功";
	} 
}
?>

<script type="text/javascript">
$("#tag1").blur(function(event){
	  alert (123);
	});
</script>
</body>
</html>