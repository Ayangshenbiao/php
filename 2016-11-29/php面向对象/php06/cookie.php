<?php
//存cookie
//$res = setcookie("username","张三",time()+3600);
//if($res){
//	echo "存入成功";
//}else{
//	echo "存入失败";
//}

//读取cookie
//print_r($_COOKIE['username']);

//销毁cookie
//方式一
//$res = setcookie("username");
//if($res){
// echo "销毁成功";	
//}else{
// echo "销毁失败";
//}
//方式二
//$res = setcookie("username","",time()-1);
//if($res){
// echo "销毁成功";		
//}else{
// echo "销毁失败";		
//}
//print_r($_COOKIE);


//存session
//开启session
session_start();
$_SESSION['username'] = "李四";


//取session
echo $_SESSION['username'];








?>