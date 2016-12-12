<?php
//读取
$xml = simplexml_load_file("news.xml");//参数：xml所在的路径
//print_r($xml->book2);
//$res = json_encode($xml);
//$list = json_decode($res,true);
//print_r($list);

//$res = $xml->asXML();
//print_r($res);

//添加储存；
$book3 = $xml->addChild("book3");//第一个参数：节点名称；第二个参数是添加的内容(可选)；
$book3->addChild("react","reactjs入门");
//print_r($xml);
//保存xml到文件
//$res = $xml->saveXML("news.xml");
//if($res){
//	echo "保存成功";
//}else{
//	echo "保存失败";
//}

//$str = "12345";
//echo $str[0];
//xml对象是可以循环的；
//foreach($xml as $k=>$v){
//	echo $v;
//}
$str = <<<AAA
<?xml version="1.0" encoding="utf-8"?>
<book>
       <nodejs>
		nodejs入门；
		</nodejs>
		<angular>
			angularjs入门
		</angular>
</book>
AAA;
$newXML = simplexml_load_string($str);
print_r($newXML);













?>