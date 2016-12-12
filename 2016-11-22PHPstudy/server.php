<?php $a="ppp" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<h1>当前时间：<?php echo date("Y-m-d H:i:s",time());?></h1>
	<?php for($i=0;$i<5;$i++){ ?>
	<div>是是是是是是是是是</div>
	<?php } ?>
	<form action="sub.php" method="post">
		姓名：<input type="text" name="username"><br/>
		年龄：<input type="text" name="age"><br/>
		<input type="submit">
	</form>
	<?php echo $a; ?>
</body>
</html>