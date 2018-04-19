<?php 
class Person {
	var $name;
	var $age;
	var $gf;
	
	//构造函数，在新建这个类的对象时调用
	
	function __construct($name='通用名',$age=18,$gf='小丽') {
		$this->name = $name;
		$this->age = $age;
		$this->gf = $gf;
	}
	
	//析构函数，在销毁这个类的对象时调用
	function getInfo() {
		echo "这个人的姓名是：".$this->name;
		echo "<br>";
		echo "这个人的年龄是：".$this->age."岁";
		echo "<br>";
		echo "这个人的女友是：".$this->gf;
		aa();
	}
	
	//指定这个人的女友
	function setGf($gf) {
		$this->gf = $gf;
	}
	
}

function aa() {
	echo 3222;;
}

$a = new Person('张三',25);
$a->getInfo();
$a->setGf('李红');
var_dump($a);

?>