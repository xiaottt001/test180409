<?php
//新建数据库连接实例，服务器 数据库名  用户 密码
$pdo = new PDO("mysql:host=qdm170133384.my3w.com;dbname=qdm170133384_db","qdm170133384","qqqqqqqqq1");
var_dump($pdo);die;
$pdo->query("set names utf8");

$sql = "select * from sj_article  order by id asc limit 65,35";
$rs = $pdo -> query($sql);

while($row = $rs -> fetch(PDO::FETCH_ASSOC)){
	$cateid = $row['cateid'];
	$title = $row['title'];
	$content = $row['content'];
	$addtime = $row['addtime'];
	
	file_put_contents("aa.txt", $cateid, FILE_APPEND);
	file_put_contents("aa.txt", "####222####", FILE_APPEND);
	file_put_contents("aa.txt", $title, FILE_APPEND);
	file_put_contents("aa.txt", "####222####", FILE_APPEND);
	file_put_contents("aa.txt", $content, FILE_APPEND);
	file_put_contents("aa.txt", "####222####", FILE_APPEND);
	file_put_contents("aa.txt", $addtime, FILE_APPEND);
	file_put_contents("aa.txt", "####333####", FILE_APPEND);
}


die;

//更新学生课程表
for ($i=1;$i<=50;$i++) {
	$sql = "select sid from student";
	$rs = $pdo -> query($sql);
	$arr_sid = array();
	while($row = $rs -> fetch(PDO::FETCH_ASSOC)){
		$arr_sid[] = $row['sid']; //将id存入一维数组
	}
	$tmp = rand(0,sizeof($arr_sid)-1);
	$sid = $arr_sid[$tmp];//随机拿到一个sid
	
	$sql = "select cid from course";
	$rs = $pdo -> query($sql);
	$arr_cid = array();
	while($row = $rs -> fetch(PDO::FETCH_ASSOC)){
		$arr_cid[] = $row['cid']; //将id存入一维数组
	}
	$tmp = rand(0,sizeof($arr_cid)-1);
	$cid = $arr_cid[$tmp];//随机拿到一个cid
	
	$score = rand(36,97);
	
	$sql = "insert into sc (sid,cid,score) values ('$sid','$cid','$score') ";
	if($pdo -> exec($sql)){
		echo "插入成功！";
		echo $pdo -> lastinsertid();
		echo "<br>";
	}
}


die;


//执行插入语句
for ($i=1;$i<=300;$i++) {
	//获取一个随机名字
	$name = randName();
	$age = rand(18,26);
	$sex = rand(1,2);
	
	$sql = "insert into student (Sname,Sage,Ssex) values ('$name','$age','$sex')";
	
	if($pdo -> exec($sql)){
		echo "插入成功！";
		echo $pdo -> lastinsertid();
		echo "<br>";
	}
}








