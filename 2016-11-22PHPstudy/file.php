<?php 
if(!empty($_GET)){
	$path = $_GET['path'].'/';
}else{
	$path  = "./";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<table border="" >
			<tr><th>文件名</th><th>创建时间</th><th>操作</th></tr>
			
			<?php
			    $arr = scandir($path);
			    foreach($arr as $k=>$v){
				$url = $path.$v;
            ?>
			<tr>
				<td>
					<?php 
					if(is_dir($url)){
					    echo "<a href='file.php?path={$url}'>{$v}</a>";
					}else{
						echo $v;
					}
					?>
				</td>
				<td>
					<?php
					//echo $url;
                    $res =  filectime($url);
                    $res = date("Y-m-d H:i:s",$res);
                    echo $res;
					?>
				</td>
				<td>
                    <a href="delete.php?url=<?php echo $url;?>&path=<?php echo $path;?>">删除</a>
				</td>
			</tr>
			<?php  }  ?>
		</table>
	</body>
</html>
