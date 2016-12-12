<?php
//php里的继承
//private:只能在类的自身访问
//protected:自身可以访问，子类可以访问
//public:自身可以访问，子类可以访问，外部可以访问；
class Dad{
	public $name = "王五";
	private function kungfu(){
		echo "太极";
	}
	protected function fun(){
		echo "高尔夫";
	}
	function pub(){
		self::fun();
	}
}
class Son extends Dad{
	public $name = "王六";
	function sonFun(){
		$this->fun();	
	}
	
}
//实例化
$newSon = new Son(); 
$newSon->sonFun();






?>