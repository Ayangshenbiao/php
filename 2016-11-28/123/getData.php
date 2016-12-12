<?php
include "mysqli.php";
//处理分页数据的php
//接收点击的当前页面；
$p = $_POST['p'];
//每页显示的条数
$perPage = $_POST['perPage'];
$sql = "SELECT * FROM news";
$list = getlist($sql);
$totalCount = count($list);
$startPage = ($p-1)*$perPage;
$sql2 = "SELECT * FROM news LIMIT $startPage,$perPage";
$lists = getlist($sql2);
//foreach($lists as $k=>$v){
//	$lists[$k]['newsTime'] = date("Y-m-d",$v['newsTime']);
//
//}

echo json_encode($lists);




?>