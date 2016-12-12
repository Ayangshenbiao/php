<?php
class Student{
	function doSome(){
		echo "上学";	
	}
}

class Source extends Student{
	function doSome(){
		echo "上班";
	}
}

function doSomeThing($obj){
	$obj->doSome();
}
$newStudent = new Student();
$newSource = new Source();

doSomeThing($newStudent);
echo "<br>";
doSomeThing($newSource);






?>