<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo 333;
	var_dump($_FILES);
	var_dump(__FILE__);
	$dir = substr(__FILE__,0,-11);
	$dir = $dir."uploads/".$_FILES['pics']['name'];
	var_dump($dir);
	move_uploaded_file($_FILES['pics']['tmp_name'], $dir);
}