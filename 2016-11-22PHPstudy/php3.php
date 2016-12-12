<?php
    include "adress.php";

//    foreach ($adress as $k => $v) {
//    	echo "<hr>".$k.":".$v["province_name"]."<br/>";
//    	if(!empty($v['city'])){
//    	    foreach($v['city'] as $k => $v){
//                echo "&nbsp;&nbsp;&nbsp;&nbsp;".$k.":".$v["city_name"]."<br/>";
//                if(!empty($v["area"])){
//                    foreach($v['area'] as $k => $v){
//                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$k.":".$v."<br/>";
//                    }
//                }
//            }
//    	}
//    }

//break 是阻止循环，continue 阻止一次循环
$a = 1;
while($a){
    if($a==2){
        $a++;//阻止一次
        continue;
    }else if($a>5){
        break;
    }else{
        echo $a;
    }
    $a++;
}
echo "<hr>";

//递归：自身调用自身

function digui($a){
    if($a>0){
        echo $a;
        $a--;
        digui($a);
    }else{
        return false;
    }
}
digui(5);
echo "<hr>";

function test(){
    echo "我是test函数";
}
//函数调用不区分大小写；
test();
echo "<br/>";
TEST();
echo "<br/>";

function test1($a="你好"){  //可以给默认参数
    echo $a;
}
test1("hello");
echo "<hr>";

$num = 1;
function test2(&$a){
    $b = &$a;
    $b = 5;
}
test2($num);
echo $num;
echo "<hr>";

//递归
//有返回值的函数
//阶乘
function jiecheng($a){
    if($a>0){
        return jiecheng($a-1)*$a;
    }else{
        return 1;
    }
}
echo jiecheng(5);
echo "<hr>";

$a = 5;
function tests1(){
    global $a;  //global设置全局变量
    echo $a;
}
tests1();
echo "<hr>";

$a = 5;
function tests2(){
    static $a = 5; //static定义静态变量，变量常驻内存
    if($a>0){
        echo $a;
        $a--;
        tests2();
    }else{
        return false;
    }
}
tests2();
echo "<hr>";

////定义数组的4种方式
////方式1
//$arr = [1,2,3,4]
////方式2
//$arr1 = array("name1"=>"张傻","name2"=>"随时随地");//关联数组
////方式3
//$arr2[] = "张三";//定义索引数组，
//$arr2[] = "理事";
//$arr3["name1"] = "张三";//定义关联数组
//$arr3["name2"] = "张四";
//print_r($arr2);
//echo "<br/>";
//print_r($arr3);
////方式4
//$arr4 = range(1,10);
//echo "<br/>";
//print_r($arr4);
//对数组操作的3个方法
//unset($arr3["name1"]);//根据下标来销毁数组中的元素
//count($arr3);//统计数组长度
//in_array("张三",$arr3);//判断元素是否在数组里
//split   join

//字符串操作
$str = "a,b,c,d";
$arrs = explode(",",$str);//explode == js里的split
print_r($arrs);
echo "<br/>";
echo implode("-",$arrs);//implode == js的 join
echo "<hr>";
//升序和降序
$arrs1 = ["a","b","1","s","q"];
sort($arrs1);//数字、字母进行排序(升序)
rsort($arrs1);//数字、字母进行排序(降序)
print_r($arrs1);
echo "<hr>";

$str1 = "Ss撒10";
echo strlen($str1);//统计字符串长度,一个中文字符占3个字节
echo "<br/>";
echo substr($str1,0,2);//参数一：拆分的字符串；二：拆分的开始位置；三：拆分的字节数
echo "<br/>";
$str2 = "D2Fsd2aDF1A";
echo strtolower($str2);//转换成小写
echo "<br/>";
echo strtoupper($str2);//转换成大写
echo "<br/>";
echo strpos($str2,"s");//返还查找字符在字符串中首次出现的位置
echo "<hr>";

$str3 = "Dsj54.sdn";
echo str_replace("s","at",$str3);//替换字符串中指定的字符
echo "<br/>";
echo strstr($str3,"5",true);//根据指定字符来分割字符串，默认取后半部分,设置true取前半部分。
echo "<br/>";
$str4 = "abcdefg";
echo ltrim($str4,"ab");//删前面字符
echo "<br/>";
echo rtrim($str4,"gf");//删后面字符
echo "<br/>";
echo strrev($str4);//反转字符串
echo "<hr>";
$str5 = "dskjg
qj354654";
echo $str5;
echo "<hr>";
echo nl2br($str5);//字符串换行时
echo "<hr>";
$str6 = "<font color='red'>q46544ds</font>";
echo $str6;
echo strip_tags($str6);//过滤字符串中的标签
echo "<br/>";
$str7 = "<font color='red'>esadqds</font>";
echo htmlspecialchars($str7);//不解析字符串中的标签
















?>