<?php

$a = 10;
$b = $a%3;
echo $b;
echo "<hr>";

$a = 4;
$a .=5;
echo $a;	
echo "<hr>";

$a = 5;
$b = 5;
echo $a++;//先赋后加
echo "<br/>";
echo ++$b;//先加后赋
echo "<hr>";

// or==|| ; and==&&
$a = true;
$b = false;
if($a or $b){
	echo "1";
}else{
	echo "2";
}
// 异或xor：相同为假，不同为真
if ($a xor $b) {
	echo "true";
}else{
	echo "false";
}
echo "<hr>";

$a = mt_rand(1,10);//随机1~10的数
//  <> 不等于号；!== 全不等
if($a<>5){
	echo "{$a}不等于5";
}else{
	echo "{$a}等于5";
}
echo "<hr>";

$a = mt_rand(1,10);
echo $a<5?"{$a}小于5":"{$a}大于等于5";
echo "<hr>";

switch ($a) {
	case $a<5:
		echo "{$a}小于5";
		break;
	case $a>5:
		echo "{$a}大于5";
		break;
	default:
		echo "{$a}等于5";
		break;
}
echo "<hr>";

$a = 1;
while ($a<5) {
	echo $a;
	$a++;
}
echo "<br/>";
// while 判断不成立就停止
// do...while 判断不成立也会执行一次
do{
	echo $a;
	$a++;
}while($a<5)
echo "<hr>";


// include "test.php";


?>