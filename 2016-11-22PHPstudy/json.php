<?php
$arr = array("name1"=>"张三","name2"=>"理事");

// 编码json串
$res = json_encode($arr);
echo $res;
//echo "<hr>";
//把json转换成数组或者对象（解码）
$res1 = json_decode($res,true);//默认false，转换为对象，true转换为数组
//var_dump($res1);















?>