<?php
include "mysqli.php";
//处理添加的新闻
//接收到前台传来的数据
$title = $_POST['title'];
$content = $_POST['content'];
$newsTime = time();
$sql = "INSERT INTO news (title,content,newsTime) VALUES ('$title','$content',$newsTime)";
$res = add($sql);
if($res){
	$info['status'] = 1;
	$info['info'] = "添加成功"; 
}else{
	$info['status'] = 0;
	$info['info'] = "添加失败";	
}
echo json_encode($info);

?>