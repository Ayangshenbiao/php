<?php
//读取
$xml = simplexml_load_file("new.xml");
//print_r($xml->book2);
$res = json_encode($xml);
$list = json_decode($res,true);
//print_r($list);

$res = $xml->asXML();
print_r($res);






?>