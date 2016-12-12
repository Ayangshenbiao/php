<?php
//php里的继承
//1.public 公有;2.protected(自身可访问，子类也可访问);3.private 私有的(自身可访问);
class Dad{
    public $name = "王五";
    private function kungfu(){
        echo "太极";
    }
    function pub(){
        self::kungfu();
    }
    protected function ss(){
        echo "ss";
    }
}

class Son extends Dad{
    public $name = "王六";

}
//实例化
$newSon = new Son();
$newSon -> pub();
//$newSon -> ss();


?>