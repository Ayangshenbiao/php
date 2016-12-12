<?php
//处理删除事件：
$url = $_GET['url']
$path = $_GET['path'];

if(is_file($url)){
    $res = unlink($url);
}else{
    $res = removeDir($url);
}

if($res){
//url=./test1/sss&path=./test1/
    //php跳转
    header("Location:file.php?path={$path}");
    //js跳转
//    echo "<script>window.location.href='file.php'</script>";

}else{
    echo "失败";
}

function removeDir($path){
    $arr = scandir($path);
    if(count($arr)>2){
    //目录不为空的情况
        for($i=2;$i<count($arr);$i++){
            $url = $path."/".$arr[$i];
            if(is_dir($url)){
            //为目录的情况
                removeDir($url);
            }else{
            //为文件的情况
                unlink($url);
            }
        }
    }
    //目录为空或不为空都要删除
    $res = rmdir($path);
    return $res;
}

?>