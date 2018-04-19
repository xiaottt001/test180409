<?php
class Danli {
	public static $_instance = null;
	public static function getInstance($a1)
    {
        if(!isset(self::$_instance)){
            self::$_instance = new self($a1);
        }
        return self::$_instance;
    }
}

$a = Danli::getInstance('a');
$b = Danli::getInstance('c');
$c = new Danli();
var_dump($a);
var_dump($a === $b); // true