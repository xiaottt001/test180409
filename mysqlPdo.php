<?php
//加载函数文件
include 'function.php';

//新建数据库连接实例，服务器 数据库名  用户 密码
$pdo = new PDO("mysql:host=localhost;dbname=mydb","root","qqqqqqqqq1");


//显示文章
$sql = "SELECT * FROM sj_article";
$rs = $pdo -> query($sql);
while($row = $rs -> fetch(PDO::FETCH_ASSOC)){
	$article = $row['content'];
}

echo $article;die;


//插入随手记文章表
$sql = <<<EOF
    insert into sj_article (cateid,title,content) values ('2','mysql语句总结','mysql语句总结 student表 S#(编号)Sname Sage Ssex(性别1男2女) 1	张三	22	2 2	爱振	19	2 3	仁克	25	1 4	仁克	26	1 显示全表数据 SELECT * FROM student 分组显示某列数量多于1个的 SELECT * FROM student GROUP BY Sname HAVING count(sname) > 1 统计全部学生数量 SELECT count(sid) as count FROM student 统计全部男生数量（先where查询再统计总数） SELECT count(sid) as count FROM student where Ssex = 1 使用group by显示男女生人数（count结合group by之后显示分组的数量） SELECT Ssex,count(sid) FROM student GROUP BY Ssex 显示名字（sname）不重复的数据条数 SELECT count(DISTINCT(Sname)) FROM student 同上显示名字不重复数据条数 使用先group by在统计 SELECT count(sid) as count from student where sid in (SELECT sid from ( SELECT sid FROM student GROUP BY Sname ) b)')
EOF;

echo $sql;

if($pdo -> exec($sql)){
	echo "插入成功！";
	echo $pdo -> lastinsertid();
	echo "<br>";
} else {
	echo 333;
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

?>






