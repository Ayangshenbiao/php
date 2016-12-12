<?php
// 以前可以把php省略掉,结尾符合可以省略（运行反而快了一步）,但还是要加

// 如果中文出现乱码，需要在头部设置编码格式
header("Content-type:text/html;charset=utf-8");
echo "hello world"; //echo只能打印字符串或数字
echo "<br/>";
echo ("string");
echo "<br/>";
echo "number";
echo "生死搭档";
/*
	第一种注释
*/

// 单行注释

/*
*  多行注释
*
*/
echo "<hr/>";

$a = "你好";
echo $a;
echo "<hr/>";

// 变量的变量
$b="hello";
$hello="hello world";

echo $$b;
echo "<hr/>";

// 变量解析
// php字符串连接方式“ . ”
$c="你好";
$res1 = "张三";
echo $res1.$c;
echo "<hr/>";

$res2="李四$c"; //最外层有双引号可以解析变量，单引号不能
echo $res2;
echo "<hr/>";

$res3="李四{$c}666";
echo $res3;
echo "<hr/>";

// 自动转换
$d = 1;
$e = "2";
echo ($d+$e);
echo gettype($d+$e); //结果是整型
echo "<hr/>";
echo gettype((int)$e);//转换为integer
echo "<hr/>";

// 字符串定义方式二：定界符 一般定义长字符串;结尾顶头，前后不加任何东西
$str = <<<AAA
sdasdd是的撒assa1dasdasdasd
AAA;
echo $str;
echo "<hr/>";

$arr1  = [1,2,3.1];
$arr2 = &$arr1;//本身是不传值，想传值加"&"符号;
$arr2[0] = 5;
print_r($arr1);//输出数组
echo "<hr/>";
var_dump($arr1);//输出数组
echo "<hr/>";


// 数组定义方式二（常用）

$arr3 = array("张三","丽水","awd");
print_r($arr3);
echo "<hr/>";
// 定义关联数组

$arr4 = array("name"=>"账上","age"=>1);
print_r($arr4);
echo "<hr/>";

// 全局变量
echo "<pre>";
// print_r($_SERVER);
echo "</pre>";
echo "<hr>";
// echo phpinfo();

// print_r($_COOKIE);
echo "<hr>";
session_start();//开启session
// print_r($_SESSION);
echo "<hr>";
echo "<pre>";
// print_r($GLOBALS); //看所有全局变量
echo "</pre>";
echo "<hr>";

// 定义常量（name,value,xxx）;
// 第三个参数是区分大小写 默认false(区分)
// name一般大写,只能被定义一次
define("NAME", "书画家",true);
// define("NAME", "书画家2");

echo name;
echo "<hr>";

// 内置常量
print_r(PHP_OS);//系统名称
echo "<br/>";
print_r(PHP_VERSION);//php版本号
echo "<hr>";

// die; //停止下面代码运行
// exit;
// die("111111");

// 魔术常量
echo __LINE__;//显示当前行数
echo "<hr>";
echo __FILE__;//显示文件当前位置
echo "<hr>";
function test(){
	echo __FUNCTION__;
}
test();
echo "<hr>";

class Test{
	function fn(){
		echo __CLASS__;//显示类名
		echo "<br/>";
		echo __METHOD__;//显示类名下的方法名
	}
}

$test = new Test();
$test -> fn();
echo "<hr>";

$arr=array("武汉"=>"三大火炉之一","上海"=>"魔都","深圳"=>"创业之都");

foreach ($arr as $key => $value) {
	echo $key.":".$value."<br/>";
}

$arr2=array("电子产品"=>array("iphone"=>"6s","huawei"=>"5g"),"食品"=>array("旺旺"=>"雪饼","百事"=>"可乐"));
foreach ($arr2 as $key => $value) {
	echo $key."<br/>";
	foreach ($value as $key => $value) {
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp".$key.":".$value."<br/>";
	}
}

class Obj{

}
$newobj = new Obj();
echo gettype($newobj);
echo "<hr>";

$res = fopen("te.txt","r");
$str = fread($res,10);
echo $str;
echo "<hr>";

$arr = array("账上","速度很快","飞洒");
unset($arr[0]);
print_r($arr);
echo "<hr>";

// is_type:判断是否是某个类型，会返还布尔值
// in_type:判断是否存在某个类型里，会返还布尔值

echo is_array($arr);
echo "<br/>";
echo in_array("飞洒",$arr);
echo "<br/>";

// empty判断是否为空,isset判断是否有值

$str = "666";
if (empty($str)) {
	echo "为空";
}else{
	echo "不为空";
}


?>