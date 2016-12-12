<?php
include "mysqli.php";
//print_r($_POST);
$username = $_POST["username"];
$pwd = $_POST["pwd"];
@$is_rember = $_POST['rember'];
$sql = "SELECT * FROM users WHERE username=$username AND pwd=$pwd";

$res = getlist($sql);
if(empty($res)){
//    登陆失败
    echo "<script>alert('用户名与密码不匹配');window.location.href='index.html'</script>";
//    header("Location:index.html");
}else{
//    登陆成功
    //存session
    session_start();
    $_SESSION['username']=$username;
    //判断是否要记住密码
    if($is_rember){
        //需要存
        setcookie('username',$username,time()+3600);
    }
    header("Location:index.html");

}





?>