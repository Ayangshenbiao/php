<?php

$link = mysqli_connect("localhost","root","root","house");

if(mysqli_errno($link)){
	echo mysqli_error($link);
}
$time = time();

//$sql = "INSERT INTO news (title,content,newsTime) VALUES ('我是标题','我是类容',$time)";
$sql = "SELECT * FROM news";

mysqli_query($link, "set names utf8");
$res = mysqli_query($link, $sql);
$reslut = mysqli_fetch_all($res);
//while($reslut = mysqli_fetch_assoc($res)){
//	$arr[] = $reslut;
//	
//};
echo "<pre>";
print_r($reslut);
echo "</pre>";





?>