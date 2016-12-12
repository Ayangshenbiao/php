<?php
$arr = array("name"=>"张三","age"=>18,"height"=>"172cm");

//转换成json串
$res = json_encode($arr);
echo $res;

echo "<br/>";

//json转换成数组
$reslut = json_decode($res);
print_r($reslut);



?>