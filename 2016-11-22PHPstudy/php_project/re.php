<?php

//$data['username']=$_POST['username'];
//$data['pwd']=$_POST['pwd'];
//$data['sex']=$_POST['sex'];
//$data['fun']=$_POST['fun'];
//$data['city']=$_POST['city'];

//处理文件:转存文件到指定路径
//创建储存文件的目录
if(file_exists("uploads")){
    mkdir("uploads");

}
$tempPath = $_FILES['img']['tmp_name'];
$newName = $_FILES['img']['name'];
//copy($tempPath,"./uploads/{$newName}");

move_uploaded_file($tempPath,"./uploads/{$newName}");






?>