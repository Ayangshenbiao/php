<?php
//自动加载类
 function __autoload($className){
 	include $className.".php";
 }

$newMyclass = new myClass();
$newMyclass->test();
$newsql = new sql();
$newsql->getlist();



?>