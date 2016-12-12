<?php

//function test(){
////    公有属性
//    this.name = "张三",
//    this.kungfu = function(){
//        console.log("111");
//    }
////    私有属性
//    var age = 18;
//}

//常量 与变量的区别，只能被定义一次
define("AAA","你好",true);
//echo aaa;



class Person{
    public $height = "";
    //构造函数: 实例化后自动调用：类加载的时候调用
    function __construct($height){
//        echo '我是构造函数<br/>';
        $this->$height = $height;
    }
    //析构函数: 调用结束时候自动调用
    function __destruct(){
        echo '<br/>我是析构函数';
    }
    //定义属性 : 属性一定要加修饰符
    //修饰符三种：1.public 公有;2.protected(自身可访问，子类也可访问);3.private 私有的(自身可访问);
    public $name = "张三";
    //定义方法可以加修饰符，也可以不加；如果不加默认的就是public公有;
    function kungfu(){
        echo "太极";
    }
    //定义常量:只能定义一次；调用时可以不用实例化
    const NAME = "李四";
    //定义静态变量; 调用时也可以不用实例化
    static $a = "我是a";
    function test(){
        echo $this->name;
        self::kungfu();
    }


}

//.

//实例化
$newPerson = new Person();
//用" -> "来调用
//echo $newPerson->name;
echo $newPerson->test();


?>