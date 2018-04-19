<?php
//新建数据库连接实例，服务器 数据库名  用户 密码
$pdo = new PDO("mysql:host=localhost;dbname=school","root","qqqqqqqqq1");
$pdo->query("set names utf8");

// if ($pdo) {
// 	echo 666;
// } else {
// 	echo 333;
// }


// die;
// $all = file_get_contents('aa.txt'); 

// $one = explode("####333####", $all);

// foreach ($one as $v) {
// 	if ($v != '') {
// 		$onea = explode("####222####", $v);
		
// 		$cateid = $onea[0];
// 		$title = $onea[1]?$onea[1]:"补充标题";
// 		$content = $onea[2];
// 		$title = addslashes($title);
// 		$content = addslashes($content);
// 		$addtime = $onea[3];
		
// 		$sql = "insert into sj_article (cateid,title,content,addtime) values ('$cateid','$title','$content','$addtime') ";
// 		var_dump($sql);
// 		if($pdo -> exec($sql)){
// 			echo "插入成功！";
// 			echo $pdo -> lastinsertid();
// 			echo "<br>";
// 		}
		
// 	}
// }

// die;

//更新学生课程表
// for ($i=1;$i<=50;$i++) {
// 	$sql = "select sid from student";
// 	$rs = $pdo -> query($sql);
// 	$arr_sid = array();
// 	while($row = $rs -> fetch(PDO::FETCH_ASSOC)){
// 		$arr_sid[] = $row['sid']; //将id存入一维数组
// 	}
// 	$tmp = rand(0,sizeof($arr_sid)-1);
// 	$sid = $arr_sid[$tmp];//随机拿到一个sid
	
// 	$sql = "select cid from course";
// 	$rs = $pdo -> query($sql);
// 	$arr_cid = array();
// 	while($row = $rs -> fetch(PDO::FETCH_ASSOC)){
// 		$arr_cid[] = $row['cid']; //将id存入一维数组
// 	}
// 	$tmp = rand(0,sizeof($arr_cid)-1);
// 	$cid = $arr_cid[$tmp];//随机拿到一个cid
	
// 	$score = rand(36,97);
	
// 	$sql = "insert into sc (sid,cid,score) values ('$sid','$cid','$score') ";
// 	if($pdo -> exec($sql)){
// 		echo "插入成功！";
// 		echo $pdo -> lastinsertid();
// 		echo "<br>";
// 	}
// }

// echo 666;
// die;


function randName () {
	$str = "节振国冯兴国郝爱民于学忠马连良胡宝善李宗仁洪学智余克勤吴克俭杨惟义";
	$a = str_split($str,3);

	$name = '';
	for ($i=1;$i<=3;$i++) {
		//前2个字必有，名字必有2个字
		if ($i<3) {
			$s = rand(0,32);
			$name .= $a[$s];
		} else {//是否有第三个字
			$tmp = rand(1,6);
			if ($tmp==6) { //1/6的概率出现第三个字
				$s = rand(0,32);
				$name .= $a[$s];
			}
		}
	}
	return $name;
}


//执行插入语句
for ($i=1;$i<=10000;$i++) {
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








