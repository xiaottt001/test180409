<?php
function get_file_tree ($dir,$num=-2) { //$num为深度
	static $count = 1;//统计文件总数
	if(@$handle = opendir($dir)) { //打开当前目录
		while(($child_dir = readdir($handle)) != false) {//读取所有子目录
			if ($child_dir != '.' && $child_dir != '..') { //排除根目录
				$num = $num + 3;
				$str = str_repeat("&nbsp;",$num);
				$str .= "|---";
				if (is_dir($dir."/".$child_dir)) {
					echo "<font color='red'>".$str.$child_dir."</font>";//绿色显示文件夹
					echo "<br>";
					get_file_tree($dir."/".$child_dir,$num);
				} else {
					echo "<font color='#515151'>".$str.$child_dir."</font>";//红色显示文件
					echo "<br>";
				}
				$num = $num - 3;
			}
			$count ++ ;
		}
	}
	return $count;
}
$count = get_file_tree("D:\wamp\www\zssj\ThinkPHP"); //树形输出路径下的文件夹及文件
echo "<br>".$count;
die;

//从第几位开始，截取几位
echo substr("hello",2,3); //输出 llo
echo substr("hello",2,-1); //输出 ll,第三参数为负代表反向截断

$str=str_replace("a","","abcabcAbca"); //2参替换1参
$int=strpos("asagaab","ab");//首次出现的位置，可以为0  没有出现返回 FALSE
$int=strrpos("asagaabadfab","ab");  //最后出现位置

echo __FILE__;//当前文件在服务器的存放路径
//输出D:\wamp\www\test\phpfunctions.php

echo $_SERVER['DOCUMENT_ROOT'];//当前网页的根目录目录
//输出D:/wamp/www/

echo "<br>";

$str=" sdaf我们 s ";
$len=strlen($str);
$len=mb_strlen($str);

$str=implode("-",array("a","b","c")); //数组连接为字符串
$array=explode("a","asddad addsadassd dasdadfsdfasdaaa",3);//字符分割为数组,第三参数返回几个元素

