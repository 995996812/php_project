<?php 
/**
 * 
 */
class MyDream
{
	var $name;
	var $age;
	var $edu;

	function __construct($p1,$p2,$p3){//构造方法,可以进行给定起始值的操作
		$this->name = $p1;
		$this->age = $p2;
		$this->edu = $p3;
	}

	function xiyifu(){
		echo "<br /> {$this->age}岁的{$this->edu}学历的{$this->name}在洗衣服";
	}

	function zuofan(){
		echo "<br /> {$this->age}岁的{$this->edu}学历的{$this->name}在做饭";
	}

	static $v1 = "我日啊,这是个什么东西!";

	static function method($name){
		//self 代表类本身
		echo self::$v1,$name;
	}

}

/**
 * 
 */
class Dream extends MyDream
{
	function what(){
		echo "111";
	}	
	
}


	$obj1 = new MyDream("明明",16,"初中");
	$obj1->xiyifu();
	$obj1->zuofan();

	$obj1->name = "小红";//赋值操作

	$obj1->xiyifu();
	$obj1->zuofan();// ->  为调用方法

	//调用静态属性
	echo "<br />";
	echo MyDream::$v1;
	echo "<br />";
	//调用静态方法
	MyDream::method("王刚");

	$obj2 = new Dream("灭霸兄弟",222,"初中");

	$obj2->xiyifu();
 ?>