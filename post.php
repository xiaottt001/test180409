<?php
/**
 * 获取http post 请求
 * @param $url   string 请求的地址
 * @param $data  string 请求的数据
 * @return string 返回的json字符串
 *
 */
function http_post($url,$data){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

/**
 * 发送https get请求
 * @param   $url  string 请求的地址
 * @return string 返回的json字符串
 *
 */
function https_request($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$url = 'http://qxu1591200403.my3w.com/zssj/ssjpc/index.php/Home/Index/articlist/uid/5/cid/6.html';
// $url = 'http://localhost/test/getpost.php';


$data = array(
	'content' => '自己模拟post请求是可以提交之后直接向数据库写入数据的
解决办法是在 在程序中增加 post前页面的秘钥判断,此条数据为模拟写入',	
	'uid' =>  5	,
	'category' => 1
);

$a = http_post($url,$data);

echo $a;



