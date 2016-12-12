<?php
//function test(){
//	this.name = "张三";
//	this.kungfu = function(){
//		alert("太极");
//	}
//	var age = 18;
//}
$a = 1;
$a = 2;

//define("AAA", "你好",true);
//define("AAA", "hello",true);
//echo aaa;




//类的定义
class Person{
	public $height = "";
	//构造函数：实例化后自动调用；类加载的时候调用
	function __construct($height){
		$this->height = $height;
		
	}
	//析构函数：调用结束的时候自动调用；
	function __destruct(){
//		echo "我是析构函数";
		echo $this->height;
	}
	
	
	//定义属性：一定要加修饰符
	//修饰符三种：1.public 公有；2.protected  被保护的；3.private 私有的
	public $name = "张三";
	//定义方法可以加修饰符 也可以不加；如果不加默认的就是public；
	public function kungfu(){
		echo "太极";
	}
	//定义常量：类里只能被定义一次；调用的时候不用实例化
	const NAME = "李四";
	//定义静态变量：调用的时候不用实例化
	static $a = "我是a";
	function test(){
		echo self::$a;
		$this->kungfu();
	}
	
}

//echo Person::NAME;
//echo Person::$a;
////实例化
$newPerson = new Person("175cm");
//调用   用“->”来调用；
$newPerson->test();
$newPerson->kungfu();
echo "<br>";
//echo $newPerson::NAME;







?>