<?php
//存session
//开启session（重点）
session_start();
$_SESSION['username'] = "理事";

//获取session
echo $_SESSION['username'];

//销毁session : 因为关闭页面就可以销毁session,一个php无法演示（destroy.php）
unset($_SESSION['username']);//销毁指定
session_destroy();//销毁所有session
session_unset();//销毁所有session




?>