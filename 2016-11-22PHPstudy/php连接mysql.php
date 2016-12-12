<?php
// echo phpinfo();
// php5.5以下用mysql来连接(面向过程)，5.5以上用mysqli(面向过程/面向对象)

// 连接数据库
// 面向过程
// $link = mysqli_connect("localhost","root","","yang");
// if(mysqli_errno($link)){
// 	echo mysqli_errno($link);
// }else{
// 	echo "连接成功";
// }

//面向对象
// $mysqli = new mysqli("localhost","root","","yang");
// if($mysqli->errno){
// 	echo $mysqli->errno;
// }else{
// 	echo "连接又成功了";
// }


// 开始
// $link = mysqli_connect("localhost","root","","yang");
// if(mysqli_errno($link)){
// 	echo mysqli_errno($link);
// }else{
// 	echo "连接成功";
// }
// // sql语句
// $sql = "INSERT INTO users (username,age,pwd) VALUES ('王五',20,625464)";
// // 设置编码格式(设置中文) 
// // 方式一：
// mysqli_query($link,"set names utf8");
// // 方式二：
// mysqli_set_charset($link,"utf8");

// // 执行
// $res = mysqli_query($link,$sql);
// if($res){
// 	echo "1";
// }else{
// 	echo "0";
// }


// 封装添加函数（面向对象）
function add($sql){
	$mysqli = new mysqli("localhost","root","","yang");
	if($mysqli->errno){
		echo $mysqli->errno;
	}
	// 设置编码
	$mysqli->query("set names utf8");
	$res = $mysqli->query($sql);
	if($res){
		return true;
	}else{
		return false;
	}
}
// 封装添加函数（面向过程）
function adds($sql){
	$link = mysqli_connect("localhost","root","","yang");
	mysqli_query($link,"set names utf8");
	$res = mysqli_query($link,$sql);
	if($res){
		return true;
	}else{
		return false;
	}
}

// $name = '啊动';
// $age = 21;
// $pwd = 498764;                                      //引号
// $sql = "INSERT INTO users (username,age,pwd) VALUES ('$name',$age,$pwd)";
// $res = adds($sql);
// if($res){
// 	echo "1";
// }else{
// 	echo "0";
// }


// 更新数据库函数
function update($sql){
	$link = mysqli_connect("localhost","root","","yang");
	mysqli_query($link,"set names utf8");
	$res = mysqli_query($link,$sql);
	if($res){
		return true;
	}else{
		return false;
	}
}

// $sql = "UPDATE users SET username='万家' WHERE id=45";
// $res = update($sql);
// if($sql){
// 	echo "1";
// }else{
// 	echo "0";
// }

// 删除数据函数;  可以用更新来代替删除(假删)
function delete($sql){
	$link = mysqli_connect("localhost","root","","yang");
	mysqli_query($link,"set names utf8");
	$res = mysqli_query($link,$sql);
	if($res){
		return true;
	}else{
		return false;
	}
}

// $sql = "DELETE FROM users WHERE id=39";
// $res = delete($sql);
// if ($res) {
// 	echo "1";
// }else{
// 	echo "0";
// }

// 查询函数
function getlist($sql){
	$link = mysqli_connect("localhost","root","","yang");
	mysqli_query($link,"set names utf8");
	$res = mysqli_query($link,$sql);
	// 获取查询到的所有数据
	$list = mysqli_fetch_all($res);

	// 获取查询到的第一条数据
	// $list = mysqli_fetch_row($res);
	// 改变成获取所有
	// $arr = array();
	// while($list = mysqli_fetch_row($res)) {
	// 	$arr[]= $list;
	// }
	// return $arr;

	// mysqli_fetch_

	return $list;
	
}

$sql = "SELECT * FROM users";
$res = getlist($sql);
echo "<pre>";
print_r($res);
echo "</pre>";
















?>