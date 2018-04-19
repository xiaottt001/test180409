<?php
//返回一个随机名字，无参数
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
