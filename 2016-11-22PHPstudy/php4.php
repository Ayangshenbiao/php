<?php
//php文件操作
//1.文件的操作；2.目录操作（文件夹操作）
//1.文件的操作
    //读取方式一
//$handle = fopen("te.txt","r");//打开文件获取资源
//$length= filesize("te.txt");//获取文件长度
////读取资源中的数据
//$res = fread($handle,22);//参数一是要操作的资源，二是读取的长度
//echo $res;
//fclose($handle);//关闭文件
//
//    //读取方式二
//$res = file("te.txt");//输出一个数组
//print_r($res);

//    //读取方式三
//$res1 = file_get_contents("te.txt");//可以当爬虫
////file_put_contents
//echo $res1
//echo "<hr>";

    //读取方式四
//$res2 = fopen("te.txt","r");
//$res3 = fgets($res2);//只能读取一行
//echo $res3;
//fclose($res2);

//$handle = fopen("te.txt","r");
//while(!feof($handle)){ //判断文件是否读取结束
//    $res = fgets($handle)."<br/>";
//    echo $res;
//}
//fclose($handle);

//function fileGet($path,$type){
//    $handle = fopen($path,$type);
//    $str = "";
//    while(!feof($handle)){
//        $str .= fgets($handle)."<br/>";
//    }
//    return $str;
//}
//echo fileGet("te.txt","r");

//文件写入
    //写入方式一
//$handle = fopen("te.txt","w");
//$res = fwrite($handle,"我是写入的内容");
//if($res){
//    echo "写入成功";
//}else{
//    echo "写入失败";
//}
//fclose($handle);
    //写入方式二
//$res = file_put_contents("a.txt","我是text");//有文件就覆盖，没就创建（max有权限问题）
//if($res){
//    echo "成功";
//}else{
//    echo "失败";
//}

//自制复制函数
//function myCopy($path,$dest){
//    $res = file_get_contents($path);
//    $res = file_put_contents($dest,$res);
//    if($res){
//        return true;
//    }else{
//        return false;
//    }
//}


//复制方法
//$res = copy("a.txt","t.txt");
//if($res){
//    echo "成功";
//}else{
//    echo "失败";
//}

//删除文件
//unlink("文件名");

//重命名
//$res = rename("a.txt","b.txt");
//if($res){
//    echo "1";
//}else{
//    echo "0";
//}

//对文件夹的操作
//创建文件夹
//$res = mkdir("test");
//if($res){
//    echo "1";
//}else{
//    echo "0";
//}

//读取文件夹
//$handle = opendir("./test");//打开文件夹
//$res = readdir($handle);
//$res1 = readdir($handle);
//$res2 = readdir($handle);
//$res3 = readdir($handle);
//echo $res;
//echo "<br/>";
//echo $res1;
//echo "<br/>";
//echo $res2;
//echo "<br/>";
//echo $res3;

//$handle = opendir("./test");//打开文件夹
//while($res = readdir($handle)){
//    $url = "./".$res;
////    如果是文件夹给个颜色
//    if(is_dir($url)){ //is_dir 判断是否是文件夹 is_file 判断是否是文件
//        echo "<font color='red'>".$res."</font><br/>";
//    }else{
//        echo $res."<br/>";
//    }
//}

//第二种方法 读取文件夹目录

//$arr = scandir("test");//扫描文件夹，输出一个数组
//
//foreach($arr as $k=>$v){
//    $arr[$k] = iconv("gbk","utf-8",$v)//设置编码格式
//}
//
//
////print_r($arr);
//foreach($arr as $k=>$v){
//    $url = "test/".$v;
//    if(is_file($url)){
//        echo "<font color='green'>".$v."<font><br/>";
//    }else{
//        echo "<font color='red'>".$v."<font><br/>";
//    }
//}


//删除文件夹
//$res = rmdir ("test1");//只能删除空文件夹
//if($res){
//    echo "1";
//}else{
//    echo "0";
//}

//删除非空文件夹
//function removeDir($path){
//    $arr = scandir($path);
//    if(count($arr)>2){
//    //目录不为空的情况
//        for($i=2;$i<count($arr);$i++){
//            $url = $path."/".$arr[$i];
//            if(is_dir($url)){
//            //为目录的情况
//                removeDir($url);
//            }else{
//            //为文件的情况
//                unlink($url);
//            }
//        }
//    }
//    //目录为空或不为空都要删除
//    $res = rmdir($path);
//    return $res;
//}
//
//$res = removeDir("test6");
//if($res){
//    echo "1";
//}else{
//    echo "0";
//}

//获取文件最后的创建时间
//$res = filectime("a.txt");
//echo date("Y-m-d H:i:s",$res);

//file_exists: 判断文件是否存在；
//if(!file_exists("test1")){
//    mkdir("test1");
//}

//$res = is_readable("a.txt");//是否可读
//echo $res;

//$res = is_writable("a.txt");//是否可写
//echo $res;

//$path = "test/未知文件夹/123.txt";
//$res = basename($path);//取到路径最后的文件名
//echo $res;

//$path = "test/未知文件夹/123.txt";
//$res = dirname($path);//取非文件名的部分
//echo $res;

//$path = "123.txt";
//$res = pathinfo($path);//获取路径的详细信息，数组
//print_r($res);

//修改文件权限
//chmod("test1",0777);
//执行权限(1);读取权限(4);可写权限(2);
//1.本机，2.管理员，3.所有人
//如果目录是手动创建的，不能用代码更改权限










?>